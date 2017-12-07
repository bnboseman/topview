$(function() {
    loadFromAjax();
    $('.update-ticker').click(function(event) {
        event.preventDefault();
        loadFromAjax();
    })
});

function loadFromAjax() {
    var limit = $("#ticker-limit").val();
    $.ajax({
        url: '/ajax.php',
        data: {
            limit: limit
        },
        type: 'get'
    }).done(updateTables);
}

function updateTables(data) {
    $('#ticker-information tbody').empty();
    $.each(data, function(index, value) {
        $('#ticker-information tbody').append('<tr>' +
            '<td>' + index + '</td>' +
            '<td>' + value["15m"] + '</td>' +
            '<td>' + value["last"] + '</td>' +
            '<td>' + value["buy"] + '</td>' +
            '<td>' + value["sell"] + '</td>' +
            '<td>' + value["symbol"] + '</td>' +
            '</tr>');
    });
}