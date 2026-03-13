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
                <span>Use this to buy ad boosts</span>
            </div>
            <strong class="desc m-x-auto c-primary">Choose Your Ad Boost</strong>
            @if (!$categories->isEmpty())
                
          
              <div class="grid w-full pc-grid-2 place-center g-10">
                  @foreach ($categories as $data)
                    <form action="{{ url('users/post/ads/post/process') }}" onsubmit="PostRequest(event,this,MyFunc.Added)" style="border:1px solid rgba(0,0,0,0.1);box-shadow:0 0 10px rgba(0,0,0,0.1)" class="w-full p-20 br-10 bg-white column g-10">
                        <div class="row space-between w-full g-10 align-center">
                            <div class="column g-5">
                                <strong class="desc c-primary">{{ $data->members }} Members</strong>
                                <strong class="font-1 c-green">&#8358;{{ number_format($data->cost,2) }}</strong>
                            </div>
                            <div style="padding:0.3rem 0.9rem;background:goldenrod;border:1px dashed goldenrod;color:goldenrod;background:rgb(218, 165, 32,0.3)" class="w-fit br-1000 row align-center bg-gold gc-white">
                               <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="15" width="15"><path d="M219.71,117.38a12,12,0,0,0-7.25-8.52L161.28,88.39l10.59-70.61a12,12,0,0,0-20.64-10l-112,120a12,12,0,0,0,4.31,19.33l51.18,20.47L84.13,238.22a12,12,0,0,0,20.64,10l112-120A12,12,0,0,0,219.71,117.38ZM113.6,203.55l6.27-41.77a12,12,0,0,0-7.41-12.92L68.74,131.37,142.4,52.45l-6.27,41.77a12,12,0,0,0,7.41,12.92l43.72,17.49Z"></path></svg>
                               </span>
                                <span>Instant Boost</span>
                            </div>
                        </div>
                        {{-- csrf token --}}
                        <input type="hidden" value="{{ @csrf_token() }}" name="_token" class="inp input required">
                      {{-- category id --}}
                         <input type="hidden" value="{{ $data->id }}" name="category_id" class="inp input required">
                        <div class="column g-5">
                            <label>Select Platform</label>
                            <div class="cont h-50 w-full br-10" style="border:1px solid rgba(0,0,0,0.1);background:rgba(0,0,0,0.05)">
                              <select name="platform" class="inp input required">
                                <option value="" selected disabled>Choose Platform</option>
                                <option value="whatsapp">Whatsapp</option>
                                <option value="telegram">Telegram</option>
                                <option value="facebook">Facebook</option>
                                <option value="youtube">Youtube</option>
                                <option value="tiktok">Tiktok</option>
                              </select>
                            </div>
                        </div>
                          <div class="column g-5">
                            <label>Your Ad Link (URL)</label>
                            <div class="cont h-50 w-full br-10" style="border:1px solid rgba(0,0,0,0.1);background:rgba(0,0,0,0.05)">
                            <input name="link" type="url" placeholder="https://example.com/your-ad-link" class="inp input required">
                            </div>
                        </div>
                        <button class="post bold">Buy Now - &#8358;{{ number_format($data->cost,2) }}</button>
                    </form>
                @endforeach
              </div>
            @endif
        </section>
    </section>
@endsection
@section('js')
    <script class="js">
        window.MyFunc = {
            Added : function(response){
                let data=JSON.parse(response);
                if(data.status == 'success'){
                    window.location.href='{{ url('users/ads/posted') }}';
                }
            }
        }
    </script>
@endsection