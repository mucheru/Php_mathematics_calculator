<!DOCTYPE html>
<html>
<head>
<title>Display Addition Records</title>
</head>

<body>
<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr style="background:#CCC">
    <th>number</th>
    <th>num_1</th>
    <th>num_1</th>
    <th>results</th>

      </tr>
  <?php
  $i=1;
  foreach($data as $row)
  {
  echo "<tr>";
  echo "<td>".$i."</td>";
  echo "<td>".$row->num_1."</td>";
  echo "<td>".$row->num_2."</td>";
  echo "<td>".$row->results."</td>";
  echo "</tr>";
  $i++;
  }
   ?>
</table>

</body>
</html>