<!DOCTYPE html>
<html lang="en">
  <head>
    {{-- <!-- Required meta tags --> --}}
    @include('admin.partials._head')
    @include('admin.partials._style')
  </head>
  <body>
    <div class="container-scroller">
      @include('admin.partials._sidebar')

      
      <div class="container-fluid page-body-wrapper">

        @include('admin.partials._header')

        <div class="main-panel">

          @yield('mainContent')
          @include('admin.partials._footer')
          
        </div>

      </div>
      
    </div>
    
    @include('admin.partials._script')
    
  </body>
</html>