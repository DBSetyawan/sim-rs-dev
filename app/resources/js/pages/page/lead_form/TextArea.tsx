import * as React from 'react';

interface Props {
  fieldId: string;
  label: string;
  handleOnChange: (event: object) => void;
  isOptional?: boolean;
}

const TextArea = ({ fieldId, label, handleOnChange, isOptional }: Props) => (
  <div className="form__field">
    <label className="form__label" htmlFor={fieldId}>
      {label}
      {isOptional && <span className="sub-text">Optional</span>}
      <textarea
        className="form__text-input"
        id={fieldId}
        name={fieldId}
        onChange={(e) => handleOnChange(e)}
      />
    </label>
  </div>
);

export default TextArea;
