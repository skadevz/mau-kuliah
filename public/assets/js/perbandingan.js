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
