$(document).ready(function(){
  
  $(".burger").click(function(){
    $(".menu").toggleClass("active");
  });
  $(".close").click(function(){
    $(".menu").removeClass("active");
  })
});