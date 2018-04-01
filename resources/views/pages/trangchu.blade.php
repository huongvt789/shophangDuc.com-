@extends('layout.index')
@section('content')

<section id="slider" class="bg_w">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-3 hidden-sm hidden-xs" id="sidebar-menu">
	<div id="box-vertical-megamenus">
<div class="box-vertical-megamenus">
<h4 class="title">
<span class="btn-open-mobile home-page"><i class="fa fa-bars"></i></span>
<span class="title-menu">Danh mục sản phẩm</span>
</h4>
<div class="vertical-menu-content">
<ul class="vertical-menu-list">
	@foreach($theloai as $tl)

		<li class=" has-child">
			<a class="dropdown-toggle has-category parent " href="/do-gia-dung" title="Đồ gia dụng" target="_self">
				<img class="icon-menu" alt="Đồ gia dụng" src="sanpham{{$tl->id}}"><span class="">{{$tl->name}}/span>
			</a>
			<ul class="level1 biz_menu_child" role="menu">
				<!-- menu da cap -->
			</ul>
		</li>
	@endforeach
	<li class=" has-child">
		<a class="dropdown-toggle has-category parent " href="/thiet-bi-nha-bep" title="Thiết bị nhà bếp" target="_self">
			<img class="icon-menu" alt="Thiết bị nhà bếp" src="//bizweb.dktcdn.net/100/239/697/themes/571052/assets/s2.png?1516872566093"><span class="">Thiết bị nhà bếp</span>
		</a>
		<ul class="level1 biz_menu_child" role="menu">

			<li>
				<a href="/bep-tu-1" class="" title="Bếp từ">Bếp từ</a>

			</li>

			<li>
				<a href="/hut-mui" class="" title="Hút mùi">Hút mùi</a>

			</li>

			<li>
				<a href="/lo-vi-song" class="" title="Lò vi sóng">Lò vi sóng</a>

			</li>

			<li>
				<a href="/voi-sua-bat" class="" title="Vòi sửa bát">Vòi sửa bát</a>

			</li>

			<li>
				<a href="/chau-sua-bat" class="" title="Chậu sửa bát">Chậu sửa bát</a>

			</li>

			<li>
				<a href="/may-rua-bat" class="" title="Máy rửa bát">Máy rửa bát</a>

			</li>

			<li>
				<a href="/lo-nuong" class="" title="Lò nướng">Lò nướng</a>

			</li>

		</ul>
	</li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 slide-banner" id="slider-menu">
	<div class="owlSlider owl_design owl-carousel owl-theme owl-loaded">
	<div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1846px, 0px, 0px); transition: 0.8s; width: 2769px;"><div class="owl-item" style="width: 923px; margin-right: 0px;"><div class="item active insScroll">
			<a href="#">
				<img class="insImageload" src="//bizweb.dktcdn.net/100/239/697/themes/571052/assets/slider_item_1_image.jpg?1516872566093" alt="">
			</a>
		</div></div><div class="owl-item" style="width: 923px; margin-right: 0px;"><div class="item insScroll">
			<a href="#">
				<img class="insImageload" src="//bizweb.dktcdn.net/100/239/697/themes/571052/assets/slider_item_2_image.jpg?1516872566093" alt="Bộ nồi inox cao cấp Đức">
			</a>
		</div></div><div class="owl-item active" style="width: 923px; margin-right: 0px;"><div class="item insScroll">
			<a href="#">
				<img class="insImageload" src="//bizweb.dktcdn.net/100/239/697/themes/571052/assets/slider_item_3_image.jpg?1516872566093" alt="Mỹ phẩm châu Âu">
			</a>
		</div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style="">‹</div><div class="owl-next" style="">›</div></div><div class="owl-dots" style=""><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot active"><span></span></div></div></div></div>
	<div class="slider-thumb hidden-sm hidden-xs">
		<ul id="slider-thumb">
			<li class="">
				<div class="slider-image-thumb">
					<img src="//bizweb.dktcdn.net/100/239/697/themes/571052/assets/slider_thumb_1.jpg?1516872566093" alt="">
				</div>
				<a href="#">
					<div class="slider-detail">
						<span class="title-image">Shop Hàng Đức</span>
						<span class="description-image">Đồ gia dụng Đức và Châu Âu cao cấp</span>
					</div>
				</a>
			</li>

			<li class="">
				<div class="slider-image-thumb">
					<img src="//bizweb.dktcdn.net/100/239/697/themes/571052/assets/slider_thumb_2.jpg?1516872566093" alt="Bộ nồi inox cao cấp Đức">
				</div>
				<a href="#">
					<div class="slider-detail">
						<span class="title-image">Bộ nồi chảo cao cấp</span>
						<span class="description-image">Bộ nồi chảo cao cấp Hàng Đức</span>
					</div>
				</a>
			</li>


			<li class="active">
				<div class="slider-image-thumb">
					<img src="//bizweb.dktcdn.net/100/239/697/themes/571052/assets/slider_thumb_3.jpg?1516872566093" alt="Mỹ phẩm châu Âu">
				</div>
				<a href="#">
					<div class="slider-detail">
						<span class="title-image">Shop hàng Đức</span>
						<span class="description-image">Chuyên cung cấp các dòng mỹ phẩm cao cấp từ châu Âu</span>
					</div>
				</a>
			</li>
		</ul>
	</div>
</div>
</div>
</div>
</section>
<section id="home_block_1" class="home_block">
	<div class="container">
		<div class="main">
			<div class="title_chir">
				<h2>
					Đồ gia dụng
				</h2>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-12 banner_brand hidden-sm hidden-xs">
					<div class="brands text-center bg_w">
						<ul class="list clearfix">
							<li>
								<div class="effect_item insScroll">
									<a href="/noi-bo-noi-inox-cao-cap" title="Nồi, Bộ nồi inox cao cấp">
										<img class="insImageload" alt="" src="//bizweb.dktcdn.net/100/239/697/themes/571052/assets/brand_1_block_home_1.png?1516872566093">
										<p>
											Nồi, Bộ nồi inox...
										</p>
									</a>
								</div>
							</li>
							<li>
								<div class="effect_item insScroll">
									<a href="/noi-ap-suat" title="Nồi áp suất">
										<img class="insImageload" alt="" src="//bizweb.dktcdn.net/100/239/697/themes/571052/assets/brand_2_block_home_1.png?1516872566093">
										<p>
											Nồi áp suất
										</p>
									</a>
								</div>
							</li>
							<li>
								<div class="effect_item insScroll">
									<a href="/chao-cao-cap" title="Chảo cao cấp">
										<img class="insImageload" alt="" src="//bizweb.dktcdn.net/100/239/697/themes/571052/assets/brand_3_block_home_1.png?1516872566093">
										<p>
											Chảo cao cấp
										</p>
									</a>
								</div>
							</li>
							<li>
								<div class="effect_item insScroll">
									<a href="/dao-thia-dia-keo-thot" title="Dao, thìa, dĩa, kéo, thớt">
										<img class="insImageload" alt="" src="//bizweb.dktcdn.net/100/239/697/themes/571052/assets/brand_4_block_home_1.png?1516872566093">
										<p>
											Dao, thìa, dĩa, kéo,...
										</p>
									</a>
								</div>
							</li>
							<li>
								<div class="effect_item insScroll">
									<a href="/may-ep-may-xay" title="Máy ép, máy xay">
										<img class="insImageload" alt="" src="//bizweb.dktcdn.net/100/239/697/themes/571052/assets/brand_5_block_home_1.png?1516872566093">
										<p>
											Máy ép, máy xay
										</p>
									</a>
								</div>
							</li>
							<li>
								<div class="effect_item insScroll">
									<a href="/noi-chien-khong-dau" title="Nồi chiên không dầu">
										<img class="insImageload" alt="" src="//bizweb.dktcdn.net/100/239/697/themes/571052/assets/brand_6_block_home_1.png?1516872566093">
										<p>
											Nồi chiên không dầu
										</p>
									</a>
								</div>
							</li>
						</ul>
					</div>
					<div class="imgage_hover hidden-sm insScroll">
						<a href="#"><img class="insImageload" src="//bizweb.dktcdn.net/100/239/697/themes/571052/assets/banner_block_home_1.jpg?1516872566093"></a>
					</div>
				</div>
				<div class="col-md-9 col-sm-12 col-xs-12 product_in_block">
					<div class="block_product_list bg_w">
						<div class="product_tabs">
							<div class="visible-xs open_tabs">
								<a href="javascript:void(0);"><img src="//bizweb.dktcdn.net/100/239/697/themes/571052/assets/bars_right.png?1516872566093" alt="Open tabs"></a>
							</div>
							<!-- Nav tabs -->
							<ul class="nav nav-tabs text-right" role="tablist">
								<li role="presentation" class="active" data-url="/do-gia-dung"><a href="#chir-1-tab-1" aria-controls="chir-tab-1" role="tab" data-toggle="tab">Đồ gia dụng</a></li>
								<li role="presentation" data-url="/noi-bo-noi-inox-cao-cap"><a href="#chir-1-tab-2" aria-controls="chir-tab-2" role="tab" data-toggle="tab">Bộ nồi inox cao cấp</a></li>
								<li role="presentation" data-url="/noi-ap-suat"><a href="#chir-1-tab-3" aria-controls="chir-tab-3" role="tab" data-toggle="tab">Nồi áp suất</a></li>
								<li role="presentation" data-url="/chao-cao-cap"><a href="#chir-1-tab-4" aria-controls="chir-tab-4" role="tab" data-toggle="tab">Chảo cao cấp</a></li>
								<li role="presentation" data-url="/may-ep-may-xay"><a href="#chir-1-tab-5" aria-controls="chir-tab-5" role="tab" data-toggle="tab">Máy ép</a></li>

							</ul>

							<!-- Tab panes -->
							<div class="tab-content">

								<div role="tabpanel" class="tab-pane fade  in active" id="chir-1-tab-1">

									<div class="product_tabs_slide owl_design clearfix product_tabs_slide_first">


										<ul class="item">

											<li class="item_product tab_item">
				<div class="chir_loop loop_item insScroll">
					<div class="chir-img">

						<a href="/chao-tefal-sau-long-28cm" title="">

							<picture>
								<source srcset="//bizweb.dktcdn.net/thumb/medium/100/239/697/products/img-4558-jpg.jpg?v=1518062298820" media="(min-width: 768px) and (max-width: 991px)">
								<source srcset="//bizweb.dktcdn.net/thumb/medium/100/239/697/products/img-4558-jpg.jpg?v=1518062298820" media="(min-width: 480px) and (max-width: 767px)">
								<source srcset="//bizweb.dktcdn.net/thumb/compact/100/239/697/products/img-4558-jpg.jpg?v=1518062298820" media="(max-width: 479px)">
								<img srcset="//bizweb.dktcdn.net/thumb/compact/100/239/697/products/img-4558-jpg.jpg?v=1518062298820" alt="">
							</picture>

						</a>
						<div class="chi-action">
							<a href="javascript:void(0)" class="quick_views btn-quickview-1" data-alias="/chao-tefal-sau-long-28cm"><img src="//bizweb.dktcdn.net/100/239/697/themes/571052/assets/zoom_w.png?1516872566093" alt="Xem nhanh" title="Xem nhanh"></a>
							<a href="/chao-tefal-sau-long-28cm" class="view_product"><img src="//bizweb.dktcdn.net/100/239/697/themes/571052/assets/eye_w.png?1516872566093" alt="Xem chi tiết" title="Xem chi tiết"></a>

							<a href="javascript:void(0)" class="add-cart design_cart Addcart" data-variantid="15756729"><img src="//bizweb.dktcdn.net/100/239/697/themes/571052/assets/cart_w.png?1516872566093" alt="Thêm vào giỏ" title="Thêm vào giỏ"></a>

						</div>
					</div>
					<div class="product-detail clearfix">
						<h3 class="pro-name"><a href="/chao-tefal-sau-long-28cm" title="Chảo tefal sâu lòng 28cm">Chảo tefal sâu lòng 28cm </a></h3>

						<p class="pro-price">
							1.500.000₫

						</p>

						<p>Hàng: Hàng có sẵn</p>
						<div class="product_view_list">
							<ul>
								<li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
								<li><strong>Thương hiệu: </strong><span>chưa rõ</span></li>
								<li><strong>Mô tả ngắn: </strong>
									<span class="short-des">


										 Chảo sâu lòng 28 cm
				 Made in France

									</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
										</li>

					<li class="item_product tab_item">

				<div class="chir_loop loop_item insScroll">
					<div class="chir-img">


						<a href="/bo-dao-zwilling-7-mon" title="">

							<picture>
								<source srcset="//bizweb.dktcdn.net/thumb/medium/100/239/697/products/a2db4038-711a-4e43-96b8-642c672ddccf-4341-0000050abb8a6aaa-jpeg.jpg?v=1517408359280" media="(min-width: 768px) and (max-width: 991px)">
								<source srcset="//bizweb.dktcdn.net/thumb/medium/100/239/697/products/a2db4038-711a-4e43-96b8-642c672ddccf-4341-0000050abb8a6aaa-jpeg.jpg?v=1517408359280" media="(min-width: 480px) and (max-width: 767px)">
								<source srcset="//bizweb.dktcdn.net/thumb/compact/100/239/697/products/a2db4038-711a-4e43-96b8-642c672ddccf-4341-0000050abb8a6aaa-jpeg.jpg?v=1517408359280" media="(max-width: 479px)">
								<img srcset="//bizweb.dktcdn.net/thumb/compact/100/239/697/products/a2db4038-711a-4e43-96b8-642c672ddccf-4341-0000050abb8a6aaa-jpeg.jpg?v=1517408359280" alt="">
							</picture>

						</a>
						<div class="chi-action">
							<a href="javascript:void(0)" class="quick_views btn-quickview-1" data-alias="/bo-dao-zwilling-7-mon"><img src="//bizweb.dktcdn.net/100/239/697/themes/571052/assets/zoom_w.png?1516872566093" alt="Xem nhanh" title="Xem nhanh"></a>
							<a href="/bo-dao-zwilling-7-mon" class="view_product"><img src="//bizweb.dktcdn.net/100/239/697/themes/571052/assets/eye_w.png?1516872566093" alt="Xem chi tiết" title="Xem chi tiết"></a>

							<a href="javascript:void(0)" class="add-cart design_cart Addcart" data-variantid="15659860"><img src="//bizweb.dktcdn.net/100/239/697/themes/571052/assets/cart_w.png?1516872566093" alt="Thêm vào giỏ" title="Thêm vào giỏ"></a>

						</div>
					</div>
					<div class="product-detail clearfix">
						<h3 class="pro-name"><a href="/bo-dao-zwilling-7-mon" title="Bộ dao zwilling 7 món">Bộ dao zwilling 7 món </a></h3>

						<p class="pro-price">
							3.250.000₫

						</p>

						<p>Hàng: Hàng có sẵn</p>
						<div class="product_view_list">
							<ul>
								<li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
								<li><strong>Thương hiệu: </strong><span>chưa rõ</span></li>
								<li><strong>Mô tả ngắn: </strong>
									<span class="short-des">


										  Bộ dao Zwilling 7 món  là bộ dụng cụ hỗ trợ tối đa cho công việc nhà bếp của bạn thêm phần đơn giản và nhanh chóng.  Bộ dao  dụng cụ 7 món được làm từ chất liệu thép không gỉ, cứng chắc và sắc bén, cán cầm bọc nhựa êm ái và hạn chế trơn trượt. Đế gỗ đi kèm không chỉ đẹp mắt mà còn giúp bạn bảo quản các dụng cụ tốt hơn, có thể dùng như giá để sách hay máy tính bản, tiện lợi trong việc tra cứu công thức chế biến thức ăn.
				 bao gồm: 1 dao gọt rau củ, 01 dao đa năng, 01 dao thái thịt, 01 dao đầu bếp, 01 dao cắt bánh mì, 01 cây mài dao, 1 hộp gỗ đựng dao
									</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
					</li>


					</ul>
					<!-- begin foreach -->
					<ul class="item">

														<li class="item_product tab_item">
					<div class="chir_loop loop_item insScroll">
						<div class="chir-img">


							<a href="/binh-nuoc-wmf" title="">

								<picture>
									<source srcset="//bizweb.dktcdn.net/thumb/medium/100/239/697/products/b7b16875-13e3-426d-82c4-e5120b342d96-219-000000567a8b3eb0-jpeg.jpg?v=1517380153577" media="(min-width: 768px) and (max-width: 991px)">
									<source srcset="//bizweb.dktcdn.net/thumb/medium/100/239/697/products/b7b16875-13e3-426d-82c4-e5120b342d96-219-000000567a8b3eb0-jpeg.jpg?v=1517380153577" media="(min-width: 480px) and (max-width: 767px)">
									<source srcset="//bizweb.dktcdn.net/thumb/compact/100/239/697/products/b7b16875-13e3-426d-82c4-e5120b342d96-219-000000567a8b3eb0-jpeg.jpg?v=1517380153577" media="(max-width: 479px)">
									<img srcset="//bizweb.dktcdn.net/thumb/compact/100/239/697/products/b7b16875-13e3-426d-82c4-e5120b342d96-219-000000567a8b3eb0-jpeg.jpg?v=1517380153577" alt="">
								</picture>

							</a>
							<div class="chi-action">
								<a href="javascript:void(0)" class="quick_views btn-quickview-1" data-alias="/binh-nuoc-wmf"><img src="//bizweb.dktcdn.net/100/239/697/themes/571052/assets/zoom_w.png?1516872566093" alt="Xem nhanh" title="Xem nhanh"></a>
								<a href="/binh-nuoc-wmf" class="view_product"><img src="//bizweb.dktcdn.net/100/239/697/themes/571052/assets/eye_w.png?1516872566093" alt="Xem chi tiết" title="Xem chi tiết"></a>

								<a href="javascript:void(0)" class="add-cart design_cart Addcart" data-variantid="15653394"><img src="//bizweb.dktcdn.net/100/239/697/themes/571052/assets/cart_w.png?1516872566093" alt="Thêm vào giỏ" title="Thêm vào giỏ"></a>

							</div>
						</div>
						<div class="product-detail clearfix">
							<h3 class="pro-name"><a href="/binh-nuoc-wmf" title="Bình nước wmf">Bình nước wmf </a></h3>

							<p class="pro-price">
								1.900.000₫

							</p>

							<p>Hàng: Hàng có sẵn</p>
							<div class="product_view_list">
								<ul>
									<li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
									<li><strong>Thương hiệu: </strong><span>chưa rõ</span></li>
									<li><strong>Mô tả ngắn: </strong>
										<span class="short-des">


											 có tay cầm
					 dung tích : 1,5lit


										</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
						</li>

					<li class="item_product tab_item">

					<div class="chir_loop loop_item insScroll">
						<div class="chir-img">


							<a href="/binh-giu-nhiet-alfi-1-lit-1" title="">

								<picture>
									<source srcset="//bizweb.dktcdn.net/thumb/medium/100/239/697/products/img-4490-jpg.jpg?v=1517033608333" media="(min-width: 768px) and (max-width: 991px)">
									<source srcset="//bizweb.dktcdn.net/thumb/medium/100/239/697/products/img-4490-jpg.jpg?v=1517033608333" media="(min-width: 480px) and (max-width: 767px)">
									<source srcset="//bizweb.dktcdn.net/thumb/compact/100/239/697/products/img-4490-jpg.jpg?v=1517033608333" media="(max-width: 479px)">
									<img srcset="//bizweb.dktcdn.net/thumb/compact/100/239/697/products/img-4490-jpg.jpg?v=1517033608333" alt="">
								</picture>

							</a>
							<div class="chi-action">
								<a href="javascript:void(0)" class="quick_views btn-quickview-1" data-alias="/binh-giu-nhiet-alfi-1-lit-1"><img src="//bizweb.dktcdn.net/100/239/697/themes/571052/assets/zoom_w.png?1516872566093" alt="Xem nhanh" title="Xem nhanh"></a>
								<a href="/binh-giu-nhiet-alfi-1-lit-1" class="view_product"><img src="//bizweb.dktcdn.net/100/239/697/themes/571052/assets/eye_w.png?1516872566093" alt="Xem chi tiết" title="Xem chi tiết"></a>

								<a href="javascript:void(0)" class="add-cart design_cart Soldoutcart"><img src="//bizweb.dktcdn.net/100/239/697/themes/571052/assets/cart_w.png?1516872566093" alt="Liên hệ" title="Liên hệ"></a>

							</div>
						</div>
						<div class="product-detail clearfix">
							<h3 class="pro-name"><a href="/binh-giu-nhiet-alfi-1-lit-1" title="Bình giữ nhiệt alfi 1 lit">Bình giữ nhiệt alfi 1 lit </a></h3>

							<p class="pro-price">Liên hệ</p>

							<p>Hàng: Hàng có sẵn</p>
							<div class="product_view_list">
								<ul>
									<li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
									<li><strong>Thương hiệu: </strong><span>chưa rõ</span></li>
									<li><strong>Mô tả ngắn: </strong>
										<span class="short-des">


											 ĐẸP ĐẾN NGẤT MẤT THÔI!
					 Ai nhìn mấy bạn này mà không mê cho được ạ? Đẹp mê mẩn lòng người!
					 Bình giữ nhiệt Alfi made in Germany nhà em về đủ màu. Bình giữ nóng 12h, giữ lạnh 24h. Dùng mãi, dùng mãi mà vẫn như mới cứng vì lớp mạ siêu tốt, lúc nào cũng bóng nhẫy. Bạn này để trên bàn nước để rót nước pha trà mời khách thì tuyệt đẹp luôn ạ.
					 TEL:0904990000


										</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
					</li>
					</ul>
					<!-- end foreach -->
					<ul class="item">

						<li class="item_product tab_item">
					<div class="chir_loop loop_item insScroll">
						<div class="chir-img">


							<a href="/binh-nuoc-wmf" title="">

								<picture>
									<source srcset="//bizweb.dktcdn.net/thumb/medium/100/239/697/products/b7b16875-13e3-426d-82c4-e5120b342d96-219-000000567a8b3eb0-jpeg.jpg?v=1517380153577" media="(min-width: 768px) and (max-width: 991px)">
									<source srcset="//bizweb.dktcdn.net/thumb/medium/100/239/697/products/b7b16875-13e3-426d-82c4-e5120b342d96-219-000000567a8b3eb0-jpeg.jpg?v=1517380153577" media="(min-width: 480px) and (max-width: 767px)">
									<source srcset="//bizweb.dktcdn.net/thumb/compact/100/239/697/products/b7b16875-13e3-426d-82c4-e5120b342d96-219-000000567a8b3eb0-jpeg.jpg?v=1517380153577" media="(max-width: 479px)">
									<img srcset="//bizweb.dktcdn.net/thumb/compact/100/239/697/products/b7b16875-13e3-426d-82c4-e5120b342d96-219-000000567a8b3eb0-jpeg.jpg?v=1517380153577" alt="">
								</picture>

							</a>
							<div class="chi-action">
								<a href="javascript:void(0)" class="quick_views btn-quickview-1" data-alias="/binh-nuoc-wmf"><img src="//bizweb.dktcdn.net/100/239/697/themes/571052/assets/zoom_w.png?1516872566093" alt="Xem nhanh" title="Xem nhanh"></a>
								<a href="/binh-nuoc-wmf" class="view_product"><img src="//bizweb.dktcdn.net/100/239/697/themes/571052/assets/eye_w.png?1516872566093" alt="Xem chi tiết" title="Xem chi tiết"></a>

								<a href="javascript:void(0)" class="add-cart design_cart Addcart" data-variantid="15653394"><img src="//bizweb.dktcdn.net/100/239/697/themes/571052/assets/cart_w.png?1516872566093" alt="Thêm vào giỏ" title="Thêm vào giỏ"></a>

							</div>
						</div>
						<div class="product-detail clearfix">
							<h3 class="pro-name"><a href="/binh-nuoc-wmf" title="Bình nước wmf">Bình nước wmf </a></h3>

							<p class="pro-price">
								1.900.000₫

							</p>

							<p>Hàng: Hàng có sẵn</p>
							<div class="product_view_list">
								<ul>
									<li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
									<li><strong>Thương hiệu: </strong><span>chưa rõ</span></li>
									<li><strong>Mô tả ngắn: </strong>
										<span class="short-des">


											 có tay cầm
					 dung tích : 1,5lit


										</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
						</li>

					<li class="item_product tab_item">

					<div class="chir_loop loop_item insScroll">
						<div class="chir-img">


							<a href="/binh-giu-nhiet-alfi-1-lit-1" title="">

								<picture>
									<source srcset="//bizweb.dktcdn.net/thumb/medium/100/239/697/products/img-4490-jpg.jpg?v=1517033608333" media="(min-width: 768px) and (max-width: 991px)">
									<source srcset="//bizweb.dktcdn.net/thumb/medium/100/239/697/products/img-4490-jpg.jpg?v=1517033608333" media="(min-width: 480px) and (max-width: 767px)">
									<source srcset="//bizweb.dktcdn.net/thumb/compact/100/239/697/products/img-4490-jpg.jpg?v=1517033608333" media="(max-width: 479px)">
									<img srcset="//bizweb.dktcdn.net/thumb/compact/100/239/697/products/img-4490-jpg.jpg?v=1517033608333" alt="">
								</picture>

							</a>
							<div class="chi-action">
								<a href="javascript:void(0)" class="quick_views btn-quickview-1" data-alias="/binh-giu-nhiet-alfi-1-lit-1"><img src="//bizweb.dktcdn.net/100/239/697/themes/571052/assets/zoom_w.png?1516872566093" alt="Xem nhanh" title="Xem nhanh"></a>
								<a href="/binh-giu-nhiet-alfi-1-lit-1" class="view_product"><img src="//bizweb.dktcdn.net/100/239/697/themes/571052/assets/eye_w.png?1516872566093" alt="Xem chi tiết" title="Xem chi tiết"></a>

								<a href="javascript:void(0)" class="add-cart design_cart Soldoutcart"><img src="//bizweb.dktcdn.net/100/239/697/themes/571052/assets/cart_w.png?1516872566093" alt="Liên hệ" title="Liên hệ"></a>

							</div>
						</div>
						<div class="product-detail clearfix">
							<h3 class="pro-name"><a href="/binh-giu-nhiet-alfi-1-lit-1" title="Bình giữ nhiệt alfi 1 lit">Bình giữ nhiệt alfi 1 lit </a></h3>

							<p class="pro-price">Liên hệ</p>

							<p>Hàng: Hàng có sẵn</p>
							<div class="product_view_list">
								<ul>
									<li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
									<li><strong>Thương hiệu: </strong><span>chưa rõ</span></li>
									<li><strong>Mô tả ngắn: </strong>
										<span class="short-des">


											 ĐẸP ĐẾN NGẤT MẤT THÔI!
					 Ai nhìn mấy bạn này mà không mê cho được ạ? Đẹp mê mẩn lòng người!
					 Bình giữ nhiệt Alfi made in Germany nhà em về đủ màu. Bình giữ nóng 12h, giữ lạnh 24h. Dùng mãi, dùng mãi mà vẫn như mới cứng vì lớp mạ siêu tốt, lúc nào cũng bóng nhẫy. Bạn này để trên bàn nước để rót nước pha trà mời khách thì tuyệt đẹp luôn ạ.
					 TEL:0904990000


										</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
					</li>
					</ul>
					<ul class="item">

						<li class="item_product tab_item">
					<div class="chir_loop loop_item insScroll">
						<div class="chir-img">


							<a href="/binh-nuoc-wmf" title="">

								<picture>
									<source srcset="//bizweb.dktcdn.net/thumb/medium/100/239/697/products/b7b16875-13e3-426d-82c4-e5120b342d96-219-000000567a8b3eb0-jpeg.jpg?v=1517380153577" media="(min-width: 768px) and (max-width: 991px)">
									<source srcset="//bizweb.dktcdn.net/thumb/medium/100/239/697/products/b7b16875-13e3-426d-82c4-e5120b342d96-219-000000567a8b3eb0-jpeg.jpg?v=1517380153577" media="(min-width: 480px) and (max-width: 767px)">
									<source srcset="//bizweb.dktcdn.net/thumb/compact/100/239/697/products/b7b16875-13e3-426d-82c4-e5120b342d96-219-000000567a8b3eb0-jpeg.jpg?v=1517380153577" media="(max-width: 479px)">
									<img srcset="//bizweb.dktcdn.net/thumb/compact/100/239/697/products/b7b16875-13e3-426d-82c4-e5120b342d96-219-000000567a8b3eb0-jpeg.jpg?v=1517380153577" alt="">
								</picture>

							</a>
							<div class="chi-action">
								<a href="javascript:void(0)" class="quick_views btn-quickview-1" data-alias="/binh-nuoc-wmf"><img src="//bizweb.dktcdn.net/100/239/697/themes/571052/assets/zoom_w.png?1516872566093" alt="Xem nhanh" title="Xem nhanh"></a>
								<a href="/binh-nuoc-wmf" class="view_product"><img src="//bizweb.dktcdn.net/100/239/697/themes/571052/assets/eye_w.png?1516872566093" alt="Xem chi tiết" title="Xem chi tiết"></a>

								<a href="javascript:void(0)" class="add-cart design_cart Addcart" data-variantid="15653394"><img src="//bizweb.dktcdn.net/100/239/697/themes/571052/assets/cart_w.png?1516872566093" alt="Thêm vào giỏ" title="Thêm vào giỏ"></a>

							</div>
						</div>
						<div class="product-detail clearfix">
							<h3 class="pro-name"><a href="/binh-nuoc-wmf" title="Bình nước wmf">Bình nước wmf </a></h3>

							<p class="pro-price">
								1.900.000₫

							</p>

							<p>Hàng: Hàng có sẵn</p>
							<div class="product_view_list">
								<ul>
									<li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
									<li><strong>Thương hiệu: </strong><span>chưa rõ</span></li>
									<li><strong>Mô tả ngắn: </strong>
										<span class="short-des">


											 có tay cầm
					 dung tích : 1,5lit


										</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
						</li>

					<li class="item_product tab_item">

					<div class="chir_loop loop_item insScroll">
						<div class="chir-img">


							<a href="/binh-giu-nhiet-alfi-1-lit-1" title="">

								<picture>
									<source srcset="//bizweb.dktcdn.net/thumb/medium/100/239/697/products/img-4490-jpg.jpg?v=1517033608333" media="(min-width: 768px) and (max-width: 991px)">
									<source srcset="//bizweb.dktcdn.net/thumb/medium/100/239/697/products/img-4490-jpg.jpg?v=1517033608333" media="(min-width: 480px) and (max-width: 767px)">
									<source srcset="//bizweb.dktcdn.net/thumb/compact/100/239/697/products/img-4490-jpg.jpg?v=1517033608333" media="(max-width: 479px)">
									<img srcset="//bizweb.dktcdn.net/thumb/compact/100/239/697/products/img-4490-jpg.jpg?v=1517033608333" alt="">
								</picture>

							</a>
							<div class="chi-action">
								<a href="javascript:void(0)" class="quick_views btn-quickview-1" data-alias="/binh-giu-nhiet-alfi-1-lit-1"><img src="//bizweb.dktcdn.net/100/239/697/themes/571052/assets/zoom_w.png?1516872566093" alt="Xem nhanh" title="Xem nhanh"></a>
								<a href="/binh-giu-nhiet-alfi-1-lit-1" class="view_product"><img src="//bizweb.dktcdn.net/100/239/697/themes/571052/assets/eye_w.png?1516872566093" alt="Xem chi tiết" title="Xem chi tiết"></a>

								<a href="javascript:void(0)" class="add-cart design_cart Soldoutcart"><img src="//bizweb.dktcdn.net/100/239/697/themes/571052/assets/cart_w.png?1516872566093" alt="Liên hệ" title="Liên hệ"></a>

							</div>
						</div>
						<div class="product-detail clearfix">
							<h3 class="pro-name"><a href="/binh-giu-nhiet-alfi-1-lit-1" title="Bình giữ nhiệt alfi 1 lit">Bình giữ nhiệt alfi 1 lit </a></h3>

							<p class="pro-price">Liên hệ</p>

							<p>Hàng: Hàng có sẵn</p>
							<div class="product_view_list">
								<ul>
									<li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
									<li><strong>Thương hiệu: </strong><span>chưa rõ</span></li>
									<li><strong>Mô tả ngắn: </strong>
										<span class="short-des">


											 ĐẸP ĐẾN NGẤT MẤT THÔI!
					 Ai nhìn mấy bạn này mà không mê cho được ạ? Đẹp mê mẩn lòng người!
					 Bình giữ nhiệt Alfi made in Germany nhà em về đủ màu. Bình giữ nóng 12h, giữ lạnh 24h. Dùng mãi, dùng mãi mà vẫn như mới cứng vì lớp mạ siêu tốt, lúc nào cũng bóng nhẫy. Bạn này để trên bàn nước để rót nước pha trà mời khách thì tuyệt đẹp luôn ạ.
					 TEL:0904990000


										</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
					</li>
					</ul>
					<ul class="item">

														<li class="item_product tab_item">
					<div class="chir_loop loop_item insScroll">
						<div class="chir-img">


							<a href="/binh-nuoc-wmf" title="">

								<picture>
									<source srcset="//bizweb.dktcdn.net/thumb/medium/100/239/697/products/b7b16875-13e3-426d-82c4-e5120b342d96-219-000000567a8b3eb0-jpeg.jpg?v=1517380153577" media="(min-width: 768px) and (max-width: 991px)">
									<source srcset="//bizweb.dktcdn.net/thumb/medium/100/239/697/products/b7b16875-13e3-426d-82c4-e5120b342d96-219-000000567a8b3eb0-jpeg.jpg?v=1517380153577" media="(min-width: 480px) and (max-width: 767px)">
									<source srcset="//bizweb.dktcdn.net/thumb/compact/100/239/697/products/b7b16875-13e3-426d-82c4-e5120b342d96-219-000000567a8b3eb0-jpeg.jpg?v=1517380153577" media="(max-width: 479px)">
									<img srcset="//bizweb.dktcdn.net/thumb/compact/100/239/697/products/b7b16875-13e3-426d-82c4-e5120b342d96-219-000000567a8b3eb0-jpeg.jpg?v=1517380153577" alt="">
								</picture>

							</a>
							<div class="chi-action">
								<a href="javascript:void(0)" class="quick_views btn-quickview-1" data-alias="/binh-nuoc-wmf"><img src="//bizweb.dktcdn.net/100/239/697/themes/571052/assets/zoom_w.png?1516872566093" alt="Xem nhanh" title="Xem nhanh"></a>
								<a href="/binh-nuoc-wmf" class="view_product"><img src="//bizweb.dktcdn.net/100/239/697/themes/571052/assets/eye_w.png?1516872566093" alt="Xem chi tiết" title="Xem chi tiết"></a>

								<a href="javascript:void(0)" class="add-cart design_cart Addcart" data-variantid="15653394"><img src="//bizweb.dktcdn.net/100/239/697/themes/571052/assets/cart_w.png?1516872566093" alt="Thêm vào giỏ" title="Thêm vào giỏ"></a>

							</div>
						</div>
						<div class="product-detail clearfix">
							<h3 class="pro-name"><a href="/binh-nuoc-wmf" title="Bình nước wmf">Bình nước wmf </a></h3>

							<p class="pro-price">
								1.900.000₫

							</p>

							<p>Hàng: Hàng có sẵn</p>
							<div class="product_view_list">
								<ul>
									<li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
									<li><strong>Thương hiệu: </strong><span>chưa rõ</span></li>
									<li><strong>Mô tả ngắn: </strong>
										<span class="short-des">


											 có tay cầm
					 dung tích : 1,5lit


										</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
						</li>

					<li class="item_product tab_item">

					<div class="chir_loop loop_item insScroll">
						<div class="chir-img">


							<a href="/binh-giu-nhiet-alfi-1-lit-1" title="">

								<picture>
									<source srcset="//bizweb.dktcdn.net/thumb/medium/100/239/697/products/img-4490-jpg.jpg?v=1517033608333" media="(min-width: 768px) and (max-width: 991px)">
									<source srcset="//bizweb.dktcdn.net/thumb/medium/100/239/697/products/img-4490-jpg.jpg?v=1517033608333" media="(min-width: 480px) and (max-width: 767px)">
									<source srcset="//bizweb.dktcdn.net/thumb/compact/100/239/697/products/img-4490-jpg.jpg?v=1517033608333" media="(max-width: 479px)">
									<img srcset="//bizweb.dktcdn.net/thumb/compact/100/239/697/products/img-4490-jpg.jpg?v=1517033608333" alt="">
								</picture>

							</a>
							<div class="chi-action">
								<a href="javascript:void(0)" class="quick_views btn-quickview-1" data-alias="/binh-giu-nhiet-alfi-1-lit-1"><img src="//bizweb.dktcdn.net/100/239/697/themes/571052/assets/zoom_w.png?1516872566093" alt="Xem nhanh" title="Xem nhanh"></a>
								<a href="/binh-giu-nhiet-alfi-1-lit-1" class="view_product"><img src="//bizweb.dktcdn.net/100/239/697/themes/571052/assets/eye_w.png?1516872566093" alt="Xem chi tiết" title="Xem chi tiết"></a>

								<a href="javascript:void(0)" class="add-cart design_cart Soldoutcart"><img src="//bizweb.dktcdn.net/100/239/697/themes/571052/assets/cart_w.png?1516872566093" alt="Liên hệ" title="Liên hệ"></a>

							</div>
						</div>
						<div class="product-detail clearfix">
							<h3 class="pro-name"><a href="/binh-giu-nhiet-alfi-1-lit-1" title="Bình giữ nhiệt alfi 1 lit">Bình giữ nhiệt alfi 1 lit </a></h3>

							<p class="pro-price">Liên hệ</p>

							<p>Hàng: Hàng có sẵn</p>
							<div class="product_view_list">
								<ul>
									<li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
									<li><strong>Thương hiệu: </strong><span>chưa rõ</span></li>
									<li><strong>Mô tả ngắn: </strong>
										<span class="short-des">


											 ĐẸP ĐẾN NGẤT MẤT THÔI!
					 Ai nhìn mấy bạn này mà không mê cho được ạ? Đẹp mê mẩn lòng người!
					 Bình giữ nhiệt Alfi made in Germany nhà em về đủ màu. Bình giữ nóng 12h, giữ lạnh 24h. Dùng mãi, dùng mãi mà vẫn như mới cứng vì lớp mạ siêu tốt, lúc nào cũng bóng nhẫy. Bạn này để trên bàn nước để rót nước pha trà mời khách thì tuyệt đẹp luôn ạ.
					 TEL:0904990000


										</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
					</li>
					</ul>
			</div>
		</div>
	</div>
</section>
@endsection
