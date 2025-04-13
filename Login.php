<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Css/Login.css">
    <link rel="stylesheet" href="./Css/Home.css">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<?php
  session_start();

  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "diapers";

    $conn = new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error)
    {
        // echo "Failed";
        die("Connection failed: " . $conn->connect_error);
        
    }

    $stmt = $conn->prepare("SElECT id,name,password from newusers where name=?");
    $stmt->bind_param("s",$username);

    $username = $_POST["username"];


    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows == 1)
    {
      while($row = $result->fetch_assoc())
      {
        if($_POST["password"] == $row["password"])
        {
          $_SESSION['loggedin'] = true;
          $_SESSION['username'] = $row['name'];
          $_SESSION['user_id'] = $row['id'];

          header("Location:/finalyearproject/Home.php");
        }
        else{
        //   $login_err = "Invalid username or password";
        echo"<script>alert('Invalid username or password')</script>";
        }
      }
    }
    else{
      $login_err = "Username does not exist";
      echo"<script>alert('Invalid username or password')</script>";

    }

    $stmt->close();
    $conn->close();
  }
  ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="position:fixed;z-index:1000;width:100%;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">House Of Diapers</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="ms-auto d-flex align-items-center"> 
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./Home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./categories.php">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./About us.php">About Us</a>
                    </li>
                    
                </ul>
                <a href="./Signup.php" class="btn btn-outline-success">Signup</a>
            </div>
        </div>
    </div>
</nav>

<div class="container" style="display:flex;justify-content:center;align-items:center;height:100vh;">
<div class="form-container">
    <h2 class="text-center">Login</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
            <label for="username">Username</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
            <label for="password">Password</label>
        </div>
        <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
    <a class="text-center" href="./Signup.php">Don't have an account? Create an account</a>
</div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>