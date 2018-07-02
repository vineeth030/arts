import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Main extends Component {
    constructor(){
        super();
        this.state = {
            arts : [],
        }
    }
    componentDidMount() {
        fetch('http://fineartsarchives.com/api/arts')
        .then(repsonse => {
            return repsonse.json();
        })
        .then(arts => {
            this.setState({ arts });
        })
    }
    renderProducts() {
        return this.state.arts.map(art => {
            return (
                <li key={art.id} >
                    {art.title}
                </li>
            )
        })
    }
    render() {
        return (
            <div>
                <ul>
                    { this.renderProducts() }
                </ul>
            </div>
        );
    }
}

if (document.getElementById('root')) {
    ReactDOM.render(<Main />, document.getElementById('root'));
}
