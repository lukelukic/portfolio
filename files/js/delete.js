$(document).ready(function() {
  $(".delete").click(function(event){
    //alert("nisi sasa");
  var d = confirm("Are you sure you want to DELETE user/project?");
    if(d == false){
      event.preventDefault();
    }
  });
});
