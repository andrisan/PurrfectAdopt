<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Purrfect Adopt</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/61cc44f0a1.js" crossorigin="anonymous"></script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #FFF7D4;
            margin: 0;
            padding: 0;
        }
        .bgcontainer{
            background-color: #FFD95A;
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
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased font-sans leading-normal tracking-normal bg-cover bg-fixed">
    <header>
        <div class="flex">
                <p><b>Logo</b></p>
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
    <div class="container px-12">
       <div class="md:container md:mx-auto bg-yellow-400 p-5 mb-2 rounded-md my-10">
            <table class="w-full table-auto border-separate border-spacing-2 bg-orange-600 rounded-md">
                <thead class="border-b-2 border-gray-200">
                    <tr>
                    <th class=" text-white text-md font-bold tracking-wide">ID User</th>
                    <th class=" text-white text-md font-bold tracking-wide">Judul</th>
                    <th class=" text-white text-md font-bold tracking-wide">Writer</th>
                    <th class=" text-white text-md font-bold tracking-wide">Status</th>
                    <th class=" text-white text-md font-bold tracking-wide">Aksi</th>
                    </tr>
                </thead>
          </table>
        </div> 
    </div>
    
</body>
</html>