<?php
    include '../component/sidebar.php'
?>
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #D40013; 
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">

        <div class="body d-flex justify-content-between">
            <h4>NAMBAH MOVIE</h4>  
        </div>

        <hr>

        <form action="../process/nambahMovieProcess.php"method="post">

            <div class=" mt-5 align-items-center justify-content-left">

                <div class="mb-12">
                    <label for="exampleInputEmail1" class="form-label">Name</label> <input class="form-control" id="name" name="name" aria-describedby="emailHelp">
                </div>

                <div class="mb-12">
                    <label for="exampleInputEmail1" class="form-label">Genre</label> <input class="form-control" id="genre" name="genre" aria-describedby="emailHelp">
                </div>

                <div class="mb-12">
                    <label for="exampleInputEmail1" class="form-label">Realese</label> <input class="form-control" id="realese" name="realese" aria-describedby="emailHelp">
                </div>

                <div class="mb-12">
                    <label for="exampleInputEmail1" class="form-label">Season</label> <input type="number" class="form-control" id="season" name="season" aria-describedby="emailHelp">
                </div>

                <div class="mb-12">
                    <label for="exampleInputEmail1" class="form-label">Synopsis</label> <input class="form-control" id="synopsis" name="synopsis" aria-describedby="emailHelp">
                </div>

                <br>

                <div class="mb-12">
                <button type="submit" class="btn btn-primary"  
                name="nambahMovie">Nambah Movie</button>
                </div>

            </div>
        </form>
    </div>