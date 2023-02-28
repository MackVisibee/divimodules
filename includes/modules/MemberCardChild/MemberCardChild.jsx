// External Dependencies
import React, { Component, Fragment } from 'react';

// Internal Dependencies
//import './gg.css';


class MemberCardChild extends Component {

  static slug = 'member_card_child';

  render() {
    return (
      <Fragment>
          {this.props.content}
      </Fragment>
      
    )
  }
}

export default MemberCardChild;

