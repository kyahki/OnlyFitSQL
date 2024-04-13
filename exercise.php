
<?php
    include 'connect.php';
    $sql = "SELECT * FROM tblworkoutplan ORDER BY planid DESC LIMIT 1";
    $resultset = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($resultset);
    $planid = $row['planid'];
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no,viewport-fit=cover">
    <title>OnlyFit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="css/exerciseStylee.css" rel="stylesheet">
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
            <li class="nav-item">
              <a class="nav-link" href="workoutPlans.php">Workout Plans</a>
            </li>
          </ul>
        </div>
    </nav>
    <br>
    <br>
    <form method="post">
        <table>
            <tr>
                <th colspan="2" style="text-align: center; font-size: 35px;">Exercise</th>
            </tr>
            <tr>
                <td>Exercise name: </td>
                <td><input type="text" class="form-control" id="exercise" name="exercise" placeholder="Enter exercise name" required></td>
            </tr>
            <tr>
                <td>Intensity Level: </td>
                <td><input type="text" class="form-control" id="intensity" name="intensity" placeholder="Enter intensity level (e.g Beginner)" required></td>
            </tr>
            <tr>
                <td>Sets: </td>
                <td><input type="number" class="form-control" id="sets" name="sets" placeholder="Enter no. of sets" required></td>
            </tr>
            <tr>
                <td>Reps: </td>
                <td><input type="number" class="form-control" id="reps" name="reps" placeholder="Enter no. of reps" required></td>
            </tr>
            <tr>
                <td>Type of Exercise: </td>
                <td><select class="form-control" id="typeExercise" name="typeExercise" required>
                        <option value="">Select type of exercise</option>
                        <option value="Endurance">Endurance</option>
                        <option value="Strength">Strength</option>
                        <option value="Balance">Balance</option>
                        <option value="Flexibility">Flexibility</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td style="border-right: none; border-bottom: none;"><button type="submit" name="btnSubmit">Submit All</button></td>
                <td style="border-left: none; border-bottom: none;"><button type="submit" name="btnSave">Save Exercise & Add Another</button></td>
            </tr>
        </table>
    </form>
    <br>
    <br>
    <br>
    <footer>
        <p>Peter Sylvan L. Vecina | Kyle T. Vasquez</p>
        <p>Bachelor of Computer Science | Year 2</p>
    </footer>

    <?php
    if(isset($_POST['btnSave'])){		
        // Retrieve data from form and save the value to a variable
        // For tblexercise
        $ename = $_POST['exercise'];		
        $intensity = $_POST['intensity'];
        $sets = $_POST['sets'];		
        $reps = $_POST['reps'];
        $type = $_POST['typeExercise'];
        
        $sql = "INSERT INTO tblexercise(planid, exercisename, intensitylevel, sets, reps, typeofexercise) VALUES('$planid', '".$ename."', '".$intensity."', '$sets', '$reps', '".$type."')";
        mysqli_query($connection, $sql);

        echo "<script>alert('Exercise added');</script>";
    }    

    if(isset($_POST['btnSubmit'])) {
        $ename = $_POST['exercise'];		
        $intensity = $_POST['intensity'];
        $sets = $_POST['sets'];		
        $reps = $_POST['reps'];
        $type = $_POST['typeExercise'];
        
        $sql = "INSERT INTO tblexercise(planid, exercisename, intensitylevel, sets, reps, typeofexercise) VALUES('$planid', '".$ename."', '".$intensity."', '$sets', '$reps', '".$type."')";
        mysqli_query($connection, $sql);
        echo "<script>alert('List of exercises saved');</script>";
        echo "<script>
              window.location.href = 'index.php'</script>";
              exit();
    }
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    
</body>
