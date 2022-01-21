<section id="main-form">
    
    {{--  Abrir formulário --}}
    {!! Form::open(['url' => $thisdata->url, 'method' => 'POST', 'onsubmit' => 'return false', 'id' => 'mainFormInsert']) !!}
    
    <ul id="main-form-list">
        <li class="size-col-3 size-content-1">
            {!! Form::label('title', 'Título*', array('class' => 'control-label' )) !!} 
            {!! Form::text('title', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->title : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-3 size-content-1">
            {!! Form::label('sub_title', 'Sub-título*', array('class' => 'control-label' )) !!} 
            {!! Form::text('sub_title', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->sub_title : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-3 size-content-1">
            {!! Form::label('page', 'Pagina*', array('class' => 'control-label' )) !!} 
            {!! Form::text('page', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->page : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-2 size-content-1">
            {!! Form::label('link', 'Link*', array('class' => 'control-label' )) !!} 
            {!! Form::text('link', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->link : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-4 size-content-1">
            {!! Form::label('icon', 'icon*', array('class' => 'control-label' )) !!} 
            {!! Form::text('icon', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->icon : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-4 size-content-5">
            {!! Form::label('display', 'Exibir?*', array('class' => 'control-label' )) !!}
            <div class="main-radio">
                @if(isset($thisdata->listRegister))
                {!! Form::radio('display', '1', ($thisdata->listRegister[0]->display) ? true : false, ['class' => 'form-control-radio', 'id' => 'radio1']) !!}
                {!! Form::label('display', 'Sim', array('class' => ($thisdata->listRegister[0]->display) ? 'label-radio ui-admin-rec-circular-button' : 'label-radio ui-admin-circle', 'data-radio' => '1')) !!}
                @else
                {!! Form::radio('display', '1', true, ['class' => 'form-control-radio', 'id' => 'radio1']) !!}
                {!! Form::label('display', 'Sim', array('class' => 'label-radio ui-admin-rec-circular-button', 'data-radio', 'data-radio' => '1' )) !!}
                @endif
            </div>
            <div class="main-radio">
                @if(isset($thisdata->listRegister))
                {!! Form::radio('display', '0', ($thisdata->listRegister[0]->display) ? false : true , ['class' => 'form-control-radio', 'id' => 'radio2']) !!}
                {!! Form::label('display', 'Não', array('class' => ($thisdata->listRegister[0]->display) ? 'label-radio ui-admin-circle' : 'label-radio ui-admin-rec-circular-button', 'data-radio' => '2' )) !!}
                @else
                {!! Form::radio('display', '0', false, ['class' => 'form-control-radio', 'id' => 'radio2']) !!}
                {!! Form::label('display', 'Não', array('class' => 'label-radio ui-admin-circle', 'data-radio' => '2' )) !!}
                @endif
            </div>
        </li>
    </ul>     
    {!! Form::close() !!} {{-- Fechar formulário --}}
</section>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery( "input[name='name']" ).rules( "add", { required: true });
        jQuery( "input[name='page']" ).rules( "add", { required: true });
        jQuery( "input[name='order']" ).rules( "add", { required: true, number: true });
        jQuery( "input[name='link']" ).rules( "add", { required: true });
    });
</script>