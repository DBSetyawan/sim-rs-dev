import { unionize, ofType, UnionOf } from 'unionize';
import { Material } from '../types';

export const actions = unionize(
  {
    UPDATE_FIELD: ofType<{ field: string; value: string | boolean }>(),
    UPDATE_SUBMIT_STATUS: ofType<{ status: boolean }>(),
    UPDATE_BOX_TYPE: ofType<{ boxType: string }>(),
    UPDATE_MATERIAL: ofType<{ material: Material }>(),
  },
  { tag: 'type' },
);

export type Action = UnionOf<typeof actions>;
