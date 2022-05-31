<?php
    //Recibe datos desde el formulario
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if(isset($user)){
        //Conexion con la base de datos
        define('SERVERNAME', 'localhost');
        define('USERNAME', 'root');
        define('PASSWORD', '');
        define('DBNAME', 'login');

        //Conexion a la base de datos
        $conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME) or 
        die('Error al conectar a la base de datos');

        //Iniciar sesion
        session_start();

        //Consulta para verificar si el usuario existe
        $query = "SELECT * FROM login WHERE username_log = '$user' AND password_log = '$pass'";

        //Ejecutar consulta
        $resultado = mysqli_query($conn, $query) or die(mysqli_connect_errno());

        //Almacenar el resultado de la consulta en un arreglo y tomo el siguiente
        $fila = mysqli_fetch_array($resultado);
        
        //Controlar si llegan los datos
        if($fila['id_log'] == null){
            //Redirigir al mismo index
            header('location: login.html');
        }else{
      
            header('location: login.html');
        }
    }else{
        header('location: login.html');
    }   

?>