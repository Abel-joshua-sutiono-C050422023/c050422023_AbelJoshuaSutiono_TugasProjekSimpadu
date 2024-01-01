
    @push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>All Schedules</h1>
                <ul>
                    @foreach ($schedules as $schedule)
                    <li>{{$schedule->title}}</li>

                    @endforeach
                </ul>

            </div>
        </section>
    </div>
