// whateverを通じて、headingに値をいれる
$('#myModal').on('show.bs.modal', function (event) {
    console.log("モーダルが開きました");
    var button = jQuery(event.relatedTarget) // Button that triggered the modal
    var heading = button.data('heading')
    var content = button.data('content') // Extract info from data-* attributes
    var modal = jQuery(this)
    modal.find('#heading').val(heading);
    modal.find('#content').text(content);

})