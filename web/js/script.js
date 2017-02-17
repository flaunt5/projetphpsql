/**
 * Created by cedric on 16/02/2017.
 */

if ( $( "#submit" ).length ) {
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
            $('#result').empty();
            $('#result').append(result);
        });
    });
}