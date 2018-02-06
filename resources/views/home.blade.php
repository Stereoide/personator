@extends('layouts.app')

@section('content')
    <persons :is-adding-person="isAddingPerson" @close-add-person-modal="isAddingPerson = false"></persons>
@endsection
