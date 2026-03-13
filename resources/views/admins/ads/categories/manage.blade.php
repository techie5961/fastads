@extends('layout.admins.app')
@section('title')
Manage Ads Categories
    
@endsection
@section('main')
<section class="w-full p-20 column g-10">
    {{-- analytics --}}
    <div style="border:1px solid var(--rgb-01)" class="w-full br-20 bg-light p-20 column g-10">
        <div class="row w-full g-10">
            <div class="column h-50 perfect-square no-shrink bg-green-transparent br-10 c-green align-center justify-center">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="30" width="30"><path d="M100,36H56A20,20,0,0,0,36,56v44a20,20,0,0,0,20,20h44a20,20,0,0,0,20-20V56A20,20,0,0,0,100,36ZM96,96H60V60H96ZM200,36H156a20,20,0,0,0-20,20v44a20,20,0,0,0,20,20h44a20,20,0,0,0,20-20V56A20,20,0,0,0,200,36Zm-4,60H160V60h36Zm-96,40H56a20,20,0,0,0-20,20v44a20,20,0,0,0,20,20h44a20,20,0,0,0,20-20V156A20,20,0,0,0,100,136Zm-4,60H60V160H96Zm104-60H156a20,20,0,0,0-20,20v44a20,20,0,0,0,20,20h44a20,20,0,0,0,20-20V156A20,20,0,0,0,200,136Zm-4,60H160V160h36Z"></path></svg>

                </span>
                
            </div>
            <div class="column g-5">
                <span>Total Categories</span>
                <strong style="font-size:1.5rem;">{{ number_format($total) }}</strong>
            </div>
            
        </div>
    </div>
    @if ($categories->isEmpty())
        @include('components.sections',[
            'null' => true
        ])
    @else
        @foreach ($categories as $data)
            <div style="border:1px solid var(--rgb-01)" class="w-full br-20 p-20 column g-10 bg-light">
               
           <div class="row align-center g-5">
            <span>Members:</span>
            <strong class="font-1">{{ number_format($data->members) }}</strong>
           </div>
            <div class="row align-center g-5">
            <span>Cost:</span>
            <strong class="font-1">&#8358;{{ number_format($data->cost,2) }}</strong>
           </div>
            <div class="row align-center g-5">
            <span>Last Updated:</span>
            <strong class="font-1">{{ $data->frame }}</strong>
           </div>
           <div class="row w-full g-10 align-center space-between">
            <button class="btn-blue">
                Edit
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M232.49,55.51l-32-32a12,12,0,0,0-17,0l-96,96A12,12,0,0,0,84,128v32a12,12,0,0,0,12,12h32a12,12,0,0,0,8.49-3.51l96-96A12,12,0,0,0,232.49,55.51ZM192,49l15,15L196,75,181,60Zm-69,99H108V133l56-56,15,15Zm105-7.43V208a20,20,0,0,1-20,20H48a20,20,0,0,1-20-20V48A20,20,0,0,1,48,28h67.43a12,12,0,0,1,0,24H52V204H204V140.57a12,12,0,0,1,24,0Z"></path></svg>
             </button>
            <button onclick="MyFunc.Populate()" class="btn-red">
                Delete
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M216,48H180V36A28,28,0,0,0,152,8H104A28,28,0,0,0,76,36V48H40a12,12,0,0,0,0,24h4V208a20,20,0,0,0,20,20H192a20,20,0,0,0,20-20V72h4a12,12,0,0,0,0-24ZM100,36a4,4,0,0,1,4-4h48a4,4,0,0,1,4,4V48H100Zm88,168H68V72H188ZM116,104v64a12,12,0,0,1-24,0V104a12,12,0,0,1,24,0Zm48,0v64a12,12,0,0,1-24,0V104a12,12,0,0,1,24,0Z"></path></svg>

            </button>
           </div>
            </div>
        @endforeach
    @endif
</section>
    
@endsection
@section('js')
    <script class="js">
        
    </script>
@endsection