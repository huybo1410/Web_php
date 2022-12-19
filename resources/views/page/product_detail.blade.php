@extends('layouts.app')



@section('content')

<div class="main">
  <div class="container">
    <ul class="breadcrumb">
        <li><a href="index.html">Trang chủ</a></li>
        <li><a href="">Sản phẩm</a></li>
        <li class="active">{{$product->name}}</li>
    </ul>
    <!-- BEGIN SIDEBAR & CONTENT -->
    <div class="row margin-bottom-40">
      <!-- BEGIN SIDEBAR -->
      <div class="sidebar col-md-3 col-sm-5">
        <ul class="list-group margin-bottom-25 sidebar-menu">
          <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Ladies</a></li>
          <li class="list-group-item clearfix dropdown active">
            <a href="shop-product-list.html" class="collapsed">
              <i class="fa fa-angle-right"></i>
              Mens
              
            </a>
            <ul class="dropdown-menu" style="display:block;">
              <li class="list-group-item dropdown clearfix active">
                <a href="shop-product-list.html" class="collapsed"><i class="fa fa-angle-right"></i> Shoes </a>
                  <ul class="dropdown-menu" style="display:block;">
                    <li class="list-group-item dropdown clearfix">
                      <a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Classic </a>
                      <ul class="dropdown-menu">
                        <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Classic 1</a></li>
                        <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Classic 2</a></li>
                      </ul>
                    </li>
                    <li class="list-group-item dropdown clearfix active">
                      <a href="shop-product-list.html" class="collapsed"><i class="fa fa-angle-right"></i> Sport  </a>
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
          
      </ul>

        <div class="sidebar-products clearfix">
          
        </div>
      </div>
      <!-- END SIDEBAR -->

      <!-- BEGIN CONTENT -->
      <div class="col-md-9 col-sm-7">
        <div class="product-page">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <div class="product-main-image">
                <img src="images/{{$product->image}}" alt="Cool green dress with red bell" class="img-responsive" data-BigImgsrc="images/{{$product->image}}">
              </div>
              <div class="product-other-images">
                <a href="assets/pages/img/products/model3.jpg" class="fancybox-button" rel="photos-lib"><img alt="Berry Lace Dress" src="assets/pages/img/products/model3.jpg"></a>
                <a href="assets/pages/img/products/model4.jpg" class="fancybox-button" rel="photos-lib"><img alt="Berry Lace Dress" src="assets/pages/img/products/model4.jpg"></a>
                <a href="assets/pages/img/products/model5.jpg" class="fancybox-button" rel="photos-lib"><img alt="Berry Lace Dress" src="assets/pages/img/products/model5.jpg"></a>
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <h1>{{$product->name}}</h1>
              <div class="price-availability-block clearfix">
                <div class="price">
                  <div class="pi-price">{{ number_format($product->price) }}</div>
                </div>
                <div class="availability">
                  Availability: <strong>In Stock</strong>
                </div>
              </div>
              <div class="description">
                <p>{{$product->description}}</p>
              </div>
              
              <div class="product-page-cart">
                <div class="product-quantity">
                    <input id="product-quantity" type="text" value="1" readonly class="form-control input-sm">
                </div>
                <button class="btn btn-primary" type="submit">Add to cart</button>
              </div>
              
              
            </div>

            <div class="product-page-content">
              <ul id="myTab" class="nav nav-tabs">
                <li><a href="#Description" data-toggle="tab">Description</a></li>
                <li><a href="#Information" data-toggle="tab">Information</a></li>
                
              </ul>
              <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade" id="Description">
                  <p>Lorem ipsum dolor ut sit ame dolore  adipiscing elit, sed sit nonumy nibh sed euismod laoreet dolore magna aliquarm erat sit volutpat Nostrud duis molestie at dolore. Lorem ipsum dolor ut sit ame dolore  adipiscing elit, sed sit nonumy nibh sed euismod laoreet dolore magna aliquarm erat sit volutpat Nostrud duis molestie at dolore. Lorem ipsum dolor ut sit ame dolore  adipiscing elit, sed sit nonumy nibh sed euismod laoreet dolore magna aliquarm erat sit volutpat Nostrud duis molestie at dolore. </p>
                </div>
                <div class="tab-pane fade in active" id="Information">
                  <table class="datasheet">
                    <tr>
                      <th colspan="2">Additional features</th>
                    </tr>
                    <tr>
                      <td class="datasheet-features-type">Value 1</td>
                      <td>21 cm</td>
                    </tr>
                    <tr>
                      <td class="datasheet-features-type">Value 2</td>
                      <td>700 gr.</td>
                    </tr>
                    <tr>
                      <td class="datasheet-features-type">Value 3</td>
                      <td>10 person</td>
                    </tr>
                    <tr>
                      <td class="datasheet-features-type">Value 4</td>
                      <td>14 cm</td>
                    </tr>
                    <tr>
                      <td class="datasheet-features-type">Value 5</td>
                      <td>plastic</td>
                    </tr>
                  </table>
                </div>
                
              </div>
            </div>

            <div class="sticker sticker-sale"></div>
          </div>
        </div>
      </div>
      <!-- END CONTENT -->
    </div>
    <!-- END SIDEBAR & CONTENT -->


@endsection
