<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .button{
            border-radius: 4px;
            background-color: #f4511e;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 20px;
            padding: 5px;
            width: 80px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 1px;
        }
        .button span{
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }
        .button span:after{
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }
        .button:hover span{
            padding-right: 25px;
        }
        .button:hover span:after{
            opacity: 1;
            right: 0;
        }
        
    </style>
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

    <div class="container" style="margin-left: 430px">
    <br>
    <br>
    
    <table style="width:50%" class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                <th style="text-align:center" scope="col"><h3>Details</h3></th>
                
            
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><b>Full name : </b><?php echo $row->firstName." ".$row->lastName; ?></td>
                    
                </tr>
                <tr>
                    <td><b>Birth Date : </b><?php echo $row->birthDate; ?></td>
                </tr>
                <tr>
                    <td><b>Contact Number : </b>0<?php echo $row->contactNo; ?></td>
                </tr>
                <tr>
                    <td><b>Bio : </b><?php echo $row->bio; ?></td>
                </tr>
                
            </tbody>
        </table>
        <a href="<?php echo site_url('CrudController')?>"><button class="button"><span>Back</span></button></a>
    </div>
</body>
</html>