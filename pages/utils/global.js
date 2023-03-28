
const modal = document.querySelector('.main-modal');
const closeButton = document.querySelectorAll('.modal-close');

const modalClose = () => {
    modal.classList.remove('fadeIn');
    modal.classList.add('fadeOut');
    setTimeout(() => {
        modal.style.display = 'none';
    }, 500);
}



function addPages(page, name = "description") {
    const parsedData = JSON.parse(sessionStorage.getItem(name)) || [];
    const itemIndex = parsedData[page]

    if (!itemIndex) {
        const newPage = { page: page, data: [] };
        parsedData.push(newPage);
        sessionStorage.setItem(name, JSON.stringify(parsedData));
    }
}

function updateMessages(page, id, message, name = "description") {
    // Retrieve the data from sessionStorage
    const sessionData = sessionStorage.getItem(name);
    const data = JSON.parse(sessionData);
    const item = data[page].data.find(item => item.id === id);
    if (item) {
        item.message = message;
        sessionStorage.setItem(name, JSON.stringify(data));
    }
}


function deleteObject(page, id, name = "description") {

    // Retrieve the data from sessionStorage
    const sessionData = sessionStorage.getItem(name);
    const data = JSON.parse(sessionData);

    // Delete the item with id "new-id-456" on page 0
    const itemIndex = data[page].data.findIndex(item => item.id === id);
    if (itemIndex !== -1) {
        data[page].data.splice(itemIndex, 1);

        // Set the updated data back to sessionStorage
        sessionStorage.setItem(name, JSON.stringify(data));
    }
}

function deletePageAndUpdateSessionStorage(currentPage) {
    // Get the description array from sessionStorage
    const description = JSON.parse(sessionStorage.getItem('description'));

    // Check if the description array exists and has more than one page
    if (description && description.length > 1) {
        // Delete the second page from the description array
        description.splice(1, 1);

        // Set the updated description array in sessionStorage
        sessionStorage.setItem('description', JSON.stringify(description));
    }
}


function manipulateSessionStorage(pages, id, type = 'p', name = "description") {
    // add an item to sessionStorage
    let description = sessionStorage.getItem(name);

    let newItem = { id: id, type: type, message: '' };

    description = JSON.parse(description);
    description[pages].data.push(newItem);
    sessionStorage.setItem(name, JSON.stringify(description));

}





const fetchPDF = (formData) => {

    fetch('./pdf.php', {
        method: 'POST',
        headers: {
            // 'Accept': 'application/json',
            // 'Content-Type': 'application/json',
            // 'X-CSRF-TOKEN': _token
        },
        body: formData
    })
        .then(response => response.arrayBuffer())
        .then(result => {

            var blob = new Blob([result], { type: 'application/pdf' });
            var fileURL = URL.createObjectURL(blob);

            // const isMobile = navigator.userAgentData.mobile;
            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                var newWin = window.open(fileURL);
                newWin.focus();
                modalClose();
            } else {
                let input_cotton = document.querySelector("#e_formController_pdf_preview");
                input_cotton.src = fileURL;

            }

        });
}


for (let i = 0; i < closeButton.length; i++) {
    const elements = closeButton[i];
    elements.onclick = (e) => modalClose();
    modal.style.display = 'none';
}



function checksessionStorage(type = 0) {
    // add an item to sessionStorage
    let name = 'description'
    let description = sessionStorage.getItem(name);


    if (!description) {
        sessionStorage.setItem(name, JSON.stringify([{ page: 0, data: [] }]));
    } else {
        if (type == 1) {
            sessionStorage.removeItem(name)
        }

    }
}

function addParagraph(page) {
    var pages = page - 1;
    let type = 'paragraph';
    let random = Math.floor((Math.random() * 1000) + 1);
    let id = `${type}-id-${random}`;
    checksessionStorage();

    // var blockClone = $("#container_clone").html();
    var selector = $("#page" + pages + " .memo_description")
    var textareaClone = '<span id="container_clone">' +
        '<div id="' + id + '">' +
        '<a href="javascript:;" class="btn   py-2" onclick="deleteVal(this)" data-id="' + id + '" data-page="' + pages + '">X</a>' +
        '<textarea id="' + id + '" type="text" data-page="' + pages + '" autocomplete="off" name="description[' + pages + '][]" onblur="checkVal(this)" rows="5" ' +
        'class="w-full  py-2 border border-slate-300 text-indent-25"></textarea>' +
        '</div>' +
        '</span>';

    selector.append(textareaClone);
    manipulateSessionStorage(pages, id, type)


}

function addNewMessage(page) {
    var pages = page - 1;
    let type = 'message';
    let random = Math.floor((Math.random() * 1000) + 1);
    let id = `${type}-id-${random}`;

    // var blockClone = $("#container_clone").html();
    var selector = $("#page" + pages + " .memo_description")

    var textareaClone = '<span id="container_clone">' +
        '<div id="' + id + '">' +
        '<a href="javascript:;" class="btn   py-2" onclick="deleteVal(this)" data-id="' + id + '" data-page="' + pages + '">X</a>' +
        '<textarea id="' + id + '" type="text" data-page="' + pages + '" autocomplete="off" name="description[' + pages + '][]" onblur="checkVal(this)" rows="5" ' +
        'class="w-full  py-2 border border-slate-300 "></textarea>' +
        '</div>' +
        '</span>';

    selector.append(textareaClone);

    manipulateSessionStorage(pages, id, type)


}


function addTopic(page) {
    var pages = page - 1;
    let type = 'topic';
    let random = Math.floor((Math.random() * 1000) + 1);
    let id = `${type}-id-${random}`;

    // var blockClone = $("#container_clone").html();
    var selector = $("#page" + pages + " .memo_description")

    var textareaClone = '<span id="container_clone">' +
        '<div id="' + id + '">' +
        '<a href="javascript:;" class="btn   py-2" onclick="deleteVal(this)" data-id="' + id + '" data-page="' + pages + '">X</a>' +
        '<input id="' + id + '" type="text" data-page="' + pages + '" autocomplete="off" name="description[' + pages + '][]" onblur="checkVal(this)" rows="5" ' +
        'class="w-full text-indent-25 font-bold py-2 border border-slate-300"/>' +
        '</div>' +
        '</span>';

    selector.append(textareaClone);

    manipulateSessionStorage(pages, id, type)


}

function addPage() {
    var tmp_page = $("#block_tab_1 page").length;
    var page = $("#block_tab_1 page").length + 1;
    var thaiPage = changeThaiNumber(page);
    let name = 'description'
    let description = sessionStorage.getItem(name);
    if (!!description) {
        var html =
            '<page size="A4" id="page' + tmp_page + '">' +
            ' <div class="next-page">-' + thaiPage + "-</div>" +
            '<a href="javascript:;" class="btn px-2 py-2" onclick="deleteValuePage(this)"  data-page="' + tmp_page + '">X</a><div class="row" style="line-height: 30px;"><div class="col-lg-12">' +
            '<div class="memo-form"><span class="memo_description"></span>' +
            '<div class=" row mt-5"> <div class="col-lg-12"><a class="ring-1 ring-slate-900/5 space-y-3 hover:bg-sky-500 hover:ring-sky-500" href="javascript:;" onclick="addTopic(' + page + ');"><strong>+ เพิ่มหัวข้อใหม่</strong></a> <a class="ring-1 ring-slate-900/5 space-y-3 hover:bg-sky-500 hover:ring-sky-500" href="javascript:;" onclick="addParagraph(' + page + ');"><strong>+ เพิ่มย่อหน้าใหม่</strong></a> <a class="ring-1 ring-slate-900/5 space-y-3 hover:bg-sky-500 hover:ring-sky-500" href="javascript:;" onclick="addNewMessage(' + page + ');"><strong>+ เพิ่มข้อความใหม่</strong></a></div> </div>' +
            "</div>" +
            "</div></div>" +
            '<div class="footer-text"><input class="w-full  py-2 border border-slate-300" autocomplete="off" name="textfooter[' + tmp_page + ']"  id="textfooter[' + tmp_page + ']"  onblur="checkVal(this)" /></div>' +
            '<div ></div>' +
            "</page>";
        $("#block_tab_1 #addPage").before(html);
        addPages(tmp_page);
    } else {
        alert('กรุณาเพิ่มเนื้อหาก่อน')
    }
}


function deleteVal(obj) {
    var message = $(obj).val();
    var nameValue = $(obj).attr("name");
    var page = $(obj).attr("data-page");
    var id = $(obj).attr("data-id");
    $('#' + id).parent().remove();
    deleteObject(page, id)
}

function deleteValuePage(obj) {
    var page = $(obj).attr("data-page");
    $('#page' + page).remove();
    deletePageAndUpdateSessionStorage(page)
}

function checkVal(obj) {
    var message = $(obj).val();
    var nameValue = $(obj).attr("name");
    var page = $(obj).attr("data-page");
    var id = $(obj).attr("id");
    updateMessages(page, id, message);

}

function changeThaiNumber(num) {
    var array = {
        1: "๑",
        2: "๒",
        3: "๓",
        4: "๔",
        5: "๕",
        6: "๖",
        7: "๗",
        8: "๘",
        9: "๙",
        0: "๐",
    };
    var str = num.toString();
    for (var val in array) {
        str = str.split(val).join(array[val]);
    }
    return str;
}

