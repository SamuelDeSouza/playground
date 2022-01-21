<section id="main-form">
    
    {{--  Abrir formulário --}}
    {!! Form::open(['url' => $thisdata->url, 'method' => 'POST', 'onsubmit' => 'return false', 'id' => 'mainFormInsert']) !!}
    {!! Form::hidden('id_prodshopping', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->id_prodshopping : $thisdata->idfather, ['class' => 'form-control', 'readonly' => 'true']) !!}

    <ul id="main-form-list">
        <li class="size-col-2 size-content-1">
            {!! Form::label('id_catshopping', 'Categoria*', array('class' => 'control-label' )) !!} 
            {!! Form::select('id_catshopping', $thisdata->listForeignKey->catshoppings, isset($thisdata->listRegister) ? $thisdata->listRegister[0]->id_catshopping : null, ['class' => 'form-control form-select-father', 'select-child' => 'id_catshopping_sub', 'select-method' => 'getCatshopping_sub', 'autocomplete' => 'off']); !!}
       </li>
       <li class="size-col-2 size-content-1">
           {!! Form::label('id_catshopping_sub', 'Sub-Categoria', array('class' => 'control-label' )) !!}
           {!! Form::select('id_catshopping_sub', $thisdata->listForeignKey->catshopping_sub, null, ['class' => 'form-control', 'autocomplete' => 'off']); !!}
        </li>
    </ul>
    {!! Form::close() !!} {{-- Fechar formulário --}}
</section>
<script type="text/javascript">

</script>