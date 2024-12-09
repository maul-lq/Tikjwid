<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once "./../superpage.php";
    Head();
    ?>
</head>

<body class="font-sans  <?= $WEBMODE ?>">
    <div class="fixed top-0 left-0 right-0 z-50">
        <?php NavBar(3); ?>
    </div>

    <main class="min-h-screen flex">
        <!-- Side Menu (Fixed) -->
        <div class="w-64 bg-gray-800 text-white p-4 fixed top-16 left-0 h-screen overflow-y-auto">
            <h2 class="text-xl font-bold mb-6">Tajwid</h2>
            <ul class="space-y-4">
                <li><a href="#ik" class="hover:text-yellow-400">Ikfa Syafawi</a></li>
                <li><a href="#im" class="hover:text-yellow-400">Idgham Mim</a></li>
                <li><a href="#iz" class="hover:text-yellow-400">Izhar Syafawi</a></li>
            </ul>
        </div>
        <!-- Content -->
        <div class="ml-64 p-6 bg-gray-100 text-gray-700 dark:text-white dark:bg-gray-800 w-full mt-16">
            <section id="ik" class="mb-16">
                <h2 class="text-2xl font-bold mb-4">Ikhfa Syafawi</h2>
                <p>
                    Bila terdapat mim sukun bertemu dengan huruf Ba disebut dengan hukum Ikhfa Syafawi.
                    Sehingga, Mim sukun dan Ba dibaca samar sambil nada didengungkan.
                    Contoh: <br>
                    تَرْمِيهِمْ بِحِجَارِةٍ<br>
                    وَهُمْ بِالْآخِرَةِ<br>
                    صُمٌّ بُكْمٌ<br>
                </p>
            </section>

            <section id="im" class="mb-16">
                <h2 class="text-2xl font-bold mb-4">Idgham Mim</h2>
                <p>
                    Bila terdapat Mim sukun bertemu dengan huruf Mim disebut dengan hukum Idgham Mimi atau Idgham Mutamatsilain. Hukum ini dibaca mim berstasydid dan didengungkan.
                    Contoh: <br>
                    وَمِنْهُمْ مَنْ يَقُوْلُ<br>
                    وَلَكُمْ مَا سَأَلْتُمْ<br>
                    وَمَا لَهُمْ مِنَ اللَّهِ<br>
                </p>
            </section>

            <section id="iz" class="mb-16">
                <h2 class="text-2xl font-bold mb-4">Izhar Syafawi</h2>
                <p>
                    Bila terdapat mim sukun bertemu salah satu dari 26 huruf hijaiyyah, selain Mim dan Ba disebut hukum Izhar Syafawi.

                    Sehingga, mim sukun dan salah satu huruf dari 26 huruf hijaiyyah dibaca dengan tidak boleh didengungkan dan jelas tanpa nafas yang berhenti.


                    Contoh: <br>

                    صِرَاطَ الَّذِيْنَ أَنْعَمْتَ عَلَيْهِمْ غَيْرِ الْمَغْضُوبِ عَلَيْهِمْ وَلَا الضَّالِّينَ <br>
                    خَتَمَ اللَّهُ عَلَى قُلُوْبِهِمْ وَعَلَى أَبْصَارِهِمْ <br>
                </p>
            </section>
        </div>
    </main>

</body>

<?php Scripts();
Footer(false); ?>

</html>