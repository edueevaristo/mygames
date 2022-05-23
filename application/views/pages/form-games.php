    <!-- FORMULÁRIO DE CADASTRO DOS JOGOS -->
    <main role="main" class="col-md-9 ml-sm-auto col-lg-12 px-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2 mx-auto"><?= $title ?></h1>
        </div>
        <div class="col-md-10 mx-auto">
			<?php if (isset($game)) : ?>
			<form action="<?= base_url('')?>dashboard/atualizar/<?= $game['id'] ?>" method="post">
			<?php else : ?>
            <form action="<?= base_url('')?>dashboard/criar_jogo" method="post">
			<?php endif;?>
				<div class="col-md-6 mx-auto">
                    <div class="form-group mb-3">
                        <label for="name">Nome do Jogo</label>
                        <input type="text" class="form-control border border-1 border-success" name="name" id="name" placeholder="Nome do Jogo"
                            required value="<?= isset($game) ? $game['name'] : "" ?>">
                    </div>
                </div>

                <div class="col-md-6 mx-auto mb-3">
                    <div class="form-group">
                        <label for="description">Descrição do Jogo</label>
                        <textarea name="description" id="description" rows="5" class="form-control border border-1 border-success"
                            placeholder="Descreva o seu Jogo" required><?= isset($game) ? $game['description'] : "" ?></textarea>
                    </div>
                </div>

                <div class="col-md-6 mx-auto">
                    <div class="form-group">
                        <label for="person-fav">Personagem Favorito do Jogo</label>
                        <input type="text" class="form-control border border-1 border-success" name="person_fav" id="person_fav"
                            placeholder="Qual seu personagem favorito?" value="<?= isset($game) ? $game['person_fav'] : "" ?>" required>
                    </div>
                </div>

                <div class="col-md-6 m-2 mx-auto mt-4">
                    <button type="submit" class="btn btn-success btn-xs"><i class="fas fa-check"></i> Salvar</button>
                    <a href="<?= base_url('')?>dashboard" class="btn btn-danger btn-xs"><i class="fas fa-times"></i> Cancelar</a>
                </div>
                </div>
            </form>

        </div>

    </main>
    <!-- FIM DO FORMULÁRIO DE CADASTRO DOS JOGOS -->
