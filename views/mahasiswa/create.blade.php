@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Input Mahasiswa</div>

                <div class="card-body">
                <form action="{{ route('simpan.mahasiswa') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <select name="user_id" id="user_id" class="form-control">
                            <option value="" disable selected>--Pilih User--</option>
                                @foreach ($user as $u)
                            <option value="{{ $u->id }}">{{ $u->name }}</option>
                                @endforeach         
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="npm">NPM</label>
                        <input type="number" name="npm" class="form-control col-md-12" placeholder="Masukan npm">
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control col-md-12" placeholder="Masukan Tempat Lahir">
                    </div>
                    <div class="form-group">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control col-md-12" placeholder="Masukan Tanggal Lahir">
                    </div>
                    <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <input type="number" name="telepon" class="form-control col-md-12" placeholder="Masukan Telepon">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" cols="2" rows="3" class="form-control" style="resize : none" placeholder="Masukan Alamat"></textarea>
                    </div>
                    <h6>Jenis Kelamin</h6>
                    <select name="gender" id="gender" class="form-control">
                        <option value="" disable selected>--Pilih Jenis Kelamin--</option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                    <br>
                    <button type="submit" class="btn btn-primary" name="simpan" style="margin-left: 40%">SIMPAN</button>
                    <button type="reset" class="btn btn-danger">BATAL</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection