@extends('layout.admins.app')
@section('title')
    Ads Category
@endsection
@section('main')
    <section class="w-full column p-20 g-10">
        <form action="{{ url('admins/post/ads/categories/add/process') }}" onsubmit="PostRequest(event,this,MyFunc.added)" style="border:1px solid var(--rgb-01)" class="w-full column g-10 p-20 br-20 bg-light">
           
            <div class="row c-primary align-center g-10">
                <span>
                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="30" width="30"><path d="M224,64H180V56a28,28,0,0,0-28-28H104A28,28,0,0,0,76,56v8H32A20,20,0,0,0,12,84V192a20,20,0,0,0,20,20H224a20,20,0,0,0,20-20V84A20,20,0,0,0,224,64ZM100,56a4,4,0,0,1,4-4h48a4,4,0,0,1,4,4v8H100ZM220,88v32H196v-4a12,12,0,0,0-24,0v4H84v-4a12,12,0,0,0-24,0v4H36V88ZM36,188V144H60v4a12,12,0,0,0,24,0v-4h88v4a12,12,0,0,0,24,0v-4h24v44Z"></path></svg>
                </span>
                <strong class="desc">Add Category</strong>
            </div>
            <hr style="background:var(--rgb-01)">
            {{-- csrf token --}}
            <input type="hidden" name="_token" value="{{ @csrf_token() }}" class="inp input">
            {{-- new input --}}
            <div class="column g-5 w-full">
                <label for="">How many members</label>
                <div class="cont w-full h-50 br-10">
                    <input name="members" placeholder="Eg 100" type="number" class="inp required input">
                </div>
            </div>
               {{-- new input --}}
            <div class="column g-5 w-full">
                <label for="">Ad Cost</label>
                <div class="cont w-full h-50 br-10">
                    <input name="cost" placeholder="Eg &#8358;3,000" type="number" class="inp required input">
                </div>
            </div>
              {{-- earning per user --}}
            <div class="column g-5 w-full">
                <label for="">Reward (per user)</label>
                <div class="cont w-full h-50 br-10">
                    <input name="reward" placeholder="Eg &#8358;200" type="number" class="inp required input">
                </div>
            </div>
                {{-- new input --}}
            <div class="column g-5 w-full">
                <label for="">Ad Instructions</label>
                <div class="cont w-full h-200 br-10">
                    <textarea name="instructions" placeholder="Enter instructons" class="inp no-resize required input"></textarea>
                </div>
            </div>
            <button class="post">Add Category</button>
        </form>
    </section>
@endsection
@section('js')
    <script class="js">
        window.MyFunc = {
            added : function(response){
                let data=JSON.parse(response);
                if(data.status == 'success'){
                    window.location.href='{{ url('admins/ads/categories/manage') }}';
                }

            }
        }
    </script>
@endsection