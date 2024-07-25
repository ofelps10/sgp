function verify_fields_client(codbtn) {
    
    var nmcliente = $('#nm_cliente').val();
    var cel_cliente = $('#cel_cliente').val();
	var new_cel_cliente = cel_cliente.replace(/[^0-9]/g, '');

    switch (codbtn) {
        case 1:
            if(nmcliente.length > 5) {
                $('#nm_cliente').removeClass('is-invalid');
                $('#nm_cliente').addClass('is-valid');
            }
            else {
                $('#nm_cliente').removeClass('is-valid');
                $('#nm_cliente').addClass('is-invalid');
            }
        break;
        case 2:
            if(new_cel_cliente.length >= 11) {
                $('#cel_cliente').removeClass('is-invalid');
                $('#cel_cliente').addClass('is-valid');
            }
            else {
                $('#cel_cliente').removeClass('is-valid');
                $('#cel_cliente').addClass('is-invalid');
            }
        break;
      }
}

function newCliente() {
    $('#nmContent').html('Novo cliente');
    $('#contentMain').load("assets/pages/clientes/novo_cliente.php");
}   
function newFornecedor() {
    $('#nmContent').html('Novo fornecedor');
    $('#contentMain').load("assets/pages/fornecedores/novo_fornecedor.php");
}

function newProduto() {
    $('#nmContent').html('Novo produto');
    $('#contentMain').load("assets/pages/produtos/novo_produto.php");
}

function newMovimento() {
    $('#nmContent').html('Nova movimentação');
    $('#contentMain').load("assets/pages/movimentacao/nova_movimentacao.php");
}

function modal_endereco(idCampo) {
	$.post('assets/pages/components/modal_endereco.php', {}, function (data) {
		$('#' + idCampo).html(data);
		$('#novo_endereco').modal('show')
	});
}

function get_uf(id) {
	$.post('assets/pages/templates/get_uf.php', { ok: 'ok' }, function (data) {
		$('#' + id).html(data);
	});
}

function get_categoria(id) {
	$.post('assets/pages/templates/get_categoria.php', { ok: 'ok' }, function (data) {
		$('#' + id).html(data);
	});
}
function get_fornecedor(id) {
	$.post('assets/pages/templates/get_fornecedor.php', { ok: 'ok' }, function (data) {
		$('#' + id).html(data);
	});
}

function get_subcategoria(idcategoria, idcampo) {
    
	$.post('assets/pages/templates/get_subcategoria.php', { idcategoria }, function (data) {
        if (idcategoria != "") {
            $('#' + idcampo).prop('disabled', false);
        }
        else {
            $('#' + idcampo).prop('disabled', true);
        }
        $('#' + idcampo).html(data);
	});
}

function get_endereco(T, codcep) {


    $(T).keypress(function (press) {
        var newCep = codcep.replace(/[^0-9]/g, '');
		if (press.which == 13) {
            $.post('assets/pages/templates/get_endereco.php', { newCep }, function (data) {
                var dt_endereco = data.split(',');
		        $('.dt_end_0').val(dt_endereco[0]);
		        $('.dt_end_1').val(dt_endereco[1]);
		        $('.dt_end_2').val(dt_endereco[2]);
		        $('.dt_end_3').val(dt_endereco[3]);
		        $('.dt_end_4').val(dt_endereco[4]);
            });
		}
	})
}
// PARA OUTRO ARQUIVO JS A PARTIR DAQUI
function cad_cliente() {

    var tpCliente = $('#tp_cliente').val();
    var nmCliente = $('#nm_cliente').val();
    var nascCliente = $('#nasc_cliente').val();
    var genCliente = $('#genero_cliente').val();
    var telCliente = $('#tel_cliente').val();
    var celCliente = $('#cel_cliente').val();
	var newtelCliente = telCliente.replace(/[^0-9]/g, '');
	var newcelCliente = celCliente.replace(/[^0-9]/g, '');
    var emailCliente = $('#email_cliente').val();
    var cpfCliente = $('#cpf_cliente').val();
	var newcpfCliente = cpfCliente.replace(/[^0-9]/g, '');
    var endCliente = $('#cod_endereco').val();
    var numCliente = $('#num_cliente').val();
    var compCliente = $('#complemento_cliente').val();

    $.post('assets/pages/clientes/insert_cliente.php', { tpCliente, nmCliente, nascCliente, genCliente, newtelCliente, newcelCliente, emailCliente, newcpfCliente,
        endCliente, numCliente, compCliente}, function (data) {
        alert(data);
    });
}

function cad_endereco() {
    var numcep = $('#new_cep').val();
    var newCep = numcep.replace(/[^0-9]/g, '');
    var newLog = $('#new_logadouro').val();
    var newUf = $('#new_uf').val();
    var newMunicipio = $('#new_municipio').val();
    var newBairro = $('#new_bairro').val();
    $.post('assets/pages/templates/insert_endereco.php', { newCep, newLog, newUf, newMunicipio, newBairro }, function (data) {
        alert(data);
    });
}

function cad_fornecedor() {
   
    var tpFornecedor = $('#tp_fornecedor').val();
    var cnpj = $('#cnpj_fornecedor').val();
    var newCNPJ = cnpj.replace(/[^0-9]/g, '');
    var razaosocial = $('#rs_fornecedor').val();
    var nomefantasia = $('#nf_fornecedor').val();
    var telFornecedor = $('#tel_fornecedor').val();
    var newtelFornecedor = telFornecedor.replace(/[^0-9]/g, '');
    var celFornecedor = $('#cel_fornecedor').val();
    var newcelFornecedor = celFornecedor.replace(/[^0-9]/g, '');
    var contatofornecedor = $('#contato_fornecedor').val();
    var emailfornecedor = $('#email_fornecedor').val();
    var codEndereco = $('#cod_end_fornecedor').val();
    var numEndereco = $('#num_fornecedor').val();
    var compEndereco = $('#complemento_fornecedor').val();
    var sitefornecedor = $('#site_fornecedor').val();
    var obs_fornecedor = $('#obs_fornecedor').val();
    
    $.post('assets/pages/fornecedores/insert_fornecedor.php', { tpFornecedor, cnpj: newCNPJ, razaosocial, nomefantasia, telFornecedor: newtelFornecedor, celFornecedor: newcelFornecedor, contatofornecedor, emailfornecedor,
        codEndereco, numEndereco, compEndereco, sitefornecedor, obs_fornecedor}, function (data) {
        alert(data);
    });
}

function cad_produto() {
    var desc_produto = $('#descricao_produto').val();
    var categoria = $('#categoria_produto').val();
    var subcategoria = $('#subcategoria_produto').val();
    var uni = $('#uni_produto').val();
    var marca_produto = $('#marca_produto').val();
    var cor_produto = $('#cor_produto').val();
    var tam_produto = $('#tamanho_produto').val();
    var preco_produto = $('#preco_produto').val();
    var custo_produto = $('#custo_produto').val();
    $.post('assets/pages/produtos/insert_produto.php', { desc_produto, categoria, subcategoria, uni, marca_produto, cor_produto, tam_produto, preco_produto, custo_produto }, function (data) {
        alert(data);
    });
}

function tpMovimento() {
    var tp_movimentacao = $('#tp_movimentacao').val();
    if (tp_movimentacao == 1) {
        $('#textDocMovimento').html('Dados do documento');
        $('#tpSaida').addClass('d-none')
        $('#tpEntrada').removeClass('d-none')
    }
    else {
        $('#textDocMovimento').html('Dados da saída');
        $('#tpEntrada').addClass('d-none')
        $('#tpSaida').removeClass('d-none')

    }
}

function getProdutoId(codFilter) {
    var codproduto = $('#cod_prod_mov').val();
    if (!/^\d+$/.test(codproduto)) {
            alert('Por favor, insira apenas números no campo de código do produto.');
            $('#cod_prod_mov').val('');
            return;
    }
    $.post('assets/pages/produtos/get_produto.php', {codFilter, codproduto}, function (data) {
        var dt_produto = data.split(',');
            if (data == '404') {
                alert('Código do produto inválido!');
                $('#codProdMov').val('');
                $('#cod_prod_mov').val('');
                $('#desc_prod_mov').val('');
            }
            else {
                
                $('#codProdMov').val(dt_produto[0]);
                $('#cod_prod_mov').val(dt_produto[0]);
                $('#desc_prod_mov').val(dt_produto[1]);
            }
    });
}

function getModalProduto() {
    var descproduto = $('#desc_prod_mov').val();
    $.post('assets/pages/produtos/modal_produto.php', {descproduto}, function (data) {
        $('#modalProduto').html(data);
		$('#list_produto').modal('show')
    });
}

function loadDtProduto(id, descricao) {

    $('#codProdMov').val(id);
    $('#cod_prod_mov').val(id);
    $('#desc_prod_mov').val(descricao);
}

function updateValorTotal() {
    var qtd = parseFloat($('#qtd_prod_mov').val()) || 0;
    var vlrUn = parseFloat($('#vlrUn_prod_mov').val().replace(',', '.')) || 0;
    var vlrTotal = qtd * vlrUn;
    $('#vlrTt_prod_mov').val(vlrTotal.toFixed(2).replace('.', ','));
}



function addProduto() {
    // Obtenha os valores dos campos
    var idProdMov = $('#codProdMov').val();
    var codProdMov = $('#cod_prod_mov').val();
    var descProdMov = $('#desc_prod_mov').val();
    var qtdProdMov = $('#qtd_prod_mov').val();
    var vlrUnProdMov = $('#vlrUn_prod_mov').val();
    var vlrTtProdMov = $('#vlrTt_prod_mov').val();

    if (idProdMov == '') {
        alert('Selecione um produto');
    }
    else {
        // Crie uma nova linha na tabela
        var novaLinha = '<tr data-id="'+idProdMov+'">' +
            '<td>'+codProdMov+'</td>' +
            '<td>'+descProdMov+'</td>' +
            '<td>'+qtdProdMov+'</td>' +
            '<td>'+vlrUnProdMov+'</td>' +
            '<td>'+vlrTtProdMov+'</td>' +
            '<td><button class="btn btn-danger btn-sm remover-item "><i class="nc-icon nc-simple-remove" ></i> Remover</button></td>' +
            '</tr>';
        // Adicione a nova linha à tabela
        $('#lista_itens').append(novaLinha);
        // Limpe os campos do formulário para adicionar um novo item
        $('#codProdMov').val('');
        $('#cod_prod_mov').val('');
        $('#desc_prod_mov').val('');
        $('#qtd_prod_mov').val('1');
        $('#vlrUn_prod_mov').val('0,00');
        $('#vlrTt_prod_mov').val('');
        // Atualiza o valor total
        updateValorTotal();
    }
    $(document).on('click', '.remover-item', function() {
        $(this).closest('tr').remove();
    });
}

function gravamovimento() {

    var tp_movimentacao = $('#tp_movimentacao').val();
    var dtDoc_mov = $('#dtDoc_mov').val();
    var dtRec_mov = $('#dtRec_mov').val();
    var tpDoc_mov = $('#tpDoc_mov').val();
    var numDoc_mov = $('#numDoc_mov').val();
    var fornecProd_mov = $('#fornecProd_mov').val();
    var vlrDesc_mov = $('#vlrDesc_mov').val();
    var vlrFrete_mov = $('#vlrFrete_mov').val();
    var vlrtotal_mov = $('#vlrtotal_mov').val();
    var itens = [];
    // Itera sobre cada linha da tabela
    $('#lista_itens tr').each(function() {
        var id = $(this).data('id');
        var codigo = $(this).find('td:eq(0)').text(); // índice 0 para a primeira célula, 1 para a segunda, e assim por diante
        var descricao = $(this).find('td:eq(1)').text();
        var quantidade = $(this).find('td:eq(2)').text();
        var valorUnitario = $(this).find('td:eq(3)').text();
        var valorTotal = $(this).find('td:eq(4)').text();
        // Cria um objeto com os dados do item
        var item = {
            id: id,
            codigo: codigo,
            descricao: descricao,
            quantidade: quantidade,
            valorUnitario: valorUnitario,
            valorTotal: valorTotal
        };
        // Adiciona o item ao array de itens
        itens.push(item);

    });
    $.post('assets/pages/movimentacao/insert_movimentacao.php', {tp_movimentacao, dtDoc_mov, dtRec_mov, tpDoc_mov, numDoc_mov, fornecProd_mov, vlrDesc_mov, vlrFrete_mov, vlrtotal_mov, itens: itens }, function (data) {
		    // $('#' + id).html(data);
            alert(data)
	});
}


