<?php

    session_start();
    if(isset($_POST['editProfile'])){
        include('../db.php');

        $id = $_POST['id'];$name = $_POST['name'];$email = $_POST['email']; $job = $_POST['job'];$phonenum = $_POST['phonenum']; $query = mysqli_query($con,

        "Update users SET name = '$name', 
        email ='$email', 
        phonenum ='$phonenum',
        job = '$job' 
        WHERE id = '$id'") or die(mysqli_eror($con));

        if($query){

            "INSERT INTO users(email, password, name, phonenum, membership)
                VALUES
                ('$email', '$password', '$name', '$phonenum', '$membership')"or die(mysqli_error($con));
                $changeData = mysqli_query($con, "SELECT * FROM users WHERE id = '$id'") ordie(mysqli_error($con));
                $user = mysqli_fetch_assoc($changeData);$_SESSION['user'] = $user;

            echo
                '<script> alert("Update Success"); 
                window.location = "../page/profilePage.php"</script>';
        }else{
            echo
                '<script> alert("Update Failed"); 
                window.location = "../page/dashboardPage.php" </script>';
        }
    }else{
        echo
            '<script> window.history.back() </script>';
    }
    
?>