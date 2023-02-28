// External Dependencies
import React, { Component, Fragment } from 'react';

// Internal Dependencies
//import './gg.css';


class CustomVideoChild extends Component {

  static slug = 'm_custom_video_child_url';

  render() {
    return (
      <Fragment>
          {this.props.content}
      </Fragment>
      
    )
  }
}

export default CustomVideoChild;

