<?php
require_once ("dbcontroller.php");
$db_handle = new DBController();
if (! empty($_POST["country_id"])) {
    $query = "SELECT * FROM state WHERE cid = '" . $_POST["country_id"] . "'";
    $results = $db_handle->runQuery($query);
    ?>
<option>Select State</option>
<?php
    foreach ($results as $state) {
        ?>
<option value="<?php echo $state["sid"]; ?>"><?php echo $state["sname"]; ?></option>
<?php
    }
}
?>