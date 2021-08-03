<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname='combine';
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if(mysqli_connect_errno()):
    printf("Connect failed: %s\n", mysqli_connect_errno());
    exit();
  endif;

//ON 
if(isset($_POST['on'])) {
    echo "<br>";

    $my_query = "";

    $my_query = "select * from task2.combine WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO task2.combine (onbutton) VALUES (1)";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }

}else if(isset($_POST['off'])) { //OFF
    echo "<br>";

    $my_query = "";

    $my_query = "select * from task2.combine WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO task2.combine_table (Offbottun) VALUES (1)";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }
}


$v1 = $_POST['v1'];
$v2 = $_POST['v2'];
$v3 = $_POST['v3'];
$v4 = $_POST['v4'];
$v5 = $_POST['v5'];
$v6 = $_POST['v6'];

if(isset($_POST['save'])){

    $my_query = "";

    $my_query = "select * from task2.combine WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO task2.combine (v1, v2, v3, v4, v5, v6) VALUES ('$v1', '$v2', '$v3', '$v4', '$v5', '$v6')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}


if(isset($_POST['left'])){
    $my_query = "select * from task2.combine WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO task2.combine (l) VALUES ('left')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }
    

}

if(isset($_POST['right'])){
    $my_query = "select * from combine_table WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO task2.combine (r) VALUES ('right')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }

    
}


if(isset($_POST['forward'])){

    $my_query = "select * from task2.combine WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO task2.combine (f) VALUES ('forward')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }

    
}

if(isset($_POST['backward'])){
    $my_query = "select * from task2.combine WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO task2.combine (b) VALUES ('backward')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }

    
}
if(isset($_POST['stop'])){
	
	
    $my_query = "select * from task2 WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO task2 (s) VALUES ('stop')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }
}

?>
