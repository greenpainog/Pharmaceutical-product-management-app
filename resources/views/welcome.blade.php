<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel with Vue</title>
    <!-- Use the Vite directive instead of mix -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
    <product-list ref="productList"></product-list> <!-- Keep the product list -->
    <add-product></add-product> <!-- Use the new component -->
    
    </div>
</body>
</html>
