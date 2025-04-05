<?php
   $connection = mysqli_connect("localhost","root","");
   $db = mysqli_select_db($connection,"demo_db");

   $edit = $_GET['edit'];

   $sql = "select * from user where id = '$edit'";
   $run = mysqli_query($connection,$sql);

   while($row=mysqli_fetch_array($run))
   {
        $id = $row['Id'];
        $name = $row['Name'];
        $email = $row['Email'];
        $contact = $row['Contact'];

   }




?>

<?php
   $connection = mysqli_connect("localhost","root","");
   $db = mysqli_select_db($connection,"demo_db");

   if(isset($_POST['Submit']))
   {
    $edit = $_GET['edit'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    $sql = "update user set name ='$name', email ='$email', contact ='$contact' where id = '$edit'";

      if(mysqli_query($connection,$sql))
      {
      echo "sucees";
      echo '<script> location.replace("nastaf.php")</script>';
      }
      else
      {
        echo 'some thing went wrong' . $connection->error;
      }
      
   }
        
?>
    
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
                <div class="card">
                    <div class="card-header">
                    <h5> Adding new user </h5>
                    </div>
                
                </div>
                    <div class="card-body">
                       
                        <form action="add.php" method="post">
                            <div class="form-group">                    
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Your Name" value="<?php echo $name; ?>">  
                            </div>
                            <div class="form-group">                    
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Enter Your Email" value="<?php echo $email; ?>">  
                            </div>
                            <div class="form-group">                    
                                <label>Contact</label>
                                <input type="text" name="contact" class="form-control" placeholder="Enter Your Contact" value="<?php echo $contact; ?>">  
                            </div>
                            
                            <br>
                            <input type="submit" class="btn btn-primary" name="Submit" value="Edit">
                            </br>
                        </form>
                    </div>





            </div>
        </div>
    </div>









    
</body>
</html>