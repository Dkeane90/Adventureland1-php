<?php require "partials/head.php";
require "partials/navbar.php";

?>

<!-- Family Section -->
<section>
    <div class="container my-8 mx-auto px-5 py-2 lg:px-32 lg:pt-12">
        <div class=" flex items-center justify-center bg-yellow-500 p-4 mb-8 rounded-lg w-1/3">
            <h2 class="text-xl font-bold">Family Affair</h2>
        </div>
        <div>
            <p class="w-1/2 mb-4 text-md font-medium">
                Experience an out of this world thrill with our rollercoasters or set sail in the sky with our sky boat attraction. You can have a wild time at in our sky chairs or relax the day away in our lazy river.
                <br>** Family fees apply to visitor groups with 2 adults and a maximum of up to 3 children 12 and under.
                <span class="font-bold font-green-600"> <br> TOTAL FAMILY COST IS $8,000 PER CHILD.
                    <br> Per person cost for those 13 and above is $2,000.
                </span>
            </p>
        </div>

        <div class="-m-1 flex flex-wrap md:-m-2 mt-6">
            <div class="flex w-1/3 flex-wrap">

                <div class="w-full p-1 md:p-2">

                    <img alt="family in chair swings" class="block h-full w-full rounded-lg object-cover object-center hover:scale-105 duration 200" src=" ../public/images/chair-swing.jpg" />
                </div>
            </div>
            <div class="flex w-1/3 flex-wrap">
                <div class="w-full p-1 md:p-2">
                    <img alt="family in roller coaster" class="block h-full w-full rounded-lg object-cover object-center hover:scale-105 duration 200" src="../public/images/family-coaster.jpg" />
                </div>
            </div>
            <div class="flex w-1/3 flex-wrap">
                <div class="w-full p-1 md:p-2">
                    <img alt="family in pirate ship" class="block h-full w-full rounded-lg object-cover object-center hover:scale-105 duration 200" src=" ../public/images/family-pirate-ship.jpg" />
                </div>
            </div>
            <div class="flex w-1/3 flex-wrap">
                <div class="w-full p-1 md:p-2">
                    <img alt="family in water slide" class="block h-full w-full rounded-lg object-cover object-center hover:scale-105 duration 200" src=" ../public/images/family-slide.png" />
                </div>
            </div>
            <div class="flex w-1/3 flex-wrap">
                <div class="w-full p-1 md:p-2">
                    <img alt="tumble ride" class="block h-full w-full rounded-lg object-cover object-center hover:scale-105 duration 200" src=" ../public/images/tumble-ride.png" />
                </div>
            </div>
            <div class="flex w-1/3 flex-wrap">
                <div class="w-full p-1 md:p-2">
                    <img alt="lazy river with tubes" class="block h-full w-full rounded-lg object-cover object-center hover:scale-105 duration 200" src=" ../public/images/lazy-river.jpg" />
                </div>
            </div>
            <a href="cart.view.php" class=" flex items-center justify-center bg-yellow-500 p-4 mb-8 rounded-lg w-full hover:scale-105 duration 200 hover:bg-yellow-300">
                <div>
                    <h3 class="text-xl font-bold">Book Today</h3>
                </div>
            </a>
        </div>
    </div>

</section>

<?php require "partials/footer.php"; ?>