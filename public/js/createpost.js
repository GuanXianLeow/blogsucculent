var object1 = $('#b1');
var object2 = $('#b2');

var layer = $('#main');

layer.mousemove(function(e){
   var valueX = (e.pageX * -1 / 20);
   var valueY = (e.pageY * -1 / 20);

   object1.css({
       'transform' :'translate(-50%,-50%) translate3d('+valueX+'px,'+valueY+'px,0)'
   });   
});

layer.mousemove(function(e){
   var valueX = (e.pageX * -1 / 50);
   var valueY = (e.pageY * -1 / 50);

   object2.css({
       'transform' :'translate(-50%,-50%) translate3d('+valueX+'px,'+valueY+'px,0)'
   });   
});