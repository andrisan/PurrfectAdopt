<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Purrfect Adopt</title>

  <!--Icon Awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }
        header {
        background-color: #C07F00;
        color: #fff;
        padding: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;

        }

        .container {
            display: flex;
            /* justify-content: center;
            align-items: center; */

        }

        footer {
            background-color: #C07F00;
            color: #fff;
            padding: 20px;
            width: 100%;
            position: fixed;
            bottom: 0;
        }

        .logo {
        margin-left: 2%;
        width: 70%;
        }

        nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
        margin-left: 110%;
        }

        nav ul li {
        margin-right: 20px;
        }

        nav ul li a {
        color: #fff;
        text-decoration: none;
        transition: color 0.3s ease;
        }

        nav ul li a:hover {
        width: 20px;
        height: 40px;
        background: white;
        border-radius: 5px;
        color: #C07F00;
        }

        .profile {
        display: flex;
        align-items: center;
        }

        .profile img {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        margin-right: 10px;
        }

        .left-section {
        flex: 1;
        }

        .left-section h3 {
        margin: 0;
        font-size: 18px;
        }

        .left-section p {
        margin: 5px 0;
        }

        .center-section {
        flex: 1;
        text-align: center;
        }

    .right-section {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        align-items: flex-end;
        margin-right: 5%;
    }

    .right-section span{
        margin-right: 7%;
    }

    .social-media {
    margin-top: 10px;
    margin-left: 40%;
    }

    .social-media img {
    width: 30px;
    height: 30px;
    margin-left: 20px;
    /* margin-right: 10%; */
    }

        .right-section {
        flex: 1;
        display: flex;
        justify-content: flex-end;
        align-items: center;
        }

        .social-media img {
        width: 20px;
        height: 20px;
        margin-left: 10px;
        }
        .btn-red {
            @apply bg-blue-500 text-white;
        }

        .rounded {
            border-radius: 1rem;
        }

        .mt-8 {
        margin-top: 2rem;
        }

        .flex {
        display: flex;
        }

        .table {
        display: table;
        }

        .grid {
        display: grid;
        }

        .h-16 {
        height: 4rem;
        }

        .h-20 {
        height: 5rem;
        }

        .flex-auto {
        flex: 1 1 auto;
        }

        .flex-shrink-0 {
        flex-shrink: 0;
        }

        .flex-shrink {
        flex-shrink: 1;
        }

        .flex-col {
        flex-direction: column;
        }

        .gap-10 {
        gap: 2.5rem;
        }

        .gap-12 {
        gap: 3rem;
        }

        .rounded-none {
        border-radius: 0px;
        }

        .rounded {
        border-radius: 0.25rem;
        }

        .rounded-md {
        border-radius: 0.375rem;
        }

        .bg-white {
        --tw-bg-opacity: 1;
        background-color: #C07F00;
        }

        .bg-graph {
        --tw-bg-opacity: 1;
        background-color: #FFD95A;
        }

        .bg-blue-50 {
        --tw-bg-opacity: 1;
        background-color: #FFF7D4;
        }

        .stroke-0 {
        stroke-width: 0;
        }

        .p-1 {
        padding: 0.25rem;
        }

        .p-2 {
        padding: 0.5rem;
        }

        .p-3 {
        padding: 0.75rem;
        }

        .p-4 {
        padding: 1rem;
        }

        .p-5 {
        padding: 1.25rem;
        }

        .p-8 {
        padding: 2rem;
        }

        .p-9 {
        padding: 2.25rem;
        }

        .px-20 {
        padding-left: 5rem;
        padding-right: 5rem;

        }

        .px-30 {
        padding-left: 20rem;
        padding-right: 0rem;

        }

        .text-sm {
        font-size: 0.875rem;
        line-height: 1.25rem;
        }

        .text-base {
        font-size: 1rem;
        line-height: 1.5rem;
        }

        .text-gray-400 {
            color:#FFFFFF;
        }

        .text-gray-600{
            color:#FFFFFF;
        }

        .text-3xl {
        font-size: 1.875rem;
        line-height: 2.25rem;
        }

        .font-medium {
        font-weight: 500;
        }

        .font-bold {
        font-weight: 700;
        }
        .lg\:grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr));
        }

        .lg\:grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        .lg\:grid-cols-3 {
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }
        .bg-kotak{
            --tw-bg-opacity: 1;
            background-color: #FFD95A;
        } */
    </style>

</head>
<body>
    <header>
        <div class="flex">
            <img src="{{ asset('/img/logoo.png') }}" alt="logo" class ="logo">
                <p><b>PurrfectAdopt</b></p>
        </div>
            <nav>
              <ul>
                <li><a href="<?= url('/admin-home'); ?>">Beranda</a></li>
                <li><a href="<?= url('/admin-kucing'); ?>">Kucing</a></li>
                <li><a href="<?= url('/admin-user'); ?>">User</a></li>
                <li><a href="#">Artikel</a></li>
              </ul>
            </nav>
        <div class="profile">
            <img src="{{ asset('/img/profile.png') }}" alt="Profil">
            <span>Profil</span>
        </div>
    </header>

    <div class="container">
        <div class="flex flex-col p-2 drop-shadow-2xl">
            <div class="flex flex-col p-2 drop-shadow-2xl px-20">
                <div class="flex flex-row space-x-3 " style="margin-left:500px">
                    <h2 class="font-bold text-gray-500 p-1 ">Welcome Admin</h2>
                </div>
            </div>
            <!-- Counter -->

            <div class="cols-lg-12 px-30">
            <!-- px-20 untuk ngatur padding kiri dan kanan -->
                <div class="flex flex-wrap mt-5 grid lg:grid-cols-3 sm:grid-cols-2 p-4 gap-10 rounded-md bg-kotak">

                    <!--Grid starts here-->
                    <div class="flex items-center justify-between p-5 bg-white rounded shadow-sm">
                        <div>
                        <div  class="text-sm text-gray-400 ">Kucing</div>
                            <div class="flex items-center pt-1">
                                <div id="hitungkucing" class="text-3xl font-medium text-gray-600 "></div>
                            </div>
                        </div>
                        <div class="text-pink-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-10" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"

                                clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>

                    <div class="flex items-center justify-between p-5 bg-white rounded shadow-sm">
                        <div>
                        <div class="text-sm text-gray-400 ">User</div>
                        <div class="flex items-center pt-1">
                            <div id="hitunguser" class="text-3xl font-medium text-gray-600 "></div>
                        </div>
                        </div>
                        <div class="text-pink-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"

                            clip-rule="evenodd" />
                        </svg>
                        </div>
                    </div>

                    <div class="flex items-center justify-between p-5 bg-white rounded shadow-sm">
                        <div>
                        <div class="text-sm text-gray-400 ">Artikel</div>
                        <div class="flex items-center pt-1">
                            <div id="hitungartikel" class="text-3xl font-medium text-gray-600 "></div>
                        </div>
                        </div>
                        <div class="text-pink-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                            <path
                            />
                        </svg>
                        </div>
                    </div>
                    <!-- Grid ends here..-->
                </div>
            </div>
            <!-- Counter -->
        </div>
    </div>

    <!-- <div class="container">
        <div class=" mt-5 grid  lg:grid-cols-2  md:grid-cols-3 p-4 gap-3">
            <div class="col-span-2 flex flex-col   p-8 bg-graph rounded shadow-sm">
            <b class="flex flex-row text-gray-500">Data kucing tahun lalu</b>
            <canvas class="p-5" id="chartLine">

            </canvas>
        </div>
    </div> -->

    <!--Footer-->
    <footer>
        <div style="display: flex;" class= "text-sm">
            <div class="left-section">
                <h3>Purrfect Adopt</h3>
                <p>Kami adalah tempat kamu bisa mengadopsi Kucing Ras Terpercaya dengan biaya yang sangat terjangkau. Kami menyediakan berbagai jenis Kucing Ras yang bisa jadi teman pelepas penatmu.</p>
            </div>
            <div class="center-section">
                <h3> Alamat Kami </h3>
                Jalan Veteran Malang
            </div>
            <div class="right-section">
            <span>Contact Us:</span>
            <div class="social-media">
            <a href="#"><i class="fa-brands fa-facebook"  style="color: #ffffff;"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"  style="color: #ffffff;"></i></a>
            <a href="#"><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></a>
            </div>
        </div>
    </footer>
  <!--End Footer-->

    <!-- Required chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Chart line -->


    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript">
        $(function () {
            let isi = '';

            // $.ajaxSetup({
            //     headers: {
            //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('kucing')
            //     }
            // });

            function getKucing() {
                const url = 'http://127.0.0.1:8000/gethomekucing';

                $.ajax({
                    type:"GET",
                    url:url,
                    dataType:"JSON",
                    success:
                    function (response) {
                                isi = '';
                                    isi += `
                                        <h3>${response}</h3>
                                    `;
                                $('#hitungkucing').append(isi);
                            }
                            // tblkucing diganti ID Div
                });
            }

            getKucing();

            function getContent() {
                const url = 'http://127.0.0.1:8000/gethomecontent';

                $.ajax({
                    type:"GET",
                    url:url,
                    dataType:"JSON",
                    success:
                    function (response) {
                                isi = '';
                                    isi += `
                                        <h3>${response}</h3>
                                    `;
                                $('#hitungartikel').append(isi);
                            }
                            // tblkucing diganti ID Div
                });
            }

            getContent();

            function getUser() {
                const url = 'http://127.0.0.1:8000/gethomeuser';

                $.ajax({
                    type:"GET",
                    url:url,
                    dataType:"JSON",
                    success:
                    function (response) {
                                isi = '';
                                    isi += `
                                        <h3>${response}</h3>
                                    `;
                                $('#hitunguser').append(isi);
                            }
                            // tblkucing diganti ID Div
                });
            }
            getUser();
        })
    </script>
</body>
</html>
