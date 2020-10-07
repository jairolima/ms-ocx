$(function(){
console.log('teste');

$('#confirm-token-successs-button').hide()

    $('#data-profile-button').on('click', function(){
        $('#security-modal').modal('show')
        $('#security-modal .mdl-desc').text('Para alterar seus dados, escolha um dos seus contatos para receber o Token.')
        $('#security-modal .cntct-lst .cntct-itm:nth-child(1)').show()
        $('#security-modal .cntct-lst .cntct-itm:nth-child(2)').show()
    })
    
    $('#email-profile-button').on('click', function(){
        $('#security-modal').modal('show')
        $('#security-modal .mdl-desc').text('Para continuar com a alteração, enviaremos um token para o seu e-mail.')
        $('#security-modal .cntct-lst .cntct-itm:nth-child(1)').show()
        $('#security-modal .cntct-lst .cntct-itm:nth-child(2)').hide()
    })

    $('#phone-profile-button').on('click', function(){
        $('#security-modal').modal('show')
        $('#security-modal .mdl-desc').text('Para continuar com a alteração, enviaremos um token para o seu e-mail.')
        $('#security-modal .cntct-lst .cntct-itm:nth-child(1)').hide()
        $('#security-modal .cntct-lst .cntct-itm:nth-child(2)').show()
        $('#security-modal .cntct-lst #inpt-cntct-phone').attr('checked')
    })

    $('#password-profile-button').on('click', function(){
        $('#security-modal').modal('show')
        $('#security-modal .mdl-desc').text('Para alterar seus dados, escolha um dos seus contatos para receber o Token.')
        $('#security-modal .cntct-lst .cntct-itm:nth-child(1)').show()
        $('#security-modal .cntct-lst .cntct-itm:nth-child(2)').show()
    })

    $('#send-token-button').on('click', function(){
        $('#security-modal').modal('hide')
        $('#security-modal-token').modal('show')        
    })

    $('#confirm-token-button').on('click', function(){
        $('#CC-customerProfile-userdetail-edit-fields').removeClass('hide')
        $('#security-modal-token').modal('hide')
        $('.temp-buttons').removeClass('hide');
        $('.prfl-box').hide()
    })


    // BTN SAVE
    $('#btn-save-email').on('click', function(){
        $('#security-modal-token').modal('show')
        $('#security-modal-token .mdl-desc').text('Para concluir sua ação, digite o token que você recebeu em seu e-mail')
        $('#security-modal-token .mdl-receiver').text('edison_cavani87@gmail.com')
        $('#security-modal-success .mdl-text-success').text('E-mail alterado com sucesso!')
        $('#confirm-token-successs-button').show()
        $('#confirm-token-button').hide()
    })
    
    $('#btn-save-phone').on('click', function(){
        $('#security-modal-token').modal('show')
        $('#security-modal-token .mdl-desc').text('Para concluir sua ação, digite o token que você recebeu em seu telefone')
        $('#security-modal-token .mdl-receiver').text('(54) 99999-9999')
        $('#security-modal-success .mdl-text-success').text('Telefone alterado com sucesso!')
        $('#confirm-token-successs-button').show()
        $('#confirm-token-button').hide()
    })

    $('#confirm-token-successs-button').on('click', function(){
        $('#security-modal-token').modal('hide')
        $('#security-modal-success').modal('show')
    })

    
});