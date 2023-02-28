// External Dependencies
import React, { Component, Fragment } from 'react';

// Internal Dependencies
//import './style.css';


class HomeBanner extends Component {

  static slug = 'home_banner_custom';

  render() {
    return (
      <Fragment>
          <div className='banner'>{this.props.content()}</div>
      </Fragment>
      
    );
  }
}

export default HomeBanner;
