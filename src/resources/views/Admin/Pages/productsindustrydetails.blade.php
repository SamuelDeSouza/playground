<section id="main-form">
    
    {{--  Abrir formulário --}}
    {!! Form::open(['url' => $thisdata->url, 'method' => 'POST', 'onsubmit' => 'return false', 'id' => 'mainFormInsert']) !!}
    {!! Form::hidden('id_prodindustry', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->id_prodindustry : $thisdata->idfather, ['class' => 'form-control', 'readonly' => 'true']) !!}

    <ul id="main-form-list">
        <li class="size-col-2 size-content-1">
            {!! Form::label('title', 'Nome*', array('class' => 'control-label' )) !!} 
            {!! Form::text('title', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->title : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-2 size-content-1">
            {!! Form::label('video', 'Video', array('class' => 'control-label' )) !!} 
            {!! Form::text('video', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->video : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-2 size-content-1">
            {!! Form::label('style', 'Posição do Texto*', array('class' => 'control-label' )) !!}
            {!! Form::select('style', $thisdata->listForeignKey->options, isset($thisdata->listRegister) ? $thisdata->listRegister[0]->style : null, ['class' => 'form-control', 'autocomplete' => 'off']); !!}
         </li>
         <li class="size-col-1 size-content-2 size-heigt2">
            {!! Form::label('description', 'Descrição*', array('class' => 'control-label' )) !!}
            {!! Form::textarea('description', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->description : null, ['class' => 'textarea-control', 'autocomplete' => 'off']) !!}
        </li>
    </ul>
    {!! Form::close() !!} {{-- Fechar formulário --}}
</section>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery( "input[name='title']" ).rules( "add", { required: true });
    });
</script>