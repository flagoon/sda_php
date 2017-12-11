import WeatherIcon from './WeatherIcon';
import React from 'react';

export const getHoursAndMinutes = (value) => {
  let time = new Date();
  time.setTime(value * 1000);
  return `${time.toLocaleString([], {hour: '2-digit', minute:'2-digit', hour12: false})}`;
};

export const changeTemperatureScale = (degrees, scale) => {
  let weatherIconContainer = null;
  
  /**
   * temperature will hold degrees sent from API. I need to convert it to number, as it's string and make problems later with .toFixed().
   * 
   * @var number
   */
  let temperature = Number(degrees);
  if (!scale) {
    temperature = degrees * 1.8 + 32;
    weatherIconContainer = <WeatherIcon iconName = 'fahrenheit' value = {temperature.toFixed(0)}/>;
  } else {
    weatherIconContainer = <WeatherIcon iconName = 'celsius' value = {temperature.toFixed(0)}/>;
  }
  return weatherIconContainer;
};