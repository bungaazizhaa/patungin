<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            PaTungin - Input Transaksi
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
                <h2>Input transaksi di sini!</h2>
                <p style="margin-top: -20px;">Masukkan data transaksi penjualan dan keuangan perusahaan hari ini</p>
            </div>
        </div>
        <div class="produkform-container">
            <div class="transaksiform">
                <div class="transaksigrid">
                    <h2>Input Transaksi</h2>
                    <div class="transaksi-input">
                        <p>ID Transaksi</p>
                        <input type="text" id="idtransaksi" name="idtransaksi">
                        <p>ID Produk</p>
                        <input type="text" id="idproduk" name="idproduk">
                        <p>Banyak Terjual</p>
                        <input type="text" id="banyakterjual" name="banyak terjual">
                        <p>Pendapatan Harian</p>
                        <input type="text" id="pendapatan" name="pendapatan">
                        <p>Pengeluaran Harian</p>
                        <input type="text" id="pengeluaran" name="pengeluaran">
                        <p>Keuntungan</p>
                        <input type="text" id="keuntungan" name="keuntungan">
                    </div>
                    <button style="float: right; margin-top : 20px" type="submit" class="produkbutton">Tambah</button>
                </div>
                <div class="transaksigrid">
                    <img src="{{asset('assets/images/transaksi.png')}}" style="width:100%">
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