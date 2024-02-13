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
</style>
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
</head>


<body>
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
  <symbol id="up" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm14.817 3.113a.5.5 0 0 1 .07.704l-4.5 5.5a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61 4.15-5.073a.5.5 0 0 1 .704-.07Z"/>
  </symbol>
  <symbol id="yup" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M.5 0a.5.5 0 0 1 .5.5v15a.5.5 0 0 1-1 0V.5A.5.5 0 0 1 .5 0zM2 1.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-6a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1z"/>
  </symbol>
</svg>
    


<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="background-color: #1C304E;">
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
      <h4 class="display-8 fst-italic fw-bold border-bottom">DETAIL INDEX (Bus)</h4>
    </div>
  </div>

      </br>
      <h5 class="fw-bold">GRAFIK SELISIH (GAP) ANTARA TINGKAT KEPENTINGAN DAN TINGKAT KEPUASAN PELANGGAN</h5>
<div class="go">
            <canvas id="pieChart" ></canvas>
        </div>

<script>
var data = {
    datasets: [{
        data: [
                                <?php echo ($njay1); ?>,
                                <?php echo ($njay2);?>,
                                <?php echo ($njay3);?>,
                                <?php echo ($njay4);?>,
                                <?php echo ($njay5);?>,
                                <?php echo ($njay6);?>
        ],
        backgroundColor: [
                              'rgba(183, 38, 252, 1)',
                              'rgba(50, 39, 245, 0.97)',
                              'rgba(29, 193, 21, 1)',
                              'rgba(65, 168, 252, 0.76)',
                              'rgba(245, 39, 234, 0.8)',
                              'rgba(175, 96, 26, 1)'
        ],
                                    borderColor: [
                              'rgba(183, 38, 252, 1)',
                              'rgba(50, 39, 245, 0.97)',
                              'rgba(29, 193, 21, 1)',
                              'rgba(65, 168, 252, 0.76)',
                              'rgba(245, 39, 234, 0.8)',
                              'rgba(175, 96, 26, 1)',
                            ],
                            borderWidth: 1,
        label: 'My dataset' // for legend
    }],
    labels: [
        "Q1",
        "Q2",
        "Q3",
        "Q4",
        "Q5",
        "Q6"
    ]
};

var pieOptions = {
  events: false,
  animation: {
    duration: 500,
    easing: "easeOutQuart",
    onComplete: function () {
      var ctx = this.chart.ctx;
      ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontFamily, 'normal', Chart.defaults.global.defaultFontFamily);
      ctx.textAlign = 'center';
      ctx.textBaseline = 'bottom';

      this.data.datasets.forEach(function (dataset) {

        for (var i = 0; i < dataset.data.length; i++) {
          var model = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model,
              total = dataset._meta[Object.keys(dataset._meta)[0]].total,
              mid_radius = model.innerRadius + (model.outerRadius - model.innerRadius)/2,
              start_angle = model.startAngle,
              end_angle = model.endAngle,
              mid_angle = start_angle + (end_angle - start_angle)/2;

          var x = mid_radius * Math.cos(mid_angle);
          var y = mid_radius * Math.sin(mid_angle);

          ctx.fillStyle = '#fff';

          var val = dataset.data[i];
          var percent = String(Math.round(val/total*100)) + "%";

          if(val != 0) {
            ctx.fillText(dataset.data[i], model.x + x, model.y + y);
            // Display percent in another line, line break doesn't work for fillText
            ctx.fillText(percent, model.x + x, model.y + y + 15);
          }
        }
      });               
    }
  },
      title: {
        display: true,
        text: 'GRAFIK CSI'
      }
};

var pieChartCanvas = document.getElementById("pieChart");
var pieChart = new Chart(pieChartCanvas, {
  type: 'pie', // or doughnut
  data: data,
  options: pieOptions
});
</script>

    </br>  
      <div class="table-responsive" id="ptg">
        <table class="table table-striped mb-0">
          <thead style="background-color: #1C304E;" class="text-white">
            <tr>
              <th scope="col">QUESTION</th>
              <th scope="col">PARAMETER SURVEY PENGUKURAN KEPUASAN PELANGGAN</th>
              <th scope="col">INDEX (1)</th>
              <th scope="col">INDEX (2) [ CSI ]</th>
              <th scope="col">Selisih (Gap)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Kecepatan waktu dalam memberikan informasi</td>
              <td>{{$all1}}</td>
              <td>{{$njay1}}</td>
              <td>{{$gap1}}</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Ketepatan waktu dalam memenuhi janji</td>
              <td>{{$all2}}</td>
              <td>{{$njay2}}</td>
              <td>{{$gap2}}</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Kecepatan dalam menjawab/merespon pertanyaan</td>
              <td>{{$all3}}</td>
              <td>{{$njay3}}</td>
              <td>{{$gap3}}</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Ketepatan dan keakuratan hasil layanan</td>
              <td>{{$all4}}</td>
              <td>{{$njay4}}</td>
              <td>{{$gap4}}</td>
            </tr>
            <tr>
              <td>5</td>
              <td>Pengetahuan dan pemahaman karyawan</td>
              <td>{{$all5}}</td>
              <td>{{$njay5}}</td>
              <td>{{$gap5}}</td>
            </tr>
            <tr>
              <td>6</td>
              <td>Etika dan cara berbicara sales</td>
              <td>{{$all6}}</td>
              <td>{{$njay6}}</td>
              <td>{{$gap6}}</td>
            </tr>
          </tbody>
        </table>
</div>
          </br>
          <div class="table-responsive" id="ptg">
        <table class="table table-striped mb-0">
          <thead style="background-color: #1C304E;" class="text-white">
            <tr>
              <th scope="col">PARAMETER</th>
              <th scope="col">GRADE</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>< 60.0</td>
              <td>Bad</td>
            </tr>
            <tr>
              <td>60.0-75.0</td>
              <td>Fair</td>
            </tr>
            <tr>
              <td>76.0-85.0</td>
              <td>Good</td>
            </tr>
            <tr>
              <td>86.0-95.0</td>
              <td>Very Good</td>
            </tr>
            <tr>
              <td>> 95.0</td>
              <td>Excellent</td>
            </tr>
    </main>
</body>
</html>