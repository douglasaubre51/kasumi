<title>Events</title>

<x-layouts::app>
    <div class="main">
        <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->

        <div class="event-contain">
            @foreach($events as $event)
                <div class="event-card">
                    <div class="event-details">
                        <span class="card-title">{{$event->title}}</span>
                        <span class="card-details">{{$event->details}}</span>
                        <span class="card-date">held at: {{$event->event_date}}</span>
                    </div>

                    <img class="card-img" src="{{$event->cover_image_url}}" />
                </div>
            @endforeach
        </div>

    </div>
</x-layouts::app>

<style>
    .main {
        margin: 50px 10px 10px 10px;
    }

    .event-contain {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 4px;
    }

    .event-card {
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    .event-details {
        display: flex;
        flex-direction: column;
    }

    .card-title {
        font-size: 82px;
        line-height: 100%;
        text-overflow: clip;
    }

    .card-details {
        font-size: 18px;
    }

    .card-date {
        font-size: 13px;
    }

    .card-img {
        border-radius: 10px;
    }
</style>