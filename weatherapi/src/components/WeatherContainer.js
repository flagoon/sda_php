import React from 'react';
import FromCity from './FromCity';

class WeatherContainer extends React.Component {

  render() {
    var style = {
      backgroundImage: `url(./weatherPictures/${this.props.backgroundPicture})`,
    };
    return (
      <div id="weather-container" className="weather-container" style={style}>
        <FromCity cityName="Szczecin"/>
      </div>
    );
  }
}

export default WeatherContainer;
