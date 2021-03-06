function drawColumn() {
    var a=google.visualization.arrayToDataTable([["Year", "Target", "Acheived"], ["Dryer", 5,2],["chiller", 7,1],["cooler", 3,2],["Other Products", 2,4]]),
    b= {
        height:400,
        fontSize:12,
        colors:["#673ab7",
        "#e91e63"],
        chartArea: {
            left: "5%", width: "90%", height: 350
        }
        ,
        vAxis: {
            gridlines: {
                color: "#e9e9e9", count: 10
            }
            ,
            minValue:0
        }
        ,
        legend: {
            position:"top",
            alignment:"center",
            textStyle: {
                fontSize: 12
            }
        }
    }
    ,
    c=new google.visualization.ColumnChart(document.getElementById("columns-charts"));
    c.draw(a, b)
}

google.load("visualization", "1.0", {
    packages: ["corechart"]
}

),
google.setOnLoadCallback(drawColumn),
$(function() {
    function a() {
        drawColumn()
    }
    $(window).on("resize", a), $(".menu-toggle").on("click", a)
}

);