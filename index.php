<?php
$password_length = $_GET['lunghezza_password'];
function generateRandomString($password_length)
{
  $password_length = $_GET['lunghezza_password'];
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!?&%$<>^+-*/()[]{}@#_=';
  $charactersLength = strlen($characters);
  $randomString = '';
  if (isset($_GET['lunghezza_password'])) {
    for ($i = 0; $i < $password_length; $i++) {
      $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
  } else {
    $randomString = '';
  }
  return $randomString;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Strong Password Generator</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.css' integrity='sha512-VcyUgkobcyhqQl74HS1TcTMnLEfdfX6BbjhH8ZBjFU9YTwHwtoRtWSGzhpDVEJqtMlvLM2z3JIixUOu63PNCYQ==' crossorigin='anonymous' />
</head>

<body>
  <div class="container text-center ">
    <h1>Strong Password Generator</h1>
    <h2>Genera una password sicura</h2>
    <form action="index.php" method="GET">
      <label for="lunghezza_password"></label>
      <input type="number" name="lunghezza_password" placeholder="lunghezza password">
      <button type="submit">Invia</button>
    </form>
    <h3><?php echo generateRandomString($password_length) ?></h3>
  </div>

</body>

</html>