<!DOCTYPE html>
<html xml:lang="zh-CN" lang="zh-CN">
@include('admin.comment.home_index')
<link rel="stylesheet" href="{{ asset('plugins/bootstrap/bootstrap.css') }}">
<body class="multi default">
<div id="divAll">
    <div id="divPage">
        <div id="divMiddle">
            <div id="divTop">
                <h1 id="BlogTitle"><a href="#"><img src="/images/LOGO.gif" alt="个人主页"
                                                    onMouseover="shake(this,'onmouseout')"/></a>
                </h1>
                <!-- <h3 id="BlogSubTitle">www.Youmew.com</h3> -->
            </div>
            <div id="divNavBar">
                @include('home.partials.menu')
            </div>
            <div id="divMain">
                @foreach($articles as $article)
                    <div class="post multi-post cate2 auth1">
                        <h4 class="post-date">{{ date('Y年m月d日',$article->w_date) }}</h4>
                        <h2 class="post-title"><a
                                    href="{{ route('article',['id'=>$article->id]) }}">{{ $article->title }}</a></h2>
                        <div class="post-body">
                            <p>
                                {{ mb_strimwidth(strip_tags(htmlspecialchars_decode($article->content)),0,200,'...') }}
                            </p>
                            @if($article->image)
                            <p>
                                <a href="{{ route('article',['id'=>$article->id]) }}">
                                    <img src="/{{ $article->image }}" title="{{ $article->title }}"
                                                                   alt="{{ $article->title }}"/>
                                </a>
                            </p>
                            @endif
                        </div>
                        <h6 class="post-footer">
                            浏览:<span id="spn71"> {{ intval($article->mun_read) }}</span>
                            | <a href="{{ route('article',['id'=>$article->id]) }}">阅读全文 > </a>
                        </h6>
                    </div>
                @endforeach

                <div class="post pagebar">
                   {{ $articles->links() }}
                </div>
            </div>
            <div id="divSidebar">

                <a href="/user" style="margin-left: 200px;border-bottom: 20px">登录</a>

                <dl class="function" id="divComments">
                    <dt class="function_t">最新留言</dt>
                    <dd class="function_c">
                        <ul>
                            <li js="text-overflow:ellipsis;">
                                <a href="#" title="2017-7-14 20:22:16 post by 卢松松博客">说的很不错呢！</a>
                            </li>
                            <li js="text-overflow:ellipsis;">
                                <a href="#" title="2016-7-10 9:48:23 post by 巴力迅猛龙">谢谢博主分享 支持</a>
                            </li>
                            <li js="text-overflow:ellipsis;">
                                <a href="#" title="2017-2-8 17:20:43 post by 个人博客">第一次过来看看</a></li>
                            <li js="text-overflow:ellipsis;">
                                <a href="#" title="20176-3-2 17:08:25 post by 免费小说在线阅读">懂得取舍吧，最好留有后路、</a></li
                            >
                            <li js="text-overflow:ellipsis;">
                                <a href="#" title="2017-3-5 13:12:38 post by 免费小说在线阅读">靠自己丰衣足食！</a>
                            </li>
                            <li js="text-overflow:ellipsis;">
                                <a href="#" title="2017-3-31 10:53:55 post by 贝蒂斯橄榄油总代理">第一次来，写的不错，关注下</a>
                            </li>
                            <li js="text-overflow:ellipsis;">
                                <a href="#" title="2017-2-28 16:18:16 post by 卢松松博客">当初看这个并没有觉得什么，现在看来里面和</a>
                            </li>
                            <li js="text-overflow:ellipsis;">
                                <a href="#" title="2017-2-28 12:04:12 post by 青岛礼品公司">人生确实就是个赌局，就看赌注和勇气大小了</a>
                            </li>
                            <li js="text-overflow:ellipsis;">
                                <a href="#" title="2017-2-26 15:50:16 post by 青岛小礼品">长大了，烦恼也就多了</a>
                            </li>
                        </ul>
                    </dd>
                </dl>

                <dl class="function" id="divMisc">
                    <dt class="function_t">分享到：</dt>
                    <dd class="function_c">
                        <ul>
                            <li>
                                <img src="/images/104803.png" height="110" width="110" border="0" alt="你我网微信公众平台"
                                     title="微信扫一扫，关注圈圈的最新消息。"/>
                            </li>
                            <li><!-- Baidu Button BEGIN -->
                                <div class="bdsharebuttonbox">
                                    <a href="#" class="bds_more" data-cmd="more"></a>
                                    <a title="分享到QQ空间" href="#" class="bds_qzone" data-cmd="qzone"></a>
                                    <a title="分享到百度贴吧" href="#" class="bds_tieba" data-cmd="tieba"></a>
                                    <a title="分享到新浪微博" href="#" class="bds_tsina" data-cmd="tsina"></a>
                                </div>
                                <script>window._bd_share_config = {
                                        "common": {
                                            "bdSnsKey": {},
                                            "bdText": "",
                                            "bdMini": "2",
                                            "bdMiniList": ["sqq", , "qzone", "tsina", "tieba", "douban"],
                                            "bdPic": "",
                                            "bd/js": "0",
                                            "bdSize": "16"
                                        }, "share": {}
                                    };
                                    with (document)0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];</script>
                                <!-- Baidu Button END -->
                            </li>
                            <li>
                                <a href="#feed.asp" target="_blank">
                                    <img src="/images/rss.png" height="31" width="88" border="0"
                                         alt="订阅本站的 RSS 2.0 新闻聚合"/></a>
                            </li>
                        </ul>
                    </dd>
                </dl>

            </div>

            <div id="divBottom">
                <h3 id="BlogCopyRight">鄂ICP备11002139号-1</h3>
                <h4 id="BlogPowerBy">Powered By <a href="http://www.zblog.com/" title="RainbowSoft Studio Z-Blog"
                                                   target="_blank">zblog</a>　本站遵循<a rel="license" target="_blank"
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
        o["/js"][typ[typN]] = "" + range + "px";
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
</html><!-- 16ms -->
