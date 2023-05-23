<?php include '../database/pimpinan-ranting.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pimpinan Ranting - <?= $data['title'] ?></title>
    <meta name="author" content="ReizalNKRI">
    <meta name="description" content="<?= $data['description'] ?>">
    <meta name="robots" content="index, follow">

     <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/<?= $data['favicon'] ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/<?= $data['favicon'] ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/<?= $data['favicon'] ?>">
    <link rel="icon" type="image/png" href="../assets/img/<?= $data['favicon'] ?>">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="../assets/css/final.css" rel="stylesheet">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="ReizalNKRI">
    <meta name="twitter:creator" content="ReizalNKRI">
    <meta name="twitter:title" content="Pimpinan Ranting - <?= $data['title'] ?>">
    <meta name="twitter:description" content="<?= $data['description'] ?>">
    <meta name="twitter:image" content="https://ipnu.nutalun.or.id/assets/img/<?= $data['favicon'] ?>">

    <!-- Facebook -->
    <meta property="og:url" content="https://ipnu.nutalun.or.id">
    <meta property="og:title" content="Pimpinan Ranting - <?= $data['title'] ?>">
    <meta property="og:description" content="<?= $data['description'] ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://ipnu.nutalun.or.id/assets/img/<?= $data['favicon'] ?>">
    <meta property="og:image:type" content="image/png">
</head>
<body class="font-sans text-gray-900 antialiased">
    <div class="main min-h-screen flex justify-center flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full max-w-sm p-8 bg-white opacity-90 border border-gray-200 rounded-lg shadow sm:p-6 dark:bg-gray-800 dark:border-gray-700" style="margin-top: 20px; margin-bottom: 30px;">
            <div class="flex justify-center">
                <img src="../assets/img/<?= $data['logo_gabungan'] ?>" class="h-20" alt="<?= $data['title'] ?>">
            </div>
            <h5 class="mt-4 text-base text-center font-semibold text-gray-900 md:text-xl dark:text-white">
                <?= $data['title'] ?>
            </h5>
            <p class="text-sm mb-2 italic text-center font-normal text-gray-700 dark:text-gray-400">NO SK : <?= $data['no_sk'] ?></p>
            <p class="text-sm text-center font-normal text-gray-500 dark:text-gray-400"><?= $data['sekretariatan'] ?></p>
            <ul class="my-4 space-y-5">
                <?php foreach ($pimpinan_ranting as $data) { ?>
                    <li>
                        <a href="<?= $data['link'] ?>" target="_blank" class="flex items-center p-3 text-base font-bold text-white rounded-lg bg-gray-700 hover:bg-gray-800 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                            <img class="w-6 h-6 rounded-full" src="../assets/img/pimpinan_ranting/<?= $data['icon'] ?>" alt="<?= $data['name'] ?>">
                            <span class="flex-1 ml-3 whitespace-nowrap"><?= $data['name'] ?></span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd" d="M1 2.75A.75.75 0 011.75 2h10.5a.75.75 0 010 1.5H12v13.75a.75.75 0 01-.75.75h-1.5a.75.75 0 01-.75-.75v-2.5a.75.75 0 00-.75-.75h-2.5a.75.75 0 00-.75.75v2.5a.75.75 0 01-.75.75h-2.5a.75.75 0 010-1.5H2v-13h-.25A.75.75 0 011 2.75zM4 5.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zM4.5 9a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1zM8 5.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zM8.5 9a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1zM14.25 6a.75.75 0 00-.75.75V17a1 1 0 001 1h3.75a.75.75 0 000-1.5H18v-9h.25a.75.75 0 000-1.5h-4zm.5 3.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zm.5 3.5a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1z"></path>
                            </svg>
                        </a>
                    </li>
                <?php } ?>
                
                <li>
                    <a href="/" class="flex items-center p-3 text-base font-bold text-white rounded-lg bg-gray-700 hover:bg-gray-800 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.25-7.25a.75.75 0 000-1.5H8.66l2.1-1.95a.75.75 0 10-1.02-1.1l-3.5 3.25a.75.75 0 000 1.1l3.5 3.25a.75.75 0 001.02-1.1l-2.1-1.95h4.59z"></path>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Kembali</span>
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