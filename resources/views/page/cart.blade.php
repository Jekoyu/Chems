 @section('content')
 <!-- Start Banner Area -->
 <section class="banner-area organic-breadcrumb">
     <div class="container">
         <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
             <div class="col-first">
                 <h1>Keranjang Produk</h1>
                 <nav class="d-flex align-items-center">
                     <a href="{{route('/'}}">Home<span class="lnr lnr-arrow-right"></span></a>
                     <a href="category.html">Keranjang</a>
                 </nav>
             </div>
         </div>
     </div>
 </section>
 <!-- End Banner Area -->
 <!--================Cart Area =================-->
 <section class="cart_area">
     <div class="container">
         <div class="cart_inner">
             <div class="table-responsive">
                 <table class="table">
                     <thead>
                         <tr>
                             <th scope="col">Produk</th>
                             <th scope="col">Harga</th>
                             <th scope="col">Kualitas</th>
                             <th scope="col">Total</th>
                         </tr>
                     </thead>
                     <tbody>
                         <tr>
                             <td>
                                 <div class="media">
                                     <div class="d-flex">
                                         <img src="img/cart2.jpg" alt="" style="width:150px;height:160px;">
                                     </div>
                                     <div class="media-body">
                                         <p>Batik fisika</p>
                                     </div>
                                 </div>
                             </td>
                             <td>
                                 <h5>Rp.150.000</h5>
                             </td>
                             <td>
                                 <div class="product_count">
                                     <input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
                                     <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                     <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp > 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                                 </div>
                             </td>
                             <td>
                                 <h5>Rp.150.000</h5>
                             </td>
                         </tr>
                         <tr>
                             <td>
                                 <div class="media">
                                     <div class="d-flex">
                                         <img src="img/cart1.jpg" alt="" style="width:150px;height:150px;">
                                     </div>
                                     <div class="media-body">
                                         <p>Struktur kimia</p>
                                     </div>
                                 </div>
                             </td>
                             <td>
                                 <h5>Rp.150.000</h5>
                             </td>
                             <td>
                                 <div class="product_count">
                                     <input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
                                     <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                     <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp > 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                                 </div>
                             </td>
                             <td>
                                 <h5>Rp.150.000</h5>
                             </td>
                         </tr>
                         <tr>
                             <td>
                                 <div class="media">
                                     <div class="d-flex">
                                         <img src="img/cart.jpg" alt="" style="width:150px;height:150px;"">
                                        </div>
                                        <div class=" media-body">
                                         <p>Batik Virus</p>

                                     </div>
                                 </div>
                             </td>
                             <td>
                                 <h5>Rp.150.000</h5>
                             </td>
                             <td>
                                 <div class="product_count">
                                     <input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
                                     <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                     <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp > 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                                 </div>
                             </td>
                             <td>
                                 <h5>150.000</h5>
                             </td>
                         </tr>
                         <tr class="bottom_button">
                             <td>
                                 <a class="gray_btn" href="#">Perbaharui Keranjang</a>
                             </td>
                             <td>

                             </td>
                             <td>

                             </td>
                             <td>
                                 <div class="cupon_text d-flex align-items-center">
                                     <input type="text" placeholder="Coupon Code">
                                     <a class="primary-btn" href="#">Terapakan</a>

                                 </div>
                             </td>
                         </tr>
                         <tr>
                             <td>

                             </td>
                             <td>

                             </td>
                             <td>
                                 <h5>Subtotal</h5>
                             </td>
                             <td>
                                 <h5>RP.450.000</h5>
                             </td>
                         </tr>
                         <tr class="shipping_area">
                             <td>

                             </td>
                             <td>

                             </td>
                             <td>
                                 <h5>Pengiriman </h5>
                             </td>
                             <td>
                                 <div class="shipping_box">
                                     <ul class="list">
                                         <li><a href="#">Tarif Tetap:Rp.5.000</a></li>
                                         <li><a href="#">Gratis Pegiriman</a></li>
                                         <li><a href="#">Tarif Tetap:Rp.10.000</a></li>
                                         <li class="active"><a href="#">Pengiriman Lokal:Rp.12.000</a></li>
                                     </ul>
                                     <h6>Calculate Shipping <i class="fa fa-caret-down" aria-hidden="true"></i></h6>
                                     <select class="shipping_select">
                                         <option value="1">Wonogiri</option>
                                         <option value="2">Solo</option>
                                         <option value="4">Bantul</option>
                                     </select>

                                     <input type="text" placeholder="Postcode/Zipcode">
                                     <a class="gray_btn" href="#">Perbaharui</a>
                                 </div>
                             </td>
                         </tr>
                         <tr class="out_button_area">
                             <td>

                             </td>
                             <td>

                             </td>
                             <td>

                             </td>
                             <td>
                                 <div class="checkout_btn_inner d-flex align-items-center">
                                     <a class="gray_btn" href="#">Lanjutkan Belanja</a>
                                     <a class="primary-btn" href="checkout.html">Proses Ke checkout</a>
                                 </div>
                             </td>
                         </tr>
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
 </section>
 <!--================End Cart Area =================-->
 @endsection