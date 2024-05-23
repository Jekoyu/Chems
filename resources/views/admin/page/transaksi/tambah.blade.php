@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Produk</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('simpanTransaksi') }}">
                @csrf

                <div class="form-group">
                    <label for="id_user">ID User</label>
                    <input type="text" class="form-control" id="id_user" name="id_user">
                </div>
                <div class="form-group">
                    <label for="nama">Id Produk:</label>
                    <input type="text" class="form-control" id="id_produk" name="id_produk">
                </div>

                <div class="form-group">
                    <label for="harga">Total Harga:</label>
                    <input type="text" class="form-control" id="total_harga" name="total_harga">
                </div>

                <div class="form-group">
                    <label for="status">Status:</label>
                    <select class="form-control" id="status" name="status">
                        <option value="0">Belum Bayar</option>
                        <option value="1">Sudah Bayar</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection