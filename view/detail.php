<?php

session_start();

if (!isset($_GET['id'])) {
    header('Location: ./admin.php');
}

include("../model/config.php");
$id = $_GET['id'];

$sql = "SELECT * FROM pendaftar WHERE id=$id";
$query = mysqli_query($conn, $sql);
$pendaftar = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}

if (isset($_SESSION['id']) && isset($_SESSION['username'])) { ?>
    <?php
    include('layout/header.php');
    ?>
    <!--- Content ------------------------------->
    <?php
    if ($_SESSION['role'] == 'admin') {
        include('layout/admin-sidebar.php');
    } else {
        include('layout/sidebar.php');
    }
    ?>

    <main class="sm:ml-[350px] h-screen">
        <!-- <a class="text-gray-500 m-5 flex items-center gap-x-3 w-fit hover:bg-sky-500/20 hover:border-blue-500 border rounded-md p-2" href="./admin.php">
            <svg class="inline " width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.8625 3.225L13.3791 1.75L5.13745 10L13.3875 18.25L14.8625 16.775L8.08745 10L14.8625 3.225Z" fill="#8692A6" />
            </svg>
            <span>Back</span>
        </a> -->
        <!-- cek apakah sudah melengkapi berkas pendaftaran -->
        <div class="p-5">
            <h1 class="text-2xl font-semibold mb-5">Detail Pendaftar</h1>
            <div class="overflow-x-auto relative grid grid-cols-3 gap-x-4 rounded-md border shadow-md bg-white p-5">
                <div class="flex flex-col gap-y-5">
                    <div class="input">
                        <p class="text-gray-600 uppercase text-xs text-gray-600">Nama Peserta</p>
                        <span class="text-lg"><?php echo $pendaftar['nama'] ?></span>
                    </div>
                    <div class="input">
                        <p class="text-gray-600 uppercase text-xs text-gray-600">NIK</p>
                        <span class="text-lg"><?php echo $pendaftar['nik'] ?></span>
                    </div>
                    <div class="input">
                        <p class="text-gray-600 uppercase text-xs text-gray-600">Tempat Lahir</p>
                        <span class="text-lg"><?php echo $pendaftar['tempat_lahir'] ?></span>
                    </div>
                    <div class="input">
                        <p class="text-gray-600 uppercase text-xs text-gray-600">Tanggal Lahir</p>
                        <span class="text-lg"><?php echo $pendaftar['tanggal_lahir'] ?></span>
                    </div>
                    <div class="input">
                        <p class="text-gray-600 uppercase text-xs text-gray-600">Jenis Kelamin</p>
                        <span class="text-lg"><?php echo $pendaftar['jenis_kelamin'] ?></span>
                    </div>
                    <div class="input">
                        <p class="text-gray-600 uppercase text-xs text-gray-600">Agama</p>
                        <span class="text-lg"><?php echo $pendaftar['agama'] ?></span>
                    </div>
                    <div class="input">
                        <p class="text-gray-600 uppercase text-xs text-gray-600">Nomor Telepn</p>
                        <span class="text-lg"><?php echo $pendaftar['telp'] ?></span>
                    </div>
                    <div class="input">
                        <p class="text-gray-600 uppercase text-xs text-gray-600">Status</p>
                        <span class="text-lg"><?php echo $pendaftar['isLulus'] ?></span>
                        <ul class="border p-3 rounded-md w-fit bg-gray-50">
                            <li>-1 = ditolak</li>
                            <li>0 = belum dikonfirmasi</li>
                            <li>1 = diterima</li>
                        </ul>
                    </div>
                </div>
                <div class="col-span-2 flex flex-col gap-y-3 items-center border-l-2 ">
                    <div class="max-w-md ">
                        <p class="text-gray-600 uppercase text-xs text-gray-600">Foto KTP</p>
                        <img src="<?php echo '../images/' . $pendaftar['foto_ktp'] ?>" class="rounded-md " alt="foto diri">
                    </div>
                    <div class="max-w-md ">
                        <p class="text-gray-600 uppercase text-xs text-gray-600">Foto Diri</p>
                        <img src="<?php echo '../images/' . $pendaftar['foto_diri'] ?>" class="rounded-md " alt="foto diri">
                    </div>
                </div>

                <?php
                if ($pendaftar['isLulus'] == 0 && $_SESSION['role'] == "admin") { ?>
                    <div class="max-w-lg font-semibold flex gap-x-2 col-start-3 mt-5">
                        <a href="../controller/tolak-process.php?id=<?php echo $pendaftar['id'] ?>" class="py-2 px-2 bg-red-700 text-white rounded-md cursor-pointer ml-auto">
                            Tolak
                        </a>
                        <a href="../controller/terima-process.php?id=<?php echo $pendaftar['id'] ?>" class="py-2 px-2 bg-emerald-400 text-white rounded-md cursor-pointer">
                            Terima
                        </a>
                    </div>
                <?php } ?>
            </div>

        </div>

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
} elseif (isset($_SESSION['id']) && isset($_SESSION['username']) && $_SESSION['role'] == 'user') {
    header("Location: ./home.php");
    exit();
} else {
    header("Location: ./index.php");
    exit();
}
?>