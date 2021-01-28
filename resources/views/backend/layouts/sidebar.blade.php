<aside class="main-sidebar">
    <div class="sidebar">
        <div class="user-panel">
            <div class="image pull-left">
                <img src="{{ '/backend/files/profile.jpg' }}" class="img-circle" alt="User Image">
            </div>
            <div class="info">
                <h4>Welcome</h4>
                <p>Auth</p>
            </div>
        </div>
       
        <!-- sidebar menu -->
        <ul class="sidebar-menu">
            <li class="active">
                <a href="{{ url('/admin') }}"><i class="fa fa-hospital-o"></i><span>Dashboard</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user-md"></i><span>Test</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/test/create') }}">Add New</a></li>
                    <li><a href="{{ url('/test') }}"> list</a></li>
                    
                </ul>
            </li>
            {{-- <li class="treeview">
                <a href="#">
                    <i class="fa fa-sitemap"></i><span>Department</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/admin/department/create') }}">Add Department</a></li>
                    <li><a href="{{ url('/admin/department') }}">Department list</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user-md"></i><span>Doctor</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/admin/doctor/create') }}">Add Doctor</a></li>
                    <li><a href="{{ url('/admin/doctor') }}">Doctor list</a></li>
                    
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i><span>Patient</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/admin/patient/create') }}">Add patient</a></li>
                    <li><a href="{{ url('/admin/patient') }}">patient list</a></li>
                </ul>
            </li>
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-list-alt"></i> <span>Schedule</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/admin/schedule/create') }}">Add schedule</a></li>
                    <li><a href="{{ url('/admin/schedule') }}">schedule list</a></li>
                    
                </ul>
            </li> --}}
            {{-- <li class="treeview">
                <a href="#">
                    <i class="fa fa-check-square-o"></i><span>Appionment</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/admin/appointment/create') }}">Add appoinemnt</a></li>
                    <li><a href="{{ url('/admin/appointment') }}">Appionment list</a></li>
                </ul>
            </li> --}}
            {{-- <li class="treeview">
                <a href="#">
                    <i class="fa fa-credit-card-alt"></i><span>Online Appionment</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/admin/new_appointments') }}">Appionment list</a></li>
                </ul>
            </li>
            <li class="treeview">
                    <a href="#">
                    <i class="fa fa-file-text"></i><span>Test</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/admin/test') }}">Test Type View</a></li>
                    <li><a href="{{ url('/admin/patient-test/create') }}">Test Create</a></li>
                    <li><a href="{{ url('/admin/patient-test') }}">Test View</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="widgets.html">
                    <i class="fa fa-user-circle-o"></i><span>Medicine</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/admin/medicine-type') }}">Medicine Type list</a></li>
                    <li><a href="{{ url('/admin/generic') }}">Generic list</a></li>
                    <li><a href="{{ url('/admin/manufacturer') }}">Manufacture list</a></li>
                    <li><a href="{{ url('/admin/medicine/create') }}">Add Medicine</a></li>
                    <li><a href="{{ url('/admin/medicine') }}">Medicine list</a></li>                    
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file-text"></i><span>Prescription</span>
                    <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/admin/prescription/create') }}">Prescription Add</a></li>
                    <li><a href="{{ url('/admin/prescription') }}">Prescription List</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file-text-o"></i><span>Account</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/admin/account') }}">Account List</a></li>
                    <li><a href="{{ url('/admin/payment') }}">Payment list</a></li>
                    <li><a href="{{ url('/admin/account-invoice') }}">Account Invoice list</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-bed"></i><span>Billing</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/admin/service') }}">Service</a></li>
                    <li><a href="{{ url('/admin/payment-method') }}">payment method</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-list-alt fw"></i><span>Human Resource</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/admin/employee-roll') }}">Employee Type List</a></li>
                    <li><a href="{{ url('/admin/employee/create') }}">Add Employee</a></li>
                    <li><a href="{{ url('/admin/employee') }}">Employee List</a></li>                
                </ul>
            </li>
            <li>
                <a href="{{ url('/admin/setting') }}">
                    <i class="fa fa-window-maximize"></i><span>Settings</span> 
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file-text-o"></i><span>Notice</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="add-notice.html">Add Notice</a></li>
                    <li><a href="not-list.html">Notice list</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-columns"></i><span> Mail</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="layout_fixed.html">Fixed layout</a></li>
                    <li><a href="layout_boxed.html">Boxed layout</a></li>
                    <li><a href="layout_collapsed_sidebar.html">collapsed layout</a></li>
                </ul>
            </li> --}}
            {{-- 
            
        
        
        
        
        <li>
            <a href="mailbox.html">
             <i class="fa fa-envelope"></i><span> Mail</span>
         </a>
     </li>
     <li>
        <a href="widgets.html">
            <i class="fa fa-shopping-bag"></i><span> Widgets</span> 
        </a>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-file-text"></i><span>pages</span>
            <span class="pull-right-container">
             <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="register.html">Sign up</a></li>
            <li><a href="login.html">Sign in</a></li>
            <li><a href="forget_password.html">Forget password</a></li>
            <li><a href="lockscreen.html">Lockscreen</a></li>
            <li><a href="404.html">404 Error</a></li>
            <li><a href="505.html">505 Error</a></li>
            <li><a href="blank.html">Blank Page</a></li>
            <li><a href="profile.html">Profile page</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-list-alt fw"></i><span> User Interface</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="calender.html">Calender</a></li>
            <li><a href="buttons.html">Buttons</a></li>
            <li><a href="panels.html">Panels</a></li>
            <li><a href="typography.html">Typography</a></li>
            <li><a href="tabs.html">Tabs & accordian</a></li>
            <li><a href="icons_fontawesome.html">Icons</a></li>
            <li><a href="notification.html">Notifications</a></li>
            <li><a href="profile.html">Modals</a></li>
            <li><a href="gridSystem.html">grid</a></li>
            <li><a href="slider.html">slider</a></li>
            <li><a href="timeline.html">Timeline</a></li>
            <li><a href="invoice.html">Invoice</a></li>
            <li><a href="labels-badges-alerts.html">Badges</a></li>
            <li><a href="progressbars.html">progress bar</a></li>
            
        </ul>
    </li>
    
    
                     --}}
</ul>
</div> <!-- /.sidebar -->
</aside>