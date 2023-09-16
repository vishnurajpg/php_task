<?php 
error_reporting(0);
    $con = mysqli_connect('localhost','root','','student');
    if(!$con){

        die('connect error'.mysqli_connect_error());
        
    }else{

        echo "Database connect success";

    }
    $name = $_POST['name'];
    
    $contact = $_POST['contact'];

    $address = $_POST['address'];

    $query = "insert into list(name,contact,address) value ('$name','$contact','$address')";

    $merge = mysqli_query($con,$query);
    print_r($merge);
    if($merge){
        echo '<br>';
        echo "database insert succesfully";
    }else{
        echo "you try again";
    }
?>