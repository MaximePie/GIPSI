import React from 'react';
import ReactDOM from 'react-dom';
import ArticlesPage from './ArticlesPage'
import Navbar from './Navbar'
import PostCreationForm from './PostCreationForm'

import {BrowserRouter, Route} from "react-router-dom";
import {createBrowserHistory} from "history";

function Root() {
    const browserHistory = createBrowserHistory()
    return (
        <BrowserRouter history={browserHistory}>
            <Navbar />
            <div className="mainContainer">
                <Route exact path="/" key="context">
                    <ArticlesPage title="Contexte" category="Context"/>
                </Route>
                <Route path="/brakes" key="brakes">
                    <ArticlesPage title="Freins" category="Brakes"/>
                </Route>
                <Route path="/aroundtheworld" key="aroundtheworld">
                    <ArticlesPage title="Autour du monde" category="AroundTheWorld"/>
                </Route>
                <Route path="/create" key="newPost">
                    <PostCreationForm/>
                </Route>
            </div>
        </BrowserRouter>
    );
}

export default Root;

if (document.getElementById('root')) {
    ReactDOM.render(<Root/>, document.getElementById('root'))
}

