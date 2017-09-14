
	$(document).ready(function() {
		$("#ok").hide();
		//Validacion con BootstrapValidator
		fl = $('#form-afiliaciones');
	    fl.bootstrapValidator({ 
	        message: 'El valor no es valido.',
	        //fields: name de los inputs del formulario, la regla que debe cumplir y el mensaje que mostrara si no cumple la regla
	        feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
	        fields: {
	        	
	        	
	        	
	        	correo_usuario: {
	                    validators: {
	                    	notEmpty: {
	                            message: 'Este campo es requerido.'
	                    },
	                    emailAddress:{
	                        message: 'El correo no es valido.'
	                      }
	                        
	                    }
	                },
	                
	                
	                ccorreo_usuario: {
	                    validators: {
	                    	notEmpty: {
	                            message: 'Este campo es requerido.'
	                    },
	                    emailAddress:{
	                        message: 'El correo no es valido.'
	                      },
	                        
	                      identical: {
	                            field: 'correo_usuario',
	                            message: 'No coinciden'
	                        }
	                    }
	                },
	                
	                
	               
	                nombres_usuario: {
                        validators: {
                                notEmpty: {
                                        message: 'Este campo es requerido.'
                                },
                                regexp: {
                                	 
	               					 regexp: /^[a-zA-Z_áéíóúñ\s]*$/,
	                
	               					 message: 'Ingrese Letras'
	                
	               				 }
                        }
                },
	                
                apellidos_usuario: {
                    validators: {
                            notEmpty: {
                                    message: 'Este campo es requerido.'
                            },
                            regexp: {
                            	 
               					 regexp: /^[a-zA-Z_áéíóúñ\s]*$/,
                
               					 message: 'Ingrese Letras'
                
               				 }
                    }
            },
	                
	           
            ocupaciones: {
                validators: {
                	notEmpty: {
                        message: 'Este campo es requerido.'
                }
                    
                }
            },
            
            
            clave_usuario: {
                validators: {
                	notEmpty: {
                        message: 'Este campo es requerido.'
                }
                    
                }
            },
            
            cclave_usuario: {
                validators: {
                	notEmpty: {
                        message: 'Este campo es requerido.'
                },
                    identical: {
                        field: 'clave_usuario',
                        message: 'No coinciden'
                    }
                }
            },
            
            paises: {
                validators: {
                	notEmpty: {
                        message: 'Este campo es requerido.'
                }
                    
                }
            },
            
            provincias: {
                validators: {
                	notEmpty: {
                        message: 'Este campo es requerido.'
                }
                    
                }
            },
            
            
           	        	
      		telefono_usuario: {
	        		message: 'El telefono no es valido',
	                        validators: {
	                                notEmpty: {
	                                        message: 'El teléfono es requerido.'
	                                },
	                                regexp: {
	                                	 
	               					 regexp: /^[0-9]+$/,
	                
	               					 message: 'Ingrese números'
	                
	               				 }
	            				 
	                        }
	                },
	                
	                celular_usuario: {
		        		message: 'El Celular no es valido',
		                        validators: {
		                                notEmpty: {
		                                        message: 'El Celular es requerido.'
		                                },
		                                regexp: {
		                                	 
		               					 regexp: /^[0-9]+$/,
		                
		               					 message: 'Ingrese números'
		                
		               				 }
		            				 
		                        }
		                },
               
               
	                
	        }
	        //Cuando el formulario se lleno correctamente y se envia, se ejecuta esta funcion
	    
	    });
	    
	    
	    

	    // cada vez que se cambia el valor del combo
	    $("#btn_guardar").click(function(){
	    var datafecha= $("#fecha_nacimiento_usuario").val();
		if (datafecha ==""){
    		alert('Seleccione Fecha Nacimiento');	    		
    		return false;
    	}
		});
	    
	    
	});
	
	
	
	
	
		



		
	

