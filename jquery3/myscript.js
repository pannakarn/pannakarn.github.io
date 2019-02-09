$(document).ready(function() {
    $('#submit-btn').click(function() {
        var keyword = $('#input-text').val();

        $("#data_table td").remove();

        $.ajax({
            url: "data.json",
            dataType: "json"
        }).done(function(response) {

            response.forEach(element => {

                var keyUpper = keyword.toUpperCase();

                if(element.name.toUpperCase().includes(keyUpper) ||
                    element.fansiteName.toUpperCase().includes(keyUpper) || element.type.toUpperCase().includes(keyUpper) || 
                    element.goodsName.toUpperCase().includes(keyUpper) || element.code.toUpperCase().includes(keyUpper) || 
                    element.delivery.toUpperCase().includes(keyUpper) || element.status.toUpperCase().includes(keyUpper)) {

                    var row = $("<tr />")
                    $("#data_table").append(row);
                    row.append($("<td>" + element.name + "</td>"));
                    row.append($("<td>" + element.fansiteName + "</td>"));
                    row.append($("<td>" + element.type + "</td>"));
                    row.append($("<td>" + element.goodsName + "</td>"));
                    row.append($("<td>" + element.code + "</td>"));
                    row.append($("<td>" + element.delivery + "</td>"));
                    row.append($("<td id=\"status-column\">" + element.status + "</td>"));
                }

            });
        });

    });

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
        response.forEach(element => {
            var row = $("<tr />")
            $("#data_table").append(row);
            row.append($("<td>" + element.name + "</td>"));
            row.append($("<td>" + element.fansiteName + "</td>"));
            row.append($("<td>" + element.type + "</td>"));
            row.append($("<td>" + element.goodsName + "</td>"));
            row.append($("<td>" + element.code + "</td>"));
            row.append($("<td>" + element.delivery + "</td>"));
            row.append($("<td id=\"status-column\">" + element.status + "</td>"));
        });
    });


    $('#advance-btn').click(function() {
        $('.advance-inner').fadeIn();
    });

    $('#advance-submit-btn').click(function() {
        var name = $('#name-text').val().toUpperCase();
        var fansiteName = $('#fansite-text').val().toUpperCase();
        var type = $('#type-text').val().toUpperCase();
        var delivery = $('#derivery-text').val().toUpperCase();
        var status = $('#status-text').val().toUpperCase();
        var goodsName = $('#goods-name-text').val().toUpperCase();
        var code = $('#code-text').val().toUpperCase();

        $("#data_table td").remove();


        $.ajax({
            url: "data.json",
            dataType: "json"
        }).done(function(response) {

            response.forEach(element => {

                if( element.name.toUpperCase().includes(name) && element.goodsName.toUpperCase().includes(goodsName) &&
                    element.code.toUpperCase().includes(code) &&
                    element.fansiteName.toUpperCase().includes(fansiteName) && element.type.toUpperCase().includes(type) && 
                    element.delivery.toUpperCase().includes(delivery) && element.status.toUpperCase().includes(status)) {
    
                            var row = $("<tr />")
                            $("#data_table").append(row);
                            row.append($("<td>" + element.name + "</td>"));
                            row.append($("<td>" + element.fansiteName + "</td>"));
                            row.append($("<td>" + element.type + "</td>"));
                            row.append($("<td>" + element.goodsName + "</td>"));
                            row.append($("<td>" + element.code + "</td>"));
                            row.append($("<td>" + element.delivery + "</td>"));
                            row.append($("<td id=\"status-column\">" + element.status + "</td>"));
                    }
            });
        });
    });


    $('#name-text').keypress(function(event){
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if(keycode == '13'){
            $('#advance-submit-btn').click();
        }
    }); 
    $('#fansite-text').keypress(function(event){
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if(keycode == '13'){
            $('#advance-submit-btn').click();
        }
    }); 
    $('#type-text').keypress(function(event){
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if(keycode == '13'){
            $('#advance-submit-btn').click();
        }
    }); 
    $('#derivery-text').keypress(function(event){
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if(keycode == '13'){
            $('#advance-submit-btn').click();
        }
    }); 
    $('#status-text').keypress(function(event){
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if(keycode == '13'){
            $('#advance-submit-btn').click();
        }
    });
    $('#code-text').keypress(function(event){
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if(keycode == '13'){
            $('#advance-submit-btn').click();
        }
    });
    $('#goods-name-text').keypress(function(event){
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if(keycode == '13'){
            $('#advance-submit-btn').click();
        }
    });   


});