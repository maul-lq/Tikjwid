<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once "./../superpage.php";
    Head();
    ?>
</head>

<body class="font-sans  <?= $WEBMODE ?>">
    <div class="fixed top-0 left-0 right-0 z-50">
        <?php NavBar(6); ?>
    </div>

    <main class="min-h-screen flex">
        <!-- Side Menu (Fixed) -->
        <div class="w-64 bg-gray-800 text-white p-4 fixed top-16 left-0 h-screen overflow-y-auto">
            <h2 class="text-xl font-bold mb-6">Tajwid</h2>
            <ul class="space-y-4">
                <li><a href="#Qalqalah" class="hover:text-yellow-400">Qalqalah</a></li>
                <li><a href="#QalqalahSugra" class="hover:text-yellow-400">Qalqalah Sugra</a></li>
                <li><a href="#QalqalahKubra" class="hover:text-yellow-400">Qalqalah Kubra</a></li>
            </ul>
        </div>
        <!-- Side Menu (Fixed) -->
        <!-- <div class="w-64 dark:bg-gray-800 dark:text-white text-gray-900 bg-gray-200 p-4 mt-0 fixed left-0 h-screen overflow-y-auto">
            <h2 class="text-xl font-bold mb-6">Tajwid</h2>
            <ul class="space-y-4">
                <li><a href="#Qalqalah" class="hover:text-yellow-400">Qalqalah</a></li>
                <li><a href="#QalqalahSugra" class="hover:text-yellow-400">Qalqalah Sugra</a></li>
                <li><a href="#QalqalahKubra" class="hover:text-yellow-400">Qalqalah Kubra</a></li>
            </ul>
        </div> -->

        <!-- Content -->
        <div class="ml-64 p-6 bg-gray-100 text-gray-700 dark:text-white dark:bg-gray-800 w-full mt-16">
            <section id="Qalqalah" class="mb-16">
                <h2 class="text-2xl font-bold mb-4">Qalqalah</h2>
                <p>Apabila ada huruf qalqalah yang mati, maka cara membacanya harus membalik. ada dua macam qalqalah, qalqalah sugra dan qalqalah kubro. Hurufnya sama, namun penempatannya yang berbeda. Dibaca qalqalah sughra jika huruf qalqalah terletak di pertengahan kalimat. Dibaca qalqalah kubro jika huruf qalqalah berada di akhir kalimat.</p>
                <p>Huruf: ب ج د ط ق</p>
            </section>

            <section id="QalqalahSugra" class="mb-16">
                <h2 class="text-2xl font-bold mb-4">Qalqalah Sugra</h2>
                <p>Qalqalah sugra berlaku jika huruf qalqalah berada di tengah ayat, dengan suara yang dipantulkan tidak terlalu kuat.</p>
                <p>Contoh qalqalah sugra:

                    رَزَقْنَٰهُمْ</p>
            </section>

            <section id="QalqalahKubra" class="mb-16">
                <h2 class="text-2xl font-bold mb-4">Qalqalah Kubra</h2>
                <p>Cara baca qalqalah kubra dengan pantulan yang cukup dan berasa di akhir ayat. Contohnya qalqalah kubra:</p>
                <p>وَٱلْيَوْمِ ٱلْمَوْعُودِ

                </p>
            </section>
        </div>
    </main>
</body>

<?php Scripts();
Footer(false); ?>

</html>