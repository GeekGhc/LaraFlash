<style>
    .notify-message {
        position: fixed;
        width: 340px;
        min-height: 1em;
        margin: 1em 0em;
        background: #f8f8f9;
        padding: 1em 1.5em;
        line-height: 1.4285em;
        border-radius: 0.28571429rem;
        right: -388px;
        top: 16px;
        transition: opacity .3s, transform .3s, right .3s;
    }

    .notify-message > .notify-close {
        cursor: pointer;
        position: absolute;
        margin: 0em;
        top: 0.78575em;
        right: 0.5em;
        opacity: 0.7;
        transition: opacity 0.1s ease;
    }

    .notify-message .notification-icon {
        display: block;
        width: 36px;
        height: 36px;
        font-size: 2.4em;
        float: left;
        vertical-align: middle;
        opacity: 0.8;
        margin-right: 10px;
        flex: 0 0 auto;
    }

    .notify-message .notify-box {
        display: block;
        margin-left: 46px;
    }

    .notify-message .notify-box .header {
        font-weight: 600;
        font-size: 18px;
        letter-spacing: 4px;
        margin-bottom: 4px;
        text-align: left;
    }
    .notify-message .notify-box .content{
        text-align: left !important;
    }

    .notify-message .notify-box .header.success {
        color: #1A531B;
    }

    .notify-message .notify-box .header.info {
        color: #0E566C;
    }

    .notify-message .notify-box .header.warning {
        color: #794B02;
    }

    .notify-message .notify-box .header.error {
        color: #912D2B;
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
        @if(session('flash_notification.type')=='success')
            <i class="notification-icon fa fa-check-circle"></i>
            <i class="fa fa-times notify-close"></i>
            <div class="notify-box">
                <div class="header {{session('flash_notification.type')}}">成功</div>
                <div class="content">{{ session('flash_notification.message') }}</div>
            </div>
        @elseif(session('flash_notification.type')=='info')
            <i class="notification-icon fa fa-info-circle"></i>
            <i class="fa fa-times notify-close"></i>
            <div class="notify-box">
                <div class="header {{session('flash_notification.type')}}">信息</div>
                <div class="content">{{ session('flash_notification.message') }}</div>
            </div>
        @elseif(session('flash_notification.type')=='warning')
            <i class="notification-icon fa fa-exclamation-circle"></i>
            <i class="fa fa-times notify-close"></i>
            <div class="notify-box">
                <div class="header {{session('flash_notification.type')}}">警告</div>
                <div class="content">{{ session('flash_notification.message') }}</div>
            </div>
        @elseif(session('flash_notification.type')=='error')
            <i class="notification-icon fa fa-times-circle"></i>
            <i class="fa fa-times notify-close"></i>
            <div class="notify-box">
                <div class="header {{session('flash_notification.type')}}">错误</div>
                <div class="content">{{ session('flash_notification.message') }}</div>
            </div>
        @endif

    </div>
    <script>
        $('.notify-message').animate({right: '26px', opacity: 1}).fadeIn('fast').delay(3000).animate({
            right: '-388px',
            opacity: 1
        });
        $('.notify-close').click(function () {
            $('.notify-message').hide();
        });
    </script>
@endif