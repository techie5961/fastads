@extends('layout.users.app')
@section('title')
    Tasks
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
        <strong class="desc">Daily Tasks</strong>
        <span></span>
        </div>
        <div class="body p-20 w-full column g-10">
            @if ($tasks->isEmpty())
                @include('components.sections',[
                    'null' => true
                ])
            @else
            <div class="grid w-full g-10 place-center pc-grid-2">
                   @foreach ($tasks as $data)
                    <div style="border:1px solid rgba(0,0,0,0.1);box-shadow:0 0 10px rgba(0,0,0,0.1)" class="w-full card br-10 overflow-hidden column g-10">
                        <div style="background:linear-gradient(to right,var(--primary),var(--primary-dark));color:white;" class="w-full p-20 column g-10">
                        <strong class="desc">{{ ucwords($data->title) }}</strong>
                        <dv class="row align-center g-5">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M232,64H208V48a8,8,0,0,0-8-8H56a8,8,0,0,0-8,8V64H24A16,16,0,0,0,8,80V96a40,40,0,0,0,40,40h3.65A80.13,80.13,0,0,0,120,191.61V216H96a8,8,0,0,0,0,16h64a8,8,0,0,0,0-16H136V191.58c31.94-3.23,58.44-25.64,68.08-55.58H208a40,40,0,0,0,40-40V80A16,16,0,0,0,232,64ZM48,120A24,24,0,0,1,24,96V80H48v32q0,4,.39,8ZM232,96a24,24,0,0,1-24,24h-.5a81.81,81.81,0,0,0,.5-8.9V80h24Z"></path></svg>

                            </span>
                            <span>Reward</span>
                            <strong class="font-1">&#8358;{{ number_format($data->reward,2) }}</strong>
                        </dv>
                        </div>
                        <div class="column p-20 g-10">
                            <div class="row w-full align-center g-10 space-between">
                                <span>Users Completed</span>
                                <span>{{ $data->completed }}/{{ $data->limit }}</span>
                            </div>
                          
                            <div style="background:rgba(0,0,0,0.1);height:7px;" class="w-full br-1000 overflow-hidden">
                                <div style="width:{{ ($data->completed / $data->limit)*100 }}%;" class="h-full bg-primary">

                                </div>
                            </div>
                             <div onclick="window.open('{{ $data->link }}');this.closest('.card').classList.add('active')" style="background:rgb(0, 119, 255);" class="bg-blue c-white font-1 row align-center justify-center g-5 h-50 br-10">
                           <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M192,136v72a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V80A16,16,0,0,1,48,64h72a8,8,0,0,1,0,16H48V208H176V136a8,8,0,0,1,16,0Zm32-96a8,8,0,0,0-8-8H152a8,8,0,0,0-5.66,13.66L172.69,72l-42.35,42.34a8,8,0,0,0,11.32,11.32L184,83.31l26.34,26.35A8,8,0,0,0,224,104Z"></path></svg>

                           </span>
                                <span>Visit Task Link</span>
                        </div>
                        <small class="w-full text-center opacity-07">
                            Click to visit the link -- this unlocks the claim form
                        </small>
                      <form action="{{ url('users/post/claim/task/reward/process') }}" method="POST" onsubmit="PostRequest(event,this,MyFunc.Claimed)" class="w-full column g-10">
                     <div class="column g-5">
                          <input type="hidden" name="_token" value="{{ @csrf_token() }}" class="inp input required">
                         <input type="hidden" name="id" value="{{ $data->id }}" class="inp input required">
                        <label>Your {{ ucfirst(explode(' ',$data->title)[0]) }} {{ strtoupper(explode(' ',$data->title)[0]) == 'WHATSAPP' ? 'number' : 'username' }}</label>
                            <div class="cont h-50 w-full br-10" style="border:1px solid rgba(0,0,0,0.1);background:rgba(0,0,0,0.05)">
                            <input name="handle" type="text" placeholder="E.g {{ strtoupper(explode(' ',$data->title)[0]) == 'WHATSAPP' ? '0912345678' : 'techie' }}" class="inp input required">
                            </div>
                        </div>
                        <button class="post">Claim Reward</button>
                      </form>
                        </div>
                       
                    </div>
                @endforeach
            </div>
             
            @endif
        </div>
      </section>
@endsection
@section('js')
    <script class="js">
        window.MyFunc = {
            Claimed : function(response){
                let data=JSON.parse(response);
                if(data.status == 'success'){
                    window.location.reload();
                }
            }
        }
    </script>
@endsection