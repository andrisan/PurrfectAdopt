<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/cc4885a691.js" crossorigin="anonymous"></script>
</head>

<body>
    <div style="width: 50%; float:left">
        <div class="profile-setting">
            <a href="{{ route('setting1') }}"><button type="button" class="btn"><i class="fa-solid fa-user"
                        style="color: #4c3d3d;"></i>&nbsp;Profile Setting</button></a>
        </div>

        <div class="security-setting">
            <a href="{{ route('setting2') }}"><button type="button" class="btn" style="background-color: #ffd95a;"><i
                        class="fa-solid fa-shield" style="color: #4c3d3d;"></i>&nbsp;Security Setting</button></a>
        </div>
    </div>
    <div style="width: 50%; float:right">
        <div class="profile">
            <h2>Security Setting</h2>
            <br><br>
            <p class="alignleft" style="float: left;">Secure Browsing</p>
            <p class="alignright" style="float: right; padding-right: 20%;">Secure browsing is currenty <b>enabled</b>
            </p>
            <br><br>
            <p class="alignleft" style="float: left;">Login Notification</p>
            <p class="alignright" style="float: right; padding-right: 20%;">Email notifications are <b>enabled</b></p>
            <br><br>
            <p class="alignleft" style="float: left;">App Password</p>
            <p class="alignright" style="float: right; padding-right: 20%;">You have <b>1</b> App Password</p>
            <br><br>
            <p class="alignleft" style="float: left;">Recognized Devices</p>
            <p class="alignright" style="float: right; padding-right: 20%;">You have <b>2</b> recognized devices</p>
            <br><br>
            <p class="alignleft" style="float: left;">Active Sessions</p>
            <p class="alignright" style="float: right; padding-right: 20%;">Logged in from <b>***********</b></p>
            <br>
            <button type="button" class="save">Save</button>
        </div>
    </div>
</body>

</html>