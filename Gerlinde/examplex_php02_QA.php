<?php

// //if states
// $a = 10;
// $b = 30;

// if($a == $b){
//     echo "numbers are equal";
// } elseif( $a>$b){
//     echo "a is bigger";
// } else {
//     echo "a is smaller";
// }
// echo "<br>";
// //switch statement
// $role="admin";
// $message="";

// switch($role) {
//     case "admin": 
//         $message="Hello admin";
//         break;
//     case "user": 
//         $message="Hello user";
//         break;
//     default: 
//         $message="You cant see this page";
// }

// echo $message;
// echo "<br>";

// // Ternary operation

// echo(2>3 ? "This condition is true" : "This condition is false");
// echo "<br>";
// // checking if it true or not null
// echo(4>3 ?: "This condition is false");
// echo "<br>";
// // checking if it exists or if it is null
// echo($var5 ?? "This condition is null");

// //Functions

// function print_msg(){
//     echo " Printed from inside the function";
// }

// print_msg();

// echo "<br>";

// $name = "John";
// $surname = "Doe";

// function print_name(){
//     $full_name = $GLOBALS["name"].' '.$GLOBALS["surname"];
//     // return $full_name; 
//     echo $full_name;
// }
// print_name();

// // $full_name = print_name();
// // echo $full_name;

// function print_name($x, $y){
// $full_name = $x." ".$y;
// return $full_name;


// }

// echo print_name($name,$surname);
// echo "<br>";
// echo print_name("Gerlinde",$surname);
// echo "<br>";
// echo print_name("Gerlinde","Sandmair");

// var_dump($_GET);
// if(isset($_GET["submit"])){
//     echo "Email: ".$_GET["email"];
//     echo "Password: ".$_GET["password"];
//     echo "Gender: ".$_GET["gender"];
// }
$err_email = "";
if(isset($_POST["submit"])){
    echo "Email: ".$_POST["email"];
    echo "Password: ".$_POST["password"];
    echo "Gender: ".$_POST["gender"];

    if(empty($_POST["email"])){
        $err_email="Please enter a valid email";
    }
}







?>
<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>


<div class="container mt-5">
    <h3>Form</h3>
    <form method="POST">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div class="text-danger"><?php echo $err_email ?></div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
       <label for="select_1" >Select list:</label>
        <select class="form-control" id="select_1" name="gender"> 
            <option value="female">Female</option>
            <option value="male">Male</option>
        </select>

    </div>


    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </body>
  </html>






