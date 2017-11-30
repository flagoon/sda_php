import React from 'react';
import WeatherContainer from './components/WeatherContainer';

class App extends React.Component {
  constructor () {
    super();
    this.state = {
      weather: {
        bgPicture: ['clear_sky.jpeg', 'rain.jpeg', 'mist.jpeg', 'snow.jpeg', 'heavy_clouds.jpeg'] 
      }
    };
  }

  render() {
    return (
      <WeatherContainer backgroundPicture={this.state.weather.bgPicture[4]}/>
    );
  }
}

export default App;
