<section class="skills-section">
    <div class="skills-container">
        <h2 class="skills-title">Skills</h2>
        
        <p class="skills-subtitle">
            Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.
        </p>
        
        <div class="skills-grid">
            @foreach ($skills as $skill)
                <div class="skill-item">
                    <div class="skill-info">
                        <span class="skill-name">{{ $skill->skill }}</span>
                        <span class="skill-percentage">{{ $skill->pourcentage }}%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: {{ $skill->pourcentage }}%"></div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>