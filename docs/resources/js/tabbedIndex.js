$('.tabs a').click(function(){
    panelContainerColor = $(this);
    $('.panel').hide();
    $('.tabs').removeClass('active').addClass('inactive');
    $this.addClass('active').blur();
    var panelContainerColor = panelContainerColor.css('background-color');
    $('.panelContainer').css({backgroundColor: panelContainerColor});
    var panel = panelContainerColor.attr('href');
    $(panel).fadeIn(350);
    return false;
});//end click
$('.tabs li:first a').click();

export var getWindowData = window.name.toString();