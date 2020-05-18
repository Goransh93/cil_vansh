<?php
function component1($image, $product, $onbtn){
$element = "<div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
<form methot=\"post\" action=\"\">
    <div class=\"card shadow\" style=\"width: 15rem;\">
        <img src=\"$image\" class=\"card-img-top\" alt=\" \">
        <div class=\"card-body\">
            <h5 class=\"card-title\">$product</h5>
            <a href=\"rentform.php\" class=\"btn btn-primary\">$onbtn</a>
        </div>
    </div>
</form>
</div>";
echo $element;
}

function component($image, $product, $onbtn,$hiddenprice, $price, $product_id){
$element = "<div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
<form methot=\"post\" action=\"\">
    <div class=\"card shadow\" style=\"width: 15rem;\">
        <img src=\"$image\" class=\"card-img-top\" alt=\" \">
        <div class=\"card-body\">
            <h5 class=\"card-title\">$product</h5>
            <h5><small><s class=\"secondary\">$hiddenprice</s></small>
                <span class=\"price\">Rs.$price<span>
                </h5>
                <a href=\"rentform\" class=\"btn btn-primary\">$onbtn</a>
                <input type =\"hidden\" name=\"product_id\" value=\"$product_id\">
        </div>
    </div>
</form>
</div>";
echo $element;
}

// function printContent()
// {
//   var printContent = document.getElementById("div1");
//     var WinPrint = window.open('', '', 'width=1000,height=900');
//     WinPrint.document.write(printContent.innerHTML);
//     WinPrint.document.close();
//     WinPrint.focus();
//     WinPrint.print();
//     WinPrint.close();
// }



