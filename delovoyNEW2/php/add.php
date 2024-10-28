<?php

    

    $type_float = $_POST['type_float'];
    $address = $_POST['address'];
    $m_float = $_POST['m_float'];
    $quantity_float = $_POST['quantity_float'];
    $contact = $_POST['contact'];
    $description = $_POST['description'];

    mysqli_query($connect, "INSERT INTO `float_db` (`type_float`, `address`, `m_float`, `quantity_float`, `contact`, `description`) VALUES (NULL, '$type_float', '$address', '$m_float', '$quantity_float', '$contact', '$description')");
    

    // $full_name = $_POST['full_name'];
    // $email = $_POST['email'];
    // $password = $_POST['password'];
    // $password_confirm = $_POST['password_confirm'];

    // if ($password === $password_confirm) {
    //     $path = 'uploads/' . time() . $_FILES['avatar']['name'];
    //     if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
    //         $_SESSION['message'] = 'Ошибка при загрузке изображения';
    //         header('Location: ../register.php');
    //     }

    //     $password = md5($password);

    //     mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `avatar`) VALUES (NULL, '$full_name', '$email', '$password', '$path')");
        
    //     $_SESSION['message'] = 'Регистрация прошла успешно';
    //     header('Location: ../login.php');

    // } else {
    //     $_SESSION['message'] = 'Пароли не совпадают';
    //     header('Location: ../register.php');
    // }

?>