<?php



include_once("./conexion.php");




$usu_login =  $_POST ["usu_login"];
$pass_login = $_POST ["pass_login"];

$mail_register = $POST ["mail_register"];
$usu_register = $POST ["usu_register"];
$pass_register = $POST ["pass_register"];











if(isset($_POST["btnsubmit"]))
{
    $query = mysqliquery($conn,"SELECT * FROM Usuario = '$usu_login' AND Passenia = '$pass_login'");
    $row = mysqli_num_rows($query);

    if($row == 1)
    {
        echo "<script> alert ('Bienvenido, $usu_login'); window.location = 'principal.html' </script>";
    }
    else
    {
        echo "<script> alert ('usuario no existe'); window.location = 'index.html' </script>";    
    }


}

if(isset($_POST["btnregister"]))
{
    $query2 = "INSERT INTO usuario (Usuario,Passenia) values ('$Usu_Register' , '$Pass_Register')";

    if(mysqli_query($conn,$query2))
    {
        echo "<script> alert ('Usuario registrado con exito: $Usu_Register'); window.location = 'index.html' </script>";
    }
    else
    {
        echo "Error:".$query2."<br>".mysql_error($conn);
    }
}

 






?>