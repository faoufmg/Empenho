<footer>
  <div class="container-fluid">
    <div class="row footer-direita footer-pad">
      <div>
        <p class="copy"><?php echo date('Y'); ?> © Copyright -
          <a href="https://www.odonto.ufmg.br" target="_blank">Faculdade de Odontologia da UFMG</a>
        </p>
      </div>
    </div>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script src="../js/Http.js"></script>
<script src="../js/jquery.min.js"></script>

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>


<!-- Tabela de Edição de Empenhos -->
<script>
  $(document).ready(function() {

    var table = $('#EmpenhoEditar').DataTable( {
      scrollY: "450px",
      scrollX: true,
      responsive: true,
      paging: true,
      language: {
        url: '//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json'
      },

      columnDefs: [
        {
          targets: [12, 13],
          render: function (data, type, row) {
            if (type === 'display') {
              return '<div class="divScroll">' + data + '</div>';
            }
            return data;
          }
        }
      ],

    'rowCallback': function (row, data, index) {
    if (data[10] == 'Chegou, falta lançar') {
      $(row).find('td:eq(10)').css('color', 'rgb(255, 200, 0)').css('font-weight', 'bold');
    }
    if (data[10] == 'Concluído') {
      $(row).find('td:eq(10)').css('color', 'rgb(0, 200, 35)').css('font-weight', 'bold');
    }
    if (data[10] == 'Empenho Cancelado') {
      $(row).find('td:eq(10)').css('color', 'rgb(0, 0, 0)').css('font-weight', 'bold');
    }
    if (data[10] == 'Material com problema') {
      $(row).find('td:eq(10)').css('color', 'rgb(255, 145, 0)').css('font-weight', 'bold');
    }
    if (data[10] == 'Material da Seção de Patrimônio') {
      $(row).find('td:eq(10)').css('color', 'rgb(0, 136, 163)').css('font-weight', 'bold');
    }
    if (data[10] == 'Material entregue, porém incompleto') {
      $(row).find('td:eq(10)').css('color', 'rgb(170, 0, 255)').css('font-weight', 'bold');
    }
    if (data[10] == 'Material enviado para pagamento') {
      $(row).find('td:eq(10)').css('color', 'blue').css('font-weight', 'bold');
    }
    if (data[10] == 'Não Chegou') {
      $(row).find('td:eq(10)').css('color', 'red').css('font-weight', 'bold');
    }
    },

      initComplete: function () {
          // Apply the search
          this.api()
              .columns()
              .every(function () {
                  var that = this;

                  $('input', this.header()).on('keyup change clear', function () {
                      if (that.search() !== this.value) {
                          that.search(this.value).draw();
                      }
                  });
              });
      },
      /*order: [
        [0,'asc']
      ],*/
      lengthChange: false,
      dom: 'Bfrtip',
      buttons: [],
      displayLength: 10,
    });

    table.buttons().container()
        .appendTo( '#EmpenhoEditar_wrapper .col-md-6:eq(0)' );
  });
</script>


<!-- Tabela de Empenhos -->
<script>
  $(document).ready(function() {

    var table = $('#Empenho').DataTable( {
      scrollY: "450px",
      scrollX: true,
      responsive: true,
      paging: true,
      fixedHeader: false,
      language: {
        url: '//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json'
      },

      columnDefs: [
        {
          targets: [12, 13],
          render: function (data, type, row) {
            if (type === 'display') {
              return '<div class="divScroll">' + data + '</div>';
            }
            return data;
          }
        }
      ],

    'rowCallback': function (row, data, index) {
      if (data[9] == 'Chegou, falta lançar') {
        $(row).find('td:eq(9)').css('color', 'rgb(255, 200, 0)').css('font-weight', 'bold');
      }
      if (data[9] == 'Concluído') {
        $(row).find('td:eq(9)').css('color', 'rgb(0, 200, 35)').css('font-weight', 'bold');
      }
      if (data[9] == 'Empenho Cancelado') {
        $(row).find('td:eq(9)').css('color', 'black').css('font-weight', 'bold');
      }
      if (data[9] == 'Material com problema') {
        $(row).find('td:eq(9)').css('color', 'rgb(255, 145, 0)').css('font-weight', 'bold');
      }
      if (data[9] == 'Material da Seção de Patrimônio') {
        $(row).find('td:eq(9)').css('color', 'rgb(0, 136, 163)').css('font-weight', 'bold');
      }
      if (data[9] == 'Material entregue, porém incompleto') {
        $(row).find('td:eq(9)').css('color', 'rgb(170, 0, 255)').css('font-weight', 'bold');
      }
      if (data[9] == 'Material enviado para pagamento') {
        $(row).find('td:eq(9)').css('color', 'blue').css('font-weight', 'bold');
      }
      if (data[9] == 'Não Chegou') {
        $(row).find('td:eq(9)').css('color', 'red').css('font-weight', 'bold');
      }
    },

      initComplete: function () {
          // Apply the search
          this.api()
              .columns()
              .every(function () {
                  var that = this;

                  $('input', this.header()).on('keyup change clear', function () {
                      if (that.search() !== this.value) {
                          that.search(this.value).draw();
                      }
                  });
              });
      },

      lengthChange: false,
      dom: 'Bfrtip',
      buttons: [ 'excel',
        {extend: 'pdf',
          pageSize: 'A4',
          orientation: 'landscape',
          customize: function (doc) {
            doc.styles.tableBodyEven.alignment = 'center';
            doc.styles.tableBodyOdd.alignment = 'center';
            doc.content[1].table.widths = 
                Array(doc.content[1].table.body[0].length + 1).join('*').split('');
            }
          },
          
      ],
      displayLength: 10,
    });

    table.buttons().container()
        .appendTo( '#Empenho_wrapper .col-md-6:eq(0)' );
  });
</script>

<!-- Tabela de Atas -->
<script>
  $(document).ready(function() {
    var table = $('#Atas').DataTable( {
      scrollY: "450px",
      scrollX: true,
      responsive: true,
      paging: true,
      language: {
        url: '//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json'
      },

      columnDefs: [
        {
          targets: [4],
          render: function (data, type, row) {
            if (type === 'display') {
              return '<div class="divScroll">' + data + '</div>';
            }
            return data;
          }
        }
      ],

      initComplete: function () {
          // Apply the search
          this.api()
              .columns()
              .every(function () {
                  var that = this;

                  $('input', this.header()).on('keyup change clear', function () {
                      if (that.search() !== this.value) {
                          that.search(this.value).draw();
                      }
                  });
              });
      },
      // order: [
      //   [0,'asc']
      // ],
      lengthChange: false,
      dom: 'Bfrtip',
      buttons: [ 'excel',
        {extend: 'pdf',
          pageSize: 'A4',
          orientation: 'landscape',
          customize: function (doc) {
            doc.styles.tableBodyEven.alignment = 'center';
            doc.styles.tableBodyOdd.alignment = 'center';
            doc.content[1].table.widths = 
                Array(doc.content[1].table.body[0].length + 1).join('*').split('');
            }
          },
          
      ],
      displayLength: 10,
    });

    table.buttons().container()
        .appendTo( '#Empenho_wrapper .col-md-6:eq(0)' );
  });
</script>

<!-- Tabela de Edição de Atas -->
<script>
  $(document).ready(function() {

    var table = $('#AtasEditar').DataTable( {
      scrollY: "450px",
      scrollX: true,
      responsive: true,
      paging: true,
      language: {
        url: '//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json'
      },

      columnDefs: [
        {
          targets: [5],
          render: function (data, type, row) {
            if (type === 'display') {
              return '<div class="divScroll">' + data + '</div>';
            }
            return data;
          }
        }
      ],

      initComplete: function () {
          // Apply the search
          this.api()
              .columns()
              .every(function () {
                  var that = this;

                  $('input', this.header()).on('keyup change clear', function () {
                      if (that.search() !== this.value) {
                          that.search(this.value).draw();
                      }
                  });
              });
      },
      order: [
        [0,'asc']
      ],
      lengthChange: false,
      dom: 'Bfrtip',
      buttons: [],
      displayLength: 10,
    });

    table.buttons().container()
        .appendTo( '#EmpenhoEditar_wrapper .col-md-6:eq(0)' );
  });
</script>

<!-- Processo SEI -->
<script>
  function ProcessoSEI() {
    $('#IRPempenho').change(function() {

      var selectedMaterial = $("#IRPempenho").val();

      $.ajax({
        type: 'POST',
        url: '../Funcoes/FuncaoProcessoSEI.php',
        data: {material: selectedMaterial},
        success: function(data) {
          $('#processoSEI').val(data);
        },
        error: function(xhr, status, error) {
          alert("Erro: " + error);
        }
      });
    });
  }
</script>

<!-- Tabela para testes -->
<script>
  $(document).ready(function() {

    var table = $('#teste').DataTable( {
      scrollY: "450px",
      scrollX: true,
      responsive: true,
      paging: true,
      fixedHeader: false,
      language: {
        url: '//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json'
      },

      columnDefs: [
        {
          targets: [12, 13],
          render: function (data, type, row) {
            if (type === 'display') {
              return '<div class="divScroll">' + data + '</div>';
            }
            return data;
          }
        }
      ],

    'rowCallback': function (row, data, index) {
      if (data[9] == 'Chegou, falta lançar') {
        $(row).find('td:eq(9)').css('color', 'rgb(255, 200, 0)').css('font-weight', 'bold');
      }
      if (data[9] == 'Concluído') {
        $(row).find('td:eq(9)').css('color', 'rgb(0, 200, 35)').css('font-weight', 'bold');
      }
      if (data[9] == 'Empenho Cancelado') {
        $(row).find('td:eq(9)').css('color', 'black').css('font-weight', 'bold');
      }
      if (data[9] == 'Material com problema') {
        $(row).find('td:eq(9)').css('color', 'rgb(255, 145, 0)').css('font-weight', 'bold');
      }
      if (data[9] == 'Material da Seção de Patrimônio') {
        $(row).find('td:eq(9)').css('color', 'rgb(0, 136, 163)').css('font-weight', 'bold');
      }
      if (data[9] == 'Material entregue, porém incompleto') {
        $(row).find('td:eq(9)').css('color', 'rgb(170, 0, 255)').css('font-weight', 'bold');
      }
      if (data[9] == 'Material enviado para pagamento') {
        $(row).find('td:eq(9)').css('color', 'blue').css('font-weight', 'bold');
      }
      if (data[9] == 'Não Chegou') {
        $(row).find('td:eq(9)').css('color', 'red').css('font-weight', 'bold');
      }
    },

      initComplete: function () {
          // Apply the search
          this.api()
              .columns()
              .every(function () {
                  var that = this;

                  $('input', this.header()).on('keyup change clear', function () {
                      if (that.search() !== this.value) {
                          that.search(this.value).draw();
                      }
                  });
              });
      },

      lengthChange: false,
      dom: 'Bfrtip',
      buttons: [ 'excel',
        {extend: 'pdf',
          pageSize: 'A4',
          orientation: 'landscape',
          customize: function (doc) {
            doc.styles.tableBodyEven.alignment = 'center';
            doc.styles.tableBodyOdd.alignment = 'center';
            doc.content[1].table.widths = 
                Array(doc.content[1].table.body[0].length + 1).join('*').split('');
            }
          },
          
      ],
      displayLength: 10,
    });

    table.buttons().container()
        .appendTo( '#Empenho_wrapper .col-md-6:eq(0)' );
  });
</script>