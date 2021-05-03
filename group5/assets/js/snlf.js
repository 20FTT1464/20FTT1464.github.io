function save(){
	var name = document.getElementById("name");
	var address = document.getElementById("address");
	var date = document.getElementById("date");
	var greetings = document.getElementById("greetings");
	var colorcon = document.getElementById("colorcon");
	var background = document.getElementById("bcon");

	localStorage.setItem("name", name.value);
	localStorage.setItem("address", address.value);
	localStorage.setItem("date", date.value);
	localStorage.setItem("greetings", greetings.value);
	localStorage.setItem("colorcon", colorcon.value);
	localStorage.setItem("bcon", bcon.value);

}
function load(){
	var name = document.getElementById("name");
	var address = document.getElementById("address");
	var date = document.getElementById("date");
	var greetings = document.getElementById("greetings");
	var colorcon = document.getElementById("colorcon");
	var background = document.getElementById("bcon");

	name.value = localStorage.getItem("name");
	address.value = localStorage.getItem("address");
	date.value = localStorage.getItem("date");
	greetings.value = localStorage.getItem("greetings");
	colorcon.value = localStorage.getItem("colorcon");
	background.value = localStorage.getItem("background");


}
function fillin(){
	var name = document.getElementById("name");
	var address = document.getElementById("address");
	var date = document.getElementById("date");
	var greetings = document.getElementById("greetings");
	var colorcon = document.getElementById("colorcon");
	var background = document.getElementById("bcon");

	name.innerHTML = localStorage.getItem("name");
	address.innerHTML = localStorage.getItem("address");
	date.innerHTML = localStorage.getItem("date");
	greetings.innerHTML = localStorage.getItem("greetings");
	colorcon.innerHTML = localStorage.getItem("colorcon");
	background.innerHTML = localStorage.getItem("bcon");





}
		var d_n = document.getElementById("nn");
		var d_e = document.getElementById("ee");
		var d_a = document.getElementById("aa")
		var d_d = document.getElementById("dd");
		var d_t = document.getElementById("tt");
		var d_h = document.getElementById("hh");

		n.addEventListener('input', letter =>{display_n.textContent = letter.target.value;})
		e.addEventListener('input', letter =>{display_e.textContent = letter.target.value;})
		a.addEventListener('input', letter =>{display_a.textContent = letter.target.value;})
		d.addEventListener('input', letter =>{display_d.textContent = letter.target.value;})
		t.addEventListener('input', letter =>{display_t.textContent = letter.target.value;})
		h.addEventListener('input', letter =>{display_h.textContent = letter.target.value;})

		name.innerHTML = localStorage.getItem("name");
		address.innerHTML = localStorage.getItem("address");
		date.innerHTML = localStorage.getItem("date");
		greetings.innerHTML = localStorage.getItem("greetings");
		colorcon.innerHTML = localStorage.getItem("colorcon");
		background.innerHTML = localStorage.getItem("bcon");
