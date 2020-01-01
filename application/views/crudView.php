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
      
    <title>CodeIgniter CRUD</title>
  </head>
  <?php
        $color_code = array ('#C995DC', '#95B6DC', '#8BDCBE', '#CDBC8B', 'DC9F8B','#FFFFFF', '#ffccff', '#ccccff', '#ffcccc', '#ccff99' );
        $random_color = $color_code[array_rand($color_code)];

    ?>
  <body style="background:<?php echo $random_color;?>">
    <!-- As a link -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#">CODEIGNITER</a>

    <!-- Links -->

        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">About</a>
            </li>

             <!--Dropdown-->
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Menu
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">News</a>
                <a class="dropdown-item" href="#">Contact</a>
                <a class="dropdown-item" href="#">Setting</a>
            </div>
            </li>
        </ul>
    </nav>
    
    <div class="container">
    <br>
    <br>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
        Add
        </button>
    <br>
    <br>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo site_url('CrudController/create')?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Last Name</label>
                        <input type="text" class="form-control" name="lastName" aria-describedby="emailHelp" placeholder="Enter your Last Name">
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">First Name</label>
                        <input type="text" class="form-control" name="firstName" aria-describedby="emailHelp" placeholder="Enter your First Name">
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Birthdate</label>
                        <input type="date" class="form-control" name="birthDate" aria-describedby="emailHelp" placeholder="Enter your Birth Date">
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Contact No</label>
                        <input type="text" class="form-control" name="contactNo" aria-describedby="emailHelp" placeholder="Enter your contact number">
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Bio</label>
                        <input type="text" class="form-control" name="bio" aria-describedby="emailHelp" placeholder="Enter bio">
                        
                    </div>
            
                    <button type="submit" class="btn btn-primary" value="save">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
            </div>
        </div>
        </div>

        <table class="table">
            <thead class="table table-secondary">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Last Name</th>
                <th scope="col">First Name</th>
                <th scope="col">Birthdate</th>
                <th scope="col">Contact No</th>
                <th scope="col">Bio</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($result as $row) {?>
                <tr>
                <th scope="row"><?php echo $row->id; ?></th>
                <td><?php echo $row->lastName; ?></td>
                <td><?php echo $row->firstName; ?></td>
                <td><?php echo $row->birthDate; ?></td>
                <td>0<?php echo $row->contactNo; ?></td>
                <td><?php echo $row->bio; ?></td>
                <td><a href="<?php echo site_url('CrudController/view');?>/<?php echo $row->id;?>">View</a> |
                    <a href="<?php echo site_url('CrudController/edit');?>/<?php echo $row->id;?>">Edit</a> | 
                    <a href="<?php echo site_url('CrudController/delete');?>/<?php echo $row->id;?>">Delete</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

  </body>
</html>