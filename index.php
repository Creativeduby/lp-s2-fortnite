<?php
foreach (glob("folder/*") as $filename) {
    include $filename;
}
?>
