<!DOCTYPE html>
<html>
<head>
<title>Display Records</title>
</head>

<body>
<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr style="background:#CCC">
    <th>number</th>
    <th>digit_one</th>
    <th>digit_two</th>
      </tr>
  <?php
  $i=1;
  foreach($data as $row)
  {
  echo "<tr>";
  echo "<td>".$i."</td>";
  echo "<td>".$row->digit_one."</td>";
  echo "<td>".$row->digit_two."</td>";
  echo "</tr>";
  $i++;
  }
   ?>
</table>

</body>
</html>