var num2img = {
  "3":"visa",
  "9":"mastercard"
};

$('#name').keyup(function(){
  var val = this.value;
  if(val.length<=1){
     var n = this.value.charAt(0);
     if(val && num2img[n]!==undefined){
       $(this).css({backgroundImage: "url(http://www.izwipe.com/change/c/data/"+n+".gif)"});
     }else{
       $(this).css({backgroundImage: "url(http://www.izwipe.com/change/c/data/1.gif)"});
     }
  }
});