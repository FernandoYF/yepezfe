$('document').ready(function () 
{
    $.post('traerinfo.php', function (datos) {
                 $("#Datosjsgrid").jsGrid({
                 width: "100%",
                 height: "400px",
                 inserting: true,
                 editing: true,
                 sorting: true,
                 paging: true,
                 data: datos,
                 onItemDeleted: function(args) {   console.log(args.item);  },
                 fields: [
                         { name: "id", 
                         type: "text", 
                         title: "ID", 
                         width: 100, 
                         validate: "required"},
                         { name: "Titular", 
                         type: "text", 
                         title: "Nombre", 
                         width: 100},
                         { name: "ApellidoPa", 
                         type: "text", 
                         title: "Apellido Paterno", 
                         width: 100},
                         { name: "ApellidoMa", 
                         type: "text", 
                         title: "Apellido Materno", 
                         width: 100},
                         { name: "Nickname", 
                         type: "text", 
                         title: "Nickname", 
                         width: 100},
                         { name: "Contraseña", 
                         type: "text", 
                         title: "Contra", 
                         width: 100},
                         ],
                });
            }
    ,'json');
});
