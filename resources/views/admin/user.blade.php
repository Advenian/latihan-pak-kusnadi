@extends('admin.admin_master')
@section('admin.index')
    
<section class="content">
  <div class="container-fluid">
    <!-- Info boxes -->
    
    <div class="row">
      <iframe src="{{ route('user.home')}}" frameborder="1" width="100%" style="height: 80vh"></iframe>
    </div>
    <!-- /.row -->

   
    <!-- /.row -->
  </div><!--/. container-fluid -->
</section>
@endsection