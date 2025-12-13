<div class="header">
    <div class="container">
        <h1>Квартиры</h1>
    </div>
</div>
<div class="container">
    <div class="info-card">
        <table>
            <tr>
                <td>Строение</td>
                <td>Количество комнат</td>
                <td>Этаж</td>
                <td>Стоимость</td>
                <td>Картинка</td>
            </tr>
            <?php foreach ($apartments as $apartment): ?>
                <tr>
                    <td><?=$apartment['build_id']?></td>
                    <td><?=$apartment['room_count']?></td>
                    <td><?=$apartment['floor']?></td>
                    <td><?=$apartment['price']?></td>
                    <td><?=$apartment['img']?></td>
                </tr>
            <?php endforeach;?>
        </table>
    </div>
</div>