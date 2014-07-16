$(document).ready(function() {
    $('.registerForm').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            username: {
                message: 'El campo no es valido',
                validators: {
                    notEmpty: {
                        message: 'El campo no puede estar vacio'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'El campo debe de ser entre 6 y 30 caracteres'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'El campo solo consiste en caracteres alfabeticos, numericos y guion bajo'
                    }
                }
            }
        }
    });

  $(function () {
                $('#datetimepicker1').datetimepicker({
                    language: 'es',
                    
                });
            });

  $(function() {
    $("a[rel=musica]").fancybox({
        'transitionIn'        : 'none',
        'transitionOut'        : 'none',
        'titlePosition'     : 'over',
        'titleFormat'        : function(title, currentArray, currentIndex, currentOpts) {
            return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
        }
    });
    });

});