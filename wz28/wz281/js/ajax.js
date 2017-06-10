function Ajax(){
  this.xmlHttp=null;
  if(window.XMLHttpRequest){
	  this.xmlHttp=new XMLHttpRequest(); 
  }else{
	  this.xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
}

Ajax.prototype.ajaxOpen=function(method,url){
	this.xmlHttp.open(method,url);
	};

Ajax.prototype.setHeader=function(){
	this.xmlHttp.setRequestHeader("content-type","application/x-www-form-urlencoded");
	};
	
Ajax.prototype.ajaxBind=function(func){
	this.xmlHttp.onreadystatechange=func;
	};

Ajax.prototype.ajaxSend=function(data){
	this.xmlHttp.send(data);
	};