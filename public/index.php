<?php
include_once 'header.php';
include_once 'footer.php';
?>

<body class="bg-info">
<div class="container-fluid col-md-10 offset-md-1">
    <div class="row">
        <div class="card mt-3 px-2 py-2">
            <h1>Stationery Application</h1>
            <p>Welcome to this fictional stationery application page created for ISAD251 example. To continue
            please accept our terms and conditions</p>
            <form action="agreement.php" method = "post">
                <input type="radio" name="tacs" value="agree"> Agree<br>
                <input type="radio" name="tacs" value="disagree"> Disagree<br>
                <input type="submit"><br>
            </form>
        </div>
    </div>
</div>
</body>