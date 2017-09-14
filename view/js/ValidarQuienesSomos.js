
$(document).ready(function() {
	 
	//Validacion con BootstrapValidator
	fl = $('#form-mensajes');
    fl.bootstrapValidator({ 
        message: 'El valor no es valido.',
        //fields: name de los inputs del formulario, la regla que debe cumplir y el mensaje que mostrara si no cumple la regla
        fields: {
        	
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
    mensaje: {
        validators: {
        	notEmpty: {
                message: 'Este campo es requerido.'
        }
            
        }
    }      
                
                
                
        }

       
    });
});

