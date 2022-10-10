<section class="portfolio text-center" id="portfolio">
    <div class="container po">
        <h2>Portfolio</h2>
        <span class="bg-dark"></span>
        <ul class="shuffle list-unstyled d-flex justify-content-center flex-wrap">
            <li class="active" data-filter="all">All</li>
            @foreach ($categories as $category)
                <li data-filter="{{ str_replace(' ', '_', $category->name) }}" class="two">{{ $category->name }}
                </li>
            @endforeach

        </ul>
    </div>
    <div class="imgs-container">
        @foreach ($projects as $project)
            <div class="box {{ str_replace(' ', '_', $project->category->name) }}">
                <img src="{{ $project->getFirstMediaUrl('images') }}" alt="" />
                <div class="caption">
                    <h4>{{ $project->category->name }}</h4>
                </div>
            </div>
        @endforeach
    </div>
</section>
