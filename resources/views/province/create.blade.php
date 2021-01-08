@extends('adminlte::page')

@section('title', 'Province')

@section('content_header')
    Create Province
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Province</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('provinces.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('province.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
