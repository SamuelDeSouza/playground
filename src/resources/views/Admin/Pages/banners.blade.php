<section id="main-form">
    
    {{--  Abrir formulário --}}
    {!! Form::open(['url' => $thisdata->url, 'method' => 'POST', 'onsubmit' => 'return false', 'id' => 'mainFormInsert']) !!}
    
    <ul id="main-form-list">
        <li class="size-col-2 size-content-1">
            {!! Form::label('name', 'Nome*', array('class' => 'control-label' )) !!} 
            {!! Form::text('name', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->name : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-2 size-content-1">
            {!! Form::label('order', 'Ordem*', array('class' => 'control-label' )) !!} 
            {!! Form::text('order', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->order : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-2 size-content-1">
            {!! Form::label('link_button_1', 'Link Principal*', array('class' => 'control-label' )) !!} 
            {!! Form::text('link_button_1', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->link_button_1 : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-2 size-content-1">
            {!! Form::label('link_button_2', 'Link Segundario', array('class' => 'control-label' )) !!} 
            {!! Form::text('link_button_2', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->link_button_2 : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-2 size-content-1">
            {!! Form::label('menu', 'Menu*', array('class' => 'control-label' )) !!} 
            {!! Form::text('menu', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->menu : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-2 size-content-1">
            {!! Form::label('description', 'Descrição', array('class' => 'control-label' )) !!} 
            {!! Form::text('description', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->description : null, ['class' => 'form-control'])!!}
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