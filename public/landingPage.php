<?php
include_once 'header.php';
include_once 'footer.php';
?>

<body class="bg-info">
<div class="container-fluid col-md-10 offset-md-1">
    <div class="row">
        <div class="card mt-3 px-2 py-2">
            <h1>Stationery Application</h1>
            <form>
                <?php
                if ("" != trim($_POST['email'])) {
                    echo "Greetings $_POST[fullName]. Your postcode is: $_POST[postcode]. Your email is: $_POST[email].";
                }
                else
                {
                    echo "Greetings $_POST[fullName]. Your postcode is: $_POST[postcode]. You did not set an email.";
                }
                ?>
            </form>
        </div>
    </div>
</div>
</body>