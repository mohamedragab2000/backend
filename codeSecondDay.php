<?php
if($_POST){

    switch($_POST['Students']){
        case 'AMR': 
            $name = $_POST['Students'];
            $id =100140427;
            $Education ="FCIS Tanta University";
            $DOB ="23-3-2000"; break;
        case 'EYAD':
            $name = $_POST['Students'];
            $id =10018547;
            $Education ="FCIS Mansoura University";
            $DOB ="6-5-2001"; break;
            break;
        case 'Mohamed':
            $name = $_POST['Students'];
            $id =10047837;
            $Education ="FCIS Ain Shams University";
            $DOB ="2-3-2002"; break;        
    }
   $message="
   <ul>
        <li>name : $name</li>
        <li>ID : $id</li>
        <li>Education : $Education</li>
        <li>Data of birth : $DOB</li>
   </ul>";
}
?>
<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        h2{text-align: center;}
        .class1 {
            display: block;
            text-align: center;
            margin-top: 2%;
        }
    </style>
</head>
    <div class="container">
        <div class="products">
            <h2>Students</h2>
            <form action="" method="post">
                <div class="class1">    
                    <label for="">Students</label>
                    <select name="Students" >
                        <option value="" hidden>select--</option>
                        <option value="AMR">AMR</option>
                        <option value="EYAD">EYAD</option>
                        <option value="Mohamed">Mohamed</option>
                    </select>
                </div>
                <div class ="class1">   
                    <button name="btn1" value="Show"> SHOW</button>
                </div>    
            </form>
        </div>
    </div>
</body>
</html>