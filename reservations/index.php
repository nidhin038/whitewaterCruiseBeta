<?php
    include_once("../includes/header.php")
?>

<div class="container breadcrub">
	    <div>
			<a class="homebtn left" href="<?php echo BASE_URL; ?>"></a>
			<div class="left">
				<ul class="bcrumbs">
					<li>/</li>				
					<li><a href="#" class="active">Reservation</a></li>					
				</ul>				
			</div>
			<a class="backbtn right" href="#"></a>
		</div>
		<div class="clearfix"></div>
		<div class="brlines"></div>
	</div>	

	<!-- CONTENT -->
	<div class="container">

		
		<div class="container mt25 offset-0">
			
			
			<!-- LEFT CONTENT -->
			<div class="col-md-8 pagecontainer2 offset-0">
				
			<form name="reservationForm" id="reservationForm">
				<div class="padding30 grey">
					<span class="size16px bold dark left">Who's traveling? </span>
					<!-- <div class="roundstep active right">1</div> -->
					<div class="clearfix"></div>
					<div class="line4"></div>
					Please tell us who will be checking in.<br/><br/>
					
					<!-- <div class="col-md-4 textright">
						<div class="margtop15"><span class="dark">Contact Name:</span><span class="red">*</span></div>
					</div> -->
					<div class="col-md-8">
						<span class="size12">First and Last Name*</span>
						<input type="text" class="form-control " name="guestName" id="guestName" placeholder="">
					</div>
					<div class="col-md-4 textleft margtop15">
					</div>
					<div class="clearfix"></div>
					
					<br/>
					<div class="col-md-8 textleft">
						<span class="size12">Phone Number with country code*</span>	
						<input type="text" class="form-control" name="phone" id="phone" placeholder="">
					</div>
					<div class="clearfix"></div>

					<br/>
					<div class="col-md-8">
					<span class="size12">Email Address *</span>	
						<input type="text" class="form-control" name="email" id="email" placeholder="">
					</div>
					<div class="clearfix"></div>
					<br/>
					<div class="col-md-4">
						<span class="size12">Checkin Date *</span>
						<input type="text" class="form-control mySelectCalendar" name="checkin" id="datepicker" placeholder="">
						
					</div>
					<div class="col-md-4">
						<span class="size12">Checkout Date</span>
						<input type="text" class="form-control mySelectCalendar" name="checkout" id="datepicker2" placeholder="">
					</div>
					<div class="clearfix"></div>
					<br/>
					<div class="col-md-8">
					<span class="size12">Category</span>	
						<select class="form-control mySelectBoxClass" name="category" id="category">
						  <option value="" selected>--Select Category--</option>
						  <option value="Luxury">Luxury houseboat</option>
						  <option value="Premium">Premium houseboat</option>
						  <option value="Delux">Delux houseboat</option>
						  <option value="Honeymoon">Honeymoon Package</option>
						  <option value="Kerala">Kerala Package</option>
						</select>
					</div>
					<div class="clearfix"></div>
					<br/>

					<div class="col-md-3">
						<span class="size12">No of Adults</span>
						<input type="number" class="form-control" name="adults" id="adults" placeholder="">
					</div>
					<div class="col-md-3">
						<span class="size12">No of Kids (6 to 12 years)</span>
						<input type="number" class="form-control" name="abovesix" id="abovesix" placeholder="">
					</div>
					<div class="col-md-3">
						<span class="size12">No of Kids (0 to 5 years)</span>
						<input type="number" class="form-control" name="belowsix" id="belowsix" placeholder="">
					</div>
					<div class="clearfix"></div>
					<br/>
					
					<div class="col-md-8">
						<span class="size12">Remarks</span>
						<textarea class="form-control" name="remarks" name="remarks" id="remarks"></textarea>
					</div>
					
					<br/>
					<br/>

					<div class="clearfix"></div>
					<div class="line4"></div>		
					
					<div class="alert alert-info">
					Important information about your booking:<br/>
					<p class="size12">Your booking is not confirmed yet. Our team will reach you to assist you more soon after your reservation is created.</p>
					</div>		
					By submitting this booking I acknowledge that I have read and accept the <a href="#" class="clblue">rules & 
					restrictions</a> <a href="#" class="clblue">terms & conditions</a> , and <a href="#" class="clblue">privacy policy</a>.	<br/>		
					
					<button type="button" class="bluebtn margtop20" id="createReservation">Submit</button>	
					<div class="clearfix"></div>
				</br>
					<div class="alert alert-danger" id="reservationError" style="display:none;">
					Mandatory fields missing<br/>
					<p class="size12">Please fill in all the mandatory fields indicated by asterisks (*)</p>
					</div>
			
				</div>
			</form>
			</div>
			<!-- END OF LEFT CONTENT -->			
			
			<!-- RIGHT CONTENT -->
			<div class="col-md-4" >

			<div class="pagecontainer2 needassistancebox">
					<div class="cpadding1">
						<span class="icon-help"></span>
						<h3 class="opensans">Need Assistance?</h3>
						<p class="size14 grey">Our team is at your service to help you with your booking issues or answer any related questions from 8 am to 10pm</p>
						<p class="opensans size20 lblue xslim">+91-9447112255</p>
					</div>
				</div><br/>
				
				<br/>
				
				<div class="pagecontainer2 paymentbox grey">
					
					
					<div class="hpadding30 margtop30">
						<table class="table table-bordered margbottom20">
							<tr>
								<td>Peak Season</td>
								<td class="center green bold">20th Dec - 15th Jan</td>
							</tr>
							<tr>
								<td>High Season</td>
								<td class="center green bold">1st Oct - 31st Mar</td>
							</tr>
							<tr>
								<td>Off Season </td>
								<td class="center green bold">1st April - 30th Sept</td>
							</tr>
							<tr>
								<td colspan=2>Peak Season rates will be 25% more than high season.</td>
							</tr>
						</table>
					</div>	
					<div class="line3"></div>


				</div><br/>
				
				
				
				<br/>
			
			</div>
			<!-- END OF RIGHT CONTENT -->
			
			
		</div>
		
		
	</div>
	<!-- END OF CONTENT -->		
			
<?php
	include_once("../includes/footer.php")
?>

<script src="reservations.js"></script>