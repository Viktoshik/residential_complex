 <div class="header">
     <div class="container">
        <h1>Жилой комплекс</h1>
     </div>
 </div>
<div class="container">
    <div class="info-card">
            <table>
                <tr>
                    <td>ЖК</td>
                    <td>Адрес</td>
                    <td>Координаты</td>
                </tr>
                <?php foreach ($complexes as $complex): ?>
                <tr>
                    <td><a href="builds/<?=$complex['id']?>">"<?=$complex['name']?>"</a></td>
                    <td><?=$complex['address']?></td>
                    <td><?=$complex['coordinates']?></td>
                </tr>
                <?php endforeach;?>
            </table>
    </div>
</div>
