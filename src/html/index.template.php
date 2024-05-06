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
                    <a href="/">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" class="w-auto h-10" fill="white">
                            <path d="M 25 1.9980469 C 12.312016 1.9980469 2 12.314104 2 24.998047 C 2 28.319649 2.7108504 31.478864 3.9785156 34.333984 A 1.0001 1.0001 0 0 0 3.9785156 34.335938 C 7.5621707 42.384736 15.640298 47.998047 25 47.998047 C 27.951737 47.998047 30.782408 47.440722 33.376953 46.423828 C 41.938535 43.071143 48 34.732925 48 24.998047 C 48 12.314104 37.687984 1.9980469 25 1.9980469 z M 25 3.9980469 C 36.606016 3.9980469 46 13.39599 46 24.998047 C 46 33.903168 40.460856 41.503185 32.648438 44.5625 C 30.282982 45.489606 27.700263 45.998047 25 45.998047 C 16.440296 45.998047 9.0773262 40.867776 5.8066406 33.523438 L 5.8066406 33.521484 C 4.6487745 30.913096 4 28.033791 4 24.998047 C 4 13.39599 13.393984 3.9980469 25 3.9980469 z M 25 5.9921875 C 14.52 5.9921875 6 14.506047 6 24.998047 C 6 25.783047 6.0398125 26.557406 6.1328125 27.316406 C 8.9858125 21.080406 13.453828 16.599781 20.173828 13.050781 L 20.505859 12.884766 L 19.572266 12.380859 C 18.665266 11.997859 18.800438 10.663562 19.773438 10.476562 C 23.773437 9.7045625 28.293719 9.7440156 32.386719 11.416016 C 33.146719 11.721016 33.239875 12.750547 32.546875 13.185547 C 30.119875 14.736547 27.439844 17.156734 25.839844 19.552734 C 25.372844 20.242734 24.319734 20.101453 24.052734 19.314453 L 23.505859 17.669922 L 23.425781 17.732422 C 18.239781 22.120422 17.131719 27.033766 17.011719 36.009766 L 17.011719 36.910156 L 18.171875 36.8125 C 22.531875 36.2495 26.558672 34.453094 29.638672 29.996094 L 30.292969 28.996094 L 27.998047 28.996094 C 27.132047 28.996094 26.678625 27.953406 27.265625 27.316406 C 29.879625 24.506406 31.572813 21.967891 33.132812 18.587891 C 33.465813 17.867891 34.465578 17.805563 34.892578 18.476562 C 37.079578 21.970562 38.586594 25.046484 39.933594 28.646484 C 40.227594 29.399484 39.546766 30.16375 38.759766 29.96875 L 35.986328 29.275391 L 35.960938 32.767578 C 35.867938 35.658578 35.627484 38.429359 35.146484 41.068359 C 40.466484 37.701359 44.013672 31.763047 44.013672 24.998047 C 44.013672 14.506047 35.493 5.9921875 25 5.9921875 z"/>
                        </svg>
                    </a>
                    <a href="#"
                       class="p-1.5 inline-block text-gray-500 focus:outline-nones transition-colors duration-200 rounded-lg dark:text-gray-400 dark:hover:bg-gray-800 hover:bg-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/>
                        </svg>
                    </a>

                    <a href="#"
                       class="p-1.5 inline-block text-blue-500 transition-colors duration-200 bg-blue-100 rounded-lg dark:text-blue-400 dark:bg-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"/>
                        </svg>
                    </a>

                </nav>

                <div class="flex flex-col items-center mt-4 space-y-4">
                    <a href="#">
                        <img class="object-cover w-8 h-8 rounded-lg"
                             src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&h=634&q=80"
                             alt="avatar"/>
                    </a>

                    <a href="#"
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
                            <h1>wg-api-wrapper</h1>
                            <div>PHP wrapper for Wargaming API</div>
                        </div>
                    </header>
                </div>
                <!--Header Wrapper-->

                <!--Big Sidebar Search-->
                <nav class="flex-grow mt-4 -mx-3 space-y-6">

                    <!--Search Form-->
                    <form action="#" method="post">
                        <div class="space-y-3">
                            <label class="px-3 text-sm text-gray-500 uppercase dark:text-gray-400">user search</label>

                            <!--User Search Nickname-->
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-400">
                                          <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z"/>
                                    </svg>
                                </span>
                                <input type="text" name="nickname" id="nickname"
                                       class="w-full py-1.5 pl-10 pr-4
                                   text-gray-700 bg-white border-2 rounded-md
                                   dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 dark:hover:border-gray-300
                                   focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring"
                                       value="<?= $_POST['nickname'] ?? '' ?>" placeholder="Nickname">
                            </div>
                            <!--User Search Nickname-->

                            <!--User Search Language-->
                            <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-400">
  <path stroke-linecap="round" stroke-linejoin="round"
        d="m10.5 21 5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 0 1 6-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 0 1-3.827-5.802"/>
</svg>

                            </span>
                                <select name="language" id="language" class="w-full py-1.5 pl-10 pr-4
                                   text-gray-700 bg-white border-2 rounded-md
                                   dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 dark:hover:border-gray-300
                                   focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                                    <option name="en"
                                            value="en" <?= (isset($_POST['language']) && $_POST['language'] == 'en') ? 'selected' : '' ?>>
                                        English
                                    </option>
                                    <option name="ru"
                                            value="ru" <?= (isset($_POST['language']) && $_POST['language'] == 'ru') ? 'selected' : '' ?>>
                                        Russian
                                    </option>
                                    <option name="pl"
                                            value="pl" <?= (isset($_POST['language']) && $_POST['language'] == 'pl') ? 'selected' : '' ?>>
                                        Polish
                                    </option>
                                    <option name="de"
                                            value="de" <?= (isset($_POST['language']) && $_POST['language'] == 'de') ? 'selected' : '' ?>>
                                        Deuthch
                                    </option>
                                    <option name="fr"
                                            value="fr" <?= (isset($_POST['language']) && $_POST['language'] == 'fr') ? 'selected' : '' ?>>
                                        French
                                    </option>
                                    <option name="es"
                                            value="es" <?= (isset($_POST['language']) && $_POST['language'] == 'es') ? 'selected' : '' ?>>
                                        Spanish
                                    </option>
                                    <option name="zh-cn"
                                            value="zh-cn" <?= (isset($_POST['language']) && $_POST['language'] == 'zh-cn') ? 'selected' : '' ?>>
                                        Chinese (Mandarin???)
                                    </option>
                                    <option name="zh-tw"
                                            value="zh-tw" <?= (isset($_POST['language']) && $_POST['language'] == 'zh-tw') ? 'selected' : '' ?>>
                                        Chinese (Taiwan???)
                                    </option>
                                    <option name="tr"
                                            value="tr" <?= (isset($_POST['language']) && $_POST['language'] == 'tr') ? 'selected' : '' ?>>
                                        TR(???)
                                    </option>
                                    <option name="cs"
                                            value="cs" <?= (isset($_POST['language']) && $_POST['language'] == 'cs') ? 'selected' : '' ?>>
                                        CS(Cestina???)
                                    </option>
                                    <option name="th"
                                            value="th" <?= (isset($_POST['language']) && $_POST['language'] == 'th') ? 'selected' : '' ?>>
                                        TH(???)
                                    </option>
                                    <option name="vi"
                                            value="vi" <?= (isset($_POST['language']) && $_POST['language'] == 'vi') ? 'selected' : '' ?>>
                                        VI(Vietnamese???)
                                    </option>
                                    <option name="ko"
                                            value="ko" <?= (isset($_POST['language']) && $_POST['language'] == 'ko') ? 'selected' : '' ?>>
                                        KO(Korean???)
                                    </option>
                                </select>
                            </div>
                            <!--User Search Language-->

                            <!--User Search Limit-->
                            <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-400">
  <path stroke-linecap="round" stroke-linejoin="round"
        d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V13.5Zm0 2.25h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V18Zm2.498-6.75h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V13.5Zm0 2.25h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V18Zm2.504-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5Zm0 2.25h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V18Zm2.498-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5ZM8.25 6h7.5v2.25h-7.5V6ZM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 0 0 2.25 2.25h10.5a2.25 2.25 0 0 0 2.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0 0 12 2.25Z"/>
</svg>
                            </span>
                                <input type="number" name="limit" id="limit" min="1" max="100"
                                       value="<?= (isset($_POST['limit']) && $_POST['limit']) ? $_POST['limit'] : '100' ?>"
                                       class="w-full py-1.5 pl-10 pr-4
                                   text-gray-700 bg-white border-2 rounded-md
                                   dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 dark:hover:border-gray-300
                                   focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                            </div>
                            <!--User Search Limit-->

                            <!--User Search Type-->
                            <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-400">
  <path stroke-linecap="round" stroke-linejoin="round"
        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125"/>
</svg>
                            </span>
                                <select name="type" id="type" class="w-full py-1.5 pl-10 pr-4
                                   text-gray-700 bg-white border-2 rounded-md
                                   dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 dark:hover:border-gray-300
                                   focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                                    <option value="startswith" <?= (isset($_POST['type']) && $_POST['type'] == 'startswith') ? 'selected' : '' ?>>
                                        Starts with
                                    </option>
                                    <option value="exact" <?= (isset($_POST['type']) && $_POST['type'] == 'exact') ? 'selected' : '' ?>>
                                        Exact
                                    </option>
                                </select>
                            </div>
                            <!--User Search Type-->

                            <!--Form Button-->
                            <div class="text-center">
                                <button type="submit" name="submit"
                                        class="bg-red-700 hover:bg-red-800 rounded-3xl p-2 px-4 m-auto">Make request
                                </button>
                            </div>
                            <!--Form Button-->


                        </div>
                    </form>
                    <!--Search Form-->

                </nav>
                <!--Big Sidebar Search-->

                <!--Test Sidebar Link-->
                <div class="w-full">
                    <a class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                       href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="1.5"
                             stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6"/>
                        </svg>

                        <span class="mx-2 text-sm font-medium">Test sidebar link</span>
                    </a>
                </div>
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

            if (isset($_POST['submit']))
            {
//                dd($users);

                if (isset($users['meta']) && $users['meta'] >= 1)
                {
                    echo '<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 py-6">'; // Responsive grid setup

                    foreach ($users['data'] as $user)
                    {
                        echo '<div class="p-6 border-2 border-gray-700 mx-8 rounded-3xl shadow-sm overflow-hidden">';
                        echo '<p class="text-2xl underline"><a href="./profile/' . $user['nickname'] . '">' . $user['nickname'] . '</a></p>';
                        echo '<p><span class="font-bold">Account ID:</span> ' . $user['account_id'] . '</p>';
                        echo '</div>';
                    }
                    // Close grid container
                }
                else
                {
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


</body>
</html>