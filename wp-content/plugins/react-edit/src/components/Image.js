import React from 'react';
import axios from 'axios';

export default class Image extends React.Component { 
    constructor(props){
        super(props);
        this.state={
            image:'',
            media: `http://localhost:8888/wp-json/wp/v2/media/${props.id.toString()}`
        }
        this.style={
            width:'300px',
            height:'200px'
        }
    }
    
    componentDidMount(){
        axios.get(this.state.media).then(res => {
            this.setState({image: res.data.source_url});
        });
    }
    
    render(){
        return(
            <img src={this.state.image} style={this.style} />
        );
    }
}

