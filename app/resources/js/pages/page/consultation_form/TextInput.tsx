import * as React from 'react';
import classNames from 'classnames';

interface Props {
  fieldId: string;
  half?: boolean;
  handleOnChange: (event: object) => void;
  isOptional?: boolean;
  label: string;
}

const TextInput = ({ fieldId, half, handleOnChange, isOptional, label }: Props) => (
  <div className={classNames('form__field', { 'form__field--half': half })}>
    <label className="form__label" htmlFor={fieldId}>
      {label}
      {isOptional && <span className="sub-text">Optional</span>}
      <input
        className="form__text-input"
        id={fieldId}
        name={fieldId}
        onChange={(e) => handleOnChange(e)}
        type="text"
      />
    </label>
  </div>
);

export default TextInput;
