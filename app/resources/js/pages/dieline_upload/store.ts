import createStore from '../../lib/redux/create_store';
import reducers from './reducers';
import { BOX_TYPES, BOX_MATERIALS, FOLDING_CARTON_BOX_MATERIALS } from './constants';
import { camelCase } from 'lodash';

const setType = () => {
  const urlParams = new URLSearchParams(window.location.search);
  return urlParams.get('box_type') ? camelCase(urlParams.get('box_type')) : BOX_TYPES[0];
};

const setMaterial = () => {
  const urlParams = new URLSearchParams(window.location.search);
  return urlParams.get('box_type') === 'folding-carton'
    ? FOLDING_CARTON_BOX_MATERIALS[0]
    : BOX_MATERIALS[0];
};

const store = createStore(reducers, {
  initialStore: {
    boxType: setType(),
    flatLength: '',
    flatWidth: '',
    length: '',
    width: '',
    depth: '',
    material: setMaterial(),
    whiteInk: false,
    quantity: '',
    notes: '',
    exteriorFile: '',
    exteriorFilePreview: '',
    interiorFile: '',
    interiorFilePreview: '',
    statusMessage: '',
    dielineSubmitted: false,
    finish: '',
  },
  mergeInitialStores: true,
});

export default store;
