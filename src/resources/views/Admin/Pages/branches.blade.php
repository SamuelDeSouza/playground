<section id="main-form">
    
    {{--  Abrir formulário --}}
    {!! Form::open(['url' => $thisdata->url, 'method' => 'POST', 'onsubmit' => 'return false', 'id' => 'mainFormInsert']) !!}
    <ul id="main-form-list">
        <li class="size-col-2 size-content-1">
            {!! Form::label('id_state', 'Estado', array('class' => 'control-label' )) !!} 
            {!! Form::select('id_state', $thisdata->listForeignKey->state, isset($thisdata->listRegister) ? $thisdata->listRegister[0]->id_state : null, ['class' => 'form-control form-select-father', 'select-child' => 'id_city', 'select-method' => 'getCities', 'autocomplete' => 'off']); !!}
       </li>
       <li class="size-col-2 size-content-1">
           {!! Form::label('id_city', 'Cidade', array('class' => 'control-label' )) !!}
           {!! Form::select('id_city', $thisdata->listForeignKey->cities, null, ['class' => 'form-control', 'autocomplete' => 'off']); !!}
        </li>
        <li class="size-col-2 size-content-1">
            {!! Form::label('name', 'Nome da Filial', array('class' => 'control-label' )) !!} 
            {!! Form::text('name', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->name : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-2 size-content-1">
            {!! Form::label('zipcode', 'CEP', array('class' => 'control-label' )) !!} 
            {!! Form::text('zipcode', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->zipcode : null, ['class' => 'form-control cep'])!!}
        </li>
        <li class="size-col-2 size-content-1">
            {!! Form::label('district', 'Bairro', array('class' => 'control-label' )) !!} 
            {!! Form::text('district', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->district : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-2 size-content-1">
            {!! Form::label('number', 'Número', array('class' => 'control-label' )) !!} 
            {!! Form::text('number', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->number : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-2 size-content-1">
            {!! Form::label('address', 'Endereço', array('class' => 'control-label' )) !!} 
            {!! Form::text('address', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->address : null, ['class' => 'form-control'])!!}
        </li>
        
    </ul>
    {!! Form::close() !!} {{-- Fechar formulário --}}
</section>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery( "input[name='name']" ).rules( "add", { required: true });
        jQuery( "input[name='zipcode']" ).rules( "add", { required: true });
        jQuery( "input[name='district']" ).rules( "add", { required: true });
        jQuery( "input[name='number']" ).rules( "add", { required: true, number: true });
        jQuery( "input[name='address']" ).rules( "add", { required: true });
    });
</script>