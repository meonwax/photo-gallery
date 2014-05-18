$("#gallery").justifiedGallery( {
	justifyLastRow : false,
	margins : 2,
	captions : false
} );

$('#gallery').photobox('a', { thumbs:true }, callback);

// using setTimeout to make sure all images were in the DOM, before the history.load() function is looking them up to match the url hash
setTimeout(window._photobox.history.load, 1000);

function callback(){
	//console.log('callback for loaded content:', this);
}