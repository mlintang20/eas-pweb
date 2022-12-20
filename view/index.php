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
            <div class="text-end w-full text-gray-400">
                <span>Sudah punya akun? <a class="text-blue-500 hover:text-blue-300" href="./login.php">Sign In</a></span>
            </div>
            <div class="flex-1 flex flex-col justify-center w-fit max-w-md mx-auto gap-y-10 ">
                <div>
                    <h1 class="font-bold text-3xl mb-5">Selamat Datang</h1>
                    <p class="font-semibold text-gray-400"> <span class="font-normal ">Laman ini adalah laman resmi </span> <br>
                        Seleksi penerimaan calon pagawai baru Kementrain Kelautan dan Perikanan Republik Indonesia</p>
                </div>
                <div>
                    <h2 class="text-2xl mb-5">Daftarkan dirimu sekarang!</h2>
                    <button class="border-2 border-sky-500 hover:bg-sky-300/50 bg-sky-300/20 p-5 text-left rounded-lg transition-all hover:scale-105">
                        <a href="./register.php" class="flex gap-x-5 justify-center items-center inline-block">
                            <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M26 0L50.7275 17.9656L41.2824 47.0344H10.7176L1.27253 17.9656L26 0Z" fill="#1565D8" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.7204 28.8871C20.5018 28.1057 21.5616 27.6667 22.6667 27.6667H29.3333C30.4384 27.6667 31.4982 28.1057 32.2796 28.8871C33.061 29.6685 33.5 30.7283 33.5 31.8333V33.5C33.5 33.9602 33.1269 34.3333 32.6667 34.3333C32.2064 34.3333 31.8333 33.9602 31.8333 33.5V31.8333C31.8333 31.1703 31.5699 30.5344 31.1011 30.0656C30.6323 29.5967 29.9964 29.3333 29.3333 29.3333H22.6667C22.0036 29.3333 21.3677 29.5967 20.8989 30.0656C20.4301 30.5344 20.1667 31.1703 20.1667 31.8333V33.5C20.1667 33.9602 19.7936 34.3333 19.3333 34.3333C18.8731 34.3333 18.5 33.9602 18.5 33.5V31.8333C18.5 30.7283 18.939 29.6685 19.7204 28.8871Z" fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M25.9999 19.3333C24.6192 19.3333 23.4999 20.4526 23.4999 21.8333C23.4999 23.2141 24.6192 24.3333 25.9999 24.3333C27.3806 24.3333 28.4999 23.2141 28.4999 21.8333C28.4999 20.4526 27.3806 19.3333 25.9999 19.3333ZM21.8333 21.8333C21.8333 19.5322 23.6987 17.6667 25.9999 17.6667C28.3011 17.6667 30.1666 19.5322 30.1666 21.8333C30.1666 24.1345 28.3011 26 25.9999 26C23.6987 26 21.8333 24.1345 21.8333 21.8333Z" fill="white" />
                            </svg>
                            <div class="flex-1 flex justify-center items-center gap-x-3">
                                <div class="">
                                    <h3 class="font-semibold ">Register</h3>
                                    <p class="text-gray-400">Silahkan buat akun anda terlebih dahulu</p>
                                </div>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5892 3.57741C10.2637 3.25197 9.7361 3.25197 9.41066 3.57741C9.08523 3.90284 9.08523 4.43048 9.41066 4.75592L13.8214 9.16666H4.16659C3.70635 9.16666 3.33325 9.53976 3.33325 10C3.33325 10.4602 3.70635 10.8333 4.16659 10.8333H13.8214L9.41066 15.2441C9.08523 15.5695 9.08523 16.0971 9.41066 16.4226C9.7361 16.748 10.2637 16.748 10.5892 16.4226L16.4225 10.5893C16.7479 10.2638 16.7479 9.73618 16.4225 9.41074L10.5892 3.57741Z" fill="#1565D8" />
                                </svg>

                            </div>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
include('layout/footer.php');
?>