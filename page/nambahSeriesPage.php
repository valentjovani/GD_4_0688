<?php
include '../component/sidebar.php'
?>
    
<div class="container p-3 m-4 h-100" 
style="background-color: #FFFFFF; border-top: 5px  solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >

    <div class="card-body"> <h4>Nambah Series</h4>
    
    <div class="card-body">
            <form action="../process/nambahSeriesProcess.php" method="post">

                <div class="mb-3 col">

                    <label 
                    for="name" 
                    class="form-label">
                    Series Name
                    </label>

                    <input 
                    type="text" 
                    id="nambahSeriesName" 
                    class="form-control" 
                    name="nambahSeriesName">

                </div>

                <div class="mb-3">

                    <label 
                    for="genre" 
                    class="form-label">Genre
                    </label>

                    <select class="form-control" id="nambahGenre" name="nambahGenre[]" size="3" multiple="multiple">
                        <option 
                        value="Romance">Romance
                        </option>

                        <option 
                        value="Isekai">Isekai
                        </option>

                        <option 
                        value="Scream">Scream
                        </option>
                        
                        <option 
                        value="Action">Action
                        </option>

                        <option 
                        value="Spy">Spy
                        </option>
                        <option 
                        value="Family">Family
                        </option>

                    </select>
                </div>

                <div class="mb-3">

                    <label 
                    for="release" 
                    class="form-label">Release
                    </label>

                    <input 
                    type="text" 
                    id="nambahRelease" 
                    class="form-control" 
                    name="nambahRelease">

                </div>
                
                <div class="mb-3">

                    <label 
                    for="episode" 
                    class="form-label">Episode
                    </label>

                    <input 
                    type="text" 
                    id="nambahEpisode" 
                    class="form-control" 
                    name="nambahEpisode">

                </div>


                <div class="mb-3">

                    <label for="season" 
                    class="form-label">Season
                    </label>

                    <input type="text" 
                    id="nambahSeason" 
                    class="form-control" 
                    name="nambahSeason">

                </div>

                <div class="mb-3">

                    <label 
                    for="synopsis" 
                    class="form-label">Synopsis
                    </label>

                    <textarea  id="nambahSynopsis" 
                    class="form-control" 
                    name="nambahSynopsis">
                    </textarea>

                </div>

                <div class="mt-2">

                    <button 
                    class="btn btn-primary" 
                    type="submit" 
                    name="nambahSeries">Submit
                    </button>

                </div>
                
            </form>
        </div>

    </div>
</div>

</aside>

<!-- Option 1: Bootstrap Bundle with Popper -->

<script

src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
crossorigin="anonymous"></script>

</body>
</html>