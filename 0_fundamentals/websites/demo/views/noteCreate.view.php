<?php require('partials/head.php'); ?>

<?php require('partials/nav.php'); ?>

<?php require('partials/banner.php'); ?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <form method="post">
      <div class="col-span-full">
          <label for="body" class="block text-sm/6 font-medium text-white">Body</label>
          <div class="mt-2">
            <textarea id="body" name="body" rows="3" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"><?= $_POST['body'] ?? '' ?></textarea>
            <?php if (isset($errors['body'])) : ?>
              <p class="text-red-300 text-xs mt-6"><?= $errors['body'] ?></p>
            <?php endif; ?>
          </div>
          <!-- <p class="mt-3 text-sm/6 text-gray-400">Cre</p> -->
        </div>
        <button type="submit" class="text-blue-500">Create</button>
    </form>
  </div>
</main>

<?php require('partials/foot.php'); ?>