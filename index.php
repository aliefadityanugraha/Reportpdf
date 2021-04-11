<!-- @format -->
<?php
session_start();

if(isset($_POST["submit"])){
  return true;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Cetak Sertifikat Pondok Romadhon | SMK PGRI 2 Kediri</title>
  </head>
  <body>
    <nav>
      <div class="judul">
        <h4>SMK PGRI 2 Kediri</h4>
      </div>
      <ul>
        <li><a href="">About Us</a></li>
      </ul>
      <div class="menu-toogle">
        <input type="checkbox" />
        <span></span>
        <span></span>
        <span></span>
      </div>
    </nav>
    <div class="side-bar">
      <ul>
        <li class="menu"><a href="">About Us</a></li>
      </ul>
    </div>
    <img
      src="img/portfolio2.jpg"
      alt="Tunnel View , United States"
      class="Homescreen"
    />

    <!-- Body -->
    <div class="container">
      <h1>
        Cetak Sertifikat Pondok Romadhon
        <br />
        <p class="quotes">
          - Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum,
          enim? -
        </p>
        <button type="submit" class="more">Mulai Mencetak</button>
      </h1>
    </div>
    <!-- <footer>
      <h5>
        2021 &copy; Copyright | Desing by Alief Aditya | Image
        <a
          href="https://unsplash.com/photos/M6XC789HLe8?utm_source=unsplash&utm_medium=referral&utm_content=creditShareLink"
          >Source</a
        >
      </h5>
    </footer> -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
    <script src="js/scrpit.js"></script>
  </body>
</html>
