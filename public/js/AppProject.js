
$(document).ready(function() {
   
   
});

function ShowProject()
{
    const request = await fetch('api/games',{
        method:'GET',
        headers:getHeader()
    });

    const project = await request.json();

    let listHtml='';
    for(let user of usuario ){
    let BtnEliminar='<a href="#" onclick="EliminarUsuario('+user.id+')" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></a>';
    let usuariosHTML='<tr><td>'
                   +user.id+'</td><td>'
                   +user.nombre+'</td><td>'
                   +user.apellido+'</td><td>'
                   +user.email+'</td> <td>'
                   +user.clave+'</td> <td>'+BtnEliminar+'</td></tr>';
                   project+=usuariosHTML;
    }
    
    $('#gameTable tbody').html(listHtml);
    console.log(usuario);
    }


// Actualizar los proyectos 
function UpdateProject(id){
    var name_pj=$('nameProjectUp').val();
    alert( name_pj);
   }

function DestroyProject(id){
    const request = await fetch('',{
        method:'POST',
        headers:getHeader()
    });
   
   }
   function getHeader(){
    return{
           'Accept':'application/json',
           'Content-Type':'application/json',
           'Authorization':localStorage.token
    
           };
    }
