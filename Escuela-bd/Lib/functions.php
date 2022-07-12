<?php
require_once("connect.php");
//ALUMNOS
function get_all_alumnos($connect){
    $consulta = "SELECT * FROM alumnos";
    $resultado = mysqli_query($connect, $consulta);
    return $resultado;
}
function get_alumno($connect,$ID){
    $consulta = "SELECT * FROM alumnos where ID = $ID";
    $resultado = mysqli_query($connect, $consulta);
    return $resultado;
}
//FORMULARIO alumnos
function insertar_alumnos($name, $apll, $tel, $email, $lic, $cuat, $sts){
    global $connect;
    $consulta = "INSERT INTO alumnos (Nombre, Apellido, Telefono, Email, Licenciatura, Cuatrimestre, Estatus) values('$name', '$apll', '$tel', '$email', '$lic', '$cuat', '$sts')";
    $resultado = mysqli_query($connect, $consulta);
    //return $resultado)
}
function update_alumnos($name, $apll, $tel, $email, $lic, $cuat, $sts, $ID){
    global $connect;
    $consulta = "UPDATE alumnos SET Nombre='$name', Apellido = '$apll', Telefono= '$tel', Email='$email', Licenciatura='$lic', Cuatrimestre= '$cuat', Estatus='$sts' WHERE ID= $ID";
    $resultado = mysqli_query($connect, $consulta);
}
function delete_alumnos($ID){
    global $connect;
    $consulta = "DELETE FROM alumnos WHERE ID= $ID";
    $resultado = mysqli_query($connect, $consulta);
}
//MATERIAS
function get_all_materias($connect){
    $consulta = "SELECT * FROM materias";
    $resultado = mysqli_query($connect, $consulta);
    return $resultado;
}
function get_materia($connect,$ID){
    $consulta = "SELECT * FROM materias where ID = $ID";
    $resultado = mysqli_query($connect, $consulta);
    return $resultado;
}
//FORMULARIO materias
function insertar_materias($ID, $mat, $cuat, $lic){
    global $connect;
    $consulta = "INSERT INTO materias (ID, Materia, Cuatrimestre,  Licenciatura) values('$ID', '$mat', '$cuat', '$lic')";
    $resultado = mysqli_query($connect, $consulta);
    //return $resultado)
}
function update_materias($ID, $mat, $cuat, $lic){
    global $connect;
    $consulta = "UPDATE materias SET ID='$ID', Materia = '$mat', Cuatrimestre = '$cuat', Licenciatura = '$lic' WHERE ID= $ID";
    $resultado = mysqli_query($connect, $consulta);
}
function delete_materias($ID){
    global $connect;
    $consulta = "DELETE FROM materias WHERE ID= $ID";
    $resultado = mysqli_query($connect, $consulta);
}
//PROFESORES
function get_all_profesores($connect){
    $consulta = "SELECT * FROM profesores";
    $resultado = mysqli_query($connect, $consulta);
    return $resultado;
}
function get_profesor($connect, $ID){
    $consulta = "SELECT * FROM profesores where ID = $ID";
    $resultado = mysqli_query($connect, $consulta);
    return $resultado; 
}
//FORMULARIO profesores
function insertar_profesores($name, $apll, $tel, $email, $sts){
    global $connect;
    $consulta = "INSERT INTO profesores (Nombre, Apellidos, Telefono, Email, ESTATUS) values('$name', '$apll', '$tel', '$email', '$sts')";
    $resultado = mysqli_query($connect, $consulta);
    //return $resultado)
}
function update_profesores($name, $apll, $tel, $email, $sts){
    global $connect;
    $consulta = "UPDATE profesores SET Nombre = '$name', Apellidos = '$apll', Telefono = '$tel', Email = '$email', ESTATUS = '$sts' WHERE ID = '$ID'";
    $resultado = mysqli_query($connect, $consulta);
}
function delete_profesores($ID){
    global $connect;
    $consulta = "DELETE FROM profesores WHERE ID= $ID";
    $resultado = mysqli_query($connect, $consulta);
}
?>