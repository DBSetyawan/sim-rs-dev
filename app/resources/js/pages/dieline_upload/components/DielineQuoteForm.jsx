import React, { Component } from 'react';
import Dropzone from 'react-dropzone';
import API from '../../../components/api';
import { customNotyAlert } from '../../../components/alert';
import { sendCustomQuoteRequest } from '../../../lib/analytics';
import TextInput from '../../page/consultation_form/TextInput';
import TextArea from '../../page/consultation_form/TextArea';

class DielineQuoteForm extends Component {
  constructor(props) {
    super(props);

    this.state = {
      email: '',
      firstName: '',
      lastName: '',
      message: '',
      quantity: 300,
      files: [],
    };

    this.handleSubmitQuote = this.handleSubmitQuote.bind(this);
    this.setFormValues = this.setFormValues.bind(this);
    this.clearForm = this.clearForm.bind(this);
  }

  setQuantityError(value) {
    this.setState({ hasQuantityError: value });
  }

  setFormValues(e) {
    this.setState({
      [e.currentTarget.name]: e.currentTarget.value,
    });
  }

  stateIsValid() {
    return (
      this.state.firstName.trim().length > 0 &&
      this.state.lastName.trim().length > 0 &&
      this.state.email.length > 0 &&
      this.state.quantity > 0
    );
  }

  clearForm() {
    document.getElementById('dieline-quote-form').reset();
    this.setState({
      firstName: '',
      lastName: '',
      email: '',
      quantity: 300,
      message: '',
      files: [],
    });
  }

  handleSubmitQuote(e) {
    e.preventDefault();

    // Extra empty field to satisfy API
    const customer = {
      company: '',
      email: this.state.email,
      first_name: this.state.firstName,
      last_name: this.state.lastName,
      phone: '',
      source: 'dieline_upload_custom_request',
      zip_code: '',
    };

    const packageDetails = {
      artwork_link: '',
      dimensions: '',
      material: '',
      package_style: 'other',
      quantity: this.state.quantity,
      snapshot_url: 'no-snapshot(consultation)',
    };

    const shippingDetails = {
      desiredDeliveryDate: null,
      note: this.state.message,
    };

    const files = this.state.files;

    API.submitCustomQuote(
      customer,
      packageDetails,
      shippingDetails,
      false,
      null,
      'no-snapshot(consultation)',
      files,
    ).then(() => {
      this.clearForm();

      customNotyAlert(
        '',
        'success',
        'topRight',
        false,
        3500,
        `
          <div class='lead-alert'>
            <h5>Dieline request sent!</h5>
            <p>Your request has been sent. We're excited to chat.</p>
          </div>
        `,
      );

      sendCustomQuoteRequest();
    });
  }

  dropHandler(files) {
    this.setState({ files });
  }

  render() {
    return (
      <form id="dieline-quote-form" className="lead-form" onSubmit={this.handleSubmitQuote}>
        <div className="form-layout__rows">
          <div className="row row--half">
            <TextInput
              label={'First Name'}
              fieldId="firstName"
              handleOnChange={this.setFormValues}
            />
            <TextInput label={'Last Name'} fieldId="lastName" handleOnChange={this.setFormValues} />
          </div>
          <div className="row row--half">
            <TextInput label={'Email'} fieldId="email" handleOnChange={this.setFormValues} />
            <TextInput label={'Quantity'} fieldId="quantity" handleOnChange={this.setFormValues} />
          </div>
          <div className="row row--half">
            <TextArea
              fieldId="message"
              handleOnChange={this.setFormValues}
              label={'Message'}
              isOptional
            />
            <div className="form__field">
              <label className="form__label" htmlFor="dieline-dropzone">
                Upload <span className="sub-text">Optional</span>
                <Dropzone
                  accept="image/png"
                  className="dieline-dropzone"
                  id="dieline-dropzone"
                  onDrop={(files) => this.dropHandler(files)}
                  required
                />
                {this.state.files.length > 1 ? (
                  <span className="upload-label">{this.state.files.length} files uploaded</span>
                ) : (
                  <span className="upload-label">
                    {this.state.files[0] && this.state.files[0].name}
                  </span>
                )}
              </label>
            </div>
          </div>
        </div>

        <button className="pbtn pbtn--primary" disabled={!this.stateIsValid()} type="submit">
          Let’s talk
        </button>
      </form>
    );
  }
}

export default DielineQuoteForm;
