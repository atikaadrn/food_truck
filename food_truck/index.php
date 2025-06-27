<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./assets/css/index.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Playfair Display:wght@600&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;600&display=swap"
    />
  </head>
  <body>
    <div class="ip1">
      <img class="icon" alt="" src="./assets/image/ip1/7938049 1 (2).png" />

      <div class="makanan">
        <div class="makanan-child"></div>
        <img class="pizza3-icon" alt="" src="./assets/image/ip1/pizza3.png" />

        <img class="burger5-icon" alt="" src="./assets/image/ip1/burger5.png" />

        <img class="burger3-icon" alt="" src="./assets/image/ip1/burger3.png" />

        <img class="burger4-icon" alt="" src="./assets/image/ip1/burger4.png" />

        <img class="icon1" alt="" src="./assets/image/ip1/11038620.png" />

        <img class="pizza2-icon" alt="" src="./assets/image/ip1/pizza2.png" />

        <img class="pizza1-icon" alt="" src="./assets/image/ip1/pizza1.png" />

        <img class="burger1-icon" alt="" src="./assets/image/ip1/burger1.png" />

        <img class="burger2-icon" alt="" src="./assets/image/ip1/burger2.png" />

        <img class="icon2" alt="" src="./assets/image/ip1/11038621.png" />

        <img class="icon3" alt="" src="./assets/image/ip1/11038618.png" />

        <img class="icon4" alt="" src="./assets/image/ip1/11038619.png" />
      </div>
      <div class="food-mate">FOOD MATE</div>
      <div class="food-mate-hadir">
        Food Mate hadir untuk menjawab kebutuhan masyarakat modern yang
        menginginkan kepraktisan dalam menikmati hidangan lezat tanpa harus
        mengantri atau mencari lokasi food truck secara manual. Memungkinkan
        pengalaman kuliner yang cepat, mudah, dan menyenangkan di mana pun dan
        kapan pun. Food Mate bukan sekadar aplikasi pemesanan makanan, tapi
        gerbang menuju petualangan rasa yang bergerak. Temukan rasa baru, dukung
        usaha lokal, dan nikmati kemudahan dalam satu genggaman.
      </div>
      <div class="ip1-child" id="rectangle"></div>
      <div class="ip1-item" id="rectangle1"></div>
      <div class="sign-up">SIGN UP</div>
      <div class="login">LOGIN</div>
    </div>

    <script>
      // sign up
      var rectangle = document.getElementById("rectangle");
      if (rectangle) {
        rectangle.addEventListener("click", function (e) {
        // alert("Anda mengklik tombol SIGN UP!");
        window.location.href = "ip3_register.php";
        });
      }

      // login
      var rectangle1 = document.getElementById("rectangle1");
      if (rectangle1) {
        rectangle1.addEventListener("click", function (e) {
        window.location.href = "ip2_login.php";
        });
      }
    </script>
  </body>
</html>
