import React from 'react';
import ReactDOM from 'react-dom';
import ArticlesContainer from './ArticlesContainer'
import Navbar from './Navbar'
import {BrowserRouter, Route, Switch} from "react-router-dom";

function Root() {
    return (
        <BrowserRouter>
            <Navbar/>
            <div className="mainContainer">

                Retrouvez tous les articles ici
                <Switch>
                    <Route path="/about">
                        <ArticlesContainer />
                    </Route>
                    <Route path="/users">
                        <ArticlesContainer />
                    </Route>
                    <Route path="/">
                        <ArticlesContainer />
                    </Route>
                </Switch>
            </div>
        </BrowserRouter>
    );
}

export default Root;

if (document.getElementById('root')) {
    ReactDOM.render(<Root/>, document.getElementById('root'))
}

