$(".linkki").click(function()
{
    $(".linkki").each(function()
    { 
        $(this).removeClass("selected");
    });
    $(this).addClass("selected");
});