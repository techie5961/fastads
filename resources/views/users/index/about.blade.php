@extends('layout.users.index')
@section('title')
    About Us
@endsection
@section('css')
  <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'montserrat','Inter', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }

       

        :root {
            --gold: #daa520;
            --gold-light: #f8e3b0;
            --gold-soft: #efd18b;
            --gold-deep: #b8860b;
            --cream: #fffaf1;
            --charcoal: #2e2b23;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

    
        /* page title */
        .page-title {
            margin: 2rem 0 2rem;
            text-align: center;
        }

        .page-title h1 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #1f1c14;
        }

        .page-title h1 span {
            color: var(--gold);
        }

        .gold-line {
            width: 60px;
            height: 3px;
            background: var(--gold);
            margin: 0.8rem auto 0;
            border-radius: 3px;
        }

        /* cards - simple and clean */
        .about-card {
            background: white;
            border-radius: 32px;
            padding: 2rem;
            margin-bottom: 2rem;
            border: 1px solid rgba(218,165,32,0.15);
            box-shadow: 0 5px 15px rgba(0,0,0,0.02);
        }

        .about-card h2 {
            font-size: 1.8rem;
            font-weight: 600;
            color: #2a241a;
            margin-bottom: 1.2rem;
            display: flex;
            align-items: center;
            gap: 0.8rem;
        }

        .about-card h2 i {
            color: var(--gold);
            font-size: 1.8rem;
        }

        .about-card p {
            color: #4a453b;
            margin-bottom: 1rem;
            font-size: 1.05rem;
        }

        /* stats row - simple */
        .stats-simple {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 1.5rem;
            margin: 2rem 0;
            text-align: center;
        }

        .stat-item {
            flex: 1;
            min-width: 120px;
        }

        .stat-number {
            font-size: 2.2rem;
            font-weight: 700;
            color: var(--gold-deep);
        }

        .stat-label {
            color: #6a6456;
            font-size: 0.95rem;
        }

        /* simple values list */
        .values-simple {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            margin: 1.5rem 0;
        }

        .value-row {
            display: flex;
            align-items: center;
            gap: 1rem;
            background: #faf7f0;
            padding: 1rem 1.5rem;
            border-radius: 50px;
        }

        .value-row i {
            color: var(--gold);
            font-size: 1.3rem;
            width: 28px;
        }

        .value-row strong {
            color: #2a241a;
            min-width: 100px;
        }

        .value-row span {
            color: #5d584b;
        }

        /* team - super simple */
        .team-simple {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            justify-content: center;
            margin: 2rem 0 1rem;
        }

        .team-person {
            text-align: center;
            min-width: 140px;
        }

        .team-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: var(--gold-light);
            margin: 0 auto 0.8rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: var(--gold-deep);
            border: 2px solid var(--gold);
        }

        .team-person h4 {
            font-size: 1.2rem;
            margin-bottom: 0.2rem;
        }

        .team-person .role {
            color: var(--gold-deep);
            font-size: 0.9rem;
        }

        /* naira highlight */
        .naira-badge {
            background: var(--gold-light);
            color: #5e4a1e;
            padding: 0.3rem 1rem;
            border-radius: 60px;
            display: inline-block;
            font-weight: 600;
            margin: 0.5rem 0;
        }

       

        /* mobile */
        @media (max-width: 600px) {
            .page-title h1 {
                font-size: 2rem;
            }
          
            .value-row {
                flex-direction: column;
                align-items: flex-start;
                border-radius: 24px;
                padding: 1.2rem;
            }
            .value-row i {
                margin-bottom: 0.2rem;
            }
            .team-simple {
                gap: 1.5rem;
            }
        }
    </style>
@endsection
@section('main')
     <div class="container">
       

        <!-- title -->
        <div class="page-title">
            <h1>About <span>FastAds</span></h1>
            <div class="gold-line"></div>
        </div>

        <!-- story card -->
        <div class="about-card">
            <h2><span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M231.69,93.81,217.35,43.6A16.07,16.07,0,0,0,202,32H54A16.07,16.07,0,0,0,38.65,43.6L24.31,93.81A7.94,7.94,0,0,0,24,96v16a40,40,0,0,0,16,32v72a8,8,0,0,0,8,8H208a8,8,0,0,0,8-8V144a40,40,0,0,0,16-32V96A7.94,7.94,0,0,0,231.69,93.81ZM88,112a24,24,0,0,1-35.12,21.26,7.88,7.88,0,0,0-1.82-1.06A24,24,0,0,1,40,112v-8H88Zm64,0a24,24,0,0,1-48,0v-8h48Zm64,0a24,24,0,0,1-11.07,20.2,8.08,8.08,0,0,0-1.8,1.05A24,24,0,0,1,168,112v-8h48Z"></path></svg>
            </span></i> Our Story</h2>
            <p>FastAds operates as a social media advert platform serving for only Nigerians currently.</p>
            <p>We connect advertisers who need real followers, members, and likes with earners who want to make extra income. Every task on FastAds is completed by a real person.</p>
            <div class="naira-badge"><i class="fas fa-coins"></i> We pay in Naira (₦) — withdraw to bank</div>
        </div>

        <!-- simple stats -->
        <div class="stats-simple">
            <div class="stat-item">
                <div class="stat-number">150k+</div>
                <div class="stat-label">members</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">8.2M</div>
                <div class="stat-label">tasks done</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">₦85M+</div>
                <div class="stat-label">paid to earners</div>
            </div>
        </div>

        <!-- mission card -->
        <div class="about-card">
            <h2><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M235.24,84.38l-28.06,23.68,8.56,35.39a13.34,13.34,0,0,1-5.09,13.91,13.54,13.54,0,0,1-15,.69L164,139l-31.65,19.06a13.51,13.51,0,0,1-15-.69,13.32,13.32,0,0,1-5.1-13.91l8.56-35.39L92.76,84.38a13.39,13.39,0,0,1,7.66-23.58l36.94-2.92,14.21-33.66a13.51,13.51,0,0,1,24.86,0l14.21,33.66,36.94,2.92a13.39,13.39,0,0,1,7.66,23.58ZM88.11,111.89a8,8,0,0,0-11.32,0L18.34,170.34a8,8,0,0,0,11.32,11.32l58.45-58.45A8,8,0,0,0,88.11,111.89Zm-.5,61.19L34.34,226.34a8,8,0,0,0,11.32,11.32l53.26-53.27a8,8,0,0,0-11.31-11.31Zm73-1-54.29,54.28a8,8,0,0,0,11.32,11.32l54.28-54.28a8,8,0,0,0-11.31-11.32Z"></path></svg></span> Our Mission</h2>
            <p>To make social media growth simple, affordable, and real for everyone in Nigeria. We help small businesses, content creators, and groups get the engagement they deserve — while putting money back into the hands of everyday Nigerians.</p>
        </div>

        <!-- values card -->
        <div class="about-card">
            <h2>
                <span>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M232,120v8A104,104,0,0,1,127.63,232c-54-.19-98-42.06-103.12-94.78a4,4,0,0,1,5.56-4A35.94,35.94,0,0,0,72,122.59a35.92,35.92,0,0,0,53.94,2.33,40.36,40.36,0,0,0,12.87,13A47.94,47.94,0,0,0,120,176a8,8,0,0,0,8.67,8,8.21,8.21,0,0,0,7.33-8.26A32,32,0,0,1,168,144a8,8,0,0,0,8-8.53,8.18,8.18,0,0,0-8.25-7.47H160a24,24,0,0,1-24-24V88h64A32,32,0,0,1,232,120ZM44.73,120C55.57,119.6,64,110.37,64,99.52v-23C64,65.63,55.57,56.4,44.73,56A20,20,0,0,0,24,76v24A20,20,0,0,0,44.73,120Zm56,0c10.84-.39,19.27-9.62,19.27-20.47v-47c0-10.85-8.43-20.08-19.27-20.47A20,20,0,0,0,80,52v48A20,20,0,0,0,100.73,120ZM176,52a20,20,0,0,0-20.73-20C144.43,32.4,136,41.63,136,52.48V72h36a4,4,0,0,0,4-4Z"></path></svg>

            </span> What We Stand For</h2>
            <div class="values-simple">
                <div class="value-row">
                    <span>
                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z"></path></svg>

                    </span>
                    <strong>Real people</strong>
                    <span>No bots, no fake accounts — ever.</span>
                </div>
                <div class="value-row">
                   <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M230.33,141.06a24.34,24.34,0,0,0-18.61-4.77C230.5,117.33,240,98.48,240,80c0-26.47-21.29-48-47.46-48A47.58,47.58,0,0,0,156,48.75,47.58,47.58,0,0,0,119.46,32C93.29,32,72,53.53,72,80c0,11,3.24,21.69,10.06,33a31.87,31.87,0,0,0-14.75,8.4L44.69,144H16A16,16,0,0,0,0,160v40a16,16,0,0,0,16,16H120a7.93,7.93,0,0,0,1.94-.24l64-16a6.94,6.94,0,0,0,1.19-.4L226,182.82l.44-.2a24.6,24.6,0,0,0,3.93-41.56Zm-10.9,27.15-38,16.18L119,200H56V155.31l22.63-22.62A15.86,15.86,0,0,1,89.94,128H140a12,12,0,0,1,0,24H112a8,8,0,0,0,0,16h32a8.32,8.32,0,0,0,1.79-.2l67-15.41.31-.08a8.6,8.6,0,0,1,6.3,15.9Z"></path></svg>

                   </span>
                    <strong>Fair pay</strong>
                    <span>Earners get paid in ₦, fast and reliable.</span>
                </div>
                <div class="value-row">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M208,40H48A16,16,0,0,0,32,56v56c0,52.72,25.52,84.67,46.93,102.19,23.06,18.86,46,25.26,47,25.53a8,8,0,0,0,4.2,0c1-.27,23.91-6.67,47-25.53C198.48,196.67,224,164.72,224,112V56A16,16,0,0,0,208,40Zm-34.32,69.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z"></path></svg>

                    </span>
                    <strong>Trust</strong>
                    <span>Clear terms, refunds if orders don't deliver.</span>
                </div>
                <div class="value-row">
                   <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M144.27,45.93a8,8,0,0,1,9.8-5.66,86.22,86.22,0,0,1,61.66,61.66,8,8,0,0,1-5.66,9.8A8.23,8.23,0,0,1,208,112a8,8,0,0,1-7.73-5.93,70.35,70.35,0,0,0-50.33-50.34A8,8,0,0,1,144.27,45.93Zm-2.33,41.8c13.79,3.68,22.65,12.55,26.33,26.34A8,8,0,0,0,176,120a8.23,8.23,0,0,0,2.07-.27,8,8,0,0,0,5.66-9.8c-5.12-19.16-18.5-32.54-37.66-37.66a8,8,0,1,0-4.13,15.46Zm72.43,78.73-47.11-21.11-.13-.06a16,16,0,0,0-15.17,1.4,8.12,8.12,0,0,0-.75.56L126.87,168c-15.42-7.49-31.34-23.29-38.83-38.51l20.78-24.71c.2-.25.39-.5.57-.77a16,16,0,0,0,1.32-15.06l0-.12L89.54,41.64a16,16,0,0,0-16.62-9.52A56.26,56.26,0,0,0,24,88c0,79.4,64.6,144,144,144a56.26,56.26,0,0,0,55.88-48.92A16,16,0,0,0,214.37,166.46Z"></path></svg>

                   </span>
                    <strong>Local support</strong>
                    <span>We're based in Nigeria and here to help.</span>
                </div>
            </div>
        </div>

        

        <!-- why choose us (simple bullet) -->
        <div class="about-card">
            <h2><i class="fas fa-circle-check"></i> Why FastAds?</h2>
            <ul style="list-style: none; margin-top: 0.5rem;">
                <li style="margin-bottom: 1rem;"><i class="fas fa-angle-right" style="color: var(--gold); margin-right: 0.8rem;"></i> <strong>Instant delivery:</strong> Orders start in minutes</li>
                <li style="margin-bottom: 1rem;"><i class="fas fa-angle-right" style="color: var(--gold); margin-right: 0.8rem;"></i> <strong>Withdraw in Naira:</strong> Bank transfer or PayPal</li>
                <li style="margin-bottom: 1rem;"><i class="fas fa-angle-right" style="color: var(--gold); margin-right: 0.8rem;"></i> <strong>24/7 support:</strong> Real people, quick responses</li>
                <li style="margin-bottom: 1rem;"><i class="fas fa-angle-right" style="color: var(--gold); margin-right: 0.8rem;"></i> <strong>Safe & secure:</strong> Your data and money are protected</li>
            </ul>
        </div>

      

       
    </div>
@endsection