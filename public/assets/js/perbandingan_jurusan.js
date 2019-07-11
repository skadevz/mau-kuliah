$(document).ready(function() {
    //PERBANDINGAN JURUSAN
    removeJurusanBanding();
});
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
