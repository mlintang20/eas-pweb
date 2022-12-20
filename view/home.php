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
            header("Location: ../view/detail.php?id=$pendaftar[id]");
         } else { ?>
            <!-- cek apakah sudah melengkapi berkas pendaftaran -->
            <div class="flex flex-col justify-center w-fit max-w-md mx-auto gap-y-10 h-full items-center">
                <div>
                    <h1 class="font-bold text-3xl mb-2">Berkas Pendaftaran</h1>
                    <p class=" text-gray-400"> Anda belum melengkapi berkas pendaftaran, Silahkan lengkapi berkas pendaftaran anda pada halaman berikut</p>
                </div>
                <button class="self-start border-2 border-sky-500 hover:bg-sky-300/50 bg-sky-300/20 p-5 text-left rounded-lg transition-all hover:scale-105">
                    <a href="./form-daftar.php" class="flex gap-x-5 justify-center items-center inline-block">
                        <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path d="M26 0L50.7275 17.9656L41.2824 47.0344H10.7176L1.27253 17.9656L26 0Z" fill="#1565D8" />
                            <rect x="15" y="15" width="22" height="22" fill="url(#pattern0)" />
                            <defs>
                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_571336_9862" transform="scale(0.01)" />
                                </pattern>
                                <image id="image0_571336_9862" width="100" height="100" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAABmJLR0QA/wD/AP+gvaeTAAAFI0lEQVR4nO2dTWgdVRiGny+tCZi0dmNqiVjjwlJFals0RbT+0U2t4N9OBUG0SqUbkQqSCgYJhbZ05aKuRAsq1o2J7goiFKGQVjBpFYmprTStXVSStE0XeV3MXJxM5uZO0puZk9zvgcA9554z35l5cmbmnJk7A47jOI7jOI7jOIEgqUXSbkk/SxpX/bgi6RtJ95a9josGSR2STtVRQhb/Snq07HUNHkU9Y6FlVLgkaW3Z6xwSTRl5O4ENBcW/HfhS0rKC4gVPlpCXC27DFmB3wTGDxdIZksaAtoLbcRXYYGZ/FBw3OLJ6SNEyAG4FPpWU1Z6GIqQN8ATQK2lGr20ksnZZKqMhDcAE8CvwBXDYzG5kFXIh5XAK2GFmf6e/cCHlcRLYku4pIR1DGo2NwBvpTBdSLq+kM3yXVS7jZrYimeFCSsbMpjnwXVZguJDAcCGO4ziOs0TIGodsBw4DHcU3p6E4D7xpZj8kM7OEnAPuLKpVDc45M7srmeEj9ZLxkXrguJDAcCGB4UICw4UEhgsJDBcSGC4kMFxIYLiQwHAhgeFCAsOFBIYLCQwXEhguJDBcSGC4kMBwIYHhQgLDhQSGCwkMFxIYLiQwXEhguJDAcCGB4UICw4UEhgsJDBcSGMvLbsAiYgzoB44RPV5pBLgSf7cK6AQeBJ4CnmGeT+bzH+zUZhToAT4zs4k8FSS1Aq8B3cDq2cqmf7DjQqozCfQCB8xsfD4LkNQGvAe8DzRnlXEh+bgMvGRmP9ZjYZIeAb4lo7f4T9pqMwhsriVD0mZJ/ZL6JG2arayZHQe6gKGM5WybVjajQCP3kIvAw2b2V62Cks4A6+LkGTNbn6POWuAE0RO9KwwDD5jZVfAekmQSeCGPjJjk2x3WVS2VwMzOAi8Cyecs3gPsrSRcyP/0xruWvFiVz7NXMvsJ+CiVvUvSKnAhFUaBAwXG2w/8mUi3Aa+DC6nQM99T2/lgZpPAvlT2LknmB3UYB9bMVUh6O6VPX3PUbyXqmckR/XrvIdBXZO+oEI/6v09lP+lCormpUGI/7kKiicKy+CWV7nQh0892KiPw07VenpVeSI73bQ1ljOiHU+l2P6hDS/KB+JL6ge0LFKvPzJ5NxGoBrie+n/AeMpMy/yGXuxBYmUrvBU4vQJwhElMkMbel0mN+xTCaS7pcSZjZAHBfrUo3Ow5JxE5ywXtIdNk1lNi/uZDoGnhZPJ1Kn/CzrGjq5I6818sr1GHqpI1o6qQ1kf1QVg8pfBqhZNqIbkgomleZLuMsMJAlZLCY9gRFt6QVtYvVh3j8sSeV/bmZTWUJOVJAm0JjNfBugfH2AMm3ZF8HPsksqej13SdzTAUsNSY1h/e7S5pK1J2aQ72tkm6kYh+qValDjSnlonK+313T57tm3E1Spc7dkv5JxRxVfPm2VuVmSe9IOi5prICNEQqDyiFF0iZJ38V/G3OU71Q0wZhkStJzeWQ2DJI+zpBySdJjdYyxVTN7hiQdrFeMJYMkk/RVxsaalPSBpMxbQHMuu0VSd7ysNEclLavnuiwZJN0i6UiVXdiwpJ2KBnJ5l9cm6W1JI1WWeVTRqa9TDUlNkvZp+tlTkvG4J70lqUtSu6LjbHP8uSv+7uu4bBZTkg56z5gDknZIulBlg94Mo5KeL3v9FiWSVkraL+laHURck3RIeU5tndlRtCv6UNWPBbMxIqlH0pq5xJzPRZWGRNFYYxvRe9DvB9qJrvg1EU3Ingd+J7q7/RgwYGa5R/AV/gOPXRQE2hLU8wAAAABJRU5ErkJggg==" />
                            </defs>
                        </svg>

                        <div class="flex-1 flex justify-center items-center gap-x-3">
                            <div class="">
                                <h3 class="font-semibold ">Form Pendaftaran</h3>
                                <p class="text-gray-400">Melengkapi berkas pendaftaran</p>
                            </div>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5892 3.57741C10.2637 3.25197 9.7361 3.25197 9.41066 3.57741C9.08523 3.90284 9.08523 4.43048 9.41066 4.75592L13.8214 9.16666H4.16659C3.70635 9.16666 3.33325 9.53976 3.33325 10C3.33325 10.4602 3.70635 10.8333 4.16659 10.8333H13.8214L9.41066 15.2441C9.08523 15.5695 9.08523 16.0971 9.41066 16.4226C9.7361 16.748 10.2637 16.748 10.5892 16.4226L16.4225 10.5893C16.7479 10.2638 16.7479 9.73618 16.4225 9.41074L10.5892 3.57741Z" fill="#1565D8" />
                            </svg>

                        </div>
                    </a>
                </button>
            </div>

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