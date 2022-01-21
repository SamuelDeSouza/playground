<section id="main-form">
    
    {{--  Abrir formulário --}}
    {!! Form::open(['url' => $thisdata->url, 'method' => 'POST', 'onsubmit' => 'return false', 'id' => 'mainFormInsert']) !!}

    <ul id="main-form-list">
        <li class="size-col-2 size-content-1">
            {!! Form::label('name', 'Nome*', array('class' => 'control-label' )) !!} 
            {!! Form::text('name', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->name : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-2 size-content-1">
            {!! Form::label('video', 'Link do video', array('class' => 'control-label' )) !!} 
            {!! Form::text('video', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->video : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-1 size-content-1">
            {!! Form::label('keywords', 'Keywords (Palavras-Chaves)*', array('class' => 'control-label' )) !!} 
            {!! Form::text('keywords', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->keywords : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-2 size-content-1">
            {!! Form::label('id_catindustry', 'Categoria*', array('class' => 'control-label' )) !!}
            {!! Form::select('id_catindustry', $thisdata->listForeignKey->catindustry, isset($thisdata->listRegister) ? $thisdata->listRegister[0]->id_catindustry : null, ['class' => 'form-control', 'autocomplete' => 'off']); !!}
         </li>
         <li class="size-col-1 size-content-2 size-heigt2">
            {!! Form::label('description', 'Descrição*', array('class' => 'control-label' )) !!}
            {!! Form::textarea('description', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->description : null, ['class' => 'textarea-control', 'autocomplete' => 'off']) !!}
        </li>
        <li class="size-col-1 size-content-2 size-heigt2">
            {!! Form::label('especification', 'Especificação', array('class' => 'control-label' )) !!}
            {!! Form::textarea('especification', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->especification : null, ['class' => 'textarea-control', 'autocomplete' => 'off']) !!}
        </li>
    </ul>
    {!! Form::close() !!} {{-- Fechar formulário --}}
</section>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery( "input[name='name']" ).rules( "add", { required: true });
        jQuery( "input[name='keywords']" ).rules( "add", { required: true });
        jQuery( "input[name='description']" ).rules( "add", { required: true });
    });
</script>