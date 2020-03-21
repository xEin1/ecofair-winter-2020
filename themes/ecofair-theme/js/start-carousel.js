(function() {
    const carousel = document.querySelector('.carousel');
    const numberPag = document.querySelector('.carousel-pagination-numbers').childNodes;
    const flkty = new Flickity(carousel, {
	hash: true,
	draggable: false
    });
    const buttonPrev = document.querySelectorAll('.carousel-pagination-prev');
    buttonPrev.forEach( button => {
	button.addEventListener('click', () => {
	    flkty.previous();
	    console.log(numberPag);
	})
    })
    const buttonNext = document.querySelectorAll('.carousel-pagination-next');
    buttonNext.forEach( button => {
	button.addEventListener('click', () => {
	    flkty.next();
	})
    })
})();
