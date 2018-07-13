import React, { Component } from 'react';
import ReactDOM from 'react-dom';

class Main extends Component {
    constructor(){
        super();
        this.state = {
            arts : [],
        }
    }
    componentDidMount() {
        fetch('http://localhost:8000/api/arts')
        .then(response => {
            return response.json();
        })
        .then(arts => {
            //var data = Array.from(arts);
            console.log(arts);
            this.setState({ arts });
        })
    }
    renderArts() {
        return this.state.arts.map( art => {
            return (
                <li key={art.id}>
                    {art.name}
                </li>
            );
        })
    }
    render() {
        return (
            <div>
                <ul>
                    { this.renderArts() }
                </ul>
            </div>
        );
    }
}

export default Main;

if (document.getElementById('root')) {
    ReactDOM.render(<Main />, document.getElementById('root'));
}
