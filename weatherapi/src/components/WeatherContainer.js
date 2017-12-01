import React from 'react';
import FromCity from './FromCity';
import PictureButton from './PictureButton';
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
      }
    };
  }

  componentDidMount() {
    this.getGeoLocation();
    this.getWeatherData();
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
        console.log(this.state)
        //alert when error happens
      }, (error) => {
        alert('There was an error: ' + error.message);
      });
    }
    
  }

  getWeatherData() {
    console.log(this.state.coords.lat)
    $.ajax({
      url: 'https://fcc-weather-api.glitch.me/',
      data: {
        lat: this.state.coords.lat,
        lon: this.state.coords.lon
      },
      dataType: 'JSON'
    }).done((data) => {
      console.log(data);
    }).fail((one, two, err) => {
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
        <FromCity cityName="Szczecin" />
        <PictureButton getData={this.getBackgroundData.bind(this)}/>
      </div>
    );
  }
}

export default WeatherContainer;
