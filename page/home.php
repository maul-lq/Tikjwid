<!DOCTYPE html>
<html lang="en">

<?php
include './../superpage.php';
Head();
?>

<body class="font-sans <?=  $WEBMODE ?>">
    <?php NavBar(1); ?>

    <main class="bg-white dark:bg-gray-800 my-3 flex items-center justify-center">
        <div class="mt-40 px-6 sm:px-16 max-w-screen-xl flex justify-between items-center w-full">
            <!-- Text Section -->
            <div class="w-full sm:w-1/2">
                <div class="text-4xl font-extrabold text-gray-900 dark:text-white">TIKJWID</div>
                <div class="w-full text-justify mt-6 text-gray-700 dark:text-gray-300">
                    Temukan penjelasan lengkap tentang tajwid beserta contoh-contohnya di sini. Tikjwid hadir untuk memudahkan Anda memahami kaidah membaca Al-Qur'an dengan benar dan jelas. Jelajahi materi tajwid secara praktis dan terstruktur. Mari bersama belajar membaca Al-Qur'an dengan benar!
                </div>
            </div>

            <!-- Image Section -->
            <div class="w-full sm:w-1/2 mt-6 sm:mt-0 ml-auto flex justify-center">
                <img src="../img/logo_png.png" alt="Logo" class="w-80 h-auto object-contain">
            </div>
        </div>
    </main>

</body>


<?php Scripts();
Footer(false); ?>

</html>