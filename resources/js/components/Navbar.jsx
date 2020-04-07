import React from 'react';
import {Link} from "react-router-dom";

export default function Navbar(props) {

    return (
        <div className="Navbar">
            <Link to='/' className="Navbar__link">Contexte</Link>
            <Link to='/brakes' className="Navbar__link">Freins à l'éducation</Link>
            <Link to='/aroundtheworld' className="Navbar__link">Autour du monde</Link>
        </div>
    );
}
