import React, { useState } from 'react';

export default function LikeButton({ productId }) {
    const [count, setCount] = useState(0);
    const [liked, setLiked] = useState(false);

    function toggle() {
        setLiked(!liked);
        setCount(c => liked ? c - 1 : c + 1);
    }

    return (
        <button
            onClick={toggle}
            style={{ border: '1px solid #ccc', padding: '4px 8px', borderRadius: '6px' }}
        >
            {liked ? '❤️' : '🤍'} {count}
        </button>
    );
}
