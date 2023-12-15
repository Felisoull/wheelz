@extends('layouts.main')

@section('content')

                <div class="card-body success">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Вы авторизованы!!!') }}
                </div>

@endsection
