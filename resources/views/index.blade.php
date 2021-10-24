@extends('layouts.app')

@section('content')


<section  class="travel-box">



	<header class="header-index">
		
		<div class="search-form">

			
				<div class="tab bg-info menu-search" >
					<div class="row p-0">
						<div class="col-sm-4 col-md-4 col-lg-4 p-0 boder" >
							<button class="tablinks fs-3 " onclick="openCity(event, 'tour')" id="defaultOpen" ata-bs-toggle="tooltip" data-bs-placement="top" title="Tìm Kiếm Tour Du Lịch"><b>Tour</b></button>
						</div>
						<div class="col-sm-4 col-md-4 col-lg-4 p-0">
							<button class="tablinks fs-3" onclick="openCity(event, 'hotel')" id="defaultOpen" ata-bs-toggle="tooltip" data-bs-placement="left" title="Tìm Kiếm Khách Sạn" ><b>Hotel</b></button>
						</div>
						<div class="col-sm-4 col-md-4 col-lg-4 p-0">
							<button class="tablinks fs-3" onclick="openCity(event, 'info')" id="defaultOpen" ata-bs-toggle="tooltip" data-bs-placement="left" title="Tìm Thông Tin Địa Điểm"><b>Thông Tin Du Lịch</b></button>
						</div>
			
					</div>
					
			
				  </div>
				  
				  <div id="tour" class="tabcontent menu-search-tour pe-3 ps-3 ">
					<div class="container-fuild p-2 pt-5">
						
						<form action="">
							<h2 class="pb-2"><b>Địa Điểm Du Lịch</b></h2>
							<div class="row border input-search-tourmain me-3 ms-3   ">

							
								
									<div class="col-sm-1 col-md-1 col-lg-1 text-center p-2 icon-search-tour"> 
										<i class="fas fa-map-marker-alt fa-3x text-info icon-search-tour" ></i>
									</div>
										<div  class=" col-sm-11 col-md-11 col-lg-11  input-search-tour">
											
											<input type="text" class="form-control border-bottom" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập Địa Chỉ Tìm Kiếm">
											
										</div>
							
  
							</div>
							<div class="row border  me-3 ms-3 mt-3   ">

							
								
								<div class="col-sm-4 col-md-4 col-lg-4"> 
									s
								</div>
								<div  class=" col-sm-4 col-md-4 col-lg-4  ">
									s
								</div>
								<div  class=" col-sm-4 col-md-4 col-lg-4  ">
									ư
								</div>
						

						</div>


							<div class="row">
								<button class="btn btn-primary" type="submit"> Tìm Kiếm</button>
								
							</div>




						</form>

					</div>
				  </div>
				  
				  <div id="hotel" class="tabcontent">
					<h3>Paris</h3>
					<p>Paris is the capital of France.</p> 
				  </div>
				  <div id="info" class="tabcontent">
					<h3>Parisqqqqqqq</h3>
					<p>Paris is the capital of France.</p> 
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