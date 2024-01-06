@extends('layouts.app')

@section('content')
    <x-hero />
    <x-categories :categories="$categories" />
@endsection


