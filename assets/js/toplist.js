var $gamesGrid = $('.games-grid').imagesLoaded( function () {
    $gamesGrid.isotope({
        itemSelector: '.game',
        layoutMode: 'fitRows'
    });
});

var streamsGrid = $('.streams-grid').imagesLoaded( function () {
    streamsGrid.isotope({
        itemSelector: '.stream',
        layoutMode: 'fitRows'
    });
});
