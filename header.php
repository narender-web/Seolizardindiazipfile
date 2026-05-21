<?php
require_once __DIR__ . '/config.php';
$page = current_page();
$nav_items = [
    'home'                   => ['label' => 'Home',               'href' => '/'],
    'seo-services'           => ['label' => 'SEO Services',        'href' => '/services/seo-services/'],
    'ugc-video'              => ['label' => 'UGC Video',            'href' => '/ugc-video'],
    'social-media-marketing' => ['label' => 'Social Media',        'href' => '/services/social-media-marketing/'],
    'ppc-advertising'        => ['label' => 'PPC Advertising',     'href' => '/services/pay-per-click-ppc-services-india/'],
    'content-marketing'      => ['label' => 'Content Marketing',   'href' => '/services/content-marketing-services/'],
    'web-development'        => ['label' => 'Web Development',     'href' => '/services/web-development-services-gurgaon/'],
    'about'                  => ['label' => 'About Us',            'href' => '/about-us/'],
    'contact'                => ['label' => 'Contact',             'href' => '/contact/'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($page_title ?? SITE_NAME . ' - ' . SITE_TAGLINE) ?></title>
    <meta name="description" content="<?= htmlspecialchars($meta_description ?? 'SeoLizards is India\'s premier digital marketing agency offering SEO, PPC, Social Media, and Web Development services.') ?>">
    <meta name="keywords" content="<?= htmlspecialchars($meta_keywords ?? 'SEO agency India, digital marketing, PPC, social media marketing, web development, SEO services') ?>">
    <meta name="robots" content="index, follow">
    <meta name="author" content="SeoLizards">
    <?php
$canonical = str_replace('.php', '', $_SERVER['REQUEST_URI']);
?>
 
<link rel="canonical" href="<?= htmlspecialchars(SITE_URL . $canonical) ?>">
    <!-- Open Graph -->
    <meta property="og:title" content="<?= htmlspecialchars($page_title ?? SITE_NAME) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($meta_description ?? 'India\'s premier digital marketing agency') ?>">
    <meta property="og:url" content="<?= htmlspecialchars(SITE_URL . $_SERVER['REQUEST_URI']) ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?= SITE_URL ?>/assets/images/og-image.jpg">
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($page_title ?? SITE_NAME) ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($meta_description ?? 'India\'s premier digital marketing agency') ?>">
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="/assets/images/favicon.png">
    <!-- Critical CSS (above the fold) -->
    <style>
        :root{--primary:#1a1a1a;--primary-dark:#000000;--secondary:#00CC88;--dark-nav:#050505;--text:#333333;--bg-white:#ffffff;--font-main:'Inter',sans-serif;--transition:all .3s cubic-bezier(.4,0,.2,1)}
        *,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
        body{font-family:var(--font-main);color:var(--text);background:var(--bg-white);line-height:1.6;overflow-x:hidden}
        .container{max-width:1200px;margin:0 auto;padding:0 24px}
        .top-bar{background:var(--dark-nav);color:#aabbcc;padding:8px 0;font-size:.82rem}
        .top-bar .container{display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:8px}
        .top-bar-left span{margin-right:20px;display:inline-flex;align-items:center;gap:6px}
        .top-bar-right a{color:#aabbcc;margin-left:12px;font-size:.8rem;transition:var(--transition)}
        .main-header{position:sticky;top:0;z-index:1000;background:var(--bg-white);box-shadow:0 2px 20px rgba(0,0,0,.08)}
        .navbar{display:flex;align-items:center;justify-content:space-between;padding:16px 0;gap:24px}
        .logo{display:flex;align-items:center;flex-shrink:0}
        .nav-menu{display:flex;align-items:center;gap:4px;list-style:none}
        .nav-link{display:flex;align-items:center;gap:4px;padding:10px 14px;color:var(--text);font-weight:500;font-size:.9rem;border-radius:8px;text-decoration:none}
        .hamburger{display:none}
        @media(max-width:991px){.nav-menu{display:none}}
    </style>
    <!-- Resource hints -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <!-- Main CSS -->
    <link rel="preload" href="/assets/css/style.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <!-- Google Fonts -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@400;500;600;700;800&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <!-- Font Awesome -->
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" as="style" crossorigin="anonymous" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="/assets/css/style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@400;500;600;700;800&display=swap">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    </noscript>
    <!-- Schema.org -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "SeoLizards",
        "url": "https://seolizards.in",
        "logo": "/assets/images/logo.png",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "<?= SITE_PHONE ?>",
            "contactType": "customer service"
        },
        "sameAs": [
            "<?= FACEBOOK_URL ?>",
            "<?= TWITTER_URL ?>",
            "<?= LINKEDIN_URL ?>",
            "<?= INSTAGRAM_URL ?>"
        ]
    }
    </script>
</head>
<body>
<!-- Top Bar -->
<div class="top-bar">
    <div class="container">
        <div class="top-bar-left">
            <span><i class="fas fa-envelope"></i> <?= SITE_EMAIL ?></span>
            <span><i class="fas fa-phone"></i> <?= SITE_PHONE ?></span>
        </div>
        <div class="top-bar-right">
            <a href="<?= FACEBOOK_URL ?>" target="_blank" rel="noopener noreferrer" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="<?= TWITTER_URL ?>" target="_blank" rel="noopener noreferrer" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
            <a href="<?= LINKEDIN_URL ?>" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            <a href="<?= INSTAGRAM_URL ?>" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</div>



<!-- Navigation -->
<header class="main-header" id="main-header">
    <div class="container">
        <nav class="navbar" aria-label="Main navigation">
            <a href="/" class="logo" aria-label="SeoLizards Home">
                <img src="/assets/images/logo.png" alt="SeoLizards" Width= "130"height="52" style="display:block">
            </a>
            <button class="hamburger" id="hamburger" aria-label="Toggle navigation" aria-expanded="false" aria-controls="nav-menu">
                <span></span><span></span><span></span>
            </button>
            <ul class="nav-menu" id="nav-menu" role="menubar">
                <li class="nav-item has-mega" role="none">
                    <a href="#" class="nav-link" role="menuitem" aria-haspopup="true">Services <i class="fas fa-chevron-down"></i></a>
                    <div class="mega-menu">
                        <div class="mega-menu-inner container">
                            <div class="mega-col">
                                <div class="mega-col-title"><i class="fas fa-search"></i> SEO Services</div>
                                <a href="/services/seo-services/" class="mega-link mega-link-overview">All SEO Services →</a>
                                <a href="/seo-services/seo-consultancy" class="mega-link">SEO Consultancy</a>
                                <a href="/services/enterprise-seo-services/" class="mega-link">Enterprise SEO</a>
                                <a href="/services/e-commerce-seo/" class="mega-link">Ecommerce SEO</a>
                                <a href="/seo-services/technical-seo" class="mega-link">Technical SEO</a>
                                <a href="/services/local-seo/" class="mega-link">Local SEO &amp; GMB</a>
                                <a href="/ai-seo-services/" class="mega-link">AI SEO Services</a>
                                <a href="/seo-services/aeo-services" class="mega-link">AEO Services</a>
                                <a href="/seo-services/chatgpt-perplexity-gemini-optimisation" class="mega-link">ChatGPT/Perplexity/Gemini</a>
                                <a href="/seo-services/geo-optimisation" class="mega-link">GEO Optimisation</a>
                                <a href="/seo-services/llm-optimization" class="mega-link">LLM Optimization</a>
                                <a href="/seo-services/link-building" class="mega-link">Link Building</a>
                            </div>
                            <div class="mega-col">
                                <div class="mega-col-title"><i class="fab fa-instagram"></i> Social Media</div>
                                <a href="/services/social-media-marketing/" class="mega-link mega-link-overview">All Social Media →</a>
                                <a href="/social-media/instagram-marketing" class="mega-link">Instagram Marketing</a>
                                <a href="/social-media/linkedin-marketing" class="mega-link">LinkedIn Marketing</a>
                                <a href="/social-media/facebook-marketing" class="mega-link">Facebook Marketing</a>
                                <a href="/social-media/tiktok-marketing" class="mega-link">TikTok Marketing</a>
                                <a href="/social-media/snapchat-marketing" class="mega-link">Snapchat Marketing</a>
                                <a href="/social-media/twitter-x-marketing" class="mega-link">Twitter/X Marketing</a>
                                <div class="mega-col-title" style="margin-top:16px"><i class="fas fa-pen-nib"></i> Content Marketing</div>
                                <a href="/services/content-marketing-services/" class="mega-link mega-link-overview">All Content Marketing →</a>
                                <a href="/content-marketing/guest-post-services" class="mega-link">Guest Post Services</a>
                                <a href="/content-marketing/pr-services" class="mega-link">PR Services</a>
                                <div class="mega-col-title" style="margin-top:16px"><i class="fas fa-mobile-alt"></i> App Marketing</div>
                                <a href="/services/aso/" class="mega-link">ASO Services</a>
                                <a href="/app-marketing/app-cro-optimisation" class="mega-link">App CRO Optimisation</a>
                            </div>
                            <div class="mega-col">
                                <div class="mega-col-title"><i class="fas fa-ad"></i> PPC Services</div>
                                <a href="/services/pay-per-click-ppc-services-india/" class="mega-link mega-link-overview">All PPC Services →</a>
                                <a href="/ppc/meta-advertising" class="mega-link">Meta Advertising</a>
                                <a href="/ppc/google-ads" class="mega-link">Google Ads</a>
                                <a href="/ppc/youtube-marketing" class="mega-link">YouTube Marketing</a>
                                <a href="/ppc/amazon-advertising" class="mega-link">Amazon Advertising</a>
                                <div class="mega-col-title" style="margin-top:16px"><i class="fas fa-database"></i> Mar Tech / Data</div>
                                <a href="/martech/shopify-cro" class="mega-link">Shopify CRO</a>
                                <a href="/martech/b2b-cro" class="mega-link">B2B CRO</a>
                                <a href="/martech/cdp-services" class="mega-link">CDP Services</a>
                                <a href="/martech/agentic-ai-marketing" class="mega-link">Agentic AI for Marketing</a>
                                <div class="mega-col-title" style="margin-top:16px"><i class="fas fa-handshake"></i> Partner Programs</div>
                                <a href="/partner/seo-reseller" class="mega-link">SEO Reseller &amp; White Label</a>
                                <a href="/partner/affiliate-program" class="mega-link">Affiliate Program</a>
                                <a href="/partner/outsource-seo" class="mega-link">Outsource SEO</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item has-dropdown" role="none">
                    <a href="/seo-industries/" class="nav-link" role="menuitem" aria-haspopup="true">Industries <i class="fas fa-chevron-down"></i></a>
                    <ul class="dropdown" role="menu">
                      
                        <li role="none"><a href="/industries/seo-for-enterprises" role="menuitem"><i class="fas fa-building"></i> SEO for Enterprises</a></li>
                       
                        <li role="none"><a href="/industries/seo-for-doctors" role="menuitem"><i class="fas fa-user-md"></i> SEO for Doctors</a></li>
                    
                        <li role="none"><a href="/industries/seo-for-real-estate" role="menuitem"><i class="fas fa-home"></i> SEO for Real Estate</a></li>
                    
                        <li role="none"><a href="/industries/seo-for-ngo" role="menuitem"><i class="fas fa-hands-helping"></i> SEO for NGO</a></li>
                      
                        <li role="none"><a href="/industries/seo-for-astrology" role="menuitem"><i class="fas fa-star"></i> SEO for Astrology</a></li>
                      
                        <li role="none"><a href="/industries/seo-for-interior-designers" role="menuitem"><i class="fas fa-couch"></i> SEO for Interior Designers</a></li>
                        <li role="none"><a href="/industries/seo-for-hotels" role="menuitem"><i class="fas fa-hotel"></i> SEO for Hotels</a></li>
                        <li role="none"><a href="/industries/seo-for-spa" role="menuitem"><i class="fas fa-spa"></i> SEO for SPA</a></li>
                        <li role="none"><a href="/industries/seo-for-dental" role="menuitem"><i class="fas fa-tooth"></i> SEO for Dental</a></li>
                        <li role="none"><a href="/industries/seo-for-lawyers" role="menuitem"><i class="fas fa-gavel"></i> SEO for Lawyers</a></li>
                    </ul>
                </li>
                <li class="nav-item" role="none"><a href="/about-us/" class="nav-link <?= $page === 'about' ? 'active' : '' ?>" role="menuitem">About</a></li>
                <li class="nav-item" role="none"><a href="/contact/" class="nav-link <?= $page === 'contact' ? 'active' : '' ?>" role="menuitem">Contact</a></li>
                <li class="nav-item" role="none">
                    <a href="/free-seo-audit" class="btn btn-primary nav-cta" role="menuitem">
                        <i class="fas fa-chart-bar"></i> Free SEO Audit
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>
