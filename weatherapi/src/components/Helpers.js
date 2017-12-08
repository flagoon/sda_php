export const getHoursAndMinutes = (value) => {
  let time = new Date();
  time.setTime(value * 1000);
  return `${time.toLocaleString([], {hour: '2-digit', minute:'2-digit', hour12: false})}`;
};