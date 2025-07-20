
<!DOCTYPE html>
<html lang="en">
<head>      
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
     <!-- font awesome icons -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css stylesheet -->
    <link rel="stylesheet" href="style.css">

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
 
 
}
.container {
  height: 100vh;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #878460;
  column-gap: 30px;
  background-image: url('images/back3.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  z-index: 1;
}
.form {
  position: absolute;
  max-width: 430px;
  width: 100%;
  padding: 30px;
  border-radius: 6px;
  background: #FFF;
}
.form.signup {
  opacity: 0;
  pointer-events: none;
}
.forms.show-signup .form.signup {
  opacity: 1;
  pointer-events: auto;
}
.forms.show-signup .form.login {
  opacity: 0;
  pointer-events: none;
}
header {
  font-size: 28px;
  font-weight: 600;
  color: #232836;
  text-align: center;
}
h2{

  font-size: 20px;
  font-weight: 600;
  color: #232836;
  text-align: center;
}
form {
  margin-top: 30px;
}
.form .field {
  position: relative;
  height: 50px;
  width: 100%;
  margin-top: 20px;
  border-radius: 6px;
}
.field input,
.field button {
  height: 100%;
  width: 100%;
  border: none;
  font-size: 16px;
  font-weight: 400;
  border-radius: 6px;
}
.field input {
  outline: none;
  padding: 0 15px;
  border: 1px solid#CACACA;
}
.field input:focus {
  border-bottom-width: 2px;
}
.eye-icon {
  position: absolute;
  top: 50%;
  right: 10px;
  transform: translateY(-50%);
  font-size: 18px;
  color: #8b8b8b;
  cursor: pointer;
  padding: 5px;
}
.field button {
  color: #fff;
  background: linear-gradient(-130deg, blue ,red);
  transition: all 0.3s ease;
  cursor: pointer;
  width: 100%;
  align-items: center;
}

.form-link {
  text-align: center;
  margin-top: 10px;
}
.form-link span,
.form-link a {
  font-size: 14px;
  font-weight: 400;
  color: #232836;
}
.form a {
  color: #0171d3;
  text-decoration: none;
}
.form-content a:hover {
  text-decoration: underline;
}
.line {
  position: relative;
  height: 1px;
  width: 100%;
  margin: 36px 0;
  background-color: #d4d4d4;
}
.line::before {
  content: 'Or';
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: #FFF;
  color: #8b8b8b;
  padding: 0 15px;
}
.media-options a {
  display: flex;
  align-items: center;
  justify-content: center;
}
a.facebook {
  color: #fff;
  background-color: #4267b2;
}
a.facebook .facebook-icon {
  height: 28px;
  width: 28px;
  color: #0171d3;
  font-size: 20px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #fff;
}
.facebook-icon,
img.google-img {
  position: absolute;
  top: 50%;
  left: 15px;
  transform: translateY(-50%);
}
img.google-img {
  height: 20px;
  width: 20px;
  object-fit: cover;
}
a.google {
  border: 1px solid #CACACA;
}
a.google span {
  font-weight: 500;
  opacity: 0.6;
  color: #232836;
}
@media screen and (max-width: 400px) {
  .form {
    padding: 20px 10px;
  }
}
.msg{
  max-width: 300px;
  width: 50%;
  background-color: green;
  text-align: center;
  padding: 10px;
  align-items: center;
  z-index: 2;
}
</style>

<link rel="stylesheet" href="style.css">
  <!-- Boxicons CSS -->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

 <?php /*
  if(isset($_GET['error'])){
    if($_GET['error'] === "emptyfields"){
      echo "<p class='msg' style='background-color: #ee2222;'> All inputs fields must be filled</p> ";
    }
    if($_GET['error'] === "invalidpassword"){
      echo "<p class='msg' style='background-color: #ee2222;'>Invalid Password</p> ";
    }
    if($_GET['error'] === "wrongemail"){
      echo "<p class='msg' style='background-color: #ee2222;'>Wrong Email</p> ";
    }

  }*/
?> 


  <section class="container forms">
    <div class="form login">
      <div class="form-content">
        <header>Manzaneque</header>
        <h2>Manager Login Page</h2>
        <form action="./includes/login.inc.php" method="POST">
          <div class="field input-field">
            <input type="text" placeholder="Username" class="input" name="uname" value="<?php if(isset($_COOKIE["emailCookie"])){ echo $_COOKIE["emailCookie"];}?>">
          </div>
          <div class="field input-field">
            <input id="pas" type="password" placeholder="Password" class="password" name="pswd" value="<?php if(isset($_COOKIE["passwordCookie"])){ echo $_COOKIE["passwordCookie"];}?>">
            <i class='bx bx-hide eye-icon'></i>
          </div>
          <div class="rem">
            <br>
                <input type="checkbox" id="remember" name="remem" <?php if(isset($_COOKIE["emailCookie"])){?> checked <?php } ?>>
                <label for="remember">Remember me</label>
            </div>
          <div class="field button-field">
            <button class="submit" name="log-btn">Login</button>
          </div>
        </form>
        <div class="form-link">
          <span>Registration <a href="register.php" class="link signup-link">Signup</a></span>
        </div>
      </div>
    </div>


<script src="script.js"></script>
    
    <!-- js code -->
    <script>
        
        /*const container = document.getElementById('container');
        const overlayCon = document.getElementById('overlayCon');
        const overlayBtn = document.getElementById('overlayBtn');

        overlayBtn.addEventListener('click', ()=> {
            container.classList.toggle('right-panel-active');
        })*/
    </script>

</body>
</html>
