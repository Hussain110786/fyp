<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="./Css/Signup.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "diapers";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo "Failed";
}

if (isset($_POST["submit"]) && $_POST["name"] != "" && $_POST["email"] != "" && $_POST["password"] != "" && $_POST["phone"] != "") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];

    $stmt = $conn->prepare("INSERT INTO newusers (name,email,phonenumber,password) VALUES (? ,?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $phone, $password);

    if ($stmt->execute()) {
        echo "<script>alert('Form Submmited')</script>";
    } else {
        echo "Error: " . $stmt->error;
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









<div class="container mx-auto">
    <div class="form-container">
        <h2 class="text-center">Register</h2>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="username" placeholder="Username" name="name" required>
                <label for="username">Username</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                <label for="email">Email</label>
            </div>
            <div class="form-floating mb-3">
                <input type="tel" class="form-control" id="phone" placeholder="Phone Number" name="phone" required>
                <label for="phone">Phone Number</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                <label for="password">Password</label>
            </div>
            <button type="submit" class="btn btn-primary w-100" value="submit" name="submit">Register</button>
        </form>
        <a class="btn btn-link btn-login w-100" href="./Login.php">
            Already have an account?
            LogIn
        </a>
    </div>
</div>




<footer class="footer">
    <div class="container">
        <div class="row">
            <!-- Shop Address Section -->
            <div class="col-md-4">
                <h5>Shop Address</h5>
                <p>Shop no.19 Pendhari Building ,Vasai Station Road, Next to Tungareshwar Sweets.<br>Vasai west<br>Maharashtra, 401202</p>
            </div>
            <!-- Contact Section -->
            <div class="col-md-4">
                <h5>Contact Us</h5>
                <p>Phone : 9028910286</p>
            </div>
            <!-- Social Media Links Section -->
            <div class="col-md-4">
                <h5>Follow Us</h5>
            
                <a href="#" class="me-3">Instagram</a>
            </div>
        </div>
        <!-- Google Map Iframe -->
        <div class="row map-container">
            <div class="col-12">
                <h5>Find Us Here</h5>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.668444211118!2d72.82767327374565!3d19.383503842249823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7af50219324c5%3A0x71f52a65453ab117!2sHouse%20Of%20Diapers%20(VASAI)!5e0!3m2!1sen!2sin!4v1741026468576!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                
            </div>
        </div>
    </div>
</footer>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>
</html>