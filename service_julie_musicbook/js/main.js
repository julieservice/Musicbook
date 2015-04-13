/*window.addEventListener("load", function() {	
	var searchRequest;
	var searchField = document.querySelector("#searchbox");

	searchField.addEventListener("keyup", function (){
		showResults(this.value)
	}, false);

	function showResults(str){
		searchRequest = createRequest();

		if(searchRequest==null){
			alert("Browser does not support HTTP Request");
			return;
		}

		var url="searchcustomer.php?searchstring="+str;
		searchRequest.onreadystatechange=searchStatus;
		searchRequest.open("GET",url,true);
		searchRequest.send(null);
	}

	function searchStatus(){
		if(searchRequest.readyState==4 || searchRequest.readyState=="complete"){
			document.getElementById("txtHint").innerHTML = searchRequest.responseText;
		}
	}

}, false);
	
	function displayInfo(id){
		var displayRequest;


		function displayCustomer(id){
			displayRequest = createRequest();
			if(displayRequest==null){
				alert("Browser not supported, Please upgrade");
				return;

			}

			var url="displaycustomer.php?custid="+id;
			displayRequest.onreadystatechange=displayStatus;
			displayRequest.open("GET",url,true);
			displayRequest.send(null);
		}
		function displayStatus(){
			if(displayRequest.readyState==4 || displayRequest.readyState=="complete"){
				document.getElementById("maindiv").innerHTML=displayRequest.responseText;
			}
		}

		displayCustomer(id);
	}*/