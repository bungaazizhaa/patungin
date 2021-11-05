<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            PaTungin - Dashboard
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
                <a class="active" href="#dashboard">Dashboard</a>
                <a href="#transaksi">Transaksi</a>
                <a href="#produk">Produk</a>
                <a href="#profile">Profile</a>
                <a class="login-button" href="#login">Logout</a>
            </div>
        </div>
        <div class="header-container">
            <div class="produk-header">
                <h2>Selamat datang Ibu Bunga!</h2>
                <p style="margin-top: -20px;">Berikut data pembukuan dan keuangan perusahaan.</p>
            </div>
        </div>
        <div class="dashboard-container">
            <div class="dashboard-grid">
                <!--canvas chart.js nya masukin disini nanti, ini cuma template-->
                <div class="graphgrid">
                    <img src="{{asset('assets/images/tabel.png')}}" style="width:100%">
                </div>
                <div class="graphgrid">
                    <h2>Grafik Penjualan per Bulan</h2>
                    <p>Berikut merupakan grafik penjualan dari produk produk makanan selama 5 bulan terakhir. Dari grafik bisa terlihat peningkatan maupun penurunan jumlah produk yang berbeda setiap bulannya.<br><br>
                       Kunjungi halaman selanjutnya untuk informasi lebih rinci.<br><br>
                       Di bawah ini merupakan data produk yang paling laku terjual serta data stok produk yang mulai menipis.
                    </p>
                </div>
            </div>
        </div>
        <div class="dashboard-container">
            <div class="tabletitle-container">
                <div class="tabletitle">
                    <h3>Top 5 Produk Paling Laku Terjual</h3>
                </div>
                <div class="tabletitle">
                    <h3>Top 5 Stok Produk Menipis</h3>
                </div>
            </div>
        </div>
        <div class="dashboard-container">
            <div class="table-grid">
                <div class="tablecard">
                    <table id="dashboardtable">
                        <tr>
                            <th>ID Produk</th>
                            <th>Nama Produk</th>
                            <th>Terjual</th>
                        </tr>
                        <tr>
                            <td>1025</td>
                            <td>Indomie Mie Goreng</td>
                            <td>300</td>
                        </tr>
                        <tr>
                            <td>1025</td>
                            <td>Indomie Mie Goreng</td>
                            <td>300</td>
                        </tr>
                        <tr>
                            <td>1025</td>
                            <td>Indomie Mie Goreng</td>
                            <td>300</td>
                        </tr>
                        <tr>
                            <td>1025</td>
                            <td>Indomie Mie Goreng</td>
                            <td>300</td>
                        </tr>
                        <tr>
                            <td>1025</td>
                            <td>Indomie Mie Goreng</td>
                            <td>300</td>
                        </tr>
                    </table>
                </div>
                <div class="tablecard">
                    <table id="dashboardtable">
                        <tr>
                            <th>ID Produk</th>
                            <th>Nama Produk</th>
                            <th>Stok</th>
                        </tr>
                        <tr>
                            <td>1025</td>
                            <td>Indomie Mie Goreng</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>1025</td>
                            <td>Indomie Mie Goreng</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>1025</td>
                            <td>Indomie Mie Goreng</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>1025</td>
                            <td>Indomie Mie Goreng</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>1025</td>
                            <td>Indomie Mie Goreng</td>
                            <td>0</td>
                        </tr>
                    </table>
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