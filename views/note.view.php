

    <?php require('partials/head.php') ?>

    <?php require('partials/nav.php') ?>
    <?php require('partials/banner.php') ?>


    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

            <ul class='list-disc list-inside px-4 py-6'>
                <P class="mb-6">
                    <a href="/notes?subject_id=<?= $note['subject_id'] ?>&user_id=<?= $note['user_id']?>" class="text-blue-500 underline">Back to Notes List ...</a>
                </P>

                <?= $note['content'] ?>
            </ul>
        </div>
    </main>

    <?php require('partials/footer.php') ?>