<style>

  table{
    border-collapse: collapse;
  }
  tr, td{
    border:1px solid black;
  }
</style>

<table>
<?php
for($a=1; $a<=9; $a++){
  echo '<tr>';
  for($b=1; $b<=9; $b++){
    echo '<td>'.$a*$b.'</td>';
    }
  echo '</tr>';
}
?>
</table>