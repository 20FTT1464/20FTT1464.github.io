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
	 	  
	 	  function allowDrop(ev)
	    {
	    ev.preventDefault();
	    }

	    function drag(ev)
	    {
	    ev.dataTransfer.setData("Text",ev.target.id);
	    }

	 function drop(ev)
	    {
	        ev.preventDefault();
	        var data=ev.dataTransfer.getData("Text");

	        if(document.getElementById(data).id == 'img1'){             
	 	    document.getElementById('ecardcan').style.background = "url('assets/images/informal_1.png')"; 
	 	    document.getElementById('ecardcan').style.backgroundSize = "400px 500px"; 
	        }
	        else if(document.getElementById(data).id == 'img2'){   
	        document.getElementById('ecardcan').style.backgroundImage = "url('assets/images/informal_2.png')";
	        document.getElementById('ecardcan').style.backgroundSize = "400px 500px";
	        }
	        else if(document.getElementById(data).id == 'img3'){   
	        document.getElementById('ecardcan').style.backgroundImage = "url('assets/images/informal_3.png')";
	        document.getElementById('ecardcan').style.backgroundSize = "400px 500px";
	        }
	        else if(document.getElementById(data).id == 'img4'){   
	        document.getElementById('ecardcan').style.backgroundImage = "url('assets/images/informal_4.png')";
	        document.getElementById('ecardcan').style.backgroundSize = "400px 500px";
	        }
	        else if(document.getElementById(data).id == 'r'){   
	        document.getElementById('ecardcan').style.backgroundColor = "red";
	        document.getElementById('ecardcan').style.backgroundSize = "400px 500px";
	        }
	        else if(document.getElementById(data).id == 'o'){   
	        document.getElementById('ecardcan').style.backgroundColor = "orange";
	        document.getElementById('ecardcan').style.backgroundSize = "400px 500px";
	        }
	        else if(document.getElementById(data).id == 'y'){   
	        document.getElementById('ecardcan').style.backgroundColor = "yellow";
	        document.getElementById('ecardcan').style.backgroundSize = "400px 500px";
	        }
	        else if(document.getElementById(data).id == 'g'){   
	        document.getElementById('ecardcan').style.backgroundColor = "green";
	        document.getElementById('ecardcan').style.backgroundSize = "400px 500px";
	        }
	        else if(document.getElementById(data).id == 'b'){   
	        document.getElementById('ecardcan').style.backgroundColor = "blue";
	        document.getElementById('ecardcan').style.backgroundSize = "400px 500px";
	        }
	        else if(document.getElementById(data).id == 'i'){   
	        document.getElementById('ecardcan').style.backgroundColor = "indigo";
	        document.getElementById('ecardcan').style.backgroundSize = "400px 500px";
	        }
	        else if(document.getElementById(data).id == 'v'){   
	        document.getElementById('ecardcan').style.backgroundColor = "violet";
	        document.getElementById('ecardcan').style.backgroundSize = "400px 500px";
	        }

	    }

	    function Clearbg() {
	    	document.getElementById('ecardcan').style.background = "url('')"; 
	 	    document.getElementById('ecardcan').style.backgroundSize = "400px 500px"; 
	    }

	    









