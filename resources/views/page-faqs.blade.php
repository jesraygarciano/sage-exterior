@extends('layouts.app')

@section('content')

    <div id="ex-faqs">
        
        {{--@include('partials.page-header')--}}
            <div class="faq-bg-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/hugo2017-072.jpg');">
                <!-- <img src="/images/faqs/hugo2017-072.jpg" alt="" ref="image"> -->
            </div>

            <h1 class="text-center">よくある質問</h1>
            <div class="container">
                <div class="faq-cards">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="bg-container" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/o_2.jpg');">
                                <div class="overlay"></div>
                                <div class="main">
                                    <div class="title">
                                        <h4>The Future of Digital Photography</h4>
                                    </div>
                                    <div class="content">
                                        <p>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur itaque esse, maxime excepturi, consectetur eligendi hic illo repudiandae magnam commodi tempore cumque, voluptatum natus! Deleniti accusantium nisi incidunt tempora alias.
                                        </p>
                                    </div>
                                    <button type="button" class="btn custom-btn">Contact</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="bg-container" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/o_2.jpg');">
                                <div class="overlay"></div>
                                <div class="main">
                                    <div class="title">
                                        <h4>The Future of Digital Photography</h4>
                                    </div>
                                    <div class="content">
                                        <p>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur itaque esse, maxime excepturi, consectetur eligendi hic illo repudiandae magnam commodi tempore cumque, voluptatum natus! Deleniti accusantium nisi incidunt tempora alias.
                                        </p>
                                    </div>
                                    <button type="button" class="btn custom-btn">Contact</button>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-4">

                            <div class="bg-container" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/hugo2017-072.jpg');">
                                <div class="overlay"></div>
                                <div class="main">
                                    <div class="title">
                                        <h4>The Future of Digital Photography</h4>
                                    </div>
                                    <div class="content">
                                        <p>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur itaque esse, maxime excepturi, consectetur eligendi hic illo repudiandae magnam commodi tempore cumque, voluptatum natus! Deleniti accusantium nisi incidunt tempora alias.
                                        </p>
                                    </div>
                                    <button type="button" class="btn custom-btn">Contact</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


<div id="ex-faqs-collapse">
<div class="wrapper center-block">
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          建築予定の造成地には外構に関する協定があるのですが、対応できますか？
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        Sotorieでは色々な団地での施工実績がありますので問題なく対応できます。
        協議が必要な場合も弊社スタッフが管理者と協議を代行しますので、安心してお任せ下さい。
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          相談から工事までの流れは？
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <p>以下の通りです</p>
        <p>(1)まず、建築図面を元に、お客様のご希望、イメージ等を伺います。
        店内に施工例写真のサンプルが沢山ありますので参考にしてください。</p>
        <p>(2)スタッフが現地調査に伺い、敷地状況及び隣家など周辺環境、又、工事条件等の調査を行います。</p>
        <p>(3)現地調査の結果を元にお客様のご希望とのマッチングをスタッフとデザイナーが打ち合わせ</p>
        <p>(4)プランの完成</p>
        <p>(5)プランの見積</p>
        <p>(6)お客様にプレゼンテーション</p>
        <p>平面図、３D立面図を元にプランの内容(構造、材質、設計デザインの狙い等)をご説明します。又、その部分ごとの見積明細を説明します。</p>
        <p>(7)(6)の結果、必要であれば予算との調整、プランの変更を行います。</p>
        <p>(8)デザイン、予算に納得していただけたら正式に契約となります。</p>
        <p>(9)仕様決定</p>
        <p>プランの材質、色等を細かな仕様をスタッフと一緒に決めていきます。</p>
        <p>(10)工事挨拶</p>
        <p>着工前に近隣のお宅に弊社連絡先等を明記した挨拶文と粗品を持って伺います。</p>
        <p>(11)工事</p>
        <p>騒音や振動など出来るだけの配慮をして施工いたします。</p>
        <p>(12)完了・引渡し</p>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          工事中にしなければならないことは？
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
      基本的には全て弊社スタッフが管理しますので何もありません。
      使い勝手などで立会いをお願いする場合は、改めて日時を調整させていただきます。
      尚、工事に使用する電気と水道は無償提供をお願いします。
      </div>
    </div>
  </div>


  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFour">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          イメージが浮かばない、上手く伝えられない。
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      <div class="panel-body">
        ほとんどの方が初めての経験ですから当然のことと思います。
        店内の施工写真や各種カタログの中から選ぶ方法もあります。あるいはもっと抽象的な表現でも結構です。「明るい南欧風」「アジアン」「四季を感じるように」「ペットと遊びたい」「皆が集まれるように」「夫婦でお茶ができるように」．．．
        スタッフと雑談する中でイメージの固まってくることもあります。
        お気軽にご来店下さい。
      </div>
    </div>
  </div>


  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFive">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          ウッドデッキやレンガなどの実物のサンプルは見れますか？
        </a>
      </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
      <div class="panel-body">
        店頭でご覧いただけます。
        よく使う材料は、滋賀店・京都店共に豊富に用意しております。その他ポストや表札、ガーデンファニチャー、ガーデンルームも展示しております。お気軽に覗いてください。
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingSix">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
          支払い方法を教えてください。
        </a>
      </h4>
    </div>
    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
      <div class="panel-body">
        一般的に契約時に契約額の３分の１を、完了後10日以内に残金をお支払いいただきます。
        工事代金の支払いにカード決済は出来ません。必要な場合は別途手数料をいただきます。       
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingSeven">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
         ローンは使えますか？
        </a>
      </h4>
    </div>
    <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
      <div class="panel-body">
        可能です。
        Sotorieでは4社の信販会社と提携していますので、条件の合う会社をお選びいただけます。店頭で必要事項の記入と押印だけで可能になり、面倒な手続きは不要です。     
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingEight">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
          植樹だけとかカーポートだけなど、単発的な工事もしてもらえますか？
        </a>
      </h4>
    </div>
    <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
      <div class="panel-body">
        もちろん可能です。
        アルミ製品など単品工事でも全体を考えて提案させていただきます。各メーカーのカタログも各種揃えて経験豊富なスタッフが相談に応じさせていただきます。    
      </div>
    </div>
  </div>          
</div>
</div>
</div>

                <script type="text/javascript">
                     $('.panel-collapse').on('show.bs.collapse', function () {
                        $(this).siblings('.panel-heading').addClass('active');
                      });

                      $('.panel-collapse').on('hide.bs.collapse', function () {
                        $(this).siblings('.panel-heading').removeClass('active');
                      });
                </script>

            </div>

    </div>
@endsection
