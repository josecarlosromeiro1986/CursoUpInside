<h1>Formulário de Cadastro :: Imoveis</h1>

<br />

<form action="<?= url('imoveis/store'); ?>" method="post">
    <?= csrf_field(); ?>

    <br />

    <label for="title">Título</label>
    <input type="text" name="title" id="title">

    <br />

    <label for="sale_price">Valor de Venda</label>
    <input type="text" name="sale_price" id="sale_price">

    <br />

    <label for="rental_price">Valor de Locação</label>
    <input type="text" name="rental_price" id="rental_price">

    <br />

    <label for="description">Descrição</label>
    <textarea name="description" id="description" cols="30" rows="10"></textarea>

    <br />

    <button type="submit">Cadastrar Imóvel</button>
</form>