!function(getbootpad){"use strict";
    getbootpad(function(){
        var b=getbootpad(window),c=getbootpad(document.body);
        c.scrollspy({target:".getbootpad-sidebar"}),
        b.on("load",function(){c.scrollspy("refresh")}),
        getbootpad(".getbootpad-container [href=#]").click(function(getbootpad){getbootpad.preventDefault()}),
        setTimeout(function(){
            var b=getbootpad(".getbootpad-sidebar");
            b.affix({
                offset:{
                    top:function(){
                        var c=b.offset().top,
                        d=parseInt(b.children(0).css("margin-top"),10),
                        e=getbootpad().height();
                        return this.top=c-e-d
                    },
                    bottom:function(){
                        return this.bottom=getbootpad(".footer").outerHeight(!0)
                    }
                }
            })
        },100)
    })
}(jQuery);