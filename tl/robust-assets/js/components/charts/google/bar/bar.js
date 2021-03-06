function drawBar() {
    var a=google.visualization.arrayToDataTable([["Year", "Sale", "Costs"], ["2016-2017", 10, 9], ["2017-2018", 730, 300], ["2013", 960, 450], ["2014", 1340, 430], ["2015", 1560, 540]]),
    b= {
        height:400,
        fontSize:12,
        colors:["#2494be",
        "#F6B75A"],
        chartArea: {
            left: "5%", width: "90%", height: 350
        }
        ,
        hAxis: {
            gridlines: {
                color: "#e9e9e9"
            }
        }
        ,
        vAxis: {
            gridlines: {
                count: 10
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
    c=new google.visualization.BarChart(document.getElementById("bar-chart"));
    c.draw(a, b)
}

google.load("visualization", "1.0", {
    packages: ["corechart"]
}

),
google.setOnLoadCallback(drawBar),
$(function() {
    function a() {
        drawBar()
    }
    $(window).on("resize", a), $(".menu-toggle").on("click", a)
}

);