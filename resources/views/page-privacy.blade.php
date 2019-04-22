@extends('layouts.app')

@section('content')

    <div id="ex-privacy">
        
        {{--@include('partials.page-header')--}}
            <div class="privacy-bg-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/hugo2017-072.jpg');">
                <!-- <img src="/images/faqs/hugo2017-072.jpg" alt="" ref="image"> -->
            </div>

	            <h4 id="privacy-hero-text" class="text-center">プライバシーポリシー</h4>

	        <div class="privacy-container container">
	            <div class="row">
	                <div class="col-md-8">
						<span id="intro"></span>
	                    <h6>1. 利用目的</h6>
	                    <p>当社は、お客さまから取得した個人情報をあらかじめお知らせした利用目的に限定して利用し、この範囲を超えて利用する場合には、法令にて許されている場合を除き、事前にお客さまの同意を得ることとします。</p>
						<span id="privacy2"></span>
						<h6>2. 管理</h6>
						<p>当社は、お客さまから取得した個人情報を適切な方法で管理します。また、法令にて許されている場合を除き、お客さまの個人情報をお客さまの同意を得ることなく、第三者に開示・提供しません。</p>
						<span id="privacy3"></span>
						<h6>3. お問い合わせ</h6>
						<p>当社は、お客さまがお客さまの個人情報の照会、訂正、削除などを希望される場合には、お客さまご本人であることを確認した上で、合理的な範囲で速やかに対処します。</p>
						<span id="privacy4"></span>
						<h6>4. 法令遵守、改善</h6>
						<p>当社は、個人情報保護関連法令、規範を遵守するとともに、当社内の個人情報保護に関する取り組みを継 続的に見直し、 適宜その改善・向上に努めます。</p>
	                </div>
	                <div class="col-md-4">
	                    <div class="bg-container" style="background-image:url('/images/faqs/Image.png')">
	                        <div class="overlay"></div>
	                        <div class="main">
	                            <div class="title">
	                                <h4>目次</h4>
	                            </div>
	                            <div class="content">
	                                <a class="text-light" href="#intro"><p>1. 利用目的</p></a>
	                                <a class="text-light" href="#privacy2"><p>2. 管理</p></a>
	                                <a class="text-light" href="#privacy3"><p>3. お問い合わせ</p></a>
	                                <a class="text-light" href="#privacy4"><p>4. 法令遵守、改善</p></a>
	                                <a class="text-light" href="#privacy5"><p>5. 個人情報の管理</p></a>
	                                <a class="text-light" href="#privacy6"><p>6. 情報内容の照会、修正または削除</p></a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
				<span id="privacy5"></span>
				<h6>5. 個人情報の管理</h6>
	            <p>当社は、個人情報の漏洩、滅失、毀損等を防止するために、個人情報保護管理責任者を設置し、十分な安全保護に努め、また、個人情報を正確に、また最新なものに保つよう、お預かりした個人情報の適切な管理を行います。</p>
				<span id="privacy6"></span>
				<h6>6. 情報内容の照会、修正または削除</h6>
	            <p>当社は、お客様が当社にご提供いただいた個人情報の照会、修正又は、削除を希望される場合は、ご本人であることを確認させていただいたうえで、合理的な範囲ですみやかに対応させていただきます。
当社は、お客様が当社にご提供いただいた個人情報の照会、修正又は、削除を希望される場合は、ご本人であることを確認させていただいたうえで、合理的な範囲ですみやかに対応させていただきます。</p>
				<span id="privacy7"></span>
	        </div>
    </div>
@endsection
