<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purrfect Adopt</title>
    <style>
body{
  margin: 0;
  padding: 0;
<<<<<<< HEAD
  font-family: 'Poppins', sans-serif;
} 
=======
  font-family: Poppins;
}
>>>>>>> df7de539c25eb654374c35e0ff44c728f793b0d7

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
    justify-content: center;
    align-items: center;
    height: 60vh;
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
      color: #fff;
      padding: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 150px;
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
<<<<<<< HEAD
    
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

=======

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
>>>>>>> df7de539c25eb654374c35e0ff44c728f793b0d7
</style>
  </head>
<body>
  
<header>
    <div class="logo2"><a href="#"><img class="logo" src="{{ asset('/img/logo.png') }}" alt="Logo"></div></a>
    <nav>
      <ul>
        <li><a href="#">Beranda</a></li>
        <li><a href="#">Kucing</a></li>
        <li><a href="#">User</a></li>
        <li><a href="#">Artikel</a></li>
      </ul>
    </nav>
    <div class="profile"><a href="#">
      <img src="{{ asset('/img/profile.png') }}" alt="Profil"></a>
      <span>Profil</span>
    </div>
<<<<<<< HEAD
</header>
  
    <div class="container">
        <div class="table-wrapper">
            <table class="tablekucing" id="tblkucing">
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
    <td><b>Aksi</b></td>      </tr>
     </thead>
   <tbody>
      <tr>
       <td>1</td>
       <td>234</td>
       <td>Fian</td>
       <td>Putih</td>
       <td>BSH</td>
       <td>Jantan</td>
       <td>1 kg</td>
       <td>5 cm</td>
       <td>sudah adopsi</td>
       <td class="image-cell"><img src="{{ asset('/img/btn-delete.png') }}" alt="">
       </tr>
       <tr>
       <td>2</td>
       <td>234</td>
       <td>Fian</td>
       <td>Putih</td>
       <td>BSH</td>
       <td>Jantan</td>
       <td>1 kg</td>
       <td>5 cm</td>
       <td>sudah adopsi</td>
       <td class="image-cell"><img src="{{ asset('/img/btn-delete.png') }}"></td>
       </tr>
           <tr>
       <td>3</td>
       <td>234</td>
       <td>Fian</td>
       <td>Putih</td>
       <td>BSH</td>
       <td>Jantan</td>
       <td>1 kg</td>
       <td>5 cm</td>
       <td>sudah adopsi</td>
       <td class="button">
        <a href="#">
        <button>Del</button>
        </a>
       </td>
       </tr>
            <tr>
       <td>4</td>
       <td>234</td>
       <td>Fian</td>
       <td>Putih</td>
       <td>BSH</td>
       <td>Jantan</td>
       <td>1 kg</td>
       <td>5 cm</td>
       <td>sudah adopsi</td>
       <td class="image-cell"><img src="image/btn-delete.png"></td>
       </tr>
       <tr>
       <td>5</td>
       <td>234</td>
       <td>Fian</td>
       <td>Putih</td>
       <td>BSH</td>
       <td>Jantan</td>
       <td>1 kg</td>
       <td>5 cm</td>
       <td>sudah adopsi</td>
       <td class="image-cell"><img src="image/btn-delete.png"></td>
       </tr>
       <tr>
       <td>6</td>
       <td>234</td>
       <td>Fian</td>
       <td>Putih</td>
       <td>BSH</td>
       <td>Jantan</td>
       <td>1 kg</td>
       <td>5 cm</td>
       <td>sudah adopsi</td>
       <td class="image-cell"><img src="image/btn-delete.png"></td>
       </tr>
       <tr>
       <td>7</td>
       <td>234</td>
       <td>Fian</td>
       <td>Putih</td>
       <td>BSH</td>
       <td>Jantan</td>
       <td>1 kg</td>
       <td>5 cm</td>
       <td>sudah adopsi</td>
       <td class="image-cell"><img src="image/btn-delete.png"></td>
       </tr>
=======
  </header>

    <div class="container">
        <div class="table-wrapper">
            <table class="tablekucing" id="tblkucing">
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
                <td><b>Aksi</b></td>      </tr>
                </thead>
                <tbody>
>>>>>>> df7de539c25eb654374c35e0ff44c728f793b0d7

                </tbody>
            </table>
        </div>
    </div>

    <footer>
    <div class="left-section">
      <h3>Purrfect Adopt</h3>
      <p>Kami adalah tempat kamu bisa mengadopsi Kucing Ras Terpercaya dengan biaya yang sangat terjangkau. Kami menyediakan berbagai jenis Kucing Ras yang bisa jadi teman pelepas penatmu.</p>
    </div>
    <div class="center-section">
      <h3> Alamat Kami </h3>
      Jalan Veteran Malang
    </div>
    <div class="right-section">
      <span><b>Contact Us</b></span>
      <div class="social-media">
        <a href="#"><img src="{{ asset('/img/facebook.png') }}" alt="Facebook"></a>
        <a href="#"><img src="{{ asset('/img/whatsapp.png') }}" alt="WhatsApp"></a>
        <a href="#"><img src="{{ asset('/img/ig.png') }}" alt="Instagram"></a>
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
