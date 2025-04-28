$(document).on('ready', function(){
      
    $(document).on('click', '.pagination li a', function(e){
        e.preventDefault();
        
        var url = $(this).attr('href');
        load(url);
    });

   ModalCRUD.create({
        title: entity_title,
        element: '#btn-create',
        form_element: '#form-create',
        url: function(elemt){
            return $(elemt).attr('href');
        },
        initialized:function(element){
                    init_fuctions();
                },
        rules: rules,
        afterSuccess : function(){
            load();
        }
    });

    ModalCRUD.edit({
        title: entity_title,
        element: '.btn-edit',
        form_element: '#form-edit',
        url: function(elemt){
            return $(elemt).attr('href');
        },
        initialized:function(element){
                    init_fuctions();
                },
        rules: rules,
        afterSuccess : function(data){
            load();
        }
    });
    
    ModalCRUD.show({
        title: entity_title,
        element: '.btn-show',
        initialized:function(element){
                    //init_fuctions();
        },
        url: function(elemt){
            return $(elemt).attr('href');
        }
    });
    
    ModalCRUD.delete({
        title:  entity_title,
        element: '.btn-delete',
        delete_form: '#form-delete',
        afterSuccess : function(){
            load();
        }
    });
   
    load();

});

 /* @Validation 
------------------------------------------ */ 
var customize_rules = {
    /* @validation states + elements 
    ------------------------------------------- */
    ignore: [],
    errorClass: "state-error",
    validClass: "state-success",
    errorElement: "em",

    /* rules 
    ------------------------------------------ */
    rules:{},

    /* error messages 
    ---------------------------------------------- */
    messages: {},

    /* highlighting + error placement  
    ---------------------------------------------------- */
    highlight: function(element, errorClass, validClass) {
        $(element).closest('.field').addClass(errorClass).removeClass(validClass);
        $(element).parent().find('.select2 > .selection > .select2-selection').addClass(errorClass).removeClass(validClass);
    },
    unhighlight: function(element, errorClass, validClass) {
        $(element).closest('.field').removeClass(errorClass).addClass(validClass);
        $(element).parent().find('.select2 > .selection > .select2-selection').removeClass(errorClass).addClass(validClass);
    },
    errorPlacement: function(error, element) {
        if (element.is(":radio") || element.is(":checkbox")) {
            element.closest('.option-group').after(error);
        } else {
            error.insertAfter(element.parent());
            error.insertAfter(element.closest(".field"));
        }
    }
};

var rules = $.extend( true, {}, customize_rules );
rules.rules = {
        placa: {required: true},
        marca: {required: true},
        modelo: {required: true},
        fecha_fabricacion: {required: true},
        nombre: {required: true},
        apellido: {required: true},
        nro_doc: {required: true},
        correo: {required: true},
        telefono: {required: true}
};

var load = function(url = null){  
        var url = url ? url : url_load;
        $.get( url,function(data) {
          $('#table-content').html(data);
        }).fail( function( jqXHR, textStatus, errorThrown ) {
            alert( 'Error!!'+jqXHR.status );
        });
    }  
    
var init_fuctions = function()
{       
    $("#fecha_fabricacion").datetimepicker({
        locale: 'en',
        format: 'YYYY/MM/DD',
        useCurrent: false,
        widgetPositioning: {vertical: 'bottom'}
    });

    $(".select2.select2-container").removeAttr("style");
}