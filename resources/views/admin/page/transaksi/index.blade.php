@section('content')
<div class="container-fluid">

    <!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{$title}}</h6>
            <a href="{{route('tambahTransaksi')}}" class="btn btn-success btn-sm float-right">+ Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Id User</th>
                            <th>Nama</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $item->id_user }}</td>
                            <td>{{ $item->nama_produk }}</td>
                            <td>{{ $item->total_harga }}</td>
                            <td>{{ $item->status }}</td>
                            <td>
                                <a href="{{ route('editTransaksi', ['id' => $item->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                                <form method="POST" action="{{ route('delTransaksi', ['id' => $item->id]) }}" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection