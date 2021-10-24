@extends('layouts.app')

@section('content')


<section  class="travel-box">



	<header class="header-index">
		
		<div class="search-form">

			
				<div class="tab bg-info menu-search" >
					<div class="row p-0">
						<div class="col-sm-4 col-md-4 col-lg-4 p-0 boder" >
							<button class="tablinks fs-4 " onclick="openCity(event, 'tour')" id="defaultOpen" ata-bs-toggle="tooltip" data-bs-placement="top" title="Tìm Kiếm Tour Du Lịch"><b>Tour</b></button>
						</div>
						<div class="col-sm-4 col-md-4 col-lg-4 p-0">
							<button class="tablinks fs-4" onclick="openCity(event, 'hotel')" id="defaultOpen" ata-bs-toggle="tooltip" data-bs-placement="left" title="Tìm Kiếm Khách Sạn" ><b>Hotel</b></button>
						</div>
						<div class="col-sm-4 col-md-4 col-lg-4 p-0">
							<button class="tablinks fs-4" onclick="openCity(event, 'info')" id="defaultOpen" ata-bs-toggle="tooltip" data-bs-placement="left" title="Tìm Thông Tin Địa Điểm"><b>Thông Tin Địa Điểm</b></button>
						</div>
			
					</div>
					
			
				  </div>
				  
				  <div id="tour" class="tabcontent menu-search-tour pe-3 ps-3 ">
					<div class="container-fuild p-2 pt-5">
						
						<form action="demo">
							<h2 class="pb-2"><b>Địa Điểm Du Lịch</b></h2>
							<div class="row border input-search-tourmain me-3 ms-3   ">

							
								
									<div class="col-sm-1 col-md-1 col-lg-1 text-center p-3 icon-search-tour"> 
										<i class="fas fa-map-marker-alt fa-2x text-info icon-search-tour" ></i>
									</div>
										<div  class=" col-sm-11 col-md-11 col-lg-11  input-search-tour">
											
											<input required type="text" class="form-control border-bottom" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập Địa Điểm Du Lịch Tìm Kiếm">
											
										</div>
							
  
							</div>
							<div class="row   me-3 ms-3 mt-3  p-0  mb-3 ">

							
								
								<div class="col-sm-4 col-md-4 col-lg-4 p-0  datepick" style="height: 50px; "> 
									
									
										<input type="date" class="form-control border-bottom inputdate " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập Địa Điểm Du Lịch Tìm Kiếm" value='<?php echo date('Y-m-d');?>' min="<?php echo date('Y-m-d');?>">
									

								</div>

								<div class="col-sm-4 col-md-4 col-lg-4 p-0 border addressgo " style="height: 50px; "> 
									
								
									<select class="float-right"> 
										<option value=""> Địa Điểm Xuất Phát</option>
										<option value=""> Địa Điểm Xuất Phát</option>
										<option value=""> Địa Điểm Xuất Phát</option>
										<option value=""> Địa Điểm Xuất Phát</option>
										<option value=""> Địa Điểm Xuất Phát</option>
										<option value=""> Địa Điểm Xuất Phát</option>
									</select>

								</div>
								<div  class=" col-sm-4 col-md-4 col-lg-3 buttontour  text-center ">
									<button class="btn btn-info text-light"><b>Tìm Kiếm</b></button>
								</div>
								<div  class=" col-sm-4 col-md-4 col-lg-1 p-2  buttontour quesion  text-center " style="flex: 1;">
									<i class="fas fa-question-circle fa-2x "></i>
								</div>
						

						</div>


							<div class="row ps-3">
								
								
								<div  class=" col-sm-4 col-md-4 col-lg-4 pt-1 ">
									<h5>Chia sẻ niềm vui cùng bạn</h5>
								</div>
								<div  class=" col-sm-4 col-md-4 col-lg-4 ">
									<button class="btn btn-primary"><b>Đặt tour riêng</b></button>
								</div>
								
							</div>




						</form>

					</div>
				  </div>
				  
				  <div id="hotel" class="tabcontent menu-search-tour pe-3 ps-3 ">
					<div class="container-fuild p-2 pt-5">
						
						<form action="demo">
							<h2 class="pb-2"><b>Địa Điểm Tìm Khách Sạn</b></h2>
							<div class="row border input-search-tourmain me-3 ms-3   ">

							
								
									<div class="col-sm-1 col-md-1 col-lg-1 text-center p-2 icon-search-tour"> 
										<i class="fas fa-map-marker-alt fa-3x text-info icon-search-tour" ></i>
									</div>
										<div  class=" col-sm-11 col-md-11 col-lg-11  input-search-tour">
											
											<input required type="text" class="form-control border-bottom" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập Địa Điểm hHoặc Tên Khách Sạn">
											
										</div>
							
  
							</div>
							<div class="row ps-5 pt-3">
								Từ Ngày -> Đến Ngày
							</div>
							<div class="row   me-3 ms-3 mt-3  p-0  ">

							
								
								<div class="col-sm-4 col-md-4 col-lg-3 p-0   mb-3 " style="height: 50px; "> 
									
									
										<input type="date" class="form-control border-bottom inputdate " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập Địa Điểm Du Lịch Tìm Kiếm" value='<?php echo date('Y-m-d');?>' min="<?php echo date('Y-m-d');?>">
									

								</div>

								<div class="col-sm-4 col-md-4 col-lg-3 p-0  mb-3 " style="height: 50px; "> 
									
									
									<input type="date" class="form-control border-bottom inputdate " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập Địa Điểm Du Lịch Tìm Kiếm" value='<?php echo date('Y-m-d');?>' min="<?php echo date('Y-m-d');?>">
								

							</div>
								<div  class=" col-sm-4 col-md-4 col-lg-3  mb-3 addressgo peoplehotel1  border  ">
									<select class="float-right"> 
										<option value="">  Người trên 15</option>

										@for ($i = 0; $i < 20; $i++)
										<option value=""> {{$i}} </option>
										@endfor
										
									</select>
								</div>
								<div  class=" col-sm-4 col-md-4 col-lg-3  mb-3 addressgo peoplehotel2  border  ">
									<select class="float-right"> 
										<option value="">  Người Dưới 15</option>

										@for ($i = 0; $i < 20; $i++)
										<option value=""> {{$i}} </option>
										@endfor
										
									</select>
								</div>
								
						

						</div>


							<div class="row ps-3">
								
								
								<div  class=" col-sm-12 col-md-12 col-lg-4 pt-2 ">
									<h5>Chia sẻ niềm vui cùng bạn</h5>
								</div>
								<div  class=" col-sm-12 col-md-12 col-lg-8 pt-1 text-center  buttonhotelmain ">
									<button class="btn btn-info text-light buttonhotel pe-5 ps-5"><b>Tìm Kiếm</b></button>
								</div>
							
								
							</div>




						</form>

					</div>
				  </div>
				  <div id="info" class="tabcontent menu-search-tour pe-3 ps-3 ">
					

					<div class="container-fuild p-2 pt-5">
						
						<form action="demo">
							<h2 class="pb-2"><b>Bạn Có Thể Tìm Kiếm Thông Tin Địa Điểm </b></h2>
							<div class="row border input-search-tourmain me-3 ms-3   ">

							
								
									<div class="col-sm-1 col-md-1 col-lg-1 text-center p-2 icon-search-tour"> 
										<i class="fas fa-map-marker-alt fa-3x text-info icon-search-tour" ></i>
									</div>
										<div  class=" col-sm-11 col-md-11 col-lg-11  input-search-tour">
											
											<input required type="text" class="form-control border-bottom" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập Địa Điểm Du Lịch ">
											
										</div>
							
  
							</div>

							<div class="row p-3 m-3 " >
								<button class="btn btn-info text-light"><b>Tìm Kiếm</b></button>
							</div>
						


							




						</form>

					</div>

				  </div>
			
			   
			   </div>

	

	</header>



	<main>


		<div class="container-fuild main-container mt-5">


			<div class="container-fuild">
				<div class="row text-center text-info">

					<div class="col-sm-6 col-md-6 col-lg-3">
						<i class="fas fa-check-circle fa-3x"></i>
						<h4>Tour du lịch chọn lọc - chất lượng</h4>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-3">
						<i class="fas fa-heart fa-3x"></i>
						<h4>Hệ thống khách sạn uy tín  tiện nghi</h4>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-3">
						<i class="fas fa-money-check-alt fa-3x"></i>
						<h4>Đảm bảo giá tốt nhất</h4>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-3">
						<i class="fas fa-ad fa-3x"></i>
						<h4>Đội ngũ nhân viên tư vấn tận tình</h4>
					</div>
				</div>
			</div>

				<div class="container-fuild">

					<div id="demo" class="carousel slide" data-bs-ride="carousel">

						<!-- Indicators/dots -->
						<div class="carousel-indicators">
						  <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
						  <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
						  <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
						</div>
						
						<!-- The slideshow/carousel -->
						<div class="carousel-inner">
						  <div class="carousel-item active">
							<img src="{{asset('images/baner/fusion-pq-1140x250.jpg')}}" alt="Los Angeles" class="d-block" style="width:100%">
							<div class="carousel-caption">
							  <h3>Nhanh Tay Khoẻ Bỏ Lỡ</h3>
							 
							</div>
						  </div>
						  <div class="carousel-item">
							<img src="{{asset('images/baner/fusion-camranh-1140x250.jpg')}}" alt="Los Angeles" class="d-block" style="width:100%">
							<div class="carousel-caption">
							  <h3>Giá Cả Phải Chăng</h3>
							 
							</div> 
						  </div>
						  <div class="carousel-item">
							<img src="{{asset('images/baner/movenpick-pq-1140x250.jpg')}}" alt="Los Angeles" class="d-block" style="width:100%">
							<div class="carousel-caption">
							  <h3>Luôn Luôn Bên Bạn</h3>
							
							</div>  
						  </div>
						</div>
						
						<!-- Left and right controls/icons -->
						<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
						  <span class="carousel-control-prev-icon"></span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
						  <span class="carousel-control-next-icon"></span>
						</button>
					  </div>
				</div>




				<div class="container-fuild mb-5">
					<div class="row  ">
						<h1><b>Điểm Đến Ưa Thích Trong Nước</b></h1>
						<h3 class="pt-3 text-secondary">Khám Phá Việt Nam</h3>
					</div>
			
					<div class="row mt-3 ">
						<div class="col-sm-12 col-md-6 col-lg-8 me-3  ">
							<div class="row text-light   content" style="background-image: url({{asset('images/phuquoc.jpg')}});height:250px; list-style:none; ">
								{{-- <img src="{{asset('images/maxresdefault.jpg')}}"   style="width:100%;height: 400px;"> --}}
								<div class="text-bottom">
									<h1>Phú Quốc</h1>
									<h4 >192 Khách Sạn</h4>
								</div>
							  
							</div>
							<div class="row mt-3 ">
								<div class="col-sm-12 col-md-6 col-lg-6 me-3 mb-3   content text-light  " style="background-image: url({{asset('images/sapa4.jpg')}});height:250px; list-style:none; ">
								   <div class="text-bottom">
									   <h1>Sapa</h1>
									   <h4 >192 Khách Sạn</h4>
								   </div>
								</div>
								<div class="col-sm-12 col-md-6 col-lg-6 mb-3  content text-light " style="background-image: url({{asset('images/hoabinh.jpg')}});height:250px; list-style:none;  flex:1;">
									<div class="text-bottom">
										<h1>Hoà Bình</h1>
										<h4 >192 Khách Sạn</h4>
									</div>
								</div>
							</div>
						</div>
			
						<div class="col-sm-12 col-md-6 col-lg-4 mb-3 content text-light" style="background-image: url({{asset('images/nhatrang1.jpg')}});height:516px; list-style:none;  flex:1;  background-repeat: no-repeat;background-position: fixed;background-size: cover;">
							<div class="text-bottom">
								<h1>Nha Trang</h1>
								<h4>192 Khách Sạn</h4>
							</div>
						</div>
					</div>
			
					<div class="row ">
						<div class="col-sm-12 col-md-6 col-lg-4 content text-light" style="background-image: url({{asset('images/vndn3.jpg')}});height:516px; list-style:none;    background-repeat: no-repeat;background-position: fixed;background-size: cover;">
							<div class="text-bottom">
								<h1>Đà Nẵng</h1>
								<h4>192 Khách Sạn</h4>
							</div>
						</div>
			
						<div class="col-sm-12 col-md-6 col-lg-8 ms-3 hidden-sm " style="flex:1;">
							<div class="row text-light   content" style="background-image: url({{asset('images/vinhalong.jpg')}});height:250px; list-style:none; ">
								{{-- <img src="{{asset('images/maxresdefault.jpg')}}"   style="width:100%;height: 400px;"> --}}
								<div class="text-bottom">
									<h1>Vinh Hạ Long</h1>
									<h4 >192 Khách Sạn</h4>
								</div>
							  
							</div>
							<div class="row mt-3 ">
								<div class="col-sm-12 col-md-6 col-lg-6 me-3 mb-3  content text-light  " style="background-image: url({{asset('images/hn.jpg')}});height:250px; list-style:none; ">
								   <div class="text-bottom">
									   <h1>Hà Nội</h1>
									   <h4 >192 Khách Sạn</h4>
								   </div>
								</div>
								<div class="col-sm-12 col-md-6 col-lg-6 mb-3 content text-light " style="background-image: url({{asset('images/hue.jpg')}});height:250px; list-style:none;  flex:1;">
									<div class="text-bottom">
										<h1>Huế</h1>
										<h4 >192 Khách Sạn</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>



				{{-- maincontainer --}}


				<div class="container-fuild p-0">


					<div class="row p-0">
						<h1><b>Các Tour Hấp Dẫn Nhất</b></h1>
						<p class="h5 ps-4 text-secondary">Giảm Giá cực lớn - dành riêng cho bạn</p>
					</div>

					@for ($i = 0; $i < 3; $i++)

					<div class="row mt-5 text-info">

						<div class="col-sm-12 col-md-6 col-lg-4 pt-2  onetour border  shadow">

							<div class="hover-zoom">
								<img src="{{asset('images/phuquocp1.jpg')}}" alt="" width="100%" >
							</div>
							<div class="content-tour p-3">
								<h4>Tour phú quốc 1N : vi vu 5 đảo,cáp treo hòn thơm</h4>

								<h4 class="text-warning"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> <font class="text-dark">|10 đánh giá</font></h4>

								<ul class="text-success">
									<li>Cano 5 đảo</li>
									<li>Cáp Treo hòn thơm</li>
									<li>Tặng Bộ ảnh free</li>
								</ul>

								<h4 class="float-right text-primary">1.050.000 Vnd</h4>
								<button class="btn btn-primary"><b>Đặt Ngay</b></button>

							</div>

						</div>
						<div class="col-sm-12 col-md-6 col-lg-4 pt-2 onetour border  shadow">

							<div class="hover-zoom">
								<img src="{{asset('images/phuquocp1.jpg')}}" alt="" width="100%" >
							</div>
							<div class="content-tour p-3">
								<h4>Tour phú quốc 1N : vi vu 5 đảo,cáp treo hòn thơm</h4>

								<h4 class="text-warning"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> <font class="text-dark">|10 đánh giá</font></h4>

								<ul class="text-success">
									<li>Cano 5 đảo</li>
									<li>Cáp Treo hòn thơm</li>
									<li>Tặng Bộ ảnh free</li>
								</ul>

								<h4 class="float-right text-primary">1.050.000 Vnd</h4>
								<button class="btn btn-primary"><b>Đặt Ngay</b></button>

							</div>

						</div>
						<div class="col-sm-12 col-md-6 col-lg-4 pt-2 onetour border shadow" >

							<div class="hover-zoom">
								<img src="{{asset('images/phuquocp1.jpg')}}" alt="" width="100%" >
							</div>
							<div class="content-tour p-3">
								<h4>Tour phú quốc 1N : vi vu 5 đảo,cáp treo hòn thơm</h4>

								<h4 class="text-warning"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> <font class="text-dark">|10 đánh giá</font></h4>

								<ul class="text-success">
									<li>Cano 5 đảo</li>
									<li>Cáp Treo hòn thơm</li>
									<li>Tặng Bộ ảnh free</li>
								</ul>

								<h4 class="float-right text-primary">1.050.000 Vnd</h4>
								<button class="btn btn-primary"><b>Đặt Ngay</b></button>

							</div>

						</div>
						

				</div>
						
					@endfor
			
		</div>
	

	</main>
		
	<script>
        function openCity(evt, cityName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " active";
        }
        
        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
        </script>
@endsection