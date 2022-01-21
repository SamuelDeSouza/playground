<section id="main-form">

  <div class="main-form-info-wrapper">
      <p class="main-form-info"> A ordem de exibição numeral dos banners é feita de forma crescente, menor para maior.</p>
  </div>
  <div class="main-form-info-wrapper">
      <p class="main-form-info"> O link do banner é opcional.</p>
  </div>

  {{--  Abrir formulário --}}
  {!! Form::open(['url' => $thisdata->url, 'method' => 'POST', 'onsubmit' => 'return false', 'id' =>
  'mainFormInsert']) !!}

  <ul id="main-form-list">
      {{--  Normal Input --}}
      <li class="size-col-2 size-content-1">
          {!! Form::label('[name of column]', '[Name visible to user]', array('class' => 'control-label' )) !!}
          {!! Form::text('[name of column]', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->[name of column] : null, ['class' => 'form-control', 'autocomplete' => 'off'])!!}
      </li>
      {{--  Normal Input --}}

      {{--  tinymce Input --}}
      <li class="size-col-1 size-content-2 size-heigt2">
          {!! Form::label('[name of column]', '[Name visible to user]', array('class' => 'control-label' )) !!}
          {!! Form::textarea('[name of column]', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->[name of column] : null, ['class' => 'textarea-control', 'autocomplete' => 'off']) !!}
      </li>
      {{--  tinymce Input --}}

      {{--  Select Input --}}
      <li class="size-col-2 size-content-1">
          {!! Form::label('[name of column]', '[Name visible to user]', array('class' => 'control-label' )) !!}
          {!! Form::select('[name of column]', [Array with values for select], isset($thisdata->listRegister) ?
          $thisdata->listRegister[0]->[name of column] : null, ['class' => 'form-control', 'autocomplete' => 'off']); !!}
      </li>
      {{--  Select Input --}}


      {{--  Select with dependency --}}
      {{--  Father --}}
      <li class="size-col-2 size-content-1">
          {!! Form::label('[name of column]', '[Name visible to user]', array('class' => 'control-label' )) !!}
          {!! Form::select('[name of column]', [Array with values for select], isset($thisdata->listRegister) ?
          $thisdata->listRegister[0]->[name of column] : null, ['class' => 'form-control form-select-father', 'select-child' => '[nome da coluna do select filho]', 'select-method' => '[methodo para
          chamr que pega itens do filho]', 'autocomplete' => 'off']); !!}
      </li>
      {{-- Child --}}
      <li class="size-col-2 size-content-1">
          {!! Form::label('[name of column]', '[Name visible to user]', array('class' => 'control-label' )) !!}
          {!! Form::select('[name of column]', [Array with values for select], isset($thisdata->listRegister) ?
          $thisdata->listRegister[0]->[name of column] : null, ['class' => 'form-control', 'autocomplete' => 'off']); !!}
     </li>
    {{--  Select with dependency --}}

    {{--  Radio Input --}}
    <li class="size-col-5 size-content-2">
          {!! Form::label('[name of column]', '[Name visible to user]', array('class' => 'control-label' )) !!}
          <div class="main-radio">
              {!! Form::radio('[name of column]', '1', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->name of column coluna] :
              false, ['class' => 'form-control-radio', 'id' => 'radio1']) !!}
              @if(isset($thisdata->listRegister))
              {!! Form::label('[name of column]', 'Sim', array('class' => $thisdata->listRegister[0]->[name of column] ==
              false ? 'label-radio ui-admin-circle' : 'label-radio ui-admin-rec-circular-button', 'data-radio' => '1'
              )) !!}
              @else
              {!! Form::label('[name of column]', 'Sim', array('class' => 'label-radio ui-admin-rec-circular-button',
              'data-radio', 'data-radio' => '1' )) !!}
              @endif
          </div>
          <div class="main-radio">
              {!! Form::radio('[name of column]', '0', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->name of column coluna] :
              true, ['class' => 'form-control-radio', 'id' => 'radio2']) !!}
              @if(isset($thisdata->listRegister))
              {!! Form::label('[name of column]', 'Não', array('class' => $thisdata->listRegister[0]->[name of column] ==
              true ? 'label-radio ui-admin-circle' : 'label-radio ui-admin-rec-circular-button', 'data-radio' => '2'
              )) !!}
              @else
              {!! Form::label('[name of column]', 'Não', array('class' => 'label-radio ui-admin-circle', 'data-radio'
              => '2' )) !!}
              @endif
          </div>
    </li>
    {{--  Radio Input --}}

    {{--  Combobox --}}
    <div class="combobox-container">
      <li class="size-col-3 size-content-1">
        <div class="ui-widget">
          {!! Form::label('[name of column]', '[Name visible to user]', array('class' => 'control-label' )) !!}
          {!! Form::select('[name of column]', [Array with values for select] , [default selected value]], ['class' => 'combobox', 'data-child' => 'name of next combobox to load', 'data-autocomplete' => 'autocomplete function to load on child','data-clear' => 'name of comboboxes to clear on value select', 'autocomplete' => 'off', 'data-disabled' => 'false or true']) !!}
        </div>
      </li>
      {{--  Completed Example --}}
      <li class="size-col-3 size-content-1">
        <div class="ui-widget">
          {!! Form::label('vehicle_type', 'Tipo de Veículo', array('class' => 'control-label' )) !!}
          {!! Form::select('vehicle_type',
           ['1' => 'Carro', '2' => 'Moto', '3' => 'Caminhão', '4' => 'Van',], 1, ['class' => 'combobox',
          'data-child' => 'color', 'data-autocomplete' => 'autocomplete-color','data-clear' => 'color', 'autocomplete' => 'off', 'data-disabled' => 'false']) !!}
        </div>
      </li>
      <li class="size-col-3 size-content-1">
        <div class="ui-widget">
          {!! Form::label('color', 'Cor do Veículo', array('class' => 'control-label' )) !!}
          {!! Form::select('color', ['',''], null, ['class' => 'combobox', 'autocomplete' => 'off', 'data-disabled' => 'true']) !!}
        </div>
      </li>
      {{--  End Example --}}
    </div>
    {{--  Combobox --}}

  </ul>


  {{--  Hidden Input --}}
  {!! Form::hidden('[id_father]', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->[id_father] : $thisdata->idfather, ['class' => 'form-control', 'readonly' => 'true']) !!}


  {!! Form::close() !!} {{-- Fechar formulário --}}
</section>
<script type="text/javascript">
  jQuery(document).ready(function () {
      jQuery("input[name='name']").rules("add", { required: true });
  });
</script>