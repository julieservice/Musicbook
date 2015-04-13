var xmlHttp;

function showResults(str) { 
//If theres nothing entered, display none
  if (str == "" || str==null) {
    console.log("No results");
    document.querySelector("#txtHint").innerHTML = "";
    return;
  }

xmlHttp=GetXmlHttpObject();
if (xmlHttp==null) {
 alert ("Browser does not support HTTP Request");
 return;
 }
//search string enetered
var url="search/"+str;
console.log(url);
xmlHttp.onreadystatechange=stateChanged;
xmlHttp.open("GET",url,true);
xmlHttp.send(null);

}

function stateChanged() { 
if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete") {
  document.querySelector("#txtHint").innerHTML = "";
  var result = JSON.parse(xmlHttp.responseText);
  for(i=0; i<result.length; i++) {
    document.querySelector("#txtHint").innerHTML += '<div class="searchResult"><ul><li><a href="#"><img src="'+baseURL+'images/artist_images/'+result[i].artist_image+'" class="artistthumb"><p class="aname">'+result[i].artist_name+'</p></a></li></ul></div><br></br>';
  }
  

}
}

function GetXmlHttpObject() {
xmlHttp=null;
try
 {
 // Firefox, Opera 8.0+, Safari
 xmlHttp=new XMLHttpRequest();
 }
catch (e)
 {
 //Internet Explorer
 try
  {
  xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
  }
 catch (e)
  {
  xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
 }
return xmlHttp;
}
