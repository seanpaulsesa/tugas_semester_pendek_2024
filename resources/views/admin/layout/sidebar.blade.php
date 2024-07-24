     <!-- ========== Left Sidebar Start ========== -->
     <div class="left-side-menu">

         <div class="h-100" data-simplebar>

             <!--- Sidemenu -->
             <div id="sidebar-menu">

                 <ul id="side-menu">

                     <li>
                         <a href="{{ url('admin/dashboard') }}">
                             <i data-feather="airplay"></i>
                             <span> Dashboard </span>
                         </a>
                     </li>



                     <li>
                         <a href="{{ url('admin/mahasiswa') }}">
                             <i data-feather="user-check"></i>
                             <span> Mahasiwa </span>
                         </a>
                     </li>
                     <li>
                         <a href="{{ url('admin/jurusan') }}">
                             <i data-feather="box"></i>
                             <span> Jurusan </span>
                         </a>
                     </li>

                     <li>
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                        <i class="fe-log-out"></i>
                        {{ __('Keluar') }}
                    </a>
                     </li>


                 </ul>

             </div>
             <!-- End Sidebar -->

             <div class="clearfix"></div>

         </div>
         <!-- Sidebar -left -->

     </div>
     <!-- Left Sidebar End -->
