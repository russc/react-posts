import React from 'react';
import ReactDOM from 'react-dom';
import MuiThemeProvider from 'material-ui/styles/MuiThemeProvider';
import injectTapEventPlugin from 'react-tap-event-plugin';
import './style.css';
import App from './components/App.js';

injectTapEventPlugin();

ReactDOM.render( 
    <MuiThemeProvider>
        <App/>
    </MuiThemeProvider>
    , document.getElementById('root'));
