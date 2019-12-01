console.log("1123");
$(function(){
    let top =$(".fas");
    top.click(function(){
        console.log("clicked");
        $("body,html").animate({
            scrollTop:0
        },1000);
        return false;
    });
})

