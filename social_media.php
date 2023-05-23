<?php include 'database/social-media.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media - <?= $data['title'] ?></title>
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
    <meta name="twitter:title" content="Social Media - <?= $data['title'] ?>">
    <meta name="twitter:description" content="<?= $data['description'] ?>">
    <meta name="twitter:image" content="https://ipnu.nutalun.or.id/assets/img/<?= $data['favicon'] ?>">

    <!-- Facebook -->
    <meta property="og:url" content="https://ipnu.nutalun.or.id">
    <meta property="og:title" content="Social Media - <?= $data['title'] ?>">
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
                <?php foreach ($social_media as $data) { ?>
                    <li>
                        <a href="<?= $data['link'] ?>" target="_blank" class="flex items-center p-3 text-base font-bold text-white rounded-lg bg-gray-700 hover:bg-gray-800 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                            <img class="w-6 h-6 rounded-full" src="assets/img/sosmed/<?= $data['icon'] ?>" alt="<?= $data['title'] ?>">
                            <span class="flex-1 ml-3 whitespace-nowrap"><?= $data['name'] ?></span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd" d="M3.75 2A1.75 1.75 0 002 3.75v3.5C2 8.216 2.784 9 3.75 9h3.5A1.75 1.75 0 009 7.25v-3.5A1.75 1.75 0 007.25 2h-3.5zM3.5 3.75a.25.25 0 01.25-.25h3.5a.25.25 0 01.25.25v3.5a.25.25 0 01-.25.25h-3.5a.25.25 0 01-.25-.25v-3.5zM3.75 11A1.75 1.75 0 002 12.75v3.5c0 .966.784 1.75 1.75 1.75h3.5A1.75 1.75 0 009 16.25v-3.5A1.75 1.75 0 007.25 11h-3.5zm-.25 1.75a.25.25 0 01.25-.25h3.5a.25.25 0 01.25.25v3.5a.25.25 0 01-.25.25h-3.5a.25.25 0 01-.25-.25v-3.5zm7.5-9c0-.966.784-1.75 1.75-1.75h3.5c.966 0 1.75.784 1.75 1.75v3.5A1.75 1.75 0 0116.25 9h-3.5A1.75 1.75 0 0111 7.25v-3.5zm1.75-.25a.25.25 0 00-.25.25v3.5c0 .138.112.25.25.25h3.5a.25.25 0 00.25-.25v-3.5a.25.25 0 00-.25-.25h-3.5zm-7.26 1a1 1 0 00-1 1v.01a1 1 0 001 1h.01a1 1 0 001-1V5.5a1 1 0 00-1-1h-.01zm9 0a1 1 0 00-1 1v.01a1 1 0 001 1h.01a1 1 0 001-1V5.5a1 1 0 00-1-1h-.01zm-9 9a1 1 0 00-1 1v.01a1 1 0 001 1h.01a1 1 0 001-1v-.01a1 1 0 00-1-1h-.01zm9 0a1 1 0 00-1 1v.01a1 1 0 001 1h.01a1 1 0 001-1v-.01a1 1 0 00-1-1h-.01zm-3.5-1.5a1 1 0 011-1H12a1 1 0 011 1v.01a1 1 0 01-1 1h-.01a1 1 0 01-1-1V12zm6-1a1 1 0 00-1 1v.01a1 1 0 001 1H17a1 1 0 001-1V12a1 1 0 00-1-1h-.01zm-1 6a1 1 0 011-1H17a1 1 0 011 1v.01a1 1 0 01-1 1h-.01a1 1 0 01-1-1V17zm-4-1a1 1 0 00-1 1v.01a1 1 0 001 1H12a1 1 0 001-1V17a1 1 0 00-1-1h-.01z"></path>
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