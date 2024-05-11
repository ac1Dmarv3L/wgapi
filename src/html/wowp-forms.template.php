<!--                ///////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--                ///////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--                ///////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--                ///////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--                ///////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--                WORLD OF WARPLANES                                                                                     -->
<!--                ///////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--                ///////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--                ///////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--                ///////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--                ///////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--                ///////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--                ///////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--                ///////////////////////////////////////////////////////////////////////////////////////////////////////-->

<!--Big Sidebar Search-->
<nav class="wowpinfo hidden flex-grow mt-4 -mx-3 space-y-6">

    <!--Search Form-->
    <form action="#" method="post">
        <div class="space-y-3">
            <label class="px-3 text-sm text-gray-500 uppercase dark:text-gray-400">user search in
                World of Warplanes</label>

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