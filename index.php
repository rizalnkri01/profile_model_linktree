<?php include 'database/index.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title'] ?></title>
    <meta name="author" content="ReizalNKRI">
    <meta name="description" content="<?= $data['description'] ?>">
    <meta name="robots" content="index, follow">

     <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/<?= $data['favicon'] ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/<?= $data['favicon'] ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/<?= $data['favicon'] ?>">
    <link rel="icon" type="image/png" href="assets/img/<?= $data['favicon'] ?>">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="assets/css/final.css" rel="stylesheet">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="ReizalNKRI">
    <meta name="twitter:creator" content="ReizalNKRI">
    <meta name="twitter:title" content="<?= $data['title'] ?>">
    <meta name="twitter:description" content="<?= $data['description'] ?>">
    <meta name="twitter:image" content="https://ipnu.nutalun.or.id/assets/img/<?= $data['favicon'] ?>">

    <!-- Facebook -->
    <meta property="og:url" content="https://ipnu.nutalun.or.id">
    <meta property="og:title" content="<?= $data['title'] ?>">
    <meta property="og:description" content="<?= $data['description'] ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://ipnu.nutalun.or.id/assets/img/<?= $data['favicon'] ?>">
    <meta property="og:image:type" content="image/png">
</head>
<body class="font-sans text-gray-900 antialiased">
    <div class="main min-h-screen flex justify-center flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full max-w-sm p-8 bg-white opacity-90 border border-gray-200 rounded-lg shadow sm:p-6 dark:bg-gray-800 dark:border-gray-700">
            <div class="flex justify-center">
                <img src="assets/img/<?= $data['logo_gabungan'] ?>" class="h-20" alt="<?= $data['title'] ?>">
            </div>
            <h5 class="mt-4 text-base text-center font-semibold text-gray-900 md:text-xl dark:text-white">
                <?= $data['title'] ?>
            </h5>
            <p class="text-sm mb-2 italic text-center font-normal text-gray-700 dark:text-gray-400">NO SK : <?= $data['no_sk'] ?></p>
            <p class="text-sm text-center font-normal text-gray-500 dark:text-gray-400"><?= $data['sekretariatan'] ?></p>
            <ul class="my-4 space-y-5">
                <li>
                    <a href="pengurus" class="flex items-center p-3 text-base font-bold text-white rounded-lg bg-gray-700 hover:bg-gray-800 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                        <img class="w-6 h-6" src="assets/img/index/book.png" alt="Pengurus">
                        <span class="flex-1 ml-3 whitespace-nowrap">Pengurus</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M13.5 4.938a7 7 0 11-9.006 1.737c.202-.257.59-.218.793.039.278.352.594.672.943.954.332.269.786-.049.773-.476a5.977 5.977 0 01.572-2.759 6.026 6.026 0 012.486-2.665c.247-.14.55-.016.677.238A6.967 6.967 0 0013.5 4.938zM14 12a4 4 0 01-4 4c-1.913 0-3.52-1.398-3.91-3.182-.093-.429.44-.643.814-.413a4.043 4.043 0 001.601.564c.303.038.531-.24.51-.544a5.975 5.975 0 011.315-4.192.447.447 0 01.431-.16A4.001 4.001 0 0114 12z"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="pimpinan-ranting" class="flex items-center p-3 text-base font-bold text-white rounded-lg bg-gray-700 hover:bg-gray-800 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                        <img class="w-6 h-6" src="assets/img/index/pimpinan-ranting.png" alt="Pimpinan Ranting">
                        <span class="flex-1 ml-3 whitespace-nowrap">Pimpinan Ranting</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M13.5 4.938a7 7 0 11-9.006 1.737c.202-.257.59-.218.793.039.278.352.594.672.943.954.332.269.786-.049.773-.476a5.977 5.977 0 01.572-2.759 6.026 6.026 0 012.486-2.665c.247-.14.55-.016.677.238A6.967 6.967 0 0013.5 4.938zM14 12a4 4 0 01-4 4c-1.913 0-3.52-1.398-3.91-3.182-.093-.429.44-.643.814-.413a4.043 4.043 0 001.601.564c.303.038.531-.24.51-.544a5.975 5.975 0 011.315-4.192.447.447 0 01.431-.16A4.001 4.001 0 0114 12z"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="social_media.php" class="flex items-center p-3 text-base font-bold text-white rounded-lg bg-gray-700 hover:bg-gray-800 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                        <img class="w-6 h-6" src="assets/img/index/social-media.png" alt="Social Media">
                        <span class="flex-1 ml-3 whitespace-nowrap">Social Media</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M13.5 4.938a7 7 0 11-9.006 1.737c.202-.257.59-.218.793.039.278.352.594.672.943.954.332.269.786-.049.773-.476a5.977 5.977 0 01.572-2.759 6.026 6.026 0 012.486-2.665c.247-.14.55-.016.677.238A6.967 6.967 0 0013.5 4.938zM14 12a4 4 0 01-4 4c-1.913 0-3.52-1.398-3.91-3.182-.093-.429.44-.643.814-.413a4.043 4.043 0 001.601.564c.303.038.531-.24.51-.544a5.975 5.975 0 011.315-4.192.447.447 0 01.431-.16A4.001 4.001 0 0114 12z"></path>
                        </svg>
                    </a>
                </li>
            </ul>
            <div class="text-center">
                <a href="https://ansor.nutalun.or.id" class="inline-flex items-center text-xs font-normal text-gray-500 hover:underline dark:text-gray-400">Copyright 
                    <svg class="w-3 h-3 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd" d="M5.404 14.596A6.5 6.5 0 1116.5 10a1.25 1.25 0 01-2.5 0 4 4 0 10-.571 2.06A2.75 2.75 0 0018 10a8 8 0 10-2.343 5.657.75.75 0 00-1.06-1.06 6.5 6.5 0 01-9.193 0zM10 7.5a2.5 2.5 0 100 5 2.5 2.5 0 000-5z"></path>
                    </svg>2023 <span class="font-bold mx-1">AICY</span> Artificial Intelligence Cyber
                </a>
            </div>
        </div>
    </div>
</body>
</html>