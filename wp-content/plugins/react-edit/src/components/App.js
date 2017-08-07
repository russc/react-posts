import React from 'react';
import Posts from './Posts';

export default class App extends React.Component {
    render() {
		return (
			<div>
				<h1>Posts With React</h1>
				<Posts/>
			</div>
		);
	}
}