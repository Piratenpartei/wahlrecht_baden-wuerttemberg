

<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/custom.css">
        <meta name="description" content="Das Wahlrecht in Baden-Württemberg diskriminiert massiv kleine Parteien. Wir zeigen wieso es eine Reform braucht!">
        <meta property="og:title"              content="Wahlrecht reformieren!" />
        <meta property="og:description"        content="Das Wahlrecht in Baden-Württemberg diskriminiert massiv kleine Parteien. Wir zeigen wieso es eine Reform braucht!" />
        <meta property="og:image"              content="https://cdn.pixabay.com/photo/2017/03/28/05/44/pen-2181101_960_720.jpg" />
        <meta name="twitter:card" content="summary_large_image">
        </meta>
        <meta name="twitter:site" content="Piratenpartei">
        </meta>
        <title>Wahlrecht reformieren!</title>
        <script src="js/core.js"></script>
        <script src="js/charts.js"></script>
        <script src="js/material.js"></script>
        <script src="js/de_DE.js"></script>
        <script src="js/animated.js"></script>
    </head>
    <body id="page-top">
        <link rel="stylesheet" href="css/custom.css">
        <!-- Chart code -->
        <script>
            function drawchart(data, title_txt){
              var chart = am4core.create("chartdiv", am4charts.PieChart);
              var title = chart.titles.create();
              title.text = title_txt;
              title.fontSize = 25;
              title.marginBottom = 10;
              am4core.useTheme(am4themes_animated);
              chart.startAngle = 160;
              chart.endAngle = 380;
              chart.innerRadius = am4core.percent(10);
              chart.data = data;
              var pieSeries = chart.series.push(new am4charts.PieSeries());
              pieSeries.dataFields.value = "Stimmen";
              pieSeries.dataFields.category = "Partei";
              pieSeries.colorField="color";
              pieSeries.slices.template.stroke = new am4core.InterfaceColorSet().getFor("background");
              pieSeries.slices.template.strokeWidth = 1;
              pieSeries.slices.template.strokeOpacity = 1;
              pieSeries.slices.template.tooltipText ="{category}: \n{value}% der Stimmen";
              pieSeries.labels.template.disabled = true;
              pieSeries.ticks.template.disabled = true;
              pieSeries.slices.template.propertyFields.fill = "color";
              pieSeries.slices.template.states.getKey("hover").properties.shiftRadius = 0;
              pieSeries.slices.template.states.getKey("hover").properties.scale = 1;
              pieSeries.radius = am4core.percent(45);
              pieSeries.innerRadius = am4core.percent(20);
            
              var cs = pieSeries.colors;
              cs.list = [am4core.color(new am4core.ColorSet().getIndex(0))];
            
              cs.stepOptions = {
                  lightness: -0.05,
                  hue: 0
              };
              cs.wrap = false;
            
              var pieSeries2 = chart.series.push(new am4charts.PieSeries());
              pieSeries2.slices.template.tooltipText ="{category}: {value} Sitze \nentspricht {value.percent.formatNumber('#.0')}%";
              pieSeries2.slices.template.propertyFields.fill = "color";
              pieSeries2.dataFields.value = "Sitze";
              pieSeries2.dataFields.category = "Partei";
              pieSeries2.slices.template.stroke = new am4core.InterfaceColorSet().getFor("background");
              pieSeries2.slices.template.strokeWidth = 1;
              pieSeries2.slices.template.strokeOpacity = 1;
              pieSeries2.slices.template.states.getKey("hover").properties.shiftRadius = 0.05;
              pieSeries2.slices.template.states.getKey("hover").properties.scale = 1;
              pieSeries2.labels.template.text = "{category}\n{value.value}";
              pieSeries2.ticks.template.disabled = true;
              pieSeries2.alignLabels = false;
              pieSeries2.labels.template.disabled = false;
              pieSeries2.labels.template.radius = am4core.percent(-40);
              pieSeries2.labels.template.relativeRotation = 90;
              pieSeries2.labels.template.fill = am4core.color("white");
              pieSeries2.labels.template.adapter.add("hidden", hideSmall);
              function hideSmall(hidden, target) {
            return target.dataItem.values.value.percent < 1 ? true : false;
            }
            }
            
            
            function drawchart2(data, title_txt){
              var chart2 = am4core.create("chartdiv2", am4charts.PieChart);
              var title2 = chart2.titles.create();
              title2.text = title_txt;
              title2.fontSize = 25;
              title2.marginBottom = 10;
              am4core.useTheme(am4themes_animated);
              chart2.startAngle = 160;
              chart2.endAngle = 380;
              chart2.innerRadius = am4core.percent(10);
              chart2.data = data;
              var pieSeries = chart2.series.push(new am4charts.PieSeries());
              pieSeries.dataFields.value = "Stimmen";
              pieSeries.dataFields.category = "Partei";
              pieSeries.colorField="color";
              pieSeries.slices.template.stroke = new am4core.InterfaceColorSet().getFor("background");
              pieSeries.slices.template.strokeWidth = 1;
              pieSeries.slices.template.strokeOpacity = 1;
              pieSeries.slices.template.tooltipText ="{category}: {value} tatsächliche Sitze \nentspricht {value.percent.formatNumber('#.0')}%";
              pieSeries.labels.template.disabled = true;
              pieSeries.ticks.template.disabled = true;
              pieSeries.slices.template.propertyFields.fill = "color";
              pieSeries.slices.template.states.getKey("hover").properties.shiftRadius = 0;
              pieSeries.slices.template.states.getKey("hover").properties.scale = 1;
              pieSeries.radius = am4core.percent(45);
              pieSeries.innerRadius = am4core.percent(20);
            
              var cs = pieSeries.colors;
              cs.list = [am4core.color(new am4core.ColorSet().getIndex(0))];
            
              cs.stepOptions = {
                  lightness: -0.05,
                  hue: 0
              };
              cs.wrap = false;
            
              var pieSeries2 = chart2.series.push(new am4charts.PieSeries());
              pieSeries2.slices.template.tooltipText ="{category}: {value} Sitze \nentspricht {value.percent.formatNumber('#.0')}%";
              pieSeries2.slices.template.propertyFields.fill = "color";
              pieSeries2.dataFields.value = "Sitze";
              pieSeries2.dataFields.category = "Partei";
              pieSeries2.slices.template.stroke = new am4core.InterfaceColorSet().getFor("background");
              pieSeries2.slices.template.strokeWidth = 1;
              pieSeries2.slices.template.strokeOpacity = 1;
              pieSeries2.slices.template.states.getKey("hover").properties.shiftRadius = 0.05;
              pieSeries2.slices.template.states.getKey("hover").properties.scale = 1;
              pieSeries2.labels.template.text = "{category}\n{value.value}";
              pieSeries2.ticks.template.disabled = true;
              pieSeries2.alignLabels = false;
              pieSeries2.labels.template.disabled = false;
              pieSeries2.labels.template.radius = am4core.percent(-40);
              pieSeries2.labels.template.relativeRotation = 90;
              pieSeries2.labels.template.fill = am4core.color("white");
              pieSeries2.labels.template.adapter.add("hidden", hideSmall);
              function hideSmall(hidden, target) {
            return target.dataItem.values.value.percent < 5 ? true : false;
            }
            }
            
            function drawchart3(data, title_txt){
              var chart = am4core.create("chartdiv6", am4charts.PieChart);
              var title = chart.titles.create();
              title.text = title_txt;
              title.fontSize = 25;
              title.marginBottom = 10;
              am4core.useTheme(am4themes_animated);
              chart.startAngle = 160;
              chart.endAngle = 380;
              chart.innerRadius = am4core.percent(10);
              chart.data = data;
              var pieSeries = chart.series.push(new am4charts.PieSeries());
              pieSeries.dataFields.value = "Stimmen";
              pieSeries.dataFields.category = "Partei";
              pieSeries.colorField="color";
              pieSeries.slices.template.stroke = new am4core.InterfaceColorSet().getFor("background");
              pieSeries.slices.template.strokeWidth = 1;
              pieSeries.slices.template.strokeOpacity = 1;
              pieSeries.slices.template.tooltipText ="{category}: {value}% (Wahl)";
              pieSeries.labels.template.disabled = true;
              pieSeries.ticks.template.disabled = true;
              pieSeries.slices.template.propertyFields.fill = "color";
              pieSeries.slices.template.states.getKey("hover").properties.shiftRadius = 0;
              pieSeries.slices.template.states.getKey("hover").properties.scale = 1;
              pieSeries.radius = am4core.percent(45);
              pieSeries.innerRadius = am4core.percent(20);
            
              var cs = pieSeries.colors;
              cs.list = [am4core.color(new am4core.ColorSet().getIndex(0))];
            
              cs.stepOptions = {
                  lightness: -0.05,
                  hue: 0
              };
              cs.wrap = false;
            
              var pieSeries2 = chart.series.push(new am4charts.PieSeries());
              pieSeries2.slices.template.tooltipText ="{category}: {value}% (U18)";
              pieSeries2.slices.template.propertyFields.fill = "color";
              pieSeries2.dataFields.value = "Stimmen U18";
              pieSeries2.dataFields.category = "Partei";
              pieSeries2.slices.template.stroke = new am4core.InterfaceColorSet().getFor("background");
              pieSeries2.slices.template.strokeWidth = 1;
              pieSeries2.slices.template.strokeOpacity = 1;
              pieSeries2.slices.template.states.getKey("hover").properties.shiftRadius = 0.05;
              pieSeries2.slices.template.states.getKey("hover").properties.scale = 1;
              pieSeries2.labels.template.text = "{category}\n{value.value}%";
              pieSeries2.ticks.template.disabled = true;
              pieSeries2.alignLabels = false;
              pieSeries2.labels.template.disabled = false;
              pieSeries2.labels.template.radius = am4core.percent(-40);
              pieSeries2.labels.template.relativeRotation = 90;
              pieSeries2.labels.template.fill = am4core.color("white");
              pieSeries2.labels.template.adapter.add("hidden", hideSmall);
              function hideSmall(hidden, target) {
            return target.dataItem.values.value.percent < 5 ? true : false;
            }
            }
            
            function drawlostvotes(data) {
            var chart = am4core.create("chartdiv3", am4charts.XYChart);
            chart.data = data;
            var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
            categoryAxis.dataFields.category = "name";
            categoryAxis.renderer.grid.template.location = 0;
            categoryAxis.renderer.minGridDistance = 30;
            categoryAxis.renderer.labels.template.rotation = -60;
            var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
            valueAxis.min = 0;
            var title2 = chart.titles.create();
              title2.text = "Nicht berücksichtigte \nStimmen";
              title2.fontSize = 25;
              title2.marginBottom = 10;
            
            // Create series
            var series = chart.series.push(new am4charts.ColumnSeries());
            series.dataFields.valueY = "value";
            series.dataFields.categoryX = "name";
            series.columns.template.tooltipText = "{categoryX}: \n[bold]{valueY}[/]";
            series.columns.template.fillOpacity = .8;
            series.fill = am4core.color("#ff8800");
            series.stroke = am4core.color("#ff8800");
            series.strokeWidth = 0;
            
            var columnTemplate = series.columns.template;
            columnTemplate.strokeWidth = 2;
            columnTemplate.strokeOpacity = 1;
            
            }
            
            function drawwb(data) {
            var chart = am4core.create("chartdiv4", am4charts.XYChart);
            chart.data = data;
            var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
            categoryAxis.dataFields.category = "name";
            categoryAxis.renderer.grid.template.location = 0;
            categoryAxis.renderer.minGridDistance = 30;
            categoryAxis.renderer.labels.template.rotation = -60;
            var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
            valueAxis.min = 0;
            var title2 = chart.titles.create();
              title2.text = "Wahlbeteiligung (2016)";
              title2.fontSize = 25;
              title2.marginBottom = 10;
            
            // Create series
            var series = chart.series.push(new am4charts.LineSeries());
            series.yAxis = valueAxis
            series.dataFields.valueY = "value";
            series.dataFields.categoryX = "name";
            series.tooltipText = "{value} %"
            series.stroke = am4core.color("#ff8800"); // red
            series.fill = am4core.color("#ff8800");
            series.strokeWidth = 3;
            series.tensionX = 0.8;
            series.legendSettings.labelText = "Wahlbeteiligung (%)";
            
            
            var valueAxis2 = chart.yAxes.push(new am4charts.ValueAxis());
            valueAxis2.min = 0;
            
            
            // Create series2
            var series2 = chart.series.push(new am4charts.LineSeries());
            series2.yAxis = valueAxis2
            series2.dataFields.valueY = "total";
            series2.dataFields.categoryX = "name";
            series2.tooltipText = "{total} Stimmen"
            series2.stroke = am4core.color("#663399"); // red
            series2.fill = am4core.color("#663399");
            series2.strokeWidth = 3;
            series2.tensionX = 0.8;
            series2.legendSettings.labelText = "Abgegebene Stimmen pro Jahrgang*";
            
            
            chart.cursor = new am4charts.XYCursor();
            
            chart.cursor.xAxis = categoryAxis;
            
            // Add legend
            chart.legend = new am4charts.Legend();
            }
            
            function drawuus(data) {
            var chart = am4core.create("chartdiv5", am4charts.XYChart);
            chart.data = data;
            var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
            categoryAxis.dataFields.category = "name";
            categoryAxis.renderer.grid.template.location = 0;
            categoryAxis.renderer.minGridDistance = 30;
            categoryAxis.renderer.labels.template.rotation = -60;
            var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
            valueAxis.min = 0;
            var title2 = chart.titles.create();
              title2.text = "Unterstützungsunterschriften";
              title2.fontSize = 25;
              title2.marginBottom = 10;
            
            // Create series
            var series = chart.series.push(new am4charts.ColumnSeries());
            series.dataFields.valueY = "value";
            series.dataFields.categoryX = "name";
            series.columns.template.tooltipText = "{categoryX}: [bold]{valueY}[/]";
            series.columns.template.fillOpacity = .8;
            series.fill = am4core.color("#ff8800");
            series.stroke = am4core.color("#ff8800");
            series.strokeWidth = 0;
            
            var columnTemplate = series.columns.template;
            columnTemplate.strokeWidth = 2;
            columnTemplate.strokeOpacity = 1;
            
            }
            
            
            data = [{
              "Partei": "GRÜNE",
              "Sitze": 47,
              "Stimmen": 30.3,
              "color": am4core.color("#489324")
            }, 
            {
              "Partei": "CDU",
              "Sitze": 42,
              "Stimmen": 27,
              "color": am4core.color("#000000")
            }, 
            {
              "Partei": "AfD",
              "Sitze": 23,
              "Stimmen": 15.1,
              "color": am4core.color("#00ade5")
            }, 
            {
              "Partei": "SPD",
              "Sitze": 19,
              "Stimmen": 12.7,
              "color": am4core.color("#dc0612")
            }, 
            {
              "Partei": "FDP",
              "Sitze": 12,
              "Stimmen": 8.3,
              "color": am4core.color("#f2e41d")
            }, 
            {
              "Partei": "Linke",
              "Sitze": 0,
              "Stimmen": 2.9,
              "color": am4core.color("#b80355")
            }, 
            {
              "Partei": "Sonstige",
              "Sitze": 0,
              "Stimmen": 3.7,
              "color": am4core.color("#AEAEAE")
            }];
            
            data_youth = [
            {
              "Partei": "CDU",
              "Stimmen U18": 26.1,
              "Stimmen": 27,
              "color": am4core.color("#000000")
            }, 
            {
              "Partei": "GRÜNE",
              "Stimmen U18": 25.8,
              "Stimmen": 30.3,
              "color": am4core.color("#489324")
            }, 
            {
              "Partei": "SPD",
              "Stimmen U18": 18.4,
              "Stimmen": 12.7,
              "color": am4core.color("#dc0612")
            }, 
            {
              "Partei": "AfD",
              "Stimmen U18": 6.9,
              "Stimmen": 15.1,
              "color": am4core.color("#00ade5")
            }, 
            
            {
              "Partei": "FDP",
              "Stimmen U18": 5,
              "Stimmen": 8.3,
              "color": am4core.color("#f2e41d")
            }, 
            {
              "Partei": "Linke",
              "Stimmen U18": 4.9,
              "Stimmen": 2.9,
              "color": am4core.color("#b80355")
            }, 
            {
              "Partei": "Sonstige",
              "Stimmen U18": 15,
              "Stimmen": 3.7,
              "color": am4core.color("#AEAEAE")
            }];
            
            sitze_gerundet = [{
              "Partei": "GRÜNE",
              "Sitze": 36,
              "Stimmen": 47,
              "color": am4core.color("#489324")
            }, 
            {
              "Partei": "CDU",
              "Sitze": 32,
              "Stimmen": 42,
              "color": am4core.color("#000000")
            }, 
            {
              "Partei": "AfD",
              "Sitze": 18,
              "Stimmen": 23,
              "color": am4core.color("#00ade5")
            }, 
            {
              "Partei": "SPD",
              "Sitze": 15,
              "Stimmen": 19,
              "color": am4core.color("#dc0612")
            }, 
            {
              "Partei": "FDP",
              "Sitze": 10,
              "Stimmen": 12,
              "color": am4core.color("#f2e41d")
            }, 
            {
              "Partei": "Linke",
              "Sitze": 3,
              "Stimmen": 0,
              "color": am4core.color("#b80355")
            }, 
            {
              "Partei": "Sonstige",
              "Sitze": 4,
              "Stimmen": 0,
              "color": am4core.color("#AEAEAE")
            }];
            
            sitze_sl = [{
              "Partei": "GRÜNE",
              "Sitze": 37,
              "Stimmen": 47,
              "color": am4core.color("#489324")
            }, 
            {
              "Partei": "CDU",
              "Sitze": 33,
              "Stimmen": 42,
              "color": am4core.color("#000000")
            }, 
            {
              "Partei": "AfD",
              "Sitze": 18,
              "Stimmen": 23,
              "color": am4core.color("#00ade5")
            }, 
            {
              "Partei": "SPD",
              "Sitze": 15,
              "Stimmen": 19,
              "color": am4core.color("#dc0612")
            }, 
            {
              "Partei": "FDP",
              "Sitze": 10,
              "Stimmen": 12,
              "color": am4core.color("#f2e41d")
            }, 
            {
              "Partei": "Linke",
              "Sitze": 4,
              "Stimmen": 0,
              "color": am4core.color("#b80355")
            }, 
            {
              "Partei": "Sonstige",
              "Sitze": 3,
              "Stimmen": 0,
              "color": am4core.color("#AEAEAE")
            }];
            sitze_dh = [{
              "Partei": "GRÜNE",
              "Sitze": 38,
              "Stimmen": 47,
              "color": am4core.color("#489324")
            }, 
            {
              "Partei": "CDU",
              "Sitze": 34,
              "Stimmen": 42,
              "color": am4core.color("#000000")
            }, 
            {
              "Partei": "AfD",
              "Sitze": 19,
              "Stimmen": 23,
              "color": am4core.color("#00ade5")
            }, 
            {
              "Partei": "SPD",
              "Sitze": 15,
              "Stimmen": 19,
              "color": am4core.color("#dc0612")
            }, 
            {
              "Partei": "FDP",
              "Sitze": 10,
              "Stimmen": 12,
              "color": am4core.color("#f2e41d")
            }, 
            {
              "Partei": "Linke",
              "Sitze": 3,
              "Stimmen": 0,
              "color": am4core.color("#b80355")
            }, 
            {
              "Partei": "Sonstige",
              "Sitze": 3,
              "Stimmen": 0      ,
              "color": am4core.color("#AEAEAE")
            }];
            stimmen_verloren = [
            
            {
            "name": "5% Hürde \n(aktuelles Recht)",
            "value":  355892
            },
            {
            "name": "0% Hürde \n(d'Hondt)*",
            "value":  144939
            },
            {
            "name": "0% Hürde \n(Sainte Lague)*",
            "value":  82813
            }
            
            ];
            wahlb = [
            {
            "name": "18-20",
            "value":  55.9,
            "total": 43919
            },
            {
            "name": "21-24",
            "value":  52,
            "total": 55939
            },
            {
            "name": "25-29",
            "value":  54.8,
            "total": 62593
            },
            {
            "name": "30-34",
            "value":  59.6,
            "total": 64606
            },
            {
            "name": "35-39",
            "value":  62.1,
            "total": 62634
            },
            {
            "name": "40-44",
            "value":  65.6,
            "total": 66400
            },
            {
            "name": "45-49",
            "value":  69.1,
            "total": 96132
            },
            {
            "name": "50-59",
            "value":  71.5,
            "total": 110789
            },
            {
            "name": "60-69",
            "value":  73.8,
            "total": 81291
            },
            {
            "name": "70+**",
            "value":  73.8,
            "total": 86004
            }
            
            ];
            uus = [
            
            {
            "name": "Landtagswahl*",
            "value":  10500
            },
            {
            "name": "Bundestagswahl \n(min)**",
            "value":  2000
            },
            {
            "name": "Europawahl***",
            "value":  2000
            }
            
            ];
            
            
            am4core.ready(function() {
            am4core.useTheme(am4themes_material);
            drawchart(data, "Aktuelle Sitzverteilung");
            drawchart2(sitze_gerundet, "Rechnerische Sitzverteilung\n(gerundet)*");
            drawchart3(data_youth, "Stimmen bei der Jugendwahl");
            drawlostvotes(stimmen_verloren);
            drawwb(wahlb);
            drawuus(uus);
            });
            
        </script>
        <!-- HTML -->
        <div class="wrapper container-fluid ">
            <div class="header">
                <h1>Wahlrecht reformieren!</h1>
            </div>
            <div class="txt orange">
                Das Wahlrecht in Baden-Württemberg benachteiligt massiv kleine Parteien. Die Hürden für die Teilnahme an der Wahl und das Wahlrecht selbst verhindern, dass große Teile der Bevölkerung im Landtag vertreten sind.<br>
                <br>
                Zeit das Landatagswahlrecht zu reformieren!
            </div>
            <!-- HEAD Text Element -->
            <div class="row">
                <div class="col-md-3"></div>
                <div class="txt headertxt col-md-6">
                    <h2>Unsere Forderungen in kurz</h2>
                </div>
                <div class="col-md-3"></div>
            </div>
            <!-- Text Element -->
            <div class="row">
                <div class="col-md-3"></div>
                <div class="txt col-md-6">
                    <ul>
                        <li>Abschaffung der 5%-Hürde</li>
                        <li>Änderung des Wahlrechts zu Listen- und Kandidatenwahl</li>
                        <li>Wahlrecht ab 16 Jahren</li>
                    </ul>
                </div>
                <div class="col-md-3"></div>
            </div>
            <!-- HEAD Text Element -->
            <div class="row">
                <div class="col-md-3"></div>
                <div class="txt headertxt col-md-6">
                    <h2>Prozenthürden und Wahlverfahren</h2>
                </div>
                <div class="col-md-3"></div>
            </div>
            <!-- Text Element -->
            <div class="row">
                <div class="col-md-3"></div>
                <div class="txt col-md-6">
                    In Baden-Württemberg kann eine Partei nicht direkt gewählt werden, stattdessen kann jede Partei einen Kandidaten in jedem der 70 Wahlkreise zur Wahl stellen. Auch parteilose Kandidaten können sich zur Wahl stellen. 
                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="chart">
                <div id="chartdiv1" class="chartdiv"></div>
                <div class="sub">
                    Außen: tatsächliche Sitzverteilung im Landtag 2019; Innen: errungener Stimmenanteil;<br>
                </div>
            </div>
            <!-- Text Element -->
            <div class="row">
                <div class="col-md-3"></div>
                <div class="txt col-md-6">
                    Das bedeutet aber auch, dass Parteien nur in Wahlkreisen wählbar sind in denen ein Kandidat aufgestellt wird. Das erfolgt seperat in jedem Wahlkreis in einer Aufstellungsversammlung, dafür sind mindestens drei Parteimitglieder notwendig. Der Aufwand für 70 solche Aufstellungsversammlungen ist enorm und für kleine Parteien nur schwer zu stemmen. Bei anderen Wahlen, etwa der Bundestagswahl, sind Parteien auch über eine Landesliste direkt wählbar. 
                    <br><br>
                    Gewählt ist wer die Mehrheit im Wahlkreis erringt. Für die restlichen der 120 Landtagssitze wird eine virtuelle Landesliste gebildet mit den Ergebnissen in den Wahlkreisen der Kandidaten der jeweiligen Partei. Die verbleibenden Sitze werden dann unter den Parteien aufgeteilt die landesweit mindestens 5% der Stimmen errungen haben. Bei 70 der Sitzen im Landtag werden somit lediglich die stärksten Kandidaten der Wahlkreise berücksichtigt, Stimmen für die nachfolgenden Kandidaten sind für diese 70 Sitze nicht relevant.
                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="chart">
                <button type="button" class="btn btn-primary btn-sl btn-block" onclick="drawchart2(sitze_gerundet, 'Rechnerische Sitzverteilung \n(gerundet)*')" >Rechnerische Sitzverteilung (gerundet)</button>  
                <button type="button" class="btn btn-primary btn-sl btn-block" onclick="drawchart2(sitze_sl, 'Rechnerische Sitzverteilung (Saint \nLague)*')" >Rechnerische Sitzverteilung (Saint Lague)</button>
                <button type="button" class="btn btn-primary btn-sl btn-block" onclick="drawchart2(sitze_dh, 'Rechnerische Sitzverteilung \n(d`Hondt)*')" >Rechnerische Sitzverteilung (d'Hondt)</button>
                <div id="chartdiv2" class="inner-chartdiv"></div>
                <div class="sub">
                    <i>* Ohne Überhangs- und Ausgleichsmandate</i><br><br>
                    Außen: Sitzverteilung bei 0%-Hürde und verschiedenen Auszählverfahren; Innen: tatsächliche Sitzverteilung 2019 im Landtag;
                </div>
            </div>
            <!-- Text Element -->
            <div class="row">
                <div class="col-md-3"></div>
                <div class="txt col-md-6">
                    Diese beiden Ausgestaltungen des Wahlrechts führen dazu, dass kleine Parteien benachteiligt sind. Zum Einen ist es mit wenigen Mitglieder und finanziellen Mitteln schwer 70 Aufstellungsversammlungen zu organisieren und auch mindestens 3 Mitglieder in jedem Wahlkreis zu haben. Zum Anderen müssen 5% der Stimmen errungen werden um in den Landtag einzuziehen. Wahlkreise in denen kein Kandidat aufgestellt werden konnte fließen mit 0% ein.
                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="chart col-md-8">
                    <div id="chartdiv3" class="chartdiv"></div>
                    <div class="sub">
                        <i>* Stimmen für Wahlvorschläge ohne Sitz</i><br><br>
                        Stimmen bei der Landtagswahl 2016 die nicht im Landtag berücksichtigt würden nach verschiedenen Hürden und Auszählverfahren.
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
            <!-- HEAD Text Element -->
            <div class="row">
                <div class="col-md-3"></div>
                <div class="txt headertxt col-md-6">
                    <h2>Unterstützungs-Unterschriften</h2>
                </div>
                <div class="col-md-3"></div>
            </div>
            <!-- Text Element -->
            <div class="row">
                <div class="col-md-3"></div>
                <div class="txt col-md-6">
                    Parteien die nicht im Landtag vertreten sind müssen in jedem Wahlkreis in dem ein Kandidat zur Wahl gestellt wird 150 Unterstützungsunterschriften sammeln. Jeder im Wahlkreis wahlberechtigte darf nur für eine Partei eine Unterstützungserklärung abgeben.   
                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="chart col-md-8">
                    <div id="chartdiv5" class="chartdiv"></div>
                    <div class="sub">
                        <i>* Unterschriften für alle 70 Wahlkreise</i><br>
                        <i>** Unterschriften für Baden-Württemberg (Landesliste, Minimalanforderung für Wahl)</i><br>
                        <i>*** Unterschriften für Baden-Württemberg</i><br><br>
                        Unterstützungsunterschriften für die Landtags-, Bundestags- und Europawahl.
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
            <!-- Text Element -->
            <div class="row">
                <div class="col-md-3"></div>
                <div class="txt col-md-6">
                    Das sind im gesamten Land 10.500 Unterschriften die jede Partei sammeln muss. Im Vergleich dazu ist die Anzahl für andere Wahlen wesentlich geringer. Der Aufwand zum Sammeln ist enorm, wird aber nur kleinen Parteien aufgebunden.<br><br>
                    Zusätzlich werden auf den Formularen tausende Datensätze von Wahlberechtigten gesammelt die mehrfach postalisch versandt werden müssen. Ein nicht zu verachtednes datenschutztechnisches Risiko.
                </div>
                <div class="col-md-3"></div>
            </div>
            <!-- HEAD Text Element -->
            <div class="row">
                <div class="col-md-3"></div>
                <div class="txt headertxt col-md-6">
                    <h2>Jugendwahlrecht</h2>
                </div>
                <div class="col-md-3"></div>
            </div>
            <!-- Text Element -->
            <div class="row">
                <div class="col-md-3"></div>
                <div class="txt col-md-6">
                    Zur Landtagswahl sind Personen erst ab dem 18. Lebensjahr wahlberechtigt. Der demographische Wandel und eine höhere Wahlbeteilgung bei den älteren Personen führt zu einem Ungleichgewicht bei den Wahlen.   
                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="chart col-md-8">
                    <div id="chartdiv4" class="chartdiv"></div>
                    <div class="sub">
                        <i>* Stimmen im jeweiligen Altersbereich pro Jahrgang um verschiedene Altersspannen auszugleichen</i><br>
                        <i>** Annahme: durchschnittliche Lebenserwartung 81 Jahre </i><br><br>
                        Wahlbeteiligung und Stimmen pro Jahrgang nach Altersgruppen zur Landtagswahl 2016.
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
            <!-- Text Element -->
            <div class="row">
                <div class="col-md-3"></div>
                <div class="txt col-md-6">
                    Dabei zeigen Jugendliche und junge Erwachsene ein anderes Wahlverhalten. Um auch jungen Personen die Teilhabe an unserer Demokratie zu ermöglichen ist ein Jugendwahlrecht unumgänglich.   
                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="chart">
                <div id="chartdiv6" class="chartdiv"></div>
                <div class="sub">
                    Außen: Stimmenanteile zur U18-Wahl 2016; Innen: Stimmenanteile zur Landtagswahl 2016;
                </div>
            </div>
        </div>
        <div class="footer">
            <b>Ein Projekt von:</b><br>
            <img src="img/logo_piratenbw.png">
            <br>
            <a hreF="https://piratenpartei-bw.de/impressum/">IMPRESSUM</a> | <a href="https://piratenpartei-bw.de/datenschutzerklaerung/">DATENSCHUTZ</a>
        </div>
    </body>
</html>

