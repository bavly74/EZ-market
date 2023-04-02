let filteredProducts = [...products];

const productsContainer = document.querySelector(".products-section-row");

console.log(productsContainer);

const displayProducts = () => {
  if (filteredProducts.length < 1) {
    productsContainer.innerHTML = `<h6>Sorry, no products matched your search</h6>`;
    return;
  }

  productsContainer.innerHTML = filteredProducts
    .map((product) => {
      const { id, title, image1, image2, price, brand } = product;
      return `  
      <div class="product" data-id="${id}">
      <div class="productImg">
        <img src="${image1}" alt="" />
        <img src="${image2}" alt="" />
      </div>
      <div class="productInfo">
        <p>${brand}</p>
        <p><strong> ${title} </strong></p>
        <span class="price"> <del>$20.00 </del> $${price} </span>
      </div>
      <a href="#" class="add-cart">Add to cart</a>
    </div>`;
    })
    .join("");
};

displayProducts();

const form = document.querySelector(".input-form");
const searchInput = document.querySelector(".search-input");

form.addEventListener("keyup", () => {
  const inputValue = searchInput.value;
  filteredProducts = products.filter((product) => {
    return product.title.toLowerCase().includes(inputValue);
  });
  displayProducts();
});

const categoriesDOM = document.querySelector(".categories");

const displayButtons = () => {
  const buttons = [
    "all",
    ...new Set(products.map((product) => product.brand)),
  ];
  // console.log(buttons);
  categoriesDOM.innerHTML = buttons
    .map((brand) => {
      return `<button class='category-btn' data-id="${brand}">${brand}</button>`;
    })
    .join("");
};

displayButtons();

categoriesDOM.addEventListener("click", (e) => {
  const el = e.target;
  if (el.classList.contains("category-btn")) {
    if (el.dataset.id === "all") {
      filteredProducts = [...products];
    } else {
      filteredProducts = products.filter((product) => {
        return product.brand === el.dataset.id;
      });
    }
    searchInput.value = "";
    displayProducts();
  }
});
