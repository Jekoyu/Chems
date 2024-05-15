@section('content')
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Konfirmasi Pesanan</h1>
                <nav class="d-flex align-items-center">
                    <a href="{{route('/'}}">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="category.html">Konfirmasi Produk</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Order Details Area =================-->
<section class="order_details section_gap">
    <div class="container">
        <h3 class="title_confirmation">Terimakasih. Pesanan anda telah di terima.</h3>
        <div class="row order_d_inner">
            <div class="col-lg-6">
                <div class="details_item">
                    <h4>Informasi Pemesanan</h4>
                    <ul class="list">
                        <li><a href="#"><span>Order number</span> : 60235</a></li>
                        <li><a href="#"><span>Date</span> : Yogyakarta</a></li>
                        <li><a href="#"><span>Total</span> : Rp. 900.000</a></li>
                        <li><a href="#"><span>Metode Pembayaran</span> : Check payments</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="details_item">
                    <h4>Tagihan Pemesanan</h4>
                    <ul class="list">
                        <li><a href="#"><span>Jln</span> : 56/8</a></li>
                        <li><a href="#"><span>Kota</span> : Yogyakarta</a></li>
                        <li><a href="#"><span>Negara</span> : Indonesia</a></li>
                        <li><a href="#"><span>Kode Pos </span> : 36952</a></li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="order_details_table">
            <h2>Order Details</h2>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <p>Batik Matematika</p>
                            </td>
                            <td>
                                <h5>x 02</h5>
                            </td>
                            <td>
                                <p>Rp. 150.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Batik Kimia</p>
                            </td>
                            <td>
                                <h5>x 02</h5>
                            </td>
                            <td>
                                <p>Rp. 150.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Batik Rumus Fisika</p>
                            </td>
                            <td>
                                <h5>x 02</h5>
                            </td>
                            <td>
                                <p>Rp. 150.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>Subtotal</h4>
                            </td>
                            <td>
                                <h5></h5>
                            </td>
                            <td>
                                <p>Rp. 900.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>Shipping</h4>
                            </td>
                            <td>
                                <h5></h5>
                            </td>
                            <td>
                                <p>Flat rate: Rp. 5.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>Total</h4>
                            </td>
                            <td>
                                <h5></h5>
                            </td>
                            <td>
                                <p>Rp. 905.000</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!--================End Order Details Area =================-->
@endsection