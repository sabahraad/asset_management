<!-- Include header and navbar if needed -->
@include('frontend.header')
@include('frontend.navbar')

<!-- Page Wrapper -->
<div class="page-wrapper">    
    <!-- Page Content -->
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
            
                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Add Outlet</h3>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <form id="outletForm">
                    <div class="row">
                        <!-- Region -->
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Region</label>
                                <select class="form-control">
                                    <option disabled selected>Select region</option>
                                    <option>Region 1</option>
                                    <option>Region 2</option>
                                    <option>Region 3</option>
                                </select>
                            </div>
                        </div>
                        <!-- Area -->
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Area</label>
                                <select class="form-control">
                                    <option disabled selected>Select area</option>
                                    <option>Area A</option>
                                    <option>Area B</option>
                                    <option>Area C</option>
                                </select>
                            </div>
                        </div>

                        <!-- Territory -->
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Territory</label>
                                <select class="form-control">
                                    <option disabled selected>Select territory</option>
                                    <option>Territory X</option>
                                    <option>Territory Y</option>
                                </select>
                            </div>
                        </div>

                        <!-- Sales Point -->
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Sales Point</label>
                                <select class="form-control">
                                    <option disabled selected>Select salesPoint</option>
                                    <option>Point 1</option>
                                    <option>Point 2</option>
                                </select>
                            </div>
                        </div>

                        <!-- Route -->
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Route</label>
                                <select class="form-control">
                                    <option disabled selected>Select route</option>
                                    <option>Route A</option>
                                    <option>Route B</option>
                                </select>
                            </div>
                        </div>

                        <!-- Outlet Code -->
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Outlet Code</label>
                                <input class="form-control" type="text" placeholder="Enter outlet code...">
                            </div>
                        </div>

                        <!-- Outlet Name -->
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Outlet Name</label>
                                <input class="form-control" type="text" placeholder="Enter outlet name...">
                            </div>
                        </div>

                        <!-- Outlet Type -->
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Outlet Type</label>
                                <select class="form-control">
                                    <option disabled selected>Select type</option>
                                    <option>Retail</option>
                                    <option>Wholesale</option>
                                </select>
                            </div>
                        </div>

                        <!-- Location Longitude -->
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Location Longitude</label>
                                <input class="form-control" type="text" placeholder="Enter location longitude...">
                            </div>
                        </div>

                        <!-- Mobile Number -->
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Mobile Number</label>
                                <input class="form-control" type="text" placeholder="Enter outlet mobile number...">
                            </div>
                        </div>

                        <!-- Location Latitude -->
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Location Latitude</label>
                                <input class="form-control" type="text" placeholder="Enter location latitude...">
                            </div>
                        </div>

                        

                        <!-- Comments -->
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Comments</label>
                                <input class="form-control" type="text" placeholder="Enter comments...">
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="col-sm-12">
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn" type="submit">ADD</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Page Content -->
</div>
<!-- /Page Wrapper -->

<!-- Add any required script files -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>