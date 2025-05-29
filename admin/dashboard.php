<?php include "../template/admin/layout-up.php"; ?>

<section class="dashboard w-full ml-[360px] pt-[85px] bg-[#f5f5f5] min-h-screen overflow-y-auto">
    <div class="header-admin w-full bg-white py-5 px-7">
        <div class="flex flex-col">
            <h3 class="text-xl"><i class="fas fa-th-large"></i> Dashboard </h3>
            <p class="text-sm text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Architecto commodi
                nihil fugiat
                voluptates. Quas, a!</p>
        </div>
    </div>
    <main class="row-dashboard py-5 px-7">
        <div class="card grid grid-cols-3 mt-2 gap-6">
            <div class="flex flex-col shadow p-6 w-full border-[1px] border-gray-200 hover:bg-gray-50 bg-white">
                <div
                    class="w-[40px] h-[40px] border-[1px] mb-2 border-primary bg-primary text-white rounded-sm flex justify-center items-center">
                    <i class="fas fa-users"></i>
                </div>
                <h3 class="text-3xl font-semibold my-1">100</h3>
                <div class="flex items-center text-sm justify-between">
                    <span class="text-gray-600 ">Total Users</span>
                    <i class="fas fa-chevron-right bg-gray-200 rounded-sm p-2"></i>
                </div>
            </div>
            <div class="flex flex-col shadow p-6 w-full border-[1px] border-gray-200 hover:bg-gray-50 bg-white">
                <div
                    class="w-[40px] h-[40px] border-[1px] mb-2 border-primary bg-primary text-white rounded-sm flex justify-center items-center">
                    <i class="fas fa-users"></i>
                </div>
                <h3 class="text-3xl font-semibold my-1">100</h3>
                <div class="flex items-center text-sm justify-between">
                    <span class="text-gray-600 ">Total Users</span>
                    <i class="fas fa-chevron-right bg-gray-200 rounded-sm p-2"></i>
                </div>
            </div>
            <div class="flex flex-col shadow p-6 w-full border-[1px] border-gray-200 hover:bg-gray-50 bg-white">
                <div
                    class="w-[40px] h-[40px] border-[1px] mb-2 border-primary bg-primary text-white rounded-sm flex justify-center items-center">
                    <i class="fas fa-users"></i>
                </div>
                <h3 class="text-3xl font-semibold my-1">100</h3>
                <div class="flex items-center text-sm justify-between">
                    <span class="text-gray-600 ">Total Users</span>
                    <i class="fas fa-chevron-right bg-gray-200 rounded-sm p-2"></i>
                </div>
            </div>
        </div>
        <div class="w-full bg-white mt-6 p-5 rounded-md">
            <h1 class="text-xl font-medium">Selamat Datang, <?= $_SESSION['name'] ?></h1>
            <p class="text-gray-500">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse,
                incidunt.</p>
        </div>
        <div class="bg-white mt-6 p-5 rounded-md w-full">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium sunt minima ea incidunt
                harum
                deleniti fugiat quibusdam. Aut corrupti quis minima veniam officia. Quidem cupiditate ipsam ex
                repellat deleniti adipisci molestias, nobis sint labore, cumque nulla illo quas odit facere
                aliquid
                in dolor explicabo necessitatibus numquam! Ullam mollitia blanditiis natus sequi totam iure
                iste.
                Voluptatibus, libero. Doloribus ex reprehenderit ratione rem cum voluptas inventore ad
                similique,
                explicabo ullam officiis. Ea asperiores, suscipit debitis, nemo ut corrupti corporis
                perspiciatis,
                fugiat unde incidunt nesciunt sequi! Inventore dolorum id, repellat provident, iste
                reprehenderit
                nesciunt, illo minima omnis aut maxime! Enim molestias inventore minus vero dolorum culpa
                dolores
                corrupti, quod veniam maxime voluptate tempora ipsam sunt est error distinctio voluptas
                aspernatur
                facere rem commodi consectetur omnis ullam! Voluptatibus, dolorem omnis incidunt eos enim eaque
                similique iure nihil facere magni dicta. Inventore laborum in aspernatur ipsa quas. Numquam quam
                iusto fugiat expedita doloremque nisi, consequatur excepturi, facere perspiciatis optio
                accusamus
                voluptas quae mollitia nihil, aliquid vitae vero culpa nobis voluptate iure saepe officiis!
                Nulla
                modi ad officia voluptatem porro, eveniet perferendis unde eum aspernatur consequatur,
                accusantium
                sequi mollitia consequuntur eligendi animi assumenda officiis, dolore at inventore repudiandae
                autem
                facere illo earum vitae? Cupiditate impedit illum recusandae earum dolor fugiat inventore
                veritatis
                consectetur harum minima perspiciatis delectus sunt laboriosam, beatae soluta eaque, saepe

                ab.
                Reiciendis, ipsa. Consectetur velit, aperiam molestias temporibus porro dolor fugit beatae nisi
                sunt
                repellendus repudiandae earum fuga. Nihil, autem quisquam aliquid ea, tenetur maxime facilis
                placeat
                totam veniam recusandae architecto itaque expedita natus cum harum accusantium a? Consequuntur,
                sunt! Similique, molestias.</p>

        </div>
    </main>

    <footer class="p-5 bg-white">
        <p class="text-sm">&copy; 2025 - Batik Nusantara</p>
    </footer>
</section>

<?php include "../template/admin/layout-down.php" ?>