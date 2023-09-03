<?php $this->layout('layouts::template', ['title' => 'Welcome']) ?>

<article>
    <h1>Welcome</h1>
    <main>
        <p>Nice to meet you <?= $this->e($name) ?>!</p>
        <p>Your favorite foods are:</p>
        <ul>
            <?php foreach($foods as $food): ?>
                <li><?= $this->e($food) ?></li>
            <?php endforeach ?>
        </ul>
    </main>
</article>