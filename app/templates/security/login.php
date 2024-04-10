<main class="w-1/2 mx-auto my-20 bg-emerald-800 text-white min-h-[300px] p-10">
  <h1 class="bloc mb-10 text-lg">Espace hautement sécurisé</h1>

    <?php if (!empty($data['errors'])) : ?>
      <ul>
          <?php foreach ($data['errors'] as $error) : ?>
            <li><?php echo $error ?></li>
          <?php endforeach; ?>
      </ul>
    <?php endif; ?>

  <form action="" method="post"
        class="flex flex-col justify-center gap gap-3 w-3/4 m-auto">
    <input type="text" name="username" placeholder="Nom d’utilisateur"
           class="block p-3 text-black rounded-md"/>
    <input type="password" name="password" placeholder="Mot de passe"
           class="block p-3 text-black rounded-md"/>
    <button type="submit" role="button"
            class="block mt-5 p-3 border border-1 border-stone-200 rounded-md">
      Connexion
    </button>
  </form>
</main>
