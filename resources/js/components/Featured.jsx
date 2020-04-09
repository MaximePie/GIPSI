import React from 'react';
import axios from "axios";
import moment from 'moment';

export default function Featured() {

    const [articlesList, setArticlesList] = React.useState([]);

    React.useEffect(() => {
        axios.get('/api/featuredPosts/')
            .then(posts => {
                setArticlesList([...posts.data])
            }).catch(err => {
            console.log(err)
        })
    }, []);

    return (
        <div className="Featured">
            <h2 className="Featured__header">Articles à la une</h2>
            {articlesList.map(article => (
                <div className="Featured__article">
                    <h2 className="Featured__article-title">
                        {article.title}
                    </h2>
                    <span className="Featured__article-date">{moment(article.created_at).calendar()}</span>
                    <div className="Featured__actions">
                        <a href={article.url} className="Featured__actions-link">
                            <i className="Featured__action-icon fas fa-headphones"/>
                        </a>
                        <a href={article.mindMapUrl} className="Featured__actions-link">
                            <i className="Featured__action-icon fas fa-network-wired"/>
                        </a>
                    </div>
                </div>
            ))}
        </div>
    );
}
