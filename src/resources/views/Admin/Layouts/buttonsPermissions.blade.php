<section id="main-button-list">
    <span id="button-insert" class="main-button-list button-permission-clone" data-idUser="{{ $thisdata->userId }}" data-idPermission="{{ $thisdata->userPermission }}">CLONAR PERMISSÕES</span>
    <a href="{{ URL::previous() }}" id="button-goBack" class="main-button-list button-permission">VOLTAR</a>
</section>
<section id="main-clone-permission">
    <div class='main-background-alert'></div>
    <div id="main-user-list-clone">
        <hr class='button-alert button-alert-load ui-admin-circles-loader' />
        <span class='title-status-alert'>Processando</span>
        <p class='message-status-alert'>Aguarde enquanto efetuamos a operação</p>
        <ul id="main-list-user-clone"></ul>
        <span class="setFechamentoAutomatico">fechamento automatizado em: <strong></strong></span>
        <span class="button-close-clone">Fechar Notificação</span>
    </div>
</section>