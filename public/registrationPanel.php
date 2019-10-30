<?php
include_once 'header.php';
include_once 'footer.php';
?>

<style>
    label {
        display: flex;
        flex-direction: row;
        justify-content: flex-end;
        text-align: left;
        width: 400px;
        line-height: 26px;
        margin-bottom: 10px;
    }

    input {
        height: 25px;
        flex: 0 0 300px;
        margin-left: 10px;
    }
    input[type="submit"] {
        height: 40px;
    }
</style>

<body class="bg-info">
<div class="container-fluid col-md-10 offset-md-1">
    <div class="row">
        <div class="card mt-3 px-2 py-2">
            <h1>Stationery Application</h1>
            <form action="landingPage.php" method = "post">
                <label>
                Full Name: <input type="text" name="fullName" required>
                </label>
                <br>
                <label>
                Postcode: <input type="text" name="postcode" required>
                </label>
                <br>
                <label>
                Email: <input type="email" name="email">
                </label>
                <br>
                <input type="submit">
            </form>
        </div>
    </div>
</div>
</body>

