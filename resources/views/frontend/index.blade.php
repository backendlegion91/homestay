@extends('frontend.layouts.master')

@section('title', 'Home')

@section('content')

@include('frontend.pages.Slider')
@include('frontend.pages.skillhome')
@include('frontend.pages.trending')
@include('frontend.pages.Recent')
@include('frontend.pages.aboutcom') 

@endsection

