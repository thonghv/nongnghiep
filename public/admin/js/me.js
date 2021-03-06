/**
 * @thonghv
 * ------------------
 * You should not use this file in production.
 * This file is for demo purposes only.
 */
$(function() {
    //  Bind the event handler to the "submit" JavaScript event
    $('#frm_group_menu').submit(function() {

        // Get the Login Name value and trim it
        var name = $.trim($('#group_name').val());

        // Check if empty of not
        if (name === '') {
            $("#group_name").addClass("inputError");
            return false;
        }
    });
})

$(function() {
    //  Bind the event handler to the "submit" JavaScript event
    $('#frm_up_group_menu').submit(function() {

        // Get the Login Name value and trim it
        var name = $.trim($('#up_group_name').val());

        // Check if empty of not
        if (name === '') {
            $("#up_group_name").addClass("inputError");
            return false;
        }
    });

    $('#pcode_fr_sub_menu').submit(function() {

        // Get the Login Name value and trim it
        var name = $.trim($('#sub_menu_name').val());

        if ($('#groups-input').val() == "") {
            $('#sub_menu_alert').css("display", "");
            return false;
        }

        // Check if empty of not
        if (name === '') {
            $("#sub_menu_name").addClass("inputError");
            return false;
        }
    });

    $('#pcode_fr_up_sub_menu').submit(function() {

        // Get the Login Name value and trim it
        var name = $.trim($('#up_sub_menu_name').val());

        // Check if empty of not
        if (name === '') {
            $("#up_sub_menu_name").addClass("inputError");
            return false;
        }
    });
})

function onLoadImage(input, index) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#pre_img_' + index)
                .attr('src', e.target.result)
                .width(290);
            $("#pre_img_" + index).show();
        };
        reader.readAsDataURL(input.files[0]);
    }
};

function onAddMore() {

    var index = getIndex();
    var row = "<tr id = 'p_media_r" + index + "'>" +
        "<td style = 'width: 316px;'>" +
        "<span class='control-fileupload'>" +
        "<input type='file' class='upload' name='userfile[]' onChange='onLoadImage(this," + index + ");'>" +
        "</span>" +
        "<img class='img-thumbnail' id='pre_img_" + index + "' name='hinh' src = ''>" +
        "</td>" +
        "<td><button type='button' class='btn btn-warning pcode-btn' id ='" + index + "' onClick = 'onRemoveFile(this)'><i class='fa fa-close'></i></button></td>" +
        "</tr>"
    $("table tbody").append(row);
}

function onAddFile(input) {

    var rowCount = getIndex();

    if (input.files && input.files[0]) {
        var markup = "<tr id = 'p_media_r" + rowCount + "'>" +
            "<td><img class='img-thumbnail' id='pre_img_" + rowCount + "' name='hinh' src ='" + input.files[0] + "'></td>" +
            "<td><button type='button' class=btn btn-primary' id ='" + rowCount + "' onClick = 'onRemoveFile(this)'>Hủy Bỏ</button></td></tr>";
        var url = $('input[type=file]').val();
        $("table tbody").append(markup);

        var reader = new FileReader();
        reader.onload = function(e) {
            $('#pre_img_' + rowCount)
                .attr('src', e.target.result)
                .width(676);
            $("#pre_img_" + rowCount).show();
        };
        reader.readAsDataURL(input.files[0]);
    }
};

function onRemoveFile(input) {
    $('#p_media_r' + input.id).remove();

    var index = 0;
    $('#p_media > tbody  > tr > td.pcode-col').each(function() {
        $(this).find("input:text").attr('name', 'input_img_' + index);
        index ++;
        //$('<input></input>').attr({'type': 'text', 'name' : 'abc', 'value' : 'thong ngủ'}).val("").appendTo($(this));
    });
};

function getIndex() {
    var rowCount = $('#p_media tr').length + 1;
    for (var i = 0; i <= rowCount; i++) {
        if (!$('#p_media_r' + i).length) {
            return i;
        }
    }

    return rowCount;
}

/** 
 * Form product
 */
$(function() {
    //  Bind the event handler to the "submit" JavaScript event
    $('#frm_product').submit(function() {

        // check product name
        var nameProduct = $.trim($('#name_product').val());
        if (nameProduct === '') {
            $("#name_product").addClass("inputError");
            return false;
        } else {
            $("#name_product").removeClass("inputError");
        }

        // check group menu
        if ($('#group_menu').val() == "") {
            $("#group_menu").addClass("inputError");
            return false;
        } else {
            $("#group_menu").removeClass("inputError");
        }

        // check sub menu
        if ($('#sub_menu').val() == "") {
            $("#sub_menu").addClass("inputError");
            return false;
        } else {
            $("#sub_menu").removeClass("inputError");
        }

    });
})