@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{$title}}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="add btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addModal">+ Tambah</button>
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
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
</main>

<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addProductModalLabel">Tambah {{$title}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="addProductForm" action="{{ route('storeKategori') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Kategori Produk</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function() {
        var table = $('#dtTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('getKategori') }}",
            columns: [{
                    data: 'no',
                    name: 'id'
                },
                {
                    data: 'nama',
                    name: 'nama'
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

<script type="text/javascript">
    $(document).ready(function() {
        $('#addProductForm').submit(function(e) {
            e.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: formData,
                success: function(response) {
                    $('#addModal').modal('hide');
                    console.log(response);
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        });
    });
</script>

@endsection