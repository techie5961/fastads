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
        <strong class="desc">Account Settings</strong>
        <span></span>
        </div>
        <section class="w-full body column p-20 g-10">
            <div style="border:1px solid rgba(0,0,0,0.1);box-shadow:0 0 10px rgba(0,0,0,0.1)" class="bg-white br-10 column p-20 g-10">
             <strong class="desc c-primary">Account Information</strong>
             <div class="row w-full align-center space-between g-10">
                <span class="opacity-07">Username</span>
                <span>{{ Auth::guard('users')->user()->username }}</span>
             </div>
             <div class="row w-full align-center space-between g-10">
                <span class="opacity-07">Email</span>
                <span>{{ Auth::guard('users')->user()->email }}</span>
             </div>
             <div class="row w-full align-center space-between g-10">
                <span class="opacity-07">User ID</span>
                <span>{{ Auth::guard('users')->user()->uniqid }}</span>
             </div>
             <div class="row w-full align-center space-between g-10">
                <span class="opacity-07">Earning/Activities Balance</span>
                <span>&#8358;{{ number_format(Auth::guard('users')->user()->activities_balance,2) }}</span>
             </div>
             <div class="row w-full align-center space-between g-10">
                <span class="opacity-07">Referral Balance</span>
                <span>&#8358;{{ number_format(Auth::guard('users')->user()->affiliate_balance,2) }}</span>
             </div>
             <hr style="background:rgba(0,0,0,0.1)">
             <div onclick="window.location.href='{{ url('users/logout') }}'" class="w-full pointer br-10 row font-1 align-center p-10 justify-center bg-primary primary-text">
                <span>Logout</span>
             </div>
           
               
            </div>
              <div style="border:1px solid rgba(0,0,0,0.1);box-shadow:0 0 10px rgba(0,0,0,0.1)" class="bg-white br-10 column p-20 g-10">
             <strong class="desc c-primary">Update Password</strong>
           
               <form action="{{ url('users/post/update/password/process') }}" method="POST" onsubmit="PostRequest(event,this,MyFunc.Updated)" class="w-full column g-10">
               <input type="hidden" class="input" name="_token" value="{{ @csrf_token() }}">
                <label for="">Current Password</label>
               <div style="border:0.1px solid var(--bg-lighter)" class="cont row align-center w-full h-50 bg-light border-1 bg border-color-silver">
                    <input placeholder="Enter current password" name="current_password" type="password" class="w-full inp input required account-number h-full no-border br-10 bg-transparent">
                </div>
                  <label for="">New Password</label>
               <div style="border:0.1px solid var(--bg-lighter)" class="cont row align-center w-full h-50 bg-light border-1 bg border-color-silver">
                    <input placeholder="Enter current password" name="new_password" type="password" class="w-full inp input required account-number h-full no-border br-10 bg-transparent">
                </div>
                  <label for="">Confirm New Password</label>
              <div style="border:0.1px solid var(--bg-lighter)" class="cont row align-center w-full h-50 bg-light border-1 bg border-color-silver">
                    <input placeholder="Enter current password" name="confirm_password" type="password" class="w-full inp input required account-number h-full no-border br-10 bg-transparent">
                </div>
                
               
             
                <button class="post br-0 clip-0 bold">Update Account Password</button>
            </form>
            
            </div>
           
           
        </section>
    </section>
@endsection
@section('js')
    <script class="js">
        window.MyFunc = {
            Updated : function(response){
                let data=JSON.parse(response);
                if(data.status == 'success'){
                    window.location.reload();
                }
            }
        }
    </script>
@endsection