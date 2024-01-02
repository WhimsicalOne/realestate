{{-- https://tailtemplate.com/posts/template-for-real-estates --}}
{{-- https://preview.themeforest.net/item/hously-tailwind-css-real-estate-html-template/full_screen_preview/38304854 --}}
{{-- https://shreethemes.in/hously/landing/index-four.html --}}
{{-- https://shreethemes.in/hously/dashboard/index.html --}}
@extends('layouts.app')

@section('content')
    <x-hero />
    <x-categories :categories="$categories" />

@endsection


