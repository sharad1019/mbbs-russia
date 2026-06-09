<style>
    /* main wrapper - no external images, pure geometric pattern */
    .route2india-unique {
        max-width: 1400px;
        margin: 0 auto;
        background: #fff;
        position: relative;
    }

    /* abstract background pattern (no image, only CSS) */
    .pattern-bg {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -2;
        opacity: 0.03;
        pointer-events: none;
        background-image: repeating-linear-gradient(45deg, #E32682 0px, #E32682 2px, transparent 2px, transparent 12px);
    }

    /* header / hero with no image, using abstract shapes */
    .hero-no-image {
        background: linear-gradient(125deg, #ffffff 0%, #FFF5F9 100%);
        border-bottom: 3px solid #E32682;
        padding: 70px 40px 60px;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .hero-no-image::before {
        content: "✦";
        font-size: 220px;
        position: absolute;
        bottom: -50px;
        right: -40px;
        color: #E3268208;
        font-weight: 300;
        pointer-events: none;
    }

    .hero-no-image::after {
        content: "➤";
        font-size: 180px;
        position: absolute;
        top: -60px;
        left: -30px;
        color: #E3268208;
        transform: rotate(15deg);
        font-weight: 300;
    }

    .hero-badge-pink {
        display: inline-block;
        background: #E3268210;
        padding: 6px 22px;
        border-radius: 60px;
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 1.2px;
        color: #E32682;
        margin-bottom: 24px;
        border: 1px solid #E3268230;
        backdrop-filter: blur(2px);
    }

    .hero-no-image h1 {
        font-size: 4.2rem;
        font-weight: 700;
        letter-spacing: -0.02em;
        background: linear-gradient(135deg, #1A2A3A 0%, #2B3B4E 100%);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        margin-bottom: 20px;
    }

    .hero-no-image .tagline {
        font-size: 1.2rem;
        color: #3A4C5E;
        max-width: 600px;
        margin: 0 auto;
        font-weight: 500;
        border-bottom: 2px dotted #E3268240;
        display: inline-block;
        padding-bottom: 5px;
    }

    /* modern container */
    .container-unique {
        max-width: 1240px;
        margin: 0 auto;
        padding: 0 32px;
    }

    /* 4-card minimalist row (services snapshot) */
    .services-mosaic {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 28px;
        margin: 60px 0 56px;
    }

    .mosaic-card {
        background: #FFFFFF;
        border-radius: 28px;
        padding: 28px 20px;
        text-align: center;
        border: 1px solid #F0E5EB;
        transition: all 0.25s ease;
        box-shadow: 0 8px 18px -12px rgba(0, 0, 0, 0.05);
        position: relative;
        z-index: 2;
    }

    .mosaic-card:hover {
        border-color: #E32682;
        transform: translateY(-6px);
        box-shadow: 0 24px 30px -18px rgba(227, 38, 130, 0.2);
    }

    .mosaic-card i {
        font-size: 2.3rem;
        color: #E32682;
        margin-bottom: 18px;
        background: #FEF1F7;
        width: 64px;
        height: 64px;
        line-height: 64px;
        border-radius: 32px;
        display: inline-block;
    }

    .mosaic-card h3 {
        font-size: 1.65rem;
        font-weight: 700;
        margin-bottom: 10px;
        color: #1F2E3C;
    }

    .mosaic-card p {
        font-size: 0.85rem;
        color: #5F6F7E;
        font-weight: 500;
    }

    /* unified text section — all content in one block as requested */
    .unified-content-section {
        background: #FEFAFD;
        border-radius: 48px;
        padding: 56px 52px;
        margin: 40px 0 64px;
        border: 1px solid #F3E2EC;
        box-shadow: 0 15px 35px -12px rgba(227, 38, 130, 0.08);
        transition: all 0.2s;
    }

    .unified-content-section .content-wrapper {
        max-width: 100%;
    }

    .unified-content-section h2 {
        font-size: 2.2rem;
        font-weight: 700;
        margin-bottom: 28px;
        color: #1E2F3E;
        border-left: 6px solid #E32682;
        padding-left: 20px;
    }

    .unified-text-block p {
        font-size: 1rem;
        line-height: 1.65;
        color: #2C3F4F;
        margin-bottom: 24px;
    }

    /* service highlights inside unified section (subheadings) */
    .service-inline-item {
        margin: 40px 0 32px;
        padding-top: 8px;
    }

    .service-inline-item h3 {
        font-size: 1.7rem;
        font-weight: 600;
        color: #E32682;
        margin-bottom: 16px;
        display: inline-block;
        border-bottom: 3px solid #E3268230;
        padding-bottom: 4px;
    }

    .service-inline-item p {
        margin-bottom: 18px;
    }

    /* why choose section with fresh style */
    .why-route-new {
        background: #1E2F3E;
        border-radius: 40px;
        padding: 58px 48px;
        margin: 64px 0 70px;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .why-route-new::after {
        content: "⛯";
        font-size: 180px;
        position: absolute;
        bottom: -60px;
        right: -30px;
        opacity: 0.04;
        color: white;
        pointer-events: none;
    }

    .why-route-new h3 {
        font-size: 2.2rem;
        font-weight: 700;
        color: white;
        margin-bottom: 24px;
        letter-spacing: -0.3px;
    }

    .why-route-new p {
        color: #E4EDF2;
        max-width: 860px;
        margin: 0 auto 20px;
        font-size: 1rem;
        line-height: 1.6;
    }

    .why-route-new .accent-btn {
        display: inline-block;
        margin-top: 28px;
        background: #E32682;
        color: white;
        padding: 12px 34px;
        border-radius: 60px;
        font-weight: 600;
        font-size: 0.9rem;
        letter-spacing: 0.5px;
        border: none;
        transition: 0.2s;
    }

    .why-route-new .accent-btn i {
        margin-right: 8px;
    }

    /* extra section: testimonials or stats (added new section) */
    .stats-showcase {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        gap: 32px;
        background: #ffffff;
        border-radius: 48px;
        padding: 48px 32px;
        margin: 40px 0 50px;
        border: 1px solid #F1E1EA;
        box-shadow: 0 5px 18px rgba(0, 0, 0, 0.02);
    }

    .stat-item-new {
        flex: 1;
        text-align: center;
        min-width: 150px;
    }

    .stat-number {
        font-size: 2.8rem;
        font-weight: 800;
        color: #E32682;
        margin-bottom: 8px;
    }

    .stat-label {
        font-size: 0.85rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: #4D6272;
    }

    /* contact banner new section */
    .contact-preview {
        background: #FFF3F8;
        border-radius: 32px;
        padding: 44px 40px;
        margin: 30px 0 70px;
        text-align: center;
        border: 1px solid #E3268220;
    }

    .contact-preview h4 {
        font-size: 1.7rem;
        font-weight: 700;
        color: #1F2E3C;
        margin-bottom: 12px;
    }

    .contact-preview .contact-detail {
        font-size: 1rem;
        color: #E32682;
        font-weight: 500;
    }

    .contact-preview i {
        margin: 0 8px;
    }

    /* footer */
    .footer-new {
        border-top: 1px solid #F0E2EA;
        padding: 40px 0 40px;
        text-align: center;
        color: #657B8C;
        font-size: 0.8rem;
    }

    @media (max-width: 780px) {
        .hero-no-image h1 {
            font-size: 2.5rem;
        }

        .container-unique {
            padding: 0 24px;
        }

        .unified-content-section {
            padding: 32px 24px;
        }

        .stats-showcase {
            flex-direction: column;
            align-items: center;
        }

        .why-route-new {
            padding: 38px 24px;
        }

        .service-inline-item h3 {
            font-size: 1.5rem;
        }
    }
</style>
<div class="route2india-unique">
    <div class="pattern-bg"></div> <!-- subtle geometric pattern no image -->

    <!-- hero without image, fully typographic + pink theme -->
    <div class="hero-no-image">
        <div class="hero-badge-pink"><i class="fas fa-map-marked-alt"></i> INDIA'S PREMIER DMC</div>
        <h1>Route2India</h1>
        <div class="tagline">Beyond destinations — crafting legendary journeys</div>
    </div>

    <div class="container-unique">
        <!-- 4 core service cards (visual snapshot) -->
        <div class="services-mosaic">
            <div class="mosaic-card">
                <i class="fas fa-users"></i>
                <h3>Group Tours</h3>
                <p>Seamless group expeditions & cultural immersions</p>
            </div>
            <div class="mosaic-card">
                <i class="fas fa-hiking"></i>
                <h3>FIT Tours</h3>
                <p>Tailor-made independent travel</p>
            </div>
            <div class="mosaic-card">
                <i class="fas fa-bus-alt"></i>
                <h3>Transportation</h3>
                <p>Premium fleet & reliable logistics</p>
            </div>
            <div class="mosaic-card">
                <i class="fas fa-crown"></i>
                <h3>VIP Handling</h3>
                <p>White‑glove elite experiences</p>
            </div>
        </div>

        <!-- ********** ONE UNIFIED TEXT SECTION (all content together, no image) ********** -->
        <div class="unified-content-section">
            <div class="content-wrapper">
                <h2># Comprehensive Travel & Destination Management Services</h2>
                <div class="unified-text-block">
                    <p>Route2India is a trusted travel and destination management partner dedicated to delivering
                        seamless, personalized, and memorable travel experiences across India. With extensive industry
                        expertise, a strong network of partners, and a commitment to exceptional service, we provide
                        end-to-end travel solutions for corporate clients, travel agencies, tour operators, and
                        individual travelers.</p>
                    <p>From customized itineraries and group travel arrangements to transportation management and VIP
                        services, our experienced team ensures every journey is carefully planned and professionally
                        executed. We focus on creating hassle-free travel experiences that combine comfort, convenience,
                        cultural immersion, and operational excellence.</p>
                    <p>Whether you are organizing a corporate incentive trip, planning a family vacation, managing
                        international visitors, or coordinating large-scale group movements, Route2India delivers
                        reliable travel solutions tailored to your specific requirements.</p>
                </div>

                <!-- Group Tours section (inline inside unified block) -->
                <div class="service-inline-item">
                    <h3><i class="fas fa-users" style="margin-right: 12px;"></i> Group Tours</h3>
                    <p>Group travel offers an excellent opportunity to explore destinations, build connections, and
                        create shared experiences. Route2India specializes in organizing professionally managed group
                        tours designed for corporate teams, educational institutions, social organizations, leisure
                        travelers, and special interest groups.</p>
                    <p>Our group tour services include itinerary planning, accommodation arrangements, transportation
                        management, sightseeing coordination, meal planning, local guides, and on-ground support. We
                        carefully manage every detail to ensure smooth travel experiences for groups of all sizes.</p>
                    <p>Whether it is a cultural exploration, heritage tour, adventure journey, pilgrimage trip,
                        corporate retreat, or incentive travel program, our team creates well-structured itineraries
                        that maximize value while ensuring comfort and convenience for every participant. With strong
                        destination knowledge and operational expertise, we help groups discover India’s diverse
                        landscapes, traditions, and attractions through thoughtfully curated travel experiences.</p>
                </div>

                <!-- FIT Tours -->
                <div class="service-inline-item">
                    <h3><i class="fas fa-hiking" style="margin-right: 12px;"></i> FIT Tours</h3>
                    <p>Every traveler has unique interests, preferences, and expectations. Our FIT (Free Independent
                        Traveler) services are designed to provide customized travel experiences tailored specifically
                        to individual travelers, couples, families, and small private groups.</p>
                    <p>Route2India creates personalized itineraries based on travel goals, preferred destinations,
                        budget considerations, and desired experiences. Whether guests seek luxury vacations, heritage
                        tours, wellness retreats, wildlife adventures, culinary experiences, or cultural journeys, we
                        design travel plans that reflect their individual interests.</p>
                    <p>Our FIT services include accommodation bookings, private transportation, sightseeing
                        arrangements, guided experiences, activity planning, restaurant recommendations, and dedicated
                        travel assistance. We focus on flexibility and personalization, allowing travelers to explore at
                        their own pace while enjoying the convenience of professional travel management. From iconic
                        destinations and hidden gems to exclusive experiences and premium hospitality, Route2India
                        ensures every independent journey is comfortable, memorable, and rewarding.</p>
                </div>

                <!-- Transportation Services -->
                <div class="service-inline-item">
                    <h3><i class="fas fa-bus-alt" style="margin-right: 12px;"></i> Transportation Services</h3>
                    <p>Reliable transportation is a critical component of any successful travel experience. Route2India
                        offers comprehensive transportation solutions designed to ensure safe, efficient, and
                        comfortable movement for travelers across India.</p>
                    <p>Our transportation services include airport transfers, city transportation, intercity travel,
                        corporate transportation, event logistics, group transfers, and luxury vehicle arrangements. We
                        maintain access to a wide range of vehicles, including sedans, SUVs, luxury cars, coaches,
                        minibuses, and executive transportation options.</p>
                    <p>Every transportation solution is planned with a focus on punctuality, safety, route optimization,
                        and passenger comfort. Our experienced drivers and transportation partners adhere to
                        professional standards, ensuring smooth travel experiences regardless of destination or group
                        size. Whether coordinating transportation for a corporate conference, incentive group, wedding
                        celebration, international delegation, or private vacation, we deliver dependable solutions that
                        support seamless travel operations.</p>
                </div>

                <!-- VIP Handling -->
                <div class="service-inline-item">
                    <h3><i class="fas fa-crown" style="margin-right: 12px;"></i> VIP Handling</h3>
                    <p>Exceptional guests require exceptional service. Route2India provides specialized VIP handling
                        services designed to deliver premium travel experiences for corporate executives, dignitaries,
                        celebrities, government representatives, business leaders, and high-profile travelers.</p>
                    <p>Our VIP services focus on comfort, privacy, efficiency, and personalized attention throughout the
                        travel journey. From airport meet-and-greet assistance and fast-track services to luxury
                        transportation, accommodation coordination, protocol management, and dedicated concierge
                        support, every detail is managed with precision and discretion.</p>
                    <p>We understand the unique expectations associated with VIP travel and work closely with clients to
                        ensure every requirement is anticipated and fulfilled. Our experienced team coordinates
                        logistics, schedules, security considerations, hospitality arrangements, and on-ground support
                        to create a smooth and stress-free experience. Whether managing executive business travel,
                        diplomatic visits, international delegations, celebrity movements, or special guest experiences,
                        Route2India delivers professional VIP handling services that meet the highest standards of
                        service excellence.</p>
                </div>
            </div>
        </div>

        <!-- Extra section: Stats & Milestones (no image, adds value) -->
        <div class="stats-showcase">
            <div class="stat-item-new">
                <div class="stat-number">15+</div>
                <div class="stat-label">Years of Excellence</div>
            </div>
            <div class="stat-item-new">
                <div class="stat-number">380+</div>
                <div class="stat-label">Destinations Covered</div>
            </div>
            <div class="stat-item-new">
                <div class="stat-number">1.2k+</div>
                <div class="stat-label">Happy Group Tours</div>
            </div>
            <div class="stat-item-new">
                <div class="stat-number">24/7</div>
                <div class="stat-label">Concierge Support</div>
            </div>
        </div>

        <!-- Why Choose Route2India (revamped style but same complete content) -->
        <div class="why-route-new">
            <h3>Why Choose Route2India</h3>
            <p>At Route2India, we believe successful travel experiences are built on meticulous planning, local
                expertise, reliable execution, and exceptional customer service. Our team combines destination
                knowledge, operational efficiency, and a client-focused approach to deliver travel solutions that exceed
                expectations.</p>
            <p>We work closely with clients to understand their objectives, preferences, and travel requirements,
                ensuring every itinerary and service is tailored to achieve the desired outcome. From small private
                journeys to large-scale travel programs, we maintain the same commitment to quality, professionalism,
                and attention to detail.</p>
            <p>With a strong network of hospitality partners, transportation providers, destination experts, and local
                support teams, Route2India offers dependable travel management services across diverse destinations
                throughout India.</p>
            <p>Whether you are planning a group tour, customized FIT journey, transportation program, or VIP travel
                experience, Route2India serves as your trusted partner in delivering seamless, memorable, and
                professionally managed travel solutions.</p>
            <div class="accent-btn"><i class="fas fa-hand-peace"></i> Begin your journey</div>
        </div>

        <!-- extra new section: contact & engagement without image -->
        <div class="contact-preview">
            <h4><i class="fas fa-envelope-open-text" style="color:#E32682;"></i> Let's craft your next expedition</h4>
            <div class="contact-detail">
                <i class="fas fa-phone-alt"></i> +91 11 4300 1234 &nbsp;|&nbsp; <i class="fas fa-globe"></i>
                hello@route2india.com
            </div>
            <p style="margin-top: 20px; font-size: 0.85rem; color:#5c6f82;">Incredible India — Custom itineraries,
                unmatched hospitality, lifetime memories.</p>
        </div>
    </div>