<!--<div class="header">-->
<!--    <div class="container">-->
<!--        <h1>Квартиры</h1>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="container">-->
<!--    <div class="info-card">-->
<!--        <table>-->
<!--            <tr>-->
<!--                <td>Строение</td>-->
<!--                <td>Количество комнат</td>-->
<!--                <td>Этаж</td>-->
<!--                <td>Стоимость</td>-->
<!--                <td>Картинка</td>-->
<!--            </tr>-->
<!--            --><?php //foreach ($apartments as $apartment): ?>
<!--                <tr>-->
<!--                    <td>--><?php //=$apartment['build_id']?><!--</td>-->
<!--                    <td>--><?php //=$apartment['room_count']?><!--</td>-->
<!--                    <td>--><?php //=$apartment['floor']?><!--</td>-->
<!--                    <td>--><?php //=$apartment['price']?><!--</td>-->
<!--                    <td>--><?php //=$apartment['img']?><!--</td>-->
<!--                </tr>-->
<!--            --><?php //endforeach;?>
<!--        </table>-->
<!--    </div>-->
<!--</div>-->

<div class="container">
    <!-- Форма фильтрации -->
    <div class="filter-form" style="margin-bottom: 20px; padding: 15px; background: #f5f5f5; border-radius: 5px;">
        <form method="GET" action="">
            <div style="display: flex; gap: 15px; flex-wrap: wrap; align-items: flex-end;">
                <div>
                    <label>Строение:</label>
                    <select name="build_id" style="padding: 8px; min-width: 150px;">
                        <option value="">Все строения</option>
                        <?php foreach ($builds as $build): ?>
                            <option value="<?=$build['id']?>" <?=(isset($_GET['build_id']) && $_GET['build_id'] == $build['id']) ? 'selected' : ''?>>
                                <?=$build['name']?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div>
                    <label>Комнат:</label>
                    <select name="room_count" style="padding: 8px; min-width: 120px;">
                        <option value="">Любое</option>
                        <option value="1" <?=(isset($_GET['room_count']) && $_GET['room_count'] == '1') ? 'selected' : ''?>>1</option>
                        <option value="2" <?=(isset($_GET['room_count']) && $_GET['room_count'] == '2') ? 'selected' : ''?>>2</option>
                        <option value="3" <?=(isset($_GET['room_count']) && $_GET['room_count'] == '3') ? 'selected' : ''?>>3</option>
                        <option value="4" <?=(isset($_GET['room_count']) && $_GET['room_count'] == '4') ? 'selected' : ''?>>4+</option>
                    </select>
                </div>

                <div>
                    <label>Этаж:</label>
                    <select name="floor" style="padding: 8px; min-width: 120px;">
                        <option value="">Любой</option>
                        <option value="1-3" <?=(isset($_GET['floor']) && $_GET['floor'] == '1-3') ? 'selected' : ''?>>1-3 этаж</option>
                        <option value="4-10" <?=(isset($_GET['floor']) && $_GET['floor'] == '4-10') ? 'selected' : ''?>>4-10 этаж</option>
                        <option value="10+" <?=(isset($_GET['floor']) && $_GET['floor'] == '10+') ? 'selected' : ''?>>10+ этаж</option>
                    </select>
                </div>

                <div>
                    <label>Цена до:</label>
                    <input type="number" name="max_price" value="<?=$_GET['max_price'] ?? ''?>"
                           placeholder="макс. цена" style="padding: 8px; width: 150px;">
                </div>

                <div>
                    <button type="submit" style="padding: 8px 20px; background: #007bff; color: white; border: none; border-radius: 4px;">
                        Применить фильтр
                    </button>
                    <a href="?" style="padding: 8px 15px; margin-left: 10px; background: #6c757d; color: white; text-decoration: none; border-radius: 4px;">
                        Сбросить
                    </a>
                </div>
            </div>
        </form>
    </div>

<!--    <div class="info-card">-->
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
    </div>
<!--</div>-->