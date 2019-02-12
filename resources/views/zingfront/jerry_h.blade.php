@extends('layouts.app')
@section('title', 'ZingFront智线|C 题一')

@section('content')
    <div class="row">
        <div class="col-md-10 offset-lg-1">
            <div class="card">
                @include('zingfront.zingfront')
                <div class="card-header">
                    <h2 class="text-center">
                        个人简历
                    </h2>
                </div>
                <div class="card-body">
                    @include('zingfront.jerry')
                </div>
            </div>
        </div>
    </div>
@endsection
