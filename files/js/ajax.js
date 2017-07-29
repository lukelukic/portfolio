$(document).ready(function() {
  document.getElementById("mSubmit").onclick = function(){
  var firstName = document.getElementById("mFirstName").value;
  var phoneNumber = document.getElementById("mPhoneNumber").value;
  var email = document.getElementById("mEmail").value;
  var message = document.getElementById("mMessage").value;
  var fidbek = document.getElementById("feedback");
  $.ajax({
    url: 'http://localhost/portfolio/mail',
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
    //console.log("success");
    alert(data);
  $("#feedback").html(data);

  })
  .fail(function() {
    console.log("error");
  })
  .always(function() {
    console.log("complete");
  });

}
});
