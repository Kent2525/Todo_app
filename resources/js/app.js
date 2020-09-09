// whateverを通じて、headingに値をいれる
$('#myModal').on('show.bs.modal', function (event) {
    console.log("モーダルが開きました");
    var button = jQuery(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('whatever') // Extract info from data-* attributes
    var modal = jQuery(this)
    modal.find('#heading').val(recipient);
})