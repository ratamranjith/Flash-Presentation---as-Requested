<html>
<?php
require "dbController.php"
$db_handle = new DBController();
?>
<body>
<h1>Add Members to the Site</h1>

<?php
$product_array = $db_handle->runQuery("SELECT * FROM userLogin ORDER BY id ASC");
if (!empty($product_array)) {
foreach($product_array as $key=>$value){
?>
<table>
  <tr>
    <td> Name
    </td>
    <td>Mobile</td>
</tr>
  <tr>
    <td>
	<div><strong><?php echo $product_array[$key]["name"]; ?></strong></div>
</td><td>
  <div><strong><?php echo $product_array[$key]["mobile"]; ?></strong></div></td>
</tr>
</table>
<?php }} ?>


</body>
</html>
