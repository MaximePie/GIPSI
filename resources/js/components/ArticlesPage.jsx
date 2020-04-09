import React from 'react';
import ArticlesContainer from "./ArticlesContainer";
import Featured from "./Featured";

export default function ArticlesPage(props) {
    return (
        <div className="ArticlesPage">
            <ArticlesContainer title={props.title} category={props.category}/>
            <Featured/>
        </div>
    );
}
