/*! Admin custom.js
 * ================
 * Custom JS for admin function.
 *
 * @Author  Isht.Ae
 * @Email   <ae.isht@gmail.com>
 * @version 1.0.0
 */
$(document).ready(function () {
    if ($('#url_link_input').length) {
        $('#url_link_input').attr('readonly', true);
        if (typeof linkVal !== 'undefined') {
            $('#option-type').val(menuType).change();
            // the variable is defined
        } else {
            $('#url_link_input').val('');
        }
    }
    if ($('#btnSelectArticleCat').length) {
        $('#btnSelectArticleCat').attr('disabled', 'disabled');
    }
    if ($('#btnSelectCatalogCat').length) {
        $('#btnSelectCatalogCat').attr('disabled', 'disabled');
    }
});

function getConfirmation(msg) {
    var retVal = confirm(msg);
    if (retVal === true) {
        return true;
    } else {
        return false;
    }
}

if ($('#subCats').length) // use this if you are using id to check
{
    $("#subCats").chained("#cats");
}

if ($('#desc_area').length) // use this if you are using id to check
{
    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        var url = BASE_URL + 'assets/admin_default/js/';
        console.log(BASE_URL);

        var editor = CKEDITOR.replace('desc_area',{
            filebrowserBrowseUrl        : url + 'ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl   : url + 'ckfinder/ckfinder.html?type=Images',
            filebrowserFlashBrowseUrl   : url + 'ckfinder/ckfinder.html?type=Flash',
            filebrowserUploadUrl        : url + 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl   : url + 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
            filebrowserFlashUploadUrl   : url + 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
        });
        CKFinder.setupCKEditor( editor, '../../../' );
    });
}

$('#option-type').on('change', function () {
    if (this.value === 'pages') {
        $('#pages-select').removeClass('hidden');

        if (!$("#article-select").hasClass("hidden")) {
            $('#article-select').addClass('hidden');
        }
        if (!$("#catalog-select").hasClass("hidden")) {
            $('#catalog-select').addClass('hidden');
        }
        $('#url_link_input').attr('readonly', true);
        if (typeof linkVal === 'undefined') {
            $('#url_link_input').val('');
        }
    } else if (this.value === 'articles') {
        $('#article-select').removeClass('hidden');

        if (!$("#pages-select").hasClass("hidden")) {
            $('#pages-select').addClass('hidden');
        }
        if (!$("#catalog-select").hasClass("hidden")) {
            $('#catalog-select').addClass('hidden');
        }
        if (typeof linkVal !== 'undefined') {
            if (linkVal === 'articles') {
                $('input[name=article_type][value=1]').attr('checked', true);
            } else if (linkVal === 'articles/categories') {
                $('input[name=article_type][value=2]').attr('checked', true);
            } else {
                $('input[name=article_type][value=3]').attr('checked', true);
            }
        }
        var art_type = $('input[name=article_type]:checked', '#article-select').val();
        $('#url_link_input').attr('readonly', true);
        if (art_type === '1') {
            $('#url_link_input').val('articles');
            $('#btnSelectArticleCat').attr('disabled', 'disabled');
        } else if (art_type === '2') {
            $('#url_link_input').val('articles/categories');
            $('#btnSelectArticleCat').attr('disabled', 'disabled');
        } else {
            if (typeof linkVal === 'undefined') {
                $('#url_link_input').val('');
            }
            $('#btnSelectArticleCat').removeAttr('disabled');
        }
    } else if (this.value === 'catalogs') {
        $('#catalog-select').removeClass('hidden');

        if (!$("#pages-select").hasClass("hidden")) {
            $('#pages-select').addClass('hidden');
        }
        if (!$("#article-select").hasClass("hidden")) {
            $('#article-select').addClass('hidden');
        }
        if (typeof linkVal !== 'undefined') {
            if (linkVal === 'catalogs') {
                $('input[name=catalog_type][value=1]').attr('checked', true);
            } else if (linkVal === 'catalogs/categories') {
                $('input[name=catalog_type][value=2]').attr('checked', true);
            } else {
                $('input[name=catalog_type][value=3]').attr('checked', true);
            }
        }
        var catalog_type = $('input[name=catalog_type]:checked', '#catalog-select').val();
        $('#url_link_input').attr('readonly', true);
        if (catalog_type === '1') {
            $('#url_link_input').val('catalogs');
            $('#btnSelectCatalogCat').attr('disabled', 'disabled');
        } else if (catalog_type === '2') {
            $('#url_link_input').val('catalogs/categories');
            $('#btnSelectCatalogCat').attr('disabled', 'disabled');
        } else {
            if (typeof linkVal === 'undefined') {
                $('#url_link_input').val('');
            }
            $('#btnSelectCatalogCat').removeAttr('disabled');
        }
    } else if (this.value === 'link' || this.value === 'eksternal') {
        $('#url_link_input').attr('readonly', false);
        if (typeof linkVal === 'undefined') {
            $('#url_link_input').val('');
        }

        if (!$("#pages-select").hasClass("hidden")) {
            $('#pages-select').addClass('hidden');
        }
        if (!$("#article-select").hasClass("hidden")) {
            $('#article-select').addClass('hidden');
        }
        if (!$("#catalog-select").hasClass("hidden")) {
            $('#catalog-select').addClass('hidden');
        }
    } else {
        if (!$("#pages-select").hasClass("hidden")) {
            $('#pages-select').addClass('hidden');
        }
        if (!$("#article-select").hasClass("hidden")) {
            $('#article-select').addClass('hidden');
        }
        if (!$("#catalog-select").hasClass("hidden")) {
            $('#catalog-select').addClass('hidden');
        }
        $('#url_link_input').attr('readonly', true);
        $('#url_link_input').val('contacts');
    }
});

$('input[name=article_type]:radio').on('change', function () {
    if (this.value === '1') {
        $('#url_link_input').val('articles');
        $('#btnSelectArticleCat').attr('disabled', 'disabled');
    } else if (this.value === '2') {
        $('#url_link_input').val('articles/categories');
        $('#btnSelectArticleCat').attr('disabled', 'disabled');
    } else {
        $('#url_link_input').val('');
        $('#btnSelectArticleCat').removeAttr('disabled');
    }
});

$('input[name=catalog_type]:radio').on('change', function () {
    if (this.value === '1') {
        $('#url_link_input').val('catalogs');
        $('#btnSelectCatalogCat').attr('disabled', 'disabled');
    } else if (this.value === '2') {
        $('#url_link_input').val('catalogs/categories');
        $('#btnSelectCatalogCat').attr('disabled', 'disabled');
    } else {
        $('#url_link_input').val('');
        $('#btnSelectCatalogCat').removeAttr('disabled');
    }
});

//FUNCTION FOR EVERYTHING
function showSelectPages() {
    $("#modalTitle").html('List All Pages');
    $.ajax({
        url: BASE_URL + 'admin/menus/list_pages_ajax',
        method: 'POST',
        success: function (resp) {
            var resp = JSON.parse(resp);
            var htmlStr = '';
            if (resp.success) {
                htmlStr += '<input type="hidden" name="popuptype" id="popupType" value="list-pages">';
                htmlStr += '<div id="list-pages">';
                $.each(resp.data, function (i, item) {
                    htmlStr += '<div class="radio">';
                    htmlStr += '<label>';
                    htmlStr += '<input type="radio" name="pages_list" value="' + resp.data[i].hal_slug + '">' + resp.data[i].hal_title;
                    htmlStr += '</label>';
                    htmlStr += '</div>';
                });
                htmlStr += '</div>';
                $("#modalContent").html(htmlStr);
            } else {
                $("#modalContent").html('Tidak Ada Daftar Pages');
            }
        }
    });
    $("#ajaxModal").modal('show');
}

function showArticleCategory() {
    $("#modalTitle").html('List All Article Category');
    $.ajax({
        url: BASE_URL + 'admin/menus/list_artcat_ajax',
        method: 'POST',
        success: function (resp) {
            var resp = JSON.parse(resp);
            var htmlStr = '';
            if (resp.success) {
                htmlStr += '<input type="hidden" name="popuptype" id="popupType" value="list-article-cat">';
                htmlStr += '<div id="list-art-cat">';
                $.each(resp.data, function (i, item) {
                    htmlStr += '<div class="radio">';
                    htmlStr += '<label>';
                    htmlStr += '<input type="radio" name="category_art_list" value="' + resp.data[i].ct_slug + '">' + resp.data[i].ct_name;
                    htmlStr += '</label>';
                    htmlStr += '</div>';
                });
                htmlStr += '</div>';
                $("#modalContent").html(htmlStr);
            } else {
                $("#modalContent").html('Tidak Ada Daftar Category');
            }
        }
    });
    $("#ajaxModal").modal('show');
}

function showCatalogCategory() {
    $("#modalTitle").html('List All Catalog Category');
    $.ajax({
        url: BASE_URL + 'admin/menus/list_catscat_ajax',
        method: 'POST',
        success: function (resp) {
            var resp = JSON.parse(resp);
            var htmlStr = '';
            if (resp.success) {
                htmlStr += '<input type="hidden" name="popuptype" id="popupType" value="list-catalog-cat">';
                htmlStr += '<div id="list-cats-cat">';
                $.each(resp.data, function (i, item) {
                    htmlStr += '<div class="radio">';
                    htmlStr += '<label>';
                    htmlStr += '<input type="radio" name="category_cats_list" value="' + resp.data[i].ct_slug + '">' + resp.data[i].ct_name;
                    htmlStr += '</label>';
                    htmlStr += '</div>';
                });
                htmlStr += '</div>';
                $("#modalContent").html(htmlStr);
            } else {
                $("#modalContent").html('Tidak Ada Daftar Category');
            }
        }
    });
    $("#ajaxModal").modal('show');
}

function closeModal() {
    var type = $("#popupType").val();
    if (type === 'list-pages') {
        var pageVal = $('input[name=pages_list]:checked', '#list-pages').val();
        $('#url_link_input').val('pages/read/' + pageVal);
    } else if (type === 'list-article-cat') {
        var artVal = $('input[name=category_art_list]:checked', '#list-art-cat').val();
        $('#url_link_input').val('articles/category/' + artVal);
    } else {
        var catsVal = $('input[name=category_cats_list]:checked', '#list-cats-cat').val();
        $('#url_link_input').val('catalogs/category/' + catsVal);
    }

    $("#ajaxModal").modal('hide');
}