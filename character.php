<?php
    session_start();
    if(isset($_SESSION['username']) && isset($_SESSION['pw'])){

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rapunzel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head>

<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

* {
    font-family: "Poppins", "sans-serif";
}

.navbar {
    background-color: #fff;
    height: 80px;
    margin: 20px;
    border-radius: 16px;
    padding: 0.5rem;
}

 .navbar-brand {
        font-weight: 500;
        color: #7b2cbf;
        font-size: 24px;
        transition: 0.3s color;
    }

    .login-button, button{
    background-color: #7b2cbf;
    color: #fff;
    font-size: 14px;
    padding: 8px 20px;
    border-radius:  50px;
    text-decoration: none;
    transition: 0.3s background-color;
}

.login-button:hover {
    background-color: #9d4edd;
}

.navbar-toggler {
    border: none;
    font-size: 1.25rem;
}

.navbar-toggler:focus, .btn-close:focus {
    box-shadow: none;
    outline: none;
}

.nav-link {
    color: #666777;
    font-weight: 500;
    position: relative;
}

.nav-link:hover, .nav-link:active{
    color: #000;
}

@media (min-width: 991px) {
.nav-link::before{
    content: "";
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 0;
    height: 2px;
    background-color: #9d4edd;
    visibility: hidden;
    transition: 0.3s ease-in-out;
}
}

.nav-link:hover::before{
    width: 100%;
    visibility: visible;
}

.hero-section {
    background:#666777;
    background-size: cover;
    width: 100%;
    height: 100vh;
}

.hero-section::before {
    background: url(chara.jpg) no-repeat center;
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
}

.hero-section .container {
    height: 100vh;
    z-index: 1;
    position: relative;
}

.hero-section h1 {
    font-size: 1.5em;
    margin-bottom: 13px;
}

.hero-section h2 {
    font-size: 1.2em;
}

.card {
    width: 180px;
    height: 270px;
    border-radius: 20px;
    overflow: hidden;
    border: 8px solid #fff;
    position: fixed;
    display: flex;
    flex-direction: column;
}

.card-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.card-body {
    width: 100%;
    height: 100%;
    top: 0;
    right: -100%;
    position: absolute;
    background: #1f3d4378;
    backdrop-filter: blur(5px);
    border-radius: 15px;
    color: #fff;
    padding: 30px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    transition: 2s;
}


.card:hover .card-body{
    right: 0;
}

.card-info {
    font-size: 7px;
    line-height: 25px;
    margin: 40px 0;
    font-weight: 400;
}

.card-title {
    text-transform: uppercase;
    font-size: 10px;
    font-weight: 10;
    margin-top: 50px;
}


</style>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand me-auto" href="#">Eupho</a> 
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Logo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link ex-lg-2" aria-current="page" href="menu.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="character.php">Character</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ex-lg-2" href="tabel.php">See Users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ex-lg-2" href="tampilan.php">Add Users</a>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="logout.php" class="login-button">Logout</a>
            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- hero action -->

    <section class="hero-section">
    <div class="container d-flex align-items-center justify-content-center fs-1 text-white flex-column">
        <div class="card">
            <img src="rapunzel.jpg" class="card-image" alt="">
            <div class="card-body">
                <h4 class="card-title">Rapunzel</h1>
                <p class="card-info">Rapunzel is a determined young woman, with a strong sense of curiosity about the world, and a willingness to step outside of her comfort zone to experience her dream.</p>
            </div>
        </div>
        <div class="card" style="margin-left: 50%;">
            <img src="kuda.jpg" class="card-image" alt="">
            <div class="card-body">
            <h4 class="card-title">KUda</h1>
            <p class="card-info">Maximus is a palace horse for the Royal Guard of Corona and the former arch-rival of Flynn Rider.</p>
            </div>
        </div>
        <div class="card" style="margin-left: -50%;">
            <img src="rider.jpg" class="card-image" alt="">
            <div class="card-body">
            <h4 class="card-title">Flynn Rider</h1>
                <p class="card-info">When the kingdom's most wanted-and most charming-bandit Flynn Rider hides out in a mysterious tower, he's taken hostage by Rapunzel.</p>
            </div>
        </div>
    </div>
    </section>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</body>

</html>

<?php
    }else{
?>

<script>
    alert("Silahkan login terlebih dahulu");
    window.location = "login.php";
</script>

<?php 
    }
?>