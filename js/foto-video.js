$(document).ready(function(){
 $("#video_btn").click(function(){
   $("#video").show();
   $("#images").hide();
 });
 $("#foto_btn").click(function(){
   $("#images").show();
   $("#video").hide();

 });
});
