<?php require('partials/head.php') ?>

<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>


<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

        <form action="/note/create?subject_id=<?=$subject_id?>&user_id=<?= $user_id ?>" method="POST">
            <div class="space-y-12">
                <div class="border-b border-white/10 pb-12">
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <label for="title" class="block text-sm/6 font-medium text-white">Title</label>
                            <div class="mt-2">
                                <input id="title" type="text" name="title"
                                       class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"/>
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="subject-display" class="block text-sm/6 font-medium text-white">Subject</label>
                            <div class="mt-2">
                                <input
                                        type="text"
                                        id="subject-display"
                                        value="<?= $current_subject['name'] ?>"
                                        readonly
                                        class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-gray-400 outline-1 -outline-offset-1 outline-white/10 sm:text-sm/6 cursor-not-allowed"
                                />

                                <input type="hidden" name="subject_id" value="<?= $current_subject['id'] ?>">
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="content" class="block text-sm/6 font-medium text-white">Content</label>
                            <div class="mt-2">
                                <textarea id="content" name="content" rows="5"
                                          class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"></textarea>
                            </div>
                            <p class="mt-3 text-sm/6 text-gray-400">Write a well-organized and detailed note.</p>
                        </div>


                    </div>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="/notes?subject_id=<?= $subject_id ?>&user_id=<?= $user_id ?>"
                   class="text-sm/6 font-semibold text-white">
                    Cancel
                </a>
                <button type="submit"
                        class="rounded-md bg-blue-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                    Save
                </button>
            </div>
        </form>
    </div>
</main>


<?php require('partials/footer.php') ?>
