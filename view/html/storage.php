<!DOCTYPE html>
<html>
<head>

    <title>Test</title>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>

    <script>
    $(document).ready(function cmon() {
        $(window).unload(saveSettings);
        loadSettings();
    });

    function loadSettings() {
        $('#height').val(sessionStorage.height);
        $('#weight').val(sessionStorage.weight);
        $('#dateOfBirth').val(sessionStorage.dateOfBirth);

    }

    function saveSettings() {
        sessionStorage.height = $('#height').val();
        sessionStorage.weight = $('#weight').val();
        sessionStorage.dateOfBirth = $('#dateOfBirth').val();

    }
    </script>
</head>
<body>
    <div data-role="content">

        <form id="myForm" action="mellowcreek.php" method="post">





            dateOfBirth:
            <input type="date" id="dateOfBirth" name="datum" required />

            weight (in kg):
            <input type="number" id="weight" name="weight" required />

            height (in cm):
            <input type="number" id="height" name="height" required />

           <input type="submit" id="submit" name="submit" onclick="cmon()" value="sub" />

            <br />

        </form>

    </div>
</body>
