<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<style>
   @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

* {
    font-family: "Poppins", "sans-serif";
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: url(login2.jpg) no-repeat center ;
}

.wrapper {
    width: 600px;
    background: transparent;
    border: 2px solid rgba(225, 225, 225, .2);
    backdrop-filter: blur(1px);
    box-shadow: 0 0 10px rgba(0, 0, 0, .2);
    color: #fff;
    border-radius: 10px;
    padding: 30px 40px;

}

.wrapper h1 {
    font-size: 36px;
    text-align: center;
}

.wrapper .inputan {
    position: relative;
    width: 100%;
    height: 50px;
    margin: 30px 0;
    border:  2px solid rgba(red, green, blue, alpha);
}

.inputan input {
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    border: 2px solid rgba(225, 225, 225, .2);
    border-radius: 40px;
    color: #fff;
    padding: 20px 45px 20px 20px;
}

.inputan input::placeholder {
    color: #fff;
}

.inputan i {
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 20px;
    top: 50%;
}

.wrapper .btn {
    width: 100%;
    height: 45px;
    background: #fff;
    border: none;
    outline: none;
    border-radius: 40px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    cursor: pointer;
    font-size: 16px;
    color: #333;
    font-weight: 600;
}

.wrapper .daftar {
    font-size: 14.5px;
    text-align: center;
    margin: 20px 0 15px;
}

.daftar p a {
    color: #fff;
    text-decoration: none;
    font-weight: 600;
}

.daftar p a:hover {
    text-decoration: underline;
}

</style>

<body>
    <div class="wrapper">
        <form action="simpan.php" method="post" name="Flogin">
            <h1>Register</h1>
            <div class="inputan">
                <input type="text" name="full_name" placeholder="Full Name" required>
                <i class='bx bxs-user-rectangle'></i>
            </div>
            <div class="inputan">
                <input type="text" name="email" placeholder="Email" required>
                <i class='bx bxs-envelope'></i>
            </div>
            <div class="inputan">
                <input type="text" name="username" placeholder="Username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="inputan">
                <input type="password" name="pw" placeholder="Password" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>

            <button type="submit" name="submit" class="btn">Login</button>
            <div class="daftar">
                <p>Have account? <a href="login.php" style=" color: #9d4edd;
">Login</a></p>
            </div>
        </form>
    </div>
</body>
</html>