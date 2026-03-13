@extends('layout.users.app')
@section('title')
  All Transactions
@endsection
@section('css')
    <style class="css">
        .card form{
            display:none;
        }
        .card.active form{
            display:flex;
        }
    </style>
@endsection
@section('main')
      <section class="w-full column g-10">
         <div class="main-parent space-between p-20 row align-center">
           <div class="row g-10 align-center">
            <span onclick="window.location.href='{{ url()->previous() }}'">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M228,128a12,12,0,0,1-12,12H69l51.52,51.51a12,12,0,0,1-17,17l-72-72a12,12,0,0,1,0-17l72-72a12,12,0,0,1,17,17L69,116H216A12,12,0,0,1,228,128Z"></path></svg>

            </span>
            <span>Back</span>
        </div> 
        <strong class="desc">All Transactions</strong>
        <span></span>
        </div>
        <div class="body p-20 w-full column g-10">
          @if ($transactions->isEmpty())
              @include('components.sections',[
                'null' => true
              ])
          @else
              <div class="grid w-full pc-grid-2 g-10 place-center">
                @foreach ($transactions as $data)
                  <div style="border:1px solid rgba(0,0,0,0.1);box-shadow:0 0 10px rgba(0,0,0,0.1)" class="w-full column p-20 g-10 br-10 bg-white">
                    <div class="row align-center g-10 space-between">
                        <div class="column g-5">
                            <strong class="desc">{{ $data->type }}</strong>
                            <small class="opacity-07">{{ $data->date }}</small>
                        </div>
                         <div class="column g-5">
                            <strong class="desc m-left-auto {{ $data->class == 'credit' ? 'c-green' : 'c-red' }}">{{ $data->class == 'credit' ? '+' : '-' }}&#8358;{{ number_format($data->amount,2) }}</strong>
                            <div class="status m-left-auto {{ $data->status == 'success' ? 'green' : ($data->status == 'pending' ? 'gold' : 'red') }}">{{ $data->status }}</div>
                        </div>
                    </div>
                    <span>Ref: {{ $data->uniqid }}</span>

                  </div>
              @endforeach
              </div>
          @endif
        </div>
      </section>
@endsection
