
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
