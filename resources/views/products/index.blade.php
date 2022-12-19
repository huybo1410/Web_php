@extends('layouts.app')


@section('title', 'Product')
@section('content')

       
  
      <div class="title-wrapper">
        <div class="container"><div class="container-inner">
          <h1><span>SAM SUNG</span> CATEGORY</h1>
          <em>Over 100 Items are available here</em>
        </div></div>
      </div>
  
      <div class="main">
        <div class="container">
          <ul class="breadcrumb">
              <li><a href="index.html">Trang chủ</a></li>             
              <li class="active">Sản phẩm</li>
          </ul>
          <!-- BEGIN SIDEBAR & CONTENT -->
          <div class="row margin-bottom-40">
            <!-- BEGIN SIDEBAR -->
            <div class="sidebar col-md-3 col-sm-5">
              <ul class="list-group margin-bottom-25 sidebar-menu">
                <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Ladies</a></li>
                <li class="list-group-item clearfix dropdown active">
                  <a href="javascript:void(0);" class="collapsed">
                    <i class="fa fa-angle-right"></i>
                    Mens
                    
                  </a>
                  <ul class="dropdown-menu" style="display:block;">
                    <li class="list-group-item dropdown clearfix active">
                      <a href="javascript:void(0);" class="collapsed"><i class="fa fa-angle-right"></i> Shoes </a>
                        <ul class="dropdown-menu" style="display:block;">
                          <li class="list-group-item dropdown clearfix">
                            <a href="javascript:void(0);"><i class="fa fa-angle-right"></i> Classic </a>
                            <ul class="dropdown-menu">
                              <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Classic 1</a></li>
                              <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Classic 2</a></li>
                            </ul>
                          </li>
                          <li class="list-group-item dropdown clearfix active">
                            <a href="javascript:void(0);" class="collapsed"><i class="fa fa-angle-right"></i> Sport  </a>
                            <ul class="dropdown-menu" style="display:block;">
                              <li class="active"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Sport 1</a></li>
                              <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Sport 2</a></li>
                            </ul>
                          </li>
                        </ul>
                    </li>
                    <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Trainers</a></li>
                    <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Jeans</a></li>
                    <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Chinos</a></li>
                    <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> T-Shirts</a></li>
                  </ul>
                </li>
                <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Kids</a></li>
                <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Accessories</a></li>
                <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Sports</a></li>
                <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Brands</a></li>
                <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Electronics</a></li>
                <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Home & Garden</a></li>
                <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Custom Link</a></li>
              </ul>
  
              <div class="sidebar-filter margin-bottom-25">
                <h2>Filter</h2>
                <h3>Availability</h3>
                <div class="checkbox-list">
                  <label><input type="checkbox"> Not Available (3)</label>
                  <label><input type="checkbox"> In Stock (26)</label>
                </div>
  
                <h3>Price</h3>
                <p>
                  <label for="amount">Range:</label>
                  <input type="text" id="amount" style="border:0; color:#f6931f; font-weight:bold;">
                </p>
                <div id="slider-range"></div>
              </div>
  
              <div class="sidebar-products clearfix">
                
              </div>
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="col-md-9 col-sm-7">
              <div class="row list-view-sorting clearfix">
                <div class="col-md-2 col-sm-2 list-view">
                  <a href="javascript:;"><i class="fa fa-th-large"></i></a>
                  <a href="javascript:;"><i class="fa fa-th-list"></i></a>
                </div>
                <div class="col-md-10 col-sm-10">
                  <div class="pull-right">
                    <label class="control-label">Show:</label>
                    <select class="form-control input-sm">
                      <option value="#?limit=24" selected="selected">24</option>
                      <option value="#?limit=25">25</option>
                      <option value="#?limit=50">50</option>
                      <option value="#?limit=75">75</option>
                      <option value="#?limit=100">100</option>
                    </select>
                  </div>
                  <div class="pull-right">
                    <label class="control-label">Sắp xếp&nbsp;theo:</label>
                    <select class="form-control input-sm">
                      <option value="#?sort=p.sort_order&amp;order=ASC" selected="selected">Mặc định</option>
                      <option value="#?sort=pd.name&amp;order=ASC">Bảng chữ cái (A - Z)</option>
                      <option value="#?sort=pd.name&amp;order=DESC">Bảng chữ cái (Z - A)</option>
                      <option value="#?sort=p.price&amp;order=ASC">Giá (Thấp &gt; Cao)</option>
                      <option value="#?sort=p.price&amp;order=DESC">Giá (Cao &gt; Thấp)</option>
                      
                    </select>
                  </div>
                </div>
              </div>
              <!-- BEGIN PRODUCT LIST -->
              <div class="row product-list">
                @foreach($product as $products)

                <!-- PRODUCT ITEM START -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="product-item">
                      <div class="pi-img-wrapper">
                        <img src="{{asset('images/'. $products->image)}}" class="img-responsive" alt="Berry Lace Dress">
                        <div>
                          <a href="{{asset('images/'. $products->image)}}" class="btn btn-default fancybox-button">Zoom</a>
                          <a href="{{route('chitietsanpham',$products->id)}}" class="btn btn-default fancybox-fast-view">View</a>
                        </div>
                      </div>
                      <h3><a href="shop-item.html">{{ $products->name }}</a></h3>
                      <div class="pi-price">{{ number_format($products->price) }}</div>
                      <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                    </div>
                  </div>
                  <!-- PRODUCT ITEM END -->

                @endforeach
                
                
                
              </div>
             
              
              <!-- BEGIN PAGINATOR -->
              <div class="row">
                <div class="col-md-4 col-sm-4 items-info">Items 1 to 9 of 10 total</div>
                <div class="col-md-8 col-sm-8">
                  <ul class="pagination pull-right">
                    <li><a href="javascript:;">&laquo;</a></li>
                    <li><a href="javascript:;">1</a></li>
                    <li><span>2</span></li>
                    <li><a href="javascript:;">3</a></li>
                    <li><a href="javascript:;">4</a></li>
                    <li><a href="javascript:;">5</a></li>
                    <li><a href="javascript:;">&raquo;</a></li>
                  </ul>
                </div>
              </div>
              <!-- END PAGINATOR -->
            </div>
            <!-- END CONTENT -->
          </div>
          <!-- END SIDEBAR & CONTENT -->
        </div>
      </div>
  
      <!-- BEGIN BRANDS -->
      <div class="brands">
        <div class="container">
              <div class="owl-carousel owl-carousel6-brands">
                <a href="shop-product-list.html"><img src="assets/pages/img/brands/canon.jpg" alt="canon" title="canon"></a>
                <a href="shop-product-list.html"><img src="assets/pages/img/brands/esprit.jpg" alt="esprit" title="esprit"></a>
                <a href="shop-product-list.html"><img src="assets/pages/img/brands/gap.jpg" alt="gap" title="gap"></a>
                <a href="shop-product-list.html"><img src="assets/pages/img/brands/next.jpg" alt="next" title="next"></a>
                <a href="shop-product-list.html"><img src="assets/pages/img/brands/puma.jpg" alt="puma" title="puma"></a>
                <a href="shop-product-list.html"><img src="assets/pages/img/brands/zara.jpg" alt="zara" title="zara"></a>
                <a href="shop-product-list.html"><img src="assets/pages/img/brands/canon.jpg" alt="canon" title="canon"></a>
                <a href="shop-product-list.html"><img src="assets/pages/img/brands/esprit.jpg" alt="esprit" title="esprit"></a>
                <a href="shop-product-list.html"><img src="assets/pages/img/brands/gap.jpg" alt="gap" title="gap"></a>
                <a href="shop-product-list.html"><img src="assets/pages/img/brands/next.jpg" alt="next" title="next"></a>
                <a href="shop-product-list.html"><img src="assets/pages/img/brands/puma.jpg" alt="puma" title="puma"></a>
                <a href="shop-product-list.html"><img src="assets/pages/img/brands/zara.jpg" alt="zara" title="zara"></a>
              </div>
          </div>
      </div>
      <!-- END BRANDS -->
  
      <!-- BEGIN STEPS -->
      <div class="steps-block steps-block-red">
        <div class="container">
          <div class="row">
            <div class="col-md-4 steps-block-col">
              <i class="fa fa-truck"></i>
              <div>
                <h2>Free shipping</h2>
                <em>Express delivery withing 3 days</em>
              </div>
              <span>&nbsp;</span>
            </div>
            <div class="col-md-4 steps-block-col">
              <i class="fa fa-gift"></i>
              <div>
                <h2>Daily Gifts</h2>
                <em>3 Gifts daily for lucky customers</em>
              </div>
              <span>&nbsp;</span>
            </div>
            <div class="col-md-4 steps-block-col">
              <i class="fa fa-phone"></i>
              <div>
                <h2>477 505 8877</h2>
                <em>24/7 customer care available</em>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END STEPS -->

@endsection

    
   