<section id="main-form">

     {{--  Abrir formulário --}}
     {!! Form::open(['url' => $thisdata->url, 'method' => 'POST', 'onsubmit' => 'return false', 'id' => 'mainFormInsert']) !!}
    
     <ul id="main-form-list">
          <li class="size-col-3 size-content-1">
               {!! Form::label('name', 'SMTP de Envio', array('class' => 'control-label' )) !!} 
               {!! Form::text('smtp', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->smtp : null, ['class' => 'form-control'])!!}
          </li>
          <li class="size-col-4 size-content-2">
               {!! Form::label('name', 'Porta do SMTP', array('class' => 'control-label' )) !!} 
               {!! Form::text('smtp_port', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->smtp_port : null, ['class' => 'form-control'])!!}
          </li>
          <li class="size-col-4 size-content-3">
               {!! Form::label('name', 'Utilizar SSL', array('class' => 'control-label' )) !!} 
               <div class="main-radio">
               {!!  Form::radio('ssl', '1', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->opcao1 : false, ['class' => 'form-control-radio', 'id' => 'radio1'])  !!} 
               @if(isset($thisdata->listRegister))
               {!! Form::label('name', 'Sim', array('class' => $thisdata->listRegister[0]->opcao1 == false ? 'label-radio ui-admin-circle' : 'label-radio ui-admin-rec-circular-button', 'data-radio' => '1' )) !!}
               @else
               {!! Form::label('name', 'Sim', array('class' => 'label-radio ui-admin-rec-circular-button', 'data-radio', 'data-radio' => '1' )) !!}
               @endif
               </div>
               <div class="main-radio">
               {!!  Form::radio('ssl', '0', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->opcao2 : false, ['class' => 'form-control-radio', 'id' => 'radio2'])  !!}
               @if(isset($thisdata->listRegister))
               {!! Form::label('name', 'Não', array('class' => $thisdata->listRegister[0]->opcao2 == false ? 'label-radio ui-admin-circle' : 'label-radio ui-admin-rec-circular-button', 'data-radio' => '2' )) !!}
               @else
               {!! Form::label('name', 'Não', array('class' => 'label-radio ui-admin-circle', 'data-radio' => '2' )) !!}
               @endif
               </div>
          </li>
          <li class="size-col-3 size-content-1">
               {!! Form::label('name', 'E-mail de Envio', array('class' => 'control-label' )) !!} 
               {!! Form::text('mail_send', isset($thisdata->listRegister) ? $thisdata->listRegister[0]->mail_send : null, ['class' => 'form-control'])!!}
          </li>
          <li class="size-col-3 size-content-1">
               {!! Form::label('name', 'Senha de Envio', array('class' => 'control-label' )) !!} 
               {!! Form::password('password_mail_send', ['class' => 'form-control'])!!}
          </li>
     </ul>     
     {!! Form::close() !!} {{-- Fechar formulário --}}
     
</section>

<script type="text/javascript">

     jQuery(document).ready(function(){
          jQuery( "input[name='name']" ).rules( "add", { required: true });
          jQuery( "input[name='password']" ).rules( "add", { maxlength: 40 });
     });
</script>
