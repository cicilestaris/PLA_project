<select name="id_kelas" id="id_kelas">
<?php
$str = $_GET['str'];
if($str=='A'){
  echo "<option>lala</option>";
}else if($str == 'B'){
  echo "<option>lili</option>";
}else{
  echo "<option>lulu</option>";
}

 ?>
</select>