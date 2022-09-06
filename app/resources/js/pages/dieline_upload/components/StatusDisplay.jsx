import React from 'react';
import PropTypes from 'prop-types';
import ClickOutsideHandler from 'js/lib/react/components/ClickOutsideHandler.jsx';

const StatusDisplay = ({ statusMessage, updateField }) => {
  const RenderStatusDisplay = () => (
    <div className="status-display">
      <ClickOutsideHandler toClose={() => updateField('statusMessage', null)}>
        <div>{statusMessage}</div>
      </ClickOutsideHandler>
    </div>
  );

  return statusMessage ? RenderStatusDisplay() : null;
};

StatusDisplay.propTypes = {
  statusMessage: PropTypes.string,
  updateField: PropTypes.func.isRequired,
};

StatusDisplay.defaultProps = {
  statusMessage: null,
};

export default StatusDisplay;
