<section id="main-form">
    
    {{--  Abrir formulário --}}
    {!! Form::open(['url' => $thisdata->url, 'method' => 'POST', 'onsubmit' => 'return false', 'id' => 'mainFormInsert']) !!}
    {!! Form::hidden('id_prodshopping', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->id_prodshopping : $thisdata->idfather, ['class' => 'form-control', 'readonly' => 'true']) !!}
    
    <ul id="main-form-list">
        <li class="size-col-2 size-content-1">
            {!! Form::label('id_options', 'Variação*', array('class' => 'control-label' )) !!}
            {!! Form::select('id_options', $thisdata->listForeignKey->options, null, ['class' => 'form-control', 'autocomplete' => 'off']); !!}
        </li>
        <li class="size-col-2 size-content-1">
            {!! Form::label('name', 'Valor*', array('class' => 'control-label' )) !!} 
            {!! Form::text('name', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->name : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-3 size-content-1">
            {!! Form::label('description', 'Extra', array('class' => 'control-label' )) !!}
            {!! Form::text('description', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->description : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-3 size-content-5">
            {!! Form::label('show_in', 'Mostrar no produto*', array('class' => 'control-label label-full-size' )) !!}
            <div class="main-radio">
                @if(isset($thisdata->listRegister))
                {!! Form::radio('show_in', '1', ($thisdata->listRegister[0]->show_in) ? true : false, ['class' => 'form-control-radio', 'id' => 'radio1']) !!}
                {!! Form::label('show_in', 'Sim', array('class' => ($thisdata->listRegister[0]->show_in) ? 'label-radio ui-admin-rec-circular-button' : 'label-radio ui-admin-circle', 'data-radio' => '1')) !!}
                @else
                {!! Form::radio('show_in', '1', true, ['class' => 'form-control-radio', 'id' => 'radio1']) !!}
                {!! Form::label('show_in', 'Sim', array('class' => 'label-radio ui-admin-rec-circular-button', 'data-radio', 'data-radio' => '1' )) !!}
                @endif
            </div>
            <div class="main-radio">
                @if(isset($thisdata->listRegister))
                {!! Form::radio('show_in', '0', ($thisdata->listRegister[0]->show_in) ? false : true , ['class' => 'form-control-radio', 'id' => 'radio2']) !!}
                {!! Form::label('show_in', 'Não', array('class' => ($thisdata->listRegister[0]->show_in) ? 'label-radio ui-admin-circle' : 'label-radio ui-admin-rec-circular-button', 'data-radio' => '2' )) !!}
                @else
                {!! Form::radio('show_in', '0', false, ['class' => 'form-control-radio', 'id' => 'radio2']) !!}
                {!! Form::label('show_in', 'Não', array('class' => 'label-radio ui-admin-circle', 'data-radio' => '2' )) !!}
                @endif
            </div>
        </li>
        <li class="size-col-3 size-content-5">
            {!! Form::label('style', 'Estilo da Exibição', array('class' => 'control-label label-full-size' )) !!}
            <div class="main-radio">
                @if(isset($thisdata->listRegister))
                {!! Form::radio('style', '1', ($thisdata->listRegister[0]->style) ? true : false, ['class' => 'form-control-radio', 'id' => 'radio1']) !!}
                {!! Form::label('style', 'Linha', array('class' => ($thisdata->listRegister[0]->style) ? 'label-radio ui-admin-rec-circular-button' : 'label-radio ui-admin-circle', 'data-radio' => '1')) !!}
                @else
                {!! Form::radio('style', '1', true, ['class' => 'form-control-radio', 'id' => 'radio1']) !!}
                {!! Form::label('style', 'Linha', array('class' => 'label-radio ui-admin-rec-circular-button', 'data-radio', 'data-radio' => '1' )) !!}
                @endif
            </div>
            <div class="main-radio">
                @if(isset($thisdata->listRegister))
                {!! Form::radio('style', '0', ($thisdata->listRegister[0]->style) ? false : true , ['class' => 'form-control-radio', 'id' => 'radio2']) !!}
                {!! Form::label('style', 'Seleção', array('class' => ($thisdata->listRegister[0]->style) ? 'label-radio ui-admin-circle' : 'label-radio ui-admin-rec-circular-button', 'data-radio' => '2' )) !!}
                @else
                {!! Form::radio('style', '0', false, ['class' => 'form-control-radio', 'id' => 'radio2']) !!}
                {!! Form::label('style', 'Seleção', array('class' => 'label-radio ui-admin-circle', 'data-radio' => '2' )) !!}
                @endif
            </div>
        </li>
    </ul>
    {!! Form::close() !!}
    {{-- Fechar formulário --}}
</section>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery( "input[name='name']" ).rules( "add", { required: true });
    });
</script>