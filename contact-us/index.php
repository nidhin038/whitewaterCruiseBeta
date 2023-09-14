<?php
    include_once("../includes/header.php");
?>
 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>
<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
	 <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>
<style>
#map { height: 180px; }
	</style>

<div id="dajy" class="mtslide sliderbg fixed cstyle11">	
	<div id="map" style="height: 900px;"></div>
</div>
		

	<!-- WRAP -->
	<div class="wrap cstyle03">
		
		<div class="container mt-200 z-index100">		
		  <div class="row">
			<div class="col-md-12">
				<div class="bs-example bs-example-tabs cstyle04">
				
					<div class="tab-content">

						<div class="col-md-4">
						<form action="#">
							<span class="opensans size24 slim">Contact</span>
							<input type="text" placeholder="Name" class="form-control logpadding margtop10">
							<input type="text" placeholder="Phone" class="form-control logpadding margtop20">
							<input type="text" placeholder="E-mail" class="form-control logpadding margtop20">
						</div>
						<div class="col-md-4">
							<textarea rows="9" class="form-control margtop10"></textarea>
						</div>
						<div class="col-md-4 opensans grey">
							Address:<br/>
							<span class="dark">
								AMC/22/182 Krishnanjana,Thyparambil<br/>
								Mannam Karayogam Road, Avalukunnu.PO<br/>
								Alleppey.688006, Kerala ,India<br/>
							</span>
							<br/>
							Phone<br/>
							<p class="opensans size20 lblue xslim">+91-9447112255 / +919495952255 +91-477-2232255</p>
							Email<br/>
							<a href="mailto:info@whitewatercruise.com" class="green2">info@whitewatercruise.com</a>
							<br>
							<a href="mailto:whitewatercruise@gmail.com" class="green2">whitewatercruise@gmail.com</a>
						</div>
					</div>
					
					<div class="searchbg3">
						<button type="submit" class="btn-search right mr20">Send Email</button>
						</form>
					</div>
						
				</div>
			</div>
		  </div>
		</div>
		

		
		<div class="lastminutecontact lcfix">
			<div class="container lmc">	
				<img src="images/rating-4.png" alt=""/><br/>
				LAST MINUTE: <b>Barcelona</b> - 2 nights - Flight+4* Hotel, Dep 27h Aug from $209/person<br/>
				<form action="details.html" >
					<button class="btn iosbtn" type="submit">Read more</button>
				</form>
			</div>
		</div>	
	</div>
	<!-- END OF WRAP -->


<script>
	var map = L.map('map').setView([9.51222, 76.35408], 16);
	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; OpenStreetMap contributors'
  }).addTo(map);
  

//   map.scrollWheelZoom.disable();
  var marker = L.marker([9.5122, 76.3540]).addTo(map);
  marker.bindPopup("WhiteWater Cruise").openPopup();

</script>
	
<?php
    include_once("../includes/footer.php")
?>