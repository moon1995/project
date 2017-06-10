function Ajax(){
	this.xhtml=null;
	if(window.XMLHttpRequest){
		this.xhtml=new XMLHttpRequest();
	}else{
		this.xhtml=new ActiveXObject("Microsoft.XMLHTTP");
	}
		}

	Ajax.prototype.open=function(method,url){
		this.xhtml.open(method,url);
	}
	Ajax.prototype.header=function(){
		this.xhtml.setRequestHeader("content-type","application/x-www-form-urlencoded");
	}
	Ajax.prototype.onready=function(fun){
		this.xhtml.onreadystatechange=fun;
	}
	Ajax.prototype.Send=function(data){
		this.xhtml.send(data);

}
