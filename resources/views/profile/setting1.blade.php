<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css">
    <script src="https://kit.fontawesome.com/cc4885a691.js" crossorigin="anonymous"></script>
    @vite(['public/style.css', 'resources/js/app.js'])
</head>

<body style="margin:3%" class="bg-amber-100">
    <div class="flex">
        <div class="w-1/2">
            <div class="profile-setting">
                <a href="{{ route('setting1.edit',$user->id) }}">
                    <button type="button" class="btn bg-yellow-300"><i class="fa-solid fa-user" style="color: #4c3d3d;"></i>&nbsp;Profile Setting</button>
                </a>
            </div>

            <div class="security-setting">
                <a href="{{ route('setting2.edit',$user->id)}}">
                    <button type="button" class="btn"><i class="fa-solid fa-shield" style="color: #4c3d3d;"></i>&nbsp;Security Setting</button>
                </a>
            </div>
        </div>

        <div class="w-1/2">
            <div class="profile">
                <h2 class="text-2xl font-bold">Profile Setting</h2>
                <br><br>
                <form action="{{ route('setting1.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <label for="name">Nama : </label>
                    <br>
                    <input class="rounded-xl" type="text" name="name" id="name" value="{{ $user->name }}">
                    <br>
                    <label for="name">Telepon : </label>
                    <br>
                    <input class="rounded-xl" type="text" name="kontak" id="kontak" value="{{ $user->kontak }}">
                    <!-- Tambahkan input field untuk atribut lainnya -->
                    <br>
                    <button type="submit" class="save">Save</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
