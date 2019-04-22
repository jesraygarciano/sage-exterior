import jQuery from 'jquery'
jQuery(document).ready(function (){

  function resizeImage(){
    var w = jQuery('#image').width();
    var h = jQuery('#image').height();
    var hquotient = h / w
    console.log(w)
    var wh = jQuery(jQuery('#image')).parent().width() * hquotient
    if(wh < jQuery(jQuery('#image')).parent().height()){
      jQuery(jQuery('#image')).css({
        height: '101%',
        width: 'initial'
      })
    }
    else{
      jQuery(jQuery('#image')).css({
        width: '101%',
        height: 'initial'
      })
    }
  } 
    setTimeout(()=>{
        resizeImage()
      },10)
      window.onresize = ()=>{
        resizeImage()
      }; 
})
  
  
  