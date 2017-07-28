$(document).ready(function() {
  $(".delete").click(function(event){
    //alert("nisi sasa");
  var d = confirm("Chosse ur destini!");
    if(d == false){
      event.preventDefault();
    }
  });
});
