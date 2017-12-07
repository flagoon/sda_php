import React from 'react';
import WI from 'react-weathericons';

class SmallWeather extends React.Component {
  render () {
    return (
      <div>
        <WI name={this.props.icon}/>
        <span>{this.props.value}</span>
      </div>
    );
  }
}

export default SmallWeather;