@extends('layouts.app')
@section('title', 'My Profile')
@section('content')
    <div class="container logins">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profile </li>
                    </ol>
                </nav>
            </div>

            <div class="cd-acc" id="root">
                <!-- The sidebar -->
                <div class="sidebar-acc">
                    <a href="">
                        <div class="accs">
                            <div class="acc-kiri">
                                <img src="" alt="" width="50px">
                            </div>

                            <div class="acc-kanan pt-1">

                            </div>

                        </div>
                    </a>
                    <a href="#news">Keranjang Belanja</a>
                    <a href="#contact">Riwayat Pembelian</a>
                    <a href="">Toko Saya</a>
                </div>

                <!-- Page content -->
                {{-- tabs --}}
                <div class="content-sb tabs">
                    <ul id="tabs-nav">
                        <li><a href="#tab1">Biodata Diri</a></li>
                        <li><a href="#tab2">Daftar Alamat</a></li>
                    </ul> <!-- END tabs-nav -->

                    <div id="tabs-content">

                        <div id="tab1" class="tab-content">
                            <div class="accs">
                                <div class="acc-kiri">
                                    <img src="" alt="" width="250px" style="border-radius: 0%">
                                </div>
                                <div class="acc-kanan">
                                    <h1>PERSONAL INFO</h1>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>Nama</td>
                                                <td>:</td>
                                                <td>{{ $user->name }}</td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>:</td>
                                                <td>{{ $user->email }}</td>
                                            </tr>
                                            <tr>
                                                <td>Phone Number</td>
                                                <td>:</td>
                                                <td>{{ $user->no_hp }}</td>
                                            </tr>
                                            <tr>
                                                <td>Address</td>
                                                <td>:</td>
                                                <td>{{ implode('', $user->alamat->pluck('alamat_u')->all()) }}</td>
                                                {{-- @if (!empty($user->alamat->alamat))
                                                @endif --}}
                                            </tr>
                                            {{-- <tr>
                                                <td>City</td>
                                                <td>:</td>

                                                <td>{{ $user->alamat->kota }}</td>

                                            </tr>
                                            <tr>
                                                <td>Province</td>
                                                <td>:</td>

                                                <td>{{ $user->alamat->provinsi }}</td>

                                            </tr> --}}
                                            <tr>
                                                <td colspan="2"></td>
                                                <td>
                                                    <a href="{{ route('edit-profile', $user->id) }}"
                                                        class="btn btn-primary"><i class="fa-solid fa-user-pen"></i> Edit
                                                        Profile</a>
                                                    <a href="" class="btn btn-danger"><i class="fa-solid fa-pen"></i>
                                                        Edit Password</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div id="tab2" class="tab-content">
                            <h2>Dante Hicks</h2>
                            <p>"My friend here's trying to convince me that any independent contractors who were working on
                                the uncompleted Death Star were innocent victims when it was destroyed by the Rebels."</p>
                        </div>

                    </div> <!-- END tabs-content -->
                </div> <!-- END tabs -->



            </div>

        </div>
    </div>
@endsection
