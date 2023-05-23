<?php include '../database/pengurus.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengurus - <?= $data['title'] ?></title>
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
    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="ReizalNKRI">
    <meta name="twitter:creator" content="ReizalNKRI">
    <meta name="twitter:title" content="Pengurus - <?= $data['title'] ?>">
    <meta name="twitter:description" content="<?= $data['description'] ?>">
    <meta name="twitter:image" content="https://ipnu.nutalun.or.id/assets/img/<?= $data['favicon'] ?>">

    <!-- Facebook -->
    <meta property="og:url" content="https://ipnu.nutalun.or.id">
    <meta property="og:title" content="Pengurus - <?= $data['title'] ?>">
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
                <?php foreach ($pengurus as $data) { ?>
                    <li>
                        <button type="button" data-modal-target="pengurus-harian<?= $data['id'] ?>" data-modal-toggle="pengurus-harian<?= $data['id'] ?>" class="flex w-full items-center text-left p-3 text-base font-bold text-white rounded-lg bg-gray-700 hover:bg-gray-800 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                            <img class="w-6 h-6" src="../assets/img/pengurus/<?= $data['icon'] ?>" alt="<?= $data['title'] ?>">
                            <span class="flex-1 ml-3 whitespace-nowrap"><?= $data['title'] ?></span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd" d="M9.664 1.319a.75.75 0 01.672 0 41.059 41.059 0 018.198 5.424.75.75 0 01-.254 1.285 31.372 31.372 0 00-7.86 3.83.75.75 0 01-.84 0 31.508 31.508 0 00-2.08-1.287V9.394c0-.244.116-.463.302-.592a35.504 35.504 0 013.305-2.033.75.75 0 00-.714-1.319 37 37 0 00-3.446 2.12A2.216 2.216 0 006 9.393v.38a31.293 31.293 0 00-4.28-1.746.75.75 0 01-.254-1.285 41.059 41.059 0 018.198-5.424zM6 11.459a29.848 29.848 0 00-2.455-1.158 41.029 41.029 0 00-.39 3.114.75.75 0 00.419.74c.528.256 1.046.53 1.554.82-.21.324-.455.63-.739.914a.75.75 0 101.06 1.06c.37-.369.69-.77.96-1.193a26.61 26.61 0 013.095 2.348.75.75 0 00.992 0 26.547 26.547 0 015.93-3.95.75.75 0 00.42-.739 41.053 41.053 0 00-.39-3.114 29.925 29.925 0 00-5.199 2.801 2.25 2.25 0 01-2.514 0c-.41-.275-.826-.541-1.25-.797a6.985 6.985 0 01-1.084 3.45 26.503 26.503 0 00-1.281-.78A5.487 5.487 0 006 12v-.54z"></path>
                            </svg>
                        </button>
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
    
    <!-- Modal -->
    <?php foreach ($pengurus as $data) { ?>
        <div id="pengurus-harian<?= $data['id'] ?>" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="pengurus-harian<?= $data['id'] ?>">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                        <span class="sr-only">Close modal</span>
                    </button>
                    <!-- Modal header -->
                    <div class="px-6 py-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-base font-semibold text-gray-900 lg:text-xl dark:text-white">
                            <?= $data["name"] ?>
                        </h3>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6">
                        <ul class="mb-4 space-y-3">
                            <?php foreach ($data["detail"] as $pengurus) { ?>
                                <li>
                                    <a href="https://instagram.com/<?= $pengurus["username_ig"] ?>" target="_blank" class="flex items-center p-3 text-base font-bold text-white rounded-lg bg-gray-700 hover:bg-gray-600 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                        <img class="w-6 h-6 rounded-full" src="../assets/img/pengurus/photo_pengurus/<?= $pengurus["photo"] ?>" alt="<?= $pengurus["name"] ?>">
                                        <span class="flex-1 ml-3 whitespace-nowrap"><?= $pengurus["name"] ?></span>
                                        <span class="inline-flex items-center justify-center px-2 py-0.5 ml-3 text-xs font-medium text-black bg-gray-200 rounded dark:bg-gray-700 dark:text-gray-400"><?= $pengurus["username_ig"] ?></span>
                                    </a>
                                </li>
                            <?php } ?>
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
            </div>
        </div>
    <?php } ?>
    <script src="../assets/js/script.js"></script>
</body>
</html>