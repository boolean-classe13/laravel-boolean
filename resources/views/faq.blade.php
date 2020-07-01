@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center"><i class="far fa-question-circle"></i> Domande frequenti</h1>

                @foreach ($domande_risposte as $single_faq)
                    <h2>{{ $single_faq['domanda'] }}</h2>
                    <p>{{ $single_faq['risposta'] }}</p>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('page-title', 'FAQ')

@section('body-class', 'faq')
