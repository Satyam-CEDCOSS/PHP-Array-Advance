<!-- Main Dataset -->
<?php
$products = array(
    "Electronics" => array(
        "Television" => array(
            array(
                "id" => "PR001",
                "name" => "MAX-001",
                "brand" => "Samsung"
            ),
            array(
                "id" => "PR002",
                "name" => "BIG-301",
                "brand" => "Bravia"
            ),
            array(
                "id" => "PR003",
                "name" => "APL-02",
                "brand" => "Apple"
            )
        ),
        "Mobile" => array(
            array(
                "id" => "PR004",
                "name" => "GT-1980",
                "brand" => "Samsung"
            ),
            array(
                "id" => "PR005",
                "name" => "IG-5467",
                "brand" => "Motorola"
            ),
            array(
                "id" => "PR006",
                "name" => "IP-8930",
                "brand" => "Apple"
            )
        )
    ),
    "Jewelry" => array(
        "Earrings" => array(
            array(
                "id" => "PR007",
                "name" => "ER-001",
                "brand" => "Chopard"
            ),
            array(
                "id" => "PR008",
                "name" => "ER-002",
                "brand" => "Mikimoto"
            ),
            array(
                "id" => "PR009",
                "name" => "ER-003",
                "brand" => "Bvlgari"
            )
        ),
        "Necklaces" => array(
            array(
                "id" => "PR010",
                "name" => "NK-001",
                "brand" => "Piaget"
            ),
            array(
                "id" => "PR011",
                "name" => "NK-002",
                "brand" => "Graff"
            ),
            array(
                "id" => "PR012",
                "name" => "NK-003",
                "brand" => "Tiffany"
            )
        )
    )
);

// TASK 1
echo "<h1>List all products in this format</h1>";
echo "<table><tr><th>Category</th><th>Subcategory</th><th>ID</th><th>Name</th><th>Brand</th></tr>";
foreach ($products as $product_name => $subproduct) {
    foreach ($subproduct as $subproduct_name => $parameter) {
        foreach ($parameter as $parameter_name => $value) {
            print_r("<tr><td>$product_name</td><td>$subproduct_name</td><td>$value[id]</td><td>$value[name]</td><td>$value[brand]</td></tr>");
        }
    }
}
echo "</table>";
echo "<br>";
echo "<br>";

// TASK 2
echo "<h1>List all products in Mobile subcategory in same format as in point 1</h1>";
echo "<table><tr><th>Category</th><th>Subcategory</th><th>ID</th><th>Name</th><th>Brand</th></tr>";
foreach ($products as $product_name => $subproduct) {
    foreach ($subproduct as $subproduct_name => $parameter) {
        if ($subproduct_name=="Mobile"){
            foreach ($parameter as $parameter_name => $value) {
                print_r("<tr><td>$product_name</td><td>$subproduct_name</td><td>$value[id]</td><td>$value[name]</td><td>$value[brand]</td></tr>");
            }
        }
    }
}
echo "</table>";
echo "<br>";
echo "<br>";

// TASK 3
echo "<h1>List all products with their id, name, subcategory and category with brand name = 'Samsung'</h1>";
foreach ($products as $product_name => $subproduct) {
    foreach ($subproduct as $subproduct_name => $parameter) {
        foreach ($parameter as $parameter_name => $value) {
                if ($value["brand"]=="Samsung"){
                    print_r("<b>Product ID:</b> $value[id]<br>");
                    print_r("<b>Product Name:</b> $value[name]<br>");
                    print_r("<b>Subcategory:</b> $subproduct_name<br>");
                    print_r("<b>Category:</b> $product_name<br>");
                    echo "<br>";
            }
        }
    }
}
echo "<br>";
echo "<br>";

// TASK 4
echo "<h1>Delete product with id = PR003</h1>";
echo "<table><tr><th>Category</th><th>Subcategory</th><th>ID</th><th>Name</th><th>Brand</th></tr>";
foreach ($products as $product_name => $subproduct) {
    foreach ($subproduct as $subproduct_name => $parameter) {
        foreach ($parameter as $parameter_name => $value) {
                if ($value["id"]!="PR003"){
                print_r("<tr><td>$product_name</td><td>$subproduct_name</td><td>$value[id]</td><td>$value[name]</td><td>$value[brand]</td></tr>");
            }
        }
    }
}
echo "</table>";
echo "<br>";
echo "<br>";

// TASK 5
echo "<h1>Update product name = 'BIG-555' with id = PR002</h1>";
echo "<table><tr><th>Category</th><th>Subcategory</th><th>ID</th><th>Name</th><th>Brand</th></tr>";
foreach ($products as $product_name => $subproduct) {
    foreach ($subproduct as $subproduct_name => $parameter) {
        foreach ($parameter as $parameter_name => $value) {
                if ($value["id"]=="PR002"){
                    $value["name"] = "BIG-555";
                }
                print_r("<tr><td>$product_name</td><td>$subproduct_name</td><td>$value[id]</td><td>$value[name]</td><td>$value[brand]</td></tr>");
        }
    }
}
echo "</table>";