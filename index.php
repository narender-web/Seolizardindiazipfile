<?php
$page_title = 'SeoLizards- 1st AI Digital Marketing Agency in Gurgaon-India  | GEO, SEO, PPC, Social Media ';
$meta_description = 'SeoLizards is India\'s leading digital marketing agency offering expert SEO, PPC, Social Media Marketing, Content Marketing, and Web Development. Get a free SEO audit today!';
$meta_keywords = 'digital marketing agency India, SEO services India, PPC advertising, social media marketing, web development, content marketing, SeoLizards';
require_once __DIR__ . '/includes/header.php';
?>

<!-- Hero Section -->
<section class="hero hero-new">
    <div class="container">
        <div class="hero-grid">
            <div class="hero-content">
                <div class="hero-tag-line">
                    We make sure you get found.
                </div>
                <h1>Drive Traffic, Leads &amp; Revenue with Expert <span>Digital Marketing</span></h1>
                <p>To succeed in business, you first need to succeed in search results. Our digital marketing services connect you with your customers' journey from end to end — from discovery to retention.</p>
                <div class="hero-cta">
                    <button class="btn btn-secondary btn-lg" onclick="window.openModal('leadModal')">
                        Speak to an SEO Expert <i class="fas fa-arrow-right"></i>
                    </button>
                    <a href="/seo-services" class="btn btn-outline-white btn-lg">
                        Our Services <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                <div class="hero-stats">
                    <div class="hero-stat">
                        <div class="number" data-count="500" data-suffix="+">0+</div>
                        <div class="label">Clients Served</div>
                    </div>
                    <div class="hero-stat">
                        <div class="number" data-count="97" data-suffix="%">0%</div>
                        <div class="label">Client Retention</div>
                    </div>
                    <div class="hero-stat">
                        <div class="number" data-count="8" data-suffix="+">0+</div>
                        <div class="label">Years Experience</div>
                    </div>
                    <div class="hero-stat">
                        <div class="number" data-count="3" data-suffix="x">0x</div>
                        <div class="label">Avg. ROI</div>
                    </div>
                </div>
            </div>
            <div class="hero-visual">
                <div class="hero-visual-ring hero-visual-ring-outer"></div>
                <div class="hero-visual-ring hero-visual-ring-inner"></div>
                <div class="hero-visual-glow"></div>
                <!-- Hero person image -->
                <div class="hero-person-wrap" style="position:relative;z-index:5">
                    <div class="hero-person-glow"></div>
                    <img
                        src="https://seolizards.in/assets/images/cover-heroimage.png"
                        alt="Digital marketing expert at SeoLizards"
                        class="hero-person-img"
                        loading="eager"
                        onerror="this.style.display='none';document.getElementById('heroImgFallback').style.display='flex'">
                    <div id="heroImgFallback" class="hero-person-fallback" style="display:none">
                        <i class="fas fa-user-tie" style="font-size:4rem;color:var(--secondary);opacity:0.7"></i>
                    </div>
                    <!-- Growth arrow SVG -->
                    <svg class="hero-arrow-svg" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M20 100 Q60 60 100 20" stroke="url(#arrowGrad)" stroke-width="5" stroke-linecap="round"/>
                        <polygon points="100,20 85,22 98,35" fill="#00CC88"/>
                        <defs>
                            <linearGradient id="arrowGrad" x1="20" y1="100" x2="100" y2="20" gradientUnits="userSpaceOnUse">
                                <stop offset="0%" stop-color="#1a1a1a"/>
                                <stop offset="100%" stop-color="#00CC88"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <!-- Floating stat bubbles -->
                <div class="hero-bubble hero-bubble-tr">
                    <div class="bubble-number">309%</div>
                    <div class="bubble-label">Avg. Growth in Traffic</div>
                </div>
                <div class="hero-bubble hero-bubble-mr">
                    <div class="bubble-number">113%</div>
                    <div class="bubble-label">Avg. Growth in Leads</div>
                </div>
                <div class="hero-bubble hero-bubble-bc">
                    <div class="bubble-bc-inner">
                        <i class="fas fa-trophy bubble-trophy-icon"></i>
                        <div class="bubble-bc-title">Transformational Growth</div>
                        <div class="bubble-bc-sub">Delivered to <strong>300+ clients!</strong></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Trusted By -->
<div class="trusted-by" style="padding:70px 20px; overflow:hidden; background:#fff;">

    <div class="text-center" style="margin-bottom:35px;">
        <div class="section-label" style="display:flex; justify-content:center;">
            Trusted by Leading Brands
        </div>
    </div>

    <!-- Slider -->
    <div class="logo-slider" style="overflow:hidden; position:relative; padding:0 30px;">

        <div class="logo-track" style="
            display:flex;
            align-items:center;
            gap:70px;
            width:max-content;
            animation:logoScroll 25s linear infinite;
        ">

            <!-- Logos -->
            <div class="logo-item">
                <img src="assets/images/acer.png" alt="Acer"
                     style="max-width:150px; max-height:70px; objectf-fit:contain;">
            </div>

            <div class="logo-item">
                <img src="assets/images/cglobal.png" alt="Cglobal"
                     style="max-width:150px; max-height:70px; object-fit:contain;">
            </div>

            <div class="logo-item">
                <img src="assets/images/creda.png" alt="Creda"
                     style="max-width:150px; max-height:70px; object-fit:contain;">
            </div>

            <div class="logo-item">
                <img src="assets/images/skooter.png" alt="Skooter"
                     style="max-width:150px; max-height:70px; object-fit:contain;">
            </div>

           

            <!-- Duplicate Logos -->
            <div class="logo-item">
                <img src="assets/images/acer.png" alt="Acer"
                     style="max-width:150px; max-height:70px; object-fit:contain;">
            </div>

            <div class="logo-item">
                <img src="assets/images/cglobal.png" alt="Cglobal"
                     style="max-width:150px; max-height:70px; object-fit:contain;">
            </div>

            <div class="logo-item">
                <img src="assets/images/creda.png" alt="Creda"
                     style="max-width:150px; max-height:70px; object-fit:contain;">
            </div>

            <div class="logo-item">
                <img src="assets/images/skooter.png" alt="Skooter"
                     style="max-width:150px; max-height:70px; object-fit:contain;">
            </div>

        </div>
    </div>
</div>

<style>
@keyframes logoScroll {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-50%);
    }
}
</style>          
            

<!-- Services Section -->
<section>
    <div class="container">
        <div class="text-center">
            <div class="section-label">What We Do</div>
            <h2 class="section-title">Comprehensive Digital Marketing <span>Services</span></h2>
            <p class="section-subtitle">We offer a full spectrum of digital marketing solutions tailored to your business goals and industry.</p>
        </div>
        <div class="cards-grid">
            <div class="card service-card">
                <div class="card-icon"><i class="fas fa-search"></i></div>
                <h3>SEO Services</h3>
                <p>Dominate search rankings with our proven SEO strategies. Local SEO, enterprise SEO, and technical optimization to drive organic growth.</p>
                <a href="services/seo-services/" class="card-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="card service-card">
                <div class="card-icon"><i class="fas fa-video"></i></div>
                <h3>UGC Video</h3>
                <p>Authentic UGC-style fitness, health, and wellness video ads with graphics, subtitles, and usage rights — built to convert.</p>
                <a href="/ugc-video" class="card-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="card service-card">
                <div class="card-icon"><i class="fas fa-share-alt"></i></div>
                <h3>Social Media Marketing</h3>
                <p>Build a powerful brand presence across Instagram, Facebook, LinkedIn, and Twitter with engaging content and targeted campaigns.</p>
                <a href="/services/social-media-marketing/" class="card-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="card service-card">
                <div class="card-icon"><i class="fas fa-ad"></i></div>
                <h3>PPC Advertising</h3>
                <p>Get instant visibility and qualified leads with expertly managed Google Ads, Facebook Ads, and other paid advertising campaigns.</p>
                <a href="/services/pay-per-click-ppc-services-india/" class="card-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="card service-card">
                <div class="card-icon"><i class="fas fa-pen-nib"></i></div>
                <h3>Content Marketing</h3>
                <p>Attract, engage, and convert your audience with high-quality content strategies — blogs, videos, infographics, and more.</p>
                <a href="/services/content-marketing-services/" class="card-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="card service-card">
                <div class="card-icon"><i class="fas fa-code"></i></div>
                <h3>Web Development</h3>
                <p>Build fast, beautiful, SEO-optimized websites that convert visitors into customers. Custom CMS, e-commerce, and responsive designs.</p>
                <a href="/services/web-development-services-gurgaon/" class="card-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="card service-card">
                <div class="card-icon"><i class="fas fa-robot"></i></div>
                <h3>AI Solutions</h3>
                <p>Harness the power of artificial intelligence to automate campaigns, generate content, analyze competitors and scale your growth.</p>
                <a href="/ai-solutions" class="card-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- AI Solutions Section -->
<section class="ai-solutions-section">
    <div class="container">
        <div class="text-center">
            <div class="section-label" style="color:var(--secondary)">AI Solutions</div>
            <h2 class="section-title" style="color:#fff">Supercharge Growth with <span style="color:var(--secondary)">AI-Powered</span> Marketing</h2>
            <p class="section-subtitle" style="color:rgba(255,255,255,0.72)">Leverage cutting-edge artificial intelligence to outperform competitors, automate repetitive tasks, and achieve unprecedented marketing results faster than ever before.</p>
        </div>
        <div class="ai-features-grid">
            <div class="ai-feature-card">
                <div class="ai-feature-icon"><i class="fas fa-pen-fancy"></i></div>
                <h3>AI Content Generation</h3>
                <p>Produce high-ranking, SEO-optimised blog posts, ad copy, and landing pages at scale using GPT-powered content intelligence.</p>
            </div>
            <div class="ai-feature-card">
                <div class="ai-feature-icon"><i class="fas fa-brain"></i></div>
                <h3>Intelligent SEO Analysis</h3>
                <p>Real-time competitor analysis, automated keyword gap detection, and AI-driven on-page recommendations delivered instantly.</p>
            </div>
            <div class="ai-feature-card">
                <div class="ai-feature-icon"><i class="fas fa-chart-line"></i></div>
                <h3>Predictive Analytics</h3>
                <p>Forecast traffic trends, lead volumes, and campaign ROI using machine learning models trained on millions of data points.</p>
            </div>
            <div class="ai-feature-card">
                <div class="ai-feature-icon"><i class="fas fa-bullseye"></i></div>
                <h3>AI Ad Optimization</h3>
                <p>Automated bid management, dynamic ad copy testing, and audience segmentation that improves ROAS without manual work.</p>
            </div>
            <div class="ai-feature-card">
                <div class="ai-feature-icon"><i class="fas fa-comments"></i></div>
                <h3>AI Chatbot Integration</h3>
                <p>Deploy intelligent conversational chatbots on your website to qualify leads and engage visitors 24/7 around the clock.</p>
            </div>
            <div class="ai-feature-card">
                <div class="ai-feature-icon"><i class="fas fa-file-alt"></i></div>
                <h3>Smart Reporting</h3>
                <p>Automated weekly insights with plain-English recommendations — no more digging through data to understand what matters.</p>
            </div>
        </div>
        <div class="text-center" style="margin-top:48px">
            <a href="/ai-solutions" class="btn btn-secondary btn-lg">
                <i class="fas fa-robot"></i> Explore AI Solutions
            </a>
            <button class="btn btn-outline-white btn-lg" style="margin-left:16px" onclick="window.openModal('leadModal')">
                <i class="fas fa-phone"></i> Get a Free Demo
            </button>
        </div>
    </div>
</section>

<!-- Free SEO Audit CTA Banner -->
<section style="padding:0">
    <div class="cta-banner">
        <div class="container">
            <i class="fas fa-chart-bar" style="font-size:3rem;margin-bottom:20px;opacity:0.9"></i>
            <h2>Discover What's Holding Your Website Back</h2>
            <p>Get a comprehensive FREE SEO audit that analyzes 50+ factors. No credit card required. Results in 60 seconds.</p>
            <div class="cta-banner-buttons">
                <button class="btn btn-outline-white btn-lg" onclick="window.openModal('leadModal')">
                    <i class="fas fa-search"></i> Get My Free SEO Audit
                </button>
                <a href="/free-seo-audit" class="btn btn-lg" style="background:rgba(255,255,255,0.15);color:#fff;border-color:rgba(255,255,255,0.4)">
                    <i class="fas fa-info-circle"></i> Learn More
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="why-us">
    <div class="container">
        <div class="why-us-grid">
            <div class="why-us-content">
                <div class="section-label">Why SeoLizards</div>
                <h2 class="section-title">We Deliver <span>Real Results</span>,<br>Not Just Reports</h2>
                <p style="color:var(--text-light);margin-bottom:28px">Unlike agencies that just promise, we deliver measurable outcomes. Every strategy we create is backed by data, driven by expertise, and focused on your bottom line.</p>
                <div class="why-us-list">
                    <div class="why-item">
                        <div class="why-icon"><i class="fas fa-robot"></i></div>
                        <div class="why-text">
                            <h4>AI-Powered Strategies</h4>
                            <p>We leverage cutting-edge AI tools to analyze competitors, identify opportunities, and automate repetitive tasks for faster results.</p>
                        </div>
                    </div>
                    <div class="why-item">
                        <div class="why-icon"><i class="fas fa-chart-line"></i></div>
                        <div class="why-text">
                            <h4>Transparent Reporting</h4>
                            <p>Real-time dashboards and monthly reports with clear metrics. You always know exactly where your investment is going.</p>
                        </div>
                    </div>
                    <div class="why-item">
                        <div class="why-icon"><i class="fas fa-users"></i></div>
                        <div class="why-text">
                            <h4>Dedicated Team</h4>
                            <p>Your own dedicated account manager, SEO specialist, content writer, and paid ads expert — all working on your account.</p>
                        </div>
                    </div>
                    <div class="why-item">
                        <div class="why-icon"><i class="fas fa-trophy"></i></div>
                        <div class="why-text">
                            <h4>Proven Track Record</h4>
                            <p>500+ successful campaigns across 30+ industries with an average of 3x ROI within the first 6 months.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="why-us-visual">
                <div class="stats-card">
                    <h3><i class="fas fa-chart-bar" style="margin-right:50px"></i> Our Performance Metrics</h3>
                    <div class="stats-list">
                        <div class="stat-item">
                            <div class="stat-number" data-count="500" data-suffix="+">500+</div>
                            <div class="stat-text">Clients Successfully Served Across India</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number" data-count="10000" data-suffix="+">10,000+</div>
                            <div class="stat-text">Keywords Ranked on Page 1 of Google</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number" data-count="250" data-suffix="M+">250M+</div>
                            <div class="stat-text">Ad Spend Managed Successfully</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number" data-count="97" data-suffix="%">97%</div>
                            <div class="stat-text">Client Retention Rate (Industry Avg: 65%)</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Process -->
<section>
    <div class="container">
        <div class="text-center">
            <div class="section-label">How We Work</div>
            <h2 class="section-title">Our <span>4-Step</span> Success Process</h2>
            <p class="section-subtitle">A proven framework that has helped hundreds of businesses achieve their digital marketing goals.</p>
        </div>
        <div class="process-steps">
            <div class="step">
                <div class="step-number">1</div>
                <h4>Discovery & Audit</h4>
                <p>Deep dive into your current digital presence, competitor analysis, and audience research.</p>
            </div>
            <div class="step">
                <div class="step-number">2</div>
                <h4>Strategy & Planning</h4>
                <p>Custom digital marketing roadmap aligned with your business goals and budget.</p>
            </div>
            <div class="step">
                <div class="step-number">3</div>
                <h4>Execute & Optimize</h4>
                <p>Implement campaigns, create content, and continuously optimize for peak performance.</p>
            </div>
            <div class="step">
                <div class="step-number">4</div>
                <h4>Report & Scale</h4>
                <p>Transparent reporting and scaling successful campaigns for maximum ROI growth.</p>
            </div>
        </div>
    </div>
</section>

<!-- Industries We Serve -->
<section class="bg-light">
    <div class="container">
        <div class="text-center">
            <div class="section-label">Industries</div>
            <h2 class="section-title">We Have Expertise Across <span>30+ Industries</span></h2>
            <p class="section-subtitle">Domain-specific knowledge that gives your campaigns a competitive edge.</p>
        </div>
        <div class="industries-grid">
            <div class="industry-card"><i class="fas fa-shopping-cart"></i><h4>E-Commerce</h4></div>
            <div class="industry-card"><i class="fas fa-heartbeat"></i><h4>Healthcare</h4></div>
            <div class="industry-card"><i class="fas fa-university"></i><h4>Finance & Banking</h4></div>
            <div class="industry-card"><i class="fas fa-graduation-cap"></i><h4>Education</h4></div>
            <div class="industry-card"><i class="fas fa-home"></i><h4>Real Estate</h4></div>
            <div class="industry-card"><i class="fas fa-laptop-code"></i><h4>Technology</h4></div>
            <div class="industry-card"><i class="fas fa-utensils"></i><h4>Food & Restaurant</h4></div>
            <div class="industry-card"><i class="fas fa-plane"></i><h4>Travel & Tourism</h4></div>
            <div class="industry-card"><i class="fas fa-tshirt"></i><h4>Fashion & Retail</h4></div>
            <div class="industry-card"><i class="fas fa-car"></i><h4>Automobile</h4></div>
            <div class="industry-card"><i class="fas fa-dumbbell"></i><h4>Health & Fitness</h4></div>
            <div class="industry-card"><i class="fas fa-building"></i><h4>B2B Services</h4></div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="testimonials">
    <div class="container">
        <div class="text-center">
            <div class="section-label">Client Stories</div>
            <h2 class="section-title text-white">What Our Clients <span style="color:var(--secondary)">Say</span></h2>
            <p class="section-subtitle">Real results from real businesses. Here's what our clients have achieved with SeoLizards.</p>
        </div>
        <div class="testimonials-grid">
            <div class="testimonial-card">
                <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                <p class="testimonial-text">"SeoLizards transformed our online presence completely. Our organic traffic grew by 340% in just 8 months and we're now ranking #1 for our main keywords in Delhi!"</p>
                <div class="testimonial-author">
                    <div class="author-avatar">RS</div>
                    <div class="author-info">
                        <div class="name">Rahul Sharma</div>
                        <div class="role">CEO, TechSolutions Delhi</div>
                    </div>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                <p class="testimonial-text">"The PPC campaigns they ran for us delivered a 5x return on ad spend. Their team is incredibly responsive and transparent about everything they do."</p>
                <div class="testimonial-author">
                    <div class="author-avatar">PG</div>
                    <div class="author-info">
                        <div class="name">Priya Gupta</div>
                        <div class="role">Marketing Head, FashionMart</div>
                    </div>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                <p class="testimonial-text">"Their content marketing strategy helped us establish thought leadership in our niche. Leads from organic search tripled within 6 months!"</p>
                <div class="testimonial-author">
                    <div class="author-avatar">AM</div>
                    <div class="author-info">
                        <div class="name">Amit Mehta</div>
                        <div class="role">Founder, EduTech Startup</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Video Testimonials -->
<section style="padding:80px 0;background:#f8f9fa;">

    <div class="container">

        <div class="text-center">
            <div class="section-label">Video Testimonials</div>

            <h2 class="section-title">
                Hear It From Our <span>Happy Clients</span>
            </h2>

            <p class="section-subtitle">
                Watch what our clients say about their experience working with SeoLizards.
            </p>
        </div>

        <!-- Video Grid -->

        <div style="
            display:flex;
            gap:30px;
            flex-wrap:wrap;
            margin-top:50px;
        ">

            <!-- Video 1 -->

            <div style="
                flex:1;
                min-width:320px;
                border-radius:24px;
                overflow:hidden;
                box-shadow:0 10px 30px rgba(0,0,0,0.08);
            ">

                <iframe 
                width="100%" 
                height="420"
                src="https://www.youtube.com/embed/GbW-CSFvRLc?rel=0&modestbranding=1&controls=1"
                title="SEO Results for Interior Designer in USA"
                frameborder="0"
                allow="autoplay; encrypted-media"
                allowfullscreen>
                </iframe>

            </div>

            <!-- Video 2 -->

            <div style="
                flex:1;
                min-width:320px;
                border-radius:24px;
                overflow:hidden;
                box-shadow:0 10px 30px rgba(0,0,0,0.08);
            ">

                <iframe 
                width="100%" 
                height="420"
                src="https://www.youtube.com/embed/Yp1Fmd8tul0?rel=0&modestbranding=1&controls=1&autoplay=1&mute="
                title="Client Video Testimonial 2"
                frameborder="0"
                allow="autoplay; encrypted-media"
                allowfullscreen>
                </iframe>

            </div>

        </div>

    </div>

</section>

<!-- Pricing Preview -->
<section>
    <div class="container">
        <div class="text-center">
            <div class="section-label">Pricing</div>
            <h2 class="section-title">Transparent <span>SEO Packages</span></h2>
            <p class="section-subtitle">No hidden fees. Choose a package that fits your business needs and budget.</p>
        </div>
        <div class="pricing-grid">
            <div class="pricing-card">
                <div class="pricing-name">Starter</div>
                <div class="pricing-price">
                    <span class="currency">₹</span>
                    <span class="amount">9,999</span>
                    <span class="period">/month</span>
                </div>
                <div class="pricing-desc">Perfect for small businesses starting their SEO journey</div>
                <ul class="pricing-features">
                    <li><i class="fas fa-check check"></i> 10 Target Keywords</li>
                    <li><i class="fas fa-check check"></i> On-Page SEO Optimization</li>
                    <li><i class="fas fa-check check"></i> 4 Blog Posts/Month</li>
                    <li><i class="fas fa-check check"></i> Google My Business Setup</li>
                    <li><i class="fas fa-check check"></i> Monthly Report</li>
                    <li class="disabled"><i class="fas fa-times cross"></i> Technical SEO Audit</li>
                    <li class="disabled"><i class="fas fa-times cross"></i> Link Building</li>
                </ul>
                <a href="/contact" class="btn btn-outline btn-block">Get Started</a>
            </div>
            <div class="pricing-card featured">
                <div class="pricing-badge">Most Popular</div>
                <div class="pricing-name">Growth</div>
                <div class="pricing-price">
                    <span class="currency">₹</span>
                    <span class="amount">24,999</span>
                    <span class="period">/month</span>
                </div>
                <div class="pricing-desc">Ideal for growing businesses ready to dominate their market</div>
                <ul class="pricing-features">
                    <li><i class="fas fa-check check"></i> 30 Target Keywords</li>
                    <li><i class="fas fa-check check"></i> Full On-Page Optimization</li>
                    <li><i class="fas fa-check check"></i> 8 Blog Posts/Month</li>
                    <li><i class="fas fa-check check"></i> Technical SEO Audit</li>
                    <li><i class="fas fa-check check"></i> Link Building (10/mo)</li>
                    <li><i class="fas fa-check check"></i> Weekly Reports</li>
                    <li><i class="fas fa-check check"></i> Competitor Analysis</li>
                </ul>
                <a href="/contact" class="btn btn-primary btn-block">Get Started</a>
            </div>
            <div class="pricing-card">
                <div class="pricing-name">Enterprise</div>
                <div class="pricing-price">
                    <span class="currency">₹</span>
                    <span class="amount">59,999</span>
                    <span class="period">/month</span>
                </div>
                <div class="pricing-desc">For enterprises requiring aggressive growth and market dominance</div>
                <ul class="pricing-features">
                    <li><i class="fas fa-check check"></i> 100+ Keywords list</li>
                    <li><i class="fas fa-check check"></i> Complete SEO Strategy</li>
                    <li><i class="fas fa-check check"></i> 20 Blog Posts/Month</li>
                    <li><i class="fas fa-check check"></i> Advanced Technical SEO</li>
                    <li><i class="fas fa-check check"></i> Link Building (30/mo)</li>
                    <li><i class="fas fa-check check"></i> Dedicated SEO Manager</li>
                    <li><i class="fas fa-check check"></i> Custom Dashboard</li>
                </ul>
                <a href="/contact" class="btn btn-outline btn-block">Get Started</a>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA -->
<section style="padding:0">
    <div class="cta-banner" style="background:linear-gradient(135deg,#0A0A0A,#1a1a1a)">
        <div class="container">
            <h2>Ready to Dominate Your Market?</h2>
            <p>Join 500+ businesses that trust SeoLizards for their digital marketing success. Start with a free consultation today.</p>
            <div class="cta-banner-buttons">
                <a href="/contact" class="btn btn-secondary btn-lg">
                    <i class="fas fa-phone"></i> Talk to an Expert
                </a>
                <button class="btn btn-outline-white btn-lg" onclick="window.openModal('leadModal')">
                    <i class="fas fa-chart-bar"></i> Free SEO Audit
                </button>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
