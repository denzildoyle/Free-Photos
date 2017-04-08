function twitter(){
   window.open( "http://twitter.com/share?text=" + "Download amazing free food photography." + "&url=http://www.freshlysqzd.com/photos?p=twitter&related=freshlysqzd,denzildoyle&via=freshlysqzd&hashtags=FreshPhotos", 'twitter-share');
   ga('send', 'event', 'social-icon', 'click', 'twitter');
}

function facebook(){
   window.open( "http://www.facebook.com/sharer.php?u=" + "http://www.freshlysqzd.com/photos?p=facebook");
	ga('send', 'event', 'social-icon', 'click', 'facebook');
}

//Fade in new images when scrolling
$(function() {
	$("img.lazy").lazyload({
	    effect : "fadeIn"
	});
});