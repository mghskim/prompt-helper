import Masonry from 'masonry-layout';

var elem = document.querySelector('.grid');
var msnry = new Masonry( elem, {
// options
    itemSelector: '.grid-item',
    // columnWidth: '.grid-item',
    gutter: 10,
});

let elem2 = document.querySelector('.grid');
let infScroll = new InfiniteScroll( '.grid', {
    path: '?page={{#}}',
    append: '.grid-item',
    outlayer: msnry,
    history: false,
    status: '.page-load-status'
});

msnry.layout();