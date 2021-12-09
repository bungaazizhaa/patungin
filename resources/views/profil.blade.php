<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            PaTungin - Profil
        </title>
        <link rel="stylesheet" href="{{ asset('assets/css/patungin.css')}}">
    </head>
    <body>
        <div class="topnav">
            <a class="navbar-brand" href="#">
                <div class="logo-image">
                      <img src="{{asset('assets/images/Logo-small.png')}}" class="img-fluid">
                </div>
            </a>
            <div class="topnav-right">
                <a href="#dashboard">Dashboard</a>
                <a href="#transaksi">Transaksi</a>
                <a href="#produk">Produk</a>
                <a class="active" href="#profile">Profile</a>
                <a class="login-button" href="#login">Logout</a>
            </div>
        </div>
        <div class="profileform-container">
            <div class="profileform">
                <div class="profilegrid">
                    <!--nanti tolong dihubungin ke foto yang diinput-->
                    <img src="{{asset('assets/images/templatephoto.jpg')}}" style="width:100%">
                </div>
                <div class="profilegrid">
                    <h2>Profile</h2>
                    <div class="profile-input">
                        <p>Nama</p>
                        <input type="text" id="nama" name="nama">
                        <p>Jabatan</p>
                        <input type="text" id="jabatan" name="jabatan">
                        <p>Email</p>
                        <input type="email" id="email" name="email">
                        <p>Password</p>
                        <input type="password" id="password" name="password">
                    </div>
                    <a href="/profilupdate" class="updatebutton" href="profilupdate">Update</a>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="footer-container">
                <a class="navbar-brand" href="#">
                    <div class="logo-image">
                          <img src="{{asset('assets/images/Logo-footer.png')}}" class="footer-fluid">
                    </div>
                </a>
                <div class="card">
                    <div class="isian">
                        <h3 class="footer-h3">Menu</h3>
                        <p><a href="#landingpage">Beranda</a></p>
                        <p><a href="#landingpage">Tentang</a></p>
                        <p><a href="#landingpage">Cara kerja</a></p>
                        <p><a href="#landingpage">Login</a></p>
                    </div>
                </div>
                <div class="card">
                    <div class="isian">
                        <h3 class="footer-h3">Contact Us</h3>
                        <p><a href="#mail"><img src="{{asset('assets/images/mail.png')}}" style="width: 20px">patungin@gmail.com</a></p>
                        <p><a href="#facebook"><img src="{{asset('assets/images/fb.png')}}" style="width: 20px">PaTungin Aja</a></p>
                        <p><a href="#instagram"><img src="{{asset('assets/images/instagram.png')}}" style="width: 20px">PaTungin</a></p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>