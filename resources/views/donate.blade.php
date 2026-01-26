<title>Donate</title>

<x-layouts::app>
    <div class="main">
        <img src='kasumi_thankyou_qrcode.jpeg' style="width:300px;height:300px;" />
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
</style>