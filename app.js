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
	};

	document.addEventListener("DOMContentLoaded", function() {
		var app = new App();
	}, false)
})();
