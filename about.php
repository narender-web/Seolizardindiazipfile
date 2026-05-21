<?php
$page_title = 'About SeoLizards - India\'s Premier Digital Marketing Agency';
$meta_description = 'Learn about SeoLizards, India\'s leading digital marketing agency. Our team of 50+ experts has helped 500+ businesses achieve digital marketing success since 2016.';
require_once __DIR__ . '/includes/header.php';
?>

<div class="page-hero">
    <div class="container">
        <nav class="breadcrumb"><a href="/">Home</a><span class="sep">/</span><span>About Us</span></nav>
        <h1>We Are <span style="color:var(--secondary)">SeoLizards</span></h1>
        <p>India's most trusted digital marketing agency, helping businesses grow online since 2016.</p>
    </div>
</div>

<section class="our-story-section">
    <div class="container">
        <div class="our-story-grid">

            <!-- Left Content -->
            <div>
                <div class="section-label">Our Story</div>

                <h2 class="section-title">
                    From a Small <span>Startup</span> to India's Top Agency
                </h2>

                <p class="story-text">
                    SeoLizards was founded in 2016 with a simple mission: help Indian businesses compete online.
                    What started as a two-person SEO consultancy has grown into a full-service digital marketing
                    agency with 50+ experts.
                </p>

                <p class="story-text">
                    Today, we are proud to have served 500+ clients across 30+ industries, managing campaigns
                    worth ₹250M+ in ad spend and ranking thousands of keywords on page 1 of Google.
                </p>

                <div class="stats-wrapper">

                    <div class="stat-box">
                        <div class="stat-number">2016</div>
                        <div class="stat-label">Founded</div>
                    </div>

                    <div class="stat-box">
                        <div class="stat-number">50+</div>
                        <div class="stat-label">Experts</div>
                    </div>

                    <div class="stat-box">
                        <div class="stat-number secondary">500+</div>
                        <div class="stat-label">Clients</div>
                    </div>

                </div>
            </div>

            <!-- Right Content -->
            <div class="mission-box">

                <h3>Our Mission</h3>

                <p class="mission-text">
                    "To empower every Indian business — from local shops to large enterprises —
                    with world-class digital marketing strategies that drive real, measurable growth."
                </p>

                <h3>Our Values</h3>

                <div class="values-list">

                    <div class="value-item">
                        <i class="fas fa-check-circle"></i>
                        <span>Transparency in everything we do</span>
                    </div>

                    <div class="value-item">
                        <i class="fas fa-check-circle"></i>
                        <span>Data-driven decision making</span>
                    </div>

                    <div class="value-item">
                        <i class="fas fa-check-circle"></i>
                        <span>Results over empty promises</span>
                    </div>

                    <div class="value-item">
                        <i class="fas fa-check-circle"></i>
                        <span>Continuous innovation and learning</span>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>

<style>
/* SECTION */
.our-story-section{
    padding:80px 0;
}

/* GRID */
.our-story-grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:60px;
    align-items:center;
}

/* TEXT */
.story-text{
    color:var(--text-light);
    margin-bottom:16px;
    line-height:1.8;
}

/* STATS */
.stats-wrapper{
    display:flex;
    gap:24px;
    flex-wrap:wrap;
    margin-top:24px;
}

.stat-box{
    text-align:center;
    padding:20px;
    background:var(--bg);
    border-radius:var(--radius);
    flex:1;
    min-width:120px;
}

.stat-number{
    font-size:2rem;
    font-weight:800;
    color:var(--primary);
}

.stat-number.secondary{
    color:var(--secondary);
}

.stat-label{
    font-size:0.82rem;
    color:var(--text-light);
}

/* MISSION BOX */
.mission-box{
    background:linear-gradient(135deg,var(--primary),var(--secondary));
    border-radius:var(--radius-lg);
    padding:48px;
    color:#fff;
}

.mission-box h3{
    font-family:var(--font-heading);
    font-size:1.6rem;
    margin-bottom:16px;
}

.mission-text{
    opacity:0.9;
    margin-bottom:24px;
    line-height:1.8;
}

.values-list{
    display:flex;
    flex-direction:column;
    gap:12px;
}

.value-item{
    display:flex;
    align-items:flex-start;
    gap:12px;
    line-height:1.6;
}

/* MOBILE RESPONSIVE */
@media(max-width:991px){

    .our-story-grid{
        grid-template-columns:1fr;
        gap:40px;
    }

    .mission-box{
        padding:32px 24px;
    }

    .section-title{
        font-size:2rem;
        line-height:1.3;
    }
}

@media(max-width:767px){

    .our-story-section{
        padding:60px 0;
    }

    .stats-wrapper{
        gap:16px;
    }

    .stat-box{
        min-width:100%;
    }

    .mission-box h3{
        font-size:1.3rem;
    }

    .section-title{
        font-size:1.7rem;
    }

    .story-text,
    .mission-text,
    .value-item span{
        font-size:0.95rem;
    }
}
</style>
<!-- Office Image Section -->
<section class="office-section">
    <div class="container">

        <div class="office-grid">

            <!-- Left Content -->
            <div class="office-content">

                <div class="section-label">Our Workspace</div>

                <h2 class="section-title">
                    Our <span>Office &amp; Culture</span>
                </h2>

                <p class="office-description">
                    Step inside the SeoLizards headquarters — a vibrant, collaborative
                    space where creativity meets data-driven thinking. Our open-plan office
                    fosters innovation and keeps every team member aligned toward one goal:
                    your growth.
                </p>

                <div class="office-highlights">

                    <div class="office-highlight-item">
                        <div class="office-highlight-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>

                        <div>
                            <strong>Gurgaon, Sector 47, India</strong>
                            <span>Our centrally located HQ serving clients pan-India</span>
                        </div>
                    </div>

                    <div class="office-highlight-item">
                        <div class="office-highlight-icon">
                            <i class="fas fa-users"></i>
                        </div>

                        <div>
                            <strong>50+ Professionals</strong>
                            <span>SEO experts, designers, developers, content strategists</span>
                        </div>
                    </div>

                    <div class="office-highlight-item">
                        <div class="office-highlight-icon">
                            <i class="fas fa-laptop"></i>
                        </div>

                        <div>
                            <strong>State-of-the-Art Setup</strong>
                            <span>Fully equipped workstations with the latest marketing tools</span>
                        </div>
                    </div>

                    <div class="office-highlight-item">
                        <div class="office-highlight-icon">
                            <i class="fas fa-clock"></i>
                        </div>

                        <div>
                            <strong>Mon – Sat, 9 AM – 6 PM</strong>
                            <span>Always available when you need us most</span>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Image -->
            <div class="office-image-side">

                <div class="office-img-wrapper">

                    <img src="/assets/images/office.jpg"
                         alt="SeoLizards Office – Gurgaon, Sector 47"
                         class="office-photo"
                         id="officeImg"
                         loading="lazy">

                    <div class="office-placeholder d-none" id="officePlaceholder">

                        <div class="office-placeholder-inner">
                            <i class="fas fa-building"></i>
                            <span>SeoLizards HQ</span>
                            <span class="office-location">
                                New Delhi, India
                            </span>
                        </div>

                        <div class="office-stat-badge badge-top">
                            <i class="fas fa-users"></i>
                            <span>50+ Team Members</span>
                        </div>

                        <div class="office-stat-badge badge-bottom">
                            <i class="fas fa-trophy"></i>
                            <span>Award-Winning Agency</span>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
</section>

<style>
/* SECTION */
.office-section{
    padding:80px 0;
}

/* GRID */
.office-grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:60px;
    align-items:center;
}

/* CONTENT */
.office-description{
    color:var(--text-light);
    margin-bottom:24px;
    line-height:1.8;
}

/* HIGHLIGHTS */
.office-highlights{
    display:flex;
    flex-direction:column;
    gap:18px;
}

.office-highlight-item{
    display:flex;
    align-items:flex-start;
    gap:16px;
    padding:18px;
    background:var(--bg);
    border-radius:16px;
}

.office-highlight-icon{
    width:52px;
    height:52px;
    min-width:52px;
    display:flex;
    align-items:center;
    justify-content:center;
    border-radius:14px;
    background:linear-gradient(135deg,var(--primary),var(--secondary));
    color:#fff;
    font-size:1.1rem;
}

.office-highlight-item strong{
    display:block;
    margin-bottom:4px;
    font-size:1rem;
}

.office-highlight-item span{
    color:var(--text-light);
    font-size:0.92rem;
    line-height:1.6;
}

/* IMAGE SIDE */
.office-image-side{
    width:100%;
}

.office-img-wrapper{
    position:relative;
    border-radius:24px;
    overflow:hidden;
}

.office-photo{
    width:100%;
    height:100%;
    display:block;
    object-fit:cover;
    border-radius:24px;
}

/* PLACEHOLDER */
.office-placeholder{
    position:relative;
    min-height:500px;
    background:linear-gradient(135deg,var(--primary),var(--secondary));
    display:flex;
    align-items:center;
    justify-content:center;
    text-align:center;
    color:#fff;
    border-radius:24px;
    overflow:hidden;
}

.office-placeholder-inner{
    display:flex;
    flex-direction:column;
    align-items:center;
    gap:12px;
}

.office-placeholder-inner i{
    font-size:4rem;
}

.office-location{
    font-size:0.8rem;
    opacity:0.7;
}

/* BADGES */
.office-stat-badge{
    position:absolute;
    background:#fff;
    color:#111;
    padding:12px 18px;
    border-radius:14px;
    display:flex;
    align-items:center;
    gap:10px;
    font-size:0.9rem;
    font-weight:600;
    box-shadow:0 10px 30px rgba(0,0,0,0.12);
}

.badge-top{
    top:20px;
    right:20px;
}

.badge-bottom{
    bottom:20px;
    left:20px;
}

.badge-top i{
    color:var(--secondary);
}

.badge-bottom i{
    color:#f59e0b;
}

/* TABLET */
@media(max-width:991px){

    .office-grid{
        grid-template-columns:1fr;
        gap:40px;
    }

    .office-image-side{
        order:-1;
    }

    .section-title{
        font-size:2rem;
        line-height:1.3;
    }

    .office-placeholder{
        min-height:400px;
    }
}

/* MOBILE */
@media(max-width:767px){

    .office-section{
        padding:60px 0;
    }

    .office-highlight-item{
        padding:16px;
        gap:14px;
    }

    .office-highlight-icon{
        width:46px;
        height:46px;
        min-width:46px;
        font-size:1rem;
    }

    .section-title{
        font-size:1.7rem;
    }

    .office-description,
    .office-highlight-item span{
        font-size:0.95rem;
    }

    .office-placeholder{
        min-height:300px;
    }

    .office-placeholder-inner i{
        font-size:3rem;
    }

    .office-stat-badge{
        position:static;
        margin-top:14px;
        width:max-content;
        max-width:90%;
    }

    .office-placeholder{
        padding:24px;
        flex-direction:column;
    }

    .badge-top,
    .badge-bottom{
        top:auto;
        right:auto;
        bottom:auto;
        left:auto;
    }
}
</style>
<script>
(function () {
    var img = document.getElementById('officeImg');
    if (!img) return;
    function showPlaceholder() {
        img.classList.add('d-none');
        var ph = document.getElementById('officePlaceholder');
        if (ph) ph.classList.remove('d-none');
    }
    img.addEventListener('error', showPlaceholder);
    if (img.complete && !img.naturalWidth) showPlaceholder();
}());
</script>

<section class="bg-light">
    <div class="container">
        <div class="text-center">
            <div class="section-label">Our Team</div>
            <h2 class="section-title">Meet the <span>Experts</span> Behind Your Growth</h2>
        </div>
        <div class="cards-grid">
            <?php
            $team = [
                ['name' => 'Narender Rawat', 'role' => 'CEO & Founder', 'image' => '/assets/images/team/arjun-verma.svg', 'bio' => 'Serial entrepreneur with 14+ years in digital marketing. Former Google Partner consultant.'],
        
                ['name' => 'Manas', 'role' => 'Sales & Media Buying', 'image' => '/assets/images/team/priya-malhotra.svg', 'bio' => '29+ years. 100+ brands across 30+ categories. India/ G China. Leadership roles across WPP, IPG, Publicis, Dentsu, Mudra Group. MRUC TechCom.'],
                ['name' => 'Anusha Naib', 'role' => 'Head of SEO', 'image' => '/assets/images/team/neha-singh.svg', 'bio' => '8+ years of SEO expertise. Has ranked 10,000+ keywords on page 1. Google Analytics certified.'],
                ['name' => 'Virender', 'role' => 'PPC Director', 'image' => '/assets/images/team/rohan-kapoor.svg', 'bio' => '12+ years Managed ₹250M+ in ad spend. Specializes in Google Ads, Meta Ads, and programmatic advertising.'],
                ['name' => 'Madhvi', 'role' => 'Content Strategy Lead', 'image' => '/assets/images/team/anjali-patel.svg', 'bio' => '20+ years, Award-winning content strategist with expertise in B2B and B2C content marketing campaigns.'],
                ['name' => 'Suraj', 'role' => 'Social Media Manager', 'image' => '/assets/images/team/vikram-sharma.svg', 'bio' => '10+ years of Experience, Managing multi-million follower brand accounts. Has managed 100+ brand campaigns.'],
                
            ];
            foreach ($team as $member): ?>
            <div class="card team-card">
                <div class="team-photo-frame">
                    <img src="<?= htmlspecialchars($member['image']) ?>"
                         alt="<?= htmlspecialchars($member['name']) ?> - <?= htmlspecialchars($member['role']) ?>"
                         class="team-photo"
                         loading="lazy">
                </div>
                <h3 style="margin-bottom:4px"><?= htmlspecialchars($member['name']) ?></h3>
                <div class="team-role"><?= htmlspecialchars($member['role']) ?></div>
                <p><?= htmlspecialchars($member['bio']) ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="text-center">
            <div class="section-label">Awards & Recognition</div>
            <h2 class="section-title">Recognized by <span>Industry Leaders</span></h2>
        </div>
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:24px">
            <?php
            $awards = [
                ['fas fa-trophy', '#FFD700', 'Best SEO Agency India 2024', 'Digital Marketing Awards'],
                ['fas fa-medal', '#C0C0C0', 'Top PPC Management Company', 'GoodFirms 2023'],
                ['fas fa-award', '#CD7F32', 'Excellence in Content Marketing', 'Content Marketing Summit'],
                ['fas fa-star', '#00CC88', 'Google Premier Partner', 'Verified 2024'],
            ];
            foreach ($awards as $award): ?>
            <div class="card" style="text-align:center">
                <div style="font-size:2.5rem;margin-bottom:12px"><i class="<?= $award[0] ?>" style="color:<?= $award[1] ?>"></i></div>
                <h4><?= htmlspecialchars($award[2]) ?></h4>
                <p style="font-size:0.85rem;color:var(--text-light)"><?= htmlspecialchars($award[3]) ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<div class="cta-banner">
    <div class="container text-center">
        <h2>Ready to Work With India's Best?</h2>
        <p>Join 500+ businesses that have chosen SeoLizards for their digital growth.</p>
        <div class="cta-banner-buttons">
            <a href="/contact/" class="btn btn-outline-white btn-lg"><i class="fas fa-phone"></i> Get a Free Consultation</a>
            <button class="btn btn-lg" style="background:rgba(255,255,255,0.15);color:#fff;border:2px solid rgba(255,255,255,0.4)" onclick="window.openModal('leadModal')">
                <i class="fas fa-chart-bar"></i> Free SEO Audit
            </button>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
