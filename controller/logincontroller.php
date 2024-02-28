<?php  
        require('../db/db.php'); 
        $sql = 'INSERT INTO users (name, surname, email, pass) VALUES (:name, :surname, :email, :pass)';
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name',$_POST['name']);
        $stmt->bindParam(':surname',$_POST['surname']);
        $stmt->bindParam(':email',$_POST['email']);

        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $stmt->bindParam(':pass',$password);

        if($stmt->execute()){
            $message = 'Usuario registrado con éxito';
            $_SESSION['registro'] = $message;
            header("location: ../views/register.php");
        } else{
            $message = 'No fue posible registrar el usuaio';
            $_SESSION['registro'] = $message;
            header("location: ../views/register.php");
        }
  

 