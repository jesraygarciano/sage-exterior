import jQuery from 'jquery'
jQuery(document).ready(function(){
    // on scorll change background of nav
    jQuery(window).scroll(function(){
        var scroll = jQuery(window).scrollTop();
        if (scroll > 500) {
            jQuery(".navbar").css({
                'background' : 'white',
                'opacity' : '1',
                'box-shadow' : '1px -3px 2px 2px #888888'
            });
        }
        else{
            jQuery(".navbar").css({
                'background' : '#FFFFFF80',
                'box-shadow' : 'none'
            });
        }
    })
    // adding button in collapse
    var flag = 0;
    function appendForm(x){
        while(flag == 0){
            jQuery('#bs4navbar').append(jQuery('<form class="form-inline mt-2 mt-md-0 custom2" id="bs4navbar"><a href="tel:+0726698210"><button class="grn-btn3" type="button"><i class="fa fa-phone"></i> 072-669-8210</button></a><div class="mt-2"><a style="margin-top:1rem;" href="#front-contact-fm""><button class="grn-btn-sub" type="button"><i class="fa fa-envelope"></i> お問い合わせ</button></a></div></form>'))
            flag++;
        }
        if(x.matches){
            
            var elem = document.querySelector('.custom');
            elem.style.display = 'none';
            var elem2 = document.querySelector('.custom2');
            elem2.style.display = 'block';
        }
        else{
            var elem = document.querySelector('.custom');
            elem.style.display = 'block';
            var elem2 = document.querySelector('.custom2');
            elem2.style.display = 'none';
        }
    }
    var x = window.matchMedia("(max-width: 769px)")
    appendForm(x)
    x.addListener(appendForm)

    // // Initialize and add the map
    // function initMap() {
    //     // The location of Uluru
    //     var uluru = {lat: -25.344, lng: 131.036};
    //     // The map, centered at Uluru
    //     var map = new google.maps.Map(
    //         document.getElementById('map'), {zoom: 4, center: uluru});
    //     // The marker, positioned at Uluru
    //     var marker = new google.maps.Marker({position: uluru, map: map});
    // }

    jQuery('#btnContact').on('click', function(){
      setTimeout(()=>{jQuery('#front-contact-fm input[name=full-name]').focus();}, 1000)
    })

  })
