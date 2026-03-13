@extends('layout.users.app')
@section('title')
    Team
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
        <strong class="desc">My Team</strong>
        <span></span>
        </div>
        <div class="body p-20 w-full column g-10">
        @if ($team->isEmpty())
            @include('components.sections',[
                'null' => true,
                'text' => 'No Referrals Found'
            ])
        @else
        <strong class="desc grid-full">My Team</strong>
            @foreach ($team as $data)
                <div style="border:1px solid var(--primary-03);box-shadow:0 0 10px rgba(0,0,0,0.1)" class="w-full border-1 border-color-primary br-10 p-20 bg-light column g-10">
                    <div class="row align-center w-full g-10 space-between">
                      <div class="w-50 desc bold perfect-square br-10 bg-primary primary-text column align-center justify-center">
                        {{ strtoupper(substr($data->username,0,2)) }}
                      </div>
                        <div class="column g-5 m-right-auto">
                            <strong class="font-1 bold no-select">{{ ucfirst($data->username) }}</strong>
                          
                               <span style="color:silver" class="row align-center">
                                   @if ($data->ref == Auth::guard('users')->user()->username)
                                    Level 1
                                    @else
                                    Indirect
                                @endif</span>
                                <div style="background:#4caf50;color:white;font-weight:bolder;padding:5px 10px;border-radius:5px;" class="w-fit p-5 p-x-10 br-2">Completed</div>
                                </div>
                                <strong style="color:#4caf50;font-size:1.5rem;" class="c-green font-1">+&#8358;{{ number_format($data->commission,2) }}</strong>



                               
                    </div>
                  
                   
                  
                </div>
            @endforeach
        @endif
        </div>
    </section>
@endsection