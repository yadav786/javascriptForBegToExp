<!DOCTYPE html>
<html>
<body>
<h2 style="text-align:center">JAVASCRIPT BOSS </h2>
<p id="jb"></p>  
<script>  
// Use of Closures 
function init(){
	var test="hello"; 
        function display(){
			return test;                   
		}  
		return display;  	
}                    
  //console.log(init());     
var callBack = init();             
console.log(callBack());         
document.getElementById("jb").innerHTML=callBack();      	                  
</script>              
</body>  
</html> 