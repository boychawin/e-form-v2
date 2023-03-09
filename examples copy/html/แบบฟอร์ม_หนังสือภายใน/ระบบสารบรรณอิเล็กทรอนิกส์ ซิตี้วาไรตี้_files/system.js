function addUploadedFile(targetId, data) {
    var data = $.parseJSON(data);
    var id = '';
    var image = '';
    if (data.type == 'i') {
        image = '<img width="64" height="64" src="../' + data.filepath + '" /><br />';
        image += '<div href="javascript:;" class="display_image ui-state-default ui-corner-all" onClick="setDisplayImage(this);" style="width:80px;height:30px;float:left;margin:3px;">' +
            '   <span class="ui-icon ui-icon-check" style="float:left;"></span>' +
            '       Set default image' +
            '</div>' +
            '<div href="javascript:;" class="display_image ui-state-default ui-corner-all" onClick="insertImage_tiny(\'description\', \'../' + data.filepath + '\');"  style="width:80px;height:30px;float:left;margin:3px;">' +
            '   <span class="ui-icon ui-icon-check" style="float:left;"></span>' +
            '       แทรกในเนื้อหา' +
            '</div>';
    } else {
        image = '<img width="24" height="24" src="images/fileicons_16/' + data.extension + '.png" />';
    }
    var html = '<table width="" style="font-size: 13px;" border="0" cellpadding="0" cellspacing="2" class="admintable" id="file_' + data.id + '">' +
        '<tbody>' +
        '<tr>' +
        '   <td width="200" rowspan="4" class="gridmenu" align="center"> ' + image + ' </td>' +
        '   <td width="300" class="gridmenu" style="vertical-align:top; font-weight: normal;">ชื่อไฟล์: ' + data.filename + '</td>' +

        '   <td width="25" align="center" class="gridmenu">' +
        '       <a href="javascript:;" onclick="removeFile(\'' + data._CMD + '\', \'' + data.table + '\', ' + data.id + ', \'file_' + data.id + '\')">' +
        '           <img src="images/icons/16px/delete.png" width="16" height="16" />' +
        '       </a>' +
        '   </td>' +
        '</tr>' +
        '<tr>' +
        '   <td  class="gridmenu"  colspan="3" style="vertical-align:top;font-weight: normal;">ขนาดไฟล์  : ' + data.size + '<br/>จำนวนหน้า <input type="number" name="countPage" onkeyup="changeCountPage(\'' + data._CMD + '\', \'' + data.table + '\', ' + data.id + ', this.value)"/></td>' +

        '</tr>' +
        '' +
        '</tbody>' +
        '</table>';
    $("#" + targetId).append(html);
}

function addUploadedFilePDF(targetId, data) {
    var data = $.parseJSON(data);
    var id = '';
    var image = '';
    if (data.type == 'i') {
        image = '<img width="64" height="64" src="../' + data.filepath + '" /><br />';
        image += '<div href="javascript:;" class="display_image ui-state-default ui-corner-all" onClick="setDisplayImage(this);" style="width:80px;height:30px;float:left;margin:3px;">' +
            '   <span class="ui-icon ui-icon-check" style="float:left;"></span>' +
            '       Set default image' +
            '</div>' +
            '<div href="javascript:;" class="display_image ui-state-default ui-corner-all" onClick="insertImage_tiny(\'description\', \'../' + data.filepath + '\');"  style="width:80px;height:30px;float:left;margin:3px;">' +
            '   <span class="ui-icon ui-icon-check" style="float:left;"></span>' +
            '       แทรกในเนื้อหา' +
            '</div>';
    } else {
        image = '<img width="24" height="24" src="images/fileicons_16/' + data.extension + '.png" />';
    }
    var html = '<table width="" style="font-size: 13px;" border="0" cellpadding="0" cellspacing="2" class="admintable" id="file_' + data.id + '">' +
        '<tbody>' +
        '<tr>' +
        '   <td width="200" rowspan="4" class="gridmenu" align="center"> ' + image + ' </td>' +
        '   <td width="300" class="gridmenu" style="vertical-align:top; font-weight: normal;">ชื่อไฟล์: ' + data.filename + '</td>' +

        '   <td width="25" align="center" class="gridmenu">' +
        '       <a href="javascript:;" onclick="removeFile(\'' + data._CMD + '\', \'' + data.table + '\', ' + data.id + ', \'file_' + data.id + '\')">' +
        '           <img src="images/icons/16px/delete.png" width="16" height="16" />' +
        '       </a>' +
        '   </td>' +
        '</tr>' +
        '<tr>' +
        '   <td  class="gridmenu"  colspan="3" style="vertical-align:top;font-weight: normal;">ขนาดไฟล์  : ' + data.size + '</td>' +
        '</tr>' +
        '' +
        '</tbody>' +
        '</table>' +
        '<br />';
    $("#" + targetId).html(html);
}


function insertImage_tiny(insertAt_id, img) {
    $("#" + insertAt_id).tinymce().execCommand('mceInsertContent', false, '<img src="../../../' + img + '" />');
}



function updateSequence(id, tableName, _CMD, htmlObject) {
    var url = base_url + _CMD + "/updateSequence/" + id + "/?seq=" + htmlObject.value;
    var fileId = 'file' + id;
    $.post(url,
        function(data) {
            $('#' + fileId).remove();
            $(htmlObject).parent().append('<div class="ui-state-active ui-corner-all" style="height:15px;padding:5px;" id="' + fileId + '">update seccessfull</div>');
            setTimeout("removeObject(" + fileId + ");", 1200);
        });
}


function removeFile(path, table, fileId, tblId) {
    $.post(
        path + '/removeFile/', {
            id: fileId,
            table: table
        },
        function(data) {
            $('#' + tblId).remove();
        }
    )
}

function changeCountPage(path, table, fileId, value) {
    /*console.log(path);
    console.log(table);
    console.log(fileId);
    console.log(value);*/
    $.post(
        path + '/changeCountPage/', {
            id: fileId,
            table: table,
            page: value,
        },
        function(data) {

        }
    )
}


function updateFileDesc(id, tableName, _CMD, htmlObject) {
    var url = base_url + _CMD + "/updateFileDESC/" + id;
    var fileId = 'file' + id;
    $.post(url, {
            description: htmlObject.value
        },
        function(data) {
            $('#' + fileId).remove();
            $(htmlObject).parent().append('<div class="ui-state-active ui-corner-all" style="height:15px;padding:5px;" id="' + fileId + '">update seccessfull</div>');
            setTimeout("removeObject(" + fileId + ");", 1200);
        });
}


function removeObject(obj) {
    $('#' + obj.id).fadeOut(function() {
        $('#' + obj.id).remove();
    });

}



function setDisplayImage(htmlObject) {
    var src = $(htmlObject).parent("table td").children("img").attr('src');
    $('#display_image-show').attr('src', src);
    $('#display_image-show').css('display', 'inline');
    $('#display_image').val(src.replace('../', ''));
}



function multiSelected(chk) {
    if (chk.checked) {
        $('input.chk-topic').attr('checked', 'checked');
    } else {
        $('input.chk-topic').removeAttr('checked');
    }
}


function isNumber(data) {
    return new RegExp('[0-9]+', 'g').test(data);
}

var showTopicDialog_url = '';
var showTopicDialog_id = '';

function showTopicDialog(id, url) {
    showTopicDialog_url = url;
    showTopicDialog_id = id;
    $('#system-dialog').load(url);
    $('#system-dialog').dialog({
        title: "Topic",
        width: '80%',
        height: '600',
        modal: true
    });
}

function showTopicDialog_reload() {
    $('#system-dialog').load(showTopicDialog_url);
}