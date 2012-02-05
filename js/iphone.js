
var startUrl = 'index.php';

$(document).ready(function() {
	loadPage(startUrl);
});

function loadPage(url) {
	$('body').append('<progress>Loading...</progress>');
	scrollTo(0,0);
	if (url.match('index.php')) {
		var element = ' nav';
	} else {
		var element = ' section';
	}
	$('#container').load(url + element, function() {
		var title = $('h2').html() || 'JobSheet';
		$('h1').html(title);
		$('h2').remove();
		if(url.match('index.php')){
			$('.leftButton').remove();
		}else{
			$('header').append('<div class="leftButton"><a href="index.php">Home</a></div>');
			$('.leftButton a').click(function(e){
				$(e.target).parent().addClass('clicked');
			});
		}
		if(url.match('map.php')){
			jQuery.getScript('js/map.js');
		}
		$('a').click(function(e) {
			var url = e.target.href;
			e.preventDefault();
			loadPage(url);
		});
		$('progress').remove();
	});
}