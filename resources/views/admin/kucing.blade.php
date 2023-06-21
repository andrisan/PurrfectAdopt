<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purrfect Adopt</title>

    <!-- icon pack -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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

      .text-sm {
        font-size: 0.875rem;
        line-height: 1.25rem;
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

.table-wrapper {
    width: 90%;
/*     margin: 0 auto; */

    margin-left: 5%;
    margin-right: 5%;
    border-radius: 5px;
    padding: 20px;
    background: #FFD95A;
}

.tablekucing {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
    margin-bottom: 10px;
/*     background: red; */
}

.tablekucing, th, td {
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
  width: 100%;
  padding: 20px 0;
  color: white;
  bottom: 0;
  position: fixed;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 15px;
}

.row {
  display: flex;
  flex-wrap: wrap;
}

.left-section {
  flex-basis: 33.33%;
  padding: 0 15px;
  box-sizing: border-box;
}

.center-section {
  padding-left: 15%;
}

.right-section {
  padding-left: 20%;
}

h3 {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 10px;
}

p {
  margin-bottom: 20px;
}

.social-media {
  list-style: none;
  padding: 0;
  display: flex;
}

.social-media li {
  margin-right: 10px;
}

.social-media a {
  color: #333;
  font-size: 20px;
  padding-right: 7%;
}

/* Tambahkan CSS responsif berdasarkan ukuran layar */
@media (max-width: 768px) {
  .col-md-4 {
    flex-basis: 100%;
    margin-bottom: 20px;
  }
}



/* Tambahkan CSS responsif berdasarkan ukuran layar */
@media (max-width: 768px) {
  .col-md-4 {
    flex-basis: 100%;
    margin-bottom: 20px;
  }
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
        <img src="{{ asset('/img/logoo.png') }}" alt="logo">
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
      <!-- SDSS -->
    <div class="container">

         <div style="margin-left: 90px; margin-top: 25px" class="flex">
          <h4 class="font-bold p-1"><b>Data kucing yang terdaftar</b></p>
        </div>

        <div class="table-wrapper shadow rounded">
            <table class="tablekucing text-sm" id="tblkucing">
                <thead>
                <tr>
                <td><b>No</b></td>
                <td><b>ID</b></td>
                <td><b>Nama</b></td>
                <td><b>Warna</b></td>
                <td><b>Ras</b></td>
                <td><b>Gender</b></td>
                <td><b>Berat Badan</b></td>
                <td><b>Tinggi Badan</b</td>
                <td><b>Status</b></td>
                <td><b>Aksi</b></td>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>

    <footer>
  <div class="container">
    <div class="row">
      <div class="left-section">
        <h3>Purrfect Adopt</h3>
        <p>Kami adalah tempat kamu bisa mengadopsi Kucing Ras Terpercaya dengan biaya yang sangat terjangkau. Kami menyediakan berbagai jenis Kucing Ras yang bisa jadi teman pelepas penatmu.</p>
      </div>
      <div class="center-section">
        <h3>Alamat Kami</h3>
        <p>Jl. Veteran, Malang<br>Telepon: 123-456-7890</p>
      </div>
      <div class="right-section">
        <h3>Sosial Media</h3>
        <ul class="social-media">
          <a href="#"><i class="fa-brands fa-facebook"  style="color: #ffffff;"></i></a>
          <a href="#"><i class="fa-brands fa-twitter"  style="color: #ffffff;"></i></a>
          <a href="#"><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></a>
        </ul>
      </div>
    </div>
  </div>
</footer>



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
            const url = 'http://127.0.0.1:8000/getadminkucing';

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
                                        <td> ${el.nama} </td>
                                        <td>${el.warna}</td>
                                        <td> ${el.ras} </td>
                                        <td> ${el.gender ? 'Laki-laki' : 'Perempuan'} </td>
                                        <td>${el.berat_badan}</td>
                                        <td> ${el.tinggi_badan}</td>
                                        <td>${el.status ? 'Teradopsi' : 'Belum diadopsi'}</td>
                                        <td class="image-cell">
                                            <button id="btndelete" class="btn btn-red">hapus</button>
                                        </td>
                                    </tr>
                                `;
                                no_urut += 1;
                            });
                             $('#tblkucing').append(isi);
                        }
            });
        }

        $('#tblkucing').on('click', '#btndelete', function (e) {
            var $id = $(this).closest("tr")   // Finds the closest row <tr>
            .find(".nr")     // Gets a descendent with class="nr"
            .text();         // Retrieves the text within <td>

            let url = 'http://127.0.0.1:8000/hapuskucing/' + $.trim($id);        // Outputs the answer

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

        getKucing();
    })
  </script>

</body>
</html>
