/**
 * Created by cedric on 16/02/2017.
 */
$('#submit').on('click',function (e) {
    e.preventDefault();
    var id = $('#id').val(),
        offset = $('#offset').val(),
        url = "ajaxViewMultipleBank/"+id+"/"+offset;
    $.ajax({
       url: url,
        method: 'GET',
        dataType: 'html'
    }).done(function (result) {
        $('#result').empty();
        $('#result').append(result);
    });
});