<?php require './header.php'; ?>
<?php
switch ($_REQUEST['seat']) {
    case '指定席':
        echo '需加收120元補票';
        break;
    case '商務車廂':
        echo '需加收250元補票';
        break;
    default:
        echo '不需補票。';
        break;
}
?>
<?php require './footer.php'; ?>