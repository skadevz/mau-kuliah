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

$(document).ready(function() {
    getCompare();
    setCheckBox();
    setUniversitasBanding();
    getBandingTotalUniv();
    removeUniversitasBanding();

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

    // Grab whatever we need to paginate
    var pageParts = $(".paginate");

    // How many parts do we have?
    var numPages = pageParts.length;
    // How many parts do we want per page?
    var perPage = 5;

    // When the document loads we're on page 1
    // So to start with... hide everything else
    pageParts.slice(perPage).hide();
    // Apply simplePagination to our placeholder
    $("#page-nav").pagination({
        items: numPages,
        itemsOnPage: perPage,
        cssStyle: "light-theme",
        // We implement the actual pagination
        //   in this next function. It runs on
        //   the event that a user changes page
        onPageClick: function (pageNum) {
            // Which page parts do we show?
            var start = perPage * (pageNum - 1);
            var end = start + perPage;

            // First hide all page parts
            // Then show those just for our page
            pageParts.hide()
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

function getCompare(){
    $('body').on('change', '.box-compare', function() {
        var nilai_flag = 0;
        var val_flag = $("#flag_compare").val();

        var cookie_compare = $.cookie('compare_univ_id');
        var cookie_compare_name = $.cookie('compare_univ_name');
        var cookie_compare_img = $.cookie('compare_univ_img');

        var data_id = parseInt($(this).val());
        var data_name = $(this).closest('.univ-list').find('h4.nama-universitas', this).text().trim();
        var data_img = $(this).closest('.univ-list').find('.univ-list-logo > img').attr('src');

        if ($(this).is(':checked')) {
            nilai_flag = parseInt(val_flag)+1;
            if(nilai_flag > 3) {
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
                    var compare_list_id = $.parseJSON(cookie_compare);
                    var compare_list_name = $.parseJSON(cookie_compare_name);
                    var compare_list_img = $.parseJSON(cookie_compare_img);
                    compare_list_id.push(data_id);
                    compare_list_name.push(data_name);
                    compare_list_img.push(data_img);

                    $.cookie('compare_univ_id', JSON.stringify(compare_list_id));
                    $.cookie('compare_univ_name', JSON.stringify(compare_list_name));
                    $.cookie('compare_univ_img', JSON.stringify(compare_list_img));
                }
                $.cookie('total_univ', nilai_flag);
                setElementCompare(data_id, data_name, data_img);
            }

        } else {
            removeElementCompare(data_id, data_name, data_img);
            nilai_flag = parseInt(val_flag)-1;
            $('#flag_compare').val(nilai_flag);
            if(nilai_flag == 0){
                $('#comparison').addClass("close");
            }
            $.cookie('total_univ', nilai_flag);
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

    $(':input.box-compare[value=' + data_id + ']').prop('checked', false);
    $('.item-' + data_id).remove();

    var total_univ = parseInt($.cookie('total_univ')) - 1;
    $.cookie('total_univ', total_univ);
    $('#flag_compare').val(total_univ);
    if(total_univ == 0){
        $('#comparison').addClass("close");
    }
}

function setElementCompare(data_id, data_name, data_img) {
    $('<li class="item item-'+ data_id +'" data-id="'+ data_id +'"><div class="compare-product-info'+ data_id +' comparelist-flytab"><span class="close remove-compare" data-id="'+ data_id +'"></span><div class="div-image"><img class="product-image" src="'+ data_img +'"></div><h4 class="product-title" data-name="'+ data_name +'">'+ data_name +'</h4></li>').appendTo('.comparison-ul');
}

function setCheckBox() {
    if ($.cookie('compare_univ_id') == undefined) return;

    var compare_list = $.parseJSON($.cookie('compare_univ_id'));

    $.each(compare_list, function(key, val) {
        $(':input.box-compare[value=' + val + ']').prop('checked', true);
    });
}

function setUniversitasBanding() {
    if ($.cookie('compare_univ_id') == undefined) return;

    var compare_list_id = $.parseJSON($.cookie('compare_univ_id'));
    var compare_list_name = $.parseJSON($.cookie('compare_univ_name'));
    var compare_list_img = $.parseJSON($.cookie('compare_univ_img'));

    $.each(compare_list_img, function(key, val) {
        $('<li class="item item-'+compare_list_id[key]+'" data-id="' + compare_list_id[key] + '"><div class="compare-product-info' + compare_list_id[key] + ' comparelist-flytab"><span class="close remove-compare" data-id="' + compare_list_id[key] + '"></span><div class="div-image"><img class="product-image" src="'+ val +'"></div><h4 class="product-title" data-name="' + compare_list_name[key] + '">'+compare_list_name[key]+'</h4></li>').appendTo('.comparison-ul');
    });
}

function getBandingTotalUniv () {
    if ($.cookie('total_univ') == undefined) return;
    $('#flag_compare').val($.cookie('total_univ'));
    $('#comparison').removeClass("close");
}
