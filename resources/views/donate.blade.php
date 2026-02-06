<title>Donate</title>

<x-layouts::app>
    <div class="main">
        <img src='kasumi_thankyou_qrcode.jpeg' />
        <span class="caption">scan the QR code to donate</span>
    </div>
</x-layouts::app>

<style>
    .main {
        margin: 50px 10px;
        display: flex;
        flex-direction: column;
        gap: 20px;

        align-items: center;
    }

    .caption {
        font-size: 24px;
    }

    .display {
        font-size: 48px;
    }

    img {
        width: 30%;
    }

    @media screen and (max-width:1000px) {
        img {
            max-width: 300px;
        }
    }
</style>