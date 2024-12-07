<!DOCTYPE html>
<html lang="en">

<?php
$HOSTURL = "http://127.0.0.1/tikjwid/";
$WEBMODE = "white";

function pindahHalamanKe($url)
{
    header("Location: $url");
    exit();
}
?>

<?php function Head()
{
    global $HOSTURL, $WEBMODE;
?>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
        <title>TIK Tajwid - Kumpulan Tajwid Al-Quran</title>
    </head>

    <style>
        <?php
        if ($WEBMODE == "dark") {
            echo "html { background-color: #0c142d !important; }";
        }
        ?>
    </style>

<?php } ?>

<?php function NavBar(int $pageNumber)
{
    global $HOSTURL;
    $active = 'class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent" aria-current="page"';
    $nonactive = 'class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"';
?>
    <nav class="bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700">
        <div class="max-w-screen-xxl flex flex-wrap items-center justify-between mx-auto p-3">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="<?= $HOSTURL; ?>img/logo.jpeg" style="width: 7vh; height: 7vh; border-radius: 100vh;" alt="Logonya" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-gray-900 dark:text-white">TIK Tajwid</span>
            </a>
            <button data-collapse-toggle="navbar-multi-level" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-multi-level" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-multi-level">
                <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="<?= $HOSTURL; ?>page/home.php" <?= ($pageNumber == 1) ? $active : $nonactive; ?>>Home</a>
                    </li>
                    <li>
                        <a href="<?= $HOSTURL; ?>page/nuntanwin.php" <?= ($pageNumber == 2) ? $active : $nonactive; ?>>Nun Sukun dan Tanwin</a>
                    </li>
                    <li>
                        <a href="<?= $HOSTURL; ?>page/mimsukun.php" <?= ($pageNumber == 3) ? $active : $nonactive; ?>>Mim Sukun</a>
                    </li>
                    <li>
                        <a href="<?= $HOSTURL; ?>page/mimdannuntasydid.php" <?= ($pageNumber == 4) ? $active : $nonactive; ?>>Mim Tasydid dan Nun Tasydid</a>
                    </li>
                    <li>
                        <a href="<?= $HOSTURL; ?>page/lamtarif.php" <?= ($pageNumber == 5) ? $active : $nonactive; ?>>Lam Ta'rif</a>
                    </li>
                    <li>
                        <a href="<?= $HOSTURL; ?>page/lamtebaldantipis.php" <?= ($pageNumber == 6) ? $active : $nonactive; ?>>Lam Tebal & Lam Tipis</a>
                    </li>
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="<?= ($pageNumber == 7) ? 'flex items-center justify-between w-full py-2 px-3 text-blue-700 rounded hover:bg-blue-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-blue-500 md:dark:hover:text-blue-500 dark:focus:text-blue-500 dark:border-blue-500 dark:hover:bg-blue-500 md:dark:hover:bg-transparent' : 'flex items-center justify-between w-full py-2 px-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gray-700 md:p-0 md:w-auto dark:text-gray-500 md:dark:hover:text-gray-500 dark:focus:text-gray-500 dark:border-gray-500 dark:hover:bg-gray-500 md:dark:hover:bg-transparent' ?>">Idgham <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-white rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-100" aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="<?= $HOSTURL; ?>page/idgham.php#Mutamasilain" class="block px-4 py-2 dark:text-white text-gray-600 dark:hover:text-blue">Mutamatsilain</a>
                                </li>
                                <li>
                                    <a href="<?= $HOSTURL; ?>page/idgham.php#Mutaqaribain" class="block px-4 py-2 dark:text-white text-gray-600 dark:hover:text-blue">Mutaqaribain</a>
                                </li>
                                <li>
                                    <a href="<?= $HOSTURL; ?>page/idgham.php#Mutajanisain" class="block px-4 py-2 dark:text-white text-gray-600 dark:hover:text-blue">Mutajanisain</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="<?= $HOSTURL; ?>page/mad.php" <?= ($pageNumber == 8) ? $active : $nonactive; ?>>Mad</a>
                    </li>
                    <li>
                        <a href="<?= $HOSTURL; ?>page/ra.php" <?= ($pageNumber == 9) ? $active : $nonactive; ?>>Ra`</a>
                    </li>
                    <li>
                        <a href="<?= $HOSTURL; ?>page/qalqalah.php" <?= ($pageNumber == 10) ? $active : $nonactive; ?>>Qalqalah</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<?php } ?>

<?php function Scripts()
{ ?>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
<?php } ?>

<?php
function Footer(bool $isFixed)
{ ?>
    <footer class="<?= ($isFixed == true) ? "fixed bottom-0" : "" ?> left-0 z-20 w-full p-4 bg-white border-t border-gray-200 shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800 dark:border-gray-600">
        <div class="w-full mx-auto p-4 md:flex md:items-center md:justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">&copy; 2024 <a href="" target="_blank" rel="noopener noreferrer" class="hover:underline">Tikjwid™</a>. All Rights Reserved.
            </span>
            <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">About</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Credits</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Contact</a>
                </li>
            </ul>
        </div>
    </footer>
<?php } ?>

</html>