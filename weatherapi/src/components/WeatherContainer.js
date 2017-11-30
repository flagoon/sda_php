import React from 'react';
import FromCity from './FromCity';
import PictureButton from './PictureButton';

class WeatherContainer extends React.Component {
  constructor () {
    super();
    this.state = {
      weather: {
        bgPicture: ['clear_sky.jpeg', 'rain.jpeg', 'mist.jpg', 'snow.jpeg', 'heavy_clouds.jpeg', 'clouds.jpeg'] 
      },
      randomBG: 1
    };
  }

  getBackgroundData (data) {
    this.setState({randomBG: data});
  }

  render() {
    var style = {
      backgroundImage: `url(./weatherPictures/${this.state.weather.bgPicture[this.state.randomBG]})`,
    };
    return (
      <div id="weather-container" className="weather-container" style={style}>
        <FromCity cityName="Szczecin" />
        <PictureButton getData={this.getBackgroundData.bind(this)}/>
      </div>
    );
  }
}

export default WeatherContainer;
