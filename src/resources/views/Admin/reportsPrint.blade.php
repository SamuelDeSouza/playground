
   <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="{{ config('app.namePainel', 'http://www.vk2.com.br') }}" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.nameAdmin', 'Painel Admin') }}</title>

    <script src="{{ asset('js/App/jquery.js') }}" ></script>
    <script src="{{ asset('js/Admin/chart.min.js') }}" defer></script>
    <script src="{{ asset('js/Admin/jquery-ui.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Admin/ui-admin.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Admin/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Admin/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Admin/stylesheet.css') }}" rel="stylesheet">
</head>
<body>
	<div class="report-print-A4 page-1">
		<div class="report-print-top"><img src="https://via.placeholder.com/2550x300?text=TOP" alt=""></div>
		<div id="chart-wrapper" class="report-print-chart-wrapper">
			<canvas id="{{$data['report']}}"></canvas>
		</div>
		<div class="report-print-table-wrappper first-page">
			<table class="report-print-table">
				<thead>
					<tr class="report-print-table-head"></tr>
				</thead>
				<tbody class="report-print-table-body">
			</tbody>
			</table>
		</div>
		<div class="report-print-bottom"><img src="https://via.placeholder.com/2550x300?text=BOTTOM" alt=""></div>
	</div>
</body>
<style>
	@page { size: auto;  margin: 0mm; }
</style>
<script>
	var charts = {
		init: function () {
			// Checa se existe um elemento de canvas
			if ($('canvas').length) {
				// Pega dados para cada grafico via ajax
				$('canvas').each(function () {
					charts.ajaxGetScheduleData($(this).attr('id'));
				});
			}
		},

		//------->> Ajax de busca de informa????es para graficos
		// Recebe nome do grafico e valores adicionais opcionais (ex.: filtros)
		ajaxGetScheduleData: function (chartName, chartData = false) {
		    var urlPath = '/admin/' + chartName + '/load';
			var request = $.ajax({
				method: 'GET',
				data: {
					chartData: chartData
				},
				url: urlPath
			});

			// Ao receber respota
			request.done(function (response) {
				$(".loader-wrapper").addClass("hidden");
				// Verifica se recebeu erro
				if (response != "false") {
					// Sem erros, chama a fun????o de carregamento do grafico
					charts[chartName](response);
					setTimeout(function() {
						window.print();
						setTimeout(window.close, 0);
					}, 1000);
				} else {
					// Ocorreu um erro, chama fun????o de carregamento de erro
					charts.report_error(chartName);
				}
			});
		},


		//------->> Fun????es de exibi????o de graficos
		relatoriopesostotal: function (response) {
			var ctx = document.getElementById("relatoriopesostotal");
			var myLineChart = new Chart(ctx, {
				type: 'bar',
				data: {
					labels: response.days,
					datasets: [{ // Total recebimentos
							label: "Recebido",
							lineTension: 0.3,
							backgroundColor: "rgba(2,0,216,1)",
							borderColor: "rgba(2,0,216,1)",
							borderWidth: 2,
							data: response.receivements,
						},
						{ // Total quebras
							label: "Quebra",
							lineTension: 0.3,
							backgroundColor: "rgba(255,52,52,1)",
							borderColor: "rgba(255,52,52,1)",
							borderWidth: 2,
							data: response.diferences,
						},
					],
				},
				options: {
					title: {
						display: true,
						fontSize: 40,
						text: response.chart_title
					},
					scales: {
						xAxes: [{
							time: {
								unit: 'date'
							},
							gridLines: {
								display: false
							},
							ticks: {
								fontSize: 40,
								maxTicksLimit: 7
							}
						}],
						yAxes: [{
							ticks: {
								min: 0,
								max: response.max,
								fontSize: 40,
								maxTicksLimit: 5
							},
							gridLines: {
								color: "rgba(0, 0, 0, .125)",
							}
						}],
					},
					legend: {
						fontSize: 40,
						display: true
					},
					responsive: true,
					maintainAspectRatio: false
				}
			});

			//------ Cria????o da tabela de dados
			// A folha suporta 14 (15 menos um do header da tabela) linhas na primeira p??gina (devido ao gr??fico)
			// e 35 linhas (36 menos um do header da tabela) nas p??ginas seguinte, ?? adicionado cabe??alho e em seguida verificado
			// os resultados para dividir e criar cada p??gina seguintes

			// Add headers da tabela da pag inicial
			$(".page-1 .report-print-table-head").append("<td>DIA</td><td>RECEBIDO</td><td>QUEBRA</td>");
			
			// Verifica se foram retornados mais de 14 valores
			if(response.days.length > 14){
				// Se sim, separa a parte inicial em 14 itens para cada valor
				var first_days = response.days.slice(0,14);
				var first_receive = response.receivements.slice(0,14);
				var first_diference = response.diferences.slice(0,14);
				
				// Adiciona os valores da primeira p??gina
				for(var index in first_days) {
					var day = first_days[index].replace(/-/g, '/');
					var receive = first_receive[index].toString().replace(/\./g, ',');
					var diference = first_diference[index].toString().replace(/\./g, ',');

					$(".page-1 .report-print-table-body").append("<tr><td class='report-print-day'>" + day + "</td><td class='report-print-received'>" + receive + "kg</td><td class='report-print-diference'>" + diference + "kg</td></tr>");
				}

				// Separa os valores seguintes em outros arrays (cada um de 36 menos header, ficando 35)
				var index, array_count, temp_array, page_count = 1, chunk = 35;
				for (index = 14, array_count = response.days.length; index < array_count; index += chunk) {
					// Slice e guarda arrays
					var temp_days = response.days.slice(index,index+chunk);
					var temp_receive = response.receivements.slice(index,index+chunk);
					var temp_diference = response.diferences.slice(index,index+chunk);
					
					// Incrementa numero da p??gina
					page_count++;

					// Nova p??gina
					var page = "<div class='report-print-A4 page-" + page_count + "'><div class='report-print-top'><img src='https://via.placeholder.com/2550x300?text=TOP' alt=''></div><div class='report-print-table-wrappper others-page'><table class='report-print-table'><thead><tr class='report-print-table-head'></tr></thead><tbody class='report-print-table-body'></tbody></table></div><div class='report-print-bottom'><img src='https://via.placeholder.com/2550x300?text=BOTTOM' alt=''></div></div>";

					// Adiciona p??gina
					$("body").append(page);

					// Adiciona cabe??alho da tabela
					$(".page-" + page_count + " .report-print-table-head").append("<td>DIA</td><td>RECEBIDO</td><td>PENDENTES/ATRASADOS</td>")

					// Adiciona itens na nova p??gina
					for(var index_2 in temp_days) {
						var day = temp_days[index_2].replace(/-/g, '/');
						var receive = temp_receive[index_2].toString().replace(/\./g, ',');
						var diference = temp_diference[index_2].toString().replace(/\./g, ',');

						$(".page-" + page_count + " .report-print-table-body").append("<tr><td class='report-print-day'>" + day + "</td><td class='report-print-received'>" + receive + " kg</td><td class='report-print-diference'>" + diference + " kg</td></tr>");
					}
				}
			}
			else{
				// Adiciona valores das tabelas
				for(var index in response.days) {
					var day = response.days[index].replace(/-/g, '/');
					var receive = response.receivements[index].toString().replace(/\./g, ',');
					var diference = response.diferences[index].toString().replace(/\./g, ',');
					$(".report-print-table-body").append("<tr><td class='report-print-day'>" + day + "</td><td class='report-print-received'>" + receive + " kg</td><td class='report-print-diference'>" + diference + " kg</td>");
				}
			}
		},
		relatoriopesoscontrato: function (response) {
			var ctx = document.getElementById("relatoriopesoscontrato");
			var myLineChart = new Chart(ctx, {
				type: 'bar',
				data: {
					labels: response.days,
					fontSize: 40,
					datasets: [{ // Total recebimentos
							label: "Recebido",
							lineTension: 0.3,
							backgroundColor: "rgba(2,0,216,1)",
							borderColor: "rgba(2,0,216,1)",
							borderWidth: 2,
							data: response.receivements,
						},
						{ // Total quebras
							label: "Quebra",
						fontSize: 40,
							lineTension: 0.3,
							backgroundColor: "rgba(255,52,52,1)",
							borderColor: "rgba(255,52,52,1)",
							borderWidth: 2,
							data: response.diferences,
						},
					],
				},
				options: {
					title: {
						display: true,
						fontSize: 40,
						text: response.chart_title
					},
					scales: {
						xAxes: [{
							time: {
								unit: 'date'
							},
							gridLines: {
								display: false
							},
							ticks: {
								fontSize: 40,
								maxTicksLimit: 7
							}
						}],
						yAxes: [{
							ticks: {
								min: 0,
								max: response.max,
								fontSize: 40,
								maxTicksLimit: 5
							},
							gridLines: {
								color: "rgba(0, 0, 0, .125)",
							}
						}],
					},
					legend: {
						display: true,
						labels: {
							fontSize: 20,
						}
					},
					responsive: true,
					maintainAspectRatio: false
				}
			});

			//------ Cria????o da tabela de dados
			// A folha suporta 14 (15 menos um do header da tabela) linhas na primeira p??gina (devido ao gr??fico)
			// e 35 linhas (36 menos um do header da tabela) nas p??ginas seguinte, ?? adicionado cabe??alho e em seguida verificado
			// os resultados para dividir e criar cada p??gina seguintes

			// Add headers da tabela da pag inicial
			$(".page-1 .report-print-table-head").append("<td>DIA</td><td>RECEBIDO</td><td>QUEBRA</td>");

			// Verifica se foram retornados mais de 14 valores
			if(response.days.length > 14){
				// Se sim, separa a parte inicial em 14 itens para cada valor
				var first_days = response.days.slice(0,14);
				var first_receive = response.receivements.slice(0,14);
				var first_diference = response.diferences.slice(0,14);
				
				// Adiciona os valores da primeira p??gina
				for(var index in first_days) {
					var day = first_days[index].replace(/-/g, '/');
					var receive = first_receive[index].toString().replace(/\./g, ',');
					var diference = first_diference[index].toString().replace(/\./g, ',');

					$(".page-1 .report-print-table-body").append("<tr><td class='report-print-day'>" + day + "</td><td class='report-print-received'>" + receive + "kg</td><td class='report-print-diference'>" + diference + "kg</td></tr>");
				}

				// Separa os valores seguintes em outros arrays (cada um de 36 menos header, ficando 35)
				var index, array_count, temp_array, page_count = 1, chunk = 35;
				for (index = 14, array_count = response.days.length; index < array_count; index += chunk) {
					// Slice e guarda arrays
					var temp_days = response.days.slice(index,index+chunk);
					var temp_receive = response.receivements.slice(index,index+chunk);
					var temp_diference = response.diferences.slice(index,index+chunk);
					
					// Incrementa numero da p??gina
					page_count++;

					// Nova p??gina
					var page = "<div class='report-print-A4 page-" + page_count + "'><div class='report-print-top'><img src='https://via.placeholder.com/2550x300?text=TOP' alt=''></div><div class='report-print-table-wrappper others-page'><table class='report-print-table'><thead><tr class='report-print-table-head'></tr></thead><tbody class='report-print-table-body'></tbody></table></div><div class='report-print-bottom'><img src='https://via.placeholder.com/2550x300?text=BOTTOM' alt=''></div></div>";

					// Adiciona p??gina
					$("body").append(page);

					// Adiciona cabe??alho da tabela
					$(".page-" + page_count + " .report-print-table-head").append("<td>DIA</td><td>RECEBIDO</td><td>PENDENTES/ATRASADOS</td>")

					// Adiciona itens na nova p??gina
					for(var index_2 in temp_days) {
						var day = temp_days[index_2].replace(/-/g, '/');
						var receive = temp_receive[index_2].toString().replace(/\./g, ',');
						var diference = temp_diference[index_2].toString().replace(/\./g, ',');

						$(".page-" + page_count + " .report-print-table-body").append("<tr><td class='report-print-day'>" + day + "</td><td class='report-print-received'>" + receive + " kg</td><td class='report-print-diference'>" + diference + " kg</td></tr>");
					}
				}
			}
			else{
				// Adiciona valores das tabelas
				for(var index in response.days) {
					var day = response.days[index].replace(/-/g, '/');
					var receive = response.receivements[index].toString().replace(/\./g, ',');
					var diference = response.diferences[index].toString().replace(/\./g, ',');
					$(".report-print-table-body").append("<tr><td class='report-print-day'>" + day + "</td><td class='report-print-received'>" + receive + " kg</td><td class='report-print-diference'>" + diference + " kg</td>");
				}
			}
		},
		relatoriopesospagador: function (response) {
			var ctx = document.getElementById("relatoriopesospagador");
			var myLineChart = new Chart(ctx, {
				type: 'bar',
				data: {
					labels: response.days,
					datasets: [{ // Total recebimentos
							label: "Recebido",
							lineTension: 0.3,
							backgroundColor: "rgba(2,0,216,1)",
							borderColor: "rgba(2,0,216,1)",
							borderWidth: 2,
							data: response.receivements,
						},
						{ // Total quebras
							label: "Quebra",
							lineTension: 0.3,
							backgroundColor: "rgba(255,52,52,1)",
							borderColor: "rgba(255,52,52,1)",
							borderWidth: 2,
							data: response.diferences,
						}
					],
				},
				options: {
					title: {
						display: true,
						fontSize: 40,
						text: response.chart_title
					},
					scales: {
						xAxes: [{
							time: {
								unit: 'date'
							},
							gridLines: {
								display: false
							},
							ticks: {
								fontSize: 40,
								maxTicksLimit: 7
							}
						}],
						yAxes: [{
							ticks: {
								min: 0,
								max: response.max,
								fontSize: 40,
								maxTicksLimit: 5
							},
							gridLines: {
								color: "rgba(0, 0, 0, .125)",
							}
						}],
					},
					legend: {
						display: true
					},
					responsive: true,
					maintainAspectRatio: false
				}
			});

			//------ Cria????o da tabela de dados
			// A folha suporta 14 (15 menos um do header da tabela) linhas na primeira p??gina (devido ao gr??fico)
			// e 35 linhas (36 menos um do header da tabela) nas p??ginas seguinte, ?? adicionado cabe??alho e em seguida verificado
			// os resultados para dividir e criar cada p??gina seguintes

			// Add headers da tabela da pag inicial
			$(".page-1 .report-print-table-head").append("<td>DIA</td><td>RECEBIDO</td><td>QUEBRA</td>");

			// Verifica se foram retornados mais de 14 valores
			if(response.days.length > 14){
				// Se sim, separa a parte inicial em 14 itens para cada valor
				var first_days = response.days.slice(0,14);
				var first_receive = response.receivements.slice(0,14);
				var first_diference = response.diferences.slice(0,14);
				
				// Adiciona os valores da primeira p??gina
				for(var index in first_days) {
					var day = first_days[index].replace(/-/g, '/');
					var receive = first_receive[index].toString().replace(/\./g, ',');
					var diference = first_diference[index].toString().replace(/\./g, ',');

					$(".page-1 .report-print-table-body").append("<tr><td class='report-print-day'>" + day + "</td><td class='report-print-received'>" + receive + "kg</td><td class='report-print-diference'>" + diference + "kg</td></tr>");
				}

				// Separa os valores seguintes em outros arrays (cada um de 36 menos header, ficando 35)
				var index, array_count, temp_array, page_count = 1, chunk = 35;
				for (index = 14, array_count = response.days.length; index < array_count; index += chunk) {
					// Slice e guarda arrays
					var temp_days = response.days.slice(index,index+chunk);
					var temp_receive = response.receivements.slice(index,index+chunk);
					var temp_diference = response.diferences.slice(index,index+chunk);
					
					// Incrementa numero da p??gina
					page_count++;

					// Nova p??gina
					var page = "<div class='report-print-A4 page-" + page_count + "'><div class='report-print-top'><img src='https://via.placeholder.com/2550x300?text=TOP' alt=''></div><div class='report-print-table-wrappper others-page'><table class='report-print-table'><thead><tr class='report-print-table-head'></tr></thead><tbody class='report-print-table-body'></tbody></table></div><div class='report-print-bottom'><img src='https://via.placeholder.com/2550x300?text=BOTTOM' alt=''></div></div>";

					// Adiciona p??gina
					$("body").append(page);

					// Adiciona cabe??alho da tabela
					$(".page-" + page_count + " .report-print-table-head").append("<td>DIA</td><td>RECEBIDO</td><td>PENDENTES/ATRASADOS</td>")

					// Adiciona itens na nova p??gina
					for(var index_2 in temp_days) {
						var day = temp_days[index_2].replace(/-/g, '/');
						var receive = temp_receive[index_2].toString().replace(/\./g, ',');
						var diference = temp_diference[index_2].toString().replace(/\./g, ',');

						$(".page-" + page_count + " .report-print-table-body").append("<tr><td class='report-print-day'>" + day + "</td><td class='report-print-received'>" + receive + " kg</td><td class='report-print-diference'>" + diference + " kg</td></tr>");
					}
				}
			}
			else{
				// Adiciona valores das tabelas
				for(var index in response.days) {
					var day = response.days[index].replace(/-/g, '/');
					var receive = response.receivements[index].toString().replace(/\./g, ',');
					var diference = response.diferences[index].toString().replace(/\./g, ',');
					$(".report-print-table-body").append("<tr><td class='report-print-day'>" + day + "</td><td class='report-print-received'>" + receive + " kg</td><td class='report-print-diference'>" + diference + " kg</td>");
				}
			}
		},
		relatoriopesosplacas: function (response) {
			var ctx = document.getElementById("relatoriopesosplacas");
			var myLineChart = new Chart(ctx, {
				type: 'bar',
				data: {
					labels: response.days,
					datasets: [{ // Total recebimentos
							label: "Recebido",
							lineTension: 0.3,
							backgroundColor: "rgba(2,0,216,1)",
							borderColor: "rgba(2,0,216,1)",
							borderWidth: 2,
							data: response.receivements,
						},
						{ // Total quebras
							label: "Quebra",
							lineTension: 0.3,
							backgroundColor: "rgba(255,52,52,1)",
							borderColor: "rgba(255,52,52,1)",
							borderWidth: 2,
							data: response.diferences,
						}
					],
				},
				options: {
					title: {
						display: true,
						fontSize: 40,
						text: response.chart_title
					},
					scales: {
						xAxes: [{
							time: {
								unit: 'date'
							},
							gridLines: {
								display: false
							},
							ticks: {
								fontSize: 40,
								maxTicksLimit: 7
							}
						}],
						yAxes: [{
							ticks: {
								min: 0,
								max: response.max,
								fontSize: 40,
								maxTicksLimit: 5
							},
							gridLines: {
								color: "rgba(0, 0, 0, .125)",
							}
						}],
					},
					legend: {
						display: true
					},
					responsive: true,
					maintainAspectRatio: false
				}
			});

			//------ Cria????o da tabela de dados
			// A folha suporta 14 (15 menos um do header da tabela) linhas na primeira p??gina (devido ao gr??fico)
			// e 35 linhas (36 menos um do header da tabela) nas p??ginas seguinte, ?? adicionado cabe??alho e em seguida verificado
			// os resultados para dividir e criar cada p??gina seguintes

			// Add headers da tabela da pag inicial
			$(".page-1 .report-print-table-head").append("<td>DIA</td><td>RECEBIDO</td><td>QUEBRA</td>");

			// Verifica se foram retornados mais de 14 valores
			if(response.days.length > 14){
				// Se sim, separa a parte inicial em 14 itens para cada valor
				var first_days = response.days.slice(0,14);
				var first_receive = response.receivements.slice(0,14);
				var first_diference = response.diferences.slice(0,14);
				
				// Adiciona os valores da primeira p??gina
				for(var index in first_days) {
					var day = first_days[index].replace(/-/g, '/');
					var receive = first_receive[index].toString().replace(/\./g, ',');
					var diference = first_diference[index].toString().replace(/\./g, ',');

					$(".page-1 .report-print-table-body").append("<tr><td class='report-print-day'>" + day + "</td><td class='report-print-received'>" + receive + "kg</td><td class='report-print-diference'>" + diference + "kg</td></tr>");
				}

				// Separa os valores seguintes em outros arrays (cada um de 36 menos header, ficando 35)
				var index, array_count, temp_array, page_count = 1, chunk = 35;
				for (index = 14, array_count = response.days.length; index < array_count; index += chunk) {
					// Slice e guarda arrays
					var temp_days = response.days.slice(index,index+chunk);
					var temp_receive = response.receivements.slice(index,index+chunk);
					var temp_diference = response.diferences.slice(index,index+chunk);
					
					// Incrementa numero da p??gina
					page_count++;

					// Nova p??gina
					var page = "<div class='report-print-A4 page-" + page_count + "'><div class='report-print-top'><img src='https://via.placeholder.com/2550x300?text=TOP' alt=''></div><div class='report-print-table-wrappper others-page'><table class='report-print-table'><thead><tr class='report-print-table-head'></tr></thead><tbody class='report-print-table-body'></tbody></table></div><div class='report-print-bottom'><img src='https://via.placeholder.com/2550x300?text=BOTTOM' alt=''></div></div>";

					// Adiciona p??gina
					$("body").append(page);

					// Adiciona cabe??alho da tabela
					$(".page-" + page_count + " .report-print-table-head").append("<td>DIA</td><td>RECEBIDO</td><td>PENDENTES/ATRASADOS</td>")

					// Adiciona itens na nova p??gina
					for(var index_2 in temp_days) {
						var day = temp_days[index_2].replace(/-/g, '/');
						var receive = temp_receive[index_2].toString().replace(/\./g, ',');
						var diference = temp_diference[index_2].toString().replace(/\./g, ',');

						$(".page-" + page_count + " .report-print-table-body").append("<tr><td class='report-print-day'>" + day + "</td><td class='report-print-received'>" + receive + " kg</td><td class='report-print-diference'>" + diference + " kg</td></tr>");
					}
				}
			}
			else{
				// Adiciona valores das tabelas
				for(var index in response.days) {
					var day = response.days[index].replace(/-/g, '/');
					var receive = response.receivements[index].toString().replace(/\./g, ',');
					var diference = response.diferences[index].toString().replace(/\./g, ',');
					$(".report-print-table-body").append("<tr><td class='report-print-day'>" + day + "</td><td class='report-print-received'>" + receive + " kg</td><td class='report-print-diference'>" + diference + " kg</td>");
				}
			}
		},
		relatoriopesostransportador: function (response) {
			var ctx = document.getElementById("relatoriopesostransportador");
			var myLineChart = new Chart(ctx, {
				type: 'bar',
				data: {
					labels: response.days,
					datasets: [{ // Total recebimentos
							label: "Recebido",
							lineTension: 0.3,
							backgroundColor: "rgba(2,0,216,1)",
							borderColor: "rgba(2,0,216,1)",
							borderWidth: 2,
							data: response.receivements,
						},
						{ // Total quebras
							label: "Quebra",
							lineTension: 0.3,
							backgroundColor: "rgba(255,52,52,1)",
							borderColor: "rgba(255,52,52,1)",
							borderWidth: 2,
							data: response.diferences,
						}
					],
				},
				options: {
					title: {
						display: true,
						fontSize: 40,
						text: response.chart_title
					},
					scales: {
						xAxes: [{
							time: {
								unit: 'date'
							},
							gridLines: {
								display: false
							},
							ticks: {
								fontSize: 40,
								maxTicksLimit: 7
							}
						}],
						yAxes: [{
							ticks: {
								min: 0,
								max: response.max,
								fontSize: 40,
								maxTicksLimit: 5
							},
							gridLines: {
								color: "rgba(0, 0, 0, .125)",
							}
						}],
					},
					legend: {
						display: true
					},
					responsive: true,
					maintainAspectRatio: false
				}
			});
			
			//------ Cria????o da tabela de dados
			// A folha suporta 14 (15 menos um do header da tabela) linhas na primeira p??gina (devido ao gr??fico)
			// e 35 linhas (36 menos um do header da tabela) nas p??ginas seguinte, ?? adicionado cabe??alho e em seguida verificado
			// os resultados para dividir e criar cada p??gina seguintes

			// Add headers da tabela da pag inicial
			$(".page-1 .report-print-table-head").append("<td>DIA</td><td>RECEBIDO</td><td>QUEBRA</td>");

			// Verifica se foram retornados mais de 14 valores
			if(response.days.length > 14){
				// Se sim, separa a parte inicial em 14 itens para cada valor
				var first_days = response.days.slice(0,14);
				var first_receive = response.receivements.slice(0,14);
				var first_diference = response.diferences.slice(0,14);
				
				// Adiciona os valores da primeira p??gina
				for(var index in first_days) {
					var day = first_days[index].replace(/-/g, '/');
					var receive = first_receive[index].toString().replace(/\./g, ',');
					var diference = first_diference[index].toString().replace(/\./g, ',');

					$(".page-1 .report-print-table-body").append("<tr><td class='report-print-day'>" + day + "</td><td class='report-print-received'>" + receive + "kg</td><td class='report-print-diference'>" + diference + "kg</td></tr>");
				}

				// Separa os valores seguintes em outros arrays (cada um de 36 menos header, ficando 35)
				var index, array_count, temp_array, page_count = 1, chunk = 35;
				for (index = 14, array_count = response.days.length; index < array_count; index += chunk) {
					// Slice e guarda arrays
					var temp_days = response.days.slice(index,index+chunk);
					var temp_receive = response.receivements.slice(index,index+chunk);
					var temp_diference = response.diferences.slice(index,index+chunk);
					
					// Incrementa numero da p??gina
					page_count++;

					// Nova p??gina
					var page = "<div class='report-print-A4 page-" + page_count + "'><div class='report-print-top'><img src='https://via.placeholder.com/2550x300?text=TOP' alt=''></div><div class='report-print-table-wrappper others-page'><table class='report-print-table'><thead><tr class='report-print-table-head'></tr></thead><tbody class='report-print-table-body'></tbody></table></div><div class='report-print-bottom'><img src='https://via.placeholder.com/2550x300?text=BOTTOM' alt=''></div></div>";

					// Adiciona p??gina
					$("body").append(page);

					// Adiciona cabe??alho da tabela
					$(".page-" + page_count + " .report-print-table-head").append("<td>DIA</td><td>RECEBIDO</td><td>PENDENTES/ATRASADOS</td>")

					// Adiciona itens na nova p??gina
					for(var index_2 in temp_days) {
						var day = temp_days[index_2].replace(/-/g, '/');
						var receive = temp_receive[index_2].toString().replace(/\./g, ',');
						var diference = temp_diference[index_2].toString().replace(/\./g, ',');

						$(".page-" + page_count + " .report-print-table-body").append("<tr><td class='report-print-day'>" + day + "</td><td class='report-print-received'>" + receive + " kg</td><td class='report-print-diference'>" + diference + " kg</td></tr>");
					}
				}
			}
			else{
				// Adiciona valores das tabelas
				for(var index in response.days) {
					var day = response.days[index].replace(/-/g, '/');
					var receive = response.receivements[index].toString().replace(/\./g, ',');
					var diference = response.diferences[index].toString().replace(/\./g, ',');
					$(".report-print-table-body").append("<tr><td class='report-print-day'>" + day + "</td><td class='report-print-received'>" + receive + " kg</td><td class='report-print-diference'>" + diference + " kg</td>");
				}
			}
		},

		//------->> Fun????o de exibi????o de erro ao carregar o grafico
		report_error(chartName) {
		$("#chart-wrapper").empty();
		$("#chart-wrapper").append("<h3 style='text-align:center;'>Nenhum resultado encontrado.</h3>");
		},
	}

	// Recolhe contrato solicitado pela url
	var filters = @json($data["filters"]);
	var report =  @json($data["report"]);

    //------->> Iniciali????o default para qualquer grafico j?? instanciado ao carregar p??gina
	charts.ajaxGetScheduleData( report, filters );
</script>
</html>