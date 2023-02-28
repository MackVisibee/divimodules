// External Dependencies
import React, { Component, Fragment } from 'react';

// Internal Dependencies
//import './gg.css';


class CustomVideoParent extends Component {

  static slug = 'm_custom_video_parent';

  render() {
    return (
      <Fragment>
          {this.props.content}
      </Fragment>
      
    )
  }
}

export default CustomVideoParent;
