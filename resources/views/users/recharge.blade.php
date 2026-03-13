@extends('layout.users.app')
@section('title')
    Post Ads
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
        <strong class="desc">Post Ads</strong>
        <span></span>
        </div>
        <section class="w-full body column p-20 g-10">
            <div style="border:1px solid rgba(0,0,0,0.1);box-shadow:0 0 10px rgba(0,0,0,0.1)" class="bg-white br-10 column p-20 g-10">
                <strong class="desc m-bottom-10 c-primary">Your Deposit Balance</strong>
                <strong style="font-size:2rem;" class="desc c-green">&#8358;{{ number_format(Auth::guard('users')->user()->deposit_balance,2) }}</strong>
                <span>This is your main deposit balance</span>
            </div>
              <div style="border:1px solid rgba(0,0,0,0.1);box-shadow:0 0 10px rgba(0,0,0,0.1)" class="bg-white br-10 column p-20 g-10">
             <strong class="desc c-primary">Make a deposit</strong>
             <div style="background:var(--primary-01);border:1px solid var(--primary-03)" class="w-full br-10 p-20 column g-10">
                <strong class="font-1">Send Payment To:</strong>
                <div class="row font-1 g-5">
                    <strong>Account Number:</strong><span>{{ $finance->deposit->account_number }}</span>
                </div>
                <div class="row font-1 g-5">
                    <strong>Account Name:</strong><span>{{ $finance->deposit->account_name }}</span>
                </div>
                <div class="row font-1 g-5">
                    <strong>Bank:</strong><span>{{ $finance->deposit->bank_name }}</span>
                </div>
                 <small class="c-red">
                Mimimum: &#8358;{{ number_format($finance->deposit->minimum_deposit,2) }} Send exact amount. Use your username as sender reference.
             </small>
             </div>
               <form action="{{ url('users/post/submit/deposit/request/process') }}" method="POST" onsubmit="PostRequest(event,this,MyFunc.Submitted)" class="w-full column g-10">
                     <div class="column g-5">
                          <input type="hidden" name="_token" value="{{ @csrf_token() }}" class="inp input required">
                           <label>Deposit Amount(&#8358;)</label>
                            <div class="cont h-50 w-full br-10" style="border:1px solid rgba(0,0,0,0.1);background:rgba(0,0,0,0.05)">
                            <input name="amount" min="{{ $finance->deposit->minimum_deposit }}" type="number" placeholder="Minimum {{ number_format($finance->deposit->minimum_deposit) }}" class="inp input required">
                            </div>
                        </div>
                         <div class="column g-5">
                           <label>Sender Name</label>
                            <div class="cont h-50 w-full br-10" style="border:1px solid rgba(0,0,0,0.1);background:rgba(0,0,0,0.05)">
                            <input name="sender_name" type="text" placeholder="Name that appears on transfer" class="inp input required">
                            </div>
                        </div>
                          <div class="column g-5">
                           <label>Bank Name</label>
                            <div class="cont h-50 w-full br-10" style="border:1px solid rgba(0,0,0,0.1);background:rgba(0,0,0,0.05)">
                            <input name="bank_name" type="text" placeholder="Name of bank used for transfer" class="inp input required">
                            </div>
                        </div>
                        <button class="post">Submit Deposit Request</button>
                      </form>
            
            </div>
           
           
        </section>
    </section>
@endsection
@section('js')
    <script class="js">
        window.MyFunc = {
            Submitted : function(response){
                let data=JSON.parse(response);
                if(data.status == 'success'){
                    window.location.href='{{ url('users/transactions') }}';
                }
            }
        }
    </script>
@endsection