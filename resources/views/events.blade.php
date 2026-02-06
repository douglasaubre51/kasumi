<title>Events</title>

<x-layouts::app>
    <div class="main">
        <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->

        <div class="event-contain">
            @foreach($events as $event)
                <a href="{{ url(path: '/event-details/' . $event->id)  }}">
                    <div class="event-card">
                        <div class="event-details">
                            <span class="card-title">{{$event->title}}</span>
                            <span class="card-details">{{$event->details}}</span>
                            <span class="card-date" style="margin-top: 8px;">Held at: {{$event->event_date}}</span>
                        </div>

                        <img class="card-img" src="{{$event->cover_image_url}}" />
                    </div>
                </a>
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
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 1em;
    }

    .event-card {
        display: flex;
        flex-direction: column;
        gap: 4px;
        max-height: fit-content;
        border-radius: 16px;
        padding: 10px;
    }

    .event-card:hover {
        background-color: lightgrey;
    }

    .event-details {
        display: flex;
        flex-direction: column;
    }

    .card-title {
        font-size: 2rem;
        font-weight: 500;
        line-height: 1;
        text-overflow: ellipse;
    }

    .card-details {
        font-size: 1rem;
        height: 30px;
        overflow: hidden;

        color: black;
    }

    .card-date {
        font-size: 13px;
    }

    .card-img {
        border-radius: 10px;
        height: 200px;
        object-fit: cover;

    }

    @media screen and (max-width:1000px) {
        .event-contain {
            grid-template-columns: 1fr;
            gap: 3em;
        }

        .card-title {
            font-size: 6rem;
            font-weight: 900;
        }

        .card-details {
            font-size: 3rem;
            height: 4rem;
            overflow: hidden;
        }

        .card-date {
            padding-top: 20px;
            font-size: 2rem;
        }

        .card-img {
            width: 100%;
            height: 400px;
            border-radius: 24px;
        }
    }
</style>