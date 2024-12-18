@include('frontend.header')
@include('frontend.navbar')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<style>
    .table {
            --bs-table-bg: transparent; /* Set it to a transparent color */
        }
    .bg-danger td {
            color: white; /* Set text color to white */
        }
    .dt-button{
      color: white !important;
      background-color: #6564ad !important;
      cursor: pointer;
      border-radius: 5px;
      border: none;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      /* margin: 4px 2px; */
    }
    .select2-container {
        width: 100% !important;
        z-index: 9999 !important;
    }

    .select2-selection {
        height: 38px !important; 
    }

    .select2-selection__arrow {
        height: 38px !important;
    }
    /* Custom class for clickable rows */
    .clickable-row {
        cursor: pointer;
        /* Add any additional styling as needed */
    }
</style>
<!-- Page Wrapper -->
<div class="page-wrapper">
			
            <!-- Page Content -->
            <div class="content container-fluid">
            
                <!-- Page Header -->
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Outlet List</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Outlet List</li>
                            </ul>
                        </div>
                        <!-- <div class="col-auto float-end ms-auto">
                            <a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_department"><i class="fa-solid fa-plus"></i> Add Attendance</a>
                        </div> -->
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="card" style="border: 0;box-shadow: 0 0 20px 0 rgba(76,87,125,.2);">
                    <div class="card-body ">
                            <form id="myForm" class="row">
                                @csrf
                                <div class="col-md-6">
                                    <label for="inputText4" class="col-form-label">Select Date Range:</label><br>
                                        <input type="text"  id="date_range" class="form-control" name="date_range">
                                    <br>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputText4" class="col-form-label">Select Region</label><br>
                                        <select name="dept_id" id="dept_id" class="form-control">
                                            <option selected disabled>Open this to select Region</option>
                                            <option value="1">Mymensingh</option>
                                            <option value="2">Khulna</option>
                                            <option value="3">Dhaka</option>
                                            <option value="4">Chittagong</option>
                                            <option value="5">Bogra</option>
                                            <option value="6">Barisal</option>
                                        </select>
                                    <br>
                                </div>
                                <div class="form-group" style="margin-top: 18px;">
                                    <input type="submit" style="display: block; width:250px" name="submit" value="Search" class="btn btn-primary mx-auto">
                                </div>
                            </form>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table mb-0" id="desigTable">
                                <thead>
                                    <tr>
                                        <th class="width-thirty">#</th>
                                        <th>Outlet Code</th>
                                        <th>Outlet Name</th>
                                        <th>Region</th>
                                        <th>Area</th>
                                        <th>Sales Point</th>
                                        <th>Mobile Number</th>
                                        <th>Outlet Type</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>OC001</td>
                                        <td>Outlet Alpha</td>
                                        <td>Dhaka</td>
                                        <td>Gulshan</td>
                                        <td>SP001</td>
                                        <td>01711111111</td>
                                        <td>Retail</td>
                                        <td>Active</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>OC002</td>
                                        <td>Outlet Beta</td>
                                        <td>Chittagong</td>
                                        <td>Agrabad</td>
                                        <td>SP002</td>
                                        <td>01722222222</td>
                                        <td>Wholesale</td>
                                        <td>Inactive</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>OC003</td>
                                        <td>Outlet Gamma</td>
                                        <td>Khulna</td>
                                        <td>Sonadanga</td>
                                        <td>SP003</td>
                                        <td>01733333333</td>
                                        <td>Retail</td>
                                        <td>Active</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>OC004</td>
                                        <td>Outlet Delta</td>
                                        <td>Bogra</td>
                                        <td>Sadar</td>
                                        <td>SP004</td>
                                        <td>01744444444</td>
                                        <td>Wholesale</td>
                                        <td>Active</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>OC005</td>
                                        <td>Outlet Epsilon</td>
                                        <td>Barisal</td>
                                        <td>Band Road</td>
                                        <td>SP005</td>
                                        <td>01755555555</td>
                                        <td>Retail</td>
                                        <td>Inactive</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>OC006</td>
                                        <td>Outlet Zeta</td>
                                        <td>Mymensingh</td>
                                        <td>Trishal</td>
                                        <td>SP006</td>
                                        <td>01766666666</td>
                                        <td>Retail</td>
                                        <td>Active</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>OC007</td>
                                        <td>Outlet Eta</td>
                                        <td>Dhaka</td>
                                        <td>Uttara</td>
                                        <td>SP007</td>
                                        <td>01777777777</td>
                                        <td>Wholesale</td>
                                        <td>Inactive</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>OC008</td>
                                        <td>Outlet Theta</td>
                                        <td>Chittagong</td>
                                        <td>Halishahar</td>
                                        <td>SP008</td>
                                        <td>01788888888</td>
                                        <td>Retail</td>
                                        <td>Active</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>OC009</td>
                                        <td>Outlet Iota</td>
                                        <td>Khulna</td>
                                        <td>Daulatpur</td>
                                        <td>SP009</td>
                                        <td>01799999999</td>
                                        <td>Wholesale</td>
                                        <td>Active</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>OC010</td>
                                        <td>Outlet Kappa</td>
                                        <td>Bogra</td>
                                        <td>Gabtali</td>
                                        <td>SP010</td>
                                        <td>01800000000</td>
                                        <td>Retail</td>
                                        <td>Inactive</td>
                                    </tr>
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Page Content -->
        </div>
        <!-- /Page Wrapper -->


<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{ asset('js/jquery.slimscroll.min.js') }}"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

<script>

    $(document).ready(function() {
        $('head title').text('Oultet List');
        $('#desigTable').DataTable({
        dom: 'Bfrtip', 
        buttons: [
            'excel'
            ]
        });
    });

    $(function() {
    $('input[name="date_range"]').daterangepicker({
        // opens: 'left',
        // autoApply: true,
        locale: {
        format: 'YYYY-MM-DD'
    }
    }, function(start, end, label) {
        console.log("A date range was chosen: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
        });
    });

</script>