<!-- @format -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Twice Survey</title>
    <link rel="stylesheet" href="css/stylecetak.css" />
  </head>
  <body>
    <h1 id="title">Form Cetak Sertifikat</h1>

    <form id="form" action="form.php" method="POST" name="submit-to-google-sheet">
      <label for="name" id="name-label">
        Nama Lengkap
        <input type="text" id="name" placeholder="Enter your name" name="nama" required />
      </label>
      <label for="kelas" id="name-label">
        Kelas
        <input type="text" id="kelas" placeholder="Enter your name" name="kelas" required />
      </label>
      <button id="submit" type="submit" class="maneh">Oke</button>
        <p>Klik oke lalu Selanjutnya</p>
      <button type="button" onclick="return salin()" class="jarak">Selanjutnya</button>
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
    <script>
       const scriptURL = 'https://script.google.com/macros/s/AKfycby9lcg-VZ4lXIiVsM2QcL0uyXQPbi1PCu01YTMRS-VAnAAVp1a55yWJ8Ff4BHQor5EASQ/exec';
          const form = document.forms['submit-to-google-sheet']
      
           form.addEventListener('submit', e => {
             e.preventDefault()
           fetch(scriptURL, { method: 'POST', body: new FormData(form)})

          .then(response => 
          {
            form.reset()
            console.log('Success!', response)
            
          })
          .catch(error => console.error('Error!', error.message))
          
      });

      function salin(){
        window.location.href = "form.php";
      }
      
    </script>
  </body>
</html>
