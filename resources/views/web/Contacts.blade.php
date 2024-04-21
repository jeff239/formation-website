@extends('layouts.main')

@section('content')
   @include('features.sections.Breadcumb.Breadcumb',$breadcumbData)

    @include('features.sections.ContactsDetails')

    @include('features.sections.MapSection')
@endsection
