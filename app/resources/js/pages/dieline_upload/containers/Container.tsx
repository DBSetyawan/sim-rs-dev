import { Dispatch } from 'redux';
import { connect } from 'react-redux';
import UploadDashboard from '../components/UploadDashboard';
import { StoreState, Material } from '../types';
import { actions, Action } from '../actions';
import {
  getFlatLength,
  getFlatWidth,
  getLength,
  getWidth,
  getDepth,
  getMaterial,
  getWhiteInk,
  getQuantity,
  getNotes,
  getExteriorFile,
  getExteriorFilePreview,
  getInteriorFile,
  getInteriorFilePreview,
  getBoxType,
  getCSRFToken,
  getStatusMessage,
  getDielineSubmitted,
  getFirstName,
  getLastName,
  getEmail,
  getShowFinishes,
  getFinish,
  getFinishOptions,
  getSinglepassFinishForBoxTypeAndMaterial,
} from '../selectors';

const mapStateToProps = (state: StoreState) => ({
  boxType: getBoxType(state),
  flatLength: getFlatLength(state),
  flatWidth: getFlatWidth(state),
  length: getLength(state),
  width: getWidth(state),
  depth: getDepth(state),
  material: getMaterial(state),
  whiteInk: getWhiteInk(state),
  quantity: getQuantity(state),
  notes: getNotes(state),
  exteriorFile: getExteriorFile(state),
  exteriorFilePreview: getExteriorFilePreview(state),
  interiorFile: getInteriorFile(state),
  interiorFilePreview: getInteriorFilePreview(state),
  statusMessage: getStatusMessage(state),
  csrfToken: getCSRFToken(state),
  firstName: getFirstName(state),
  lastName: getLastName(state),
  email: getEmail(state),
  dielineSubmitted: getDielineSubmitted(state),
  showFinishes: getShowFinishes(state),
  finish: getFinish(state),
  finishOptions: getFinishOptions(state),
  singlepassFinishForBoxTypeAndMaterial: getSinglepassFinishForBoxTypeAndMaterial(state),
});

const mapDispatchToProps = (dispatch: Dispatch<Action>) => ({
  updateField: (field: string, value: string | boolean) => {
    dispatch(actions.UPDATE_FIELD({ field, value }));
  },
  updateSubmitStatus: (status: boolean) => {
    dispatch(actions.UPDATE_SUBMIT_STATUS({ status }));
  },
  updateBoxType: (boxType: string) => {
    dispatch(actions.UPDATE_BOX_TYPE({ boxType }));
  },
  updateMaterial: (material: Material) => {
    dispatch(actions.UPDATE_MATERIAL({ material }));
  },
});

export default connect(
  mapStateToProps,
  mapDispatchToProps,
)(UploadDashboard);
