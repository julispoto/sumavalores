<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>edad2</title>
</head>
<body>
  
   
<p>hola</p>

<?php  //calcular solo el ano
if (isset($_POST['submit'])) {

$anonaz= $_POST['$anonaz'];
}

?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <fieldset>
      <legend>fecha de nacimiento</legend>
      <label >ano:</label>
      <input type="text" name="$anonaz" value="<?php if (!empty($anonaz)) echo $anonaz; ?>" /><br />
    </fieldset>
    <input type="submit" value="calcular edad" name="submit" />
  </form>


  <?php // https://es.wikibooks.org/wiki/Programaci%C3%B3n_en_PHP/Ejemplos/Calcular_edad

//fecha actual
$ano=date("Y");

$edad=($ano-$anonaz);


print "tu edad es ". $edad;

?>
</body>
</html>