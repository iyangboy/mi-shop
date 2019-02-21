@extends('layouts.app')
@section('title', 'Transn 传神 面试问题')

@section('content')
    <div class="row">
        <div class="col-md-10 offset-lg-1">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">
                        Transn 传神 面试问题
                    </h2>
                </div>
                <div class="card-body">
                    @include('transn.index_md')
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scriptsAfterJs')
@endsection
