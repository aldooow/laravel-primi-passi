@extends('layouts.app')

@section('title')
  BOOLEAN|DOMANDE FREQUENTI
@endsection

@section('content')
  <main>
    <div class="cta">
      <h1><b>Domande frequenti</b></h1>
      <p>Le nostre risposte a tutte le tue domande. Non trovi la risposta che stai cercando? Contattaci e saremo felici di darti una mano.</p>
    </div>
  </main>
  <div id="faq">
    <div class="left">
      <h2>Prima del corso</h2>
      @foreach ($faqs_prima as $faq)
      <div>
        <h3 class="question">
          {{ $faq['question'] }}
          <i class="fas fa-plus"></i>
        </h3>
        <p class="hidden">{{ $faq['answer'] }}</p>
      </div>
      @endforeach
    </div>
    <div class="right">
      <h2>Dopo il corso</h2>
      @foreach ($faqs_dopo as $faq)
        <div>
          <h3 class="question">
            {{ $faq['question'] }}
            <i class="fas fa-plus"></i>
          </h3>
          <p class="hidden">{{ $faq['answer'] }}</p>
        </div>
      @endforeach
    </div>
  </div>
@endsection
