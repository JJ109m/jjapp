@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">{{ __('Panel de Usuarios') }}</div>
                <div class="card-body">
                    <div class="content-wrapper">
                        <div class="row">
                          <div class="col-lg-6 grid-margin stretch-card">
                            <div class="card">
                              <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                <h4 class="card-title">Line chart</h4>
                                <canvas id="lineChart" width="453" height="226" style="display: block; width: 453px; height: 226px;" class="chartjs-render-monitor"></canvas>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 grid-margin stretch-card">
                            <div class="card">
                              <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                <h4 class="card-title">Bar chart</h4>
                                <canvas id="barChart" style="display: block; width: 453px; height: 226px;" width="453" height="226" class="chartjs-render-monitor"></canvas>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6 grid-margin stretch-card">
                            <div class="card">
                              <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                <h4 class="card-title">Area chart</h4>
                                <canvas id="areaChart" width="453" height="226" style="display: block; width: 453px; height: 226px;" class="chartjs-render-monitor"></canvas>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 grid-margin stretch-card">
                            <div class="card">
                              <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                <h4 class="card-title">Doughnut chart</h4>
                                <canvas id="doughnutChart" width="453" height="226" style="display: block; width: 453px; height: 226px;" class="chartjs-render-monitor"></canvas>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6 grid-margin grid-margin-lg-0 stretch-card">
                            <div class="card">
                              <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                <h4 class="card-title">Pie chart</h4>
                                <canvas id="pieChart" width="453" height="226" style="display: block; width: 453px; height: 226px;" class="chartjs-render-monitor"></canvas>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 grid-margin grid-margin-lg-0 stretch-card">
                            <div class="card">
                              <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                <h4 class="card-title">Scatter chart</h4>
                                <canvas id="scatterChart" width="453" height="226" style="display: block; width: 453px; height: 226px;" class="chartjs-render-monitor"></canvas>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                        <!-- content-wrapper ends -->
                        <!-- partial:../../partials/_footer.html -->
                        <footer class="footer">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="https://www.bootstrapdash.com/" target="_blank">bootstrapdash.com </a>2021</span>
                          <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Only the best <a href="https://www.bootstrapdash.com/" target="_blank"> Bootstrap dashboard  </a> templates</span>
                        </div>
                        </footer>

                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset ('backend/vendors/chart.js/Chart.min.js') }}"></script>

@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                            <script>
                                const cData = JSON.parse(`<?php echo $chart; ?>`);
                                console.log(cData);
                                var ctx = document.getElementById('lineChart').getContext('2d');
                                Chart.defaults.font.size = 16;
                                var chart = new Chart(ctx, {
                                  type: 'line',
                                  data: {
                                    labels: cData.label,
                                    datasets: [{
                                      label: 'Cant. de Articulos',
                                      data: cData.chart,
                                      backgroundColor: [
                                        'rgba(255, 99, 132, 0.2)',
                                        'rgba(255, 159, 64, 0.2)',
                                        'rgba(255, 205, 86, 0.2)',
                                        'rgba(75, 192, 192, 0.2)',
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(153, 102, 255, 0.2)',
                                        'rgba(201, 203, 207, 0.2)'
                                        ],
                                        borderColor: [
                                        'rgb(255, 99, 132)',
                                        'rgb(255, 159, 64)',
                                        'rgb(255, 205, 86)',
                                        'rgb(75, 192, 192)',
                                        'rgb(54, 162, 235)',
                                        'rgb(153, 102, 255)',
                                        'rgb(201, 203, 207)'
                                       ],
                                      borderWidth: 1,
                                    }]
                                  },

                                  responsive: true,
                                  options: {
                                    padding: 20
                                  }
                                });
                            </script>
@endsection
