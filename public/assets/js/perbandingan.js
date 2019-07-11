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

function getDetailJurusan(id_universitas, id_jurusan, id_jenjang) {
    $.ajax({
        url: window.location.origin + '/api/get-major-detail/' + id_universitas + '/' + id_jurusan + '/' + id_jenjang,
        method: 'GET',
        data: {},
        success: function (data) {
            var nama_universitas = data.jurusan.nama_universitas;
            var nama_jurusan = data.jurusan.nama_jurusan;
            var nama_jenjang = data.jurusan.nama_jenjang;
            var akreditasi_jurusan = data.jurusan.akreditasi_jurusan;
            var telepon_jurusan = data.jurusan.telepon_jurusan;
            var fax_jurusan = (data.jurusan.fax_jurusan);
            var email_jurusan = data.jurusan.email_jurusan;
            var website_jurusan = data.jurusan.website_jurusan;
            var profil = data.jurusan.profil;
            var biaya_kuliah = data.biaya_kuliah;
            var a = "";

            $('#detail-nama-universitas').html(nama_universitas);
            $('#detail-nama-jurusan').html(nama_jurusan);
            $('#detail-jenjang').html(nama_jenjang);
            $('#detail-akreditasi-jurusan').html(akreditasi_jurusan);
            $('#detail-telepon-jurusan').html(telepon_jurusan ? telepon_jurusan : 'N/A');
            $('#detail-fax-jurusan').html(fax_jurusan ? fax_jurusan : 'N/A');
            $('#detail-email-jurusan').html(email_jurusan ? email_jurusan : 'N/A');
            $('#detail-website-jurusan').html(website_jurusan ? website_jurusan : 'N/A');
            $('#profil-jurusan').html(profil ? profil : 'N/A');


            if (biaya_kuliah.length > 0) {
                biaya_kuliah.forEach(function (biaya, i) {
                    a += "<tbody>",
                    a += "<tr>",
                    a += "<th>" + biaya.nama + "</th>",
                    a += "<td>Rp" + numeral(biaya.biaya).format("0,0") + "</td>",
                    a += "</tr>"
                });
            } else {
                a += "<tbody><tr><td>Data Tidak Ditemukan</td></tr></tbody>";
            }

            $('#table-detail-biaya').html(a);
        },
        error: function (e) {
            console.log(e);
        }
    })
}
