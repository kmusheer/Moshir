<?php
$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];
$address=$_POST['address'];

// // $connection = mysqli_connect($server, $username, $password, dbname);
$connection =new mysqli('localhost','root','','portfolio');


if($connection->connect_error){
    die("database connection failed". $connection->connect_error);
}
else{
    echo 'connection is successfull';
    
    // $stmt = $connection->prepare("insert into p_detail(name,email,number,address) values(?,?,?,?)");
    // $stmt->bind_param("ssis", $name, $email, $number, $address);
    // $execval=$stmt->execute();
    // echo $execval;
    // echo "Registration Successfully.....";
    // $stmt->close();

                                        // echo 'write any one both is MySQLi (object-oriented)';
    
    $sql = "INSERT INTO p_detail(`name`,`email`,`number`,`address`) VALUES('$name','$email','$number','$address')";
    if ($connection->Query($sql)) {
        echo "data inserted successfully";
    } 
    else {
        echo "insertion failed". $sql . "<br>". $connection->error;
    }

    $connection->close();
}




                                                 // echo 'MySQLi (procedural)';

// $connection = mysqli_connect('localhost','root','','portfolio');


// if(!$connection){
//     die("database connection failed".mysqli_connect_error());
// }
// // else{
//     echo 'connection is successfull';
//     $sql = "INSERT INTO p_detail(`name`,`email`,`number`,`address`) VALUES('$name','$email','$number','$address')";
//     if (mysqli_query($connection,$sql)) {
//         echo "data inserted successfully";
//     } else {
//         echo "insertion failed". $sql . "<br>". mysqli_error($connection);
//     }
    
// // }
// mysqli_close($connection);
    
?>