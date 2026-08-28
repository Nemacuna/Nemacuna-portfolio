<section id="about" class="section about">
    <div class="section-heading">
        <span class="section-kicker">About Me</span>
        <h2 class="section-title">Who I Am</h2>
    </div>

    <div class="about-grid">
        <div class="about-portrait">
            <div class="portrait-frame portrait-frame-large">
                <img src="{{ $profile['avatar'] }}" alt="Portrait of {{ $profile['name'] }}">
            </div>
        </div>
        <div class="about-content">
            <h3 class="about-name">{{ $profile['name'] }}</h3>
            <p class="about-role">{{ $profile['role'] }}</p>
            <p class="about-bio">{{ $profile['bio'] }}</p>

            <ul class="about-details">
                <li><span class="detail-label">Email:</span> <a href="mailto:{{ $profile['email'] }}">{{ $profile['email'] }}</a></li>
                <li><span class="detail-label">Phone:</span> <a href="tel:{{ $profile['phone'] }}">{{ $profile['phone'] }}</a></li>
                <li><span class="detail-label">Location:</span> {{ $profile['location'] }}</li>
            </ul>
        </div>
    </div>
</section>
