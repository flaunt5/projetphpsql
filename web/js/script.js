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

/**
 *
 * @param table - table à effectuer sort
 * @param order - ordre à respecter
 */

function sortTable(table, order) {
    var asc   = order === 'asc',
        tbody = table.find('tbody');

    tbody.find('tr').sort(function(a, b) {
        if (asc) {
            return $('td:first', a).text().localeCompare($('td:first', b).text());
        } else {
            return $('td:first', b).text().localeCompare($('td:first', a).text());
        }
    }).appendTo(tbody);
}