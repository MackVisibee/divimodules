// External Dependencies
import React, { Component, Fragment } from 'react';

// Internal Dependencies
//import './gg.css';


class CustomFlixChild extends Component {

  static slug = 'm_custom_flix_child';

  render() {
    return (
      <Fragment>
          <div className='m-custom-flix-child'>{this.props.content}</div>
      </Fragment>
      
    )
  }
}

export default CustomFlixChild;
