import React from 'react';
import FromCity from './FromCity';
import PictureButton from './PictureButton';
import WeatherIcon from './WeatherIcon';
import $ from 'jquery';

class WeatherContainer extends React.Component {
  constructor () {
    super();
    this.state = {
      weather: {
        bgPicture: ['clear_sky.jpeg', 'rain.jpeg', 'mist.jpg', 'snow.jpeg', 'heavy_clouds.jpeg', 'clouds.jpeg'] 
      },
      coords: {
        lat: '',
        lon: ''
      },
      weatherData: {
        cityName: '',
        temp: '',
        humidity: '',
        pressure: '',
        sunrise: '',
        sunset: '',
        id: ''
      }
    };
  }

  componentDidMount() {
    this.getGeoLocation();
  }

  getGeoLocation() {

    //check if browser can get geolocation
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition((pos) => {
        //get lat ang lon as obj
        this.setState({coords:
            {
              lat: pos.coords.latitude,
              lon: pos.coords.longitude
            }
        });
        this.getWeatherData();
        //alert when error happens
      }, (error) => {
        alert('There was an error: ' + error.message);
      });
    }
    
  }

  getWeatherData() {
    $.ajax({
      url: 'https://fcc-weather-api.glitch.me/api/current',
      data: {
        lat: this.state.coords.lat,
        lon: this.state.coords.lon
      },
      dataType: 'html',
      type: 'get'
    }).done((data) => {
      const parsedData = JSON.parse(data);
      this.setState({
        weatherData: {
          cityName: parsedData.name,
          temp: parsedData.main.temp + '°C',
          humidity: parsedData.main.humidity + '%',
          pressure: parsedData.main.pressure,
          sunrise: parsedData.sys.sunrise,
          sunset: parsedData.sys.sunset,
          id: parsedData.weather[0].id
        }});
      console.log(this.state);
    }).fail((hxr, status, err) => {
      console.log(err);
    });
  }

  getBackgroundData (data) {
    this.setState({randomBG: data});
  }

  render() {
    let style = {
      backgroundImage: `url(./weatherPictures/${this.state.weather.bgPicture[this.state.randomBG]})`,
    };
    return (
      <div id="weather-container" className="weather-container" style={style}>
        <FromCity cityName={this.state.weatherData.cityName} />
        <WeatherIcon iconName = {this.state.weatherData.id}/>
        <PictureButton getData={this.getBackgroundData.bind(this)}/>
      </div>
    );
  }
}

export default WeatherContainer;
