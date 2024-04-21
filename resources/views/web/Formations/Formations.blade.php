@extends('layouts.main')

@section('content')
    @include('features.sections.Breadcumb.Breadcumb',$breadcumbData)
    @include('features.sections.ServiceSectionFour', $formations)
@endsection
