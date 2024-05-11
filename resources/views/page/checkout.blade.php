@section('content')
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Checkout</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="single-product.html">Checkout</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Checkout Area =================-->
<section class="checkout_area section_gap">
    <div class="container">
        <div class="returning_customer">
            <div class="check_title">
                <h2>Pelanggan Kembali? <a href="#">Klik di sini untuk masuk</a></h2>
            </div>
            <p>Jika Anda pernah berbelanja dengan kami sebelumnya, silakan masukkan detail Anda pada kotak di bawah. Jika Anda baru
                pelanggan, silakan lanjutkan ke bagian Penagihan & Pengiriman.</p>
            <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                <div class="col-md-6 form-group p_star">
                    <input type="text" class="form-control" id="name" name="name">
                    <span class="placeholder" data-placeholder="Username or Email"></span>
                </div>
                <div class="col-md-6 form-group p_star">
                    <input type="password" class="form-control" id="password" name="password">
                    <span class="placeholder" data-placeholder="Password"></span>
                </div>
                <div class="col-md-12 form-group">
                    <button type="submit" value="submit" class="primary-btn">Masuk</button>
                    <div class="creat_account">
                        <input type="checkbox" id="f-option" name="selector">
                        <label for="f-option">Ingatkan saya</label>
                    </div>
                    <a class="lost_pass" href="#">Lupa password?</a>
                </div>
            </form>
        </div>
        <div class="cupon_area">
            <div class="check_title">
                <h2> punya Kupon? <a href="#">Klik di sini untuk memasukkan kode Anda</a></h2>
            </div>
            <input type="text" placeholder="Gunakan kode kupon">
            <a class="tp_btn" href="#">Gunakan Kupon</a>
        </div>
        <div class="billing_details">
            <div class="row">
                <div class="col-lg-8">
                    <h3>Rincian Penagihan</h3>
                    <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="Nama" name="Depan">
                            <span class="placeholder" data-placeholder="nama depan"></span>
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="nama" name="belakang">
                            <span class="placeholder" data-placeholder="Nama Belakang"></span>
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="company" name="Perusahaan" placeholder="Nama Perusahaan">
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="number" name="nomor">
                            <span class="placeholder" data-placeholder="Nomor Hp"></span>
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="email" name="compemailany">
                            <span class="placeholder" data-placeholder="Alamat Email"></span>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <select class="country_select">
                                <option value="1">Wonogiri</option>
                                <option value="2">Solo</option>
                                <option value="4">Bantul</option>
                                <option value="4">Lombok</option>
                            </select>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="add1" name="add1">
                            <span class="placeholder" data-placeholder="Alamat 01"></span>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="add2" name="add2">
                            <span class="placeholder" data-placeholder="Alamat  02"></span>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="city" name="city">
                            <span class="placeholder" data-placeholder="Kota"></span>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <select class="country_select">
                                <option value="1">Derah</option </select>
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="zip" name="zip" placeholder="Kode Pos">
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="creat_account">
                                <input type="checkbox" id="f-option2" name="selector">
                                <label for="f-option2">Buat Akun?</label>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="creat_account">
                                <h3>Rincian Pengiriman</h3>
                                <input type="checkbox" id="f-option3" name="selector">
                                <label for="f-option3">Kirim Ke alamat lain?</label>
                            </div>
                            <textarea class="form-control" name="message" id="message" rows="1" placeholder="Catatan Pesanan"></textarea>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="order_box">
                        <h2>PesananMu</h2>
                        <ul class="list">
                            <li><a href="#">Product <span>Total</span></a></li>
                            <li><a href="#">Batik Matematika <span class="middle">x 02</span> <span class="last">Rp.150.000</span></a></li>
                            <li><a href="#">Batik Kimia <span class="middle">x 02</span> <span class="last">Rp.150.000</span></a></li>
                            <li><a href="#">Batik Rumus Fisika <span class="middle">x 02</span> <span class="last">Rp.150.000</span></a></li>
                        </ul>
                        <ul class="list list_2">
                            <li><a href="#">Subtotal <span>Rp.900.000</span></a></li>
                            <li><a href="#">Shipping <span>Flat rate: Rp.5,000</span></a></li>
                            <li><a href="#">Total <span>Rp.905.000</span></a></li>
                        </ul>
                        <div class="payment_item">
                            <div class="radion_btn">
                                <input type="radio" id="f-option5" name="selector">
                                <label for="f-option5">Periksa Pembayaran</label>
                                <div class="check"></div>
                            </div>
                            <p>Silakan kirim cek ke Nama Toko, Jalan Toko, Kota Toko, Negara Bagian / Kabupaten Toko,
                                Simpan Kode Pos.</p>
                        </div>
                        <div class="payment_item active">
                            <div class="radion_btn">
                                <input type="radio" id="f-option6" name="selector">
                                <label for="f-option6">Paypal </label>
                                <img src="img/product/card.jpg" alt="">
                                <div class="check"></div>
                            </div>
                            <p>Bayar melalui PayPal; Anda dapat membayar dengan kartu kredit Anda jika Anda tidak memiliki PayPal
                                akun.</p>
                        </div>
                        <div class="creat_account">
                            <input type="checkbox" id="f-option4" name="selector">
                            <label for="f-option4">Saya telah membaca dan menerima </label>
                            <a href="#">Syarat & Ketentuan*</a>
                        </div>
                        <a class="primary-btn" href="#">Lanjutkan ke Paypal</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Checkout Area =================-->
@endsection