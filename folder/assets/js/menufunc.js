function menu() {
			var x = document.getElementById("home");
			var y = document.getElementById("ecard");
			var z = document.getElementById("about");
			if (x.style.display === "block") {
				x.style.display = "none";
			} else {
				x.style.display = "block";
			}
			if (y.style.display === "block") {
				y.style.display = "none";
			} else {
				y.style.display = "block";
			}
			if (z.style.display === "block") {
				z.style.display = "none";
			} else {
				z.style.display = "block";
			}
		}