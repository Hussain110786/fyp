<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <link rel="stylesheet" href="./Css/Home.css">
   
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


<div class="bg-image">
    <div class="bg-overlay"></div>
    <div class="welcome-text">
        <h1>Welcome to House Of Diapers</h1>
        <p>Your one-stop destination for all your diapering needs.</p>
        <a href="#" class="btn btn-success btn-shop-now">Shop Now</a>
    </div>
</div>


<div class="container featured-section">
    <h2 class="featured-title">Featured Products</h2>
    <div class="row">
        <!-- Product Card 1 -->
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="Images/heroimg1.jpg "class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Mamy Poko Pants All Night Absorb MRP 399. </h5>
                    <p class="card-text"> Offer Price 280.</p>
                    <a href="#" class="btn btn-primary">Buy now</a>
                </div>
            </div>
        </div>
        <!-- Product Card 2 -->
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="Images/heroimg2.jpg" class="card-img-top" alt="Product 2">
                <div class="card-body">
                    <h5 class="card-title">Huggies Wonder Pnats MRP 399.</h5>
                    <p class="card-text">Offer Price 260.</p>
                    <a href="#" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>
        <!-- Product Card 3 -->
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="Images/heroimg3.jpg" class="card-img-top" alt="Product 3">
                <div class="card-body">
                    <h5 class="card-title">Pampers All-Round Protection MRP 399.</h5>
                    <p class="card-text">Offer price 320.</p>
                    <a href="#" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>
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







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>
</html>