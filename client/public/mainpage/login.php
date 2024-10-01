<?php include_once("../templates/header.php"); ?>

<?php
session_start();
require("../../../server/db/connect.php");

if (isset($_POST["loginBtn"])) {
    $email = $_POST["email"];
    $sql = "SELECT * FROM user WHERE email = '$email'";
    $res = $conn->query($sql);

    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
            $password = $_POST["password"];
            if ($password == $row["password"]) {
                // Store user data in session
                $_SESSION['isLoggedIn'] = true;
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_email'] = $row['email'];
                // Add more user data to the session as needed

                // Store user data in a cookie (example, adjust expiration time)
                $cookie_name = "user_data";
                $cookie_value = json_encode(['user_id' => $row['id'], 'user_email' => $row['email']]);
                $cookie_expiration = time() + 3600; // Cookie expires in 1 hour
                setcookie($cookie_name, $cookie_value, $cookie_expiration, "/");

                header("Location:../dashboard/product.php");
            } else {
                echo "Unsuccessful login";
            }
        }
    }
}
?>
<link rel="stylesheet" href="../assets/css/main.css">
<div class="content-wrapper">
  <div class="content">
    <img src="../assets/images/mainn.png" alt="" />
    <h2>
      Choose the best.Choose us. <br /><br />
      Go Stylish!!.
    </h2>
  </div>
</div>
<div class="overlay-container">
  <div class="overlay">
    <div class="loginform">
    <span id="exit">&times;</span>
      <h1>Login </h1>
      <form action="#" method="POST" name="form_name">
        <div class="field-group">
          
          <input type="text" id="email" name="email" value=""required="required" />
          <span>Email</span>

        </div>
        <div class="field-group">
          
          <input type="password" id="password" name="password" value="" required="required"/>
          <span>Password</span>
        </div>
        <div class="button-block">
          <button type="submit" name="loginBtn">Login</button>


        </div>
        <div class="login-shop">
          <h1>Please Login and Enjoy your Shopping!!</h1>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="../assets/js/login.js"></script>

<?php include_once("../templates/footer.php"); ?>