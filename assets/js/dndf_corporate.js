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
	 	    document.getElementById('ecardcan').style.background = "url('assets/images/corporate_1.png')"; 
	 	    document.getElementById('ecardcan').style.backgroundSize = "400px 500px"; 
	        }
	        else if(document.getElementById(data).id == 'img2'){   
	        document.getElementById('ecardcan').style.backgroundImage = "url('assets/images/corporate_2.png')";
	        document.getElementById('ecardcan').style.backgroundSize = "400px 500px";
	        }
	        else if(document.getElementById(data).id == 'img3'){   
	        document.getElementById('ecardcan').style.backgroundImage = "url('assets/images/corporate_3.png')";
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
	    