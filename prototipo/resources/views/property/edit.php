<h1>Formulário de Edição :: Imoveis</h1>

<?php
    $property = $property[0];
?>

<br />

<form action="<?= url('imoveis/update', ['name' => $property->name]); ?>" method="post">
    <?= csrf_field(); ?>
    <?= method_field('PUT'); ?>

    <br />

    <label for="title">Título</label>
    <input type="text" name="title" id="title" value="<?= $property->title; ?>">

    <br />

    <label for="sale_price">Valor de Venda</label>
    <input type="text" name="sale_price" id="sale_price" value="<?= $property->sale_price; ?>">

    <br />

    <label for="rental_price">Valor de Locação</label>
    <input type="text" name="rental_price" id="rental_price" value="<?= $property->rental_price; ?>">

    <br />

    <label for="description">Descrição</label>
    <textarea name="description" id="description" cols="30" rows="10"><?= $property->description; ?></textarea>

    <br />

    <button type="submit">Atualizar Imóvel</button>
</form>