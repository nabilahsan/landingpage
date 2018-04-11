//Animate scroll up.
//Idiot proofing

setTimeout(function () {
	console.log(window.scrollY);
	if (window.scrollY > 0) {
		document.getElementById("logo").classList.add("paused");
	};
}, 3500);