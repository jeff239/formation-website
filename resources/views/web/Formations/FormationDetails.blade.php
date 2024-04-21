@extends('layouts.main')

@section('content')
    @include('features.sections.Breadcumb.Breadcumb',$breadcumbData)
    @include('features.sections.ServicesDetails', compact('formation', 'listFormations'))
@endsection
