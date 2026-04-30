<?php require('partials/head.php') ?>

<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>


<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <ul class='list-disc list-inside px-4 py-6'>
            <?php foreach ($subjects as $subject) : ?>
                <li>
                    <a href="/notes?subject_id=<?= $subject['id']?>&user_id=<?= $subject['user_id']?>" class="text-blue-500 hover:underline">
                        <?= htmlspecialchars($subject['name'])  ?>
                    </a>
                </li>

            <?php endforeach ?>
        </ul>

        <p class="mt-6">
            <a href="/subject/create?user_id=<?=$subject['user_id']?>" class="text-blue-500 hover:underline"> Create Subject</a>
        </p>
    </div>
</main>

<?php require('partials/footer.php') ?>