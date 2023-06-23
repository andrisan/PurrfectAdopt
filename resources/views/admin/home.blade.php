<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Purrfect Adopt</title>

  <!--Icon Awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  @vite(['resources/css/admin.css', 'resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('components.header-admin');

    <div class="flex drop-shadow-2xl mt-16" style="margin-top:40px;text-align:center; justify-content:center; align-content:center; ">
        <h2 class="font-bold text-gray-500 p-1" style="font-size: 30px;color:black">Welcome Admin</h2>
    </div>


    <div class="my-16" style="margin-left:100px; margin-right:100px">
    <!-- px-20 untuk ngatur padding kiri dan kanan -->
        <div class="flex flex-wrap mt-5 grid lg:grid-cols-3 sm:grid-cols-2 p-4 gap-10 rounded-md bg-kotak">

            <!--Grid starts here-->
            <div class="flex items-center justify-between p-5 bg-white rounded shadow-sm">
                <div>
                <div  class="text-sm text-gray-400 ">Data Kucing</div>
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
                <div class="text-sm text-gray-400 ">Data User</div>
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
                <div class="text-sm text-gray-400 ">Data Artikel</div>
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

    @include('components.footer')

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
                                        <h2>${response}</h2>
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
                                        <h2>${response}</h2>
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
                                        <h2>${response}</h2>
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
