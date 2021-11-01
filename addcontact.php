<?php
    include 'config.php'; 
    if(isset($_POST['submit'])){
       $fname = $_POST['fname'];
       $lname = $_POST['lname'];
       $email = $_POST['email'];
       $phone = $_POST['phone'];

       $sql = "insert into `crud` (fname,lname,email,phone) values('$fname','$lname','$email','$phone')";

       $result = mysqli_query($conn,$sql);

       if( $result){
           header('location:index.php');
       }
           else{
        die(mysqli_error($conn));
       }
    }
?>

<!Doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/contact.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Contacts App</title>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light ">
        <a class="navbar-brand logo" href="index.php" ><img src="./Images/Logo.jpg" alt="" style="padding-left: 3rem;"></a>
      </nav>

      <div class="registration-form">
        <form method="post">
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="fname" name="fname" placeholder="First Name" required autocomplete="off">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="lname" name="lname" placeholder="Last Name" required autocomplete="off">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="email" name="email" placeholder="Email" required autocomplete="off">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="phone" name="phone" placeholder="Phone Number" autocomplete="off" required onchange="return val()" minlength="10" pattern="[0-9]{10}">
            </div>
           
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-block create-account" onclick="validate()">Add Contact</button>
            </div>
        </form>
       
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
    <footer class="text-center " style="color: white;">
        <p>&copy 2021 Made with &hearts; by <b>Bhavini Singh</b></p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>