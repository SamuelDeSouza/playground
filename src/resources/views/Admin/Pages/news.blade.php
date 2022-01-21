<section id="main-form">
    <div class="main-form-info-wrapper">
        <p class="main-form-info">"Código do vídeo": basta colar a URL normal do video!</p>
    </div>
    {{--  Abrir formulário --}}
    {!! Form::open(['url' => $thisdata->url, 'method' => 'POST', 'onsubmit' => 'return false', 'id' => 'mainFormInsert']) !!}
    
    <ul id="main-form-list">
        <li class="size-col-2 size-content-1">
            {!! Form::label('name', 'Nome*', array('class' => 'control-label' )) !!} 
            {!! Form::text('name', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->name : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-2 size-content-1">
            {!! Form::label('video', 'Código do vídeo', array('class' => 'control-label' )) !!} 
            {!! Form::text('video', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->video : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-2 size-content-1">
            {!! Form::label('author', 'Autor*', array('class' => 'control-label' )) !!} 
            {!! Form::text('author', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->author : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-2 size-content-1">
            {!! Form::label('font', 'Fonte*', array('class' => 'control-label' )) !!} 
            {!! Form::text('font', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->font : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-2 size-content-1">
            {!! Form::label('category', 'Categoria*', array('class' => 'control-label' )) !!} 
            {!! Form::text('category', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->category : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-1 size-content-2 size-heigt2">
            {!! Form::label('abbreviation', 'Abreviação', array('class' => 'control-label' )) !!} 
            {!! Form::textarea('abbreviation', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->abbreviation : null, ['class' => 'textarea-control', 'autocomplete' => 'off']) !!}
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
        jQuery( "input[name='author']" ).rules( "add", { required: true });
        jQuery( "input[name='font']" ).rules( "add", { required: true });
        jQuery( "input[name='category']" ).rules( "add", { required: true });
    });
</script>;