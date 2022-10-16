@extends('layouts.admin_layout')
@section('title')
Dashboard
@endsection

@section('content')

<div class="content-header">
</div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{isset($total_users) && !empty($total_users) ? $total_users : 0}}</h3>
                        <p>Total Users</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{ route('admin.user.list') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{isset($total_fee_category) && !empty($total_fee_category) ? $total_fee_category : 0}}</h3>
                        <p>Total Fee Category</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{ route('admin.fee.list') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')

    

@endsection

