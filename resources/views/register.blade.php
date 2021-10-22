<!DOCTYPE html>
<html>
    <head>
        <title>
            PaTungin - Register
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
        <div class="loginform-container">
            <div class="loginform">
                <div class="logingrid">
                    <img src="{{asset('assets/images/Register-img.png')}}" style="width:100%">
                </div>
                <div class="logingrid">
                    <h2>Register</h2>
                    <div class="login-input">
                        <p>Email</p>
                        <input type="text" id="email" name="email">
                        <p>Password</p>
                        <input type="text" id="password" name="password">
                    </div>
                    <p>Sudah punya akun? <a href="login" style="color:rgb(46, 156, 160)">Login sekarang!</a><button type="submit" class="loginbutton">Register</button></p>
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