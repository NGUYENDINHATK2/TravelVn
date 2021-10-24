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

							
								
									<div class="col-sm-1 col-md-1 col-lg-1 text-center p-2 icon-search-tour"> 
										<i class="fas fa-map-marker-alt fa-3x text-info icon-search-tour" ></i>
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