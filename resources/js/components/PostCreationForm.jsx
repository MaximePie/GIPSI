import React from 'react';
import axios from 'axios';
import {useForm} from "react-hook-form";

export default function PostCreationForm() {
    const {register, handleSubmit} = useForm();

    return (
        <form onSubmit={handleSubmit(submitPost)}>
            <input name="title" defaultValue="Titre" ref={register}/>
            <input name="category" defaultValue="Categorie" ref={register}/>
            <input name="content" defaultValue="Contenu" ref={register}/>
            <input name="url" defaultValue="url" ref={register}/>
            <input name="mindMapUrl" defaultValue="URL Mind Map" ref={register}/>
            <input name="duration" defaultValue="Durée" ref={register}/>

            <input type="submit"/>
        </form>
    );

    function submitPost(data) {
        console.log("Submitting")
        console.log(data)
        axios.post('/api/posts/', {
            title: data.title,
            content: data.content,
            category: data.category,
            url: data.url,
            duration: data.duration || undefined,
            mindMapUrl: data.mindMapUrl,
        }).then(response => {
            console.log(response);
        }).catch(err => {
            console.log(err)
        })
    }
}
