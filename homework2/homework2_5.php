<!--5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML-шаблон,
вывести текущий год в подвале при помощи встроенных функций PHP.-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Шапка</h1>
<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam assumenda autem cupiditate distinctio
        dolores dolorum eius laboriosam placeat, quis rerum similique soluta sunt, unde. Corporis nobis qui totam
        veniam voluptates.</span><span>Autem consequatur distinctio ducimus in inventore neque numquam quis
        reiciendis, repellat saepe sed tempora unde ut, vel voluptatem? Ad aperiam at autem deleniti dolor fuga
        minima, nihil officiis quam quas?</span><span>A aliquid assumenda atque consequatur doloribus dolorum, eligendi
        enim eos, excepturi fugiat ipsa libero, modi nesciunt obcaecati odio odit quas quibusdam quod quos rem repellat
        sapiente tempora tenetur velit voluptatem?</span><span>Amet architecto deleniti ea, hic iure labore minima,
        molestiae necessitatibus possimus quis ratione similique, totam ullam veniam voluptate. Autem beatae ex fugit
        iusto maiores nesciunt nihil qui quo suscipit ullam.</span><span>Adipisci architecto aut explicabo magni
        perferendis, repellendus. Aspernatur consequuntur culpa cumque dolorum facilis harum, inventore ipsam iste
        magni nam obcaecati odio praesentium quae quisquam recusandae tempora ullam ut voluptates. Quae!</span>
    <span>Consequuntur doloribus iste iure laudantium minus neque praesentium rem ut? Beatae culpa cum dolore dolorem
        explicabo fuga, fugit hic iure maxime modi neque nobis praesentium quia quod suscipit vero voluptates?</span>
</p>
<footer>&copy;Все права защищены <?= date('Y') ?> г.</footer>
</body>
</html>
