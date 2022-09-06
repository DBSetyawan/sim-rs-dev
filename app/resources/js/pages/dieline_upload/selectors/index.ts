import { createSelector } from 'reselect';
import { isEqual } from 'lodash';

import { StoreState } from '../types';
import { FINISHES_FOR_MATERIAL } from '../constants';

export const getBoxType = (state: StoreState) => state.boxType;
export const getFlatLength = (state: StoreState) => state.flatLength;
export const getFlatWidth = (state: StoreState) => state.flatWidth;
export const getLength = (state: StoreState) => state.length;
export const getWidth = (state: StoreState) => state.width;
export const getDepth = (state: StoreState) => state.depth;
export const getMaterial = (state: StoreState) => state.material;
export const getWhiteInk = (state: StoreState) => state.whiteInk;
export const getQuantity = (state: StoreState) => state.quantity;
export const getNotes = (state: StoreState) => state.notes;
export const getExteriorFile = (state: StoreState) => state.exteriorFile;
export const getExteriorFilePreview = (state: StoreState) => state.exteriorFilePreview;
export const getInteriorFile = (state: StoreState) => state.interiorFile;
export const getInteriorFilePreview = (state: StoreState) => state.interiorFilePreview;
export const getStatusMessage = (state: StoreState) => state.statusMessage;
export const getCSRFToken = (state: StoreState) => state.csrfToken;
export const getDielineSubmitted = (state: StoreState) => state.dielineSubmitted;
export const getFirstName = (state: StoreState) => state.firstName;
export const getLastName = (state: StoreState) => state.lastName;
export const getEmail = (state: StoreState) => state.email;
export const getFinish = (state: StoreState) => state.finish;
export const getStockSizes = (state: StoreState) => state.stock_sizes;
export const getSinglepassFinishForBoxTypeAndMaterial = (state: StoreState) =>
  state.singlepass_finish_for_box_type_and_material;
export const getFinishOptions = createSelector(getBoxType, getMaterial, (boxType, material) => {
  if (boxType !== 'mailerBox') return [];
  return FINISHES_FOR_MATERIAL[material];
});

export const getStockSizesForCurrentBoxType = createSelector(
  getBoxType,
  getStockSizes,
  (boxType, stockSizes) => stockSizes[boxType],
);

export const getCurrentDimensions = createSelector(
  getLength,
  getWidth,
  getDepth,
  (length, width, depth) => [length, width, depth].map(Number),
);

export const getIsStockSize = createSelector(
  getStockSizesForCurrentBoxType,
  getCurrentDimensions,
  (stockSizesForBoxType, currentDimensions) =>
    stockSizesForBoxType.some((stockSize) => isEqual(stockSize, currentDimensions)),
);

export const getShowFinishes = createSelector(
  getBoxType,
  getMaterial,
  (boxType, material) => boxType === 'mailerBox' && material === 'dreamcoat',
);
