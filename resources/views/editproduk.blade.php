<!DOCTYPE html>
<html>
    <head>
        <title>
            PaTungin - Edit produk
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
                <a href="#profile">Profile</a>
                <a class="login-button" href="#login">Logout</a>
            </div>
        </div>
        <div class="header-container">
            <div class="produk-header">
                <h2>Edit produk di sini!</h2>
                <p style="margin-top: -20px;">Masukkan data produk yang akan diedit.</p>
            </div>
        </div>
        <div class="produkform-container">
            <div class="produkform">
                <div class="produkgrid">
                    <h2>Edit Produk</h2>
                    <div class="produk-input">
                        <p>ID Produk</p>
                        <input type="text" id="idproduk" name="idproduk">
                        <p>Nama Produk</p>
                        <input type="text" id="namaproduk" name="namaproduk">
                        <p>Harga Produk</p>
                        <input type="text" id="hargaproduk" name="hargaproduk">
                        <p>Stok</p>
                        <input type="text" id="stok" name="stok">
                    </div>
                    <button style="float: right; margin-top : 20px" type="submit" class="produkbutton">Edit</button>
                </div>
                <div class="produkgrid">
                    <img src="{{asset('assets/images/produk.png')}}" style="width:100%">
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