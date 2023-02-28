// External Dependencies
import React, { Component, Fragment } from 'react';

// Internal Dependencies
import './style.css';


class AccordionToggleParent extends Component {

  static slug = 'accordion_toggle_parent';

  render() {
    return (
      <Fragment>
          {this.props.content}
      </Fragment>
      
    )
  }
}

export default AccordionToggleParent;
