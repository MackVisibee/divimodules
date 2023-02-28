// External Dependencies
import React, { Component, Fragment } from 'react';

// Internal Dependencies
//import './gg.css';


class AccordionToggleChild extends Component {

  static slug = 'accordion_toggle_child';

  render() {
    return (
      <Fragment>
          {this.props.content}
      </Fragment>
      
    )
  }
}

export default AccordionToggleChild;

