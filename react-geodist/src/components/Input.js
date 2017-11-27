import React from 'react';
import { FormControl, Col, Row, Grid } from 'react-bootstrap';
import $ from 'jquery';

class Input extends React.Component {
  constructor() {
    super();
    this.state = {
      cities: ['cityOne', 'cityTwo', 'cityThree', 'cityFour', 'cityFive' ]
    };
  }

  getAjax() {
    $.ajax({
      url: 'find_city.php',
      data: {
        cont: this.
      }
    }).done({

    })
  };

  render () {
    return (
      <Grid bsStyle="mt-2">
        <Row>
          {
            this.state.cities.map((val, index) => {
              return (
                <Col xs={2}>
                  <FormControl key={index} placeholder= "Wpisz miasto" id={val} onKeyUp={this.getAjax}/>
                </Col>
              );
            })
          }
        </Row>
      </Grid>
    );
  }
}

export default Input;