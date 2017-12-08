import React from 'react';
import FromCity from './FromCity';
// import PictureButton from './PictureButton';
import WeatherIcon from './WeatherIcon';
import SmallWeather from './SmallWeather';
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
      },
      degrees: ''
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
        //
        alert('Twoja przeglądarka nie obsługuje geolokacji. Ustawiono domyślną wartość.');
        this.setState({coords:
          {
            lat: 52.22,
            lon: 21.01
          }
        });
        this.getWeatherData();
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
          temp: parsedData.main.temp,
          humidity: parsedData.main.humidity,
          pressure: parsedData.main.pressure,
          sunrise: this.getHoursAndMinutes(parsedData.sys.sunrise),
          sunset: this.getHoursAndMinutes(parsedData.sys.sunset),
          id: 'owm-' + parsedData.weather[0].id
        },
        degrees: 'celsius'
      });
    }).fail((hxr, status, err) => {
      console.log(err);
    });
  }

  getHoursAndMinutes(value) {
    let time = new Date();
    time.setTime(value * 1000);
    return `${time.toLocaleString([], {hour: '2-digit', minute:'2-digit', hour12: false})}`;
  }

  render() {
    let style = {
      backgroundImage: `url(./weatherPictures/${this.state.weather.bgPicture[this.state.randomBG]})`,
    };
    return (
      <div id="weather-container" className="weather-container" style={style}>
        <FromCity cityName={this.state.weatherData.cityName} />
        <div className="big-container">
          <WeatherIcon iconName={this.state.weatherData.id} />
          <WeatherIcon iconName={this.state.degrees} value={this.state.weatherData.temp}/>
        </div>
        <div className="small-parts">
          {/*ciśnienie*/}
          <SmallWeather icon="humidity" value={this.state.weatherData.humidity + '%'}/>
          {/*wilgotność*/}
          <SmallWeather icon="barometer" value={this.state.weatherData.pressure}/>
          {/*wschód*/}
          <SmallWeather icon="sunrise" value={this.state.weatherData.sunrise}/>
          {/*zachód*/}
          <SmallWeather icon="sunset" value={this.state.weatherData.sunset}/>
        </div>
        {/*<PictureButton getData={this.getBackgroundData.bind(this)}/>*/}
      </div>
    );
  }
}

export default WeatherContainer;
