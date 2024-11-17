@extends('layouts.app')

@section('title','home')

@section('content')
<div class="container">
    <section class="py-5">
        <div class="text-center">
            <h1>Immobiliando</h1>
            <p>Gestisci i tuoi immobili in piena autonomia</p>
        </div>
    </section>
    <section class="py-4">
        <h2 class="text-center mb-4">Perchè ci scelgono</h2>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="text-center p-3 border h-100">
                    <h3>Immobili</h3>
                    <div class="h-75 d-flex">
                        <p class="m-auto pb-3">Aggiungi un immobile alla tua lista e il gioco è fatto</p>
                    </div> 
                </div>    
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="text-center p-3 border h-100">
                    <h3>Richieste</h3>
                    <div class="h-75 d-flex">
                        <p class="m-auto pb-3">Rendiamo possibile l'incontro tra domanda e offerta</p>
                    </div>
                    
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="text-center p-3 border h-100">
                    <h3>Marketing</h3>
                    <div class="h-75 d-flex">
                        <p class="m-auto pb-3">Pubblicizziamo i tuoi immobili in tutta Italia</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="text-center p-3 border h-100">
                    <h3>Aggiornato</h3>
                    <div class="h-75 d-flex">
                        <p class="m-auto pb-3">In continuo aggiornamento per garantire il massimo delle prestazioni</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-4">
        <h5>Il nostro punto di forza?</h5>
        <h2 class="mb-4">Assistenza continua</h2>
        <p>Da oltre 30 anni il nostro team collabora con le agenzie immobiliari, mettendo a frutto l'esperienza acquisita per offrirti una consulenza rapida ed efficace nella gestione di qualsiasi problematica.</p>
        <p>Nel gestionale avrai la possibilità di richiedere assistenza remota in qualsiasi momento, garantendoti così un supporto tecnico sempre disponibile e di alta qualità.</p>
    </section>
</div>
@endsection