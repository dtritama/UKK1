@extends('daftars.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>PPDB - SMK Merdeka Belajar</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('daftars.create') }}">Form Pendaftaran !</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>NoReg</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Agama</th>
            <th>Asal Sekolah</th>
            <th>Minat Jurusan</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($daftars as $daftar)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $daftar->nama }}</td>
            <td>{{ $daftar->jk }}</td>
            <td>{{ $daftar->alamat }}</td>
            <td>{{ $daftar->agama }}</td>
            <td>{{ $daftar->asal_sekolah }}</td>
            <td>{{ $daftar->jurusan }}</td>
            <td>
                <form action="{{ route('daftars.destroy',$daftar->id) }}" method="POST" onsubmit="return confirm('Apakah yakin data akan dihapus?')">
   
                   
    
                    <a class="btn btn-primary" href="{{ route('daftars.edit',$daftar->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $daftars->links() !!}
      
@endsection