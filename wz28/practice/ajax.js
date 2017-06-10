function Ajax(){
	this.html=null;
	if(window.XMLHttpRequest){
		this.html=new XMLHttpRequest}
    else{
		this.html=new ActiveXObject("Microsoft.XMLHTTP");}	
		}
Ajax.prototype.ajaxopen=function(method,url){
	this.html.open(method,url);
	}
Ajax.prototype.setHeader=function(){
	this.html.setRequestHeader("content-type","application/x-www-form-urlencoded");
	}
Ajax.prototype.onready=function(fun){
	this.html.onreadystatechange=fun;
	}
	Ajax.prototype.send=function(data){
		this.html.send(data);
		}	
