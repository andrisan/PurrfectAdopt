<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purrfect Adopt</title>

    <!--Icon Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Font-->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    @vite(['resources/css/admin.css', 'resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header>
        <div class="flex flex-row">
            <div>
                <img src="{{ asset('/img/logoo.png') }}" alt="logo" class ="logo">
            </div>
            <div style="margin-top: 10px;">
                <p style="font-size: 30px;"><b>Purrfect Adopt</b></p>
            </div>
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

    <!--Table-->


    <div class="container">

        <div style="margin-left: 90px; margin-top: 25px" class="flex">
          <h4 class="font-bold p-1"><b>Data user yang terdaftar</b></p>
        </div>

        <div class="table-wrapper shadow rounded">
            <table class="tbluser text-sm" id="tbluser">
                <thead class="shadow">
                  <tr>
                    <td><b>No</b></td>
                    <td><b>ID User</b></td>
                    <td><b>Name</b></td>
                    <td><b>Email</b></td>
                    <td><b>Jenis Kelamin</b></td>
                    <td><b>Kucing</b></td>
                    <td><b>Status</b></td>
                    <td><b>Aksi</b></td>
                  </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
  <!--End Table-->

  <!--Footer-->
  <footer>
        <div class="container">
            <div class="row">
                <div class="left-section">
                <p style="font-size: 18px;font-weight:bold;margin-bottom:10px">Purrfect Adopt</p>
                <p>Kami adalah tempat kamu bisa mengadopsi Kucing Ras Terpercaya dengan biaya yang sangat terjangkau. Kami menyediakan berbagai jenis Kucing Ras yang bisa jadi teman pelepas penatmu.</p>
                </div>
                <div class="center-section">
                <p style="font-size: 18px;font-weight:bold;margin-bottom:10px">Alamat Kami</p>
                <p>Jl. Veteran, Malang<br>Telepon: 123-456-7890</p>
                </div>
                <div class="right-section">
                <p style="font-size: 18px;font-weight:bold;margin-bottom:10px">Sosial Media</p>
                <ul class="social-media">
                    <a href="#"><i class="fa-brands fa-facebook"  style="color: #ffffff;"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"  style="color: #ffffff;"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></a>
                </ul>
                </div>
            </div>
        </div>
    </footer>
  <!--End Footer-->

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript">
        $(function () {
            let isi = '';

            // $.ajaxSetup({
            //     headers: {
            //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('user')
            //     }
            // });

            function getUser() {
                const url = 'http://127.0.0.1:8000/getadminuser';

                $.ajax({
                    type:"GET",
                    url:url,
                    dataType:"JSON",
                    success:
                    function (response) {
                                isi = '';
                                let no_urut = 1 ;
                                response.forEach(el => {
                                    isi += `
                                        <tr>
                                            <td>${no_urut}</td>
                                            <td class="nr" opacity="0">${el.id}</td>
                                            <td> ${el.name} </td>
                                            <td>${el.email}</td>
                                            <td> ${el.gender ? 'Laki-laki' : 'Perempuan'} </td>
                                            <td>${el.status ? '<button id="btnlihat" class="focus:outline-none text-white bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-1 mr-2 mb-2 dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-900" style="cursor:pointer" style="cursor:pointer">Lihat</button>' : 'Tidak memiliki kucing'}</td>
                                            <td> ${el.role}</td>
                                            <td>
                                                <button id="btndelete" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-1 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" style="cursor:pointer" style="cursor:pointer">Hapus</button>
                                            </td>
                                        </tr>
                                    `;
                                    no_urut += 1;
                                });
                                $('#tbluser').append(isi);
                            }
                });
            }

            $('#tbluser').on('click', '#btndelete', function (e) {
                var $id = $(this).closest("tr")   // Finds the closest row <tr>
                .find(".nr")     // Gets a descendent with class="nr"
                .text();         // Retrieves the text within <td>

                let url = 'http://127.0.0.1:8000/hapususer/' + $.trim($id);        // Outputs the answer

                $.ajax({
                    type: "GET",
                    url: url,
                    success: function (response) {
                        // $('#tblanggota').find("tr:gt(0)").remove();
                        // getanggota()
                    }
                });
                swal("Sukses!", "Data berhasil dihapus", "success");
                $(this).closest('tr').remove();
            });

            $('#tbluser').on('click', '#btnlihat', function (e) {
                var $id = $(this).closest("tr")   // Finds the closest row <tr>
                .find(".nr")     // Gets a descendent with class="nr"
                .text();         // Retrieves the text within <td>

                let url = 'http://127.0.0.1:8000/getuserkucing/' + $.trim($id);        // Outputs the answer

                $.ajax({
                    type: "GET",
                    url: url,
                    success: function (response) {
                        // $('#tblanggota').find("tr:gt(0)").remove();
                        // getanggota()
                        console.log(url);
                        console.log($id);
                        window.location.href = '/admin-detailuser/'+ $.trim($id);  ;
                        // window.location.href = url;
                    }
                });
            });

            getUser();
        })
    </script>

</body>
</html>
