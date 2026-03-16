@extends('layout.users.app')
@section('title')
    Dashboard
@endsection
@section('css')
    <style class="css">
        .quick-link{
            position:relative;
            border:1px solid var(--primary) !important
            

        }
        .quick-link .group{
            z-index:20;
            position:relative;
        }
        .quick-link::before{
            content:'';
            position:absolute;
            left:10%;
            top:10%;
            width:40%;
            height:40%;
            background:var(--primary);
            border-radius:50%;
            filter:blur(30px);
            z-index:10;
        }
         .quick-link::after{
            content:'';
            position:absolute;
            right:10%;
            bottom:10%;
            width:20%;
            height:20%;
            background:var(--primary);
            border-radius:50%;
            filter:blur(20px);
            z-index:10;
        }
        .populate.shown .form{
            animation:opaq-in 0.5s ease forwards;
            
        }
        .affiliate-balance-div{
            background:rgb(108,92,230);
            position:relative;
            color:white;
        }
          .activities-balance-div{
            background:#4caf50;
            position:relative;
            color:white;
        }
        .show-balance-text,.hide-balance-text{
            color:inherit !important;
        }

        .all-time-balance-div{
            background:rgb(108,92,230);
            position:relative;
            color:white;
        }
          .activities-balance-div .balance-name{
           
            color:white;
            opacity:0.8;
        }
         .all-time-balance-div .balance-name{
           
            color:whitesmoke;
        }
        
      .rep-img{
            position:absolute;
            bottom:0;
            right:0;
        }
        .rep-img{
            height:150px;
            pointer-events:none;
            z-index:200;
        }
        .balance-divs{
            overflow: hidden;
            /* clip-path:inset(0 round 20px); */
        }
        .balance-divs.affiliate-balance-div::after{
            content:'';
            position:absolute;
            right:10%;
            bottom:10%;
            background:white;
            filter:blur(50px);
            --webkit-filter:blur(50px);
            width:40%;
            height:40%;
            z-index:100;
        }
        .balance-divs.activities-balance-div::after{
            content:'';
            position:absolute;
            right:10%;
            bottom:10%;
            background:white;
            filter:blur(50px);
            --webkit-filter:blur(50px);
            width:40%;
            height:40%;
            z-index:100;
        }
        .balance-divs.all-time-balance-div::after{
            content:'';
            position:absolute;
            right:10%;
            bottom:10%;
            background:white;
            filter:blur(50px);
            --webkit-filter:blur(50px);
            width:40%;
            height:40%;
            z-index:100;
        }
        .balance-name{
            color:white;
            opacity:0.8;
        }
        .balance-divs .content{
            position:relative;
            z-index:300;
        }
        .balance-display.balance-hidden .balance{
            display:none !important;
        }
         .balance-display.balance-hidden .star{
            display:flex !important;
        }
        .balance-display.balance-shown .balance{
            display:flex !important;
        }
         .balance-display.balance-shown .star{
            display:none !important;
        }
        .balance-display.balance-hidden .hide-balance-text{
            display:none !important;
        }
        .balance-display.balance-hidden .show-balance-text{
            display:flex !important;
        }
        .balance-display.balance-shown .hide-balance-text{
            display:flex !important;
        }
        .balance-display.balance-shown .show-balance-text{
            display:none !important;
        }
        .wallets{
            position:absolute;
            top:100%;
            height:20px;
        }
        .wallets.activities{
            background:gold;
            border-radius:0 0 10px 10px;
             left:5%;
            right:5%;
            z-index:200;
        }
        .wallets.affiliate{
            background:var(--primary);
            border-radius:0 0 10px 10px;
             left:5%;
            right:5%;
            z-index:200;
        }
        .wallets.all_time{
            background:rgb(108,92,230);
             border-radius:0 0 10px 10px;
              left:8%;
            right:8%;
             height:30px;
             z-index:100;
        }
        .quick-link{
            position:relative;
            overflow:hidden;
            border:1px solid var(--bg-lighter);
            text-align: center;
        }
        .quick-link .content{
            position:relative;
            z-index:20;
            text-align: center;

        }  
       
      .quick-link::before{
        content:'';
        position:absolute;
        top:0;
        right:0;
        left:calc(100% - 50%);
        background:var(--primary-light);
        filter:blur(20px);
        -webkit-filter:blur(20px);
        height:50%;
        width:50%;
        z-index:10
      }
        .chat-btn{
            width:100%;
            height:fit-content;
            background:linear-gradient(to top right,greenyellow,#4caf50,green);
            padding:10px;
            border:none;
            user-select:none;
            color:white;
            font-family:var(--font);
            display:flex;
            flex-direction:row;
            align-items:center;
            justify-content:center;
            clip-path:inset(0 round 5px);
            border-radius:5px;
            gap:5px;
            cursor:pointer;
        }
         
        @keyframes opaq-in{
            0%{
                opacity:0;
                transform:scale(0.9)
            }
            100%{
                opacity:1;
                transform:scale(1);
            }
        }
        .promo-img{
            position:fixed;
            right:10px;
            height:70px;
            animation:breathe 2.5s ease infinite;

            
        }
        @keyframes breathe{
            0%{
                transform: scale(1)
            }
            50%{
                transform: scale(0.9)
            }
        }
        .ref-link{
            border:1px solid var(--primary) !important;
            border-radius:5px !important;
        }
        .parent{
            position:fixed;
            top:0;
            left:0;
            right:0;
            bottom:0;
            background:rgba(0,0,0,0.4);
            padding:20px;
            z-index:4000;
            display:flex;
            flex-direction:column;
            align-items:center;
            justify-content: center;
            gap:10px;


        }
        .parent .child{
            background:white;
            padding:20px;
            width:100%;
            border-radius:20px;
            border:1px solid var(--primary-07);
            display:flex;
            flex-direction:column;
            align-items:center;
            justify-content: center;
            gap:10px;
            text-align:center;
            max-width:500px;
            user-select: none;
            animation:animate 0.5s linear forwards;
        }
        @keyframes animate{
            0%{
                transform: scale(0.8)
            }
            100%{
                transform: scale(1)
            }
        }
    </style>
@endsection
@section('main')
<div onclick="this.remove()" class="parent">
    <div onclick="event.stopPropagation()" class="child">
<div class="w-70 perfect-square bg-primary primary-text column align-center justify-center circle">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="50" width="50"><path d="M216,72H180.92c.39-.33.79-.65,1.17-1A29.53,29.53,0,0,0,192,49.57,32.62,32.62,0,0,0,158.44,16,29.53,29.53,0,0,0,137,25.91a54.94,54.94,0,0,0-9,14.48,54.94,54.94,0,0,0-9-14.48A29.53,29.53,0,0,0,97.56,16,32.62,32.62,0,0,0,64,49.57,29.53,29.53,0,0,0,73.91,71c.38.33.78.65,1.17,1H40A16,16,0,0,0,24,88v32a16,16,0,0,0,16,16v64a16,16,0,0,0,16,16h60a4,4,0,0,0,4-4V120H40V88h80v32h16V88h80v32H136v92a4,4,0,0,0,4,4h60a16,16,0,0,0,16-16V136a16,16,0,0,0,16-16V88A16,16,0,0,0,216,72ZM84.51,59a13.69,13.69,0,0,1-4.5-10A16.62,16.62,0,0,1,96.59,32h.49a13.69,13.69,0,0,1,10,4.5c8.39,9.48,11.35,25.2,12.39,34.92C109.71,70.39,94,67.43,84.51,59Zm87,0c-9.49,8.4-25.24,11.36-35,12.4C137.7,60.89,141,45.5,149,36.51a13.69,13.69,0,0,1,10-4.5h.49A16.62,16.62,0,0,1,176,49.08,13.69,13.69,0,0,1,171.49,59Z"></path></svg>

</div>
<strong class="desc">Welcome Back</strong>
<span class="opacity-07">Click on the buttons below to join our social communities for more giveaways and updates.</span>
    <div onclick="window.open('{{ $social->whatsapp }}')" class="w-full h-40 br-10 bg-green c-white row align-center justify-center g-10">
     <span>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M152.58,145.23l23,11.48A24,24,0,0,1,152,176a72.08,72.08,0,0,1-72-72A24,24,0,0,1,99.29,80.46l11.48,23L101,118a8,8,0,0,0-.73,7.51,56.47,56.47,0,0,0,30.15,30.15A8,8,0,0,0,138,155ZM232,128A104,104,0,0,1,79.12,219.82L45.07,231.17a16,16,0,0,1-20.24-20.24l11.35-34.05A104,104,0,1,1,232,128Zm-40,24a8,8,0,0,0-4.42-7.16l-32-16a8,8,0,0,0-8,.5l-14.69,9.8a40.55,40.55,0,0,1-16-16l9.8-14.69a8,8,0,0,0,.5-8l-16-32A8,8,0,0,0,104,64a40,40,0,0,0-40,40,88.1,88.1,0,0,0,88,88A40,40,0,0,0,192,152Z"></path></svg>

     </span>
        <span>Whatsapp Channel</span>
    </div>
      <div onclick="window.open('{{ $social->telegram }}')" class="w-full h-40 br-10 bg-blue c-white row align-center justify-center g-10">
     <span>
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M228.88,26.19a9,9,0,0,0-9.16-1.57L17.06,103.93a14.22,14.22,0,0,0,2.43,27.21L72,141.45V200a15.92,15.92,0,0,0,10,14.83,15.91,15.91,0,0,0,17.51-3.73l25.32-26.26L165,220a15.88,15.88,0,0,0,10.51,4,16.3,16.3,0,0,0,5-.79,15.85,15.85,0,0,0,10.67-11.63L231.77,35A9,9,0,0,0,228.88,26.19ZM175.53,208,92.85,135.5l119-85.29Z"></path></svg>

     </span>
        <span>Telegram Channel</span>
    </div>
</div>
</div>
   <section class="column w-full">
    <div class="w-full main-parent">
        <div class="row align-center g-5">
            <div style="background:rgba(255,255,255,0.1)" class="h-50 bold perfect-square flex no-shrink br-10 row align-center justify-center">
                {{ strtoupper(substr(Auth::guard('users')->user()->username,0,2)) }}
            </div>
             <strong style="font-size:1.5rem;">Welcome Back, <br> {{ Auth::guard('users')->user()->username }}</strong>
       
        </div>
       
        <div class="child">
            <div class="w-full column g-10 align-center">
                <div style="border-bottom:1px dashed rgba(255,255,255,0.4)" class="column g-5 p-10 w-full activities-balance">
                    <span>Earning Balance</span>
                    <strong style="font-size:1.4rem;">&#8358;{{ number_format(Auth::guard('users')->user()->activities_balance,2) }}</strong>
                </div>
                 <div style="border-bottom:1px dashed rgba(255,255,255,0.4)" class="column p-10 g-5 w-full activities-balance">
                    <span>Referral Balance</span>
                    <strong style="font-size:1.4rem;">&#8358;{{ number_format(Auth::guard('users')->user()->affiliate_balance,2) }}</strong>
                </div>
                <div class="column p-10 g-5 w-full activities-balance">
                    <span>Deposit Balance</span>
                    <strong style="font-size:1.4rem;">&#8358;{{ number_format(Auth::guard('users')->user()->deposit_balance,2) }}</strong>
                </div>
            </div>
        </div>
    </div>
    <section class="p-20 column g-10">
        <div style="border:1px solid var(--primary-03);box-shadow:0 10px 10px rgba(0,0,0,0.1)" class="w-full column g-10 g-10 p-10 br-10 bg-white">
        
            <div class="grid grid-4 place-center g-10 space-between w-full align-center">
            {{-- new nav --}}
           <div onclick="window.location.href='{{ url('users/recharge') }}'" class="column g-5 align-center">
             <div style="background:linear-gradient(to bottom right,var(--primary),var(--primary-light))" class="h-50 br-10 bg-primary perfect-square primary-text no-shrink row align-center justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M216,64H56a8,8,0,0,1,0-16H192a8,8,0,0,0,0-16H56A24,24,0,0,0,32,56V184a24,24,0,0,0,24,24H216a16,16,0,0,0,16-16V80A16,16,0,0,0,216,64Zm-36,80a12,12,0,1,1,12-12A12,12,0,0,1,180,144Z"></path></svg>

            </div>
            <span class="c-primary">Recharge</span>
           </div>
            {{-- new nav --}}
           <div onclick="window.location.href='{{ url('users/withdraw') }}'" class="column g-5 align-center">
             <div style="background:linear-gradient(to bottom right,var(--primary),var(--primary-light))" class="h-50 br-10 bg-primary perfect-square primary-text no-shrink row align-center justify-center">
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M224,48H32A16,16,0,0,0,16,64V192a16,16,0,0,0,16,16H224a16,16,0,0,0,16-16V64A16,16,0,0,0,224,48ZM136,176H120a8,8,0,0,1,0-16h16a8,8,0,0,1,0,16Zm64,0H168a8,8,0,0,1,0-16h32a8,8,0,0,1,0,16ZM32,88V64H224V88Z"></path></svg>

            </div>
            <span class="c-primary">Withdraw</span>
           </div>
            {{-- new nav --}}
           <div onclick="window.location.href='{{ url('users/invite') }}'" class="column g-5 align-center">
             <div style="background:linear-gradient(to bottom right,var(--primary),var(--primary-light))" class="h-50 br-10 bg-primary perfect-square primary-text no-shrink row align-center justify-center">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M237.66,117.66l-80,80A8,8,0,0,1,144,192V152.23c-57.1,3.24-96.25,40.27-107.24,52h0a12,12,0,0,1-20.68-9.58c3.71-32.26,21.38-63.29,49.76-87.37,23.57-20,52.22-32.69,78.16-34.91V32a8,8,0,0,1,13.66-5.66l80,80A8,8,0,0,1,237.66,117.66Z"></path></svg>

            </div>
            <span class="c-primary">Invite</span>
           </div>
            {{-- new nav --}}
           <div onclick="window.location.href='{{ url('users/team') }}'" class="column g-5 align-center">
             <div style="background:linear-gradient(to bottom right,var(--primary),var(--primary-light))" class="h-50 br-10 bg-primary perfect-square primary-text no-shrink row align-center justify-center">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M64.12,147.8a4,4,0,0,1-4,4.2H16a8,8,0,0,1-7.8-6.17,8.35,8.35,0,0,1,1.62-6.93A67.79,67.79,0,0,1,37,117.51a40,40,0,1,1,66.46-35.8,3.94,3.94,0,0,1-2.27,4.18A64.08,64.08,0,0,0,64,144C64,145.28,64,146.54,64.12,147.8Zm182-8.91A67.76,67.76,0,0,0,219,117.51a40,40,0,1,0-66.46-35.8,3.94,3.94,0,0,0,2.27,4.18A64.08,64.08,0,0,1,192,144c0,1.28,0,2.54-.12,3.8a4,4,0,0,0,4,4.2H240a8,8,0,0,0,7.8-6.17A8.33,8.33,0,0,0,246.17,138.89Zm-89,43.18a48,48,0,1,0-58.37,0A72.13,72.13,0,0,0,65.07,212,8,8,0,0,0,72,224H184a8,8,0,0,0,6.93-12A72.15,72.15,0,0,0,157.19,182.07Z"></path></svg>

            </div>
            <span class="c-primary">Team</span>
           </div>
        </div>
        <div class="grid grid-4 place-center g-10 space-between w-full align-center">
            {{-- new nav --}}
           <div onclick="window.location.href='{{ url('users/transactions') }}'" class="column g-5 align-center">
             <div style="background:linear-gradient(to bottom right,var(--primary),var(--primary-light))" class="h-50 br-10 bg-primary perfect-square primary-text no-shrink row align-center justify-center">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M208,96a12,12,0,1,1,12,12A12,12,0,0,1,208,96ZM196,72a12,12,0,1,0-12-12A12,12,0,0,0,196,72Zm28.66,56a8,8,0,0,0-8.63,7.31A88.12,88.12,0,1,1,120.66,40,8,8,0,0,0,119.34,24,104.12,104.12,0,1,0,232,136.66,8,8,0,0,0,224.66,128ZM128,56a72,72,0,1,1-72,72A72.08,72.08,0,0,1,128,56Zm-8,72a8,8,0,0,0,8,8h48a8,8,0,0,0,0-16H136V80a8,8,0,0,0-16,0Zm40-80a12,12,0,1,0-12-12A12,12,0,0,0,160,48Z"></path></svg>
      
            </div>
            <span class="c-primary">Transactions</span>
           </div>
            {{-- new nav --}}
           <div onclick="window.location.href='{{ url('users/post/ads') }}'" class="column g-5 align-center">
             <div style="background:linear-gradient(to bottom right,var(--primary),var(--primary-light))" class="h-50 br-10 bg-primary perfect-square primary-text no-shrink row align-center justify-center">
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM152,160H136v16a8,8,0,0,1-16,0V160H104a8,8,0,0,1,0-16h16V128a8,8,0,0,1,16,0v16h16a8,8,0,0,1,0,16ZM48,80V48H72v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80Z"></path></svg>

            </div>
            <span class="c-primary">Post Ads</span>
           </div>
             {{-- new nav --}}
           <div onclick="window.location.href='{{ url('users/spin') }}'" class="column g-5 align-center">
             <div style="background:linear-gradient(to bottom right,var(--primary),var(--primary-light))" class="h-50 br-10 bg-primary perfect-square primary-text no-shrink row align-center justify-center">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm39.11,25.19C170.24,83.71,155,99.44,135,113.61c-2.25-24.48-8.44-49.8-38.37-67.82a87.89,87.89,0,0,1,70.5,3.4ZM40.18,133.54c28.34-20,49.57-14.68,71.87-4.39C92,143.34,73.19,161.36,72.52,196.26A87.92,87.92,0,0,1,40.18,133.54Zm136.5,67.73c-31.45-14.55-37.47-35.58-39.71-60,12.72,5.86,26.31,10.75,41.3,10.75,11.33,0,23.46-2.8,36.63-10.08A88.2,88.2,0,0,1,176.68,201.27Z"></path></svg>
      
            </div>
            <span class="c-primary">Daily Spin</span>
           </div>
            {{-- new nav --}}
           <div onclick="window.location.href='{{ url('users/tasks') }}'" class="column g-5 align-center">
             <div style="background:linear-gradient(to bottom right,var(--primary),var(--primary-light))" class="h-50 br-10 bg-primary perfect-square primary-text no-shrink row align-center justify-center">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M225.86,102.82c-3.77-3.94-7.67-8-9.14-11.57-1.36-3.27-1.44-8.69-1.52-13.94-.15-9.76-.31-20.82-8-28.51s-18.75-7.85-28.51-8c-5.25-.08-10.67-.16-13.94-1.52-3.56-1.47-7.63-5.37-11.57-9.14C146.28,23.51,138.44,16,128,16s-18.27,7.51-25.18,14.14c-3.94,3.77-8,7.67-11.57,9.14C88,40.64,82.56,40.72,77.31,40.8c-9.76.15-20.82.31-28.51,8S41,67.55,40.8,77.31c-.08,5.25-.16,10.67-1.52,13.94-1.47,3.56-5.37,7.63-9.14,11.57C23.51,109.72,16,117.56,16,128s7.51,18.27,14.14,25.18c3.77,3.94,7.67,8,9.14,11.57,1.36,3.27,1.44,8.69,1.52,13.94.15,9.76.31,20.82,8,28.51s18.75,7.85,28.51,8c5.25.08,10.67.16,13.94,1.52,3.56,1.47,7.63,5.37,11.57,9.14C109.72,232.49,117.56,240,128,240s18.27-7.51,25.18-14.14c3.94-3.77,8-7.67,11.57-9.14,3.27-1.36,8.69-1.44,13.94-1.52,9.76-.15,20.82-.31,28.51-8s7.85-18.75,8-28.51c.08-5.25.16-10.67,1.52-13.94,1.47-3.56,5.37-7.63,9.14-11.57C232.49,146.28,240,138.44,240,128S232.49,109.73,225.86,102.82Zm-52.2,6.84-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z"></path></svg>
    
            </div>
            <span class="c-primary">Tasks</span>
           </div>
          
        </div>
    </div>

    {{-- action btns --}}
  <div class="grid p-10 pc-grid-2 g-10 w-full">
      <div style="border:1px solid var(--primary-03);box-shadow:0 10px 10px rgba(0,0,0,0.1)" class="w-full overflow-hidden bg-white br-10 column g-10">
        <div style="background:var(--primary-009)" class="w-full p-20 row g-10">
           <span style="color:var(--primary-dark)"> 
            <svg width="40" height="40" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22ZM12.75 9C12.75 8.58579 12.4142 8.25 12 8.25C11.5858 8.25 11.25 8.58579 11.25 9L11.25 11.25H9C8.58579 11.25 8.25 11.5858 8.25 12C8.25 12.4142 8.58579 12.75 9 12.75H11.25V15C11.25 15.4142 11.5858 15.75 12 15.75C12.4142 15.75 12.75 15.4142 12.75 15L12.75 12.75H15C15.4142 12.75 15.75 12.4142 15.75 12C15.75 11.5858 15.4142 11.25 15 11.25H12.75V9Z" fill="CurrentColor"></path>
</svg>


           </span>
           <div class="column g-5">
            <strong class="desc" style="color:var(--primary-dark)">Post Ads</strong>
            <span>High-Conversion adverts.</span>
           </div>
        </div>
       <div class="column w-full p-20">
        <div onclick="window.location.href='{{ url('users/post/ads') }}'" class="w-full bold font-1 h-50 p-10 br-10 bg-primary align-center justify-center row no-select primary-text">
        Post Task Now
       </div>
       </div>
    </div>
     <div style="border:1px solid var(--primary-03);box-shadow:0 10px 10px rgba(0,0,0,0.1)" class="w-full overflow-hidden bg-white br-10 column g-10">
        <div style="background:var(--primary-009)" class="w-full p-20 row g-10">
           <span style="color:var(--primary-dark)"> 
           <svg width="40" height="40" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM16.0303 8.96967C16.3232 9.26256 16.3232 9.73744 16.0303 10.0303L11.0303 15.0303C10.7374 15.3232 10.2626 15.3232 9.96967 15.0303L7.96967 13.0303C7.67678 12.7374 7.67678 12.2626 7.96967 11.9697C8.26256 11.6768 8.73744 11.6768 9.03033 11.9697L10.5 13.4393L12.7348 11.2045L14.9697 8.96967C15.2626 8.67678 15.7374 8.67678 16.0303 8.96967Z" fill="CurrentColor"></path>
</svg>



           </span>
           <div class="column g-5">
            <strong class="desc" style="color:var(--primary-dark)">Daily Tasks</strong>
            <span>Daily and simple earning opportunities.</span>
           </div>
        </div>
       <div class="column w-full p-20">
        <div onclick="window.location.href='{{ url('users/tasks') }}'" class="w-full bold font-1 h-50 p-10 br-10 bg-primary align-center justify-center row no-select primary-text">
       View Tasks
       </div>
       </div>
    </div>
  </div>
    </section>
   
   </section>
@endsection
@section('js')
   
@endsection