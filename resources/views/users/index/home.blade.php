@extends('layout.users.index')
@section('title')
    Home
@endsection
@section('css')
    <style class="css">
        @media(min-width:800px){
            section.section{
                align-items:center;
            }
        }
    </style>
@endsection
@section('main')
    <section class="w-full section column p-20 g-10">
        <strong style="font-size:2rem;">
            Turn views into <span class="c-primary">results</span> &bull; grow your community
        </strong>
        <span style="color:var(--primary-dark)">Buy real members, followers & engagement -- or complete micro-tasks and earn real rewards.</span>
        <div class="grid pc-grid-2 w-full g-10 place-center">
            <div onclick="window.location.href='{{ url('register') }}'" class="w-full pointer no-select p-10 br-1000 row h-50 align-center font-1 justify-center g-5 primary-text bold bg-primary">
               <span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M101.85,191.14C97.34,201,82.29,224,40,224a8,8,0,0,1-8-8c0-42.29,23-57.34,32.86-61.85a8,8,0,0,1,6.64,14.56c-6.43,2.93-20.62,12.36-23.12,38.91,26.55-2.5,36-16.69,38.91-23.12a8,8,0,1,1,14.56,6.64Zm122-144a16,16,0,0,0-15-15c-12.58-.75-44.73.4-71.4,27.07h0L88,108.7A8,8,0,0,1,76.67,97.39l26.56-26.57A4,4,0,0,0,100.41,64H74.35A15.9,15.9,0,0,0,63,68.68L28.7,103a16,16,0,0,0,9.07,27.16l38.47,5.37,44.21,44.21,5.37,38.49a15.94,15.94,0,0,0,10.78,12.92,16.11,16.11,0,0,0,5.1.83A15.91,15.91,0,0,0,153,227.3L187.32,193A16,16,0,0,0,192,181.65V155.59a4,4,0,0,0-6.83-2.82l-26.57,26.56a8,8,0,0,1-11.71-.42,8.2,8.2,0,0,1,.6-11.1l49.27-49.27h0C223.45,91.86,224.6,59.71,223.85,47.12Z"></path></svg>
               </span>
                <span>Get Started</span>
            </div>
            <div onclick="window.location.href='{{ url('login') }}'" style="border:1px solid var(--primary);color:var(--primary-dark)" class="w-full pointer no-select p-10 br-1000 row h-50 align-center font-1 justify-center g-5 bold">
               <span>
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M126.41,24C70.72,24.85,25.21,70.07,24,125.75a103.48,103.48,0,0,0,13.51,53.5,4,4,0,0,0,7.1-.29A119.29,119.29,0,0,0,56,128,71.93,71.93,0,0,1,73.74,80.67a8.22,8.22,0,0,1,10.8-1.59A8,8,0,0,1,86,91a55.92,55.92,0,0,0-14,37,135.12,135.12,0,0,1-18.44,68.31,4,4,0,0,0,.61,4.85A104.33,104.33,0,0,0,67,212.21,4,4,0,0,0,72.82,211,159.58,159.58,0,0,0,84,189a8,8,0,1,1,14.8,6.1,176.9,176.9,0,0,1-11.85,23.54,4,4,0,0,0,1.89,5.74,103.46,103.46,0,0,0,25,6.7,4,4,0,0,0,4.07-2,206.86,206.86,0,0,0,25.57-85.61,8,8,0,1,1,15.95,1.16,222.83,222.83,0,0,1-21.58,80.75,4,4,0,0,0,4.08,5.74,103.72,103.72,0,0,0,20.6-4.95,4,4,0,0,0,2.35-2.23A247.29,247.29,0,0,0,184,129.76c.22-30.64-23.4-56.67-54-57.73a56.72,56.72,0,0,0-16,1.73,8,8,0,0,1-9.84-6.21,8.23,8.23,0,0,1,6.29-9.39A72.05,72.05,0,0,1,200,128a264.82,264.82,0,0,1-10.66,74.63,4,4,0,0,0,6.47,4.15A104,104,0,0,0,126.41,24ZM128,96a32.05,32.05,0,0,1,23.85,10.67,8,8,0,0,1-1.24,11.79,8.26,8.26,0,0,1-10.88-1.34,16,16,0,0,0-16.78-4.3,16.39,16.39,0,0,0-11,15.67,176.89,176.89,0,0,1-3.19,33A8,8,0,0,1,101,168a7.69,7.69,0,0,1-1.5-.14,8.3,8.3,0,0,1-6.31-9.66A161.12,161.12,0,0,0,96,128,32,32,0,0,1,128,96Z"></path></svg>
            </span>
                <span>Login</span>
            </div>
            
        </div>
        <div class="row g-10">
                <div class="column g-10">
                    <strong style="font-size:1.5rem;" class="desc c-primary">150k+</strong>
                    <span class="opacity-07">active earners</span>
                </div>
                 <div class="column g-10">
                    <strong style="font-size:1.5rem;" class="desc c-primary">8.2M</strong>
                    <span class="opacity-07">tasks done</span>
                </div>
            </div>
            <img src="{{ asset('banners/premium_photo-1683977922495-3ab3ce7ba4e6.avif') }}" alt="" class="w-full br-10 max-w-500">
    <div class="column no-select opacity-05 align-center w-full justify-center g-10">
        <span>trusted by fast growing communities</span>
        <div class="row w-full align-center justify-center g-10">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="30" width="30"><path d="M228.88,26.19a9,9,0,0,0-9.16-1.57L17.06,103.93a14.22,14.22,0,0,0,2.43,27.21L72,141.45V200a15.92,15.92,0,0,0,10,14.83,15.91,15.91,0,0,0,17.51-3.73l25.32-26.26L165,220a15.88,15.88,0,0,0,10.51,4,16.3,16.3,0,0,0,5-.79,15.85,15.85,0,0,0,10.67-11.63L231.77,35A9,9,0,0,0,228.88,26.19ZM175.53,208,92.85,135.5l119-85.29Z"></path></svg>

            </span>
            <span>
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="30" width="30"><path d="M176,24H80A56.06,56.06,0,0,0,24,80v96a56.06,56.06,0,0,0,56,56h96a56.06,56.06,0,0,0,56-56V80A56.06,56.06,0,0,0,176,24ZM128,176a48,48,0,1,1,48-48A48.05,48.05,0,0,1,128,176Zm60-96a12,12,0,1,1,12-12A12,12,0,0,1,188,80Zm-28,48a32,32,0,1,1-32-32A32,32,0,0,1,160,128Z"></path></svg>

            </span>
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="30" width="30"><path d="M247.51,174.39,218,58a16.08,16.08,0,0,0-13-11.88l-36.06-5.92a16.22,16.22,0,0,0-18.26,11.88l-.21.85a4,4,0,0,0,3.27,4.93,155.62,155.62,0,0,1,24.41,5.62,8.2,8.2,0,0,1,5.62,9.7,8,8,0,0,1-10.19,5.64,155.4,155.4,0,0,0-90.8-.1,8.22,8.22,0,0,1-10.28-4.81,8,8,0,0,1,5.08-10.33,156.85,156.85,0,0,1,24.72-5.72,4,4,0,0,0,3.27-4.93l-.21-.85A16.21,16.21,0,0,0,87.08,40.21L51,46.13A16.08,16.08,0,0,0,38,58L8.49,174.39a15.94,15.94,0,0,0,9.06,18.51l67,29.71a16.17,16.17,0,0,0,21.71-9.1l3.49-9.45a4,4,0,0,0-3.27-5.35,158.13,158.13,0,0,1-28.63-6.2,8.2,8.2,0,0,1-5.61-9.67,8,8,0,0,1,10.2-5.66,155.59,155.59,0,0,0,91.12,0,8,8,0,0,1,10.19,5.65,8.19,8.19,0,0,1-5.61,9.68,157.84,157.84,0,0,1-28.62,6.2,4,4,0,0,0-3.27,5.35l3.49,9.45a16.18,16.18,0,0,0,21.71,9.1l67-29.71A15.94,15.94,0,0,0,247.51,174.39ZM92,152a12,12,0,1,1,12-12A12,12,0,0,1,92,152Zm72,0a12,12,0,1,1,12-12A12,12,0,0,1,164,152Z"></path></svg>

            </span>
             <span>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="30" width="30"><path d="M232,80v40a8,8,0,0,1-8,8,103.25,103.25,0,0,1-48-11.71V156a76,76,0,0,1-152,0c0-36.9,26.91-69.52,62.6-75.88A8,8,0,0,1,96,88v42.69a8,8,0,0,1-4.57,7.23A20,20,0,1,0,120,156V24a8,8,0,0,1,8-8h40a8,8,0,0,1,8,8,48.05,48.05,0,0,0,48,48A8,8,0,0,1,232,80Z"></path></svg>

            </span>
             <span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="30" width="30"><path d="M215,219.85a8,8,0,0,1-7,4.15H160a8,8,0,0,1-6.75-3.71l-40.49-63.63L53.92,221.38a8,8,0,0,1-11.84-10.76l61.77-68L41.25,44.3A8,8,0,0,1,48,32H96a8,8,0,0,1,6.75,3.71l40.49,63.63,58.84-64.72a8,8,0,0,1,11.84,10.76l-61.77,67.95,62.6,98.38A8,8,0,0,1,215,219.85Z"></path></svg>

            </span>
        </div>
    </div>
    <div class="column w-full g-10">
<strong class="m-x-auto desc c-primary text-center row">Why {{ config('app.name') }}</strong>
<span class="row m-x-auto justify-center align-center w-full text-center">Everything designed around your success</span>
    
<div style="border:1px solid var(--primary-01);box-shadow:0 0 10px rgba(0,0,0,0.1);" class="w-full p-20 br-20 bg-white column g-10">
    <span class="c-primary">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="40" width="40"><path d="M221.87,83.16A104.1,104.1,0,1,1,195.67,49l22.67-22.68a8,8,0,0,1,11.32,11.32L167.6,99.71h0l-37.71,37.71-23.95,23.95a40,40,0,0,0,62-35.67,8,8,0,1,1,16-.9,56,56,0,0,1-95.5,42.79h0a56,56,0,0,1,73.13-84.43L184.3,60.39a87.88,87.88,0,1,0,23.13,29.67,8,8,0,0,1,14.44-6.9Z"></path></svg>

    </span>
    <strong class="desc">Buy Engagement</strong>
    <span>Real followers, members, likes -- from real accounts. Safe delivery, guaranteed</span>
</div>
<div style="border:1px solid var(--primary-01);box-shadow:0 0 10px rgba(0,0,0,0.1);" class="w-full p-20 br-20 bg-white column g-10">
    <span class="c-primary">
     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="40" width="40"><path d="M230.33,141.06a24.34,24.34,0,0,0-18.61-4.77C230.5,117.33,240,98.48,240,80c0-26.47-21.29-48-47.46-48A47.58,47.58,0,0,0,156,48.75,47.58,47.58,0,0,0,119.46,32C93.29,32,72,53.53,72,80c0,11,3.24,21.69,10.06,33a31.87,31.87,0,0,0-14.75,8.4L44.69,144H16A16,16,0,0,0,0,160v40a16,16,0,0,0,16,16H120a7.93,7.93,0,0,0,1.94-.24l64-16a6.94,6.94,0,0,0,1.19-.4L226,182.82l.44-.2a24.6,24.6,0,0,0,3.93-41.56Zm-10.9,27.15-38,16.18L119,200H56V155.31l22.63-22.62A15.86,15.86,0,0,1,89.94,128H140a12,12,0,0,1,0,24H112a8,8,0,0,0,0,16h32a8.32,8.32,0,0,0,1.79-.2l67-15.41.31-.08a8.6,8.6,0,0,1,6.3,15.9Z"></path></svg>

    </span>
    <strong class="desc">Earn Rewards</strong>
    <span>Join tasks: follow,join groups,watch etc and get paid in naira, withdraw anytime</span>
</div>
<div style="border:1px solid var(--primary-01);box-shadow:0 0 10px rgba(0,0,0,0.1);" class="w-full p-20 br-20 bg-white column g-10">
    <span class="c-primary">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="40" width="40"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm56,112H128a8,8,0,0,1-8-8V72a8,8,0,0,1,16,0v48h48a8,8,0,0,1,0,16Z"></path></svg>
    </span>
    <strong class="desc">Instant Delivery</strong>
    <span>Orders start within minutes. Yoour order grows while you focus on content.</span>
</div>
<div style="border:1px solid var(--primary-01);box-shadow:0 0 10px rgba(0,0,0,0.1);" class="w-full p-20 br-20 bg-white column g-10">
    <span class="c-primary">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="40" width="40"><path d="M213.85,125.46l-112,120a8,8,0,0,1-13.69-7l14.66-73.33L45.19,143.49a8,8,0,0,1-3-13l112-120a8,8,0,0,1,13.69,7L153.18,90.9l57.63,21.61a8,8,0,0,1,3,12.95Z"></path></svg>
  </span>
    <strong class="desc">Fast Withdrawals</strong>
    <span>Withdrawals are processed with the speed of light</span>
</div>


</div>
<div style="border:1px solid var(--primary);background:var(--primary-01)" class="w-full column align-center text-center g-20 p-20 br-20">
    <strong style="font-size:2rem;color:var(--primary-dark)">Ready to grow?</strong>
    <span>Join 150k+ users and start your journey.</span>
    <div onclick="window.location.href='{{ url('register') }}'" class="h-50 w-full br-100 bg-primary primary-text row align-center justify-center g-5">
        <span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M256,136a8,8,0,0,1-8,8H232v16a8,8,0,0,1-16,0V144H200a8,8,0,0,1,0-16h16V112a8,8,0,0,1,16,0v16h16A8,8,0,0,1,256,136ZM144,157.68a68,68,0,1,0-71.9,0c-20.65,6.76-39.23,19.39-54.17,37.17A8,8,0,0,0,24,208H192a8,8,0,0,0,6.13-13.15C183.18,177.07,164.6,164.44,144,157.68Z"></path></svg>

        </span>
        <strong class="desc">Create Free Account</strong>
    </div>

</div>
    
    
    
        </section>
@endsection