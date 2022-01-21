<section id="main-form">

    <div class="main-form-info-wrapper">
        <p class="main-form-info"> Para Criar uma rede social apenas para compartilhamento, marque SIM a opção "Compartilhar" e NÃO na opção "Exibir".</p>
    </div>
 
    {!! Form::open(['url' => $thisdata->url, 'method' => 'POST', 'onsubmit' => 'return false', 'id' => 'mainFormInsert']) !!}
    
    <ul id="main-form-list">
        <li class="size-col-3 size-content-1">
            {!! Form::label('name', 'Nome', array('class' => 'control-label' )) !!} 
            {!! Form::text('name', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->name : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-3 size-content-1">
            {!! Form::label('link', 'Link', array('class' => 'control-label' )) !!} 
            {!! Form::text('link', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->link : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-3 size-content-1">
            {!! Form::label('icon', 'Icone', array('class' => 'control-label' )) !!} 
            {!! Form::text('icon', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->icon : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-3 size-content-1">
            {!! Form::label('secretkey', 'Chave Secreta do acesso', array('class' => 'control-label' )) !!} 
            {!! Form::text('secretkey', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->secretkey : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-3 size-content-1">
            {!! Form::label('apikey', 'Chave da Api', array('class' => 'control-label' )) !!} 
            {!! Form::text('apikey', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->apikey : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-3 size-content-5">
            {!! Form::label('print_list', 'Exibir', array('class' => 'control-label' )) !!}
            <div class="main-radio">
                @if(isset($thisdata->listRegister))
                {!! Form::radio('print_list', '1', ($thisdata->listRegister[0]->print_list) ? true : false, ['class' => 'form-control-radio', 'id' => 'radio1']) !!}
                {!! Form::label('print_list', 'Sim', array('class' => ($thisdata->listRegister[0]->print_list) ? 'label-radio ui-admin-rec-circular-button' : 'label-radio ui-admin-circle', 'data-radio' => '1')) !!}
                @else
                {!! Form::radio('print_list', '1', true, ['class' => 'form-control-radio', 'id' => 'radio1']) !!}
                {!! Form::label('print_list', 'Sim', array('class' => 'label-radio ui-admin-rec-circular-button', 'data-radio', 'data-radio' => '1' )) !!}
                @endif
            </div>
            <div class="main-radio">
                @if(isset($thisdata->listRegister))
                {!! Form::radio('print_list', '0', ($thisdata->listRegister[0]->print_list) ? false : true , ['class' => 'form-control-radio', 'id' => 'radio2']) !!}
                {!! Form::label('print_list', 'Não', array('class' => ($thisdata->listRegister[0]->print_list) ? 'label-radio ui-admin-circle' : 'label-radio ui-admin-rec-circular-button', 'data-radio' => '2' )) !!}
                @else
                {!! Form::radio('print_list', '0', false, ['class' => 'form-control-radio', 'id' => 'radio2']) !!}
                {!! Form::label('print_list', 'Não', array('class' => 'label-radio ui-admin-circle', 'data-radio' => '2' )) !!}
                @endif
            </div>
        </li>
        <li class="size-col-3 size-content-5">
            {!! Form::label('share', 'Compartilhar', array('class' => 'control-label' )) !!}
            <div class="main-radio">
                @if(isset($thisdata->listRegister))
                {!! Form::radio('share', '1', ($thisdata->listRegister[0]->share) ? true : false, ['class' => 'form-control-radio', 'id' => 'radio1']) !!}
                {!! Form::label('share', 'Sim', array('class' => ($thisdata->listRegister[0]->share) ? 'label-radio ui-admin-rec-circular-button' : 'label-radio ui-admin-circle', 'data-radio' => '1')) !!}
                @else
                {!! Form::radio('share', '1', false, ['class' => 'form-control-radio', 'id' => 'radio1']) !!}
                {!! Form::label('share', 'Sim', array('class' => 'label-radio ui-admin-circle', 'data-radio' => '1' )) !!}
                @endif
            </div>
            <div class="main-radio">
                @if(isset($thisdata->listRegister))
                {!! Form::radio('share', '0', ($thisdata->listRegister[0]->share) ? false : true , ['class' => 'form-control-radio', 'id' => 'radio2']) !!}
                {!! Form::label('share', 'Não', array('class' => ($thisdata->listRegister[0]->share) ? 'label-radio ui-admin-circle' : 'label-radio ui-admin-rec-circular-button', 'data-radio' => '2' )) !!}
                @else
                {!! Form::radio('share', '0', true, ['class' => 'form-control-radio', 'id' => 'radio2']) !!}
                {!! Form::label('share', 'Não', array('class' => 'label-radio ui-admin-rec-circular-button', 'data-radio', 'data-radio' => '2' )) !!}

                @endif
            </div>
        </li>
        <li class="size-col-1 size-content-2 size-heigt2">
            {!! Form::label('description', 'Descrição', array('class' => 'control-label' )) !!}
            {!! Form::textarea('description', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->description : null, ['class' => 'textarea-control', 'autocomplete' => 'off']) !!}
        </li>
    </ul>
    {!! Form::close() !!} {{-- Fechar formulário --}}
</section>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery( "input[name='name']" ).rules( "add", { required: true });
        jQuery( "input[name='link']" ).rules( "add", { required: true });
    });
</script>
