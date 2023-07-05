<?php
$messages = ["success","error"];

foreach ($messages as $message) {
    if (isset($_SESSION[$message])) {
        $clas = $message === "error" ? "alert-danger" : "alert-sucess"; ?>
        <div class="alert <?=$clas?> alert-dismissible fade show" role="alert">
        <?= $_SESSION[$message]?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <?php
        unset($_SESSION[$message]);
    }
}