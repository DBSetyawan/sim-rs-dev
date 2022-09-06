import React from 'react';
import { Provider } from 'react-redux';
import { hot } from 'react-hot-loader';
import store from '../store';
import Container from './Container';

const App = hot(module)(() => (
  <Provider store={store}>
    <Container />
  </Provider>
));

export default <App />;
