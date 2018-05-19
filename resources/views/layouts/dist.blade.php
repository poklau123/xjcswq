<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="虚假陈述,披露,赔偿,上市公司,信息披露违法,索赔,诉讼,维权,起诉,股东,股民,虚假记载,重大遗漏,不当披露,误导性陈述,证监会,处罚,投资差额损失,代理,律师,法院" >

        <title>虚假陈述维权网</title>

        <!-- Styles -->
        @yield('links')
        <link rel="stylesheet" href="{{ asset('css/dist.css') }}">
    </head>
    <body>
        <div class="header">
            <div class="title">
                <div class="box">
                    <div class="name">虚假陈述维权网</div>
                    <span class="sub">Misrepresentation Litigation</span>
                </div>
            </div>
            <div class="nav">
                <ul>
                    <li><a class="name" href="/">首页</a></li>
                    <li><a class="name" href="/list?type=information">动态</a></li>
                    <li><a class="name" href="/list?type=case">案例分析</a></li>
                    <li><a class="name" href="/list?type=claim">索赔名单</a></li>
                    <li><a class="name" href="/static/contact">联系我们</a></li>
                </ul>
            </div>
        </div>
        <div class="main">
            <div class="container">
                @yield('content')
            </div>
        </div>
        <div class="footer">
            <span class="node">粤ICP备18031461号-1</span>
            <span class="node">©2018 虚假陈述集结号</span>
            <span class="node">
                <span>友情链接:</span>
                <a href="http://www.vtlaw.cn/cn/index.html" target="_blank">万商天勤律师事务所</a>
                <a href="http://www.dslegalcapital.com" target="_blank">鼎颂商事争议解决支持平台</a>
            </span>
        </div>
        <div class="bg"></div>
    </body>
    <script src="/js/jquery.min.js"></script>
    <script src="{{ asset('/js/dist.js') }}"></script>
    @yield('scripts')
</html>
