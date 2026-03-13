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
            --gray-soft: #f0ebe0;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

     
        /* terms content */
        .terms-header {
            margin: 2rem 0 2.5rem;
        }

        .terms-header h1 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #1f1c14;
            margin-bottom: 0.5rem;
        }

        .terms-header p {
            color: #6a6456;
            font-size: 1rem;
        }

        .last-updated {
            display: inline-block;
            background: var(--gold-light);
            padding: 0.3rem 1.2rem;
            border-radius: 60px;
            font-size: 0.85rem;
            color: #5e4a1e;
            margin-top: 0.5rem;
        }

        .terms-section {
            background: white;
            border-radius: 32px;
            padding: 2rem;
            margin-bottom: 2rem;
            border: 1px solid rgba(218,165,32,0.15);
            box-shadow: 0 8px 20px -8px rgba(0,0,0,0.03);
        }

        .terms-section h2 {
            font-size: 1.6rem;
            font-weight: 600;
            color: #2a241a;
            margin-bottom: 1.2rem;
            display: flex;
            align-items: center;
            gap: 0.8rem;
            border-bottom: 2px solid var(--gold-light);
            padding-bottom: 0.8rem;
        }

        .terms-section h2 i {
            color: var(--gold);
            font-size: 1.6rem;
        }

        .terms-section h3 {
            font-size: 1.2rem;
            font-weight: 600;
            margin: 1.5rem 0 0.8rem;
            color: #3d372b;
        }

        .terms-section p {
            margin-bottom: 1rem;
            color: #4a453b;
        }

        .terms-section ul, .terms-section ol {
            margin: 1rem 0 1.5rem 1.8rem;
            color: #4a453b;
        }

        .terms-section li {
            margin-bottom: 0.5rem;
        }

        .terms-section li::marker {
            color: var(--gold-deep);
        }

        .highlight-box {
            background: var(--cream);
            border-left: 4px solid var(--gold);
            padding: 1.5rem;
            border-radius: 16px;
            margin: 1.5rem 0;
        }

        .divider {
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--gold-soft), transparent);
            margin: 2rem 0;
        }

        /* mobile */
        @media (max-width: 600px) {
            .terms-header h1 {
                font-size: 2rem;
            }
            .terms-section {
                padding: 1.5rem;
            }
          
        }
    </style>
@endsection
@section('main')
     <div class="container">
       

        <!-- terms header -->
        <div class="terms-header">
            <h1>Terms of Service</h1>
            <p>Please read these terms carefully before using FastAds.</p>
            <span class="last-updated"><i class="far fa-calendar-alt"></i> Last updated: March 15, 2026</span>
        </div>

        <!-- terms sections -->
        <div class="terms-section">
            <h2><i class="fas fa-file-contract"></i> 1. Agreement to Terms</h2>
            <p>By accessing or using FastAds ("the Platform"), you agree to be bound by these Terms of Service and our Privacy Policy. If you do not agree, you may not use our services.</p>
            <p>FastAds provides a marketplace where advertisers can purchase engagement services (such as group members, followers, likes) and where users can complete tasks to earn credits. We reserve the right to update or modify these terms at any time without prior notice.</p>
        </div>

        <div class="terms-section">
            <h2><i class="fas fa-user-check"></i> 2. Eligibility</h2>
            <p>You must be at least 18 years old to use FastAds. By using our service, you represent and warrant that you have the right, authority, and capacity to enter into this agreement.</p>
            <p>If you are using the Platform on behalf of a business or entity, you represent that you are authorized to bind that entity to these terms.</p>
        </div>

        <div class="terms-section">
            <h2><i class="fas fa-exchange-alt"></i> 3. Services Overview</h2>
            <p><strong>For Advertisers:</strong> You can purchase packages that deliver real engagement (members, followers, likes) to your social media accounts or groups. Delivery times are estimates and may vary. FastAds does not guarantee specific results or conversion rates.</p>
            <p><strong>For Earners:</strong> You can complete available tasks (joining groups, following accounts, etc.) and earn credits. Credits can be redeemed for payouts via available methods (PayPal, crypto, gift cards) subject to minimum withdrawal thresholds.</p>
            <div class="highlight-box">
                <i class="fas fa-info-circle" style="color: var(--gold); margin-right: 0.5rem;"></i>
                <strong>Important:</strong> FastAds acts only as an intermediary. We do not guarantee the authenticity of third-party accounts or the long-term retention of engagement delivered.
            </div>
        </div>

        <div class="terms-section">
            <h2><i class="fas fa-credit-card"></i> 4. Payments & Refunds</h2>
            <h3>Advertiser payments</h3>
            <p>All purchases are final unless the order fails to deliver within the maximum delivery timeframe (30 days). Refunds or credits may be issued at our sole discretion in cases of proven non-delivery.</p>
            <h3>Earner payouts</h3>
            <p>Credits earned are non-transferable. Payout requests are processed within 5-7 business days. FastAds reserves the right to withhold payouts if fraudulent activity is suspected.</p>
            <ul>
               
                <li>We are not responsible for third-party payment delays</li>
            </ul>
        </div>

        <div class="terms-section">
            <h2><i class="fas fa-ban"></i> 5. Prohibited Activities</h2>
            <p>You agree not to:</p>
            <ul>
                <li>Use bots, automation, or fake accounts to complete tasks or inflate stats</li>
                <li>Attempt to manipulate the platform or engage in fraudulent behavior</li>
                <li>Post inappropriate, illegal, or harmful content through tasks</li>
                <li>Create multiple accounts to abuse sign-up bonuses or promotions</li>
                <li>Resell services obtained from FastAds without written permission</li>
            </ul>
            <p>Violation may result in immediate account suspension and forfeiture of all credits/balances.</p>
        </div>

        <div class="terms-section">
            <h2><i class="fas fa-shield-alt"></i> 6. Account Responsibility</h2>
            <p>You are responsible for maintaining the security of your account and password. FastAds cannot and will not be liable for any loss or damage from your failure to comply with this security obligation.</p>
            <p>You are responsible for all content posted and activity that occurs under your account.</p>
        </div>

        <div class="terms-section">
            <h2><i class="fas fa-gavel"></i> 7. Limitation of Liability</h2>
            <p>To the maximum extent permitted by law, FastAds shall not be liable for any indirect, incidental, special, consequential, or punitive damages, or any loss of profits or revenues, whether incurred directly or indirectly, or any loss of data, use, goodwill, or other intangible losses, resulting from:</p>
            <ul>
                <li>Your use or inability to use the service</li>
                <li>Any conduct or content of any third party on the platform</li>
                <li>Unauthorized access, use, or alteration of your transmissions or content</li>
            </ul>
            <p>Our total liability shall not exceed the amount you paid to us (if any) in the past 12 months.</p>
        </div>

        <div class="terms-section">
            <h2><i class="fas fa-clock"></i> 8. Termination</h2>
            <p>We may terminate or suspend your account immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms. Upon termination, your right to use the service will cease immediately.</p>
            <p>All provisions of the Terms which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity, and limitations of liability.</p>
        </div>

        <div class="terms-section">
            <h2><i class="fas fa-globe"></i> 9. Governing Law</h2>
            <p>These Terms shall be governed and construed in accordance with the laws of [Your Country/State], without regard to its conflict of law provisions. Any disputes arising under or in connection with these terms shall be subject to the exclusive jurisdiction of the courts located there.</p>
        </div>

     

      
    </div>
@endsection