import React from 'react';
import Image from './Image';
import RaisedButton from 'material-ui/RaisedButton';
import TextField from 'material-ui/TextField';
import Photo from 'material-ui/svg-icons/image/photo';

export default class Posts extends React.Component {
	constructor(props){
		super(props);
		this.state = { 
			posts: [],
			edit: []
		};
		this.media_uploader = null;
	}

	api(){
		wp.api.loadPromise.done( () => {
			var postsCollection = new wp.api.collections.Posts();
			postsCollection.fetch().then( response => {	
				this.setState({
					posts: response
				});
			});
			
		});
	}

	updatePost(id, index) {
		let title = document.getElementById(id+'-title').value;
		let posts = this.state.posts;	
		posts[index].title.rendered = title;
		posts[index].slug = title;

		this.setState({ posts }, () =>{
			let post = new wp.api.models.Post({ id });
			post.set({title, slug:title});
			post.save();
			this.toggleEdit(id);
		});
	}

	deletePost(id, index){
		let posts = this.state.posts;
		posts.splice(index, 1);
		this.setState({ posts }, () => { 
			let post = new wp.api.models.Post({ id });
			post.destroy();
		});
	}

	componentDidMount() { 
		this.api();	
	}

	toggleEdit(id) {
		let edit = this.state.edit;
		edit[id] = !edit[id];
		this.setState({edit},()=>{
			if(this.state.edit[id]){
				document.getElementById(id+'-title').focus();		
			}
		});
		
	}

	render() {
		return (
			<div className="posts">
				{ this.state.posts.slice(0, 5).map((post, index) => {
					return(
						<div key={post.id} className="post">
							{post.featured_media !== 0 ?								
								<Image id={post.featured_media} />
								
								: 
								<div className="placeholder">
									<Photo/>
								</div>
														
							}
							{ !this.state.edit[post.id] ?
								<div>
									<h3>{post.title.rendered}</h3> 
									<div className="button-row">
										<RaisedButton label="Edit" primary={true} onClick={this.toggleEdit.bind(this, post.id)} />
										<RaisedButton label="Delete" secondary={true} onClick={this.deletePost.bind(this, post.id, index)} />	
									</div>
								</div>
								:
								<div>
									<TextField id={`${post.id}-title`} hintText="Title" defaultValue={post.title.rendered}/>
									<div className="button-row">
										<RaisedButton label="Update" backgroundColor="lime" labelColor="#fff" onClick={this.updatePost.bind(this, post.id, index)}/>
										<RaisedButton label="Cancel" backgroundColor="red" labelColor="#fff" onClick={this.toggleEdit.bind(this, post.id)}/>
									</div>
								</div>								
							}
							
						</div>
					)
				}) }
			</div>
		);
	}
}