<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Inter', sans-serif;
        background-color: #ffffff;
        color: #1e1e2f;
        scroll-behavior: smooth;
        line-height: 1.4;
    }

    .container {
        max-width: 1280px;
        margin: 0 auto;
        padding: 0 32px;
    }

    /* header & navigation */
    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 24px 0;
        flex-wrap: wrap;
        gap: 20px;
    }

    .logo h1 {
        font-size: 2rem;
        font-weight: 800;
        letter-spacing: -0.02em;
        background: linear-gradient(135deg, #C33764 0%, #B3204A 100%);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        display: inline-block;
    }

    .logo span {
        font-weight: 500;
        font-size: 0.9rem;
        color: #5a5a72;
        display: block;
        letter-spacing: 0.5px;
    }

    .nav-links {
        display: flex;
        gap: 32px;
        list-style: none;
    }

    .nav-links a {
        text-decoration: none;
        font-weight: 500;
        color: #2d2d3a;
        transition: color 0.2s ease;
        font-size: 0.95rem;
    }

    .nav-links a:hover {
        color: #C33764;
    }

    .btn-outline {
        background: transparent;
        border: 1.5px solid #C33764;
        padding: 10px 24px;
        border-radius: 40px;
        font-weight: 600;
        color: #C33764;
        transition: all 0.25s;
        cursor: pointer;
        font-size: 0.9rem;
    }

    .btn-outline:hover {
        background: #C33764;
        color: white;
    }

    /* hero section */
    .hero {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        padding: 60px 0 40px;
        gap: 48px;
    }

    .hero-content {
        flex: 1.2;
    }

    .hero-badge {
        background: #fdeff3;
        display: inline-block;
        padding: 6px 14px;
        border-radius: 40px;
        font-size: 0.8rem;
        font-weight: 600;
        color: #C33764;
        margin-bottom: 20px;
    }

    .hero-content h1 {
        font-size: 3.5rem;
        font-weight: 800;
        line-height: 1.2;
        letter-spacing: -0.02em;
        margin-bottom: 20px;
        color: #111;
    }

    .hero-content p {
        font-size: 1.1rem;
        color: #4a4a5a;
        line-height: 1.5;
        margin-bottom: 32px;
        max-width: 90%;
    }

    .hero-stats {
        display: flex;
        gap: 32px;
        margin-top: 24px;
    }

    .stat-item h3 {
        font-size: 1.8rem;
        font-weight: 800;
        color: #C33764;
    }

    .stat-item p {
        font-size: 0.8rem;
        font-weight: 500;
        color: #6c6c7e;
        margin: 0;
    }

    .hero-image {
        flex: 1;
        background: radial-gradient(circle at 30% 20%, rgba(195, 55, 100, 0.05) 0%, rgba(255, 255, 255, 0) 70%);
        border-radius: 40px;
        text-align: center;
    }

    .hero-image i {
        font-size: 12rem;
        color: #C3376422;
        transition: 0.2s;
    }

    /* services grid section */
    .section-title {
        text-align: center;
        margin-bottom: 56px;
    }

    .section-title h2 {
        font-size: 2.5rem;
        font-weight: 700;
        letter-spacing: -0.01em;
        margin-bottom: 12px;
    }

    .section-title p {
        color: #5f5f75;
        max-width: 620px;
        margin: 0 auto;
    }

    .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 32px;
        margin-bottom: 80px;
    }

    .service-card {
        background: #ffffff;
        border-radius: 28px;
        padding: 32px 24px;
        transition: all 0.3s cubic-bezier(0.2, 0, 0, 1);
        box-shadow: 0 12px 28px -8px rgba(0, 0, 0, 0.05), 0 0 0 1px rgba(0, 0, 0, 0.02);
        border: 1px solid #f0f0f0;
    }

    .service-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 28px 38px -16px rgba(195, 55, 100, 0.18), 0 0 0 1px #f9e2ec;
        border-color: #ffdfe8;
    }

    .service-icon {
        background: #fef2f6;
        width: 64px;
        height: 64px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 20px;
        margin-bottom: 28px;
    }

    .service-icon i {
        font-size: 2rem;
        color: #C33764;
    }

    .service-card h3 {
        font-size: 1.6rem;
        font-weight: 700;
        margin-bottom: 12px;
    }

    .service-card p {
        color: #5c5c72;
        line-height: 1.5;
        font-size: 0.95rem;
    }

    /* dual column section for artist / celeb */
    .prestige-section {
        background: #fbf9fe;
        border-radius: 48px;
        padding: 64px 48px;
        margin: 60px 0;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.02);
    }

    .flex-dual {
        display: flex;
        flex-wrap: wrap;
        gap: 48px;
        align-items: center;
    }

    .dual-text {
        flex: 1;
    }

    .dual-text h3 {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .dual-text p {
        color: #4c4c62;
        margin-bottom: 24px;
        line-height: 1.5;
    }

    .feature-list {
        list-style: none;
        margin-top: 20px;
    }

    .feature-list li {
        margin-bottom: 14px;
        display: flex;
        align-items: center;
        gap: 12px;
        font-weight: 500;
    }

    .feature-list i {
        color: #C33764;
        font-size: 1.2rem;
    }

    .dual-image {
        flex: 1;
        background: #f7eef3;
        border-radius: 32px;
        padding: 40px 20px;
        text-align: center;
    }

    .dual-image i {
        font-size: 7rem;
        color: #C3376430;
    }

    /* testimonials / extra polish */
    .insight-tag {
        text-align: center;
        margin: 40px 0 20px;
    }

    .insight-tag span {
        background: #f4f4f9;
        padding: 5px 14px;
        border-radius: 40px;
        font-size: 0.8rem;
        font-weight: 600;
        color: #3f3f55;
    }

    /* CTA section */
    .cta-section {
        background: linear-gradient(105deg, #1e1e2f 0%, #2a2a3c 100%);
        border-radius: 48px;
        padding: 72px 48px;
        margin: 60px 0 80px;
        text-align: center;
        color: white;
    }

    .cta-section h2 {
        font-size: 2.4rem;
        font-weight: 700;
        margin-bottom: 16px;
    }

    .cta-section p {
        font-size: 1rem;
        max-width: 560px;
        margin: 0 auto 32px;
        opacity: 0.85;
    }

    .btn-primary {
        background: #ffffff;
        border: none;
        padding: 14px 38px;
        border-radius: 60px;
        font-weight: 700;
        font-size: 1rem;
        color: #1e1e2f;
        cursor: pointer;
        transition: transform 0.2s, box-shadow 0.2s;
        box-shadow: 0 6px 14px rgba(0, 0, 0, 0.1);
    }

    .btn-primary:hover {
        transform: scale(1.02);
        background: #fef2f6;
        box-shadow: 0 12px 22px rgba(0, 0, 0, 0.15);
    }

    /* footer */
    footer {
        border-top: 1px solid #ececf0;
        padding: 48px 0 32px;
        margin-top: 20px;
    }

    .footer-grid {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 40px;
        margin-bottom: 40px;
    }

    .footer-col p {
        color: #626277;
        max-width: 260px;
        margin-top: 12px;
        font-size: 0.85rem;
    }

    .footer-col h4 {
        margin-bottom: 18px;
        font-weight: 700;
    }

    .footer-col ul {
        list-style: none;
    }

    .footer-col li {
        margin-bottom: 12px;
    }

    .footer-col a {
        text-decoration: none;
        color: #4b4b62;
        transition: color 0.2s;
    }

    .footer-col a:hover {
        color: #C33764;
    }

    .social-icons i {
        font-size: 1.2rem;
        margin-right: 18px;
        color: #6c6c80;
        transition: color 0.2s;
    }

    .social-icons i:hover {
        color: #C33764;
    }

    .copyright {
        text-align: center;
        padding-top: 24px;
        border-top: 1px solid #ececf0;
        color: #85859b;
        font-size: 0.8rem;
    }

    @media (max-width: 768px) {
        .container {
            padding: 0 24px;
        }

        .hero-content h1 {
            font-size: 2.4rem;
        }

        .hero-content p {
            max-width: 100%;
        }

        .navbar {
            flex-direction: column;
            align-items: flex-start;
        }

        .nav-links {
            flex-wrap: wrap;
            gap: 18px;
        }

        .section-title h2 {
            font-size: 2rem;
        }

        .prestige-section {
            padding: 40px 24px;
        }

        .cta-section {
            padding: 48px 24px;
        }
    }

    .kleido-services-section {
        font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, Helvetica, sans-serif;
        background-color: #ffffff;
        color: #1e1e2f;
        max-width: 1280px;
        margin: 0 auto;
        padding: 60px 32px 80px 32px;
    }

    /* Intro / header area */
    .services-intro {
        text-align: center;
        max-width: 900px;
        margin: 0 auto 56px auto;
    }

    .services-badge {
        display: inline-block;
        background: #fdeff3;
        padding: 6px 16px;
        border-radius: 40px;
        font-size: 0.8rem;
        font-weight: 600;
        color: #C33764;
        letter-spacing: 0.3px;
        margin-bottom: 20px;
    }

    .services-intro h2 {
        font-size: 2.8rem;
        font-weight: 800;
        letter-spacing: -0.02em;
        background: linear-gradient(135deg, #1e1e2f 0%, #2d2d44 100%);
        background-clip: text;
        -webkit-background-clip: text;
        color: transparent;
        margin-bottom: 20px;
        line-height: 1.2;
    }

    .services-intro .lead-text {
        font-size: 1.08rem;
        line-height: 1.55;
        color: #4a4a5e;
        margin-bottom: 24px;
    }

    /* main description block (first paragraph block) */
    .description-core {
        background: #FCF8FA;
        border-radius: 32px;
        padding: 40px 44px;
        margin-bottom: 64px;
        border: 1px solid #f3e6ec;
        box-shadow: 0 6px 14px rgba(0, 0, 0, 0.02);
    }

    .description-core p {
        font-size: 1rem;
        line-height: 1.65;
        color: #2d2d3a;
        margin-bottom: 20px;
    }

    .description-core p:last-child {
        margin-bottom: 0;
    }

    /* Service card grid (for each service type) */
    .services-grid-detailed {
        display: flex;
        flex-direction: column;
        gap: 48px;
        margin-top: 24px;
    }

    .service-block {
        background: #ffffff;
        border-radius: 32px;
        padding: 32px 36px;
        transition: all 0.25s ease;
        border: 1px solid #efefef;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.02);
    }

    .service-block:hover {
        border-color: #ffe0ea;
        box-shadow: 0 20px 30px -16px rgba(195, 55, 100, 0.08);
        transform: translateY(-2px);
    }

    .service-header {
        display: flex;
        align-items: center;
        gap: 14px;
        margin-bottom: 20px;
        flex-wrap: wrap;
    }

    .service-icon {
        background: #fef2f6;
        width: 52px;
        height: 52px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 20px;
    }

    .service-icon i {
        font-size: 1.7rem;
        color: #C33764;
    }

    .service-header h3 {
        font-size: 1.8rem;
        font-weight: 700;
        letter-spacing: -0.01em;
        color: #1f1f30;
        margin: 0;
    }

    .service-block p {
        font-size: 0.98rem;
        line-height: 1.6;
        color: #4e4e68;
        margin-bottom: 0;
    }

    /* why choose kleido (final callout) */
    .why-kleido {
        margin-top: 68px;
        background: linear-gradient(115deg, #fef9fc 0%, #ffffff 100%);
        border-radius: 32px;
        padding: 44px 44px;
        border: 1px solid #f1e2ea;
        text-align: center;
    }

    .why-kleido h3 {
        font-size: 2rem;
        font-weight: 700;
        color: #1e1e2f;
        margin-bottom: 20px;
    }

    .why-kleido p {
        max-width: 820px;
        margin: 0 auto;
        color: #4a4a62;
        font-size: 1rem;
        line-height: 1.6;
    }

    /* Responsive touches */
    @media (max-width: 768px) {
        .kleido-services-section {
            padding: 40px 20px 60px 20px;
        }

        .services-intro h2 {
            font-size: 2rem;
        }

        .description-core {
            padding: 28px 24px;
        }

        .service-block {
            padding: 28px 24px;
        }

        .service-header h3 {
            font-size: 1.5rem;
        }

        .why-kleido h3 {
            font-size: 1.7rem;
        }
    }

    /* subtle divider */
    .section-divider {
        height: 2px;
        background: linear-gradient(90deg, #f0e2e9, #C3376420, #f0e2e9);
        width: 80px;
        margin: 28px auto 0;
        border-radius: 2px;
    }
</style>
<br>
<br>
<br>
<br>
<main>
    <div class="container">
        <!-- Hero -->
        <section class="hero">
            <div class="hero-content">
                <div class="hero-badge"><i class="fas fa-star-of-life" style="margin-right: 6px;"></i> Global impact
                    since 2018</div>
                <h1>Where vision meets <br> flawless execution</h1>
                <p>Kleido orchestrates high-caliber corporate events, product launches, exhibitions, and celebrity
                    partnerships. We create experiences that resonate, engage, and inspire.</p>
                <div class="hero-stats">
                    <div class="stat-item">
                        <h3>350+</h3>
                        <p>Successful events</p>
                    </div>
                    <div class="stat-item">
                        <h3>50+</h3>
                        <p>Celebrity partners</p>
                    </div>
                    <div class="stat-item">
                        <h3>12</h3>
                        <p>Global markets</p>
                    </div>
                </div>
            </div>
            <div class="hero-image">
                <!-- <i class="fas fa-calendar-alt"></i> -->
                <!-- abstract visual placeholder -->
            </div>
        </section>

        <!-- Core services: exactly the listed services -->
        <div class="section-title">
            <h2>Tailored expertise for every moment</h2>
            <p>From intimate recognition galas to large-scale conferences — we deliver excellence across the full
                spectrum.</p>
        </div>
        <div class="services-grid">
            <!-- Corporate Events -->
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-building"></i></div>
                <h3>Corporate Events</h3>
                <p>Immersive brand experiences, galas, town halls & offsites that elevate company culture and
                    stakeholder engagement.</p>
            </div>
            <!-- Product Launches -->
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-rocket"></i></div>
                <h3>Product Launches</h3>
                <p>High-impact reveal strategies, immersive demos, and media activations that generate buzz and drive
                    market adoption.</p>
            </div>
            <!-- Exhibitions -->
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-palette"></i></div>
                <h3>Exhibitions</h3>
                <p>Creative booth design, interactive installations, and curated trade show presence that captivates
                    attendees.</p>
            </div>
            <!-- Conferences -->
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-microphone-alt"></i></div>
                <h3>Conferences</h3>
                <p>End-to-end conference management — from speaker curation to logistics — delivering seamless industry
                    summits.</p>
            </div>
            <!-- Reward & Recognition -->
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-trophy"></i></div>
                <h3>Reward & Recognition</h3>
                <p>Memorable award ceremonies, incentive trips, and employee appreciation events that inspire loyalty
                    and pride.</p>
            </div>
            <!-- Artist Engagement -->
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-music"></i></div>
                <h3>Artist Engagement</h3>
                <p>Strategic collaborations with musicians, performers, and visual artists to add soul and authenticity.
                </p>
            </div>
            <!-- Celebrity Management (special highlight) -->
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-star"></i></div>
                <h3>Celebrity Management</h3>
                <p>Full-service representation, talent booking, brand endorsements, and PR synergy for A-list
                    personalities.</p>
            </div>
        </div>

        <!-- Additional text block that blends 'Artist Engagement & Celebrity Management' in professional narrative -->
        <div class="insight-tag">
            <span><i class="fas fa-hand-sparkles"></i> The Kleido difference</span>
        </div>
        <div style="margin-bottom: 48px; text-align: center; max-width: 800px; margin-left: auto; margin-right: auto;">
            <p style="font-size: 1.05rem; color: #414157;">We don't just manage logistics — we amplify emotions. Our
                network of top-tier artists, celebrities, and industry influencers ensures that every activation carries
                prestige, relevance, and unparalleled reach.</p>
        </div>

        <!-- Dual feature section: Artist Engagement + Celebrity Management detailed -->
        <div class="prestige-section">
            <div class="flex-dual">
                <div class="dual-text">
                    <h3>Artist & Celebrity <br> Ecosystem</h3>
                    <p>Kleido bridges brands with global stars, emerging talent, and visionary artists. Whether you need
                        a headline performer, keynote speaker, or long-term brand ambassador, our team manages
                        contracts, creative integration, and media amplification.</p>
                    <ul class="feature-list">
                        <li><i class="fas fa-check-circle"></i> Exclusive talent roster & vetting</li>
                        <li><i class="fas fa-check-circle"></i> Contract negotiations & rider management</li>
                        <li><i class="fas fa-check-circle"></i> Cross-platform promotional strategy</li>
                        <li><i class="fas fa-check-circle"></i> Seamless on-ground artist hospitality</li>
                    </ul>
                </div>
                <div class="dual-image">
                    <!-- <i class="fas fa-user-astronaut"></i> -->
                    <!-- <p style="margin-top: 24px; font-weight: 500;">Trusted by international icons</p> -->
                    <div
                        style="display: flex; justify-content: center; gap: 18px; margin-top: 18px; font-size: 0.8rem; color:#C33764;">
                        <!-- <span><i class="fas fa-microphone"></i> Music</span> -->
                        <!-- <span><i class="fas fa-film"></i> Cinema</span> -->
                        <!-- <span><i class="fas fa-paintbrush"></i> Art</span> -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Conference + Exhibitions extra context (professional text block) -->
        <div style="display: flex; flex-wrap: wrap; gap: 28px; margin: 40px 0 20px;">
            <div style="flex: 1; background: #FEFAFB; border-radius: 28px; padding: 32px;">
                <i class="fas fa-chalkboard-user"
                    style="font-size: 2rem; color:#C33764; margin-bottom: 20px; display: inline-block;"></i>
                <h3 style="margin-bottom: 12px;">Immersive Conferences & Summits</h3>
                <p style="color:#51516b">From agenda design to audience engagement, Kleido produces hybrid and in-person
                    conferences that foster genuine connection, thought leadership, and measurable ROI for your
                    stakeholders.</p>
            </div>
            <div style="flex: 1; background: #FEFAFB; border-radius: 28px; padding: 32px;">
                <i class="fas fa-chart-line"
                    style="font-size: 2rem; color:#C33764; margin-bottom: 20px; display: inline-block;"></i>
                <h3 style="margin-bottom: 12px;">Reward & Recognition excellence</h3>
                <p style="color:#51516b">Celebrate achievements with bespoke award galas, incentive travel, and
                    recognition programs. We turn milestones into unforgettable moments of pride and motivation.</p>
            </div>
        </div>
        <div class="kleido-services-section">

            <!-- Intro with badge & headings -->
            <div class="services-intro">
                <div class="services-badge">
                    <i class="fas fa-crown" style="margin-right: 6px;"></i> Full-spectrum expertise
                </div>
                <h2>End-to-End Event Management Services</h2>
                <div class="lead-text">
                    At Kleido, we transform ideas into memorable experiences through strategic planning, creative
                    execution, and flawless event management.
                    Whether it's a high-profile corporate gathering, a product launch, an industry exhibition, or an
                    employee recognition program, we create impactful events
                    that engage audiences, strengthen brands, and deliver measurable results.
                </div>
            </div>

            <!-- Core description block (the long text after the headline) -->
            <div class="description-core">
                <p>
                    Our team combines industry expertise, innovative concepts, and meticulous attention to detail to
                    ensure every event reflects your objectives
                    and leaves a lasting impression. From concept development and venue management to production,
                    branding, logistics, and guest engagement,
                    we provide comprehensive solutions tailored to your unique requirements.
                </p>
            </div>

            <!-- Detailed services grid (7 services) based on the content provided -->
            <div class="services-grid-detailed">

                <!-- Corporate Events -->
                <div class="service-block">
                    <div class="service-header">
                        <div class="service-icon"><i class="fas fa-building"></i></div>
                        <h3>Corporate Events</h3>
                    </div>
                    <p>
                        Corporate events play a vital role in strengthening business relationships, communicating
                        organizational goals, and building brand credibility.
                        Kleido specializes in planning and executing professional corporate events that align with your
                        business objectives while delivering exceptional attendee experiences.
                        From annual meetings and town halls to leadership summits, networking sessions, and business
                        celebrations, we manage every aspect of the event lifecycle.
                        Our team ensures seamless coordination, professional production standards, and engaging event
                        environments that reflect your organization's values and vision.
                        Whether you are hosting a small executive gathering or a large-scale corporate convention, we
                        deliver events that foster meaningful connections and support long-term business growth.
                    </p>
                </div>

                <!-- Product Launches -->
                <div class="service-block">
                    <div class="service-header">
                        <div class="service-icon"><i class="fas fa-rocket"></i></div>
                        <h3>Product Launches</h3>
                    </div>
                    <p>
                        Launching a new product requires more than just an announcement—it demands an experience that
                        captures attention, generates excitement, and creates market impact.
                        Kleido designs and executes product launch events that showcase your innovation while building
                        anticipation among customers, partners, media, and stakeholders.
                        Our product launch solutions include creative theme development, stage design, audio-visual
                        production, media coordination, brand activation, influencer engagement,
                        and audience interaction strategies. We focus on creating memorable moments that highlight
                        product features, communicate key messages, and strengthen brand positioning.
                        From technology products and consumer goods to automotive and lifestyle brands, we help
                        organizations introduce their offerings with confidence and maximum visibility.
                    </p>
                </div>

                <!-- Exhibitions -->
                <div class="service-block">
                    <div class="service-header">
                        <div class="service-icon"><i class="fas fa-palette"></i></div>
                        <h3>Exhibitions</h3>
                    </div>
                    <p>
                        Exhibitions provide businesses with valuable opportunities to showcase products, generate leads,
                        and strengthen industry presence.
                        Kleido offers complete exhibition management solutions that help brands stand out in competitive
                        environments and attract meaningful visitor engagement.
                        Our services cover exhibition planning, stall design, booth fabrication, branding, visitor
                        engagement activities, product demonstrations, and on-site management.
                        We create visually compelling exhibition spaces that reflect your brand identity while
                        encouraging interaction and conversation.
                        Whether participating in a trade show, industry expo, consumer exhibition, or international
                        event, our team ensures every detail is managed professionally,
                        allowing you to focus on building business relationships and achieving exhibition objectives.
                    </p>
                </div>

                <!-- Conferences -->
                <div class="service-block">
                    <div class="service-header">
                        <div class="service-icon"><i class="fas fa-microphone-alt"></i></div>
                        <h3>Conferences</h3>
                    </div>
                    <p>
                        Successful conferences require a balance of strategic planning, professional execution, and
                        engaging attendee experiences.
                        Kleido manages conferences of all sizes, delivering seamless events that facilitate knowledge
                        sharing, networking, and industry collaboration.
                        We handle venue selection, registration management, speaker coordination, event branding, stage
                        production, technical support, hospitality, and attendee engagement.
                        Our team works closely with organizers to ensure every session, presentation, and interaction
                        contributes to the overall success of the conference.
                        From corporate conferences and industry forums to leadership summits and educational seminars,
                        we create structured, professional environments
                        that encourage meaningful discussions and valuable insights.
                    </p>
                </div>

                <!-- Reward & Recognition Programs -->
                <div class="service-block">
                    <div class="service-header">
                        <div class="service-icon"><i class="fas fa-trophy"></i></div>
                        <h3>Reward & Recognition Programs</h3>
                    </div>
                    <p>
                        Employees are the foundation of every successful organization. Reward and recognition events
                        provide an opportunity to celebrate achievements,
                        boost morale, and reinforce a positive workplace culture. Kleido creates memorable recognition
                        experiences that make employees feel valued and appreciated.
                        Our services include award ceremonies, annual recognition events, employee appreciation
                        programs, milestone celebrations, leadership awards,
                        and performance-based recognition initiatives. We design engaging experiences that reflect
                        company values while creating moments employees will remember for years.
                        Through thoughtful planning, creative presentations, and impactful event experiences, we help
                        organizations strengthen employee engagement, motivation, and loyalty.
                    </p>
                </div>

                <!-- Artist Engagement -->
                <div class="service-block">
                    <div class="service-header">
                        <div class="service-icon"><i class="fas fa-music"></i></div>
                        <h3>Artist Engagement</h3>
                    </div>
                    <p>
                        Entertainment can elevate any event by creating excitement, enhancing audience engagement, and
                        delivering memorable experiences.
                        Kleido offers artist engagement services that connect organizations with renowned performers,
                        entertainers, and creative talent suitable for various event formats.
                        Our team manages artist sourcing, negotiations, contracts, logistics, hospitality, technical
                        requirements, and performance coordination.
                        Whether you require live music, cultural performances, motivational speakers, comedians, DJs, or
                        specialty acts, we ensure seamless integration into your event program.
                        By carefully selecting talent that aligns with your audience and objectives, we create engaging
                        experiences that add energy, excitement, and value to your events.
                    </p>
                </div>

                <!-- Celebrity Management -->
                <div class="service-block">
                    <div class="service-header">
                        <div class="service-icon"><i class="fas fa-star"></i></div>
                        <h3>Celebrity Management</h3>
                    </div>
                    <p>
                        Celebrity appearances can significantly enhance brand visibility, media attention, and audience
                        engagement.
                        Kleido provides comprehensive celebrity management services designed to help organizations
                        leverage influential personalities for events, campaigns, launches, and brand activations.
                        Our celebrity management solutions include talent identification, contract negotiations,
                        appearance coordination, media management, travel arrangements, hospitality, and on-site
                        support.
                        We work with a diverse network of celebrities, public figures, industry leaders, and influencers
                        to create impactful brand experiences.
                        Whether you're planning a corporate event, product launch, award ceremony, promotional campaign,
                        or brand activation,
                        our team ensures professional coordination and smooth execution from start to finish.
                    </p>
                </div>
            </div>

            <!-- Why Choose Kleido (exactly as provided) -->
            <div class="why-kleido">
                <h3>Why Choose Kleido</h3>
                <p>
                    At Kleido, we believe every event is an opportunity to create meaningful connections and lasting
                    impressions.
                    Our client-focused approach, creative expertise, operational excellence, and commitment to quality
                    enable us to deliver events that exceed expectations.
                    From strategic planning and creative development to flawless execution and post-event support, we
                    serve as a trusted event management partner
                    dedicated to helping organizations achieve their goals through exceptional experiences.
                    <br><br>
                    No matter the scale, complexity, or objective, Kleido brings together creativity, professionalism,
                    and precision to deliver events
                    that inspire, engage, and drive results.
                </p>
                <div class="section-divider"></div>
            </div>
        </div>
    </div>
</main>
<script>
    // just a small UI enhancement: smooth scroll for CTA buttons (concept)
    document.querySelectorAll('.btn-primary, .btn-outline').forEach(btn => {
        btn.addEventListener('click', () => {
            alert('✨ Thank you for your interest! A Kleido specialist will reach out soon. (Demo interaction)');
        });
    });
</script>