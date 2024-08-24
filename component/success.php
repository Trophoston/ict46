<?php if (isset($_SESSION['success'])) { ?>
    <div class="bg-emerald-400 text-center rounded-md">
        <p class="text-white">
            <?php echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
        </p>
    </div>
<?php } ?>