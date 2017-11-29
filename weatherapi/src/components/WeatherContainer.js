import React from 'react';
import FromCity from './FromCity';

class WeatherContainer extends React.Component {
  render() {
    return (
      <div id='weather-container' class='weather-container'>
        <FromCity />
      </div>
    );
  }
}

export default WeatherContainer;
