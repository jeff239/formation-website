@extends('layouts.main')
@section('content')
    @include('features.sections.Breadcumb.Breadcumb',$breadcumbData)
    @include('features.sections.NewsDetailsSection',compact('publication','categories', 'latestPublications', 'commentaires'))
@endSection
