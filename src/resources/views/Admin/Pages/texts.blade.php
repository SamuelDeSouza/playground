<section id="main-form">
    
    {{--  Abrir formulário --}}
    {!! Form::open(['url' => $thisdata->url, 'method' => 'POST', 'onsubmit' => 'return false', 'id' => 'mainFormInsert']) !!}
    
    <ul id="main-form-list">
        <li class="size-col-2 size-content-1">
            {!! Form::label('name', 'Nome*', array('class' => 'control-label' )) !!} 
            {!! Form::text('name', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->name : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-2 size-content-1">
            {!! Form::label('info_location', 'Localização', array('class' => 'control-label' )) !!} 
            {!! Form::text('info_location', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->info_location : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-1 size-content-2 size-heigt2">
            {!! Form::label('description', 'Descrição*', array('class' => 'control-label' )) !!}
            {!! Form::textarea('description', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->description : null, ['class' => 'textarea-control', 'autocomplete' => 'off']) !!}
        </li>
    </ul>     
    {!! Form::close() !!}
    {{-- Fechar formulário --}}
</section>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery( "input[name='name']" ).rules( "add", { required: true });
        jQuery( "input[name='info_location']" ).rules( "add", { required: true});
    });
</script>;