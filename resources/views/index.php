<h1>Hello, World!</h1>
<p><a href="<?= route('news')?>">Все новости</a></p>
<p><a href="<?= route('news.categories')?>">Категории</a></p>
<p><a href="<?= route('news.currentCategory', ['id' => '2'])?>">Новости по категории №2</a></p>
<p><a href="<?= route('news.show', ['id' => '33'])?>">Новость №33</a></p>
