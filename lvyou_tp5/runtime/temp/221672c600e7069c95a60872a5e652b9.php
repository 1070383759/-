<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"F:\phpStudy\WWW\11g12\lvyou_tp5\public/../application/index\view\index\index.html";i:1526348242;}*/ ?>
<?php
include "/lvyou/common/head.html";
?>
<include file="common/head.html" />
  <div class="pnt">
   <div class="pntLeft">
    <h2 class="Title">所有商品分类</h2>
    <ul class="InPorNav">
    


    <?php foreach($data as $k => $v) {foreach($v as $key => $val) {?>
     <li><a href="product.html"><?php if($k==0){ echo $val['city_name'];}   ?></a>
      <div class="chilInPorNav">

       <a href="#"><?php if($v[0]['city_id']==$val['parent_id']){ echo $val['city_name'];} ?></a>

      </div><!--chilLeftNav/-->
     </li>
     <?php } } ?>
    
     
    </ul><!--InPorNav/-->
   </div><!--pntLeft/-->
   <div class="pntRight">
    <ul class="nav">
     <li><a href="index.html">商城首页</a></li>
     <li><a href="product.html">促销中心</a></li>
     <li><a href="login.html">会员中心</a></li>
     <li><a href="help.html">帮助中心</a></li>
     <div class="clears"></div>
     <div class="phone">TEL：021-12345678</div>
    </ul><!--nav/-->
    <div class="banner">
     <div id="kinMaxShow">
      <div>
       <a href="#"><img src="/lvyou/images/ban1.jpg" height="360"  /></a>
      </div> 		
      <div>
       <a href="#"><img src="/lvyou/images/ban2.jpg" height="360"  /></a>
      </div>
      <div>
       <a href="#"><img src="/lvyou/images/ban3.jpg" height="360"  /></a>
      </div>
      <div>
       <a href="#"><img src="/lvyou/images/ban4.jpg" height="360"  /></a>
      </div>
      <div>
       <a href="#"><img src="/lvyou/images/ban5.jpg" height="360"  /></a>
      </div>      
     </div><!--kinMaxShow/-->
    </div><!--banner/-->
   </div><!--pntRight/-->
   <div class="clears"></div>
  </div><!--pnt/-->
  <div class="rdPro">
   <div class="rdLeft">
    <ul class="rdList">
     <li>推荐产品</li>
     <li>促销产品</li>
     <div class="clears"></div>
    </ul><!--rdList/-->
    <div class="rdProBox">
     <dl>
      <dt><a href="proinfo.html"><img src="/lvyou/images/rdPro1.jpg" width="132" height="129" /></a></dt>
      <dd>妙洁 一次性纸杯 8盎司228ml 100只/袋 20袋/箱</dd>
      <dd class="cheng">￥19.80/袋</dd>
     </dl>
     <dl>
      <dt><a href="proinfo.html"><img src="/lvyou/images/rdPro2.jpg" width="132" height="129" /></a></dt>
      <dd>妙洁 一次性纸杯 8盎司228ml 100只/袋 20袋/箱</dd>
      <dd class="cheng">￥19.80/袋</dd>
     </dl>
     <dl>
      <dt><a href="proinfo.html"><img src="/lvyou/images/rdPro3.jpg" width="132" height="129" /></a></dt>
      <dd>妙洁 一次性纸杯 8盎司228ml 100只/袋 20袋/箱</dd>
      <dd class="cheng">￥19.80/袋</dd>
     </dl>
     <dl>
      <dt><a href="proinfo.html"><img src="/lvyou/images/rdPro4.jpg" width="132" height="129" /></a></dt>
      <dd>妙洁 一次性纸杯 8盎司228ml 100只/袋 20袋/箱</dd>
      <dd class="cheng">￥19.80/袋</dd>
     </dl>
     <dl>
      <dt><a href="proinfo.html"><img src="/lvyou/images/rdPro5.jpg" width="132" height="129" /></a></dt>
      <dd>妙洁 一次性纸杯 8盎司228ml 100只/袋 20袋/箱</dd>
      <dd class="cheng">￥19.80/袋</dd>
     </dl>
     <div class="clears"></div>
    </div><!--rdPro/-->
    <div class="rdProBox">
     <dl>
      <dt><a href="proinfo.html"><img src="/lvyou/images/rdPro4.jpg" width="132" height="129" /></a></dt>
      <dd>妙洁 一次性纸杯 8盎司228ml 100只/袋 20袋/箱</dd>
      <dd class="cheng">￥19.80/袋</dd>
     </dl>
     <dl>
      <dt><a href="proinfo.html"><img src="/lvyou/images/rdPro5.jpg" width="132" height="129" /></a></dt>
      <dd>妙洁 一次性纸杯 8盎司228ml 100只/袋 20袋/箱</dd>
      <dd class="cheng">￥19.80/袋</dd>
     </dl>
     <dl>
      <dt><a href="proinfo.html"><img src="/lvyou/images/rdPro3.jpg" width="132" height="129" /></a></dt>
      <dd>妙洁 一次性纸杯 8盎司228ml 100只/袋 20袋/箱</dd>
      <dd class="cheng">￥19.80/袋</dd>
     </dl>
     <dl>
      <dt><a href="proinfo.html"><img src="/lvyou/images/rdPro2.jpg" width="132" height="129" /></a></dt>
      <dd>妙洁 一次性纸杯 8盎司228ml 100只/袋 20袋/箱</dd>
      <dd class="cheng">￥19.80/袋</dd>
     </dl>
     <dl>
      <dt><a href="proinfo.html"><img src="/lvyou/images/rdPro1.jpg" width="132" height="129" /></a></dt>
      <dd>妙洁 一次性纸杯 8盎司228ml 100只/袋 20袋/箱</dd>
      <dd class="cheng">￥19.80/袋</dd>
     </dl>
     <div class="clears"></div>
    </div><!--rdPro/-->
   </div><!--rdLeft/-->
   <div class="rdRight">
    <img src="/lvyou/images/rdRight.jpg" width="221" height="254" />
   </div><!--rdRight/-->
   <div class="clears"></div>
  </div><!--rdPro/-->
  <div class="hengfu">
   <img src="/lvyou/images/hengfu1.jpg" width="979" height="97" />
  </div><!--hengfu/-->
  <div class="floor" id="floor1">
   <h3 class="floorTitle">
   1F&nbsp;&nbsp;&nbsp;&nbsp;杯子系列
   <a href="proinfo.html" class="more">更多 &gt;</a>
   </h3>
   <div class="floorBox">
    <div class="floorLeft">
     <ul class="flList">
      <li>单层纸杯</li>
      <li>双层纸杯</li>
      <li>瓦楞纸杯</li>
      <li>PET透明杯</li>
      <li>冰淇淋杯</li>
      <li><a href="proinfo.html">更多&gt;&gt;</a></li>
      <div class="clears"></div>
     </ul><!--flList/-->
     <div class="flImg"><img src="/lvyou/images/flListimg.jpg" width="198" height="290" /></div>
    </div><!--floorLeft/-->
    <div class="floorRight">
     <div class="frProList">
      <dl>
      <dt><a href="proinfo.html"><img src="/lvyou/images/rdPro4.jpg" width="132" height="129" /></a></dt>
      <dd>妙洁 一次性纸杯 8盎司228ml 100只/袋 20袋/箱</dd>
      <dd class="cheng">￥19.80/袋</dd>
     </dl>
     <dl>
      <dt><a href="proinfo.html"><img src="/lvyou/images/rdPro5.jpg" width="132" height="129" /></a></dt>
      <dd>妙洁 一次性纸杯 8盎司228ml 100只/袋 20袋/箱</dd>
      <dd class="cheng">￥19.80/袋</dd>
     </dl>
     <dl>
      <dt><a href="proinfo.html"><img src="/lvyou/images/rdPro3.jpg" width="132" height="129" /></a></dt>
      <dd>妙洁 一次性纸杯 8盎司228ml 100只/袋 20袋/箱</dd>
      <dd class="cheng">￥19.80/袋</dd>
     </dl>
     <dl>
      <dt><a href="proinfo.html"><img src="/lvyou/images/rdPro2.jpg" width="132" height="129" /></a></dt>
      <dd>妙洁 一次性纸杯 8盎司228ml 100只/袋 20袋/箱</dd>
      <dd class="cheng">￥19.80/袋</dd>
     </dl>
     <dl>
      <dt><a href="proinfo.html"><img src="/lvyou/images/rdPro2.jpg" width="132" height="129" /></a></dt>
      <dd>妙洁 一次性纸杯 8盎司228ml 100只/袋 20袋/箱</dd>
      <dd class="cheng">￥19.80/袋</dd>
     </dl>
     
      <div class="clears"></div>
     </div><!--frProList-->
     <div class="frProList">
      
     <dl>
      <dt><a href="proinfo.html"><img src="/lvyou/images/rdPro1.jpg" width="132" height="129" /></a></dt>
      <dd>妙洁 一次性纸杯 8盎司228ml 100只/袋 20袋/箱</dd>
      <dd class="cheng">￥19.80/袋</dd>
     </dl>
     <dl>
       <dt><a href="proinfo.html"><img src="/lvyou/images/rdPro2.jpg" width="132" height="129" /></a></dt>
       <dd>妙洁 一次性纸杯 8盎司228ml 100只/袋 20袋/箱</dd>
       <dd class="cheng">￥19.80/袋</dd>
      </dl>
      <div class="clears"></div>
     </div><!--frProList-->
     <div class="frProList">
      
      <div class="clears"></div>
     </div><!--frProList-->

    </div><!--floorRight/-->
    <div class="clears"></div>
   </div><!--floorBox/-->
  </div><!--floor/-->
 
  <div class="inHelp">
   <div class="inHLeft">
    <h4>帮助中心</h4>
    <ul class="inHeList">
     <li><a href="help.html">购物指南</a></li>
     <li><a href="help.html">支付方式</a></li>
     <li><a href="help.html">售后服务</a></li>
     <li><a href="about.html">企业简介</a></li>
     <div class="clears"></div>
    </ul><!--inHeList/-->
   </div><!--inHLeft/-->
   <div class="inHLeft">
    <h4>会员服务</h4>
    <ul class="inHeList">
     <li><a href="reg.html">会员注册</a></li>
     <li><a href="login.html">会员登录</a></li>
     <li><a href="order.html">购物车</a></li>
     <li><a href="order.html">我的订单</a></li>
     <div class="clears"></div>
    </ul><!--inHeList/-->
   </div><!--inHLeft/-->
   <div class="inHRight">
    <h4>全国统一免费服务热线</h4>
    <div class="telBox">400-0000-0000</div>
    <div class="weibo">
    <wb:follow-button uid="2991975565" type="red_1" width="67" height="24" ></wb:follow-button>
    </div>
   </div><!--inHRight/-->
   <div class="clears"></div>
  </div><!--inHelp/-->
  <div class="footer">
   <p>
   <a href="#">进入17官网</a>&nbsp;|&nbsp;
   <a href="index.html">商城首页</a>&nbsp;|&nbsp;
   <a href="product.html">促销中心</a>&nbsp;|&nbsp;
   <a href="order.html">我的订单</a>&nbsp;|&nbsp;
   <a href="new.html">新闻动态</a>&nbsp;|&nbsp;
   <a href="login.html">会员中心</a>&nbsp;|&nbsp;
   <a href="help.htmll">帮助中心</a>
   </p>
   <p>
    版权所有：上海17实业有限公司 版权所有  Copyright 2010-2015   沪ICP备00000000号   <a href="http://www.mycodes.net/" target="_blank">源码之家</a>   
   </p>
  </div><!--footer/-->
 </div><!--mianCont/-->
 <a href="#" class="backTop">&nbsp;</a>
</body>
</html>
