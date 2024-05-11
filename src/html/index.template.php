<!doctype html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>wg-api-wrapper</title>
    <link rel="stylesheet" href="/src/assets/css/style.css">
</head>

<body>

<!--Body Wrapper-->
<div class="wrapper flex dark:text-white dark:bg-gray-900 bg-neutral-200 text-black min-h-screen">

    <!--Sidebar Wrapper-->
    <div class="flex-row fixed">
        <aside class="flex">

            <!--Mini Sidebar-->
            <div class="flex flex-col items-center w-16 h-screen py-8 bg-white dark:bg-gray-900 dark:border-gray-700">
                <nav class="flex flex-col items-center flex-1 space-y-8">

                    <!--World of Tanks-->
                    <a href="#" title="World Of Tanks"
                       class="wot p-1.5 inline-block text-gray-500 focus:outline-nones transition-colors duration-200 rounded-lg dark:text-gray-400 dark:hover:bg-gray-800 hover:bg-gray-100">
                        <img src="/src/assets/images/wot.svg" alt="World Of Tanks">
                    </a>

                    <!--World of Tanks Blitz-->
                    <a href="#" title="World Of Tanks Blitz"
                       class="wotb p-1.5 inline-block text-gray-500 focus:outline-nones transition-colors duration-200 rounded-lg dark:text-gray-400 dark:hover:bg-gray-800 hover:bg-gray-100">
                        <img src="/src/assets/images/wotb.svg" alt="World Of Tanks Blitz">
                    </a>

                    <!--World of Tanks Console-->
                    <a href="#" title="World Of Tanks Console"
                       class="wotx p-1.5 inline-block text-gray-500 focus:outline-nones transition-colors duration-200 rounded-lg dark:text-gray-400 dark:hover:bg-gray-800 hover:bg-gray-100">
                        <img src="/src/assets/images/wotx.svg" alt="World Of Tanks Console">
                    </a>

                    <!--World of Warships-->
                    <a href="#" title="World Of Warships"
                       class="wows p-1.5 inline-block text-gray-500 focus:outline-nones transition-colors duration-200 rounded-lg dark:text-gray-400 dark:hover:bg-gray-800 hover:bg-gray-100">
                        <img src="/src/assets/images/wows.svg" alt="World Of Warships">
                    </a>

                    <!--World of Warplanes-->
                    <a href="#" title="World Of Warplanes"
                       class="wowp p-1.5 inline-block text-gray-500 focus:outline-nones transition-colors duration-200 rounded-lg dark:text-gray-400 dark:hover:bg-gray-800 hover:bg-gray-100">
                        <img src="/src/assets/images/wowp.svg" alt="World Of Warplanes">
                    </a>

                    <!--Wargaming.Net-->
                    <a href="#" title="Wargaming.Net"
                       class="wgn p-1.5 inline-block text-gray-500 focus:outline-nones transition-colors duration-200 rounded-lg dark:text-gray-400 dark:hover:bg-gray-800 hover:bg-gray-100">
                        <img src="/src/assets/images/wgn.svg" alt="Wargaming.Net">
                    </a>

                    <!--Test mini sidebar icon link-->
                    <!--                                        <a href="#"-->
                    <!--                                           class="p-1.5 inline-block text-blue-500 transition-colors duration-200 bg-blue-100 rounded-lg dark:text-blue-400 dark:bg-gray-800">-->
                    <!--                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"-->
                    <!--                                                 stroke="currentColor" class="w-6 h-6">-->
                    <!--                                                <path stroke-linecap="round" stroke-linejoin="round"-->
                    <!--                                                      d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"/>-->
                    <!--                                            </svg>-->
                    <!--                                        </a>-->
                    <!--Test mini sidebar icon link-->

                </nav>

                <div class="flex flex-col items-center mt-4 space-y-4">
                    <!--                    <a href="#">-->
                    <!--                        <img class="object-cover w-8 h-8 rounded-lg"-->
                    <!--                             src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&h=634&q=80"-->
                    <!--                             alt="avatar"/>-->
                    <!--                    </a>-->

                    <a href="logout.php"
                       class="text-gray-500 transition-colors duration-200 rotate-180 dark:text-gray-400 rtl:rotate-0 hover:text-blue-500 dark:hover:text-blue-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75"/>
                        </svg>
                    </a>
                </div>
            </div>
            <!--Mini Sidebar-->

            <!--Big Sidebar-->
            <div class="flex flex-col items-center h-screen px-5 py-8 overflow-y-auto bg-white border-l border-r sm:w-64 w-60 dark:bg-gray-900 dark:border-gray-700">

                <!--Header Wrapper-->
                <div class="">
                    <header>
                        <div class="bg-gray-900 text-white text-2xl p-1 pb-10">
                            <h1><a href="/" class="underline">wg-api-wrapper</a></h1>
                            <div>PHP wrapper for Wargaming API</div>
                        </div>
                    </header>
                </div>
                <!--Header Wrapper-->

                <?php require_once 'src/html/wot-forms.template.php'; ?>

                <?php require_once 'src/html/wotb-forms.template.php'; ?>

                <?php require_once 'src/html/wotx-forms.template.php'; ?>

                <?php require_once 'src/html/wows-forms.template.php'; ?>

                <?php require_once 'src/html/wowp-forms.template.php'; ?>

                <?php require_once 'src/html/wgn-forms.template.php'; ?>


                <!--Test Sidebar Link-->
                <!--                <div class="w-full">-->
                <!--                    <a class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"-->
                <!--                       href="#">-->
                <!--                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"-->
                <!--                             stroke-width="1.5"-->
                <!--                             stroke="currentColor" class="w-5 h-5">-->
                <!--                            <path stroke-linecap="round" stroke-linejoin="round"-->
                <!--                                  d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6"/>-->
                <!--                        </svg>-->
                <!---->
                <!--                        <span class="mx-2 text-sm font-medium">Test sidebar link</span>-->
                <!--                    </a>-->
                <!--                </div>-->
                <!--Test Sidebar Link-->

            </div>
            <!--Big Sidebar-->

        </aside>
    </div>
    <!--Sidebar Wrapper-->

    <div class="flex-1 ml-80">
        <main class="h-full">

            <?php

            /**
             * @var $wrapper
             */

            if ($game->isLogged()): ?>
            <?php $game->setAccountId($_SESSION['account_id']); ?>
                <div class="text-center text-md border-2 p-6 m-3 rounded-2xl">
                    Logged as: <?= $_SESSION['nickname'] ?> ,
                    ID: <?= $_SESSION['account_id'] ?>
                    <ul>
                        <li>Credits: <?= $personalData['data'][$game->getAccountId()]['private']['credits'] ?></li>
                        <li>Gold: <?= $personalData['data'][$game->getAccountId()]['private']['gold'] ?></li>
                        <li>Free XP: <?= $personalData['data'][$game->getAccountId()]['private']['free_xp'] ?></li>
                        <li>Is Premium: <?= $personalData['data'][$game->getAccountId()]['private']['is_premium'] ? 'Yes' : 'No' ?></li>
                        <li>Premium expires at: <?= date('H:i:s Y/m/d', $personalData['data'][$game->getAccountId()]['private']['premium_expires_at']) ?></li>
                    </ul>
                </div>
            <?php
            endif;

            if (isset($_POST['submit'])) {
                if (isset($users['meta']) && $users['meta'] >= 1) {
                    echo '<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 py-6">'; // Responsive grid setup

                    foreach ($users['data'] as $user) {
                        echo '<div class="p-6 border-2 border-gray-700 mx-8 rounded-3xl shadow-sm overflow-hidden">';
                        echo '<p class="text-2xl underline"><a href="./profile/' . $user['nickname'] . '">' . $user['nickname'] . '</a></p>';
                        echo '<p><span class="font-bold">Account ID:</span> ' . $user['account_id'] . '</p>';
                        echo '</div>';
                    }
                    // Close grid container
                } else {
                    echo '<div class="p-6 bg-red-200 border-b-2 border-b-orange-700 text-black">';
                    print('Error!');
                }
                echo '</div>';
            }

            ?>

        </main>
    </div>
</div>
<!--Body Wrapper-->

<script src="/src/assets/js/script.js"></script>
</body>
</html>