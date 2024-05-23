@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Data Kategori</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('updateProduct', ['id' => $produk->id]) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $produk->nama }}">
                </div>
                <div class="form-group">
                    <label for="harga">Harga:</label>
                    <input type="text" class="form-control" id="harga" name="harga" value="{{ $produk->harga }}">

                </div>
                <div class="form-group">
                    <label for="stok">Stok:</label>
                    <input type="text" class="form-control" id="stok" name="stok" value="{{ $produk->stok }}">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi:</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi">{{ $produk->deskripsi }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection