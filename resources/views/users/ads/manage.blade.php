@extends('layout.users.app')
@section('title')
    Posted Ads
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
        <strong class="desc">My Ads</strong>
        <span></span>
        </div>
        <div class="body p-20 w-full column g-10">
            @if ($ads->isEmpty())
                @include('components.sections',[
                    'null' => true
                ])
            @else
             <div class="grid place-center g-10 w-full pc-grid-2">
            @foreach ($ads as $data)
                <div style="border:1px solid var(--primary-02);box-shadow:0 0 10px rgba(0,0,0,0.1)" class="w-full bg-white column g-10 p-20 br-10">
                    <div class="row w-full g-10 align-center space-between">
                        <strong class="desc c-primary">{{ ucwords($data->title) }}</strong>
                        <div class="status {{ $data->status == 'completed' ? 'green' : 'gold' }}">{{ $data->status }}</div>
                    </div>
                    <div class="row opacity-07 align-center g-2">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="15" width="15"><path d="M208,96a12,12,0,1,1,12,12A12,12,0,0,1,208,96ZM196,72a12,12,0,1,0-12-12A12,12,0,0,0,196,72Zm28.66,56a8,8,0,0,0-8.63,7.31A88.12,88.12,0,1,1,120.66,40,8,8,0,0,0,119.34,24,104.12,104.12,0,1,0,232,136.66,8,8,0,0,0,224.66,128ZM128,56a72,72,0,1,1-72,72A72.08,72.08,0,0,1,128,56Zm-8,72a8,8,0,0,0,8,8h48a8,8,0,0,0,0-16H136V80a8,8,0,0,0-16,0Zm40-80a12,12,0,1,0-12-12A12,12,0,0,0,160,48Z"></path></svg>

                        </span>
                        <small>Posted {{ $data->frame }}</small>
                    </div>
                    <div class="row align-center g-2">
                        <span>Target Members:</span>
                        <span class="bold">{{ number_format($data->limit) }}</span>
                    </div>
                     <div class="row align-center g-2">
                        <span>Completed Members:</span>
                        <span class="bold">{{ number_format($data->completed) }}</span>
                    </div>
                     <div class="row align-center g-2">
                       <div onclick="window.open('{{ $data->link }}')" style="border-bottom:4px solid #55d659;" class="w-fit row align-center g-5 c-white bold p-10 h-50 br-5 bg-green row aligm-center justify-center no-select pointer">
                        <span>Visit Link</span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M192,136v72a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V80A16,16,0,0,1,48,64h72a8,8,0,0,1,0,16H48V208H176V136a8,8,0,0,1,16,0Zm32-96a8,8,0,0,0-8-8H152a8,8,0,0,0-5.66,13.66L172.69,72l-42.35,42.34a8,8,0,0,0,11.32,11.32L184,83.31l26.34,26.35A8,8,0,0,0,224,104Z"></path></svg>

                        </span>
                       </div>
                    </div>
                </div>
            @endforeach
             </div>
            @endif
        </div>
    </section>
@endsection