{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    {{-- Dashboard 1 --}}

    <div class="row">

        <div class="col-lg-6 col-xxl-6">
            @include('backend.includes._expenses-graph', ['class' => 'card-stretch card-stretch-half gutter-b'])
            @include('backend.includes._earnings-graph', ['class' => 'card-stretch card-stretch-half gutter-b'])
        </div>

        <div class="col-lg-6 col-xxl-6 order-1 order-xxl-1">
            @include('backend.includes._event-overview', ['class' => 'card-stretch gutter-b'])
        </div>

        <div class="col-lg-6 col-xxl-6 order-1 order-xxl-2">
            @include('backend.includes._event-creator', ['class' => 'card-stretch gutter-b'])
        </div>

        <div class="col-lg-6 col-xxl-6 order-1 order-xxl-2">
            @include('backend.includes._todo-list', ['class' => 'card-stretch gutter-b'])
        </div>
    </div>

@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
@endsection
