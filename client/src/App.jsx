import React, {Component} from 'react';
import { Button } from 'reactstrap';

import LoginContainer from './containers/LoginContainer';
class App extends Component {
  render() {
    return (
      <div>
          <LoginContainer />
      </div>
    );
  }
}

export default App;
