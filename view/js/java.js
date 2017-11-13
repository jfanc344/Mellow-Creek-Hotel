var former = console.log;
console.log = function(msg){
    former(msg);
    $("#mylog").append("<div>" + msg + "</div>");
}

window.onerror = function(message, url, linenumber) {
    console.log("JavaScript error: " + message + " on line " +
                linenumber + " for " + url);
}


function showmore() {
    var x = document.getElementById("serbox2");
    var y = document.getElementById("serboxshowmore");
    var t = document.getElementById("serboxshowmore2");
    if (x.style.display === "none") {
        x.style.display = "flex";
        t.style.display = "block";
        y.style.display = "none";
    } else {
        x.style.display = "none";
        t.style.display = "none";
    }
}
function showless() {
    var x = document.getElementById("serbox2");
    var y = document.getElementById("serboxshowmore");
    var t = document.getElementById("serboxshowmore2");
    if (x.style.display === "flex") {
        x.style.display = "none";
        t.style.display = "none";
        y.style.display = "block";
    }
}
$(document).ready(function (){
    $(".ratiobtn").click(function (){
        $('html, body').animate({
            scrollTop: $("#jump1").offset().top
        }, 3000);
    });
});


function GetDays(){
    var dropdt = new Date(document.getElementById("checkoutdate").value);
    var pickdt = new Date(document.getElementById("checkindate").value);
    return parseInt((dropdt - pickdt) / (24 * 3600 * 1000));
}

function cal(){
if(document.getElementById("checkoutdate")){
document.getElementById("numdays2").value=GetDays();
}
}
$(function(){
$('input[name=roomtype]').click(function(){
 var selected_id = $('input[name=roomtype]:checked').attr('id');
 if (selected_id == 'single_room') {
     var category = "120";
 }
 if (selected_id == 'double_room') {
     var category = "160";
 }
 if (selected_id == 'family_room') {
     var category = "210";
 }
 $('input[name=nightcost]').val(category);
});
});
function calculate() {
var costpernight = document.getElementById('costpernight').value;
var numdays2 = document.getElementById('numdays2').value;
var result = document.getElementById('result');
var myResult = costpernight * numdays2;
result.value = myResult;

}
