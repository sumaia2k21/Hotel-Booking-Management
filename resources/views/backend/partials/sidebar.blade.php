
<div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                 @if(auth()->user()->role=='admin')
                
                <li >
                        <<a class="has-arrow" href="javascript:void()" aria-expanded="false">
                             
                             <span class="nav-text">{{auth()->user()->name}}</span>
                        </a>
                        
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a href="{{route('dashboard')}}" aria-expanded="false">
                        <i class="fa fa-home" aria-hidden="true"></i>
                             <span class="nav-text">Home</span>
                        </a>
                        
                    </li>
                    
                    
                    
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-list" aria-hidden="true"></i>
                            <span class="nav-text">Room Catagory</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('add_catagory')}}">Add Room Catagory</a></li>
                            <li><a href="{{route('manage_catagory')}}">Manage Catagory</a></li>
                        </ul>
                    </li>
                   
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-h-square" aria-hidden="true"></i>
                             <span class="nav-text">Facilities</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('add_facilities')}}">Add Facilities</a></li>
                            <li><a href="{{route('manage_facilities')}}">Manage Facilities</a></li>
                           
                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <!-- <i class="fa fa-bed" aria-hidden="true"></i> -->
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                            <span class="nav-text">New Room</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('add_room')}}">Add Room</a></li>
                            <li><a href="{{route('manage_room')}}">Manage Room</a></li>
                        </ul>
                    </li>
                  
                    <!-- <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-menu menu-icon"></i><span class="nav-text">Page</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('about_us')}}" aria-expanded="false">About Us</a></li>
                            <li><a href="{{route('contact_us')}}" aria-expanded="false">ontact us</a></li>
                        </ul>
                    </li> -->
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-list" aria-hidden="true"></i>
                            <span class="nav-text">Pages</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('about_us')}}">About_us</a></li>
                            <li><a href="{{route('contact_us')}}">Contact Us</a></li>
                        </ul>
                    </li>
                    
                  
                    
                    
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-book" aria-hidden="true"></i>
                            <span class="nav-text">Booking</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('all_booking')}}">All Booking</a></li>
                            <li><a href="{{route('new_booking')}}">New Booking</a></li>
                            <li><a href="{{route('all_booking')}}">Approve Booking</a></li>
                            <li><a href="{{route('all_booking')}}">Cancel Booking</a></li>
                           
                        </ul>
                    </li>
                 <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-h-square" aria-hidden="true"></i>
                            <span class="nav-text">Hotel Information</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('hotelinfo')}}">Add hotel Info</a></li>
                            <li><a href="{{route('hotelinfo_list')}}">Manage hotel info list</a></li>
                            
                        </ul>
                    </li> 
                   
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-check-square" aria-hidden="true"></i>
                            <span class="nav-text">Enquiry </span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('read_enquiry')}}">Read Enquiry</a></li>
                            <li><a href="./form-validation.html">Unread Enquiry</a></li>
                            
                        </ul>
                    </li>
                    <!-- <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-users" aria-hidden="true"></i>
                            <span class="nav-text">Staff</span>
                            <ul aria-expanded="false">
                            <li><a href="./uc-nestedable.html">Add Employee</a></li>
                            <li><a href="./uc-noui-slider.html"></a>Manage Employee</li>
                            
                        </ul>
                        </a>
                        
                    </li> -->
                    <li class="mega-menu mega-menu-sm">
                        <li><a  href="javascript:void()" aria-expanded="false"></li>
                        <i class="fa fa-bar-chart" aria-hidden="true"></i>
                            <span class="nav-text">Reports </span>
                        </a>
                        
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a  href="{{route('customer.list')}}" aria-expanded="false">
                        <i class="fa fa-user" aria-hidden="true"></i>
                            <span class="nav-text">Customer </span>
                        </a>
                        
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a  href="{{route('user.list')}}" aria-expanded="false">
                        <i class="fa fa-user" aria-hidden="true"></i>
                            <span class="nav-text">User </span>
                        </a>
                        
                    </li>
                   
                     <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-note menu-icon"></i><span class="nav-text">Staff </span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('staff')}}">add staff</a></li>
                            <li><a href="{{route('staff.list')}}">Manage Staff</a></li>
                            
                        </ul>
                    </li>
                    <!-- <li class="nav-label">Table</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-menu menu-icon"></i><span class="nav-text">Table</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./table-basic.html" aria-expanded="false">Basic Table</a></li>
                            <li><a href="./table-datatable.html" aria-expanded="false">Data Table</a></li>
                        </ul>
                    </li>  -->
                    <!-- <li class="nav-label">Pages</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-notebook menu-icon"></i><span class="nav-text">Pages</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./page-login.html">Login</a></li>
                            <li><a href="./page-register.html">Register</a></li>
                            <li><a href="./page-lock.html">Lock Screen</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                <ul aria-expanded="false">
                                    <li><a href="./page-error-404.html">Error 404</a></li>
                                    <li><a href="./page-error-403.html">Error 403</a></li>
                                    <li><a href="./page-error-400.html">Error 400</a></li>
                                    <li><a href="./page-error-500.html">Error 500</a></li>
                                    <li><a href="./page-error-503.html">Error 503</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li> -->
                @endif
                @if(auth()->user()->role=='Manager')
                
                <li >
                        <<a class="has-arrow" href="javascript:void()" aria-expanded="false">
                             
                             <span class="nav-text">{{auth()->user()->name}}</span>
                        </a>
                        
                    </li>
                <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-list" aria-hidden="true"></i>
                            <span class="nav-text">Pages</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('about_us')}}">About_us</a></li>
                            <li><a href="{{route('contact_us')}}">Contact Us</a></li>
                        </ul>
                    </li>
                     <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <!-- <i class="fa fa-bed" aria-hidden="true"></i> -->
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                            <span class="nav-text">New Room</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('add_room')}}">Add Room</a></li>
                            <li><a href="{{route('manage_room')}}">Manage Room</a></li>
                        </ul>
                    </li>



                @endif
                @if(auth()->user()->role=='Receptionist')
                <li >
                        <a  href="javascript:void()" aria-expanded="false">
                             
                             <span class="nav-text">{{auth()->user()->name}}</span>
                        </a>
                        
                    </li>
                <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-book" aria-hidden="true"></i>
                            <span class="nav-text">Booking</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('all_booking')}}">All Booking</a></li>
                            <li><a href="{{route('new_booking')}}">New Booking</a></li>
                            <li><a href="{{route('all_booking')}}">Approve Booking</a></li>
                            <li><a href="{{route('all_booking')}}">Cancel Booking</a></li>
                           
                        </ul>
                    </li>
                @endif
                </ul>
            </div>
        </div>