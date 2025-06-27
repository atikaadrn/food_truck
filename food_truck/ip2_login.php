<?php
session_start();
include "koneksi.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./assets/css/ip2.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;600&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto Condensed:wght@500;600&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Playfair Display:wght@600&display=swap"
    />
    <link rel="icon" href="./assets/image/ip1/7938049 1 (2).png" type="image/x-icon" />
    <title>Register</title>

  </head>
  <body>
    <?php
        if(isset($_POST['nama'])){
            $nama = $_POST ['nama'];
            $password = ($_POST['password']);
            $query = mysqli_query($koneksi, "SELECT*FROM register where nama = '$nama' and password = '$password'");

            if(mysqli_num_rows($query) >0){ $data = mysqli_fetch_array($query); $_SESSION ['register'] = $data; echo '
    <script>
      alert("Selamat datang, '.$data['nama'].'");
      location.href = "ip4.html";
    </script>
    '; }else{ echo '
    <script>
      alert("Username/Password tidak sesuai.");
    </script>
    '; } } ?>

    <div class="ip2">
      <form method="POST">
        <div class="rectangle-parent" id="groupContainer">
          <div class="group-child"></div>
          <div class="login">LOGIN</div>
          <button type="submit" class="invisible-button"></button>
        </div>
        <div class="dont-have-an">Don’t have an account?</div>

        <a href="ip3.php">
          <div class="sign-up" id="signUpText">Sign up</div>
        </a>

        <div class="remember-me-parent">
          <div class="remember-me">Remember me</div>
          <div class="forgot-password">Forgot Password</div>

          <div class="rectangle-group">
            <div class="group-item">
              <input
                id="nama"
                name="nama"
                type="text"
                class="input-name"
                placeholder="Enter your name"
                required
              />
            </div>
            <!-- <div class="full-name">Full Name</div> -->
            <img
              class="iconamoonprofile-fill"
              alt=""
              src="./assets/image/ip2/iconamoon_profile-fill.svg"
            />
            <div class="iconamoonarrow-up-2-bold"></div>
          </div>
        </div>

        <div class="group-parent">
          <div class="rectangle-container">
            <div class="group-item">
              <input
                id="password"
                name="password"
                type="password"
                class="input-name"
                placeholder="Password"
                required
              />
            </div>
            <!-- <div class="full-name">*******</div> -->
            <div class="iconamoonarrow-up-2-bold"></div>
          </div>
          <img
            class="iconamoonprofile-fill"
            alt=""
            src="./assets/image/ip2/mdi_password.svg"
          />
        </div>

        <!-- <div class="input-wrapper">
        <label for="full-name">Full Name</label>
        <div class="input-group">
          <input
            type="text"
            id="full-name"
            placeholder="Enter your full name"
          />
          <img
            class="input-icon"
            src="./assets/image/ip2/mdi_password.svg"
            alt="icon"
          />
        </div>
      </div> -->

        <img
          class="lets-iconscheck-fill"
          alt=""
          src="./assets/image/ip2/lets-icons_check-fill.svg"
        />

        <div class="welcome-back-parent">
          <div class="welcome-back">Welcome Back</div>
          <div class="login-to-your">Login to your account</div>
          <img
            class="aca451-26eb-4659-8b2e-f5e714fd-icon"
            alt=""
            src="./assets/image/ip2/51aca451-26eb-4659-8b2e-f5e714fde315 1.png"
          />

          <div class="group-div" id="groupContainer">
            <div class="rectangle-div" id="arrow">
              <img
                class="iconamoonarrow-up-2"
                alt=""
                src="./assets/image/ip2/iconamoon_arrow-up-2.svg"
              />
            </div>
          </div>
          <div class="login1">Login</div>
        </div>
      </form>
    </div>

    <script>
      var groupContainer = document.getElementById("groupContainer");
      if (groupContainer) {
        groupContainer.addEventListener("click", function (e) {
          window.location.href = "ip4.html";
        });
      }

      var signUpText = document.getElementById("arrow");
      if (signUpText) {
        signUpText.addEventListener("click", function (e) {
          window.location.href = "index.php";
        });
      }
    </script>
  </body>
</html>
