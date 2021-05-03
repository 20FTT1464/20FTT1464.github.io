function rememberMe(){
			var name = document.getElementById("name");
			var address = document.getElementById("address");
			var date = document.getElementById("date");
			var greetings = document.getElementById("greetings");


			localStorage.setItem("name", name.value);
			localStorage.setItem("address", address.value);
			localStorage.setItem("date", date.value);
			localStorage.setItem("greetings", greetings.value);
			}

			function reveal(){
			var name = document.getElementById("name");
			var address = document.getElementById("address");
			var date = document.getElementById("date");
			var greetings = document.getElementById("greetings");


			name.value = localStorage.getItem("name");
			address.value = localStorage.getItem("address");
			date.value = localStorage.getItem("date");
			greetings.value = localStorage.greetings("greetings")
			// alert("You have been revealed!");
	}
	