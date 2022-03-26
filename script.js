//sticky header
window.onscroll = function() {myFunction()};

var nav = document.getElementById("myNav");

var sticky = nav.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    nav.classList.add("sticky");
  } else {
    nav.classList.remove("sticky");
  }
}
//flowers
function quarternote(){
  var delay = 0;
  var zindex = 2;
    for (let i = 0; i < 16; i++){
        var wrapper = document.createElement("DIV");
        wrapper.classList.add("wrapper");
        var stem = document.createElement("DIV");
        stem.classList.add("stem");
        var notehead = document.createElement("DIV");
        notehead.classList.add("notehead");
        wrapper.appendChild(stem);
        wrapper.appendChild(notehead);
        var cln = wrapper.cloneNode(true);
        var cln1 = wrapper.cloneNode(true);
        var cln2 = wrapper.cloneNode(true);
        document.getElementById("topleft").appendChild(wrapper);
        document.getElementById("topright").appendChild(cln);
        document.getElementById("botleft").appendChild(cln1);
        document.getElementById("botright").appendChild(cln2);
        delay -= .2;
        wrapper.style.animationDelay = delay + "s";
        cln.style.animationDelay = delay + "s";
        cln1.style.animationDelay = delay + "s";
        cln2.style.animationDelay = delay + "s";
        zindex = 1;
        wrapper.style.zIndex = zindex;
        cln.style.zIndex = zindex;
        cln1.style.zIndex = zindex;
        cln2.style.zIndex = zindex;
    }
}
//form validation
function validate(){
  //get form inputs
	var contactname = document.getElementById("contactname").value;
	var studentname = document.getElementById("studentname").value;
	var phone = document.getElementById("phone").value;
	var email = document.getElementById("email").value;
	var age = document.getElementById("age").value;
  var experience = document.getElementById("experience").value;
  var message = document.getElementById("message").value;
  //if any of the fields are empty
	if(contactname == "" || studentname == "" || phone == "" || email == "" || age == "" || experience == "" || message == ""){
    //if field is empty, make error visible
		if(contactname == ""){                                 
			document.getElementById("cnameerror").style.visibility = "visible";  
		}
		if(studentname == ""){                              
			document.getElementById("snameerror").style.visibility = "visible";  
		}
		if(phone == ""){                              
			document.getElementById("phoneerror").style.visibility = "visible";  
		}
    if(email == ""){                                 
			document.getElementById("emailerror").style.visibility = "visible";  
		}
		if(age == ""){                              
			document.getElementById("ageerror").style.visibility = "visible";  
		}
		if(experience == ""){                              
			document.getElementById("experror").style.visibility = "visible";  
		}
    if(message == ""){                              
			document.getElementById("messageerror").style.visibility = "visible";  
		}
    //if field isn't empty, make/keep error hidden.
    if(contactname != ""){                                 
			document.getElementById("cnameerror").style.visibility = "hidden";  
		}
		if(studentname != ""){                              
			document.getElementById("snameerror").style.visibility = "hidden";  
		}
		if(phone != ""){                              
			document.getElementById("phoneerror").style.visibility = "hidden";  
		}
    if(email != ""){                                 
			document.getElementById("emailerror").style.visibility = "hidden";  
		}
		if(age != ""){                              
			document.getElementById("ageerror").style.visibility = "hidden";  
		}
		if(experience != ""){                              
			document.getElementById("experror").style.visibility = "hidden";  
		}
    if(message != ""){                              
			document.getElementById("messageerror").style.visibility = "hidden";  
		}
		return false;
	}
	else{
		return true;
	}
}          