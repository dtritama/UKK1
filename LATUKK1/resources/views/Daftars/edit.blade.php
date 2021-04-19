@extends('daftars.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Data</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('daftars.index') }}"> Kembali</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Maaf, </strong>Ada sesuatu yang salah saat anda mengisi Form.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('daftars.update',$daftar->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    <input type="text" name="nama" value="{{ $daftar->nama }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="row form-group">
            <div class="col col-md-3">
                <label for="jk" class=" form-control-label">Jenis Kelamin :</label>
            </div>
                <div class="col-12 col-md-9">
                     <select name="jk" id="jk" value="{{ $daftar->jk }}"class="form-control">
                     <option selected value="{{ $daftar->jk }}">{{ $daftar->jk }}</option>
                     <option value="Laki-laki">Laki-laki</option>
                     <option value="Perempuan">Perempuan</option>
                     </select>
                 </div>
           </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat :</strong>
                    <textarea class="form-control" style="height:150px" name="alamat" placeholder="Alamat">{{ $daftar->alamat }}</textarea>
                </div>
            </div>
            <div class="row form-group">
            <div class="col col-md-3">
                <label for="jk" class="form-control-label">Agama</label>
            </div>
                <div class="col-12 col-md-9">
                     <select name="agama" value="{{ $daftar->agama }}" id="agama" class="form-control">
                     <option selected value="{{$daftar->agama}}">{{$daftar->agama}}</option>
                     <option value="Islam">Islam</option>
                     <option value="Katholik">Katholik</option>
                     <option value="Kristen">Kristen</option>
                     <option value="Hindu">Hindu</option>
                     <option value="Budha">Budha</option>
                     <option value="Kong Huchu">Kong Huchu</option>
                     </select>
                 </div>
           </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Asal Sekolah :</strong>
                    <input type="text" name="asal_sekolah" value="{{ $daftar->asal_sekolah }}" class="form-control" placeholder="Asal sekolah">
                </div>
            </div>
            <div class="row form-group">
            <div class="col col-md-3">
                <label for="jurusan" class=" form-control-label">Jurusan</label>
            </div>
                <div class="col-12 col-md-9">
                     <select name="jurusan" value="{{ $daftar->jurusan }}"id="jurusan" class="form-control">
                     <option selected value="{{$daftar->jurusan}}">{{$daftar->jurusan}}</option>
                     <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak (RPL)</option>
                     <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan (TKJ)</option>
                     <option value="Tata Boga">Tata Boga (TBG)</option>
                     <option value="Perhotelan">Perhotelan</option>
                     <option value="Bisnis Daring dan Pemasaran">Bisnis Daring dan Pemasaran(BDP)</option>
                     <option value="Otorisasi tata kelola Perusahaan">Otorisasi tata kelola Perusahaan(OTKP)</option>
                     </select>
                 </div>
           </div>  
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
   
    </form>
@endsection