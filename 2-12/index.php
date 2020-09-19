<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="result.php" method="post">
        名前：<input type="text" name="my_name" />
        <br>
        ご希望商品：<br>
            <input type="radio" name="goods" value="A賞"/>A賞<br>
            <input type="radio" name="goods" value="B賞"/>B賞<br>
            <input type="radio" name="goods" value="C賞"/>C賞<br>
        個数：
            <select name="number">
                <!-- この書き方を覚える -->
                <?php for($i = 1; $i <=10 ; $i++){ ?>
                    <option value="<?php echo $i ; ?>">
                        <?php echo $i ;?>
                    </option>
                <?php }?>
            </select>
            <br>
            <input type="submit" value="申込">
    </form>
</body>
</html>