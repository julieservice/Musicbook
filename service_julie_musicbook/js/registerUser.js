window.addEventListener("load", function() {


var request;
  var form = document.getElementById("registerForm");

  form.addEventListener("submit", function(e) {
    e.preventDefault(); //prevent form from submitting
    regForm(this);
    console.log("event listener working");
  }, false);

  if (window.XMLHttpRequest) {
    request = new XMLHttpRequest();
  }else if (window.ActiveXObject) {
    request = new ActiveXObject("Microsoft.XMLHTTP");
  }

function regForm(thisform){
    if (request==null) {
      alert("Browser does not support AJAX");
      return;
    }
//register form data
    var formdata = 
    "fname=" + thisform.elements['fname'].value + 
    "&lname=" + thisform.elements['lname'].value +
    "&email=" + thisform.elements['email'].value +
    "&username=" + thisform.elements['username'].value +
    "&password=" + thisform.elements['password'].value;
  
    console.log("working");

  
    var url = "pages/register";
    request.onreadystatechange = formSubmitted;
    request.open("POST", url, true);
    request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    request.send(formdata); 

  } // end regForm function


  function formSubmitted(){
    //console.log("working");
    if (request.readyState==4 || request.readyState=="complete") {
      document.getElementById("feedback").innerHTML = request.responseText;
    }

  }

}, false);