
<!Doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Contacts App</title>
</head>

<body>
    <!--navbar-->
    <nav class="navbar navbar-expand-md navbar-light ">
        <a class="navbar-brand logo" href="index.php" ><img src="./Images/Logo.jpg" alt="" style="padding-left: 3rem;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon navbar-light"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <button type="button" class="btn btn-primary" ><a class="nav-link text-light" href="addcontact.php"><b>ADD CONTACT</b></a></button>
                </li>
            </div>
    </nav>

    <div class="container">
        <div >
            <div class="col-sm-12 col-md-12 col-xs-12" style="margin-top: 0.0rem;">
                <div class="text-center" >
                    <h1 class="glow" style="color: rgb(69, 82, 83); font-size:3rem; font-family:cursive;"><b>CONTACTS</b></h1>
                </div>
            </div>
        </div>
        <!--table-->
        <div class="table-responsive text-center" style="margin-top: 4rem;">
                  <table bordercolor="black" class="table table-hover table-striped table-condensed table-bordered center">
                      <thead style="color : white;">
                          <tr>
                              <th class="text-center">S.No.</th>
                              <th class="text-center">Name</th>
                              <th class="text-center">Email</th>
                              <th class="text-center">Phone Number</th>
                              <th class="text-center">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                      <?php
                      include 'config.php';
                      $sql ="select * from crud";
                      $query =mysqli_query($conn, $sql);
                      while($rows = mysqli_fetch_assoc($query))
                      {
                        ?>
                          <tr style="color : white;">
                          <td class="py-2"><b><?php echo $rows['id']; ?></b></td>
                          <td class="py-2"><?php echo $rows['fname']." ".$rows['lname']; ?></td>
                          <td class="py-2"><?php echo $rows['email']; ?></td>
                          <td class="py-2"><?php echo $rows['phone']; ?> </td>
                          <td>
                            <button class="btn btn-primary" style="margin-right: 1rem"><a class="text-light" style="text-decoration:none;" href="update.php?updateid= <?php echo $rows['id']; ?>">EDIT</a></button>
                            <button class="btn btn-danger"><a  class="text-light" style="text-decoration:none;" href="delete.php?deleteid= <?php echo $rows['id']; ?>">DELETE</a></button>
                          </td>

                          <?php
                            }
                          ?>  

                      </tbody>
                  </table>
        </div>
    </div>
    <!--footer-->
    <footer class="text-center mt-2 py-1" style="color:white;">
        <p>&copy 2021 Made with &hearts; by <b>Bhavini Singh</b> for <a class="navbar-brand logo" href="index.php" ><img src="./Images/DPSLogo.jpg" alt="" style="padding-left: 0.5rem;"></a></p>
       
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>