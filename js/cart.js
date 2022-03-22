let canReload = false;
document.addEventListener("click", async (e) => {
    let className = e.target.getAttribute("class");
    if (className != "add-card") return;
    let productId = e.target.getAttribute("product_id");
    let cart = await Require("Cart", [productId]);
    if (cart == "") window.location.href = "account/login.php";
    if (canReload) location.reload();
});