import * as React from 'react';
import Dropzone from 'react-dropzone';
import { processArt } from '../api/index';

interface Props {
  updateField: (field: string, value: string) => void;
  boxSide: string;
}

const Uploader = ({ updateField, boxSide }: Props) => {
  const dropHandler = (files: [File]) => {
    if (files.length < 1) {
      updateField(
        'statusMessage',
        'Unsupported file extension. Confirm the file type and please try again. Or send us your artwork, material choice and the quantity you would like to order. You can email us for a quote at contact@packlane.com',
      );
      return;
    }
    const side = boxSide.toLowerCase();
    processArt(files[0])
      .then((response) => {
        updateField(`${side}FilePreview`, response.data.preview);
        updateField(`${side}File`, response.data.file);
      })
      .catch((_error) => {
        updateField(
          'statusMessage',
          "We apologize but we're unable to process this file. Please send us your artwork, material choice and the quantity you would like to order. You can email us for a quote at contact@packlane.com",
        );
      });
  };

  return (
    <div className="uploader">
      <h2>{boxSide}</h2>

      <div className="dropzone-container">
        <div className="dropzone-message">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 847 1058.75"
            fillRule="evenodd"
            clipRule="evenodd"
            shapeRendering="geometricPrecision"
            textRendering="geometricPrecision"
            imageRendering="optimizeQuality"
          >
            <path d="M317 18h213v299h299v213H530v299H317V530H18V317h299z" fill="#474E66" />
          </svg>
          <p className="dropzone-message__title">
            <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M15 8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" stroke="#2B46A0" strokeWidth="2" />
              <path stroke="#2B46A0" strokeWidth="2" d="M8 8h11v11H8z" />
            </svg>
            {`Upload your ${boxSide} file`.toUpperCase()}
          </p>
          <p className="dropzone-message__subtitle">.ai .pdf .eps</p>
        </div>
        <Dropzone
          className="dropzone"
          style={{}}
          required
          accept=".ai, .pdf, .eps"
          onDrop={(files: [File]) => dropHandler(files)}
        />
      </div>
    </div>
  );
};

export default Uploader;
