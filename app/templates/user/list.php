<main class="w-1/2 mx-auto my-20 bg-emerald-800 text-white min-h-[300px] p-10">
    <h1 class="pb-5 underline">Utilisateurs</h1>
      <ul>
        <?php foreach ($data['users'] as $user) : ?>
          <li><?= $user['username'] ?></li>
        <?php endforeach; ?>
      </ul>
</main>
