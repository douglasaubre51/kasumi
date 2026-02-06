<nav class='navbar'>
    <a href="{{ url('/')  }}">Gallery</a>
    <a href="{{ url('/events')  }}">Events</a>
    <a href="{{ url('/donate')  }}">Donate</a>
    <a href="{{ url('/about')  }}">About</a>
</nav>

<style>
    a {
        text-decoration: none;
    }

    .navbar {
        display: flex;
        flex-direction: row;
        justify-content: flex-end;
        align-items: end;
        gap: 16px;
    }

    .navbar a {
        color: black;
        font-size: 18px;
    }

    .navbar a:hover {
        color: green;
    }

    @media screen and (max-width:1000px) {
        .navbar {
            justify-content: center;
            gap: 30px;
        }

        .navbar a {
            font-size: 2.5rem;
        }
    }
</style>