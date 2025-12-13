<div class="header">
    <div class="container">
        <h1>Строения</h1>
    </div>
</div>
<div class="container">
    <div class="info-card">
        <table>
            <tr>
                <td>Комплекс</td>
                <td>Строение</td>
                <td>Количество этажей</td>
                <td>Срок сдачи</td>
            </tr>
        <?php foreach ($builds as $build): ?>
            <tr>
                <td><?=$build['complex_id']?></td>
                <td><a href="apartments/<?=$build['id']?>"><?=$build['name']?></a></td>
                <td><?=$build['floor_count']?></td>
                <td><?=$build['date_pass']?></td>
            </tr>
        <?php endforeach;?>
        </table>
    </div>
</div>
