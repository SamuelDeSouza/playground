<section id="main-form">
    <div class="files-container">
        <h4> Arquivos enviados: </h4>
        @foreach ($thisdata->listRegister[0]->files as $item)
                <a class="job-resume-file" href="{{$item->url}}" target="_blank">
                <p class="tooltiptext">{{ $item->original_name }}</p>
                </a>

        @endforeach
    </div>
    <div class="job-resume-container">
        <h4>Nome</h4>
        <p class="name">
            @isset($thisdata->listRegister[0]->name)
                {!! strip_tags($thisdata->listRegister[0]->name) !!}
            @endisset
        </p>
        <hr>
        <h4>E-mail</h4>
        <p class="email">
            @isset($thisdata->listRegister[0]->email)
                {!! strip_tags($thisdata->listRegister[0]->email) !!}
            @endisset
        </p>
        <hr>
        <h4>Telefone</h4>
        <p class="phone">
            @isset($thisdata->listRegister[0]->phone)
                {!! strip_tags($thisdata->listRegister[0]->phone) !!}
            @endisset
        </p>
        <hr>
        <h4>Mensagem</h4>
        <p class="description">
            @isset($thisdata->listRegister[0]->description)
                {!! strip_tags($thisdata->listRegister[0]->description) !!}
            @endisset
        </p>
    </div>

</section>
<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery("input[name='name']").rules("add", { required: true });
    });
</script>