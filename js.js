$(function () {
    ucitaj();
    obrisi();
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

function obrisi() {

    $(document).on('click', '#obrisi_dugme', function () {

        let id = $(this).attr('value');

        $.ajax({
            url: 'obrisi.php',
            method: 'post',
            data: { id: id },

            success: function (data) {
                $('#tbody').html(data);
            }
        })

    })
}





