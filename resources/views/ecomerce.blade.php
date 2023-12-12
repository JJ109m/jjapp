@extends('layouts.admin')

@section('content')
    <div class="main-content">
        <div class="contents">
            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="row">
                    <div class="col-lg-6 d-flex flex-column">
                        <div class="row flex-grow">
                            <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                                <div class="card card-rounded">
                                    <div class="card-body">
                                        <div class="d-sm-flex justify-content-between align-items-start">
                                            <div>
                                                <h4 class="card-title card-title-dash">Comparacion Ingresos y Ventas</h4>
                                            </div>
                                        </div>
                                        <div class="chartjs-wrapper mt-4" style="height: 300px;">
                                            <canvas id="grafica"
                                                style="display: block; width: 100%; height: 100%; box-sizing: border-box;"
                                                class="chartjs-render-monitor"></canvas>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex flex-column">
                        <div class="row flex-grow">
                            <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                                <div class="card card-rounded">
                                    <div class="card-body">
                                        <div class="d-sm-flex justify-content-between align-items-start">
                                            <div>
                                                <h4 class="card-title card-title-dash">Estado de Ventas</h4>
                                            </div>
                                        </div>
                                        <div class="chartjs-wrapper mt-4" style="height: 300px;">
                                            <canvas id="graficoVentas"
                                                style="display: block; width: 100%; height: 100%; box-sizing: border-box;"
                                                class="chartjs-render-monitor"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-lg-4 mb-4">
                        <div class="card">
                            <div class="d-flex align-items-end row">
                                <div class="col-8">
                                    <div class="card-body">
                                        <h6 class="card-title mb-1 text-nowrap">Congratulations Katie!</h6>
                                        <small class="d-block mb-3 text-nowrap">Best seller of the month</small>

                                        <h5 class="card-title text-primary mb-1">$48.9k</h5>
                                        <small class="d-block mb-4 pb-1 text-muted">78% of target</small>

                                        <a href="javascript:;" class="btn btn-sm btn-primary">View sales</a>
                                    </div>
                                </div>
                                <div class="col-4 pt-3 ps-0">
                                    <img src="../../assets/img/illustrations/prize-light.png" width="90" height="140"
                                        class="rounded-start" alt="View Sales">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- New Visitors & Activity -->
                    <div class="col-lg-8 mb-4">
                        <div class="card">
                            <div class="card-body row g-4">
                                <div class="col-md-6 pe-md-4 card-separator">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <h5 class="mb-0">New Visitors</h5>
                                        <small>Last Week</small>
                                    </div>
                                    <div class="d-flex justify-content-between" style="position: relative;">
                                        <div class="mt-auto">
                                            <h2 class="mb-2">23%</h2>
                                            <small class="text-danger text-nowrap fw-semibold"><i
                                                    class="bx bx-down-arrow-alt"></i>
                                                -13.24%</small>
                                        </div>
                                        <div id="visitorsChart" style="min-height: 120px;">
                                            <div id="apexchartsi2au6q0j"
                                                class="apexcharts-canvas apexchartsi2au6q0j apexcharts-theme-light"
                                                style="width: 200px; height: 120px;"><svg id="SvgjsSvg1626" width="200"
                                                    height="120" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                    xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                    style="background: transparent;">
                                                    <g id="SvgjsG1628" class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(22, 5)">
                                                        <defs id="SvgjsDefs1627">
                                                            <linearGradient id="SvgjsLinearGradient1631" x1="0"
                                                                y1="0" x2="0" y2="1">
                                                                <stop id="SvgjsStop1632" stop-opacity="0.4"
                                                                    stop-color="rgba(216,227,240,0.4)" offset="0">
                                                                </stop>
                                                                <stop id="SvgjsStop1633" stop-opacity="0.5"
                                                                    stop-color="rgba(190,209,230,0.5)" offset="1">
                                                                </stop>
                                                                <stop id="SvgjsStop1634" stop-opacity="0.5"
                                                                    stop-color="rgba(190,209,230,0.5)" offset="1">
                                                                </stop>
                                                            </linearGradient>
                                                            <clipPath id="gridRectMaski2au6q0j">
                                                                <rect id="SvgjsRect1636" width="172"
                                                                    height="87.72999999999999" x="-2"
                                                                    y="0" rx="0" ry="0"
                                                                    opacity="1" stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMaski2au6q0j"></clipPath>
                                                            <clipPath id="nonForecastMaski2au6q0j"></clipPath>
                                                            <clipPath id="gridRectMarkerMaski2au6q0j">
                                                                <rect id="SvgjsRect1637" width="172"
                                                                    height="91.72999999999999" x="-2"
                                                                    y="-2" rx="0" ry="0"
                                                                    opacity="1" stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                        </defs>
                                                        <rect id="SvgjsRect1635" width="14.4"
                                                            height="87.72999999999999" x="0" y="0"
                                                            rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke-dasharray="3"
                                                            fill="url(#SvgjsLinearGradient1631)"
                                                            class="apexcharts-xcrosshairs" y2="87.72999999999999"
                                                            filter="none" fill-opacity="0.9"></rect>
                                                        <g id="SvgjsG1656" class="apexcharts-xaxis"
                                                            transform="translate(0, 0)">
                                                            <g id="SvgjsG1657" class="apexcharts-xaxis-texts-g"
                                                                transform="translate(0, -4)"><text id="SvgjsText1659"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="12" y="116.72999999999999"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1660">M</tspan>
                                                                    <title>M</title>
                                                                </text><text id="SvgjsText1662"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="36" y="116.72999999999999"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1663">T</tspan>
                                                                    <title>T</title>
                                                                </text><text id="SvgjsText1665"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="60" y="116.72999999999999"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1666">W</tspan>
                                                                    <title>W</title>
                                                                </text><text id="SvgjsText1668"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="84" y="116.72999999999999"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1669">T</tspan>
                                                                    <title>T</title>
                                                                </text><text id="SvgjsText1671"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="108" y="116.72999999999999"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1672">F</tspan>
                                                                    <title>F</title>
                                                                </text><text id="SvgjsText1674"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="132" y="116.72999999999999"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1675">S</tspan>
                                                                    <title>S</title>
                                                                </text><text id="SvgjsText1677"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="156" y="116.72999999999999"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1678">S</tspan>
                                                                    <title>S</title>
                                                                </text></g>
                                                        </g>
                                                        <g id="SvgjsG1681" class="apexcharts-grid">
                                                            <g id="SvgjsG1682" class="apexcharts-gridlines-horizontal"
                                                                style="display: none;">
                                                                <line id="SvgjsLine1684" x1="0" y1="0"
                                                                    x2="168" y2="0" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1685" x1="0" y1="17.546"
                                                                    x2="168" y2="17.546" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1686" x1="0" y1="35.092"
                                                                    x2="168" y2="35.092" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1687" x1="0" y1="52.638"
                                                                    x2="168" y2="52.638" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1688" x1="0" y1="70.184"
                                                                    x2="168" y2="70.184" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1689" x1="0"
                                                                    y1="87.72999999999999" x2="168"
                                                                    y2="87.72999999999999" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                            </g>
                                                            <g id="SvgjsG1683" class="apexcharts-gridlines-vertical"
                                                                style="display: none;"></g>
                                                            <line id="SvgjsLine1691" x1="0"
                                                                y1="87.72999999999999" x2="168"
                                                                y2="87.72999999999999" stroke="transparent"
                                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            <line id="SvgjsLine1690" x1="0" y1="1"
                                                                x2="0" y2="87.72999999999999"
                                                                stroke="transparent" stroke-dasharray="0"
                                                                stroke-linecap="butt"></line>
                                                        </g>
                                                        <g id="SvgjsG1638"
                                                            class="apexcharts-bar-series apexcharts-plot-series">
                                                            <g id="SvgjsG1639" class="apexcharts-series" rel="1"
                                                                seriesName="seriesx1" data:realIndex="0">
                                                                <path id="SvgjsPath1643"
                                                                    d="M 4.8 78.72999999999999L 4.8 61.63799999999999Q 4.8 52.63799999999999 13.8 52.63799999999999L 10.2 52.63799999999999Q 19.2 52.63799999999999 19.2 61.63799999999999L 19.2 61.63799999999999L 19.2 78.72999999999999Q 19.2 87.72999999999999 10.2 87.72999999999999L 13.8 87.72999999999999Q 4.8 87.72999999999999 4.8 78.72999999999999z"
                                                                    fill="#666ee81a" fill-opacity="1" stroke-opacity="1"
                                                                    stroke-linecap="round" stroke-width="0"
                                                                    stroke-dasharray="0" class="apexcharts-bar-area"
                                                                    index="0" clip-path="url(#gridRectMaski2au6q0j)"
                                                                    pathTo="M 4.8 78.72999999999999L 4.8 61.63799999999999Q 4.8 52.63799999999999 13.8 52.63799999999999L 10.2 52.63799999999999Q 19.2 52.63799999999999 19.2 61.63799999999999L 19.2 61.63799999999999L 19.2 78.72999999999999Q 19.2 87.72999999999999 10.2 87.72999999999999L 13.8 87.72999999999999Q 4.8 87.72999999999999 4.8 78.72999999999999z"
                                                                    pathFrom="M 4.8 78.72999999999999L 4.8 78.72999999999999L 19.2 78.72999999999999L 19.2 78.72999999999999L 19.2 78.72999999999999L 19.2 78.72999999999999L 19.2 78.72999999999999L 4.8 78.72999999999999"
                                                                    cy="52.63799999999999" cx="28.8" j="0"
                                                                    val="40" barHeight="35.092" barWidth="14.4">
                                                                </path>
                                                                <path id="SvgjsPath1645"
                                                                    d="M 28.8 78.72999999999999L 28.8 13.386499999999998Q 28.8 4.386499999999998 37.8 4.386499999999998L 34.2 4.386499999999998Q 43.2 4.386499999999998 43.2 13.386499999999998L 43.2 13.386499999999998L 43.2 78.72999999999999Q 43.2 87.72999999999999 34.2 87.72999999999999L 37.8 87.72999999999999Q 28.8 87.72999999999999 28.8 78.72999999999999z"
                                                                    fill="#666ee81a" fill-opacity="1" stroke-opacity="1"
                                                                    stroke-linecap="round" stroke-width="0"
                                                                    stroke-dasharray="0" class="apexcharts-bar-area"
                                                                    index="0" clip-path="url(#gridRectMaski2au6q0j)"
                                                                    pathTo="M 28.8 78.72999999999999L 28.8 13.386499999999998Q 28.8 4.386499999999998 37.8 4.386499999999998L 34.2 4.386499999999998Q 43.2 4.386499999999998 43.2 13.386499999999998L 43.2 13.386499999999998L 43.2 78.72999999999999Q 43.2 87.72999999999999 34.2 87.72999999999999L 37.8 87.72999999999999Q 28.8 87.72999999999999 28.8 78.72999999999999z"
                                                                    pathFrom="M 28.8 78.72999999999999L 28.8 78.72999999999999L 43.2 78.72999999999999L 43.2 78.72999999999999L 43.2 78.72999999999999L 43.2 78.72999999999999L 43.2 78.72999999999999L 28.8 78.72999999999999"
                                                                    cy="4.386499999999998" cx="52.8" j="1"
                                                                    val="95" barHeight="83.34349999999999"
                                                                    barWidth="14.4">
                                                                </path>
                                                                <path id="SvgjsPath1647"
                                                                    d="M 52.8 78.72999999999999L 52.8 44.09199999999999Q 52.8 35.09199999999999 61.8 35.09199999999999L 58.2 35.09199999999999Q 67.2 35.09199999999999 67.2 44.09199999999999L 67.2 44.09199999999999L 67.2 78.72999999999999Q 67.2 87.72999999999999 58.2 87.72999999999999L 61.8 87.72999999999999Q 52.8 87.72999999999999 52.8 78.72999999999999z"
                                                                    fill="#666ee81a" fill-opacity="1" stroke-opacity="1"
                                                                    stroke-linecap="round" stroke-width="0"
                                                                    stroke-dasharray="0" class="apexcharts-bar-area"
                                                                    index="0" clip-path="url(#gridRectMaski2au6q0j)"
                                                                    pathTo="M 52.8 78.72999999999999L 52.8 44.09199999999999Q 52.8 35.09199999999999 61.8 35.09199999999999L 58.2 35.09199999999999Q 67.2 35.09199999999999 67.2 44.09199999999999L 67.2 44.09199999999999L 67.2 78.72999999999999Q 67.2 87.72999999999999 58.2 87.72999999999999L 61.8 87.72999999999999Q 52.8 87.72999999999999 52.8 78.72999999999999z"
                                                                    pathFrom="M 52.8 78.72999999999999L 52.8 78.72999999999999L 67.2 78.72999999999999L 67.2 78.72999999999999L 67.2 78.72999999999999L 67.2 78.72999999999999L 67.2 78.72999999999999L 52.8 78.72999999999999"
                                                                    cy="35.09199999999999" cx="76.8" j="2"
                                                                    val="60" barHeight="52.638" barWidth="14.4">
                                                                </path>
                                                                <path id="SvgjsPath1649"
                                                                    d="M 76.8 78.72999999999999L 76.8 57.25149999999999Q 76.8 48.25149999999999 85.8 48.25149999999999L 82.2 48.25149999999999Q 91.2 48.25149999999999 91.2 57.25149999999999L 91.2 57.25149999999999L 91.2 78.72999999999999Q 91.2 87.72999999999999 82.2 87.72999999999999L 85.8 87.72999999999999Q 76.8 87.72999999999999 76.8 78.72999999999999z"
                                                                    fill="#666ee81a" fill-opacity="1" stroke-opacity="1"
                                                                    stroke-linecap="round" stroke-width="0"
                                                                    stroke-dasharray="0" class="apexcharts-bar-area"
                                                                    index="0" clip-path="url(#gridRectMaski2au6q0j)"
                                                                    pathTo="M 76.8 78.72999999999999L 76.8 57.25149999999999Q 76.8 48.25149999999999 85.8 48.25149999999999L 82.2 48.25149999999999Q 91.2 48.25149999999999 91.2 57.25149999999999L 91.2 57.25149999999999L 91.2 78.72999999999999Q 91.2 87.72999999999999 82.2 87.72999999999999L 85.8 87.72999999999999Q 76.8 87.72999999999999 76.8 78.72999999999999z"
                                                                    pathFrom="M 76.8 78.72999999999999L 76.8 78.72999999999999L 91.2 78.72999999999999L 91.2 78.72999999999999L 91.2 78.72999999999999L 91.2 78.72999999999999L 91.2 78.72999999999999L 76.8 78.72999999999999"
                                                                    cy="48.25149999999999" cx="100.8" j="3"
                                                                    val="45" barHeight="39.4785" barWidth="14.4">
                                                                </path>
                                                                <path id="SvgjsPath1651"
                                                                    d="M 100.8 78.72999999999999L 100.8 17.772999999999996Q 100.8 8.772999999999996 109.8 8.772999999999996L 106.2 8.772999999999996Q 115.2 8.772999999999996 115.2 17.772999999999996L 115.2 17.772999999999996L 115.2 78.72999999999999Q 115.2 87.72999999999999 106.2 87.72999999999999L 109.8 87.72999999999999Q 100.8 87.72999999999999 100.8 78.72999999999999z"
                                                                    fill="#666ee81a" fill-opacity="1" stroke-opacity="1"
                                                                    stroke-linecap="round" stroke-width="0"
                                                                    stroke-dasharray="0" class="apexcharts-bar-area"
                                                                    index="0" clip-path="url(#gridRectMaski2au6q0j)"
                                                                    pathTo="M 100.8 78.72999999999999L 100.8 17.772999999999996Q 100.8 8.772999999999996 109.8 8.772999999999996L 106.2 8.772999999999996Q 115.2 8.772999999999996 115.2 17.772999999999996L 115.2 17.772999999999996L 115.2 78.72999999999999Q 115.2 87.72999999999999 106.2 87.72999999999999L 109.8 87.72999999999999Q 100.8 87.72999999999999 100.8 78.72999999999999z"
                                                                    pathFrom="M 100.8 78.72999999999999L 100.8 78.72999999999999L 115.2 78.72999999999999L 115.2 78.72999999999999L 115.2 78.72999999999999L 115.2 78.72999999999999L 115.2 78.72999999999999L 100.8 78.72999999999999"
                                                                    cy="8.772999999999996" cx="124.8" j="4"
                                                                    val="90" barHeight="78.957" barWidth="14.4">
                                                                </path>
                                                                <path id="SvgjsPath1653"
                                                                    d="M 124.8 78.72999999999999L 124.8 52.864999999999995Q 124.8 43.864999999999995 133.8 43.864999999999995L 130.2 43.864999999999995Q 139.2 43.864999999999995 139.2 52.864999999999995L 139.2 52.864999999999995L 139.2 78.72999999999999Q 139.2 87.72999999999999 130.2 87.72999999999999L 133.8 87.72999999999999Q 124.8 87.72999999999999 124.8 78.72999999999999z"
                                                                    fill="rgba(105,108,255,0.85)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="round"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-bar-area" index="0"
                                                                    clip-path="url(#gridRectMaski2au6q0j)"
                                                                    pathTo="M 124.8 78.72999999999999L 124.8 52.864999999999995Q 124.8 43.864999999999995 133.8 43.864999999999995L 130.2 43.864999999999995Q 139.2 43.864999999999995 139.2 52.864999999999995L 139.2 52.864999999999995L 139.2 78.72999999999999Q 139.2 87.72999999999999 130.2 87.72999999999999L 133.8 87.72999999999999Q 124.8 87.72999999999999 124.8 78.72999999999999z"
                                                                    pathFrom="M 124.8 78.72999999999999L 124.8 78.72999999999999L 139.2 78.72999999999999L 139.2 78.72999999999999L 139.2 78.72999999999999L 139.2 78.72999999999999L 139.2 78.72999999999999L 124.8 78.72999999999999"
                                                                    cy="43.864999999999995" cx="148.8" j="5"
                                                                    val="50" barHeight="43.864999999999995"
                                                                    barWidth="14.4"></path>
                                                                <path id="SvgjsPath1655"
                                                                    d="M 148.8 78.72999999999999L 148.8 30.93249999999999Q 148.8 21.93249999999999 157.8 21.93249999999999L 154.20000000000002 21.93249999999999Q 163.20000000000002 21.93249999999999 163.20000000000002 30.93249999999999L 163.20000000000002 30.93249999999999L 163.20000000000002 78.72999999999999Q 163.20000000000002 87.72999999999999 154.20000000000002 87.72999999999999L 157.8 87.72999999999999Q 148.8 87.72999999999999 148.8 78.72999999999999z"
                                                                    fill="#666ee81a" fill-opacity="1" stroke-opacity="1"
                                                                    stroke-linecap="round" stroke-width="0"
                                                                    stroke-dasharray="0" class="apexcharts-bar-area"
                                                                    index="0" clip-path="url(#gridRectMaski2au6q0j)"
                                                                    pathTo="M 148.8 78.72999999999999L 148.8 30.93249999999999Q 148.8 21.93249999999999 157.8 21.93249999999999L 154.20000000000002 21.93249999999999Q 163.20000000000002 21.93249999999999 163.20000000000002 30.93249999999999L 163.20000000000002 30.93249999999999L 163.20000000000002 78.72999999999999Q 163.20000000000002 87.72999999999999 154.20000000000002 87.72999999999999L 157.8 87.72999999999999Q 148.8 87.72999999999999 148.8 78.72999999999999z"
                                                                    pathFrom="M 148.8 78.72999999999999L 148.8 78.72999999999999L 163.20000000000002 78.72999999999999L 163.20000000000002 78.72999999999999L 163.20000000000002 78.72999999999999L 163.20000000000002 78.72999999999999L 163.20000000000002 78.72999999999999L 148.8 78.72999999999999"
                                                                    cy="21.93249999999999" cx="172.8" j="6"
                                                                    val="75" barHeight="65.7975" barWidth="14.4">
                                                                </path>
                                                                <g id="SvgjsG1641" class="apexcharts-bar-goals-markers"
                                                                    style="pointer-events: none">
                                                                    <g id="SvgjsG1642"
                                                                        className="apexcharts-bar-goals-groups">
                                                                    </g>
                                                                    <g id="SvgjsG1644"
                                                                        className="apexcharts-bar-goals-groups">
                                                                    </g>
                                                                    <g id="SvgjsG1646"
                                                                        className="apexcharts-bar-goals-groups">
                                                                    </g>
                                                                    <g id="SvgjsG1648"
                                                                        className="apexcharts-bar-goals-groups">
                                                                    </g>
                                                                    <g id="SvgjsG1650"
                                                                        className="apexcharts-bar-goals-groups">
                                                                    </g>
                                                                    <g id="SvgjsG1652"
                                                                        className="apexcharts-bar-goals-groups">
                                                                    </g>
                                                                    <g id="SvgjsG1654"
                                                                        className="apexcharts-bar-goals-groups">
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG1640" class="apexcharts-datalabels"
                                                                data:realIndex="0">
                                                            </g>
                                                        </g>
                                                        <line id="SvgjsLine1692" x1="0" y1="0"
                                                            x2="168" y2="0" stroke="#b6b6b6"
                                                            stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine1693" x1="0" y1="0"
                                                            x2="168" y2="0" stroke-dasharray="0"
                                                            stroke-width="0" stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g id="SvgjsG1694" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG1695" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG1696" class="apexcharts-point-annotations"></g>
                                                    </g>
                                                    <g id="SvgjsG1679" class="apexcharts-yaxis" rel="0"
                                                        transform="translate(-8, 0)">
                                                        <g id="SvgjsG1680" class="apexcharts-yaxis-texts-g"></g>
                                                    </g>
                                                    <g id="SvgjsG1629" class="apexcharts-annotations"></g>
                                                </svg>
                                                <div class="apexcharts-legend" style="max-height: 60px;"></div>
                                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                                    <div class="apexcharts-tooltip-title"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    </div>
                                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                            class="apexcharts-tooltip-marker"
                                                            style="background-color: rgba(102, 110, 232, 0.1);"></span>
                                                        <div class="apexcharts-tooltip-text"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                                            <div class="apexcharts-tooltip-goals-group"><span
                                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                                            </div>
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
                                                <div style="width: 291px; height: 121px;"></div>
                                            </div>
                                            <div class="contract-trigger"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 ps-md-4">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <h5 class="mb-0">Activity</h5>
                                        <small>Last Week</small>
                                    </div>
                                    <div class="d-flex justify-content-between" style="position: relative;">
                                        <div class="mt-auto">
                                            <h2 class="mb-2">82%</h2>
                                            <small class="text-success text-nowrap fw-semibold"><i
                                                    class="bx bx-up-arrow-alt"></i>
                                                24.8%</small>
                                        </div>
                                        <div id="activityChart" style="min-height: 120px;">
                                            <div id="apexchartsve8vvbm7k"
                                                class="apexcharts-canvas apexchartsve8vvbm7k apexcharts-theme-light"
                                                style="width: 220px; height: 120px;"><svg id="SvgjsSvg1698"
                                                    width="220" height="120" xmlns="http://www.w3.org/2000/svg"
                                                    version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:svgjs="http://svgjs.dev"
                                                    class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                                    transform="translate(0, 0)" style="background: transparent;">
                                                    <g id="SvgjsG1700" class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(22, 10)">
                                                        <defs id="SvgjsDefs1699">
                                                            <clipPath id="gridRectMaskve8vvbm7k">
                                                                <rect id="SvgjsRect1705" width="194"
                                                                    height="80.72999999999999" x="-3"
                                                                    y="-1" rx="0" ry="0"
                                                                    opacity="1" stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMaskve8vvbm7k"></clipPath>
                                                            <clipPath id="nonForecastMaskve8vvbm7k"></clipPath>
                                                            <clipPath id="gridRectMarkerMaskve8vvbm7k">
                                                                <rect id="SvgjsRect1706" width="192"
                                                                    height="82.72999999999999" x="-2"
                                                                    y="-2" rx="0" ry="0"
                                                                    opacity="1" stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <linearGradient id="SvgjsLinearGradient1711" x1="0"
                                                                y1="0" x2="0" y2="1">
                                                                <stop id="SvgjsStop1712" stop-opacity="0.8"
                                                                    stop-color="rgba(113,221,55,0.8)" offset="0">
                                                                </stop>
                                                                <stop id="SvgjsStop1713" stop-opacity="0.25"
                                                                    stop-color="rgba(227,248,215,0.25)" offset="0.85">
                                                                </stop>
                                                                <stop id="SvgjsStop1714" stop-opacity="0.25"
                                                                    stop-color="rgba(227,248,215,0.25)" offset="1">
                                                                </stop>
                                                            </linearGradient>
                                                        </defs>
                                                        <line id="SvgjsLine1704" x1="0" y1="0"
                                                            x2="0" y2="78.72999999999999" stroke="#b6b6b6"
                                                            stroke-dasharray="3" stroke-linecap="butt"
                                                            class="apexcharts-xcrosshairs" x="0" y="0"
                                                            width="1" height="78.72999999999999" fill="#b1b9c4"
                                                            filter="none" fill-opacity="0.9" stroke-width="1">
                                                        </line>
                                                        <g id="SvgjsG1717" class="apexcharts-xaxis"
                                                            transform="translate(0, 0)">
                                                            <g id="SvgjsG1718" class="apexcharts-xaxis-texts-g"
                                                                transform="translate(0, -4)"><text id="SvgjsText1720"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="0" y="107.72999999999999"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1721">A1</tspan>
                                                                    <title>A1</title>
                                                                </text><text id="SvgjsText1723"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="23.5" y="107.72999999999999"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1724">A2</tspan>
                                                                    <title>A2</title>
                                                                </text><text id="SvgjsText1726"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="47" y="107.72999999999999"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1727">A3</tspan>
                                                                    <title>A3</title>
                                                                </text><text id="SvgjsText1729"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="70.5" y="107.72999999999999"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1730">A4</tspan>
                                                                    <title>A4</title>
                                                                </text><text id="SvgjsText1732"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="94" y="107.72999999999999"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1733">A5</tspan>
                                                                    <title>A5</title>
                                                                </text><text id="SvgjsText1735"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="117.5" y="107.72999999999999"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1736">A6</tspan>
                                                                    <title>A6</title>
                                                                </text><text id="SvgjsText1738"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="141" y="107.72999999999999"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1739">A7</tspan>
                                                                    <title>A7</title>
                                                                </text><text id="SvgjsText1741"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="164.5" y="107.72999999999999"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1742">A8</tspan>
                                                                    <title>A8</title>
                                                                </text><text id="SvgjsText1744"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="188" y="107.72999999999999"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1745">A9</tspan>
                                                                    <title>A9</title>
                                                                </text></g>
                                                        </g>
                                                        <g id="SvgjsG1748" class="apexcharts-grid">
                                                            <g id="SvgjsG1749" class="apexcharts-gridlines-horizontal"
                                                                style="display: none;">
                                                                <line id="SvgjsLine1751" x1="0" y1="0"
                                                                    x2="188" y2="0" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1752" x1="0"
                                                                    y1="15.745999999999999" x2="188"
                                                                    y2="15.745999999999999" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1753" x1="0"
                                                                    y1="31.491999999999997" x2="188"
                                                                    y2="31.491999999999997" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1754" x1="0" y1="47.238"
                                                                    x2="188" y2="47.238" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1755" x1="0"
                                                                    y1="62.983999999999995" x2="188"
                                                                    y2="62.983999999999995" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1756" x1="0"
                                                                    y1="78.72999999999999" x2="188"
                                                                    y2="78.72999999999999" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                            </g>
                                                            <g id="SvgjsG1750" class="apexcharts-gridlines-vertical"
                                                                style="display: none;"></g>
                                                            <line id="SvgjsLine1758" x1="0"
                                                                y1="78.72999999999999" x2="188"
                                                                y2="78.72999999999999" stroke="transparent"
                                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            <line id="SvgjsLine1757" x1="0" y1="1"
                                                                x2="0" y2="78.72999999999999"
                                                                stroke="transparent" stroke-dasharray="0"
                                                                stroke-linecap="butt"></line>
                                                        </g>
                                                        <g id="SvgjsG1707"
                                                            class="apexcharts-area-series apexcharts-plot-series">
                                                            <g id="SvgjsG1708" class="apexcharts-series"
                                                                seriesName="seriesx1" data:longestSeries="true"
                                                                rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath1715"
                                                                    d="M 0 78.72999999999999L 0 64.95224999999999C 8.225 64.95224999999999 15.275 55.11099999999999 23.5 55.11099999999999C 31.725 55.11099999999999 38.775 66.92049999999999 47 66.92049999999999C 55.225 66.92049999999999 62.275 51.174499999999995 70.5 51.174499999999995C 78.725 51.174499999999995 85.775 61.01574999999999 94 61.01574999999999C 102.225 61.01574999999999 109.275 15.745999999999995 117.5 15.745999999999995C 125.725 15.745999999999995 132.775 70.85699999999999 141 70.85699999999999C 149.225 70.85699999999999 156.275 25.587249999999997 164.5 25.587249999999997C 172.725 25.587249999999997 179.775 45.269749999999995 188 45.269749999999995C 188 45.269749999999995 188 45.269749999999995 188 78.72999999999999M 188 45.269749999999995z"
                                                                    fill="url(#SvgjsLinearGradient1711)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-area" index="0"
                                                                    clip-path="url(#gridRectMaskve8vvbm7k)"
                                                                    pathTo="M 0 78.72999999999999L 0 64.95224999999999C 8.225 64.95224999999999 15.275 55.11099999999999 23.5 55.11099999999999C 31.725 55.11099999999999 38.775 66.92049999999999 47 66.92049999999999C 55.225 66.92049999999999 62.275 51.174499999999995 70.5 51.174499999999995C 78.725 51.174499999999995 85.775 61.01574999999999 94 61.01574999999999C 102.225 61.01574999999999 109.275 15.745999999999995 117.5 15.745999999999995C 125.725 15.745999999999995 132.775 70.85699999999999 141 70.85699999999999C 149.225 70.85699999999999 156.275 25.587249999999997 164.5 25.587249999999997C 172.725 25.587249999999997 179.775 45.269749999999995 188 45.269749999999995C 188 45.269749999999995 188 45.269749999999995 188 78.72999999999999M 188 45.269749999999995z"
                                                                    pathFrom="M -1 94.47599999999998L -1 94.47599999999998L 23.5 94.47599999999998L 47 94.47599999999998L 70.5 94.47599999999998L 94 94.47599999999998L 117.5 94.47599999999998L 141 94.47599999999998L 164.5 94.47599999999998L 188 94.47599999999998">
                                                                </path>
                                                                <path id="SvgjsPath1716"
                                                                    d="M 0 64.95224999999999C 8.225 64.95224999999999 15.275 55.11099999999999 23.5 55.11099999999999C 31.725 55.11099999999999 38.775 66.92049999999999 47 66.92049999999999C 55.225 66.92049999999999 62.275 51.174499999999995 70.5 51.174499999999995C 78.725 51.174499999999995 85.775 61.01574999999999 94 61.01574999999999C 102.225 61.01574999999999 109.275 15.745999999999995 117.5 15.745999999999995C 125.725 15.745999999999995 132.775 70.85699999999999 141 70.85699999999999C 149.225 70.85699999999999 156.275 25.587249999999997 164.5 25.587249999999997C 172.725 25.587249999999997 179.775 45.269749999999995 188 45.269749999999995"
                                                                    fill="none" fill-opacity="1" stroke="#71dd37"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="2" stroke-dasharray="0"
                                                                    class="apexcharts-area" index="0"
                                                                    clip-path="url(#gridRectMaskve8vvbm7k)"
                                                                    pathTo="M 0 64.95224999999999C 8.225 64.95224999999999 15.275 55.11099999999999 23.5 55.11099999999999C 31.725 55.11099999999999 38.775 66.92049999999999 47 66.92049999999999C 55.225 66.92049999999999 62.275 51.174499999999995 70.5 51.174499999999995C 78.725 51.174499999999995 85.775 61.01574999999999 94 61.01574999999999C 102.225 61.01574999999999 109.275 15.745999999999995 117.5 15.745999999999995C 125.725 15.745999999999995 132.775 70.85699999999999 141 70.85699999999999C 149.225 70.85699999999999 156.275 25.587249999999997 164.5 25.587249999999997C 172.725 25.587249999999997 179.775 45.269749999999995 188 45.269749999999995"
                                                                    pathFrom="M -1 94.47599999999998L -1 94.47599999999998L 23.5 94.47599999999998L 47 94.47599999999998L 70.5 94.47599999999998L 94 94.47599999999998L 117.5 94.47599999999998L 141 94.47599999999998L 164.5 94.47599999999998L 188 94.47599999999998">
                                                                </path>
                                                                <g id="SvgjsG1709" class="apexcharts-series-markers-wrap"
                                                                    data:realIndex="0">
                                                                    <g class="apexcharts-series-markers">
                                                                        <circle id="SvgjsCircle1764" r="0"
                                                                            cx="0" cy="0"
                                                                            class="apexcharts-marker w68q2vrrb no-pointer-events"
                                                                            stroke="#ffffff" fill="#71dd37"
                                                                            fill-opacity="1" stroke-width="2"
                                                                            stroke-opacity="0.9" default-marker-size="0">
                                                                        </circle>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG1710" class="apexcharts-datalabels"
                                                                data:realIndex="0">
                                                            </g>
                                                        </g>
                                                        <line id="SvgjsLine1759" x1="0" y1="0"
                                                            x2="188" y2="0" stroke="#b6b6b6"
                                                            stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine1760" x1="0" y1="0"
                                                            x2="188" y2="0" stroke-dasharray="0"
                                                            stroke-width="0" stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g id="SvgjsG1761" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG1762" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG1763" class="apexcharts-point-annotations"></g>
                                                        <rect id="SvgjsRect1765" width="0" height="0"
                                                            x="0" y="0" rx="0" ry="0"
                                                            opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fefefe"
                                                            class="apexcharts-zoom-rect"></rect>
                                                        <rect id="SvgjsRect1766" width="0" height="0"
                                                            x="0" y="0" rx="0" ry="0"
                                                            opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fefefe"
                                                            class="apexcharts-selection-rect"></rect>
                                                    </g>
                                                    <rect id="SvgjsRect1703" width="0" height="0"
                                                        x="0" y="0" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fefefe">
                                                    </rect>
                                                    <g id="SvgjsG1746" class="apexcharts-yaxis" rel="0"
                                                        transform="translate(-8, 0)">
                                                        <g id="SvgjsG1747" class="apexcharts-yaxis-texts-g"></g>
                                                    </g>
                                                    <g id="SvgjsG1701" class="apexcharts-annotations"></g>
                                                </svg>
                                                <div class="apexcharts-legend" style="max-height: 60px;"></div>
                                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                                    <div class="apexcharts-tooltip-title"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    </div>
                                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                            class="apexcharts-tooltip-marker"
                                                            style="background-color: rgb(113, 221, 55);"></span>
                                                        <div class="apexcharts-tooltip-text"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                                            <div class="apexcharts-tooltip-goals-group"><span
                                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-z-group"><span
                                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                                    <div class="apexcharts-xaxistooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
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
                                                <div style="width: 292px; height: 121px;"></div>
                                            </div>
                                            <div class="contract-trigger"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ New Visitors & Activity -->

                    <div class="col-md-12 col-lg-4">
                        <div class="row">
                            <div class="col-lg-6 col-md-3 col-6 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="{{ asset('backend/assets/img/icons/unicons/wallet-info.png') }}"
                                                    alt="Credit Card" class="rounded">
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn p-0" type="button" id="cardOpt6"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="cardOpt6">
                                                    <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="d-block">Sales</span>
                                        <h4 class="card-title mb-1">$4,679</h4>
                                        <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i>
                                            +28.42%</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-3 col-6 mb-4">
                                <div class="card">
                                    <div class="card-body pb-2" style="position: relative;">
                                        <span class="d-block fw-semibold">Profit</span>
                                        <h3 class="card-title mb-0">624k</h3>
                                        <div id="profitChart" style="min-height: 95px;">
                                            <div id="apexchartsrar828fm"
                                                class="apexcharts-canvas apexchartsrar828fm apexcharts-theme-light"
                                                style="width: 102px; height: 80px;"><svg id="SvgjsSvg1767"
                                                    width="102" height="80" xmlns="http://www.w3.org/2000/svg"
                                                    version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                    xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                    style="background: transparent;">
                                                    <g id="SvgjsG1769" class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(0, 0)">
                                                        <defs id="SvgjsDefs1768">
                                                            <linearGradient id="SvgjsLinearGradient1772" x1="0"
                                                                y1="0" x2="0" y2="1">
                                                                <stop id="SvgjsStop1773" stop-opacity="0.4"
                                                                    stop-color="rgba(216,227,240,0.4)" offset="0">
                                                                </stop>
                                                                <stop id="SvgjsStop1774" stop-opacity="0.5"
                                                                    stop-color="rgba(190,209,230,0.5)" offset="1">
                                                                </stop>
                                                                <stop id="SvgjsStop1775" stop-opacity="0.5"
                                                                    stop-color="rgba(190,209,230,0.5)" offset="1">
                                                                </stop>
                                                            </linearGradient>
                                                            <clipPath id="gridRectMaskrar828fm">
                                                                <rect id="SvgjsRect1777" width="111" height="57.73"
                                                                    x="-4.5" y="-2.5" rx="0"
                                                                    ry="0" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0"
                                                                    fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMaskrar828fm"></clipPath>
                                                            <clipPath id="nonForecastMaskrar828fm"></clipPath>
                                                            <clipPath id="gridRectMarkerMaskrar828fm">
                                                                <rect id="SvgjsRect1778" width="106" height="56.73"
                                                                    x="-2" y="-2" rx="0"
                                                                    ry="0" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0"
                                                                    fill="#fff"></rect>
                                                            </clipPath>
                                                        </defs>
                                                        <rect id="SvgjsRect1776" width="8.2875" height="52.73"
                                                            x="0" y="0" rx="0"
                                                            ry="0" opacity="1" stroke-width="0"
                                                            stroke-dasharray="3" fill="url(#SvgjsLinearGradient1772)"
                                                            class="apexcharts-xcrosshairs" y2="52.73"
                                                            filter="none" fill-opacity="0.9"></rect>
                                                        <g id="SvgjsG1802" class="apexcharts-xaxis"
                                                            transform="translate(0, 0)">
                                                            <g id="SvgjsG1803" class="apexcharts-xaxis-texts-g"
                                                                transform="translate(0, -4)"><text id="SvgjsText1805"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="12.75" y="81.72999999999999"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1806">Jan</tspan>
                                                                    <title>Jan</title>
                                                                </text><text id="SvgjsText1808"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="38.25" y="81.72999999999999"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1809">Apr</tspan>
                                                                    <title>Apr</title>
                                                                </text><text id="SvgjsText1811"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="63.75" y="81.72999999999999"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1812">Jul</tspan>
                                                                    <title>Jul</title>
                                                                </text><text id="SvgjsText1814"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="89.25" y="81.72999999999999"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1815">Oct</tspan>
                                                                    <title>Oct</title>
                                                                </text></g>
                                                        </g>
                                                        <g id="SvgjsG1818" class="apexcharts-grid">
                                                            <g id="SvgjsG1819" class="apexcharts-gridlines-horizontal"
                                                                style="display: none;">
                                                                <line id="SvgjsLine1821" x1="0" y1="0"
                                                                    x2="102" y2="0" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1822" x1="0" y1="13.1825"
                                                                    x2="102" y2="13.1825" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1823" x1="0" y1="26.365"
                                                                    x2="102" y2="26.365" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1824" x1="0" y1="39.5475"
                                                                    x2="102" y2="39.5475" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1825" x1="0" y1="52.73"
                                                                    x2="102" y2="52.73" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                            </g>
                                                            <g id="SvgjsG1820" class="apexcharts-gridlines-vertical"
                                                                style="display: none;"></g>
                                                            <line id="SvgjsLine1827" x1="0" y1="52.73"
                                                                x2="102" y2="52.73" stroke="transparent"
                                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            <line id="SvgjsLine1826" x1="0" y1="1"
                                                                x2="0" y2="52.73" stroke="transparent"
                                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        </g>
                                                        <g id="SvgjsG1779"
                                                            class="apexcharts-bar-series apexcharts-plot-series">
                                                            <g id="SvgjsG1780" class="apexcharts-series"
                                                                rel="1" seriesName="seriesx1"
                                                                data:realIndex="0">
                                                                <path id="SvgjsPath1784"
                                                                    d="M 4.4625 49.73L 4.4625 17.500750000000004Q 4.4625 14.500750000000004 7.4625 14.500750000000004L 4.75 14.500750000000004Q 7.75 14.500750000000004 7.75 17.500750000000004L 7.75 17.500750000000004L 7.75 49.73Q 7.75 52.73 4.75 52.73L 7.4625 52.73Q 4.4625 52.73 4.4625 49.73z"
                                                                    fill="rgba(113,221,55,0.85)" fill-opacity="1"
                                                                    stroke="#" stroke-opacity="1"
                                                                    stroke-linecap="round" stroke-width="5"
                                                                    stroke-dasharray="0" class="apexcharts-bar-area"
                                                                    index="0"
                                                                    clip-path="url(#gridRectMaskrar828fm)"
                                                                    pathTo="M 4.4625 49.73L 4.4625 17.500750000000004Q 4.4625 14.500750000000004 7.4625 14.500750000000004L 4.75 14.500750000000004Q 7.75 14.500750000000004 7.75 17.500750000000004L 7.75 17.500750000000004L 7.75 49.73Q 7.75 52.73 4.75 52.73L 7.4625 52.73Q 4.4625 52.73 4.4625 49.73z"
                                                                    pathFrom="M 4.4625 49.73L 4.4625 49.73L 7.75 49.73L 7.75 49.73L 7.75 49.73L 7.75 49.73L 7.75 49.73L 4.4625 49.73"
                                                                    cy="14.500750000000004" cx="27.4625"
                                                                    j="0" val="58"
                                                                    barHeight="38.22924999999999" barWidth="8.2875">
                                                                </path>
                                                                <path id="SvgjsPath1786"
                                                                    d="M 29.9625 49.73L 29.9625 37.2745Q 29.9625 34.2745 32.9625 34.2745L 30.25 34.2745Q 33.25 34.2745 33.25 37.2745L 33.25 37.2745L 33.25 49.73Q 33.25 52.73 30.25 52.73L 32.9625 52.73Q 29.9625 52.73 29.9625 49.73z"
                                                                    fill="rgba(113,221,55,0.85)" fill-opacity="1"
                                                                    stroke="#" stroke-opacity="1"
                                                                    stroke-linecap="round" stroke-width="5"
                                                                    stroke-dasharray="0" class="apexcharts-bar-area"
                                                                    index="0"
                                                                    clip-path="url(#gridRectMaskrar828fm)"
                                                                    pathTo="M 29.9625 49.73L 29.9625 37.2745Q 29.9625 34.2745 32.9625 34.2745L 30.25 34.2745Q 33.25 34.2745 33.25 37.2745L 33.25 37.2745L 33.25 49.73Q 33.25 52.73 30.25 52.73L 32.9625 52.73Q 29.9625 52.73 29.9625 49.73z"
                                                                    pathFrom="M 29.9625 49.73L 29.9625 49.73L 33.25 49.73L 33.25 49.73L 33.25 49.73L 33.25 49.73L 33.25 49.73L 29.9625 49.73"
                                                                    cy="34.2745" cx="52.9625" j="1"
                                                                    val="28" barHeight="18.455499999999997"
                                                                    barWidth="8.2875"></path>
                                                                <path id="SvgjsPath1788"
                                                                    d="M 55.4625 49.73L 55.4625 22.77375Q 55.4625 19.77375 58.4625 19.77375L 55.75 19.77375Q 58.75 19.77375 58.75 22.77375L 58.75 22.77375L 58.75 49.73Q 58.75 52.73 55.75 52.73L 58.4625 52.73Q 55.4625 52.73 55.4625 49.73z"
                                                                    fill="rgba(113,221,55,0.85)" fill-opacity="1"
                                                                    stroke="#" stroke-opacity="1"
                                                                    stroke-linecap="round" stroke-width="5"
                                                                    stroke-dasharray="0" class="apexcharts-bar-area"
                                                                    index="0"
                                                                    clip-path="url(#gridRectMaskrar828fm)"
                                                                    pathTo="M 55.4625 49.73L 55.4625 22.77375Q 55.4625 19.77375 58.4625 19.77375L 55.75 19.77375Q 58.75 19.77375 58.75 22.77375L 58.75 22.77375L 58.75 49.73Q 58.75 52.73 55.75 52.73L 58.4625 52.73Q 55.4625 52.73 55.4625 49.73z"
                                                                    pathFrom="M 55.4625 49.73L 55.4625 49.73L 58.75 49.73L 58.75 49.73L 58.75 49.73L 58.75 49.73L 58.75 49.73L 55.4625 49.73"
                                                                    cy="19.77375" cx="78.4625" j="2"
                                                                    val="50" barHeight="32.95625"
                                                                    barWidth="8.2875">
                                                                </path>
                                                                <path id="SvgjsPath1790"
                                                                    d="M 80.9625 49.73L 80.9625 3Q 80.9625 0 83.9625 0L 81.25 0Q 84.25 0 84.25 3L 84.25 3L 84.25 49.73Q 84.25 52.73 81.25 52.73L 83.9625 52.73Q 80.9625 52.73 80.9625 49.73z"
                                                                    fill="rgba(113,221,55,0.85)" fill-opacity="1"
                                                                    stroke="#" stroke-opacity="1"
                                                                    stroke-linecap="round" stroke-width="5"
                                                                    stroke-dasharray="0" class="apexcharts-bar-area"
                                                                    index="0"
                                                                    clip-path="url(#gridRectMaskrar828fm)"
                                                                    pathTo="M 80.9625 49.73L 80.9625 3Q 80.9625 0 83.9625 0L 81.25 0Q 84.25 0 84.25 3L 84.25 3L 84.25 49.73Q 84.25 52.73 81.25 52.73L 83.9625 52.73Q 80.9625 52.73 80.9625 49.73z"
                                                                    pathFrom="M 80.9625 49.73L 80.9625 49.73L 84.25 49.73L 84.25 49.73L 84.25 49.73L 84.25 49.73L 84.25 49.73L 80.9625 49.73"
                                                                    cy="0" cx="103.9625" j="3"
                                                                    val="80" barHeight="52.73"
                                                                    barWidth="8.2875"></path>
                                                                <g id="SvgjsG1782" class="apexcharts-bar-goals-markers"
                                                                    style="pointer-events: none">
                                                                    <g id="SvgjsG1783"
                                                                        className="apexcharts-bar-goals-groups">
                                                                    </g>
                                                                    <g id="SvgjsG1785"
                                                                        className="apexcharts-bar-goals-groups">
                                                                    </g>
                                                                    <g id="SvgjsG1787"
                                                                        className="apexcharts-bar-goals-groups">
                                                                    </g>
                                                                    <g id="SvgjsG1789"
                                                                        className="apexcharts-bar-goals-groups">
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG1791" class="apexcharts-series"
                                                                rel="2" seriesName="seriesx2"
                                                                data:realIndex="1">
                                                                <path id="SvgjsPath1795"
                                                                    d="M 12.75 49.73L 12.75 22.77375Q 12.75 19.77375 15.75 19.77375L 13.037500000000001 19.77375Q 16.0375 19.77375 16.0375 22.77375L 16.0375 22.77375L 16.0375 49.73Q 16.0375 52.73 13.037500000000001 52.73L 15.75 52.73Q 12.75 52.73 12.75 49.73z"
                                                                    fill="#28d0941a" fill-opacity="1" stroke="a"
                                                                    stroke-opacity="1" stroke-linecap="round"
                                                                    stroke-width="5" stroke-dasharray="0"
                                                                    class="apexcharts-bar-area" index="1"
                                                                    clip-path="url(#gridRectMaskrar828fm)"
                                                                    pathTo="M 12.75 49.73L 12.75 22.77375Q 12.75 19.77375 15.75 19.77375L 13.037500000000001 19.77375Q 16.0375 19.77375 16.0375 22.77375L 16.0375 22.77375L 16.0375 49.73Q 16.0375 52.73 13.037500000000001 52.73L 15.75 52.73Q 12.75 52.73 12.75 49.73z"
                                                                    pathFrom="M 12.75 49.73L 12.75 49.73L 16.0375 49.73L 16.0375 49.73L 16.0375 49.73L 16.0375 49.73L 16.0375 49.73L 12.75 49.73"
                                                                    cy="16.77375" cx="35.75" j="0"
                                                                    val="50" barHeight="32.95625"
                                                                    barWidth="8.2875">
                                                                </path>
                                                                <path id="SvgjsPath1797"
                                                                    d="M 38.25 49.73L 38.25 41.22925Q 38.25 38.22925 41.25 38.22925L 38.5375 38.22925Q 41.5375 38.22925 41.5375 41.22925L 41.5375 41.22925L 41.5375 49.73Q 41.5375 52.73 38.5375 52.73L 41.25 52.73Q 38.25 52.73 38.25 49.73z"
                                                                    fill="#28d0941a" fill-opacity="1" stroke="a"
                                                                    stroke-opacity="1" stroke-linecap="round"
                                                                    stroke-width="5" stroke-dasharray="0"
                                                                    class="apexcharts-bar-area" index="1"
                                                                    clip-path="url(#gridRectMaskrar828fm)"
                                                                    pathTo="M 38.25 49.73L 38.25 41.22925Q 38.25 38.22925 41.25 38.22925L 38.5375 38.22925Q 41.5375 38.22925 41.5375 41.22925L 41.5375 41.22925L 41.5375 49.73Q 41.5375 52.73 38.5375 52.73L 41.25 52.73Q 38.25 52.73 38.25 49.73z"
                                                                    pathFrom="M 38.25 49.73L 38.25 49.73L 41.5375 49.73L 41.5375 49.73L 41.5375 49.73L 41.5375 49.73L 41.5375 49.73L 38.25 49.73"
                                                                    cy="35.22925" cx="61.25" j="1"
                                                                    val="22" barHeight="14.500749999999998"
                                                                    barWidth="8.2875"></path>
                                                                <path id="SvgjsPath1799"
                                                                    d="M 63.75 49.73L 63.75 12.886875000000003Q 63.75 9.886875000000003 66.75 9.886875000000003L 64.0375 9.886875000000003Q 67.0375 9.886875000000003 67.0375 12.886875000000003L 67.0375 12.886875000000003L 67.0375 49.73Q 67.0375 52.73 64.0375 52.73L 66.75 52.73Q 63.75 52.73 63.75 49.73z"
                                                                    fill="#28d0941a" fill-opacity="1" stroke="a"
                                                                    stroke-opacity="1" stroke-linecap="round"
                                                                    stroke-width="5" stroke-dasharray="0"
                                                                    class="apexcharts-bar-area" index="1"
                                                                    clip-path="url(#gridRectMaskrar828fm)"
                                                                    pathTo="M 63.75 49.73L 63.75 12.886875000000003Q 63.75 9.886875000000003 66.75 9.886875000000003L 64.0375 9.886875000000003Q 67.0375 9.886875000000003 67.0375 12.886875000000003L 67.0375 12.886875000000003L 67.0375 49.73Q 67.0375 52.73 64.0375 52.73L 66.75 52.73Q 63.75 52.73 63.75 49.73z"
                                                                    pathFrom="M 63.75 49.73L 63.75 49.73L 67.0375 49.73L 67.0375 49.73L 67.0375 49.73L 67.0375 49.73L 67.0375 49.73L 63.75 49.73"
                                                                    cy="6.886875000000003" cx="86.75"
                                                                    j="2" val="65"
                                                                    barHeight="42.84312499999999" barWidth="8.2875">
                                                                </path>
                                                                <path id="SvgjsPath1801"
                                                                    d="M 89.25 49.73L 89.25 8.273000000000003Q 89.25 5.273000000000003 92.25 5.273000000000003L 89.5375 5.273000000000003Q 92.5375 5.273000000000003 92.5375 8.273000000000003L 92.5375 8.273000000000003L 92.5375 49.73Q 92.5375 52.73 89.5375 52.73L 92.25 52.73Q 89.25 52.73 89.25 49.73z"
                                                                    fill="#28d0941a" fill-opacity="1" stroke="a"
                                                                    stroke-opacity="1" stroke-linecap="round"
                                                                    stroke-width="5" stroke-dasharray="0"
                                                                    class="apexcharts-bar-area" index="1"
                                                                    clip-path="url(#gridRectMaskrar828fm)"
                                                                    pathTo="M 89.25 49.73L 89.25 8.273000000000003Q 89.25 5.273000000000003 92.25 5.273000000000003L 89.5375 5.273000000000003Q 92.5375 5.273000000000003 92.5375 8.273000000000003L 92.5375 8.273000000000003L 92.5375 49.73Q 92.5375 52.73 89.5375 52.73L 92.25 52.73Q 89.25 52.73 89.25 49.73z"
                                                                    pathFrom="M 89.25 49.73L 89.25 49.73L 92.5375 49.73L 92.5375 49.73L 92.5375 49.73L 92.5375 49.73L 92.5375 49.73L 89.25 49.73"
                                                                    cy="2.2730000000000032" cx="112.25"
                                                                    j="3" val="72"
                                                                    barHeight="47.456999999999994" barWidth="8.2875">
                                                                </path>
                                                                <g id="SvgjsG1793" class="apexcharts-bar-goals-markers"
                                                                    style="pointer-events: none">
                                                                    <g id="SvgjsG1794"
                                                                        className="apexcharts-bar-goals-groups">
                                                                    </g>
                                                                    <g id="SvgjsG1796"
                                                                        className="apexcharts-bar-goals-groups">
                                                                    </g>
                                                                    <g id="SvgjsG1798"
                                                                        className="apexcharts-bar-goals-groups">
                                                                    </g>
                                                                    <g id="SvgjsG1800"
                                                                        className="apexcharts-bar-goals-groups">
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG1781" class="apexcharts-datalabels"
                                                                data:realIndex="0"></g>
                                                            <g id="SvgjsG1792" class="apexcharts-datalabels"
                                                                data:realIndex="1"></g>
                                                        </g>
                                                        <line id="SvgjsLine1828" x1="0" y1="0"
                                                            x2="102" y2="0" stroke="#b6b6b6"
                                                            stroke-dasharray="0" stroke-width="1"
                                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine1829" x1="0" y1="0"
                                                            x2="102" y2="0" stroke-dasharray="0"
                                                            stroke-width="0" stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g id="SvgjsG1830" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG1831" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG1832" class="apexcharts-point-annotations"></g>
                                                    </g>
                                                    <g id="SvgjsG1816" class="apexcharts-yaxis" rel="0"
                                                        transform="translate(-8, 0)">
                                                        <g id="SvgjsG1817" class="apexcharts-yaxis-texts-g"></g>
                                                    </g>
                                                    <g id="SvgjsG1770" class="apexcharts-annotations"></g>
                                                </svg>
                                                <div class="apexcharts-legend" style="max-height: 40px;"></div>
                                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                                    <div class="apexcharts-tooltip-title"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    </div>
                                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                            class="apexcharts-tooltip-marker"
                                                            style="background-color: rgb(113, 221, 55);"></span>
                                                        <div class="apexcharts-tooltip-text"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                                            <div class="apexcharts-tooltip-goals-group"><span
                                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-z-group"><span
                                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                                        </div>
                                                    </div>
                                                    <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                                            class="apexcharts-tooltip-marker"
                                                            style="background-color: rgba(40, 208, 148, 0.1);"></span>
                                                        <div class="apexcharts-tooltip-text"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                                            <div class="apexcharts-tooltip-goals-group"><span
                                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                                            </div>
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
                                                <div class="apexcharts-toolbar" style="top: 0px; right: 3px;">
                                                    <div class="apexcharts-menu">
                                                        <div class="apexcharts-menu-item exportSVG"
                                                            title="Download SVG">
                                                            Download SVG</div>
                                                        <div class="apexcharts-menu-item exportPNG"
                                                            title="Download PNG">
                                                            Download PNG</div>
                                                        <div class="apexcharts-menu-item exportCSV"
                                                            title="Download CSV">
                                                            Download CSV</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="resize-triggers">
                                            <div class="expand-trigger">
                                                <div style="width: 151px; height: 180px;"></div>
                                            </div>
                                            <div class="contract-trigger"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-3 col-6 mb-4">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <span class="d-block fw-semibold">Expenses</span>
                                    </div>
                                    <div id="expensesChart" class="mb-2" style="min-height: 61px;">
                                        <div id="apexchartsca8pp0nj"
                                            class="apexcharts-canvas apexchartsca8pp0nj apexcharts-theme-light"
                                            style="width: 150px; height: 61px;"><svg id="SvgjsSvg1833" width="150"
                                                height="61" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                style="background: transparent;">
                                                <g id="SvgjsG1835" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(0, -10)">
                                                    <defs id="SvgjsDefs1834">
                                                        <clipPath id="gridRectMaskca8pp0nj">
                                                            <rect id="SvgjsRect1837" width="156" height="142"
                                                                x="-3" y="-1" rx="0"
                                                                ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0" fill="#fff">
                                                            </rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMaskca8pp0nj"></clipPath>
                                                        <clipPath id="nonForecastMaskca8pp0nj"></clipPath>
                                                        <clipPath id="gridRectMarkerMaskca8pp0nj">
                                                            <rect id="SvgjsRect1838" width="154" height="144"
                                                                x="-2" y="-2" rx="0"
                                                                ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0" fill="#fff">
                                                            </rect>
                                                        </clipPath>
                                                    </defs>
                                                    <g id="SvgjsG1839" class="apexcharts-radialbar">
                                                        <g id="SvgjsG1840">
                                                            <g id="SvgjsG1841" class="apexcharts-tracks">
                                                                <g id="SvgjsG1842"
                                                                    class="apexcharts-radialbar-track apexcharts-track"
                                                                    rel="1">
                                                                    <path id="apexcharts-radialbarTrack-0"
                                                                        d="M 27.25609756097561 70 A 47.74390243902439 47.74390243902439 0 0 1 122.7439024390244 70"
                                                                        fill="none" fill-opacity="1"
                                                                        stroke="#8897aa1a" stroke-opacity="1"
                                                                        stroke-linecap="round"
                                                                        stroke-width="10.05487804878049"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-radialbar-area"
                                                                        data:pathOrig="M 27.25609756097561 70 A 47.74390243902439 47.74390243902439 0 0 1 122.7439024390244 70">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG1844">
                                                                <g id="SvgjsG1848"
                                                                    class="apexcharts-series apexcharts-radial-series"
                                                                    seriesName="Progress" rel="1"
                                                                    data:realIndex="0">
                                                                    <path id="SvgjsPath1849"
                                                                        d="M 27.25609756097561 70 A 47.74390243902439 47.74390243902439 0 0 1 111.57395115622926 39.31081107411218"
                                                                        fill="none" fill-opacity="0.85"
                                                                        stroke="rgba(105,108,255,0.85)"
                                                                        stroke-opacity="1" stroke-linecap="round"
                                                                        stroke-width="10.365853658536587"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                        data:angle="140" data:value="78"
                                                                        index="0" j="0"
                                                                        data:pathOrig="M 27.25609756097561 70 A 47.74390243902439 47.74390243902439 0 0 1 111.57395115622926 39.31081107411218">
                                                                    </path>
                                                                </g>
                                                                <circle id="SvgjsCircle1845" r="37.71646341463414"
                                                                    cx="75" cy="70"
                                                                    class="apexcharts-radialbar-hollow"
                                                                    fill="transparent">
                                                                </circle>
                                                                <g id="SvgjsG1846" class="apexcharts-datalabels-group"
                                                                    transform="translate(0, 0) scale(1)"
                                                                    style="opacity: 1;">
                                                                    <text id="SvgjsText1847"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="75" y="70"
                                                                        text-anchor="middle" dominant-baseline="auto"
                                                                        font-size="22px" font-weight="500"
                                                                        fill="#566a7f"
                                                                        class="apexcharts-text apexcharts-datalabel-value"
                                                                        style="font-family: Helvetica, Arial, sans-serif;">78%</text>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <line id="SvgjsLine1850" x1="0" y1="0"
                                                        x2="150" y2="0" stroke="#b6b6b6"
                                                        stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs">
                                                    </line>
                                                    <line id="SvgjsLine1851" x1="0" y1="0"
                                                        x2="150" y2="0" stroke-dasharray="0"
                                                        stroke-width="0" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                </g>
                                                <g id="SvgjsG1836" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend"></div>
                                        </div>
                                    </div>
                                    <div class="p-3 pt-2">
                                        <small class="text-muted d-block text-center">$21k Expenses more than last
                                            month</small>
                                    </div>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 151px; height: 199px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-3 col-6 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="../../assets/img/icons/unicons/briefcase.png"
                                                    alt="Credit Card" class="rounded">
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn p-0" type="button" id="cardOpt1"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt1">
                                                    <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="d-block">Transactions</span>
                                        <h4 class="card-title mb-1">$14,857</h4>
                                        <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i>
                                            +28.14%</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Income -->
                    <div class="col-md-12 col-lg-8 mb-4">
                        <div class="card">
                            <div class="row row-bordered g-0">
                                <div class="col-md-8">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Total Income</h5>
                                        <small class="card-subtitle">Yearly report overview</small>
                                    </div>
                                    <div class="card-body" style="position: relative;">
                                        <div id="totalIncomeChart" style="min-height: 265px;">
                                            <div id="apexchartsvqnvekvk"
                                                class="apexcharts-canvas apexchartsvqnvekvk apexcharts-theme-light"
                                                style="width: 404px; height: 250px;"><svg id="SvgjsSvg1853"
                                                    width="404" height="250" xmlns="http://www.w3.org/2000/svg"
                                                    version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:svgjs="http://svgjs.dev"
                                                    class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                                    transform="translate(0, 0)" style="background: transparent;">
                                                    <g id="SvgjsG1855" class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(36.4599609375, 15)">
                                                        <defs id="SvgjsDefs1854">
                                                            <clipPath id="gridRectMaskvqnvekvk">
                                                                <rect id="SvgjsRect1861" width="361.73095703125"
                                                                    height="208.73" x="-3.5" y="-1.5"
                                                                    rx="0" ry="0" opacity="1"
                                                                    stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMaskvqnvekvk"></clipPath>
                                                            <clipPath id="nonForecastMaskvqnvekvk"></clipPath>
                                                            <clipPath id="gridRectMarkerMaskvqnvekvk">
                                                                <rect id="SvgjsRect1862" width="358.73095703125"
                                                                    height="209.73" x="-2" y="-2"
                                                                    rx="0" ry="0" opacity="1"
                                                                    stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <linearGradient id="SvgjsLinearGradient1867" x1="0"
                                                                y1="0" x2="0" y2="1">
                                                                <stop id="SvgjsStop1868" stop-opacity="0.7"
                                                                    stop-color="rgba(105,108,255,0.7)" offset="0">
                                                                </stop>
                                                                <stop id="SvgjsStop1869" stop-opacity="0.25"
                                                                    stop-color="rgba(225,226,255,0.25)" offset="0.95">
                                                                </stop>
                                                                <stop id="SvgjsStop1870" stop-opacity="0.25"
                                                                    stop-color="rgba(225,226,255,0.25)" offset="1">
                                                                </stop>
                                                            </linearGradient>
                                                            <filter id="SvgjsFilter1872" filterUnits="userSpaceOnUse"
                                                                width="200%" height="200%" x="-50%"
                                                                y="-50%">
                                                                <feFlood id="SvgjsFeFlood1873" flood-color="#696cff"
                                                                    flood-opacity="0.15" result="SvgjsFeFlood1873Out"
                                                                    in="SourceGraphic"></feFlood>
                                                                <feComposite id="SvgjsFeComposite1874"
                                                                    in="SvgjsFeFlood1873Out" in2="SourceAlpha"
                                                                    operator="in" result="SvgjsFeComposite1874Out">
                                                                </feComposite>
                                                                <feOffset id="SvgjsFeOffset1875" dx="2"
                                                                    dy="14" result="SvgjsFeOffset1875Out"
                                                                    in="SvgjsFeComposite1874Out">
                                                                </feOffset>
                                                                <feGaussianBlur id="SvgjsFeGaussianBlur1876"
                                                                    stdDeviation="3 "
                                                                    result="SvgjsFeGaussianBlur1876Out"
                                                                    in="SvgjsFeOffset1875Out"></feGaussianBlur>
                                                                <feMerge id="SvgjsFeMerge1877"
                                                                    result="SvgjsFeMerge1877Out" in="SourceGraphic">
                                                                    <feMergeNode id="SvgjsFeMergeNode1878"
                                                                        in="SvgjsFeGaussianBlur1876Out"></feMergeNode>
                                                                    <feMergeNode id="SvgjsFeMergeNode1879"
                                                                        in="[object Arguments]"></feMergeNode>
                                                                </feMerge>
                                                                <feBlend id="SvgjsFeBlend1880" in="SourceGraphic"
                                                                    in2="SvgjsFeMerge1877Out" mode="normal"
                                                                    result="SvgjsFeBlend1880Out"></feBlend>
                                                            </filter>
                                                            <filter id="SvgjsFilter1882" filterUnits="userSpaceOnUse"
                                                                width="200%" height="200%" x="-50%"
                                                                y="-50%">
                                                                <feFlood id="SvgjsFeFlood1883" flood-color="#696cff"
                                                                    flood-opacity="0.15" result="SvgjsFeFlood1883Out"
                                                                    in="SourceGraphic"></feFlood>
                                                                <feComposite id="SvgjsFeComposite1884"
                                                                    in="SvgjsFeFlood1883Out" in2="SourceAlpha"
                                                                    operator="in" result="SvgjsFeComposite1884Out">
                                                                </feComposite>
                                                                <feOffset id="SvgjsFeOffset1885" dx="2"
                                                                    dy="14" result="SvgjsFeOffset1885Out"
                                                                    in="SvgjsFeComposite1884Out">
                                                                </feOffset>
                                                                <feGaussianBlur id="SvgjsFeGaussianBlur1886"
                                                                    stdDeviation="3 "
                                                                    result="SvgjsFeGaussianBlur1886Out"
                                                                    in="SvgjsFeOffset1885Out"></feGaussianBlur>
                                                                <feMerge id="SvgjsFeMerge1887"
                                                                    result="SvgjsFeMerge1887Out" in="SourceGraphic">
                                                                    <feMergeNode id="SvgjsFeMergeNode1888"
                                                                        in="SvgjsFeGaussianBlur1886Out"></feMergeNode>
                                                                    <feMergeNode id="SvgjsFeMergeNode1889"
                                                                        in="[object Arguments]"></feMergeNode>
                                                                </feMerge>
                                                                <feBlend id="SvgjsFeBlend1890" in="SourceGraphic"
                                                                    in2="SvgjsFeMerge1887Out" mode="normal"
                                                                    result="SvgjsFeBlend1890Out"></feBlend>
                                                            </filter>
                                                        </defs>
                                                        <line id="SvgjsLine1860" x1="0" y1="0"
                                                            x2="0" y2="205.73" stroke="#b6b6b6"
                                                            stroke-dasharray="3" stroke-linecap="butt"
                                                            class="apexcharts-xcrosshairs" x="0"
                                                            y="0" width="1" height="205.73"
                                                            fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                                            stroke-width="1"></line>
                                                        <g id="SvgjsG1891" class="apexcharts-xaxis"
                                                            transform="translate(0, 0)">
                                                            <g id="SvgjsG1892" class="apexcharts-xaxis-texts-g"
                                                                transform="translate(0, -4)"><text id="SvgjsText1894"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="0" y="234.73" text-anchor="middle"
                                                                    dominant-baseline="auto" font-size="13px"
                                                                    font-weight="400" fill="#a1acb8"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1895">Jan</tspan>
                                                                    <title>Jan</title>
                                                                </text><text id="SvgjsText1897"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="32.248268821022734" y="234.73"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1898">Feb</tspan>
                                                                    <title>Feb</title>
                                                                </text><text id="SvgjsText1900"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="64.49653764204545" y="234.73"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1901">Mar</tspan>
                                                                    <title>Mar</title>
                                                                </text><text id="SvgjsText1903"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="96.74480646306817" y="234.73"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1904">Apr</tspan>
                                                                    <title>Apr</title>
                                                                </text><text id="SvgjsText1906"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="128.99307528409088" y="234.73"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1907">May</tspan>
                                                                    <title>May</title>
                                                                </text><text id="SvgjsText1909"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="161.2413441051136" y="234.73"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1910">Jun</tspan>
                                                                    <title>Jun</title>
                                                                </text><text id="SvgjsText1912"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="193.48961292613632" y="234.73"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1913">Jul</tspan>
                                                                    <title>Jul</title>
                                                                </text><text id="SvgjsText1915"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="225.73788174715904" y="234.73"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1916">Aug</tspan>
                                                                    <title>Aug</title>
                                                                </text><text id="SvgjsText1918"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="257.98615056818176" y="234.73"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1919">Sep</tspan>
                                                                    <title>Sep</title>
                                                                </text><text id="SvgjsText1921"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="290.2344193892045" y="234.73"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1922">Oct</tspan>
                                                                    <title>Oct</title>
                                                                </text><text id="SvgjsText1924"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="322.48268821022725" y="234.73"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1925">Nov</tspan>
                                                                    <title>Nov</title>
                                                                </text><text id="SvgjsText1927"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="354.73095703125" y="234.73"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan1928">Dec</tspan>
                                                                    <title>Dec</title>
                                                                </text></g>
                                                        </g>
                                                        <g id="SvgjsG1943" class="apexcharts-grid">
                                                            <g id="SvgjsG1944" class="apexcharts-gridlines-horizontal">
                                                                <line id="SvgjsLine1946" x1="0" y1="0"
                                                                    x2="354.73095703125" y2="0"
                                                                    stroke="#eceef1" stroke-dasharray="0"
                                                                    stroke-linecap="butt" class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine1947" x1="0" y1="41.146"
                                                                    x2="354.73095703125" y2="41.146"
                                                                    stroke="#eceef1" stroke-dasharray="0"
                                                                    stroke-linecap="butt" class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine1948" x1="0" y1="82.292"
                                                                    x2="354.73095703125" y2="82.292"
                                                                    stroke="#eceef1" stroke-dasharray="0"
                                                                    stroke-linecap="butt" class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine1949" x1="0" y1="123.438"
                                                                    x2="354.73095703125" y2="123.438"
                                                                    stroke="#eceef1" stroke-dasharray="0"
                                                                    stroke-linecap="butt" class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine1950" x1="0" y1="164.584"
                                                                    x2="354.73095703125" y2="164.584"
                                                                    stroke="#eceef1" stroke-dasharray="0"
                                                                    stroke-linecap="butt" class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine1951" x1="0"
                                                                    y1="205.73000000000002" x2="354.73095703125"
                                                                    y2="205.73000000000002" stroke="#eceef1"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                            </g>
                                                            <g id="SvgjsG1945" class="apexcharts-gridlines-vertical">
                                                            </g>
                                                            <line id="SvgjsLine1953" x1="0" y1="205.73"
                                                                x2="354.73095703125" y2="205.73"
                                                                stroke="transparent" stroke-dasharray="0"
                                                                stroke-linecap="butt"></line>
                                                            <line id="SvgjsLine1952" x1="0" y1="1"
                                                                x2="0" y2="205.73" stroke="transparent"
                                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        </g>
                                                        <g id="SvgjsG1863"
                                                            class="apexcharts-area-series apexcharts-plot-series">
                                                            <g id="SvgjsG1864" class="apexcharts-series"
                                                                seriesName="seriesx1" data:longestSeries="true"
                                                                rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath1871"
                                                                    d="M 0 205.73L 0 109.03689999999997L 32.24826882102273 109.03689999999997L 64.49653764204545 49.37519999999998L 96.74480646306819 49.37519999999998L 128.9930752840909 125.49529999999997L 161.24134410511365 125.49529999999997L 193.48961292613637 172.8132L 225.7378817471591 172.8132L 257.9861505681818 92.57849999999999L 290.23441938920456 92.57849999999999L 322.4826882102273 12.343799999999987L 354.73095703125 12.343799999999987L 354.73095703125 205.73M 354.73095703125 12.343799999999987z"
                                                                    fill="url(#SvgjsLinearGradient1867)"
                                                                    fill-opacity="1" stroke-opacity="1"
                                                                    stroke-linecap="butt" stroke-width="0"
                                                                    stroke-dasharray="0" class="apexcharts-area"
                                                                    index="0"
                                                                    clip-path="url(#gridRectMaskvqnvekvk)"
                                                                    filter="url(#SvgjsFilter1872)"
                                                                    pathTo="M 0 205.73L 0 109.03689999999997L 32.24826882102273 109.03689999999997L 64.49653764204545 49.37519999999998L 96.74480646306819 49.37519999999998L 128.9930752840909 125.49529999999997L 161.24134410511365 125.49529999999997L 193.48961292613637 172.8132L 225.7378817471591 172.8132L 257.9861505681818 92.57849999999999L 290.23441938920456 92.57849999999999L 322.4826882102273 12.343799999999987L 354.73095703125 12.343799999999987L 354.73095703125 205.73M 354.73095703125 12.343799999999987z"
                                                                    pathFrom="M -1 246.87599999999998L -1 246.87599999999998L 32.24826882102273 246.87599999999998L 64.49653764204545 246.87599999999998L 96.74480646306819 246.87599999999998L 128.9930752840909 246.87599999999998L 161.24134410511365 246.87599999999998L 193.48961292613637 246.87599999999998L 225.7378817471591 246.87599999999998L 257.9861505681818 246.87599999999998L 290.23441938920456 246.87599999999998L 322.4826882102273 246.87599999999998L 354.73095703125 246.87599999999998">
                                                                </path>
                                                                <path id="SvgjsPath1881"
                                                                    d="M 0 109.03689999999997L 32.24826882102273 109.03689999999997L 64.49653764204545 49.37519999999998L 96.74480646306819 49.37519999999998L 128.9930752840909 125.49529999999997L 161.24134410511365 125.49529999999997L 193.48961292613637 172.8132L 225.7378817471591 172.8132L 257.9861505681818 92.57849999999999L 290.23441938920456 92.57849999999999L 322.4826882102273 12.343799999999987L 354.73095703125 12.343799999999987"
                                                                    fill="none" fill-opacity="1" stroke="#696cff"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="3" stroke-dasharray="0"
                                                                    class="apexcharts-area" index="0"
                                                                    clip-path="url(#gridRectMaskvqnvekvk)"
                                                                    filter="url(#SvgjsFilter1882)"
                                                                    pathTo="M 0 109.03689999999997L 32.24826882102273 109.03689999999997L 64.49653764204545 49.37519999999998L 96.74480646306819 49.37519999999998L 128.9930752840909 125.49529999999997L 161.24134410511365 125.49529999999997L 193.48961292613637 172.8132L 225.7378817471591 172.8132L 257.9861505681818 92.57849999999999L 290.23441938920456 92.57849999999999L 322.4826882102273 12.343799999999987L 354.73095703125 12.343799999999987"
                                                                    pathFrom="M -1 246.87599999999998L -1 246.87599999999998L 32.24826882102273 246.87599999999998L 64.49653764204545 246.87599999999998L 96.74480646306819 246.87599999999998L 128.9930752840909 246.87599999999998L 161.24134410511365 246.87599999999998L 193.48961292613637 246.87599999999998L 225.7378817471591 246.87599999999998L 257.9861505681818 246.87599999999998L 290.23441938920456 246.87599999999998L 322.4826882102273 246.87599999999998L 354.73095703125 246.87599999999998">
                                                                </path>
                                                                <g id="SvgjsG1865"
                                                                    class="apexcharts-series-markers-wrap"
                                                                    data:realIndex="0">
                                                                    <g class="apexcharts-series-markers">
                                                                        <circle id="SvgjsCircle1959" r="0"
                                                                            cx="0" cy="0"
                                                                            class="apexcharts-marker wrga5ssw no-pointer-events"
                                                                            stroke="#ffffff" fill="#696cff"
                                                                            fill-opacity="1" stroke-width="2"
                                                                            stroke-opacity="0.9"
                                                                            default-marker-size="0"></circle>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG1866" class="apexcharts-datalabels"
                                                                data:realIndex="0"></g>
                                                        </g>
                                                        <line id="SvgjsLine1954" x1="0" y1="0"
                                                            x2="354.73095703125" y2="0" stroke="#b6b6b6"
                                                            stroke-dasharray="0" stroke-width="1"
                                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine1955" x1="0" y1="0"
                                                            x2="354.73095703125" y2="0" stroke-dasharray="0"
                                                            stroke-width="0" stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g id="SvgjsG1956" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG1957" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG1958" class="apexcharts-point-annotations"></g>
                                                        <rect id="SvgjsRect1960" width="0" height="0"
                                                            x="0" y="0" rx="0"
                                                            ry="0" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0" fill="#fefefe"
                                                            class="apexcharts-zoom-rect">
                                                        </rect>
                                                        <rect id="SvgjsRect1961" width="0" height="0"
                                                            x="0" y="0" rx="0"
                                                            ry="0" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0" fill="#fefefe"
                                                            class="apexcharts-selection-rect"></rect>
                                                    </g>
                                                    <rect id="SvgjsRect1859" width="0" height="0"
                                                        x="0" y="0" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fefefe">
                                                    </rect>
                                                    <g id="SvgjsG1929" class="apexcharts-yaxis" rel="0"
                                                        transform="translate(3.4599609375, 0)">
                                                        <g id="SvgjsG1930" class="apexcharts-yaxis-texts-g"><text
                                                                id="SvgjsText1931"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="20" y="16.5" text-anchor="end"
                                                                dominant-baseline="auto" font-size="13px"
                                                                font-weight="400" fill="#a1acb8"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1932">$6k</tspan>
                                                                <title>$6k</title>
                                                            </text><text id="SvgjsText1933"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="20" y="57.646" text-anchor="end"
                                                                dominant-baseline="auto" font-size="13px"
                                                                font-weight="400" fill="#a1acb8"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1934">$5k</tspan>
                                                                <title>$5k</title>
                                                            </text><text id="SvgjsText1935"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="20" y="98.792" text-anchor="end"
                                                                dominant-baseline="auto" font-size="13px"
                                                                font-weight="400" fill="#a1acb8"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1936">$4k</tspan>
                                                                <title>$4k</title>
                                                            </text><text id="SvgjsText1937"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="20" y="139.938" text-anchor="end"
                                                                dominant-baseline="auto" font-size="13px"
                                                                font-weight="400" fill="#a1acb8"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1938">$3k</tspan>
                                                                <title>$3k</title>
                                                            </text><text id="SvgjsText1939"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="20" y="181.084" text-anchor="end"
                                                                dominant-baseline="auto" font-size="13px"
                                                                font-weight="400" fill="#a1acb8"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1940">$2k</tspan>
                                                                <title>$2k</title>
                                                            </text><text id="SvgjsText1941"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="20" y="222.23000000000002"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="13px" font-weight="400" fill="#a1acb8"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1942">$1k</tspan>
                                                                <title>$1k</title>
                                                            </text></g>
                                                    </g>
                                                    <g id="SvgjsG1856" class="apexcharts-annotations"></g>
                                                </svg>
                                                <div class="apexcharts-legend" style="max-height: 125px;"></div>
                                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                                    <div class="apexcharts-tooltip-title"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    </div>
                                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                            class="apexcharts-tooltip-marker"
                                                            style="background-color: rgb(105, 108, 255);"></span>
                                                        <div class="apexcharts-tooltip-text"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                                            <div class="apexcharts-tooltip-goals-group"><span
                                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-z-group"><span
                                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                                    <div class="apexcharts-xaxistooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
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
                                                <div style="width: 453px; height: 290px;"></div>
                                            </div>
                                            <div class="contract-trigger"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card-header d-flex justify-content-between">
                                        <div>
                                            <h5 class="card-title mb-0">Report</h5>
                                            <small class="card-subtitle">Monthly Avg. $45.578k</small>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="totalIncome"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalIncome">
                                                <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="report-list">
                                            <div class="report-list-item rounded-2 mb-3">
                                                <div class="d-flex align-items-start">
                                                    <div class="report-list-icon shadow-sm me-2">
                                                        <img src="../../assets/svg/icons/paypal-icon.svg" width="22"
                                                            height="22" alt="Paypal">
                                                    </div>
                                                    <div
                                                        class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">
                                                        <div class="d-flex flex-column">
                                                            <span>Income</span>
                                                            <h5 class="mb-0">$42,845</h5>
                                                        </div>
                                                        <small class="text-success">+2.34k</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="report-list-item rounded-2 mb-3">
                                                <div class="d-flex align-items-start">
                                                    <div class="report-list-icon shadow-sm me-2">
                                                        <img src="../../assets/svg/icons/shopping-bag-icon.svg"
                                                            width="22" height="22" alt="Shopping Bag">
                                                    </div>
                                                    <div
                                                        class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">
                                                        <div class="d-flex flex-column">
                                                            <span>Expense</span>
                                                            <h5 class="mb-0">$38,658</h5>
                                                        </div>
                                                        <small class="text-danger">-1.15k</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="report-list-item rounded-2">
                                                <div class="d-flex align-items-start">
                                                    <div class="report-list-icon shadow-sm me-2">
                                                        <img src="../../assets/svg/icons/wallet-icon.svg" width="22"
                                                            height="22" alt="Wallet">
                                                    </div>
                                                    <div
                                                        class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">
                                                        <div class="d-flex flex-column">
                                                            <span>Profit</span>
                                                            <h5 class="mb-0">$18,220</h5>
                                                        </div>
                                                        <small class="text-success">+1.35k</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Total Income -->
                    </div>
                    <!--/ Total Income -->
                </div>
                <div class="row">
                    <!-- Performance -->
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card h-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="card-title m-0 me-2">Performance</h5>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="performanceId"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="performanceId">
                                        <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <small>Earnings: <span class="fw-semibold">$846.17</span></small>
                                    </div>
                                    <div class="col-6">
                                        <small>Sales: <span class="fw-semibold">25.7M</span></small>
                                    </div>
                                </div>
                            </div>
                            <div id="performanceChart" style="min-height: 285px;">
                                <div id="apexcharts6832eoh"
                                    class="apexcharts-canvas apexcharts6832eoh apexcharts-theme-light"
                                    style="width: 326px; height: 270px;"><svg id="SvgjsSvg1964" width="326"
                                        height="270" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <foreignObject x="0" y="0" width="326" height="270">
                                            <div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom"
                                                xmlns="http://www.w3.org/1999/xhtml"
                                                style="inset: auto 0px 1px; position: absolute; max-height: 135px;">
                                                <div class="apexcharts-legend-series" rel="1"
                                                    seriesname="Income" data:collapsed="false"
                                                    style="margin: 2px 10px;"><span class="apexcharts-legend-marker"
                                                        rel="1" data:collapsed="false"
                                                        style="background: rgb(105, 108, 255) !important; color: rgb(105, 108, 255); height: 10px; width: 10px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                        class="apexcharts-legend-text" rel="1" i="0"
                                                        data:default-text="Income" data:collapsed="false"
                                                        style="color: rgb(170, 179, 191); font-size: 13px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Income</span>
                                                </div>
                                                <div class="apexcharts-legend-series" rel="2"
                                                    seriesname="Earning" data:collapsed="false"
                                                    style="margin: 2px 10px;"><span class="apexcharts-legend-marker"
                                                        rel="2" data:collapsed="false"
                                                        style="background: rgb(3, 195, 236) !important; color: rgb(3, 195, 236); height: 10px; width: 10px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                        class="apexcharts-legend-text" rel="2" i="1"
                                                        data:default-text="Earning" data:collapsed="false"
                                                        style="color: rgb(170, 179, 191); font-size: 13px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Earning</span>
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
                                        <g id="SvgjsG1966" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(12, 22)">
                                            <defs id="SvgjsDefs1965">
                                                <clipPath id="gridRectMask6832eoh">
                                                    <rect id="SvgjsRect1969" width="296.515625" height="194"
                                                        x="-2" y="0" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMask6832eoh"></clipPath>
                                                <clipPath id="nonForecastMask6832eoh"></clipPath>
                                                <clipPath id="gridRectMarkerMask6832eoh">
                                                    <rect id="SvgjsRect1970" width="296.515625" height="198"
                                                        x="-2" y="-2" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <filter id="SvgjsFilter1978" width="200%" height="200%"
                                                    x="-50%" y="-50%">
                                                    <feFlood id="SvgjsFeFlood1979" flood-color="#000000"
                                                        flood-opacity="0.14" result="SvgjsFeFlood1979Out"
                                                        in="SourceGraphic"></feFlood>
                                                    <feComposite id="SvgjsFeComposite1980" in="SvgjsFeFlood1979Out"
                                                        in2="SourceAlpha" operator="in"
                                                        result="SvgjsFeComposite1980Out">
                                                    </feComposite>
                                                    <feOffset id="SvgjsFeOffset1981" dx="0" dy="6"
                                                        result="SvgjsFeOffset1981Out" in="SvgjsFeComposite1980Out">
                                                    </feOffset>
                                                    <feGaussianBlur id="SvgjsFeGaussianBlur1982" stdDeviation="6 "
                                                        result="SvgjsFeGaussianBlur1982Out" in="SvgjsFeOffset1981Out">
                                                    </feGaussianBlur>
                                                    <feMerge id="SvgjsFeMerge1983" result="SvgjsFeMerge1983Out"
                                                        in="SourceGraphic">
                                                        <feMergeNode id="SvgjsFeMergeNode1984"
                                                            in="SvgjsFeGaussianBlur1982Out">
                                                        </feMergeNode>
                                                        <feMergeNode id="SvgjsFeMergeNode1985" in="[object Arguments]">
                                                        </feMergeNode>
                                                    </feMerge>
                                                    <feBlend id="SvgjsFeBlend1986" in="SourceGraphic"
                                                        in2="SvgjsFeMerge1983Out" mode="normal"
                                                        result="SvgjsFeBlend1986Out">
                                                    </feBlend>
                                                </filter>
                                                <filter id="SvgjsFilter2004" width="200%" height="200%"
                                                    x="-50%" y="-50%">
                                                    <feFlood id="SvgjsFeFlood2005" flood-color="#000000"
                                                        flood-opacity="0.14" result="SvgjsFeFlood2005Out"
                                                        in="SourceGraphic"></feFlood>
                                                    <feComposite id="SvgjsFeComposite2006" in="SvgjsFeFlood2005Out"
                                                        in2="SourceAlpha" operator="in"
                                                        result="SvgjsFeComposite2006Out">
                                                    </feComposite>
                                                    <feOffset id="SvgjsFeOffset2007" dx="0" dy="6"
                                                        result="SvgjsFeOffset2007Out" in="SvgjsFeComposite2006Out">
                                                    </feOffset>
                                                    <feGaussianBlur id="SvgjsFeGaussianBlur2008" stdDeviation="6 "
                                                        result="SvgjsFeGaussianBlur2008Out" in="SvgjsFeOffset2007Out">
                                                    </feGaussianBlur>
                                                    <feMerge id="SvgjsFeMerge2009" result="SvgjsFeMerge2009Out"
                                                        in="SourceGraphic">
                                                        <feMergeNode id="SvgjsFeMergeNode2010"
                                                            in="SvgjsFeGaussianBlur2008Out">
                                                        </feMergeNode>
                                                        <feMergeNode id="SvgjsFeMergeNode2011" in="[object Arguments]">
                                                        </feMergeNode>
                                                    </feMerge>
                                                    <feBlend id="SvgjsFeBlend2012" in="SourceGraphic"
                                                        in2="SvgjsFeMerge2009Out" mode="normal"
                                                        result="SvgjsFeBlend2012Out">
                                                    </feBlend>
                                                </filter>
                                            </defs>
                                            <g id="SvgjsG2043" class="apexcharts-grid">
                                                <g id="SvgjsG2044" class="apexcharts-gridlines-horizontal"
                                                    style="display: none;">
                                                    <line id="SvgjsLine2046" x1="0" y1="0"
                                                        x2="292.515625" y2="0" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2047" x1="0" y1="48.5"
                                                        x2="292.515625" y2="48.5" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2048" x1="0" y1="97"
                                                        x2="292.515625" y2="97" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2049" x1="0" y1="145.5"
                                                        x2="292.515625" y2="145.5" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2050" x1="0" y1="194"
                                                        x2="292.515625" y2="194" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG2045" class="apexcharts-gridlines-vertical"
                                                    style="display: none;"></g>
                                                <line id="SvgjsLine2052" x1="0" y1="194"
                                                    x2="292.515625" y2="194" stroke="transparent"
                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                                <line id="SvgjsLine2051" x1="0" y1="1"
                                                    x2="0" y2="194" stroke="transparent"
                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                            </g>
                                            <g id="SvgjsG1971" class="apexcharts-radar-series apexcharts-plot-series"
                                                transform="translate(146.2578125, 97)">
                                                <polygon id="SvgjsPolygon2031"
                                                    points="0,-99.39880952380952 86.08189415354964,-49.69940476190477 86.08189415354965,49.69940476190474 1.2172843392239077e-14,99.39880952380952 -86.08189415354961,49.6994047619048 -86.08189415354968,-49.699404761904695 "
                                                    fill="none" stroke="#eceef1" stroke-width="1"></polygon>
                                                <polygon id="SvgjsPolygon2032"
                                                    points="0,-74.54910714285714 64.56142061516223,-37.27455357142858 64.56142061516223,37.274553571428555 9.129632544179307e-15,74.54910714285714 -64.5614206151622,37.274553571428605 -64.56142061516226,-37.27455357142852 "
                                                    fill="none" stroke="#eceef1" stroke-width="1"></polygon>
                                                <polygon id="SvgjsPolygon2033"
                                                    points="0,-49.69940476190476 43.04094707677482,-24.849702380952387 43.04094707677483,24.84970238095237 6.0864216961195385e-15,49.69940476190476 -43.040947076774806,24.8497023809524 -43.04094707677484,-24.849702380952348 "
                                                    fill="none" stroke="#eceef1" stroke-width="1"></polygon>
                                                <polygon id="SvgjsPolygon2034"
                                                    points="0,-24.84970238095238 21.52047353838741,-12.424851190476193 21.520473538387414,12.424851190476184 3.0432108480597692e-15,24.84970238095238 -21.520473538387403,12.4248511904762 -21.52047353838742,-12.424851190476174 "
                                                    fill="none" stroke="#eceef1" stroke-width="1"></polygon>
                                                <polygon id="SvgjsPolygon2035" points="0,0 0,0 0,0 0,0 0,0 0,0 "
                                                    fill="none" stroke="#eceef1" stroke-width="1"></polygon>
                                                <line id="SvgjsLine2025" x1="0" y1="-99.39880952380952"
                                                    x2="0" y2="0" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                                <line id="SvgjsLine2026" x1="86.08189415354964"
                                                    y1="-49.69940476190477" x2="0" y2="0"
                                                    stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt">
                                                </line>
                                                <line id="SvgjsLine2027" x1="86.08189415354965" y1="49.69940476190474"
                                                    x2="0" y2="0" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                                <line id="SvgjsLine2028" x1="1.2172843392239077e-14"
                                                    y1="99.39880952380952" x2="0" y2="0"
                                                    stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt">
                                                </line>
                                                <line id="SvgjsLine2029" x1="-86.08189415354961" y1="49.6994047619048"
                                                    x2="0" y2="0" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                                <line id="SvgjsLine2030" x1="-86.08189415354968"
                                                    y1="-49.699404761904695" x2="0" y2="0"
                                                    stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt">
                                                </line>
                                                <g id="SvgjsG2036" class="apexcharts-xaxis"><text id="SvgjsText2037"
                                                        font-family="Public Sans" x="0"
                                                        y="-109.39880952380952" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="13px" font-weight="400"
                                                        fill="#a1acb8" class="apexcharts-datalabel" cx="0"
                                                        cy="-109.39880952380952"
                                                        style="font-family: &quot;Public Sans&quot;;">Jan</text><text
                                                        id="SvgjsText2038" font-family="Public Sans"
                                                        x="96.08189415354964" y="-49.69940476190477"
                                                        text-anchor="start" dominant-baseline="auto" font-size="13px"
                                                        font-weight="400" fill="#a1acb8" class="apexcharts-datalabel"
                                                        cx="96.08189415354964" cy="-49.69940476190477"
                                                        style="font-family: &quot;Public Sans&quot;;">Feb</text><text
                                                        id="SvgjsText2039" font-family="Public Sans"
                                                        x="96.08189415354965" y="49.69940476190474"
                                                        text-anchor="start" dominant-baseline="auto" font-size="13px"
                                                        font-weight="400" fill="#a1acb8" class="apexcharts-datalabel"
                                                        cx="96.08189415354965" cy="49.69940476190474"
                                                        style="font-family: &quot;Public Sans&quot;;">Mar</text><text
                                                        id="SvgjsText2040" font-family="Public Sans"
                                                        x="1.2172843392239077e-14" y="109.39880952380952"
                                                        text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                                        font-weight="400" fill="#a1acb8" class="apexcharts-datalabel"
                                                        cx="1.2172843392239077e-14" cy="109.39880952380952"
                                                        style="font-family: &quot;Public Sans&quot;;">Apr</text><text
                                                        id="SvgjsText2041" font-family="Public Sans"
                                                        x="-96.08189415354961" y="49.6994047619048" text-anchor="end"
                                                        dominant-baseline="auto" font-size="13px" font-weight="400"
                                                        fill="#a1acb8" class="apexcharts-datalabel"
                                                        cx="-96.08189415354961" cy="49.6994047619048"
                                                        style="font-family: &quot;Public Sans&quot;;">May</text><text
                                                        id="SvgjsText2042" font-family="Public Sans"
                                                        x="-96.08189415354968" y="-49.699404761904695"
                                                        text-anchor="end" dominant-baseline="auto" font-size="13px"
                                                        font-weight="400" fill="#a1acb8" class="apexcharts-datalabel"
                                                        cx="-96.08189415354968" cy="-49.699404761904695"
                                                        style="font-family: &quot;Public Sans&quot;;">Jun</text></g>
                                                <g id="SvgjsG1973" class="apexcharts-series" data:longestSeries="true"
                                                    seriesName="Income" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath1976"
                                                        d="M 0 -64.60922619047619L 0 -64.60922619047619L 62.40937326132348 -36.032068452380955L 66.71346796900099 38.51703869047618L 1.2172843392239077e-14 99.39880952380952L -62.409373261323466 36.03206845238098L -51.649136492129806 -29.819642857142814Z"
                                                        fill="none" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-radar" index="0"
                                                        pathTo="M 0 -64.60922619047619L 0 -64.60922619047619L 62.40937326132348 -36.032068452380955L 66.71346796900099 38.51703869047618L 1.2172843392239077e-14 99.39880952380952L -62.409373261323466 36.03206845238098L -51.649136492129806 -29.819642857142814Z"
                                                        pathFrom="M 0 0"></path>
                                                    <path id="SvgjsPath1977"
                                                        d="M 0 -64.60922619047619L 0 -64.60922619047619L 62.40937326132348 -36.032068452380955L 66.71346796900099 38.51703869047618L 1.2172843392239077e-14 99.39880952380952L -62.409373261323466 36.03206845238098L -51.649136492129806 -29.819642857142814Z"
                                                        fill="rgba(105,108,255,1)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-radar" index="0"
                                                        pathTo="M 0 -64.60922619047619L 0 -64.60922619047619L 62.40937326132348 -36.032068452380955L 66.71346796900099 38.51703869047618L 1.2172843392239077e-14 99.39880952380952L -62.409373261323466 36.03206845238098L -51.649136492129806 -29.819642857142814Z"
                                                        pathFrom="M 0 0" filter="url(#SvgjsFilter1978)"></path>
                                                    <g id="SvgjsG1974" class="apexcharts-series-markers-wrap">
                                                        <g id="SvgjsG1988" class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1987" r="0" cx="0"
                                                                cy="-64.60922619047619" class="apexcharts-marker"
                                                                stroke="#ffffff" fill="#696cff" fill-opacity="1"
                                                                stroke-width="1" stroke-opacity="1" rel="0"
                                                                j="0" index="0" default-marker-size="0">
                                                            </circle>
                                                        </g>
                                                        <g id="SvgjsG1990" class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1989" r="0"
                                                                cx="62.40937326132348" cy="-36.032068452380955"
                                                                class="apexcharts-marker" stroke="#ffffff"
                                                                fill="#696cff" fill-opacity="1" stroke-width="1"
                                                                stroke-opacity="1" rel="1" j="1"
                                                                index="0" default-marker-size="0">
                                                            </circle>
                                                        </g>
                                                        <g id="SvgjsG1992" class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1991" r="0"
                                                                cx="66.71346796900099" cy="38.51703869047618"
                                                                class="apexcharts-marker" stroke="#ffffff"
                                                                fill="#696cff" fill-opacity="1" stroke-width="1"
                                                                stroke-opacity="1" rel="2" j="2"
                                                                index="0" default-marker-size="0">
                                                            </circle>
                                                        </g>
                                                        <g id="SvgjsG1994" class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1993" r="0"
                                                                cx="1.2172843392239077e-14" cy="99.39880952380952"
                                                                class="apexcharts-marker" stroke="#ffffff"
                                                                fill="#696cff" fill-opacity="1" stroke-width="1"
                                                                stroke-opacity="1" rel="3" j="3"
                                                                index="0" default-marker-size="0"></circle>
                                                        </g>
                                                        <g id="SvgjsG1996" class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1995" r="0"
                                                                cx="-62.409373261323466" cy="36.03206845238098"
                                                                class="apexcharts-marker" stroke="#ffffff"
                                                                fill="#696cff" fill-opacity="1" stroke-width="1"
                                                                stroke-opacity="1" rel="4" j="4"
                                                                index="0" default-marker-size="0"></circle>
                                                        </g>
                                                        <g id="SvgjsG1998" class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1997" r="0"
                                                                cx="-51.649136492129806" cy="-29.819642857142814"
                                                                class="apexcharts-marker" stroke="#ffffff"
                                                                fill="#696cff" fill-opacity="1" stroke-width="1"
                                                                stroke-opacity="1" rel="5" j="5"
                                                                index="0" default-marker-size="0"></circle>
                                                        </g>
                                                        <g class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle2058" r="0" cx="0"
                                                                cy="0" class="apexcharts-marker w0hwld27d"
                                                                stroke="#ffffff" fill="#696cff" fill-opacity="1"
                                                                stroke-width="1" stroke-opacity="1"
                                                                default-marker-size="0">
                                                            </circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1999" class="apexcharts-series" data:longestSeries="true"
                                                    seriesName="Earning" rel="2" data:realIndex="1">
                                                    <path id="SvgjsPath2002"
                                                        d="M 0 -74.54910714285714L 0 -74.54910714285714L 55.95323119980727 -32.3046130952381L 51.649136492129784 29.81964285714284L 7.912348204955401e-15 64.60922619047619L -51.64913649212976 29.819642857142878L -86.08189415354968 -49.699404761904695Z"
                                                        fill="none" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-radar" index="1"
                                                        pathTo="M 0 -74.54910714285714L 0 -74.54910714285714L 55.95323119980727 -32.3046130952381L 51.649136492129784 29.81964285714284L 7.912348204955401e-15 64.60922619047619L -51.64913649212976 29.819642857142878L -86.08189415354968 -49.699404761904695Z"
                                                        pathFrom="M 0 0"></path>
                                                    <path id="SvgjsPath2003"
                                                        d="M 0 -74.54910714285714L 0 -74.54910714285714L 55.95323119980727 -32.3046130952381L 51.649136492129784 29.81964285714284L 7.912348204955401e-15 64.60922619047619L -51.64913649212976 29.819642857142878L -86.08189415354968 -49.699404761904695Z"
                                                        fill="rgba(3,195,236,0.85)" fill-opacity="1"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                        stroke-dasharray="0" class="apexcharts-radar" index="1"
                                                        pathTo="M 0 -74.54910714285714L 0 -74.54910714285714L 55.95323119980727 -32.3046130952381L 51.649136492129784 29.81964285714284L 7.912348204955401e-15 64.60922619047619L -51.64913649212976 29.819642857142878L -86.08189415354968 -49.699404761904695Z"
                                                        pathFrom="M 0 0" filter="url(#SvgjsFilter2004)"></path>
                                                    <g id="SvgjsG2000" class="apexcharts-series-markers-wrap">
                                                        <g id="SvgjsG2014" class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle2013" r="0" cx="0"
                                                                cy="-74.54910714285714" class="apexcharts-marker"
                                                                stroke="#ffffff" fill="#03c3ec" fill-opacity="1"
                                                                stroke-width="1" stroke-opacity="1" rel="0"
                                                                j="0" index="1" default-marker-size="0">
                                                            </circle>
                                                        </g>
                                                        <g id="SvgjsG2016" class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle2015" r="0"
                                                                cx="55.95323119980727" cy="-32.3046130952381"
                                                                class="apexcharts-marker" stroke="#ffffff"
                                                                fill="#03c3ec" fill-opacity="1" stroke-width="1"
                                                                stroke-opacity="1" rel="1" j="1"
                                                                index="1" default-marker-size="0">
                                                            </circle>
                                                        </g>
                                                        <g id="SvgjsG2018" class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle2017" r="0"
                                                                cx="51.649136492129784" cy="29.81964285714284"
                                                                class="apexcharts-marker" stroke="#ffffff"
                                                                fill="#03c3ec" fill-opacity="1" stroke-width="1"
                                                                stroke-opacity="1" rel="2" j="2"
                                                                index="1" default-marker-size="0"></circle>
                                                        </g>
                                                        <g id="SvgjsG2020" class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle2019" r="0"
                                                                cx="7.912348204955401e-15" cy="64.60922619047619"
                                                                class="apexcharts-marker" stroke="#ffffff"
                                                                fill="#03c3ec" fill-opacity="1" stroke-width="1"
                                                                stroke-opacity="1" rel="3" j="3"
                                                                index="1" default-marker-size="0"></circle>
                                                        </g>
                                                        <g id="SvgjsG2022" class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle2021" r="0"
                                                                cx="-51.64913649212976" cy="29.819642857142878"
                                                                class="apexcharts-marker" stroke="#ffffff"
                                                                fill="#03c3ec" fill-opacity="1" stroke-width="1"
                                                                stroke-opacity="1" rel="4" j="4"
                                                                index="1" default-marker-size="0"></circle>
                                                        </g>
                                                        <g id="SvgjsG2024" class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle2023" r="0"
                                                                cx="-86.08189415354968" cy="-49.699404761904695"
                                                                class="apexcharts-marker" stroke="#ffffff"
                                                                fill="#03c3ec" fill-opacity="1" stroke-width="1"
                                                                stroke-opacity="1" rel="5" j="5"
                                                                index="1" default-marker-size="0"></circle>
                                                        </g>
                                                        <g class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle2059" r="0" cx="0"
                                                                cy="0" class="apexcharts-marker w8tcq6lfn"
                                                                stroke="#ffffff" fill="#03c3ec" fill-opacity="1"
                                                                stroke-width="1" stroke-opacity="1"
                                                                default-marker-size="0">
                                                            </circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1972" class="apexcharts-yaxis"></g>
                                                <g id="SvgjsG1975" class="apexcharts-datalabels" data:realIndex="0">
                                                </g>
                                                <g id="SvgjsG2001" class="apexcharts-datalabels" data:realIndex="1">
                                                </g>
                                            </g>
                                            <line id="SvgjsLine2053" x1="0" y1="0" x2="292.515625"
                                                y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                                stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs">
                                            </line>
                                            <line id="SvgjsLine2054" x1="0" y1="0" x2="292.515625"
                                                y2="0" stroke-dasharray="0" stroke-width="0"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG2055" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG2056" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG2057" class="apexcharts-point-annotations"></g>
                                        </g>
                                        <g id="SvgjsG1967" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(105, 108, 255);"></span>
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
                                                style="background-color: rgb(3, 195, 236);"></span>
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
                                    <div style="width: 327px; height: 426px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                    </div>
                    <!--/ Performance -->

                    <!-- Conversion rate -->
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card h-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <div class="card-title mb-0">
                                    <h5 class="m-0 me-2">Conversion Rate</h5>
                                    <small class="text-muted">Compared To Last Month</small>
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="conversionRate"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="conversionRate">
                                        <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center"
                                    style="position: relative;">
                                    <div class="d-flex flex-row align-items-center gap-1 mb-4">
                                        <h2 class="mb-2">8.72%</h2>
                                        <small class="text-success fw-semibold">
                                            <i class="bx bx-chevron-up"></i>
                                            4.8%
                                        </small>
                                    </div>
                                    <div id="conversionRateChart" style="min-height: 80px;">
                                        <div id="apexcharts22oo4jki"
                                            class="apexcharts-canvas apexcharts22oo4jki apexcharts-theme-light"
                                            style="width: 140px; height: 80px;"><svg id="SvgjsSvg2060" width="140"
                                                height="80" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                style="background: transparent;">
                                                <g id="SvgjsG2062" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(0, 0)">
                                                    <defs id="SvgjsDefs2061">
                                                        <clipPath id="gridRectMask22oo4jki">
                                                            <rect id="SvgjsRect2067" width="141" height="85"
                                                                x="-4.5" y="-2.5" rx="0"
                                                                ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0" fill="#fff">
                                                            </rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMask22oo4jki"></clipPath>
                                                        <clipPath id="nonForecastMask22oo4jki"></clipPath>
                                                        <clipPath id="gridRectMarkerMask22oo4jki">
                                                            <rect id="SvgjsRect2068" width="160" height="108"
                                                                x="-14" y="-14" rx="0"
                                                                ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0" fill="#fff">
                                                            </rect>
                                                        </clipPath>
                                                        <filter id="SvgjsFilter2081" filterUnits="userSpaceOnUse"
                                                            width="200%" height="200%" x="-50%"
                                                            y="-50%">
                                                            <feFlood id="SvgjsFeFlood2082" flood-color="#696cff"
                                                                flood-opacity="0.15" result="SvgjsFeFlood2082Out"
                                                                in="SourceGraphic"></feFlood>
                                                            <feComposite id="SvgjsFeComposite2083"
                                                                in="SvgjsFeFlood2082Out" in2="SourceAlpha"
                                                                operator="in" result="SvgjsFeComposite2083Out">
                                                            </feComposite>
                                                            <feOffset id="SvgjsFeOffset2084" dx="5"
                                                                dy="10" result="SvgjsFeOffset2084Out"
                                                                in="SvgjsFeComposite2083Out">
                                                            </feOffset>
                                                            <feGaussianBlur id="SvgjsFeGaussianBlur2085"
                                                                stdDeviation="3 " result="SvgjsFeGaussianBlur2085Out"
                                                                in="SvgjsFeOffset2084Out">
                                                            </feGaussianBlur>
                                                            <feMerge id="SvgjsFeMerge2086" result="SvgjsFeMerge2086Out"
                                                                in="SourceGraphic">
                                                                <feMergeNode id="SvgjsFeMergeNode2087"
                                                                    in="SvgjsFeGaussianBlur2085Out"></feMergeNode>
                                                                <feMergeNode id="SvgjsFeMergeNode2088"
                                                                    in="[object Arguments]">
                                                                </feMergeNode>
                                                            </feMerge>
                                                            <feBlend id="SvgjsFeBlend2089" in="SourceGraphic"
                                                                in2="SvgjsFeMerge2086Out" mode="normal"
                                                                result="SvgjsFeBlend2089Out"></feBlend>
                                                        </filter>
                                                    </defs>
                                                    <line id="SvgjsLine2066" x1="0" y1="0"
                                                        x2="0" y2="80" stroke="#b6b6b6"
                                                        stroke-dasharray="3" stroke-linecap="butt"
                                                        class="apexcharts-xcrosshairs" x="0" y="0"
                                                        width="1" height="80" fill="#b1b9c4" filter="none"
                                                        fill-opacity="0.9" stroke-width="1"></line>
                                                    <g id="SvgjsG2090" class="apexcharts-xaxis"
                                                        transform="translate(0, 0)">
                                                        <g id="SvgjsG2091" class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, -4)"></g>
                                                    </g>
                                                    <g id="SvgjsG2097" class="apexcharts-grid">
                                                        <g id="SvgjsG2098" class="apexcharts-gridlines-horizontal"
                                                            style="display: none;">
                                                            <line id="SvgjsLine2100" x1="0" y1="0"
                                                                x2="132" y2="0" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine2101" x1="0" y1="16"
                                                                x2="132" y2="16" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine2102" x1="0" y1="32"
                                                                x2="132" y2="32" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine2103" x1="0" y1="48"
                                                                x2="132" y2="48" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine2104" x1="0" y1="64"
                                                                x2="132" y2="64" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine2105" x1="0" y1="80"
                                                                x2="132" y2="80" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                        </g>
                                                        <g id="SvgjsG2099" class="apexcharts-gridlines-vertical"
                                                            style="display: none;"></g>
                                                        <line id="SvgjsLine2107" x1="0" y1="80"
                                                            x2="132" y2="80" stroke="transparent"
                                                            stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        <line id="SvgjsLine2106" x1="0" y1="1"
                                                            x2="0" y2="80" stroke="transparent"
                                                            stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    </g>
                                                    <g id="SvgjsG2069"
                                                        class="apexcharts-line-series apexcharts-plot-series">
                                                        <g id="SvgjsG2070" class="apexcharts-series"
                                                            seriesName="seriesx1" data:longestSeries="true"
                                                            rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath2080"
                                                                d="M 0 70.93333333333334C 15.399999999999999 70.93333333333334 28.6 32 44 32C 59.4 32 72.6 58.66666666666667 88 58.66666666666667C 103.4 58.66666666666667 116.6 13.333333333333343 132 13.333333333333343"
                                                                fill="none" fill-opacity="1"
                                                                stroke="rgba(105,108,255,0.85)" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="5"
                                                                stroke-dasharray="0" class="apexcharts-line"
                                                                index="0" clip-path="url(#gridRectMask22oo4jki)"
                                                                filter="url(#SvgjsFilter2081)"
                                                                pathTo="M 0 70.93333333333334C 15.399999999999999 70.93333333333334 28.6 32 44 32C 59.4 32 72.6 58.66666666666667 88 58.66666666666667C 103.4 58.66666666666667 116.6 13.333333333333343 132 13.333333333333343"
                                                                pathFrom="M -1 144L -1 144L 44 144L 88 144L 132 144">
                                                            </path>
                                                            <g id="SvgjsG2071" class="apexcharts-series-markers-wrap"
                                                                data:realIndex="0">
                                                                <g id="SvgjsG2073" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask22oo4jki)">
                                                                    <circle id="SvgjsCircle2074" r="6"
                                                                        cx="0" cy="70.93333333333334"
                                                                        class="apexcharts-marker no-pointer-events wya8d8shpi"
                                                                        stroke="transparent" fill="transparent"
                                                                        fill-opacity="1" stroke-width="4"
                                                                        stroke-opacity="0.9" rel="0"
                                                                        j="0" index="0"
                                                                        default-marker-size="6"></circle>
                                                                    <circle id="SvgjsCircle2075" r="6"
                                                                        cx="44" cy="32"
                                                                        class="apexcharts-marker no-pointer-events wetcs5vtz"
                                                                        stroke="transparent" fill="transparent"
                                                                        fill-opacity="1" stroke-width="4"
                                                                        stroke-opacity="0.9" rel="1"
                                                                        j="1" index="0"
                                                                        default-marker-size="6"></circle>
                                                                </g>
                                                                <g id="SvgjsG2076" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask22oo4jki)">
                                                                    <circle id="SvgjsCircle2077" r="6"
                                                                        cx="88" cy="58.66666666666667"
                                                                        class="apexcharts-marker no-pointer-events w7hwbrckb"
                                                                        stroke="transparent" fill="transparent"
                                                                        fill-opacity="1" stroke-width="4"
                                                                        stroke-opacity="0.9" rel="2"
                                                                        j="2" index="0"
                                                                        default-marker-size="6"></circle>
                                                                </g>
                                                                <g id="SvgjsG2078" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask22oo4jki)">
                                                                    <circle id="SvgjsCircle2079" r="6"
                                                                        cx="132" cy="13.333333333333343"
                                                                        class="apexcharts-marker no-pointer-events w7jlvyk3u"
                                                                        stroke="#696cff" fill="#ffffff"
                                                                        fill-opacity="1" stroke-width="4"
                                                                        stroke-opacity="0.9" rel="3"
                                                                        j="3" index="0"
                                                                        default-marker-size="6">
                                                                    </circle>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG2072" class="apexcharts-datalabels"
                                                            data:realIndex="0">
                                                        </g>
                                                    </g>
                                                    <line id="SvgjsLine2108" x1="0" y1="0"
                                                        x2="132" y2="0" stroke="#b6b6b6"
                                                        stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs">
                                                    </line>
                                                    <line id="SvgjsLine2109" x1="0" y1="0"
                                                        x2="132" y2="0" stroke-dasharray="0"
                                                        stroke-width="0" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG2110" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG2111" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG2112" class="apexcharts-point-annotations"></g>
                                                </g>
                                                <rect id="SvgjsRect2065" width="0" height="0"
                                                    x="0" y="0" rx="0" ry="0"
                                                    opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fefefe">
                                                </rect>
                                                <g id="SvgjsG2096" class="apexcharts-yaxis" rel="0"
                                                    transform="translate(-18, 0)"></g>
                                                <g id="SvgjsG2063" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend" style="max-height: 40px;"></div>
                                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-title"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                </div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(105, 108, 255);"></span>
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
                                            <div style="width: 279px; height: 81px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </div>
                                <ul class="p-0 m-0">
                                    <li class="d-flex mb-4">
                                        <div class="d-flex w-100 flex-wrap justify-content-between gap-2">
                                            <div class="me-2">
                                                <h6 class="mb-0">Impressions</h6>
                                                <small class="text-muted">12.4k Visits</small>
                                            </div>
                                            <div class="user-progress">
                                                <i class="bx bx-up-arrow-alt text-success me-2"></i>
                                                <strong>12.8%</strong>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex mb-4">
                                        <div class="d-flex w-100 flex-wrap justify-content-between gap-2">
                                            <div class="me-2">
                                                <h6 class="mb-0">Added To Cart</h6>
                                                <small class="text-muted">32 Product in cart</small>
                                            </div>
                                            <div class="user-progress">
                                                <i class="bx bx-down-arrow-alt text-danger me-2"></i> <strong>- 8.5%
                                                </strong>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex mb-4">
                                        <div class="d-flex w-100 flex-wrap justify-content-between gap-2">
                                            <div class="me-2">
                                                <h6 class="mb-0">Checkout</h6>
                                                <small class="text-muted">21 Products checkout</small>
                                            </div>
                                            <div class="user-progress">
                                                <i class="bx bx-up-arrow-alt text-success me-2"></i>
                                                <strong>9.12%</strong>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="d-flex w-100 flex-wrap justify-content-between gap-2">
                                            <div class="me-2">
                                                <h6 class="mb-0">Purchased</h6>
                                                <small class="text-muted">12 Orders</small>
                                            </div>
                                            <div class="user-progress">
                                                <i class="bx bx-up-arrow-alt text-success me-2"></i>
                                                <strong>2.83%</strong>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--/ Conversion rate -->

                    <div class="col-md-12 col-lg-4">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-3 col-lg-6 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="../../assets/img/icons/unicons/cc-warning.png"
                                                    alt="Credit Card" class="rounded">
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn p-0" type="button" id="cardOpt5"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt5">
                                                    <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="d-block mb-1">Revenue</span>
                                        <h3 class="card-title text-nowrap mb-2">$42,389</h3>
                                        <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i>
                                            +52.18%</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3 col-lg-6 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <span class="d-block fw-semibold">Sales</span>
                                        <h3 class="card-title mb-2">482k</h3>
                                        <span class="badge bg-label-info mb-3">+34%</span>
                                        <small class="text-muted d-block">Sales Target</small>
                                        <div class="d-flex align-items-center">
                                            <div class="progress w-75 me-2" style="height: 8px;">
                                                <div class="progress-bar bg-info" style="width: 78%"
                                                    role="progressbar" aria-valuenow="78" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <span>78%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-12 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between gap-3" style="position: relative;">
                                            <div class="d-flex align-items-start flex-column justify-content-between">
                                                <div class="card-title">
                                                    <h5 class="mb-0">Expenses</h5>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <div class="mt-auto">
                                                        <h3 class="mb-2">$84.7k</h3>
                                                        <small class="text-danger text-nowrap fw-semibold"><i
                                                                class="bx bx-down-arrow-alt"></i> 8.2%</small>
                                                    </div>
                                                </div>
                                                <span class="badge bg-label-secondary rounded-pill">2021 Year</span>
                                            </div>
                                            <div id="expensesBarChart" style="min-height: 165px;">
                                                <div id="apexchartsv763ve28"
                                                    class="apexcharts-canvas apexchartsv763ve28 apexcharts-theme-light"
                                                    style="width: 177px; height: 150px;"><svg id="SvgjsSvg2113"
                                                        width="177" height="150"
                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                        xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                        style="background: transparent;">
                                                        <g id="SvgjsG2115" class="apexcharts-inner apexcharts-graphical"
                                                            transform="translate(12, 20)">
                                                            <defs id="SvgjsDefs2114">
                                                                <linearGradient id="SvgjsLinearGradient2118"
                                                                    x1="0" y1="0" x2="0"
                                                                    y2="1">
                                                                    <stop id="SvgjsStop2119" stop-opacity="0.4"
                                                                        stop-color="rgba(216,227,240,0.4)"
                                                                        offset="0">
                                                                    </stop>
                                                                    <stop id="SvgjsStop2120" stop-opacity="0.5"
                                                                        stop-color="rgba(190,209,230,0.5)"
                                                                        offset="1">
                                                                    </stop>
                                                                    <stop id="SvgjsStop2121" stop-opacity="0.5"
                                                                        stop-color="rgba(190,209,230,0.5)"
                                                                        offset="1">
                                                                    </stop>
                                                                </linearGradient>
                                                                <clipPath id="gridRectMaskv763ve28">
                                                                    <rect id="SvgjsRect2123" width="161"
                                                                        height="117" x="-3" y="-1"
                                                                        rx="0" ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff">
                                                                    </rect>
                                                                </clipPath>
                                                                <clipPath id="forecastMaskv763ve28"></clipPath>
                                                                <clipPath id="nonForecastMaskv763ve28"></clipPath>
                                                                <clipPath id="gridRectMarkerMaskv763ve28">
                                                                    <rect id="SvgjsRect2124" width="159"
                                                                        height="119" x="-2" y="-2"
                                                                        rx="0" ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff">
                                                                    </rect>
                                                                </clipPath>
                                                            </defs>
                                                            <rect id="SvgjsRect2122" width="9.3" height="115"
                                                                x="0" y="0" rx="0"
                                                                ry="0" opacity="1" stroke-width="0"
                                                                stroke-dasharray="3"
                                                                fill="url(#SvgjsLinearGradient2118)"
                                                                class="apexcharts-xcrosshairs" y2="115"
                                                                filter="none" fill-opacity="0.9"></rect>
                                                            <g id="SvgjsG2150" class="apexcharts-xaxis"
                                                                transform="translate(0, 0)">
                                                                <g id="SvgjsG2151" class="apexcharts-xaxis-texts-g"
                                                                    transform="translate(0, -4)"></g>
                                                            </g>
                                                            <g id="SvgjsG2160" class="apexcharts-grid">
                                                                <g id="SvgjsG2161"
                                                                    class="apexcharts-gridlines-horizontal"
                                                                    style="display: none;">
                                                                    <line id="SvgjsLine2163" x1="0"
                                                                        y1="0" x2="155" y2="0"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine2164" x1="0"
                                                                        y1="28.75" x2="155" y2="28.75"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine2165" x1="0"
                                                                        y1="57.5" x2="155" y2="57.5"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine2166" x1="0"
                                                                        y1="86.25" x2="155" y2="86.25"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine2167" x1="0"
                                                                        y1="115" x2="155" y2="115"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                </g>
                                                                <g id="SvgjsG2162" class="apexcharts-gridlines-vertical"
                                                                    style="display: none;"></g>
                                                                <line id="SvgjsLine2169" x1="0" y1="115"
                                                                    x2="155" y2="115" stroke="transparent"
                                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                                                <line id="SvgjsLine2168" x1="0" y1="1"
                                                                    x2="0" y2="115" stroke="transparent"
                                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            </g>
                                                            <g id="SvgjsG2125"
                                                                class="apexcharts-bar-series apexcharts-plot-series">
                                                                <g id="SvgjsG2126" class="apexcharts-series"
                                                                    seriesName="2021" rel="1"
                                                                    data:realIndex="0">
                                                                    <path id="SvgjsPath2128"
                                                                        d="M 3.0999999999999996 57.5L 3.0999999999999996 40.9375Q 3.0999999999999996 35.9375 8.1 35.9375L 5.4 35.9375Q 10.4 35.9375 10.4 40.9375L 10.4 40.9375L 10.4 57.5Q 10.4 57.5 10.4 57.5L 3.0999999999999996 57.5Q 3.0999999999999996 57.5 3.0999999999999996 57.5z"
                                                                        fill="rgba(105,108,255,0.85)" fill-opacity="1"
                                                                        stroke="#ffffff" stroke-opacity="1"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        stroke-dasharray="0" class="apexcharts-bar-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMaskv763ve28)"
                                                                        pathTo="M 3.0999999999999996 57.5L 3.0999999999999996 40.9375Q 3.0999999999999996 35.9375 8.1 35.9375L 5.4 35.9375Q 10.4 35.9375 10.4 40.9375L 10.4 40.9375L 10.4 57.5Q 10.4 57.5 10.4 57.5L 3.0999999999999996 57.5Q 3.0999999999999996 57.5 3.0999999999999996 57.5z"
                                                                        pathFrom="M 3.0999999999999996 57.5L 3.0999999999999996 57.5L 10.4 57.5L 10.4 57.5L 10.4 57.5L 10.4 57.5L 10.4 57.5L 3.0999999999999996 57.5"
                                                                        cy="35.9375" cx="17.6" j="0"
                                                                        val="15" barHeight="21.5625"
                                                                        barWidth="9.3">
                                                                    </path>
                                                                    <path id="SvgjsPath2129"
                                                                        d="M 18.6 57.5L 18.6 9.3125Q 18.6 4.3125 23.6 4.3125L 20.900000000000002 4.3125Q 25.900000000000002 4.3125 25.900000000000002 9.3125L 25.900000000000002 9.3125L 25.900000000000002 57.5Q 25.900000000000002 57.5 25.900000000000002 57.5L 18.6 57.5Q 18.6 57.5 18.6 57.5z"
                                                                        fill="rgba(105,108,255,0.85)" fill-opacity="1"
                                                                        stroke="#ffffff" stroke-opacity="1"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        stroke-dasharray="0" class="apexcharts-bar-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMaskv763ve28)"
                                                                        pathTo="M 18.6 57.5L 18.6 9.3125Q 18.6 4.3125 23.6 4.3125L 20.900000000000002 4.3125Q 25.900000000000002 4.3125 25.900000000000002 9.3125L 25.900000000000002 9.3125L 25.900000000000002 57.5Q 25.900000000000002 57.5 25.900000000000002 57.5L 18.6 57.5Q 18.6 57.5 18.6 57.5z"
                                                                        pathFrom="M 18.6 57.5L 18.6 57.5L 25.900000000000002 57.5L 25.900000000000002 57.5L 25.900000000000002 57.5L 25.900000000000002 57.5L 25.900000000000002 57.5L 18.6 57.5"
                                                                        cy="4.3125" cx="33.1" j="1"
                                                                        val="37" barHeight="53.1875"
                                                                        barWidth="9.3">
                                                                    </path>
                                                                    <path id="SvgjsPath2130"
                                                                        d="M 34.1 57.5L 34.1 42.375Q 34.1 37.375 39.1 37.375L 36.400000000000006 37.375Q 41.400000000000006 37.375 41.400000000000006 42.375L 41.400000000000006 42.375L 41.400000000000006 57.5Q 41.400000000000006 57.5 41.400000000000006 57.5L 34.1 57.5Q 34.1 57.5 34.1 57.5z"
                                                                        fill="rgba(105,108,255,0.85)" fill-opacity="1"
                                                                        stroke="#ffffff" stroke-opacity="1"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        stroke-dasharray="0" class="apexcharts-bar-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMaskv763ve28)"
                                                                        pathTo="M 34.1 57.5L 34.1 42.375Q 34.1 37.375 39.1 37.375L 36.400000000000006 37.375Q 41.400000000000006 37.375 41.400000000000006 42.375L 41.400000000000006 42.375L 41.400000000000006 57.5Q 41.400000000000006 57.5 41.400000000000006 57.5L 34.1 57.5Q 34.1 57.5 34.1 57.5z"
                                                                        pathFrom="M 34.1 57.5L 34.1 57.5L 41.400000000000006 57.5L 41.400000000000006 57.5L 41.400000000000006 57.5L 41.400000000000006 57.5L 41.400000000000006 57.5L 34.1 57.5"
                                                                        cy="37.375" cx="48.6" j="2"
                                                                        val="14" barHeight="20.125"
                                                                        barWidth="9.3">
                                                                    </path>
                                                                    <path id="SvgjsPath2131"
                                                                        d="M 49.6 57.5L 49.6 19.375Q 49.6 14.375 54.6 14.375L 51.900000000000006 14.375Q 56.900000000000006 14.375 56.900000000000006 19.375L 56.900000000000006 19.375L 56.900000000000006 57.5Q 56.900000000000006 57.5 56.900000000000006 57.5L 49.6 57.5Q 49.6 57.5 49.6 57.5z"
                                                                        fill="rgba(105,108,255,0.85)" fill-opacity="1"
                                                                        stroke="#ffffff" stroke-opacity="1"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        stroke-dasharray="0" class="apexcharts-bar-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMaskv763ve28)"
                                                                        pathTo="M 49.6 57.5L 49.6 19.375Q 49.6 14.375 54.6 14.375L 51.900000000000006 14.375Q 56.900000000000006 14.375 56.900000000000006 19.375L 56.900000000000006 19.375L 56.900000000000006 57.5Q 56.900000000000006 57.5 56.900000000000006 57.5L 49.6 57.5Q 49.6 57.5 49.6 57.5z"
                                                                        pathFrom="M 49.6 57.5L 49.6 57.5L 56.900000000000006 57.5L 56.900000000000006 57.5L 56.900000000000006 57.5L 56.900000000000006 57.5L 56.900000000000006 57.5L 49.6 57.5"
                                                                        cy="14.375" cx="64.1" j="3"
                                                                        val="30" barHeight="43.125"
                                                                        barWidth="9.3">
                                                                    </path>
                                                                    <path id="SvgjsPath2132"
                                                                        d="M 65.1 57.5L 65.1 7.875Q 65.1 2.875 70.1 2.875L 67.39999999999999 2.875Q 72.39999999999999 2.875 72.39999999999999 7.875L 72.39999999999999 7.875L 72.39999999999999 57.5Q 72.39999999999999 57.5 72.39999999999999 57.5L 65.1 57.5Q 65.1 57.5 65.1 57.5z"
                                                                        fill="rgba(105,108,255,0.85)" fill-opacity="1"
                                                                        stroke="#ffffff" stroke-opacity="1"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        stroke-dasharray="0" class="apexcharts-bar-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMaskv763ve28)"
                                                                        pathTo="M 65.1 57.5L 65.1 7.875Q 65.1 2.875 70.1 2.875L 67.39999999999999 2.875Q 72.39999999999999 2.875 72.39999999999999 7.875L 72.39999999999999 7.875L 72.39999999999999 57.5Q 72.39999999999999 57.5 72.39999999999999 57.5L 65.1 57.5Q 65.1 57.5 65.1 57.5z"
                                                                        pathFrom="M 65.1 57.5L 65.1 57.5L 72.39999999999999 57.5L 72.39999999999999 57.5L 72.39999999999999 57.5L 72.39999999999999 57.5L 72.39999999999999 57.5L 65.1 57.5"
                                                                        cy="2.875" cx="79.6" j="4"
                                                                        val="38" barHeight="54.625"
                                                                        barWidth="9.3">
                                                                    </path>
                                                                    <path id="SvgjsPath2133"
                                                                        d="M 80.6 57.5L 80.6 19.375Q 80.6 14.375 85.6 14.375L 82.89999999999999 14.375Q 87.89999999999999 14.375 87.89999999999999 19.375L 87.89999999999999 19.375L 87.89999999999999 57.5Q 87.89999999999999 57.5 87.89999999999999 57.5L 80.6 57.5Q 80.6 57.5 80.6 57.5z"
                                                                        fill="rgba(105,108,255,0.85)" fill-opacity="1"
                                                                        stroke="#ffffff" stroke-opacity="1"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        stroke-dasharray="0" class="apexcharts-bar-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMaskv763ve28)"
                                                                        pathTo="M 80.6 57.5L 80.6 19.375Q 80.6 14.375 85.6 14.375L 82.89999999999999 14.375Q 87.89999999999999 14.375 87.89999999999999 19.375L 87.89999999999999 19.375L 87.89999999999999 57.5Q 87.89999999999999 57.5 87.89999999999999 57.5L 80.6 57.5Q 80.6 57.5 80.6 57.5z"
                                                                        pathFrom="M 80.6 57.5L 80.6 57.5L 87.89999999999999 57.5L 87.89999999999999 57.5L 87.89999999999999 57.5L 87.89999999999999 57.5L 87.89999999999999 57.5L 80.6 57.5"
                                                                        cy="14.375" cx="95.1" j="5"
                                                                        val="30" barHeight="43.125"
                                                                        barWidth="9.3">
                                                                    </path>
                                                                    <path id="SvgjsPath2134"
                                                                        d="M 96.1 57.5L 96.1 33.75Q 96.1 28.75 101.1 28.75L 98.39999999999999 28.75Q 103.39999999999999 28.75 103.39999999999999 33.75L 103.39999999999999 33.75L 103.39999999999999 57.5Q 103.39999999999999 57.5 103.39999999999999 57.5L 96.1 57.5Q 96.1 57.5 96.1 57.5z"
                                                                        fill="rgba(105,108,255,0.85)" fill-opacity="1"
                                                                        stroke="#ffffff" stroke-opacity="1"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        stroke-dasharray="0" class="apexcharts-bar-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMaskv763ve28)"
                                                                        pathTo="M 96.1 57.5L 96.1 33.75Q 96.1 28.75 101.1 28.75L 98.39999999999999 28.75Q 103.39999999999999 28.75 103.39999999999999 33.75L 103.39999999999999 33.75L 103.39999999999999 57.5Q 103.39999999999999 57.5 103.39999999999999 57.5L 96.1 57.5Q 96.1 57.5 96.1 57.5z"
                                                                        pathFrom="M 96.1 57.5L 96.1 57.5L 103.39999999999999 57.5L 103.39999999999999 57.5L 103.39999999999999 57.5L 103.39999999999999 57.5L 103.39999999999999 57.5L 96.1 57.5"
                                                                        cy="28.75" cx="110.6" j="6"
                                                                        val="20" barHeight="28.75"
                                                                        barWidth="9.3">
                                                                    </path>
                                                                    <path id="SvgjsPath2135"
                                                                        d="M 111.6 57.5L 111.6 43.8125Q 111.6 38.8125 116.6 38.8125L 113.89999999999999 38.8125Q 118.89999999999999 38.8125 118.89999999999999 43.8125L 118.89999999999999 43.8125L 118.89999999999999 57.5Q 118.89999999999999 57.5 118.89999999999999 57.5L 111.6 57.5Q 111.6 57.5 111.6 57.5z"
                                                                        fill="rgba(105,108,255,0.85)" fill-opacity="1"
                                                                        stroke="#ffffff" stroke-opacity="1"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        stroke-dasharray="0" class="apexcharts-bar-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMaskv763ve28)"
                                                                        pathTo="M 111.6 57.5L 111.6 43.8125Q 111.6 38.8125 116.6 38.8125L 113.89999999999999 38.8125Q 118.89999999999999 38.8125 118.89999999999999 43.8125L 118.89999999999999 43.8125L 118.89999999999999 57.5Q 118.89999999999999 57.5 118.89999999999999 57.5L 111.6 57.5Q 111.6 57.5 111.6 57.5z"
                                                                        pathFrom="M 111.6 57.5L 111.6 57.5L 118.89999999999999 57.5L 118.89999999999999 57.5L 118.89999999999999 57.5L 118.89999999999999 57.5L 118.89999999999999 57.5L 111.6 57.5"
                                                                        cy="38.8125" cx="126.1" j="7"
                                                                        val="13" barHeight="18.6875"
                                                                        barWidth="9.3">
                                                                    </path>
                                                                    <path id="SvgjsPath2136"
                                                                        d="M 127.1 57.5L 127.1 42.375Q 127.1 37.375 132.1 37.375L 129.4 37.375Q 134.4 37.375 134.4 42.375L 134.4 42.375L 134.4 57.5Q 134.4 57.5 134.4 57.5L 127.1 57.5Q 127.1 57.5 127.1 57.5z"
                                                                        fill="rgba(105,108,255,0.85)" fill-opacity="1"
                                                                        stroke="#ffffff" stroke-opacity="1"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        stroke-dasharray="0" class="apexcharts-bar-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMaskv763ve28)"
                                                                        pathTo="M 127.1 57.5L 127.1 42.375Q 127.1 37.375 132.1 37.375L 129.4 37.375Q 134.4 37.375 134.4 42.375L 134.4 42.375L 134.4 57.5Q 134.4 57.5 134.4 57.5L 127.1 57.5Q 127.1 57.5 127.1 57.5z"
                                                                        pathFrom="M 127.1 57.5L 127.1 57.5L 134.4 57.5L 134.4 57.5L 134.4 57.5L 134.4 57.5L 134.4 57.5L 127.1 57.5"
                                                                        cy="37.375" cx="141.6" j="8"
                                                                        val="14" barHeight="20.125"
                                                                        barWidth="9.3">
                                                                    </path>
                                                                    <path id="SvgjsPath2137"
                                                                        d="M 142.6 57.5L 142.6 29.4375Q 142.6 24.4375 147.6 24.4375L 144.9 24.4375Q 149.9 24.4375 149.9 29.4375L 149.9 29.4375L 149.9 57.5Q 149.9 57.5 149.9 57.5L 142.6 57.5Q 142.6 57.5 142.6 57.5z"
                                                                        fill="rgba(105,108,255,0.85)" fill-opacity="1"
                                                                        stroke="#ffffff" stroke-opacity="1"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        stroke-dasharray="0" class="apexcharts-bar-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMaskv763ve28)"
                                                                        pathTo="M 142.6 57.5L 142.6 29.4375Q 142.6 24.4375 147.6 24.4375L 144.9 24.4375Q 149.9 24.4375 149.9 29.4375L 149.9 29.4375L 149.9 57.5Q 149.9 57.5 149.9 57.5L 142.6 57.5Q 142.6 57.5 142.6 57.5z"
                                                                        pathFrom="M 142.6 57.5L 142.6 57.5L 149.9 57.5L 149.9 57.5L 149.9 57.5L 149.9 57.5L 149.9 57.5L 142.6 57.5"
                                                                        cy="24.4375" cx="157.1" j="9"
                                                                        val="23" barHeight="33.0625"
                                                                        barWidth="9.3">
                                                                    </path>
                                                                </g>
                                                                <g id="SvgjsG2138" class="apexcharts-series"
                                                                    seriesName="2020" rel="2"
                                                                    data:realIndex="1">
                                                                    <path id="SvgjsPath2140"
                                                                        d="M 3.0999999999999996 62.5L 3.0999999999999996 104.9375Q 3.0999999999999996 109.9375 8.1 109.9375L 5.4 109.9375Q 10.4 109.9375 10.4 104.9375L 10.4 104.9375L 10.4 62.5Q 10.4 62.5 10.4 62.5L 3.0999999999999996 62.5Q 3.0999999999999996 62.5 3.0999999999999996 62.5z"
                                                                        fill="rgba(255,171,0,0.85)" fill-opacity="1"
                                                                        stroke="#ffffff" stroke-opacity="1"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        stroke-dasharray="0" class="apexcharts-bar-area"
                                                                        index="1"
                                                                        clip-path="url(#gridRectMaskv763ve28)"
                                                                        pathTo="M 3.0999999999999996 62.5L 3.0999999999999996 104.9375Q 3.0999999999999996 109.9375 8.1 109.9375L 5.4 109.9375Q 10.4 109.9375 10.4 104.9375L 10.4 104.9375L 10.4 62.5Q 10.4 62.5 10.4 62.5L 3.0999999999999996 62.5Q 3.0999999999999996 62.5 3.0999999999999996 62.5z"
                                                                        pathFrom="M 3.0999999999999996 62.5L 3.0999999999999996 62.5L 10.4 62.5L 10.4 62.5L 10.4 62.5L 10.4 62.5L 10.4 62.5L 3.0999999999999996 62.5"
                                                                        cy="99.9375" cx="17.6" j="0"
                                                                        val="-33" barHeight="-47.4375"
                                                                        barWidth="9.3">
                                                                    </path>
                                                                    <path id="SvgjsPath2141"
                                                                        d="M 18.6 62.5L 18.6 90.5625Q 18.6 95.5625 23.6 95.5625L 20.900000000000002 95.5625Q 25.900000000000002 95.5625 25.900000000000002 90.5625L 25.900000000000002 90.5625L 25.900000000000002 62.5Q 25.900000000000002 62.5 25.900000000000002 62.5L 18.6 62.5Q 18.6 62.5 18.6 62.5z"
                                                                        fill="rgba(255,171,0,0.85)" fill-opacity="1"
                                                                        stroke="#ffffff" stroke-opacity="1"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        stroke-dasharray="0" class="apexcharts-bar-area"
                                                                        index="1"
                                                                        clip-path="url(#gridRectMaskv763ve28)"
                                                                        pathTo="M 18.6 62.5L 18.6 90.5625Q 18.6 95.5625 23.6 95.5625L 20.900000000000002 95.5625Q 25.900000000000002 95.5625 25.900000000000002 90.5625L 25.900000000000002 90.5625L 25.900000000000002 62.5Q 25.900000000000002 62.5 25.900000000000002 62.5L 18.6 62.5Q 18.6 62.5 18.6 62.5z"
                                                                        pathFrom="M 18.6 62.5L 18.6 62.5L 25.900000000000002 62.5L 25.900000000000002 62.5L 25.900000000000002 62.5L 25.900000000000002 62.5L 25.900000000000002 62.5L 18.6 62.5"
                                                                        cy="85.5625" cx="33.1" j="1"
                                                                        val="-23" barHeight="-33.0625"
                                                                        barWidth="9.3">
                                                                    </path>
                                                                    <path id="SvgjsPath2142"
                                                                        d="M 34.1 62.5L 34.1 99.1875Q 34.1 104.1875 39.1 104.1875L 36.400000000000006 104.1875Q 41.400000000000006 104.1875 41.400000000000006 99.1875L 41.400000000000006 99.1875L 41.400000000000006 62.5Q 41.400000000000006 62.5 41.400000000000006 62.5L 34.1 62.5Q 34.1 62.5 34.1 62.5z"
                                                                        fill="rgba(255,171,0,0.85)" fill-opacity="1"
                                                                        stroke="#ffffff" stroke-opacity="1"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        stroke-dasharray="0" class="apexcharts-bar-area"
                                                                        index="1"
                                                                        clip-path="url(#gridRectMaskv763ve28)"
                                                                        pathTo="M 34.1 62.5L 34.1 99.1875Q 34.1 104.1875 39.1 104.1875L 36.400000000000006 104.1875Q 41.400000000000006 104.1875 41.400000000000006 99.1875L 41.400000000000006 99.1875L 41.400000000000006 62.5Q 41.400000000000006 62.5 41.400000000000006 62.5L 34.1 62.5Q 34.1 62.5 34.1 62.5z"
                                                                        pathFrom="M 34.1 62.5L 34.1 62.5L 41.400000000000006 62.5L 41.400000000000006 62.5L 41.400000000000006 62.5L 41.400000000000006 62.5L 41.400000000000006 62.5L 34.1 62.5"
                                                                        cy="94.1875" cx="48.6" j="2"
                                                                        val="-29" barHeight="-41.6875"
                                                                        barWidth="9.3">
                                                                    </path>
                                                                    <path id="SvgjsPath2143"
                                                                        d="M 49.6 62.5L 49.6 87.6875Q 49.6 92.6875 54.6 92.6875L 51.900000000000006 92.6875Q 56.900000000000006 92.6875 56.900000000000006 87.6875L 56.900000000000006 87.6875L 56.900000000000006 62.5Q 56.900000000000006 62.5 56.900000000000006 62.5L 49.6 62.5Q 49.6 62.5 49.6 62.5z"
                                                                        fill="rgba(255,171,0,0.85)" fill-opacity="1"
                                                                        stroke="#ffffff" stroke-opacity="1"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        stroke-dasharray="0" class="apexcharts-bar-area"
                                                                        index="1"
                                                                        clip-path="url(#gridRectMaskv763ve28)"
                                                                        pathTo="M 49.6 62.5L 49.6 87.6875Q 49.6 92.6875 54.6 92.6875L 51.900000000000006 92.6875Q 56.900000000000006 92.6875 56.900000000000006 87.6875L 56.900000000000006 87.6875L 56.900000000000006 62.5Q 56.900000000000006 62.5 56.900000000000006 62.5L 49.6 62.5Q 49.6 62.5 49.6 62.5z"
                                                                        pathFrom="M 49.6 62.5L 49.6 62.5L 56.900000000000006 62.5L 56.900000000000006 62.5L 56.900000000000006 62.5L 56.900000000000006 62.5L 56.900000000000006 62.5L 49.6 62.5"
                                                                        cy="82.6875" cx="64.1" j="3"
                                                                        val="-21" barHeight="-30.1875"
                                                                        barWidth="9.3">
                                                                    </path>
                                                                    <path id="SvgjsPath2144"
                                                                        d="M 65.1 62.5L 65.1 93.4375Q 65.1 98.4375 70.1 98.4375L 67.39999999999999 98.4375Q 72.39999999999999 98.4375 72.39999999999999 93.4375L 72.39999999999999 93.4375L 72.39999999999999 62.5Q 72.39999999999999 62.5 72.39999999999999 62.5L 65.1 62.5Q 65.1 62.5 65.1 62.5z"
                                                                        fill="rgba(255,171,0,0.85)" fill-opacity="1"
                                                                        stroke="#ffffff" stroke-opacity="1"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        stroke-dasharray="0" class="apexcharts-bar-area"
                                                                        index="1"
                                                                        clip-path="url(#gridRectMaskv763ve28)"
                                                                        pathTo="M 65.1 62.5L 65.1 93.4375Q 65.1 98.4375 70.1 98.4375L 67.39999999999999 98.4375Q 72.39999999999999 98.4375 72.39999999999999 93.4375L 72.39999999999999 93.4375L 72.39999999999999 62.5Q 72.39999999999999 62.5 72.39999999999999 62.5L 65.1 62.5Q 65.1 62.5 65.1 62.5z"
                                                                        pathFrom="M 65.1 62.5L 65.1 62.5L 72.39999999999999 62.5L 72.39999999999999 62.5L 72.39999999999999 62.5L 72.39999999999999 62.5L 72.39999999999999 62.5L 65.1 62.5"
                                                                        cy="88.4375" cx="79.6" j="4"
                                                                        val="-25" barHeight="-35.9375"
                                                                        barWidth="9.3">
                                                                    </path>
                                                                    <path id="SvgjsPath2145"
                                                                        d="M 80.6 62.5L 80.6 87.6875Q 80.6 92.6875 85.6 92.6875L 82.89999999999999 92.6875Q 87.89999999999999 92.6875 87.89999999999999 87.6875L 87.89999999999999 87.6875L 87.89999999999999 62.5Q 87.89999999999999 62.5 87.89999999999999 62.5L 80.6 62.5Q 80.6 62.5 80.6 62.5z"
                                                                        fill="rgba(255,171,0,0.85)" fill-opacity="1"
                                                                        stroke="#ffffff" stroke-opacity="1"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        stroke-dasharray="0" class="apexcharts-bar-area"
                                                                        index="1"
                                                                        clip-path="url(#gridRectMaskv763ve28)"
                                                                        pathTo="M 80.6 62.5L 80.6 87.6875Q 80.6 92.6875 85.6 92.6875L 82.89999999999999 92.6875Q 87.89999999999999 92.6875 87.89999999999999 87.6875L 87.89999999999999 87.6875L 87.89999999999999 62.5Q 87.89999999999999 62.5 87.89999999999999 62.5L 80.6 62.5Q 80.6 62.5 80.6 62.5z"
                                                                        pathFrom="M 80.6 62.5L 80.6 62.5L 87.89999999999999 62.5L 87.89999999999999 62.5L 87.89999999999999 62.5L 87.89999999999999 62.5L 87.89999999999999 62.5L 80.6 62.5"
                                                                        cy="82.6875" cx="95.1" j="5"
                                                                        val="-21" barHeight="-30.1875"
                                                                        barWidth="9.3">
                                                                    </path>
                                                                    <path id="SvgjsPath2146"
                                                                        d="M 96.1 62.5L 96.1 90.5625Q 96.1 95.5625 101.1 95.5625L 98.39999999999999 95.5625Q 103.39999999999999 95.5625 103.39999999999999 90.5625L 103.39999999999999 90.5625L 103.39999999999999 62.5Q 103.39999999999999 62.5 103.39999999999999 62.5L 96.1 62.5Q 96.1 62.5 96.1 62.5z"
                                                                        fill="rgba(255,171,0,0.85)" fill-opacity="1"
                                                                        stroke="#ffffff" stroke-opacity="1"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        stroke-dasharray="0" class="apexcharts-bar-area"
                                                                        index="1"
                                                                        clip-path="url(#gridRectMaskv763ve28)"
                                                                        pathTo="M 96.1 62.5L 96.1 90.5625Q 96.1 95.5625 101.1 95.5625L 98.39999999999999 95.5625Q 103.39999999999999 95.5625 103.39999999999999 90.5625L 103.39999999999999 90.5625L 103.39999999999999 62.5Q 103.39999999999999 62.5 103.39999999999999 62.5L 96.1 62.5Q 96.1 62.5 96.1 62.5z"
                                                                        pathFrom="M 96.1 62.5L 96.1 62.5L 103.39999999999999 62.5L 103.39999999999999 62.5L 103.39999999999999 62.5L 103.39999999999999 62.5L 103.39999999999999 62.5L 96.1 62.5"
                                                                        cy="85.5625" cx="110.6" j="6"
                                                                        val="-23" barHeight="-33.0625"
                                                                        barWidth="9.3">
                                                                    </path>
                                                                    <path id="SvgjsPath2147"
                                                                        d="M 111.6 62.5L 111.6 84.8125Q 111.6 89.8125 116.6 89.8125L 113.89999999999999 89.8125Q 118.89999999999999 89.8125 118.89999999999999 84.8125L 118.89999999999999 84.8125L 118.89999999999999 62.5Q 118.89999999999999 62.5 118.89999999999999 62.5L 111.6 62.5Q 111.6 62.5 111.6 62.5z"
                                                                        fill="rgba(255,171,0,0.85)" fill-opacity="1"
                                                                        stroke="#ffffff" stroke-opacity="1"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        stroke-dasharray="0" class="apexcharts-bar-area"
                                                                        index="1"
                                                                        clip-path="url(#gridRectMaskv763ve28)"
                                                                        pathTo="M 111.6 62.5L 111.6 84.8125Q 111.6 89.8125 116.6 89.8125L 113.89999999999999 89.8125Q 118.89999999999999 89.8125 118.89999999999999 84.8125L 118.89999999999999 84.8125L 118.89999999999999 62.5Q 118.89999999999999 62.5 118.89999999999999 62.5L 111.6 62.5Q 111.6 62.5 111.6 62.5z"
                                                                        pathFrom="M 111.6 62.5L 111.6 62.5L 118.89999999999999 62.5L 118.89999999999999 62.5L 118.89999999999999 62.5L 118.89999999999999 62.5L 118.89999999999999 62.5L 111.6 62.5"
                                                                        cy="79.8125" cx="126.1" j="7"
                                                                        val="-19" barHeight="-27.3125"
                                                                        barWidth="9.3">
                                                                    </path>
                                                                    <path id="SvgjsPath2148"
                                                                        d="M 127.1 62.5L 127.1 110.6875Q 127.1 115.6875 132.1 115.6875L 129.4 115.6875Q 134.4 115.6875 134.4 110.6875L 134.4 110.6875L 134.4 62.5Q 134.4 62.5 134.4 62.5L 127.1 62.5Q 127.1 62.5 127.1 62.5z"
                                                                        fill="rgba(255,171,0,0.85)" fill-opacity="1"
                                                                        stroke="#ffffff" stroke-opacity="1"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        stroke-dasharray="0" class="apexcharts-bar-area"
                                                                        index="1"
                                                                        clip-path="url(#gridRectMaskv763ve28)"
                                                                        pathTo="M 127.1 62.5L 127.1 110.6875Q 127.1 115.6875 132.1 115.6875L 129.4 115.6875Q 134.4 115.6875 134.4 110.6875L 134.4 110.6875L 134.4 62.5Q 134.4 62.5 134.4 62.5L 127.1 62.5Q 127.1 62.5 127.1 62.5z"
                                                                        pathFrom="M 127.1 62.5L 127.1 62.5L 134.4 62.5L 134.4 62.5L 134.4 62.5L 134.4 62.5L 134.4 62.5L 127.1 62.5"
                                                                        cy="105.6875" cx="141.6" j="8"
                                                                        val="-37" barHeight="-53.1875"
                                                                        barWidth="9.3">
                                                                    </path>
                                                                    <path id="SvgjsPath2149"
                                                                        d="M 142.6 62.5L 142.6 89.125Q 142.6 94.125 147.6 94.125L 144.9 94.125Q 149.9 94.125 149.9 89.125L 149.9 89.125L 149.9 62.5Q 149.9 62.5 149.9 62.5L 142.6 62.5Q 142.6 62.5 142.6 62.5z"
                                                                        fill="rgba(255,171,0,0.85)" fill-opacity="1"
                                                                        stroke="#ffffff" stroke-opacity="1"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        stroke-dasharray="0" class="apexcharts-bar-area"
                                                                        index="1"
                                                                        clip-path="url(#gridRectMaskv763ve28)"
                                                                        pathTo="M 142.6 62.5L 142.6 89.125Q 142.6 94.125 147.6 94.125L 144.9 94.125Q 149.9 94.125 149.9 89.125L 149.9 89.125L 149.9 62.5Q 149.9 62.5 149.9 62.5L 142.6 62.5Q 142.6 62.5 142.6 62.5z"
                                                                        pathFrom="M 142.6 62.5L 142.6 62.5L 149.9 62.5L 149.9 62.5L 149.9 62.5L 149.9 62.5L 149.9 62.5L 142.6 62.5"
                                                                        cy="84.125" cx="157.1" j="9"
                                                                        val="-22" barHeight="-31.625"
                                                                        barWidth="9.3">
                                                                    </path>
                                                                </g>
                                                                <g id="SvgjsG2127" class="apexcharts-datalabels"
                                                                    data:realIndex="0"></g>
                                                                <g id="SvgjsG2139" class="apexcharts-datalabels"
                                                                    data:realIndex="1"></g>
                                                            </g>
                                                            <line id="SvgjsLine2170" x1="0" y1="0"
                                                                x2="155" y2="0" stroke="#b6b6b6"
                                                                stroke-dasharray="0" stroke-width="1"
                                                                stroke-linecap="butt" class="apexcharts-ycrosshairs">
                                                            </line>
                                                            <line id="SvgjsLine2171" x1="0" y1="0"
                                                                x2="155" y2="0" stroke-dasharray="0"
                                                                stroke-width="0" stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs-hidden"></line>
                                                            <g id="SvgjsG2172" class="apexcharts-yaxis-annotations"></g>
                                                            <g id="SvgjsG2173" class="apexcharts-xaxis-annotations"></g>
                                                            <g id="SvgjsG2174" class="apexcharts-point-annotations"></g>
                                                        </g>
                                                        <g id="SvgjsG2159" class="apexcharts-yaxis" rel="0"
                                                            transform="translate(-18, 0)"></g>
                                                        <g id="SvgjsG2116" class="apexcharts-annotations"></g>
                                                    </svg>
                                                    <div class="apexcharts-legend" style="max-height: 75px;"></div>
                                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                                        <div class="apexcharts-tooltip-title"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        </div>
                                                        <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                                            <span class="apexcharts-tooltip-marker"
                                                                style="background-color: rgb(105, 108, 255);"></span>
                                                            <div class="apexcharts-tooltip-text"
                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                <div class="apexcharts-tooltip-y-group"><span
                                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                                        class="apexcharts-tooltip-text-y-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-goals-group"><span
                                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                                        class="apexcharts-tooltip-text-goals-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-z-group"><span
                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="apexcharts-tooltip-series-group" style="order: 2;">
                                                            <span class="apexcharts-tooltip-marker"
                                                                style="background-color: rgb(255, 171, 0);"></span>
                                                            <div class="apexcharts-tooltip-text"
                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                <div class="apexcharts-tooltip-y-group"><span
                                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                                        class="apexcharts-tooltip-text-y-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-goals-group"><span
                                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                                        class="apexcharts-tooltip-text-goals-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-z-group"><span
                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                </div>
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
                                                    <div style="width: 279px; height: 166px;"></div>
                                                </div>
                                                <div class="contract-trigger"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-8 mb-4 mb-md-0">
                        <div class="card">
                            <div class="table-responsive text-nowrap">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Category</th>
                                            <th>Payment</th>
                                            <th>Order Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="../../assets/img/icons/products/oneplus.png"
                                                        alt="Oneplus" height="32" width="32" class="me-2">
                                                    <div class="d-flex flex-column">
                                                        <span class="fw-semibold lh-1">OnePlus 7Pro</span>
                                                        <small class="text-muted">OnePlus</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-label-primary rounded-pill badge-center p-3 me-2"><i
                                                        class="bx bx-mobile-alt bx-xs"></i></span> Smart Phone</td>
                                            <td>
                                                <div class="text-muted lh-1"><span
                                                        class="text-primary fw-semibold">$120</span>/499</div>
                                                <small class="text-muted">Partially Paid</small>
                                            </td>
                                            <td><span class="badge bg-label-primary">Confirmed</span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown"><i
                                                            class="bx bx-dots-vertical-rounded"></i></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="bx bx-edit-alt me-1"></i> View Details</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="bx bx-trash me-1"></i> Buy Again</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="../../assets/img/icons/products/magic-mouse.png"
                                                        alt="Apple" height="32" width="32" class="me-2">
                                                    <div class="d-flex flex-column">
                                                        <span class="fw-semibold lh-1">Magic Mouse</span>
                                                        <small class="text-muted">Apple</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-label-warning rounded-pill badge-center p-3 me-2"><i
                                                        class="bx bx-mouse bx-xs"></i></span> Mouse</td>
                                            <td>
                                                <div class="lh-1"><span class="text-primary fw-semibold">$149</span>
                                                </div>
                                                <small class="text-muted">Fully Paid</small>
                                            </td>
                                            <td><span class="badge bg-label-success">Completed</span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown"><i
                                                            class="bx bx-dots-vertical-rounded"></i></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="bx bx-edit-alt me-1"></i> View Details</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="bx bx-trash me-1"></i> Buy Again</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="../../assets/img/icons/products/imac-pro.png"
                                                        alt="Apple" height="32" width="32" class="me-2">
                                                    <div class="d-flex flex-column">
                                                        <span class="fw-semibold lh-1">iMac Pro</span>
                                                        <small class="text-muted">Apple</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-label-info rounded-pill badge-center p-3 me-2"><i
                                                        class="bx bx-desktop bx-xs"></i></span> Computer</td>
                                            <td>
                                                <div class="text-muted lh-1"><span
                                                        class="text-primary fw-semibold">$0</span>/899</div>
                                                <small class="text-muted">Unpaid</small>
                                            </td>
                                            <td><span class="badge bg-label-danger">Cancelled</span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown"><i
                                                            class="bx bx-dots-vertical-rounded"></i></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="bx bx-edit-alt me-1"></i> View Details</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="bx bx-trash me-1"></i> Buy Again</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="../../assets/img/icons/products/note10.png" alt="Samsung"
                                                        height="32" width="32" class="me-2">
                                                    <div class="d-flex flex-column">
                                                        <span class="fw-semibold lh-1">Note 10</span>
                                                        <small class="text-muted">Samsung</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-label-primary rounded-pill badge-center p-3 me-2"><i
                                                        class="bx bx-mobile-alt bx-xs"></i></span> Smart Phone</td>
                                            <td>
                                                <div class="lh-1"><span class="text-primary fw-semibold">$149</span>
                                                </div>
                                                <small class="text-muted">Fully Paid</small>
                                            </td>
                                            <td><span class="badge bg-label-success">Completed</span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown"><i
                                                            class="bx bx-dots-vertical-rounded"></i></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="bx bx-edit-alt me-1"></i> View Details</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="bx bx-trash me-1"></i> Buy Again</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="../../assets/img/icons/products/iphone.png" alt="Apple"
                                                        height="32" width="32" class="me-2">
                                                    <div class="d-flex flex-column">
                                                        <span class="fw-semibold lh-1">iPhone 11 Pro</span>
                                                        <small class="text-muted">Apple</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-label-primary rounded-pill badge-center p-3 me-2"><i
                                                        class="bx bx-mobile-alt bx-xs"></i></span> Smart Phone</td>
                                            <td>
                                                <div class="lh-1"><span class="text-primary fw-semibold">$399</span>
                                                </div>
                                                <small class="text-muted">Fully Paid</small>
                                            </td>
                                            <td><span class="badge bg-label-success">Completed</span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown"><i
                                                            class="bx bx-dots-vertical-rounded"></i></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="bx bx-edit-alt me-1"></i> View Details</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="bx bx-trash me-1"></i> Buy Again</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="../../assets/img/icons/products/mi-tv.png" alt="Xiaomi"
                                                        height="32" width="32" class="me-2">
                                                    <div class="d-flex flex-column">
                                                        <span class="fw-semibold lh-1">Mi LED TV 4X</span>
                                                        <small class="text-muted">Xiaomi</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-label-danger rounded-pill badge-center p-3 me-2"><i
                                                        class="bx bx-tv bx-xs"></i></span> Smart TV</td>
                                            <td>
                                                <div class="text-muted lh-1"><span
                                                        class="text-primary fw-semibold">$349</span>/2499</div>
                                                <small class="text-muted">Partially Paid</small>
                                            </td>
                                            <td><span class="badge bg-label-primary">Confirmed</span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown"><i
                                                            class="bx bx-dots-vertical-rounded"></i></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="bx bx-edit-alt me-1"></i> View Details</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="bx bx-trash me-1"></i> Buy Again</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="../../assets/img/icons/products/logitech-mx.png"
                                                        alt="Logitech" height="32" width="32" class="me-2">
                                                    <div class="d-flex flex-column">
                                                        <span class="fw-semibold lh-1">Logitech MX</span>
                                                        <small class="text-muted">Logitech</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-label-warning rounded-pill badge-center p-3 me-2"><i
                                                        class="bx bx-mouse bx-xs"></i></span> Mouse</td>
                                            <td>
                                                <div class="lh-1"><span class="text-primary fw-semibold">$89</span>
                                                </div>
                                                <small class="text-muted">Fully Paid</small>
                                            </td>
                                            <td><span class="badge bg-label-primary">Completed</span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown"><i
                                                            class="bx bx-dots-vertical-rounded"></i></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="bx bx-edit-alt me-1"></i> View Details</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="bx bx-trash me-1"></i> Buy Again</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Total Balance -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="card-title m-0 me-2">Total Balance</h5>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="totalBalance"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalBalance">
                                        <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body" style="position: relative;">
                                <div class="d-flex justify-content-start">
                                    <div class="d-flex pe-4">
                                        <div class="me-3">
                                            <span class="badge bg-label-warning p-2"><i
                                                    class="bx bx-wallet text-warning"></i></span>
                                        </div>
                                        <div>
                                            <h6 class="mb-0">$2.54k</h6>
                                            <small>Wallet</small>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="me-3">
                                            <span class="badge bg-label-secondary p-2"><i
                                                    class="bx bx-dollar text-secondary"></i></span>
                                        </div>
                                        <div>
                                            <h6 class="mb-0">$4.2k</h6>
                                            <small>Paypal</small>
                                        </div>
                                    </div>
                                </div>
                                <div id="totalBalanceChart" class="border-bottom mb-3" style="min-height: 250px;">
                                    <div id="apexcharts2ranl0rl"
                                        class="apexcharts-canvas apexcharts2ranl0rl apexcharts-theme-light"
                                        style="width: 278px; height: 250px;"><svg id="SvgjsSvg2175" width="278"
                                            height="250" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                            transform="translate(0, 0)" style="background: transparent;">
                                            <g id="SvgjsG2177" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(10, 20)">
                                                <defs id="SvgjsDefs2176">
                                                    <clipPath id="gridRectMask2ranl0rl">
                                                        <rect id="SvgjsRect2182" width="264.515625" height="184.73"
                                                            x="-4" y="-2" rx="0"
                                                            ry="0" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMask2ranl0rl"></clipPath>
                                                    <clipPath id="nonForecastMask2ranl0rl"></clipPath>
                                                    <clipPath id="gridRectMarkerMask2ranl0rl">
                                                        <rect id="SvgjsRect2183" width="284.515625" height="208.73"
                                                            x="-14" y="-14" rx="0"
                                                            ry="0" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <filter id="SvgjsFilter2200" filterUnits="userSpaceOnUse"
                                                        width="200%" height="200%" x="-50%" y="-50%">
                                                        <feFlood id="SvgjsFeFlood2201" flood-color="#ffab00"
                                                            flood-opacity="0.15" result="SvgjsFeFlood2201Out"
                                                            in="SourceGraphic"></feFlood>
                                                        <feComposite id="SvgjsFeComposite2202" in="SvgjsFeFlood2201Out"
                                                            in2="SourceAlpha" operator="in"
                                                            result="SvgjsFeComposite2202Out">
                                                        </feComposite>
                                                        <feOffset id="SvgjsFeOffset2203" dx="5" dy="10"
                                                            result="SvgjsFeOffset2203Out" in="SvgjsFeComposite2202Out">
                                                        </feOffset>
                                                        <feGaussianBlur id="SvgjsFeGaussianBlur2204" stdDeviation="3 "
                                                            result="SvgjsFeGaussianBlur2204Out"
                                                            in="SvgjsFeOffset2203Out">
                                                        </feGaussianBlur>
                                                        <feMerge id="SvgjsFeMerge2205" result="SvgjsFeMerge2205Out"
                                                            in="SourceGraphic">
                                                            <feMergeNode id="SvgjsFeMergeNode2206"
                                                                in="SvgjsFeGaussianBlur2204Out"></feMergeNode>
                                                            <feMergeNode id="SvgjsFeMergeNode2207"
                                                                in="[object Arguments]">
                                                            </feMergeNode>
                                                        </feMerge>
                                                        <feBlend id="SvgjsFeBlend2208" in="SourceGraphic"
                                                            in2="SvgjsFeMerge2205Out" mode="normal"
                                                            result="SvgjsFeBlend2208Out"></feBlend>
                                                    </filter>
                                                </defs>
                                                <line id="SvgjsLine2181" x1="0" y1="0"
                                                    x2="0" y2="180.73" stroke="#b6b6b6"
                                                    stroke-dasharray="3" stroke-linecap="butt"
                                                    class="apexcharts-xcrosshairs" x="0" y="0"
                                                    width="1" height="180.73" fill="#b1b9c4" filter="none"
                                                    fill-opacity="0.9" stroke-width="1"></line>
                                                <g id="SvgjsG2209" class="apexcharts-xaxis"
                                                    transform="translate(0, 0)">
                                                    <g id="SvgjsG2210" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"><text id="SvgjsText2212"
                                                            font-family="Helvetica, Arial, sans-serif" x="0"
                                                            y="209.73" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px"
                                                            font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan2213">Jan</tspan>
                                                            <title>Jan</title>
                                                        </text><text id="SvgjsText2215"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="51.30312500000001" y="209.73" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px"
                                                            font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan2216">Feb</tspan>
                                                            <title>Feb</title>
                                                        </text><text id="SvgjsText2218"
                                                            font-family="Helvetica, Arial, sans-serif" x="102.60625"
                                                            y="209.73" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px"
                                                            font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan2219">Mar</tspan>
                                                            <title>Mar</title>
                                                        </text><text id="SvgjsText2221"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="153.90937499999998" y="209.73" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px"
                                                            font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan2222">Apr</tspan>
                                                            <title>Apr</title>
                                                        </text><text id="SvgjsText2224"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="205.21249999999998" y="209.73" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px"
                                                            font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan2225">May</tspan>
                                                            <title>May</title>
                                                        </text><text id="SvgjsText2227"
                                                            font-family="Helvetica, Arial, sans-serif" x="256.515625"
                                                            y="209.73" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px"
                                                            font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan2228">Jun</tspan>
                                                            <title>Jun</title>
                                                        </text></g>
                                                </g>
                                                <g id="SvgjsG2231" class="apexcharts-grid">
                                                    <g id="SvgjsG2232" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine2234" x1="0" y1="0"
                                                            x2="256.515625" y2="0" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2235" x1="0" y1="36.146"
                                                            x2="256.515625" y2="36.146" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2236" x1="0" y1="72.292"
                                                            x2="256.515625" y2="72.292" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2237" x1="0" y1="108.438"
                                                            x2="256.515625" y2="108.438" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2238" x1="0" y1="144.584"
                                                            x2="256.515625" y2="144.584" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2239" x1="0"
                                                            y1="180.73000000000002" x2="256.515625"
                                                            y2="180.73000000000002" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG2233" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine2241" x1="0" y1="180.73"
                                                        x2="256.515625" y2="180.73" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    <line id="SvgjsLine2240" x1="0" y1="1"
                                                        x2="0" y2="180.73" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                </g>
                                                <g id="SvgjsG2184"
                                                    class="apexcharts-line-series apexcharts-plot-series">
                                                    <g id="SvgjsG2185" class="apexcharts-series" seriesName="seriesx1"
                                                        data:longestSeries="true" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath2199"
                                                            d="M 0 153.98196000000002C 17.95609375 153.98196000000002 33.34703125 101.2088 51.303125 101.2088C 69.25921875 101.2088 84.65015625000001 137.3548 102.60625 137.3548C 120.56234375 137.3548 135.95328125 54.218999999999994 153.90937499999998 54.218999999999994C 171.86546875 54.218999999999994 187.25640625 104.82339999999999 205.2125 104.82339999999999C 223.16859375 104.82339999999999 238.55953125 25.3022 256.515625 25.3022"
                                                            fill="none" fill-opacity="1"
                                                            stroke="rgba(255,171,0,0.85)" stroke-opacity="1"
                                                            stroke-linecap="butt" stroke-width="4"
                                                            stroke-dasharray="0" class="apexcharts-line"
                                                            index="0" clip-path="url(#gridRectMask2ranl0rl)"
                                                            filter="url(#SvgjsFilter2200)"
                                                            pathTo="M 0 153.98196000000002C 17.95609375 153.98196000000002 33.34703125 101.2088 51.303125 101.2088C 69.25921875 101.2088 84.65015625000001 137.3548 102.60625 137.3548C 120.56234375 137.3548 135.95328125 54.218999999999994 153.90937499999998 54.218999999999994C 171.86546875 54.218999999999994 187.25640625 104.82339999999999 205.2125 104.82339999999999C 223.16859375 104.82339999999999 238.55953125 25.3022 256.515625 25.3022"
                                                            pathFrom="M -1 253.022L -1 253.022L 51.303125 253.022L 102.60625 253.022L 153.90937499999998 253.022L 205.2125 253.022L 256.515625 253.022">
                                                        </path>
                                                        <g id="SvgjsG2186" class="apexcharts-series-markers-wrap"
                                                            data:realIndex="0">
                                                            <g id="SvgjsG2188" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMask2ranl0rl)">
                                                                <circle id="SvgjsCircle2189" r="6"
                                                                    cx="0" cy="153.98196000000002"
                                                                    class="apexcharts-marker no-pointer-events wzmxqifjt"
                                                                    stroke="transparent" fill="transparent"
                                                                    fill-opacity="1" stroke-width="4"
                                                                    stroke-opacity="0.9" rel="0" j="0"
                                                                    index="0" default-marker-size="6">
                                                                </circle>
                                                                <circle id="SvgjsCircle2190" r="6"
                                                                    cx="51.303125" cy="101.2088"
                                                                    class="apexcharts-marker no-pointer-events wi355oktj"
                                                                    stroke="transparent" fill="transparent"
                                                                    fill-opacity="1" stroke-width="4"
                                                                    stroke-opacity="0.9" rel="1" j="1"
                                                                    index="0" default-marker-size="6">
                                                                </circle>
                                                            </g>
                                                            <g id="SvgjsG2191" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMask2ranl0rl)">
                                                                <circle id="SvgjsCircle2192" r="6"
                                                                    cx="102.60625" cy="137.3548"
                                                                    class="apexcharts-marker no-pointer-events w3g8yhd1d"
                                                                    stroke="transparent" fill="transparent"
                                                                    fill-opacity="1" stroke-width="4"
                                                                    stroke-opacity="0.9" rel="2" j="2"
                                                                    index="0" default-marker-size="6">
                                                                </circle>
                                                            </g>
                                                            <g id="SvgjsG2193" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMask2ranl0rl)">
                                                                <circle id="SvgjsCircle2194" r="6"
                                                                    cx="153.90937499999998" cy="54.218999999999994"
                                                                    class="apexcharts-marker no-pointer-events w2b63s7lpk"
                                                                    stroke="transparent" fill="transparent"
                                                                    fill-opacity="1" stroke-width="4"
                                                                    stroke-opacity="0.9" rel="3" j="3"
                                                                    index="0" default-marker-size="6">
                                                                </circle>
                                                            </g>
                                                            <g id="SvgjsG2195" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMask2ranl0rl)">
                                                                <circle id="SvgjsCircle2196" r="6"
                                                                    cx="205.2125" cy="104.82339999999999"
                                                                    class="apexcharts-marker no-pointer-events wbem74cl2f"
                                                                    stroke="transparent" fill="transparent"
                                                                    fill-opacity="1" stroke-width="4"
                                                                    stroke-opacity="0.9" rel="4" j="4"
                                                                    index="0" default-marker-size="6">
                                                                </circle>
                                                            </g>
                                                            <g id="SvgjsG2197" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMask2ranl0rl)">
                                                                <circle id="SvgjsCircle2198" r="6"
                                                                    cx="256.515625" cy="25.3022"
                                                                    class="apexcharts-marker no-pointer-events w5qnrip7n"
                                                                    stroke="#ffab00" fill="#ffffff" fill-opacity="1"
                                                                    stroke-width="4" stroke-opacity="0.9"
                                                                    rel="5" j="5" index="0"
                                                                    default-marker-size="6">
                                                                </circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG2187" class="apexcharts-datalabels"
                                                        data:realIndex="0"></g>
                                                </g>
                                                <line id="SvgjsLine2242" x1="0" y1="0"
                                                    x2="256.515625" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine2243" x1="0" y1="0"
                                                    x2="256.515625" y2="0" stroke-dasharray="0"
                                                    stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG2244" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG2245" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG2246" class="apexcharts-point-annotations"></g>
                                                <rect id="SvgjsRect2247" width="0" height="0"
                                                    x="0" y="0" rx="0" ry="0"
                                                    opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect">
                                                </rect>
                                                <rect id="SvgjsRect2248" width="0" height="0"
                                                    x="0" y="0" rx="0" ry="0"
                                                    opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fefefe"
                                                    class="apexcharts-selection-rect"></rect>
                                            </g>
                                            <rect id="SvgjsRect2180" width="0" height="0" x="0"
                                                y="0" rx="0" ry="0" opacity="1"
                                                stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe">
                                            </rect>
                                            <g id="SvgjsG2229" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-8, 0)">
                                                <g id="SvgjsG2230" class="apexcharts-yaxis-texts-g"></g>
                                            </g>
                                            <g id="SvgjsG2178" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 125px;"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(255, 171, 0);"></span>
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
                                            class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                            <div class="apexcharts-xaxistooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <small class="text-muted">You have done <span class="fw-bold">57.6%</span> more
                                        sales.<br>Check your new badge in your profile.</small>
                                    <div>
                                        <span class="badge bg-label-warning p-2"><i
                                                class="bx bx-chevron-right text-warning"></i></span>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 327px; height: 398px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Total Balance -->
                </div>


            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('backend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/chart.js/Chart.min.js') }}"></script>

    <script>
        var ingresos = @json($ingresos);
        var ventas = @json($ventas);

        var data = {
            labels: [],
            datasets: [{
                    label: 'Ingresos',
                    data: [],
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1,
                    borderWidth: 1.5,
                    fill: true, // 3: no fill
                    pointBorderWidth: 1,
                    pointRadius: [4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4],
                    pointHoverRadius: [2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2],
                },
                {
                    label: 'Ventas',
                    data: [],
                    backgroundColor: 'rgba(153, 102, 255, 0.2)',
                    borderColor: 'rgb(153, 102, 255, 1)',
                    borderWidth: 1,
                    borderWidth: 1.5,
                    fill: true, // 3: no fill
                    pointBorderWidth: 1,
                    pointRadius: [4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4],
                    pointHoverRadius: [2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2],
                }
            ]
        };

        for (var i = 0; i < ingresos.length; i++) {
            var fecha = ingresos[i].year + '-' + ("" + ingresos[i].month).padStart(2, '0');
            data.labels.push(fecha);
            data.datasets[0].data.push(ingresos[i].total);
        }

        for (var i = 0; i < ventas.length; i++) {
            var fecha_venta = ventas[i].year + '-' + ("" + ventas[i].month).padStart(2, '0');
            var index = data.labels.indexOf(fecha_venta);
            if (index == -1) {
                data.labels.push(fecha_venta);
                index = data.labels.length - 1;
            }
            data.datasets[1].data[index] = ventas[i].total;
        }


        var options = {
            responsive: true,
            title: {
                display: true,
                text: 'Ingresos y Ventas por Mes'
            },
            scales: {
                xAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Mes'
                    }
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Monto'
                    },
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        };

        var ctx = document.getElementById('grafica').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'line',
            data: data,
            options: options
        });
    </script>
    <script>
        var cantidades = @json($cantidades);

        var labels = Object.keys(cantidades);
        var datasets = [{
                label: 'completos',
                data: labels.map(function(label) {
                    return cantidades[label].completo;
                }),
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            },
            {
                label: 'borradores',
                data: labels.map(function(label) {
                    return cantidades[label].borrador;
                }),
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            },
            {
                label: 'pendientes',
                data: labels.map(function(label) {
                    return cantidades[label].pendiente;
                }),
                backgroundColor: 'rgba(255, 206, 86, 0.2)',
                borderColor: 'rgba(255, 206, 86, 1)',
                borderWidth: 1
            },
            {
                label: 'cancelados',
                data: labels.map(function(label) {
                    return cantidades[label].cancelado;
                }),
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            }
        ];

        var data = {
            labels: labels,
            datasets: datasets
        };

        var options = {
            responsive: true,
            title: {
                display: true,
                text: 'Cantidad de Ventas por Estado y Mes'
            },
            scales: {
                xAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Año y Mes'
                    }
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Cantidad'
                    },
                    ticks: {
                        beginAtZero: true,
                        stepSize: 1 // Muestra solo números enteros en el eje Y
                    }
                }]
            }
        };

        var ctx = document.getElementById('graficoVentas').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: options
        });
    </script>
@endsection
