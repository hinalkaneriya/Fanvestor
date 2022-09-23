{{--
  Template Name: Fanvestor Template
--}}

@extends('layouts.app')
@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.content-fanvestor')
  @endwhile
@endsection
