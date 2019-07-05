(function ($) {
    "use strict";

    // menu fixed js code
    $(window).scroll(function () {
        var window_top = $(window).scrollTop() + 1;
        if (window_top > 50) {
            $('.main_menu').addClass('menu_fixed animated fadeInDown');
        } else {
            $('.main_menu').removeClass('menu_fixed animated fadeInDown');
        }
    });

}(jQuery));
var maxBanding = 3;
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    //PERBANDINGAN UNIVERSITAS
    getCompareUniversitas();
    setCheckBoxUniversitas();
    setUniversitasBanding();
    removeUniversitasBanding();
    getBandingTotalUniv();
    //PERBANDINGAN JURUSAN
    getCompareJurusan();
    setCheckBoxJurusan();
    setJurusanBanding();
    removeJurusanBanding();
    getBandingTotalJurusan();

    var isMobile = false; //initiate as false
    // device detection
    if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)
        || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) {
        isMobile = true;
    }
    if(isMobile == true) maxBanding = 2;

    $('#select-lokasi-kampus').select2({
        placeholder: "Lokasi Kampus",
        width: 'resolve'
    });
    $('#select-tipe-kampus').select2({
        placeholder: "Tipe Kampus",
        width: 'resolve',
        theme: "classic"
    });
    $('#select-akreditasi-kampus').select2({
        placeholder: "Akreditasi Kampus",
        width: 'resolve',
        theme: "classic"
    });
    $('#select-sistem-perkuliahan').select2({
        placeholder: "Sistem Perkuliahan",
        width: 'resolve',
        theme: "classic"
    });

    // Grab whatever we need to paginate
    var pagePartsUniversitas = $(".paginate-universitas");
    var pagePartsJurusan = $(".paginate-jurusan");

    // How many parts do we have?
    var numPagesUniversitas = pagePartsUniversitas.length;
    var numPagesJurusan = pagePartsJurusan.length;
    // How many parts do we want per page?
    var perPageUniversitas = 6;
    var perPageJurusan = 5;

    // When the document loads we're on page 1
    // So to start with... hide everything else
    pagePartsUniversitas.slice(perPageUniversitas).hide();
    pagePartsJurusan.slice(perPageJurusan).hide();
    // Apply simplePagination to our placeholder
    $("#page-nav-universitas").pagination({
        items: numPagesUniversitas,
        itemsOnPage: perPageUniversitas,
        cssStyle: "light-theme",
        // We implement the actual pagination
        //   in this next function. It runs on
        //   the event that a user changes page
        onPageClick: function (pageNum) {
            // Which page parts do we show?
            var start = perPageUniversitas * (pageNum - 1);
            var end = start + perPageUniversitas;

            // First hide all page parts
            // Then show those just for our page
            pagePartsUniversitas.hide()
            .slice(start, end).show();
        }
    });
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
});

$('.comparison-close-btn').click(function(e) {
    $('#comparison').addClass("close");
});

$('.compare-hidden-toggle').click(function(e) {
    $('#comparison').removeClass("close");
});

/*
======================================================
PERBANDINGAN UNIVERSITAS
======================================================
*/
function getCompareUniversitas(){
    $('body').on('change', '.box-compare-universitas', function() {
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
            if(nilai_flag > maxBanding) {
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
        // console.log(data_img); return false;
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
        console.log('tidak');
        $('#comparison').removeClass("close");
        $('#disable_jurusan').remove();
    }else{
        console.log('ada');
        $('#comparison').addClass("close");
        $('.infobox-jurusan').before('<div id="disable_jurusan"></div>');
    }
    $.each(compare_list_img, function(key, val) {
        $('<li class="item item-'+compare_list_id[key]+'" data-id="' + compare_list_id[key] + '"><div class="compare-product-info' + compare_list_id[key] + ' comparelist-flytab"><span class="close remove-compare" data-id="' + compare_list_id[key] + '"></span><div class="div-image"><img class="product-image" src="'+ val +'"></div><h4 class="product-title" data-name="' + compare_list_name[key] + '">'+compare_list_name[key]+'</h4></li>').appendTo('.comparison-ul');
    });
}

function getBandingTotalUniv() {
    if ($.cookie('total_perbandingan') == undefined) return;
    var total_perbandingan = parseInt($.cookie('total_perbandingan'));
    $('#flag_compare').val(total_perbandingan);
    if(total_perbandingan == 0){
        $('#comparison').addClass("close");
        $('#disable_jurusan').remove();
    }
}
/*
======================================================
PERBANDINGAN JURUSAN
======================================================
*/
function getCompareJurusan(){
    $('body').on('change', '.box-compare-jurusan', function() {
        // console.log('tyu'); return false;
        var nilai_flag = 0;
        var val_flag = $("#flag_compare").val();

        var cookie_compare_id = $.cookie('compare_jurusan_id');
        var cookie_compare_name = $.cookie('compare_jurusan_name');
        var cookie_compare_img = $.cookie('compare_jurusan_img');

        var data_id = $(this).val();
        // console.log(data_id); return false;
        var data_name = $(this).closest('.jurusan-list').find('h4.nama-jurusan', this).text().trim();
        var data_img = $(this).closest('.jurusan-list').find('.jurusan-list-logo > img').attr('src');

        if ($(this).is(':checked')) {
            $('#disable_universitas').remove();

            nilai_flag = parseInt(val_flag)+1;
            if(nilai_flag > maxBanding) {
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
                    $.cookie('compare_jurusan_img', JSON.stringify([data_img]));
                } else {
                    var compare_list_id = $.parseJSON(cookie_compare_id);
                    var compare_list_name = $.parseJSON(cookie_compare_name);
                    var compare_list_img = $.parseJSON(cookie_compare_img);
                    compare_list_id.push(data_id);
                    compare_list_name.push(data_name);
                    compare_list_img.push(data_img);

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
        // console.log(data_id); return false;
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
        $('#comparison').addClass("close");
        $('.infobox-universitas').before('<div id="disable_universitas"></div>');
    }
    $.each(compare_list_img, function(key, val) {
        $('<li class="item item-'+compare_list_id[key]+'" data-id="' + compare_list_id[key] + '"><div class="compare-product-info' + compare_list_id[key] + ' comparelist-flytab"><span class="close remove-compare-jur" data-id="' + compare_list_id[key] + '"></span><div class="div-image"><img class="product-image" src="'+ val +'"></div><h4 class="product-title" data-name="' + compare_list_name[key] + '">'+compare_list_name[key]+'</h4></li>').appendTo('.comparison-ul');
    });
}

function getBandingTotalJurusan() {
    if ($.cookie('total_perbandingan') == undefined) return;
    var total_perbandingan = parseInt($.cookie('total_perbandingan'));
    $('#flag_compare').val(total_perbandingan);
    if(total_perbandingan == 0){
        $('#comparison').addClass("close");
        $('#disable_universitas').remove();
    }
}

/**
 * SUBMIT PROSES BANDING
 */

 function prosesSubmitBanding(urlAct,token) {
     if ($.cookie('compare_jurusan_id') == undefined && $.cookie('compare_univ_id') == undefined) {
         Swal.fire({
             type: 'error',
             text: 'Daftar perbandingan tidak ada'
         });
         return false;
     }else if ($.cookie('compare_jurusan_id') == undefined) {
         Swal.fire({
             type: 'error',
             text: 'Daftar perbandingan tidak ada'
         });
         return false;
     }else if ($.cookie('compare_univ_id') == undefined) {
         Swal.fire({
             type: 'error',
             text: 'Daftar perbandingan tidak ada'
         });
         return false;
     }else{
         var data_id_jurusan = $.parseJSON($.cookie('compare_jurusan_id'));
         var data_id_universitas = $.parseJSON($.cookie('compare_univ_id'));
         if ((data_id_jurusan.length === 0) && (data_id_universitas.length === 0)) {
             Swal.fire({
                 type: 'error',
                 text: 'Daftar perbandingan tidak ada'
             });
             return false;
         }
     }

        $.redirect(urlAct, {'_token': token, 'var_id_universitas': data_id_universitas, 'var_id_jurusan': data_id_jurusan});
 }
