<?php require('partials/head.php') ?>

<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>


<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <ul class='list-disc list-inside px-4 py-6'>
            <?php foreach ($subjects as $subject) : ?>
                <li>
                    <a href="/notes?subject_id=<?= $subject['id'] ?>" class="text-blue-500 hover:underline">
                        <?= $subject['name'] ?>
                    </a>
                </li>

            <?php endforeach ?>
        </ul>
    </div>
</main>

<?php require('partials/footer.php') ?>