<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['username']) && $_SESSION['role'] == 'user') {
    header("Location: ./home.php");
} elseif (isset($_SESSION['id']) && isset($_SESSION['username']) && $_SESSION['role'] == 'admin') {
    header("Location: ./admin.php");
    exit();
} else { ?>
    <?php
    include('layout/header.php');
    ?>
    <!--- Content ------------------------------->
    <main id="main">
        <div class="grid sm:grid-cols-7 h-screen">
            <div class="col-span-3  flex justify-center items-center bg-cover bg-center" style="background-image: url('../assets/bg-building.jpeg');">
                <div class="bg-blue-600/80 h-full w-full p-5 flex sm:flex-col">
                    <div class="logo-mark max-w-md flex gap-x-3">
                        <img class="" width="60" src="../assets/logo.png" alt="logo KKP">
                        <p class="text-white font-semibold">Kementrian Kelautan dan Perikanan Republik Indonesia</p>
                    </div>
                    <div class="flex flex-col justify-center align-middle flex-1 p-5">
                        <div class="w-fit h-fit w-8/12 mx-auto">
                            <img class="aspect-square inline-block object-contain" src="../assets/logo.png" alt="logo KKP">
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-8 flex flex-col col-span-4">
                <div class="w-full text-gray-400 ">
                    <a class="text-gray-500  flex items-center gap-x-3 w-fit hover:bg-sky-500/20 hover:border-blue-500 border rounded-md p-2" href="./">
                        <svg class="inline " width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.8625 3.225L13.3791 1.75L5.13745 10L13.3875 18.25L14.8625 16.775L8.08745 10L14.8625 3.225Z" fill="#8692A6" />
                        </svg>
                        <span>Back</span>
                    </a>
                </div>
                <div class="flex-1 flex flex-col justify-center max-w-md w-full mx-auto gap-y-7 ">
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="p-2 bg-red-300 rounded-md "><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    <?php if (isset($_GET['success'])) { ?>
                        <p class="p-2 bg-emerald-300 rounded-md "><?php echo $_GET['success']; ?></p>
                    <?php } ?>
                    <div>
                        <h1 class="text-3xl font-bold mb-2">Sign In</h1>
                        <p class="text-gray-400">Silahkan masuk ke akun anda .</p>
                    </div>

                    <form action="../controller/login-process.php" method="post" class="flex flex-col gap-y-5">
                        <div class="input flex flex-col gap-y-1">
                            <label class="text-gray-600" for="username">Username*</label>
                            <input required type="text" name="username" id="username" placeholder="e.g. contoh@mail.com" class="p-3 rounded-md shadow-sm border focus:border-2 focus:border-black">
                        </div>
                        <div class="input flex flex-col gap-y-1">
                            <label class="text-gray-600" for="password">Password*</label>
                            <input required type="password" name="password" autocomplete="off" readonly onfocus="this.removeAttribute('readonly')" id="password" placeholder="e.g. R4has14" class="p-3 rounded-md shadow-sm border focus:border-2 focus:border-black">
                        </div>
                        <div class="flex flex-col gap-y-2">
                            <button class="py-2 px-4 w-full text-white bg-sky-500 hover:bg-sky-600 font-semibold text-lg rounded-md hover:scale-105 transition-all">Masuk</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php
    include('layout/footer.php');
    ?>
<?php } ?>