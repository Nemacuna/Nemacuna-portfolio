<section id="certificates" class="section certificates">
    <div class="section-heading">
        <span class="section-kicker">Credentials</span>
        <h2 class="section-title">Certificates</h2>
        <p class="section-subtitle">Professional certifications and courses I have completed. Click a certificate to view it.</p>
    </div>

    <div class="certificates-grid">
        @foreach ($certificates as $cert)
            <article class="certificate-card card">
                <a href="{{ $cert['link'] }}" class="certificate-image-link js-cert-open" data-image="{{ $cert['image'] }}" data-title="{{ $cert['title'] }}">
                    <img src="{{ $cert['image'] }}" alt="{{ $cert['title'] }}" class="certificate-image">
                </a>
                <div class="certificate-body">
                    <div class="certificate-top">
                        <div class="certificate-icon">
                            <i class="fas fa-award" aria-hidden="true"></i>
                        </div>
                        <span class="certificate-year">{{ $cert['year'] }}</span>
                    </div>
                    <h3 class="certificate-title">{{ $cert['title'] }}</h3>
                    <p class="certificate-issuer">{{ $cert['issuer'] }}</p>
                    <p class="certificate-detail">{{ $cert['detail'] }}</p>
                </div>
            </article>
        @endforeach
    </div>

    <div class="cert-lightbox" id="certLightbox" role="dialog" aria-modal="true" aria-hidden="true" aria-label="Certificate viewer">
        <button class="cert-lightbox-close" id="certLightboxClose" aria-label="Close certificate viewer">
            <i class="fas fa-xmark"></i>
        </button>
        <div class="cert-lightbox-content">
            <img src="" alt="Certificate" class="cert-lightbox-image" id="certLightboxImage">
            <p class="cert-lightbox-title" id="certLightboxTitle"></p>
        </div>
    </div>
</section>
