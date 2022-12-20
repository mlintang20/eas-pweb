<?php

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username']) && $_SESSION['role'] == 'admin') { ?>
    <?php
    include('layout/header.php');
    ?>
    <!--- Content ------------------------------->
    <?php
    include('layout/admin-sidebar.php');
    ?>

    <main class="sm:ml-[350px] h-screen">
        <!-- cek apakah sudah melengkapi berkas pendaftaran -->
        <div class="p-5">
            <h1 class="text-2xl font-semibold mb-5">Daftar Pendaftar</h1>

            <div class="overflow-x-auto relative rounded-md border shadow-md">
                <table class="w-full text-sm text-left text-gray-500 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-200 ">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                Id
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Nama
                            </th>
                            <th scope="col" class="py-3 px-6">
                                NIK
                            </th>
                            <th scope="col" class="py-3 px-6">
                                No. Telp
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody class="[&>*>td]:py-4 [&>*>td]:px-6 ">
                        <?php
                        include('../controller/peserta-process.php');
                        while ($pendaftar = mysqli_fetch_array($query)) {
                            echo "<tr class=' bg-white border-b '>";

                            echo "<td scope='row' class='font-medium text-gray-900 whitespace-nowrap'>" . $pendaftar['id'] . "</td>";
                            echo "<td>" . $pendaftar['nama'] . "</td>";
                            echo "<td>" . $pendaftar['nik'] . "</td>";
                            echo "<td>" . $pendaftar['telp'] . "</td>";
                            echo "<td>";
                            echo "<a class='underline text-blue-700 hover:text-blue-300' href='./detail.php?id=" . $pendaftar['id'] . "'>Detail</a>";
                            echo "</td>";

                            echo "</tr>";
                        }
                        ?>
                        <!-- <tr class="bg-white border-b  ">
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                                Microsoft Surface Pro
                            </th>
                            <td class="py-4 px-6">
                                White
                            </td>
                            <td class="py-4 px-6">
                                Laptop PC
                            </td>
                            <td class="py-4 px-6">
                                $1999
                            </td>
                        </tr>
                        <tr class="bg-white">
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                                Magic Mouse 2
                            </th>
                            <td class="py-4 px-6">
                                Black
                            </td>
                            <td class="py-4 px-6">
                                Accessories
                            </td>
                            <td class="py-4 px-6">
                                $99
                            </td>
                        </tr> -->
                    </tbody>
                </table>
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