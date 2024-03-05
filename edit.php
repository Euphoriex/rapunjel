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
    background: url(tampilan.jpg) no-repeat center;
    background-size: cover;
    width: 100%;
    height: 100vh;
}

.hero-section::before {
    background-color: rgba(0, 0, 0, 0.1);
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

label {
    font-size: 15px;
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
                            <a class="nav-link active" aria-current="page" href="menu.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ex-lg-2" href="character.php">Character</a>
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
    <div class="keren mt-5" style="width: 100%; height: 70%; margin-right: 60px; ">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card" style="  width: 600px;
    background: transparent;
    border: 2px solid rgba(225, 225, 225, .2);
    backdrop-filter: blur(20px);
    box-shadow: 0 0 10px rgba(0, 0, 0, .2);
    color: #fff;
    border-radius: 10px;
    padding: 30px 40px;
    ">
        <div class="card-body" style="" >
        <form action="simpanedit.php" method="post" name="Flogin">
        <?php
            include 'konfig/koneksi.php';
            $id= $_GET['id'];
            $tampil = mysqli_query($kon,"SELECT * FROM user WHERE id= $id");
            while ($data = mysqli_fetch_array($tampil)){
            ?>

          <div class="row">
  <div class="col">
    <!-- Name input -->
    <div data-mdb-input-init class="form-outline">
      <input type="text" name="username" id="form8Example1" class="form-control" value="<?php echo $data['username']?>"/>
      <label class="form-label" for="form8Example1">Username</label>
    </div>
  </div>
  <div class="col">
    <!-- Email input -->
    <div data-mdb-input-init class="form-outline">
      <input type="password" name="pw" id="form8Example2" class="form-control" value="<?php echo $data['pw']?>"/>
      <label class="form-label" for="form8Example2">Password</label>
    </div>
  </div>
</div>

<hr />

<div class="row">
  <div class="col">
    <!-- Name input -->
    <input type="hidden" name="id" value=<?= $data['id']?>>
    <div data-mdb-input-init class="form-outline">
      <input type="text" name="full_name" id="form8Example3" class="form-control" value="<?php echo $data['full_name']?>"/>
      <label class="form-label" for="form8Example3">Full name</label>
    </div>
  </div>
    <!-- Email input -->
    <div data-mdb-input-init class="form-outline">
      <input type="email" name="email" id="form8Example5" class="form-control" value="<?php echo $data['email']?>"/>
      <label class="form-label" for="form8Example5">Email address</label>
    </div>
  </div>
</div>
            <button type="submit" class="btn btn-outline-light">Submit</button>
          </form>
          <?php
            }
          ?>
        </div>
      </div>
    </div>
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