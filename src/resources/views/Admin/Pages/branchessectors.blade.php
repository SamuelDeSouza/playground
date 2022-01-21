<section id="main-form">
    {!! Form::open(['url' => $thisdata->url, 'method' => 'POST', 'onsubmit' => 'return false', 'id' => 'mainFormInsert']) !!}
    {!! Form::hidden('id_branch', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->id_branch : $thisdata->idfather, ['class' => 'form-control', 'readonly' => 'true']) !!}
    <ul id="main-form-list">
        <li class="size-col-2 size-content-1">
            {!! Form::label('name', 'Nome', array('class' => 'control-label' )) !!} 
            {!! Form::text('name', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->name : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-2 size-content-1">
            {!! Form::label('mail', 'E-mail', array('class' => 'control-label' )) !!} 
            {!! Form::text('mail', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->mail : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-2 size-content-1">
            {!! Form::label('phone', 'Telefone', array('class' => 'control-label' )) !!} 
            {!! Form::text('phone', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->phone : null, ['class' => 'form-control phone_with_ddd'])!!}
        </li>
    </ul>
    {!! Form::close() !!}
</section>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery( "input[name='name']" ).rules( "add", { required: true });
        jQuery( "input[name='mail']" ).rules( "add", { required: true });
        jQuery( "input[name='phone']" ).rules( "add", { required: true });
    });
</script>