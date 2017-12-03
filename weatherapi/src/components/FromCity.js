import React from 'react';

class FromCity extends React.Component {
  render() {
    return (
      <h1 id='city-name' className='city-name weather-box'>{this.props.cityName}</h1>
    );
  }
}

export default FromCity;
