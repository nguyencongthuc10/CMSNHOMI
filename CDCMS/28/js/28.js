 $('.collapse').on('shown.bs.collapse', function(){
            $(this).parent().find(".fa-plus-circle").removeClass("fa-plus-circle").addClass("fa-minus-circle");
            }).on('hidden.bs.collapse', function(){
            $(this).parent().find(".fa-minus-circle").removeClass("fa-minus-circle").addClass("fa-plus-circle");
            });