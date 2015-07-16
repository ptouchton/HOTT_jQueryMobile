
//dThe code shown below lists the configuration options from the documentation along with their default values.


$(document).on('mobileinit',function(){
$.mobile.loader.prototype.options.text='loading'; 
$.mobile.loader.prototype.options.textVisible=false; 
$.mobile.loader.prototype.options.theme='a'; 
$.extend($.mobile,{
     	ajaxEnabled:true, 
   	allowCrossDomainPages:false, 
   	autoInitializePage:true, 
   	hoverDelay:200,
   	defaultPageTransition:'fade', 
     	getMaxScrollForTransition:function(){return 3;}, 
     	gradeA:function(){return $.support.mediaquery;}, 
     	hashListeningEnabled:true, 
     	ignoreContentEnabled:false, 
     	linkBindidngEnabled:true, 
     	maxTransitionWidth:false,
     	ns:'', 
     	pageLoadErrorMessage:'Error Loading Page', 
     	pageLoadErrorMessageTheme:'a', 
     	phonegapNavigationEnabled:false, 
     	pushStateEnabled:true
     	//Transition Fallbacks 
    	  }); 
    }); 


