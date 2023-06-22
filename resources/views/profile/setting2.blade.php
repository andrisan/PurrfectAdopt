<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/cc4885a691.js" crossorigin="anonymous"></script>
</head>

<body style= margin:3%>
    <div style="width: 50%; float:left">
        <div class="profile-setting">
            <a href="{{ route('setting1.edit',$user->id) }}">
                <button type="button" class="btn"><i class="fa-solid fa-user" style="color: #4c3d3d;"></i>&nbsp;Profile Setting</button>
            </a>
        </div>

        <div class="security-setting">
            <a href="{{ route('setting2.edit',$user->id)}}">
                <button type="button" class="btn bg-yellow-300"><i class="fa-solid fa-shield" style="color: #4c3d3d;"></i>&nbsp;Security Setting</button>
            </a>
        </div>
    </div>

    <div style="width: 50%; float:right">
        <div class="profile">
            <h2>Security Setting</h2>
            <form action="{{ route('setting2.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <br><br>
                <label for="name">Name :</label>
                <br>
                <input type="text" name="name" id="name" value="{{ $user->name }}">
                <br><br>
                <label for="profesi">Profesi :</label>
                <br>
                <input type="text" name="profesi" id="profesi" value="{{ $user->profesi }}">
                <br><br>
                <label for="alamat">Alamat :</label>
                <br>
                <input type="text" name="alamat" id="alamat" value="{{ $user->alamat }}"> 
                <br>
                <button type="submit" class="save">Save</button>
            </form>
        </div>
    </div>
</body>

</html>