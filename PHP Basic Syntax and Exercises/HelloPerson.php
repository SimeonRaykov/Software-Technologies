<form>
    <input type="text" name="person"/>
    <input type="submit"/>
</form/form>
</form>
<?php
if (isset($_GET['person'])) {
    $person = htmlspecialchars($_GET['person']);
    echo "Hello, $person!";
}
?>




