    //Ver Entradas
    function blogedit(id) {
      var beditar = $('#beditar');
      beditar.attr('action','entradas/edit/'+id)
      var edittitulo = $('#beditar #edittitulo');
      var editcuerpo = $('#beditar #editcuerpo');
      var editautor = $('#beditar #editautor');

      $.get(baseurl+"entradas/datablog/"+id, function(data){
            var s = JSON.parse(data);

            edittitulo.val(s.titulo);
            editcuerpo.val(s.cuerpo);
            editautor.val(s.autor);
        });
    }
