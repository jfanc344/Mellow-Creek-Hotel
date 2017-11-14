function runEffect() {
    setTimeout(function(){
        var selectedEffect = 'blind';
        var options = {};
        $("#Hotelextramenu").hide(selectedEffect, options, 500)
     }, 5000);
}

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




// Get the modal
var modal = document.getElementById('model-container');
var modal1 = document.getElementById('model-container1');
var modal2 = document.getElementById('model-container2');
var modal3 = document.getElementById('model-container3');




// Get the button that opens the modal
var btn = document.getElementById("exitinvoice");
var loginuser = document.getElementById("login-btn");
var loginservice = document.getElementById("loginservice");
var loginadmin = document.getElementById("loginadmin");



// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close");

var exit = document.getElementById("exit");

// When the user clicks the button, open the modal
loginuser.onclick = function(){
    modal1.style.display = "block";
}
loginservice.onclick = function(){
    modal2.style.display = "block";
}
loginadmin.onclick = function(){
    modal3.style.display = "block";
}



// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

function exitform(){
  modal1.style.display = "none";
  modal2.style.display = "none";
  modal3.style.display = "none";
}



// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
  }
