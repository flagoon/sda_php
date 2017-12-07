import React from 'react';
import WI from 'react-weathericons';

class WeatherIcon extends React.Component {

  render () {

    let degrees = null;

    if (this.props.value) {
      degrees = <div>{this.props.value}</div>;
    }

    return (
      <div>
        {degrees}
        <WI name={this.props.iconName} />
      </div>
    );
  }
}

export default WeatherIcon;