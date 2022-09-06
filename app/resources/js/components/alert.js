/* globals noty */
export function notyAlert(text) {
  return noty({
    text,
    type: 'error',
  });
}

export function customNotyAlert(text, type, layout, modal, timeout, template) {
  return noty({
    text,
    type,
    layout,
    modal,
    timeout,
    template,
  });
}

export function dielineNotyAlert(text) {
  return noty({
    text,
    type: 'error',
    maxVisible: '1',
    closeWith: ['button', 'click'],
    timeout: 2000,
  });
}
