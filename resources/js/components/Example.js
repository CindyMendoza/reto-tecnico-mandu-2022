import React from 'react';
import ReactDOM from 'react-dom';
import { DatePicker } from 'antd';

function Example() {
    return (
        <DatePicker />
    );
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<DatePicker />, document.getElementById('example'));
}
