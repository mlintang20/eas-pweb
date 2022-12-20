<?php

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username']) && $_SESSION['role'] == 'user') { ?>
    <?php
    include('layout/header.php');
    ?>
    <!--- Content ------------------------------->
    <?php
    include('layout/sidebar.php');
    ?>
    <main class="sm:ml-[350px] h-screen">

        <?php
        include "../model/config.php";

        $sql = "SELECT * FROM pendaftar WHERE akun_id='$_SESSION[id]'";
        $result = mysqli_query($conn, $sql);
        $pendaftar = mysqli_fetch_assoc($result);
        if (mysqli_num_rows($result) === 1) {
            if ($pendaftar['isLulus'] == 1) { ?>
                <div class="bg-green-500 text-white text-center p-4">
                    Selamat, Anda diterima!
                </div>
                <a href="./laporan_pdf.php">
                    <div class="bg-blue-500 my-10 w-fit mx-auto rounded-lg text-white text-center p-4">
                        Download Kartu Ujian
                    </div>
                </a>
            <?php } elseif ($pendaftar['isLulus'] == 0) { ?>
                <div class="bg-amber-500 text-white text-center p-4">
                    Mohon Bersabar, Berkas Anda sedang kami proses!
                </div>
            <?php } else { ?>
                <div class="bg-red-500 text-white text-center p-4">
                    Anda belum dinyatakan lulus!
                </div>
            <?php } ?>
        <?php
        } else { ?>
            <!-- cek apakah sudah melengkapi berkas pendaftaran -->


        <?php } ?>
    </main>

    <script type="text/javascript">
        function dropdown() {
            document.querySelector("#submenu").classList.toggle("hidden");
            document.querySelector("#arrow").classList.toggle("rotate-0");
        }
        dropdown();

        function openSidebar() {
            document.querySelector(".sidebar").classList.toggle("hidden");
        }
    </script>
    <?php
    include('layout/footer.php');
    ?>
<?php
} elseif (isset($_SESSION['id']) && isset($_SESSION['username']) && $_SESSION['role'] == 'admin') {
    header("Location: ./admin.php");
    exit();
} else {
    header("Location: ./index.php");
    exit();
}
?>