@extends('layouts.app')

@section('content')
<div class="container">
  <ul class="collection with-header">

    <li class="collection-header">
      <h4>Votre commande est confirmée</h4>
      <p>Un e-mail vous a été envoyé à l'adresse <em>{{ auth()->user()->email }}</em> avec toutes ces informations.</p>
    </li>

    <li id="detail" class="collection-item">
      @include('command.partials.detail', [
        'tax' => $order->tax,
        'shipping' => $order->shipping,
        'total' => $order->total,
        'content' => $order->products,
      ])
      <div class="row">
        <div class="col s6">
          Référence de la commande :
        </div>
        <div class="col s6">
          <strong>{{ $order->reference }}</strong>
        </div>
      </div>
      <div class="row">
        <div class="col s6">
          Moyen de paiement :
        </div>
        <div class="col s6">
          <strong>{{ $order->payment_text }}</strong>
        </div>
      </div>
    </li>

    <li class="collection-item">
      <div class="row">
        <div class="grid-example col s12 m6">
          <h5>Adresse de facturation @if($order->adresses->count() === 1) et de livraison @endif</h5>
          @include('account.addresses.partials.address', [
            'address' => $order->adresses->first(),
          ])
        </div>
        @if($order->adresses->count() > 1)
          <div class="grid-example col s12 m6">
            <h5>Adresse de livraison</h5>
            @include('account.addresses.partials.address', [
              'address' => $order->adresses->last(),
            ])
          </div>
        @endif
      </div>
    </li>

  </ul>

  <ul class="collection with-header">
    <li class="collection-item">
      <h5>Votre commande a bien été enregistrée.</h5>
      @if($order->state->slug === 'cheque')
        <p>Veuillez nous envoyer un chèque avec :</p>
        <ul>
          <li>- montant du règlement : <strong>{{ number_format($order->total * (1 + $order->tax) + $order->shipping, 2, ',', ' ') }} €</strong></li>
          <li>- payable à l'ordre de <strong>{{ $shop->name }}</strong></li>
          <li>- à envoyer à <strong>{{ $shop->address }}</strong></li>
          <li>- n'oubliez pas d'indiquer votre référence de commande <strong>{{ $order->reference }}</strong></li>
        </ul>
        @if($order->pick)
          Vous pourrez venir chercher votre commande dès réception du paiement.
        @else
          <p><strong>Votre commande vous sera envoyée dès réception du paiement</strong>.</p>
        @endif

      @elseif($order->state->slug === 'mandat')
        <p>Vous avez choisi de payer par mandat administratif. Ce type de paiement est réservé aux administrations.</p>
        <p>Vous devez envoyer votre mandat administratif à :</p>
        <p><strong>{{ $shop->name }}</strong></p>
        <p><strong>{{ $shop->address }}</strong></p>
        <p>Vous pouvez aussi nous le transmettre par e-mail à cette adresse : <strong>{{ $shop->email }}</strong></p>
        <p>N'oubliez pas d'indiquer votre référence de commande <strong>{{ $order->reference }}</strong>.</p>
        @if($order->pick)
          <p>Vous pourrez venir chercher votre commande dès réception du mandat.</p>
        @else
          <p><strong>Votre commande vous sera envoyée dès réception de ce mandat.</strong>.</p>
        @endif

      @elseif($order->state->slug === 'virement')
        <p>Veuillez effectuer un virement sur notre compte :</p>
        <ul>
          <li>- montant du virement : <strong>{{ number_format($order->total * (1 + $order->tax) + $order->shipping, 2, ',', ' ') }} €</strong></li>
          <li>- titulaire : <strong>{{ $shop->holder }}</strong></li>
          <li>- BIC : <strong>{{ $shop->bic }}</strong></li>
          <li>- IBAN : <strong>{{ $shop->iban }}</strong></li>
          <li>- banque : <strong>{{ $shop->bank }}</strong></li>
          <li>- adresse banque : <strong>{{ $shop->bank_address }}</strong></li>
          <li>- n'oubliez pas d'indiquer votre référence de commande <strong>{{ $order->reference }}</strong></li>
        </ul>
        @if($order->pick)
          <p>Vous pourrez venir chercher votre commande dès réception du paiement.</p>
        @else
          <p><strong>Votre commande vous sera envoyée dès réception du virement.</strong>.</p>
        @endif

      @elseif($order->state->slug === 'carte' || $order->state->slug === 'erreur')

        {{-- On devra s'occuper de Stripe ici --}}

      @endif

      <div id="payment-ok" class="card center-align white-text green darken-4 hide">
        <div class="card-content">
          <span class="card-title">Votre paiement a été validé</span>
          @if($order->pick)
            <p>Vous pouvez venir chercher votre commande</p>
          @else
            <p>Votre commande va vous être envoyée</p>
          @endif
        </div>
      </div>

      <p>Pour toute question ou information complémentaire merci de contacter notre support client.</p>
    </li>
  </ul>

</div>
@endsection
