<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once "./../superpage.php";
    Head();
    ?>
</head>

<body class="font-sans  <?=  $WEBMODE ?>">
    <?php NavBar(4); ?>
    <main class="min-h-screen flex">
        <!-- Side Menu (Fixed) -->
        <div class="w-64 dark:bg-gray-800 dark:text-white text-gray-900 bg-gray-200 p-4 mt-0 fixed left-0 h-screen overflow-y-auto">
            <h2 class="text-xl font-bold mb-6">Tajwid</h2>
            <ul class="space-y-4">
                <li><a href="#izhar" class="hover:text-yellow-400">Izhar</a></li>
                <li><a href="#idgam" class="hover:text-yellow-400">Idgam</a></li>
                <li><a href="#aqlab" class="hover:text-yellow-400">Aqlab</a></li>
                <li><a href="#iqfa" class="hover:text-yellow-400">Iqfa</a></li>
            </ul>
        </div>

        <!-- Content -->
        <div class="ml-64 p-6 bg-gray-100 text-gray-700 dark:text-white dark:bg-gray-800 w-full mt-16">
            <section id="izhar" class="mb-16">
                <h2 class="text-2xl font-bold mb-4">Izhar</h2>
                <p>Izhar adalah pelafalan huruf-huruf hijaiyah yang jelas dan tidak disamarkan dalam bacaannya. Contoh huruf Izhar adalah ...</p>
            </section>

            <section id="idgam" class="mb-16">
                <h2 class="text-2xl font-bold mb-4">Idgam</h2>
                <p>Idgam adalah hukum tajwid yang menggabungkan dua huruf yang berbentuk bunyi yang mendekat. Contoh huruf Idgam adalah ...</p>
            </section>

            <section id="aqlab" class="mb-16">
                <h2 class="text-2xl font-bold mb-4">Aqlab</h2>
                <p>Aqlab adalah hukum tajwid yang terjadi ketika huruf Nun Mati bertemu dengan huruf Ba'. Contoh pengucapannya adalah ...</p>
            </section>

            <section id="iqfa" class="mb-16">
                <h2 class="text-2xl font-bold mb-4">Iqfa</h2>
                <p>Iqfa adalah hukum tajwid yang mengharuskan kita mengucapkan huruf Nun Mati dengan disamarkan sedikit sebelum dilafalkan. Contoh pengucapannya adalah ...</p>
            </section>
        </div>
    </main>
</body>

<?php Scripts();
Footer(false); ?>

</html>