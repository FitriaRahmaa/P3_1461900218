<form action="{{url('dokter/' . $dokter->id) }} " method="post">
    @csrf
    <input type="hidden" name="_method" value="patch">
    Nama: <input type="text" name="nama_dokter" value="{{ $dokter->nama_dokter}}">
    Jabatan: <input type="text" name="jabatan">
    <button type="submit">Simpan</button>
</form>