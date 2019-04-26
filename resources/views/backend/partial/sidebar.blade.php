    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{asset('backend/images/user.png')}}" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</div>
                    <div class="email">{{Auth::user()->email}}</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="material-icons">input</i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="{{route('dashboard')}}">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <!-- start prescription -->
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">supervisor_account</i>
                            <span>Prescription</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{route('prescription.index')}}">All Prescription</a>
                            </li>
                            <li>
                                <a href=" ">Prescription</a>
                                
                            </li>
                        </ul>
                    </li>
                    <!-- end prescription -->
                    <!-- add prescription -->
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">supervisor_account</i>
                            <span>Addpatient</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{route('addpatient.index')}}">All Addpatient</a>
                            </li>
                            <li>
                                <a href="{{route('addpatient.create')}}">Create Addpatient</a>
                                
                            </li>
                        </ul>
                    </li>
                    <!-- end Prescription -->
 
                            <!-- count all info -->
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Venue</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{route('venue.index')}}">All Venue</a>
                            </li>
                            <li>
                                <a href="{{route('venue.create')}}">Create Venue</a>
                                
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Send SMS</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{route('sms.index')}}">All Venue</a>
                            </li>
                        </ul>
                    </li>
                     <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Send Email</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{route('venue.index')}}">All Venue</a>
                            </li>
                            <li>
                                <a href="{{route('venue.create')}}">Create Venue</a>
                                
                            </li>
                        </ul>
                    </li>
                    <!-- all blood group --->
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Bloog</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{route('blood.index')}}">All Blood</a>
                            </li>
                            <li>
                                <a href="{{route('blood.create')}}">Create Group</a>
                                
                            </li>
                        </ul>
                    </li>
                    <!-- end bloof group -->
                    <li class="">
                        <a href="{{route('fees.index')}}">
                            <i class="material-icons">local_offer</i>
                            <span>Total Fees List</span>
                        </a>
                    </li>
                            <!--- end all info -->
                   
            <!-- #Menu -->
            <!-- Footer -->

            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->

        <!-- #END# Right Sidebar -->
    </section>