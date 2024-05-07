<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome</title>
  <style>
    body {
  font-family: "Poppins", sans-serif;

  background-color: #f0f0f0;
  display: flex;
  flex-direction: column;
  text-align: center;
  align-items: center;
  justify-content: center;
  height: 90vh;
}

h1 {
  color: #0074b7;
}

  </style>
    
  </head>
  <body>
    <h1>WELCOME!!</h1>
    NAME: <?php echo $_GET["fname"];?> <?php echo $_GET["lname"];?><br>
    GENDER: <?php echo $_GET["gender"];?><br>
    NATIONALITY: <?php echo $_GET["country"];?><br>
  <?php
// Memeriksa apakah ada setidaknya satu checkbox yang dipilih
if(isset($_GET['language'])) {
    // Jika ada yang dipilih, ambil nilainya
    $selected_languages = $_GET['language'];
    
    // Tampilkan nilai yang dipilih
    echo "LANGUAGE: ";
    foreach($selected_languages as $language) {
        echo $language . " ";
    }
} else {
    // Jika tidak ada yang dipilih, tampilkan pesan
    echo "LANGUAGE: No language selected";
}
?><br>
    MESSAGE: <?php echo $_GET["bio"];?>

    <h4>
    Thank you for joining our website. The medium of learning for all of us
    </h4>
  </body>
</html>
