<!DOCTYPE html>
<html>
    <head>
        <title>
            PaTungin - Profil Update
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
                <a href="#landingpage">Beranda</a>
                <a href="#landingpage">Tentang</a>
                <a href="#landingpage">Cara kerja</a>
                <a class="login-button" href="#login">Login</a>
            </div>
        </div>
        <div class="updateform-container">
            <div class="updateform">
                <div class="updategrid">
                    <!--nanti tolong dihubungin ke foto yang diinput-->
                    <img src="{{asset('assets/images/templatephoto.jpg')}}" style="width:100%">
                </div>
                <div class="updategrid">
                    <h2>Profile</h2>
                    <div class="update-input">
                        <p>Nama</p>
                        <input type="text" id="nama" name="nama">
                        <p>Jabatan</p>
                        <input type="text" id="jabatan" name="jabatan">
                        <p>Email</p>
                        <input type="text" id="email" name="email">
                        <p>Password lama</p>
                        <input type="text" id="passwordlama" name="passwordlama">
                        <p>Password baru</p>
                        <input type="text" id="passwordbaru" name="passwordbaru">
                        <p>Foto Profil</p>
                        <input type="file" id="browse" name="browse">
                    </div>
                    <button type="submit" class="updatebutton2">Update</button>
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