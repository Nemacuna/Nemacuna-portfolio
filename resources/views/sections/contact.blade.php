<section id="contact" class="section contact">
    <div class="section-heading">
        <span class="section-kicker">Let's Talk</span>
        <h2 class="section-title">Contact</h2>
        <p class="section-subtitle">Have a project in mind or just want to say hello? Reach out through any channel below.</p>
    </div>

    <div class="contact-grid">
        <a href="mailto:{{ $profile['email'] }}" class="contact-card card">
            <div class="contact-icon">@include('partials.icon-mail')</div>
            <h3 class="contact-title">Email</h3>
            <p class="contact-value">{{ $profile['email'] }}</p>
        </a>
        <a href="tel:{{ $profile['phone'] }}" class="contact-card card">
            <div class="contact-icon"><i class="fas fa-phone" aria-hidden="true"></i></div>
            <h3 class="contact-title">Phone</h3>
            <p class="contact-value">{{ $profile['phone'] }}</p>
        </a>
        <a href="{{ $profile['github'] }}" target="_blank" rel="noopener" class="contact-card card">
            <div class="contact-icon">@include('partials.icon-github')</div>
            <h3 class="contact-title">GitHub</h3>
            <p class="contact-value">View my repositories</p>
        </a>
    </div>
</section>
