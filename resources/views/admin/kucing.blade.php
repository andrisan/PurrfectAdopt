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
  font-family: Poppins;
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
      font-size: 24px;
      font-weight: bold;
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
/*       margin-left: 100px; */
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
    margin-top: 15%;
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
</style>
  </head>

<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purrfect Adopt</title>
    <link rel="stylesheet" href="style-kucing.css">
</head>
<body>
<header>
    <div class="logo">Logo</div>
    <nav>
      <ul>
        <li><a href="#">Beranda</a></li>
        <li><a href="#">Kucing</a></li>
        <li><a href="#">User</a></li>
        <li><a href="#">Artikel</a></li>
      </ul>
    </nav>
    <div class="profile">
      <img src="profile-image.jpg" alt="Profil">
      <span>Profil</span>
    </div>
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
       <td class="image-cell"><img src="image/btn-delete.png"></td>
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
       <td class="image-cell"><img src="image/btn-delete.png"></td>
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
       <td class="image-cell"><img src="image/btn-delete.png"></td>
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

                    <!-- Tambahkan baris lainnya di sini -->
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
      <span>Contact Us:</span>
      <div class="social-media">
        <a href="#"><img src="facebook.png" alt="Facebook"></a>
        <a href="#"><img src="twitter.png" alt="Twitter"></a>
        <a href="#"><img src="instagram.png" alt="Instagram"></a>
      </div>
    </div>
  </footer>
  
</body>
</html>