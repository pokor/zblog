<!doctype html>
<html lang="en">
@include('admin.comment.head')
<body>
<div class="wrapper has-footer">
@include('admin.comment.aside')
@include('admin.comment.header')
    <div class="main-container">    <!-- START: Main Container -->
        <div class="page-header">
            <h1>表格 <small>基本表</small></h1>
            <ol class="breadcrumb">
                <li><a href="index.php">主页</a></li>
                <li><a href="index.php">表格</a></li>
                <li class="active">基本报表 </li>
            </ol>
        </div>
        <div class="content-wrap">  <!--START: Content Wrap-->

            <div class="row">

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">基本示例</h3>
                            <div class="tools">
                                <a class="btn-link collapses panel-collapse" href="javascript:;"></a>
                                <a class="btn-link reload" href="javascript:;"><i class="ti-reload"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>名字</th>
                                    <th>职业</th>
                                    <th>地点</th>
                                    <th>年龄</th>
                                    <th>开始日期</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>杨思</td>
                                    <td>百度</td>
                                    <td>北京</td>
                                    <td>25</td>
                                    <td>2016/04/25</td>
                                </tr>
                                <tr>
                                    <td>小李</td>
                                    <td>会计</td>
                                    <td>武汉</td>
                                    <td>28</td>
                                    <td>2016/07/25</td>
                                </tr>
                                <tr>
                                    <td>刘下楼</td>
                                    <td>编辑</td>
                                    <td>武汉</td>
                                    <td>29</td>
                                    <td>2015/01/12</td>
                                </tr>
                                <tr>
                                    <td>杰克</td>
                                    <td>工程师</td>
                                    <td>襄阳</td>
                                    <td>22</td>
                                    <td>2017/03/01</td>
                                </tr>
                                <tr>
                                    <td>艾芙</td>
                                    <td>美术师</td>
                                    <td>襄阳</td>
                                    <td>33</td>
                                    <td>2016/11/28</td>
                                </tr>
                                <tr>
                                    <td>刘华谊</td>
                                    <td>幼师</td>
                                    <td>天门</td>
                                    <td>30</td>
                                    <td>2016/12/02</td>
                                </tr>
                                <tr>
                                    <td>廖恒辉</td>
                                    <td>技术员</td>
                                    <td>武昌</td>
                                    <td>25</td>
                                    <td>2016/08/06</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">波浪</h3>
                            <div class="tools">
                                <a class="btn-link collapses panel-collapse" href="javascript:;"></a>
                                <a class="btn-link reload" href="javascript:;"><i class="ti-reload"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>名字</th>
                                    <th>职位</th>
                                    <th>工作地点</th>
                                    <th>年龄</th>
                                    <th>开始工作时间</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>徐虎</td>
                                    <td>九洲</td>
                                    <td>汉阳</td>
                                    <td>40</td>
                                    <td>2011/04/25</td>
                                </tr>
                                <tr>
                                    <td>里弗斯</td>
                                    <td>画家</td>
                                    <td>黄陂</td>
                                    <td>27</td>
                                    <td>2016/07/25</td>
                                </tr>
                                <tr>
                                    <td>贾克森</td>
                                    <td>J.大地</td>
                                    <td>洪山</td>
                                    <td>35</td>
                                    <td>2009/01/12</td>
                                </tr>
                                <tr>
                                    <td>金来</td>
                                    <td>技术员</td>
                                    <td>艾利奴</td>
                                    <td>26</td>
                                    <td>2016/03/29</td>
                                </tr>
                                <tr>
                                    <td>Airi Satou</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>33</td>
                                    <td>2008/11/28</td>
                                </tr>
                                <tr>
                                    <td>Brielle Williamson</td>
                                    <td>Integration Specialist</td>
                                    <td>New York</td>
                                    <td>61</td>
                                    <td>2012/12/02</td>
                                </tr>
                                <tr>
                                    <td>敬业福</td>
                                    <td>程序员</td>
                                    <td>杭州</td>
                                    <td>59</td>
                                    <td>2016/08/06</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">邻接表</h3>
                            <div class="tools">
                                <a class="btn-link collapses panel-collapse" href="javascript:;"></a>
                                <a class="btn-link reload" href="javascript:;"><i class="ti-reload"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>名字</th>
                                    <th>职业</th>
                                    <th>地点</th>
                                    <th>年龄</th>
                                    <th>开始时间</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>迪哥</td>
                                    <td>城管</td>
                                    <td>汉口</td>
                                    <td>54</td>
                                    <td>2011/04/25</td>
                                </tr>
                                <tr>
                                    <td>文玲</td>
                                    <td>美术师</td>
                                    <td>美食家</td>
                                    <td>27</td>
                                    <td>2016/07/25</td>
                                </tr>
                                <tr>
                                    <td>华山</td>
                                    <td>工程师</td>
                                    <td>汉阳</td>
                                    <td>66</td>
                                    <td>2016/01/12</td>
                                </tr>
                                <tr>
                                    <td>东陆</td>
                                    <td>技术员</td>
                                    <td>汉口</td>
                                    <td>22</td>
                                    <td>2015/03/29</td>
                                </tr>
                                <tr>
                                    <td>富的</td>
                                    <td>行长</td>
                                    <td>重庆</td>
                                    <td>33</td>
                                    <td>2008/11/28</td>
                                </tr>
                                <tr>
                                    <td>贾森</td>
                                    <td>程序员</td>
                                    <td>洪山</td>
                                    <td>30</td>
                                    <td>2012/12/02</td>
                                </tr>
                                <tr>
                                    <td>刘流</td>
                                    <td>动画</td>
                                    <td>民族大道</td>
                                    <td>31</td>
                                    <td>2012/08/06</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">附表</h3>
                            <div class="tools">
                                <a class="btn-link collapses panel-collapse" href="javascript:;"></a>
                                <a class="btn-link reload" href="javascript:;"><i class="ti-reload"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>名字</th>
                                    <th>职业</th>
                                    <th>地点</th>
                                    <th>年龄</th>
                                    <th>开始时间</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>迪哥</td>
                                    <td>城管</td>
                                    <td>汉口</td>
                                    <td>54</td>
                                    <td>2011/04/25</td>
                                </tr>
                                <tr>
                                    <td>文玲</td>
                                    <td>美术师</td>
                                    <td>美食家</td>
                                    <td>27</td>
                                    <td>2016/07/25</td>
                                </tr>
                                <tr>
                                    <td>华山</td>
                                    <td>工程师</td>
                                    <td>汉阳</td>
                                    <td>66</td>
                                    <td>2016/01/12</td>
                                </tr>
                                <tr>
                                    <td>东陆</td>
                                    <td>技术员</td>
                                    <td>汉口</td>
                                    <td>22</td>
                                    <td>2015/03/29</td>
                                </tr>
                                <tr>
                                    <td>富的</td>
                                    <td>行长</td>
                                    <td>重庆</td>
                                    <td>33</td>
                                    <td>2008/11/28</td>
                                </tr>
                                <tr>
                                    <td>贾森</td>
                                    <td>程序员</td>
                                    <td>洪山</td>
                                    <td>30</td>
                                    <td>2012/12/02</td>
                                </tr>
                                <tr>
                                    <td>刘流</td>
                                    <td>动画</td>
                                    <td>民族大道</td>
                                    <td>31</td>
                                    <td>2012/08/06</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('admin.comment.footer')
</div>
@include('admin.comment.js')
</body>
</html>