      
    <div class="sidebar-menu">
        <ul class="menu">
            
            
                <li class='sidebar-title'>Main Menu</li>
            
                       
                <li class="sidebar-item <?php if($seg[0] == 'admin'){ echo 'active';}else{} ?> ">
                    <a href="<?php echo base_url('admin') ?>" class='sidebar-link'>
                        <i data-feather="home" width="20"></i> 
                        <span>Dashboard</span>
                    </a>                    
                </li>

            
            
            
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i data-feather="triangle" width="20"></i> 
                        <span>Components</span>
                    </a>
                    
                    <ul class="submenu ">
                        
                        <li>
                            <a href="component-alert.html">Alert</a>
                        </li>
                        
                        <li>
                            <a href="component-badge.html">Badge</a>
                        </li>
                        
                        <li>
                            <a href="component-breadcrumb.html">Breadcrumb</a>
                        </li>
                        
                        <li>
                            <a href="component-buttons.html">Buttons</a>
                        </li>
                        
                        <li>
                            <a href="component-card.html">Card</a>
                        </li>
                        
                        <li>
                            <a href="component-carousel.html">Carousel</a>
                        </li>
                        
                        <li>
                            <a href="component-dropdowns.html">Dropdowns</a>
                        </li>
                        
                        <li>
                            <a href="component-list-group.html">List Group</a>
                        </li>
                        
                        <li>
                            <a href="component-modal.html">Modal</a>
                        </li>
                        
                        <li>
                            <a href="component-navs.html">Navs</a>
                        </li>
                        
                        <li>
                            <a href="component-pagination.html">Pagination</a>
                        </li>
                        
                        <li>
                            <a href="component-progress.html">Progress</a>
                        </li>
                        
                        <li>
                            <a href="component-spinners.html">Spinners</a>
                        </li>
                        
                        <li>
                            <a href="component-tooltips.html">Tooltips</a>
                        </li>
                        
                    </ul>
                    
                </li>

            
                <li class='sidebar-title'>Setting System/li>

                <li class="sidebar-item <?php if($seg[0] == 'admin-data-controller'){ echo 'active';}else{} ?> ">
                    <a href="<?php echo base_url('admin-data-controller') ?>" class='sidebar-link'>
                        <i data-feather="home" width="20"></i> 
                        <span>Data Controller</span>
                    </a>                    
                </li>

            
            
         
        </ul>
    </div>