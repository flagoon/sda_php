import React from 'react';
import FromCity from './FromCity';
import WeatherIcon from './WeatherIcon';
import SmallWeather from './SmallWeather';
import { getHoursAndMinutes, changeTemperatureScale } from './Helpers';

class WeatherContainer extends React.Component {
  constructor() {
    super();
    this.getGeoLocation = this.getGeoLocation.bind(this);
    this.getWeatherData = this.getWeatherData.bind(this);
    this.state = {
      weather: {
        bgPicture: ['clear_sky.jpeg', 'rain.jpeg', 'mist.jpg', 'snow.jpeg', 'heavy_clouds.jpeg', 'clouds.jpeg']
      },
      weatherData: {
        cityName: '',
        temp: '',
        humidity: '',
        pressure: '',
        sunrise: '',
        sunset: '',
        id: ''
      },
      degrees: ''
    };
  }

  componentDidMount() {
    this.getGeoLocation().then(res => {
      this.getWeatherData(res);
    }).catch((error) => {
      this.getWeatherData(error);
    });
  }

  getGeoLocation() {
    return new Promise((res, rej) => {
      //check if browser can get geolocation
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition((pos) => {
          //get lat ang lon as obj
          res({
            coords: {
              lat: pos.coords.latitude,
              lon: pos.coords.longitude
            }
          });
          //alert when error happens
        }, (error) => {
          //when geolocation of browser is turnoff, set Warsaw location.
          rej({
            coords: {
              lat: 52.22,
              lon: 21.01
            }
          });
        });
      }
    });
  }

  getWeatherData(geoLoc) {
    fetch(`https://fcc-weather-api.glitch.me/api/current?lat=${geoLoc.coords.lat}&lon=${geoLoc.coords.lon}`)
      .then(data => data.json())
      .then(data => {
        this.setState({
          weatherData: {
            cityName: data.name,
            temp: data.main.temp,
            humidity: data.main.humidity,
            pressure: data.main.pressure,
            sunrise: getHoursAndMinutes(data.sys.sunrise),
            sunset: getHoursAndMinutes(data.sys.sunset),
            id: 'owm-' + data.weather[0].id
          },
          degrees: 'celsius'
        });
      });
  }

  render() {
    let style = {
      backgroundImage: `url(./weatherPictures/${this.state.weather.bgPicture[5]})`,
    };
    return ( 
      <div id = "weather-container" className = "weather-container" style = {style} >
        <FromCity cityName = {this.state.weatherData.cityName}/> 
        <div className = "big-container" >
          <WeatherIcon iconName = {this.state.weatherData.id}/> 
          <WeatherIcon iconName = {this.state.degrees} value = {this.state.weatherData.temp}/> 
          {/* {changeTemperatureScale(10, 'fahrenheit')} */}
        </div> 
        <div className = "small-parts" > 
          { /*ciśnienie*/ } 
          <SmallWeather icon = "humidity" value = {this.state.weatherData.humidity + '%'}/> 
          {/* wilgotność */} 
          <SmallWeather icon = "barometer" value = {this.state.weatherData.pressure + 'Hpa'}/> 
          { /* wschód */ } 
          <SmallWeather icon = "sunrise" value = {this.state.weatherData.sunrise}/> 
          { /* zachód */ } 
          <SmallWeather icon = "sunset" value = {this.state.weatherData.sunset} /> 
        </div> 
      </div>
    );
  }
}

export default WeatherContainer;