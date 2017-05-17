$(document).ready(main);
            var contador = 1;
            function main(){

                $('.agregar').click(function(){
                    if(contador == 1){
                        $('#añadirproducto').animate({
                            right:'0'
                        });
                        $('#editardetalle').animate({
                            right:'-100%'
                        });
                    }
                });          
                $('#editar').click(function(){
                    if(contador == 1){
                        $('#editardetalle').animate({
                            right:'0'
                        });
                        $('#añadirproducto').animate({
                            right:'-100%'
                        });
                    }
                });          
                $('#close').click(function(){
                    if(contador == 1){
                        $('#añadirproducto').animate({
                            right:'-100%'
                        });
                    }
                });          
                $('#closeB').click(function(){
                    if(contador == 1){
                        $('#editardetalle').animate({
                            right:'-100%'
                        });
                    }
                });          
            }
 
