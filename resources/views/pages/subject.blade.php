@extends('layouts.app')
@section('pageTitle', 'Subjects')
@section('content')
    <div class="pagetitle">
        <nav>
            <h1>@yield('pageTitle')</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item active">@yield('pageTitle')</li>
            </ol>
        </nav>
    </div>

    <div class="mt-3 mb-3">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
            Add Subject
        </button>
    </div>
    @include('components.modals.subject')

    <section class="section dashboard">
        <div class="row">

            {{-- Left side columns --}}
            <div class="col-lg-12">
                @include('components.table.subject')
            </div>

            {{-- </div> --}}
            {{-- End Left side columns --}}

            {{-- Right side columns --}}
            {{-- <div class="col-lg-4">
            </div> --}}
            {{-- End Right side columns --}}


        </div>
    </section>
@endsection