@extends('web.theme')
@section('content')

    {{-- HEADER CTA --}}
    @include('web.components.section-header')

    {{-- ABOUT CTA --}}
    @include('web.components.section-about')
    
    {{-- TESTEMUNHOS CTA --}}
    @include('web.components.section-testemunhos')
@endsection