<?php if (isset($_SESSION['error'])) { ?>
    <div class="bg-danger text-center rounded-3">
        <p class="text-white">
            <?php echo $_SESSION['error'];
            unset($_SESSION['error']);
            ?>
        </p>
    </div>
<?php } ?>