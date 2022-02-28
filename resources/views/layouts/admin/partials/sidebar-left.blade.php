				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">

				    <div class="sidebar-header">
				        <div class="sidebar-title">
				            Navigation
				        </div>
				        <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
				            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
				        </div>
				    </div>

				    <div class="nano">
				        <div class="nano-content">
				            <nav id="menu" class="nav-main" role="navigation">

				                <ul class="nav nav-main">
				                    <li>
				                        <a class="nav-link" href="layouts-default.html">
				                            <i class="bx bx-home-alt" aria-hidden="true"></i>
				                            <span>Parchase Item</span>
				                        </a>                        
				                 
									<li class="nav-parent">
				                        <a class="nav-link" href="#">
				                            <i class="bx bx-detail" aria-hidden="true"></i>
				                            <span>Inventory Manage</span>
				                        </a>
				                        <ul class="nav nav-children">
				                            <li>
				                                <a class="nav-link" href="/item-info">
				                                    Item Information
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="forms-advanced.html">
				                                    Advanced
				                                </a>
				                            </li>
				                        
				                        </ul>
				                    </li>
														<li>
				                        <a class="nav-link" href="layouts-default.html">
				                            <i class="bx bx-home-alt" aria-hidden="true"></i>
				                            <span>Setap Receipe</span>
				                        </a>                        
				                    </li>
														<li>
				                        <a class="nav-link" href="layouts-default.html">
				                            <i class="bx bx-home-alt" aria-hidden="true"></i>
				                            <span>Sell</span>
				                        </a>                        
				                    </li>
														<li>
				                        <a class="nav-link" href="layouts-default.html">
				                            <i class="bx bx-home-alt" aria-hidden="true"></i>
				                            <span>Accounts</span>
				                        </a>                        
				                    </li>
				                </ul>
				            </nav>
				        </div>

				        <script>
				            // Maintain Scroll Position
				            if (typeof localStorage !== 'undefined') {
				                if (localStorage.getItem('sidebar-left-position') !== null) {
				                    var initialPosition = localStorage.getItem('sidebar-left-position'),
				                        sidebarLeft = document.querySelector('#sidebar-left .nano-content');

				                    sidebarLeft.scrollTop = initialPosition;
				                }
				            }
				        </script>

				    </div>

				</aside>
				<!-- end: sidebar -->