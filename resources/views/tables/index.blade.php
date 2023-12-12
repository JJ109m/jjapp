@extends('layouts.admin')

@section('content')
<main class="main-content">
    <div class="contents">
        <div class="row">

            <!-- Line Area Chart -->
            <div class="col-12 mb-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div>
                            <h5 class="card-title mb-0">Last updates</h5>
                            <small class="text-muted">Commercial networks</small>
                        </div>
                        <div class="dropdown">
                            <button type="button" class="btn dropdown-toggle px-0" data-bs-toggle="dropdown"
                                aria-expanded="false"><i class="bx bx-calendar"></i></button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Today</a></li>
                                <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Yesterday</a>
                                </li>
                                <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 7
                                        Days</a></li>
                                <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 30
                                        Days</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Current
                                        Month</a></li>
                                <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last Month</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body" style="position: relative;">
                        <div id="lineAreaChart" style="min-height: 400px;">
                            <div id="apexcharts4e91b3gh" class="apexcharts-canvas apexcharts4e91b3gh apexcharts-theme-light"
                                style="width: 983px; height: 400px;"><svg id="SvgjsSvg1001" width="983" height="400"
                                    xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable hovering-zoom"
                                    xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                    <foreignObject x="0" y="0" width="983" height="400">
                                        <div class="apexcharts-legend apexcharts-align-start apx-legend-position-top"
                                            xmlns="http://www.w3.org/1999/xhtml"
                                            style="right: 0px; position: absolute; left: 0px; top: 4px; max-height: 200px;">
                                            <div class="apexcharts-legend-series" rel="1" seriesname="Visits"
                                                data:collapsed="false" style="margin: 2px 5px;"><span
                                                    class="apexcharts-legend-marker" rel="1" data:collapsed="false"
                                                    style="background: rgb(165, 248, 205) !important; color: rgb(165, 248, 205); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                    class="apexcharts-legend-text" rel="1" i="0"
                                                    data:default-text="Visits" data:collapsed="false"
                                                    style="color: rgb(105, 122, 141); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Visits</span>
                                            </div>
                                            <div class="apexcharts-legend-series" rel="2" seriesname="Clicks"
                                                data:collapsed="false" style="margin: 2px 5px;"><span
                                                    class="apexcharts-legend-marker" rel="2" data:collapsed="false"
                                                    style="background: rgb(96, 242, 202) !important; color: rgb(96, 242, 202); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                    class="apexcharts-legend-text" rel="2" i="1"
                                                    data:default-text="Clicks" data:collapsed="false"
                                                    style="color: rgb(105, 122, 141); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Clicks</span>
                                            </div>
                                            <div class="apexcharts-legend-series" rel="3" seriesname="Sales"
                                                data:collapsed="false" style="margin: 2px 5px;"><span
                                                    class="apexcharts-legend-marker" rel="3" data:collapsed="false"
                                                    style="background: rgb(41, 218, 199) !important; color: rgb(41, 218, 199); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                    class="apexcharts-legend-text" rel="3" i="2"
                                                    data:default-text="Sales" data:collapsed="false"
                                                    style="color: rgb(105, 122, 141); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Sales</span>
                                            </div>
                                        </div>
                                        <style type="text/css">
                                            .apexcharts-legend {
                                                display: flex;
                                                overflow: auto;
                                                padding: 0 10px;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom,
                                            .apexcharts-legend.apx-legend-position-top {
                                                flex-wrap: wrap
                                            }

                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                flex-direction: column;
                                                bottom: 0;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                justify-content: flex-start;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                justify-content: center;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                justify-content: flex-end;
                                            }

                                            .apexcharts-legend-series {
                                                cursor: pointer;
                                                line-height: normal;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                                            .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                                display: flex;
                                                align-items: center;
                                            }

                                            .apexcharts-legend-text {
                                                position: relative;
                                                font-size: 14px;
                                            }

                                            .apexcharts-legend-text *,
                                            .apexcharts-legend-marker * {
                                                pointer-events: none;
                                            }

                                            .apexcharts-legend-marker {
                                                position: relative;
                                                display: inline-block;
                                                cursor: pointer;
                                                margin-right: 3px;
                                                border-style: solid;
                                            }

                                            .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                            .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                                display: inline-block;
                                            }

                                            .apexcharts-legend-series.apexcharts-no-click {
                                                cursor: auto;
                                            }

                                            .apexcharts-legend .apexcharts-hidden-zero-series,
                                            .apexcharts-legend .apexcharts-hidden-null-series {
                                                display: none !important;
                                            }

                                            .apexcharts-inactive-legend {
                                                opacity: 0.45;
                                            }
                                        </style>
                                    </foreignObject>
                                    <g id="SvgjsG1003" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(48.703125, 48)">
                                        <defs id="SvgjsDefs1002">
                                            <clipPath id="gridRectMask4e91b3gh">
                                                <rect id="SvgjsRect1009" width="915.0234375" height="316.73" x="-4" y="-2"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMask4e91b3gh"></clipPath>
                                            <clipPath id="nonForecastMask4e91b3gh"></clipPath>
                                            <clipPath id="gridRectMarkerMask4e91b3gh">
                                                <rect id="SvgjsRect1010" width="911.0234375" height="316.73" x="-2" y="-2"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                        </defs>
                                        <line id="SvgjsLine1008" x1="453.01171875000006" y1="0"
                                            x2="453.01171875000006" y2="312.73" stroke="#b6b6b6" stroke-dasharray="3"
                                            stroke-linecap="butt" class="apexcharts-xcrosshairs" x="453.01171875000006" y="0"
                                            width="1" height="312.73" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                            stroke-width="1"></line>
                                        <g id="SvgjsG1024" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG1025" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)">
                                                <text id="SvgjsText1027" font-family="Helvetica, Arial, sans-serif" x="0"
                                                    y="341.73" text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                                    font-weight="400" fill="#a1acb8"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1028">7/12</tspan>
                                                    <title>7/12</title>
                                                </text><text id="SvgjsText1030" font-family="Helvetica, Arial, sans-serif"
                                                    x="75.58528645833334" y="341.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1031">8/12</tspan>
                                                    <title>8/12</title>
                                                </text><text id="SvgjsText1033" font-family="Helvetica, Arial, sans-serif"
                                                    x="151.17057291666666" y="341.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1034">9/12</tspan>
                                                    <title>9/12</title>
                                                </text><text id="SvgjsText1036" font-family="Helvetica, Arial, sans-serif"
                                                    x="226.75585937499997" y="341.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1037">10/12</tspan>
                                                    <title>10/12</title>
                                                </text><text id="SvgjsText1039" font-family="Helvetica, Arial, sans-serif"
                                                    x="302.34114583333326" y="341.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1040">11/12</tspan>
                                                    <title>11/12</title>
                                                </text><text id="SvgjsText1042" font-family="Helvetica, Arial, sans-serif"
                                                    x="377.9264322916666" y="341.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1043">12/12</tspan>
                                                    <title>12/12</title>
                                                </text><text id="SvgjsText1045" font-family="Helvetica, Arial, sans-serif"
                                                    x="453.5117187499999" y="341.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1046">13/12</tspan>
                                                    <title>13/12</title>
                                                </text><text id="SvgjsText1048" font-family="Helvetica, Arial, sans-serif"
                                                    x="529.0970052083333" y="341.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1049">14/12</tspan>
                                                    <title>14/12</title>
                                                </text><text id="SvgjsText1051" font-family="Helvetica, Arial, sans-serif"
                                                    x="604.6822916666666" y="341.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1052">15/12</tspan>
                                                    <title>15/12</title>
                                                </text><text id="SvgjsText1054" font-family="Helvetica, Arial, sans-serif"
                                                    x="680.267578125" y="341.73" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1055">16/12</tspan>
                                                    <title>16/12</title>
                                                </text><text id="SvgjsText1057" font-family="Helvetica, Arial, sans-serif"
                                                    x="755.8528645833334" y="341.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1058">17/12</tspan>
                                                    <title>17/12</title>
                                                </text><text id="SvgjsText1060" font-family="Helvetica, Arial, sans-serif"
                                                    x="831.4381510416667" y="341.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1061">18/12</tspan>
                                                    <title>18/12</title>
                                                </text><text id="SvgjsText1063" font-family="Helvetica, Arial, sans-serif"
                                                    x="907.0234375000001" y="341.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1064">19/12</tspan>
                                                    <title>19/12</title>
                                                </text></g>
                                        </g>
                                        <g id="SvgjsG1077" class="apexcharts-grid">
                                            <g id="SvgjsG1078" class="apexcharts-gridlines-horizontal">
                                                <line id="SvgjsLine1093" x1="0" y1="0" x2="907.0234375"
                                                    y2="0" stroke="#eceef1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1094" x1="0" y1="78.1825" x2="907.0234375"
                                                    y2="78.1825" stroke="#eceef1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1095" x1="0" y1="156.365" x2="907.0234375"
                                                    y2="156.365" stroke="#eceef1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1096" x1="0" y1="234.5475" x2="907.0234375"
                                                    y2="234.5475" stroke="#eceef1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1097" x1="0" y1="312.73" x2="907.0234375"
                                                    y2="312.73" stroke="#eceef1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG1079" class="apexcharts-gridlines-vertical">
                                                <line id="SvgjsLine1080" x1="0" y1="0" x2="0"
                                                    y2="312.73" stroke="#eceef1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1081" x1="75.58528645833333" y1="0"
                                                    x2="75.58528645833333" y2="312.73" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                                </line>
                                                <line id="SvgjsLine1082" x1="151.17057291666666" y1="0"
                                                    x2="151.17057291666666" y2="312.73" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                                </line>
                                                <line id="SvgjsLine1083" x1="226.755859375" y1="0"
                                                    x2="226.755859375" y2="312.73" stroke="#eceef1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1084" x1="302.3411458333333" y1="0"
                                                    x2="302.3411458333333" y2="312.73" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                                </line>
                                                <line id="SvgjsLine1085" x1="377.92643229166663" y1="0"
                                                    x2="377.92643229166663" y2="312.73" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                                </line>
                                                <line id="SvgjsLine1086" x1="453.51171874999994" y1="0"
                                                    x2="453.51171874999994" y2="312.73" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                                </line>
                                                <line id="SvgjsLine1087" x1="529.0970052083333" y1="0"
                                                    x2="529.0970052083333" y2="312.73" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                                </line>
                                                <line id="SvgjsLine1088" x1="604.6822916666666" y1="0"
                                                    x2="604.6822916666666" y2="312.73" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                                </line>
                                                <line id="SvgjsLine1089" x1="680.267578125" y1="0"
                                                    x2="680.267578125" y2="312.73" stroke="#eceef1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1090" x1="755.8528645833334" y1="0"
                                                    x2="755.8528645833334" y2="312.73" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                                </line>
                                                <line id="SvgjsLine1091" x1="831.4381510416667" y1="0"
                                                    x2="831.4381510416667" y2="312.73" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                                </line>
                                                <line id="SvgjsLine1092" x1="907.0234375000001" y1="0"
                                                    x2="907.0234375000001" y2="312.73" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                                </line>
                                            </g>
                                            <line id="SvgjsLine1099" x1="0" y1="312.73" x2="907.0234375"
                                                y2="312.73" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                            <line id="SvgjsLine1098" x1="0" y1="1" x2="0"
                                                y2="312.73" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                        </g>
                                        <g id="SvgjsG1011" class="apexcharts-area-series apexcharts-plot-series">
                                            <g id="SvgjsG1012" class="apexcharts-series" seriesName="Visits"
                                                data:longestSeries="true" rel="1" data:realIndex="0">
                                                <path id="SvgjsPath1015"
                                                    d="M0 312.73L0 234.5475L75.58528645833334 218.911L151.17057291666669 242.36575L226.75585937500003 179.81975L302.34114583333337 211.09275000000002L377.9264322916667 187.638L453.51171875000006 203.2745L529.0970052083334 125.09200000000001L604.6822916666667 140.7285L680.267578125 172.0015L755.8528645833334 101.63725L831.4381510416667 93.81899999999999L907.0234375000001 19.545624999999973C907.0234375000001 19.545624999999973 907.0234375000001 312.73 907.0234375000001 312.73M907.0234375000001 19.545624999999973C907.0234375000001 19.545624999999973 907.0234375000001 19.545624999999973 907.0234375000001 19.545624999999973 "
                                                    fill="rgba(165,248,205,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-area" index="0"
                                                    clip-path="url(#gridRectMask4e91b3gh)"
                                                    pathTo="M 0 312.73L 0 234.5475L 75.58528645833334 218.911L 151.17057291666669 242.36575L 226.75585937500003 179.81975L 302.34114583333337 211.09275000000002L 377.9264322916667 187.638L 453.51171875000006 203.2745L 529.0970052083334 125.09200000000001L 604.6822916666667 140.7285L 680.267578125 172.0015L 755.8528645833334 101.63725L 831.4381510416667 93.81899999999999L 907.0234375000001 19.545624999999973L 907.0234375000001 312.73M 907.0234375000001 19.545624999999973z"
                                                    pathFrom="M -1 312.73L -1 312.73L 75.58528645833334 312.73L 151.17057291666669 312.73L 226.75585937500003 312.73L 302.34114583333337 312.73L 377.9264322916667 312.73L 453.51171875000006 312.73L 529.0970052083334 312.73L 604.6822916666667 312.73L 680.267578125 312.73L 755.8528645833334 312.73L 831.4381510416667 312.73L 907.0234375000001 312.73">
                                                </path>
                                                <g id="SvgjsG1013" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                                    <g class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle1105" r="0" cx="453.51171875000006"
                                                            cy="203.2745"
                                                            class="apexcharts-marker wr1jwtql3 no-pointer-events"
                                                            stroke="#ffffff" fill="#a5f8cd" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" default-marker-size="0">
                                                        </circle>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1016" class="apexcharts-series" seriesName="Clicks"
                                                data:longestSeries="true" rel="2" data:realIndex="1">
                                                <path id="SvgjsPath1019"
                                                    d="M0 312.73L0 265.82050000000004L75.58528645833334 250.18400000000003L151.17057291666669 258.00225L226.75585937500003 226.72925L302.34114583333337 250.18400000000003L377.9264322916667 234.5475L453.51171875000006 242.36575L529.0970052083334 172.0015L604.6822916666667 187.638L680.267578125 203.2745L755.8528645833334 156.365L831.4381510416667 140.7285L907.0234375000001 97.728125C907.0234375000001 97.728125 907.0234375000001 312.73 907.0234375000001 312.73M907.0234375000001 97.728125C907.0234375000001 97.728125 907.0234375000001 97.728125 907.0234375000001 97.728125 "
                                                    fill="rgba(96,242,202,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-area" index="1"
                                                    clip-path="url(#gridRectMask4e91b3gh)"
                                                    pathTo="M 0 312.73L 0 265.82050000000004L 75.58528645833334 250.18400000000003L 151.17057291666669 258.00225L 226.75585937500003 226.72925L 302.34114583333337 250.18400000000003L 377.9264322916667 234.5475L 453.51171875000006 242.36575L 529.0970052083334 172.0015L 604.6822916666667 187.638L 680.267578125 203.2745L 755.8528645833334 156.365L 831.4381510416667 140.7285L 907.0234375000001 97.728125L 907.0234375000001 312.73M 907.0234375000001 97.728125z"
                                                    pathFrom="M -1 312.73L -1 312.73L 75.58528645833334 312.73L 151.17057291666669 312.73L 226.75585937500003 312.73L 302.34114583333337 312.73L 377.9264322916667 312.73L 453.51171875000006 312.73L 529.0970052083334 312.73L 604.6822916666667 312.73L 680.267578125 312.73L 755.8528645833334 312.73L 831.4381510416667 312.73L 907.0234375000001 312.73">
                                                </path>
                                                <g id="SvgjsG1017" class="apexcharts-series-markers-wrap" data:realIndex="1">
                                                    <g class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle1106" r="0" cx="0"
                                                            cy="265.82050000000004"
                                                            class="apexcharts-marker wm5dka59r no-pointer-events"
                                                            stroke="#ffffff" fill="#60f2ca" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" default-marker-size="0">
                                                        </circle>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1020" class="apexcharts-series" seriesName="Sales"
                                                data:longestSeries="true" rel="3" data:realIndex="2">
                                                <path id="SvgjsPath1023"
                                                    d="M0 312.73L0 297.0935L75.58528645833334 281.457L151.17057291666669 289.27525L226.75585937500003 258.00225L302.34114583333337 281.457L377.9264322916667 265.82050000000004L453.51171875000006 273.63875L529.0970052083334 203.2745L604.6822916666667 218.911L680.267578125 234.5475L755.8528645833334 203.2745L831.4381510416667 172.0015L907.0234375000001 140.7285C907.0234375000001 140.7285 907.0234375000001 312.73 907.0234375000001 312.73M907.0234375000001 140.7285C907.0234375000001 140.7285 907.0234375000001 140.7285 907.0234375000001 140.7285 "
                                                    fill="rgba(41,218,199,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-area" index="2"
                                                    clip-path="url(#gridRectMask4e91b3gh)"
                                                    pathTo="M 0 312.73L 0 297.0935L 75.58528645833334 281.457L 151.17057291666669 289.27525L 226.75585937500003 258.00225L 302.34114583333337 281.457L 377.9264322916667 265.82050000000004L 453.51171875000006 273.63875L 529.0970052083334 203.2745L 604.6822916666667 218.911L 680.267578125 234.5475L 755.8528645833334 203.2745L 831.4381510416667 172.0015L 907.0234375000001 140.7285L 907.0234375000001 312.73M 907.0234375000001 140.7285z"
                                                    pathFrom="M -1 312.73L -1 312.73L 75.58528645833334 312.73L 151.17057291666669 312.73L 226.75585937500003 312.73L 302.34114583333337 312.73L 377.9264322916667 312.73L 453.51171875000006 312.73L 529.0970052083334 312.73L 604.6822916666667 312.73L 680.267578125 312.73L 755.8528645833334 312.73L 831.4381510416667 312.73L 907.0234375000001 312.73">
                                                </path>
                                                <g id="SvgjsG1021" class="apexcharts-series-markers-wrap" data:realIndex="2">
                                                    <g class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle1107" r="0" cx="0" cy="297.0935"
                                                            class="apexcharts-marker wqcn47wk4 no-pointer-events"
                                                            stroke="#ffffff" fill="#29dac7" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" default-marker-size="0">
                                                        </circle>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1014" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            <g id="SvgjsG1018" class="apexcharts-datalabels" data:realIndex="1"></g>
                                            <g id="SvgjsG1022" class="apexcharts-datalabels" data:realIndex="2"></g>
                                        </g>
                                        <line id="SvgjsLine1100" x1="0" y1="0" x2="907.0234375"
                                            y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1101" x1="0" y1="0" x2="907.0234375"
                                            y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG1102" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG1103" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG1104" class="apexcharts-point-annotations"></g>
                                        <rect id="SvgjsRect1108" width="0" height="0" x="0" y="0" rx="0"
                                            ry="0" opacity="1" stroke-width="0" stroke="none"
                                            stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                        <rect id="SvgjsRect1109" width="0" height="0" x="0" y="0" rx="0"
                                            ry="0" opacity="1" stroke-width="0" stroke="none"
                                            stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect>
                                    </g>
                                    <rect id="SvgjsRect1007" width="0" height="0" x="0" y="0" rx="0"
                                        ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                        fill="#fefefe"></rect>
                                    <g id="SvgjsG1065" class="apexcharts-yaxis" rel="0"
                                        transform="translate(18.703125, 0)">
                                        <g id="SvgjsG1066" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1067"
                                                font-family="Helvetica, Arial, sans-serif" x="20" y="49.4" text-anchor="end"
                                                dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1068">400</tspan>
                                                <title>400</title>
                                            </text><text id="SvgjsText1069" font-family="Helvetica, Arial, sans-serif" x="20"
                                                y="127.58250000000001" text-anchor="end" dominant-baseline="auto"
                                                font-size="13px" font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1070">300</tspan>
                                                <title>300</title>
                                            </text><text id="SvgjsText1071" font-family="Helvetica, Arial, sans-serif" x="20"
                                                y="205.76500000000001" text-anchor="end" dominant-baseline="auto"
                                                font-size="13px" font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1072">200</tspan>
                                                <title>200</title>
                                            </text><text id="SvgjsText1073" font-family="Helvetica, Arial, sans-serif" x="20"
                                                y="283.9475" text-anchor="end" dominant-baseline="auto" font-size="13px"
                                                font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1074">100</tspan>
                                                <title>100</title>
                                            </text><text id="SvgjsText1075" font-family="Helvetica, Arial, sans-serif" x="20"
                                                y="362.13" text-anchor="end" dominant-baseline="auto" font-size="13px"
                                                font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1076">0</tspan>
                                                <title>0</title>
                                            </text></g>
                                    </g>
                                    <g id="SvgjsG1004" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-tooltip apexcharts-theme-light"
                                    style="left: 386.543px; top: 206.274px;">
                                    <div class="apexcharts-tooltip-title"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">13/12</div>
                                    <div class="apexcharts-tooltip-series-group apexcharts-active"
                                        style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(165, 248, 205);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label">Visits: </span><span
                                                    class="apexcharts-tooltip-text-y-value">140</span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 2; display: none;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(165, 248, 205);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label">Visits: </span><span
                                                    class="apexcharts-tooltip-text-y-value">140</span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 3; display: none;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(165, 248, 205);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label">Visits: </span><span
                                                    class="apexcharts-tooltip-text-y-value">140</span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"
                                    style="left: 471.941px; top: 362.73px;">
                                    <div class="apexcharts-xaxistooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px; min-width: 37.5469px;">
                                        13/12</div>
                                </div>
                                <div
                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                    <div class="apexcharts-yaxistooltip-text"></div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 1032px; height: 425px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Line Area Chart -->

            <!-- Bar Chart -->
            <div class="col-12 mb-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-md-center align-items-start">
                        <h5 class="card-title mb-0">Data Science</h5>
                        <div class="dropdown">
                            <button type="button" class="btn dropdown-toggle p-0" data-bs-toggle="dropdown"
                                aria-expanded="false"><i class="bx bx-calendar"></i></button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Today</a>
                                </li>
                                <li><a href="javascript:void(0);"
                                        class="dropdown-item d-flex align-items-center">Yesterday</a></li>
                                <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 7
                                        Days</a></li>
                                <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 30
                                        Days</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Current
                                        Month</a></li>
                                <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last
                                        Month</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body" style="position: relative;">
                        <div id="barChart" style="min-height: 400px;">
                            <div id="apexchartseytspqza" class="apexcharts-canvas apexchartseytspqza apexcharts-theme-light"
                                style="width: 983px; height: 400px;"><svg id="SvgjsSvg1110" width="983" height="400"
                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent;">
                                    <foreignObject x="0" y="0" width="983" height="400">
                                        <div class="apexcharts-legend apexcharts-align-start apx-legend-position-top"
                                            xmlns="http://www.w3.org/1999/xhtml"
                                            style="right: 0px; position: absolute; left: 0px; top: 4px; max-height: 200px;">
                                            <div class="apexcharts-legend-series" rel="1" seriesname="Apple"
                                                data:collapsed="false" style="margin: 2px 5px;"><span
                                                    class="apexcharts-legend-marker" rel="1" data:collapsed="false"
                                                    style="background: rgb(130, 106, 249) !important; color: rgb(130, 106, 249); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 2px;"></span><span
                                                    class="apexcharts-legend-text" rel="1" i="0"
                                                    data:default-text="Apple" data:collapsed="false"
                                                    style="color: rgb(105, 122, 141); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Apple</span>
                                            </div>
                                            <div class="apexcharts-legend-series" rel="2" seriesname="Samsung"
                                                data:collapsed="false" style="margin: 2px 5px;"><span
                                                    class="apexcharts-legend-marker" rel="2" data:collapsed="false"
                                                    style="background: rgb(210, 176, 255) !important; color: rgb(210, 176, 255); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 2px;"></span><span
                                                    class="apexcharts-legend-text" rel="2" i="1"
                                                    data:default-text="Samsung" data:collapsed="false"
                                                    style="color: rgb(105, 122, 141); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Samsung</span>
                                            </div>
                                        </div>
                                        <style type="text/css">
                                            .apexcharts-legend {
                                                display: flex;
                                                overflow: auto;
                                                padding: 0 10px;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom,
                                            .apexcharts-legend.apx-legend-position-top {
                                                flex-wrap: wrap
                                            }

                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                flex-direction: column;
                                                bottom: 0;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                justify-content: flex-start;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                justify-content: center;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                justify-content: flex-end;
                                            }

                                            .apexcharts-legend-series {
                                                cursor: pointer;
                                                line-height: normal;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                                            .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                                display: flex;
                                                align-items: center;
                                            }

                                            .apexcharts-legend-text {
                                                position: relative;
                                                font-size: 14px;
                                            }

                                            .apexcharts-legend-text *,
                                            .apexcharts-legend-marker * {
                                                pointer-events: none;
                                            }

                                            .apexcharts-legend-marker {
                                                position: relative;
                                                display: inline-block;
                                                cursor: pointer;
                                                margin-right: 3px;
                                                border-style: solid;
                                            }

                                            .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                            .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                                display: inline-block;
                                            }

                                            .apexcharts-legend-series.apexcharts-no-click {
                                                cursor: auto;
                                            }

                                            .apexcharts-legend .apexcharts-hidden-zero-series,
                                            .apexcharts-legend .apexcharts-hidden-null-series {
                                                display: none !important;
                                            }

                                            .apexcharts-inactive-legend {
                                                opacity: 0.45;
                                            }
                                        </style>
                                    </foreignObject>
                                    <g id="SvgjsG1112" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(48.703125, 48)">
                                        <defs id="SvgjsDefs1111">
                                            <linearGradient id="SvgjsLinearGradient1116" x1="0" y1="0"
                                                x2="0" y2="1">
                                                <stop id="SvgjsStop1117" stop-opacity="0.4"
                                                    stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                <stop id="SvgjsStop1118" stop-opacity="0.5"
                                                    stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                <stop id="SvgjsStop1119" stop-opacity="0.5"
                                                    stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                            </linearGradient>
                                            <clipPath id="gridRectMaskeytspqza">
                                                <rect id="SvgjsRect1121" width="928.296875" height="312.73" x="-2" y="0"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMaskeytspqza"></clipPath>
                                            <clipPath id="nonForecastMaskeytspqza"></clipPath>
                                            <clipPath id="gridRectMarkerMaskeytspqza">
                                                <rect id="SvgjsRect1122" width="928.296875" height="316.73" x="-2" y="-2"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                        </defs>
                                        <rect id="SvgjsRect1120" width="13.864453125" height="312.73" x="316.5703369140625"
                                            y="0" rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke-dasharray="3" fill="url(#SvgjsLinearGradient1116)"
                                            class="apexcharts-xcrosshairs" y2="312.73" filter="none" fill-opacity="0.9"
                                            x1="316.5703369140625" x2="316.5703369140625"></rect>
                                        <g id="SvgjsG1158" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG1159" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)">
                                                <text id="SvgjsText1161" font-family="Helvetica, Arial, sans-serif"
                                                    x="46.21484375" y="341.73" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1162">7/12</tspan>
                                                    <title>7/12</title>
                                                </text><text id="SvgjsText1164" font-family="Helvetica, Arial, sans-serif"
                                                    x="138.64453125" y="341.73" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1165">8/12</tspan>
                                                    <title>8/12</title>
                                                </text><text id="SvgjsText1167" font-family="Helvetica, Arial, sans-serif"
                                                    x="231.07421875" y="341.73" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1168">9/12</tspan>
                                                    <title>9/12</title>
                                                </text><text id="SvgjsText1170" font-family="Helvetica, Arial, sans-serif"
                                                    x="323.50390625" y="341.73" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1171">10/12</tspan>
                                                    <title>10/12</title>
                                                </text><text id="SvgjsText1173" font-family="Helvetica, Arial, sans-serif"
                                                    x="415.93359375" y="341.73" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1174">11/12</tspan>
                                                    <title>11/12</title>
                                                </text><text id="SvgjsText1176" font-family="Helvetica, Arial, sans-serif"
                                                    x="508.36328125" y="341.73" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1177">12/12</tspan>
                                                    <title>12/12</title>
                                                </text><text id="SvgjsText1179" font-family="Helvetica, Arial, sans-serif"
                                                    x="600.79296875" y="341.73" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1180">13/12</tspan>
                                                    <title>13/12</title>
                                                </text><text id="SvgjsText1182" font-family="Helvetica, Arial, sans-serif"
                                                    x="693.22265625" y="341.73" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1183">14/12</tspan>
                                                    <title>14/12</title>
                                                </text><text id="SvgjsText1185" font-family="Helvetica, Arial, sans-serif"
                                                    x="785.65234375" y="341.73" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1186">15/12</tspan>
                                                    <title>15/12</title>
                                                </text><text id="SvgjsText1188" font-family="Helvetica, Arial, sans-serif"
                                                    x="878.08203125" y="341.73" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1189">16/12</tspan>
                                                    <title>16/12</title>
                                                </text></g>
                                        </g>
                                        <g id="SvgjsG1202" class="apexcharts-grid">
                                            <g id="SvgjsG1203" class="apexcharts-gridlines-horizontal">
                                                <line id="SvgjsLine1216" x1="0" y1="0" x2="924.296875"
                                                    y2="0" stroke="#eceef1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1217" x1="0" y1="78.1825" x2="924.296875"
                                                    y2="78.1825" stroke="#eceef1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1218" x1="0" y1="156.365" x2="924.296875"
                                                    y2="156.365" stroke="#eceef1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1219" x1="0" y1="234.5475" x2="924.296875"
                                                    y2="234.5475" stroke="#eceef1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1220" x1="0" y1="312.73" x2="924.296875"
                                                    y2="312.73" stroke="#eceef1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG1204" class="apexcharts-gridlines-vertical">
                                                <line id="SvgjsLine1205" x1="0" y1="0" x2="0"
                                                    y2="312.73" stroke="#eceef1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1206" x1="92.4296875" y1="0" x2="92.4296875"
                                                    y2="312.73" stroke="#eceef1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1207" x1="184.859375" y1="0" x2="184.859375"
                                                    y2="312.73" stroke="#eceef1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1208" x1="277.2890625" y1="0"
                                                    x2="277.2890625" y2="312.73" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1209" x1="369.71875" y1="0" x2="369.71875"
                                                    y2="312.73" stroke="#eceef1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1210" x1="462.1484375" y1="0"
                                                    x2="462.1484375" y2="312.73" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1211" x1="554.578125" y1="0" x2="554.578125"
                                                    y2="312.73" stroke="#eceef1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1212" x1="647.0078125" y1="0"
                                                    x2="647.0078125" y2="312.73" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1213" x1="739.4375" y1="0" x2="739.4375"
                                                    y2="312.73" stroke="#eceef1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1214" x1="831.8671875" y1="0"
                                                    x2="831.8671875" y2="312.73" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1215" x1="924.296875" y1="0" x2="924.296875"
                                                    y2="312.73" stroke="#eceef1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            </g>
                                            <line id="SvgjsLine1222" x1="0" y1="312.73" x2="924.296875"
                                                y2="312.73" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                            <line id="SvgjsLine1221" x1="0" y1="1" x2="0"
                                                y2="312.73" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                        </g>
                                        <g id="SvgjsG1123" class="apexcharts-bar-series apexcharts-plot-series">
                                            <g id="SvgjsG1124" class="apexcharts-series" seriesName="Apple"
                                                rel="1" data:realIndex="0">
                                                <rect id="SvgjsRect1126" width="13.864453125" height="312.73"
                                                    x="39.2826171875" y="0" rx="10" ry="10" opacity="1"
                                                    stroke-width="0" stroke="none" stroke-dasharray="0" fill="#f8d3ff"
                                                    class="apexcharts-backgroundBar"></rect>
                                                <path id="SvgjsPath1127"
                                                    d="M39.2826171875 312.73L39.2826171875 195.45625C39.2826171875 195.45625 39.2826171875 195.45625 39.2826171875 195.45625L53.147070312500006 195.45625C53.147070312500006 195.45625 53.147070312500006 195.45625 53.147070312500006 195.45625L53.147070312500006 195.45625L53.147070312500006 312.73C53.147070312500006 312.73 53.147070312500006 312.73 53.147070312500006 312.73C53.147070312500006 312.73 39.2826171875 312.73 39.2826171875 312.73C39.2826171875 312.73 39.2826171875 312.73 39.2826171875 312.73C39.2826171875 312.73 39.2826171875 312.73 39.2826171875 312.73 "
                                                    fill="rgba(130,106,249,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskeytspqza)"
                                                    pathTo="M 39.2826171875 312.73L 39.2826171875 195.45625Q 39.2826171875 195.45625 39.2826171875 195.45625L 53.147070312500006 195.45625Q 53.147070312500006 195.45625 53.147070312500006 195.45625L 53.147070312500006 195.45625L 53.147070312500006 312.73Q 53.147070312500006 312.73 53.147070312500006 312.73L 39.2826171875 312.73Q 39.2826171875 312.73 39.2826171875 312.73z"
                                                    pathFrom="M 39.2826171875 312.73L 39.2826171875 312.73L 53.147070312500006 312.73L 53.147070312500006 312.73L 53.147070312500006 312.73L 53.147070312500006 312.73L 53.147070312500006 312.73L 39.2826171875 312.73"
                                                    cy="195.45625" cx="131.7123046875" j="0" val="90"
                                                    barHeight="117.27374999999999" barWidth="13.864453125"></path>
                                                <rect id="SvgjsRect1128" width="13.864453125" height="312.73"
                                                    x="131.7123046875" y="0" rx="10" ry="10" opacity="1"
                                                    stroke-width="0" stroke="none" stroke-dasharray="0" fill="#f8d3ff"
                                                    class="apexcharts-backgroundBar"></rect>
                                                <path id="SvgjsPath1129"
                                                    d="M131.7123046875 312.73L131.7123046875 156.365C131.7123046875 156.365 131.7123046875 156.365 131.7123046875 156.365L145.5767578125 156.365C145.5767578125 156.365 145.5767578125 156.365 145.5767578125 156.365L145.5767578125 156.365L145.5767578125 312.73C145.5767578125 312.73 145.5767578125 312.73 145.5767578125 312.73C145.5767578125 312.73 131.7123046875 312.73 131.7123046875 312.73C131.7123046875 312.73 131.7123046875 312.73 131.7123046875 312.73C131.7123046875 312.73 131.7123046875 312.73 131.7123046875 312.73 "
                                                    fill="rgba(130,106,249,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskeytspqza)"
                                                    pathTo="M 131.7123046875 312.73L 131.7123046875 156.365Q 131.7123046875 156.365 131.7123046875 156.365L 145.5767578125 156.365Q 145.5767578125 156.365 145.5767578125 156.365L 145.5767578125 156.365L 145.5767578125 312.73Q 145.5767578125 312.73 145.5767578125 312.73L 131.7123046875 312.73Q 131.7123046875 312.73 131.7123046875 312.73z"
                                                    pathFrom="M 131.7123046875 312.73L 131.7123046875 312.73L 145.5767578125 312.73L 145.5767578125 312.73L 145.5767578125 312.73L 145.5767578125 312.73L 145.5767578125 312.73L 131.7123046875 312.73"
                                                    cy="156.365" cx="224.1419921875" j="1" val="120"
                                                    barHeight="156.365" barWidth="13.864453125"></path>
                                                <rect id="SvgjsRect1130" width="13.864453125" height="312.73"
                                                    x="224.1419921875" y="0" rx="10" ry="10" opacity="1"
                                                    stroke-width="0" stroke="none" stroke-dasharray="0" fill="#f8d3ff"
                                                    class="apexcharts-backgroundBar"></rect>
                                                <path id="SvgjsPath1131"
                                                    d="M224.1419921875 312.73L224.1419921875 241.06270833333335C224.1419921875 241.06270833333338 224.1419921875 241.06270833333338 224.1419921875 241.06270833333335L238.0064453125 241.06270833333335C238.00644531250003 241.06270833333338 238.00644531250003 241.06270833333338 238.0064453125 241.06270833333335L238.0064453125 241.06270833333335L238.0064453125 312.73C238.00644531250003 312.73 238.00644531250003 312.73 238.0064453125 312.73C238.0064453125 312.73 224.1419921875 312.73 224.1419921875 312.73C224.1419921875 312.73 224.1419921875 312.73 224.1419921875 312.73C224.1419921875 312.73 224.1419921875 312.73 224.1419921875 312.73 "
                                                    fill="rgba(130,106,249,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskeytspqza)"
                                                    pathTo="M 224.1419921875 312.73L 224.1419921875 241.06270833333335Q 224.1419921875 241.06270833333335 224.1419921875 241.06270833333335L 238.0064453125 241.06270833333335Q 238.0064453125 241.06270833333335 238.0064453125 241.06270833333335L 238.0064453125 241.06270833333335L 238.0064453125 312.73Q 238.0064453125 312.73 238.0064453125 312.73L 224.1419921875 312.73Q 224.1419921875 312.73 224.1419921875 312.73z"
                                                    pathFrom="M 224.1419921875 312.73L 224.1419921875 312.73L 238.0064453125 312.73L 238.0064453125 312.73L 238.0064453125 312.73L 238.0064453125 312.73L 238.0064453125 312.73L 224.1419921875 312.73"
                                                    cy="241.06270833333335" cx="316.5716796875" j="2" val="55"
                                                    barHeight="71.66729166666667" barWidth="13.864453125"></path>
                                                <rect id="SvgjsRect1132" width="13.864453125" height="312.73"
                                                    x="316.5716796875" y="0" rx="10" ry="10" opacity="1"
                                                    stroke-width="0" stroke="none" stroke-dasharray="0" fill="#f8d3ff"
                                                    class="apexcharts-backgroundBar"></rect>
                                                <path id="SvgjsPath1133"
                                                    d="M316.5716796875 312.73L316.5716796875 182.42583333333334C316.5716796875 182.42583333333334 316.5716796875 182.42583333333334 316.5716796875 182.42583333333334L330.43613281250003 182.42583333333334C330.43613281250003 182.42583333333334 330.43613281250003 182.42583333333334 330.43613281250003 182.42583333333334L330.43613281250003 182.42583333333334L330.43613281250003 312.73C330.43613281250003 312.73 330.43613281250003 312.73 330.43613281250003 312.73C330.43613281250003 312.73 316.5716796875 312.73 316.5716796875 312.73C316.5716796875 312.73 316.5716796875 312.73 316.5716796875 312.73C316.5716796875 312.73 316.5716796875 312.73 316.5716796875 312.73 "
                                                    fill="rgba(130,106,249,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskeytspqza)"
                                                    pathTo="M 316.5716796875 312.73L 316.5716796875 182.42583333333334Q 316.5716796875 182.42583333333334 316.5716796875 182.42583333333334L 330.43613281250003 182.42583333333334Q 330.43613281250003 182.42583333333334 330.43613281250003 182.42583333333334L 330.43613281250003 182.42583333333334L 330.43613281250003 312.73Q 330.43613281250003 312.73 330.43613281250003 312.73L 316.5716796875 312.73Q 316.5716796875 312.73 316.5716796875 312.73z"
                                                    pathFrom="M 316.5716796875 312.73L 316.5716796875 312.73L 330.43613281250003 312.73L 330.43613281250003 312.73L 330.43613281250003 312.73L 330.43613281250003 312.73L 330.43613281250003 312.73L 316.5716796875 312.73"
                                                    cy="182.42583333333334" cx="409.0013671875" j="3" val="100"
                                                    barHeight="130.30416666666667" barWidth="13.864453125"></path>
                                                <rect id="SvgjsRect1134" width="13.864453125" height="312.73"
                                                    x="409.0013671875" y="0" rx="10" ry="10" opacity="1"
                                                    stroke-width="0" stroke="none" stroke-dasharray="0" fill="#f8d3ff"
                                                    class="apexcharts-backgroundBar"></rect>
                                                <path id="SvgjsPath1135"
                                                    d="M409.0013671875 312.73L409.0013671875 208.48666666666668C409.0013671875 208.48666666666668 409.0013671875 208.48666666666668 409.0013671875 208.48666666666668L422.86582031250003 208.48666666666668C422.86582031250003 208.48666666666668 422.86582031250003 208.48666666666668 422.86582031250003 208.48666666666668L422.86582031250003 208.48666666666668L422.86582031250003 312.73C422.86582031250003 312.73 422.86582031250003 312.73 422.86582031250003 312.73C422.86582031250003 312.73 409.0013671875 312.73 409.0013671875 312.73C409.0013671875 312.73 409.0013671875 312.73 409.0013671875 312.73C409.0013671875 312.73 409.0013671875 312.73 409.0013671875 312.73 "
                                                    fill="rgba(130,106,249,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskeytspqza)"
                                                    pathTo="M 409.0013671875 312.73L 409.0013671875 208.48666666666668Q 409.0013671875 208.48666666666668 409.0013671875 208.48666666666668L 422.86582031250003 208.48666666666668Q 422.86582031250003 208.48666666666668 422.86582031250003 208.48666666666668L 422.86582031250003 208.48666666666668L 422.86582031250003 312.73Q 422.86582031250003 312.73 422.86582031250003 312.73L 409.0013671875 312.73Q 409.0013671875 312.73 409.0013671875 312.73z"
                                                    pathFrom="M 409.0013671875 312.73L 409.0013671875 312.73L 422.86582031250003 312.73L 422.86582031250003 312.73L 422.86582031250003 312.73L 422.86582031250003 312.73L 422.86582031250003 312.73L 409.0013671875 312.73"
                                                    cy="208.48666666666668" cx="501.4310546875" j="4" val="80"
                                                    barHeight="104.24333333333334" barWidth="13.864453125"></path>
                                                <rect id="SvgjsRect1136" width="13.864453125" height="312.73"
                                                    x="501.4310546875" y="0" rx="10" ry="10" opacity="1"
                                                    stroke-width="0" stroke="none" stroke-dasharray="0" fill="#f8d3ff"
                                                    class="apexcharts-backgroundBar"></rect>
                                                <path id="SvgjsPath1137"
                                                    d="M501.4310546875 312.73L501.4310546875 149.84979166666668C501.4310546875 149.84979166666668 501.4310546875 149.84979166666668 501.4310546875 149.84979166666668L515.2955078125 149.84979166666668C515.2955078125 149.84979166666668 515.2955078125 149.84979166666668 515.2955078125 149.84979166666668L515.2955078125 149.84979166666668L515.2955078125 312.73C515.2955078125 312.73 515.2955078125 312.73 515.2955078125 312.73C515.2955078125 312.73 501.4310546875 312.73 501.4310546875 312.73C501.4310546875 312.73 501.4310546875 312.73 501.4310546875 312.73C501.4310546875 312.73 501.4310546875 312.73 501.4310546875 312.73 "
                                                    fill="rgba(130,106,249,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskeytspqza)"
                                                    pathTo="M 501.4310546875 312.73L 501.4310546875 149.84979166666668Q 501.4310546875 149.84979166666668 501.4310546875 149.84979166666668L 515.2955078125 149.84979166666668Q 515.2955078125 149.84979166666668 515.2955078125 149.84979166666668L 515.2955078125 149.84979166666668L 515.2955078125 312.73Q 515.2955078125 312.73 515.2955078125 312.73L 501.4310546875 312.73Q 501.4310546875 312.73 501.4310546875 312.73z"
                                                    pathFrom="M 501.4310546875 312.73L 501.4310546875 312.73L 515.2955078125 312.73L 515.2955078125 312.73L 515.2955078125 312.73L 515.2955078125 312.73L 515.2955078125 312.73L 501.4310546875 312.73"
                                                    cy="149.84979166666668" cx="593.8607421875" j="5" val="125"
                                                    barHeight="162.88020833333334" barWidth="13.864453125"></path>
                                                <rect id="SvgjsRect1138" width="13.864453125" height="312.73"
                                                    x="593.8607421875" y="0" rx="10" ry="10" opacity="1"
                                                    stroke-width="0" stroke="none" stroke-dasharray="0" fill="#f8d3ff"
                                                    class="apexcharts-backgroundBar"></rect>
                                                <path id="SvgjsPath1139"
                                                    d="M593.8607421875 312.73L593.8607421875 84.69770833333337C593.8607421875 84.69770833333337 593.8607421875 84.69770833333337 593.8607421875 84.69770833333337L607.7251953125 84.69770833333337C607.7251953125 84.69770833333337 607.7251953125 84.69770833333337 607.7251953125 84.69770833333337L607.7251953125 84.69770833333337L607.7251953125 312.73C607.7251953125 312.73 607.7251953125 312.73 607.7251953125 312.73C607.7251953125 312.73 593.8607421875 312.73 593.8607421875 312.73C593.8607421875 312.73 593.8607421875 312.73 593.8607421875 312.73C593.8607421875 312.73 593.8607421875 312.73 593.8607421875 312.73 "
                                                    fill="rgba(130,106,249,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskeytspqza)"
                                                    pathTo="M 593.8607421875 312.73L 593.8607421875 84.69770833333337Q 593.8607421875 84.69770833333337 593.8607421875 84.69770833333337L 607.7251953125 84.69770833333337Q 607.7251953125 84.69770833333337 607.7251953125 84.69770833333337L 607.7251953125 84.69770833333337L 607.7251953125 312.73Q 607.7251953125 312.73 607.7251953125 312.73L 593.8607421875 312.73Q 593.8607421875 312.73 593.8607421875 312.73z"
                                                    pathFrom="M 593.8607421875 312.73L 593.8607421875 312.73L 607.7251953125 312.73L 607.7251953125 312.73L 607.7251953125 312.73L 607.7251953125 312.73L 607.7251953125 312.73L 593.8607421875 312.73"
                                                    cy="84.69770833333337" cx="686.2904296875" j="6" val="175"
                                                    barHeight="228.03229166666665" barWidth="13.864453125"></path>
                                                <rect id="SvgjsRect1140" width="13.864453125" height="312.73"
                                                    x="686.2904296875" y="0" rx="10" ry="10" opacity="1"
                                                    stroke-width="0" stroke="none" stroke-dasharray="0" fill="#f8d3ff"
                                                    class="apexcharts-backgroundBar"></rect>
                                                <path id="SvgjsPath1141"
                                                    d="M686.2904296875 312.73L686.2904296875 221.51708333333335C686.2904296875 221.51708333333335 686.2904296875 221.51708333333335 686.2904296875 221.51708333333335L700.1548828125 221.51708333333335C700.1548828125 221.51708333333335 700.1548828125 221.51708333333335 700.1548828125 221.51708333333335L700.1548828125 221.51708333333335L700.1548828125 312.73C700.1548828125 312.73 700.1548828125 312.73 700.1548828125 312.73C700.1548828125 312.73 686.2904296875 312.73 686.2904296875 312.73C686.2904296875 312.73 686.2904296875 312.73 686.2904296875 312.73C686.2904296875 312.73 686.2904296875 312.73 686.2904296875 312.73 "
                                                    fill="rgba(130,106,249,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskeytspqza)"
                                                    pathTo="M 686.2904296875 312.73L 686.2904296875 221.51708333333335Q 686.2904296875 221.51708333333335 686.2904296875 221.51708333333335L 700.1548828125 221.51708333333335Q 700.1548828125 221.51708333333335 700.1548828125 221.51708333333335L 700.1548828125 221.51708333333335L 700.1548828125 312.73Q 700.1548828125 312.73 700.1548828125 312.73L 686.2904296875 312.73Q 686.2904296875 312.73 686.2904296875 312.73z"
                                                    pathFrom="M 686.2904296875 312.73L 686.2904296875 312.73L 700.1548828125 312.73L 700.1548828125 312.73L 700.1548828125 312.73L 700.1548828125 312.73L 700.1548828125 312.73L 686.2904296875 312.73"
                                                    cy="221.51708333333335" cx="778.7201171875" j="7" val="70"
                                                    barHeight="91.21291666666667" barWidth="13.864453125"></path>
                                                <rect id="SvgjsRect1142" width="13.864453125" height="312.73"
                                                    x="778.7201171875" y="0" rx="10" ry="10" opacity="1"
                                                    stroke-width="0" stroke="none" stroke-dasharray="0" fill="#f8d3ff"
                                                    class="apexcharts-backgroundBar"></rect>
                                                <path id="SvgjsPath1143"
                                                    d="M778.7201171875 312.73L778.7201171875 198.06233333333336C778.7201171875001 198.06233333333336 778.7201171875001 198.06233333333336 778.7201171875 198.06233333333336L792.5845703125 198.06233333333336C792.5845703125 198.06233333333336 792.5845703125 198.06233333333336 792.5845703125 198.06233333333336L792.5845703125 198.06233333333336L792.5845703125 312.73C792.5845703125 312.73 792.5845703125 312.73 792.5845703125 312.73C792.5845703125 312.73 778.7201171875 312.73 778.7201171875 312.73C778.7201171875001 312.73 778.7201171875001 312.73 778.7201171875 312.73C778.7201171875 312.73 778.7201171875 312.73 778.7201171875 312.73 "
                                                    fill="rgba(130,106,249,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskeytspqza)"
                                                    pathTo="M 778.7201171875 312.73L 778.7201171875 198.06233333333336Q 778.7201171875 198.06233333333336 778.7201171875 198.06233333333336L 792.5845703125 198.06233333333336Q 792.5845703125 198.06233333333336 792.5845703125 198.06233333333336L 792.5845703125 198.06233333333336L 792.5845703125 312.73Q 792.5845703125 312.73 792.5845703125 312.73L 778.7201171875 312.73Q 778.7201171875 312.73 778.7201171875 312.73z"
                                                    pathFrom="M 778.7201171875 312.73L 778.7201171875 312.73L 792.5845703125 312.73L 792.5845703125 312.73L 792.5845703125 312.73L 792.5845703125 312.73L 792.5845703125 312.73L 778.7201171875 312.73"
                                                    cy="198.06233333333336" cx="871.1498046875" j="8" val="88"
                                                    barHeight="114.66766666666666" barWidth="13.864453125"></path>
                                                <rect id="SvgjsRect1144" width="13.864453125" height="312.73"
                                                    x="871.1498046875" y="0" rx="10" ry="10" opacity="1"
                                                    stroke-width="0" stroke="none" stroke-dasharray="0" fill="#f8d3ff"
                                                    class="apexcharts-backgroundBar"></rect>
                                                <path id="SvgjsPath1145"
                                                    d="M871.1498046875 312.73L871.1498046875 78.18250000000003C871.1498046875 78.18250000000003 871.1498046875 78.18250000000003 871.1498046875 78.18250000000003L885.0142578125 78.18250000000003C885.0142578124999 78.18250000000003 885.0142578124999 78.18250000000003 885.0142578125 78.18250000000003L885.0142578125 78.18250000000003L885.0142578125 312.73C885.0142578124999 312.73 885.0142578124999 312.73 885.0142578125 312.73C885.0142578125 312.73 871.1498046875 312.73 871.1498046875 312.73C871.1498046875 312.73 871.1498046875 312.73 871.1498046875 312.73C871.1498046875 312.73 871.1498046875 312.73 871.1498046875 312.73 "
                                                    fill="rgba(130,106,249,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskeytspqza)"
                                                    pathTo="M 871.1498046875 312.73L 871.1498046875 78.18250000000003Q 871.1498046875 78.18250000000003 871.1498046875 78.18250000000003L 885.0142578125 78.18250000000003Q 885.0142578125 78.18250000000003 885.0142578125 78.18250000000003L 885.0142578125 78.18250000000003L 885.0142578125 312.73Q 885.0142578125 312.73 885.0142578125 312.73L 871.1498046875 312.73Q 871.1498046875 312.73 871.1498046875 312.73z"
                                                    pathFrom="M 871.1498046875 312.73L 871.1498046875 312.73L 885.0142578125 312.73L 885.0142578125 312.73L 885.0142578125 312.73L 885.0142578125 312.73L 885.0142578125 312.73L 871.1498046875 312.73"
                                                    cy="78.18250000000003" cx="963.5794921875" j="9" val="180"
                                                    barHeight="234.54749999999999" barWidth="13.864453125"></path>
                                            </g>
                                            <g id="SvgjsG1146" class="apexcharts-series" seriesName="Samsung"
                                                rel="2" data:realIndex="1">
                                                <path id="SvgjsPath1148"
                                                    d="M39.2826171875 195.45625L39.2826171875 84.69770833333335C39.2826171875 84.69770833333335 39.2826171875 84.69770833333335 39.2826171875 84.69770833333335L53.147070312500006 84.69770833333335C53.147070312500006 84.69770833333335 53.147070312500006 84.69770833333335 53.147070312500006 84.69770833333335L53.147070312500006 84.69770833333335L53.147070312500006 195.45625C53.147070312500006 195.45625 53.147070312500006 195.45625 53.147070312500006 195.45625C53.147070312500006 195.45625 39.2826171875 195.45625 39.2826171875 195.45625C39.2826171875 195.45625 39.2826171875 195.45625 39.2826171875 195.45625C39.2826171875 195.45625 39.2826171875 195.45625 39.2826171875 195.45625 "
                                                    fill="rgba(210,176,255,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskeytspqza)"
                                                    pathTo="M 39.2826171875 195.45625L 39.2826171875 84.69770833333335Q 39.2826171875 84.69770833333335 39.2826171875 84.69770833333335L 53.147070312500006 84.69770833333335Q 53.147070312500006 84.69770833333335 53.147070312500006 84.69770833333335L 53.147070312500006 84.69770833333335L 53.147070312500006 195.45625Q 53.147070312500006 195.45625 53.147070312500006 195.45625L 39.2826171875 195.45625Q 39.2826171875 195.45625 39.2826171875 195.45625z"
                                                    pathFrom="M 39.2826171875 195.45625L 39.2826171875 195.45625L 53.147070312500006 195.45625L 53.147070312500006 195.45625L 53.147070312500006 195.45625L 53.147070312500006 195.45625L 53.147070312500006 195.45625L 39.2826171875 195.45625"
                                                    cy="84.69770833333335" cx="131.7123046875" j="0" val="85"
                                                    barHeight="110.75854166666666" barWidth="13.864453125"></path>
                                                <path id="SvgjsPath1149"
                                                    d="M131.7123046875 156.365L131.7123046875 26.060833333333335C131.7123046875 26.060833333333335 131.7123046875 26.060833333333335 131.7123046875 26.060833333333335L145.5767578125 26.060833333333335C145.5767578125 26.060833333333335 145.5767578125 26.060833333333335 145.5767578125 26.060833333333335L145.5767578125 26.060833333333335L145.5767578125 156.365C145.5767578125 156.365 145.5767578125 156.365 145.5767578125 156.365C145.5767578125 156.365 131.7123046875 156.365 131.7123046875 156.365C131.7123046875 156.365 131.7123046875 156.365 131.7123046875 156.365C131.7123046875 156.365 131.7123046875 156.365 131.7123046875 156.365 "
                                                    fill="rgba(210,176,255,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskeytspqza)"
                                                    pathTo="M 131.7123046875 156.365L 131.7123046875 26.060833333333335Q 131.7123046875 26.060833333333335 131.7123046875 26.060833333333335L 145.5767578125 26.060833333333335Q 145.5767578125 26.060833333333335 145.5767578125 26.060833333333335L 145.5767578125 26.060833333333335L 145.5767578125 156.365Q 145.5767578125 156.365 145.5767578125 156.365L 131.7123046875 156.365Q 131.7123046875 156.365 131.7123046875 156.365z"
                                                    pathFrom="M 131.7123046875 156.365L 131.7123046875 156.365L 145.5767578125 156.365L 145.5767578125 156.365L 145.5767578125 156.365L 145.5767578125 156.365L 145.5767578125 156.365L 131.7123046875 156.365"
                                                    cy="26.060833333333335" cx="224.1419921875" j="1" val="100"
                                                    barHeight="130.30416666666667" barWidth="13.864453125"></path>
                                                <path id="SvgjsPath1150"
                                                    d="M224.1419921875 241.06270833333335L224.1419921875 201.97145833333335C224.1419921875 201.97145833333337 224.1419921875 201.97145833333337 224.1419921875 201.97145833333335L238.0064453125 201.97145833333335C238.00644531250003 201.97145833333337 238.00644531250003 201.97145833333337 238.0064453125 201.97145833333335L238.0064453125 201.97145833333335L238.0064453125 241.06270833333335C238.00644531250003 241.06270833333338 238.00644531250003 241.06270833333338 238.0064453125 241.06270833333335C238.0064453125 241.06270833333335 224.1419921875 241.06270833333335 224.1419921875 241.06270833333335C224.1419921875 241.06270833333338 224.1419921875 241.06270833333338 224.1419921875 241.06270833333335C224.1419921875 241.06270833333335 224.1419921875 241.06270833333335 224.1419921875 241.06270833333335 "
                                                    fill="rgba(210,176,255,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskeytspqza)"
                                                    pathTo="M 224.1419921875 241.06270833333335L 224.1419921875 201.97145833333335Q 224.1419921875 201.97145833333335 224.1419921875 201.97145833333335L 238.0064453125 201.97145833333335Q 238.0064453125 201.97145833333335 238.0064453125 201.97145833333335L 238.0064453125 201.97145833333335L 238.0064453125 241.06270833333335Q 238.0064453125 241.06270833333335 238.0064453125 241.06270833333335L 224.1419921875 241.06270833333335Q 224.1419921875 241.06270833333335 224.1419921875 241.06270833333335z"
                                                    pathFrom="M 224.1419921875 241.06270833333335L 224.1419921875 241.06270833333335L 238.0064453125 241.06270833333335L 238.0064453125 241.06270833333335L 238.0064453125 241.06270833333335L 238.0064453125 241.06270833333335L 238.0064453125 241.06270833333335L 224.1419921875 241.06270833333335"
                                                    cy="201.97145833333335" cx="316.5716796875" j="2" val="30"
                                                    barHeight="39.09125" barWidth="13.864453125"></path>
                                                <path id="SvgjsPath1151"
                                                    d="M316.5716796875 182.42583333333334L316.5716796875 130.30416666666667C316.5716796875 130.30416666666667 316.5716796875 130.30416666666667 316.5716796875 130.30416666666667L330.43613281250003 130.30416666666667C330.43613281250003 130.30416666666667 330.43613281250003 130.30416666666667 330.43613281250003 130.30416666666667L330.43613281250003 130.30416666666667L330.43613281250003 182.42583333333334C330.43613281250003 182.42583333333334 330.43613281250003 182.42583333333334 330.43613281250003 182.42583333333334C330.43613281250003 182.42583333333334 316.5716796875 182.42583333333334 316.5716796875 182.42583333333334C316.5716796875 182.42583333333334 316.5716796875 182.42583333333334 316.5716796875 182.42583333333334C316.5716796875 182.42583333333334 316.5716796875 182.42583333333334 316.5716796875 182.42583333333334 "
                                                    fill="rgba(210,176,255,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskeytspqza)"
                                                    pathTo="M 316.5716796875 182.42583333333334L 316.5716796875 130.30416666666667Q 316.5716796875 130.30416666666667 316.5716796875 130.30416666666667L 330.43613281250003 130.30416666666667Q 330.43613281250003 130.30416666666667 330.43613281250003 130.30416666666667L 330.43613281250003 130.30416666666667L 330.43613281250003 182.42583333333334Q 330.43613281250003 182.42583333333334 330.43613281250003 182.42583333333334L 316.5716796875 182.42583333333334Q 316.5716796875 182.42583333333334 316.5716796875 182.42583333333334z"
                                                    pathFrom="M 316.5716796875 182.42583333333334L 316.5716796875 182.42583333333334L 330.43613281250003 182.42583333333334L 330.43613281250003 182.42583333333334L 330.43613281250003 182.42583333333334L 330.43613281250003 182.42583333333334L 330.43613281250003 182.42583333333334L 316.5716796875 182.42583333333334"
                                                    cy="130.30416666666667" cx="409.0013671875" j="3" val="40"
                                                    barHeight="52.12166666666667" barWidth="13.864453125"></path>
                                                <path id="SvgjsPath1152"
                                                    d="M409.0013671875 208.48666666666668L409.0013671875 84.69770833333335C409.0013671875 84.69770833333335 409.0013671875 84.69770833333335 409.0013671875 84.69770833333335L422.86582031250003 84.69770833333335C422.86582031250003 84.69770833333335 422.86582031250003 84.69770833333335 422.86582031250003 84.69770833333335L422.86582031250003 84.69770833333335L422.86582031250003 208.48666666666668C422.86582031250003 208.48666666666668 422.86582031250003 208.48666666666668 422.86582031250003 208.48666666666668C422.86582031250003 208.48666666666668 409.0013671875 208.48666666666668 409.0013671875 208.48666666666668C409.0013671875 208.48666666666668 409.0013671875 208.48666666666668 409.0013671875 208.48666666666668C409.0013671875 208.48666666666668 409.0013671875 208.48666666666668 409.0013671875 208.48666666666668 "
                                                    fill="rgba(210,176,255,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskeytspqza)"
                                                    pathTo="M 409.0013671875 208.48666666666668L 409.0013671875 84.69770833333335Q 409.0013671875 84.69770833333335 409.0013671875 84.69770833333335L 422.86582031250003 84.69770833333335Q 422.86582031250003 84.69770833333335 422.86582031250003 84.69770833333335L 422.86582031250003 84.69770833333335L 422.86582031250003 208.48666666666668Q 422.86582031250003 208.48666666666668 422.86582031250003 208.48666666666668L 409.0013671875 208.48666666666668Q 409.0013671875 208.48666666666668 409.0013671875 208.48666666666668z"
                                                    pathFrom="M 409.0013671875 208.48666666666668L 409.0013671875 208.48666666666668L 422.86582031250003 208.48666666666668L 422.86582031250003 208.48666666666668L 422.86582031250003 208.48666666666668L 422.86582031250003 208.48666666666668L 422.86582031250003 208.48666666666668L 409.0013671875 208.48666666666668"
                                                    cy="84.69770833333335" cx="501.4310546875" j="4" val="95"
                                                    barHeight="123.78895833333333" barWidth="13.864453125"></path>
                                                <path id="SvgjsPath1153"
                                                    d="M501.4310546875 149.84979166666668L501.4310546875 32.57604166666668C501.4310546875 32.57604166666668 501.4310546875 32.57604166666668 501.4310546875 32.57604166666668L515.2955078125 32.57604166666668C515.2955078125 32.57604166666668 515.2955078125 32.57604166666668 515.2955078125 32.57604166666668L515.2955078125 32.57604166666668L515.2955078125 149.84979166666668C515.2955078125 149.84979166666668 515.2955078125 149.84979166666668 515.2955078125 149.84979166666668C515.2955078125 149.84979166666668 501.4310546875 149.84979166666668 501.4310546875 149.84979166666668C501.4310546875 149.84979166666668 501.4310546875 149.84979166666668 501.4310546875 149.84979166666668C501.4310546875 149.84979166666668 501.4310546875 149.84979166666668 501.4310546875 149.84979166666668 "
                                                    fill="rgba(210,176,255,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskeytspqza)"
                                                    pathTo="M 501.4310546875 149.84979166666668L 501.4310546875 32.57604166666668Q 501.4310546875 32.57604166666668 501.4310546875 32.57604166666668L 515.2955078125 32.57604166666668Q 515.2955078125 32.57604166666668 515.2955078125 32.57604166666668L 515.2955078125 32.57604166666668L 515.2955078125 149.84979166666668Q 515.2955078125 149.84979166666668 515.2955078125 149.84979166666668L 501.4310546875 149.84979166666668Q 501.4310546875 149.84979166666668 501.4310546875 149.84979166666668z"
                                                    pathFrom="M 501.4310546875 149.84979166666668L 501.4310546875 149.84979166666668L 515.2955078125 149.84979166666668L 515.2955078125 149.84979166666668L 515.2955078125 149.84979166666668L 515.2955078125 149.84979166666668L 515.2955078125 149.84979166666668L 501.4310546875 149.84979166666668"
                                                    cy="32.57604166666668" cx="593.8607421875" j="5" val="90"
                                                    barHeight="117.27374999999999" barWidth="13.864453125"></path>
                                                <path id="SvgjsPath1154"
                                                    d="M593.8607421875 84.69770833333337L593.8607421875 45.606458333333364C593.8607421875 45.606458333333364 593.8607421875 45.606458333333364 593.8607421875 45.606458333333364L607.7251953125 45.606458333333364C607.7251953125 45.606458333333364 607.7251953125 45.606458333333364 607.7251953125 45.606458333333364L607.7251953125 45.606458333333364L607.7251953125 84.69770833333337C607.7251953125 84.69770833333337 607.7251953125 84.69770833333337 607.7251953125 84.69770833333337C607.7251953125 84.69770833333337 593.8607421875 84.69770833333337 593.8607421875 84.69770833333337C593.8607421875 84.69770833333337 593.8607421875 84.69770833333337 593.8607421875 84.69770833333337C593.8607421875 84.69770833333337 593.8607421875 84.69770833333337 593.8607421875 84.69770833333337 "
                                                    fill="rgba(210,176,255,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskeytspqza)"
                                                    pathTo="M 593.8607421875 84.69770833333337L 593.8607421875 45.606458333333364Q 593.8607421875 45.606458333333364 593.8607421875 45.606458333333364L 607.7251953125 45.606458333333364Q 607.7251953125 45.606458333333364 607.7251953125 45.606458333333364L 607.7251953125 45.606458333333364L 607.7251953125 84.69770833333337Q 607.7251953125 84.69770833333337 607.7251953125 84.69770833333337L 593.8607421875 84.69770833333337Q 593.8607421875 84.69770833333337 593.8607421875 84.69770833333337z"
                                                    pathFrom="M 593.8607421875 84.69770833333337L 593.8607421875 84.69770833333337L 607.7251953125 84.69770833333337L 607.7251953125 84.69770833333337L 607.7251953125 84.69770833333337L 607.7251953125 84.69770833333337L 607.7251953125 84.69770833333337L 593.8607421875 84.69770833333337"
                                                    cy="45.606458333333364" cx="686.2904296875" j="6" val="30"
                                                    barHeight="39.09125" barWidth="13.864453125"></path>
                                                <path id="SvgjsPath1155"
                                                    d="M686.2904296875 221.51708333333335L686.2904296875 78.1825C686.2904296875 78.1825 686.2904296875 78.1825 686.2904296875 78.1825L700.1548828125 78.1825C700.1548828125 78.1825 700.1548828125 78.1825 700.1548828125 78.1825L700.1548828125 78.1825L700.1548828125 221.51708333333335C700.1548828125 221.51708333333335 700.1548828125 221.51708333333335 700.1548828125 221.51708333333335C700.1548828125 221.51708333333335 686.2904296875 221.51708333333335 686.2904296875 221.51708333333335C686.2904296875 221.51708333333335 686.2904296875 221.51708333333335 686.2904296875 221.51708333333335C686.2904296875 221.51708333333335 686.2904296875 221.51708333333335 686.2904296875 221.51708333333335 "
                                                    fill="rgba(210,176,255,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskeytspqza)"
                                                    pathTo="M 686.2904296875 221.51708333333335L 686.2904296875 78.1825Q 686.2904296875 78.1825 686.2904296875 78.1825L 700.1548828125 78.1825Q 700.1548828125 78.1825 700.1548828125 78.1825L 700.1548828125 78.1825L 700.1548828125 221.51708333333335Q 700.1548828125 221.51708333333335 700.1548828125 221.51708333333335L 686.2904296875 221.51708333333335Q 686.2904296875 221.51708333333335 686.2904296875 221.51708333333335z"
                                                    pathFrom="M 686.2904296875 221.51708333333335L 686.2904296875 221.51708333333335L 700.1548828125 221.51708333333335L 700.1548828125 221.51708333333335L 700.1548828125 221.51708333333335L 700.1548828125 221.51708333333335L 700.1548828125 221.51708333333335L 686.2904296875 221.51708333333335"
                                                    cy="78.1825" cx="778.7201171875" j="7" val="110"
                                                    barHeight="143.33458333333334" barWidth="13.864453125"></path>
                                                <path id="SvgjsPath1156"
                                                    d="M778.7201171875 198.06233333333336L778.7201171875 117.27375000000002C778.7201171875001 117.27375000000004 778.7201171875001 117.27375000000004 778.7201171875 117.27375000000002L792.5845703125 117.27375000000002C792.5845703125 117.27375000000004 792.5845703125 117.27375000000004 792.5845703125 117.27375000000002L792.5845703125 117.27375000000002L792.5845703125 198.06233333333336C792.5845703125 198.06233333333336 792.5845703125 198.06233333333336 792.5845703125 198.06233333333336C792.5845703125 198.06233333333336 778.7201171875 198.06233333333336 778.7201171875 198.06233333333336C778.7201171875001 198.06233333333336 778.7201171875001 198.06233333333336 778.7201171875 198.06233333333336C778.7201171875 198.06233333333336 778.7201171875 198.06233333333336 778.7201171875 198.06233333333336 "
                                                    fill="rgba(210,176,255,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskeytspqza)"
                                                    pathTo="M 778.7201171875 198.06233333333336L 778.7201171875 117.27375000000002Q 778.7201171875 117.27375000000002 778.7201171875 117.27375000000002L 792.5845703125 117.27375000000002Q 792.5845703125 117.27375000000002 792.5845703125 117.27375000000002L 792.5845703125 117.27375000000002L 792.5845703125 198.06233333333336Q 792.5845703125 198.06233333333336 792.5845703125 198.06233333333336L 778.7201171875 198.06233333333336Q 778.7201171875 198.06233333333336 778.7201171875 198.06233333333336z"
                                                    pathFrom="M 778.7201171875 198.06233333333336L 778.7201171875 198.06233333333336L 792.5845703125 198.06233333333336L 792.5845703125 198.06233333333336L 792.5845703125 198.06233333333336L 792.5845703125 198.06233333333336L 792.5845703125 198.06233333333336L 778.7201171875 198.06233333333336"
                                                    cy="117.27375000000002" cx="871.1498046875" j="8" val="62"
                                                    barHeight="80.78858333333334" barWidth="13.864453125"></path>
                                                <path id="SvgjsPath1157"
                                                    d="M871.1498046875 78.18250000000003L871.1498046875 52.1216666666667C871.1498046875 52.1216666666667 871.1498046875 52.1216666666667 871.1498046875 52.1216666666667L885.0142578125 52.1216666666667C885.0142578124999 52.1216666666667 885.0142578124999 52.1216666666667 885.0142578125 52.1216666666667L885.0142578125 52.1216666666667L885.0142578125 78.18250000000003C885.0142578124999 78.18250000000003 885.0142578124999 78.18250000000003 885.0142578125 78.18250000000003C885.0142578125 78.18250000000003 871.1498046875 78.18250000000003 871.1498046875 78.18250000000003C871.1498046875 78.18250000000003 871.1498046875 78.18250000000003 871.1498046875 78.18250000000003C871.1498046875 78.18250000000003 871.1498046875 78.18250000000003 871.1498046875 78.18250000000003 "
                                                    fill="rgba(210,176,255,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskeytspqza)"
                                                    pathTo="M 871.1498046875 78.18250000000003L 871.1498046875 52.1216666666667Q 871.1498046875 52.1216666666667 871.1498046875 52.1216666666667L 885.0142578125 52.1216666666667Q 885.0142578125 52.1216666666667 885.0142578125 52.1216666666667L 885.0142578125 52.1216666666667L 885.0142578125 78.18250000000003Q 885.0142578125 78.18250000000003 885.0142578125 78.18250000000003L 871.1498046875 78.18250000000003Q 871.1498046875 78.18250000000003 871.1498046875 78.18250000000003z"
                                                    pathFrom="M 871.1498046875 78.18250000000003L 871.1498046875 78.18250000000003L 885.0142578125 78.18250000000003L 885.0142578125 78.18250000000003L 885.0142578125 78.18250000000003L 885.0142578125 78.18250000000003L 885.0142578125 78.18250000000003L 871.1498046875 78.18250000000003"
                                                    cy="52.1216666666667" cx="963.5794921875" j="9" val="20"
                                                    barHeight="26.060833333333335" barWidth="13.864453125"></path>
                                            </g>
                                            <g id="SvgjsG1125" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            <g id="SvgjsG1147" class="apexcharts-datalabels" data:realIndex="1"></g>
                                        </g>
                                        <line id="SvgjsLine1223" x1="0" y1="0" x2="924.296875"
                                            y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1224" x1="0" y1="0" x2="924.296875"
                                            y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG1225" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG1226" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG1227" class="apexcharts-point-annotations"></g>
                                    </g>
                                    <g id="SvgjsG1190" class="apexcharts-yaxis" rel="0"
                                        transform="translate(18.703125, 0)">
                                        <g id="SvgjsG1191" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1192"
                                                font-family="Helvetica, Arial, sans-serif" x="20" y="49.4" text-anchor="end"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1193">240</tspan>
                                                <title>240</title>
                                            </text><text id="SvgjsText1194" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="127.58250000000001" text-anchor="end" dominant-baseline="auto"
                                                font-size="13px" font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1195">180</tspan>
                                                <title>180</title>
                                            </text><text id="SvgjsText1196" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="205.76500000000001" text-anchor="end" dominant-baseline="auto"
                                                font-size="13px" font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1197">120</tspan>
                                                <title>120</title>
                                            </text><text id="SvgjsText1198" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="283.9475" text-anchor="end" dominant-baseline="auto"
                                                font-size="13px" font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1199">60</tspan>
                                                <title>60</title>
                                            </text><text id="SvgjsText1200" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="362.13" text-anchor="end" dominant-baseline="auto"
                                                font-size="13px" font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1201">0</tspan>
                                                <title>0</title>
                                            </text></g>
                                    </g>
                                    <g id="SvgjsG1113" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-tooltip apexcharts-theme-light"
                                    style="left: 372.206px; top: 142.641px;">
                                    <div class="apexcharts-tooltip-title"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">10/12</div>
                                    <div class="apexcharts-tooltip-series-group apexcharts-active"
                                        style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(210, 176, 255);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label">Samsung: </span><span
                                                    class="apexcharts-tooltip-text-y-value">40</span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 2; display: none;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(210, 176, 255);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label">Samsung: </span><span
                                                    class="apexcharts-tooltip-text-y-value">40</span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                    <div class="apexcharts-yaxistooltip-text"></div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 1032px; height: 425px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Bar Chart -->

            <!-- Scatter Chart -->
            <div class="col-12 mb-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">New Technologies Data</h5>
                        <div class="btn-group d-none d-sm-flex" role="group" aria-label="radio toggle button group">
                            <input type="radio" class="btn-check" name="btnradio" id="dailyRadio" checked=""
                                autocomplete="off">
                            <label class="btn btn-outline-secondary" for="dailyRadio">Daily</label>

                            <input type="radio" class="btn-check" name="btnradio" id="monthlyRadio"
                                autocomplete="off">
                            <label class="btn btn-outline-secondary" for="monthlyRadio">Monthly</label>

                            <input type="radio" class="btn-check" name="btnradio" id="yearlyRadio"
                                autocomplete="off">
                            <label class="btn btn-outline-secondary" for="yearlyRadio">Yearly</label>
                        </div>
                    </div>
                    <div class="card-body" style="position: relative;">
                        <div id="scatterChart" style="min-height: 400px;">
                            <div id="apexchartscgpizooei"
                                class="apexcharts-canvas apexchartscgpizooei apexcharts-theme-light"
                                style="width: 983px; height: 400px;"><svg id="SvgjsSvg1228" width="983"
                                    height="400" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                    transform="translate(0, 0)" style="background: transparent;">
                                    <foreignObject x="0" y="0" width="983" height="400">
                                        <div class="apexcharts-legend apexcharts-align-start apx-legend-position-top"
                                            xmlns="http://www.w3.org/1999/xhtml"
                                            style="right: 0px; position: absolute; left: 0px; top: 4px; max-height: 200px;">
                                            <div class="apexcharts-legend-series" rel="1" seriesname="Angular"
                                                data:collapsed="false" style="margin: 2px 5px;"><span
                                                    class="apexcharts-legend-marker" rel="1" data:collapsed="false"
                                                    style="background: rgb(255, 171, 0) !important; color: rgb(255, 171, 0); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                    class="apexcharts-legend-text" rel="1" i="0"
                                                    data:default-text="Angular" data:collapsed="false"
                                                    style="color: rgb(105, 122, 141); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Angular</span>
                                            </div>
                                            <div class="apexcharts-legend-series" rel="2" seriesname="Vue"
                                                data:collapsed="false" style="margin: 2px 5px;"><span
                                                    class="apexcharts-legend-marker" rel="2" data:collapsed="false"
                                                    style="background: rgb(105, 108, 255) !important; color: rgb(105, 108, 255); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                    class="apexcharts-legend-text" rel="2" i="1"
                                                    data:default-text="Vue" data:collapsed="false"
                                                    style="color: rgb(105, 122, 141); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Vue</span>
                                            </div>
                                            <div class="apexcharts-legend-series" rel="3" seriesname="React"
                                                data:collapsed="false" style="margin: 2px 5px;"><span
                                                    class="apexcharts-legend-marker" rel="3" data:collapsed="false"
                                                    style="background: rgb(113, 221, 55) !important; color: rgb(113, 221, 55); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                    class="apexcharts-legend-text" rel="3" i="2"
                                                    data:default-text="React" data:collapsed="false"
                                                    style="color: rgb(105, 122, 141); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">React</span>
                                            </div>
                                        </div>
                                        <style type="text/css">
                                            .apexcharts-legend {
                                                display: flex;
                                                overflow: auto;
                                                padding: 0 10px;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom,
                                            .apexcharts-legend.apx-legend-position-top {
                                                flex-wrap: wrap
                                            }

                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                flex-direction: column;
                                                bottom: 0;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                justify-content: flex-start;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                justify-content: center;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                justify-content: flex-end;
                                            }

                                            .apexcharts-legend-series {
                                                cursor: pointer;
                                                line-height: normal;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                                            .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                                display: flex;
                                                align-items: center;
                                            }

                                            .apexcharts-legend-text {
                                                position: relative;
                                                font-size: 14px;
                                            }

                                            .apexcharts-legend-text *,
                                            .apexcharts-legend-marker * {
                                                pointer-events: none;
                                            }

                                            .apexcharts-legend-marker {
                                                position: relative;
                                                display: inline-block;
                                                cursor: pointer;
                                                margin-right: 3px;
                                                border-style: solid;
                                            }

                                            .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                            .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                                display: inline-block;
                                            }

                                            .apexcharts-legend-series.apexcharts-no-click {
                                                cursor: auto;
                                            }

                                            .apexcharts-legend .apexcharts-hidden-zero-series,
                                            .apexcharts-legend .apexcharts-hidden-null-series {
                                                display: none !important;
                                            }

                                            .apexcharts-inactive-legend {
                                                opacity: 0.45;
                                            }
                                        </style>
                                    </foreignObject>
                                    <g id="SvgjsG1230" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(48.703125, 48)">
                                        <defs id="SvgjsDefs1229">
                                            <clipPath id="gridRectMaskcgpizooei">
                                                <rect id="SvgjsRect1236" width="916.640625" height="314.73" x="-3" y="-1"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMaskcgpizooei"></clipPath>
                                            <clipPath id="nonForecastMaskcgpizooei"></clipPath>
                                            <clipPath id="gridRectMarkerMaskcgpizooei">
                                                <rect id="SvgjsRect1237" width="938.640625" height="340.73" x="-14"
                                                    y="-14" rx="0" ry="0" opacity="1"
                                                    stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                                </rect>
                                            </clipPath>
                                        </defs>
                                        <line id="SvgjsLine1235" x1="340.5" y1="0" x2="340.5"
                                            y2="312.73" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt"
                                            class="apexcharts-xcrosshairs" x="340.5" y="0" width="1" height="312.73"
                                            fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                        <g id="SvgjsG1329" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG1330" class="apexcharts-xaxis-texts-g"
                                                transform="translate(0, -4)"><text id="SvgjsText1332"
                                                    font-family="Helvetica, Arial, sans-serif" x="0" y="341.73"
                                                    text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                                    font-weight="400" fill="#a1acb8"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1333">5.4</tspan>
                                                    <title>5.4</title>
                                                </text><text id="SvgjsText1335" font-family="Helvetica, Arial, sans-serif"
                                                    x="91.06406250000002" y="341.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1336">7.2</tspan>
                                                    <title>7.2</title>
                                                </text><text id="SvgjsText1338" font-family="Helvetica, Arial, sans-serif"
                                                    x="182.128125" y="341.73" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1339">8.9</tspan>
                                                    <title>8.9</title>
                                                </text><text id="SvgjsText1341" font-family="Helvetica, Arial, sans-serif"
                                                    x="273.19218750000005" y="341.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1342">10.7</tspan>
                                                    <title>10.7</title>
                                                </text><text id="SvgjsText1344" font-family="Helvetica, Arial, sans-serif"
                                                    x="364.2562500000001" y="341.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1345">12.4</tspan>
                                                    <title>12.4</title>
                                                </text><text id="SvgjsText1347" font-family="Helvetica, Arial, sans-serif"
                                                    x="455.32031250000006" y="341.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1348">14.2</tspan>
                                                    <title>14.2</title>
                                                </text><text id="SvgjsText1350" font-family="Helvetica, Arial, sans-serif"
                                                    x="546.384375" y="341.73" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1351">16.0</tspan>
                                                    <title>16.0</title>
                                                </text><text id="SvgjsText1353" font-family="Helvetica, Arial, sans-serif"
                                                    x="637.4484375" y="341.73" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1354">17.7</tspan>
                                                    <title>17.7</title>
                                                </text><text id="SvgjsText1356" font-family="Helvetica, Arial, sans-serif"
                                                    x="728.5124999999999" y="341.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1357">19.5</tspan>
                                                    <title>19.5</title>
                                                </text><text id="SvgjsText1359" font-family="Helvetica, Arial, sans-serif"
                                                    x="819.5765624999999" y="341.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1360">21.2</tspan>
                                                    <title>21.2</title>
                                                </text><text id="SvgjsText1362" font-family="Helvetica, Arial, sans-serif"
                                                    x="910.6406249999999" y="341.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1363">23.0</tspan>
                                                    <title>23.0</title>
                                                </text></g>
                                        </g>
                                        <g id="SvgjsG1376" class="apexcharts-grid">
                                            <g id="SvgjsG1377" class="apexcharts-gridlines-horizontal">
                                                <line id="SvgjsLine1390" x1="0" y1="0" x2="910.640625"
                                                    y2="0" stroke="#eceef1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1391" x1="0" y1="78.1825" x2="910.640625"
                                                    y2="78.1825" stroke="#eceef1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1392" x1="0" y1="156.365" x2="910.640625"
                                                    y2="156.365" stroke="#eceef1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1393" x1="0" y1="234.5475" x2="910.640625"
                                                    y2="234.5475" stroke="#eceef1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1394" x1="0" y1="312.73" x2="910.640625"
                                                    y2="312.73" stroke="#eceef1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG1378" class="apexcharts-gridlines-vertical">
                                                <line id="SvgjsLine1379" x1="0.3818359375" y1="0"
                                                    x2="0.3818359375" y2="312.73" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1380" x1="91.0640640258789" y1="0"
                                                    x2="91.0640640258789" y2="312.73" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1381" x1="182.1281280517578" y1="0"
                                                    x2="182.1281280517578" y2="312.73" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1382" x1="273.19219970703125" y1="0"
                                                    x2="273.19219970703125" y2="312.73" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1383" x1="364.6358947753906" y1="0"
                                                    x2="364.6358947753906" y2="312.73" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1384" x1="455.3203125" y1="0"
                                                    x2="455.3203125" y2="312.73" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1385" x1="546.3843994140625" y1="0"
                                                    x2="546.3843994140625" y2="312.73" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1386" x1="637.4484252929688" y1="0"
                                                    x2="637.4484252929688" y2="312.73" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1387" x1="728.5125122070312" y1="0"
                                                    x2="728.5125122070312" y2="312.73" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1388" x1="819.5765380859375" y1="0"
                                                    x2="819.5765380859375" y2="312.73" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1389" x1="910.640625" y1="0" x2="910.640625"
                                                    y2="312.73" stroke="#eceef1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            </g>
                                            <line id="SvgjsLine1396" x1="0" y1="312.73" x2="910.640625"
                                                y2="312.73" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                            <line id="SvgjsLine1395" x1="0" y1="1" x2="0"
                                                y2="312.73" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                        </g>
                                        <g id="SvgjsG1238" class="apexcharts-scatter-series apexcharts-plot-series">
                                            <g id="SvgjsG1239" class="apexcharts-series" seriesName="Angular"
                                                data:longestSeries="true" rel="1" data:realIndex="0">
                                                <g id="SvgjsG1240" class="apexcharts-series-markers-wrap"
                                                    data:realIndex="0">
                                                    <g id="SvgjsG1242"
                                                        class="apexcharts-series-markers apexcharts-series-scatter"
                                                        clip-path="url(#gridRectMarkerMaskcgpizooei)">
                                                        <circle id="SvgjsCircle1243" r="6" cx="0" cy="179.81975"
                                                            x="-4.5" y="175.31975" fill="rgba(255,171,0,0.85)"
                                                            fill-opacity="1" stroke="#ffffff" stroke-width="1"
                                                            stroke-dasharray="0" stroke-opacity="0.9" width="0"
                                                            height="0" rel="0" j="0" index="0"
                                                            default-marker-size="6" class="apexcharts-marker"></circle>
                                                        <circle id="SvgjsCircle1244" r="6" cx="0" cy="234.5475"
                                                            x="-4.5" y="230.0475" fill="rgba(255,171,0,0.85)"
                                                            fill-opacity="1" stroke="#ffffff" stroke-width="1"
                                                            stroke-dasharray="0" stroke-opacity="0.9" width="0"
                                                            height="0" rel="1" j="1" index="0"
                                                            default-marker-size="6" class="apexcharts-marker"></circle>
                                                    </g>
                                                    <g id="SvgjsG1245"
                                                        class="apexcharts-series-markers apexcharts-series-scatter"
                                                        clip-path="url(#gridRectMarkerMaskcgpizooei)">
                                                        <circle id="SvgjsCircle1246" r="6" cx="15.522283380681808"
                                                            cy="226.72925" x="11.022283380681808" y="222.22925"
                                                            fill="rgba(255,171,0,0.85)" fill-opacity="1" stroke="#ffffff"
                                                            stroke-width="1" stroke-dasharray="0" stroke-opacity="0.9"
                                                            width="0" height="0" rel="2" j="2"
                                                            index="0" default-marker-size="6"
                                                            class="apexcharts-marker"></circle>
                                                    </g>
                                                    <g id="SvgjsG1247"
                                                        class="apexcharts-series-markers apexcharts-series-scatter"
                                                        clip-path="url(#gridRectMarkerMaskcgpizooei)">
                                                        <circle id="SvgjsCircle1248" r="6" cx="25.870472301136363"
                                                            cy="195.45625" x="21.370472301136363" y="190.95625"
                                                            fill="rgba(255,171,0,0.85)" fill-opacity="1" stroke="#ffffff"
                                                            stroke-width="1" stroke-dasharray="0" stroke-opacity="0.9"
                                                            width="0" height="0" rel="3" j="3"
                                                            index="0" default-marker-size="6"
                                                            class="apexcharts-marker"></circle>
                                                    </g>
                                                    <g id="SvgjsG1249"
                                                        class="apexcharts-series-markers apexcharts-series-scatter"
                                                        clip-path="url(#gridRectMarkerMaskcgpizooei)">
                                                        <circle id="SvgjsCircle1250" r="6" cx="31.044566761363615"
                                                            cy="156.365" x="26.544566761363615" y="151.865"
                                                            fill="rgba(255,171,0,0.85)" fill-opacity="1" stroke="#ffffff"
                                                            stroke-width="1" stroke-dasharray="0" stroke-opacity="0.9"
                                                            width="0" height="0" rel="4" j="4"
                                                            index="0" default-marker-size="6"
                                                            class="apexcharts-marker"></circle>
                                                    </g>
                                                    <g id="SvgjsG1251"
                                                        class="apexcharts-series-markers apexcharts-series-scatter"
                                                        clip-path="url(#gridRectMarkerMaskcgpizooei)">
                                                        <circle id="SvgjsCircle1252" r="6" cx="46.566850142045425"
                                                            cy="179.81975" x="42.066850142045425" y="175.31975"
                                                            fill="rgba(255,171,0,0.85)" fill-opacity="1" stroke="#ffffff"
                                                            stroke-width="1" stroke-dasharray="0" stroke-opacity="0.9"
                                                            width="0" height="0" rel="5" j="5"
                                                            index="0" default-marker-size="6"
                                                            class="apexcharts-marker"></circle>
                                                    </g>
                                                    <g id="SvgjsG1253"
                                                        class="apexcharts-series-markers apexcharts-series-scatter"
                                                        clip-path="url(#gridRectMarkerMaskcgpizooei)">
                                                        <circle id="SvgjsCircle1254" r="6" cx="15.522283380681808"
                                                            cy="203.2745" x="11.022283380681808" y="198.7745"
                                                            fill="rgba(255,171,0,0.85)" fill-opacity="1" stroke="#ffffff"
                                                            stroke-width="1" stroke-dasharray="0" stroke-opacity="0.9"
                                                            width="0" height="0" rel="6" j="6"
                                                            index="0" default-marker-size="6"
                                                            class="apexcharts-marker"></circle>
                                                    </g>
                                                    <g id="SvgjsG1255"
                                                        class="apexcharts-series-markers apexcharts-series-scatter"
                                                        clip-path="url(#gridRectMarkerMaskcgpizooei)">
                                                        <circle id="SvgjsCircle1256" r="6" cx="25.870472301136363"
                                                            cy="211.09275000000002" x="21.370472301136363"
                                                            y="206.59275000000002" fill="rgba(255,171,0,0.85)"
                                                            fill-opacity="1" stroke="#ffffff" stroke-width="1"
                                                            stroke-dasharray="0" stroke-opacity="0.9" width="0"
                                                            height="0" rel="7" j="7" index="0"
                                                            default-marker-size="6" class="apexcharts-marker"></circle>
                                                    </g>
                                                    <g id="SvgjsG1257"
                                                        class="apexcharts-series-markers apexcharts-series-scatter"
                                                        clip-path="url(#gridRectMarkerMaskcgpizooei)">
                                                        <circle id="SvgjsCircle1258" r="6" cx="82.78551136363635"
                                                            cy="195.45625" x="78.28551136363635" y="190.95625"
                                                            fill="rgba(255,171,0,0.85)" fill-opacity="1" stroke="#ffffff"
                                                            stroke-width="1" stroke-dasharray="0" stroke-opacity="0.9"
                                                            width="0" height="0" rel="8" j="8"
                                                            index="0" default-marker-size="6"
                                                            class="apexcharts-marker"></circle>
                                                    </g>
                                                    <g id="SvgjsG1259"
                                                        class="apexcharts-series-markers apexcharts-series-scatter"
                                                        clip-path="url(#gridRectMarkerMaskcgpizooei)">
                                                        <circle id="SvgjsCircle1260" r="6" cx="134.52645596590907"
                                                            cy="218.911" x="130.02645596590907" y="214.411"
                                                            fill="rgba(255,171,0,0.85)" fill-opacity="1" stroke="#ffffff"
                                                            stroke-width="1" stroke-dasharray="0" stroke-opacity="0.9"
                                                            width="0" height="0" rel="9" j="9"
                                                            index="0" default-marker-size="6"
                                                            class="apexcharts-marker"></circle>
                                                    </g>
                                                    <g id="SvgjsG1261"
                                                        class="apexcharts-series-markers apexcharts-series-scatter"
                                                        clip-path="url(#gridRectMarkerMaskcgpizooei)">
                                                        <circle id="SvgjsCircle1262" r="6" cx="186.26740056818178"
                                                            cy="179.81975" x="181.76740056818178" y="175.31975"
                                                            fill="rgba(255,171,0,0.85)" fill-opacity="1" stroke="#ffffff"
                                                            stroke-width="1" stroke-dasharray="0" stroke-opacity="0.9"
                                                            width="0" height="0" rel="10" j="10"
                                                            index="0" default-marker-size="6"
                                                            class="apexcharts-marker"></circle>
                                                    </g>
                                                    <g id="SvgjsG1263"
                                                        class="apexcharts-series-markers apexcharts-series-scatter"
                                                        clip-path="url(#gridRectMarkerMaskcgpizooei)">
                                                        <circle id="SvgjsCircle1264" r="6" cx="238.0083451704545"
                                                            cy="164.18325000000002" x="233.5083451704545"
                                                            y="159.68325000000002" fill="rgba(255,171,0,0.85)"
                                                            fill-opacity="1" stroke="#ffffff" stroke-width="1"
                                                            stroke-dasharray="0" stroke-opacity="0.9" width="0"
                                                            height="0" rel="11" j="11" index="0"
                                                            default-marker-size="6" class="apexcharts-marker"></circle>
                                                    </g>
                                                    <g id="SvgjsG1265"
                                                        class="apexcharts-series-markers apexcharts-series-scatter"
                                                        clip-path="url(#gridRectMarkerMaskcgpizooei)">
                                                        <circle id="SvgjsCircle1266" r="6" cx="289.74928977272725"
                                                            cy="140.7285" x="285.24928977272725" y="136.2285"
                                                            fill="rgba(255,171,0,0.85)" fill-opacity="1" stroke="#ffffff"
                                                            stroke-width="1" stroke-dasharray="0" stroke-opacity="0.9"
                                                            width="0" height="0" rel="12" j="12"
                                                            index="0" default-marker-size="6"
                                                            class="apexcharts-marker"></circle>
                                                    </g>
                                                    <g id="SvgjsG1267"
                                                        class="apexcharts-series-markers apexcharts-series-scatter"
                                                        clip-path="url(#gridRectMarkerMaskcgpizooei)">
                                                        <circle id="SvgjsCircle1268" r="6" cx="341.49023437499994"
                                                            cy="179.81975" x="336.99023437499994" y="175.31975"
                                                            fill="rgba(255,171,0,0.85)" fill-opacity="1" stroke="#ffffff"
                                                            stroke-width="1" stroke-dasharray="0" stroke-opacity="0.9"
                                                            width="0" height="0" rel="13" j="13"
                                                            index="0" default-marker-size="6"
                                                            class="apexcharts-marker"></circle>
                                                    </g>
                                                    <g id="SvgjsG1269"
                                                        class="apexcharts-series-markers apexcharts-series-scatter"
                                                        clip-path="url(#gridRectMarkerMaskcgpizooei)">
                                                        <circle id="SvgjsCircle1270" r="6" cx="393.2311789772727"
                                                            cy="132.91025" x="388.7311789772727" y="128.41025"
                                                            fill="rgba(255,171,0,0.85)" fill-opacity="1" stroke="#ffffff"
                                                            stroke-width="1" stroke-dasharray="0" stroke-opacity="0.9"
                                                            width="0" height="0" rel="14" j="14"
                                                            index="0" default-marker-size="6"
                                                            class="apexcharts-marker"></circle>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1271" class="apexcharts-series" seriesName="Vue"
                                                data:longestSeries="false" rel="2" data:realIndex="1">
                                                <g id="SvgjsG1272" class="apexcharts-series-markers-wrap"
                                                    data:realIndex="1">
                                                    <g id="SvgjsG1274"
                                                        class="apexcharts-series-markers apexcharts-series-scatter"
                                                        clip-path="url(#gridRectMarkerMaskcgpizooei)">
                                                        <circle id="SvgjsCircle1275" r="6" cx="444.97212357954544"
                                                            cy="140.7285" x="440.47212357954544" y="136.2285"
                                                            fill="rgba(105,108,255,0.85)" fill-opacity="1"
                                                            stroke="#ffffff" stroke-width="1" stroke-dasharray="0"
                                                            stroke-opacity="0.9" width="0" height="0"
                                                            rel="0" j="0" index="1" default-marker-size="6"
                                                            class="apexcharts-marker"></circle>
                                                        <circle id="SvgjsCircle1276" r="6" cx="496.71306818181813"
                                                            cy="93.81899999999999" x="492.21306818181813"
                                                            y="89.31899999999999" fill="rgba(105,108,255,0.85)"
                                                            fill-opacity="1" stroke="#ffffff" stroke-width="1"
                                                            stroke-dasharray="0" stroke-opacity="0.9" width="0"
                                                            height="0" rel="1" j="1" index="1"
                                                            default-marker-size="6" class="apexcharts-marker"></circle>
                                                    </g>
                                                    <g id="SvgjsG1277"
                                                        class="apexcharts-series-markers apexcharts-series-scatter"
                                                        clip-path="url(#gridRectMarkerMaskcgpizooei)">
                                                        <circle id="SvgjsCircle1278" r="6" cx="548.4540127840909"
                                                            cy="132.91025" x="543.9540127840909" y="128.41025"
                                                            fill="rgba(105,108,255,0.85)" fill-opacity="1"
                                                            stroke="#ffffff" stroke-width="1" stroke-dasharray="0"
                                                            stroke-opacity="0.9" width="0" height="0"
                                                            rel="2" j="2" index="1" default-marker-size="6"
                                                            class="apexcharts-marker"></circle>
                                                    </g>
                                                    <g id="SvgjsG1279"
                                                        class="apexcharts-series-markers apexcharts-series-scatter"
                                                        clip-path="url(#gridRectMarkerMaskcgpizooei)">
                                                        <circle id="SvgjsCircle1280" r="6" cx="651.9359019886363"
                                                            cy="62.54599999999999" x="647.4359019886363" y="58.04599999999999"
                                                            fill="rgba(105,108,255,0.85)" fill-opacity="1"
                                                            stroke="#ffffff" stroke-width="1" stroke-dasharray="0"
                                                            stroke-opacity="0.9" width="0" height="0"
                                                            rel="3" j="3" index="1" default-marker-size="6"
                                                            class="apexcharts-marker"></circle>
                                                    </g>
                                                    <g id="SvgjsG1281"
                                                        class="apexcharts-series-markers apexcharts-series-scatter"
                                                        clip-path="url(#gridRectMarkerMaskcgpizooei)">
                                                        <circle id="SvgjsCircle1282" r="6" cx="626.0654296875"
                                                            cy="93.81899999999999" x="621.5654296875" y="89.31899999999999"
                                                            fill="rgba(105,108,255,0.85)" fill-opacity="1"
                                                            stroke="#ffffff" stroke-width="1" stroke-dasharray="0"
                                                            stroke-opacity="0.9" width="0" height="0"
                                                            rel="4" j="4" index="1" default-marker-size="6"
                                                            class="apexcharts-marker"></circle>
                                                    </g>
                                                    <g id="SvgjsG1283"
                                                        class="apexcharts-series-markers apexcharts-series-scatter"
                                                        clip-path="url(#gridRectMarkerMaskcgpizooei)">
                                                        <circle id="SvgjsCircle1284" r="6" cx="703.676846590909"
                                                            cy="117.27375" x="699.176846590909" y="112.77375"
                                                            fill="rgba(105,108,255,0.85)" fill-opacity="1"
                                                            stroke="#ffffff" stroke-width="1" stroke-dasharray="0"
                                                            stroke-opacity="0.9" width="0" height="0"
                                                            rel="5" j="5" index="1" default-marker-size="6"
                                                            class="apexcharts-marker"></circle>
                                                    </g>
                                                    <g id="SvgjsG1285"
                                                        class="apexcharts-series-markers apexcharts-series-scatter"
                                                        clip-path="url(#gridRectMarkerMaskcgpizooei)">
                                                        <circle id="SvgjsCircle1286" r="6" cx="755.4177911931818"
                                                            cy="39.09125" x="750.9177911931818" y="34.59125"
                                                            fill="rgba(105,108,255,0.85)" fill-opacity="1"
                                                            stroke="#ffffff" stroke-width="1" stroke-dasharray="0"
                                                            stroke-opacity="0.9" width="0" height="0"
                                                            rel="6" j="6" index="1" default-marker-size="6"
                                                            class="apexcharts-marker"></circle>
                                                    </g>
                                                    <g id="SvgjsG1287"
                                                        class="apexcharts-series-markers apexcharts-series-scatter"
                                                        clip-path="url(#gridRectMarkerMaskcgpizooei)">
                                                        <circle id="SvgjsCircle1288" r="6" cx="781.2882634943181"
                                                            cy="62.54599999999999" x="776.7882634943181" y="58.04599999999999"
                                                            fill="rgba(105,108,255,0.85)" fill-opacity="1"
                                                            stroke="#ffffff" stroke-width="1" stroke-dasharray="0"
                                                            stroke-opacity="0.9" width="0" height="0"
                                                            rel="7" j="7" index="1" default-marker-size="6"
                                                            class="apexcharts-marker"></circle>
                                                    </g>
                                                    <g id="SvgjsG1289"
                                                        class="apexcharts-series-markers apexcharts-series-scatter"
                                                        clip-path="url(#gridRectMarkerMaskcgpizooei)">
                                                        <circle id="SvgjsCircle1290" r="6" cx="755.4177911931818"
                                                            cy="62.54599999999999" x="750.9177911931818" y="58.04599999999999"
                                                            fill="rgba(105,108,255,0.85)" fill-opacity="1"
                                                            stroke="#ffffff" stroke-width="1" stroke-dasharray="0"
                                                            stroke-opacity="0.9" width="0" height="0"
                                                            rel="8" j="8" index="1" default-marker-size="6"
                                                            class="apexcharts-marker"></circle>
                                                    </g>
                                                    <g id="SvgjsG1291"
                                                        class="apexcharts-series-markers apexcharts-series-scatter"
                                                        clip-path="url(#gridRectMarkerMaskcgpizooei)">
                                                        <circle id="SvgjsCircle1292" r="6" cx="703.676846590909"
                                                            cy="93.81899999999999" x="699.176846590909" y="89.31899999999999"
                                                            fill="rgba(105,108,255,0.85)" fill-opacity="1"
                                                            stroke="#ffffff" stroke-width="1" stroke-dasharray="0"
                                                            stroke-opacity="0.9" width="0" height="0"
                                                            rel="9" j="9" index="1" default-marker-size="6"
                                                            class="apexcharts-marker"></circle>
                                                    </g>
                                                    <g id="SvgjsG1293"
                                                        class="apexcharts-series-markers apexcharts-series-scatter"
                                                        clip-path="url(#gridRectMarkerMaskcgpizooei)">
                                                        <circle id="SvgjsCircle1294" r="6" cx="600.1949573863636"
                                                            cy="93.81899999999999" x="595.6949573863636" y="89.31899999999999"
                                                            fill="rgba(105,108,255,0.85)" fill-opacity="1"
                                                            stroke="#ffffff" stroke-width="1" stroke-dasharray="0"
                                                            stroke-opacity="0.9" width="0" height="0"
                                                            rel="10" j="10" index="1" default-marker-size="6"
                                                            class="apexcharts-marker"></circle>
                                                    </g>
                                                    <g id="SvgjsG1295"
                                                        class="apexcharts-series-markers apexcharts-series-scatter"
                                                        clip-path="url(#gridRectMarkerMaskcgpizooei)">
                                                        <circle id="SvgjsCircle1296" r="6" cx="858.8996803977273"
                                                            cy="78.1825" x="854.3996803977273" y="73.6825"
                                                            fill="rgba(105,108,255,0.85)" fill-opacity="1"
                                                            stroke="#ffffff" stroke-width="1" stroke-dasharray="0"
                                                            stroke-opacity="0.9" width="0" height="0"
                                                            rel="11" j="11" index="1" default-marker-size="6"
                                                            class="apexcharts-marker"></circle>
                                                    </g>
                                                    <g id="SvgjsG1297"
                                                        class="apexcharts-series-markers apexcharts-series-scatter"
                                                        clip-path="url(#gridRectMarkerMaskcgpizooei)">
                                                        <circle id="SvgjsCircle1298" r="6" cx="651.9359019886363"
                                                            cy="218.911" x="647.4359019886363" y="214.411"
                                                            fill="rgba(105,108,255,0.85)" fill-opacity="1"
                                                            stroke="#ffffff" stroke-width="1" stroke-dasharray="0"
                                                            stroke-opacity="0.9" width="0" height="0"
                                                            rel="12" j="12" index="1" default-marker-size="6"
                                                            class="apexcharts-marker"></circle>
                                                    </g>
                                                    <g id="SvgjsG1299"
                                                        class="apexcharts-series-markers apexcharts-series-scatter"
                                                        clip-path="url(#gridRectMarkerMaskcgpizooei)"></g>
                                                    <g id="SvgjsG1300"
                                                        class="apexcharts-series-markers apexcharts-series-scatter"
                                                        clip-path="url(#gridRectMarkerMaskcgpizooei)"></g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1301" class="apexcharts-series" seriesName="React"
                                                data:longestSeries="false" rel="3" data:realIndex="2">
                                                <g id="SvgjsG1302" class="apexcharts-series-markers-wrap"
                                                    data:realIndex="2">
                                                    <g id="SvgjsG1304"
                                                        class="apexcharts-series-markers apexcharts-series-scatter"
                                                        clip-path="url(#gridRectMarkerMaskcgpizooei)">
                                                        <circle id="SvgjsCircle1305" r="6" cx="444.97212357954544"
                                                            cy="86.00075000000001" x="440.47212357954544"
                                                            y="81.50075000000001" fill="rgba(113,221,55,0.85)"
                                                            fill-opacity="1" stroke="#ffffff" stroke-width="1"
                                                            stroke-dasharray="0" stroke-opacity="0.9" width="0"
                                                            height="0" rel="0" j="0" index="2"
                                                            default-marker-size="6" class="apexcharts-marker"></circle>
                                                        <circle id="SvgjsCircle1306" r="6" cx="393.2311789772727"
                                                            cy="164.18325000000002" x="388.7311789772727"
                                                            y="159.68325000000002" fill="rgba(113,221,55,0.85)"
                                                            fill-opacity="1" stroke="#ffffff" stroke-width="1"
                                                            stroke-dasharray="0" stroke-opacity="0.9" width="0"
                                                            height="0" rel="1" j="1" index="2"
                                                            default-marker-size="6" class="apexcharts-marker"></circle>
                                                    </g>
                                                    <g id="SvgjsG1307"
                                                        class="apexcharts-series-markers apexcharts-series-scatter"
                                                        clip-path="url(#gridRectMarkerMaskcgpizooei)">
                                                        <circle id="SvgjsCircle1308" r="6" cx="755.4177911931818"
                                                            cy="140.7285" x="750.9177911931818" y="136.2285"
                                                            fill="rgba(113,221,55,0.85)" fill-opacity="1" stroke="#ffffff"
                                                            stroke-width="1" stroke-dasharray="0" stroke-opacity="0.9"
                                                            width="0" height="0" rel="2" j="2"
                                                            index="2" default-marker-size="6"
                                                            class="apexcharts-marker"></circle>
                                                    </g>
                                                    <g id="SvgjsG1309"
                                                        class="apexcharts-series-markers apexcharts-series-scatter"
                                                        clip-path="url(#gridRectMarkerMaskcgpizooei)">
                                                        <circle id="SvgjsCircle1310" r="6" cx="807.1587357954545"
                                                            cy="39.09125" x="802.6587357954545" y="34.59125"
                                                            fill="rgba(113,221,55,0.85)" fill-opacity="1" stroke="#ffffff"
                                                            stroke-width="1" stroke-dasharray="0" stroke-opacity="0.9"
                                                            width="0" height="0" rel="3" j="3"
                                                            index="2" default-marker-size="6"
                                                            class="apexcharts-marker"></circle>
                                                    </g>
                                                    <g id="SvgjsG1311"
                                                        class="apexcharts-series-markers apexcharts-series-scatter"
                                                        clip-path="url(#gridRectMarkerMaskcgpizooei)">
                                                        <circle id="SvgjsCircle1312" r="6" cx="833.029208096591"
                                                            cy="86.00075000000001" x="828.529208096591" y="81.50075000000001"
                                                            fill="rgba(113,221,55,0.85)" fill-opacity="1" stroke="#ffffff"
                                                            stroke-width="1" stroke-dasharray="0" stroke-opacity="0.9"
                                                            width="0" height="0" rel="4" j="4"
                                                            index="2" default-marker-size="6"
                                                            class="apexcharts-marker"></circle>
                                                    </g>
                                                    <g id="SvgjsG1313"
                                                        class="apexcharts-series-markers apexcharts-series-scatter"
                                                        clip-path="url(#gridRectMarkerMaskcgpizooei)">
                                                        <circle id="SvgjsCircle1314" r="6" cx="858.8996803977273"
                                                            cy="140.7285" x="854.3996803977273" y="136.2285"
                                                            fill="rgba(113,221,55,0.85)" fill-opacity="1" stroke="#ffffff"
                                                            stroke-width="1" stroke-dasharray="0" stroke-opacity="0.9"
                                                            width="0" height="0" rel="5" j="5"
                                                            index="2" default-marker-size="6"
                                                            class="apexcharts-marker"></circle>
                                                    </g>
                                                    <g id="SvgjsG1315"
                                                        class="apexcharts-series-markers apexcharts-series-scatter"
                                                        clip-path="url(#gridRectMarkerMaskcgpizooei)">
                                                        <circle id="SvgjsCircle1316" r="6" cx="910.640625" cy="203.2745"
                                                            x="906.140625" y="198.7745" fill="rgba(113,221,55,0.85)"
                                                            fill-opacity="1" stroke="#ffffff" stroke-width="1"
                                                            stroke-dasharray="0" stroke-opacity="0.9" width="0"
                                                            height="0" rel="6" j="6" index="2"
                                                            default-marker-size="6" class="apexcharts-marker"></circle>
                                                    </g>
                                                    <g id="SvgjsG1317"
                                                        class="apexcharts-series-markers apexcharts-series-scatter"
                                                        clip-path="url(#gridRectMarkerMaskcgpizooei)">
                                                        <circle id="SvgjsCircle1318" r="6" cx="703.676846590909"
                                                            cy="0" x="699.176846590909" y="-4.5"
                                                            fill="rgba(113,221,55,0.85)" fill-opacity="1" stroke="#ffffff"
                                                            stroke-width="1" stroke-dasharray="0" stroke-opacity="0.9"
                                                            width="0" height="0" rel="7" j="7"
                                                            index="2" default-marker-size="6"
                                                            class="apexcharts-marker"></circle>
                                                    </g>
                                                    <g id="SvgjsG1319"
                                                        class="apexcharts-series-markers apexcharts-series-scatter"
                                                        clip-path="url(#gridRectMarkerMaskcgpizooei)">
                                                        <circle id="SvgjsCircle1320" r="6" cx="755.4177911931818"
                                                            cy="156.365" x="750.9177911931818" y="151.865"
                                                            fill="rgba(113,221,55,0.85)" fill-opacity="1" stroke="#ffffff"
                                                            stroke-width="1" stroke-dasharray="0" stroke-opacity="0.9"
                                                            width="0" height="0" rel="8" j="8"
                                                            index="2" default-marker-size="6"
                                                            class="apexcharts-marker"></circle>
                                                    </g>
                                                    <g id="SvgjsG1321"
                                                        class="apexcharts-series-markers apexcharts-series-scatter"
                                                        clip-path="url(#gridRectMarkerMaskcgpizooei)">
                                                        <circle id="SvgjsCircle1322" r="6" cx="858.8996803977273"
                                                            cy="242.36575" x="854.3996803977273" y="237.86575"
                                                            fill="rgba(113,221,55,0.85)" fill-opacity="1" stroke="#ffffff"
                                                            stroke-width="1" stroke-dasharray="0" stroke-opacity="0.9"
                                                            width="0" height="0" rel="9" j="9"
                                                            index="2" default-marker-size="6"
                                                            class="apexcharts-marker"></circle>
                                                    </g>
                                                    <g id="SvgjsG1323"
                                                        class="apexcharts-series-markers apexcharts-series-scatter"
                                                        clip-path="url(#gridRectMarkerMaskcgpizooei)">
                                                        <circle id="SvgjsCircle1324" r="6" cx="755.4177911931818"
                                                            cy="218.911" x="750.9177911931818" y="214.411"
                                                            fill="rgba(113,221,55,0.85)" fill-opacity="1" stroke="#ffffff"
                                                            stroke-width="1" stroke-dasharray="0" stroke-opacity="0.9"
                                                            width="0" height="0" rel="10" j="10"
                                                            index="2" default-marker-size="6"
                                                            class="apexcharts-marker"></circle>
                                                    </g>
                                                    <g id="SvgjsG1325"
                                                        class="apexcharts-series-markers apexcharts-series-scatter"
                                                        clip-path="url(#gridRectMarkerMaskcgpizooei)"></g>
                                                    <g id="SvgjsG1326"
                                                        class="apexcharts-series-markers apexcharts-series-scatter"
                                                        clip-path="url(#gridRectMarkerMaskcgpizooei)"></g>
                                                    <g id="SvgjsG1327"
                                                        class="apexcharts-series-markers apexcharts-series-scatter"
                                                        clip-path="url(#gridRectMarkerMaskcgpizooei)"></g>
                                                    <g id="SvgjsG1328"
                                                        class="apexcharts-series-markers apexcharts-series-scatter"
                                                        clip-path="url(#gridRectMarkerMaskcgpizooei)"></g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1241" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            <g id="SvgjsG1273" class="apexcharts-datalabels" data:realIndex="1"></g>
                                            <g id="SvgjsG1303" class="apexcharts-datalabels" data:realIndex="2"></g>
                                        </g>
                                        <line id="SvgjsLine1397" x1="0" y1="0" x2="910.640625"
                                            y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1398" x1="0" y1="0" x2="910.640625"
                                            y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG1399" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG1400" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG1401" class="apexcharts-point-annotations"></g>
                                        <rect id="SvgjsRect1402" width="0" height="0" x="0" y="0"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#fefefe"
                                            class="apexcharts-zoom-rect"></rect>
                                        <rect id="SvgjsRect1403" width="0" height="0" x="0" y="0"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#fefefe"
                                            class="apexcharts-selection-rect"></rect>
                                    </g>
                                    <rect id="SvgjsRect1234" width="0" height="0" x="0" y="0" rx="0"
                                        ry="0" opacity="1" stroke-width="0" stroke="none"
                                        stroke-dasharray="0" fill="#fefefe"></rect>
                                    <g id="SvgjsG1364" class="apexcharts-yaxis" rel="0"
                                        transform="translate(18.703125, 0)">
                                        <g id="SvgjsG1365" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1366"
                                                font-family="Helvetica, Arial, sans-serif" x="20" y="49.4" text-anchor="end"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1367">400</tspan>
                                                <title>400</title>
                                            </text><text id="SvgjsText1368" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="127.58250000000001" text-anchor="end" dominant-baseline="auto"
                                                font-size="13px" font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1369">300</tspan>
                                                <title>300</title>
                                            </text><text id="SvgjsText1370" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="205.76500000000001" text-anchor="end" dominant-baseline="auto"
                                                font-size="13px" font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1371">200</tspan>
                                                <title>200</title>
                                            </text><text id="SvgjsText1372" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="283.9475" text-anchor="end" dominant-baseline="auto"
                                                font-size="13px" font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1373">100</tspan>
                                                <title>100</title>
                                            </text><text id="SvgjsText1374" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="362.13" text-anchor="end" dominant-baseline="auto"
                                                font-size="13px" font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1375">0</tspan>
                                                <title>0</title>
                                            </text></g>
                                    </g>
                                    <g id="SvgjsG1231" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-tooltip apexcharts-theme-light"
                                    style="left: 395.703px; top: 128.494px;">
                                    <div class="apexcharts-tooltip-title"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">12.0</div>
                                    <div class="apexcharts-tooltip-series-group apexcharts-active"
                                        style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker"
                                            style="background-color: rgba(255, 171, 0, 0.85);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label">Angular: </span><span
                                                    class="apexcharts-tooltip-text-y-value">170</span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 2; display: none;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgba(255, 171, 0, 0.85);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label">Angular: </span><span
                                                    class="apexcharts-tooltip-text-y-value">170</span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 3; display: none;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgba(255, 171, 0, 0.85);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label">Angular: </span><span
                                                    class="apexcharts-tooltip-text-y-value">170</span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"
                                    style="left: 363.602px; top: 362.73px;">
                                    <div class="apexcharts-xaxistooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px; min-width: 29.2031px;">
                                        12.0</div>
                                </div>
                                <div
                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                    <div class="apexcharts-yaxistooltip-text"></div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 1032px; height: 425px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Scatter Chart -->

            <!-- Line Chart -->
            <div class="col-12 mb-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div>
                            <h5 class="card-title mb-0">Balance</h5>
                            <small class="text-muted">Commercial networks &amp; enterprises</small>
                        </div>
                        <div class="d-sm-flex d-none align-items-center">
                            <h5 class="fw-bold mb-0 me-3">$ 100,000</h5>
                            <span class="badge bg-label-secondary">
                                <i class="bx bx-down-arrow-alt bx-xs text-danger"></i>
                                <span class="align-middle">20%</span>
                            </span>
                        </div>
                    </div>
                    <div class="card-body" style="position: relative;">
                        <div id="lineChart" style="min-height: 400px;">
                            <div id="apexchartswj7hcwor" class="apexcharts-canvas apexchartswj7hcwor apexcharts-theme-light"
                                style="width: 983px; height: 400px;"><svg id="SvgjsSvg1404" width="983"
                                    height="400" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent;">
                                    <g id="SvgjsG1406" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(48.703125, 10)">
                                        <defs id="SvgjsDefs1405">
                                            <clipPath id="gridRectMaskwj7hcwor">
                                                <rect id="SvgjsRect1412" width="916.0234375" height="355.73" x="-4.5"
                                                    y="-2.5" rx="0" ry="0" opacity="1"
                                                    stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                                </rect>
                                            </clipPath>
                                            <clipPath id="forecastMaskwj7hcwor"></clipPath>
                                            <clipPath id="nonForecastMaskwj7hcwor"></clipPath>
                                            <clipPath id="gridRectMarkerMaskwj7hcwor">
                                                <rect id="SvgjsRect1413" width="911.0234375" height="354.73" x="-2" y="-2"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                        </defs>
                                        <line id="SvgjsLine1411" x1="517.7991071428571" y1="0"
                                            x2="517.7991071428571" y2="350.73" stroke="#b6b6b6" stroke-dasharray="3"
                                            stroke-linecap="butt" class="apexcharts-xcrosshairs" x="517.7991071428571" y="0"
                                            width="1" height="350.73" fill="#b1b9c4" filter="none"
                                            fill-opacity="0.9" stroke-width="1"></line>
                                        <g id="SvgjsG1419" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG1420" class="apexcharts-xaxis-texts-g"
                                                transform="translate(0, -4)"><text id="SvgjsText1422"
                                                    font-family="Helvetica, Arial, sans-serif" x="0" y="379.73"
                                                    text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                                    font-weight="400" fill="#a1acb8"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1423">7/12</tspan>
                                                    <title>7/12</title>
                                                </text><text id="SvgjsText1425" font-family="Helvetica, Arial, sans-serif"
                                                    x="64.78738839285714" y="379.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1426">8/12</tspan>
                                                    <title>8/12</title>
                                                </text><text id="SvgjsText1428" font-family="Helvetica, Arial, sans-serif"
                                                    x="129.57477678571428" y="379.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1429">9/12</tspan>
                                                    <title>9/12</title>
                                                </text><text id="SvgjsText1431" font-family="Helvetica, Arial, sans-serif"
                                                    x="194.3621651785714" y="379.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1432">10/12</tspan>
                                                    <title>10/12</title>
                                                </text><text id="SvgjsText1434" font-family="Helvetica, Arial, sans-serif"
                                                    x="259.14955357142856" y="379.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1435">11/12</tspan>
                                                    <title>11/12</title>
                                                </text><text id="SvgjsText1437" font-family="Helvetica, Arial, sans-serif"
                                                    x="323.93694196428567" y="379.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1438">12/12</tspan>
                                                    <title>12/12</title>
                                                </text><text id="SvgjsText1440" font-family="Helvetica, Arial, sans-serif"
                                                    x="388.7243303571428" y="379.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1441">13/12</tspan>
                                                    <title>13/12</title>
                                                </text><text id="SvgjsText1443" font-family="Helvetica, Arial, sans-serif"
                                                    x="453.5117187499999" y="379.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1444">14/12</tspan>
                                                    <title>14/12</title>
                                                </text><text id="SvgjsText1446" font-family="Helvetica, Arial, sans-serif"
                                                    x="518.299107142857" y="379.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1447">15/12</tspan>
                                                    <title>15/12</title>
                                                </text><text id="SvgjsText1449" font-family="Helvetica, Arial, sans-serif"
                                                    x="583.0864955357141" y="379.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1450">16/12</tspan>
                                                    <title>16/12</title>
                                                </text><text id="SvgjsText1452" font-family="Helvetica, Arial, sans-serif"
                                                    x="647.8738839285712" y="379.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1453">17/12</tspan>
                                                    <title>17/12</title>
                                                </text><text id="SvgjsText1455" font-family="Helvetica, Arial, sans-serif"
                                                    x="712.6612723214283" y="379.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1456">18/12</tspan>
                                                    <title>18/12</title>
                                                </text><text id="SvgjsText1458" font-family="Helvetica, Arial, sans-serif"
                                                    x="777.4486607142854" y="379.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1459">19/12</tspan>
                                                    <title>19/12</title>
                                                </text><text id="SvgjsText1461" font-family="Helvetica, Arial, sans-serif"
                                                    x="842.2360491071425" y="379.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1462">20/12</tspan>
                                                    <title>20/12</title>
                                                </text><text id="SvgjsText1464" font-family="Helvetica, Arial, sans-serif"
                                                    x="907.0234374999997" y="379.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1465">21/12</tspan>
                                                    <title>21/12</title>
                                                </text></g>
                                        </g>
                                        <g id="SvgjsG1480" class="apexcharts-grid">
                                            <g id="SvgjsG1481" class="apexcharts-gridlines-horizontal">
                                                <line id="SvgjsLine1498" x1="0" y1="0" x2="907.0234375"
                                                    y2="0" stroke="#eceef1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1499" x1="0" y1="70.146" x2="907.0234375"
                                                    y2="70.146" stroke="#eceef1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1500" x1="0" y1="140.292" x2="907.0234375"
                                                    y2="140.292" stroke="#eceef1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1501" x1="0" y1="210.438" x2="907.0234375"
                                                    y2="210.438" stroke="#eceef1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1502" x1="0" y1="280.584" x2="907.0234375"
                                                    y2="280.584" stroke="#eceef1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1503" x1="0" y1="350.73" x2="907.0234375"
                                                    y2="350.73" stroke="#eceef1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG1482" class="apexcharts-gridlines-vertical">
                                                <line id="SvgjsLine1483" x1="0" y1="0" x2="0"
                                                    y2="350.73" stroke="#eceef1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1484" x1="64.78738839285714" y1="0"
                                                    x2="64.78738839285714" y2="350.73" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1485" x1="129.57477678571428" y1="0"
                                                    x2="129.57477678571428" y2="350.73" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1486" x1="194.36216517857142" y1="0"
                                                    x2="194.36216517857142" y2="350.73" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1487" x1="259.14955357142856" y1="0"
                                                    x2="259.14955357142856" y2="350.73" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1488" x1="323.93694196428567" y1="0"
                                                    x2="323.93694196428567" y2="350.73" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1489" x1="388.7243303571428" y1="0"
                                                    x2="388.7243303571428" y2="350.73" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1490" x1="453.5117187499999" y1="0"
                                                    x2="453.5117187499999" y2="350.73" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1491" x1="518.299107142857" y1="0"
                                                    x2="518.299107142857" y2="350.73" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1492" x1="583.0864955357141" y1="0"
                                                    x2="583.0864955357141" y2="350.73" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1493" x1="647.8738839285712" y1="0"
                                                    x2="647.8738839285712" y2="350.73" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1494" x1="712.6612723214283" y1="0"
                                                    x2="712.6612723214283" y2="350.73" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1495" x1="777.4486607142854" y1="0"
                                                    x2="777.4486607142854" y2="350.73" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1496" x1="842.2360491071425" y1="0"
                                                    x2="842.2360491071425" y2="350.73" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1497" x1="907.0234374999997" y1="0"
                                                    x2="907.0234374999997" y2="350.73" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                            </g>
                                            <line id="SvgjsLine1505" x1="0" y1="350.73" x2="907.0234375"
                                                y2="350.73" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                            <line id="SvgjsLine1504" x1="0" y1="1" x2="0"
                                                y2="350.73" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                        </g>
                                        <g id="SvgjsG1414" class="apexcharts-line-series apexcharts-plot-series">
                                            <g id="SvgjsG1415" class="apexcharts-series" seriesName="seriesx1"
                                                data:longestSeries="true" rel="1" data:realIndex="0">
                                                <path id="SvgjsPath1418"
                                                    d="M0 23.382000000000005L64.78738839285714 116.91L129.57477678571428 93.52800000000002L194.36216517857142 140.292L259.14955357142856 35.07299999999998L323.9369419642857 58.454999999999984L388.72433035714283 268.89300000000003L453.51171875 245.51100000000002L518.2991071428571 116.91L583.0864955357143 175.365L647.8738839285714 163.674L712.6612723214286 233.82L777.4486607142857 175.365L842.2360491071429 233.82L907.0234375 292.27500000000003C907.0234375 292.27500000000003 907.0234375 292.27500000000003 907.0234375 292.27500000000003 "
                                                    fill="none" fill-opacity="1" stroke="rgba(255,171,0,0.85)"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="5"
                                                    stroke-dasharray="0" class="apexcharts-line" index="0"
                                                    clip-path="url(#gridRectMaskwj7hcwor)"
                                                    pathTo="M 0 23.382000000000005L 64.78738839285714 116.91L 129.57477678571428 93.52800000000002L 194.36216517857142 140.292L 259.14955357142856 35.07299999999998L 323.9369419642857 58.454999999999984L 388.72433035714283 268.89300000000003L 453.51171875 245.51100000000002L 518.2991071428571 116.91L 583.0864955357143 175.365L 647.8738839285714 163.674L 712.6612723214286 233.82L 777.4486607142857 175.365L 842.2360491071429 233.82L 907.0234375 292.27500000000003"
                                                    pathFrom="M -1 350.73L -1 350.73L 64.78738839285714 350.73L 129.57477678571428 350.73L 194.36216517857142 350.73L 259.14955357142856 350.73L 323.9369419642857 350.73L 388.72433035714283 350.73L 453.51171875 350.73L 518.2991071428571 350.73L 583.0864955357143 350.73L 647.8738839285714 350.73L 712.6612723214286 350.73L 777.4486607142857 350.73L 842.2360491071429 350.73L 907.0234375 350.73">
                                                </path>
                                                <g id="SvgjsG1416" class="apexcharts-series-markers-wrap"
                                                    data:realIndex="0">
                                                    <g class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle1511" r="0" cx="518.2991071428571"
                                                            cy="116.91"
                                                            class="apexcharts-marker wyl3xv7drl no-pointer-events"
                                                            stroke="#ffffff" fill="#ffab00" fill-opacity="1"
                                                            stroke-width="7" stroke-opacity="1" default-marker-size="0">
                                                        </circle>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1417" class="apexcharts-datalabels" data:realIndex="0"></g>
                                        </g>
                                        <line id="SvgjsLine1506" x1="0" y1="0" x2="907.0234375"
                                            y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1507" x1="0" y1="0" x2="907.0234375"
                                            y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG1508" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG1509" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG1510" class="apexcharts-point-annotations"></g>
                                    </g>
                                    <rect id="SvgjsRect1410" width="0" height="0" x="0" y="0" rx="0"
                                        ry="0" opacity="1" stroke-width="0" stroke="none"
                                        stroke-dasharray="0" fill="#fefefe"></rect>
                                    <g id="SvgjsG1466" class="apexcharts-yaxis" rel="0"
                                        transform="translate(18.703125, 0)">
                                        <g id="SvgjsG1467" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1468"
                                                font-family="Helvetica, Arial, sans-serif" x="20" y="11.5" text-anchor="end"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1469">300</tspan>
                                                <title>300</title>
                                            </text><text id="SvgjsText1470" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="81.646" text-anchor="end" dominant-baseline="auto"
                                                font-size="13px" font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1471">240</tspan>
                                                <title>240</title>
                                            </text><text id="SvgjsText1472" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="151.792" text-anchor="end" dominant-baseline="auto"
                                                font-size="13px" font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1473">180</tspan>
                                                <title>180</title>
                                            </text><text id="SvgjsText1474" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="221.938" text-anchor="end" dominant-baseline="auto"
                                                font-size="13px" font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1475">120</tspan>
                                                <title>120</title>
                                            </text><text id="SvgjsText1476" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="292.084" text-anchor="end" dominant-baseline="auto"
                                                font-size="13px" font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1477">60</tspan>
                                                <title>60</title>
                                            </text><text id="SvgjsText1478" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="362.23" text-anchor="end" dominant-baseline="auto"
                                                font-size="13px" font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1479">0</tspan>
                                                <title>0</title>
                                            </text></g>
                                    </g>
                                    <g id="SvgjsG1407" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-legend" style="max-height: 200px;"></div>
                                <div class="apexcharts-tooltip apexcharts-theme-light"
                                    style="left: 484.955px; top: 119.91px;">
                                    <div class="px-3 py-2"><span>200%</span></div>
                                </div>
                                <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"
                                    style="left: 536.729px; top: 362.73px;">
                                    <div class="apexcharts-xaxistooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px; min-width: 37.5469px;">
                                        15/12</div>
                                </div>
                                <div
                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                    <div class="apexcharts-yaxistooltip-text"></div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 1032px; height: 425px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Line Chart -->

            <!-- Bar Chart -->
            <div class="col-md-6 col-12 mb-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                            <p class="card-subtitle text-muted mb-1">Balance</p>
                            <h5 class="card-title fw-bold mb-0">$74,382.72</h5>
                        </div>
                        <div class="dropdown">
                            <button type="button" class="btn dropdown-toggle px-0" data-bs-toggle="dropdown"
                                aria-expanded="false"><i class="bx bx-calendar"></i></button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Today</a>
                                </li>
                                <li><a href="javascript:void(0);"
                                        class="dropdown-item d-flex align-items-center">Yesterday</a></li>
                                <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 7
                                        Days</a></li>
                                <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 30
                                        Days</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Current
                                        Month</a></li>
                                <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last
                                        Month</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body" style="position: relative;">
                        <div id="horizontalBarChart" style="min-height: 415px;">
                            <div id="apexchartszekqw33c" class="apexcharts-canvas apexchartszekqw33c apexcharts-theme-light"
                                style="width: 455px; height: 400px;"><svg id="SvgjsSvg1512" width="455"
                                    height="400" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent;">
                                    <g id="SvgjsG1514" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(79.015625, 10)">
                                        <defs id="SvgjsDefs1513">
                                            <linearGradient id="SvgjsLinearGradient1518" x1="0" y1="0"
                                                x2="0" y2="1">
                                                <stop id="SvgjsStop1519" stop-opacity="0.4"
                                                    stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                <stop id="SvgjsStop1520" stop-opacity="0.5"
                                                    stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                <stop id="SvgjsStop1521" stop-opacity="0.5"
                                                    stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                            </linearGradient>
                                            <clipPath id="gridRectMaskzekqw33c">
                                                <rect id="SvgjsRect1523" width="358.1328125" height="362.73" x="-2" y="0"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMaskzekqw33c"></clipPath>
                                            <clipPath id="nonForecastMaskzekqw33c"></clipPath>
                                            <clipPath id="gridRectMarkerMaskzekqw33c">
                                                <rect id="SvgjsRect1524" width="358.1328125" height="366.73" x="-2" y="-2"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                        </defs>
                                        <rect id="SvgjsRect1522" width="0" height="362.73" x="0" y="0"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke-dasharray="3" fill="url(#SvgjsLinearGradient1518)"
                                            class="apexcharts-xcrosshairs" y2="362.73" filter="none"
                                            fill-opacity="0.9"></rect>
                                        <g id="SvgjsG1560" class="apexcharts-yaxis apexcharts-xaxis-inversed"
                                            rel="0">
                                            <g id="SvgjsG1561"
                                                class="apexcharts-yaxis-texts-g apexcharts-xaxis-inversed-texts-g"
                                                transform="translate(0, 0)"><text id="SvgjsText1562"
                                                    font-family="Helvetica, Arial, sans-serif" x="-15" y="28.264675324675327"
                                                    text-anchor="end" dominant-baseline="auto" font-size="13px"
                                                    font-weight="400" fill="#a1acb8"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1563">MON, 11</tspan>
                                                    <title>MON, 11</title>
                                                </text><text id="SvgjsText1564" font-family="Helvetica, Arial, sans-serif"
                                                    x="-15" y="80.08324675324675" text-anchor="end" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1565">THU, 14</tspan>
                                                    <title>THU, 14</title>
                                                </text><text id="SvgjsText1566" font-family="Helvetica, Arial, sans-serif"
                                                    x="-15" y="131.9018181818182" text-anchor="end" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1567">FRI, 15</tspan>
                                                    <title>FRI, 15</title>
                                                </text><text id="SvgjsText1568" font-family="Helvetica, Arial, sans-serif"
                                                    x="-15" y="183.72038961038962" text-anchor="end"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1569">MON, 18</tspan>
                                                    <title>MON, 18</title>
                                                </text><text id="SvgjsText1570" font-family="Helvetica, Arial, sans-serif"
                                                    x="-15" y="235.53896103896105" text-anchor="end"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1571">WED, 20</tspan>
                                                    <title>WED, 20</title>
                                                </text><text id="SvgjsText1572" font-family="Helvetica, Arial, sans-serif"
                                                    x="-15" y="287.35753246753245" text-anchor="end"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1573">FRI, 21</tspan>
                                                    <title>FRI, 21</title>
                                                </text><text id="SvgjsText1574" font-family="Helvetica, Arial, sans-serif"
                                                    x="-15" y="339.1761038961039" text-anchor="end" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1575">MON, 23</tspan>
                                                    <title>MON, 23</title>
                                                </text></g>
                                        </g>
                                        <g id="SvgjsG1543" class="apexcharts-xaxis apexcharts-yaxis-inversed">
                                            <g id="SvgjsG1544" class="apexcharts-xaxis-texts-g"
                                                transform="translate(0, -8.666666666666666)"><text id="SvgjsText1545"
                                                    font-family="Helvetica, Arial, sans-serif" x="354.1328125" y="392.73"
                                                    text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                                    font-weight="400" fill="#a1acb8"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1547">800</tspan>
                                                    <title>800</title>
                                                </text><text id="SvgjsText1548" font-family="Helvetica, Arial, sans-serif"
                                                    x="265.499609375" y="392.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1550">600</tspan>
                                                    <title>600</title>
                                                </text><text id="SvgjsText1551" font-family="Helvetica, Arial, sans-serif"
                                                    x="176.86640625000004" y="392.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1553">400</tspan>
                                                    <title>400</title>
                                                </text><text id="SvgjsText1554" font-family="Helvetica, Arial, sans-serif"
                                                    x="88.23320312500005" y="392.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1556">200</tspan>
                                                    <title>200</title>
                                                </text><text id="SvgjsText1557" font-family="Helvetica, Arial, sans-serif"
                                                    x="-0.39999999999997726" y="392.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1559">0</tspan>
                                                    <title>0</title>
                                                </text></g>
                                        </g>
                                        <g id="SvgjsG1576" class="apexcharts-grid">
                                            <g id="SvgjsG1577" class="apexcharts-gridlines-horizontal">
                                                <line id="SvgjsLine1579" x1="0" y1="0" x2="354.1328125"
                                                    y2="0" stroke="#eceef1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1580" x1="0" y1="51.81857142857143"
                                                    x2="354.1328125" y2="51.81857142857143" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1581" x1="0" y1="103.63714285714286"
                                                    x2="354.1328125" y2="103.63714285714286" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1582" x1="0" y1="155.4557142857143"
                                                    x2="354.1328125" y2="155.4557142857143" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1583" x1="0" y1="207.27428571428572"
                                                    x2="354.1328125" y2="207.27428571428572" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1584" x1="0" y1="259.09285714285716"
                                                    x2="354.1328125" y2="259.09285714285716" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1585" x1="0" y1="310.9114285714286"
                                                    x2="354.1328125" y2="310.9114285714286" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1586" x1="0" y1="362.73" x2="354.1328125"
                                                    y2="362.73" stroke="#eceef1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG1578" class="apexcharts-gridlines-vertical"></g>
                                            <line id="SvgjsLine1588" x1="0" y1="362.73" x2="354.1328125"
                                                y2="362.73" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                            <line id="SvgjsLine1587" x1="0" y1="1" x2="0"
                                                y2="362.73" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                        </g>
                                        <g id="SvgjsG1525" class="apexcharts-bar-series apexcharts-plot-series">
                                            <g id="SvgjsG1526" class="apexcharts-series" rel="1"
                                                seriesName="seriesx1" data:realIndex="0">
                                                <path id="SvgjsPath1530"
                                                    d="M0.1 18.1365L301.9662109375 18.1365C307.29954427083334 18.1365 309.9662109375 20.80316666666667 309.9662109375 26.1365L309.9662109375 25.682071428571433C309.9662109375 31.01540476190477 307.29954427083334 33.68207142857143 301.9662109375 33.68207142857143L301.9662109375 33.68207142857143L0.1 33.68207142857143L0.1 33.68207142857143C0.1 33.68207142857143 0.1 33.68207142857143 0.1 33.68207142857143C0.1 33.68207142857143 0.1 18.1365 0.1 18.1365C0.1 18.1365 0.1 18.1365 0.1 18.1365C0.1 18.1365 0.1 18.1365 0.1 18.1365 "
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskzekqw33c)"
                                                    pathTo="M 0.1 18.1365L 301.9662109375 18.1365Q 309.9662109375 18.1365 309.9662109375 26.1365L 309.9662109375 25.682071428571433Q 309.9662109375 33.68207142857143 301.9662109375 33.68207142857143L 301.9662109375 33.68207142857143L 0.1 33.68207142857143L 0.1 33.68207142857143Q 0.1 33.68207142857143 0.1 33.68207142857143L 0.1 18.1365Q 0.1 18.1365 0.1 18.1365z"
                                                    pathFrom="M 0.1 18.1365L 0.1 18.1365L 0.1 33.68207142857143L 0.1 33.68207142857143L 0.1 33.68207142857143L 0.1 33.68207142857143L 0.1 33.68207142857143L 0.1 18.1365"
                                                    cy="69.95507142857143" cx="309.9662109375" j="0" val="700"
                                                    barHeight="15.54557142857143" barWidth="309.8662109375"></path>
                                                <path id="SvgjsPath1532"
                                                    d="M0.1 69.95507142857143L147.03310546875 69.95507142857143C152.36643880208334 69.95507142857143 155.03310546875 72.6217380952381 155.03310546875 77.95507142857143L155.03310546875 77.50064285714286C155.03310546875 82.83397619047619 152.36643880208334 85.50064285714286 147.03310546875 85.50064285714286L147.03310546875 85.50064285714286L0.1 85.50064285714286L0.1 85.50064285714286C0.1 85.50064285714286 0.1 85.50064285714286 0.1 85.50064285714286C0.1 85.50064285714286 0.1 69.95507142857143 0.1 69.95507142857143C0.1 69.95507142857143 0.1 69.95507142857143 0.1 69.95507142857143C0.1 69.95507142857143 0.1 69.95507142857143 0.1 69.95507142857143 "
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskzekqw33c)"
                                                    pathTo="M 0.1 69.95507142857143L 147.03310546875 69.95507142857143Q 155.03310546875 69.95507142857143 155.03310546875 77.95507142857143L 155.03310546875 77.50064285714286Q 155.03310546875 85.50064285714286 147.03310546875 85.50064285714286L 147.03310546875 85.50064285714286L 0.1 85.50064285714286L 0.1 85.50064285714286Q 0.1 85.50064285714286 0.1 85.50064285714286L 0.1 69.95507142857143Q 0.1 69.95507142857143 0.1 69.95507142857143z"
                                                    pathFrom="M 0.1 69.95507142857143L 0.1 69.95507142857143L 0.1 85.50064285714286L 0.1 85.50064285714286L 0.1 85.50064285714286L 0.1 85.50064285714286L 0.1 85.50064285714286L 0.1 69.95507142857143"
                                                    cy="121.77364285714286" cx="155.03310546875" j="1" val="350"
                                                    barHeight="15.54557142857143" barWidth="154.93310546875"></path>
                                                <path id="SvgjsPath1534"
                                                    d="M0.1 121.77364285714286L204.57968749999998 121.77364285714286C209.9130208333333 121.77364285714286 212.57968749999998 124.44030952380953 212.57968749999998 129.77364285714287L212.57968749999998 129.31921428571428C212.57968749999998 134.65254761904762 209.9130208333333 137.31921428571428 204.57968749999998 137.31921428571428L204.57968749999998 137.31921428571428L0.1 137.31921428571428L0.1 137.31921428571428C0.1 137.31921428571428 0.1 137.31921428571428 0.1 137.31921428571428C0.1 137.31921428571428 0.1 121.77364285714286 0.1 121.77364285714286C0.1 121.77364285714286 0.1 121.77364285714286 0.1 121.77364285714286C0.1 121.77364285714286 0.1 121.77364285714286 0.1 121.77364285714286 "
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskzekqw33c)"
                                                    pathTo="M 0.1 121.77364285714286L 204.57968749999998 121.77364285714286Q 212.57968749999998 121.77364285714286 212.57968749999998 129.77364285714287L 212.57968749999998 129.31921428571428Q 212.57968749999998 137.31921428571428 204.57968749999998 137.31921428571428L 204.57968749999998 137.31921428571428L 0.1 137.31921428571428L 0.1 137.31921428571428Q 0.1 137.31921428571428 0.1 137.31921428571428L 0.1 121.77364285714286Q 0.1 121.77364285714286 0.1 121.77364285714286z"
                                                    pathFrom="M 0.1 121.77364285714286L 0.1 121.77364285714286L 0.1 137.31921428571428L 0.1 137.31921428571428L 0.1 137.31921428571428L 0.1 137.31921428571428L 0.1 137.31921428571428L 0.1 121.77364285714286"
                                                    cy="173.5922142857143" cx="212.57968749999998" j="2" val="480"
                                                    barHeight="15.54557142857143" barWidth="212.47968749999998"></path>
                                                <path id="SvgjsPath1536"
                                                    d="M0.1 173.5922142857143L257.699609375 173.5922142857143C263.0329427083334 173.5922142857143 265.699609375 176.25888095238096 265.699609375 181.5922142857143L265.699609375 181.13778571428574C265.699609375 186.47111904761908 263.0329427083334 189.13778571428574 257.699609375 189.13778571428574L257.699609375 189.13778571428574L0.1 189.13778571428574L0.1 189.13778571428574C0.1 189.13778571428574 0.1 189.13778571428574 0.1 189.13778571428574C0.1 189.13778571428574 0.1 173.5922142857143 0.1 173.5922142857143C0.1 173.5922142857143 0.1 173.5922142857143 0.1 173.5922142857143C0.1 173.5922142857143 0.1 173.5922142857143 0.1 173.5922142857143 "
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskzekqw33c)"
                                                    pathTo="M 0.1 173.5922142857143L 257.699609375 173.5922142857143Q 265.699609375 173.5922142857143 265.699609375 181.5922142857143L 265.699609375 181.13778571428574Q 265.699609375 189.13778571428574 257.699609375 189.13778571428574L 257.699609375 189.13778571428574L 0.1 189.13778571428574L 0.1 189.13778571428574Q 0.1 189.13778571428574 0.1 189.13778571428574L 0.1 173.5922142857143Q 0.1 173.5922142857143 0.1 173.5922142857143z"
                                                    pathFrom="M 0.1 173.5922142857143L 0.1 173.5922142857143L 0.1 189.13778571428574L 0.1 189.13778571428574L 0.1 189.13778571428574L 0.1 189.13778571428574L 0.1 189.13778571428574L 0.1 173.5922142857143"
                                                    cy="225.41078571428574" cx="265.699609375" j="3" val="600"
                                                    barHeight="15.54557142857143" barWidth="265.599609375"></path>
                                                <path id="SvgjsPath1538"
                                                    d="M0.1 225.41078571428574L85.05986328124999 225.41078571428574C90.39319661458333 225.41078571428574 93.05986328124999 228.07745238095242 93.05986328124999 233.41078571428574L93.05986328124999 232.95635714285717C93.05986328124999 238.28969047619051 90.39319661458333 240.95635714285717 85.05986328124999 240.95635714285717L85.05986328124999 240.95635714285717L0.1 240.95635714285717L0.1 240.95635714285717C0.1 240.95635714285717 0.1 240.95635714285717 0.1 240.95635714285717C0.1 240.95635714285717 0.1 225.41078571428574 0.1 225.41078571428574C0.1 225.41078571428574 0.1 225.41078571428574 0.1 225.41078571428574C0.1 225.41078571428574 0.1 225.41078571428574 0.1 225.41078571428574 "
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskzekqw33c)"
                                                    pathTo="M 0.1 225.41078571428574L 85.05986328124999 225.41078571428574Q 93.05986328124999 225.41078571428574 93.05986328124999 233.41078571428574L 93.05986328124999 232.95635714285717Q 93.05986328124999 240.95635714285717 85.05986328124999 240.95635714285717L 85.05986328124999 240.95635714285717L 0.1 240.95635714285717L 0.1 240.95635714285717Q 0.1 240.95635714285717 0.1 240.95635714285717L 0.1 225.41078571428574Q 0.1 225.41078571428574 0.1 225.41078571428574z"
                                                    pathFrom="M 0.1 225.41078571428574L 0.1 225.41078571428574L 0.1 240.95635714285717L 0.1 240.95635714285717L 0.1 240.95635714285717L 0.1 240.95635714285717L 0.1 240.95635714285717L 0.1 225.41078571428574"
                                                    cy="277.22935714285717" cx="93.05986328124999" j="4" val="210"
                                                    barHeight="15.54557142857143" barWidth="92.95986328125"></path>
                                                <path id="SvgjsPath1540"
                                                    d="M0.1 277.22935714285717L235.56630859374997 277.22935714285717C240.89964192708328 277.22935714285717 243.56630859374997 279.89602380952385 243.56630859374997 285.22935714285717L243.56630859374997 284.7749285714286C243.56630859374997 290.1082619047619 240.89964192708328 292.7749285714286 235.56630859374997 292.7749285714286L235.56630859374997 292.7749285714286L0.1 292.7749285714286L0.1 292.7749285714286C0.1 292.7749285714286 0.1 292.7749285714286 0.1 292.7749285714286C0.1 292.7749285714286 0.1 277.22935714285717 0.1 277.22935714285717C0.1 277.22935714285717 0.1 277.22935714285717 0.1 277.22935714285717C0.1 277.22935714285717 0.1 277.22935714285717 0.1 277.22935714285717 "
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskzekqw33c)"
                                                    pathTo="M 0.1 277.22935714285717L 235.56630859374997 277.22935714285717Q 243.56630859374997 277.22935714285717 243.56630859374997 285.22935714285717L 243.56630859374997 284.7749285714286Q 243.56630859374997 292.7749285714286 235.56630859374997 292.7749285714286L 235.56630859374997 292.7749285714286L 0.1 292.7749285714286L 0.1 292.7749285714286Q 0.1 292.7749285714286 0.1 292.7749285714286L 0.1 277.22935714285717Q 0.1 277.22935714285717 0.1 277.22935714285717z"
                                                    pathFrom="M 0.1 277.22935714285717L 0.1 277.22935714285717L 0.1 292.7749285714286L 0.1 292.7749285714286L 0.1 292.7749285714286L 0.1 292.7749285714286L 0.1 292.7749285714286L 0.1 277.22935714285717"
                                                    cy="329.0479285714286" cx="243.56630859374997" j="5" val="550"
                                                    barHeight="15.54557142857143" barWidth="243.46630859374997"></path>
                                                <path id="SvgjsPath1542"
                                                    d="M0.1 329.0479285714286L58.499902343749994 329.0479285714286C63.83323567708332 329.0479285714286 66.49990234375 331.7145952380953 66.49990234375 337.0479285714286L66.49990234375 336.5935C66.49990234375 341.9268333333333 63.83323567708332 344.5935 58.499902343749994 344.5935L58.499902343749994 344.5935L0.1 344.5935L0.1 344.5935C0.1 344.5935 0.1 344.5935 0.1 344.5935C0.1 344.5935 0.1 329.0479285714286 0.1 329.0479285714286C0.1 329.0479285714286 0.1 329.0479285714286 0.1 329.0479285714286C0.1 329.0479285714286 0.1 329.0479285714286 0.1 329.0479285714286 "
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskzekqw33c)"
                                                    pathTo="M 0.1 329.0479285714286L 58.499902343749994 329.0479285714286Q 66.49990234375 329.0479285714286 66.49990234375 337.0479285714286L 66.49990234375 336.5935Q 66.49990234375 344.5935 58.499902343749994 344.5935L 58.499902343749994 344.5935L 0.1 344.5935L 0.1 344.5935Q 0.1 344.5935 0.1 344.5935L 0.1 329.0479285714286Q 0.1 329.0479285714286 0.1 329.0479285714286z"
                                                    pathFrom="M 0.1 329.0479285714286L 0.1 329.0479285714286L 0.1 344.5935L 0.1 344.5935L 0.1 344.5935L 0.1 344.5935L 0.1 344.5935L 0.1 329.0479285714286"
                                                    cy="380.86650000000003" cx="66.49990234375" j="6" val="150"
                                                    barHeight="15.54557142857143" barWidth="66.39990234375"></path>
                                                <g id="SvgjsG1528" class="apexcharts-bar-goals-markers"
                                                    style="pointer-events: none">
                                                    <g id="SvgjsG1529" className="apexcharts-bar-goals-groups"></g>
                                                    <g id="SvgjsG1531" className="apexcharts-bar-goals-groups"></g>
                                                    <g id="SvgjsG1533" className="apexcharts-bar-goals-groups"></g>
                                                    <g id="SvgjsG1535" className="apexcharts-bar-goals-groups"></g>
                                                    <g id="SvgjsG1537" className="apexcharts-bar-goals-groups"></g>
                                                    <g id="SvgjsG1539" className="apexcharts-bar-goals-groups"></g>
                                                    <g id="SvgjsG1541" className="apexcharts-bar-goals-groups"></g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1527" class="apexcharts-datalabels" data:realIndex="0"></g>
                                        </g>
                                        <line id="SvgjsLine1589" x1="0" y1="0" x2="354.1328125"
                                            y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1590" x1="0" y1="0" x2="354.1328125"
                                            y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG1591" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG1592" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG1593" class="apexcharts-point-annotations"></g>
                                    </g>
                                    <g id="SvgjsG1515" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-legend" style="max-height: 200px;"></div>
                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                    <div class="apexcharts-tooltip-title"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                            class="apexcharts-tooltip-marker"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                    <div class="apexcharts-yaxistooltip-text"></div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 504px; height: 440px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Bar Chart -->

            <!-- Candlestick Chart -->
            <div class="col-md-6 col-12 mb-4">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div>
                            <h5 class="card-title mb-1">Stocks Prices</h5>
                            <p class="text-muted mb-0">$50,863.98</p>
                        </div>
                        <div class="dropdown">
                            <button type="button" class="btn dropdown-toggle px-0" data-bs-toggle="dropdown"
                                aria-expanded="false"><i class="bx bx-calendar"></i></button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Today</a>
                                </li>
                                <li><a href="javascript:void(0);"
                                        class="dropdown-item d-flex align-items-center">Yesterday</a></li>
                                <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 7
                                        Days</a></li>
                                <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 30
                                        Days</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Current
                                        Month</a></li>
                                <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last
                                        Month</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body" style="position: relative;">
                        <div id="candleStickChart" style="min-height: 410px;">
                            <div id="apexchartsbsofwmgui"
                                class="apexcharts-canvas apexchartsbsofwmgui apexcharts-theme-light"
                                style="width: 455px; height: 410px;"><svg id="SvgjsSvg1594" width="455"
                                    height="410" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg apexcharts-zoomable hovering-zoom" xmlns:data="ApexChartsNS"
                                    transform="translate(0, 0)" style="background: transparent;">
                                    <g id="SvgjsG1596" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(65.83229166666666, 10)">
                                        <defs id="SvgjsDefs1595">
                                            <clipPath id="gridRectMaskbsofwmgui">
                                                <rect id="SvgjsRect1611" width="401.296875" height="368"
                                                    x="-15.629166666666666" y="-0.5" rx="0" ry="0"
                                                    opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                    fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMaskbsofwmgui"></clipPath>
                                            <clipPath id="nonForecastMaskbsofwmgui"></clipPath>
                                            <clipPath id="gridRectMarkerMaskbsofwmgui">
                                                <rect id="SvgjsRect1612" width="374.0385416666667" height="371" x="-2"
                                                    y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                        </defs>
                                        <line id="SvgjsLine1602" x1="340.57403846153846" y1="0"
                                            x2="340.57403846153846" y2="367" stroke="#b6b6b6" stroke-dasharray="3"
                                            stroke-linecap="butt" class="apexcharts-xcrosshairs" x="340.57403846153846"
                                            y="0" width="1" height="367" fill="#b1b9c4" filter="none"
                                            fill-opacity="0.9" stroke-width="1"></line>
                                        <g id="SvgjsG1630" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG1631" class="apexcharts-xaxis-texts-g"
                                                transform="translate(0, -4)"><text id="SvgjsText1633"
                                                    font-family="Helvetica, Arial, sans-serif" x="28.464503205128207" y="396"
                                                    text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                                    font-weight="400" fill="#a1acb8"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1634">23:00</tspan>
                                                    <title>23:00</title>
                                                </text><text id="SvgjsText1636" font-family="Helvetica, Arial, sans-serif"
                                                    x="85.39350961538462" y="396" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1637">01:00</tspan>
                                                    <title>01:00</title>
                                                </text><text id="SvgjsText1639" font-family="Helvetica, Arial, sans-serif"
                                                    x="142.32251602564102" y="396" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1640">02:00</tspan>
                                                    <title>02:00</title>
                                                </text><text id="SvgjsText1642" font-family="Helvetica, Arial, sans-serif"
                                                    x="199.25152243589744" y="396" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1643">03:00</tspan>
                                                    <title>03:00</title>
                                                </text><text id="SvgjsText1645" font-family="Helvetica, Arial, sans-serif"
                                                    x="256.18052884615383" y="396" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1646">04:00</tspan>
                                                    <title>04:00</title>
                                                </text><text id="SvgjsText1648" font-family="Helvetica, Arial, sans-serif"
                                                    x="313.10953525641025" y="396" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1649">05:00</tspan>
                                                    <title>05:00</title>
                                                </text></g>
                                        </g>
                                        <g id="SvgjsG1664" class="apexcharts-grid">
                                            <g id="SvgjsG1665" class="apexcharts-gridlines-horizontal">
                                                <line id="SvgjsLine1673" x1="-13.129166666666666" y1="0"
                                                    x2="383.16770833333334" y2="0" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1674" x1="-13.129166666666666" y1="73.4"
                                                    x2="383.16770833333334" y2="73.4" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1675" x1="-13.129166666666666" y1="146.8"
                                                    x2="383.16770833333334" y2="146.8" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1676" x1="-13.129166666666666" y1="220.20000000000002"
                                                    x2="383.16770833333334" y2="220.20000000000002" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1677" x1="-13.129166666666666" y1="293.6"
                                                    x2="383.16770833333334" y2="293.6" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1678" x1="-13.129166666666666" y1="367"
                                                    x2="383.16770833333334" y2="367" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG1666" class="apexcharts-gridlines-vertical">
                                                <line id="SvgjsLine1667" x1="28.464503205128207" y1="0"
                                                    x2="28.464503205128207" y2="367" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1668" x1="85.39350961538462" y1="0"
                                                    x2="85.39350961538462" y2="367" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1669" x1="142.32251602564102" y1="0"
                                                    x2="142.32251602564102" y2="367" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1670" x1="199.25152243589744" y1="0"
                                                    x2="199.25152243589744" y2="367" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1671" x1="256.18052884615383" y1="0"
                                                    x2="256.18052884615383" y2="367" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1672" x1="313.10953525641025" y1="0"
                                                    x2="313.10953525641025" y2="367" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                            </g>
                                            <line id="SvgjsLine1680" x1="0" y1="367"
                                                x2="370.0385416666667" y2="367" stroke="transparent"
                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                            <line id="SvgjsLine1679" x1="0" y1="1" x2="0"
                                                y2="367" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                        </g>
                                        <g id="SvgjsG1613" class="apexcharts-candlestick-series apexcharts-plot-series">
                                            <g id="SvgjsG1614" class="apexcharts-series" seriesName="seriesx1"
                                                rel="1" data:realIndex="0">
                                                <path id="SvgjsPath1616"
                                                    d="M-5.692900641025641 256.9C-5.692900641025641 256.9 0 256.9 0 256.9C0 256.9 0 242.22 0 242.22C0 242.22 0 256.9 0 256.9C0 256.9 5.692900641025641 256.9 5.692900641025641 256.9C5.692900641025641 256.9 5.692900641025641 293.6 5.692900641025641 293.6C5.692900641025641 293.6 0 293.6 0 293.6C0 293.6 0 330.3 0 330.3C0 330.3 0 293.6 0 293.6C0 293.6 -5.692900641025641 293.6 -5.692900641025641 293.6C-5.692900641025641 293.6 -5.692900641025641 256.4 -5.692900641025641 256.4M0 286.25999450683594 "
                                                    fill="rgba(255,62,29,1)" fill-opacity="1" stroke="#ff3e1d"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                    stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                    index="0" clip-path="url(#gridRectMaskbsofwmgui)"
                                                    pathTo="M -5.692900641025641 256.9L 0 256.9L 0 242.22L 0 256.9L 5.692900641025641 256.9L 5.692900641025641 293.6L 0 293.6L 0 330.3L 0 293.6L -5.692900641025641 293.6L -5.692900641025641 256.4"
                                                    pathFrom="M 0 293.6M -5.692900641025641 293.6" cy="256.9"
                                                    cx="5.192900641025641" j="0" val="100"
                                                    barWidth="11.385801282051283"></path>
                                                <path id="SvgjsPath1617"
                                                    d="M22.771602564102565 124.77999999999997C22.771602564102565 124.77999999999997 28.464503205128207 124.77999999999997 28.464503205128207 124.77999999999997C28.464503205128207 124.77999999999997 28.464503205128207 73.39999999999998 28.464503205128207 73.39999999999998C28.464503205128207 73.39999999999998 28.464503205128207 124.77999999999997 28.464503205128207 124.77999999999997C28.464503205128207 124.77999999999997 34.15740384615385 124.77999999999997 34.15740384615385 124.77999999999997C34.15740384615385 124.77999999999997 34.15740384615385 220.2 34.15740384615385 220.2C34.15740384615385 220.2 28.464503205128207 220.2 28.464503205128207 220.2C28.464503205128207 220.2 28.464503205128207 242.22 28.464503205128207 242.22C28.464503205128207 242.22 28.464503205128207 220.2 28.464503205128207 220.2C28.464503205128207 220.2 22.771602564102565 220.2 22.771602564102565 220.2C22.771602564102565 220.2 22.771602564102565 124.27999999999997 22.771602564102565 124.27999999999997M28.464502334594727 157.81000518798828 "
                                                    fill="rgba(113,221,55,1)" fill-opacity="1" stroke="#71dd37"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                    stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                    index="0" clip-path="url(#gridRectMaskbsofwmgui)"
                                                    pathTo="M 22.771602564102565 124.77999999999997L 28.464503205128207 124.77999999999997L 28.464503205128207 73.39999999999998L 28.464503205128207 124.77999999999997L 34.15740384615385 124.77999999999997L 34.15740384615385 220.2L 28.464503205128207 220.2L 28.464503205128207 242.22L 28.464503205128207 220.2L 22.771602564102565 220.2L 22.771602564102565 124.27999999999997"
                                                    pathFrom="M 28.464503205128207 220.2M 22.771602564102565 220.2"
                                                    cy="124.77999999999997" cx="33.65740384615385" j="1" val="330"
                                                    barWidth="11.385801282051283"></path>
                                                <path id="SvgjsPath1618"
                                                    d="M51.236105769230775 124.77999999999997C51.236105769230775 124.77999999999997 56.92900641025642 124.77999999999997 56.92900641025642 124.77999999999997C56.92900641025642 124.77999999999997 56.92900641025642 117.44 56.92900641025642 117.44C56.92900641025642 117.44 56.92900641025642 124.77999999999997 56.92900641025642 124.77999999999997C56.92900641025642 124.77999999999997 62.62190705128206 124.77999999999997 62.62190705128206 124.77999999999997C62.62190705128206 124.77999999999997 62.62190705128206 161.48 62.62190705128206 161.48C62.62190705128206 161.48 56.92900641025642 161.48 56.92900641025642 161.48C56.92900641025642 161.48 56.92900641025642 183.5 56.92900641025642 183.5C56.92900641025642 183.5 56.92900641025642 161.48 56.92900641025642 161.48C56.92900641025642 161.48 51.236105769230775 161.48 51.236105769230775 161.48C51.236105769230775 161.48 51.236105769230775 124.27999999999997 51.236105769230775 124.27999999999997M56.929006576538086 150.47000122070312 "
                                                    fill="rgba(255,62,29,1)" fill-opacity="1" stroke="#ff3e1d"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                    stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                    index="0" clip-path="url(#gridRectMaskbsofwmgui)"
                                                    pathTo="M 51.236105769230775 124.77999999999997L 56.92900641025642 124.77999999999997L 56.92900641025642 117.44L 56.92900641025642 124.77999999999997L 62.62190705128206 124.77999999999997L 62.62190705128206 161.48L 56.92900641025642 161.48L 56.92900641025642 183.5L 56.92900641025642 161.48L 51.236105769230775 161.48L 51.236105769230775 124.27999999999997"
                                                    pathFrom="M 56.92900641025642 161.48M 51.236105769230775 161.48"
                                                    cy="124.77999999999997" cx="62.12190705128206" j="2" val="280"
                                                    barWidth="11.385801282051283"></path>
                                                <path id="SvgjsPath1619"
                                                    d="M79.70060897435897 132.11999999999998C79.70060897435897 132.11999999999998 85.39350961538462 132.11999999999998 85.39350961538462 132.11999999999998C85.39350961538462 132.11999999999998 85.39350961538462 124.77999999999997 85.39350961538462 124.77999999999997C85.39350961538462 124.77999999999997 85.39350961538462 132.11999999999998 85.39350961538462 132.11999999999998C85.39350961538462 132.11999999999998 91.08641025641026 132.11999999999998 91.08641025641026 132.11999999999998C91.08641025641026 132.11999999999998 91.08641025641026 146.79999999999998 91.08641025641026 146.79999999999998C91.08641025641026 146.79999999999998 85.39350961538462 146.79999999999998 85.39350961538462 146.79999999999998C85.39350961538462 146.79999999999998 85.39350961538462 220.2 85.39350961538462 220.2C85.39350961538462 220.2 85.39350961538462 146.79999999999998 85.39350961538462 146.79999999999998C85.39350961538462 146.79999999999998 79.70060897435897 146.79999999999998 79.70060897435897 146.79999999999998C79.70060897435897 146.79999999999998 79.70060897435897 131.61999999999998 79.70060897435897 131.61999999999998M85.39350891113281 172.48999786376953 "
                                                    fill="rgba(113,221,55,1)" fill-opacity="1" stroke="#71dd37"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                    stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                    index="0" clip-path="url(#gridRectMaskbsofwmgui)"
                                                    pathTo="M 79.70060897435897 132.11999999999998L 85.39350961538462 132.11999999999998L 85.39350961538462 124.77999999999997L 85.39350961538462 132.11999999999998L 91.08641025641026 132.11999999999998L 91.08641025641026 146.79999999999998L 85.39350961538462 146.79999999999998L 85.39350961538462 220.2L 85.39350961538462 146.79999999999998L 79.70060897435897 146.79999999999998L 79.70060897435897 131.61999999999998"
                                                    pathFrom="M 85.39350961538462 146.79999999999998M 79.70060897435897 146.79999999999998"
                                                    cy="132.11999999999998" cx="90.58641025641026" j="3" val="320"
                                                    barWidth="11.385801282051283"></path>
                                                <path id="SvgjsPath1620"
                                                    d="M108.16511217948718 110.09999999999997C108.16511217948718 110.09999999999997 113.85801282051283 110.09999999999997 113.85801282051283 110.09999999999997C113.85801282051283 110.09999999999997 113.85801282051283 36.69999999999999 113.85801282051283 36.69999999999999C113.85801282051283 36.69999999999999 113.85801282051283 110.09999999999997 113.85801282051283 110.09999999999997C113.85801282051283 110.09999999999997 119.55091346153847 110.09999999999997 119.55091346153847 110.09999999999997C119.55091346153847 110.09999999999997 119.55091346153847 132.11999999999998 119.55091346153847 132.11999999999998C119.55091346153847 132.11999999999998 113.85801282051283 132.11999999999998 113.85801282051283 132.11999999999998C113.85801282051283 132.11999999999998 113.85801282051283 161.48 113.85801282051283 161.48C113.85801282051283 161.48 113.85801282051283 132.11999999999998 113.85801282051283 132.11999999999998C113.85801282051283 132.11999999999998 108.16511217948718 132.11999999999998 108.16511217948718 132.11999999999998C108.16511217948718 132.11999999999998 108.16511217948718 109.59999999999997 108.16511217948718 109.59999999999997M113.85801315307617 99.09000015258789 "
                                                    fill="rgba(113,221,55,1)" fill-opacity="1" stroke="#71dd37"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                    stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                    index="0" clip-path="url(#gridRectMaskbsofwmgui)"
                                                    pathTo="M 108.16511217948718 110.09999999999997L 113.85801282051283 110.09999999999997L 113.85801282051283 36.69999999999999L 113.85801282051283 110.09999999999997L 119.55091346153847 110.09999999999997L 119.55091346153847 132.11999999999998L 113.85801282051283 132.11999999999998L 113.85801282051283 161.48L 113.85801282051283 132.11999999999998L 108.16511217948718 132.11999999999998L 108.16511217948718 109.59999999999997"
                                                    pathFrom="M 113.85801282051283 132.11999999999998M 108.16511217948718 132.11999999999998"
                                                    cy="110.09999999999997" cx="119.05091346153847" j="4" val="350"
                                                    barWidth="11.385801282051283"></path>
                                                <path id="SvgjsPath1621"
                                                    d="M136.6296153846154 146.79999999999998C136.6296153846154 146.79999999999998 142.32251602564102 146.79999999999998 142.32251602564102 146.79999999999998C142.32251602564102 146.79999999999998 142.32251602564102 110.09999999999997 142.32251602564102 110.09999999999997C142.32251602564102 110.09999999999997 142.32251602564102 146.79999999999998 142.32251602564102 146.79999999999998C142.32251602564102 146.79999999999998 148.01541666666668 146.79999999999998 148.01541666666668 146.79999999999998C148.01541666666668 146.79999999999998 148.01541666666668 183.5 148.01541666666668 183.5C148.01541666666668 183.5 142.32251602564102 183.5 142.32251602564102 183.5C142.32251602564102 183.5 142.32251602564102 308.28 142.32251602564102 308.28C142.32251602564102 308.28 142.32251602564102 183.5 142.32251602564102 183.5C142.32251602564102 183.5 136.6296153846154 183.5 136.6296153846154 183.5C136.6296153846154 183.5 136.6296153846154 146.29999999999998 136.6296153846154 146.29999999999998M142.322509765625 209.18999481201172 "
                                                    fill="rgba(255,62,29,1)" fill-opacity="1" stroke="#ff3e1d"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                    stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                    index="0" clip-path="url(#gridRectMaskbsofwmgui)"
                                                    pathTo="M 136.6296153846154 146.79999999999998L 142.32251602564102 146.79999999999998L 142.32251602564102 110.09999999999997L 142.32251602564102 146.79999999999998L 148.01541666666668 146.79999999999998L 148.01541666666668 183.5L 142.32251602564102 183.5L 142.32251602564102 308.28L 142.32251602564102 183.5L 136.6296153846154 183.5L 136.6296153846154 146.29999999999998"
                                                    pathFrom="M 142.32251602564102 183.5M 136.6296153846154 183.5"
                                                    cy="146.79999999999998" cx="147.51541666666668" j="5" val="250"
                                                    barWidth="11.385801282051283"></path>
                                                <path id="SvgjsPath1622"
                                                    d="M165.0941185897436 146.79999999999998C165.0941185897436 146.79999999999998 170.78701923076923 146.79999999999998 170.78701923076923 146.79999999999998C170.78701923076923 146.79999999999998 170.78701923076923 124.77999999999997 170.78701923076923 124.77999999999997C170.78701923076923 124.77999999999997 170.78701923076923 146.79999999999998 170.78701923076923 146.79999999999998C170.78701923076923 146.79999999999998 176.4799198717949 146.79999999999998 176.4799198717949 146.79999999999998C176.4799198717949 146.79999999999998 176.4799198717949 220.2 176.4799198717949 220.2C176.4799198717949 220.2 170.78701923076923 220.2 170.78701923076923 220.2C170.78701923076923 220.2 170.78701923076923 242.22 170.78701923076923 242.22C170.78701923076923 242.22 170.78701923076923 220.2 170.78701923076923 220.2C170.78701923076923 220.2 165.0941185897436 220.2 165.0941185897436 220.2C165.0941185897436 220.2 165.0941185897436 146.29999999999998 165.0941185897436 146.29999999999998M170.78701782226562 183.5 "
                                                    fill="rgba(113,221,55,1)" fill-opacity="1" stroke="#71dd37"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                    stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                    index="0" clip-path="url(#gridRectMaskbsofwmgui)"
                                                    pathTo="M 165.0941185897436 146.79999999999998L 170.78701923076923 146.79999999999998L 170.78701923076923 124.77999999999997L 170.78701923076923 146.79999999999998L 176.4799198717949 146.79999999999998L 176.4799198717949 220.2L 170.78701923076923 220.2L 170.78701923076923 242.22L 170.78701923076923 220.2L 165.0941185897436 220.2L 165.0941185897436 146.29999999999998"
                                                    pathFrom="M 170.78701923076923 220.2M 165.0941185897436 220.2"
                                                    cy="146.79999999999998" cx="175.9799198717949" j="6" val="300"
                                                    barWidth="11.385801282051283"></path>
                                                <path id="SvgjsPath1623"
                                                    d="M193.5586217948718 220.2C193.5586217948718 220.2 199.25152243589744 220.2 199.25152243589744 220.2C199.25152243589744 220.2 199.25152243589744 205.51999999999998 199.25152243589744 205.51999999999998C199.25152243589744 205.51999999999998 199.25152243589744 220.2 199.25152243589744 220.2C199.25152243589744 220.2 204.9444230769231 220.2 204.9444230769231 220.2C204.9444230769231 220.2 204.9444230769231 271.58 204.9444230769231 271.58C204.9444230769231 271.58 199.25152243589744 271.58 199.25152243589744 271.58C199.25152243589744 271.58 199.25152243589744 315.62 199.25152243589744 315.62C199.25152243589744 315.62 199.25152243589744 271.58 199.25152243589744 271.58C199.25152243589744 271.58 193.5586217948718 271.58 193.5586217948718 271.58C193.5586217948718 271.58 193.5586217948718 219.7 193.5586217948718 219.7M199.25152587890625 260.5699996948242 "
                                                    fill="rgba(255,62,29,1)" fill-opacity="1" stroke="#ff3e1d"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                    stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                    index="0" clip-path="url(#gridRectMaskbsofwmgui)"
                                                    pathTo="M 193.5586217948718 220.2L 199.25152243589744 220.2L 199.25152243589744 205.51999999999998L 199.25152243589744 220.2L 204.9444230769231 220.2L 204.9444230769231 271.58L 199.25152243589744 271.58L 199.25152243589744 315.62L 199.25152243589744 271.58L 193.5586217948718 271.58L 193.5586217948718 219.7"
                                                    pathFrom="M 199.25152243589744 271.58M 193.5586217948718 271.58"
                                                    cy="220.2" cx="204.4444230769231" j="7" val="130"
                                                    barWidth="11.385801282051283"></path>
                                                <path id="SvgjsPath1624"
                                                    d="M222.02312500000002 183.5C222.02312500000002 183.5 227.71602564102565 183.5 227.71602564102565 183.5C227.71602564102565 183.5 227.71602564102565 168.82 227.71602564102565 168.82C227.71602564102565 168.82 227.71602564102565 183.5 227.71602564102565 183.5C227.71602564102565 183.5 233.4089262820513 183.5 233.4089262820513 183.5C233.4089262820513 183.5 233.4089262820513 205.51999999999998 233.4089262820513 205.51999999999998C233.4089262820513 205.51999999999998 227.71602564102565 205.51999999999998 227.71602564102565 205.51999999999998C227.71602564102565 205.51999999999998 227.71602564102565 234.88 227.71602564102565 234.88C227.71602564102565 234.88 227.71602564102565 205.51999999999998 227.71602564102565 205.51999999999998C227.71602564102565 205.51999999999998 222.02312500000002 205.51999999999998 222.02312500000002 205.51999999999998C222.02312500000002 205.51999999999998 222.02312500000002 183 222.02312500000002 183M227.71602630615234 201.85000610351562 "
                                                    fill="rgba(113,221,55,1)" fill-opacity="1" stroke="#71dd37"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                    stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                    index="0" clip-path="url(#gridRectMaskbsofwmgui)"
                                                    pathTo="M 222.02312500000002 183.5L 227.71602564102565 183.5L 227.71602564102565 168.82L 227.71602564102565 183.5L 233.4089262820513 183.5L 233.4089262820513 205.51999999999998L 227.71602564102565 205.51999999999998L 227.71602564102565 234.88L 227.71602564102565 205.51999999999998L 222.02312500000002 205.51999999999998L 222.02312500000002 183"
                                                    pathFrom="M 227.71602564102565 205.51999999999998M 222.02312500000002 205.51999999999998"
                                                    cy="183.5" cx="232.9089262820513" j="8" val="250"
                                                    barWidth="11.385801282051283"></path>
                                                <path id="SvgjsPath1625"
                                                    d="M250.48762820512826 220.2C250.48762820512826 220.2 256.1805288461539 220.2 256.1805288461539 220.2C256.1805288461539 220.2 256.1805288461539 183.5 256.1805288461539 183.5C256.1805288461539 183.5 256.1805288461539 220.2 256.1805288461539 220.2C256.1805288461539 220.2 261.8734294871795 220.2 261.8734294871795 220.2C261.8734294871795 220.2 261.8734294871795 293.6 261.8734294871795 293.6C261.8734294871795 293.6 256.1805288461539 293.6 256.1805288461539 293.6C256.1805288461539 293.6 256.1805288461539 308.28 256.1805288461539 308.28C256.1805288461539 308.28 256.1805288461539 293.6 256.1805288461539 293.6C256.1805288461539 293.6 250.48762820512826 293.6 250.48762820512826 293.6C250.48762820512826 293.6 250.48762820512826 219.7 250.48762820512826 219.7M256.18053436279297 245.88999938964844 "
                                                    fill="rgba(255,62,29,1)" fill-opacity="1" stroke="#ff3e1d"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                    stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                    index="0" clip-path="url(#gridRectMaskbsofwmgui)"
                                                    pathTo="M 250.48762820512826 220.2L 256.1805288461539 220.2L 256.1805288461539 183.5L 256.1805288461539 220.2L 261.8734294871795 220.2L 261.8734294871795 293.6L 256.1805288461539 293.6L 256.1805288461539 308.28L 256.1805288461539 293.6L 250.48762820512826 293.6L 250.48762820512826 219.7"
                                                    pathFrom="M 256.1805288461539 293.6M 250.48762820512826 293.6"
                                                    cy="220.2" cx="261.3734294871795" j="9" val="100"
                                                    barWidth="11.385801282051283"></path>
                                                <path id="SvgjsPath1626"
                                                    d="M278.9521314102564 256.9C278.9521314102564 256.9 284.64503205128204 256.9 284.64503205128204 256.9C284.64503205128204 256.9 284.64503205128204 242.22 284.64503205128204 242.22C284.64503205128204 242.22 284.64503205128204 256.9 284.64503205128204 256.9C284.64503205128204 256.9 290.3379326923077 256.9 290.3379326923077 256.9C290.3379326923077 256.9 290.3379326923077 278.91999999999996 290.3379326923077 278.91999999999996C290.3379326923077 278.91999999999996 284.64503205128204 278.91999999999996 284.64503205128204 278.91999999999996C284.64503205128204 278.91999999999996 284.64503205128204 330.3 284.64503205128204 330.3C284.64503205128204 330.3 284.64503205128204 278.91999999999996 284.64503205128204 278.91999999999996C284.64503205128204 278.91999999999996 278.9521314102564 278.91999999999996 278.9521314102564 278.91999999999996C278.9521314102564 278.91999999999996 278.9521314102564 256.4 278.9521314102564 256.4M284.64501953125 286.25999450683594 "
                                                    fill="rgba(255,62,29,1)" fill-opacity="1" stroke="#ff3e1d"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                    stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                    index="0" clip-path="url(#gridRectMaskbsofwmgui)"
                                                    pathTo="M 278.9521314102564 256.9L 284.64503205128204 256.9L 284.64503205128204 242.22L 284.64503205128204 256.9L 290.3379326923077 256.9L 290.3379326923077 278.91999999999996L 284.64503205128204 278.91999999999996L 284.64503205128204 330.3L 284.64503205128204 278.91999999999996L 278.9521314102564 278.91999999999996L 278.9521314102564 256.4"
                                                    pathFrom="M 284.64503205128204 278.91999999999996M 278.9521314102564 278.91999999999996"
                                                    cy="256.9" cx="289.8379326923077" j="10" val="120"
                                                    barWidth="11.385801282051283"></path>
                                                <path id="SvgjsPath1627"
                                                    d="M307.4166346153846 58.71999999999997C307.4166346153846 58.71999999999997 313.10953525641025 58.71999999999997 313.10953525641025 58.71999999999997C313.10953525641025 58.71999999999997 313.10953525641025 36.69999999999999 313.10953525641025 36.69999999999999C313.10953525641025 36.69999999999999 313.10953525641025 58.71999999999997 313.10953525641025 58.71999999999997C313.10953525641025 58.71999999999997 318.8024358974359 58.71999999999997 318.8024358974359 58.71999999999997C318.8024358974359 58.71999999999997 318.8024358974359 286.26 318.8024358974359 286.26C318.8024358974359 286.26 313.10953525641025 286.26 313.10953525641025 286.26C313.10953525641025 286.26 313.10953525641025 359.66 313.10953525641025 359.66C313.10953525641025 359.66 313.10953525641025 286.26 313.10953525641025 286.26C313.10953525641025 286.26 307.4166346153846 286.26 307.4166346153846 286.26C307.4166346153846 286.26 307.4166346153846 58.21999999999997 307.4166346153846 58.21999999999997M313.1095275878906 198.17999649047852 "
                                                    fill="rgba(113,221,55,1)" fill-opacity="1" stroke="#71dd37"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                    stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                    index="0" clip-path="url(#gridRectMaskbsofwmgui)"
                                                    pathTo="M 307.4166346153846 58.71999999999997L 313.10953525641025 58.71999999999997L 313.10953525641025 36.69999999999999L 313.10953525641025 58.71999999999997L 318.8024358974359 58.71999999999997L 318.8024358974359 286.26L 313.10953525641025 286.26L 313.10953525641025 359.66L 313.10953525641025 286.26L 307.4166346153846 286.26L 307.4166346153846 58.21999999999997"
                                                    pathFrom="M 313.10953525641025 286.26M 307.4166346153846 286.26"
                                                    cy="58.71999999999997" cx="318.3024358974359" j="11" val="420"
                                                    barWidth="11.385801282051283"></path>
                                                <path id="SvgjsPath1628"
                                                    d="M335.88113782051283 73.39999999999998C335.88113782051283 73.39999999999998 341.57403846153846 73.39999999999998 341.57403846153846 73.39999999999998C341.57403846153846 73.39999999999998 341.57403846153846 14.67999999999995 341.57403846153846 14.67999999999995C341.57403846153846 14.67999999999995 341.57403846153846 73.39999999999998 341.57403846153846 73.39999999999998C341.57403846153846 73.39999999999998 347.2669391025641 73.39999999999998 347.2669391025641 73.39999999999998C347.2669391025641 73.39999999999998 347.2669391025641 132.11999999999998 347.2669391025641 132.11999999999998C347.2669391025641 132.11999999999998 341.57403846153846 132.11999999999998 341.57403846153846 132.11999999999998C341.57403846153846 132.11999999999998 341.57403846153846 146.79999999999998 341.57403846153846 146.79999999999998C341.57403846153846 146.79999999999998 341.57403846153846 132.11999999999998 341.57403846153846 132.11999999999998C341.57403846153846 132.11999999999998 335.88113782051283 132.11999999999998 335.88113782051283 132.11999999999998C335.88113782051283 132.11999999999998 335.88113782051283 72.89999999999998 335.88113782051283 72.89999999999998M341.57403564453125 80.73999786376953 "
                                                    fill="rgba(255,62,29,1)" fill-opacity="1" stroke="#ff3e1d"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                    stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                    index="0" clip-path="url(#gridRectMaskbsofwmgui)"
                                                    pathTo="M 335.88113782051283 73.39999999999998L 341.57403846153846 73.39999999999998L 341.57403846153846 14.67999999999995L 341.57403846153846 73.39999999999998L 347.2669391025641 73.39999999999998L 347.2669391025641 132.11999999999998L 341.57403846153846 132.11999999999998L 341.57403846153846 146.79999999999998L 341.57403846153846 132.11999999999998L 335.88113782051283 132.11999999999998L 335.88113782051283 72.89999999999998"
                                                    pathFrom="M 341.57403846153846 132.11999999999998M 335.88113782051283 132.11999999999998"
                                                    cy="73.39999999999998" cx="346.7669391025641" j="12" val="320"
                                                    barWidth="11.385801282051283"></path>
                                                <path id="SvgjsPath1629"
                                                    d="M364.34564102564104 36.69999999999999C364.34564102564104 36.69999999999999 370.0385416666667 36.69999999999999 370.0385416666667 36.69999999999999C370.0385416666667 36.69999999999999 370.0385416666667 14.67999999999995 370.0385416666667 14.67999999999995C370.0385416666667 14.67999999999995 370.0385416666667 36.69999999999999 370.0385416666667 36.69999999999999C370.0385416666667 36.69999999999999 375.7314423076923 36.69999999999999 375.7314423076923 36.69999999999999C375.7314423076923 36.69999999999999 375.7314423076923 88.07999999999998 375.7314423076923 88.07999999999998C375.7314423076923 88.07999999999998 370.0385416666667 88.07999999999998 370.0385416666667 88.07999999999998C370.0385416666667 88.07999999999998 370.0385416666667 110.09999999999997 370.0385416666667 110.09999999999997C370.0385416666667 110.09999999999997 370.0385416666667 88.07999999999998 370.0385416666667 88.07999999999998C370.0385416666667 88.07999999999998 364.34564102564104 88.07999999999998 364.34564102564104 88.07999999999998C364.34564102564104 88.07999999999998 364.34564102564104 36.19999999999999 364.34564102564104 36.19999999999999M370.0385437011719 62.38999938964844 "
                                                    fill="rgba(113,221,55,1)" fill-opacity="1" stroke="#71dd37"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                    stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                    index="0" clip-path="url(#gridRectMaskbsofwmgui)"
                                                    pathTo="M 364.34564102564104 36.69999999999999L 370.0385416666667 36.69999999999999L 370.0385416666667 14.67999999999995L 370.0385416666667 36.69999999999999L 375.7314423076923 36.69999999999999L 375.7314423076923 88.07999999999998L 370.0385416666667 88.07999999999998L 370.0385416666667 110.09999999999997L 370.0385416666667 88.07999999999998L 364.34564102564104 88.07999999999998L 364.34564102564104 36.19999999999999"
                                                    pathFrom="M 370.0385416666667 88.07999999999998M 364.34564102564104 88.07999999999998"
                                                    cy="36.69999999999999" cx="375.2314423076923" j="13" val="450"
                                                    barWidth="11.385801282051283"></path>
                                            </g>
                                            <g id="SvgjsG1615" class="apexcharts-datalabels" data:realIndex="0"></g>
                                        </g>
                                        <line id="SvgjsLine1681" x1="-13.129166666666666" y1="318.734375"
                                            x2="383.16770833333334" y2="318.734375" stroke="#b6b6b6"
                                            stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1682" x1="-13.129166666666666" y1="318.734375"
                                            x2="383.16770833333334" y2="318.734375" stroke-dasharray="0"
                                            stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden">
                                        </line>
                                        <g id="SvgjsG1683" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG1684" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG1685" class="apexcharts-point-annotations"></g>
                                        <rect id="SvgjsRect1686" width="0" height="0" x="0" y="0"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#fefefe"
                                            class="apexcharts-zoom-rect"></rect>
                                        <rect id="SvgjsRect1687" width="0" height="0" x="0" y="0"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#fefefe"
                                            class="apexcharts-selection-rect"></rect>
                                    </g>
                                    <rect id="SvgjsRect1601" width="0" height="0" x="0" y="0" rx="0"
                                        ry="0" opacity="1" stroke-width="0" stroke="none"
                                        stroke-dasharray="0" fill="#fefefe"></rect>
                                    <g id="SvgjsG1650" class="apexcharts-yaxis" rel="0"
                                        transform="translate(18.703125, 0)">
                                        <g id="SvgjsG1651" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1652"
                                                font-family="Helvetica, Arial, sans-serif" x="20" y="11.5" text-anchor="end"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1653">500</tspan>
                                                <title>500</title>
                                            </text><text id="SvgjsText1654" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="84.9" text-anchor="end" dominant-baseline="auto"
                                                font-size="13px" font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1655">400</tspan>
                                                <title>400</title>
                                            </text><text id="SvgjsText1656" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="158.3" text-anchor="end" dominant-baseline="auto"
                                                font-size="13px" font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1657">300</tspan>
                                                <title>300</title>
                                            </text><text id="SvgjsText1658" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="231.70000000000002" text-anchor="end" dominant-baseline="auto"
                                                font-size="13px" font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1659">200</tspan>
                                                <title>200</title>
                                            </text><text id="SvgjsText1660" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="305.1" text-anchor="end" dominant-baseline="auto"
                                                font-size="13px" font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1661">100</tspan>
                                                <title>100</title>
                                            </text><text id="SvgjsText1662" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="378.5" text-anchor="end" dominant-baseline="auto"
                                                font-size="13px" font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1663">0</tspan>
                                                <title>0</title>
                                            </text></g>
                                    </g>
                                    <g id="SvgjsG1597" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-legend" style="max-height: 205px;"></div>
                                <div class="apexcharts-tooltip apexcharts-theme-light"
                                    style="left: 308.781px; top: 261.422px;">
                                    <div class="apexcharts-tooltip-box apexcharts-tooltip-candlestick">
                                        <div>Open: <span class="value">400</span></div>
                                        <div>High: <span class="value">480</span></div>
                                        <div>Low: <span class="value">300</span></div>
                                        <div>Close: <span class="value">320</span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"
                                    style="left: 372.899px; top: 379px;">
                                    <div class="apexcharts-xaxistooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px; min-width: 45.0195px;">
                                        06 Oct</div>
                                </div>
                                <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"
                                    style="top: 313.062px; left: 16.7031px;">
                                    <div class="apexcharts-yaxistooltip-text">66</div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 504px; height: 435px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Candlestick Chart -->

            <!-- Heat map Chart -->
            <div class="col-md-6 col-12 mb-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">Daily Sales States</h5>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="heatChartDd" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="heatChartDd">
                                <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body" style="position: relative;">
                        <div id="heatMapChart" style="min-height: 350px;">
                            <div id="apexchartsj7wrfrkpf"
                                class="apexcharts-canvas apexchartsj7wrfrkpf apexcharts-theme-light"
                                style="width: 455px; height: 350px;"><svg id="SvgjsSvg1688" width="455"
                                    height="350" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent;">
                                    <foreignObject x="0" y="0" width="455" height="350">
                                        <div class="apexcharts-legend apexcharts-align-start apx-legend-position-top"
                                            xmlns="http://www.w3.org/1999/xhtml"
                                            style="right: 0px; position: absolute; left: 0px; top: 4px; max-height: 175px;">
                                            <div class="apexcharts-legend-series" rel="1" seriesname="0x10"
                                                data:collapsed="false" style="margin: 3px 10px;"><span
                                                    class="apexcharts-legend-marker" rel="1" data:collapsed="false"
                                                    style="background: rgb(144, 179, 243) !important; color: rgb(144, 179, 243); height: 12px; width: 12px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                    class="apexcharts-legend-text" rel="1" i="0"
                                                    data:default-text="0-10" data:collapsed="false"
                                                    style="color: rgb(105, 122, 141); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">0-10</span>
                                            </div>
                                            <div class="apexcharts-legend-series" rel="2" seriesname="10x20"
                                                data:collapsed="false" style="margin: 3px 10px;"><span
                                                    class="apexcharts-legend-marker" rel="2" data:collapsed="false"
                                                    style="background: rgb(126, 166, 241) !important; color: rgb(126, 166, 241); height: 12px; width: 12px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                    class="apexcharts-legend-text" rel="2" i="1"
                                                    data:default-text="10-20" data:collapsed="false"
                                                    style="color: rgb(105, 122, 141); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">10-20</span>
                                            </div>
                                            <div class="apexcharts-legend-series" rel="3" seriesname="20x30"
                                                data:collapsed="false" style="margin: 3px 10px;"><span
                                                    class="apexcharts-legend-marker" rel="3" data:collapsed="false"
                                                    style="background: rgb(107, 154, 239) !important; color: rgb(107, 154, 239); height: 12px; width: 12px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                    class="apexcharts-legend-text" rel="3" i="2"
                                                    data:default-text="20-30" data:collapsed="false"
                                                    style="color: rgb(105, 122, 141); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">20-30</span>
                                            </div>
                                            <div class="apexcharts-legend-series" rel="4" seriesname="30x40"
                                                data:collapsed="false" style="margin: 3px 10px;"><span
                                                    class="apexcharts-legend-marker" rel="4" data:collapsed="false"
                                                    style="background: rgb(89, 141, 238) !important; color: rgb(89, 141, 238); height: 12px; width: 12px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                    class="apexcharts-legend-text" rel="4" i="3"
                                                    data:default-text="30-40" data:collapsed="false"
                                                    style="color: rgb(105, 122, 141); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">30-40</span>
                                            </div>
                                            <div class="apexcharts-legend-series" rel="5" seriesname="40x50"
                                                data:collapsed="false" style="margin: 3px 10px;"><span
                                                    class="apexcharts-legend-marker" rel="5" data:collapsed="false"
                                                    style="background: rgb(70, 128, 236) !important; color: rgb(70, 128, 236); height: 12px; width: 12px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                    class="apexcharts-legend-text" rel="5" i="4"
                                                    data:default-text="40-50" data:collapsed="false"
                                                    style="color: rgb(105, 122, 141); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">40-50</span>
                                            </div>
                                            <div class="apexcharts-legend-series" rel="6" seriesname="50x60"
                                                data:collapsed="false" style="margin: 3px 10px;"><span
                                                    class="apexcharts-legend-marker" rel="6" data:collapsed="false"
                                                    style="background: rgb(52, 116, 234) !important; color: rgb(52, 116, 234); height: 12px; width: 12px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                    class="apexcharts-legend-text" rel="6" i="5"
                                                    data:default-text="50-60" data:collapsed="false"
                                                    style="color: rgb(105, 122, 141); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">50-60</span>
                                            </div>
                                        </div>
                                        <style type="text/css">
                                            .apexcharts-legend {
                                                display: flex;
                                                overflow: auto;
                                                padding: 0 10px;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom,
                                            .apexcharts-legend.apx-legend-position-top {
                                                flex-wrap: wrap
                                            }

                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                flex-direction: column;
                                                bottom: 0;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                justify-content: flex-start;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                justify-content: center;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                justify-content: flex-end;
                                            }

                                            .apexcharts-legend-series {
                                                cursor: pointer;
                                                line-height: normal;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                                            .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                                display: flex;
                                                align-items: center;
                                            }

                                            .apexcharts-legend-text {
                                                position: relative;
                                                font-size: 14px;
                                            }

                                            .apexcharts-legend-text *,
                                            .apexcharts-legend-marker * {
                                                pointer-events: none;
                                            }

                                            .apexcharts-legend-marker {
                                                position: relative;
                                                display: inline-block;
                                                cursor: pointer;
                                                margin-right: 3px;
                                                border-style: solid;
                                            }

                                            .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                            .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                                display: inline-block;
                                            }

                                            .apexcharts-legend-series.apexcharts-no-click {
                                                cursor: auto;
                                            }

                                            .apexcharts-legend .apexcharts-hidden-zero-series,
                                            .apexcharts-legend .apexcharts-hidden-null-series {
                                                display: none !important;
                                            }

                                            .apexcharts-inactive-legend {
                                                opacity: 0.45;
                                            }
                                        </style>
                                    </foreignObject>
                                    <g id="SvgjsG1690" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(51.376953125, 50)">
                                        <defs id="SvgjsDefs1689">
                                            <clipPath id="gridRectMaskj7wrfrkpf">
                                                <rect id="SvgjsRect1697" width="391.623046875" height="282" x="-4"
                                                    y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMaskj7wrfrkpf"></clipPath>
                                            <clipPath id="nonForecastMaskj7wrfrkpf"></clipPath>
                                            <clipPath id="gridRectMarkerMaskj7wrfrkpf">
                                                <rect id="SvgjsRect1698" width="387.623046875" height="282" x="-2"
                                                    y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                        </defs>
                                        <line id="SvgjsLine1696" x1="0" y1="0" x2="0"
                                            y2="278" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt"
                                            class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="278"
                                            fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                        <g id="SvgjsG1875" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG1876" class="apexcharts-xaxis-texts-g"
                                                transform="translate(0, 2.75)"></g>
                                        </g>
                                        <g id="SvgjsG1919" class="apexcharts-grid">
                                            <g id="SvgjsG1920" class="apexcharts-gridlines-horizontal"
                                                style="display: none;">
                                                <line id="SvgjsLine1922" x1="0" y1="0"
                                                    x2="383.623046875" y2="0" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1923" x1="0" y1="39.714285714285715"
                                                    x2="383.623046875" y2="39.714285714285715" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1924" x1="0" y1="79.42857142857143"
                                                    x2="383.623046875" y2="79.42857142857143" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1925" x1="0" y1="119.14285714285714"
                                                    x2="383.623046875" y2="119.14285714285714" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1926" x1="0" y1="158.85714285714286"
                                                    x2="383.623046875" y2="158.85714285714286" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1927" x1="0" y1="198.57142857142858"
                                                    x2="383.623046875" y2="198.57142857142858" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1928" x1="0" y1="238.2857142857143"
                                                    x2="383.623046875" y2="238.2857142857143" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1929" x1="0" y1="278"
                                                    x2="383.623046875" y2="278" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG1921" class="apexcharts-gridlines-vertical"
                                                style="display: none;"></g>
                                            <line id="SvgjsLine1931" x1="0" y1="278" x2="383.623046875"
                                                y2="278" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                            <line id="SvgjsLine1930" x1="0" y1="1" x2="0"
                                                y2="278" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                        </g>
                                        <g id="SvgjsG1699" class="apexcharts-heatmap"
                                            clip-path="url(#gridRectMaskj7wrfrkpf)">
                                            <g id="SvgjsG1700" class="apexcharts-series apexcharts-heatmap-series"
                                                seriesName="SAT" rel="7" data:realIndex="6">
                                                <rect id="SvgjsRect1701" width="15.984293619791666"
                                                    height="39.714285714285715" x="0" y="0" rx="2" ry="2"
                                                    opacity="1" stroke-width="4" stroke="#ffffff"
                                                    stroke-dasharray="0" fill="#6b9aef" cx="0" cy="0"
                                                    class="apexcharts-heatmap-rect" i="6" index="6" j="0"
                                                    val="21" color="#6b9aef"></rect>
                                                <rect id="SvgjsRect1702" width="15.984293619791666"
                                                    height="39.714285714285715" x="15.984293619791666" y="0" rx="2"
                                                    ry="2" opacity="1" stroke-width="4" stroke="#ffffff"
                                                    stroke-dasharray="0" fill="#6b9aef" cx="15.984293619791666"
                                                    cy="0" class="apexcharts-heatmap-rect" i="6" index="6"
                                                    j="1" val="23" color="#6b9aef"></rect>
                                                <rect id="SvgjsRect1703" width="15.984293619791666"
                                                    height="39.714285714285715" x="31.968587239583332" y="0" rx="2"
                                                    ry="2" opacity="1" stroke-width="4" stroke="#ffffff"
                                                    stroke-dasharray="0" fill="#3474ea" cx="31.968587239583332"
                                                    cy="0" class="apexcharts-heatmap-rect" i="6" index="6"
                                                    j="2" val="58" color="#3474ea"></rect>
                                                <rect id="SvgjsRect1704" width="15.984293619791666"
                                                    height="39.714285714285715" x="47.952880859375" y="0" rx="2"
                                                    ry="2" opacity="1" stroke-width="4" stroke="#ffffff"
                                                    stroke-dasharray="0" fill="#7ea6f1" cx="47.952880859375"
                                                    cy="0" class="apexcharts-heatmap-rect" i="6" index="6"
                                                    j="3" val="18" color="#7ea6f1"></rect>
                                                <rect id="SvgjsRect1705" width="15.984293619791666"
                                                    height="39.714285714285715" x="63.937174479166664" y="0" rx="2"
                                                    ry="2" opacity="1" stroke-width="4" stroke="#ffffff"
                                                    stroke-dasharray="0" fill="#90b3f3" cx="63.937174479166664"
                                                    cy="0" class="apexcharts-heatmap-rect" i="6" index="6"
                                                    j="4" val="5" color="#90b3f3"></rect>
                                                <rect id="SvgjsRect1706" width="15.984293619791666"
                                                    height="39.714285714285715" x="79.92146809895833" y="0" rx="2"
                                                    ry="2" opacity="1" stroke-width="4" stroke="#ffffff"
                                                    stroke-dasharray="0" fill="#4680ec" cx="79.92146809895833"
                                                    cy="0" class="apexcharts-heatmap-rect" i="6" index="6"
                                                    j="5" val="47" color="#4680ec"></rect>
                                                <rect id="SvgjsRect1707" width="15.984293619791666"
                                                    height="39.714285714285715" x="95.90576171875" y="0" rx="2"
                                                    ry="2" opacity="1" stroke-width="4" stroke="#ffffff"
                                                    stroke-dasharray="0" fill="#598dee" cx="95.90576171875"
                                                    cy="0" class="apexcharts-heatmap-rect" i="6" index="6"
                                                    j="6" val="35" color="#598dee"></rect>
                                                <rect id="SvgjsRect1708" width="15.984293619791666"
                                                    height="39.714285714285715" x="111.89005533854167" y="0" rx="2"
                                                    ry="2" opacity="1" stroke-width="4" stroke="#ffffff"
                                                    stroke-dasharray="0" fill="#6b9aef" cx="111.89005533854167"
                                                    cy="0" class="apexcharts-heatmap-rect" i="6" index="6"
                                                    j="7" val="29" color="#6b9aef"></rect>
                                                <rect id="SvgjsRect1709" width="15.984293619791666"
                                                    height="39.714285714285715" x="127.87434895833334" y="0" rx="2"
                                                    ry="2" opacity="1" stroke-width="4" stroke="#ffffff"
                                                    stroke-dasharray="0" fill="#6b9aef" cx="127.87434895833334"
                                                    cy="0" class="apexcharts-heatmap-rect" i="6" index="6"
                                                    j="8" val="22" color="#6b9aef"></rect>
                                                <rect id="SvgjsRect1710" width="15.984293619791666"
                                                    height="39.714285714285715" x="143.858642578125" y="0" rx="2"
                                                    ry="2" opacity="1" stroke-width="4" stroke="#ffffff"
                                                    stroke-dasharray="0" fill="#3474ea" cx="143.858642578125"
                                                    cy="0" class="apexcharts-heatmap-rect" i="6" index="6"
                                                    j="9" val="60" color="#3474ea"></rect>
                                                <rect id="SvgjsRect1711" width="15.984293619791666"
                                                    height="39.714285714285715" x="159.84293619791666" y="0" rx="2"
                                                    ry="2" opacity="1" stroke-width="4" stroke="#ffffff"
                                                    stroke-dasharray="0" fill="#4680ec" cx="159.84293619791666"
                                                    cy="0" class="apexcharts-heatmap-rect" i="6" index="6"
                                                    j="10" val="47" color="#4680ec"></rect>
                                                <rect id="SvgjsRect1712" width="15.984293619791666"
                                                    height="39.714285714285715" x="175.82722981770831" y="0" rx="2"
                                                    ry="2" opacity="1" stroke-width="4" stroke="#ffffff"
                                                    stroke-dasharray="0" fill="#3474ea" cx="175.82722981770831"
                                                    cy="0" class="apexcharts-heatmap-rect" i="6" index="6"
                                                    j="11" val="51" color="#3474ea"></rect>
                                                <rect id="SvgjsRect1713" width="15.984293619791666"
                                                    height="39.714285714285715" x="191.81152343749997" y="0" rx="2"
                                                    ry="2" opacity="1" stroke-width="4" stroke="#ffffff"
                                                    stroke-dasharray="0" fill="#598dee" cx="191.81152343749997"
                                                    cy="0" class="apexcharts-heatmap-rect" i="6" index="6"
                                                    j="12" val="33" color="#598dee"></rect>
                                                <rect id="SvgjsRect1714" width="15.984293619791666"
                                                    height="39.714285714285715" x="207.79581705729163" y="0" rx="2"
                                                    ry="2" opacity="1" stroke-width="4" stroke="#ffffff"
                                                    stroke-dasharray="0" fill="#3474ea" cx="207.79581705729163"
                                                    cy="0" class="apexcharts-heatmap-rect" i="6" index="6"
                                                    j="13" val="55" color="#3474ea"></rect>
                                                <rect id="SvgjsRect1715" width="15.984293619791666"
                                                    height="39.714285714285715" x="223.7801106770833" y="0" rx="2"
                                                    ry="2" opacity="1" stroke-width="4" stroke="#ffffff"
                                                    stroke-dasharray="0" fill="#6b9aef" cx="223.7801106770833"
                                                    cy="0" class="apexcharts-heatmap-rect" i="6" index="6"
                                                    j="14" val="21" color="#6b9aef"></rect>
                                                <rect id="SvgjsRect1716" width="15.984293619791666"
                                                    height="39.714285714285715" x="239.76440429687494" y="0" rx="2"
                                                    ry="2" opacity="1" stroke-width="4" stroke="#ffffff"
                                                    stroke-dasharray="0" fill="#598dee" cx="239.76440429687494"
                                                    cy="0" class="apexcharts-heatmap-rect" i="6" index="6"
                                                    j="15" val="38" color="#598dee"></rect>
                                                <rect id="SvgjsRect1717" width="15.984293619791666"
                                                    height="39.714285714285715" x="255.7486979166666" y="0" rx="2"
                                                    ry="2" opacity="1" stroke-width="4" stroke="#ffffff"
                                                    stroke-dasharray="0" fill="#598dee" cx="255.7486979166666"
                                                    cy="0" class="apexcharts-heatmap-rect" i="6" index="6"
                                                    j="16" val="36" color="#598dee"></rect>
                                                <rect id="SvgjsRect1718" width="15.984293619791666"
                                                    height="39.714285714285715" x="271.73299153645826" y="0" rx="2"
                                                    ry="2" opacity="1" stroke-width="4" stroke="#ffffff"
                                                    stroke-dasharray="0" fill="#6b9aef" cx="271.73299153645826"
                                                    cy="0" class="apexcharts-heatmap-rect" i="6" index="6"
                                                    j="17" val="27" color="#6b9aef"></rect>
                                                <rect id="SvgjsRect1719" width="15.984293619791666"
                                                    height="39.714285714285715" x="287.71728515624994" y="0" rx="2"
                                                    ry="2" opacity="1" stroke-width="4" stroke="#ffffff"
                                                    stroke-dasharray="0" fill="#7ea6f1" cx="287.71728515624994"
                                                    cy="0" class="apexcharts-heatmap-rect" i="6" index="6"
                                                    j="18" val="14" color="#7ea6f1"></rect>
                                                <rect id="SvgjsRect1720" width="15.984293619791666"
                                                    height="39.714285714285715" x="303.70157877604163" y="0" rx="2"
                                                    ry="2" opacity="1" stroke-width="4" stroke="#ffffff"
                                                    stroke-dasharray="0" fill="#90b3f3" cx="303.70157877604163"
                                                    cy="0" class="apexcharts-heatmap-rect" i="6" index="6"
                                                    j="19" val="5" color="#90b3f3"></rect>
                                                <rect id="SvgjsRect1721" width="15.984293619791666"
                                                    height="39.714285714285715" x="319.6858723958333" y="0" rx="2"
                                                    ry="2" opacity="1" stroke-width="4" stroke="#ffffff"
                                                    stroke-dasharray="0" fill="#6b9aef" cx="319.6858723958333"
                                                    cy="0" class="apexcharts-heatmap-rect" i="6" index="6"
                                                    j="20" val="28" color="#6b9aef"></rect>
                                                <rect id="SvgjsRect1722" width="15.984293619791666"
                                                    height="39.714285714285715" x="335.670166015625" y="0" rx="2"
                                                    ry="2" opacity="1" stroke-width="4" stroke="#ffffff"
                                                    stroke-dasharray="0" fill="#598dee" cx="335.670166015625"
                                                    cy="0" class="apexcharts-heatmap-rect" i="6" index="6"
                                                    j="21" val="34" color="#598dee"></rect>
                                                <rect id="SvgjsRect1723" width="15.984293619791666"
                                                    height="39.714285714285715" x="351.6544596354167" y="0" rx="2"
                                                    ry="2" opacity="1" stroke-width="4" stroke="#ffffff"
                                                    stroke-dasharray="0" fill="#598dee" cx="351.6544596354167"
                                                    cy="0" class="apexcharts-heatmap-rect" i="6" index="6"
                                                    j="22" val="33" color="#598dee"></rect>
                                                <rect id="SvgjsRect1724" width="15.984293619791666"
                                                    height="39.714285714285715" x="367.63875325520837" y="0" rx="2"
                                                    ry="2" opacity="1" stroke-width="4" stroke="#ffffff"
                                                    stroke-dasharray="0" fill="#598dee" cx="367.63875325520837"
                                                    cy="0" class="apexcharts-heatmap-rect" i="6" index="6"
                                                    j="23" val="39" color="#598dee"></rect>
                                            </g>
                                            <g id="SvgjsG1725" class="apexcharts-series apexcharts-heatmap-series"
                                                seriesName="FRI" rel="6" data:realIndex="5">
                                                <rect id="SvgjsRect1726" width="15.984293619791666"
                                                    height="39.714285714285715" x="0" y="39.714285714285715" rx="2"
                                                    ry="2" opacity="1" stroke-width="4" stroke="#ffffff"
                                                    stroke-dasharray="0" fill="#7ea6f1" cx="0"
                                                    cy="39.714285714285715" class="apexcharts-heatmap-rect" i="5"
                                                    index="5" j="0" val="11" color="#7ea6f1"></rect>
                                                <rect id="SvgjsRect1727" width="15.984293619791666"
                                                    height="39.714285714285715" x="15.984293619791666" y="39.714285714285715"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#598dee"
                                                    cx="15.984293619791666" cy="39.714285714285715"
                                                    class="apexcharts-heatmap-rect" i="5" index="5" j="1"
                                                    val="36" color="#598dee"></rect>
                                                <rect id="SvgjsRect1728" width="15.984293619791666"
                                                    height="39.714285714285715" x="31.968587239583332" y="39.714285714285715"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#6b9aef"
                                                    cx="31.968587239583332" cy="39.714285714285715"
                                                    class="apexcharts-heatmap-rect" i="5" index="5" j="2"
                                                    val="27" color="#6b9aef"></rect>
                                                <rect id="SvgjsRect1729" width="15.984293619791666"
                                                    height="39.714285714285715" x="47.952880859375" y="39.714285714285715"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#6b9aef"
                                                    cx="47.952880859375" cy="39.714285714285715"
                                                    class="apexcharts-heatmap-rect" i="5" index="5" j="3"
                                                    val="28" color="#6b9aef"></rect>
                                                <rect id="SvgjsRect1730" width="15.984293619791666"
                                                    height="39.714285714285715" x="63.937174479166664" y="39.714285714285715"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#90b3f3"
                                                    cx="63.937174479166664" cy="39.714285714285715"
                                                    class="apexcharts-heatmap-rect" i="5" index="5" j="4"
                                                    val="6" color="#90b3f3"></rect>
                                                <rect id="SvgjsRect1731" width="15.984293619791666"
                                                    height="39.714285714285715" x="79.92146809895833" y="39.714285714285715"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#4680ec"
                                                    cx="79.92146809895833" cy="39.714285714285715"
                                                    class="apexcharts-heatmap-rect" i="5" index="5" j="5"
                                                    val="49" color="#4680ec"></rect>
                                                <rect id="SvgjsRect1732" width="15.984293619791666"
                                                    height="39.714285714285715" x="95.90576171875" y="39.714285714285715"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#90b3f3"
                                                    cx="95.90576171875" cy="39.714285714285715"
                                                    class="apexcharts-heatmap-rect" i="5" index="5" j="6"
                                                    val="7" color="#90b3f3"></rect>
                                                <rect id="SvgjsRect1733" width="15.984293619791666"
                                                    height="39.714285714285715" x="111.89005533854167" y="39.714285714285715"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#90b3f3"
                                                    cx="111.89005533854167" cy="39.714285714285715"
                                                    class="apexcharts-heatmap-rect" i="5" index="5" j="7"
                                                    val="4" color="#90b3f3"></rect>
                                                <rect id="SvgjsRect1734" width="15.984293619791666"
                                                    height="39.714285714285715" x="127.87434895833334" y="39.714285714285715"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#598dee"
                                                    cx="127.87434895833334" cy="39.714285714285715"
                                                    class="apexcharts-heatmap-rect" i="5" index="5" j="8"
                                                    val="36" color="#598dee"></rect>
                                                <rect id="SvgjsRect1735" width="15.984293619791666"
                                                    height="39.714285714285715" x="143.858642578125" y="39.714285714285715"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#4680ec"
                                                    cx="143.858642578125" cy="39.714285714285715"
                                                    class="apexcharts-heatmap-rect" i="5" index="5" j="9"
                                                    val="45" color="#4680ec"></rect>
                                                <rect id="SvgjsRect1736" width="15.984293619791666"
                                                    height="39.714285714285715" x="159.84293619791666" y="39.714285714285715"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#3474ea"
                                                    cx="159.84293619791666" cy="39.714285714285715"
                                                    class="apexcharts-heatmap-rect" i="5" index="5" j="10"
                                                    val="57" color="#3474ea"></rect>
                                                <rect id="SvgjsRect1737" width="15.984293619791666"
                                                    height="39.714285714285715" x="175.82722981770831" y="39.714285714285715"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#4680ec"
                                                    cx="175.82722981770831" cy="39.714285714285715"
                                                    class="apexcharts-heatmap-rect" i="5" index="5" j="11"
                                                    val="46" color="#4680ec"></rect>
                                                <rect id="SvgjsRect1738" width="15.984293619791666"
                                                    height="39.714285714285715" x="191.81152343749997" y="39.714285714285715"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#598dee"
                                                    cx="191.81152343749997" cy="39.714285714285715"
                                                    class="apexcharts-heatmap-rect" i="5" index="5" j="12"
                                                    val="33" color="#598dee"></rect>
                                                <rect id="SvgjsRect1739" width="15.984293619791666"
                                                    height="39.714285714285715" x="207.79581705729163" y="39.714285714285715"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#3474ea"
                                                    cx="207.79581705729163" cy="39.714285714285715"
                                                    class="apexcharts-heatmap-rect" i="5" index="5" j="13"
                                                    val="55" color="#3474ea"></rect>
                                                <rect id="SvgjsRect1740" width="15.984293619791666"
                                                    height="39.714285714285715" x="223.7801106770833" y="39.714285714285715"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#3474ea"
                                                    cx="223.7801106770833" cy="39.714285714285715"
                                                    class="apexcharts-heatmap-rect" i="5" index="5" j="14"
                                                    val="54" color="#3474ea"></rect>
                                                <rect id="SvgjsRect1741" width="15.984293619791666"
                                                    height="39.714285714285715" x="239.76440429687494" y="39.714285714285715"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#90b3f3"
                                                    cx="239.76440429687494" cy="39.714285714285715"
                                                    class="apexcharts-heatmap-rect" i="5" index="5" j="15"
                                                    val="3" color="#90b3f3"></rect>
                                                <rect id="SvgjsRect1742" width="15.984293619791666"
                                                    height="39.714285714285715" x="255.7486979166666" y="39.714285714285715"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#4680ec"
                                                    cx="255.7486979166666" cy="39.714285714285715"
                                                    class="apexcharts-heatmap-rect" i="5" index="5" j="16"
                                                    val="43" color="#4680ec"></rect>
                                                <rect id="SvgjsRect1743" width="15.984293619791666"
                                                    height="39.714285714285715" x="271.73299153645826" y="39.714285714285715"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#90b3f3"
                                                    cx="271.73299153645826" cy="39.714285714285715"
                                                    class="apexcharts-heatmap-rect" i="5" index="5" j="17"
                                                    val="9" color="#90b3f3"></rect>
                                                <rect id="SvgjsRect1744" width="15.984293619791666"
                                                    height="39.714285714285715" x="287.71728515624994" y="39.714285714285715"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#6b9aef"
                                                    cx="287.71728515624994" cy="39.714285714285715"
                                                    class="apexcharts-heatmap-rect" i="5" index="5" j="18"
                                                    val="29" color="#6b9aef"></rect>
                                                <rect id="SvgjsRect1745" width="15.984293619791666"
                                                    height="39.714285714285715" x="303.70157877604163" y="39.714285714285715"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#6b9aef"
                                                    cx="303.70157877604163" cy="39.714285714285715"
                                                    class="apexcharts-heatmap-rect" i="5" index="5" j="19"
                                                    val="25" color="#6b9aef"></rect>
                                                <rect id="SvgjsRect1746" width="15.984293619791666"
                                                    height="39.714285714285715" x="319.6858723958333" y="39.714285714285715"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#598dee"
                                                    cx="319.6858723958333" cy="39.714285714285715"
                                                    class="apexcharts-heatmap-rect" i="5" index="5" j="20"
                                                    val="31" color="#598dee"></rect>
                                                <rect id="SvgjsRect1747" width="15.984293619791666"
                                                    height="39.714285714285715" x="335.670166015625" y="39.714285714285715"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#6b9aef"
                                                    cx="335.670166015625" cy="39.714285714285715"
                                                    class="apexcharts-heatmap-rect" i="5" index="5" j="21"
                                                    val="26" color="#6b9aef"></rect>
                                                <rect id="SvgjsRect1748" width="15.984293619791666"
                                                    height="39.714285714285715" x="351.6544596354167" y="39.714285714285715"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#6b9aef"
                                                    cx="351.6544596354167" cy="39.714285714285715"
                                                    class="apexcharts-heatmap-rect" i="5" index="5" j="22"
                                                    val="22" color="#6b9aef"></rect>
                                                <rect id="SvgjsRect1749" width="15.984293619791666"
                                                    height="39.714285714285715" x="367.63875325520837" y="39.714285714285715"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#598dee"
                                                    cx="367.63875325520837" cy="39.714285714285715"
                                                    class="apexcharts-heatmap-rect" i="5" index="5" j="23"
                                                    val="37" color="#598dee"></rect>
                                            </g>
                                            <g id="SvgjsG1750" class="apexcharts-series apexcharts-heatmap-series"
                                                seriesName="THU" rel="5" data:realIndex="4">
                                                <rect id="SvgjsRect1751" width="15.984293619791666"
                                                    height="39.714285714285715" x="0" y="79.42857142857143" rx="2"
                                                    ry="2" opacity="1" stroke-width="4" stroke="#ffffff"
                                                    stroke-dasharray="0" fill="#4680ec" cx="0"
                                                    cy="79.42857142857143" class="apexcharts-heatmap-rect" i="4"
                                                    index="4" j="0" val="46" color="#4680ec"></rect>
                                                <rect id="SvgjsRect1752" width="15.984293619791666"
                                                    height="39.714285714285715" x="15.984293619791666" y="79.42857142857143"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#6b9aef"
                                                    cx="15.984293619791666" cy="79.42857142857143"
                                                    class="apexcharts-heatmap-rect" i="4" index="4" j="1"
                                                    val="29" color="#6b9aef"></rect>
                                                <rect id="SvgjsRect1753" width="15.984293619791666"
                                                    height="39.714285714285715" x="31.968587239583332" y="79.42857142857143"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#90b3f3"
                                                    cx="31.968587239583332" cy="79.42857142857143"
                                                    class="apexcharts-heatmap-rect" i="4" index="4" j="2"
                                                    val="5" color="#90b3f3"></rect>
                                                <rect id="SvgjsRect1754" width="15.984293619791666"
                                                    height="39.714285714285715" x="47.952880859375" y="79.42857142857143"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#598dee"
                                                    cx="47.952880859375" cy="79.42857142857143"
                                                    class="apexcharts-heatmap-rect" i="4" index="4" j="3"
                                                    val="34" color="#598dee"></rect>
                                                <rect id="SvgjsRect1755" width="15.984293619791666"
                                                    height="39.714285714285715" x="63.937174479166664" y="79.42857142857143"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#90b3f3"
                                                    cx="63.937174479166664" cy="79.42857142857143"
                                                    class="apexcharts-heatmap-rect" i="4" index="4" j="4"
                                                    val="9" color="#90b3f3"></rect>
                                                <rect id="SvgjsRect1756" width="15.984293619791666"
                                                    height="39.714285714285715" x="79.92146809895833" y="79.42857142857143"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#3474ea"
                                                    cx="79.92146809895833" cy="79.42857142857143"
                                                    class="apexcharts-heatmap-rect" i="4" index="4" j="5"
                                                    val="52" color="#3474ea"></rect>
                                                <rect id="SvgjsRect1757" width="15.984293619791666"
                                                    height="39.714285714285715" x="95.90576171875" y="79.42857142857143"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#3474ea"
                                                    cx="95.90576171875" cy="79.42857142857143"
                                                    class="apexcharts-heatmap-rect" i="4" index="4" j="6"
                                                    val="53" color="#3474ea"></rect>
                                                <rect id="SvgjsRect1758" width="15.984293619791666"
                                                    height="39.714285714285715" x="111.89005533854167" y="79.42857142857143"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#598dee"
                                                    cx="111.89005533854167" cy="79.42857142857143"
                                                    class="apexcharts-heatmap-rect" i="4" index="4" j="7"
                                                    val="36" color="#598dee"></rect>
                                                <rect id="SvgjsRect1759" width="15.984293619791666"
                                                    height="39.714285714285715" x="127.87434895833334" y="79.42857142857143"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#6b9aef"
                                                    cx="127.87434895833334" cy="79.42857142857143"
                                                    class="apexcharts-heatmap-rect" i="4" index="4" j="8"
                                                    val="23" color="#6b9aef"></rect>
                                                <rect id="SvgjsRect1760" width="15.984293619791666"
                                                    height="39.714285714285715" x="143.858642578125" y="79.42857142857143"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#4680ec"
                                                    cx="143.858642578125" cy="79.42857142857143"
                                                    class="apexcharts-heatmap-rect" i="4" index="4" j="9"
                                                    val="41" color="#4680ec"></rect>
                                                <rect id="SvgjsRect1761" width="15.984293619791666"
                                                    height="39.714285714285715" x="159.84293619791666" y="79.42857142857143"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#90b3f3"
                                                    cx="159.84293619791666" cy="79.42857142857143"
                                                    class="apexcharts-heatmap-rect" i="4" index="4" j="10"
                                                    val="5" color="#90b3f3"></rect>
                                                <rect id="SvgjsRect1762" width="15.984293619791666"
                                                    height="39.714285714285715" x="175.82722981770831" y="79.42857142857143"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#598dee"
                                                    cx="175.82722981770831" cy="79.42857142857143"
                                                    class="apexcharts-heatmap-rect" i="4" index="4" j="11"
                                                    val="33" color="#598dee"></rect>
                                                <rect id="SvgjsRect1763" width="15.984293619791666"
                                                    height="39.714285714285715" x="191.81152343749997" y="79.42857142857143"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#7ea6f1"
                                                    cx="191.81152343749997" cy="79.42857142857143"
                                                    class="apexcharts-heatmap-rect" i="4" index="4" j="12"
                                                    val="20" color="#7ea6f1"></rect>
                                                <rect id="SvgjsRect1764" width="15.984293619791666"
                                                    height="39.714285714285715" x="207.79581705729163" y="79.42857142857143"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#4680ec"
                                                    cx="207.79581705729163" cy="79.42857142857143"
                                                    class="apexcharts-heatmap-rect" i="4" index="4" j="13"
                                                    val="47" color="#4680ec"></rect>
                                                <rect id="SvgjsRect1765" width="15.984293619791666"
                                                    height="39.714285714285715" x="223.7801106770833" y="79.42857142857143"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#3474ea"
                                                    cx="223.7801106770833" cy="79.42857142857143"
                                                    class="apexcharts-heatmap-rect" i="4" index="4" j="14"
                                                    val="58" color="#3474ea"></rect>
                                                <rect id="SvgjsRect1766" width="15.984293619791666"
                                                    height="39.714285714285715" x="239.76440429687494" y="79.42857142857143"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#90b3f3"
                                                    cx="239.76440429687494" cy="79.42857142857143"
                                                    class="apexcharts-heatmap-rect" i="4" index="4" j="15"
                                                    val="4" color="#90b3f3"></rect>
                                                <rect id="SvgjsRect1767" width="15.984293619791666"
                                                    height="39.714285714285715" x="255.7486979166666" y="79.42857142857143"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#7ea6f1"
                                                    cx="255.7486979166666" cy="79.42857142857143"
                                                    class="apexcharts-heatmap-rect" i="4" index="4" j="16"
                                                    val="13" color="#7ea6f1"></rect>
                                                <rect id="SvgjsRect1768" width="15.984293619791666"
                                                    height="39.714285714285715" x="271.73299153645826" y="79.42857142857143"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#3474ea"
                                                    cx="271.73299153645826" cy="79.42857142857143"
                                                    class="apexcharts-heatmap-rect" i="4" index="4" j="17"
                                                    val="53" color="#3474ea"></rect>
                                                <rect id="SvgjsRect1769" width="15.984293619791666"
                                                    height="39.714285714285715" x="287.71728515624994" y="79.42857142857143"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#4680ec"
                                                    cx="287.71728515624994" cy="79.42857142857143"
                                                    class="apexcharts-heatmap-rect" i="4" index="4" j="18"
                                                    val="44" color="#4680ec"></rect>
                                                <rect id="SvgjsRect1770" width="15.984293619791666"
                                                    height="39.714285714285715" x="303.70157877604163" y="79.42857142857143"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#4680ec"
                                                    cx="303.70157877604163" cy="79.42857142857143"
                                                    class="apexcharts-heatmap-rect" i="4" index="4" j="19"
                                                    val="45" color="#4680ec"></rect>
                                                <rect id="SvgjsRect1771" width="15.984293619791666"
                                                    height="39.714285714285715" x="319.6858723958333" y="79.42857142857143"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#598dee"
                                                    cx="319.6858723958333" cy="79.42857142857143"
                                                    class="apexcharts-heatmap-rect" i="4" index="4" j="20"
                                                    val="37" color="#598dee"></rect>
                                                <rect id="SvgjsRect1772" width="15.984293619791666"
                                                    height="39.714285714285715" x="335.670166015625" y="79.42857142857143"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#90b3f3"
                                                    cx="335.670166015625" cy="79.42857142857143"
                                                    class="apexcharts-heatmap-rect" i="4" index="4" j="21"
                                                    val="10" color="#90b3f3"></rect>
                                                <rect id="SvgjsRect1773" width="15.984293619791666"
                                                    height="39.714285714285715" x="351.6544596354167" y="79.42857142857143"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#6b9aef"
                                                    cx="351.6544596354167" cy="79.42857142857143"
                                                    class="apexcharts-heatmap-rect" i="4" index="4" j="22"
                                                    val="28" color="#6b9aef"></rect>
                                                <rect id="SvgjsRect1774" width="15.984293619791666"
                                                    height="39.714285714285715" x="367.63875325520837" y="79.42857142857143"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#3474ea"
                                                    cx="367.63875325520837" cy="79.42857142857143"
                                                    class="apexcharts-heatmap-rect" i="4" index="4" j="23"
                                                    val="60" color="#3474ea"></rect>
                                            </g>
                                            <g id="SvgjsG1775" class="apexcharts-series apexcharts-heatmap-series"
                                                seriesName="WED" rel="4" data:realIndex="3">
                                                <rect id="SvgjsRect1776" width="15.984293619791666"
                                                    height="39.714285714285715" x="0" y="119.14285714285714" rx="2"
                                                    ry="2" opacity="1" stroke-width="4" stroke="#ffffff"
                                                    stroke-dasharray="0" fill="#7ea6f1" cx="0"
                                                    cy="119.14285714285714" class="apexcharts-heatmap-rect" i="3"
                                                    index="3" j="0" val="13" color="#7ea6f1"></rect>
                                                <rect id="SvgjsRect1777" width="15.984293619791666"
                                                    height="39.714285714285715" x="15.984293619791666" y="119.14285714285714"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#7ea6f1"
                                                    cx="15.984293619791666" cy="119.14285714285714"
                                                    class="apexcharts-heatmap-rect" i="3" index="3" j="1"
                                                    val="11" color="#7ea6f1"></rect>
                                                <rect id="SvgjsRect1778" width="15.984293619791666"
                                                    height="39.714285714285715" x="31.968587239583332" y="119.14285714285714"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#6b9aef"
                                                    cx="31.968587239583332" cy="119.14285714285714"
                                                    class="apexcharts-heatmap-rect" i="3" index="3" j="2"
                                                    val="26" color="#6b9aef"></rect>
                                                <rect id="SvgjsRect1779" width="15.984293619791666"
                                                    height="39.714285714285715" x="47.952880859375" y="119.14285714285714"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#6b9aef"
                                                    cx="47.952880859375" cy="119.14285714285714"
                                                    class="apexcharts-heatmap-rect" i="3" index="3" j="3"
                                                    val="27" color="#6b9aef"></rect>
                                                <rect id="SvgjsRect1780" width="15.984293619791666"
                                                    height="39.714285714285715" x="63.937174479166664" y="119.14285714285714"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#598dee"
                                                    cx="63.937174479166664" cy="119.14285714285714"
                                                    class="apexcharts-heatmap-rect" i="3" index="3" j="4"
                                                    val="39" color="#598dee"></rect>
                                                <rect id="SvgjsRect1781" width="15.984293619791666"
                                                    height="39.714285714285715" x="79.92146809895833" y="119.14285714285714"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#4680ec"
                                                    cx="79.92146809895833" cy="119.14285714285714"
                                                    class="apexcharts-heatmap-rect" i="3" index="3" j="5"
                                                    val="44" color="#4680ec"></rect>
                                                <rect id="SvgjsRect1782" width="15.984293619791666"
                                                    height="39.714285714285715" x="95.90576171875" y="119.14285714285714"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#3474ea"
                                                    cx="95.90576171875" cy="119.14285714285714"
                                                    class="apexcharts-heatmap-rect" i="3" index="3" j="6"
                                                    val="56" color="#3474ea"></rect>
                                                <rect id="SvgjsRect1783" width="15.984293619791666"
                                                    height="39.714285714285715" x="111.89005533854167" y="119.14285714285714"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#6b9aef"
                                                    cx="111.89005533854167" cy="119.14285714285714"
                                                    class="apexcharts-heatmap-rect" i="3" index="3" j="7"
                                                    val="25" color="#6b9aef"></rect>
                                                <rect id="SvgjsRect1784" width="15.984293619791666"
                                                    height="39.714285714285715" x="127.87434895833334" y="119.14285714285714"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#90b3f3"
                                                    cx="127.87434895833334" cy="119.14285714285714"
                                                    class="apexcharts-heatmap-rect" i="3" index="3" j="8"
                                                    val="10" color="#90b3f3"></rect>
                                                <rect id="SvgjsRect1785" width="15.984293619791666"
                                                    height="39.714285714285715" x="143.858642578125" y="119.14285714285714"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#4680ec"
                                                    cx="143.858642578125" cy="119.14285714285714"
                                                    class="apexcharts-heatmap-rect" i="3" index="3" j="9"
                                                    val="41" color="#4680ec"></rect>
                                                <rect id="SvgjsRect1786" width="15.984293619791666"
                                                    height="39.714285714285715" x="159.84293619791666" y="119.14285714285714"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#7ea6f1"
                                                    cx="159.84293619791666" cy="119.14285714285714"
                                                    class="apexcharts-heatmap-rect" i="3" index="3" j="10"
                                                    val="19" color="#7ea6f1"></rect>
                                                <rect id="SvgjsRect1787" width="15.984293619791666"
                                                    height="39.714285714285715" x="175.82722981770831" y="119.14285714285714"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#4680ec"
                                                    cx="175.82722981770831" cy="119.14285714285714"
                                                    class="apexcharts-heatmap-rect" i="3" index="3" j="11"
                                                    val="46" color="#4680ec"></rect>
                                                <rect id="SvgjsRect1788" width="15.984293619791666"
                                                    height="39.714285714285715" x="191.81152343749997" y="119.14285714285714"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#598dee"
                                                    cx="191.81152343749997" cy="119.14285714285714"
                                                    class="apexcharts-heatmap-rect" i="3" index="3" j="12"
                                                    val="36" color="#598dee"></rect>
                                                <rect id="SvgjsRect1789" width="15.984293619791666"
                                                    height="39.714285714285715" x="207.79581705729163" y="119.14285714285714"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#4680ec"
                                                    cx="207.79581705729163" cy="119.14285714285714"
                                                    class="apexcharts-heatmap-rect" i="3" index="3" j="13"
                                                    val="44" color="#4680ec"></rect>
                                                <rect id="SvgjsRect1790" width="15.984293619791666"
                                                    height="39.714285714285715" x="223.7801106770833" y="119.14285714285714"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#3474ea"
                                                    cx="223.7801106770833" cy="119.14285714285714"
                                                    class="apexcharts-heatmap-rect" i="3" index="3" j="14"
                                                    val="51" color="#3474ea"></rect>
                                                <rect id="SvgjsRect1791" width="15.984293619791666"
                                                    height="39.714285714285715" x="239.76440429687494" y="119.14285714285714"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#7ea6f1"
                                                    cx="239.76440429687494" cy="119.14285714285714"
                                                    class="apexcharts-heatmap-rect" i="3" index="3" j="15"
                                                    val="13" color="#7ea6f1"></rect>
                                                <rect id="SvgjsRect1792" width="15.984293619791666"
                                                    height="39.714285714285715" x="255.7486979166666" y="119.14285714285714"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#598dee"
                                                    cx="255.7486979166666" cy="119.14285714285714"
                                                    class="apexcharts-heatmap-rect" i="3" index="3" j="16"
                                                    val="37" color="#598dee"></rect>
                                                <rect id="SvgjsRect1793" width="15.984293619791666"
                                                    height="39.714285714285715" x="271.73299153645826" y="119.14285714285714"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#598dee"
                                                    cx="271.73299153645826" cy="119.14285714285714"
                                                    class="apexcharts-heatmap-rect" i="3" index="3" j="17"
                                                    val="35" color="#598dee"></rect>
                                                <rect id="SvgjsRect1794" width="15.984293619791666"
                                                    height="39.714285714285715" x="287.71728515624994" y="119.14285714285714"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#90b3f3"
                                                    cx="287.71728515624994" cy="119.14285714285714"
                                                    class="apexcharts-heatmap-rect" i="3" index="3" j="18"
                                                    val="2" color="#90b3f3"></rect>
                                                <rect id="SvgjsRect1795" width="15.984293619791666"
                                                    height="39.714285714285715" x="303.70157877604163" y="119.14285714285714"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#6b9aef"
                                                    cx="303.70157877604163" cy="119.14285714285714"
                                                    class="apexcharts-heatmap-rect" i="3" index="3" j="19"
                                                    val="22" color="#6b9aef"></rect>
                                                <rect id="SvgjsRect1796" width="15.984293619791666"
                                                    height="39.714285714285715" x="319.6858723958333" y="119.14285714285714"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#4680ec"
                                                    cx="319.6858723958333" cy="119.14285714285714"
                                                    class="apexcharts-heatmap-rect" i="3" index="3" j="20"
                                                    val="45" color="#4680ec"></rect>
                                                <rect id="SvgjsRect1797" width="15.984293619791666"
                                                    height="39.714285714285715" x="335.670166015625" y="119.14285714285714"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#90b3f3"
                                                    cx="335.670166015625" cy="119.14285714285714"
                                                    class="apexcharts-heatmap-rect" i="3" index="3" j="21"
                                                    val="4" color="#90b3f3"></rect>
                                                <rect id="SvgjsRect1798" width="15.984293619791666"
                                                    height="39.714285714285715" x="351.6544596354167" y="119.14285714285714"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#6b9aef"
                                                    cx="351.6544596354167" cy="119.14285714285714"
                                                    class="apexcharts-heatmap-rect" i="3" index="3" j="22"
                                                    val="21" color="#6b9aef"></rect>
                                                <rect id="SvgjsRect1799" width="15.984293619791666"
                                                    height="39.714285714285715" x="367.63875325520837" y="119.14285714285714"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#7ea6f1"
                                                    cx="367.63875325520837" cy="119.14285714285714"
                                                    class="apexcharts-heatmap-rect" i="3" index="3" j="23"
                                                    val="19" color="#7ea6f1"></rect>
                                            </g>
                                            <g id="SvgjsG1800" class="apexcharts-series apexcharts-heatmap-series"
                                                seriesName="TUE" rel="3" data:realIndex="2">
                                                <rect id="SvgjsRect1801" width="15.984293619791666"
                                                    height="39.714285714285715" x="0" y="158.85714285714286" rx="2"
                                                    ry="2" opacity="1" stroke-width="4" stroke="#ffffff"
                                                    stroke-dasharray="0" fill="#90b3f3" cx="0"
                                                    cy="158.85714285714286" class="apexcharts-heatmap-rect" i="2"
                                                    index="2" j="0" val="10" color="#90b3f3"></rect>
                                                <rect id="SvgjsRect1802" width="15.984293619791666"
                                                    height="39.714285714285715" x="15.984293619791666" y="158.85714285714286"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#3474ea"
                                                    cx="15.984293619791666" cy="158.85714285714286"
                                                    class="apexcharts-heatmap-rect" i="2" index="2" j="1"
                                                    val="60" color="#3474ea"></rect>
                                                <rect id="SvgjsRect1803" width="15.984293619791666"
                                                    height="39.714285714285715" x="31.968587239583332" y="158.85714285714286"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#4680ec"
                                                    cx="31.968587239583332" cy="158.85714285714286"
                                                    class="apexcharts-heatmap-rect" i="2" index="2" j="2"
                                                    val="50" color="#4680ec"></rect>
                                                <rect id="SvgjsRect1804" width="15.984293619791666"
                                                    height="39.714285714285715" x="47.952880859375" y="158.85714285714286"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#3474ea"
                                                    cx="47.952880859375" cy="158.85714285714286"
                                                    class="apexcharts-heatmap-rect" i="2" index="2" j="3"
                                                    val="60" color="#3474ea"></rect>
                                                <rect id="SvgjsRect1805" width="15.984293619791666"
                                                    height="39.714285714285715" x="63.937174479166664" y="158.85714285714286"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#7ea6f1"
                                                    cx="63.937174479166664" cy="158.85714285714286"
                                                    class="apexcharts-heatmap-rect" i="2" index="2" j="4"
                                                    val="16" color="#7ea6f1"></rect>
                                                <rect id="SvgjsRect1806" width="15.984293619791666"
                                                    height="39.714285714285715" x="79.92146809895833" y="158.85714285714286"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#90b3f3"
                                                    cx="79.92146809895833" cy="158.85714285714286"
                                                    class="apexcharts-heatmap-rect" i="2" index="2" j="5"
                                                    val="7" color="#90b3f3"></rect>
                                                <rect id="SvgjsRect1807" width="15.984293619791666"
                                                    height="39.714285714285715" x="95.90576171875" y="158.85714285714286"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#7ea6f1"
                                                    cx="95.90576171875" cy="158.85714285714286"
                                                    class="apexcharts-heatmap-rect" i="2" index="2" j="6"
                                                    val="15" color="#7ea6f1"></rect>
                                                <rect id="SvgjsRect1808" width="15.984293619791666"
                                                    height="39.714285714285715" x="111.89005533854167" y="158.85714285714286"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#3474ea"
                                                    cx="111.89005533854167" cy="158.85714285714286"
                                                    class="apexcharts-heatmap-rect" i="2" index="2" j="7"
                                                    val="57" color="#3474ea"></rect>
                                                <rect id="SvgjsRect1809" width="15.984293619791666"
                                                    height="39.714285714285715" x="127.87434895833334" y="158.85714285714286"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#90b3f3"
                                                    cx="127.87434895833334" cy="158.85714285714286"
                                                    class="apexcharts-heatmap-rect" i="2" index="2" j="8"
                                                    val="9" color="#90b3f3"></rect>
                                                <rect id="SvgjsRect1810" width="15.984293619791666"
                                                    height="39.714285714285715" x="143.858642578125" y="158.85714285714286"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#4680ec"
                                                    cx="143.858642578125" cy="158.85714285714286"
                                                    class="apexcharts-heatmap-rect" i="2" index="2" j="9"
                                                    val="49" color="#4680ec"></rect>
                                                <rect id="SvgjsRect1811" width="15.984293619791666"
                                                    height="39.714285714285715" x="159.84293619791666" y="158.85714285714286"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#6b9aef"
                                                    cx="159.84293619791666" cy="158.85714285714286"
                                                    class="apexcharts-heatmap-rect" i="2" index="2" j="10"
                                                    val="24" color="#6b9aef"></rect>
                                                <rect id="SvgjsRect1812" width="15.984293619791666"
                                                    height="39.714285714285715" x="175.82722981770831" y="158.85714285714286"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#598dee"
                                                    cx="175.82722981770831" cy="158.85714285714286"
                                                    class="apexcharts-heatmap-rect" i="2" index="2" j="11"
                                                    val="33" color="#598dee"></rect>
                                                <rect id="SvgjsRect1813" width="15.984293619791666"
                                                    height="39.714285714285715" x="191.81152343749997" y="158.85714285714286"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#7ea6f1"
                                                    cx="191.81152343749997" cy="158.85714285714286"
                                                    class="apexcharts-heatmap-rect" i="2" index="2" j="12"
                                                    val="20" color="#7ea6f1"></rect>
                                                <rect id="SvgjsRect1814" width="15.984293619791666"
                                                    height="39.714285714285715" x="207.79581705729163" y="158.85714285714286"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#3474ea"
                                                    cx="207.79581705729163" cy="158.85714285714286"
                                                    class="apexcharts-heatmap-rect" i="2" index="2" j="13"
                                                    val="54" color="#3474ea"></rect>
                                                <rect id="SvgjsRect1815" width="15.984293619791666"
                                                    height="39.714285714285715" x="223.7801106770833" y="158.85714285714286"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#598dee"
                                                    cx="223.7801106770833" cy="158.85714285714286"
                                                    class="apexcharts-heatmap-rect" i="2" index="2" j="14"
                                                    val="34" color="#598dee"></rect>
                                                <rect id="SvgjsRect1816" width="15.984293619791666"
                                                    height="39.714285714285715" x="239.76440429687494" y="158.85714285714286"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#3474ea"
                                                    cx="239.76440429687494" cy="158.85714285714286"
                                                    class="apexcharts-heatmap-rect" i="2" index="2" j="15"
                                                    val="51" color="#3474ea"></rect>
                                                <rect id="SvgjsRect1817" width="15.984293619791666"
                                                    height="39.714285714285715" x="255.7486979166666" y="158.85714285714286"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#598dee"
                                                    cx="255.7486979166666" cy="158.85714285714286"
                                                    class="apexcharts-heatmap-rect" i="2" index="2" j="16"
                                                    val="39" color="#598dee"></rect>
                                                <rect id="SvgjsRect1818" width="15.984293619791666"
                                                    height="39.714285714285715" x="271.73299153645826" y="158.85714285714286"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#598dee"
                                                    cx="271.73299153645826" cy="158.85714285714286"
                                                    class="apexcharts-heatmap-rect" i="2" index="2" j="17"
                                                    val="32" color="#598dee"></rect>
                                                <rect id="SvgjsRect1819" width="15.984293619791666"
                                                    height="39.714285714285715" x="287.71728515624994" y="158.85714285714286"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#3474ea"
                                                    cx="287.71728515624994" cy="158.85714285714286"
                                                    class="apexcharts-heatmap-rect" i="2" index="2" j="18"
                                                    val="54" color="#3474ea"></rect>
                                                <rect id="SvgjsRect1820" width="15.984293619791666"
                                                    height="39.714285714285715" x="303.70157877604163" y="158.85714285714286"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#3474ea"
                                                    cx="303.70157877604163" cy="158.85714285714286"
                                                    class="apexcharts-heatmap-rect" i="2" index="2" j="19"
                                                    val="52" color="#3474ea"></rect>
                                                <rect id="SvgjsRect1821" width="15.984293619791666"
                                                    height="39.714285714285715" x="319.6858723958333" y="158.85714285714286"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#6b9aef"
                                                    cx="319.6858723958333" cy="158.85714285714286"
                                                    class="apexcharts-heatmap-rect" i="2" index="2" j="20"
                                                    val="28" color="#6b9aef"></rect>
                                                <rect id="SvgjsRect1822" width="15.984293619791666"
                                                    height="39.714285714285715" x="335.670166015625" y="158.85714285714286"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#4680ec"
                                                    cx="335.670166015625" cy="158.85714285714286"
                                                    class="apexcharts-heatmap-rect" i="2" index="2" j="21"
                                                    val="43" color="#4680ec"></rect>
                                                <rect id="SvgjsRect1823" width="15.984293619791666"
                                                    height="39.714285714285715" x="351.6544596354167" y="158.85714285714286"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#3474ea"
                                                    cx="351.6544596354167" cy="158.85714285714286"
                                                    class="apexcharts-heatmap-rect" i="2" index="2" j="22"
                                                    val="53" color="#3474ea"></rect>
                                                <rect id="SvgjsRect1824" width="15.984293619791666"
                                                    height="39.714285714285715" x="367.63875325520837" y="158.85714285714286"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#598dee"
                                                    cx="367.63875325520837" cy="158.85714285714286"
                                                    class="apexcharts-heatmap-rect" i="2" index="2" j="23"
                                                    val="35" color="#598dee"></rect>
                                            </g>
                                            <g id="SvgjsG1825" class="apexcharts-series apexcharts-heatmap-series"
                                                seriesName="MON" rel="2" data:realIndex="1">
                                                <rect id="SvgjsRect1826" width="15.984293619791666"
                                                    height="39.714285714285715" x="0" y="198.57142857142858" rx="2"
                                                    ry="2" opacity="1" stroke-width="4" stroke="#ffffff"
                                                    stroke-dasharray="0" fill="#4680ec" cx="0"
                                                    cy="198.57142857142858" class="apexcharts-heatmap-rect" i="1"
                                                    index="1" j="0" val="47" color="#4680ec"></rect>
                                                <rect id="SvgjsRect1827" width="15.984293619791666"
                                                    height="39.714285714285715" x="15.984293619791666" y="198.57142857142858"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#90b3f3"
                                                    cx="15.984293619791666" cy="198.57142857142858"
                                                    class="apexcharts-heatmap-rect" i="1" index="1" j="1"
                                                    val="1" color="#90b3f3"></rect>
                                                <rect id="SvgjsRect1828" width="15.984293619791666"
                                                    height="39.714285714285715" x="31.968587239583332" y="198.57142857142858"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#598dee"
                                                    cx="31.968587239583332" cy="198.57142857142858"
                                                    class="apexcharts-heatmap-rect" i="1" index="1" j="2"
                                                    val="39" color="#598dee"></rect>
                                                <rect id="SvgjsRect1829" width="15.984293619791666"
                                                    height="39.714285714285715" x="47.952880859375" y="198.57142857142858"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#3474ea"
                                                    cx="47.952880859375" cy="198.57142857142858"
                                                    class="apexcharts-heatmap-rect" i="1" index="1" j="3"
                                                    val="54" color="#3474ea"></rect>
                                                <rect id="SvgjsRect1830" width="15.984293619791666"
                                                    height="39.714285714285715" x="63.937174479166664" y="198.57142857142858"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#598dee"
                                                    cx="63.937174479166664" cy="198.57142857142858"
                                                    class="apexcharts-heatmap-rect" i="1" index="1" j="4"
                                                    val="36" color="#598dee"></rect>
                                                <rect id="SvgjsRect1831" width="15.984293619791666"
                                                    height="39.714285714285715" x="79.92146809895833" y="198.57142857142858"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#6b9aef"
                                                    cx="79.92146809895833" cy="198.57142857142858"
                                                    class="apexcharts-heatmap-rect" i="1" index="1" j="5"
                                                    val="27" color="#6b9aef"></rect>
                                                <rect id="SvgjsRect1832" width="15.984293619791666"
                                                    height="39.714285714285715" x="95.90576171875" y="198.57142857142858"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#4680ec"
                                                    cx="95.90576171875" cy="198.57142857142858"
                                                    class="apexcharts-heatmap-rect" i="1" index="1" j="6"
                                                    val="41" color="#4680ec"></rect>
                                                <rect id="SvgjsRect1833" width="15.984293619791666"
                                                    height="39.714285714285715" x="111.89005533854167" y="198.57142857142858"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#3474ea"
                                                    cx="111.89005533854167" cy="198.57142857142858"
                                                    class="apexcharts-heatmap-rect" i="1" index="1" j="7"
                                                    val="51" color="#3474ea"></rect>
                                                <rect id="SvgjsRect1834" width="15.984293619791666"
                                                    height="39.714285714285715" x="127.87434895833334" y="198.57142857142858"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#3474ea"
                                                    cx="127.87434895833334" cy="198.57142857142858"
                                                    class="apexcharts-heatmap-rect" i="1" index="1" j="8"
                                                    val="60" color="#3474ea"></rect>
                                                <rect id="SvgjsRect1835" width="15.984293619791666"
                                                    height="39.714285714285715" x="143.858642578125" y="198.57142857142858"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#3474ea"
                                                    cx="143.858642578125" cy="198.57142857142858"
                                                    class="apexcharts-heatmap-rect" i="1" index="1" j="9"
                                                    val="53" color="#3474ea"></rect>
                                                <rect id="SvgjsRect1836" width="15.984293619791666"
                                                    height="39.714285714285715" x="159.84293619791666" y="198.57142857142858"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#90b3f3"
                                                    cx="159.84293619791666" cy="198.57142857142858"
                                                    class="apexcharts-heatmap-rect" i="1" index="1" j="10"
                                                    val="4" color="#90b3f3"></rect>
                                                <rect id="SvgjsRect1837" width="15.984293619791666"
                                                    height="39.714285714285715" x="175.82722981770831" y="198.57142857142858"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#598dee"
                                                    cx="175.82722981770831" cy="198.57142857142858"
                                                    class="apexcharts-heatmap-rect" i="1" index="1" j="11"
                                                    val="35" color="#598dee"></rect>
                                                <rect id="SvgjsRect1838" width="15.984293619791666"
                                                    height="39.714285714285715" x="191.81152343749997" y="198.57142857142858"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#4680ec"
                                                    cx="191.81152343749997" cy="198.57142857142858"
                                                    class="apexcharts-heatmap-rect" i="1" index="1" j="12"
                                                    val="50" color="#4680ec"></rect>
                                                <rect id="SvgjsRect1839" width="15.984293619791666"
                                                    height="39.714285714285715" x="207.79581705729163" y="198.57142857142858"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#7ea6f1"
                                                    cx="207.79581705729163" cy="198.57142857142858"
                                                    class="apexcharts-heatmap-rect" i="1" index="1" j="13"
                                                    val="19" color="#7ea6f1"></rect>
                                                <rect id="SvgjsRect1840" width="15.984293619791666"
                                                    height="39.714285714285715" x="223.7801106770833" y="198.57142857142858"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#90b3f3"
                                                    cx="223.7801106770833" cy="198.57142857142858"
                                                    class="apexcharts-heatmap-rect" i="1" index="1" j="14"
                                                    val="7" color="#90b3f3"></rect>
                                                <rect id="SvgjsRect1841" width="15.984293619791666"
                                                    height="39.714285714285715" x="239.76440429687494" y="198.57142857142858"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#4680ec"
                                                    cx="239.76440429687494" cy="198.57142857142858"
                                                    class="apexcharts-heatmap-rect" i="1" index="1" j="15"
                                                    val="44" color="#4680ec"></rect>
                                                <rect id="SvgjsRect1842" width="15.984293619791666"
                                                    height="39.714285714285715" x="255.7486979166666" y="198.57142857142858"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#598dee"
                                                    cx="255.7486979166666" cy="198.57142857142858"
                                                    class="apexcharts-heatmap-rect" i="1" index="1" j="16"
                                                    val="33" color="#598dee"></rect>
                                                <rect id="SvgjsRect1843" width="15.984293619791666"
                                                    height="39.714285714285715" x="271.73299153645826" y="198.57142857142858"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#4680ec"
                                                    cx="271.73299153645826" cy="198.57142857142858"
                                                    class="apexcharts-heatmap-rect" i="1" index="1" j="17"
                                                    val="49" color="#4680ec"></rect>
                                                <rect id="SvgjsRect1844" width="15.984293619791666"
                                                    height="39.714285714285715" x="287.71728515624994" y="198.57142857142858"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#90b3f3"
                                                    cx="287.71728515624994" cy="198.57142857142858"
                                                    class="apexcharts-heatmap-rect" i="1" index="1" j="18"
                                                    val="0" color="#90b3f3"></rect>
                                                <rect id="SvgjsRect1845" width="15.984293619791666"
                                                    height="39.714285714285715" x="303.70157877604163" y="198.57142857142858"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#598dee"
                                                    cx="303.70157877604163" cy="198.57142857142858"
                                                    class="apexcharts-heatmap-rect" i="1" index="1" j="19"
                                                    val="33" color="#598dee"></rect>
                                                <rect id="SvgjsRect1846" width="15.984293619791666"
                                                    height="39.714285714285715" x="319.6858723958333" y="198.57142857142858"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#3474ea"
                                                    cx="319.6858723958333" cy="198.57142857142858"
                                                    class="apexcharts-heatmap-rect" i="1" index="1" j="20"
                                                    val="55" color="#3474ea"></rect>
                                                <rect id="SvgjsRect1847" width="15.984293619791666"
                                                    height="39.714285714285715" x="335.670166015625" y="198.57142857142858"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#90b3f3"
                                                    cx="335.670166015625" cy="198.57142857142858"
                                                    class="apexcharts-heatmap-rect" i="1" index="1" j="21"
                                                    val="6" color="#90b3f3"></rect>
                                                <rect id="SvgjsRect1848" width="15.984293619791666"
                                                    height="39.714285714285715" x="351.6544596354167" y="198.57142857142858"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#4680ec"
                                                    cx="351.6544596354167" cy="198.57142857142858"
                                                    class="apexcharts-heatmap-rect" i="1" index="1" j="22"
                                                    val="49" color="#4680ec"></rect>
                                                <rect id="SvgjsRect1849" width="15.984293619791666"
                                                    height="39.714285714285715" x="367.63875325520837" y="198.57142857142858"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#3474ea"
                                                    cx="367.63875325520837" cy="198.57142857142858"
                                                    class="apexcharts-heatmap-rect" i="1" index="1" j="23"
                                                    val="54" color="#3474ea"></rect>
                                            </g>
                                            <g id="SvgjsG1850" class="apexcharts-series apexcharts-heatmap-series"
                                                seriesName="SUN" rel="1" data:realIndex="0">
                                                <rect id="SvgjsRect1851" width="15.984293619791666"
                                                    height="39.714285714285715" x="0" y="238.2857142857143" rx="2"
                                                    ry="2" opacity="1" stroke-width="4" stroke="#ffffff"
                                                    stroke-dasharray="0" fill="#6b9aef" cx="0"
                                                    cy="238.2857142857143" class="apexcharts-heatmap-rect" i="0"
                                                    index="0" j="0" val="24" color="#6b9aef"></rect>
                                                <rect id="SvgjsRect1852" width="15.984293619791666"
                                                    height="39.714285714285715" x="15.984293619791666" y="238.2857142857143"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#6b9aef"
                                                    cx="15.984293619791666" cy="238.2857142857143"
                                                    class="apexcharts-heatmap-rect" i="0" index="0" j="1"
                                                    val="26" color="#6b9aef"></rect>
                                                <rect id="SvgjsRect1853" width="15.984293619791666"
                                                    height="39.714285714285715" x="31.968587239583332" y="238.2857142857143"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#4680ec"
                                                    cx="31.968587239583332" cy="238.2857142857143"
                                                    class="apexcharts-heatmap-rect" i="0" index="0" j="2"
                                                    val="44" color="#4680ec"></rect>
                                                <rect id="SvgjsRect1854" width="15.984293619791666"
                                                    height="39.714285714285715" x="47.952880859375" y="238.2857142857143"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#6b9aef"
                                                    cx="47.952880859375" cy="238.2857142857143"
                                                    class="apexcharts-heatmap-rect" i="0" index="0" j="3"
                                                    val="25" color="#6b9aef"></rect>
                                                <rect id="SvgjsRect1855" width="15.984293619791666"
                                                    height="39.714285714285715" x="63.937174479166664" y="238.2857142857143"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#598dee"
                                                    cx="63.937174479166664" cy="238.2857142857143"
                                                    class="apexcharts-heatmap-rect" i="0" index="0" j="4"
                                                    val="33" color="#598dee"></rect>
                                                <rect id="SvgjsRect1856" width="15.984293619791666"
                                                    height="39.714285714285715" x="79.92146809895833" y="238.2857142857143"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#3474ea"
                                                    cx="79.92146809895833" cy="238.2857142857143"
                                                    class="apexcharts-heatmap-rect" i="0" index="0" j="5"
                                                    val="57" color="#3474ea"></rect>
                                                <rect id="SvgjsRect1857" width="15.984293619791666"
                                                    height="39.714285714285715" x="95.90576171875" y="238.2857142857143"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#90b3f3"
                                                    cx="95.90576171875" cy="238.2857142857143"
                                                    class="apexcharts-heatmap-rect" i="0" index="0" j="6"
                                                    val="7" color="#90b3f3"></rect>
                                                <rect id="SvgjsRect1858" width="15.984293619791666"
                                                    height="39.714285714285715" x="111.89005533854167" y="238.2857142857143"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#90b3f3"
                                                    cx="111.89005533854167" cy="238.2857142857143"
                                                    class="apexcharts-heatmap-rect" i="0" index="0" j="7"
                                                    val="1" color="#90b3f3"></rect>
                                                <rect id="SvgjsRect1859" width="15.984293619791666"
                                                    height="39.714285714285715" x="127.87434895833334" y="238.2857142857143"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#598dee"
                                                    cx="127.87434895833334" cy="238.2857142857143"
                                                    class="apexcharts-heatmap-rect" i="0" index="0" j="8"
                                                    val="37" color="#598dee"></rect>
                                                <rect id="SvgjsRect1860" width="15.984293619791666"
                                                    height="39.714285714285715" x="143.858642578125" y="238.2857142857143"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#90b3f3"
                                                    cx="143.858642578125" cy="238.2857142857143"
                                                    class="apexcharts-heatmap-rect" i="0" index="0" j="9"
                                                    val="4" color="#90b3f3"></rect>
                                                <rect id="SvgjsRect1861" width="15.984293619791666"
                                                    height="39.714285714285715" x="159.84293619791666" y="238.2857142857143"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#90b3f3"
                                                    cx="159.84293619791666" cy="238.2857142857143"
                                                    class="apexcharts-heatmap-rect" i="0" index="0" j="10"
                                                    val="10" color="#90b3f3"></rect>
                                                <rect id="SvgjsRect1862" width="15.984293619791666"
                                                    height="39.714285714285715" x="175.82722981770831" y="238.2857142857143"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#7ea6f1"
                                                    cx="175.82722981770831" cy="238.2857142857143"
                                                    class="apexcharts-heatmap-rect" i="0" index="0" j="11"
                                                    val="12" color="#7ea6f1"></rect>
                                                <rect id="SvgjsRect1863" width="15.984293619791666"
                                                    height="39.714285714285715" x="191.81152343749997" y="238.2857142857143"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#3474ea"
                                                    cx="191.81152343749997" cy="238.2857142857143"
                                                    class="apexcharts-heatmap-rect" i="0" index="0" j="12"
                                                    val="54" color="#3474ea"></rect>
                                                <rect id="SvgjsRect1864" width="15.984293619791666"
                                                    height="39.714285714285715" x="207.79581705729163" y="238.2857142857143"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#3474ea"
                                                    cx="207.79581705729163" cy="238.2857142857143"
                                                    class="apexcharts-heatmap-rect" i="0" index="0" j="13"
                                                    val="58" color="#3474ea"></rect>
                                                <rect id="SvgjsRect1865" width="15.984293619791666"
                                                    height="39.714285714285715" x="223.7801106770833" y="238.2857142857143"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#90b3f3"
                                                    cx="223.7801106770833" cy="238.2857142857143"
                                                    class="apexcharts-heatmap-rect" i="0" index="0" j="14"
                                                    val="5" color="#90b3f3"></rect>
                                                <rect id="SvgjsRect1866" width="15.984293619791666"
                                                    height="39.714285714285715" x="239.76440429687494" y="238.2857142857143"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#598dee"
                                                    cx="239.76440429687494" cy="238.2857142857143"
                                                    class="apexcharts-heatmap-rect" i="0" index="0" j="15"
                                                    val="38" color="#598dee"></rect>
                                                <rect id="SvgjsRect1867" width="15.984293619791666"
                                                    height="39.714285714285715" x="255.7486979166666" y="238.2857142857143"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#7ea6f1"
                                                    cx="255.7486979166666" cy="238.2857142857143"
                                                    class="apexcharts-heatmap-rect" i="0" index="0" j="16"
                                                    val="15" color="#7ea6f1"></rect>
                                                <rect id="SvgjsRect1868" width="15.984293619791666"
                                                    height="39.714285714285715" x="271.73299153645826" y="238.2857142857143"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#4680ec"
                                                    cx="271.73299153645826" cy="238.2857142857143"
                                                    class="apexcharts-heatmap-rect" i="0" index="0" j="17"
                                                    val="45" color="#4680ec"></rect>
                                                <rect id="SvgjsRect1869" width="15.984293619791666"
                                                    height="39.714285714285715" x="287.71728515624994" y="238.2857142857143"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#6b9aef"
                                                    cx="287.71728515624994" cy="238.2857142857143"
                                                    class="apexcharts-heatmap-rect" i="0" index="0" j="18"
                                                    val="23" color="#6b9aef"></rect>
                                                <rect id="SvgjsRect1870" width="15.984293619791666"
                                                    height="39.714285714285715" x="303.70157877604163" y="238.2857142857143"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#7ea6f1"
                                                    cx="303.70157877604163" cy="238.2857142857143"
                                                    class="apexcharts-heatmap-rect" i="0" index="0" j="19"
                                                    val="17" color="#7ea6f1"></rect>
                                                <rect id="SvgjsRect1871" width="15.984293619791666"
                                                    height="39.714285714285715" x="319.6858723958333" y="238.2857142857143"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#4680ec"
                                                    cx="319.6858723958333" cy="238.2857142857143"
                                                    class="apexcharts-heatmap-rect" i="0" index="0" j="20"
                                                    val="42" color="#4680ec"></rect>
                                                <rect id="SvgjsRect1872" width="15.984293619791666"
                                                    height="39.714285714285715" x="335.670166015625" y="238.2857142857143"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#4680ec"
                                                    cx="335.670166015625" cy="238.2857142857143"
                                                    class="apexcharts-heatmap-rect" i="0" index="0" j="21"
                                                    val="43" color="#4680ec"></rect>
                                                <rect id="SvgjsRect1873" width="15.984293619791666"
                                                    height="39.714285714285715" x="351.6544596354167" y="238.2857142857143"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#90b3f3"
                                                    cx="351.6544596354167" cy="238.2857142857143"
                                                    class="apexcharts-heatmap-rect" i="0" index="0" j="22"
                                                    val="9" color="#90b3f3"></rect>
                                                <rect id="SvgjsRect1874" width="15.984293619791666"
                                                    height="39.714285714285715" x="367.63875325520837" y="238.2857142857143"
                                                    rx="2" ry="2" opacity="1" stroke-width="4"
                                                    stroke="#ffffff" stroke-dasharray="0" fill="#90b3f3"
                                                    cx="367.63875325520837" cy="238.2857142857143"
                                                    class="apexcharts-heatmap-rect" i="0" index="0" j="23"
                                                    val="2" color="#90b3f3"></rect>
                                            </g>
                                        </g>
                                        <line id="SvgjsLine1932" x1="0" y1="0" x2="383.623046875"
                                            y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1933" x1="0" y1="0" x2="383.623046875"
                                            y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG1934" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG1935" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG1936" class="apexcharts-point-annotations"></g>
                                    </g>
                                    <rect id="SvgjsRect1695" width="0" height="0" x="0" y="0" rx="0"
                                        ry="0" opacity="1" stroke-width="0" stroke="none"
                                        stroke-dasharray="0" fill="#fefefe"></rect>
                                    <g id="SvgjsG1901" class="apexcharts-yaxis" rel="0"
                                        transform="translate(21.376953125, 0)">
                                        <g id="SvgjsG1902" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1903"
                                                font-family="Helvetica, Arial, sans-serif" x="20" y="31.842857142857145"
                                                text-anchor="end" dominant-baseline="auto" font-size="13px"
                                                font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1904"></tspan>
                                                <title></title>
                                            </text><text id="SvgjsText1905" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="71.55714285714286" text-anchor="end" dominant-baseline="auto"
                                                font-size="13px" font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1906">SAT</tspan>
                                                <title>SAT</title>
                                            </text><text id="SvgjsText1907" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="111.27142857142857" text-anchor="end" dominant-baseline="auto"
                                                font-size="13px" font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1908">FRI</tspan>
                                                <title>FRI</title>
                                            </text><text id="SvgjsText1909" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="150.9857142857143" text-anchor="end" dominant-baseline="auto"
                                                font-size="13px" font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1910">THU</tspan>
                                                <title>THU</title>
                                            </text><text id="SvgjsText1911" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="190.70000000000002" text-anchor="end" dominant-baseline="auto"
                                                font-size="13px" font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1912">WED</tspan>
                                                <title>WED</title>
                                            </text><text id="SvgjsText1913" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="230.41428571428574" text-anchor="end" dominant-baseline="auto"
                                                font-size="13px" font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1914">TUE</tspan>
                                                <title>TUE</title>
                                            </text><text id="SvgjsText1915" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="270.1285714285715" text-anchor="end" dominant-baseline="auto"
                                                font-size="13px" font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1916">MON</tspan>
                                                <title>MON</title>
                                            </text><text id="SvgjsText1917" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="309.8428571428572" text-anchor="end" dominant-baseline="auto"
                                                font-size="13px" font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1918">SUN</tspan>
                                                <title>SUN</title>
                                            </text></g>
                                    </g>
                                    <g id="SvgjsG1691" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(0, 143, 251);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(0, 227, 150);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 3;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(254, 176, 25);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 4;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(255, 69, 96);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 5;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(119, 93, 208);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 6;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(0, 143, 251);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 7;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(0, 227, 150);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                    <div class="apexcharts-xaxistooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                </div>
                                <div
                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                    <div class="apexcharts-yaxistooltip-text"></div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 504px; height: 375px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Heat map Chart -->

            <!-- Radial bar Chart -->
            <div class="col-md-6 col-12 mb-4">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title mb-0">Statistics</h5>
                        <div class="dropdown">
                            <button type="button" class="btn dropdown-toggle p-0" data-bs-toggle="dropdown"
                                aria-expanded="false"><i class="bx bx-calendar"></i></button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Today</a>
                                </li>
                                <li><a href="javascript:void(0);"
                                        class="dropdown-item d-flex align-items-center">Yesterday</a></li>
                                <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 7
                                        Days</a></li>
                                <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 30
                                        Days</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Current
                                        Month</a></li>
                                <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last
                                        Month</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body" style="position: relative;">
                        <div id="radialBarChart" style="min-height: 347.7px;">
                            <div id="apexcharts4xgna9og" class="apexcharts-canvas apexcharts4xgna9og apexcharts-theme-light"
                                style="width: 455px; height: 347.7px;"><svg id="SvgjsSvg1937" width="455"
                                    height="347.7" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent;">
                                    <foreignObject x="0" y="0" width="455" height="347.7">
                                        <div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom"
                                            xmlns="http://www.w3.org/1999/xhtml"
                                            style="inset: auto 0px 1px; position: absolute; max-height: 190px;">
                                            <div class="apexcharts-legend-series" rel="1" seriesname="Comments"
                                                data:collapsed="false" style="margin: 2px 5px;"><span
                                                    class="apexcharts-legend-marker" rel="1" data:collapsed="false"
                                                    style="background: rgb(254, 232, 2) !important; color: rgb(254, 232, 2); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                    class="apexcharts-legend-text" rel="1" i="0"
                                                    data:default-text="Comments" data:collapsed="false"
                                                    style="color: rgb(105, 122, 141); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Comments</span>
                                            </div>
                                            <div class="apexcharts-legend-series" rel="2" seriesname="Replies"
                                                data:collapsed="false" style="margin: 2px 5px;"><span
                                                    class="apexcharts-legend-marker" rel="2" data:collapsed="false"
                                                    style="background: rgb(63, 208, 189) !important; color: rgb(63, 208, 189); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                    class="apexcharts-legend-text" rel="2" i="1"
                                                    data:default-text="Replies" data:collapsed="false"
                                                    style="color: rgb(105, 122, 141); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Replies</span>
                                            </div>
                                            <div class="apexcharts-legend-series" rel="3" seriesname="Shares"
                                                data:collapsed="false" style="margin: 2px 5px;"><span
                                                    class="apexcharts-legend-marker" rel="3" data:collapsed="false"
                                                    style="background: rgb(43, 155, 244) !important; color: rgb(43, 155, 244); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                    class="apexcharts-legend-text" rel="3" i="2"
                                                    data:default-text="Shares" data:collapsed="false"
                                                    style="color: rgb(105, 122, 141); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Shares</span>
                                            </div>
                                        </div>
                                        <style type="text/css">
                                            .apexcharts-legend {
                                                display: flex;
                                                overflow: auto;
                                                padding: 0 10px;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom,
                                            .apexcharts-legend.apx-legend-position-top {
                                                flex-wrap: wrap
                                            }

                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                flex-direction: column;
                                                bottom: 0;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                justify-content: flex-start;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                justify-content: center;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                justify-content: flex-end;
                                            }

                                            .apexcharts-legend-series {
                                                cursor: pointer;
                                                line-height: normal;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                                            .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                                display: flex;
                                                align-items: center;
                                            }

                                            .apexcharts-legend-text {
                                                position: relative;
                                                font-size: 14px;
                                            }

                                            .apexcharts-legend-text *,
                                            .apexcharts-legend-marker * {
                                                pointer-events: none;
                                            }

                                            .apexcharts-legend-marker {
                                                position: relative;
                                                display: inline-block;
                                                cursor: pointer;
                                                margin-right: 3px;
                                                border-style: solid;
                                            }

                                            .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                            .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                                display: inline-block;
                                            }

                                            .apexcharts-legend-series.apexcharts-no-click {
                                                cursor: auto;
                                            }

                                            .apexcharts-legend .apexcharts-hidden-zero-series,
                                            .apexcharts-legend .apexcharts-hidden-null-series {
                                                display: none !important;
                                            }

                                            .apexcharts-inactive-legend {
                                                opacity: 0.45;
                                            }
                                        </style>
                                    </foreignObject>
                                    <g id="SvgjsG1939" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(12, -25)">
                                        <defs id="SvgjsDefs1938">
                                            <clipPath id="gridRectMask4xgna9og">
                                                <rect id="SvgjsRect1941" width="439" height="364" x="-3" y="-1"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMask4xgna9og"></clipPath>
                                            <clipPath id="nonForecastMask4xgna9og"></clipPath>
                                            <clipPath id="gridRectMarkerMask4xgna9og">
                                                <rect id="SvgjsRect1942" width="437" height="366" x="-2" y="-2"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                        </defs>
                                        <g id="SvgjsG1943" class="apexcharts-radialbar">
                                            <g id="SvgjsG1944">
                                                <g id="SvgjsG1945" class="apexcharts-tracks">
                                                    <g id="SvgjsG1946" class="apexcharts-radialbar-track apexcharts-track"
                                                        rel="1">
                                                        <path id="apexcharts-radialbarTrack-0"
                                                            d="M 216.5 43.79634146341462 A 137.20365853658538 137.20365853658538 0 1 1 216.4760534442491 43.79634355314582"
                                                            fill="none" fill-opacity="1" stroke="#8897aa1a"
                                                            stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="15.120170731707319" stroke-dasharray="0"
                                                            class="apexcharts-radialbar-area"
                                                            data:pathOrig="M 216.5 43.79634146341462 A 137.20365853658538 137.20365853658538 0 1 1 216.4760534442491 43.79634355314582">
                                                        </path>
                                                    </g>
                                                    <g id="SvgjsG1948" class="apexcharts-radialbar-track apexcharts-track"
                                                        rel="2">
                                                        <path id="apexcharts-radialbarTrack-1"
                                                            d="M 216.5 69.3841463414634 A 111.6158536585366 111.6158536585366 0 1 1 216.48051935866124 69.38414804147007"
                                                            fill="none" fill-opacity="1" stroke="#8897aa1a"
                                                            stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="15.120170731707319" stroke-dasharray="0"
                                                            class="apexcharts-radialbar-area"
                                                            data:pathOrig="M 216.5 69.3841463414634 A 111.6158536585366 111.6158536585366 0 1 1 216.48051935866124 69.38414804147007">
                                                        </path>
                                                    </g>
                                                    <g id="SvgjsG1950" class="apexcharts-radialbar-track apexcharts-track"
                                                        rel="3">
                                                        <path id="apexcharts-radialbarTrack-2"
                                                            d="M 216.5 94.97195121951219 A 86.02804878048781 86.02804878048781 0 1 1 216.48498527307336 94.9719525297943"
                                                            fill="none" fill-opacity="1" stroke="#8897aa1a"
                                                            stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="15.120170731707319" stroke-dasharray="0"
                                                            class="apexcharts-radialbar-area"
                                                            data:pathOrig="M 216.5 94.97195121951219 A 86.02804878048781 86.02804878048781 0 1 1 216.48498527307336 94.9719525297943">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1952">
                                                    <g id="SvgjsG1957" class="apexcharts-series apexcharts-radial-series"
                                                        seriesName="Comments" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath1958"
                                                            d="M 216.5 43.79634146341462 A 137.20365853658538 137.20365853658538 0 1 1 86.0115664892453 138.60173782177776"
                                                            fill="none" fill-opacity="0.85"
                                                            stroke="rgba(254,232,2,0.85)" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="15.587804878048782"
                                                            stroke-dasharray="0"
                                                            class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                            data:angle="288" data:value="80" index="0" j="0"
                                                            data:pathOrig="M 216.5 43.79634146341462 A 137.20365853658538 137.20365853658538 0 1 1 86.0115664892453 138.60173782177776">
                                                        </path>
                                                    </g>
                                                    <g id="SvgjsG1959" class="apexcharts-series apexcharts-radial-series"
                                                        seriesName="Replies" rel="2" data:realIndex="1">
                                                        <path id="SvgjsPath1960"
                                                            d="M 216.5 69.3841463414634 A 111.6158536585366 111.6158536585366 0 0 1 216.5 292.6158536585366"
                                                            fill="none" fill-opacity="0.85"
                                                            stroke="rgba(63,208,189,0.85)" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="15.587804878048782"
                                                            stroke-dasharray="0"
                                                            class="apexcharts-radialbar-area apexcharts-radialbar-slice-1"
                                                            data:angle="180" data:value="50" index="0" j="1"
                                                            data:pathOrig="M 216.5 69.3841463414634 A 111.6158536585366 111.6158536585366 0 0 1 216.5 292.6158536585366">
                                                        </path>
                                                    </g>
                                                    <g id="SvgjsG1961" class="apexcharts-series apexcharts-radial-series"
                                                        seriesName="Shares" rel="3" data:realIndex="2">
                                                        <path id="SvgjsPath1962"
                                                            d="M 216.5 94.97195121951219 A 86.02804878048781 86.02804878048781 0 0 1 286.0981534563316 231.56601835666822"
                                                            fill="none" fill-opacity="0.85"
                                                            stroke="rgba(43,155,244,0.85)" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="15.587804878048782"
                                                            stroke-dasharray="0"
                                                            class="apexcharts-radialbar-area apexcharts-radialbar-slice-2"
                                                            data:angle="126" data:value="35" index="0" j="2"
                                                            data:pathOrig="M 216.5 94.97195121951219 A 86.02804878048781 86.02804878048781 0 0 1 286.0981534563316 231.56601835666822">
                                                        </path>
                                                    </g>
                                                    <circle id="SvgjsCircle1953" r="73.46796341463417" cx="216.5"
                                                        cy="181" class="apexcharts-radialbar-hollow"
                                                        fill="transparent"></circle>
                                                    <g id="SvgjsG1954" class="apexcharts-datalabels-group"
                                                        transform="translate(0, 0) scale(1)" style="opacity: 1;"><text
                                                            id="SvgjsText1955" font-family="Helvetica, Arial, sans-serif"
                                                            x="216.5" y="181" text-anchor="middle" dominant-baseline="auto"
                                                            font-size="1.3rem" font-weight="400" fill="#566a7f"
                                                            class="apexcharts-text apexcharts-datalabel-label"
                                                            style="font-family: Helvetica, Arial, sans-serif; fill: rgb(86, 106, 127);">Comments</text><text
                                                            id="SvgjsText1956" font-family="Public Sans" x="216.5" y="213"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="1.2rem" font-weight="400" fill="#697a8d"
                                                            class="apexcharts-text apexcharts-datalabel-value"
                                                            style="font-family: &quot;Public Sans&quot;;">80%</text></g>
                                                </g>
                                            </g>
                                        </g>
                                        <line id="SvgjsLine1963" x1="0" y1="0" x2="433"
                                            y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1964" x1="0" y1="0" x2="433"
                                            y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs-hidden"></line>
                                    </g>
                                    <g id="SvgjsG1940" class="apexcharts-annotations"></g>
                                </svg></div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 504px; height: 373px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Radial bar Chart -->

            <!-- Radar Chart -->
            <div class="col-md-6 col-12 mb-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">Mobile Comparison</h5>
                        <div class="dropdown">
                            <button class="btn px-0" type="button" id="heatChartDd1" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="heatChartDd1">
                                <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body" style="position: relative;">
                        <div id="radarChart" style="min-height: 365px;">
                            <div id="apexchartsjoai5m4x" class="apexcharts-canvas apexchartsjoai5m4x apexcharts-theme-light"
                                style="width: 455px; height: 350px;"><svg id="SvgjsSvg1965" width="455"
                                    height="350" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent;">
                                    <foreignObject x="0" y="0" width="455" height="350">
                                        <div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom"
                                            xmlns="http://www.w3.org/1999/xhtml"
                                            style="inset: auto 0px 1px; position: absolute; max-height: 175px;">
                                            <div class="apexcharts-legend-series" rel="1" seriesname="iPhonex12"
                                                data:collapsed="false" style="margin: 2px 5px;"><span
                                                    class="apexcharts-legend-marker" rel="1" data:collapsed="false"
                                                    style="background: rgb(254, 232, 2) !important; color: rgb(254, 232, 2); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                    class="apexcharts-legend-text" rel="1" i="0"
                                                    data:default-text="iPhone%2012" data:collapsed="false"
                                                    style="color: rgb(105, 122, 141); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">iPhone
                                                    12</span></div>
                                            <div class="apexcharts-legend-series" rel="2" seriesname="Samsungxs20"
                                                data:collapsed="false" style="margin: 2px 5px;"><span
                                                    class="apexcharts-legend-marker" rel="2" data:collapsed="false"
                                                    style="background: rgb(130, 107, 248) !important; color: rgb(130, 107, 248); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                    class="apexcharts-legend-text" rel="2" i="1"
                                                    data:default-text="Samsung%20s20" data:collapsed="false"
                                                    style="color: rgb(105, 122, 141); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Samsung
                                                    s20</span></div>
                                        </div>
                                        <style type="text/css">
                                            .apexcharts-legend {
                                                display: flex;
                                                overflow: auto;
                                                padding: 0 10px;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom,
                                            .apexcharts-legend.apx-legend-position-top {
                                                flex-wrap: wrap
                                            }

                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                flex-direction: column;
                                                bottom: 0;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                justify-content: flex-start;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                justify-content: center;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                justify-content: flex-end;
                                            }

                                            .apexcharts-legend-series {
                                                cursor: pointer;
                                                line-height: normal;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                                            .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                                display: flex;
                                                align-items: center;
                                            }

                                            .apexcharts-legend-text {
                                                position: relative;
                                                font-size: 14px;
                                            }

                                            .apexcharts-legend-text *,
                                            .apexcharts-legend-marker * {
                                                pointer-events: none;
                                            }

                                            .apexcharts-legend-marker {
                                                position: relative;
                                                display: inline-block;
                                                cursor: pointer;
                                                margin-right: 3px;
                                                border-style: solid;
                                            }

                                            .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                            .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                                display: inline-block;
                                            }

                                            .apexcharts-legend-series.apexcharts-no-click {
                                                cursor: auto;
                                            }

                                            .apexcharts-legend .apexcharts-hidden-zero-series,
                                            .apexcharts-legend .apexcharts-hidden-null-series {
                                                display: none !important;
                                            }

                                            .apexcharts-inactive-legend {
                                                opacity: 0.45;
                                            }
                                        </style>
                                    </foreignObject>
                                    <g id="SvgjsG1967" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(12, 10)">
                                        <defs id="SvgjsDefs1966">
                                            <clipPath id="gridRectMaskjoai5m4x">
                                                <rect id="SvgjsRect1970" width="414.437744140625" height="302" x="-2"
                                                    y="0" rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMaskjoai5m4x"></clipPath>
                                            <clipPath id="nonForecastMaskjoai5m4x"></clipPath>
                                            <clipPath id="gridRectMarkerMaskjoai5m4x">
                                                <rect id="SvgjsRect1971" width="414.437744140625" height="306" x="-2"
                                                    y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                        </defs>
                                        <g id="SvgjsG2039" class="apexcharts-grid">
                                            <g id="SvgjsG2040" class="apexcharts-gridlines-horizontal"
                                                style="display: none;">
                                                <line id="SvgjsLine2042" x1="0" y1="0"
                                                    x2="410.437744140625" y2="0" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2043" x1="0" y1="60.4"
                                                    x2="410.437744140625" y2="60.4" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2044" x1="0" y1="120.8"
                                                    x2="410.437744140625" y2="120.8" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2045" x1="0" y1="181.2"
                                                    x2="410.437744140625" y2="181.2" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2046" x1="0" y1="241.6"
                                                    x2="410.437744140625" y2="241.6" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2047" x1="0" y1="302"
                                                    x2="410.437744140625" y2="302" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG2041" class="apexcharts-gridlines-vertical"
                                                style="display: none;"></g>
                                            <line id="SvgjsLine2049" x1="0" y1="302" x2="410.437744140625"
                                                y2="302" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                            <line id="SvgjsLine2048" x1="0" y1="1" x2="0"
                                                y2="302" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                        </g>
                                        <g id="SvgjsG1972" class="apexcharts-radar-series apexcharts-plot-series"
                                            transform="translate(205.2188720703125, 151)">
                                            <polygon id="SvgjsPolygon2024"
                                                points="0,-136.1669456845238 96.28457066698707,-96.28457066698708 136.1669456845238,-8.337820709111178e-15 96.28457066698708,96.28457066698707 1.6675641418222356e-14,136.1669456845238 -96.28457066698707,96.2845706669871 -136.1669456845238,2.5013462127333532e-14 -96.2845706669871,-96.28457066698705 "
                                                fill="none" stroke="#eceef1" stroke-width="1"></polygon>
                                            <polygon id="SvgjsPolygon2025"
                                                points="0,-108.93355654761903 77.02765653358965,-77.02765653358966 108.93355654761903,-6.6702565672889425e-15 77.02765653358966,77.02765653358965 1.3340513134577885e-14,108.93355654761903 -77.02765653358965,77.02765653358968 -108.93355654761903,2.0010769701866825e-14 -77.02765653358968,-77.02765653358964 "
                                                fill="none" stroke="#eceef1" stroke-width="1"></polygon>
                                            <polygon id="SvgjsPolygon2026"
                                                points="0,-81.70016741071427 57.77074240019223,-57.77074240019224 81.70016741071427,-5.002692425466706e-15 57.77074240019224,57.77074240019223 1.0005384850933413e-14,81.70016741071427 -57.77074240019223,57.77074240019225 -81.70016741071427,1.5008077276400118e-14 -57.77074240019225,-57.770742400192226 "
                                                fill="none" stroke="#eceef1" stroke-width="1"></polygon>
                                            <polygon id="SvgjsPolygon2027"
                                                points="0,-54.46677827380952 38.513828266794825,-38.51382826679483 54.46677827380952,-3.3351282836444713e-15 38.51382826679483,38.513828266794825 6.6702565672889425e-15,54.46677827380952 -38.513828266794825,38.51382826679484 -54.46677827380952,1.0005384850933413e-14 -38.51382826679484,-38.51382826679482 "
                                                fill="none" stroke="#eceef1" stroke-width="1"></polygon>
                                            <polygon id="SvgjsPolygon2028"
                                                points="0,-27.23338913690476 19.256914133397412,-19.256914133397416 27.23338913690476,-1.6675641418222356e-15 19.256914133397416,19.256914133397412 3.3351282836444713e-15,27.23338913690476 -19.256914133397412,19.25691413339742 -27.23338913690476,5.002692425466706e-15 -19.25691413339742,-19.25691413339741 "
                                                fill="none" stroke="#eceef1" stroke-width="1"></polygon>
                                            <polygon id="SvgjsPolygon2029" points="0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0 "
                                                fill="none" stroke="#eceef1" stroke-width="1"></polygon>
                                            <line id="SvgjsLine2016" x1="0" y1="-136.1669456845238"
                                                x2="0" y2="0" stroke="#eceef1" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                            <line id="SvgjsLine2017" x1="96.28457066698707" y1="-96.28457066698708"
                                                x2="0" y2="0" stroke="#eceef1" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                            <line id="SvgjsLine2018" x1="136.1669456845238" y1="-8.337820709111178e-15"
                                                x2="0" y2="0" stroke="#eceef1" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                            <line id="SvgjsLine2019" x1="96.28457066698708" y1="96.28457066698707"
                                                x2="0" y2="0" stroke="#eceef1" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                            <line id="SvgjsLine2020" x1="1.6675641418222356e-14" y1="136.1669456845238"
                                                x2="0" y2="0" stroke="#eceef1" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                            <line id="SvgjsLine2021" x1="-96.28457066698707" y1="96.2845706669871"
                                                x2="0" y2="0" stroke="#eceef1" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                            <line id="SvgjsLine2022" x1="-136.1669456845238" y1="2.5013462127333532e-14"
                                                x2="0" y2="0" stroke="#eceef1" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                            <line id="SvgjsLine2023" x1="-96.2845706669871" y1="-96.28457066698705"
                                                x2="0" y2="0" stroke="#eceef1" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                            <g id="SvgjsG2030" class="apexcharts-xaxis"><text id="SvgjsText2031"
                                                    font-family="Public Sans" x="0" y="-146.1669456845238"
                                                    text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                                    font-weight="400" fill="#a1acb8" class="apexcharts-datalabel"
                                                    cx="0" cy="-146.1669456845238"
                                                    style="font-family: &quot;Public Sans&quot;;">Battery</text><text
                                                    id="SvgjsText2032" font-family="Public Sans" x="106.28457066698707"
                                                    y="-96.28457066698708" text-anchor="start" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                    class="apexcharts-datalabel" cx="106.28457066698707"
                                                    cy="-96.28457066698708"
                                                    style="font-family: &quot;Public Sans&quot;;">Brand</text><text
                                                    id="SvgjsText2033" font-family="Public Sans" x="146.1669456845238"
                                                    y="-8.337820709111178e-15" text-anchor="start" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                    class="apexcharts-datalabel" cx="146.1669456845238"
                                                    cy="-8.337820709111178e-15"
                                                    style="font-family: &quot;Public Sans&quot;;">Camera</text><text
                                                    id="SvgjsText2034" font-family="Public Sans" x="106.28457066698708"
                                                    y="96.28457066698707" text-anchor="start" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                    class="apexcharts-datalabel" cx="106.28457066698708"
                                                    cy="96.28457066698707"
                                                    style="font-family: &quot;Public Sans&quot;;">Memory</text><text
                                                    id="SvgjsText2035" font-family="Public Sans" x="1.6675641418222356e-14"
                                                    y="146.1669456845238" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                    class="apexcharts-datalabel" cx="1.6675641418222356e-14"
                                                    cy="146.1669456845238"
                                                    style="font-family: &quot;Public Sans&quot;;">Storage</text><text
                                                    id="SvgjsText2036" font-family="Public Sans" x="-106.28457066698707"
                                                    y="96.2845706669871" text-anchor="end" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                    class="apexcharts-datalabel" cx="-106.28457066698707"
                                                    cy="96.2845706669871"
                                                    style="font-family: &quot;Public Sans&quot;;">Display</text><text
                                                    id="SvgjsText2037" font-family="Public Sans" x="-146.1669456845238"
                                                    y="2.5013462127333532e-14" text-anchor="end" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                    class="apexcharts-datalabel" cx="-146.1669456845238"
                                                    cy="2.5013462127333532e-14"
                                                    style="font-family: &quot;Public Sans&quot;;">OS</text><text
                                                    id="SvgjsText2038" font-family="Public Sans" x="-106.2845706669871"
                                                    y="-96.28457066698705" text-anchor="end" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                    class="apexcharts-datalabel" cx="-106.2845706669871"
                                                    cy="-96.28457066698705"
                                                    style="font-family: &quot;Public Sans&quot;;">Price</text></g>
                                            <g id="SvgjsG1974" class="apexcharts-series" data:longestSeries="true"
                                                seriesName="iPhonex12" rel="1" data:realIndex="0">
                                                <path id="SvgjsPath1977"
                                                    d="M0 -55.82844773065475C0 -55.82844773065475 0 -55.82844773065475 0 -55.82844773065475C0 -55.82844773065475 61.62212522687172 -61.622125226871724 61.62212522687172 -61.622125226871724C61.62212522687172 -61.622125226871724 110.29522600446428 -6.753634774380055e-15 110.29522600446428 -6.753634774380055e-15C110.29522600446428 -6.753634774380055e-15 57.77074240019224 57.77074240019223 57.77074240019224 57.77074240019223C57.77074240019224 57.77074240019223 7.00376939565339e-15 57.19011718749999 7.00376939565339e-15 57.19011718749999C7.00376939565339e-15 57.19011718749999 -40.439519680134566 40.43951968013458 -40.439519680134566 40.43951968013458C-40.439519680134566 40.43951968013458 -44.935092075892854 8.254442502020066e-15 -44.935092075892854 8.254442502020066e-15C-44.935092075892854 8.254442502020066e-15 -22.145451253407032 -22.14545125340702 -22.145451253407032 -22.14545125340702C-22.145451253407032 -22.14545125340702 0 -55.82844773065475 0 -55.82844773065475 "
                                                    fill="none" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-radar" index="0"
                                                    pathTo="M 0 -55.82844773065475L 0 -55.82844773065475L 61.62212522687172 -61.622125226871724L 110.29522600446428 -6.753634774380055e-15L 57.77074240019224 57.77074240019223L 7.00376939565339e-15 57.19011718749999L -40.439519680134566 40.43951968013458L -44.935092075892854 8.254442502020066e-15L -22.145451253407032 -22.14545125340702Z"
                                                    pathFrom="M 0 0"></path>
                                                <path id="SvgjsPath1978"
                                                    d="M0 -55.82844773065475C0 -55.82844773065475 0 -55.82844773065475 0 -55.82844773065475C0 -55.82844773065475 61.62212522687172 -61.622125226871724 61.62212522687172 -61.622125226871724C61.62212522687172 -61.622125226871724 110.29522600446428 -6.753634774380055e-15 110.29522600446428 -6.753634774380055e-15C110.29522600446428 -6.753634774380055e-15 57.77074240019224 57.77074240019223 57.77074240019224 57.77074240019223C57.77074240019224 57.77074240019223 7.00376939565339e-15 57.19011718749999 7.00376939565339e-15 57.19011718749999C7.00376939565339e-15 57.19011718749999 -40.439519680134566 40.43951968013458 -40.439519680134566 40.43951968013458C-40.439519680134566 40.43951968013458 -44.935092075892854 8.254442502020066e-15 -44.935092075892854 8.254442502020066e-15C-44.935092075892854 8.254442502020066e-15 -22.145451253407032 -22.14545125340702 -22.145451253407032 -22.14545125340702C-22.145451253407032 -22.14545125340702 0 -55.82844773065475 0 -55.82844773065475 "
                                                    fill="rgba(254,232,2,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-radar" index="0"
                                                    pathTo="M 0 -55.82844773065475L 0 -55.82844773065475L 61.62212522687172 -61.622125226871724L 110.29522600446428 -6.753634774380055e-15L 57.77074240019224 57.77074240019223L 7.00376939565339e-15 57.19011718749999L -40.439519680134566 40.43951968013458L -44.935092075892854 8.254442502020066e-15L -22.145451253407032 -22.14545125340702Z"
                                                    pathFrom="M 0 0"></path>
                                                <g id="SvgjsG1975" class="apexcharts-series-markers-wrap">
                                                    <g id="SvgjsG1980" class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle1979" r="0" cx="0"
                                                            cy="-55.82844773065475" class="apexcharts-marker"
                                                            stroke="#ffffff" fill="#fee802" fill-opacity="1"
                                                            stroke-width="1" stroke-opacity="1" rel="0" j="0"
                                                            index="0" default-marker-size="0"></circle>
                                                    </g>
                                                    <g id="SvgjsG1982" class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle1981" r="0" cx="61.62212522687172"
                                                            cy="-61.622125226871724" class="apexcharts-marker"
                                                            stroke="#ffffff" fill="#fee802" fill-opacity="1"
                                                            stroke-width="1" stroke-opacity="1" rel="1" j="1"
                                                            index="0" default-marker-size="0"></circle>
                                                    </g>
                                                    <g id="SvgjsG1984" class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle1983" r="0" cx="110.29522600446428"
                                                            cy="-6.753634774380055e-15" class="apexcharts-marker"
                                                            stroke="#ffffff" fill="#fee802" fill-opacity="1"
                                                            stroke-width="1" stroke-opacity="1" rel="2" j="2"
                                                            index="0" default-marker-size="0"></circle>
                                                    </g>
                                                    <g id="SvgjsG1986" class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle1985" r="0" cx="57.77074240019224"
                                                            cy="57.77074240019223" class="apexcharts-marker"
                                                            stroke="#ffffff" fill="#fee802" fill-opacity="1"
                                                            stroke-width="1" stroke-opacity="1" rel="3" j="3"
                                                            index="0" default-marker-size="0"></circle>
                                                    </g>
                                                    <g id="SvgjsG1988" class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle1987" r="0" cx="7.00376939565339e-15"
                                                            cy="57.19011718749999" class="apexcharts-marker"
                                                            stroke="#ffffff" fill="#fee802" fill-opacity="1"
                                                            stroke-width="1" stroke-opacity="1" rel="4" j="4"
                                                            index="0" default-marker-size="0"></circle>
                                                    </g>
                                                    <g id="SvgjsG1990" class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle1989" r="0" cx="-40.439519680134566"
                                                            cy="40.43951968013458" class="apexcharts-marker"
                                                            stroke="#ffffff" fill="#fee802" fill-opacity="1"
                                                            stroke-width="1" stroke-opacity="1" rel="5" j="5"
                                                            index="0" default-marker-size="0"></circle>
                                                    </g>
                                                    <g id="SvgjsG1992" class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle1991" r="0" cx="-44.935092075892854"
                                                            cy="8.254442502020066e-15" class="apexcharts-marker"
                                                            stroke="#ffffff" fill="#fee802" fill-opacity="1"
                                                            stroke-width="1" stroke-opacity="1" rel="6" j="6"
                                                            index="0" default-marker-size="0"></circle>
                                                    </g>
                                                    <g id="SvgjsG1994" class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle1993" r="0" cx="-22.145451253407032"
                                                            cy="-22.14545125340702" class="apexcharts-marker"
                                                            stroke="#ffffff" fill="#fee802" fill-opacity="1"
                                                            stroke-width="1" stroke-opacity="1" rel="7" j="7"
                                                            index="0" default-marker-size="0"></circle>
                                                    </g>
                                                    <g class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle2055" r="0" cx="0" cy="0"
                                                            class="apexcharts-marker w788euxq4" stroke="#ffffff"
                                                            fill="#fee802" fill-opacity="1" stroke-width="1"
                                                            stroke-opacity="1" default-marker-size="0"></circle>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1995" class="apexcharts-series" data:longestSeries="true"
                                                seriesName="Samsungxs20" rel="2" data:realIndex="1">
                                                <path id="SvgjsPath1998"
                                                    d="M0 -88.50851469494047C0 -88.50851469494047 0 -88.50851469494047 0 -88.50851469494047C0 -88.50851469494047 44.29090250681405 -44.29090250681406 44.29090250681405 -44.29090250681406C44.29090250681405 -44.29090250681406 57.19011718749999 -3.501884697826695e-15 57.19011718749999 -3.501884697826695e-15C57.19011718749999 -3.501884697826695e-15 24.07114266674677 24.071142666746766 24.07114266674677 24.071142666746766C24.07114266674677 24.071142666746766 9.671872022568967e-15 78.9768284970238 9.671872022568967e-15 78.9768284970238C9.671872022568967e-15 78.9768284970238 -60.65927952020185 60.65927952020186 -60.65927952020185 60.65927952020186C-60.65927952020185 60.65927952020186 -103.48687872023808 1.9010231216773485e-14 -103.48687872023808 1.9010231216773485e-14C-103.48687872023808 1.9010231216773485e-14 -41.40236538680445 -41.40236538680443 -41.40236538680445 -41.40236538680443C-41.40236538680445 -41.40236538680443 0 -88.50851469494047 0 -88.50851469494047 "
                                                    fill="none" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-radar" index="1"
                                                    pathTo="M 0 -88.50851469494047L 0 -88.50851469494047L 44.29090250681405 -44.29090250681406L 57.19011718749999 -3.501884697826695e-15L 24.07114266674677 24.071142666746766L 9.671872022568967e-15 78.9768284970238L -60.65927952020185 60.65927952020186L -103.48687872023808 1.9010231216773485e-14L -41.40236538680445 -41.40236538680443Z"
                                                    pathFrom="M 0 0"></path>
                                                <path id="SvgjsPath1999"
                                                    d="M0 -88.50851469494047C0 -88.50851469494047 0 -88.50851469494047 0 -88.50851469494047C0 -88.50851469494047 44.29090250681405 -44.29090250681406 44.29090250681405 -44.29090250681406C44.29090250681405 -44.29090250681406 57.19011718749999 -3.501884697826695e-15 57.19011718749999 -3.501884697826695e-15C57.19011718749999 -3.501884697826695e-15 24.07114266674677 24.071142666746766 24.07114266674677 24.071142666746766C24.07114266674677 24.071142666746766 9.671872022568967e-15 78.9768284970238 9.671872022568967e-15 78.9768284970238C9.671872022568967e-15 78.9768284970238 -60.65927952020185 60.65927952020186 -60.65927952020185 60.65927952020186C-60.65927952020185 60.65927952020186 -103.48687872023808 1.9010231216773485e-14 -103.48687872023808 1.9010231216773485e-14C-103.48687872023808 1.9010231216773485e-14 -41.40236538680445 -41.40236538680443 -41.40236538680445 -41.40236538680443C-41.40236538680445 -41.40236538680443 0 -88.50851469494047 0 -88.50851469494047 "
                                                    fill="rgba(130,107,248,0.8)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-radar" index="1"
                                                    pathTo="M 0 -88.50851469494047L 0 -88.50851469494047L 44.29090250681405 -44.29090250681406L 57.19011718749999 -3.501884697826695e-15L 24.07114266674677 24.071142666746766L 9.671872022568967e-15 78.9768284970238L -60.65927952020185 60.65927952020186L -103.48687872023808 1.9010231216773485e-14L -41.40236538680445 -41.40236538680443Z"
                                                    pathFrom="M 0 0"></path>
                                                <g id="SvgjsG1996" class="apexcharts-series-markers-wrap">
                                                    <g id="SvgjsG2001" class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle2000" r="0" cx="0"
                                                            cy="-88.50851469494047" class="apexcharts-marker"
                                                            stroke="#ffffff" fill="#826bf8" fill-opacity="1"
                                                            stroke-width="1" stroke-opacity="1" rel="0" j="0"
                                                            index="1" default-marker-size="0"></circle>
                                                    </g>
                                                    <g id="SvgjsG2003" class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle2002" r="0" cx="44.29090250681405"
                                                            cy="-44.29090250681406" class="apexcharts-marker"
                                                            stroke="#ffffff" fill="#826bf8" fill-opacity="1"
                                                            stroke-width="1" stroke-opacity="1" rel="1" j="1"
                                                            index="1" default-marker-size="0"></circle>
                                                    </g>
                                                    <g id="SvgjsG2005" class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle2004" r="0" cx="57.19011718749999"
                                                            cy="-3.501884697826695e-15" class="apexcharts-marker"
                                                            stroke="#ffffff" fill="#826bf8" fill-opacity="1"
                                                            stroke-width="1" stroke-opacity="1" rel="2" j="2"
                                                            index="1" default-marker-size="0"></circle>
                                                    </g>
                                                    <g id="SvgjsG2007" class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle2006" r="0" cx="24.07114266674677"
                                                            cy="24.071142666746766" class="apexcharts-marker"
                                                            stroke="#ffffff" fill="#826bf8" fill-opacity="1"
                                                            stroke-width="1" stroke-opacity="1" rel="3" j="3"
                                                            index="1" default-marker-size="0"></circle>
                                                    </g>
                                                    <g id="SvgjsG2009" class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle2008" r="0" cx="9.671872022568967e-15"
                                                            cy="78.9768284970238" class="apexcharts-marker"
                                                            stroke="#ffffff" fill="#826bf8" fill-opacity="1"
                                                            stroke-width="1" stroke-opacity="1" rel="4" j="4"
                                                            index="1" default-marker-size="0"></circle>
                                                    </g>
                                                    <g id="SvgjsG2011" class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle2010" r="0" cx="-60.65927952020185"
                                                            cy="60.65927952020186" class="apexcharts-marker"
                                                            stroke="#ffffff" fill="#826bf8" fill-opacity="1"
                                                            stroke-width="1" stroke-opacity="1" rel="5" j="5"
                                                            index="1" default-marker-size="0"></circle>
                                                    </g>
                                                    <g id="SvgjsG2013" class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle2012" r="0" cx="-103.48687872023808"
                                                            cy="1.9010231216773485e-14" class="apexcharts-marker"
                                                            stroke="#ffffff" fill="#826bf8" fill-opacity="1"
                                                            stroke-width="1" stroke-opacity="1" rel="6" j="6"
                                                            index="1" default-marker-size="0"></circle>
                                                    </g>
                                                    <g id="SvgjsG2015" class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle2014" r="0" cx="-41.40236538680445"
                                                            cy="-41.40236538680443" class="apexcharts-marker"
                                                            stroke="#ffffff" fill="#826bf8" fill-opacity="1"
                                                            stroke-width="1" stroke-opacity="1" rel="7" j="7"
                                                            index="1" default-marker-size="0"></circle>
                                                    </g>
                                                    <g class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle2056" r="0" cx="0" cy="0"
                                                            class="apexcharts-marker w4kpes11k" stroke="#ffffff"
                                                            fill="#826bf8" fill-opacity="1" stroke-width="1"
                                                            stroke-opacity="1" default-marker-size="0"></circle>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1973" class="apexcharts-yaxis"></g>
                                            <g id="SvgjsG1976" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            <g id="SvgjsG1997" class="apexcharts-datalabels" data:realIndex="1"></g>
                                        </g>
                                        <line id="SvgjsLine2050" x1="0" y1="0" x2="410.437744140625"
                                            y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine2051" x1="0" y1="0" x2="410.437744140625"
                                            y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG2052" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG2053" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG2054" class="apexcharts-point-annotations"></g>
                                    </g>
                                    <g id="SvgjsG1968" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                    <div class="apexcharts-tooltip-title"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(254, 232, 2);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(130, 107, 248);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                    <div class="apexcharts-yaxistooltip-text"></div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 504px; height: 390px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Radar Chart -->

            <!-- Donut Chart -->
            <div class="col-md-6 col-12 mb-4">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div>
                            <h5 class="card-title mb-0">Expense Ratio</h5>
                            <small class="text-muted">Spending on various categories</small>
                        </div>
                        <div class="dropdown d-none d-sm-flex">
                            <button type="button" class="btn dropdown-toggle px-0" data-bs-toggle="dropdown"
                                aria-expanded="false"><i class="bx bx-calendar"></i></button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Today</a>
                                </li>
                                <li><a href="javascript:void(0);"
                                        class="dropdown-item d-flex align-items-center">Yesterday</a></li>
                                <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 7
                                        Days</a></li>
                                <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 30
                                        Days</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Current
                                        Month</a></li>
                                <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last
                                        Month</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body" style="position: relative;">
                        <div id="donutChart" style="min-height: 357.7px;">
                            <div id="apexcharts65oda2llf"
                                class="apexcharts-canvas apexcharts65oda2llf apexcharts-theme-light"
                                style="width: 455px; height: 357.7px;"><svg id="SvgjsSvg2057" width="455"
                                    height="357.70000000000005" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent;">
                                    <foreignObject x="0" y="0" width="455" height="357.70000000000005">
                                        <div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom"
                                            xmlns="http://www.w3.org/1999/xhtml"
                                            style="inset: auto 0px 1px; position: absolute; max-height: 195px;">
                                            <div class="apexcharts-legend-series" rel="1" seriesname="Operational"
                                                data:collapsed="false" style="margin: 3px 10px;"><span
                                                    class="apexcharts-legend-marker" rel="1" data:collapsed="false"
                                                    style="background: rgb(254, 232, 2) !important; color: rgb(254, 232, 2); height: 12px; width: 12px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                    class="apexcharts-legend-text" rel="1" i="0"
                                                    data:default-text="Operational" data:collapsed="false"
                                                    style="color: rgb(105, 122, 141); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Operational</span>
                                            </div>
                                            <div class="apexcharts-legend-series" rel="2" seriesname="Networking"
                                                data:collapsed="false" style="margin: 3px 10px;"><span
                                                    class="apexcharts-legend-marker" rel="2" data:collapsed="false"
                                                    style="background: rgb(43, 155, 244) !important; color: rgb(43, 155, 244); height: 12px; width: 12px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                    class="apexcharts-legend-text" rel="2" i="1"
                                                    data:default-text="Networking" data:collapsed="false"
                                                    style="color: rgb(105, 122, 141); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Networking</span>
                                            </div>
                                            <div class="apexcharts-legend-series" rel="3" seriesname="Hiring"
                                                data:collapsed="false" style="margin: 3px 10px;"><span
                                                    class="apexcharts-legend-marker" rel="3" data:collapsed="false"
                                                    style="background: rgb(130, 107, 248) !important; color: rgb(130, 107, 248); height: 12px; width: 12px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                    class="apexcharts-legend-text" rel="3" i="2"
                                                    data:default-text="Hiring" data:collapsed="false"
                                                    style="color: rgb(105, 122, 141); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Hiring</span>
                                            </div>
                                            <div class="apexcharts-legend-series" rel="4" seriesname="RxD"
                                                data:collapsed="false" style="margin: 3px 10px;"><span
                                                    class="apexcharts-legend-marker" rel="4" data:collapsed="false"
                                                    style="background: rgb(63, 208, 189) !important; color: rgb(63, 208, 189); height: 12px; width: 12px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                    class="apexcharts-legend-text" rel="4" i="3"
                                                    data:default-text="R%26D" data:collapsed="false"
                                                    style="color: rgb(105, 122, 141); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">R&amp;D</span>
                                            </div>
                                        </div>
                                        <style type="text/css">
                                            .apexcharts-legend {
                                                display: flex;
                                                overflow: auto;
                                                padding: 0 10px;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom,
                                            .apexcharts-legend.apx-legend-position-top {
                                                flex-wrap: wrap
                                            }

                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                flex-direction: column;
                                                bottom: 0;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                justify-content: flex-start;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                justify-content: center;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                justify-content: flex-end;
                                            }

                                            .apexcharts-legend-series {
                                                cursor: pointer;
                                                line-height: normal;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                                            .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                                display: flex;
                                                align-items: center;
                                            }

                                            .apexcharts-legend-text {
                                                position: relative;
                                                font-size: 14px;
                                            }

                                            .apexcharts-legend-text *,
                                            .apexcharts-legend-marker * {
                                                pointer-events: none;
                                            }

                                            .apexcharts-legend-marker {
                                                position: relative;
                                                display: inline-block;
                                                cursor: pointer;
                                                margin-right: 3px;
                                                border-style: solid;
                                            }

                                            .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                            .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                                display: inline-block;
                                            }

                                            .apexcharts-legend-series.apexcharts-no-click {
                                                cursor: auto;
                                            }

                                            .apexcharts-legend .apexcharts-hidden-zero-series,
                                            .apexcharts-legend .apexcharts-hidden-null-series {
                                                display: none !important;
                                            }

                                            .apexcharts-inactive-legend {
                                                opacity: 0.45;
                                            }
                                        </style>
                                    </foreignObject>
                                    <g id="SvgjsG2059" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(12, 0)">
                                        <defs id="SvgjsDefs2058">
                                            <clipPath id="gridRectMask65oda2llf">
                                                <rect id="SvgjsRect2061" width="439" height="327" x="-3" y="-1"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMask65oda2llf"></clipPath>
                                            <clipPath id="nonForecastMask65oda2llf"></clipPath>
                                            <clipPath id="gridRectMarkerMask65oda2llf">
                                                <rect id="SvgjsRect2062" width="437" height="329" x="-2" y="-2"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <filter id="SvgjsFilter2071" filterUnits="userSpaceOnUse" width="200%"
                                                height="200%" x="-50%" y="-50%">
                                                <feFlood id="SvgjsFeFlood2072" flood-color="#000000" flood-opacity="0.45"
                                                    result="SvgjsFeFlood2072Out" in="SourceGraphic"></feFlood>
                                                <feComposite id="SvgjsFeComposite2073" in="SvgjsFeFlood2072Out"
                                                    in2="SourceAlpha" operator="in" result="SvgjsFeComposite2073Out">
                                                </feComposite>
                                                <feOffset id="SvgjsFeOffset2074" dx="1" dy="1"
                                                    result="SvgjsFeOffset2074Out" in="SvgjsFeComposite2073Out"></feOffset>
                                                <feGaussianBlur id="SvgjsFeGaussianBlur2075" stdDeviation="1 "
                                                    result="SvgjsFeGaussianBlur2075Out" in="SvgjsFeOffset2074Out">
                                                </feGaussianBlur>
                                                <feMerge id="SvgjsFeMerge2076" result="SvgjsFeMerge2076Out"
                                                    in="SourceGraphic">
                                                    <feMergeNode id="SvgjsFeMergeNode2077" in="SvgjsFeGaussianBlur2075Out">
                                                    </feMergeNode>
                                                    <feMergeNode id="SvgjsFeMergeNode2078" in="[object Arguments]">
                                                    </feMergeNode>
                                                </feMerge>
                                                <feBlend id="SvgjsFeBlend2079" in="SourceGraphic"
                                                    in2="SvgjsFeMerge2076Out" mode="normal" result="SvgjsFeBlend2079Out">
                                                </feBlend>
                                            </filter>
                                            <filter id="SvgjsFilter2084" filterUnits="userSpaceOnUse" width="200%"
                                                height="200%" x="-50%" y="-50%">
                                                <feFlood id="SvgjsFeFlood2085" flood-color="#000000" flood-opacity="0.45"
                                                    result="SvgjsFeFlood2085Out" in="SourceGraphic"></feFlood>
                                                <feComposite id="SvgjsFeComposite2086" in="SvgjsFeFlood2085Out"
                                                    in2="SourceAlpha" operator="in" result="SvgjsFeComposite2086Out">
                                                </feComposite>
                                                <feOffset id="SvgjsFeOffset2087" dx="1" dy="1"
                                                    result="SvgjsFeOffset2087Out" in="SvgjsFeComposite2086Out"></feOffset>
                                                <feGaussianBlur id="SvgjsFeGaussianBlur2088" stdDeviation="1 "
                                                    result="SvgjsFeGaussianBlur2088Out" in="SvgjsFeOffset2087Out">
                                                </feGaussianBlur>
                                                <feMerge id="SvgjsFeMerge2089" result="SvgjsFeMerge2089Out"
                                                    in="SourceGraphic">
                                                    <feMergeNode id="SvgjsFeMergeNode2090" in="SvgjsFeGaussianBlur2088Out">
                                                    </feMergeNode>
                                                    <feMergeNode id="SvgjsFeMergeNode2091" in="[object Arguments]">
                                                    </feMergeNode>
                                                </feMerge>
                                                <feBlend id="SvgjsFeBlend2092" in="SourceGraphic"
                                                    in2="SvgjsFeMerge2089Out" mode="normal" result="SvgjsFeBlend2092Out">
                                                </feBlend>
                                            </filter>
                                            <filter id="SvgjsFilter2097" filterUnits="userSpaceOnUse" width="200%"
                                                height="200%" x="-50%" y="-50%">
                                                <feFlood id="SvgjsFeFlood2098" flood-color="#000000" flood-opacity="0.45"
                                                    result="SvgjsFeFlood2098Out" in="SourceGraphic"></feFlood>
                                                <feComposite id="SvgjsFeComposite2099" in="SvgjsFeFlood2098Out"
                                                    in2="SourceAlpha" operator="in" result="SvgjsFeComposite2099Out">
                                                </feComposite>
                                                <feOffset id="SvgjsFeOffset2100" dx="1" dy="1"
                                                    result="SvgjsFeOffset2100Out" in="SvgjsFeComposite2099Out"></feOffset>
                                                <feGaussianBlur id="SvgjsFeGaussianBlur2101" stdDeviation="1 "
                                                    result="SvgjsFeGaussianBlur2101Out" in="SvgjsFeOffset2100Out">
                                                </feGaussianBlur>
                                                <feMerge id="SvgjsFeMerge2102" result="SvgjsFeMerge2102Out"
                                                    in="SourceGraphic">
                                                    <feMergeNode id="SvgjsFeMergeNode2103" in="SvgjsFeGaussianBlur2101Out">
                                                    </feMergeNode>
                                                    <feMergeNode id="SvgjsFeMergeNode2104" in="[object Arguments]">
                                                    </feMergeNode>
                                                </feMerge>
                                                <feBlend id="SvgjsFeBlend2105" in="SourceGraphic"
                                                    in2="SvgjsFeMerge2102Out" mode="normal" result="SvgjsFeBlend2105Out">
                                                </feBlend>
                                            </filter>
                                            <filter id="SvgjsFilter2110" filterUnits="userSpaceOnUse" width="200%"
                                                height="200%" x="-50%" y="-50%">
                                                <feFlood id="SvgjsFeFlood2111" flood-color="#000000" flood-opacity="0.45"
                                                    result="SvgjsFeFlood2111Out" in="SourceGraphic"></feFlood>
                                                <feComposite id="SvgjsFeComposite2112" in="SvgjsFeFlood2111Out"
                                                    in2="SourceAlpha" operator="in" result="SvgjsFeComposite2112Out">
                                                </feComposite>
                                                <feOffset id="SvgjsFeOffset2113" dx="1" dy="1"
                                                    result="SvgjsFeOffset2113Out" in="SvgjsFeComposite2112Out"></feOffset>
                                                <feGaussianBlur id="SvgjsFeGaussianBlur2114" stdDeviation="1 "
                                                    result="SvgjsFeGaussianBlur2114Out" in="SvgjsFeOffset2113Out">
                                                </feGaussianBlur>
                                                <feMerge id="SvgjsFeMerge2115" result="SvgjsFeMerge2115Out"
                                                    in="SourceGraphic">
                                                    <feMergeNode id="SvgjsFeMergeNode2116" in="SvgjsFeGaussianBlur2114Out">
                                                    </feMergeNode>
                                                    <feMergeNode id="SvgjsFeMergeNode2117" in="[object Arguments]">
                                                    </feMergeNode>
                                                </feMerge>
                                                <feBlend id="SvgjsFeBlend2118" in="SourceGraphic"
                                                    in2="SvgjsFeMerge2115Out" mode="normal" result="SvgjsFeBlend2118Out">
                                                </feBlend>
                                            </filter>
                                        </defs>
                                        <g id="SvgjsG2063" class="apexcharts-pie">
                                            <g id="SvgjsG2064" transform="translate(0, 0) scale(1)">
                                                <circle id="SvgjsCircle2065" r="99.14878048780488" cx="216.5"
                                                    cy="162.5" fill="transparent"></circle>
                                                <g id="SvgjsG2066" class="apexcharts-slices">
                                                    <g id="SvgjsG2067" class="apexcharts-series apexcharts-pie-series"
                                                        seriesName="Operational" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath2068"
                                                            d="M 216.5 9.963414634146318 A 152.53658536585368 152.53658536585368 0 0 1 286.39630894837137 298.0799242899486 L 261.9326008164414 250.62695078846656 A 99.14878048780488 99.14878048780488 0 0 0 216.5 63.351219512195115 L 216.5 9.963414634146318 z"
                                                            fill="rgba(254,232,2,1)" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                            class="apexcharts-pie-area apexcharts-donut-slice-0"
                                                            index="0" j="0" data:angle="152.72727272727272"
                                                            data:startAngle="0" data:strokeWidth="0" data:value="42"
                                                            data:pathOrig="M 216.5 9.963414634146318 A 152.53658536585368 152.53658536585368 0 0 1 286.39630894837137 298.0799242899486 L 261.9326008164414 250.62695078846656 A 99.14878048780488 99.14878048780488 0 0 0 216.5 63.351219512195115 L 216.5 9.963414634146318 z">
                                                        </path>
                                                    </g>
                                                    <g id="SvgjsG2080" class="apexcharts-series apexcharts-pie-series"
                                                        seriesName="Networking" rel="2" data:realIndex="1">
                                                        <path id="SvgjsPath2081"
                                                            d="M 286.39630894837137 298.0799242899486 A 152.53658536585368 152.53658536585368 0 0 1 221.3396706365101 314.9597896601083 L 219.64578591373157 261.5988632790704 A 99.14878048780488 99.14878048780488 0 0 0 261.9326008164414 250.62695078846656 L 286.39630894837137 298.0799242899486 z"
                                                            fill="rgba(43,155,244,1)" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                            class="apexcharts-pie-area apexcharts-donut-slice-1"
                                                            index="0" j="1" data:angle="25.454545454545467"
                                                            data:startAngle="152.72727272727272" data:strokeWidth="0"
                                                            data:value="7"
                                                            data:pathOrig="M 286.39630894837137 298.0799242899486 A 152.53658536585368 152.53658536585368 0 0 1 221.3396706365101 314.9597896601083 L 219.64578591373157 261.5988632790704 A 99.14878048780488 99.14878048780488 0 0 0 261.9326008164414 250.62695078846656 L 286.39630894837137 298.0799242899486 z">
                                                        </path>
                                                    </g>
                                                    <g id="SvgjsG2093" class="apexcharts-series apexcharts-pie-series"
                                                        seriesName="Hiring" rel="3" data:realIndex="2">
                                                        <path id="SvgjsPath2094"
                                                            d="M 221.3396706365101 314.9597896601083 A 152.53658536585368 152.53658536585368 0 0 1 63.982614768965476 164.92013994689967 L 117.36369959982757 164.0730909654848 A 99.14878048780488 99.14878048780488 0 0 0 219.64578591373157 261.5988632790704 L 221.3396706365101 314.9597896601083 z"
                                                            fill="rgba(130,107,248,1)" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                            class="apexcharts-pie-area apexcharts-donut-slice-2"
                                                            index="0" j="2" data:angle="90.90909090909093"
                                                            data:startAngle="178.1818181818182" data:strokeWidth="0"
                                                            data:value="25"
                                                            data:pathOrig="M 221.3396706365101 314.9597896601083 A 152.53658536585368 152.53658536585368 0 0 1 63.982614768965476 164.92013994689967 L 117.36369959982757 164.0730909654848 A 99.14878048780488 99.14878048780488 0 0 0 219.64578591373157 261.5988632790704 L 221.3396706365101 314.9597896601083 z">
                                                        </path>
                                                    </g>
                                                    <g id="SvgjsG2106" class="apexcharts-series apexcharts-pie-series"
                                                        seriesName="RxD" rel="4" data:realIndex="3">
                                                        <path id="SvgjsPath2107"
                                                            d="M 63.982614768965476 164.92013994689967 A 152.53658536585368 152.53658536585368 0 0 1 216.4733773436913 9.963416957411368 L 216.48269527339934 63.35122102231739 A 99.14878048780488 99.14878048780488 0 0 0 117.36369959982757 164.0730909654848 L 63.982614768965476 164.92013994689967 z"
                                                            fill="rgba(63,208,189,1)" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                            class="apexcharts-pie-area apexcharts-donut-slice-3"
                                                            index="0" j="3" data:angle="90.90909090909088"
                                                            data:startAngle="269.0909090909091" data:strokeWidth="0"
                                                            data:value="25"
                                                            data:pathOrig="M 63.982614768965476 164.92013994689967 A 152.53658536585368 152.53658536585368 0 0 1 216.4733773436913 9.963416957411368 L 216.48269527339934 63.35122102231739 A 99.14878048780488 99.14878048780488 0 0 0 117.36369959982757 164.0730909654848 L 63.982614768965476 164.92013994689967 z">
                                                        </path>
                                                    </g>
                                                    <g id="SvgjsG2069" class="apexcharts-datalabels"><text
                                                            id="SvgjsText2070" font-family="Helvetica, Arial, sans-serif"
                                                            x="338.79537505716416" y="132.83146303152034" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px" font-weight="600"
                                                            fill="#ffffff" class="apexcharts-text apexcharts-pie-label"
                                                            filter="url(#SvgjsFilter2071)"
                                                            style="font-family: Helvetica, Arial, sans-serif;">42%</text></g>
                                                    <g id="SvgjsG2082" class="apexcharts-datalabels"><text
                                                            id="SvgjsText2083" font-family="Helvetica, Arial, sans-serif"
                                                            x="248.10513651853998" y="284.3092615192578" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px" font-weight="600"
                                                            fill="#ffffff" class="apexcharts-text apexcharts-pie-label"
                                                            filter="url(#SvgjsFilter2084)"
                                                            style="font-family: Helvetica, Arial, sans-serif;">7%</text></g>
                                                    <g id="SvgjsG2095" class="apexcharts-datalabels"><text
                                                            id="SvgjsText2096" font-family="Helvetica, Arial, sans-serif"
                                                            x="129.65860576359677" y="253.57663308061012" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px" font-weight="600"
                                                            fill="#ffffff" class="apexcharts-text apexcharts-pie-label"
                                                            filter="url(#SvgjsFilter2097)"
                                                            style="font-family: Helvetica, Arial, sans-serif;">25%</text></g>
                                                    <g id="SvgjsG2108" class="apexcharts-datalabels"><text
                                                            id="SvgjsText2109" font-family="Helvetica, Arial, sans-serif"
                                                            x="126.81265336737043" y="74.22451812524022" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px" font-weight="600"
                                                            fill="#ffffff" class="apexcharts-text apexcharts-pie-label"
                                                            filter="url(#SvgjsFilter2110)"
                                                            style="font-family: Helvetica, Arial, sans-serif;">25%</text></g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG2119" class="apexcharts-datalabels-group"
                                                transform="translate(0, 0) scale(1)" style="opacity: 1;"><text
                                                    id="SvgjsText2120" font-family="Helvetica, Arial, sans-serif" x="216.5"
                                                    y="152.5" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="1.5rem" font-weight="400" fill="#566a7f"
                                                    class="apexcharts-text apexcharts-datalabel-label"
                                                    style="font-family: Helvetica, Arial, sans-serif; fill: rgb(86, 106, 127);">Operational</text><text
                                                    id="SvgjsText2121" font-family="Public Sans" x="216.5" y="188.5"
                                                    text-anchor="middle" dominant-baseline="auto" font-size="1.2rem"
                                                    font-weight="400" fill="#697a8d"
                                                    class="apexcharts-text apexcharts-datalabel-value"
                                                    style="font-family: &quot;Public Sans&quot;;">42%</text></g>
                                        </g>
                                        <line id="SvgjsLine2122" x1="0" y1="0" x2="433"
                                            y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine2123" x1="0" y1="0" x2="433"
                                            y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs-hidden"></line>
                                    </g>
                                    <g id="SvgjsG2060" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-tooltip apexcharts-theme-dark"
                                    style="left: 180.094px; top: -4.29688px;">
                                    <div class="apexcharts-tooltip-series-group apexcharts-active"
                                        style="order: 1; display: flex; background-color: rgb(254, 232, 2);"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(254, 232, 2); display: none;"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label">Operational: </span><span
                                                    class="apexcharts-tooltip-text-y-value">42</span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group"
                                        style="order: 2; display: none; background-color: rgb(254, 232, 2);"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(254, 232, 2); display: none;"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label">Operational: </span><span
                                                    class="apexcharts-tooltip-text-y-value">42</span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group"
                                        style="order: 3; display: none; background-color: rgb(254, 232, 2);"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(254, 232, 2); display: none;"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label">Operational: </span><span
                                                    class="apexcharts-tooltip-text-y-value">42</span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group"
                                        style="order: 4; display: none; background-color: rgb(254, 232, 2);"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(254, 232, 2); display: none;"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label">Operational: </span><span
                                                    class="apexcharts-tooltip-text-y-value">42</span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 504px; height: 383px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Donut Chart -->

        </div>
    </div>
</main>
@endsection
