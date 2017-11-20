@extends('backend.layout.master')

@section('title')
  <title>PAN ASIA HASH | Gallery</title>
@endsection

@section('headscript')
<link href="{{ asset('backend/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('backend/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
<style type="text/css">
  .thumnail{
    float: left;
    width: 16%;
    padding: 1%;
    margin: 1%;
    border: solid .5px;
    border-radius: 5px;
    text-align: center;
  }
</style>
@endsection

@section('content')
  @if(Session::has('berhasil'))
  <script>
    window.setTimeout(function() {
      $(".alert-success").fadeTo(700, 0).slideUp(700, function(){
          $(this).remove();
      });
    }, 5000);
  </script>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="alert alert-success alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        <strong>{{ Session::get('berhasil') }}</strong>
      </div>
    </div>
  </div>
  @endif

  <div class="modal fade modal-form-add" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="{{ route('backend.gallery.store') }}" method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="modal-title" id="myModalLabel2">Add Gallery</h4>
          </div>
          <div class="modal-body">
            {{ csrf_field() }}
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Gambar Max 700x700</label>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <input class="form-control col-md-7 col-xs-12" name="picture" type="file" accept=".jpg,.png">
                @if($errors->has('picture'))
                  <code><span style="color:red; font-size:12px;">{{ $errors->first('picture')}}</span></code>
                @endif
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button id="send" type="submit" class="btn btn-success">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Gallery </h2>
          <ul class="nav panel_toolbox">
            <a class="btn btn-success btn-sm" data-toggle='modal' data-target='.modal-form-add'><i class="fa fa-plus"></i> Add</a>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content table-responsive">
          <div id="list-gallery">
              @foreach ($Gallery as $key)
              <div class="thumnail">
                <a href="{{ asset('assets/images/'.$key->picture) }}">
                  <img src="{{ asset('assets/images/'.$key->picture) }}" style="height: 90px;">
                </a>
                <hr>
                <a href="{{ route('backend.gallery.FP', ['id'=> $key->id]) }}">
                  <span class="label {{ $key->flug_publish == 'N' ? 'label-danger' : 'label-success'}}" data-toggle="tooltip" data-placement="top" title="Click to {{ $key->flug_publish == 'N' ? 'Publish' : 'Unpublish'}}">
                    <i class="fa {{ $key->flug_publish == 'N' ? 'fa-thumbs-o-down' : 'fa-thumbs-o-up'}} "></i> {{ $key->flug_publish == 'N' ? 'Unpublish' : 'Publish'}}
                  </span>
                </a>
                &nbsp;
                <a href="{{ route('backend.gallery.delete', ['id'=> $key->id]) }}">
                  <span class="label label-danger" data-toggle="tooltip" data-placement="top" title="Click to Delete This Data">
                    <i class="fa fa-trash "></i> Delete
                  </span>
                </a>
              </div>
              @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>



@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script type="text/javascript">
baguetteBox.run('#list-gallery');
</script>
@if(Session::has('info-form-add'))
<script>
$('.modal-form-add').modal('show');
</script>
@endif

@endsection
