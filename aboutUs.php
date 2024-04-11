
<?php
    include 'connect.php';
    $sql = "SELECT * FROM tbluserprofile";
    $resultset = mysqli_query($connection, $sql);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no,viewport-fit=cover">
    <title>OnlyFit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="css/aboutUsStylee.css" rel="stylesheet">
</head>
<body>
    <header>OnlyFit</header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container" style="font-size: 22px; font-weight: bold">
          <a class="navbar-brand" href="#">
            <img src="path_to_your_logo.png" alt="Logo">
          </a>
          
          <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a class="nav-link" style="color:white" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color:white" href="register.php#registrationForm">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color:white" href="login.php#LogCard">Login</a>
            </li>
          
            <li class="nav-item">
              <a class="nav-link" style="color:white" href="contactUs.php">Contact Us</a>
            </li>
          </ul>
        </div>
      </nav>

      
    <div class="about-section">
        <h1><b>About Us Page</b></h1>
        <p>We are the CEO's of the OnlyFit App</p>
        <p>Feel free to know more about us!</p>
    </div>
    <div class="row">
  <div class="column">
    <div class="card">
      <img src="https://scontent.fceb3-1.fna.fbcdn.net/v/t39.30808-6/362251509_7184864161528775_734538607782179950_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFAK4P7JH4dUtrfrKazkTlQpIKvl203QwKkgq-XbTdDAlCkr5gvlCRzd3jxnWZWaxfiTtk5pJx6bWpHud2fTDRb&_nc_ohc=X15M0ZMiRiAAb7WfI-y&_nc_ht=scontent.fceb3-1.fna&oh=00_AfB2ZZpYqEFRLZLToLzAoJS3oLPQqNfZ3DU5Ny8yLxn3iA&oe=661DA96A" alt="Kyle" style="width:100%">
      <div class="container">
        <h2 style = "color: white">Kyle Vasquez</h2>
        <p class="title">CEO & Founder</p>
        <p style = "color: white">A human being.</p>
        <p style = "color: white">kyleasdasd@gmail.com</p>
        <a href="contactUs.php">
            <p><button class="button">Contact</button></p>
        </a>
       
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="https://scontent.fceb3-1.fna.fbcdn.net/v/t39.30808-6/362251509_7184864161528775_734538607782179950_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFAK4P7JH4dUtrfrKazkTlQpIKvl203QwKkgq-XbTdDAlCkr5gvlCRzd3jxnWZWaxfiTtk5pJx6bWpHud2fTDRb&_nc_ohc=X15M0ZMiRiAAb7WfI-y&_nc_ht=scontent.fceb3-1.fna&oh=00_AfB2ZZpYqEFRLZLToLzAoJS3oLPQqNfZ3DU5Ny8yLxn3iA&oe=661DA96A" alt="Peter" style="width:100%">
      <div class="container">
        <h2 style = "color: white">Peter Sylvan Vecina</h2>
        <p class="title">CEO & Founder</p>
        <p style = "color: white">A human being.</p>
        <p style = "color: white">peterasdasd@example.com</p>
        <a href="contactUs.php">
            <p><button class="button">Contact</button></p>
        </a>
      </div>
    </div>
  </div>
    <footer>
        <p>Peter Sylvan L. Vecina | Kyle T. Vasquez</p>
        <p>Bachelor of Computer Science | Year 2</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    
</body>
