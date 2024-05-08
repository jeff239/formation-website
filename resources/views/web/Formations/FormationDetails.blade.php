@extends('layouts.main')

@section('content')
    @include('features.sections.Breadcumb.Breadcumb',compact('breadcumbData','banner'))
    @include('features.sections.ServicesDetails', compact('formationDetails', 'listFormations', 'questions'))
@endsection
