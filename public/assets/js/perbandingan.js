$(document).ready(function() {
    //PERBANDINGAN UNIVERSITAS
    // getCompareUniversitas();
    // setCheckBoxUniversitas();
    // setUniversitasBanding();
    removeUniversitasBanding();
    // getBandingTotalUniv();
    //PERBANDINGAN JURUSAN
    // getCompareJurusan();
    // setCheckBoxJurusan();
    // setJurusanBanding();
    // removeJurusanBanding();
    // getBandingTotalJurusan();

});

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
