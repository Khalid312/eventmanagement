<?php
session_start();

if($_SESSION['em']=="" && $_SESSION['pass']=="")
{

header("location:userlogin.php");

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserPanel</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        *{
            margin:0px;
            padding:0px;
        }
        ul{
            list-style-type:none;
        }
        a{
            text-decoration: none;
        }
        li{
            float: left;
            width:250px;
            /* background-color:; */
            color:white;
            margin-left:100px;
            height: 50px;
            text-align: center;
            line-height: 50px;
            font-size:25px;
            border-radius: 50px;
            margin-bottom: 10px;
        }
        
        ul li:hover{
            background-color: green;
        }
        
        ul li ul li{
            display: none;
        }
        
        ul li:hover ul li{
            display: block;
        }
    </style>
</head>
<body>

<div style="width:100%;color:white;" class="bg-primary">Event Managment System</div>

<ul class="mt-3">
    <li class="bg-primary text-white"> <a href="#" class="text-white">Vender</a> 
        <ul>

        <li class="bg-primary text-white">  <a href="#"  class="text-white"></a>Catering</li>
        
        <li class="bg-primary text-white">  <a href="#" class="text-white">Floaring</a></li>

        <li class="bg-primary text-white">  <a href="#" class="text-white">Decoration</a></li>

        <li class="bg-primary text-white">  <a href="#" class="text-white">Lightning</a></li>


        </ul>









</li>
    <li class="bg-primary text-white"> <a href="#" class="text-white">Cart</a> </li>
    <li class="bg-primary text-white"> <a href="#" class="text-white">Guest List</a> </li>
    <li class="bg-primary text-white"> <a href="#" class="text-white">Orcer History</a> </li>
    
</ul>

<button type="button" class="btn btn-primary" style="position:absolute;top:200px;left:700px;height:60px;width:100px;"> <a href="logout.php"  class="text-white" style='text-decoration:none;'>Log Out</a></button>

    
</body>
</html>