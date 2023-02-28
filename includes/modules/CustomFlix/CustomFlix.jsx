// External Dependencies
import React, { Component, Fragment } from 'react';

// Internal Dependencies
//import './gg.css';


class CustomFlix extends Component {

  static slug = 'm_custom_flix';

  render() {
    return (
      <Fragment>
          <div className='m-custom-flix'>{this.props.content}</div>
      </Fragment>
      
    )
  }
}

export default CustomFlix;
