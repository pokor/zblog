<!DOCTYPE html>
<html  xml:lang="zh-CN" lang="zh-CN">
@include('admin.comment.home_index')
<body class="multi default">
<div id="divAll">
    <div id="divPage">
        <div id="divMiddle">
            <div id="divTop">
                <h1 id="BlogTitle"><a href="#"><img src="/images/LOGO.gif" alt="个人主页" onMouseover="shake(this,'onmouseout')" /></a></h1>
                <!-- <h3 id="BlogSubTitle">www.Youmew.com</h3> -->
            </div>
            <div id="divNavBar">
                @include('home.partials.menu')
            </div>
          <div >
              <div id="divMain">
                  <form action="{{route('message')}}" method="post">
                      {{--跨域csrf--}}
                      {{csrf_field()}}
                      <div class="post multi-post cate2 auth1">
                          <h2 style="margin-left: 250px;color: #5f69e0">留言版</h2>
                          <script id="container2" name="content" type="text/plain"></script>
                          <input type="hidden" name="text" id="txt">
                          <button type="submit" id="btn" class="btn btn-info" style="margin-top: 20px;background-color: #ed956e;border-radius: 5px;">提交</button>
                      </div>
                  </form>

              </div>
              <div id="divSidebar">
                  <dl class="function" id="divComments">
                      <dt class="function_t">最新留言</dt>
                      <dd class="function_c">
                          <ul>
                              @foreach($guest as $g)
                              <li js="text-overflow:ellipsis;">
                                  <a href="#" title="{{date("Y-m-d H:s:m",$g->time)}} 卢松松博客">{!! htmlspecialchars_decode($g->message) !!}</a>
                              </li>
                                  @endforeach

                                  @if($guest->total()>10)
                                      {{$guest->links()}}
                                  @endif
                          </ul>
                      </dd>
                  </dl>

                  <dl class="function" id="divMisc">
                      <dt class="function_t">分享到：</dt>
                      <dd class="function_c">
                          <ul>
                              <li>
                                  <img src="/images/104803.png" height="110" width="110" border="0" alt=""
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

                          </ul>
                      </dd>
                  </dl>

              </div>
          </div>
            <div id="divBottom">
                <h3 id="BlogCopyRight">鄂ICP备11002139号-1</h3>
                <h4 id="BlogPowerBy">Powered By <a href="http://www.rainbowsoft.org/" title="RainbowSoft Studio Z-Blog" target="_blank">Z-Blog</a>　本站遵循<a rel="license" target="_blank" title="署名-非商业性使用-禁止演绎 3.0 中国大陆许可协议" href="http://creativecommons.org/licenses/by-nc-nd/3.0/cn/"> CC BY-NC-ND 3.0 CN协议 </a>。</h4>
            </div><div class="clear"></div>
        </div><div class="clear"></div>
    </div><div class="clear"></div>
</div>
<script type="text/javascript" src="/plugins/ueditor/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="/plugins/ueditor/ueditor.all.js"></script>
<!-- 实例化编辑器 -->
<script type="text/javascript">
    var ue = UE.getEditor('container2');
    $(function () {
        $("#btn").click(function () {
            var val = ue.getContent();
            $('#txt').val(val);

        });
    });

</script>
<!-- dd BEGIN -->
<script language="JavaScript1.2">
    var typ=["marginTop","marginLeft"],rangeN=10,timeout=0;
    function shake(o,end){
        var range=Math.floor(Math.random()*rangeN);
        var typN=Math.floor(Math.random()*typ.length);
        o["/js"][typ[typN]]=""+range+"px";
        var shakeTimer=setTimeout(function(){shake(o,end)},timeout);
        o[end]=function(){clearTimeout(shakeTimer)};
    }

</script>
<!-- dd END -->
</body>
</html><!-- 16ms -->
