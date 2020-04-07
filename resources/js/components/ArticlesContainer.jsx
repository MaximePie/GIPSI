import React from 'react';
import axios from 'axios';

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
            <h2>C'est les articles de {props.title}</h2>
            {articlesList.map(article => (
                    <div className="article">
                        <h2 className="article__title">
                            {article.title}
                            <i>{article.category}</i>
                        </h2>
                        <p className="article__content">
                            {article.content}
                        </p>
                        <a href={article.url} className="article__link">
                            Ecouter
                        </a>
                    </div>
                )
            )}
        </div>
    );
}
