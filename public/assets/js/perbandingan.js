$(document).ready(function() {
    //PERBANDINGAN UNIVERSITAS
    removeUniversitasBanding();
    //PERBANDINGAN JURUSAN
    removeJurusanBanding();
});

var cookie_compare_id = $.parseJSON($.cookie('compare_univ_id'));
for (var i = 0; i < cookie_compare_id.length; i++) {
    startPagination(cookie_compare_id[i]);
}

function startPagination(univ_id) {
    var pagePartsJurusan = $(".paginate-jurusan-" + univ_id);
    var numPagesJurusan = pagePartsJurusan.length;
    var perPageJurusan = 5;
    pagePartsJurusan.slice(perPageJurusan).hide();
    $("#page-nav-jurusan-detail-" + univ_id).pagination({
        items: numPagesJurusan,
        itemsOnPage: perPageJurusan,
        cssStyle: "light-theme",
        onPageClick: function (pageNum) {
            var start = perPageJurusan * (pageNum - 1);
            var end = start + perPageJurusan;
            pagePartsJurusan.hide()
            .slice(start, end).show();
        }
    });
}

/*
======================================================
PERBANDINGAN UNIVERSITAS
======================================================
*/
function removeUniversitasBanding() {
    $('body').on('click', '.remove-compare-universitas', function() {
        var data_id = $(this).data('id');
        var data_name = $(this).parent().find('.list-info > .title').text();
        var data_img = $(this).parent().find('.list-img > img').attr('src');
        removeElementCompareUniversitas(data_id, data_name, data_img);
    });
}

function removeElementCompareUniversitas(data_id, data_name, data_img) {
    var compare_list_id = $.parseJSON($.cookie('compare_univ_id'));
    var compare_list_name = $.parseJSON($.cookie('compare_univ_name'));
    var compare_list_img = $.parseJSON($.cookie('compare_univ_img'));
    var removeItemId = data_id;
    var removeItemName = data_name;
    var removeItemImg = data_img;

    compare_list_id = jQuery.grep(compare_list_id, function(value) {
        return value != removeItemId;
    });

    compare_list_name = jQuery.grep(compare_list_name, function(value) {
        return value != removeItemName;
    });

    compare_list_img = jQuery.grep(compare_list_img, function(value) {
        return value != removeItemImg;
    });

    $.cookie('compare_univ_id', JSON.stringify(compare_list_id));
    $.cookie('compare_univ_name', JSON.stringify(compare_list_name));
    $.cookie('compare_univ_img', JSON.stringify(compare_list_img));

    $('.div-' + data_id).remove();

    var total_perbandingan = parseInt($.cookie('total_perbandingan')) - 1;
    $.cookie('total_perbandingan', total_perbandingan);

    if(total_perbandingan == 0){
        window.history.back();
    }
}

/*
======================================================
PERBANDINGAN JURUSAN
======================================================
*/

function removeJurusanBanding() {
    $('body').on('click', '.remove-compare-jurusan', function() {
        var data_id = $(this).data('id');
        var data_name = $(this).parent().find('.list-info > .sub-title').text();
        var data_img = $(this).parent().find('.list-img > img').attr('src');
        removeElementCompareJurusan(data_id, data_name, data_img);
    });
}

function removeElementCompareJurusan(data_id, data_name, data_img) {
    var compare_list_id = $.parseJSON($.cookie('compare_jurusan_id'));
    var compare_list_name = $.parseJSON($.cookie('compare_jurusan_name'));
    var compare_list_img = $.parseJSON($.cookie('compare_jurusan_img'));
    var removeItemId = data_id;
    var removeItemName = data_name;
    var removeItemImg = data_img+'_'+data_id;

    compare_list_id = jQuery.grep(compare_list_id, function(value) {
        return value != removeItemId;
    });

    compare_list_name = jQuery.grep(compare_list_name, function(value) {
        return value != removeItemName;
    });

    compare_list_img = jQuery.grep(compare_list_img, function(value) {
        return value != removeItemImg;
    });

    $.cookie('compare_jurusan_id', JSON.stringify(compare_list_id));
    $.cookie('compare_jurusan_name', JSON.stringify(compare_list_name));
    $.cookie('compare_jurusan_img', JSON.stringify(compare_list_img));

    $('.div-' + data_id).remove();

    var total_perbandingan = parseInt($.cookie('total_perbandingan')) - 1;
    $.cookie('total_perbandingan', total_perbandingan);

    if(total_perbandingan == 0){
        window.history.back();
    }
}

/*
======================================================
======================================================
======================================================
*/

// function reload() {
//     var token = $('meta[name="csrf-token"]').attr('content');
//     var urlAct = window.location.origin+'/perbandingan';
//     if (($.cookie('compare_univ_id') == undefined) && ($.cookie('compare_jurusan_id') == undefined)) {
//         Swal.fire({
//             type: 'error',
//             text: 'Daftar perbandingan tidak ada'
//         });
//         return;
//     }else {
//         var data_id_universitas = $.parseJSON($.cookie('compare_univ_id'));
//         var data_id_jurusan = $.parseJSON($.cookie('compare_jurusan_id'));
//     }
//
//     $.redirect(urlAct, {'_token': token, 'var_id_universitas': data_id_universitas, 'var_id_jurusan': data_id_jurusan});
// }
