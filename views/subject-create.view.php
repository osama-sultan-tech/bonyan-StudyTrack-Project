<?php require('partials/head.php') ?>

<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>


<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <form action="/subject/create?user_id=<?= $user_id ?>" method="POST">
            <input type="hidden" name="user_id" value="<?= $user_id ?>">

            <div class="space-y-12">
                <!--                1 - Profile - -->
                <div class="border-b border-white/10 pb-12">
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-4">
                            <label for="subject-name" class="block text-sm/6 font-medium text-white ml-3">Subject
                                Name</label>
                            <div class="mt-2">
                                <div class="flex items-center rounded-md bg-white/5 pl-3 outline-1 -outline-offset-1 outline-white/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">
                                    <input id="subject-name" type="text" name="subject-name" placeholder="Mathematics"
                                           class="block min-w-0 rounded-md grow bg-transparent py-1.5 pr-3 pl-1 text-base text-white placeholder:text-gray-500 focus:outline-none sm:text-sm/6"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" class="text-sm/6 font-semibold text-white">Cancel</button>
                <button type="submit"
                        class="rounded-md bg-blue-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                    Save
                </button>
            </div>
        </form>


    </div>
</main>


<?php require('partials/footer.php') ?>
