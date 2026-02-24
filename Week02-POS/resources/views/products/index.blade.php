<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product</title>
</head>
<body>
    <h1>Product {{ $category }}</h1>
    @if ($category == 'Food-Beverage') 
        <ul>
            <li>Susu</li>
            <li>Burgers</li>
            <li>Seblak</li>
        </ul>
    @elseif($category == 'Beauty-Health') 
        <ul>
            <li>Skincare</li>
            <li>Sun Sceen</li>
            <li>Hair Care</li>
        </ul>
    @elseif ($category == 'Home-Care') 
        <ul>
            <li>Pillow</li>
            <li>Table</li>
            <li>Toilet Paper</li>
        </ul>
    @elseif ($category == 'Baby-Kid') 
        <ul>
            <li>Pampers</li>
            <li>Glass Bottle</li>
            <li>Cetaphil</li>
        </ul>
    @endif
</body>
</html>