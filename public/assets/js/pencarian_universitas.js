var maxBandingUniversitas = 3;
$(document).ready(function(){
    /*
    ======================================================
    PAGINATION PENCARIAN UNIVERSITAS
    ======================================================
    */
    var pagePartsUniversitas = $(".paginate-universitas");
    var numPagesUniversitas = pagePartsUniversitas.length;
    var perPageUniversitas = 6;
    pagePartsUniversitas.slice(perPageUniversitas).hide();

    $("#page-nav-universitas").pagination({
        items: numPagesUniversitas,
        itemsOnPage: perPageUniversitas,
        cssStyle: "light-theme",
        onPageClick: function (pageNum) {
            var start = perPageUniversitas * (pageNum - 1);
            var end = start + perPageUniversitas;
            pagePartsUniversitas.hide()
            .slice(start, end).show();
        }
    });

    /*
    ======================================================
    PERBANDINGAN UNIVERSITAS
    ======================================================
    */
    getCompareUniversitas();
    setCheckBoxUniversitas();
    setUniversitasBanding();
    removeUniversitasBanding();
    getBandingTotalUniv();
});
/*
======================================================
PERBANDINGAN UNIVERSITAS
======================================================
*/
function getCompareUniversitas(){
    $('body').on('change', '.box-compare-universitas', function() {
        $('.nama-banding').empty().text('Universitas');
        var nilai_flag = 0;
        var val_flag = $("#flag_compare").val();

        var cookie_compare_id = $.cookie('compare_univ_id');
        var cookie_compare_name = $.cookie('compare_univ_name');
        var cookie_compare_img = $.cookie('compare_univ_img');

        var data_id = $(this).val();
        var data_name = $(this).closest('.univ-list').find('h4.nama-universitas', this).text().trim();
        var data_img = $(this).closest('.univ-list').find('.univ-list-logo > img').attr('src');

        if ($(this).is(':checked')) {
            $('#disable_jurusan').remove();

            nilai_flag = parseInt(val_flag)+1;
            if(nilai_flag > maxBandingUniversitas) {
                $(this).removeAttr('checked');
                Swal.fire({
                    type: 'error',
                    text: 'Daftar perbandingan Anda penuh, silahkan hapus salah satu kampus'
                });
            }else{
                $('#flag_compare').val(nilai_flag);
                $('#comparison').removeClass("close");

                if ($.cookie('compare_univ_id') == undefined) {
                    $.cookie('compare_univ_id', JSON.stringify([data_id]));
                    $.cookie('compare_univ_name', JSON.stringify([data_name]));
                    $.cookie('compare_univ_img', JSON.stringify([data_img]));

                    $.cookie('compare_jurusan_id', JSON.stringify([]));
                    $.cookie('compare_jurusan_name', JSON.stringify([]));
                    $.cookie('compare_jurusan_img', JSON.stringify([]));
                } else {
                    var compare_list_id = $.parseJSON(cookie_compare_id);
                    var compare_list_name = $.parseJSON(cookie_compare_name);
                    var compare_list_img = $.parseJSON(cookie_compare_img);
                    compare_list_id.push(data_id);
                    compare_list_name.push(data_name);
                    compare_list_img.push(data_img);

                    $.cookie('compare_univ_id', JSON.stringify(compare_list_id));
                    $.cookie('compare_univ_name', JSON.stringify(compare_list_name));
                    $.cookie('compare_univ_img', JSON.stringify(compare_list_img));
                }
                $.cookie('total_perbandingan', nilai_flag);
                setElementCompare(data_id, data_name, data_img);
                $('.infobox-jurusan').before('<div id="disable_jurusan"></div>');
            }
        } else {
            removeElementCompare(data_id, data_name, data_img);
            nilai_flag = parseInt(val_flag)-1;
            $('#flag_compare').val(nilai_flag);
            if(nilai_flag == 0){
                $('#comparison').addClass("close");
                $('#disable_jurusan').remove();
            }
            $.cookie('total_perbandingan', nilai_flag);
        }
    });
}

function removeUniversitasBanding() {
    $('body').on('click', '.remove-compare', function() {
        var data_id = $(this).data('id');
        var data_name = $(this).parent().find('.product-title').text();
        var data_img = $(this).parent().find('.div-image > img').attr('src');
        removeElementCompare(data_id, data_name, data_img);
    });
}

function removeElementCompare(data_id, data_name, data_img) {
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

    $(':input.box-compare-universitas[value=' + data_id + ']').prop('checked', false);
    $('.item-' + data_id).remove();

    var total_perbandingan = parseInt($.cookie('total_perbandingan')) - 1;
    $.cookie('total_perbandingan', total_perbandingan);
    $('#flag_compare').val(total_perbandingan);

    if(total_perbandingan == 0){
        $('#comparison').addClass("close");
        $('#disable_jurusan').remove();
    }
}

function setElementCompare(data_id, data_name, data_img) {
    $('<li class="item item-'+ data_id +'" data-id="'+ data_id +'"><div class="compare-product-info'+ data_id +' comparelist-flytab"><span class="close remove-compare" data-id="'+ data_id +'"></span><div class="div-image"><img class="product-image" src="'+ data_img +'"></div><h4 class="product-title" data-name="'+ data_name +'">'+ data_name +'</h4></li>').appendTo('.comparison-ul');
}

function setCheckBoxUniversitas() {
    if ($.cookie('compare_univ_id') == undefined) return;
    var compare_list = $.parseJSON($.cookie('compare_univ_id'));
    $(':input.box-compare-universitas').prop('checked', false);
    $.each(compare_list, function(key, val) {
        $(':input.box-compare-universitas[value=' + val + ']').prop('checked', true);
    });
}

function setUniversitasBanding() {
    if ($.cookie('compare_univ_id') == undefined) return;
    var compare_list_id = $.parseJSON($.cookie('compare_univ_id'));
    var compare_list_name = $.parseJSON($.cookie('compare_univ_name'));
    var compare_list_img = $.parseJSON($.cookie('compare_univ_img'));
    if (compare_list_id.length === 0) {
        $('#comparison').removeClass("close");
        $('#disable_jurusan').remove();
    }else{
        $('.nama-banding').empty().text('Universitas');
        $('#comparison').addClass("close");
        $('.infobox-jurusan').before('<div id="disable_jurusan"></div>');
    }
    $.each(compare_list_img, function(key, val) {
        $('<li class="item item-'+compare_list_id[key]+'" data-id="' + compare_list_id[key] + '">'+
        '<div class="compare-product-info' + compare_list_id[key] + ' comparelist-flytab">'+
        '<span class="close remove-compare" data-id="' + compare_list_id[key] + '"></span>'+
        '<div class="div-image"><img class="product-image" src="'+ val +'"></div>'+
        '<h4 class="product-title" data-name="' + compare_list_name[key] + '">'+compare_list_name[key]+'</h4>'+
        '</li>').appendTo('.comparison-ul');
    });
}

function getBandingTotalUniv() {
    if ($.cookie('total_perbandingan') == undefined) return;
    var total_perbandingan = parseInt($.cookie('total_perbandingan'));
    $('#flag_compare').val(total_perbandingan);
    $('#comparison').removeClass("close");
    if(total_perbandingan == 0){
        $('#comparison').addClass("close");
        $('#disable_jurusan').remove();
    }
}
