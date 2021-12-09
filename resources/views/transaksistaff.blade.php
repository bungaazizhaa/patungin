<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        PaTungin - Transaksi Staff
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
            <a href="dashboardstaff">Dashboard</a>
            <a class="active" href="#transaksi">Transaksi</a>
            <a href="produkstaff">Produk</a>
            <a href="profil">Profile</a>
            <a class="login-button" href="#login">Logout</a>
        </div>
    </div>
    <div class="producttable-container">
        <div class="tambahprod-container">
            <button class="tambahproduk"><a href="/inputtransaksi">Tambah Transaksi</a></button>
        </div>
    </div>
    <div class="producttable-container">
        <div class="producttable">
            <div class="producttable-grid">
                <!--Ini harus di echo isinya pake javascript, sekarang cuma template-->
                <table id="showtable">
                    <tr>
                        <th>ID Transaksi</th>
                        <th>ID Produk</th>
                        <th>Pendapatan Harian</th>
                        <th>Pengeluaran Harian</th>
                        <th>Keuntungan</th>
                        <th colspan="2">Action</th>
                    </tr>
                    @foreach($data as $item)
                        <tr>
                            <td>{{$item['idTransaksi']}}</td>
                            <td>{{$item['idProduk']}}</td>
                            <td>Rp.{{$item['pendapatan']}}</td>
                            <td>Rp.{{$item['pengeluaran']}}</td>
                            <td>Rp.{{$item['keuntungan']}}</td>
                            <td><button class="editbutton">edit</button></td>
                            <td><button class="deletebutton">delete</button></td>
                        </tr>
                    @endforeach
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