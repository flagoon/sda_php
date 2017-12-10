import React from 'react';
import WI from 'react-weathericons';

class WeatherIcon extends React.Component {
  constructor() {
    super ();
    this.state = {
      degrees: {
        value: '',
        type: ''
      }
    };
  }

  componentDidMount() {
    this.setState({
      degrees: {
        value: this.props.value,
        type: this.props.iconName
      }
    });
  }

  render () {

    let degrees = null;
    // nie działa dla 0 stopni!
    if (this.props.value) {
      degrees = <div>{this.props.value}</div>;
    }

    return (
      <div>
        {/* value for temperature */}
        {degrees}
        {/* celisius icon is sent by default */}
        <WI name={this.props.iconName} />
      </div>
    );
  }
}

export default WeatherIcon;