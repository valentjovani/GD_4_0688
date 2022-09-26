<?php include '../component/sidebar.php' ?>

<div class="container p-3 m-4 h-100" 
style="background-color: #FFFFF1; 
border-top: 5px solid #D40013; 
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    
<input type="hidden" name="id" value="<?php echo $_SESSION['user']['id']?>">
    
<div class="body d-flex justify-content-between"> 
    <h4>Edit Profile</h4> </div> <hr>

    <form class="row g-3" 
    action="../process/editprofileProcess.php" 
    method="post">

    <input type="hidden" name="id" value="<?php echo $_SESSION['user']['id']?>">

        <div class="col-md-12">
            <label for="name" 
            class="form-label">Name</label> <input type="text"
            class="form-control" id="name" 
            name="name" 
            value="<?php echo $_SESSION['user']['name']?>"  disabled>
        </div>

        <div class="col-md-12">
            <label for="phonenum" 
            class="form-label">Phone Number</label> <input
             type="text" class="form-control" 
             name="phonenum" 
             value="<?php echo $_SESSION['user']['phonenum']?>" disabled>
        </div>

        <div class="col-md-12">
            <label for="email" 
            class="form-label">Email</label>
            <input type="text" 
            class="form-control" 
            ="email" value="<?php echo $_SESSION['user']['email']?>" 
                disabled>
        </div>

        <div class="col-md-12">

            <label for="job" class="form-label">Job</label>
            <select class="form-select" 
            aria-label="Default select 
            example" name="job" 

                disabled>
                <option hidden>Select Your Job</option>
                <option value="Lecturer"<?php echo $_SESSION['user']['job']==
                'Lecturer' ? 'selected' : '';?>>Lecturer</option>
                <option value="Programmer"<?php echo $_SESSION['user']['job']==
                'Programmer' ? 'selected' : '';?>>Programmer
                </option>
                <option value="Student"<?php echo $_SESSION['user']['job']==
                'Student' ? 'selected' : '';?>>Student</option>
            </select>
        </div>

        <div class="col-md-12">
            <label for="membership" class="form-label">Membership</label>
            <select class="form-select" aria-label="Default select example" name="membership"  disabled>
                <option value="Reguler" <?php echo $_SESSION['user']['membership']=='Platinum' ? 'selected' : '' ; ?> >Reguler</option>
                <option value="Platinum" <?php echo $_SESSION['user']['membership']=='Platinum' ? 'selected' : '' ; ?> >Platinum</option>
                <option value="Gold" <?php echo $_SESSION['user']['membership']=='Gold' ? 'selected' : '' ; ?> >Gold</option>
            </select>
        </div>

        <div class="col-12">
        <button class="btn btn-primary" 
        type="submit" 
        name="editProfile">Edit</button>
        </div>    

    </form>

</div>

</div>

</aside>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
crossorigin="anonymous"> </script>

</body>

</html>