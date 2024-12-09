<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once "./../superpage.php";
    Head();
    ?>
</head>

<body class="font-sans  <?= $WEBMODE ?>">
    <div class="fixed top-0 left-0 right-0 z-50">
        <?php NavBar(4); ?>
    </div>

    <main class="min-h-screen flex">
        <!-- Side Menu (Fixed) -->
        <div class="w-64 bg-gray-800 text-white p-4 fixed top-16 left-0 h-screen overflow-y-auto">
            <h2 class="text-xl font-bold mb-6">Tajwid</h2>
            <ul class="space-y-4">
                <li><a href="#hmtdnt" class="hover:text-yellow-400">Hukum Min Tasydid dan Nun Tasydid</a></li>
            </ul>
        </div>
        <!-- Content -->
        <div class="ml-64 p-6 bg-gray-100 text-gray-700 dark:text-white dark:bg-gray-800 w-full mt-16">
            <section id="ik" class="mb-16">
                <p>
                    <br>
                    Apabila mim bertasydid dan nun bertasydid maka dibacanya dengan cara didengungkan. Hal ini juga disebut dengan bacaan gunnah. Gunaah ini disebut dengan ghunna ashliyyah. Secara bahasa gunnah artinya suara dengung, suara ringan yang berasal dari rongga hidung dan tidak ada penggunaan lidah sama sekali. Cara membacanya dipanjangkan sampai dua harokat.
                </p>
            </section>

            <section id="hmtdnt" class="mb-16">
                <h2 class="text-2xl font-bold mb-4">Hukum Min Tasydid dan Nun Tasydid</h2>
                <p>
                    Mim dan nun bertasydid dikenal dengan istilah ghunnah musyaddadah. Setiap mim dan nun bertasydid harus dighunnahkan dengan panjang durasi 2 harakat.

                    Contoh mim bertasydid: <br>

                    وَمِمَّا <br>
                    Contoh nun bertasydid: <br>

                    إِنَّهُمْ<br>
                </p>
            </section>
        </div>
    </main>

</body>

<?php Scripts();
Footer(false); ?>

</html>