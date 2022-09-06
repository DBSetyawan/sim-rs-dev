import { PrintingFinish } from 'js/lib/types/generated/Enums';
import { FinishesForMaterial } from './types';

interface boxTypes {
  [key: string]: string;
}

interface boxMaterials {
  [key: string]: string;
}

interface defaultDimensions {
  [key: string]: { [key: string]: string };
}

interface minimumQuantity {
  [key: string]: number;
}

export const BOX_TYPES = [
  BoxType.Mailer,
  BoxType.Shipper,
  BoxType.Econoflex,
  BoxType.TuckTop,
  BoxType.FoldingCarton,
];

export const BOX_TYPES_LABELS: boxTypes = {
  mailerBox: 'Mailer Box',
  shippingBox: 'Shipping Box',
  econoflexBox: 'Econoflex Box',
  tuckTop: 'Tuck Top',
  foldingCarton: 'Product Box',
};

export const BOX_TYPES_DESCRIPTIONS: boxTypes = {
  mailerBox: `A beautiful and durable box in corrugated cardboard that's ready for shipping or retail shelves`,
  shippingBox: `A strong and economical box in corrugated cardboard that provides extra protection in the mail`,
  econoflexBox: `Our most economical and eco-friendly shipping boxes. Printed on sturdy 100% recycled Kraft with a trifecta of print quality rivaling Flexo, speedy turnaround, and affordable pricing.`,
  tuckTop: `The product-ready structure of our product boxes made with the sturdy corrugated cardboard of our mailers`,
  foldingCarton: `A simple and elegant paperboard carton that looks great on retail shelves and is exceptionally lightweight`,
};

export const BOX_MATERIALS = ['white', 'kraft', 'dreamcoat'];

export const FOLDING_CARTON_BOX_MATERIALS = ['paperboard'];

export const ECONOFLEX_BOX_MATERIALS = ['kraft'];

export const BOX_MATERIALS_LABELS: boxMaterials = {
  kraft: 'Kraft',
  white: 'White',
  dreamcoat: 'Dreamcoat',
  paperboard: 'Paperboard',
};

export const REQUIRED_FIELDS = ['length', 'width', 'depth', 'quantity'];

export const DEFAULT_DIMENSIONS: defaultDimensions = {
  mailerBox: { length: '9', width: '6', depth: '3' },
  shippingBox: { length: '12', width: '12', depth: '12' },
  econoflexBox: { length: '12', width: '12', depth: '12' },
  tuckTop: { length: '4', width: '4', depth: '4' },
  foldingCarton: { length: '4', width: '4', depth: '4' },
};

export const ECONOFLEX_DIMENSIONS = [
  { length: '12', width: '12', depth: '12', name: '12 x 12 x 12' },
  { length: '12', width: '12', depth: '6', name: '12 x 12 x 6' },
  { length: '11.25', width: '8.75', depth: '6', name: '11.25 x 8.75 x 6' },
  { length: '11.25', width: '8.75', depth: '4', name: '11.25 x 8.75 x 4' },
  { length: '10', width: '10', depth: '8', name: '10 x 10 x 8' },
  { length: '8', width: '8', depth: '8', name: '8 x 8 x 8' },
  { length: '6', width: '6', depth: '6', name: '6 x 6 x 6' },
];

export const FINISHES_FOR_MATERIAL: FinishesForMaterial = {
  dreamcoat: [PrintingFinish.SemiGloss, PrintingFinish.Gloss],
  kraft: [],
  white: [],
  paperboard: [],
};

// TODO: replace JS constants with TS enums where possible

export const enum Side {
  Exterior = 'Exterior',
  Interior = 'Interior',
}

export const enum BoxType {
  Mailer = 'mailerBox',
  Shipper = 'shippingBox',
  Econoflex = 'econoflexBox',
  TuckTop = 'tuckTop',
  FoldingCarton = 'foldingCarton',
}

export const MINIMUM_QUANTITY: minimumQuantity = {
  [BoxType.Mailer]: 1,
  [BoxType.Shipper]: 1,
  [BoxType.Econoflex]: 1,
  [BoxType.TuckTop]: 1,
  [BoxType.FoldingCarton]: 25,
};
