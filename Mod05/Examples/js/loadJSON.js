var details = {};

$(document).on('pagecreate', '#info-page', function () {

	$.getJSON('80s.json', function(data){
    var li = "";

    $.each(data, function (i, value) {
        li += '<li><a href="#" id="' + i + '" class="info-go">' + value.cd + '</a></li>';
    });

    //wait for append to finish before calling done
    $('#albumlist').append(li).promise().done(function () {
        //add the click event for the redirection to happen to #details-page
        $(this).on('click', '.info-go', function (evt) {
            evt.preventDefault();
            //store the information to be available to the next page
            details = data[this.id];
            
            
            $(':mobile-pagecontainer').pagecontainer('change', '#details-page');
            
        });

        //refresh list to enhance its styling.
        $(this).listview('refresh');
    });
});
});

$(document).on('pagecontainerbeforeshow',  function () {

    //retrieve the data from the previous page
  
    var info = details;
    var info_view = '';


    for (var key in info) {
        info_view += '<div class="ui-grid-a"><div class="ui-block-a"><div class="ui-bar field" style="font-weight : bold; text-align: left;">' +key.toUpperCase() + '</div></div><div class="ui-block-b"><div class="ui-bar value" style="width : 75%">' + info[key] + '</div></div></div>';
 }
    
    $(this).find('#contentDiv').html(info_view);

});