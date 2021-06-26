<?php
session_start();
if (!isset($_SESSION['accno'])) {
    header('Location: ex5.php');
    exit();
}

if (isset($_POST['submit'])) {
    if ($_POST['submit'] == 'Deposit') {
    }
    if ($_POST['submit'] == 'Withdraw') {
    }
    if ($_POST['submit'] == 'Balance') {
        $bal = "select balance from accounts where accno='" . $_SESSION['accno'] . "';";
        echo '<script>alert("' . $bal .'")</script>' ;
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <Button type="button" onclick="depositShow();">Deposit</Button>
    <Button type="button" onclick="withdrawShow();">Withdraw</Button>
    <form action="" method="post">
        <br>
        <input type="submit" value="Balance" name="submit">

    </form>


    <div class="center">
        <form action="" method="post" id="depositForm" style="display: none;">
            <label for="">Amount to deposit</label>
            <input type="number" name="amount" id=""><br>
            <input type="submit" name="submit" value="Deposit">
        </form>

        <form action="" method="post" id="withdrawForm" style="display: none;">
            <label for="">Amount to withdraw</label>
            <input type="number" name="amount" id=""><br>
            <input type="submit" name="submit" value="Withdraw">
        </form>


    </div>

    <script>
        function depositShow() {
            document.getElementById("withdrawForm").style.display = "none";
            document.getElementById("depositForm").style.display = "inline-block";
        }

        function withdrawShow() {
            document.getElementById("depositForm").style.display = "none";
            document.getElementById("withdrawForm").style.display = "inline-block";
        }
    </script>


    <style>
        .center {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #333;
            padding: 30px;
            border-radius: 10px;
        }

        .center input {
            display: block;
            margin: 20px auto;
        }

        label {
            color: white;
        }
    </style>

</body>

</html>