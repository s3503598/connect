<html>
<head><title>Wines</title></head>
<body>
 
<?php
  require_once('db.php');
 
  // (1) Open the database connection
  $connection = mysql_connect(DB_HOST, DB_USER, DB_PW);
  mysql_select_db(DB_NAME, $connection);
 
  // (2) Run the query on the winestore through the connection
  $query = "SELECT * FROM wine";
  $result = mysql_query($query, $connection);

  echo "<h1>Wines</h1>";
 
  // Start the HTML body, and output preformatted text
  echo "<pre>\n";
 
  // (3) While there are still rows in the result set
  while ($row = mysql_fetch_row($result)) {
   for ($i = 0; $i < mysql_num_fields($result); $i++) {
      echo $row[$i] . " ";
   }
   // Print a carriage return to neaten the output
   echo "\n";
  }
 
  // Finish the HTML document
  echo "</pre>";
 
  // (4) Close the database connection
  mysql_close($connection);
?>
      </pre>
    </div>
    <br clear="all" />
  </div>
</div>

</body>
</html>
