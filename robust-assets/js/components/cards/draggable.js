$(document).ready(function(){dragula([document.getElementById("card-drag-area")]),dragula([document.getElementById("card-move")]).on("drag",function(a){a.className=a.className.replace("card-moved","")}).on("drop",function(a){a.className+=" card-moved"}).on("over",function(a,b){b.className+=" card-over"}).on("out",function(a,b){b.className=b.className.replace("card-over","")}),dragula([document.getElementById("copy-left"),document.getElementById("copy-right")],{copy:!0}),dragula([document.getElementById("left-handles"),document.getElementById("right-handles")],{moves:function(a,b,c){return c.classList.contains("handle")}}),dragula([document.getElementById("left-titleHandles"),document.getElementById("right-titleHandles")],{moves:function(a,b,c){return c.classList.contains("titleArea")}})});