import React from 'react';
import WI from 'react-weathericons';

class WeatherIcon extends React.Component {

  render () {
    return (
      <WI name={'owm-' + this.props.iconName} size = 'lg'/>
    );
  }
}

export default WeatherIcon;