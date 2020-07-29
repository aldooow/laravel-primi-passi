@extends('layouts.app')

@section('title')
  BOOLEAN|HOME
@endsection

@section('content')
  <main>
    <div class="cta">
      <div class="left">
        <h1>DIVENTA SVILUPPATORE WEB</h1>
        <p>Trasformiamo la tua passione in una carriera. Se non trovi lavoro, ti rimborsiamo.</p>
        <ul>
          <li>6 mesi di corso intensivo online in diretta</li>
          <li>Nessuna competenza di programmazione richiesta</li>
          <li>Siamo certi del tuo successo, altrimenti ti rimborsiamo</li>
        </ul>
      </div>
      <div class="right">
        <img src="{{ asset('img/pc-boolean.png') }}" alt="img">
      </div>
    </div>

  </main>
@endsection
