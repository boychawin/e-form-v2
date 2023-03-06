
let gArrayFonts = ['THSarabunIT๙', 'THSarabun'];
let fontSizes = ['8', '9', '10', '11', '12', '13', '14', '15', '16', '18', '20', '21', '22', '24', '28', '32', '36', '40', '48']
let lineHeights = ['0.2', '0.3', '0.4', '0.5', '0.6', '0.8', '1.0', '1.1', '1.2', '1.4', '1.5', '2.0', '3.0']
let nb = '\u00a0\u00a0\u00a0\u00a0\u00a0\u00a0\u00a0\u00a0\u00a0\u00a0\u00a0\u00a0\u00a0\u00a0\u00a0';

let $sumNote = $("#summernote")
  .summernote({
    styleTags: ['div', 'blockquote'],
    height: 500,
    width: 645,
    placeholder: "ใส่เนื้อหาที่นี่",
    codemirror: {
      // codemirror options
      theme: "readable",
    },
    fontNames: gArrayFonts,
    fontNamesIgnoreCheck: gArrayFonts,
    fontSizes: fontSizes,
    'lineHeights': lineHeights,
    dialogsInBody: true,
    toolbar: [
      // ['newParagraphThai', ['newParagraphThai']],
      ['newParagraph', ['newParagraph']],
      ['addNewTopic', ['addNewTopic']],
      ['AddNewParagraph', ['AddNewParagraph']],
      ['AddPage', ['AddPage']],
      // [groupName, [list of button]]
      ['style', ['style', 'clear']],
      ['font', ['fontname', 'fontsize', 'fontsizeunit', 'height', 'bold', 'italic', 'forecolor', 'backcolor', 'underline', 'strikethrough', 'superscript', 'subscript']],
      ['misc', ['undo', 'redo']],
      ['color', ['color']],
      ['para', ['ul', 'ol', 'paragraph']],
      ['table', ['table']],
      ['insert', ['link', 'picture', 'video', 'hr']],
      ['view', ['codeview', 'help']]
    ],
    buttons: {
      newParagraphThai: function (context) {
        var ui = $.summernote.ui;

        // create button
        var button = ui.button({
          contents: '<i class="fa fa-bold"></i> Thai Distributed   ',
          tooltip: 'Thai Distributed',
          click: function (e) {

            var editor = $('#summernote');
            var range = $.summernote.range.create(editor[0]);
            range.select();

            var style = {
              backgroundColor: 'yellow',
              color: 'blue',
              fontSize: '24px'
            };

            var styleNode = document.createElement('span');
            styleNode.style.cssText = Object.keys(style).map(function (key) {
              return key + ':' + style[key];
            }).join(';');

            // Update the style of the node
            styleNode.style.backgroundColor = 'red';
            styleNode.style.color = 'white';
            styleNode.style.fontSize = '16px';

            //select id
            // var selected = $('.note-editable').find('.note-editable')

            // document.execCommand('styleWithCSS', true, true);
            // document.execCommand('justifyFull', true, 'distribute');
            // document.execCommand('justifyFull', true, 'justify');
            // document.execCommand('justifyDistribute', false, null);
            // document.execCommand('formatblock', false, 'p')
          }
        });

        // add button to toolbar
        return button.render();
      },
      addNewTopic: function (context) {
        var ui = $.summernote.ui;

        // create button
        var button = ui.button({
          contents: '<i class="fa fa-bold"></i> + เพิ่มหัวข้อใหม่',
          tooltip: 'เพิ่มหัวข้อใหม่',
          click: function (e) {

            $('#myModal').modal('show');
            // Insert content into editor on form submission
           



          }
        });

        // add button to toolbar
        return button.render();
      },
      AddNewParagraph: function (context) {
        var ui = $.summernote.ui;

        // create button
        var button = ui.button({
          contents: '<i class="fa fa-bold"></i> + เพิ่มย่อหน้าใหม่',
          tooltip: 'เพิ่มย่อหน้าใหม่',
          click: function (e) {
            var editor = $('#summernote');
            var range = $.summernote.range.create(editor[0]);
            range.select();
            document.execCommand("insertText", true, "\u00a0\u00a0\u00a0\u00a0\u00a0\u00a0\u00a0\u00a0\u00a0\u00a0\u00a0\u00a0\u00a0\u00a0\u00a0");
          }
        });

        // add button to toolbar
        return button.render();
      },

      AddPage: function (context) {
        var ui = $.summernote.ui;

        // create button
        var button = ui.button({
          contents: '<i class="fa fa-bold"></i> + Add Page',
          tooltip: 'AddPage',
          click: function (e) {
            var editor = $('#summernote');
            var range = $.summernote.range.create(editor[0]);
            range.select();
            html = '<div class="text-container "><input type="text" name="footerNumber[]" class="footerNumber" id="footerNumber"></div><div class="text-container "><input type="text" name="footerNumber[]" class="footerNumber" id="footerNumber"></div><div class="text-container "><input type="text" name="footerNumber[]" class="footerNumber" id="footerNumber"></div><div class="text-container "><input type="text" name="footerNumber[]" class="footerNumber" id="footerNumber"></div><div class="text-container "><input type="text" name="footerNumber[]" class="footerNumber" id="footerNumber"></div><div class="text-container "><input type="text" name="footerNumber[]" class="footerNumber" id="footerNumber"></div><div class="text-container "><input type="text" name="footerNumber[]" class="footerNumber" id="footerNumber"></div><div class="text-container "><input type="text" name="footerNumber[]" class="footerNumber" id="footerNumber"></div>';
            document.execCommand("insertHTML", true, html);
          }
        });

        // add button to toolbar
        return button.render();
      },



      newParagraph: function (context) {
        var ui = $.summernote.ui;

        // create button
        var button = ui.button({
          contents: '<i class="fa fa-bold"></i> New Paragraph',
          tooltip: 'New',
          click: function (e) {

            var editor = $('#summernote');
            var range = $.summernote.range.create(editor[0]);
            range.select();
            document.execCommand("insertText", true, "\u00a0\u00a0\u00a0\u00a0\u00a0\u00a0\u00a0\u00a0\u00a0\u00a0\u00a0\u00a0\u00a0\u00a0\u00a0");
          }
        });

        // add button to toolbar
        return button.render();
      }
    },

    callbacks: {
      onAfterInsert: function(html) {
        // Add a page break after every 10 elements
        html = html.replace(/(<div>[^<]*<\/div>\s*){10}/g, '$&<div style="page-break-before: always; border: 1px solid black; border-color: red; padding: 10px;"></div>');
        return html;
    },

      onInit: function (e) {
        $("#summernote").summernote("code", sessionStorage.getItem("summernote")
        );
      },
      onChange: function (contents, $editable) {
        var markup = $("#summernote").summernote("code");
        sessionStorage.setItem("summernote", markup)
        $("#editor").val(markup);
      },
      // onPaste: function(e,x,d) {
      // 		$sumNote.code(($($sumNote.code()).find("font").remove()));
      // 	}
    },

  })
  .data("summernote");
// set line height to distributed
// $('.dropdown-line-height').find('.dropdown-toggle').eq(0).attr('data-value', 'Distributed');
// $('.dropdown-line-height').find('.dropdown-toggle').eq(0).html('<i class="note-icon-menu-check"></i> Distributed');
// $('.dropdown-line-height').find('.dropdown-menu li').eq(5).attr('data-value', 'Distributed');
// $('.dropdown-line-height').find('.dropdown-menu li').eq(5).html('<a href="#" data-value="Distributed"><i class="note-icon-check"></i> Distributed</a>');
// $('.dropdown-line-height').find('.dropdown-menu li').eq(5).on('click', function() {
//   $('.note-editable').css('line-height', 'Distributed');
// })
//get
$("#btn-submit-content").on("click", function () {
  var content = $('#myInput').val();
  var html = '<p  class="MsoNormal" style="text-align:justify;text-justify:inter-cluster"> <span lang="TH"  class="thai-istributed-class">' + nb+content + '</span> </p>';
  $('#summernote').summernote('pasteHTML', html);
  $('#myModal').modal('hide');

});

//reset
$("#btn-reset").on("click", function () {
  $sumNote.reset();
});

  // $('#bold-btn').click(() => {
  //   var selectedText = $('#summernote').summernote('createRange');
  //   if (!!selectedText.eo > 0) {
  //     var node = $('<span/>').addClass('custom-class').text(selectedText)[0];
  //     $('#summernote').summernote('insertNode', node);

  //   }

  // });


