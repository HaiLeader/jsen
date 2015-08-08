 <div id="mainContents">
 <base href="http://localhost/ci3/">
            <div id="article">
                <div id="arbeitSearchBox">
                    <h2>アルバイトを探す</h2>
                    <div id="selectFeatureTab">
                        <ul class="idTabs">
                            <li class="areaFTab01">
                                <a class="selected" href="#searchAreaBox">エリアから探す</a>
                            </li>
                            <li class="areaFTab02">
                                <a class="" href="#stationAreaBox">路線から探す</a>
                            </li>
                        </ul>
                    </div>
                    <div id="searchAreaBox" style="display: none;">
                        <div id="jMapBox" class="clearfix">
                            <div class="jMap">
                                <h3>エリアから探す</h3>
                                <ul class="idTabs menu">
                                    <li class="jm01">
                                        <a href="<?php echo base_url();?>user/user/index/tohoku">北海道・東北</a>
                                    </li>
                                    <li class="jm02">
                                        <a href="<?php echo base_url();?>user/user/index/kanto">関東</a>
                                    </li>
                                    <li class="jm03">
                                        <a href="<?php echo base_url();?>user/user/index/hokuriku">甲信越・北陸</a>
                                    </li>
                                    <li class="jm04">
                                        <a href="<?php echo base_url();?>user/user/index/tokai">東海</a>
                                    </li>
                                    <li class="jm05">
                                        <a href="<?php echo base_url();?>user/user/index/kansai">関西</a>
                                    </li>
                                    <li class="jm06">
                                        <a href="<?php echo base_url();?>user/user/index/chugoku">中国・四国</a>
                                    </li>
                                    <li class="jm07">
                                        <a href="<?php echo base_url();?>user/user/index/kyusyu">九州・沖縄</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="jList">

                                <?php foreach ($area as $ka => $va) {   ?>
                                <dl>
                                    <dt>
                                        <span><?php echo $va['area_name']; ?></span>
                                    </dt>
                                    <dd>
                                        <ul>
                                        
                                             <?php foreach ($prefecture[$va['area_name']] as $kp => $vp) {?>
                                            <li>
                                                <a href="/guide_area<?php echo $vp['id'];?>"><?php echo $vp['name'];?></a>
                                            </li>
                                            <?php }

                                        echo "</ul>";
                                    echo "</dd>";
                                echo "</dl>";
                                }?>       
                                
                            </div>
                        </div>
                    </div>
                    <div id="stationAreaBox" style="display: block;">
                        <div id="sMapBox" class="clearfix">
                            <div class="jMap">
                                <h3>路線から探す</h3>
                                <ul class="idTabs menu">
                                    <li class="jm01">
                                        <a class="defaultLineSetter" href="/tohoku/index.htm">北海道・東北</a>
                                    </li>
                                    <li class="jm02">
                                        <a class="defaultLineSetter" href="/kanto/index.htm">関東</a>
                                    </li>
                                    <li class="jm03">
                                        <a class="defaultLineSetter" href="/hokuriku/index.htm">甲信越・北陸</a>
                                    </li>
                                    <li class="jm04">
                                        <a class="defaultLineSetter" href="/tokai/index.htm">東海</a>
                                    </li>
                                    <li class="jm05">
                                        <a class="defaultLineSetter" href="/kansai/index.htm">関西</a>
                                    </li>
                                    <li class="jm06">
                                        <a class="defaultLineSetter" href="/chugoku/index.htm">中国・四国</a>
                                    </li>
                                    <li class="jm07">
                                        <a class="defaultLineSetter" href="/kyusyu/index.htm">九州・沖縄</a>
                                    </li>
                                    <script type="text/javascript">
                                        $$('.defaultLineSetter').each(function(elem) {
                                            elem.observe('click', function() {
                                                var defaultLineCookie = new (Class.create(Lvs.CookieManager, {
                                                    getKey: function () { return 'default_line'; }
                                                }));
                                                defaultLineCookie.set('on');
                                            });
                                        });
                                    </script>
                                </ul>
                            </div>
                            <div class="jList">
                                <dl>
                                    <dt>
                                    <span>北海道・東北</span>
                                    </dt>
                                    <dd>
                                        <ul>
                                            <li>
                                                <a href="/guide_area1_line.htm">北海道</a>
                                            </li>
                                            <li>
                                                <a href="/guide_area2_line.htm">青森</a>
                                            </li>
                                            <li>
                                                <a href="/guide_area3_line.htm">岩手</a>
                                            </li>
                                            <li>
                                                <a href="/guide_area4_line.htm">宮城</a>
                                            </li>
                                            <li>
                                                <a href="/guide_area5_line.htm">秋田</a>
                                            </li>
                                            <li>
                                                <a href="/guide_area6_line.htm">山形</a>
                                            </li>
                                            <li>
                                                <a href="/guide_area7_line.htm">福島</a>
                                            </li>
                                        </ul>
                                    </dd>
                                </dl>
                                
                                <dl>
                                    <dt>
                                        <span>関東</span>
                                    </dt>
                                    <dd>
                                        <ul>
                                            <li>
                                                <a href="/guide_area8.htm">東京</a>
                                            </li>
                                            <li>
                                                <a href="/guide_area9.htm">神奈川</a>
                                            </li>
                                            <li>
                                                <a href="/guide_area10.htm">埼玉</a>
                                            </li>
                                            <li>
                                                <a href="/guide_area11.htm">千葉</a>
                                            </li>
                                            <li>
                                                <a href="/guide_area12.htm">茨城</a>
                                            </li>
                                            <li>
                                                <a href="/guide_area13.htm">栃木</a>
                                            </li>
                                            <li>
                                                <a href="/guide_area14.htm">群馬</a>
                                            </li>
                                        </ul>
                                    </dd>
                                </dl>
                                
                                <dl>
                                    <dt><span>甲信越・北陸</span></dt>
                                    <dd></dd>
                                </dl>
                                <!-- Moi viet vi du 2 cai, con lai m viet chen code php vao cho no in het ra nha, co 7 cai tat ca-->
                                
                            </div>
                        </div>
                    
                    </div>
                </div>
                <div id="pickupBox">
                    <div class="ttl">
                        <h2>人気バイトをピックアップ</h2>
                        <ul class="idTabs">
                            <li class="none"><a class="selected" href="#close"></a></li>
                            <li class="as"><a class="" href="#areaSelect"></a></li>
                        </ul>

                        <!-- Hien thi thong tin-->
                        <div id="areaSelect" style="display: none;">
                            <div class="inner">
                                <div class="clearfix">
                                    <h3>エリア選択</h3>
                                    <p class="idTabs">
                                        <a class="closeBtn" href="#close">閉じる</a>
                                    </p>
                                </div>
                                <p class="comment">他の地域でアルバイトを検索したい方は下記より地域名を選択してください。
                                </p>
                                <ul>
                                    <li>
                                        <a href="/tohoku/index.htm">北海道・東北</a>
                                        (7590)
                                    </li>
                                    <li>
                                        <a href="/hokuriku/index.htm">甲信越・北陸</a>
                                        (5467)
                                    </li>
                                    <li>
                                        <a href="/tokai/index.htm">東海</a>
                                        (11379)
                                    </li>
                                    <li>
                                        <a href="/kansai/index.htm">関西</a>
                                        (14606)
                                    </li>
                                    <li>
                                        <a href="/chugoku/index.htm">中国・四国</a>
                                        (5259)
                                    </li>
                                    <li>
                                        <a href="/kyusyu/index.htm">九州・沖縄</a>
                                        (5816)
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="pickup01">
                        <h3>特徴から探す</h3>
                        <p class="more"><a href="/guide_kanto_feature/">もっと見る</a></p>
                        <!-- Phan list nay viet code vao de in ra nha, t viet vi du vai cai thoi, cu viet code giong vi du la no tu in ra dung -->
                        <div class="pickuplist">
                            <ul>
                                <li>
                                    <a href="/kanto/feature_short_work.htm">短期バイト</a>
                                    (1964)
                                </li>
                                <li>
                                    <a href="/kanto/feature_day_saraly.htm">日払いOK</a>
                                    (1836)
                                </li>
                                <li>
                                    <a href="/kanto/feature_week_saraly.htm">週払いOK</a>
                                    (5753)
                                </li>
                                <li>
                                    <a href="/kanto/feature_school.htm">高校生OK</a>
                                    (3404)
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="pickup02">
                        <h3>人気職種から探す</h3>
                        <p class="more">
                        <a href="/guide_kanto_job/">もっと見る</a>
                        </p>
                        <div class="pickuplist">
                            <u>
                            </u>
                        </div>
                    </div>
                    <div class="pickup03">
                        <h3>人気エリアから探す</h3>
                        <p class="more">
                        <a href="/guide_kanto_area/">もっと見る</a>
                        </p>
                        <div class="pickuplist">
                            <u>
                            </u>
                        </div>
                    </div>
                    <div class="pickup04">
                        <h3>ビル名・場所から探す</h3>
                        <p class="more">
                        <a href="/guide_kanto_landmark/">もっと見る</a>
                        </p>
                        <div class="pickuplist">
                            <u>
                            </u>
                        </div>
                    </div>
                    <div class="pickup05">
                        <h3>ブランド名・ショップから探す</h3>
                        <p class="more">
                        <a href="/guide_kanto_bland/">もっと見る</a>
                        </p>
                        <div class="pickuplist">
                            <u>
                            </u>
                        </div>
                    </div>
                </div>
                <div id="recommendBox">
                    <h2>ジョブセンスお役立ちコンテンツ</h2>
                    <div class="line">
                        <dl class="reco01 clearfix">
                            <dt><a href="/contents/faq/index.htm">よくある質問</a></dt>
                            <dd class="clearfix">
                                <p class="icon"><a href="/contents/faq/index.htm">よくある質問</a></p>
                                <p class="txt">ジョブセンス利用者から寄せられるよくある質問を掲載</p>
                            </dd>
                        </dl>
                        
                        <dl class="reco02">
                            <dt>
                                <a href="/contents/rireki.htm">履歴書の書き方</a>
                            </dt>
                            <dd>
                                <p class="icon">
                                <a href="/contents/rireki.htm">履歴書の書き方</a>
                                </p>
                            <p class="txt">アルバイトの履歴書の書き方を丁寧に解説</p>
                            </dd>
                        </dl>
                        <dl class="reco03">
                            <dt>
                                <a href="/keyword/">トレ単</a>
                            </dt>
                            <dd>
                                <p class="icon"><a href="/keyword/">トレ単</a></p>
                                <p class="txt">最新アルバイトのトレンドをチェック</p>
                            </dd>
                        </dl>
                    </div>
                    <div class="line">
                        <dl class="reco04">
                            <dt>
                                <a href="/qanda/">Q&Aコミュニティ</a>
                            </dt>
                            <dd>
                                <p class="icon">
                                <a href="/qanda/">Q&Aコミュニティ</a>
                                </p>
                                <p class="txt">アルバイトに関するQ&Aを多数掲載</p>
                            </dd>
                        </dl>
                        <dl class="reco05">
                            <dt>
                                <a href="/exptalk/">アルバイト体験談</a>
                            </dt>
                            <dd>
                                <p class="icon">
                                <a href="/exptalk/">アルバイト体験談</a>
                                </p>
                                <p class="txt">みんなのアルバイト体験談を見てみよう</p>
                            </dd>
                        </dl>
                        <dl class="reco08">
                            <dt>
                                <a href="/contents/taisetsu/index.htm">企業インタビュー</a>
                            </dt>
                            <dd>
                                <p class="icon">
                                <a href="/contents/taisetsu/index.htm">企業インタビュー</a>
                                </p>
                                <p class="txt">アルバイトを大切にすることに自信アリ！の企業にインタビューしてみました</p>
                            </dd>
                        </dl>
                    </div>
                </div>
                <div id="specialBox">
                    <div class="inner">
                        <h3>こだわり特集</h3>
                        <ul>
                            <li>
                                <a href="/pickup_juku.htm">塾講師のアルバイト</a>
                            </li>
                            <li>
                                <a href="/pickup_highwage.htm">高収入（高額）アルバイト</a>
                            </li>
                            <li>
                                <a href="/pickup_school.htm">高校生アルバイト</a>
                            </li>
                            <li>
                                <a href="/pickup_regist.htm">登録制アルバイト</a>
                            </li>
                            <li>
                                <a href="/pickup_day.htm">日払いアルバイト</a>
                            </li>
                            <li>
                                <a href="/pickup_short.htm">短期アルバイト</a>
                            </li>
                            <li>
                                <a href="/pickup_regular.htm">正社員登用ありのアルバイト</a>
                            </li>
                            <li>
                                <a href="/pickup_nurse.htm">看護師のアルバイト</a>
                            </li>
                            <li>
                                <a href="/pickup_kaigo.htm">介護のアルバイト</a>
                            </li>
                            <li>
                                <a href="/pickup_pharmacist.htm">薬剤師のアルバイト</a>
                            </li>
                            <li>
                                <a href="/pickup_callcenter.htm">コールセンターのアルバイト</a>
                            </li>
                            <li>
                                <a href="/pickup_haken.htm">派遣のアルバイト</a>
                            </li>
                            <li>
                                <a href="/pickup_opening.htm">オープニングスタッフのアルバイト</a>
                            </li>
                            <li>
                                <a href="/pickup_clothing.htm">アパレルのアルバイト</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div id="newInfoBox">
                    <h3>新着のアルバイト情報</h3>
                    <!-- Thời gian up chỉ hiển thị demo, còn thực thế phải truy xuất trong csdl-->
                    <dl>
                        <dt>
                            <a href="/323036/y">キンコーズ 千葉中央店</a> （時給1,000円～）
                            <strong>2015年07月24日UP!</strong>
                        </dt>
                        <dd>印刷、製本、DTPのスキルを身につけませんか?</dd>
                    </dl>
                    <dl>
                        <dt>
                            <a href="/335889/y">佐藤美装</a> （日給12,000円～）
                            <strong>2015年07月24日UP!</strong>
                        </dt>
                        <dd>【改修工事スタッフ】未経験からプロの技術が身に付くお仕事始めませんか?</dd>
                    </dl>
                    <dl>
                        <dt>
                            <a href="/336987/y">イーボル 丸井新宿本館</a> （時給1,200円～）
                            <strong>2015年07月24日UP!</strong>
                        </dt>
                        <dd>【1日8h、週5日〜OK】ファッションに興味ある明るく元気な方を募集♪</dd>
                    </dl>
                    <div class="endLine"></div>
                </div>

                <div id="seoBox">
                    <h3><span>アルバイト／バイト求人情報ジョブセンス</span></h3>
                    <p>
                        アルバイト求人情報サイト「ジョブセンス」では、アルバイト/バイト/パート採用者全員に最大2万円の採用祝い金を贈呈しております！
                        <br>
                        日本最大級のお仕事情報を地域、路線、職種、特徴などさまざまな方法で検索可能です。
                        <br>
                        東京や大阪、京都を始めとした全国の求人情報、カフェやコンビニ、アパレルのバイトなどの人気職種も多数掲載！
                        <br>
                        塾講師/家庭教師につきましてはパートナー企業「
                        <a href="http://www.juku.st/" target="_blank">塾講師ステーション</a>
                        」と提携しています。
                    </p>
                </div>

                <div id="footerArea">
                    <div class="inner">
                        <h3>アルバイト／バイト求人情報を探す</h3>
                        <ul class="blueLine">
                            <li class="areaTTL">主要都市</li>
                            <li>
                                <a href="file:///C:/wamp/www/J-sen/j-sen.jp/kanto/station_1276.htm">渋谷</a>
                            </li>
                            <li>
                                <a href="file:///C:/wamp/www/J-sen/j-sen.jp/kanto/station_1279.htm">新宿</a>
                            </li>
                            <li>
                                <a href="file:///C:/wamp/www/J-sen/j-sen.jp/kanto/station_1283.htm">池袋</a>
                            </li>
                            <li>
                                <a href="file:///C:/wamp/www/J-sen/j-sen.jp/kanto/station_1513.htm">横浜</a>
                            </li>
                            <li>
                                <a href="file:///C:/wamp/www/J-sen/j-sen.jp/tokai/city_660.htm">浜松</a>
                            </li>
                            <li>
                                <a href="file:///C:/wamp/www/J-sen/j-sen.jp/tokai/station_5008.htm">名古屋</a>
                            </li>
                            <li>
                                <a href="file:///C:/wamp/www/J-sen/j-sen.jp/kansai/city_839.htm">神戸</a>
                            </li>
                            <li>
                                <a href="file:///C:/wamp/www/J-sen/j-sen.jp/kansai/city_801.htm">堺</a>
                            </li>
                            <li>
                                <a href="file:///C:/wamp/www/J-sen/j-sen.jp/kansai/city_143.htm">仙台</a>
                            </li>
                            <li>
                                <a href="file:///C:/wamp/www/J-sen/j-sen.jp/kansai/city_2.htm">札幌</a>
                            </li>
                        </ul>
                        <!-- Đoạn dưới này truy xuất csdl rồi printf theo dạng ở dưới t đã làm mẫu-->
                        <ul>
                            <li class="areaTTL">
                                <a href="file:///C:/wamp/www/J-sen/j-sen.jp/tohoku/index.htm">北海道・東北版</a>
                            </li>
                            <li>
                                <a href="file:///C:/wamp/www/J-sen/j-sen.jp/tohoku/%E5%8C%97%E6%B5%B7%E9%81%93/">北海道</a>
                            </li>
                            <li>
                                <a href="file:///C:/wamp/www/J-sen/j-sen.jp/tohoku/%E9%9D%92%E6%A3%AE%E7%9C%8C/">青森</a>
                            </li>
                            <li>
                                <a href="file:///C:/wamp/www/J-sen/j-sen.jp/tohoku/%E5%B2%A9%E6%89%8B%E7%9C%8C/">岩手</a>
                            </li>
                            <li>
                                <a href="file:///C:/wamp/www/J-sen/j-sen.jp/tohoku/%E5%AE%AE%E5%9F%8E%E7%9C%8C/">宮城</a>
                            </li>
                            <li>
                                <a href="file:///C:/wamp/www/J-sen/j-sen.jp/tohoku/%E7%A7%8B%E7%94%B0%E7%9C%8C/">秋田</a>
                            </li>
                            <li>
                                <a href="file:///C:/wamp/www/J-sen/j-sen.jp/tohoku/%E5%B1%B1%E5%BD%A2%E7%9C%8C/">山形</a>
                            </li>
                            <li>
                                <a href="file:///C:/wamp/www/J-sen/j-sen.jp/tohoku/%E7%A6%8F%E5%B3%B6%E7%9C%8C/">福島</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div id="aside">Quang cao</div>
        </div>