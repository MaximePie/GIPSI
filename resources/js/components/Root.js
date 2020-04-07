import React from 'react';
import ReactDOM from 'react-dom';
import ArticlesContainer from './ArticlesContainer'
import Navbar from './Navbar'
import {BrowserRouter, Route, Switch} from "react-router-dom";
import {createBrowserHistory} from "history";

function Root() {
    const browserHistory = createBrowserHistory()
    return (
        <BrowserRouter history={browserHistory}>
            <Navbar />
            <div className="mainContainer">

                Retrouvez tous les articles ici
                    <Route exact path="/" key="context">
                        <ArticlesContainer title="Contexte" category="Context"/>
                    </Route>
                    <Route path="/brakes" key="brakes">
                        <ArticlesContainer title="Freins" category="Brakes"/>
                    </Route>
                    <Route path="/aroundtheworld" key="aroundtheworld">
                        <ArticlesContainer title="Autour du monde" category="AroundTheWorld"/>
                    </Route>
            </div>
        </BrowserRouter>
    );
}

export default Root;

if (document.getElementById('root')) {
    ReactDOM.render(<Root/>, document.getElementById('root'))
}

