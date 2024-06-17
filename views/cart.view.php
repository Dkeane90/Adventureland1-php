<?php
require "partials/head.php";
require "partials/navbar.php";
// require ".././database.php";




$mysqli = require ".././database.php";
$sql =  "SELECT package, code, price, subtotal, Total FROM products";
$result = mysqli_query($mysqli, $sql);
$products = mysqli_fetch_all($result, MYSQLI_ASSOC);


?>

<!-- Cart Table -->



<div class="flex flex-col min-h-screen items-center justify-center">



  <div class="bg-slate-100 w-full flex flex-col items-center justify-center mb-16 mt-10 py-8">
    <h3 class="font-bold text-black text-3xl">Your Cart</h3>
    <a href="" class="text-blue-700 font-bold">Empty Cart</a>
  </div>
  <div class="overflow-x-auto">
    <table class="min-w-full bg-white shadow-md rounded-xl">
      <thead>
        <tr class="bg-blue-gray-100 text-gray-700">
          <th class="py-3 px-4 text-left">Package</th>
          <th class="py-3 px-4 text-left">Code</th>
          <th class="py-3 px-4 text-left">Price</th>
          <th class="py-3 px-4 text-left">No. Of Persons</th>
          <th class="py-3 px-4 text-left">Subtotal</th>
          <th class="py-3 px-4 text-left">Action</th>
        </tr>
      </thead>
      <?php foreach ($products as $item) : ?>
        <tbody class="text-blue-gray-900">
          <tr class="border-b border-blue-gray-200">
            <td class="py-3 px-4 font-bold"><?= $item["package"] ?></td>
            <td class="py-3 px-4"><?= $item["code"] ?></td>
            <td id="price" class="price py-3 px-4"><?= "$" .  number_format($item["price"], 2) ?></td>
            <td class="py-3 px-4">
              <input id="quantity" type="text" class="rounded border-2 border-slate-300" name="quantity" size="2" />
            </td>
            <td class="py-3 px-4">
              <p id="answer">
              </p>
            </td>
            <td class="py-3 px-4">
              <a href="#" class="font-medium text-blue-600 hover:text-blue-800">Remove</a>
            </td>
          </tr>
        <?php endforeach ?>

        <!-- Add more rows as needed -->
        <tr class="border-b border-blue-gray-200">

          <td class="py-3 px-4 font-black text-green-800">Total</td>
          <td class="py-3 px-4"></td>
          <td class="py-3 px-4"></td>
          <td class="py-3 px-4 font-medium"></td>
          <td class="py-3 px-4"></td>
        </tr>
        </tbody>

    </table>
    <div class="flex flex-col items-center justify-center">
      <button onclick="calculate()" class="w-9/12 bg-slate-300 mt-7 mb-7 py-3  rounded-full hover:scale-105 duration-200">Calculate</button>
      <button class="w-9/12 bg-green-700 mb-7 py-3 text-white rounded-full hover:scale-105 duration-200">Checkout</button>
    </div>
  </div>
</div>

<script>
  function calculate() {
    var price = document.getElementById("price").value;
    var quantity = document.getElementById("quantity").value;
    var result = parseFloat(price) * parseFloat(quantity);

    if (!null(quantity)) {
      alert("A number is required for the number of persons!.");
    } else {
      document.getElementById("answer").innerHTML = result;
    }
  }
</script>

<?php require "partials/footer.php"; ?>