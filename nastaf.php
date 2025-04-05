<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card" style="width: 59rem;">
                    <div class="card-header">
                    <h2> NASTAF Practise </h2>
                    </div>
                
                    <div class="card-body">
                        
                         <button class="btn btn-success"> <a href="add.php" class="text-light"> Add New </a> </button>

                        <br>
                        </br>

                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">ID</th>
                                <th scope="col">NAME</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">CONTACT</th>
                                <th scope="col">OPTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <?php
                                  $connection = mysqli_connect("localhost","root","");
                                    $db = mysqli_select_db($connection,"demo_db");

                                    $sql = "select * from user";
                                    $run = mysqli_query($connection, $sql);

                                    $id=1;

                                    while($row = mysqli_fetch_array($run))
                                    {

                                        $id = $row['Id'];
                                        $name = $row['Name'];
                                        $email = $row['Email'];
                                        $contact = $row['Contact'];
                                  
                               
                                   ?>

                                   <tr>
                                        <td><?php echo $id ?> </td>
                                        <td><?php echo $name ?> </td>
                                        <td><?php echo $email ?> </td>
                                        <td><?php echo $contact ?> </td>  
                                        
                                        <td>
                                        <button class="btn btn-success"> <a href="edit.php?edit=<?php echo $id ?>" class="text-light"> Edit </a> </button>
                                        <button class="btn btn-danger"> <a href="delete.php?del=<?php echo $id ?>" class="text-light"> Delete </a> </button>

                                        </td>
                                   </tr>

                                   <?php $id++;  } ?>
                                  
      
                                
                                    
                            </tbody>        
                        </table>
                    </div>





            </div>
        </div>
    </div>









    
</body>
</html>