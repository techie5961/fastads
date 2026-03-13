@extends('layout.users.app')
@section('title')
  Bank Details
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
        <strong class="desc">Bank Details</strong>
        <span></span>
        </div>
        <section class="w-full body column p-20 g-10">
          
              <div style="border:1px solid rgba(0,0,0,0.1);box-shadow:0 0 10px rgba(0,0,0,0.1)" class="bg-white br-10 column p-20 g-10">
             <strong class="desc c-primary">Bank Details</strong>
                @isset(Auth::guard('users')->user()->bank)
                     <div style="background:var(--primary-01);border:1px solid var(--primary-03)" class="w-full br-10 p-20 column g-10">
                
                <div class="row font-1 g-5">
                    <strong>Account Number:</strong><span>{{ json_decode(Auth::guard('users')->user()->bank)->account_number }}</span>
                </div>
                <div class="row font-1 g-5">
                    <strong>Account Name:</strong><span>{{ json_decode(Auth::guard('users')->user()->bank)->account_name }}</span>
                </div>
                <div class="row font-1 g-5">
                    <strong>Bank:</strong><span>{{ json_decode(Auth::guard('users')->user()->bank)->bank_name }}</span>
                </div>
              
             </div>
                @else
             <span>No bank details added yet. Add your bank account to withdraw earnings.</span>
                @endisset
                <form action="{{ url('users/post/add/bank/process') }}" method="POST" onsubmit="PostRequest(event,this,MyFunc.Added)" class="w-full column g-10">
               <input type="hidden" class="input" name="_token" value="{{ @csrf_token() }}">
                <label for="">Account Number</label>
                <div style="border:0.1px solid var(--bg-lighter)" class="cont row align-center w-full h-50 bg-light">
                    <input placeholder="Enter 10 digits account number" name="account_number" type="number" class="w-full inp input required account-number h-full no-border br-10 bg-transparent">
                </div>
                  <label for="">Account Bank</label>
                <div style="border:0.1px solid var(--bg-lighter)" class="cont row align-center w-full h-50 bg-light">
                 <select name="bank_name" class="w-full inp input required account-number h-full no-border br-10 bg-transparent">
                    <option value="" selected disabled>Select Bank....</option>
                     @foreach (Banks()->data as $data)
                    <option value="{{ $data->name }}">{{ $data->name }}</option>
                     @endforeach
                </select>  
                </div>

                 <label for="">Account Name</label>
                <div style="border:0.1px solid var(--bg-lighter)" class="cont row align-center w-full h-50 bg-light">
                    <input placeholder="Enter account name" name="account_name" type="text" class="w-full inp input required account-number h-full no-border br-10 bg-transparent">
                </div>
               
                
                <button class="post ">Update Bank Details</button>
            </form>

            
            </div>
           
           
        </section>
    </section>
@endsection
@section('js')
    <script class="js">
        window.MyFunc = {
           Added : function(response){
                let data=JSON.parse(response);
                if(data.status == 'success'){
                    window.location.reload();
                }
            }
        }
    </script>
@endsection


