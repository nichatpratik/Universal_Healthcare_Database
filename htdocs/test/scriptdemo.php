<html>
<head><title>Oracle demo</title></head>
<body>
<?php

define('DB_SERVER', 'localhost/orcl');
define('DB_USERNAME', 'system');
define('DB_PASSWORD', 'pentagon');
define('DB_DATABASE', 'localhost/orcl');
$conn= oci_connect(DB_USERNAME, DB_PASSWORD, DB_SERVER)
or die(oci_error());
echo "success...";
//$database = oci_select_db(DB_DATABASE) or die(oci_error());
$stid = oci_parse($conn, 'SELECT * FROM employees'); oci_execute($stid); echo "<table border='1'>\n"; while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {     echo "<tr>\n";     foreach ($row as $item) {         echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";     }     echo "</tr>\n"; } echo "</table>\n";
?>

</body>
</html>
