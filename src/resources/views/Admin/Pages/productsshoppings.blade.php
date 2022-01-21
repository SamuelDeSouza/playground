<section id="main-form">
    
    {{--  Abrir formulário --}}
    {!! Form::open(['url' => $thisdata->url, 'method' => 'POST', 'onsubmit' => 'return false', 'id' => 'mainFormInsert']) !!}

    <ul id="main-form-list">
        <li class="size-col-2 size-content-1">
            {!! Form::label('name', 'Nome*', array('class' => 'control-label' )) !!} 
            {!! Form::text('name', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->name : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-2 size-content-1">
            {!! Form::label('weight', 'Peso do produto(Kg)', array('class' => 'control-label' )) !!} 
            {!! Form::text('weight', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->weight : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-2 size-content-1">
            {!! Form::label('height', 'Altura do produto(cm)', array('class' => 'control-label' )) !!} 
            {!! Form::text('height', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->height : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-2 size-content-1">
            {!! Form::label('width', 'Largura do produto(cm)', array('class' => 'control-label' )) !!} 
            {!! Form::text('width', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->width : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-2 size-content-1">
            {!! Form::label('length', 'Comprimento do produto(cm)', array('class' => 'control-label' )) !!} 
            {!! Form::text('length', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->length : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-2 size-content-1">
            {!! Form::label('brand', 'Marca do produto*', array('class' => 'control-label' )) !!} 
            {!! Form::text('brand', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->brand : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-2 size-content-1">
            {!! Form::label('model', 'Modelo do produto*', array('class' => 'control-label' )) !!} 
            {!! Form::text('model', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->model : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-2 size-content-1">
            {!! Form::label('reference', 'Referência do produto', array('class' => 'control-label' )) !!} 
            {!! Form::text('reference', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->reference : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-2 size-content-1">
            {!! Form::label('bar_code', 'Código EAN/GTIN/UPC', array('class' => 'control-label' )) !!} 
            {!! Form::text('bar_code', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->bar_code : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-2 size-content-1">
            {!! Form::label('warranty', 'Tempo de garantia do produto(anos)', array('class' => 'control-label' )) !!} 
            {!! Form::text('warranty', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->warranty : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-3 size-content-5">
            {!! Form::label('launch', 'Produto é lançamento*', array('class' => 'control-label label-full-size' )) !!}
            <div class="main-radio">
                @if(isset($thisdata->listRegister))
                {!! Form::radio('launch', '1', ($thisdata->listRegister[0]->launch) ? true : false, ['class' => 'form-control-radio', 'id' => 'radio1']) !!}
                {!! Form::label('launch', 'Sim', array('class' => ($thisdata->listRegister[0]->launch) ? 'label-radio ui-admin-rec-circular-button' : 'label-radio ui-admin-circle', 'data-radio' => '1')) !!}
                @else
                {!! Form::radio('launch', '1', true, ['class' => 'form-control-radio', 'id' => 'radio1']) !!}
                {!! Form::label('launch', 'Sim', array('class' => 'label-radio ui-admin-rec-circular-button', 'data-radio', 'data-radio' => '1' )) !!}
                @endif
            </div>
            <div class="main-radio">
                @if(isset($thisdata->listRegister))
                {!! Form::radio('launch', '0', ($thisdata->listRegister[0]->launch) ? false : true , ['class' => 'form-control-radio', 'id' => 'radio2']) !!}
                {!! Form::label('launch', 'Não', array('class' => ($thisdata->listRegister[0]->launch) ? 'label-radio ui-admin-circle' : 'label-radio ui-admin-rec-circular-button', 'data-radio' => '2' )) !!}
                @else
                {!! Form::radio('launch', '0', false, ['class' => 'form-control-radio', 'id' => 'radio2']) !!}
                {!! Form::label('launch', 'Não', array('class' => 'label-radio ui-admin-circle', 'data-radio' => '2' )) !!}
                @endif
            </div>
        </li>
        <li class="size-col-3 size-content-5">
            {!! Form::label('highlighted', 'Produto é destaque em produtos*', array('class' => 'control-label label-full-size' )) !!}
            <div class="main-radio">
                @if(isset($thisdata->listRegister))
                {!! Form::radio('highlighted', '1', ($thisdata->listRegister[0]->highlighted) ? true : false, ['class' => 'form-control-radio', 'id' => 'radio1']) !!}
                {!! Form::label('highlighted', 'Sim', array('class' => ($thisdata->listRegister[0]->highlighted) ? 'label-radio ui-admin-rec-circular-button' : 'label-radio ui-admin-circle', 'data-radio' => '1')) !!}
                @else
                {!! Form::radio('highlighted', '1', true, ['class' => 'form-control-radio', 'id' => 'radio1']) !!}
                {!! Form::label('highlighted', 'Sim', array('class' => 'label-radio ui-admin-rec-circular-button', 'data-radio', 'data-radio' => '1' )) !!}
                @endif
            </div>
            <div class="main-radio">
                @if(isset($thisdata->listRegister))
                {!! Form::radio('highlighted', '0', ($thisdata->listRegister[0]->highlighted) ? false : true , ['class' => 'form-control-radio', 'id' => 'radio2']) !!}
                {!! Form::label('highlighted', 'Não', array('class' => ($thisdata->listRegister[0]->highlighted) ? 'label-radio ui-admin-circle' : 'label-radio ui-admin-rec-circular-button', 'data-radio' => '2' )) !!}
                @else
                {!! Form::radio('highlighted', '0', false, ['class' => 'form-control-radio', 'id' => 'radio2']) !!}
                {!! Form::label('highlighted', 'Não', array('class' => 'label-radio ui-admin-circle', 'data-radio' => '2' )) !!}
                @endif
            </div>
        </li>
        <li class="size-col-3 size-content-5">
            {!! Form::label('variation', 'Produto possui variações', array('class' => 'control-label label-full-size' )) !!}
            <div class="main-radio">
                @if(isset($thisdata->listRegister))
                {!! Form::radio('variation', '1', ($thisdata->listRegister[0]->variation) ? true : false, ['class' => 'form-control-radio', 'id' => 'radio1']) !!}
                {!! Form::label('variation', 'Sim', array('class' => ($thisdata->listRegister[0]->variation) ? 'label-radio ui-admin-rec-circular-button' : 'label-radio ui-admin-circle', 'data-radio' => '1')) !!}
                @else
                {!! Form::radio('variation', '1', true, ['class' => 'form-control-radio', 'id' => 'radio1']) !!}
                {!! Form::label('variation', 'Sim', array('class' => 'label-radio ui-admin-rec-circular-button', 'data-radio', 'data-radio' => '1' )) !!}
                @endif
            </div>
            <div class="main-radio">
                @if(isset($thisdata->listRegister))
                {!! Form::radio('variation', '0', ($thisdata->listRegister[0]->variation) ? false : true , ['class' => 'form-control-radio', 'id' => 'radio2']) !!}
                {!! Form::label('variation', 'Não', array('class' => ($thisdata->listRegister[0]->variation) ? 'label-radio ui-admin-circle' : 'label-radio ui-admin-rec-circular-button', 'data-radio' => '2' )) !!}
                @else
                {!! Form::radio('variation', '0', false, ['class' => 'form-control-radio', 'id' => 'radio2']) !!}
                {!! Form::label('variation', 'Não', array('class' => 'label-radio ui-admin-circle', 'data-radio' => '2' )) !!}
                @endif
            </div>
        </li>
        <li class="size-col-1 size-content-1">
            {!! Form::label('keywords', 'Keywords (Palavras-Chaves)', array('class' => 'control-label' )) !!} 
            {!! Form::text('keywords', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->keywords : null, ['class' => 'form-control'])!!}
        </li>
         <li class="size-col-1 size-content-2 size-heigt2">
            {!! Form::label('description', 'Descrição*', array('class' => 'control-label' )) !!}
            {!! Form::textarea('description', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->description : null, ['class' => 'textarea-control', 'autocomplete' => 'off']) !!}
        </li>
        <li class="size-col-1 size-content-2 size-heigt2">
            {!! Form::label('included_items', 'Itens inclusos na venda', array('class' => 'control-label' )) !!}
            {!! Form::textarea('included_items', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->included_items : null, ['class' => 'textarea-control', 'autocomplete' => 'off']) !!}
        </li>
    </ul>
    {!! Form::close() !!} {{-- Fechar formulário --}}
</section>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery( "input[name='name']" ).rules( "add", { required: true });
        jQuery( "input[name='description']" ).rules( "add", { required: true });
    });
</script>