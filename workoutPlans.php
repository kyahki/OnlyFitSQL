
<?php
    include 'connect.php';
    $sql = "SELECT * FROM tblworkoutplan";
    $resultset = mysqli_query($connection, $sql);
    $sql1 = "SELECT * FROM tblexercise";
    $resultset1 = mysqli_query($connection, $sql1);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no,viewport-fit=cover">
    <title>OnlyFit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="css/workkoutPlan.css" rel="stylesheet">
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
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.php#registrationForm">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php#LogCard">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutUs.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactUs.php">Contact Us</a>
            </li>
            
          </ul>
        </div>
      </nav>

    <div>
        <table>
            <thead>
                <tr>
                    <th colspan="3" style="font-size: 30px; text-align:center;">List of Workout Plans</th>
                </tr>
                <tr>
                    <th>Plan ID</th>
                    <th>Workout Plan Type</th>
                    <th>Workout Plan Description</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row = $resultset->fetch_assoc()):
                ?>
                <tr>
                    <td><?php echo $row['planid'] ?></td>
                    <td><?php echo $row['workoutplantype'] ?></td>
                    <td><?php echo $row['workoutplandescription'] ?></td>
                </tr>
                <?php endwhile;?>
            </tbody>
        </table>
    </div>

    <div>
    <table>
        <thead>
            <tr>
                <th colspan="7" style="font-size: 30px; text-align:center;">List of Exercises</th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Plan ID</th>
                <th>Exercise name</th>
                <th>Intensity</th>
                <th>Sets</th>
                <th>Reps</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($row1 = mysqli_fetch_assoc($resultset1)):
            ?>
            <tr>
                <td><?php echo $row1['exerciseID'] ?></td>
                <td><?php echo $row1['planid'] ?></td>
                <td><?php echo $row1['exercisename'] ?></td>
                <td><?php echo $row1['intensitylevel'] ?></td>
                <td><?php echo $row1['sets'] ?></td>
                <td><?php echo $row1['reps'] ?></td>
                <td><?php echo $row1['typeofexercise'] ?></td>
            </tr>
            <?php endwhile;?>
        </tbody>
    </table>
    </div>
    <footer>
        <p>Peter Sylvan L. Vecina | Kyle T. Vasquez</p>
        <p>Bachelor of Computer Science | Year 2</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    
</body>
