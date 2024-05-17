@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{$title}}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a type="button" class="add btn btn-primary btn-sm" href="{{route('addProduct')}} ">+ Tambah</a>
            </div>
            <!-- <--  <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-1">
                <svg class="bi">
                    <use xlink:href="#calendar3" />
                </svg>
                This week
            </button> -->
        </div>
    </div>

    <!-- <h3>Transaksi</h3> -->

    <div class="table-responsive small">
        <table class="table table-striped table-sm" id="dtTable" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama {{$title}}</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
</main>


<script type="text/javascript">
    $(document).ready(function() {
        var table = $('#dtTable').DataTable({
            processing: true,

            serverSide: true,
            ajax: "{{ route('getProduct') }}",
            columns: [{
                    data: 'no',
                    name: 'id'
                },
                {
                    data: 'nama',
                    name: 'nama'
                },
                {
                    data: 'harga',
                    name: 'harga'
                },
                {
                    data: 'stok',
                    name: 'stok'
                },
                {
                    data: 'deskripsi',
                    name: 'deskripsi'
                },
                {

                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,

                }
            ]
        });
        table.ajax.reload();
    });
</script>


@endsection