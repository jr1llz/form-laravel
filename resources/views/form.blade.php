<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Sign Up</title>

    <style>
      body {
        font-family: Poppins, sans-serif;
      }

      h1 {
        color: #0074b7;
        text-align: center;
      }

      h4 {
        color: #000000;
        text-align: center;
      }

      label {
        display: block;
        font-weight: bold;
        color: #555;
      }

      input[type="text"],
      select,
      textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }

      button {
        background-color: #0074b7;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 7px;
        cursor: pointer;
      }

      button:hover {
        background-color: #000000;
      }
    </style>
  </head>
  <body>
  <form action="{{('welcome') }}" method="get">
      <h1>Buat Akun Baru</h1>
      <h4>Sign Up Form</h4>

      <label for="fname">First name:</label><br />
      <input type="text" id="fname" name="fname" required /><br /><br />
      <label for="lname">Last name:</label><br />
      <input type="text" id="lname" name="lname" required /><br /><br />

      <label for="gender">Gender</label><br />
      <input
        type="radio"
        id="male"
        name="gender"
        value="Male"
      />
      <label for="male">Male</label><br />
      <input type="radio" id="female" name="gender" value="Female" />
      <label for="female">Female</label><br /><br />

      <label for="Nationality">Nationality</label><br />
      <select id="country" name="country">
        <option value="Indonesia">Indonesian</option>
        <option value="Klari">Klari</option>
        <option value="CKM">CKM</option>
        <option value="Kosambi">Kosambi</option></select
      ><br /><br />

      <label for="bahasa">Language Spoken</label><br />
      <input type="checkbox" id="indo" name="language[]" value="Indonesian" />
      <label for="Indo">Indonesian</label><br />
      <input type="checkbox" id="sunda" name="language[]" value="Sundanese" />
      <label for="Sunda">Sundanese</label><br />
      <input type="checkbox" id="jawa" name="language[]" value="Javanese" />
      <label for="Jawa">Javanese</label><br /><br /><br />

      <textarea name="bio" rows="10" cols="20" required></textarea>
      <br />
      <button>Sign Up</button>
    </form>
  </body>
</html>
