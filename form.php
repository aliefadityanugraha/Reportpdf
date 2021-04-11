<!-- @format -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Twice Survey</title>
    <link rel="stylesheet" href="css/styleform.css" />
  </head>
  <body>
    <h1 id="title">Hai , a</h1>
    <p>Sihakan Lengkapi Data dibawah ini!</p>

    <form id="form" action="cetak.php" method="POST">
      <label for="name" id="name-label">
        Nama Lengkap
        <input type="text" id="name" placeholder="Enter your name" name="nama" required />
      </label>
      <label for="kelas" id="name-label">
        Kelas
        <input type="text" id="kelas" placeholder="Enter your name" name="kelas" required />
      </label>
      <label for="ttl" id="name-label">
        Tanggal Lahir
        <input type="text" id="ttl" placeholder="Enter your name" name="ttl" required />
      </label>

      <button id="submit" type="submit">Cetak & Download Sertifikat</button>
    </form>
    <footer>
      <h5>
        2021 &copy; Copyright | Desing by Alief Aditya | Image
        <a
          href="https://unsplash.com/photos/M6XC789HLe8?utm_source=unsplash&utm_medium=referral&utm_content=creditShareLink"
          >Source</a
        >
      </h5>
    </footer>
  </body>
</html>
