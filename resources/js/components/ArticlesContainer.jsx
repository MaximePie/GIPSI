import React from 'react';
import axios from 'axios';
import moment from "moment";

export default function ArticlesContainer(props) {

    const [articlesList, setArticlesList] = React.useState([]);

    React.useEffect(() => {
        axios.get('/api/posts/' + props.category)
            .then(posts => {
                setArticlesList([...posts.data])
            }).catch(err => {
            console.log(err)
        })
    }, [props.category]);


    return (
        <div className="ArticlesContainer">
            <h2>{props.title}</h2>
            {articlesList.map(article => (
                    <div className="article">
                        <h2 className="article__title">
                            {article.title}
                        </h2>
                        <span className="article__date">{moment(article.created_at).calendar()}</span>
                        <p className="article__content">
                            {article.content}
                        </p>
                        <div className="article__details">
                            <span className="article__link-container">
                                <i className="article__icon fas fa-headphones"/>
                                <a href={article.url} className="article__link">
                                    Ecouter
                                </a>
                            </span>
                            {article.duration && (
                                <span className="article__duration">
                                    <i className="article__icon fas fa-stopwatch"/>
                                    {article.duration} min
                                </span>
                            )}
                            {article.mindMapUrl && (
                                <span className="article__mindmap-container">
                                    <i className="article__icon fas fa-network-wired"/>
                                    <a href={article.mindMapUrl} className="article__link">
                                       Résumé écrit en 30 secondes !
                                    </a>
                                </span>
                            )}
                        </div>
                    </div>
                )
            )}
        </div>
    );
}
