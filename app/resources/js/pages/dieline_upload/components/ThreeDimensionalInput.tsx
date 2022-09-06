import React from 'react';
import { DEFAULT_DIMENSIONS } from '../constants';

export const ThreeDimensionalInput = (props: any) => {
  const { length, width, depth, updateField, boxType } = props;
  return (
    <div className="dimension-input">
      <label className="stacked">Size</label>
      <div className="dimension-input-wrapper">
        <div className="labeled-input">
          <label>L</label>
          <input
            className="boxed-input"
            placeholder={DEFAULT_DIMENSIONS[boxType].length}
            value={length}
            required
            onChange={({ target }) => {
              updateField('length', target.value);
            }}
          />
        </div>
        <span className="dimension-spacer">x</span>
        <div className="labeled-input">
          <label>W</label>
          <input
            placeholder={DEFAULT_DIMENSIONS[boxType].width}
            className="boxed-input width-input"
            value={width}
            required
            onChange={({ target }) => {
              updateField('width', target.value);
            }}
          />
        </div>
        <span className="dimension-spacer">x</span>
        <div className="labeled-input">
          <label>D</label>
          <input
            className="boxed-input"
            placeholder={DEFAULT_DIMENSIONS[boxType].depth}
            value={depth}
            required
            onChange={({ target }) => {
              updateField('depth', target.value);
            }}
          />
        </div>
      </div>
    </div>
  );
};
