$(window).on("load",function(){var a=$("#radar-skip-points"),b={responsive:!0,maintainAspectRatio:!1,responsiveAnimationDuration:500,legend:{position:"bottom"},hover:{mode:"label"},scales:{xAxes:[{display:!0,scaleLabel:{display:!0,labelString:"Month"}}],yAxes:[{display:!0,scaleLabel:{display:!0,labelString:"Value"}}]},title:{display:!0,text:"Chart.js Line Chart - Legend"}},c={labels:["Eating","Drinking","Sleeping","Designing","Coding","Cycling","Running"],datasets:[{label:"Skip first dataset",backgroundColor:"rgba(245,0,87,.3)",borderColor:"transparent",pointBorderColor:"#F50057",pointBackgroundColor:"#FFF",pointBorderWidth:2,pointHoverBorderWidth:2,pointRadius:3,data:[NaN,59,80,81,56,55,40]},{label:"Skip mid dataset",data:[45,25,NaN,36,67,18,76],backgroundColor:"rgba(29,233,182,.6)",borderColor:"transparent",pointBorderColor:"#1DE9B6",pointBackgroundColor:"#FFF",pointBorderWidth:2,pointHoverBorderWidth:2,pointRadius:3},{label:"Skip last dataset",data:[28,48,40,19,86,27,NaN],backgroundColor:"rgba(101,31,255,.6)",borderColor:"transparent",pointBorderColor:"#651FFF",pointBackgroundColor:"#FFF",pointBorderWidth:2,pointHoverBorderWidth:2,pointRadius:3}]},d={type:"radar",options:b,data:c};new Chart(a,d)});