/**
 * Created by cedric on 16/02/2017.
 */

    $('#submit').on('click',function (e) {
        e.preventDefault();
        var id = $('#id').val(),
            offset = $('#offset').val(),
            table = $('#table').val(),
            url = "/ajaxViewMultipleBank/"+id+"/"+offset+'/'+table;
        $.ajax({
            url: url,
            method: 'GET',
            dataType: 'html'
        }).done(function (result) {
            $('#result').fadeOut();
            $('#result').empty().hide().append(result).fadeIn();
            $('button.viewAction').on('click',function(){
                var id = this.value,
                    table = this.name,
                    url = "/ajaxViewRow/"+id+'/'+table;
                $.ajax({
                    url: url,
                    method: 'GET',
                    dataType: 'html'
                }).done(function (result) {
                    $('#result').fadeOut();
                    $('#result').empty().hide().append(result).fadeIn();
                });
            });
        });
    });