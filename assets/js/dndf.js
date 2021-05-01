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
	 	    document.getElementById('ecardcan').style.background = "url('assets/images/img1.jpg')"; 
	 	    document.getElementById('ecardcan').style.backgroundSize = "400px 600px"; 
	        }
	        else if(document.getElementById(data).id == 'img2'){   
	        document.getElementById('ecardcan').style.backgroundImage = "url('assets/images/img2.jpg')";
	        document.getElementById('ecardcan').style.backgroundSize = "400px 600px";
	        }

	    }