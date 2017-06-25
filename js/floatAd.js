function $d(element){
	if(arguments.length>1){
		for(var i=0,length=arguments.length,elements=[];i<length;i++){
			elements.push($d(arguments[i]));
		}
		return elements;
	}
	if(typeof element=="string"){
		return document.getElementById(element);
	}else{
		return element;
	}
}
//类创建函数
var Class={
	create:function(){
		return function(){
			this.initialize.apply(this,arguments);
		}
	}
}
//对象属性方法扩展
Function.prototype.bind=function(object){
	var method=this;
	return function(){
		method.apply(object,arguments);
	}
}
var floatAd=Class.create();
floatAd.prototype={
	initialize:function(id,top){
		this.id=$d(id);
		this.id.style.position="absolute";
		this.top=top||80;
		this.id.style.right="5px";
		this.id.style.top=this.top+"px";
		this.interId=setInterval(this.scroll.bind(this),50);
	},
	scroll:function(){
		this.stmnStartPoint = parseInt(this.id.style.top,10);
		this.stmnEndPoint =document.documentElement.scrollTop+ this.top;
		if(navigator.userAgent.indexOf("Chrome")>0){
			this.stmnEndPoint=document.body.scrollTop+this.top;	
		}
		if (this.stmnStartPoint!=this.stmnEndPoint){
			this.stmnScrollAmount=Math.ceil(Math.abs(this.stmnEndPoint-this.stmnStartPoint)/15);
			this.id.style.top=parseInt(this.id.style.top,10)+((this.stmnEndPoint<this.stmnStartPoint)?-this.stmnScrollAmount:this.stmnScrollAmount)+"px";
		}
	}
}
function hide(){ 
online.style.visibility='hidden'; 
} 