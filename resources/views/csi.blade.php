<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Adiputro Project</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/features/">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" rel="stylesheet" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.js"></script>
        <style type="text/css">
p.space {
    line-height: 400%;
}

.spasi{
    margin: top 10px;
}
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .by {
        center-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .chart-container {
    width: 50%;
    height: 50%;
    margin: auto;
}
.go {
                width: 60%;
                margin: 15px auto;
            }
            .ya {
                width: 40%;
                margin: 15px auto;
            }

  .p{
    font-size: 140px;
  }
</style>
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
</head>


<body >
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
<symbol id="bar" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2z"/>
  </symbol>
  <symbol id="pie" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M15.985 8.5H8.207l-5.5 5.5a8 8 0 0 0 13.277-5.5zM2 13.292A8 8 0 0 1 7.5.015v7.778l-5.5 5.5zM8.5.015V7.5h7.485A8.001 8.001 0 0 0 8.5.015z"/>
  </symbol>
  <symbol id="form" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M7 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zM0 12a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm7-1.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zm0-5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zM3 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zm0 4.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
  </symbol>
  <symbol id="very good" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5c0 .501-.164.396-.415.235C6.42 6.629 6.218 6.5 6 6.5c-.218 0-.42.13-.585.235C5.164 6.896 5 7 5 6.5 5 5.672 5.448 5 6 5s1 .672 1 1.5zm5.331 3a1 1 0 0 1 0 1A4.998 4.998 0 0 1 8 13a4.998 4.998 0 0 1-4.33-2.5A1 1 0 0 1 4.535 9h6.93a1 1 0 0 1 .866.5zm-1.746-2.765C10.42 6.629 10.218 6.5 10 6.5c-.218 0-.42.13-.585.235C9.164 6.896 9 7 9 6.5c0-.828.448-1.5 1-1.5s1 .672 1 1.5c0 .501-.164.396-.415.235z"/>
  </symbol>
  <symbol id="good" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm-3 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zM10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8z"/>
  </symbol>
  <symbol id="fair" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM4.053 4.276a.5.5 0 0 1 .67-.223l2 1a.5.5 0 0 1 .166.76c.071.206.111.44.111.687C7 7.328 6.552 8 6 8s-1-.672-1-1.5c0-.408.109-.778.285-1.049l-1.009-.504a.5.5 0 0 1-.223-.67zm.232 8.157a.5.5 0 0 1-.183-.683A4.498 4.498 0 0 1 8 9.5a4.5 4.5 0 0 1 3.898 2.25.5.5 0 1 1-.866.5A3.498 3.498 0 0 0 8 10.5a3.498 3.498 0 0 0-3.032 1.75.5.5 0 0 1-.683.183zM10 8c-.552 0-1-.672-1-1.5 0-.247.04-.48.11-.686a.502.502 0 0 1 .166-.761l2-1a.5.5 0 1 1 .448.894l-1.009.504c.176.27.285.64.285 1.049 0 .828-.448 1.5-1 1.5z"/>
  </symbol>
  <symbol id="danger" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
  <symbol id="excellent" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"/>
  </symbol>
  <symbol id="up" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm14.817 3.113a.5.5 0 0 1 .07.704l-4.5 5.5a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61 4.15-5.073a.5.5 0 0 1 .704-.07Z"/>
  </symbol>
  <symbol id="yup" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M.5 0a.5.5 0 0 1 .5.5v15a.5.5 0 0 1-1 0V.5A.5.5 0 0 1 .5 0zM2 1.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-6a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1z"/>
  </symbol>
</svg>
    


<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block  sidebar collapse" style="background-color: #1C304E;">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
          <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none border-bottom">
      <img class="d-block mx-auto mb-4 my-5 " src="{{ asset('img/LOGO HORIZONTAL.png') }}" alt="" width="100" height="50">
      <span class="fs-4"></span>
    </a>
</br>
    <a href="{{url('/ ')}}" class="nav-link active text-white" aria-current="page">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#up"/></svg>
          Hasil Kepuasan Pelanggan
        </a>
      </li>
      <li>
      <a href="{{url('/front')}}" class="nav-link active text-white" aria-current="page">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#bar"/></svg>
          Detail Hasil
        </a>
      </li>

      <li>
      <a href="{{url('/next')}}" class="nav-link active text-white" aria-current="page">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#pie"/></svg>
          Grafik Kepentingan
        </a>
      </li>
      <li>
      <a href="{{url('/next2')}}" class="nav-link active text-white" aria-current="page">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#yup"/></svg>
          Grafik Kepuasan
        </a>
      </li>
      <li>
        <a href="{{url('/hasil')}}" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#form"/></svg>
          Detail Pelanggan
        </a>
      </li>
      <li>
          <a href="{{url('/lapor')}}" class="nav-link text-white">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#form"/></svg>
            Laporan Mingguan
          </a>
        </li>
        <li>
          <a href="{{url('/empat')}}" class="nav-link text-white">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#form"/></svg>
            Pertanyaan Nomor 4
          </a>
        </li>
    </ul>
    </br>

    </nav>


    <main class="col-md-4 ms-sm-auto  col-lg-10 px-md-4">
    <div class="p-4 p-md-4 mb-2 rounded  text-white" style="background-color: #1C304E;">
    <div class="col-md-6 px-0">
      <h4 class="display-8 fst-italic fw-bold border-bottom">HASIL KEPUASAN PELANGGAN ADIPUTRO (Bus)</h4>
    </div>
  </div>

</br>
  <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">



      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">

          <div class="card-body text-white" style="background-color: #1C304E;">

      @if($total_all < 60)
      <div class="px-4  text-center">
<svg  width="251" height="251" color fill = "#FF0000" ><use xlink:href="#danger"/></svg>
<h2 class="card-title">Bad</h2>
          </div>
@elseif($total_all <=75)
<div class="px-4  text-center">
<svg  width="251" height="251" color fill = "#FF6E33" ><use xlink:href="#fair"/></svg>
<h2 class="card-title">Fair</h2>
          </div>
@elseif($total_all <= 85)
<div class="px-4  text-center">
<svg  width="251" height="251" color fill = "#FF00FF" ><use xlink:href="#good"/></svg>
<h2 class="card-title">Good</h2>
          </div>
@elseif($total_all <=95)
<div class="px-4  text-center">
<svg  width="251" height="251" color fill = "#FFFF00" ><use xlink:href="#very good"/></svg>	
<h2 class="card-title">Very Good</h2>
          </div>
@elseif($total_all > 95)
<div class="px-4  text-center">
<svg  width="251" height="251" color fill = "#00FF00" ><use xlink:href="#excellent"/></svg>
<h2 class="card-title">Excellent</h2>
          </div>
@endif      
        </div>
          </div> 
          </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-body text-white" style="background-color: #1e81b0;">
          <svg  width="50" height="50"><use xlink:href="#up"/></svg>
        <h4 class="display-7">YOUR SCORE</h4>
        <div class="p">{{$total_all}}</div>
          </div>
        </div>
        </div>
             

      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-body text-white" style="background-color: #1C304E;">
        <h2 class="display-6">GAP</h2>
        <p class="lead fs-6">Q1 = <?php echo ($gap1); ?></p>
        <p class="lead fs-6">Q2 = <?php echo ($gap2); ?></p>
        <p class="lead fs-6">Q3 = <?php echo ($gap3); ?></p>
        <p class="lead fs-6">Q4 = <?php echo ($gap4); ?></p>
        <p class="lead fs-6">Q5 = <?php echo ($gap5); ?></p>
        <p class="lead fs-6">Q6 = <?php echo ($gap6); ?></p>
          </div>
        </div>
      </div>
    </div>

          <div class="go my-4 w-100 ">
            <canvas id="yuk" width="800" height="380"></canvas>
        </div>
<script>
            var oi = document.getElementById("yuk");
            var yuk = new Chart(oi, {
                type: 'bar',
                data: {

                    labels: ['Q1', 'Q2', 'Q3', 'Q4', 'Q5', 'Q6'],
                    datasets: [
                        {
                            label: 'Index 1',
                            data: [
                              <?php echo ($all1); ?>,
                                <?php echo ($all2);?>,
                                <?php echo ($all3);?>,
                                <?php echo ($all4);?>,
                                <?php echo ($all5);?>,
                                <?php echo ($all6);?>,

                            ],
                            backgroundColor: [
                              'rgba(255, 20, 20, 0.88)',
                              'rgba(255, 20, 20, 0.88)',
                              'rgba(255, 20, 20, 0.88)',
                              'rgba(255, 20, 20, 0.88)',
                              'rgba(255, 20, 20, 0.88)',
                              'rgba(255, 20, 20, 0.88)',

                            ],
                            borderColor: [
                              'rgba(255, 20, 20, 0.88)',
                              'rgba(255, 20, 20, 0.88)',
                              'rgba(255, 20, 20, 0.88)',
                              'rgba(255, 20, 20, 0.88)',
                              'rgba(255, 20, 20, 0.88)',
                              'rgba(255, 20, 20, 0.88)',
                            ],
                        },

                        {
                            label: 'Index 2/CSI',
                            data: [
                              <?php echo ($njay1); ?>,
                                <?php echo ($njay2);?>,
                                <?php echo ($njay3);?>,
                                <?php echo ($njay4);?>,
                                <?php echo ($njay5);?>,
                                <?php echo ($njay6);?>,
                            ],
                            backgroundColor: [
                              'rgba(30, 129, 176, 1)',
                              'rgba(30, 129, 176, 1)',
                              'rgba(30, 129, 176, 1)',
                              'rgba(30, 129, 176, 1)',
                              'rgba(30, 129, 176, 1)',
                              'rgba(30, 129, 176, 1)',
                            ],
                            borderColor: [
                              'rgba(30, 129, 176, 1)',
                              'rgba(30, 129, 176, 1)',
                              'rgba(30, 129, 176, 1)',
                              'rgba(30, 129, 176, 1)',
                              'rgba(30, 129, 176, 1)',
                              'rgba(30, 129, 176, 1)',
                            ],
                        },
                    ]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    },
                    title: {
        display: true,
        text: 'GRAFIK GAP'
      }
                }
            });
        </script>

    </main>
</body>
</html>