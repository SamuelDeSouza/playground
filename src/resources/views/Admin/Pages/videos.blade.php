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
            {!! Form::label('used_in', 'Usar Em*', array('class' => 'control-label' )) !!} 
            {!! Form::text('used_in', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->used_in : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-2 size-content-1">
            {!! Form::label('video', 'Código do vídeo*', array('class' => 'control-label' )) !!} 
            {!! Form::text('video', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->video : null, ['class' => 'form-control'])!!}
        </li>
        
    </ul>     
    {!! Form::close() !!} {{-- Fechar formulário --}}
</section>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery( "input[name='name']" ).rules( "add", { required: true });
        jQuery( "input[name='used_in']" ).rules( "add", { required: true });
        jQuery( "input[name='video']" ).rules( "add", { required: true });
    });
</script>
