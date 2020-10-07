$(function () {
    $(".mbl-topic-about").click(function(){
       if($(".mbl-topic-about .icon-ionic-ios-arrow-down").length !== 0){
          $(".mbl-topic-about .icon-ionic-ios-arrow-down").addClass('icon-ionic-ios-arrow-up').removeClass("icon-ionic-ios-arrow-down")
       }
       else {
          $(".mbl-topic-about .icon-ionic-ios-arrow-up").addClass('icon-ionic-ios-arrow-down').removeClass('icon-ionic-ios-arrow-up')
       }
        $(".mbl-list-about").slideToggle()
    });
    $(".mbl-topic-win").click(function(){
        if($(".mbl-topic-win .icon-ionic-ios-arrow-down").length !== 0){
            $(".mbl-topic-win .icon-ionic-ios-arrow-down").addClass('icon-ionic-ios-arrow-up').removeClass("icon-ionic-ios-arrow-down")
         }
         else {
            $(".mbl-topic-win .icon-ionic-ios-arrow-up").addClass('icon-ionic-ios-arrow-down').removeClass('icon-ionic-ios-arrow-up')
         }
        $(".mbl-list-win").slideToggle()
    });
    $(".mbl-topic-change").click(function(){
        if($(".mbl-topic-change .icon-ionic-ios-arrow-down").length !== 0){
            $(".mbl-topic-change .icon-ionic-ios-arrow-down").addClass('icon-ionic-ios-arrow-up').removeClass("icon-ionic-ios-arrow-down")
         }
         else {
            $(".mbl-topic-change .icon-ionic-ios-arrow-up").addClass('icon-ionic-ios-arrow-down').removeClass('icon-ionic-ios-arrow-up')
         }
        $(".mbl-list-change").slideToggle()
    });
    $(".mbl-topic-account").click(function(){
        if($(".mbl-topic-account .icon-ionic-ios-arrow-down").length !== 0){
            $(".mbl-topic-account .icon-ionic-ios-arrow-down").addClass('icon-ionic-ios-arrow-up').removeClass("icon-ionic-ios-arrow-down")
         }
         else {
            $(".mbl-topic-account .icon-ionic-ios-arrow-up").addClass('icon-ionic-ios-arrow-down').removeClass('icon-ionic-ios-arrow-up')
         }
        $(".mbl-list-account").slideToggle()
    });
    $(".mbl-topic-app").click(function(){
        if($(".mbl-topic-app .icon-ionic-ios-arrow-down").length !== 0){
            $(".mbl-topic-app .icon-ionic-ios-arrow-down").addClass('icon-ionic-ios-arrow-up').removeClass("icon-ionic-ios-arrow-down")
         }
         else {
            $(".mbl-topic-app .icon-ionic-ios-arrow-up").addClass('icon-ionic-ios-arrow-down').removeClass('icon-ionic-ios-arrow-up')
         }
        $(".mbl-list-app").slideToggle()
    });
})