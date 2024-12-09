<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once "./../superpage.php";
    Head();
    ?>
</head>

<body class="font-sans  <?= $WEBMODE ?>">
    <!-- Side Menu (Fixed) -->
    <!-- <div class="w-64 dark:bg-gray-800 dark:text-white text-gray-900 bg-gray-200 p-4 mt-0 fixed left-0 h-screen overflow-y-auto">
            <h2 class="text-xl font-bold mb-6">Tajwid</h2>
            <ul class="space-y-4">
                <li><a href="#hq" class="hover:text-yellow-400">Hukum Qomariah</a></li>
                <li><a href="#hq" class="hover:text-yellow-400">Hukum Qomariah</a></li>
                <li><a href="#hs" class="hover:text-yellow-400">Hukum Syamsiyah</a></li>
            </ul>
        </div> -->
    <div class="fixed top-0 left-0 right-0 z-50">
        <?php NavBar(5); ?>
    </div>

    <main class="min-h-screen flex">
        <!-- Side Menu (Fixed) -->
        <div class="w-64 bg-gray-800 text-white p-4 fixed top-16 left-0 h-screen overflow-y-auto">
            <h2 class="text-xl font-bold mb-6">Tajwid</h2>
            <ul class="space-y-4">
                <li><a href="#hq" class="hover:text-yellow-400">Hukum Qomariah</a></li>
                <li><a href="#hs" class="hover:text-yellow-400">Hukum Syamsiyah</a></li>
            </ul>
        </div>
        <!-- Content -->
        <div class="ml-64 p-6 bg-gray-100 text-gray-700 dark:text-white dark:bg-gray-800 w-full mt-16">
            <section id="" class="mb-16">
                <p>Dalam seluruh huruf hijaiyyah, dibagi menjadi dua kelompok bila bertemu huruf alif dan lam yakni huruf Qomariyah dan huruf Syamsiyah. Hukum tajwid ini disebut Lam ta'rif.</p>
            </section>

            <section id="hq" class="mb-16">
                <h2 class="text-2xl font-bold mb-4">Hukum Qomariah</h2>
                <p>Berasal dari kata Qomar yang artinya bulan, Qomaryah artinya sebangsa bulan, lam ta'rif dianggap sebagai bintang, dan huruf Qomariyah sebagai bulan.
                    Huruf Qomariyah terdiri dari 14 huruf hijaiyyah yakni Ba (ب), Jim (ج), Ha (ح), Kho (خ), ‘Ain (ع), Ghain (غ), Fa (ف,) Qof (ق), Kaf (ك), Mim (م), Wauw (و), Hamzah (ء), Ha (ه), Ya (ي).
                    Bila huruf Alim dan Lam bertemu huruf hijaiyyah tersebut hukum baca menjadi Idzhar Qomariyah.
                    Cara membacanya mesti secara terang dan jelas, seperti arti umpamaan dari lam ta'rif dan huruf Qomariyah, bila terdapat bulan yang terlihat terang, bintang pun akan tetap jelas terlihat.</p>
                Contoh:<br>
                أَبْغِ حَجَّكَ وَخَفْ عَقِيمَهُ<br>
                الْأَنْعَامُ<br>
                البِرُّ<br>
                الغَمَامُ<br>
                الْحَمِيمَ<br>
                الْجَنَّةُ<br>
                الكَوْثَرُ<br>
                الْوِلْدَانُ<br>
            </section>

            <section id="hs" class="mb-16">
                <h2 class="text-2xl font-bold mb-4">Hukum Syamsiyah</h2>
                <p>Berasal dari kata Syams artinya matahari, dan Syamsyiah artinya sebangsa matahari.
                    Huruf Syamsiyah terdiri dari 14 huruf hijaiyyah yakni Tha (ط), Tsa (ث), Shad (ص), Ra (ر), Ta (ت), Dha (ض), Dzal (ذ), Nun (ن), Dal (د), Zai (ز), Sin (س), Zha (ظ), Syin (ش), dan Lam (ل).
                    Bila huruf Alim dan La bertemu dengan salah satu huruf Syamsiyah tersebut hukum bacaan menjadi Idgham Syamsyiah.
                    Cara membacanya mesti dimasukkan atau di idghamkan ke dalam salah satu huruf Syamsiyah.
                    Bintang yang bertemu matahari tentunya tidak terlihat, meskipun ada. Sama halnya lam ta'rif yang bertemu huruf Syamsiyah, alif lam tidak terbaca walaupun ada tulisannya dan harus langsung dimasukkan ke huruf Syamsiyah.
                    Contoh: <br>
                    بِالضُّرِّ<br>
                    بِالْفَجْرِ<br>
                    وَالشَّمْسِ<br>
                    الرَّحِيمِ<br>
                    التَّوَّابُ<br>
                    السَّلَامُ الدِّيْنُ النَّاسُ<br>
                </p>
            </section>
        </div>
    </main>
</body>

<?php Scripts();
Footer(false); ?>

</html>