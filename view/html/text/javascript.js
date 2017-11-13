// this is the id of the form
$("#feedback").submit(function(e) {

    var url = "../../../controller/insertprocess.php"; // the script where you handle the form input.

    $.ajax({
           type: "POST",
           url: url,
           data: $("#feedback").serialize(), // serializes the form's elements.
           success: function(data)
           {
               alert(data); // show response from the php script.
           }
         });

    e.preventDefault(); // avoid to execute the actual submit of the form.
});
