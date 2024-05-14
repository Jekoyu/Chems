@section('content')
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Daftar Pengguna Baru</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="category.html">Login/Daftar</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--Login Box Area-->
<section class="login_box_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login_box_img">
                    <img class="img-fluid" src="img/login.jpg" alt="">
                    <div class="hover">
                        <h4>Chems Batik</h4>
                        <p>Pusat toko batik kimia</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login_form_inner">
                    <h3>Pendaftaran</h3>
                    <form class="row login_form" action="{{route('register')}}" method="post" id="contactForm" novalidate="novalidate">
                        @csrf
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nama Lengkap" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Lengkap'">
                        </div>
                        @error('name')
                        <div>{{ $message }}</div>
                        @enderror
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Lengkap'">
                        </div>
                        @error('email')
                        <div>{{ $message }}</div>
                        @enderror
                        <div class="col-md-12 form-group">
                            <input type="number" class="form-control" id="hp" name="hp" placeholder="Nomor Telepon" onfocus="this.placeholder = ''" onblur="this.placeholder = 'HP'">
                        </div>
                        @error('hp')
                        <div>{{ $message }}</div>
                        @enderror
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat'">
                        </div>
                        @error('alamat')
                        <div>{{ $message }}</div>
                        @enderror
                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                        </div>
                        @error('password')
                        <div>{{ $message }}</div>
                        @enderror
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="primary-btn">Daftar Sekarang</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Login Box -->
@endsection