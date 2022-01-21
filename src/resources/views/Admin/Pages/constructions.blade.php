<section id="main-form">
    
    {{--  Abrir formulário --}}
    {!! Form::open(['url' => $thisdata->url, 'method' => 'POST', 'onsubmit' => 'return false', 'id' => 'mainFormInsert']) !!}
    
    <ul id="main-form-list">
        <li class="size-col-2 size-content-1">
            {!! Form::label('name', 'Nome da Obra', array('class' => 'control-label' )) !!} 
            {!! Form::text('name', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->name : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-2 size-content-1">
            {!! Form::label('video', 'Link de video', array('class' => 'control-label' )) !!} 
            {!! Form::text('video', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->video : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-2 size-content-1">
            {!! Form::label('location', 'Localização', array('class' => 'control-label' )) !!} 
            {!! Form::text('location', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->location : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-2 size-content-1">
            {!! Form::label('id_client', 'Cliente', array('class' => 'control-label' )) !!}
            {!! Form::select('id_client', $thisdata->listForeignKey->client, null, ['class' => 'form-control', 'autocomplete' => 'off']); !!}
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
        jQuery( "input[name='order']" ).rules( "add", { required: true, number: true });
        jQuery( "input[name='link_button_1']" ).rules( "add", { required: true });
        jQuery( "input[name='menu']" ).rules( "add", { required: true });
        jQuery( "input[name='description']" ).rules( "add", { required: true });
    });
</script>