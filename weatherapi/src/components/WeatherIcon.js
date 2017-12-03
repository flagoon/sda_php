import React from 'react';
import WI from 'react-weathericons';

class WeatherIcon extends React.Component {

  render () {
    return (
      <div className="big-icon-div">
        <WI name={'owm-' + this.props.iconName} />
      </div>
    );
  }
}

export default WeatherIcon;