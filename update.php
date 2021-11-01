<?php
    include 'config.php'; 
    $id = $_GET['updateid'];
    $sql = "select * from `crud` where id=$id";
    $res= mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($res);



    if(isset($_POST['submit'])){
       $name = $_POST['name'];
       $email = $_POST['email'];
       $phone = $_POST['phone'];
 
       $sql = "update `crud` set id = '$id', name='$name', email='$email', phone='$phone' where id=$id";

       $result = mysqli_query($conn,$sql);

       if( $result){
          // echo "updated successfully!";
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
                <input type="text" class="form-control item" id="name" name="name" value="<?php echo $row['name']; ?>" autocomplete="off">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="email" name="email" value="<?php echo $row['email']; ?>" placeholder="Email" autocomplete="off">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="phone" name="phone" value="<?php echo $row['phone']; ?>" placeholder="Phone Number" autocomplete="off">
            </div>
           
            <div class="form-group">
                <button type="submit" name="submit" class="btn up create-account">UPDATE</button>
                <button class="btn create-account"><a href="index.php" class="text-light">BACK</a></button>
            </div>
        </form>
       
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
    <footer class="text-center mt-2 py-1" style="color: white;">
        <p>&copy 2021 Made with &hearts; by <b>Bhavini Singh</b></p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>