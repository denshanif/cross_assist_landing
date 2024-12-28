<section>
    <div class="container px-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6 {{ $order ?? '' }}">
                <div class="p-5"><img class="img-fluid rounded-circle" src="{{ asset($image) }}" alt="..." /></div>
            </div>
            <div class="col-lg-6 {{ $reverseOrder ?? '' }}">
                <div class="p-5">
                    <h2 class="display-4">{{ $title }}</h2>
                    <p>{{ $description }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
