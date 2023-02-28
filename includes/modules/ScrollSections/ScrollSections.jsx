// External Dependencies
import React, { Component, Fragment } from 'react';

// Internal Dependencies
//import './style.css';


class ScrollSections extends Component {

  static slug = 'scroll_sections_custom';

  render() {
    return (
      <Fragment>
          <div className='sections'>{this.props.content()}</div>
      </Fragment>
      
    );
  }
}

export default ScrollSections;
