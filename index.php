<!DOCTYPE html>
<html><head>
<script src="//code.jquery.com/jquery-latest.min.js"></script>
<title>Change URL Without Reloading Page</title>
</head><body>
<div id="content" style="margin-top:10px;">
 <h2><u>Change URL Without Reloading Page</u></h2>
 Here are some url's. When you click it, the URL field of your <b>Browser</b><br/> will only change and you will not be redirected to that page.
 <br/>
 <h3>
  <a href="php" class="no">PHP</a><br/>
  <a href="blogger" class="no">Blogger</a><br/>
  <a href="js" class="no">JS</a><br/>
  <a href="html5" class="no">HTML5</a><br/>
  <button class="btn">click</button>
  <button class="btn2">click2</button>

 </h3>
</div>
<script>
$(document).ready(function(){


		 if(window.history.replaceState==undefined){
		  alert("Your Browser Don't support window.history.replaceState() function.");
		 }


		 $(".no").on('click',function(){
		  //window.history.replaceState({},'/facebook.com','facebook.com/');
		 //history.pushState(null, null, 'https://twitter.com/hello');
		 //window.history.forward();
		//  var stateObj = { foo: "bar" };
		// history.pushState(stateObj, "page 2", "bar.html");
					// // Sets the new location of the current window.
			// window.location = "https://www.example.com";
			 
			// // Sets the new href (URL) for the current window.
			// window.location.href = "https://www.example.com";
			 
			// // Assigns a new URL to the current window.
			// window.location.assign("https://www.example.com");
			 
			// // Replaces the location of the current window with the new one.
			// window.location.replace("https://www.example.com");
			 
			// // Sets the location of the current window itself.
			// self.location = "https://www.example.com";
			 
			// // Sets the location of the topmost window of the current window.
			// top.location = "https://www.example.com";

				 });


		  $(".btn").on('click',function(){
		  	// document.getElementsByTagName('title')[0].innerHTML = 'facebook';
		  	// window.history.replaceState({},'/facebooktracker','/facebooktracker/');
		  	 window.location.replace='/facebook.com';
		  	});

		  $(".btn2").on('click',function(){
		  	window.location.replace='/facebook.com';
 		// 	var oldUrl = "http://localhost/facebooktracker/";
			// var url = new URL(oldUrl);
			// url.hostname = 'example.com';
			// url.href //'http://example.com:8080/one/two'
		  
		 });
});
</script>
<!-- http://www.subinsb.com/2013/10/change-browser-url-without-reloading-page-html-5-window-history-replaceState.html -->
</body></html>
