@extends('layouts.app')

@section('content')
@auth
CIAO SONO LA HOME registrata
@else
CIAO SONO LA HOME NON REGISTRATA
@endauth
@endsection
