<?php
session_start();

?>

<header>
    <nav>

        <div class=" bg-yellow-500 py-4 px-8 w-full flex items-center justify-center gap-x-4 fixed top-0">

            <!-- Nav -->
            <a class="font-bold hover:scale-105 duration 200 hover:underline" href="../../public/index.php">Home</a>
            <a href="../views/kiddies.view.php" class="font-bold hover:scale-105 duration 200 hover:underline">Kiddies Place</a>
            <a href="../views/family.view.php" class="font-bold hover:scale-105 duration 200 hover:underline">Family Affair</a>
            <a href="" class="font-bold hover:scale-105 duration 200 hover:underline">Book A Date</a>


            <a href="../views/login.view.php" class="font-bold hover:scale-105 duration 200 hover:underline">
                Login

            </a>

            <a href="https://buy.stripe.com/test_6oEbMPegffVUfu0288">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10 19.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5zm3.5-1.5c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5zm1.336-5l1.977-7h-16.813l2.938 7h11.898zm4.969-10l-3.432 12h-12.597l.839 2h13.239l3.474-12h1.929l.743-2h-4.195z" />
                </svg>

            </a>

        </div>

    </nav>
</header>