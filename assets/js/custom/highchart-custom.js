$(function () {
    function MoneyFormat(labelValue) {
        // Nine Zeroes for Billions
        return Math.abs(Number(labelValue)) >= 1.0e+9
            ? (Math.abs(Number(labelValue)) / 1.0e+9).toFixed(2) + "B"
            // Six Zeroes for Millions
            : Math.abs(Number(labelValue)) >= 1.0e+6
                ? (Math.abs(Number(labelValue)) / 1.0e+6).toFixed(2) + "M"
                // Three Zeroes for Thousands
                : Math.abs(Number(labelValue)) >= 1.0e+3
                    ? (Math.abs(Number(labelValue)) / 1.0e+3).toFixed(2) + "K"
                    : Math.abs(Number(labelValue).toFixed(2));
    }

// Create the chart

    // Create the chart
    $("#score-chart").highcharts({

        chart: {
            type: 'solidgauge',
            height: '90%',
            backgroundColor: 'transparent'
        },

        title: {
            useHTML: true,
            floating: true,
            verticalAlign: 'middle',
            text: '<span style="font-size: 0.75rem; font-weight: bold; text-align: center; color: #6F737A; position: relative; top: -9px;">Score</span>',

        },

        tooltip: {
            borderWidth: 0,
            backgroundColor: 'none',
            shadow: false,
            useHTML: true,
            pointFormat: '<span style="font-size: 0.80rem; text-align: center; display: flex; flex-direction: column;">' +
                             '<span style="color: #6F737A; font-weight: bold;">{series.name}</span>' +
                             '<span style=" color: {point.color};">{point.y}%</span>' +
                         '</span>',
            positioner: function (labelWidth) {
                return {
                    x: (this.chart.chartWidth - labelWidth) / 2,
                    y: (this.chart.plotHeight / 2) + 10
                };
            }
        },

        pane: {
            startAngle: -135,
            endAngle: 135,

            // center: ['50%', '50%'],
            background: [
                { // Track for Buy
                    shape: 'arc',
                    borderColor: Highcharts.Color('#C5C5C5')
                        .setOpacity(0.5)
                        .get(),
                    borderWidth: '7.5%',
                    outerRadius: '100%',
                    innerRadius: '100%',
                }, { // Track for Sell
                    shape: 'arc',
                    borderColor: Highcharts.Color('#C5C5C5')
                        .setOpacity(0.5)
                        .get(),
                    borderWidth: '7.5%',
                    outerRadius: '70%',
                    innerRadius: '70%'
                }]
        },

        yAxis: {
            min: 0,
            max: 100,
            lineWidth: 0,
            tickPositions: [],
            title: {
                useHTML: true,
                text: '<span style="z-index:99999999; color: #6F737A; font-weight: bold; font-size: 0.60rem; ">Buy<br>Sell<span>',
                y: -23,
                x: 0
            },

        },

        plotOptions: {
            solidgauge: {
                dataLabels: {
                    enabled: false
                },
                linecap: 'round',
                stickyTracking: true,
                rounded: true,
            }
        },

        series: [{
            name: 'Buy',
            data: [{
                color: Highcharts.Color('#6ebe01')
                    .setOpacity(0.75)
                    .get(),
                radius: '110%',
                innerRadius: '88%',
                y: 75
            }],

        }, {
            name: 'Sell',
            data: [{
                color: Highcharts.Color('#f44236')
                    .setOpacity(0.75)
                    .get(),
                radius: '82%',
                innerRadius: '57%',
                y: 65,
            }],

        }],
        exporting: {
            enabled: false,
        }
    });

    var svg;
    svg = document.getElementsByTagName('svg');
    if (svg.length > 0) {
        var path = svg[0].getElementsByTagName('path');
        if (path.length > 1) {
            // First path is gauge background
            path[0].setAttributeNS(null, 'stroke-linejoin', 'round');
            // Second path is gauge value
            path[1].setAttributeNS(null, 'stroke-linejoin', 'round');
        }
    }

    $("#donut-chart").highcharts({
        chart: {
            renderTo: 'donut-chart',
            backgroundColor: 'rgba(0,0,0,0)',
            height: '85%',
            useHTML: true,
            type: 'pie',
        },
        title: {
            verticalAlign: 'middle',
            floating: true,
            useHTML: true,
            text: '<span style="position: relative; top: 5px; color: #6F737A;"><span style="font-weight: bold;">All Holdings<br></span>' + '£' + MoneyFormat(1880993) + '</span>',
            style: {
                fontSize: '11px',
                fontWeight: 'bolder',
                textAlign: 'center',
            },
        },
        colors: [
            '#2F7ED8',
            '#0D233A',
            '#1AADCE',
            '#0277A0',
            '#2F4F4F',
            '#910000',
            '#8BBC21',
            '#F4A460',
            '#9370DB',
            '#DA70D6',
            '#B0C4DE',
            '#FF00FF',
            '#F08080'
        ],
        yAxis: {
            title: {
                text: ''
            }
        },
        plotOptions: {
            pie: {
                shadow: false,
                borderWidth: 0
            }
        },
        tooltip: {
            formatter: function () {
                return '<span style=""><b>' + this.point.name + '</b>: ' + this.percentage.toFixed(0) + '%</span>';
            },
            shadow: false
        },
        series: [{
            name: '',
            // data: [
            //     ["Aldtech", 60],
            // ],
            data: [["Aldtech", 60],
            ["Blue Solutions", 20],
            ["Vivendi", 5],
            ["Max Ltd.", 15]],
            size: '112%',
            innerSize: '80%',
            showInLegend: false,
            states: {
                hover: {
                    enabled: true,
                    halo: false
                }
            },
            dataLabels: {
                enabled: false,
                distance: -5,
                borderWidth: 0,
                style: {
                    textOutline: 0,
                    fontSize: '7px'
                },
                formatter: function () {
                    return this.percentage.toFixed(0) + '%';
                }
            }
        }]
    });

    $("#advance-chart").highcharts({
        title: {
            "text": ""
        },
        subtitle: {
            "text": ""
        },
        exporting: {
            "enabled": false
        },
        chart: {
            "type": "line"
        },
        series: [
            {
                "name": "val"
            }
        ],
        plotOptions: {
            "line": {
                "marker": {
                    "enabled": false
                },
                "enableMouseTracking": false
            }
        },
        data: {
            "csv": "row,val\n0,24\n1,76\n2,23",
            "googleSpreadsheetKey": false,
            "googleSpreadsheetWorksheet": false
        },
        legend: {
            "enabled": false
        },
        credits: {
            "enabled": false
        },
        colors: [
            "#434348",
            "#90ed7d",
            "#f7a35c",
            "#8085e9",
            "#f15c80",
            "#e4d354",
            "#2b908f",
            "#f45b5b",
            "#91e8e1"
        ],
        xAxis: {},
        yAxis: {},
        pane: {
            "background": []
        },
        responsive: {
            "rules": []
        }
    });

    $("#investment-chart-table").highcharts({
        chart: {
            scrollablePlotArea: {
                minWidth: 700
            }
        },

        data: {
            csvURL: 'https://cdn.jsdelivr.net/gh/highcharts/highcharts@v7.0.0/samples/data/analytics.csv',
            beforeParse: function (csv) {
                return csv.replace(/\n\n/g, '\n');
            }
        },

        title: {
            text: ''
        },

        subtitle: {
            text: ''
        },

        xAxis: {
            tickInterval: 7 * 24 * 3600 * 1000, // one week
            tickWidth: 0,
            gridLineWidth: 1,
            labels: {
                align: 'left',
                x: 3,
                y: -3
            }
        },

        yAxis: [{ // left y axis
            title: {
                text: null
            },
            labels: {
                align: 'left',
                x: 3,
                y: 16,
                format: '{value:.,0f}'
            },
            showFirstLabel: false
        }, { // right y axis
            linkedTo: 0,
            gridLineWidth: 0,
            opposite: true,
            title: {
                text: null
            },
            labels: {
                align: 'right',
                x: -3,
                y: 16,
                format: '{value:.,0f}'
            },
            showFirstLabel: false
        }],

        legend: {
            align: 'left',
            verticalAlign: 'top',
            borderWidth: 0
        },

        tooltip: {
            shared: true,
            crosshairs: true
        },

        plotOptions: {
            series: {
                cursor: 'pointer',
                point: {
                    events: {
                        click: function (e) {
                            hs.htmlExpand(null, {
                                pageOrigin: {
                                    x: e.pageX || e.clientX,
                                    y: e.pageY || e.clientY
                                },
                                headingText: this.series.name,
                                maincontentText: Highcharts.dateFormat('%A, %b %e, %Y', this.x) + ':<br/> ' +
                                    this.y + ' sessions',
                                width: 200
                            });
                        }
                    }
                },
                marker: {
                    lineWidth: 1
                }
            }
        },

        series: [{
            name: 'All sessions',
            lineWidth: 4,
            marker: {
                radius: 4
            }
        }, {
            name: 'New users'
        }]
    });

    $("#holdings-chart").highcharts({
        chart: {
            renderTo: 'holdingPie',
            plotBackgroundColor: null,
            plotBorderWidth: null,
            spacingBottom: 0,
            margin: [0, 0, 0, 40],
        },
        title: {
            text: ''
        },
        credits: {
            enabled: false
        },
        tooltip: {
            borderWidth: 2,
            formatter: function () {
                return '<span style="font-weight:bold; color:' + this.point.color + '">' + this.point.name + '</span><br> ' + roundNumber(this.percentage, 2) + ' %' + ' of total holding value';
            },
            userHTML: true,
            style: {
                fontSize: '11px',
            }
        },
        plotOptions: {
            series: {
                states: {
                    hover: {
                        enabled: false
                    }
                }
            },
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        legend: {
            enabled: true,
            layout: 'vertical',
            float: true,
            borderColor: "none",
            align: 'left',
            verticalAlign: 'top',
            itemStyle: {
                fontWeight: 'normal',
                fontSize: '12px'
            }

        },
        series: [{
            type: 'pie',
            name: 'Holdings',
            data: [
                {
                    name: 'Kier Group',
                    y: 66.2,
                    sliced: true,
                    selected: true
                }, ['De La Rue', 33.8]]
        }]
    });

    $("#advance-chart-sec").highcharts({
        chart: {
            type: 'column',
            width: 685,
            marginRight: 35,
            style: {
                fontFamily: 'Helvetica'
            }
        },
        title: false,
        legend: {
            enabled: false
        },
        xAxis: {
            type: 'datetime',
            tickInterval: 6 * 30 * 24 * 3600 * 1000,
            ordinal: false,
            lineWidth: 1,
            minorGridLineWidth: 0,
            gridLineWidth: 0,
            minorTickLength: 0,
            tickLength: 0,
            title: {
                enabled: false
            },
            // labels: {
            //     formatter: function () {
            //         if (this.value > date_last) {
            //             return " ";
            //         } else {
            //             return this.axis.defaultLabelFormatter.call(this);
            //         }
            //     }
            // }
        },
        yAxis: {
            // max: 1000000,
            // min: -1000000,
            // max: (data_min_max.max < 0 && data_min_max.min < 0 ? null : data_min_max.max),
            // min: (data_min_max.min > 0 && data_min_max.max > 0 ? null : data_min_max.min),
            // tickinterval: 10000,
            // startOnTick: false,
            // endOnTick: false,
            plotLines: [{
                color: '#D8D8D8',
                width: 2,
                value: 0
            }],
            title: {
                enabled: false
            },
            labels: {
                align: 'left',
                x: 4,
                y: 0,
                style: {
                    fontSize: 10
                },
                formatter: function () {
                    var label = this.axis.defaultLabelFormatter.call(this);

                    // Use thousands separator for four-digit numbers too
                    // if (label=="1M") {
                    //     return label+">"
                    // }
                    // if (label=="-1M") {
                    //     return "<"+label
                    // }

                    //if unit is Billion change G to B
                    if (label.indexOf("G") >= 0) {
                        label = label.replace("G", "B");
                        return label;
                    }
                    if (label.indexOf(" ") >= 0) {
                        label = label.replace(" ", "");
                        return label;
                    }
                    return label;
                }
            },
            opposite: true,
            lineWidth: 1,
            minPadding: 0.2,
            maxPadding: 0.2,
        },

        plotOptions: {
            series: {
                pointWidth: 11
            },
            column: {
                pointPlacement: 'on'
            }
        },

        colors: ['#4f6228', '#ff0000'],
        series: [
            {
                name: "Square_0161ff",
                data: [[1465513200000, 0], [1465426800000, 0], [1465426800000, 0], [1465340400000, 0], [1465340400000, 0], [1465254000000, 0], [1465254000000, 0], [1465167600000, 0], [1465167600000, 0], [1464908400000, 0], [1464908400000, 0], [1464822000000, 0], [1464822000000, 0], [1464735600000, 0], [1464735600000, 0], [1464649200000, 0], [1464649200000, 0], [1464562800000, 0], [1464562800000, 0], [1470610800000, 61300], [1490313600000, 1999993], [1518134400000, 51386], [1525993200000, 55873], [1533164400000, 98890]],
                cursor: 'pointer',
                enableMouseTracking: true,
            },
            {
                name: "Circle_ff0000",
                data: [[1475535600000, -993422], [1479427200000, -118600], [1480896000000, -152762], [1480982400000, -59355], [1483488000000, -231861], [1487289600000, -629046], [1488412800000, -1466026], [1488499200000, -1519845], [1488585600000, -10048233], [1489622400000, -635407], [1493938800000, -555475], [1497222000000, -279068], [1501714800000, -886864], [1504566000000, -453600], [1504652400000, -287500], [1505084400000, -1344975], [1506294000000, -300000], [1507071600000, -273081], [1511913600000, -237500], [1512518400000, -132504], [1515024000000, -234000], [1519948800000, -5171940], [1537743600000, -124052], [1556492400000, -547617]],
                cursor: 'pointer',
                enableMouseTracking: true,
            },
        ],
        exporting: false,
        credits: {
            enabled: false
        }
    });

    $.getJSON('https://www.highcharts.com/samples/data/aapl-c.json', function (data) {
        // Create the chart
        $('#filter-advance-chart').highcharts('StockChart', {

            rangeSelector: {
                selected: 1
            },

            title: {
                text: 'AAPL Stock Price'
            },

            series: [{
                name: 'AAPL',
                data: data,
                tooltip: {
                    valueDecimals: 2
                }
            }]
        });
    });

});








