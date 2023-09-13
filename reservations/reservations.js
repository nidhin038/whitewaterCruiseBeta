$( "#createReservation" ).click(function() {
    let formData = $("#reservationForm").serialize();
    if(!$("#guestName").val() || !$("#email").val() || !$("#phone").val() || !$("#datepicker").val()){
        $("#reservationError").show();
        setTimeout(()=>{$("#reservationError").hide()},10000);
        return false;
    }
    $("#overlay").fadeIn(300);
    $.ajax({
        url: baseUrl+"reservations/controller/reservations.php",
        method:"post",
        data: formData
      }).done(function() {
        $("#overlay").fadeOut(300);
        $('#reservationForm').trigger("reset");
      });
  });