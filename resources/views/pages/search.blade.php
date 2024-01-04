@extends('layouts.app')

@section('content')
    <x-sub-hero :title="$title" :background="$background" />
    <livewire:listings />
@endsection
