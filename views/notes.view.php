

    <?php require('partials/head.php') ?>

    <?php require('partials/nav.php') ?>
    <?php require('partials/banner.php') ?>


    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

<!--            --><?php //= dd($notes) ?>
            <ul class='list-disc list-inside px-4 py-6'>
                <P class="mb-6">
                    <a href="/subjects?subject_id=<?= $notes[0]['subject_id'] ?>&user_id=<?= $notes[0]['user_id']?>" class="text-blue-500 underline">Back to Subjects List ...</a>
                </P>

                <?php foreach ($notes as $note) : ?>
                    <li>
                        <a href="/note?note_id=<?= $note['id'] ?>&user_id=<?= $note['user_id']?>" class="text-blue-500 hover:underline">
                            <?= $note['title'] ?>
                        </a>
                    </li>

                <?php endforeach ?>
            </ul>

            <p class="mt-6">
                <a href="/note/create?subject_id=<?=$subject_id?>&user_id=<?= $user_id ?>" class="text-blue-500 hover:underline"> Create Note</a>
            </p>
        </div>
    </main>

    <?php require('partials/footer.php') ?>