$(document).ready( function() {
    var now = new Date();
    var today = (now.getMonth() + 1) + '/' + now.getDate() + '/' + now.getFullYear();
    $('#date').val(today);
})