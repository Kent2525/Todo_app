// data属性を通じて、フォームの項目に値をいれる
// $('#myModal').on('show.bs.modal', function (event) {
//     console.log("モーダルが開きました");
//     var button = jQuery('#modalbutton')
//     var heading = button.data('heading')
//     console.log(heading);
//     var content = button.data('content') // Extract info from data-* attributes
//     var modal = jQuery(this)
//     modal.find('#heading').val(heading);
//     modal.find('#content').text(content);
// });

$('.task_index').on('click', function(event) {
    const button = $(this);
    const heading = button.data('heading');
    const content = button.data('content');
    console.log(heading);
    console.log(content);
    $('#myModal').find('#heading').val(heading);
    $('#myModal').find('#content').text(content);
});

// エラーがあった場合は、モーダルは再度開く
$(document).ready(function() {
    if($('.alert').length) {
        $('#myModal').modal('show');
    }
});

$('.editTitleButton').on('click', function (event) {
    var titleid = jQuery(this).data('titleid');
    console.log(titleid);
    var modal = $('#editTitleModal')
    modal.find('#titleid').val(titleid);
});

// エラーがあった場合は、モーダルは再度開く
$(document).ready(function() {
    if($('.alert').length) {
        $('#editTitleModal').modal('show');
    }
});
