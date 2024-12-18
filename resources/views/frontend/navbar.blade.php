<!-- Sidebar -->
<div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul class="sidebar-vertical">
							<li class="menu-title"> 
								<span>Main</span>
							</li>
							<li>
								<a href="{{route('dashboard')}}"><i class="la la-dashboard"></i> <span> Dashboard</span></a>
								
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-pie-chart"></i> <span> Outlet </span> <span class="menu-arrow"></span></a>
								<ul>									
									<li><a href="{{route('outletList')}}"> Outlet List </a></li>
									<li><a href="{{route('addOutlet')}}">Add Outlet</a></li>
								</ul>
							</li>
							
							<li class="menu-title"> 
								<span>Deployment</span>
							</li>
							<li> 
								<a href="{{route('deploymentList')}}"><i class="las la-coins"></i><span>Deployment List</span></a>
							</li>

							<li class="menu-title"> 
								<span>Maintenance</span>
							</li>
							<li> 
								<li><a href="{{route('maintenanceList')}}"><i class="las la-coins"></i><span> Maintenance List</span> </a></li>
							</li>
							
							<li class="menu-title"> 
								<span>Rebranding</span>
							</li>
							<li> 
								<li><a href="{{route('rebrandingList')}}"><i class="las la-coins"></i><span> Rebranding List</span> </a></li>
							</li>

							<li class="menu-title"> 
								<span>Kiosk Rebranding</span>
							</li>
							<li> 
								<li><a href="{{route('kioskRebrandinglist')}}"><i class="las la-coins"></i><span> Kiosk Rebranding List</span> </a></li>
							</li>

							
							
						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->