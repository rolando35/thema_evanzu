const nav = document.getElementById('nav-iconos');

if (nav) {
	nav.addEventListener('click', function (e) {
		if (e.target.tagName === 'IMG') {
			activeCircle(this, e.target.parentElement);
		} else if (e.target.classList.contains('title-circle-nav')) {
			activeCircle(this, e.target.previousElementSibling);
		} else if (e.target.classList.contains('circle-nav')) {
			activeCircle(this, e.target);
		}
	});

	function activeCircle(parent, element) {
		const circles = parent.querySelectorAll('.circle-nav');
		circles.forEach(function (circle) {
			circle.classList.remove('bg-red');
		});
		element.classList.add('bg-red');
	}
}
