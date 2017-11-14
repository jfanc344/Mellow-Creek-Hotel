$(document).ready(function cmon() {
    $(window).unload(saveSettings);
    loadSettings();
});

function loadSettings() {
    $('#checkindate').val(sessionStorage.checkindate);
    $('#checkoutdate').val(sessionStorage.checkoutdate);
    $('#numpeople').val(sessionStorage.numpeople);
    $('#numdays').val(sessionStorage.numdays);
    $('#result').val(sessionStorage.result);

}

function saveSettings() {
    sessionStorage.checkindate = $('#checkindate').val();
    sessionStorage.checkoutdate = $('#checkoutdate').val();
    sessionStorage.numpeople = $('#numpeople').val();
    sessionStorage.numdays = $('#numdays').val();
    sessionStorage.result = $('#result').val();

}
