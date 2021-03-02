<?php
require('../app/functions.php');
include('../app/_parts/_header.php');

?>

<form action="result.php" method="get">
  <!-- <input type="text" name="message"> -->
  <textarea name="message"></textarea>
  <button>送る</button>
</form>


<?php
include('../app/_parts/_footer.php');