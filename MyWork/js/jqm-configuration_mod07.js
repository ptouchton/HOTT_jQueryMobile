
//dThe code shown below lists the configuration options from the documentation along with their default values.


$(document).on('mobileinit',function(){
$.mobile.loader.prototype.options.text='new text...'; 
$.mobile.loader.prototype.options.textVisible=true; 
$.mobile.loader.prototype.options.theme='a'; 
$.mobile.loader.prototype.options.html='<span class="ui-bar ui-overlay-a ui-corner-all"><img src="css/images/ajax-loader.gif">Loading this...</span>'; 
$.extend($.mobile,{
     	ajaxEnabled:true, 
   	allowCrossDomainPages:false, 
   	autoInitializePage:true, 
   	hoverDelay:200,
   	defaultPageTransition:'pop', 
     	getMaxScrollForTransition:function(){return 8;}, 
     	gradeA:function(){return $.support.mediaquery;}, 
     	hashListeningEnabled:true, 
     	ignoreContentEnabled:false, 
     	linkBindidngEnabled:true, 
     	maxTransitionWidth:false,
     	ns:'', 
     	pageLoadErrorMessage:'We\'re sorry, we couldn\'t find the page you requested.', 
     	pageLoadErrorMessageTheme:'b', 
     	phonegapNavigationEnabled:false, 
     	pushStateEnabled:true
     	//Transition Fallbacks 
    	  }); 
    }); 


