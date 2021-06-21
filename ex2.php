<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight booking</title>
</head>

<body>
<?php
    if(isset($_POST['cancel']))
    {
        setcookie('name',"",time()-3600,'/');
        setcookie('seat',"",time()-3600,'/');
        setcookie('food',"",time()-3600,'/');
        setcookie('timesVisited',"",time()-3600,'/');
    }
?>






    


  
    <h1>Flight booking</h1>
    <form action="./ex2_1.php" method="post">
        <label for="">Name</label>
        <input type="text" name="name" id="">

        <br>
        <br>
        <label for="">Seat</label>
        <br>
        <label for="">Window</label>
        <input type="radio" name="seat" value="Window" checked>
        <label for="">Aisle</label>
        <input type="radio" name="seat" value="Aisle">
        <label for="">Middle</label>
        <input type="radio" name="seat" value="Middle">
        <br>


        <br>
        <label for="">Food</label>
        <br>
        <label for="">Vegetarian</label>
        <input type="radio" name="food" value="Vegetarian" checked>
        <label for="">Non Vegetarian</label>
        <input type="radio" name="food" value="Non Vegetarian">
        <label for="">Vegan</label>
        <input type="radio" name="food" value="Vegan">
        <br>
        <br>

        <input type="submit" name="submit" value="submit">
    </form>

</body>

</html>