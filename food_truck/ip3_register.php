<?php
session_start();
include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];

  if ($password !== $confirm_password) {
    echo '<script>alert("Password tidak valid");</script>';
      die;
  }

  // hash password
  //$password_hash = password_hash($password, PASSWORD_BCRYPT);

  // koneksi dan simpan ke database
  $query = "INSERT INTO register (nama, email, password) VALUES (?, ?, ?)";
    $stmt = $koneksi->prepare($query);
    $stmt->bind_param("sss", $nama, $email, $password);

  if ($stmt->execute()) {
          // Simpan data di session
          $_SESSION['register'] = [
              'nama' => $nama,
              'email' => $email,
              'password' => $password,
          ];
          // Redirect ke halaman pasien.php
          header("Location: ip4.html");
          exit();
      } else {
          echo '<script>alert("Pendaftaran gagal: ' . $stmt->error . '");</script>';
      }
      $stmt->close();
}
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./assets/css/ip3.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;600&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto Condensed:wght@500&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Playfair Display:wght@600&display=swap"
    />
    <link rel="icon" href="./assets/image/ip1/7938049 1 (2).png" type="image/x-icon" />
    <title>Register</title>
  </head>
  <body>
    <div class="ip3">
      <form method="POST">
      <div class="rectangle-parent" id="groupContainer">
        <div class="group-child"></div>
        <div class="sign-up">SIGN UP</div>
        <button type="submit" class="invisible-button"></button>
      </div>

      <div class="by-signing-you-container">
        <span>By signing you agree to our</span>
        <span class="terms-of-use"> terms of use </span>
        <span>and</span>
        <span class="terms-of-use"> privacy notice </span>
      </div>
      <div class="have-an-account">Have an account?</div>
      <div class="login" id="loginText">Login</div>

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
          src="./assets/image/ip3/iconamoon_profile-fill.svg"
        />

        <div class="iconamoonarrow-up-2-bold"></div>
      </div>
      <div class="group-parent">
        <div class="rectangle-container">
          <div class="group-item">
            <input
            id="email"
            name="email"
              type="email"
              class="input-name"
              placeholder="Email"
              required
            />
          </div>
          <!-- <div class="full-name">Email</div> -->
          <div class="iconamoonarrow-up-2-bold"></div>
        </div>
        <img
          class="iconamoonprofile-fill"
          alt=""
          src="./assets/image/ip3/ic_baseline-mail.svg"
        />
      </div>
      <div class="group-container">
        <div class="rectangle-container">
          <div class="group-item">
            <input
            type="password"
              id="password"
              name="password"
              class="input-name"
              placeholder="Password"
              required
            />
          </div>
          <!-- <div class="full-name">Password</div> -->
          <div class="iconamoonarrow-up-2-bold"></div>
        </div>
        <img
          class="iconamoonprofile-fill"
          alt=""
          src="./assets/image/ip3/mdi_password.svg"
        />
      </div>

      <div class="group-parent1">
        <div class="rectangle-container">
          <div class="group-item">
            <input
              id="confirm_password"
              name="confirm_password"
              type="password"
              class="input-name"
              placeholder="Confirm Password"
              required
            />
          </div>
          <!-- <div class="confirm-password">Confirm password</div> -->
          <div class="iconamoonarrow-up-2-bold"></div>
        </div>
        <img
          class="iconamoonprofile-fill"
          alt=""
          src="./assets/image/ip3/mdi_password.svg"
        />
      </div>

      <div class="rectangle-parent2" id="groupContainer5">
        <div class="group-child2"></div>
        <img
          class="iconamoonarrow-up-2"
          alt=""
          src="./assets/image/ip3/iconamoon_arrow-up-2.svg"
        />
      </div>
      </form>
      <div class="register">Register</div>
      <div class="create-a-new">Create a new account</div>
    </div>

    <script>
      // var groupContainer = document.getElementById("groupContainer");
      // if (groupContainer) {
      //   groupContainer.addEventListener("click", function (e) {
      //     window.location.href = "ip4.html";
      //   });
      // }

      var loginText = document.getElementById("loginText");
      if (loginText) {
        loginText.addEventListener("click", function (e) {
          window.location.href = "ip2_login.php";
        });
      }

      var groupContainer5 = document.getElementById("groupContainer5");
      if (groupContainer5) {
        groupContainer5.addEventListener("click", function (e) {
          window.location.href = "index.php";
        });
      }

      // function validateForm() {
      //   const password = document.getElementById("password").value;
      //   const confirm = document.getElementById("confirm_password").value;

      //   if (password !== confirm) {
      //     alert("Password tidak valid!");
      //     return false; // mencegah form submit
      //   }

      //   return true;
      // }
    </script>
  </body>
</html>
