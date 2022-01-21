<section id="main-form">
    <div class="main-form-info-wrapper">
        <p class="main-form-info">"Título": Será exibido na parte vermelha!</p>
        <p class="main-form-info">"Ano": Será usado para ordenar a listagem!</p>
        <p class="main-form-info">"Sub-Título": será colocado como título da descrição!</p>
    </div>
    {{--  Abrir formulário --}}
    {!! Form::open(['url' => $thisdata->url, 'method' => 'POST', 'onsubmit' => 'return false', 'id' => 'mainFormInsert']) !!}
    
    <ul id="main-form-list">
        <li class="size-col-2 size-content-1">
            {!! Form::label('title', 'Título*', array('class' => 'control-label' )) !!} 
            {!! Form::text('title', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->title : null, ['class' => 'form-control'])!!}
        </li>
        <li class="size-col-2 size-content-1">
            {!! Form::label('year', 'Ano*', array('class' => 'control-label' )) !!} 
            {!! Form::text('year', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->year : null, ['class' => 'form-control'])!!}
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
        jQuery( "input[name='year']" ).rules( "add", { required: true });
    });
</script>
