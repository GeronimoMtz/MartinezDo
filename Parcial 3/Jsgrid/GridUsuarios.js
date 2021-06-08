$('document').ready(function () {

$.post('consulta.php', function (ret) {

        if ( ret['resultado'] !=0 ) {
             alert('Error de carga');
        } else {
             $("#jsGrid").jsGrid({
             width: "100%",
             height: "400px",
             inserting: true,
             editing: true,
             sorting: true,
             paging: true,
             data: ret.detalle,
             onItemDeleted: function(args) {   console.log(args.item);  },
             fields: [{ name: "usuario",type: "text",title: "Usuario",         width: 100,validate: "required"},
                     { name: "password",    type: "text",title: "Contraseña",     width: 100},
                     { type: "control"}],
            });
        }

},'json');




});