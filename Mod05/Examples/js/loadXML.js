$(document).on('pagecreate', function(e, ui){
	var nextID = 0;
	var str = '<div data-role="collapsibleset" id="albums">';
	var $main = $('div[role="main"]');
	$main.load('60s.xml', function(){

		
		$main.find('entry').each(function(){
			str += '<div data-role="collapsible" data-iconpos="left" id="album' + (++nextID) + '">';
			str += '<h2>' + $(this).attr('CD') + '</h2>';
			str += '<ul data-role="listview" data-inset="true">'
			str += '<li>BAND:' + $(this).attr('artist') + '</li>';
			str += '<li>YEAR:' + $(this).children('release').html() + '</li>'; 
			str += '<li>LABEL:' + $(this).children('label').html() + '</li>'; 
			str += '</ul>'
			str += '</div>';

		});
		str += '</div>';
		$main.html(str);
		$('#albums').collapsibleset();
		$('[data-role=listview]').listview();
		
	});
	

});
