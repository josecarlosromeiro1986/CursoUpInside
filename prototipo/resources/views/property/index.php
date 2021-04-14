<h1>Listagem de Imóveis</h1>

<a href="<?= url('imoveis/novo'); ?>">Cadastrar novo Imóvel</a>

<br />
<br />

<table border="1">
    <tr>
        <td>Título</td>
        <td>Valor de Venda</td>
        <td>Valor de Locação</td>
    </tr>

    <?php

    if (isset($propertys)) {

        foreach ($propertys as $property) {

            echo "
                <tr>
                    <td>$property->title</td>
                    <td>R$ " . number_format($property->sale_price, 2, ',', '.') . "</td>
                    <td>R$ " . number_format($property->rental_price, 2, ',', '.') . "</td>
                </tr>
            ";
        }
    }

    ?>

</table>