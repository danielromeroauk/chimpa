<table>
<?php if (isset($title)) print "<caption>$title</caption>"; ?>
<?php
if (isset($headers) && is_array($headers)){
  print "<thead><tr>";
  foreach ($headers as $header) {
    print "<th>$header</th>";
  }
  print "</tr></thead>";
}
?>
<tbody>
<?php
if (isset($data) && is_array($data)){
  foreach ($data as $row){
    print "<tr>";
    foreach ($row as $cell) {
      print "<td>$cell</td>";
    }
    print "</tr>";
  }
}
?>
</tbody>
</table>