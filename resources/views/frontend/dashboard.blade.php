@include('frontend.header')
@include('frontend.navbar')    
<link rel="stylesheet" href="{{ asset('plugins/morris/morris.css') }}">
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Welcome Admin!</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">Dashboard</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
				
					<div class="row">
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
								<div class="card dash-widget">
									<div class="card-body">
										<span class="dash-widget-icon"><i class="fa-solid fa-user"></i></span>
										<div class="dash-widget-info">
											<h3>1887</h3>
											<span>Deployment</span>
										</div>
									</div>
								</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
								<div class="card dash-widget">
									<div class="card-body">
										<span class="dash-widget-icon"><i class="fas fa-check-circle"></i></span>
										<div class="dash-widget-info">
											<h3>316</h3>
											<span>Kiosk Rebranding</span>
										</div>
									</div>
								</div>
						</div>
                        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
								<div class="card dash-widget">
									<div class="card-body">
										<span class="dash-widget-icon"><i class="fas fa-user-slash"></i></span>
										<div class="dash-widget-info">
											<h3>02</h3>
											<span>Maintenance</span>
										</div>
									</div>
								</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><i class="fas fa-palette"></i></span>
									<div class="dash-widget-info">
										<h3>2203</h3>
										<span>Rebranding</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-12 text-center">
									<div class="card">
										<div class="card-body">
											<h3 class="card-title">Overview</h3>
											<div id="bar-charts"></div>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				<!-- /Page Content -->

            </div>
			<!-- /Page Wrapper -->
        </div>
		<!-- /Main Wrapper -->
        <script src="{{ asset('plugins/morris/morris.min.js') }}"></script>
        <script src="{{ asset('plugins/raphael/raphael.min.js') }}"></script>
	    <script>
        $(document).ready(function () {
            // Sample input data
            var morrisData = [
                { y: 'Mymensingh', a: 2, b: 0, c: 0, d: 0 },
                { y: 'Khulna', a: 3, b: 0, c: 1, d: 0 },
                { y: 'Dhaka', a: 10, b: 0, c: 2, d: 1 },
                { y: 'Chittagong', a: 5, b: 0, c: 0, d: 0 },
                { y: 'Bogra', a: 2, b: 0, c: 0, d: 0 },
                { y: 'Barisal', a: 2, b: 0, c: 0, d: 0 }
            ];

            // Initialize Morris Bar Chart
            Morris.Bar({
                element: 'bar-charts',
                data: morrisData,
                xkey: 'y',
                ykeys: ['a', 'b', 'c', 'd'],
                labels: ['Deployment', 'Maintenance', 'Rebranding', 'Kiosk Rebranding'],
                barColors: ['#645faa', '#4caf50', '#fc8c30', '#a564fc'], // Colors for each bar
                resize: true,
                redraw: true,
                xLabelAngle: 25,
            });
        });
    </script>
    </body>
</html>