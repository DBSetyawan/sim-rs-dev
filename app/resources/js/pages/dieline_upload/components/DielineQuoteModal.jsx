import React from 'react';
import ReactModal from 'react-modal';
import PropTypes from 'prop-types';
import DielineQuoteForm from './DielineQuoteForm';

const DielineQuoteModal = (props) => (
  <ReactModal
    appElement={props.modalContainer}
    className="dieline-quote__modal request-quote__modal--restock"
    isOpen={props.isOpen}
    overlayClassName="modal-overlay modal-overlay--primary"
  >
    <button className="modal__close-btn" onClick={props.toggleModal}>
      <i className="fa fa-times" />
    </button>

    <div className="dieline-quote-wrapper">
      <div className="dieline-quote-wrapper__header">
        <img
          alt="Custom Dieline Quote"
          className="dieline-quote__image"
          src="/images/ico-designs.svg"
        />
        <h2 className="dieline-quote__title">Looking for something custom?</h2>
        <p className="dieline-quote__copy">
          Maybe we can help! Send us your contact details and any artwork you may have (even a
          sketch on a napkin is a start). We&apos;ll look it over and see if we can make it a
          reality.
        </p>
      </div>
      <div className="dieline-quote-wrapper__body">
        <DielineQuoteForm />
      </div>
    </div>
  </ReactModal>
);

DielineQuoteModal.propTypes = {
  toggleModal: PropTypes.func.isRequired,
  modalContainer: PropTypes.object.isRequired,
  isOpen: PropTypes.bool.isRequired,
};

export default DielineQuoteModal;
