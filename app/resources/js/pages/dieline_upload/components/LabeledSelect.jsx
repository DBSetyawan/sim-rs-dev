import React, { Component } from 'react';
import PropTypes from 'prop-types';
import classNames from 'classnames';
import ClickOutsideHandler from 'js/lib/react/components/ClickOutsideHandler.jsx';

class LabeledSelect extends Component {
  constructor(props) {
    super(props);
    this.state = { dropdownOpen: false };
  }

  handleValueChange(newValue) {
    const { onChange, value } = this.props;
    if (value !== newValue) {
      onChange(newValue);
    }
    this.setState({ dropdownOpen: false });
  }

  selectedValueLabel() {
    const { value, options } = this.props;
    const selectedOption = options.find((option) => option.value === value);
    if (selectedOption) {
      return selectedOption.label;
    } else {
      throw new Error(`labeled select recieved ${value} but there is no option for that value`);
    }
  }

  static renderArrowSvg() {
    return (
      <svg
        width="10"
        height="6"
        viewBox="0 0 10 6"
        version="1.1"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          stroke="#2b46a0"
          transform="rotate(-90 5 2)"
          d="M2 -2L6 2.00923077 2.02 6"
          strokeWidth="1.5"
          fill="none"
          fillRule="evenodd"
        />
      </svg>
    );
  }

  renderOptionsList() {
    const { dropdownOpen } = this.state;
    if (!dropdownOpen) return null;

    const { options, value } = this.props;
    const listItems = options.map((option) => (
      <button
        className={classNames('dropdown__item list__item', 'select__item', {
          'select__item--active': value === option.value,
          'select__item--right': value === option.value,
        })}
        key={option.value}
        onClick={() => {
          this.handleValueChange(option.value);
        }}
        value={option.value}
      >
        <p>{option.label}</p>
      </button>
    ));

    return <ul className="dropdown__list select list">{listItems}</ul>;
  }

  render() {
    const { label } = this.props;
    const { dropdownOpen } = this.state;
    return (
      <ClickOutsideHandler
        toClose={() => {
          this.setState({ dropdownOpen: false });
        }}
      >
        <div className="labeled-select">
          <span className="labeled-select__label">{label}</span>
          <div className="labeled-select__dropdown">
            <div
              className={classNames('dropdown', {
                'dropdown--open': dropdownOpen,
              })}
            >
              <button
                className="dropdown__active"
                onClick={() => {
                  this.setState({ dropdownOpen: !dropdownOpen });
                }}
              >
                <span className="dropdown__active-text">{this.selectedValueLabel()}</span>
                <span className="rd-i dropdown__active-arrow">
                  {LabeledSelect.renderArrowSvg()}
                </span>
              </button>
              {this.renderOptionsList()}
            </div>
          </div>
        </div>
      </ClickOutsideHandler>
    );
  }
}

LabeledSelect.propTypes = {
  label: PropTypes.string.isRequired,
  options: PropTypes.arrayOf(
    PropTypes.shape({
      value: PropTypes.any.isRequired,
      label: PropTypes.string.isRequired,
    }),
  ).isRequired,
  value: PropTypes.any.isRequired,
  onChange: PropTypes.func.isRequired,
};

export default LabeledSelect;
