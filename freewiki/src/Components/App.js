import React, { Component } from 'react';

class App extends Component {
  render() {
    const test = 12;
    if (test) {
      const test2 = 19;
      let ret = 11;
      console.log(test2 + ret);
    }
    return <div>Hello World</div>;
  }
}

export default App;
