<!DOCTYPE html>
<html>
<head>
<title>Display subtraction value Records</title>
</head>

<body>
<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr style="background:#CCC">
    <th>number</th>
    <th>subtraction_one</th>
    <th>subtraction_two</th>
    <th>results</th>


      </tr>
  <?php
  $i=1;
  foreach($data as $row)
  {
  echo "<tr>";
  echo "<td>".$i."</td>";
  echo "<td>".$row->subtraction_one."</td>";
  echo "<td>".$row->subtraction_two."</td>";

  echo "</tr>";
  $i++;
  }
   ?>
</table>

</body>
</html>