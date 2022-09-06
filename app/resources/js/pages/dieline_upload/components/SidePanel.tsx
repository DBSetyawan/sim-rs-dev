import * as React from 'react';
import classnames from 'classnames';
import { startCase } from 'lodash';
import { PrintingFinish } from 'js/lib/types/generated/Enums';
import LabeledSelect from './LabeledSelect.jsx';
import { ThreeDimensionalInput } from './ThreeDimensionalInput';
import {
  BOX_MATERIALS,
  ECONOFLEX_DIMENSIONS,
  FOLDING_CARTON_BOX_MATERIALS,
  ECONOFLEX_BOX_MATERIALS,
  BOX_TYPES,
  BoxType,
  BOX_TYPES_LABELS,
  BOX_TYPES_DESCRIPTIONS,
  BOX_MATERIALS_LABELS,
  MINIMUM_QUANTITY,
} from '../constants';
import { Material, SinglepassFinishForBoxTypeAndMaterial } from '../types';
import { processRequest } from '../api';

interface Props {
  interiorFile: string;
  exteriorFile: string;
  boxType: string;
  flatLength: string;
  flatWidth: string;
  length: string;
  width: string;
  depth: string;
  material: Material;
  whiteInk: boolean;
  quantity: string;
  notes: string;
  dielineSubmitted: boolean;
  toggleModal: () => void;
  updateField: (field: string, value: string | boolean) => void;
  updateSubmitStatus: (status: boolean) => void;
  updateBoxType: (material: string) => void;
  updateMaterial: (material: Material) => void;
  showFinishes: boolean;
  finish: PrintingFinish;
  finishOptions: PrintingFinish[];
  singlepassFinishForBoxTypeAndMaterial: SinglepassFinishForBoxTypeAndMaterial;
}

const createBoxTypeOptions = () =>
  BOX_TYPES.map((type) => ({ value: type, label: BOX_TYPES_LABELS[type] }));

const createMaterialOptions = (boxType: string) => {
  let availableMaterials;
  switch (boxType) {
    case BoxType.FoldingCarton:
      availableMaterials = FOLDING_CARTON_BOX_MATERIALS;
      break;
    case BoxType.Econoflex:
      availableMaterials = ECONOFLEX_BOX_MATERIALS;
      break;
    default:
      availableMaterials = BOX_MATERIALS;
  }
  return availableMaterials.map((material) => ({
    value: material,
    label: BOX_MATERIALS_LABELS[material],
  }));
};

const SidePanel = ({
  interiorFile,
  exteriorFile,
  boxType,
  length,
  width,
  depth,
  material,
  whiteInk,
  quantity,
  notes,
  toggleModal,
  updateBoxType,
  updateField,
  updateSubmitStatus,
  updateMaterial,
  showFinishes,
  finish,
  finishOptions,
  singlepassFinishForBoxTypeAndMaterial,
}: Props) => {
  const handleSubmit = () => {
    try {
      processRequest().then((res) => {
        if (!res.data.error) {
          updateSubmitStatus(true);
        } else {
          updateField('statusMessage', 'We were unable to process your dieline upload.');
        }
      });
    } catch (error) {
      updateField('statusMessage', error.message);
    }
  };

  const MOQForMailerBoxDreamCoatGloss = 15;

  const isMailerBoxDreamCoatGloss = () => material === 'dreamcoat' && finish === 'gloss';

  const quantityValidation = () => {
    if (isMailerBoxDreamCoatGloss()) {
      return quantity.length > 0 && parseInt(quantity, 10) < MOQForMailerBoxDreamCoatGloss;
    }
    return quantity.length > 0 && parseInt(quantity, 10) < MINIMUM_QUANTITY[boxType];
  };

  const getMinQuantity = () =>
    isMailerBoxDreamCoatGloss() ? MOQForMailerBoxDreamCoatGloss : MINIMUM_QUANTITY[boxType];

  const whiteInkValidation = () => {
    let isInvalid = false;
    if (whiteInk && !!interiorFile && !!exteriorFile) {
      updateField(
        'statusMessage',
        'White ink is not available on double-sided orders. Please turn off white ink or limit your design to one side.',
      );
      isInvalid = true;
    }

    return isInvalid;
  };

  return (
    <aside className="side-panel">
      <div className="side-panel-section">
        <h4>Customize your dieline</h4>
      </div>

      <div className="side-panel-section">
        <div className="panel-title">
          <LabeledSelect
            label={'Dieline'}
            options={createBoxTypeOptions()}
            value={boxType}
            onChange={(value: string) => {
              updateBoxType(value);
            }}
          />
        </div>
        <p className="description">{BOX_TYPES_DESCRIPTIONS[boxType]}</p>
      </div>

      {boxType !== BoxType.Econoflex ? (
        <div className="side-panel-section">
          <ThreeDimensionalInput
            boxType={boxType}
            depth={depth}
            length={length}
            updateField={updateField}
            width={width}
          />
        </div>
      ) : (
        <div className="side-panel-section">
          <label className="stacked">Size</label>
          <div className="dimension-input-wrapper">
            <div className="labeled-input">
              <select
                required
                defaultValue={ECONOFLEX_DIMENSIONS[0].length}
                onChange={({ target }) => {
                  const values = ECONOFLEX_DIMENSIONS.find(
                    (econoflex_dimensions) => econoflex_dimensions.name === target.value,
                  );
                  updateField('length', values.length);
                  updateField('width', values.width);
                  updateField('depth', values.depth);
                }}
                className="boxed-input-extended"
              >
                {ECONOFLEX_DIMENSIONS.map((econoflex_dimensions, index) => (
                  <option key={econoflex_dimensions.name} value={econoflex_dimensions.name}>
                    {ECONOFLEX_DIMENSIONS[index].length} x {ECONOFLEX_DIMENSIONS[index].width} x{' '}
                    {ECONOFLEX_DIMENSIONS[index].depth}
                  </option>
                ))}
              </select>
            </div>
          </div>
        </div>
      )}

      <div className="side-panel-section">
        <LabeledSelect
          label={'Material'}
          options={createMaterialOptions(boxType)}
          onChange={(value: Material) => {
            updateMaterial(value);
          }}
          value={material}
        />
        {showFinishes && (
          <div className="nested-options active">
            <div className="nested-options__header-without-background-color">
              <span className="nested-options__legend" style={{ backgroundColor: 'white' }}>
                Print Area Finishes
              </span>
            </div>
            {finishOptions.map((finishOption: PrintingFinish) => (
              <label htmlFor={finishOption} className="nested-options__label" key={finishOption}>
                <input
                  className="nested-options__radio"
                  type="radio"
                  id={finishOption}
                  checked={finish === finishOption}
                  onChange={() => updateField('finish', finishOption)}
                />
                <span className="nested-options__label-text">
                  {startCase(finishOption)}{' '}
                  {finishOption === singlepassFinishForBoxTypeAndMaterial[boxType][material] &&
                    ' (HDPrint Gloss)'}
                </span>
              </label>
            ))}
          </div>
        )}
      </div>

      {material === 'kraft' &&
        boxType !== BoxType.Econoflex && (
          <div className="side-panel-section">
            <span className="labeled-select__label stacked">White ink</span>
            <span className="sub-text">* White ink is not available on double-sided orders.</span>

            <div className="ink-toggle">
              <button
                className={classnames('ink-toggle__button ink-toggle__button--left', {
                  selected: whiteInk,
                })}
                onClick={() => {
                  updateField('whiteInk', true);
                }}
                type="button"
              >
                On
              </button>

              <button
                className={classnames('ink-toggle__button ink-toggle__button--right', {
                  selected: !whiteInk,
                })}
                onClick={() => {
                  updateField('whiteInk', false);
                }}
                type="button"
              >
                Off
              </button>
            </div>
          </div>
        )}

      <div className="side-panel-section">
        <span className="labeled-select__label quantity-field">
          Quantity
          <input
            className={classnames({ input__error: quantityValidation(), 'boxed-input': true })}
            min={MINIMUM_QUANTITY[boxType]}
            onChange={({ target }) => {
              updateField('quantity', target.value.toString());
            }}
            placeholder={`Min ${getMinQuantity()}`}
            required
            type="number"
            value={quantity}
          />
        </span>
        {quantityValidation() && (
          <span className="sub-text sub-text--error u-text-right">
            Minimum order of {getMinQuantity()}
          </span>
        )}
      </div>

      <div className="side-panel-section">
        <div className="notes">
          <span className="labeled-select__label stacked">Notes (optional)</span>
          <textarea
            value={notes}
            placeholder="Anything else we should know?"
            onChange={({ target }) => {
              updateField('notes', target.value);
            }}
          />
        </div>
      </div>

      <div className="side-panel-section">
        <button
          className="submit"
          onClick={() => {
            handleSubmit();
          }}
          disabled={whiteInkValidation()}
          type="button"
        >
          Email me a quote
        </button>
      </div>

      <button className="normal-link u-p-8" onClick={toggleModal} type="button">
        Looking for something more custom?
      </button>
    </aside>
  );
};

export default SidePanel;
