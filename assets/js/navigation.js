$(function () {
    $('#contentMain').load("assets/pages/home/home_panel.php");

    $('.nav li').click(function(){
        $('.nav li').removeClass('active');
        $(this).addClass('active');
        $('#nmContent').html('');
    });
    
    $('#home_panel').click(function () {
        $('#contentMain').load("assets/pages/home/home_panel.php", function () {
            $('#nmContent').html('Início');
        
        });
    });
    $('#frm_clientes').click(function () {
        $('#contentMain').load("assets/pages/clientes/frm_clientes.php", function () {
            $('#nmContent').html('Clientes');
            tab_clientes()
        });
    });
    $('#frm_fornecedores').click(function () {
        $('#contentMain').load("assets/pages/fornecedores/frm_fornecedores.php", function () {
            $('#nmContent').html('Fornecedores');
            tab_fornecedores()
        });
    });
    $('#frm_produtos').click(function () {
        $('#contentMain').load("assets/pages/produtos/frm_produtos.php", function () {
            $('#nmContent').html('Produtos');
            tab_produtos()
        });
    });

    $('#frm_movimentacao').click(function () {
        $('#contentMain').load("assets/pages/movimentacao/frm_movimentacao.php", function () {
            $('#nmContent').html('Movimentação');
            tab_movimentacao()
        });
    });
    
});