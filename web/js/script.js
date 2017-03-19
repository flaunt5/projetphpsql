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

$("#result").on('click', 'th.tablehead', function (e) {
    var theTarget = $(e.target);
    var table = $("#"+ theTarget.data("table"));
    sortTable(table);
})

function sortTable(table) {
    var rows = table.find('tr:gt(0)').toArray().sort(comparer($(this).index()))
    this.asc = !this.asc
    if (!this.asc){rows = rows.reverse()}
    for (var i = 0; i < rows.length; i++){table.append(rows[i])}
}
function comparer(index) {
    return function(a, b) {
        var valA = getCellValue(a, index), valB = getCellValue(b, index)
        return $.isNumeric(valA) && $.isNumeric(valB) ? valA - valB : valA.localeCompare(valB)
    }
}
function getCellValue(row, index){
    return $(row).children('td').eq(index).html()
}