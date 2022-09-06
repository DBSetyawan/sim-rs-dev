import axios from 'axios';
import store from '../store';
import { StoreState } from '../types';
import { REQUIRED_FIELDS, MINIMUM_QUANTITY } from '../constants';
import {
  getBoxType,
  getLength,
  getWidth,
  getDepth,
  getMaterial,
  getWhiteInk,
  getQuantity,
  getNotes,
  getExteriorFile,
  getInteriorFile,
  getExteriorFilePreview,
  getInteriorFilePreview,
  getCSRFToken,
  getFinish,
} from '../selectors';
import { PrintingFinish } from 'js/lib/types/generated/Enums';

interface Payload {
  [key: string]: string | null;
  boxType: string;
  length: string | null;
  width: string | null;
  depth: string | null;
  material: string;
  whiteInk: string;
  quantity: string | null;
  notes: string;
  exteriorFile: string;
  interiorFile: string;
  exteriorFilePreview: string;
  interiorFilePreview: string;
  finish: PrintingFinish;
}

export const processArt = (file: File) => {
  const state = store.getState();

  const formData = new FormData();
  formData.append('file', file);

  return axios
    .post('/dieline-upload/art', formData, {
      headers: {
        'Content-Type': 'multipart/form-data',
        'x-csrf-token': getCSRFToken(state),
      },
    })
    .then((response) => response)
    .catch((error) => {
      throw new Error('asset upload error');
    });
};

export const processRequest = () => {
  const formData = new FormData();
  const state = store.getState();
  const payload = createPayload(state);
  if (!payloadIsValid(payload)) {
    throw new Error(
      `Please ensure you've uploaded at least one dieline file and completed all form fields`,
    );
  }

  Object.keys(payload).forEach((key) => {
    formData.append(key, payload[key]);
  });

  return axios
    .post('/dieline-upload', formData, {
      headers: {
        'Content-Type': 'multipart/form-data',
        'x-csrf-token': getCSRFToken(state),
      },
    })
    .then((response) => response)
    .catch((_error) => {
      throw new Error('Unable to process request');
    });
};

const createPayload = (state: StoreState): Payload => ({
  boxType: getBoxType(state),
  length: getLength(state),
  width: getWidth(state),
  depth: getDepth(state),
  material: getMaterial(state),
  whiteInk: getWhiteInk(state).toString(),
  quantity: getQuantity(state),
  notes: getNotes(state),
  exteriorFile: getExteriorFile(state),
  interiorFile: getInteriorFile(state),
  exteriorFilePreview: getExteriorFilePreview(state),
  interiorFilePreview: getInteriorFilePreview(state),
  finish: getFinish(state),
});

const isValidQuantity = (payload: Payload) => {
  var quantity = parseInt(payload.quantity);
  if (payload.material === 'dreamcoat' && payload.finish === 'gloss') {
    return quantity >= 15;
  } else {
    return quantity >= MINIMUM_QUANTITY[payload.boxType];
  }
};

const payloadIsValid = (payload: Payload) => {
  let invalidFields: string[] = [];

  Object.keys(payload).forEach((field) => {
    if (REQUIRED_FIELDS.includes(field) && !payload[field]) {
      invalidFields.push(field);
    }
  });

  if (!isValidQuantity(payload)) {
    invalidFields.push('quantity');
  }

  if (!payload.exteriorFile && !payload.interiorFile) {
    invalidFields = [...invalidFields, ...['exteriorFile', 'interiorFile']];
  }

  return invalidFields.length === 0;
};
