<?php if (isset($_SESSION['error'])) { ?>
    <div class="bg-red-400 text-center rounded-md">
        <p class="text-white">
            <?php echo $_SESSION['error'];
            unset($_SESSION['error']);
            ?>
        </p>
    </div>
<?php } ?>