@extends('templates.master')

@section('header')
    @include('templates.header0')
@endsection

@section('isi_page')
    

        <div class="bg-container">
            <img src="{{asset('assets/images/Header.png')}}" alt="" style="width:100%;">
            
            <div class="landingpage-logo">
            <img src="{{asset('assets/images/Logo.png')}}" alt="" style="width:100%;">
            </div>
            <div class="landingpage-jargon">
                <p>Mengatur finance perusahaan anda!</p>
            </div>
            <div class="landingpage-daftar">
                <a class="register-button" href="#register" style="text-decoration: none;">Daftar</a>
            </div>
        </div>
        <div class="centertext">
            <h3>
                <span style="color: rgb(46, 156, 160)">Tentang</span>
                <span style="color: black">PaTungin</span>
            </h3>
            <p>PaTungin adalah aplikasi berbasis website untuk pendataan kegiatan penjualan pangan di sebuah perusahaan. PaTungin Yang merupakan buku pendataan stok makanan beserta harga jual, pemasukan dan banyak barang terjual. Aplikasi ini berguna sebagai rekapitulasi data pada perusahaan serta sebagai informasi bagi petinggi perusaan untuk memantau kegiatan perusahaan.</p>
        </div>
        <div class="bg-container">
            <image src="{{asset('assets/images/Header2.png')}}" style="width:100%">
            <div class="satu">
                <image src="{{asset('assets/images/1.png')}}" style="width:50px; height: auto"></image>
                <p>Dapat melihat database perusahaan dengan mudah</p>
            </div>
            <div class="duatiga">
                <div class="duatiga-card">
                    <image src="{{asset('assets/images/2.png')}}" style="width:50px; height: auto"></image>
                    <p>Mengamati kegiatan perusahaan dengan mudah</p>
                </div>
                <div class="duatiga-card">
                    <image src="{{asset('assets/images/3.png')}}" style="width:50px; height: auto"></image>
                    <p>Memberikan laporan kegiatan perusahaan</p>
                </div>
            </div>
        </div>
        <div class="centertext">
            <h3>
                <span style="color: rgb(46, 156, 160)">Cara kerja</span>
                <span style="color: black">PaTungin</span>
            </h3>
        </div>
        <div class="container-carakerja">
            <div class="card">
                <img src="{{asset('assets/images/Register.png')}}" style="width:100%">
                <div class="isian">
                  <p>Register data diri anda yang terdaftar di perusahaan anda.</p>
                </div>
              </div>
              <div class="card">
                <img src="{{asset('assets/images/Login.png')}}" style="width:100%">
                <div class="isian">
                  <p>Login dengan username dan password yang telah terdaftar sebelumnya.</p>
                </div>
              </div>
              <div class="card">
                <img src="{{asset('assets/images/Bos.png')}}" style="width:100%">
                <div class="isian">
                  <p>Apabila seorang petinggi perusahaan, akan di arahkan pada halaman boss.</p>
                </div>
              </div>
              <div class="card">
                <img src="{{asset('assets/images/Staff.png')}}" style="width:100%">
                <div class="isian">
                  <p>Apabila seorang staff/karyawan perusahaan, akan di arahkan pada halaman staff.</p>
                </div>
              </div>
        </div>
        
