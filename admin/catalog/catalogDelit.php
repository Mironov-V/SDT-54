<?php
include "../../controller/AdminAppController.php";
$app = new Admin();

$app->del_product();
?>

<?php require_once '../header_admin.php'; ?>
    <p>Удаление</p>
<?php require_once '../../components/footer.php'; ?>