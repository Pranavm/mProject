<html>
<head>
<script type="text/javascript">

// IMDb ID to Search
var imdbId = 1285016;

// Send Request
var output='{"employees":[';
var http = new XMLHttpRequest();
var omdbData="";
for(var i=imdbId;i<imdbId+3;i++){

http.open("GET", "http://www.omdbapi.com/?tomatoes=True&i=tt" + i, false);
http.send(null);

// Response to JSON

output=output+http.responseText+' ,';//put a comma in quotes


}

output=output.slice(0,-1);
output=output+' ] }';

//started new
//header("Location: localhost/write.php?output="+output);
window.location.assign("./write.php?output="+output)
//end
/*

for(var i=imdbId;i<imdbId+5;i++){
output=output+i+"\n";

}*/
/**/
var omdbJSON = eval("(" + output + ")");
//var omdbJSON=JSON.parse(output);
//document.write(omdbJSON.employees[0].Title);
//document.write(output); //newly edited
// Returns Movie Title
//alert(omdbJSON.Title);
/*
//send received file to php1.php
function myJavascriptFunction() { 
  var javascriptVariable = "John";
  window.location.href = "php1.php?name=" + javascriptVariable; 
}
myJavascriptFunction();
*/
</script>
</head>
</html>
