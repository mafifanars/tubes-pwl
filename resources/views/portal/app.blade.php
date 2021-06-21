  @include('portal.head')

  <body class="">
  <div class="wrapper ">
    
  @include('portal.sidebar')
    
    <div class="main-panel" id="main-panel">

  @include('portal.header')

      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            @yield('content')
          </div>
        </div>
      </div>
      
    @include('portal.footer')

    @include('portal.foot')
 