$(window).on("load",function(){var a=dimple.newSvg("#bar-chart","100%",500),b=dimple.newSvg("#stacked-bar","100%",500),c=dimple.newSvg("#stacked-grouped-bar","100%",500),d=dimple.newSvg("#floating-bars","100%",500),e=dimple.newSvg("#column-chart","100%",500),f=dimple.newSvg("#column-stacked","100%",500),g=dimple.newSvg("#column-grouped","100%",500),h=dimple.newSvg("#marimekko-chart","100%",500),i=dimple.newSvg("#block-matrix","100%",500);d3.tsv("robust-assets/demo-data/dimple/example-data.tsv",function(j){function k(){setTimeout(function(){l.draw(0,!0),p.draw(0,!0),q.draw(0,!0),r.draw(0,!0),s.draw(0,!0),t.draw(0,!0),u.draw(0,!0),v.draw(0,!0),w.draw(0,!0),m.titleShape.remove(),n.titleShape.remove()},100)}var l=new dimple.chart(a,j);l.setBounds(0,0,"100%","100%"),l.setMargins(40,10,0,50);var m=l.addMeasureAxis("x","Unit Sales"),n=l.addCategoryAxis("y","Month");n.addOrderRule("Date");var o=l.addSeries(null,dimple.plot.bar);l.defaultColors=[new dimple.color("#673AB7")],m.fontSize="12",n.fontSize="12",l.draw(),m.titleShape.remove(),n.titleShape.remove();var p=new dimple.chart(b,j);p.setBounds(0,0,"100%","100%"),p.setMargins(40,10,0,50);var m=p.addMeasureAxis("x","Unit Sales"),n=p.addCategoryAxis("y","Month");n.addOrderRule("Date"),p.addSeries("Channel",dimple.plot.bar),p.defaultColors=[new dimple.color("#673AB7"),new dimple.color("#E91E63")],m.fontSize="12",n.fontSize="12",p.draw(),m.titleShape.remove(),n.titleShape.remove();var q=new dimple.chart(c,j);q.setBounds(0,0,"100%","100%"),q.setMargins(40,10,0,50);var m=q.addPctAxis("x","Unit Sales"),n=q.addCategoryAxis("y",["Price Tier","Channel"]);q.addSeries("Owner",dimple.plot.bar),q.defaultColors=[new dimple.color("#673AB7"),new dimple.color("#E91E63"),new dimple.color("#00BCD4"),new dimple.color("#FF5722"),new dimple.color("#FFC107"),new dimple.color("#009688"),new dimple.color("#3F51B5"),new dimple.color("#FFEB3B")],m.fontSize="12",n.fontSize="12",q.draw(),m.titleShape.remove(),n.titleShape.remove();var r=new dimple.chart(d,j);r.setBounds(0,0,"100%","100%"),r.setMargins(40,10,0,50);var m=r.addMeasureAxis("x","Unit Sales"),n=r.addCategoryAxis("y","Month");n.addOrderRule("Date");var o=r.addSeries("Channel",dimple.plot.bar);o.stacked=!1,r.defaultColors=[new dimple.color("#673AB7"),new dimple.color("#E91E63")],m.fontSize="12",n.fontSize="12",r.draw(),m.titleShape.remove(),n.titleShape.remove();var s=new dimple.chart(e,j);s.setBounds(0,0,"100%","100%"),s.setMargins(40,10,0,50);var m=s.addCategoryAxis("x","Month");m.addOrderRule("Date");var n=s.addMeasureAxis("y","Unit Sales"),o=s.addSeries(null,dimple.plot.bar);s.defaultColors=[new dimple.color("#673AB7")],m.fontSize="12",n.fontSize="12",s.draw(),m.titleShape.remove(),n.titleShape.remove();var t=new dimple.chart(f,j);t.setBounds(0,0,"100%","100%"),t.setMargins(40,10,0,50);var m=t.addCategoryAxis("x","Month");m.addOrderRule("Date");var n=t.addMeasureAxis("y","Unit Sales");t.addSeries("Channel",dimple.plot.bar),t.defaultColors=[new dimple.color("#673AB7"),new dimple.color("#E91E63")],m.fontSize="12",n.fontSize="12",t.draw(),m.titleShape.remove(),n.titleShape.remove();var u=new dimple.chart(g,j);u.setBounds(0,0,"100%","100%"),u.setMargins(40,10,0,50);var m=u.addCategoryAxis("x",["Price Tier","Channel"]),n=u.addPctAxis("y","Unit Sales"),o=u.addSeries("Owner",dimple.plot.bar);u.defaultColors=[new dimple.color("#673AB7"),new dimple.color("#E91E63"),new dimple.color("#00BCD4"),new dimple.color("#FF5722"),new dimple.color("#FFC107"),new dimple.color("#009688"),new dimple.color("#3F51B5"),new dimple.color("#FFEB3B")],m.fontSize="12",n.fontSize="12",u.draw(),m.titleShape.remove(),n.titleShape.remove();var v=new dimple.chart(h,j);v.setBounds(0,0,"100%","100%"),v.setMargins(40,10,0,50);var m=v.addPctAxis("x","Unit Sales","Channel"),n=v.addPctAxis("y","Unit Sales"),o=v.addSeries("Owner",dimple.plot.bar);v.defaultColors=[new dimple.color("#673AB7"),new dimple.color("#E91E63"),new dimple.color("#00BCD4"),new dimple.color("#FF5722"),new dimple.color("#FFC107"),new dimple.color("#009688"),new dimple.color("#3F51B5"),new dimple.color("#FFEB3B")],m.fontSize="12",n.fontSize="12",v.draw(),m.titleShape.remove(),n.titleShape.remove();var w=new dimple.chart(i,j);w.setBounds(0,0,"100%","100%"),w.setMargins(40,10,0,50);var m=w.addCategoryAxis("x",["Channel","Price Tier"]),n=w.addCategoryAxis("y","Owner"),o=w.addSeries("Price Tier",dimple.plot.bar);w.defaultColors=[new dimple.color("#673AB7"),new dimple.color("#E91E63"),new dimple.color("#FF5722")],m.fontSize="12",n.fontSize="12",w.draw(),m.titleShape.remove(),n.titleShape.remove(),$(window).on("resize",k),$(".menu-toggle").on("click",k)})});