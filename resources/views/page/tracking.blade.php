@section('content')
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Pelacakan pesanan</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="category.html">Kategori Mode</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Tracking Box Area =================-->
<section class="tracking_box_area section_gap">
    <div class="container">
        <div class="tracking_box_inner">
            <p>Untuk melacak pesanan Anda, silakan masukkan ID Pesanan Anda pada kotak di bawah dan tekan tombol "Lacak". Ini
                diberikan kepada Anda pada tanda terima Anda dan dalam email konfirmasi yang seharusnya Anda terima.</p>
            <form class="row tracking_form" action="#" method="post" novalidate="novalidate">
                <div class="col-md-12 form-group">
                    <input type="text" class="form-control" id="order" name="order" placeholder="ID Pemesanan " onfocus="this.placeholder = ''" onblur="this.placeholder = 'ID Pemesanan '">
                </div>
                <div class="col-md-12 form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Alamat Email " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat Email'">
                </div>
                <div class="col-md-12 form-group">
                    <button type="submit" value="submit" class="primary-btn">Lacak Pesanan </button>
                </div>
            </form>
        </div>
    </div>
</section>
<!--================End Tracking Box Area =================-->
@endsection