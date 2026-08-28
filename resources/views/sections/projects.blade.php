<section id="projects" class="section projects">
    <div class="section-heading">
        <span class="section-kicker">My Work</span>
        <h2 class="section-title">Projects</h2>
        <p class="section-subtitle">A selection of things I have built.</p>
    </div>

    <div class="projects-grid">
        @foreach ($projects as $project)
            <article class="project-card card">
                <a href="{{ $project['link'] }}" target="_blank" rel="noopener" class="project-image-link">
                    <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" class="project-image">
                </a>
                <div class="project-body">
                    <h3 class="project-title">{{ $project['title'] }}</h3>
                    <p class="project-description">{{ $project['description'] }}</p>
                    <div class="project-tech">
                        @foreach ($project['tech'] as $tech)
                            <span class="tech-tag">{{ $tech }}</span>
                        @endforeach
                    </div>
                </div>
            </article>
        @endforeach
    </div>
</section>
