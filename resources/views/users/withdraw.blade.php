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
        <strong class="desc">Withdraw Funds</strong>
        <span></span>
        </div>
        <section class="w-full body column p-20 g-10">
            <div style="border:1px solid rgba(0,0,0,0.1);box-shadow:0 0 10px rgba(0,0,0,0.1)" class="bg-white br-10 column p-20 g-10">
                <strong class="desc m-bottom-10 c-primary">Your Withdrawable Balance</strong>
                <strong style="font-size:2rem;" class="desc c-green">&#8358;{{ number_format(Auth::guard('users')->user()->activities_balance + Auth::guard('users')->user()->affiliate_balance,2) }}</strong>
                <span>This is the sum of your Activities and Referral balance</span>
            </div>
              <div style="border:1px solid rgba(0,0,0,0.1);box-shadow:0 0 10px rgba(0,0,0,0.1)" class="bg-white br-10 column p-20 g-10">
             <strong class="desc c-primary">Make a withdrawal</strong>
             <div style="background:var(--primary-01);border:1px solid var(--primary-03)" class="w-full br-10 p-20 column g-10">
                <strong class="font-1">Withdrawal Bank</strong>
                <div class="row font-1 g-5">
                    <strong>Account Number:</strong><span>{{ $bank->account_number }}</span>
                </div>
                <div class="row font-1 g-5">
                    <strong>Account Name:</strong><span>{{ $bank->account_name }}</span>
                </div>
                <div class="row font-1 g-5">
                    <strong>Bank:</strong><span>{{ $bank->bank_name }}</span>
                </div>
               <div onclick="window.location.href='{{ url('users/bank/add') }}'" class="row no-select pc-pointer c-primary align-center g-5">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M232.49,55.51l-32-32a12,12,0,0,0-17,0l-96,96A12,12,0,0,0,84,128v32a12,12,0,0,0,12,12h32a12,12,0,0,0,8.49-3.51l96-96A12,12,0,0,0,232.49,55.51ZM192,49l15,15L196,75,181,60Zm-69,99H108V133l56-56,15,15Zm105-7.43V208a20,20,0,0,1-20,20H48a20,20,0,0,1-20-20V48A20,20,0,0,1,48,28h67.43a12,12,0,0,1,0,24H52V204H204V140.57a12,12,0,0,1,24,0Z"></path></svg>

                </span>
                 <span>Edit Bank Details</span>
               </div>
             </div>
               <form action="{{ url('users/post/submit/withdrawal/request/process') }}" method="POST" onsubmit="PostRequest(event,this,MyFunc.Submitted)" class="w-full column g-10">
                     
                         <div class="column g-5">
                           <label>Withdrawal Wallet</label>
                            <div class="cont h-50 w-full br-10" style="border:1px solid rgba(0,0,0,0.1);background:rgba(0,0,0,0.05)">
                           <select onchange="MyFunc.SelectWallet(this.value)" name="wallet" class="inp input w-full h-full br-10 bg-transparent border-none">
                            <option value="" selected disabled>Select Wallet....</option>
                            <option value="activities_balance">Activities Wallet - &#8358;{{ number_format(Auth::guard('users')->user()->activities_balance,2) }}</option>
                         <option value="affiliate_balance">Referral Wallet - &#8358;{{ number_format(Auth::guard('users')->user()->affiliate_balance,2) }}</option>
                        </select> 
                            </div>
                        </div>
                        <div class="column g-5">
                          <input type="hidden" name="_token" value="{{ @csrf_token() }}" class="inp input required">
                           <label>Withdrawal Amount(&#8358;)</label>
                            <div class="cont h-50 w-full br-10" style="border:1px solid rgba(0,0,0,0.1);background:rgba(0,0,0,0.05)">
                            <input name="amount" type="number" placeholder="Minimum 0" class="inp input required">
                            </div>
                        </div>
                          
                        <button class="post">Submit Withdrawal Request</button>
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
            },
            SelectWallet : function(val){
               
                if(val == 'activities_balance'){
                    document.querySelector('input[name=amount]').placeholder = 'Minimum {{ $activities_minimum }}'
                }else{
                        document.querySelector('input[name=amount]').placeholder = 'Minimum {{ $affiliate_minimum }}'
               
                }
            }
        }
    </script>
@endsection