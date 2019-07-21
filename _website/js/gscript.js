var ajax = function(ajaxUrl){
	var xhttp = new XMLHttpRequest();

	xhttp.open("POST", "/en/?ajax=true", true);
	xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded; charset=UTF-8');
	xhttp.send(ajaxUrl);

	return xhttp;
};


(function(){
	
	if(typeof document.getElementsByClassName("mainBtn")[0] !== "undefined"){
		document.getElementsByClassName("mainBtn")[0].addEventListener("click", (e) => {
			
			var elems = document.getElementById("quick_form").elements;

			var request = [];
			for(var i = 0; i < elems.length; i++){
				if(elems[i].type=="button"){ continue; }

				if(elems[i].type=="checkbox"){
					var yesno = "NO";
					if(elems[i].checked){
						yesno="YES";
					}
					request.push( encodeURIComponent(elems[i].getAttribute("title").replace(" ", "."))+"="+yesno );
				}else{
					request.push( encodeURIComponent(elems[i].getAttribute("title").replace(" ", "."))+"="+encodeURIComponent(elems[i].value) );	
				}
				
			}

			var serializedForm = request.join("&");

			
			var xhttp = ajax("type=sendRequests&"+serializedForm);
			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					var responseText = JSON.parse(this.responseText);

					if(responseText.Error.Code==1){
						console.log(responseText.Error.Text);						
					}else{
						alert("You registered successfully");
						location.reload();
					}
				}
			};

		});
	};

})();