import React, { Component } from 'react';
import PropTypes from 'prop-types';
import { connect } from 'react-redux';
import { getDielineSubmitted } from '../selectors';

class ConfirmationModal extends Component {
  renderSuccessModal() {
    return (
      <div className={`dieline-modal dieline-modal__confirmation`}>
        <a className="close" href="/dieline-upload">
          <img alt="close" src="/images/close.svg" />
        </a>
        <header className="dieline-modal__header">
          <img alt="confirmation" src="/images/confirmation.svg" />
          <h2>Thank you</h2>
        </header>
        <span className="divider" />
        <p>We&apos;ll look this over and send you a checkout link</p>
        <p>
          <small>
            PS. Don&apos;t worry, if we have questions during review, we&apos;ll reach out!
          </small>
        </p>
        <a className="btn btn--blue" href="/dieline-upload">
          Close this window
        </a>
      </div>
    );
  }

  renderModal() {
    return (
      <div className="">
        <div className="modal__overlay" />
        <div className="modal__container dieline-modal">{this.renderSuccessModal()}</div>
      </div>
    );
  }

  render() {
    return <div>{this.props.dielineSubmitted ? this.renderModal() : null}</div>;
  }
}

ConfirmationModal.propTypes = {
  dielineSubmitted: PropTypes.bool.isRequired,
};

const mapStateToProps = (state) => ({
  dielineSubmitted: getDielineSubmitted(state),
});

export default connect(mapStateToProps)(ConfirmationModal);
