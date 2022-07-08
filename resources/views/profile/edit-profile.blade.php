@extends('layouts.app')
@section('title', 'Edit Profile')
@section('content')
    <div class="container logins">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('profile') }}">Profile</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Profile </li>
                    </ol>
                </nav>
            </div>
            <div class="card">
                <div class="card-body">
                    <h1><i class="fa-solid fa-user-pen"></i> Edit Profile</h1>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('update-profile') }}" enctype="multipart/form-data">
                        @csrf
                        {{-- <div class="ep">
                            <img src=""
                                alt="https://thumbs.dreamstime.com/b/default-avatar-profile-vector-user-profile-default-avatar-profile-vector-user-profile-profile-179376714.jpg"
                                width="200px" class="pb-3">
                            <input type="file" id="profile" name="avatar">
                        </div> --}}
                        <input name="id" type="hidden" value="{{ $user->id }}">
                        <div class="row mb-3">
                            <label for="name" class="col-md-2 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ $user->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email"
                                class="col-md-2 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ $user->email }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="no_hp"
                                class="col-md-2 col-form-label text-md-end">{{ __('Nomer Hp') }}</label>

                            <div class="col-md-6">
                                <input id="no_hp" type="text"
                                    class="form-control @error('no_hp') is-invalid @enderror" name="no_hp"
                                    value="{{ $user->no_hp }}" required autocomplete="no_hp" autofocus>

                                @error('no_hp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="alamat" class="col-md-2 col-form-label text-md-end">{{ __('Alamat') }}</label>

                            <div class="col-md-6">
                                <textarea name="alamat" id="alamat" cols="30" rows="10"
                                    class="form-control @error('alamat') is-invalid @enderror" required>{{ implode('', $user->alamat->pluck('alamat_u')->all()) }}</textarea>

                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="provinsi"
                                class="col-md-2 col-form-label text-md-end">{{ __('Provinsi') }}</label>

                            <div class="col-md-6">
                                <select name="provinsi" id="provinsi"
                                    class="form-control @error('provinsi') is-invalid @enderror" required>
                                    <option selected="true" disabled>Pilih Provinsi</option>
                                    <option value="{{ implode('', $user->alamat->pluck('provinsi')->all()) }}">
                                        {{ implode('', $user->alamat->pluck('provinsi')->all()) }}</option>
                                    <option value="TEST">TEST</option>

                                </select>

                                @error('provinsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="kota" class="col-md-2 col-form-label text-md-end">{{ __('Kota') }}</label>

                            <div class="col-md-6">
                                <select name="kota" id="kota"
                                    class="form-control @error('kota') is-invalid @enderror" required>
                                    <option selected="true" disabled>Pilih kota</option>

                                    <option value="{{ implode('', $user->alamat->pluck('kota')->all()) }}">
                                        {{ implode('', $user->alamat->pluck('kota')->all()) }}</option>
                                    <option value="TEST">TEST</option>
                                </select>

                                @error('kota')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="kode_pos"
                                class="col-md-2 col-form-label text-md-end">{{ __('Kode Pos') }}</label>

                            <div class="col-md-6">
                                <input id="kode_pos" type="text"
                                    class="form-control @error('kode_pos') is-invalid @enderror" name="kode_pos"
                                    value="{{ implode('', $user->alamat->pluck('kode_pos')->all()) }}">

                                @error('kode_pos')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
