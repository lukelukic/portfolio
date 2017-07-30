$(document).ready(function() {
  document.getElementById("mSubmit").onclick = function(){
  var firstName = document.getElementById("mFirstName").value;
  var phoneNumber = document.getElementById("mPhoneNumber").value;
  var email = document.getElementById("mEmail").value;
  var message = document.getElementById("mMessage").value;
  var fidbek = document.getElementById("feedback");
  $.ajax({
    url: 'mail',
    type: 'POST',
    data: {
      mFirstName: firstName,
      mPhone: phoneNumber,
      mEmail: email,
      mMessage: message,
      mailSubmit: "true"
    }
  })
  .done(function(data) {

  $("#feedback").html(data);
    document.getElementById("mFirstName").value = "";
    document.getElementById("mPhoneNumber").value = "";
    document.getElementById("mEmail").value = "";
    document.getElementById("mMessage").value = "";
  })
  .fail(function() {
    console.log("error");
  })
  .always(function() {
    console.log("complete");
  });
};

//skroling
  $(window).scroll(function(){
    currentHeight = $(document).scrollTop();
    if(currentHeight < 100){
      $("#hidden-arrow").hide("400");
    }else{
      $("#hidden-arrow").show("400");
    }
  });

//send kruzic
  $(document).ajaxStart(function() {
    $("#mSubmit").html("<i class='fa fa-circle-o-notch fa-spin'></i>");
  });
  $(document).ajaxStop((function() {
    $("#mSubmit").html("Send");
  }));

//send tooltip
  $(function(){
    $("#mFirstName").tooltip();
    $("#mPhoneNumber").tooltip();
    $("#mEmail").tooltip();
    $("#mMessage").tooltip();
  });

});
