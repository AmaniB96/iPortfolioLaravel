<section id="portfolio" class="portfolio-section">
    <h2 class="portfolio-title">Portfolio</h2>
    
    <p class="portfolio-subtitle">
        Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.
    </p>
    
    <div class="portfolio-filters">
        <ul>
            <li data-filter="*" class="filter-active">ALL</li>
            <li data-filter=".filter-app">APP</li>
            <li data-filter=".filter-web">WEB</li>
            <li data-filter=".filter-card">CARD</li>
        </ul>
    </div>
    
    <div class="portfolio-grid">
        @foreach ($portfolio as $item)
            <div class="portfolio-item filter-{{ $item->filter }}">
                <div class="portfolio-img">
                    <img src="{{ $item->img }}" alt="Portfolio Image">
                </div>
            </div>
        @endforeach
    </div>
</section>