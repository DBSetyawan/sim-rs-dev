import React from 'react';
import Magnifier from 'react-magnifier';

interface Props {
  file: string;
  boxSide: string;
  updateField: (field: string, value: string) => void;
}

const Previewer = ({ file, boxSide, updateField }: Props) => {
  const side = boxSide.toLowerCase();

  return (
    <div className="previewer">
      <div className="title">
        <h2>{boxSide}</h2>
        <button
          onClick={() => {
            updateField(`${side}FilePreview`, '');
            updateField(`${side}File`, '');
          }}
        >
          <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path
              d="m10 20c5.5228 0 10-4.4772 10-10 0-5.5228-4.4772-10-10-10-5.5228 0-10 4.4772-10 10 0 5.5228 4.4772 10 10 10z"
              clipRule="evenodd"
              fill="#DD5E4A"
              fillRule="evenodd"
              opacity=".1"
            />
            <path
              d="m13.536 6.4642c-0.3254-0.32543-0.853-0.32543-1.1785 0l-2.357 2.357-2.357-2.357c-0.32544-0.32543-0.85308-0.32543-1.1785 0-0.32544 0.32544-0.32544 0.85308 0 1.1785l2.357 2.357-2.357 2.357c-0.32544 0.3254-0.32544 0.8531 0 1.1785 0.32543 0.3254 0.85307 0.3254 1.1785 0l2.357-2.357 2.357 2.357c0.3255 0.3254 0.8531 0.3254 1.1785 0 0.3255-0.3254 0.3255-0.8531 0-1.1785l-2.357-2.357 2.357-2.357c0.3255-0.32544 0.3255-0.85308 0-1.1785z"
              clipRule="evenodd"
              fill="#DD5E4A"
              fillRule="evenodd"
            />
          </svg>
        </button>
      </div>

      <div className="preview-container">
        <Magnifier
          className="preview-magnifier"
          mgHeight={250}
          mgWidth={250}
          src={file}
          width={'60%'}
          zoomFactor={0.9}
        />
      </div>
    </div>
  );
};

export default Previewer;
