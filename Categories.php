<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <link rel="stylesheet" href="./Css/Categories.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

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

<div class="category category-1">
    <a href="babydiapers.php">
        <div>Baby Diapers</div>
    </a>
</div>
<div class="category category-2">
    <a href="">
        <div>Adult Diapers</div>
    </a>
</div>
<div class="category category-3">
    <a href="">
        <div>Other Products</div>
    </a>
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
                <p>Phone: 9028910286</p>
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





</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>