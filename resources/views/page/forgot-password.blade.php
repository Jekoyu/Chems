@section('content')
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Lupa Katasandi</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="category.html">Login/Daftar</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Login Box Area =================-->
<section class="login_box_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login_box_img">
                    <img class="img-fluid" src="img/login.jpg" alt="">

                </div>
            </div>
            <div class="col-lg-6">
                <div class="login_form_inner">
                    <h3>Lupa kata sandi?</h3>
                    <h8>Masukkan nomor telepon atau email yang telah diverifikasi.
                        Kami akan mengirimkan kode verifikasi untuk mengatur ulang password Anda.</h8>
                    <form class="row login_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nomor telepon/email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nomor telepon/email'">
                        </div>

                        <div class="col-md-12 form-group">
                        </div>
                        <div class="col-md-12 form-group">
                            <button type="button" onclick="location.href='login.html'" value="submit" class="primary-btn">Lanjutkan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Login Box Area =================-->
@endsection