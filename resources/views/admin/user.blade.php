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

      .container {
        display: flex;
        /* justify-content: center;
        align-items: center; */
        flex-wrap: wrap;
        height: 30vh;
      }

      .flex {
        display: flex;
        width: 3000px;
      }

      .p-1 {
        padding: 0.25rem;
      }

      .text-sm {
        font-size: 0.875rem;
        line-height: 1.25rem;
      }

      .font-bold {
        font-weight: 800;
      }

      .table-wrapper {
        width: 90%;
  /*     margin: 0 auto; */

        margin-left: 5%;
        margin-right: 5%;
        border-radius: 5px;
        padding: 20px;
        background: #FFD95A;
      }

      .tbluser {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
        margin-bottom: 10px;
  /*     background: red; */
      }

      .tbluser, th, td {
          border: 1px solid black;
          padding: 10px;
      }

      thead {
          background-color: #C07F00;
      }

      td.image-cell {
          text-align: center;
      }

      td.image-cell img {
          width: 30px;
          height: auto;
      }

      footer {
          background-color: #C07F00;
          color: #fff;
          padding: 20px;
          width: 100%;
          position: fixed;
          bottom: 0;
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

    </style>
</head>

<body>
    <header>
    <div class="flex">
        <img src="{{ asset('/img/logoo.png') }}" alt="Logo" class="logo">
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
                                            <td>${el.status ? '<button id="btnlihat" class="btn btn-danger">Lihat</button>' : 'Tidak memiliki kucing'}</td>
                                            <td> ${el.role}</td>
                                            <td>
                                                <button id="btndelete" class="btn btn-danger">Hapus</button>
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
