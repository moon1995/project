function add(elem,event,fun){
	try{
		if(elem !=null && typeof elem=="object"){
			if(-[1,]){
				elem.addEventListener(event,fun);
			}else{
				elem.attachEvent("on"+event,fun);
			}
		}else{
			alert("对象为空或不是对象");
		}
	}catch(e){
		alert(e.message);
	}
}
