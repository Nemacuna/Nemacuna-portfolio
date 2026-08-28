<section id="home" class="section hero">
    <div class="hero-inner">
        <div class="hero-text">
            <span class="hero-kicker">Welcome to my portfolio</span>
            <h1 class="hero-title">Hi, I'm <span class="highlight">{{ $profile['name'] }}</span></h1>
            <p class="hero-role">{{ $profile['role'] }}</p>
            <p class="hero-tagline">{{ $profile['tagline'] }}</p>
            <div class="hero-actions">
                <a href="#projects" class="btn btn-primary"><i class="fas fa-code"></i> View Projects</a>
                <a href="#contact" class="btn btn-outline"><i class="fas fa-paper-plane"></i> Get in Touch</a>
            </div>
        </div>
        <div class="hero-portrait">
            <div class="portrait-frame">
                <img src="{{ $profile['avatar'] }}" alt="Portrait of {{ $profile['name'] }}">
            </div>
        </div>
    </div>
    <a href="#about" class="scroll-down" aria-label="Scroll to About section">
        <i class="fas fa-angle-down"></i>
    </a>
</section>
