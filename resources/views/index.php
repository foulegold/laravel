<h1>Hello, World!</h1>
<p><a href="<?= route('news')?>">Все новости</a></p>
<p><a href="<?= route('news.categories')?>">Категории</a></p>
<p><a href="<?= route('news.currentCategory', ['id' => '4'])?>">Новости по категории №4</a></p>
<p><a href="<?= route('news.show', ['id' => '12'])?>">Новость №12</a></p>
