@extends('errors.illustrated-layout')

@section('code', '403 🤐')

@section('title', __('Unauthorized'))

@section('image')
    <div style="background-image: url('{{ asset('images/picsum-bg.jpg') }}');" class="absolute pin bg-no-repeat md:bg-left lg:bg-center bg-cover"></div>
@endsection

@section('message', __('Sorry, you don\'t have the permission to visit this page.'))
