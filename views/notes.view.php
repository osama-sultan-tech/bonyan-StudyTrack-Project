

    <?php require('partials/head.php') ?>

    <?php require('partials/nav.php') ?>
    <?php require('partials/banner.php') ?>


    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

            <ul class='list-disc list-inside px-4 py-6'>
                <?php foreach ($notes as $note) : ?>
                    <li>
                        <a href="/note?note_id=<?= $note['id'] ?>&user_id=<?= $note['user_id']?>" class="text-blue-500 hover:underline">
                            <?= $note['title'] ?>
                        </a>
                    </li>

                <?php endforeach ?>
            </ul>
        </div>
    </main>

    <?php require('partials/footer.php') ?>