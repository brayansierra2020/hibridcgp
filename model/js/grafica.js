window.onload = function () { 
    var dataLength = 0;
    var data = [];
    var updateInterval = 500;
    updateChart();
    function updateChart() {
        $.getJSON("../model/dao/grafica_data.php", function (result) {
            if (dataLength !== result.length) {
                for (var i = dataLength; i < result.length; i++) {
                    data.push({
                        x: new Date (result[i].vx),
                        y: parseInt(result[i].vy)
                    });
                }
                dataLength = result.length;
                chart.render();
            }
        });
    }

var chart = new CanvasJS.Chart("chart", {
    animationEnabled: true,
    theme: "light2",
    title:{
        text: "Entrada de Productos"
    },
    axisX:{
        valueFormatString: "DD MMM",
        crosshair: {
            enabled: true,
            snapToDataPoint: true
        }
    },
    axisY: {
        title: "Numero de Productos",
        crosshair: {
            enabled: true
        }
    },
    toolTip:{
        shared:true
    },  
    legend:{
        cursor:"pointer",
        verticalAlign: "bottom",
        horizontalAlign: "left",
        dockInsidePlotArea: true,
        itemclick: toogleDataSeries
    },
    data: [{
        type: "line",
        showInLegend: true,
        name: "Cantidad",
        markerType: "square",
        xValueFormatString: "DD MMM, YYYY",
        color: "#F08080",
        dataPoints: data
    
    }]
});


function toogleDataSeries(e){
    if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
        e.dataSeries.visible = false;
    } else{
        e.dataSeries.visible = true;
    }
    
}

setInterval(function () {
        updateChart()
    }, updateInterval);

}

