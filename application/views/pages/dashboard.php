    <!-- INÍCIO DA TABELA DO DASHBOARD -->
	<main role="main" class="col-md-9 ml-sm-auto col-lg-12 px-4 menu">
	<title>Dashboard</title>
		<table class="table table-bordered table-hover mx-3">
			<h3 class="m-md-3"> <?= $title ?></h3>
			<thead>
				<tr>
					<th scope="col" style="width:30px; vertical-align: middle">#</th>
					<th scope="col" style="width:200px;">Nome do Jogo</th>
					<th scope="col" class="col-md-6">Descrição do Jogo</th>
					<th scope="col" style="text-align:center;width:190px; vertical-align: middle">Personagem favorito do jogo</th>
					<th scope="col" class="col-md-2 mx-auto">Acões</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($games as $game) : ?>
				<tr>
					<td style="text-align:center;"><?= $game['id'] ?></td>
					<td><?= $game['name'] ?></td>
					<td><?= $game['description'] ?></td>
					<td><?= $game['person_fav'] ?></td>
					<td>
						<div class="col-md-8 mx-3 mt-2">
							<a href="<?php base_url('')?>dashboard/mostrar/<?= $game['id']?>" class="btn btn-warning btn-sm mx-1"><i class="fas fa-trash-alt"></i> Alterar</a>
							<a href="javascript:deletarGame(<?= $game['id']?>)" class="btn btn-danger btn-sm mx-1"><i class="fas fa-trash-alt"></i> Excluir</a>
						</div>
					</td>
				</tr>
			<?php endforeach;?>
			</tbody>
		</table>

    <div class="col-lg-12" style="text-align: right;">
        <a href="<?= base_url('')?>dashboard/novo_jogo">
            <button type="button" class="btn btn-primary mx-sm-3">
                Adicionar Jogo +
            </button>
		</a>
    </div>
</main>
<!--	FIM DA TABELA DO DASHBOARD -->

	<script>
		function deletarGame(id)
		{
			var myUrl = 'dashboard/deletar/'+id
			if (confirm("Deseja realmente apagar este jogo?")) {
				window.location.href = myUrl;
				alert("O jogo foi excluído.");
			} else {
				alert("O jogo não foi apagado.");
			}
		}
	</script>
