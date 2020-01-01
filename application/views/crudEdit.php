<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>CodeIgniter</title>
  </head>
  <body>
    <div class = "container">

        <form method="post" action="<?php echo site_url('CrudController/update')?>/<?php echo $row->id; ?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Last Name</label>
                        <input type="text" class="form-control" name="lastName" value="<?php echo $row->lastName; ?>" aria-describedby="emailHelp" placeholder="Enter your last name">
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">First Name</label>
                        <input type="text" class="form-control" name="firstName" value="<?php echo $row->firstName; ?>" aria-describedby="emailHelp" placeholder="Enter your first name">
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Birthdate</label>
                        <input type="date" class="form-control" name="birthDate" value="<?php echo $row->birthDate; ?>" aria-describedby="emailHelp" placeholder="Enter your birth date">
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Contact No</label>
                        <input type="text" class="form-control" name="contactNo" value="<?php echo $row->contactNo; ?>" aria-describedby="emailHelp" placeholder="Enter your contact number">
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Bio</label>
                        <input type="text" class="form-control" name="bio" value="<?php echo $row->bio; ?>" aria-describedby="emailHelp" placeholder="Enter bio">
                        
                    </div>
            
                    <button type="submit" class="btn btn-primary" value="save">Submit</button>
                    <a href="<?php echo site_url('CrudController')?>"><button type="button" class="btn btn-danger">Cancel</button></a>
        </form>
    </div>
        
    </body>
</html>