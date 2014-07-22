$(document).ready(function() {
    $("a#inline").fancybox({
        'hideOnContentClick': true
    });

    /* Apply fancybox to multiple items */
    
    $("a.group").fancybox({
        'transitionIn'  :   'elastic',
        'transitionOut' :   'elastic',
        'speedIn'       :   600, 
        'speedOut'      :   200, 
        'overlayShow'   :   false
    });

	//alert ("sep");
           $('#datetimepicker1').datetimepicker({
                       language: 'es'
                });
           $('#formRevista').bootstrapValidator({
               
            feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
             invalid: 'glyphicon glyphicon-remove',
             validating: 'glyphicon glyphicon-refresh'
           },
		    fields: {
		        numero: {
		            validators: {
		                notEmpty: {
		                     message: 'Este campo es requerido'
		                },
		                stringLength: {
		                    min: 1,
		                    max: 10,
		                     message: 'De 10 a 45 caracteres'
		                },
		                regexp: {
		                    regexp: /^[0-9]+$/,
		                   message: 'Ingrese solo valores numericos'
		                }
		            }
		        },
		        clave: {
		            validators: {
		                notEmpty: {
		                     message: 'Este campo es requerido'
		                },
		                stringLength: {
		                    min: 3,
		                    max: 45,
		                    message: 'De 3 a 45 caracteres'
		                },
		                regexp: {
		                    regexp: /^[a-zA-Z0-9_]+$/,
		                   message: 'La clave solo puede tener letras, numeros y guion bajo'
		                }
		            }
		        },
		        volumen: {
		            validators: {
		                notEmpty: {
		                    message: 'Este campo es requerido'
		                },
		                stringLength: {
		                    min: 1,
		                    max: 5,
		                     message: 'De 1 a 5 caracteres'
		                },
		                regexp: {
		                    regexp: /^[0-9]+$/,
		                   message: 'El volumen solo puede tener numeros'
		                }
		            }
		        },
		        nombre: {
		            validators: {
		                notEmpty: {
		                    message: 'Este campo es requerido'
		                }
		            }
		        },
		        portada: {
		            validators: {
		                notEmpty: {
		                    message: 'Este campo es requerido'
		                },
		                 file: {
		                        extension: 'jpeg,png,jpg',
		                        type: 'image/jpeg,image/png,image/jpg',
		                        maxSize: 2048 * 1024,   // 2 MB
		                        message: 'Archivo no valido'
		                    }
		            }
		        },
		        titulo: {
		            validators: {
		                notEmpty: {
		                    message: 'Este campo es requerido'
		                }
		            }
		        },
		        subtitulo: {
		            validators: {
		                notEmpty: {
		                    message: 'Este campo es requerido'
		                }
		            }
		        },
		        club: {
		            validators: {
		                notEmpty: {
		                    message: 'Este campo es requerido'
		                }
		            }
		        }
          
        }
    });
    

    $('#datetimepicker2').datetimepicker({
                       language: 'es'
                });
    $('#formArticulo').bootstrapValidator({
               
                feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                 invalid: 'glyphicon glyphicon-remove',
                 validating: 'glyphicon glyphicon-refresh'
               },
        fields: {
            nombre: {
                validators: {
                    notEmpty: {
                         message: 'Este campo es requerido'
                    },
                    stringLength: {
                        min: 10,
                        max: 500,
                         message: 'De 10 a 500 caracteres'
                    }
                }
            },
            resumen: {
                validators: {
                    notEmpty: {
                         message: 'Este campo es requerido'
                    }
                }
            },
            abstract: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }
            },
            introduccion: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }
            },
            metodologia: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }
            },
            contenido: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }
            },
            fecha_creacion: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }
            },
            conclusiones: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }
            },
            agradecimientos: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }
            },
            referencias: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }
            },
            id_status: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }
            },
              archivo_pdf: {
                    validators: {
                        file: {
                            extension: 'pdf',
                            message: 'Solo archivos .pdf'
                        }
                    }
                }
          
        }
    });
    

    $('#formAutor').bootstrapValidator({
               
                feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                 invalid: 'glyphicon glyphicon-remove',
                 validating: 'glyphicon glyphicon-refresh'
               },
        fields: {
            nombre: {
                validators: {
                    notEmpty: {
                         message: 'Este campo es requerido'
                    },
                    stringLength: {
                        min: 10,
                        max: 100,
                         message: 'De 10 a 100 caracteres'
                    }
                }
            },
            apellidos: {
                validators: {
                    notEmpty: {
                         message: 'Este campo es requerido'
                    },
                    stringLength: {
                        min: 10,
                        max: 200,
                         message: 'De 10 a 200 caracteres'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'El email es requerido'
                    },
                    emailAddress: {
                        message: 'Este no es un email valido'
                    }
                }
            }
          
        }
    });
    

     $('#formIndice').bootstrapValidator({
               
                feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                 invalid: 'glyphicon glyphicon-remove',
                 validating: 'glyphicon glyphicon-refresh'
               },
        fields: {
            titulo: {
                validators: {
                    notEmpty: {
                         message: 'Este campo es requerido'
                    },
                    stringLength: {
                        min: 10,
                        max: 100,
                         message: 'De 10 a 100 caracteres'
                    }
                }
            },
            numero: {
                validators: {
                    notEmpty: {
                         message: 'Este campo es requerido'
                    },
                      regexp: {
                        regexp: /^[0-9]+$/,
                       message: 'Solo numeros'
                    }
                }
            },
            id_revista: {
                validators: {
                    notEmpty: {
                        message: 'El email es requerido'
                    }
                }
            }
          
        }
    });
    
    $('#formIndiceArticulo').bootstrapValidator({
               
                feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                 invalid: 'glyphicon glyphicon-remove',
                 validating: 'glyphicon glyphicon-refresh'
               },
        fields: {
          
            numero: {
                validators: {
                    notEmpty: {
                         message: 'Este campo es requerido'
                    },
                      regexp: {
                        regexp: /^[0-9]+$/,
                       message: 'Solo numeros'
                    }
                }
            },
            id_articulo: {
                validators: {
                    notEmpty: {
                         message: 'Este campo es requerido'
                    },
                      regexp: {
                        regexp: /^[0-9]+$/,
                       message: 'Solo numeros'
                    }
                }
            },
        id_indice: {
                validators: {
                    notEmpty: {
                         message: 'Este campo es requerido'
                    },
                      regexp: {
                        regexp: /^[0-9]+$/,
                       message: 'Solo numeros'
                    }
                }
            }
          
        }
    });

$('#formStatus').bootstrapValidator({
               
                feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                 invalid: 'glyphicon glyphicon-remove',
                 validating: 'glyphicon glyphicon-refresh'
               },
        fields: {
          
            status: {
                validators: {
                    notEmpty: {
                         message: 'Este campo es requerido'
                    }
                      
                }
            }
          
        }
    });

});