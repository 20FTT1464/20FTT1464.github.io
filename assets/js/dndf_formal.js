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
	        document.getElementById('ecardcan').style.backgroundImage = "url('assets/images/informal_3.jpg')";
	        document.getElementById('ecardcan').style.backgroundSize = "400px 500px";
	        }
	        else if(document.getElementById(data).id == 'img4'){   
	        document.getElementById('ecardcan').style.backgroundImage = "url('assets/images/informal_4.jpg')";
	        document.getElementById('ecardcan').style.backgroundSize = "400px 500px";
	        }

	    }