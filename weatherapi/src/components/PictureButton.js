import React from 'react';

class PictureButton extends React.Component {

  returnDataToWC () {
    let random = Math.floor(Math.random() * 6);
    this.props.getData(random);
  }

  render() {
    return (
      <button type="button" className="random-bg" onClick={this.returnDataToWC.bind(this)}>
        Random
      </button>
    );
  }
}

export default PictureButton;
