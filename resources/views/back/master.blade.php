@include('back.header')


<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

      <!-- Topbar -->
      <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
          <i class="fa fa-bars"></i>
        </button>
      </nav>
      <!-- End of Topbar -->

        <section class="content">
            
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        @yield('content')
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>



      

