$(document).ready(function() {
    $('.card').hover(function(){
        $(this).css({"background-color":"wheat", "transform-style":"preserve-3d", "transform": "scale(1.02)", "transition":"all ease 0.3s"});
    },function(){
        $(this).css({"background-color":"white", "transform-style":"none", "transform": "none", "transition":"all ease 0.3s"})
    })
  });