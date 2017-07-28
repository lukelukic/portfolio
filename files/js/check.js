window.onload = function() {

  if(document.getElementById("formSubmit")){
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
  if(document.getElementById("submitProject")){
  document.getElementById("submitProject").onclick = function(event) {


     var projectName = document.getElementById("tbProjectName").value;
     var projectLink = document.getElementById("tbProjectLink").value;
     var projectPicture = document.getElementById("tbProjectPicture").value;
     var projectAlt = document.getElementById("tbProjectAlt").value;
     var feedback = document.getElementById("feedback");
     var errors = new Array();
     // regularni

    //
     var reProjectName = /^[A-Z][a-z]{3,15}(\s[A-Z][a-z]{3,15})*$/;
     var reProjectLink = /^(?:(?:https?|ftp):\/\/)(?:\S+(?::\S*)?@)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,}))\.?)(?::\d{2,5})?(?:[/?#]\S*)?$/i;
     var reProjectPicture = /^.*\.(jpg|jpeg|png|gif)$/;
     var reAltProject = /^[A-z0-9\_\-]{2,25}(\s[A-z0-9\_\-]{2,25})*$/;

     if (!reProjectName.test(projectName)) {
       errors.push("Invalid Project Name format.");
     }
     if (!reProjectLink.test(projectLink)) {
       errors.push("Invalid Project Link format.");
     }
     if (!document.getElementById("nema")) {
     if(projectPicture){
       if(!reProjectPicture.test(projectPicture)){
         errors.push("Invalid Project Picture format.");
       }
     }else {
       errors.push("Project Picture field is required.");
     }
   }
   if (!reAltProject.test(projectAlt)) {
     errors.push("Invalid Project Alt Attribute format.");
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
}
