<section id="main-form">

{{--  Abrir formulário --}}
     {!! Form::open(['url' => $thisdata->url, 'method' => 'POST', 'onsubmit' => 'return false', 'id' => 'mainFormInsert']) !!}

    <ul id="main-form-list">
        <li class="size-col-2 size-content-1">
        {!! Form::label('name', 'Nome', array('class' => 'control-label' )) !!} 
            {!! Form::text('name', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->name : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-2 size-content-1">
           {!! Form::label('keywords', 'Keywords', array('class' => 'control-label' )) !!} 
           {!! Form::text('keywords', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->keywords : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-2 size-content-1">
            {!! Form::label('analytics', 'Codigo do analytics:', array('class' => 'control-label' )) !!} 
            {!! Form::text('analytics', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->analytics : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-2 size-content-1">
            {!! Form::label('mail', 'Enviar E-mails Para:', array('class' => 'control-label' )) !!} 
            {!! Form::text('mail', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->mail : null, ['class' => 'form-control'])!!}
        </li>
        {{--  tinymce Input --}}
        <li class="size-col-1 size-content-2 size-heigt2">
            {!! Form::label('description', 'Descrição', array('class' => 'control-label' )) !!}
            {!! Form::textarea('description', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->description : null, ['class' => 'textarea-control']) !!}
       </li>
    </ul>     
     {!! Form::close() !!} {{-- Fechar formulário --}}
</section>
<script type="text/javascript">
     jQuery(document).ready(function(){
          jQuery( "input[name='name']" ).rules( "add", { required: true });
          jQuery( "input[name='keywords']" ).rules( "add", { required: true });
          jQuery( "input[name='analytics']" ).rules( "add", { required: true });
          jQuery( "input[name='mail']" ).rules( "add", { required: true });
     });
</script>
