Debug={};
Debug.Write=function(inString){
	var temp=document.getElementById("debug");
	temp.style.visibility='visible';
	addTo=temp.getElementsByTagName("hr");
	newElement1=document.createTextNode(inString);
	newElement2=document.createElement("BR");
	temp.insertBefore(newElement1,addTo[1]);
	temp.insertBefore(newElement2,newElement1.nextSibling);
};
Debug.JQWrite=function(inString){
	var debugDiv=$("#debug");
	debugDiv.html(inString+"<br>"+debugDiv.html());
};
Debug.clear=function(){
	var debugDiv=$("#debug");
	debugDiv.html("");
};
