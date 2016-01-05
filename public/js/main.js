function twitter(){
   window.open( "http://twitter.com/share?text=" + "Download amazing free food photography." + "&url=http://www.freshlysqzd.com/freefood?p=twitter&related=freshlysqzd,denzildoyle&via=freshlysqzd&hashtags=freefoodphotography", 'twitter-share');
   ga('send', 'event', 'social-icon', 'click', 'twitter');
}

function facebook(){
   window.open( "http://www.facebook.com/sharer.php?u=" + "http://www.freshlysqzd.com/freefood?p=facebook");
	ga('send', 'event', 'social-icon', 'click', 'facebook');
}

// $("img.lazy").lazyload({
//     effect : "fadeIn"
// });

$(function() {
	$("img.lazy").lazyload({
	    effect : "fadeIn"
	});
});