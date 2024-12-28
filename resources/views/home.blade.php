@extends('layouts.app')

@section('title', 'Jasa Pembuatan Website Murah Surabaya | Cross Assist')

@section('content')
    @include('components.header')

    @include('components.content-section', [
        'order' => 'order-lg-2',
        'reverseOrder' => 'order-lg-1',
        'image' => 'assets/img/01.jpg',
        'title' => 'For those about to rock...',
        'description' => 'Lorem ipsum dolor sit amet...'
    ])

    @include('components.content-section', [
        'order' => '',
        'reverseOrder' => '',
        'image' => 'assets/img/02.jpg',
        'title' => 'We salute you!',
        'description' => 'Lorem ipsum dolor sit amet...'
    ])

    @include('components.content-section', [
        'order' => 'order-lg-2',
        'reverseOrder' => 'order-lg-1',
        'image' => 'assets/img/03.jpg',
        'title' => 'Let there be rock!',
        'description' => 'Lorem ipsum dolor sit amet...'
    ])
@endsection
