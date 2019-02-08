$(document).ready(function() {
    $('#submit-btn').click(function() {
        // console.log('click on submit button');
        // console.log($('#input-text').val());
        // console.log($('#input-text').val().includes("may"));

        var keyword = $('#input-text').val();

        $("#data_table td").remove();

        console.log(keyword);
        $.ajax({
            url: "data.json",
            dataType: "json"
        }).done(function(response) {
            console.log('ok');
            response.forEach(element => {

                var keyUpper = keyword.toUpperCase();

                if(element.fansiteName.toUpperCase().includes(keyUpper) || element.type.toUpperCase().includes(keyUpper) || 
                    element.goodsName.toUpperCase().includes(keyUpper) || element.code.toUpperCase().includes(keyUpper) || 
                    element.amount == keyword || element.period.toUpperCase().includes(keyUpper) ||
                    element.derivery.toUpperCase().includes(keyUpper) || element.status.toUpperCase().includes(keyUpper)) {

                    var row = $("<tr />")
                    $("#data_table").append(row);
                    row.append($("<td>" + element.fansiteName + "</td>"));
                    row.append($("<td>" + element.type + "</td>"));
                    row.append($("<td>" + element.goodsName + "</td>"));
                    row.append($("<td>" + element.code + "</td>"));
                    row.append($("<td id=\"amount\">" + element.amount + "</td>"));
                    row.append($("<td>" + element.period + "</td>"));
                    row.append($("<td>" + element.derivery + "</td>"));
                    row.append($("<td>" + element.status + "</td>"));

                    console.log('find');
                    console.log(element.fansiteName);
                }


            
            });
        });

    });



    // $('#submit-btn').keypress(function (e) {
    //     var key = e.which;
    //     if(key == 13)  // the enter key code
    //     {
    //     $('input[name = butAssignProd]').click();
    //         return false;  
    //     }
    // });

    $('#input-text').keypress(function(event){
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if(keycode == '13'){
        $('#submit-btn').click();
    }
});   



    $.ajax({
        url: "data.json",
        dataType: "json"
    }).done(function(response) {
        // console.log(response);
        response.forEach(element => {
            // console.log(element.fansiteName, element.type, element.goodsName, element.code, element.amount, element.period, 
            //     element.derivery, element.status);
            var row = $("<tr />")
            $("#data_table").append(row);
            row.append($("<td>" + element.fansiteName + "</td>"));
            row.append($("<td>" + element.type + "</td>"));
            row.append($("<td>" + element.goodsName + "</td>"));
            row.append($("<td>" + element.code + "</td>"));
            row.append($("<td id=\"amount\">" + element.amount + "</td>"));
            row.append($("<td>" + element.period + "</td>"));
            row.append($("<td>" + element.derivery + "</td>"));
            row.append($("<td>" + element.status + "</td>"));
        });
    });

});

