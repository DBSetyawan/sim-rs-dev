import { render } from 'react-dom';
import App from './containers/App';

const rootDivId = 'dieline-upload-container';

export default () => {
  const container = document.getElementById(rootDivId);
  if (container) {
    render(App, container);
  } else {
    throw new Error(`react app mount failure. could not find root <div/> with id ${rootDivId}`);
  }
};
