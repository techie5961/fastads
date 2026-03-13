@extends('layout.users.app')
@section('title')
   Invite Friends
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
        <strong class="desc">Invite Friends</strong>
        <span></span>
        </div>
        <section class="w-full body column p-20 g-10">
         
              <div style="border:1px solid rgba(0,0,0,0.1);box-shadow:0 0 10px rgba(0,0,0,0.1)" class="text-center bg-white br-10 column p-20 g-10">
             <strong class="desc c-primary">Invite & Earn</strong>
               <strong style="font-size:2rem;color:#4caf50;">&#8358;{{ number_format($general->referral->first,2) }}</strong>
                <span>Per successful referral</span>
                <div class="row align-center g-10 space-between">
                    <div class="column">
                        <strong class="desc c-primary">{{ number_format($referred) }}</strong>
                        <span class="opacity-07">People Referred</span>
                    </div>
                     <div class="column">
                        <strong class="desc c-primary">&#8358;{{ number_format($earned,2) }}</strong>
                        <span class="opacity-07">Total Earned</span>
                    </div>
                </div>
                <span>Get &#8358;{{ number_format($general->referral->first,2) }} instantly added to your referral wallet for each friend who registers through your link.</span>

            
            </div>
            {{-- new  --}}
             <div style="border:1px solid rgba(0,0,0,0.1);box-shadow:0 0 10px rgba(0,0,0,0.1)" class="text-center bg-white br-10 column p-20 g-10">
             <strong class="desc c-primary">Your personal referral link</strong>
           <div style="border:1px solid rgba(0,0,0,0.1);background:rgba(0,0,0,0.05);font-family:monospace" class="p-10 break-word br-10 w-full">
            {{ url('register/'.Auth::guard('users')->user()->username.'') }}
           </div>
           <div onclick="copy('{{ url('register/'.Auth::guard('users')->user()->username.'') }}')" class="w-full row align-center justify-center primary-text h-50 br-10 bg-primary">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M180,64H40A12,12,0,0,0,28,76V216a12,12,0,0,0,12,12H180a12,12,0,0,0,12-12V76A12,12,0,0,0,180,64ZM168,204H52V88H168ZM228,40V180a12,12,0,0,1-24,0V52H76a12,12,0,0,1,0-24H216A12,12,0,0,1,228,40Z"></path></svg>

            </span>
            <span>Copy Link</span>
           </div>
           <span class="opacity-07">
            Share this link with your families and friends. When they register and start using the platform, you earn &#8358;{{ number_format($general->referral->first,2) }} per referral + milestone bonus.
           </span>
            
            </div>
            
              {{-- new  --}}
             <div style="border:1px solid rgba(0,0,0,0.1);box-shadow:0 0 10px rgba(0,0,0,0.1)" class="bg-white br-10 column p-20 g-10">
             <strong class="desc c-primary">How Referral Works</strong>
             <div class="row w-full g-10">
                <span class="c-green">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z"></path></svg>
                </span>
                <span>Share your link with your families & friends.</span>
             </div>
             <div class="row w-full g-10">
                <span class="c-green">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z"></path></svg>
                </span>
                <span>Earn &#8358;{{ number_format($general->referral->first,2) }} bonus for every friend who signs up with the link.</span>
             </div>
             <div class="row w-full g-10">
                <span class="c-green">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z"></path></svg>
                </span>
                <span>All earnings added to your referral balance -- withdraw anytime(subject to minimum limits).</span>
             </div>
          
            
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


