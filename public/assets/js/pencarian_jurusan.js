var maxBandingJurusan = 3;
$(document).ready(function(){
    /*
    ======================================================
    PAGINATION PENCARIAN JURUSAN
    ======================================================
    */
    var pagePartsJurusan = $(".paginate-jurusan");
    var numPagesJurusan = pagePartsJurusan.length;
    var perPageJurusan = 5;
    pagePartsJurusan.slice(perPageJurusan).hide();
    $("#page-nav-jurusan").pagination({
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

    /*
    ======================================================
    PERBANDINGAN JURUSAN
    ======================================================
    */
    getCompareJurusan();
    setCheckBoxJurusan();
    setJurusanBanding();
    removeJurusanBanding();
    getBandingTotalJurusan();
});
/*
======================================================
PERBANDINGAN JURUSAN
======================================================
*/
function getCompareJurusan(){
    $('body').on('change', '.box-compare-jurusan', function() {
        $('.nama-banding').empty().text('Jurusan');
        var nilai_flag = 0;
        var val_flag = $("#flag_compare").val();

        var cookie_compare_id = $.cookie('compare_jurusan_id');
        var cookie_compare_name = $.cookie('compare_jurusan_name');
        var cookie_compare_img = $.cookie('compare_jurusan_img');

        var data_id = $(this).val();
        var data_name = $(this).closest('.jurusan-list').find('h4.nama-jurusan', this).text().trim();
        var data_img = $(this).closest('.jurusan-list').find('.jurusan-list-logo > img').attr('src');

        if ($(this).is(':checked')) {
            $('#disable_universitas').remove();

            nilai_flag = parseInt(val_flag)+1;
            if(nilai_flag > maxBandingJurusan) {
                $(this).removeAttr('checked');
                Swal.fire({
                    type: 'error',
                    text: 'Daftar perbandingan Anda penuh, silahkan hapus salah satu jurusan'
                });
            }else{
                $('#flag_compare').val(nilai_flag);
                $('#comparison').removeClass("close");

                if ($.cookie('compare_jurusan_id') == undefined) {
                    $.cookie('compare_jurusan_id', JSON.stringify([data_id]));
                    $.cookie('compare_jurusan_name', JSON.stringify([data_name]));
                    $.cookie('compare_jurusan_img', JSON.stringify([data_img+'_'+data_id]));

                    $.cookie('compare_univ_id', JSON.stringify([]));
                    $.cookie('compare_univ_name', JSON.stringify([]));
                    $.cookie('compare_univ_img', JSON.stringify([]));
                } else {
                    var compare_list_id = $.parseJSON(cookie_compare_id);
                    var compare_list_name = $.parseJSON(cookie_compare_name);
                    var compare_list_img = $.parseJSON(cookie_compare_img);
                    compare_list_id.push(data_id);
                    compare_list_name.push(data_name);
                    compare_list_img.push(data_img+'_'+data_id);

                    $.cookie('compare_jurusan_id', JSON.stringify(compare_list_id));
                    $.cookie('compare_jurusan_name', JSON.stringify(compare_list_name));
                    $.cookie('compare_jurusan_img', JSON.stringify(compare_list_img));

                }
                $.cookie('total_perbandingan', nilai_flag);
                setElementCompareJurusan(data_id, data_name, data_img);
                $('.infobox-universitas').before('<div id="disable_universitas"></div>');
            }

        } else {
            removeElementCompareJurusan(data_id, data_name, data_img);
            nilai_flag = parseInt(val_flag)-1;
            $('#flag_compare').val(nilai_flag);
            if(nilai_flag == 0){
                $('#comparison').addClass("close");
                $('#disable_universitas').remove();
            }
            $.cookie('total_perbandingan', nilai_flag);
        }
    });
}

function removeJurusanBanding() {
    $('body').on('click', '.remove-compare-jur', function() {
        var data_id = $(this).data('id');
        var data_name = $(this).parent().find('.product-title').text();
        var data_img = $(this).parent().find('.div-image > img').attr('src');

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

    $(':input.box-compare-jurusan[value=' + data_id + ']').prop('checked', false);
    $('.item-' + data_id).remove();

    var total_perbandingan = parseInt($.cookie('total_perbandingan')) - 1;
    $.cookie('total_perbandingan', total_perbandingan);
    $('#flag_compare').val(total_perbandingan);

    if(total_perbandingan == 0){
        $('#comparison').addClass("close");
        $('#disable_universitas').remove();
    }
}

function setElementCompareJurusan(data_id, data_name, data_img) {
    $('<li class="item item-'+ data_id +'" data-id="'+ data_id +'"><div class="compare-product-info'+ data_id +' comparelist-flytab"><span class="close remove-compare-jur" data-id="'+ data_id +'"></span><div class="div-image"><img class="product-image" src="'+ data_img +'"></div><h4 class="product-title" data-name="'+ data_name +'">'+ data_name +'</h4></li>').appendTo('.comparison-ul');
}

function setCheckBoxJurusan() {
    if ($.cookie('compare_jurusan_id') == undefined) return;
    var compare_list = $.parseJSON($.cookie('compare_jurusan_id'));
    $(':input.box-compare-jurusan').prop('checked', false);
    $.each(compare_list, function(key, val) {
        $(':input.box-compare-jurusan[value=' + val + ']').prop('checked', true);
    });
}

function setJurusanBanding() {
    if ($.cookie('compare_jurusan_id') == undefined) return;
    var compare_list_id = $.parseJSON($.cookie('compare_jurusan_id'));
    var compare_list_name = $.parseJSON($.cookie('compare_jurusan_name'));
    var compare_list_img = $.parseJSON($.cookie('compare_jurusan_img'));

    if (compare_list_id.length === 0) {
        $('#comparison').removeClass("close");
        $('#disable_universitas').remove();
    }else{
        $('.nama-banding').empty().text('Jurusan');
        $('#comparison').addClass("close");
        $('.infobox-universitas').before('<div id="disable_universitas"></div>');
    }
    $.each(compare_list_id, function(key, val) {
        var val_img = compare_list_img[key].split("_");
        $('<li class="item item-'+ val +'" data-id="' + val + '">'+
        '<div class="compare-product-info' + val + ' comparelist-flytab">'+
        '<span class="close remove-compare-jur" data-id="' + val + '"></span>'+
        '<div class="div-image"><img class="product-image" src="'+ val_img[0] +'"></div>'+
        '<h4 class="product-title" data-name="' + compare_list_name[key] + '">'+ compare_list_name[key] +'</h4>'+
        '</li>').appendTo('.comparison-ul');
    });
}

function getBandingTotalJurusan() {
    if ($.cookie('total_perbandingan') == undefined) return;
    var total_perbandingan = parseInt($.cookie('total_perbandingan'));
    $('#flag_compare').val(total_perbandingan);
    $('#comparison').removeClass("close");
    if(total_perbandingan == 0){
        $('#comparison').addClass("close");
        $('#disable_universitas').remove();
    }
}
