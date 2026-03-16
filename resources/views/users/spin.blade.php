<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('favicon/favicon-96x96.png?v=1.3') }}" />
<link rel="icon" type="image/svg+xml" href="{{ asset('favicon/favicon.svg?v=1.31.1') }}" />
<link rel="shortcut icon" href="{{ asset('favicon/favicon.svg?v=1.31.1') }}" />
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png?v=1.2') }}" />
<link rel="manifest" href="{{ asset('favicon/site.webmanifest?v=1.2') }}" />
<link rel="stylesheet" href="{{ asset('vitecss/fonts/fonts.css?v='.config('versions.vite_version').'') }}">
<link rel="stylesheet" href="{{ asset('vitecss/css/app.css?v='.config('versions.vite_version').'') }}">
    <title>{{ config('app.name') }} | Users | Daily Spin</title>
    <style>
        body {
            background: var(--bg);
            display: flex;
           
            min-height: 100vh;
            margin: 0;
			
            font-family: var(--font);
        }
        .roulette-container {
            text-align: center;
            padding:20px;
        }
        #canvas-container {
            margin-bottom: 20px;
        }
        canvas {
            width: 100%;
            max-width:500px;
            aspect-ratio:1;
            border-radius: 50%;
            box-shadow: 0 0 30px rgba(0,0,0,0.5);
        }
        #spinBtn {
            font-family: var(--font),'Fjalla One', sans-serif;
            font-size: 24px;
            padding: 10px 40px;
            background: linear-gradient(0deg, #B7DAEC, #06A8DA, #08689A, #023047);
            color: white;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            box-shadow: 5px 10px 10px black;
            margin-top: 20px;
        }
        #spinBtn:hover {
            transform: scale(1.05);
        }
        #result {
            font-size: 48px;
            margin-top: 20px;
            color: white;
            text-shadow: 2px 2px 4px black;
        }
        .config-note {
            color: #888;
            margin-top: 10px;
            font-size: 14px;
        }
		
		.main-parent{
  width:100%;
  background:var(--primary-dark);
  padding:20px;
  position: relative;
  color:var(--primary-text);
  

  
}
.main-parent:has(.child){
  padding-bottom:50px;
}
.main-parent .child{
  position:absolute;
 
  left:20px;
  right:20px;
  /* width:100%; */
  max-width:500px;
  background:var(--primary);
  border-radius:10px;
  padding:20px;
  border:1px solid var(--primary-light);
  transform:translateY(15px);
  margin-left:auto;
  margin-right:auto;
}
		
#result{
    display:none !important;
}
.config-note{
    display:none !important;
}
body{
    user-select:none;
}
body.disabled *{
    pointer-events: none;
}
body.spinned #spinBtn{
    display:none;
}
body #spinnedDiv{
    display:none;
}
body.spinned #spinnedDiv{
    width:fit-content;
    padding:20px;
    border:1px solid #4caf50;
    background:rgba(0,255,0,0.1);
    color:#4caf50;
    margin:auto;
    display:flex;
    flex-direction:row;
    align-items:center;
    justify-content:center;
    text-transform: uppercase;
    border-radius: 10px;


}


footer{
  background:rgba(0,0,0,0.2) !important;
  position:fixed;
  bottom:0;
  left:0;
  right:0;
  
}
footer .child{
  display:grid;
  grid-template-columns: repeat(4,1fr);
  background:var(--bg);
  backdrop-filter: blur(10px);
  padding:5px;
  gap:5px;
  border-top:1px solid rgb(0,0,0,0.1);
  color:#31363a;

}
footer .child .f-links{
  width:100%;
  border-radius:1000px;
  transition: all 0.5s ease ;
  font-weight:900;
  
}
footer .child .f-links.active{
 background:rgba(255,255,255,0.05)
  
}
    </style>
</head>
<body class="{{ $spinned > 0 ? 'spinned' : '' }}">
      <div class="main-parent space-between p-20 row align-center">
           <div class="row g-10 align-center">
            <span onclick="window.location.href='{{ url()->previous() }}'">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M228,128a12,12,0,0,1-12,12H69l51.52,51.51a12,12,0,0,1-17,17l-72-72a12,12,0,0,1,0-17l72-72a12,12,0,0,1,17,17L69,116H216A12,12,0,0,1,228,128Z"></path></svg>

            </span>
            <span>Back</span>
        </div> 
        <strong class="desc">Daily Spin</strong>
        <span></span>
        </div>
    <div class="roulette-container">
        <div id="canvas-container"></div>
        <button id="spinBtn">SPIN</button>
        <div id="spinnedDiv">You Have  Already Spinned Today, Please try again tomorrow</div>
        <div id="result">?</div>
        <div class="config-note">⚙️ Configuration set in code (see CONFIG object at top of script)</div>
    </div>



    <footer style="z-index:3000;">
      <div class="child">
        {{-- new footer link --}}
        <div  onclick="window.location.href='{{ url('users/dashboard') }}'" class="column p-10 align-center g-5">
          <span>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M240,208H224V136l2.34,2.34A8,8,0,0,0,237.66,127L139.31,28.68a16,16,0,0,0-22.62,0L18.34,127a8,8,0,0,0,11.32,11.31L32,136v72H16a8,8,0,0,0,0,16H240a8,8,0,0,0,0-16Zm-88,0H104V160a4,4,0,0,1,4-4h40a4,4,0,0,1,4,4Z"></path></svg>
          </span>
          <span>Dashboard</span>
        </div>
        {{-- new footer link --}}
        <div  onclick="window.location.href='{{ url('users/team') }}'" class="column p-10 align-center g-5">
          <span>
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M64.12,147.8a4,4,0,0,1-4,4.2H16a8,8,0,0,1-7.8-6.17,8.35,8.35,0,0,1,1.62-6.93A67.79,67.79,0,0,1,37,117.51a40,40,0,1,1,66.46-35.8,3.94,3.94,0,0,1-2.27,4.18A64.08,64.08,0,0,0,64,144C64,145.28,64,146.54,64.12,147.8Zm182-8.91A67.76,67.76,0,0,0,219,117.51a40,40,0,1,0-66.46-35.8,3.94,3.94,0,0,0,2.27,4.18A64.08,64.08,0,0,1,192,144c0,1.28,0,2.54-.12,3.8a4,4,0,0,0,4,4.2H240a8,8,0,0,0,7.8-6.17A8.33,8.33,0,0,0,246.17,138.89Zm-89,43.18a48,48,0,1,0-58.37,0A72.13,72.13,0,0,0,65.07,212,8,8,0,0,0,72,224H184a8,8,0,0,0,6.93-12A72.15,72.15,0,0,0,157.19,182.07Z"></path></svg>
       </span>
          <span>Team</span>
        </div>
         {{-- new footer link --}}
        <div onclick="window.location.href='{{ url('users/post/ads') }}'" class="column p-10 align-center g-5">
          <span>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M223.16,68.42l-16-32A8,8,0,0,0,200,32H56a8,8,0,0,0-7.16,4.42l-16,32A8.08,8.08,0,0,0,32,72V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V72A8.08,8.08,0,0,0,223.16,68.42Zm-57.5,89.24-32,32a8,8,0,0,1-11.32,0l-32-32a8,8,0,0,1,11.32-11.32L120,164.69V104a8,8,0,0,1,16,0v60.69l18.34-18.35a8,8,0,0,1,11.32,11.32ZM52.94,64l8-16H195.06l8,16Z"></path></svg>
      </span>
          <span>Post Tasks</span>
        </div>
        {{-- new footer link --}}
        <div  onclick="window.location.href='{{ url('users/settings') }}'" class="column p-10 align-center g-5">
          <span>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M230.93,220a8,8,0,0,1-6.93,4H32a8,8,0,0,1-6.92-12c15.23-26.33,38.7-45.21,66.09-54.16a72,72,0,1,1,73.66,0c27.39,8.95,50.86,27.83,66.09,54.16A8,8,0,0,1,230.93,220Z"></path></svg>
    </span>
          <span>Mine</span>
        </div>

      </div>
   
    </footer>
   
    <script src="{{ asset('vitecss/js/app.js?v='.config('versions.vite_version').'') }}"></script>


    <script>
       document.querySelector('body').style.paddingBottom=document.querySelector('footer').getBoundingClientRect().height + 'px'

        // ============================================
        // 👇 ALL CONFIGURATION IN ONE PLACE 👇
        // ============================================
        const CONFIG = {
            // Spin rows (values on the wheel)
            options: [
                '₦0', '₦32', '₦15', '₦19', '₦45', '₦21', '₦27', '₦25', '₦17', '₦34', '₦6',
                
            ],
            
            // Optional: Custom colors (if not provided, will auto-generate)
            // colors: ['green', 'red', 'black', ...], // Uncomment to use custom colors
            
            // Spin behavior
            spinDuration: 5000, // milliseconds (5000 = 5 seconds)
            spinSpeed: 18,       // Initial spin speed (higher = faster start)
            
            // Callback when spin ends
            onSpinEnd: async function(result, index){
               try{
                 document.querySelector('body').classList.add('disabled');
                let form=new FormData();
                form.append('result',result);
                form.append('_token','{{ @csrf_token() }}');
                let response=await fetch('{{ url('users/post/daily/spin/process') }}',{
                    method : 'POST',
                    body : form
                });
                if(response.ok){
                    let data=await response.json();
                    if(data.status == 'success'){
                        document.querySelector('body').classList.add('spinned');
                    }
                document.querySelector('body').classList.remove('disabled');
                }else{

                }
                console.log(`🎲 Result: ${result} at position ${index}`);
                // You can add custom logic here
               }catch(error){
                alert(error.stack)
               }
            }
        };

        // Optional: Uncomment one of these alternative configurations
        /*
        // AMERICAN ROULETTE (with double zero)
        CONFIG.options = [0, 00, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36];
        CONFIG.colors = ['green', 'green', ...Array(36).fill().map((_, i) => i % 2 === 0 ? 'red' : 'black')];
        */

        /*
        // FRUIT WHEEL
        CONFIG.options = ['🍎', '🍊', '🍇', '🍒', '🍓', '🍉', '🍋', '🍌', '🍑', '🍍'];
        CONFIG.spinDuration = 4000;
        CONFIG.spinSpeed = 20;
        */

        /*
        // NUMBER WHEEL (1-12)
        CONFIG.options = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
        CONFIG.spinDuration = 3000;
        */

        /*
        // CUSTOM COLOR WHEEL
        CONFIG.options = ['WIN', 'LOSE', 'BONUS', 'JACKPOT', 'TRY AGAIN'];
        CONFIG.colors = ['#FFD700', '#FF4444', '#44FF44', '#FF88FF', '#888888'];
        CONFIG.spinDuration = 6000;
        */
        // ============================================
        // 👆 CONFIGURATION ENDS HERE 👆
        // ============================================

        // Roulette Wheel Class
        class RouletteWheel {
            constructor(containerId, config) {
                this.container = document.getElementById(containerId);
                this.canvas = document.createElement("canvas");
                this.canvas.width = 500;
                this.canvas.height = 500;
                this.container.appendChild(this.canvas);

                // Apply configuration
                this.options = config.options;
                this.colors = config.colors || this.generateDefaultColors(this.options.length);
                this.onSpinEnd = config.onSpinEnd || null;
                this.spinDuration = config.spinDuration || 4000;
                this.spinSpeed = config.spinSpeed || 15;
                
                // Wheel state
                this.startAngle = 0;
                this.arc = Math.PI / (this.options.length / 2);
                this.spinTimeout = null;
                this.spinAngleStart = 0;
                this.spinTime = 0;
                this.spinTimeTotal = 0;
                this.ctx = null;

                // Initial draw
                this.drawRouletteWheel();
            }

            generateDefaultColors(length) {
                return Array(length).fill().map((_, index) => {
                    if (index === 0) return "blue";
                    return index % 2 === 1 ? "goldenrod" : "black";
                });
            }

            drawRouletteWheel() {
                if (this.canvas.getContext) {
                    var outsideRadius = 200;
                    var textRadius = 160;
                    var insideRadius = 80;

                    this.ctx = this.canvas.getContext("2d");
                    this.ctx.clearRect(0, 0, 500, 500);

                    this.ctx.strokeStyle = "black";
                    this.ctx.lineWidth = 2;

                    this.ctx.font = 'bold 16px Helvetica, Arial';

                    for (var i = 0; i < this.options.length; i++) {
                        var angle = this.startAngle + i * this.arc;
                        this.ctx.fillStyle = this.colors[i];

                        this.ctx.beginPath();
                        this.ctx.arc(250, 250, outsideRadius, angle, angle + this.arc, false);
                        this.ctx.arc(250, 250, insideRadius, angle + this.arc, angle, true);
                        this.ctx.stroke();
                        this.ctx.fill();

                        this.ctx.save();
                        this.ctx.shadowOffsetX = -1;
                        this.ctx.shadowOffsetY = -1;
                        this.ctx.shadowBlur = 0;
                        this.ctx.shadowColor = "rgb(220,220,220)";
                        this.ctx.fillStyle = "white";
                        this.ctx.translate(250 + Math.cos(angle + this.arc / 2) * textRadius,
                            250 + Math.sin(angle + this.arc / 2) * textRadius);
                        this.ctx.rotate(angle + this.arc / 2 + Math.PI / 2);
                        var text = this.options[i].toString();
                        this.ctx.fillText(text, -this.ctx.measureText(text).width / 2, 0);
                        this.ctx.restore();
                    }

                    // Arrow
                    this.ctx.fillStyle = "white";
                    this.ctx.beginPath();
                    this.ctx.moveTo(250 - 4, 250 - (outsideRadius + 5));
                    this.ctx.lineTo(250 + 4, 250 - (outsideRadius + 5));
                    this.ctx.lineTo(250 + 4, 250 - (outsideRadius - 5));
                    this.ctx.lineTo(250 + 9, 250 - (outsideRadius - 5));
                    this.ctx.lineTo(250 + 0, 250 - (outsideRadius - 13));
                    this.ctx.lineTo(250 - 9, 250 - (outsideRadius - 5));
                    this.ctx.lineTo(250 - 4, 250 - (outsideRadius - 5));
                    this.ctx.lineTo(250 - 4, 250 - (outsideRadius + 5));
                    this.ctx.fill();
                }
            }

            spin() {
                if (this.spinTimeout) {
                    return;
                }
                this.spinAngleStart = Math.random() * 10 + this.spinSpeed;
                this.spinTime = 0;
                this.spinTimeTotal = Math.random() * 3000 + this.spinDuration;
                this.rotateWheel();
            }

            rotateWheel = () => {
                this.spinTime += 30;
                if (this.spinTime >= this.spinTimeTotal) {
                    this.stopRotateWheel();
                    return;
                }
                var spinAngle = this.spinAngleStart - this.easeOut(this.spinTime, 0, this.spinAngleStart, this.spinTimeTotal);
                this.startAngle += (spinAngle * Math.PI / 180);
                this.drawRouletteWheel();
                this.spinTimeout = requestAnimationFrame(this.rotateWheel);
            }

            stopRotateWheel = () => {
                cancelAnimationFrame(this.spinTimeout);
                this.spinTimeout = null;
                var degrees = this.startAngle * 180 / Math.PI + 90;
                var arcd = this.arc * 180 / Math.PI;
                var index = Math.floor((360 - degrees % 360) / arcd);
                
                // Ensure index is within bounds
                index = index >= this.options.length ? 0 : index;
                
                this.ctx.save();
                this.ctx.beginPath();
                this.ctx.fillStyle = this.colors[index];
                this.ctx.arc(250, 250, 40, 0, 2 * Math.PI);
                this.ctx.fill();
                this.ctx.closePath();
                this.ctx.fillStyle = "white";
                this.ctx.font = 'bold 35px Helvetica, Arial';
                var text = this.options[index].toString();
                
                // Display result
                document.getElementById('result').innerText = text;
                document.getElementById('result').style.color = this.colors[index];
                
                if (this.onSpinEnd) {
                    this.onSpinEnd(text, index);
                }
                
                this.ctx.fillText(text, 250 - this.ctx.measureText(text).width / 2, 250 + 10);
                this.ctx.restore();
            }

            easeOut(t, b, c, d) {
                var ts = (t /= d) * t;
                var tc = ts * t;
                return b + c * (tc + -3 * ts + 3 * t);
            }
        }

        // Initialize the roulette with centralized configuration
        function init() {
            // Create roulette with the CONFIG object
            const roulette = new RouletteWheel("canvas-container", CONFIG);
            
            const spinBtn = document.getElementById("spinBtn");
            spinBtn.onclick = () => roulette.spin();
            
            // Optional: Add keyboard support (spacebar to spin)
            document.addEventListener('keydown', (e) => {
                if (e.code === 'Space' && !e.repeat) {
                    e.preventDefault();
                    roulette.spin();
                }
            });
        }

        // Start when page loads
        window.onload = init;
    </script>
</body>
</html>