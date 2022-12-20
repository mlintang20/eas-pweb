<nav>
        <!-- component -->
        <span class="absolute text-white text-4xl top-5 left-4 cursor-pointer" onclick="openSidebar()">
            <i class="bi bi-filter-left px-2 bg-gray-900 rounded-md"></i>
        </span>
        <div class="sidebar fixed top-0 bottom-0 lg:left-0 p-2 w-[350px] overflow-y-auto text-center bg-blue-900">
            <div class="text-gray-100 text-xl relative">
                <div class="p-2.5 mt-1 flex items-center">
                    <div class="flex items-center text-left gap-x-3 py-3 pb-2 ">
                        <img class="aspect-square object-cover rounded-full w-12 border border-2 border-gray-600" src="../assets/logo.png" alt="profile">
                        <div>
                            <h2 class="font-semibold">Hallo <?php echo $_SESSION['username']; ?></h2>
                            <span class="text-sm text-gray-300">Peserta</span>
                        </div>
                    </div>
                    <i class="bi bi-x cursor-pointer ml-28 lg:hidden absolute right-0 top-0" onclick="openSidebar()"></i>
                </div>
                <div class="my-2 bg-gray-600 h-[1px]"></div>
            </div>
            <a href="./home.php" class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                <i class="bi bi-house-door-fill"></i>
                <span class="text-[15px] ml-4 text-gray-200 font-bold">Daftar Peserta</span>
            </a>
            <a href="../controller/logout-process.php" class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                <i class="bi bi-box-arrow-in-right"></i>
                <span class="text-[15px] ml-4 text-gray-200 font-bold">Logout</span>
            </a>
        </div>
    </nav>
    <header class="sm:ml-[350px] logo-mark flex gap-x-3 border-b-2 border-b-sky-700 bg-sky-700 px-5 py-3  flex items-center ">
        <img class="ml-auto" width="60" src="../assets/logo.png" alt="logo KKP">
        <p class="text-sm text-white text-left max-w-sm">Kementrian Kelautan dan <br> Perikanan Republik Indonesia</p>
    </header>