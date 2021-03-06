function drawPie3dExploded() {
    var a=google.visualization.arrayToDataTable([["Task", "Hours per Day"], ["dryer", 11], ["chiller", 2], ["cooler", 2], ["Var", 2], ["Small", 7]]),
    b= {
        title:"Product Target",
        is3D:!0,
        pieSliceText:"label",
        height:400,
        fontSize:12,
        colors:["#99B898",
        "#FECEA8",
        "#FF847C",
        "#E84A5F",
        "#474747"],
        chartArea: {
            left: "5%", width: "90%", height: 350
        }
        ,
        slices: {
            1: {
                offset: .2
            }
            ,
            2: {
                offset: .15
            }
            ,
            3: {
                offset: .16
            }
            ,
            4: {
                offset: .12
            }
        }
    }
    ,
    c=new google.visualization.PieChart(document.getElementById("pie-3d-exploded"));
    c.draw(a, b)
}

google.load("visualization", "1.0", {
    packages: ["corechart"]
}

),
google.setOnLoadCallback(drawPie3dExploded),
$(function() {
    function a() {
        drawPie3dExploded()
    }
    $(window).on("resize", a), $(".menu-toggle").on("click", a)
}

);