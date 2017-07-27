window.onload = function() {
  document.getElementById("formSubmit").onclick = function(event) {

    var firstName = document.getElementById("tbFirstName").value;
    var lastName = document.getElementById("tbLastName").value;
    var position = document.getElementById("tbPosition").value;
    var linkedin = document.getElementById("tbLinkedIn").value;
    var facebook = document.getElementById("tbFacebook").value;
    var twitter = document.getElementById("tbTwitter").value;
    var instagram = document.getElementById("tbInstagram").value;
    var picture = document.getElementById("tbPicture").value;
    var alt = document.getElementById("tbAlt").value;
    var feedback = document.getElementById("feedback");
    var errors = new Array();
    // regularni

    var reFirstName = /^[A-Z][a-z]{1,15}$/;
    var reLastName = /^[A-Z][a-z]{1,15}$/;
    var rePosition = /^[A-Z][a-z]{3,15}(\s[A-Z][a-z]{3,15})*$/;
    var reLinkedIn = /^[a-z\d.]{5,}$/i;
    var reFacebook = /^[a-z\d.]{5,}$/i;
    var reTwitter = /^[a-z\d.]{5,}$/i;
    var reInstagram = /^[a-z\d.]{5,}$/i;
    var rePicture = /^.*\.(jpg|jpeg|png|gif)$/;
    var reAlt = /^[A-z0-9\_\-]{2,25}(\s[A-z0-9\_\-]{2,25})*$/;

    if (!reFirstName.test(firstName)) {
      errors.push("Invalid First Name format.");
    }
    if (!reLastName.test(lastName)) {
      errors.push("Invalid Last Name format.");
    }
    if (!rePosition.test(position)) {
      errors.push("Invalid Position format.");
    }
<<<<<<< HEAD
     if(linkedin){
        if(!reLinkedIn.test(linkedin)) {
         errors.push("Invalid LinkedIn format.");
       }
     }
     if(facebook){
        if(!reFacebook.test(facebook)) {
         errors.push("Invalid Facebook format.");
       }
     }
     if(twitter){
        if(!reTwitter.test(twitter)) {
         errors.push("Invalid Twitter format.");
       }
     }
     if(instagram){
        if(!reInstagram.test(instagram)) {
         errors.push("Invalid Instagram format.");
       }
     }
     if (!document.getElementById("nema")) {
     if(picture){
       if(!rePicture.test(picture)){
         errors.push("Invalid Picture format.");
       }
     }else {
       errors.push("Picture field is required.");
     }
   }
=======
    if (linkedin) {
      if (!reLinkedIn.test(linkedin)) {
        errors.push("Invalid LinkedIn format.");
      }
    }
    if (facebook) {
      if (!reFacebook.test(facebook)) {
        errors.push("Invalid Facebook format.");
      }
    }
    if (twitter) {
      if (!reTwitter.test(twitter)) {
        errors.push("Invalid Twitter format.");
      }
    }
    if (instagram) {
      if (!reInstagram.test(instagram)) {
        errors.push("Invalid Instagram format.");
      }
    }
    if (!document.getElementById("nema")) {
      if (picture) {
        if (!rePicture.test(picture)) {
          errors.push("Invalid Picture format.");
        }
      } else {
        errors.push("Picture field is required.");
      }
    }

>>>>>>> f6b1acc540b9c804d07dc7b7476864affb022017

    if (!reAlt.test(alt)) {
      errors.push("Invalid Alt Attribute format.");
    }

    feedback.classList.remove("hidden");

    if (errors.length > 0) {
      event.preventDefault();
      feedback.innerHTML = "";
      for (var i = 0; i < errors.length; i++) {
        feedback.innerHTML += '<p class="text-danger">' + errors[i] + '</p>';
      }

    }
  }
}
