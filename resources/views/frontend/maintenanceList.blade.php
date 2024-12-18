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
                            <h3 class="page-title">Maintenance List</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Maintenance List</li>
                            </ul>
                        </div>
                        <!-- <div class="col-auto float-end ms-auto">
                            <a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_department"><i class="fa-solid fa-plus"></i> Add Attendance</a>
                        </div> -->
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="card" style="border: 0;box-shadow: 0 0 20px 0 rgba(76,87,125,.2);">
                    <div class="card-body">
                        <form id="myForm" class="row">
                            @csrf
                
                            <!-- Date Range -->
                            <div class="col-md-3">
                                <label for="date_range" class="col-form-label">Select Date Range:</label><br>
                                <input type="text" id="date_range" class="form-control" name="date_range">
                                <br>
                            </div>
                
                            <!-- Region -->
                            <div class="col-md-3">
                                <label for="region" class="col-form-label">Select Region:</label><br>
                                <select name="region" id="region" class="form-control">
                                    <option selected disabled>Select a region</option>
                                    <option value="1">Mymensingh</option>
                                    <option value="2">Khulna</option>
                                    <option value="3">Dhaka</option>
                                    <option value="4">Chittagong</option>
                                    <option value="5">Bogra</option>
                                    <option value="3">Barisal</option>
                                </select>
                                <br>
                            </div>
                
                            <!-- Area -->
                            <div class="col-md-3">
                                <label for="area" class="col-form-label">Select Area:</label><br>
                                <select name="area" id="area" class="form-control">
                                    <option selected disabled>Select an area</option>
                                    <!-- Add area options here -->
                                    <option value="1">North Area</option>
                                    <option value="2">South Area</option>
                                    <option value="3">East Area</option>
                                    <option value="4">West Area</option>
                                </select>
                                <br>
                            </div>
                
                            <!-- Territory -->
                            <div class="col-md-3">
                                <label for="territory" class="col-form-label">Select Territory:</label><br>
                                <select name="territory" id="territory" class="form-control">
                                    <option selected disabled>Select a territory</option>
                                    <!-- Add territory options here -->
                                    <option value="1">Territory A</option>
                                    <option value="2">Territory B</option>
                                    <option value="3">Territory C</option>
                                </select>
                                <br>
                            </div>
                
                            <!-- Sales Point -->
                            <div class="col-md-3">
                                <label for="sales_point" class="col-form-label">Select Sales Point:</label><br>
                                <select name="sales_point" id="sales_point" class="form-control">
                                    <option selected disabled>Select a sales point</option>
                                    <!-- Add sales point options here -->
                                    <option value="1">Sales Point 1</option>
                                    <option value="2">Sales Point 2</option>
                                    <option value="3">Sales Point 3</option>
                                </select>
                                <br>
                            </div>
                
                            <!-- Submit Button -->
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
                                        <th>Maintenance Date</th>
                                        <th>Photos</th>
                                        <th>Status</th>
                                        <th>Action</th>
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
                                        <td>2021-09-01</td>
                                        <td><a href="#">N/A</a></td>
                                        <td>Active</td>
                                        <td >
                                            <button class="btn btn-primary edit-employee" data-bs-toggle="modal" data-bs-target="#edit_employee" data-id="1">
                                                <i class="fa-solid fa-pencil m-r-5"></i> Add
                                            </button>
                                        </td>
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
                                        <td>2021-09-02</td>
                                        <td><a href="#">N/A</a></td>
                                        <td>Inactive</td>
                                        <td >
                                            <button class="btn btn-primary edit-employee" data-bs-toggle="modal" data-bs-target="#edit_employee" data-id="1">
                                                <i class="fa-solid fa-pencil m-r-5"></i> Add
                                            </button>
                                        </td>
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
                                        <td>2021-09-03</td>
                                        <td><a href="#">N/A</a></td>
                                        <td>Active</td>
                                        <td >
                                            <button class="btn btn-primary edit-employee" data-bs-toggle="modal" data-bs-target="#edit_employee" data-id="1">
                                                <i class="fa-solid fa-pencil m-r-5"></i> Add
                                            </button>
                                        </td>
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
                                        <td>2021-09-04</td>
                                        <td><a href="#">N/A</a></td>
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
                                        <td>2021-09-05</td>
                                        <td><a href="#">N/A</a></td>
                                        <td>Inactive</td>
                                        <td >
                                            <button class="btn btn-primary edit-employee" data-bs-toggle="modal" data-bs-target="#edit_employee" data-id="1">
                                                <i class="fa-solid fa-pencil m-r-5"></i> Add
                                            </button>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Page Content -->
            <!-- Edit Employee Modal -->
<div id="edit_employee" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Maintenance</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editSubmit">
                    <div class="row">

                        <!-- Activity Type -->
                        <div class="col-12 mb-3">
                            <label class="col-form-label">Acknowledgement</label>
                            <div class="d-flex gap-3">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="new_pack" name="activity_type[]" value="New Pack Facing">
                                    <label class="form-check-label" for="new_pack">Door Lock</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="sticker_rebranding" name="activity_type[]" value="Sticker Rebranding">
                                    <label class="form-check-label" for="sticker_rebranding">Drawer Look</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="tri_pillar" name="activity_type[]" value="Tri Pillar Remove">
                                    <label class="form-check-label" for="tri_pillar">Door Broken</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="new_pack" name="activity_type[]" value="New Pack Facing">
                                    <label class="form-check-label" for="new_pack">Railing Damage</label>
                                </div>
                                
                            </div>
                            <div class="d-flex gap-3">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="new_pack" name="activity_type[]" value="New Pack Facing">
                                    <label class="form-check-label" for="new_pack">Pack Facing</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="new_pack" name="activity_type[]" value="New Pack Facing">
                                    <label class="form-check-label" for="new_pack">Body Point</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="new_pack" name="activity_type[]" value="New Pack Facing">
                                    <label class="form-check-label" for="new_pack">

                                        Joint Remove</label>
                                </div>
                            </div>
                            

                        </div>

                        <!-- Rebranding Date -->
                        <div class="col-sm-6 mb-3">
                            <label class="col-form-label">Maintenance Date:</label>
                            <input type="date" name="rebranding_date" id="rebranding_date" class="form-control" required>
                        </div>

                        <!-- Comments -->
                        <div class="col-sm-6 mb-3">
                            <label class="col-form-label">Comments:</label>
                            <textarea name="comments" id="comments" rows="3" class="form-control" placeholder="Enter Comments"></textarea>
                        </div>

                        <!-- Photo Upload -->
                        <div class="col-12 mb-3">
                            <label class="col-form-label">Photos:</label>
                            <div class="border p-3 text-center" style="border-style: dashed;">
                                <input type="file" id="photo_upload" name="photos[]" accept="image/png, image/jpeg" multiple style="display: none;">
                                <label for="photo_upload" style="cursor: pointer;">
                                    <i class="bi bi-cloud-upload fs-2"></i><br>
                                    <strong>Click to upload</strong> or drag and drop<br>
                                    <span class="text-muted">PNG, JPG or JPEG</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Section -->
                    <div class="submit-section text-center">
                        <button class="btn btn-primary submit-btn" type="submit">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Edit Employee Modal -->
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