function drawColumn() {
    var a=google.visualization.arrayToDataTable([["Year", "Target", "Acheived"], ["Team A", 30,25],["Team B", 25,15],["Team C", 25,10],["Team D", 20,5]]),
    b= {
        height:400,
        fontSize:12,
        colors:["#2494be",
        "#F6B75A"],
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
    c=new google.visualization.ColumnChart(document.getElementById("column-chartS"));
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