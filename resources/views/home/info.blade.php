<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
@include('admin.comment.home_index')
<body class="single">
<div id="divAll">
    <div id="divPage">
        <div id="divMiddle">
            <div id="divTop">

                <!-- <h3 id="BlogSubTitle">www.Youmew.com</h3> -->
            </div>
            <div id="divNavBar">
                @include('home.partials.menu')
            </div>
            <div id="divMain">
                <div class="post single-post cate0 auth0">
                    <h4 class="post-date">
                        <small>{{ date('Y-m-d',$article->w_date) }}</small>
                    </h4>
                    <h2 class="post-title">{{ $article->title }}</h2>
                    <div class="post-body">
                        @if($article->image)
                            <p>
                                <img src="/{{ $article->image }}" alt="" style="max-width: 600px">
                            </p>
                        @endif
                        {!! htmlspecialchars_decode($article->content ) !!}
                    </div>
                    <h6 class="post-footer"></h6>
                </div>
            </div>

            <div id="divBottom">
                <h3 id="BlogCopyRight">鄂ICP备11002139号-1</h3>
                <h4 id="BlogPowerBy">Powered By <a href="http://www.rainbowsoft.org/" title="RainbowSoft Studio Z-Blog"
                                                   target="_blank">Z-Blog</a>　本站遵循<a rel="license" target="_blank"
                                                                                     title="署名-非商业性使用-禁止演绎 3.0 中国大陆许可协议"
                                                                                     href="http://creativecommons.org/licenses/by-nc-nd/3.0/cn/">
                        CC BY-NC-ND 3.0 CN协议 </a>。</h4>
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>
<!-- dd BEGIN -->
<script language="JavaScript1.2">
    var typ = ["marginTop", "marginLeft"], rangeN = 10, timeout = 0;
    function shake(o, end) {
        var range = Math.floor(Math.random() * rangeN);
        var typN = Math.floor(Math.random() * typ.length);
        o["style"][typ[typN]] = "" + range + "px";
        var shakeTimer = setTimeout(function () {
            shake(o, end)
        }, timeout);
        o[end] = function () {
            clearTimeout(shakeTimer)
        };
    }
</script>
<!-- dd END -->
</body>
</html>
<!-- 2016-7-21 10:39:49 -->