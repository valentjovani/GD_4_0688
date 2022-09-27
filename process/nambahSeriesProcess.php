<?php
    if(isset($_POST['nambahSeries'])){ include('../db.php');

        $nameSeries = $_POST['nambahSeriesName']; $nambahGenre = implode(",", $_POST['nambahGenre']);
        $nambahRelease = $_POST['nambahRelease']; $nambahEpisode = $_POST['nambahEpisode'];
        $nambahSeason = $_POST['nambahSeason']; $nambahSynopsis = $_POST['nambahSynopsis'];

        $query = mysqli_query($con, "INSERT INTO `series`(`name`, `genre`, `release`, `episode`, `season`, `synopsis`) 
        VALUES ('$nameSeries', '$nambahGenre', '$nambahRelease', 
        '$nambahEpisode', '$nambahSeason', '$nambahSynopsis')") or die(mysqli_error($con));

        if ($query) {
            echo

            '<script>
                alert("Nambah Series Berhasil [!]"); window.location = "../page/listSeriesPage.php"
            </script>';

        } else {echo "Error: " . $sql . "<br>" . $conn->error;}

     }
        
?>