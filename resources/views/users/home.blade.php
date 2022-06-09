@extends('layouts.app')

@section('content')
@auth
<div id="app"></div>
@else
CIAO SONO LA HOME NON REGISTRATA
@endauth
@endsection
