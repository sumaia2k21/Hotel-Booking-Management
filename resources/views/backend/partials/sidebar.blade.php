
<div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                 @if(auth()->user()->role=='admin')
                
                    <li >
                        <a  href="javascript:void()" aria-expanded="false">
                             
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
                        <i class="fa fa-h-square" aria-hidden="true"></i>
                            <span class="nav-text">Hotel Information</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('hotelinfo')}}">Add hotel Info</a></li> 
                        </ul>
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
                  
                 
                    <!-- <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-list" aria-hidden="true"></i>
                            <span class="nav-text">Pages</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('about_us')}}">About_us</a></li>
                            <li><a href="{{route('contact_us')}}">Contact Us</a></li>
                        </ul>
                    </li>
                     -->
                 
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-book" aria-hidden="true"></i>
                            <span class="nav-text">Booking</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('all_booking')}}">All Booking List</a></li>
                            <li><a href="{{route('new.booking.list')}}">New Booking List</a></li>
                            <!-- <li><a href="{{route('approved.booking.list')}}">Approve Booking List</a></li>
                            <li><a href="{{route('cancel.booking.list')}}">Cancel Booking List</a></li> -->
                          
                           
                        </ul>
                    </li>
                   
                   
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-list" aria-hidden="true"></i>
                            <span class="nav-text">gallary</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('gallaries')}}">add gallary</a></li>
                            <li><a href="{{route('gallerystore')}}">view gallary</a></li>
                          
                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a  href="{{route('read_enquiry')}}" aria-expanded="false">
                        <i class="fa fa-check-square" aria-hidden="true"></i>
                            <span class="nav-text">Enquiry </span>
                        </a>
                    </li>
          
                    <li class="mega-menu mega-menu-sm">
                        <a class="" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-book" aria-hidden="true"></i>
                            <span class="nav-text">Payment</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('payment.list')}}">payment List</a></li>  
                            
                        </ul>
                    </li>
                    <!-- <li class="mega-menu mega-menu-sm">
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
                        
                    </li> -->
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-user" aria-hidden="true"></i>
                            <span class="nav-text">Users</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('customer.list')}}">Customer</a></li>
                            <li><a href="{{route('user.list')}}">User</a></li>
                          
                        </ul>
                    </li>
                     <!-- <li>
                        <a href="{{route('staff')}}" aria-expanded="false">
                            <i class="icon-note menu-icon"></i><span class="nav-text">Staff </span>
                        </a>
                      
                    </li> -->
                    <!-- <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-list" aria-hidden="true"></i>
                            <span class="nav-text">images</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('images')}}">add images</a></li>
                            <li><a href="{{route('images.table')}}">view images</a></li>
                        </ul>
                    </li>
                     -->
                   
                @endif
                @if(auth()->user()->role=='Manager')
                
                <li >
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                             
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
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-picture-o" aria-hidden="true"></i>
                            <span class="nav-text">gallary</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('gallaries')}}">add gallary</a></li>
                            <li><a href="{{route('gallerystore')}}">view gallary</a></li>
                          
                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a  href="{{route('read_enquiry')}}" aria-expanded="false">
                        <i class="fa fa-check-square" aria-hidden="true"></i>
                            <span class="nav-text">Enquiry </span>
                        </a>
                    </li>
          
                    <li class="mega-menu mega-menu-sm">
                        <a class="" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-book" aria-hidden="true"></i>
                            <span class="nav-text">Payment</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('payment.list')}}">payment List</a></li>  
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
                        <a href="{{route('dashboard')}}" aria-expanded="false">
                        <i class="fa fa-home" aria-hidden="true"></i>
                             <span class="nav-text">Home</span>
                        </a>
                        
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <!-- <i class="fa fa-bed" aria-hidden="true"></i> -->
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                            <span class="nav-text">New Room</span>
                        </a>
                        <ul aria-expanded="false">
                            
                            <li><a href="{{route('manage_room')}}">Manage Room</a></li>
                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-book" aria-hidden="true"></i>
                            <span class="nav-text">Booking</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('all_booking')}}">All Booking List</a></li>
                            <li><a href="{{route('new.booking.list')}}">New Booking List</a></li>
                            <!-- <li><a href="{{route('approved.booking.list')}}">Approve Booking List</a></li>
                            <li><a href="{{route('cancel.booking.list')}}">Cancel Booking List</a></li> -->
                           
                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-list" aria-hidden="true"></i>
                            <span class="nav-text">gallary</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('gallaries')}}">add gallary</a></li>
                            <li><a href="{{route('gallerystore')}}">view gallary</a></li>
                          
                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-h-square" aria-hidden="true"></i>
                             <span class="nav-text">Facilities</span>
                        </a>
                        <ul aria-expanded="false">
                      
                            <li><a href="{{route('manage_facilities')}}">Manage Facilities</a></li>
                           
                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-book" aria-hidden="true"></i>
                            <span class="nav-text">Payment</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('payment.list')}}">payment List</a></li>  
                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-user" aria-hidden="true"></i>
                            <span class="nav-text">Users</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('customer.list')}}">Customer</a></li>
                           
                          
                        </ul>


                @endif
                </ul>
            </div>
        </div>