import './bootstrap'; // keep axios config
import React from 'react';
import { createRoot } from 'react-dom/client';

// Mount Like Buttons
import LikeButton from './components/LikeButton.jsx';

document.querySelectorAll('.like-root').forEach(el => {
    createRoot(el).render(<LikeButton productId={el.dataset.id} />);
});
