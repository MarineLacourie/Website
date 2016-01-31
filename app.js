(function() {
	var App = function () {
		this._menuIcon = document.querySelector(".menu-icon");
		this._menu = document.querySelector("menu");

		this._menuIcon.addEventListener("click", function(event) {
			this._menu.classList.toggle("opened");
			event.stopPropagation();
		}.bind(this), false);

		this._menu.addEventListener("click", function() {
			this._menu.classList.toggle("opened");
		}.bind(this), false);

		var mapContainer = document.getElementById('location-map');
		var location = {lat: 43.632826, lng: -0.117326};
	    var map = new google.maps.Map(mapContainer, {
	      center: location,
	      zoom: 17,
	      mapTypeId: google.maps.MapTypeId.SATELLITE
	    });

	    var marker = new google.maps.Marker({
			position: location,
			map: map,
			title: 'Maison :)'
		});
	};

	document.addEventListener("DOMContentLoaded", function() {
		var app = new App();
	}, false)
})();
