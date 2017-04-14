<style>
    .notify-message {
        position: fixed;
        width: 340px;
        min-height: 1em;
        left: 50%;
        top: -55px;
        transform: translateX(-50%);
        transition: opacity .3s, top .9s;
        background: #f8f8f9;
        padding: 1.2em 2.2em;
        opacity: 0;
        overflow: hidden;
        line-height: 1.4285em;
        border-radius: 0.48971429rem;
    }

    .notify-message .notify-close {
        cursor: pointer;
        position: absolute;
        margin: 0em;
        top: 0.48575em;
        right: 0.5em;
        opacity: 0.7;
        transition: opacity 0.1s ease;
    }

    .notify-message .notify-box {
        display: block;
        text-align: center;
    }

    .notify-message .notify-box .header-content {
        font-size: 18px;
        font-weight: 500;
    }

    .notify-message.success {
        background-color: #fcfff5;
        color: #2c662d;
        box-shadow: 0px 0px 0px 1px #a3c293 inset, 0px 0px 0px 0px rgba(0, 0, 0, 0);
    }

    .notify-message.info {
        background-color: #F8FFFF;
        color: #276F86;
        box-shadow: 0 0 0 1px #A9D5DE inset, 0 0 0 0 transparent;
    }

    .notify-message.warning {
        background-color: #FFFAF3;
        color: #573A08;
        box-shadow: 0 0 0 1px #C9BA9B inset, 0 0 0 0 transparent;
    }

    .notify-message.error {
        background-color: #FFF6F6;
        color: #9F3A38;
        box-shadow: 0 0 0 1px #E0B4B4 inset, 0 0 0 0 transparent;
    }
</style>

@if(Session::has('flash_notification.message'))
    <div class="notify-message {{ session('flash_notification.type') }}">
        <div class="notify-box">
            <div class="header-content">{{ session('flash_notification.message') }}</div>
        </div>
        <i class="fa fa-times notify-close"></i>
    </div>
    <script>
        $('.notify-message').animate({top: '22px', opacity: 1}).fadeIn('fast').delay(3000).fadeOut(500);
        $('.notify-close').click(function () {
            $('.notify-message').hide();
        });
    </script>
@endif