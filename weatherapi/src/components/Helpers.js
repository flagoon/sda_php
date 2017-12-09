import WeatherIcon from './WeatherIcon';
import React from 'react';

export const getHoursAndMinutes = (value) => {
  let time = new Date();
  time.setTime(value * 1000);
  return `${time.toLocaleString([], {hour: '2-digit', minute:'2-digit', hour12: false})}`;
};

export const changeTemperatureScale = (degrees, scale) => {
  let weatherIconContainer = null;
  let temperature = degrees;
  if (scale === 'celsius') {
    temperature = Number(degrees) * 1.8 + 32;
    weatherIconContainer = <WeatherIcon iconName = 'fahrneheit' value = {temperature.toFixed(0)}/>;
  } else {
    temperature = (Number(degrees) - 32) / 1.8;
    weatherIconContainer = <WeatherIcon iconName = 'celsius' value = {temperature.toFixed(0)}/>;
  }
  return weatherIconContainer;
};