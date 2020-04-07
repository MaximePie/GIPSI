import React from 'react';
import axios from 'axios';

export default function ArticlesContainer(props) {

    const [articlesList, setArticlesList] = React.useState([]);

    React.useEffect(() => {
        axios.get('/api/posts')
            .then(posts => {
                setArticlesList(posts)
            }).catch(err => {
            console.log(err)
        })
    }, []);

    return (
        <div className="ArticlesContainer">
            <h2>C'est les articles de {props.title}</h2>
            <div className="article">
                Mon premier article
            </div>
            <div className="article">
                Mon premier article
            </div>
            <div className="article">
                Mon premier article
            </div>
        </div>
    );
}
