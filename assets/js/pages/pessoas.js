$(document).ready(function () {
    var pessoa = $('input[name=tipoPessoa]:checked').val();
    $('#labelNomeRazao').html('Nome');
    $('#nomeFantasia').addClass('hide');
    $('#dataNasc').addClass('show');
    $('#sexo').addClass('show');
    $('#labelNacionalidade').html('Nacionalidade');
    $('#labelCPFCNPJ').html('CPF');
    $('#cpfCnpj').addClass('cpf');
    $('.cpf').mask('000.000.000-00', {reverse: true});
    $('#labelrgIE').html('RG');
    $('.cep').mask('00000-000');
    $('.rgie').addClass('m6 l4');

    $(".tipoPessoa").change(function () { //use change event
        if (this.value === "fisica") { //check value if it is domicilio
            console.log('Pessoa Fisica');
            $('#labelNomeRazao').html('Nome');
            $('#nomeFantasia').addClass('hide');
            $('#estadocivil').removeClass('hide');
            $('#dataNasc').removeClass('hide');
            $('#sexo').removeClass('hide');
            $('#labelNacionalidade').html('Nacionalidade');
            $('#labelCPFCNPJ').html('CPF');
            $('#ufRG').removeClass('hide');
            $('#orgaoemissor').removeClass('hide');
            $('#cpfCnpj').removeClass('cnpj');
            $('#cpfCnpj').addClass('cpf');
            $('.cpf').mask('000.000.000-00', {reverse: true});
            $('#labelrgIE').html('RG');
            $('.rgie').addClass('m6 l4');
            $('.rgie').removeClass('m12 l5');
        } else {
            console.log('Pessoa Jurídica');
            $('#labelNomeRazao').html('Razão Social');
            $('#nomeFantasia').removeClass('hide');
            $('#estadocivil').addClass('hide');
            $('#dataNasc').addClass('hide');
            $('#sexo').addClass('hide');
            $('#labelNacionalidade').html('País de Origem');
            $('#ufRG').addClass('hide');
            $('#orgaoemissor').addClass('hide');
            $('#labelCPFCNPJ').html('CNPJ');
            $('#cpfCnpj').removeClass('cpf');
            $('#cpfCnpj').addClass('cnpj');
            $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
            $('#labelrgIE').html('Inscrição Estadual');
            $('.rgie').addClass('m12 l5');
            $('.rgie').removeClass('m6 l4');
        }
    });
});