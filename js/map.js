var geocoder;
var map;
var results;

function initialize() {
	geocoder = new google.maps.Geocoder();
	detectBrowser();
	var myOptions = {
		zoom: 13,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	}
	map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
	
	// Try HTML5 geolocation
	if(navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(function(position) {
			var pos = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
			var mymarker = new google.maps.Marker({
				map: map,
				position: pos,
				icon: 'img/apple-mapmarker.png'
			});
			map.setCenter(pos);
		}, function() {
			handleNoGeolocation(true);
		});
	} else {
		handleNoGeolocation(false);
	}
	
	codeAddress();

}

function codeAddress() {
	var address = document.getElementById("map_address").value;
	geocoder.geocode( { 'address': address}, function(results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
			map.setCenter(results[0].geometry.location);
			var marker = new google.maps.Marker({
				map: map,
				position: results[0].geometry.location
			});
		} else {
			alert("Geocode was not successful for the following reason: " + status);
		}
	});
}

function handleNoGeolocation(errorFlag) {
	
	if (errorFlag) {
		alert('Error: The Geolocation service failed.');
	} else {
		alert('Error: Your browser doesn\'t support geolocation.');
	}

}

function detectBrowser() {
	var useragent = navigator.userAgent;
	var mapdiv = document.getElementById("map_canvas");
	
	var w=window,d=document,e=d.documentElement,g=d.getElementsByTagName('body')[0],x=w.innerWidth||e.clientWidth||g.clientWidth,y=w.innerHeight||e.clientHeight||g.clientHeight;
	
	if (useragent.indexOf('iPhone') != -1 || useragent.indexOf('Android') != -1 ) {
		mapdiv.style.width = x+'px';
		mapdiv.style.height = Math.floor(y-60)+'px';
	} else {
		mapdiv.style.width = '600px';
		mapdiv.style.height = '800px';
	}
	
}


initialize();