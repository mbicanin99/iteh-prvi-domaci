$(function () {
    ucitaj();
});

function ucitaj() {
    $.ajax({
        url: 'ucitaj.php',
        method: 'get',

        success: function (data) {
            $('#tbody').html(data);
            $('#tbl-laptop').DataTable();
        }
    })
}




