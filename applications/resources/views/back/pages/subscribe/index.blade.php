@extends('back.layout.master')

@section('headscript')

@endsection

@section('breadcrumb')
  <h1>
      Subscribe <small>News Letter</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
    <li class="active">Subscribe</li>
  </ol>
@stop

@section('content')
  <div class="row">
    <div class="col-md-12">
      @if(Session::has('message'))
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h4><i class="icon fa fa-check"></i> Succeed!</h4>
          <p>{{ Session::get('message') }}</p>
        </div>
      @endif
    </div>

    <div class="col-md-12">
      <div class="box box-widget">
        <div class="box-header with-border">
          <div class="box-title">
            <div class="btn-group">
              <button type="button" class="btn btn-default">Export</button>
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ url('/admtbe/subscribe/export/xlsx') }}">Excel</a></li>
                <li><a href="{{ url('/admtbe/subscribe/export/csv')}}">CSV</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="box-body table-responsive">
          <table  class="table table-bordered">
            <thead>
            <tr class="bg-black">
              <th>No</th>
              <th>Name</th>
              <th>Address</th>
            </tr>
            </thead>
            @php
              $pageget;
              if($subscribes->currentPage()==1)
                $pageget = 1;
              else
                $pageget = (($subscribes->currentPage() - 1) * $subscribes->perPage())+1;
            @endphp
            <tbody>
            @if($subscribes->isEmpty())
              <tr>
                <td colspan="8" align="center">Empty Data</td>
              </tr>
            @else
              @foreach($subscribes as $key)
              <tr>
                <td>{{$pageget}}</td>
                <td>{{ $key->name  }}</td>
                <td>{!! $key->email  !!}</td>
              </tr>
              @php
                $pageget++;
              @endphp
              @endforeach
            @endif
            </tbody>
          </table>
        </div>
        <div class="box-footer">
          <div class="pull-left">
            Total Record : <b>{{ $subscribes->total() }}</b> Subscribers
          </div>
          <div class="pagination pagination-sm no-margin pull-right">
            {{ $subscribes->links() }}
          </div>
        </div>
      </div>
    </div>

  </div>
@stop

@section('script')

@endsection
