<?php

namespace src\login\modal;

class modal
{
    public const MODAL_SUCESSO_CADASTRO = '<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="Sucesso ao cadastrar usuário" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      Uusário cadastrado com sucesso!
    </div>
  </div>
</div>';

    public const MODAL_ERRO_CADASTRO = '<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="Erro ao cadastrar usuário" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      Erro ao cadastrar o usuário, verifique o nome e senha!
    </div>
  </div>
</div>';

    public const MODAL_SUCESSO_MENSAGEM = '<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="Sucesso" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      Texto foi cadastrado com sucesso!
    </div>
  </div>
</div>';

    public const MODAL_ERRO_MENSAGEM = '<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="Erro" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      Erro ao cadastrar mensagem!
    </div>
  </div>
</div>';

    public const MODAL_SUCESSO_EXLCUIR = '<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="Mensagem deletada" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      Mensagem deletada com sucesso!
    </div>
  </div>
</div>';

    public const MODAL_ERRO_EXCLUIR = '<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="Erro" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      Erro ao excluir mensagem!
    </div>
  </div>
</div>';
}