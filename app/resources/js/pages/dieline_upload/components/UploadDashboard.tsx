import React, { Component } from 'react';

import { PrintingFinish } from 'js/lib/types/generated/Enums';

import Previewer from './Previewer';
import SidePanel from './SidePanel';
import Uploader from './Uploader';
import StatusDisplay from './StatusDisplay';
import DielineQuoteModal from './DielineQuoteModal';
import ConfirmationModal from './ConfirmationModal';

import { Side, BoxType } from '../constants';
import { Material, SinglepassFinishForBoxTypeAndMaterial } from '../types';

interface Props {
  boxType: string;
  flatLength: string;
  flatWidth: string;
  length: string;
  width: string;
  depth: string;
  material: Material;
  whiteInk: boolean;
  quantity: string;
  notes: string;
  exteriorFile: string;
  interiorFile: string;
  exteriorFilePreview: string;
  interiorFilePreview: string;
  csrfToken: string;
  statusMessage: string | null;
  dielineSubmitted: boolean;
  updateBoxType: (boxType: string) => void;
  updateField: (field: string, value: string | boolean) => void;
  updateSubmitStatus: (status: boolean) => void;
  updateMaterial: (material: Material) => void;
  showFinishes: boolean;
  finish: PrintingFinish;
  finishOptions: PrintingFinish[];
  singlepassFinishForBoxTypeAndMaterial: SinglepassFinishForBoxTypeAndMaterial;
}

type State = {
  modalOpen: boolean;
};

const renderInteriorUploader = (
  boxType: string,
  interiorFilePreview: string,
  updateField: (field: string, value: string) => void,
) => {
  const showInteriorPreview = boxType !== BoxType.FoldingCarton && interiorFilePreview;
  const showInteriorUploader = boxType !== BoxType.FoldingCarton && boxType !== BoxType.Econoflex;

  if (showInteriorPreview) {
    return (
      <Previewer boxSide={Side.Interior} file={interiorFilePreview} updateField={updateField} />
    );
  }

  if (showInteriorUploader) {
    return <Uploader boxSide={Side.Interior} updateField={updateField} />;
  }

  return null;
};

class UploadDashboard extends Component<Props, State> {
  constructor(props: Props) {
    super(props);

    this.state = {
      modalOpen: false,
    };

    this.toggleModal = this.toggleModal.bind(this);
  }

  toggleModal() {
    this.setState({
      modalOpen: !this.state.modalOpen,
    });
  }

  render() {
    const { exteriorFilePreview, interiorFilePreview, ...sidePanelProps } = this.props;
    const { statusMessage, updateField } = this.props;
    const dielineContainer = document.getElementById('dieline-upload-container');

    return (
      <div className="dashboard-container">
        <ConfirmationModal />
        <StatusDisplay statusMessage={statusMessage} updateField={updateField} />

        <div className="upload-container">
          {exteriorFilePreview ? (
            <Previewer
              boxSide={Side.Exterior}
              file={exteriorFilePreview}
              updateField={updateField}
            />
          ) : (
            <Uploader boxSide={Side.Exterior} updateField={updateField} />
          )}

          {renderInteriorUploader(this.props.boxType, interiorFilePreview, updateField)}

          <div className="footer">
            <div className="footer-message">
              <p>Don&apos;t have a dieline?</p>
              <p>
                <span className="emphasized">
                  <a href="/dieline-request">Request a dieline</a> or{' '}
                  <a href="/#choose-style">start designing</a> on our 3D builder.
                </span>
              </p>
            </div>
          </div>
        </div>

        <SidePanel {...sidePanelProps} toggleModal={this.toggleModal} />
        <DielineQuoteModal
          isOpen={this.state.modalOpen}
          modalContainer={dielineContainer}
          toggleModal={this.toggleModal}
        />
      </div>
    );
  }
}

export default UploadDashboard;
