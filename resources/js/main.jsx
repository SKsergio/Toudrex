import React from 'react';
import ReactDOM from 'react-dom/client';
import { Reactions } from './components/Reactions';
import { Comentarios } from './components/Comentarios';
import { ComentsView } from './components/ComentsView';

ReactDOM.createRoot(document.getElementById('root')).render(
    <React.StrictMode>
        <Reactions></Reactions>
        <Comentarios></Comentarios>
        <ComentsView></ComentsView>
    </React.StrictMode>
)
  