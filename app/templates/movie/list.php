<main class="w-1/2 mx-auto my-20 bg-emerald-800 text-white min-h-[300px] p-10">
    <h1 class="pb-5 underline">Movies</h1>
    <ul>
        <?php foreach ($data['movies'] as $movie) : ?>
            <li><?= $movie['title'] ?></li>
        <?php endforeach; ?>
    </ul>
</main>
