<?php require_once './server/connect.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Shop Store</title>
    <link rel="stylesheet" href="./Framework/bootstrap-5.3.3-dist/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./dist/css/main.css">
</head>
<body>
    <?php include_once './component/navbar.php' ?>

    <div class="w-full p-0 bg-[#FFE7CB]">
        <div class="container p-0 block md:flex py-12">
            <div class="">
                <img src="./src/music/assets/main.png" class="w-full" alt="">
            </div>

            <!-- Content -->
            <div class="flex">
                <div class="justify-content-center items-center flex flex-col">
                    <img src="./src/music/assets/icon/guitar.svg" class="w-20" alt="">
                    <p class="text-center font-bold">Guitar</p>
                    <p class="text-center text-bold w-28">Lorem ipsum dolor sit amet consectetur.</p>
                </div>
                
                <div class="justify-content-center items-center flex flex-col">
                    <img src="./src/music/assets/icon/piano.svg" class="w-20" alt="">
                    <p class="text-center font-bold">Piano</p>
                    <p class="text-center text-bold w-28">Lorem ipsum dolor sit amet consectetur.</p>
                </div>
                
                <div class="justify-content-center items-center flex flex-col">
                    <img src="./src/music/assets/icon/drum.svg" class="w-20" alt="">
                    <p class="text-center font-bold">Drum</p>
                    <p class="text-center text-bold w-28">Lorem ipsum dolor sit amet consectetur.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[#FFF0DF] p-5">
        <div class="container flex w-3/4">
            <p class="xl:text-2xl">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                ltaque tenetur consectetur ea repudiandae nesciunt autem a
            </p>

            <a href="./login.php" class="bg-white rounded-md border border-black p-3 font-bold text-center">Join us now!</a>
        </div>
    </div>

    <!-- Footer -->
    <?php include_once './component/footer.php' ?>

    
</body>
<script src="./Framework/bootstrap-5.3.3-dist/bootstrap.bundle.min.js"></script>
</html>