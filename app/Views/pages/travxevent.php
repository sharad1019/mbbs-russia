<style>
    .travx-fresh {
        max-width: 1600px;
        margin: 0 auto;
        background: #FFFFFF;
        position: relative;
        z-index: 1;
    }

    /* animated grain + soft gradient overlay (no external images) */
    .pattern-soft {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -2;
        pointer-events: none;
        background: radial-gradient(circle at 30% 40%, rgba(227, 38, 130, 0.02) 0%, rgba(255, 255, 255, 0) 70%);
    }

    .pattern-soft::before {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        background-image: radial-gradient(circle at 1px 1px, #E32682 0.8px, transparent 0.8px);
        background-size: 36px 36px;
        opacity: 0.02;
    }

    /* modern hero — asymmetric split with glassmorphism */
    .hero-split {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        padding: 100px 64px 80px;
        gap: 50px;
        position: relative;
        background: radial-gradient(ellipse at 80% 20%, #FFF9FC, #FFFFFF);
        border-bottom: none;
    }

    .hero-left {
        flex: 1.2;
        z-index: 2;
    }

    .hero-badge-fresh {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: rgba(227, 38, 130, 0.08);
        backdrop-filter: blur(4px);
        padding: 8px 24px;
        border-radius: 100px;
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 1.2px;
        color: #E32682;
        border: 1px solid rgba(227, 38, 130, 0.25);
        margin-bottom: 32px;
        font-family: 'Inter', sans-serif;
    }

    .hero-left h1 {
        font-family: 'Playfair Display', serif;
        font-size: 5rem;
        font-weight: 800;
        letter-spacing: -0.03em;
        background: linear-gradient(135deg, #192f3f, #2C4C64, #A5246C);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        line-height: 1.1;
        margin-bottom: 28px;
    }

    .hero-left .hero-desc {
        font-size: 1.1rem;
        color: #2C4D64;
        max-width: 90%;
        line-height: 1.6;
        margin-bottom: 38px;
        font-weight: 450;
    }

    .hero-stats-mini {
        display: flex;
        gap: 48px;
        flex-wrap: wrap;
    }

    .stat-mini {
        text-align: left;
        border-left: 2px solid #E3268230;
        padding-left: 18px;
    }

    .stat-mini .num {
        font-size: 2.2rem;
        font-weight: 800;
        color: #E32682;
        font-family: 'Playfair Display', serif;
    }

    .hero-right {
        flex: 0.85;
        background: rgba(255, 248, 252, 0.85);
        backdrop-filter: blur(12px);
        border-radius: 64px;
        padding: 50px 40px;
        border: 1px solid rgba(227, 38, 130, 0.25);
        box-shadow: 0 20px 35px -12px rgba(0, 0, 0, 0.05);
        text-align: center;
        transition: all 0.3s;
    }

    .hero-right i {
        font-size: 3.8rem;
        color: #E32682;
        margin-bottom: 18px;
        background: #FFFFFF;
        padding: 18px;
        border-radius: 80px;
        box-shadow: 0 12px 20px -10px rgba(227, 38, 130, 0.2);
    }

    .hero-right h3 {
        font-size: 1.9rem;
        font-weight: 800;
        margin-bottom: 12px;
        color: #182C3B;
    }

    .hero-right p {
        font-size: 0.9rem;
        color: #5F7C93;
        font-weight: 500;
    }

    /* container */
    .container-fresh {
        max-width: 1280px;
        margin: 0 auto;
        padding: 0 40px;
    }

    /* two pillars — bold & creative asymmetrical border */
    .pillars {
        display: flex;
        flex-wrap: wrap;
        gap: 48px;
        margin: 80px 0 80px;
    }

    .pillar-card {
        flex: 1;
        background: #FFFFFF;
        border-radius: 48px;
        padding: 48px 40px;
        transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
        border: 1px solid #F0DFE9;
        position: relative;
        z-index: 2;
        box-shadow: 0 20px 30px -15px rgba(0, 0, 0, 0.02);
        backdrop-filter: blur(2px);
    }

    .pillar-card::after {
        content: '';
        position: absolute;
        inset: 0;
        border-radius: 48px;
        padding: 2px;
        background: linear-gradient(125deg, #E3268220, #FFFFFF80);
        mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
        -webkit-mask-composite: xor;
        mask-composite: exclude;
        pointer-events: none;
    }

    .pillar-card:hover {
        transform: translateY(-12px);
        border-color: #E3268240;
        box-shadow: 0 40px 50px -22px rgba(227, 38, 130, 0.25);
    }

    .pillar-icon {
        width: 84px;
        height: 84px;
        background: linear-gradient(145deg, #FFF0F6, #FFE9F2);
        border-radius: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 34px;
    }

    .pillar-icon i {
        font-size: 2.6rem;
        color: #E32682;
    }

    .pillar-card h2 {
        font-size: 2.1rem;
        font-weight: 800;
        margin-bottom: 20px;
        color: #132B3B;
        letter-spacing: -0.3px;
    }

    .pillar-card p {
        color: #4C6A7F;
        line-height: 1.55;
        margin-bottom: 32px;
    }

    .pillar-tag {
        display: inline-block;
        background: #F8EFF4;
        padding: 8px 22px;
        border-radius: 60px;
        font-size: 0.7rem;
        font-weight: 700;
        color: #E32682;
        letter-spacing: 0.3px;
    }

    /* unified content block - designer layout */
    .unified-content-block {
        background: #FFFBFD;
        border-radius: 64px;
        padding: 64px 64px;
        margin: 48px 0 70px;
        border: 1px solid #F3E2EC;
        box-shadow: 0 20px 40px -12px rgba(0, 0, 0, 0.02);
        transition: all 0.2s;
    }

    .section-eyebrow {
        font-size: 0.7rem;
        text-transform: uppercase;
        letter-spacing: 4px;
        color: #E32682;
        font-weight: 700;
        margin-bottom: 18px;
        display: inline-block;
        background: #FFF0F6;
        padding: 5px 16px;
        border-radius: 100px;
    }

    .unified-content-block h3 {
        font-size: 2.4rem;
        font-weight: 800;
        margin-bottom: 32px;
        color: #11212E;
        border-left: 6px solid #E32682;
        padding-left: 28px;
        font-family: 'Playfair Display', serif;
    }

    .text-flow p {
        font-size: 1rem;
        line-height: 1.7;
        color: #2A4053;
        margin-bottom: 28px;
        font-weight: 450;
    }

    /* service-deep with underlines */
    .service-deep {
        margin: 52px 0 44px;
    }

    .service-deep-title {
        display: flex;
        align-items: center;
        gap: 16px;
        margin-bottom: 28px;
        flex-wrap: wrap;
    }

    .service-deep-title i {
        font-size: 2.2rem;
        color: #E32682;
        background: #FFF0F6;
        padding: 16px;
        border-radius: 30px;
        transition: all 0.2s;
    }

    .service-deep-title h4 {
        font-size: 1.9rem;
        font-weight: 800;
        color: #E32682;
        letter-spacing: -0.3px;
    }

    /* why choose card redesigned with gradient */
    .why-choose-card {
        background: linear-gradient(125deg, #FFF5FA, #FFF8FB);
        border-radius: 40px;
        padding: 32px 36px;
        margin-top: 36px;
        border: 1px solid #FADFEC;
    }

    .why-choose-card p:first-of-type {
        font-weight: 700;
        color: #E32682;
        font-size: 1.2rem;
        margin-bottom: 20px;
        letter-spacing: -0.2px;
    }

    .check-grid {
        display: flex;
        flex-wrap: wrap;
        gap: 16px 32px;
        margin-top: 10px;
    }

    .check-grid span {
        flex: 1 1 240px;
        font-size: 0.9rem;
        font-weight: 500;
        color: #1F3F53;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .check-grid i {
        color: #E32682;
        font-size: 1rem;
    }

    /* feature-grid modern */
    .feature-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        gap: 32px;
        margin: 70px 0 60px;
    }

    .feature-item {
        background: #FFFFFF;
        border-radius: 40px;
        padding: 34px 24px;
        text-align: center;
        border: 1px solid #F1E3EC;
        transition: 0.25s ease;
        box-shadow: 0 5px 12px rgba(0, 0, 0, 0.01);
    }

    .feature-item:hover {
        border-color: #E32682;
        transform: scale(1.02);
        background: #FFFEFE;
    }

    .feature-item i {
        font-size: 2.5rem;
        color: #E32682;
        margin-bottom: 22px;
        background: #FEF2F8;
        padding: 14px;
        border-radius: 28px;
    }

    .feature-item h5 {
        font-size: 1.25rem;
        font-weight: 700;
        margin-bottom: 12px;
        color: #122D3F;
    }

    /* quote-block reimagined: modern sculptural */
    .quote-block {
        background: #11212E;
        border-radius: 70px;
        padding: 72px 56px;
        margin: 56px 0 80px;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .quote-block::before {
        content: "“";
        font-family: 'Playfair Display', serif;
        font-size: 16rem;
        position: absolute;
        bottom: -60px;
        right: 20px;
        color: #E3268215;
        pointer-events: none;
        line-height: 1;
    }

    .quote-block i.fa-quote-left {
        font-size: 3rem;
        color: #E3268260;
        position: absolute;
        top: 40px;
        left: 50px;
        opacity: 0.7;
    }

    .quote-block p {
        font-size: 1.45rem;
        font-weight: 500;
        font-style: normal;
        color: #F5F2F0;
        max-width: 820px;
        margin: 0 auto 28px;
        line-height: 1.45;
        font-family: 'Playfair Display', serif;
        letter-spacing: -0.2px;
    }

    .quote-author {
        color: #FFB3D2;
        font-weight: 600;
        letter-spacing: 1px;
        font-size: 0.9rem;
    }

    /* contact panel - fresh & minimal */
    .contact-panel-fresh {
        background: #FFFFFF;
        border-radius: 56px;
        padding: 56px 48px;
        margin: 30px 0 70px;
        text-align: center;
        border: 1px solid #F3E2EC;
        box-shadow: 0 25px 40px -20px rgba(0, 0, 0, 0.05);
    }

    .contact-panel-fresh h4 {
        font-size: 2rem;
        font-weight: 800;
        margin-bottom: 16px;
        color: #11212E;
    }

    .contact-links {
        font-size: 1.1rem;
        display: flex;
        justify-content: center;
        gap: 32px;
        flex-wrap: wrap;
        margin: 24px 0 16px;
    }

    .contact-links a {
        text-decoration: none;
        color: #E32682;
        font-weight: 600;
        transition: 0.2s;
        border-bottom: 2px dotted #FFD9EA;
    }

    .contact-links a:hover {
        color: #B81B6C;
    }

    .footer-fresh {
        border-top: 2px solid #F7E4EE;
        padding: 56px 0 48px;
        text-align: center;
        color: #7F9AB0;
        font-size: 0.8rem;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 20px;
    }

    @media (max-width: 820px) {
        .hero-split {
            padding: 60px 28px;
            flex-direction: column;
        }

        .hero-left h1 {
            font-size: 3.3rem;
        }

        .hero-left .hero-desc {
            max-width: 100%;
        }

        .container-fresh {
            padding: 0 24px;
        }

        .unified-content-block {
            padding: 36px 24px;
        }

        .quote-block p {
            font-size: 1.1rem;
        }

        .pillars {
            gap: 28px;
        }

        .footer-fresh {
            flex-direction: column;
            text-align: center;
        }
    }
</style>
<br>
<br>
<br>
<div class="travx-fresh">
    <div class="pattern-soft"></div>

    <!-- Hero split — creative & asymmetrical -->
    <div class="hero-split">
        <div class="hero-left">
            <div class="hero-badge-fresh"><i class="fas fa-compass"></i> BESPOKE TOUR ARCHITECTS</div>
            <h1>TravXevent</h1>
            <div class="hero-desc">We design cinematic journeys — from cosmopolitan capitals to India’s sacred
                lands. Every detail elevated, every moment intentional.</div>
            <div class="hero-stats-mini">
                <div class="stat-mini"><span class="num">45+</span> <span
                        style="font-size:0.8rem; font-weight:500;">Countries</span></div>
                <div class="stat-mini"><span class="num">28</span> <span
                        style="font-size:0.8rem; font-weight:500;">States</span></div>
                <div class="stat-mini"><span class="num">100%</span> <span
                        style="font-size:0.8rem; font-weight:500;">Tailor-made</span></div>
            </div>
        </div>
        <div class="hero-right">
            <i class="fas fa-map-signs"></i>
            <h3>Travel reimagined</h3>
            <p>Personalized · Premium · Hassle‑free</p>
            <div style="margin-top: 20px;"><i class="fas fa-star-of-life" style="font-size: 1rem; color:#E32682;"></i>
                White‑glove service</div>
        </div>
    </div>

    <div class="container-fresh">
        <!-- two pillars international & domestic - premium boldness -->
        <div class="pillars">
            <div class="pillar-card">
                <div class="pillar-icon"><i class="fas fa-globe-asia"></i></div>
                <h2>International Tours</h2>
                <p>Global escapes curated with cultural authenticity, boutique stays & local connoisseurs. From the
                    Swiss Alps to tropical Thailand, we unlock the world.</p>
                <span class="pillar-tag"><i class="fas fa-passport"></i> 40+ destinations</span>
            </div>
            <div class="pillar-card">
                <div class="pillar-icon"><i class="fas fa-map-marked-alt"></i></div>
                <h2>Domestic Tours</h2>
                <p>India through a new lens — royal palaces, lush backwaters, Himalayan silence. Designed for souls
                    seeking both luxury and roots.</p>
                <span class="pillar-tag"><i class="fas fa-train"></i> Bharat darshan experts</span>
            </div>
        </div>

        <!-- unified content block — rich narrative, creative depth -->
        <div class="unified-content-block">
            <div class="section-eyebrow">PROFESSIONAL TRAVEL SOLUTIONS</div>
            <h3># TravXevent — Creating Memorable Journeys Across the Globe</h3>

            <div class="text-flow">
                <p>TravXevent is more than a travel agency — we are architects of transformative journeys. For the
                    modern explorer, the discerning family, and the corporate trailblazer, we merge precision
                    logistics with creative destination storytelling. Every itinerary blends comfort, discovery, and
                    seamlessness.</p>
                <p>From custom holiday design to on-ground orchestration, accommodation curation, private transport,
                    and 24/7 assistance — we take care of every fragment. Whether it’s an international honeymoon, a
                    group expedition across Rajasthan, or a corporate incentive in Dubai, TravXevent delivers beyond
                    expectations.</p>
            </div>

            <!-- International Tours Section with extra flair -->
            <div class="service-deep">
                <div class="service-deep-title">
                    <i class="fas fa-globe"></i>
                    <h4>International Tours</h4>
                </div>
                <p>TravXevent curates international escapes that go beyond postcards. Our global portfolio includes
                    handpicked experiences in Europe, Southeast Asia, the Middle East, Africa, and the Americas. We
                    believe in immersive discovery — truffle hunting in Tuscany, sunrise at Angkor Wat, or a luxury
                    safari in South Africa. With visa assistance, flight coordination, and local experts, we turn
                    dreams into seamless realities.</p>
                <p>We offer complete destination management: accommodation in 5-star heritage properties or cosy
                    boutique hotels, curated sightseeing, private guides, culinary journeys, and worry-free
                    transfers. Our international tours reflect your rhythm — be it adventure, wellness, romance, or
                    cultural deep-dives.</p>
                <p>Corporate incentive travel? Let us design an international retreat that motivates and rewards —
                    all handled with premium professionalism.</p>
            </div>

            <!-- Domestic Tours Section - elevated -->
            <div class="service-deep">
                <div class="service-deep-title">
                    <i class="fas fa-map-marked-alt"></i>
                    <h4>Domestic Tours · Incredible India</h4>
                </div>
                <p>India's soul is vast — from the snow-capped Himalayas to tropical shores of Andaman. TravXevent's
                    domestic tours reveal the country’s magic through responsible, immersive and comfort-first
                    journeys. Explore Udaipur’s palaces, Kerala’s houseboats, Ladakh’s rugged beauty, or the vibrant
                    Northeast's tea gardens. Our itineraries are designed for discovery without compromise.</p>
                <p>We coordinate every element: premium trains, private chauffeurs, eco-friendly resorts, village
                    walks, and culinary masterclasses. Pilgrimage trips, heritage walks, wildlife safaris, or beach
                    holidays — we create bespoke memories for families, solo travelers, and large groups. With local
                    knowledge and pan-India partnerships, your domestic sojourn will be effortless and
                    unforgettable.</p>
                <p>For schools, colleges, and corporate teams, we orchestrate group travel with safety, efficiency,
                    and enriching programming.</p>
            </div>

            <!-- why choose us modernised grid style -->
            <div class="why-choose-card">
                <p><i class="fas fa-check-double"></i> Why choose TravXevent?</p>
                <div class="check-grid">
                    <span><i class="fas fa-check-circle"></i> Custom Domestic & International Packages</span>
                    <span><i class="fas fa-check-circle"></i> End-to-End Travel Management</span>
                    <span><i class="fas fa-check-circle"></i> Global & Local Trusted Partners</span>
                    <span><i class="fas fa-check-circle"></i> 24/7 Concierge Support</span>
                    <span><i class="fas fa-check-circle"></i> Flexible for Individuals & Groups</span>
                    <span><i class="fas fa-check-circle"></i> Transparent Pricing – No Hidden Fees</span>
                    <span><i class="fas fa-check-circle"></i> Premium Transport + Accommodation</span>
                    <span><i class="fas fa-check-circle"></i> Authentic Experiential Design</span>
                </div>
            </div>
        </div>

        <!-- extra feature grid creative + unique icons -->
        <div class="feature-grid">
            <div class="feature-item">
                <i class="fas fa-calendar-alt"></i>
                <h5>Tailor-made planning</h5>
                <p>Personal itineraries, crafted around your travel DNA</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-shield-virus"></i>
                <h5>Safety & peace of mind</h5>
                <p>Global travel insurance & emergency assistance</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-hand-sparkles"></i>
                <h5>Value & transparency</h5>
                <p>No hidden fees, competitive pricing, luxury on budget</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-umbrella-beach"></i>
                <h5>Curated experiences</h5>
                <p>Local encounters, hidden gems & unforgettable tastes</p>
            </div>
        </div>

        <!-- testimonial elevated -->
        <div class="quote-block">
            <i class="fas fa-quote-left"></i>
            <p>TravXevent redesigned our perception of travel. From the backwaters of Kerala to the streets of Paris
                — flawless planning, authentic touches, genuine care. A partner you can trust.</p>
            <div class="quote-author">— Meera & Ankit Sharma, New Delhi</div>
        </div>

        <!-- contact panel extra creative -->
        <div class="contact-panel-fresh">
            <h4>Begin your journey today ✦</h4>
            <p style="color:#2F5A76; max-width:600px; margin:0 auto;">Let’s design your next adventure — whether
                it's a grand international voyage or an intimate Indian escape.</p>
            <div class="contact-links">
                <a href="#"><i class="fas fa-envelope"></i> hello@travxevent.com</a>
                <a href="#"><i class="fas fa-phone-alt"></i> +91 98765 43210</a>
                <a href="#"><i class="fab fa-whatsapp"></i> WhatsApp enquiry</a>
            </div>
            <div style="margin-top: 30px;">
                <span
                    style="background:#E32682; padding:12px 32px; border-radius:60px; color:white; font-weight:600; display:inline-block; font-size:0.8rem;">Free
                    consultation →</span>
            </div>
        </div>
    </div>
</div>