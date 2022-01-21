<section id="main-form">
  {{--  Abrir formulário --}}
  {!! Form::open(['url' => $thisdata->url, 'method' => 'POST', 'onsubmit' => 'return false', 'id' =>
  'mainFormInsert']) !!}
  
  <ul id="main-form-list">
    {{--  Normal Input --}}
    <li class="size-col-2 size-content-1 required">
      {!! Form::label('name', 'Nome:', array('class' => 'control-label' )) !!}
      {!! Form::text('name', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->name : null, ['class' => 'form-control', 'autocomplete' => 'off'])!!}
    </li>
    {{--  Normal Input --}}
    
    <li class="size-col-4 size-content-5">
      {!! Form::label('print_list', 'Exibir?', array('class' => 'control-label' )) !!}
      <div class="main-radio">
        @if(isset($thisdata->listRegister))
        {!! Form::radio('print_list', '1', ($thisdata->listRegister[0]->print_list) ? true : false, ['class' => 'form-control-radio', 'id' => 'radio1']) !!}
        {!! Form::label('print_list', 'Sim', array('class' => ($thisdata->listRegister[0]->print_list) ? 'label-radio ui-admin-rec-circular-button' : 'label-radio ui-admin-circle', 'data-radio' => '1')) !!}
        @else
        {!! Form::radio('print_list', '1', true, ['class' => 'form-control-radio', 'id' => 'radio1']) !!}
        {!! Form::label('print_list', 'Sim', array('class' => 'label-radio ui-admin-rec-circular-button', 'data-radio', 'data-radio' => '1' )) !!}
        @endif
      </div>
      <div class="main-radio">
        @if(isset($thisdata->listRegister))
        {!! Form::radio('print_list', '0', ($thisdata->listRegister[0]->print_list) ? false : true , ['class' => 'form-control-radio', 'id' => 'radio2']) !!}
        {!! Form::label('print_list', 'Não', array('class' => ($thisdata->listRegister[0]->print_list) ? 'label-radio ui-admin-circle' : 'label-radio ui-admin-rec-circular-button', 'data-radio' => '2' )) !!}
        @else
        {!! Form::radio('print_list', '0', false, ['class' => 'form-control-radio', 'id' => 'radio2']) !!}
        {!! Form::label('print_list', 'Não', array('class' => 'label-radio ui-admin-circle', 'data-radio' => '2' )) !!}
        @endif
      </div>
    </li>
    
    {{--  tinymce Input --}}
    <li class="size-col-1 size-content-2 size-heigt2 required">
      {!! Form::label('description', 'Descrição:', array('class' => 'control-label' )) !!}
      {!! Form::textarea('description', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->description : null, ['class' => 'textarea-control', 'autocomplete' => 'off']) !!}
    </li>
    {{--  tinymce Input --}}
    
    
  </ul>
  
  
  {!! Form::close() !!} {{-- Fechar formulário --}}
</section>
<script type="text/javascript">
  jQuery(document).ready(function () {
    jQuery("input[name='name']").rules("add", { required: true });
    jQuery("input[name='print_list']").rules("add", { required: true });
    jQuery("input[name='description']").rules("add", { required: true });
  });
</script>