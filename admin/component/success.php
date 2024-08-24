<?php if (isset($_SESSION['success'])) { ?>
    <div class="bg-success text-center rounded-3">
        <p class="text-white">
            <?php echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
        </p>
    </div>
<?php } ?>