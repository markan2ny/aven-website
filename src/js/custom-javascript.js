// Add your JS customizations here

/**
 * Add class sticky on header when scrolldown.
 */

window.addEventListener('scroll', function() {
    const header1 = document.querySelector('#wrapper-navbar');
    const headerTxtColor = document.querySelector('#main-menu');
    const toggleBlack = document.querySelector('.navbar-toggler');
    const logo = document.querySelector('.brand-name a img');

    header1.classList.toggle('sticky', window.scrollY > 100);
    headerTxtColor.classList.toggle('active', window.scrollY > 100);
    toggleBlack.classList.toggle('active', window.scrollY > 100);
    logo.classList.toggle('active', window.scrollY > 100);
	
});

// const header = document.querySelector('#wrapper-navbar');

// window.onscroll = (e) => {
//     const top = window.scrollY;
    
//     if( top >= 100 ) {
//         header.classList.add( 'sticky' );
//     }
//     else {
//         header.classList.remove('sticky');
//     }
    
// }
