import React from 'react';
import ReactDOM from 'react-dom';
import Header from './header';



if (document.getElementById('index')) {
    ReactDOM.render(<Header />, document.getElementById('index'));
}
