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
            <div class="flex-1 flex flex-col justify-center max-w-sm w-full mx-auto gap-y-1 ">
                    <h1 class="text-3xl font-bold mb-2">Data Diri</h1>
                <form method="post" action="../controller/register-process.php" enctype="multipart/form-data" class="flex flex-col gap-y-5">
                    <div class="input flex flex-col gap-y-1">
                        <label class="text-gray-600" for="username">Username*</label>
                        <input required type="text" name="username" id="username" placeholder="e.g. contoh274" class="p-3 rounded-md shadow-sm border focus:border-2 focus:border-black ">
                    </div>
                    <div class="input flex flex-col gap-y-1">
                        <label class="text-gray-600" for="password" >Password*</label>
                        <input required type="password" name="password" autocomplete="off" readonly onfocus="this.removeAttribute('readonly')" id="password" placeholder="e.g. R4has14" class="p-3 rounded-md shadow-sm border focus:border-2 focus:border-black">
                    </div>
                    <div class="input flex flex-col gap-y-1">
                        <label class="text-gray-600" for="nik">NIK*</label>
                        <input  required type="number" name="nik" id="nik" placeholder="e.g. R4has14" class="p-3 rounded-md shadow-sm border focus:border-2 focus:border-black">
                    </div>
                    <div class="input flex flex-col gap-y-1 ">
                        <label class="text-gray-600" for="foto_ktp">Upload file</label>
                        <input required name="foto_ktp" id="foto_ktp" type="file" class="file:rounded-md cursor-pointer border hover:border-sky-500 group file:bg-gray-200 file:border-none text-gray-700 placeholder:text-red-500   block w-full text-sm border p-2 border focus:border-2 focus:border-black rounded-md placeholder:text-gray-300" aria-describedby="file_input_help">
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF.</p>
                    </div>
                    <div class="flex flex-col gap-y-2">
                        <p class="text-gray-500/80">Pastikan semua data sudah terisi dengan tepat!</p>
                        <button type="submit" value="register" class="py-2 px-4 w-full text-white bg-sky-500 hover:bg-sky-600 font-semibold text-lg rounded-md hover:scale-105 transition-all">Daftar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<?php
include('layout/footer.php');
?>