window.addEventListener("scroll", function() {
	var header = document.querySelector(".header");
	header.classList.toggle("bar", window.scrollY > 0);})

window.addEventListener("scroll", function() {
	var header = document.querySelector(".llabel");
	header.classList.toggle("bars", window.scrollY > 0);})