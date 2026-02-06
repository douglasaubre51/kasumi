<title>Event</title>

<div class="main">
    <div class="left">
        <img src="{{ $event->cover_image_url }}" />
    </div>

    <div class="right">
        <span class="title">{{$event->title}}</span>
        <span class="details">{{$event->details}}</span>
        <span class="date">Held at: {{$event->event_date}}</span>
    </div>
</div>
</div>

<style>
    .main {
        display: grid;
        grid-template-columns: 1fr 2fr;
        gap: 2em;
        height: 100%;
        align-items: center;
    }

    img {
        object-fit: cover;
        border-radius: 20px;
        width: 100%;
    }

    .right {
        display: flex;
        flex-direction: column;
    }

    .title {
        font-size: 4rem;
        font-weight: 800;
    }

    .details {
        font-size: 2rem;
    }

    @media screen and (max-width:1000px) {
        .main {
            display: flex;
            flex-direction: column;
            gap: 2em;
        }
    }
</style>