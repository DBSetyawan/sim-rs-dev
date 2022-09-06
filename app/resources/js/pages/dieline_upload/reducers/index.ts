import { StoreState } from '../types';
import { actions, Action } from '../actions';
import {
  BOX_MATERIALS,
  FOLDING_CARTON_BOX_MATERIALS,
  ECONOFLEX_BOX_MATERIALS,
  FINISHES_FOR_MATERIAL,
} from '../constants';
import { getIsStockSize } from '../selectors';

interface StagingObject {
  [key: string]: string;
}

export default (state: StoreState, action: Action): StoreState =>
  actions.match(action, {
    UPDATE_FIELD: ({ field, value }) => {
      const newState = {
        ...state,
        [field]: value,
      };

      const dimensions = ['length', 'width', 'depth'];
      if (dimensions.includes(field) && !getIsStockSize(newState)) {
        return {
          ...newState,
          finish: null,
        };
      }

      return newState;
    },
    UPDATE_SUBMIT_STATUS: ({ status }) => ({
      ...state,
      dielineSubmitted: status,
    }),
    UPDATE_MATERIAL: ({ material }) => {
      const newState = {
        ...state,
        material,
      };

      if (!getIsStockSize(newState)) {
        return {
          ...newState,
          finish: null,
        };
      }

      return {
        ...state,
        material,
        finish: FINISHES_FOR_MATERIAL[material][0],
      };
    },
    UPDATE_BOX_TYPE: ({ boxType }) => {
      const stateStaging: StagingObject = {};

      stateStaging.boxType = boxType;

      switch (boxType) {
        case 'foldingCarton':
          stateStaging.material = FOLDING_CARTON_BOX_MATERIALS[0];
          break;
        case 'econoflexBox':
          stateStaging.material = ECONOFLEX_BOX_MATERIALS[0];
          break;
        default:
          stateStaging.material = BOX_MATERIALS[0];
      }

      stateStaging.finish = null;

      return {
        ...state,
        ...stateStaging,
      };
    },
    default: () => state,
  });
