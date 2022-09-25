<?php


if(!isset($_POST['ubahMovie'])){
        include ('../db.php');
        $id = $_GET['id']; $name = $_POST['name'];
        $genre = $_POST['genre']; $realese = $_POST['realese'];
        $season = $_POST['season']; $synopsis = $_POST['synopsis'];
        $queryUpdate = mysqli_query($con, "UPDATE movies SET name = '$name', genre = '$genre', 

        realese = '$realese', season = '$season', 
        synopsis = '$synopsis' WHERE id='$id'") or die(mysqli_error($con));
        
        if($queryUpdate){
            echo
            '<script> alert("Update Success"); window.location = "../page/listMoviesPage.php" </script>';
        }else{
            echo
            '<script> alert("Update Failed"); window.location = "../page/listMoviesPage.php" </script>';
        }
    }else {
        echo
        '<script> window.history.back() </script>';
    }
?>