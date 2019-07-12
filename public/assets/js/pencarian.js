$(document).ready(function() {
    var token =  $('meta[name="csrf-token"]').attr('content');

    function formSearch() {
        var urlAct = window.location.origin + '/search'
        var value = $('#input_search').val();
        var lokasi_kampus = $('#select-lokasi-kampus').val();
        var tipe_kampus = $('#select-tipe-kampus').val();
        var akreditasi_kampus = $('#select-akreditasi-kampus').val();
        var sistem_perkuliahan = $('#select-sistem-perkuliahan').val();

        $.redirect(urlAct, {
            '_token': token,
            'value': value,
            'lokasi_kampus': lokasi_kampus,
            'tipe_kampus': tipe_kampus,
            'akreditasi_kampus': akreditasi_kampus,
            'sistem_perkuliahan': sistem_perkuliahan,
        });
    }

    $('#select-lokasi-kampus, #select-tipe-kampus, #select-akreditasi-kampus, #select-sistem-perkuliahan').on('change', function () {
        formSearch();
    });
    /*
    ======================================================
    */
    $('#select-lokasi-kampus').select2({
        placeholder: "Lokasi Kampus",
        width: 'resolve'
    });
    $('#select-tipe-kampus').select2({
        placeholder: "Tipe Kampus",
        width: 'resolve',
        // theme: "classic"
    });
    $('#select-akreditasi-kampus').select2({
        placeholder: "Akreditasi Kampus",
        width: 'resolve',
        // theme: "classic"
    });
    $('#select-sistem-perkuliahan').select2({
        placeholder: "Sistem Perkuliahan",
        width: 'resolve',
        // theme: "classic"
    });
});

$('.comparison-close-btn').click(function(e) {
    $('#comparison').addClass("close");
});

$('.compare-hidden-toggle').click(function(e) {
    $('#comparison').removeClass("close");
});

/**
* SUBMIT PROSES BANDING
*/

function prosesSubmitBanding(urlAct,token) {
    if (($.cookie('compare_univ_id') == undefined) && ($.cookie('compare_jurusan_id') == undefined)) {
        Swal.fire({
            type: 'error',
            text: 'Daftar perbandingan tidak ada'
        });
        return;
    }else {
        var data_id_universitas = $.parseJSON($.cookie('compare_univ_id'));
        var data_id_jurusan = $.parseJSON($.cookie('compare_jurusan_id'));
        if ((data_id_universitas.length === 1) || (data_id_jurusan.length === 1)) {
            Swal.fire({
                type: 'error',
                text: 'Pilih minimal 2 universitas / jurusan terlebih dahulu'
            });
            return;
        }
        if ((data_id_universitas.length === 0) && (data_id_jurusan.length === 0)) {
            Swal.fire({
                type: 'error',
                text: 'Daftar perbandingan tidak ada'
            });
            return;
        }
    }

    $.redirect(urlAct, {'_token': token, 'var_id_universitas': data_id_universitas, 'var_id_jurusan': data_id_jurusan});
}

/**
 * CLEAR COOKIES PERBANDINGAN
 */

 function clearCookiesPerbandingan() {
     $.cookie('compare_jurusan_id', JSON.stringify([]));
     $.cookie('compare_jurusan_name', JSON.stringify([]));
     $.cookie('compare_jurusan_img', JSON.stringify([]));
     $.cookie('compare_univ_id', JSON.stringify([]));
     $.cookie('compare_univ_name', JSON.stringify([]));
     $.cookie('compare_univ_img', JSON.stringify([]));
     $.cookie("total_perbandingan", '0');
     $('.custom-control-input').attr('checked', false);
     $('.comparison-ul > .item').remove();
     $("#flag_compare").val(0);
     $('#comparison').addClass("close");
     $('#disable_jurusan').remove();
     $('#disable_universitas').remove();
 }
