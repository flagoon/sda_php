import React from 'react';
import WI from 'react-weathericons';

class SmallWeather extends React.Component {
  render () {
    return (
      <div>
        <div className="icon-cont">
          <WI name={this.props.icon}/>
        </div>
        <span>{this.props.value}</span>
      </div>
    );
  }
}

export default SmallWeather;