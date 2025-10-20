// ===== Quantity Buttons =====
const quantityGroups = document.querySelectorAll(".quantity");

quantityGroups.forEach(group => {
  const minus = group.querySelector("button:first-child");
  const qty = group.querySelector("span");
  const plus = group.querySelector("button:last-child");

  plus.addEventListener("click", () => {
    qty.textContent = parseInt(qty.textContent) + 1;
  });

  minus.addEventListener("click", () => {
    let val = parseInt(qty.textContent);
    if (val > 1) qty.textContent = val - 1;
  });
});


// Ganti Produk Utama Saat Klik Thumbnail
const mainImg = document.getElementById("main-img");
const mainTitle = document.getElementById("main-title");
const mainPrice = document.getElementById("main-price");
const mainDesc = document.getElementById("main-desc");
const thumbs = document.querySelectorAll(".thumb");

const productData = {
  "img/chocochip.jpg": {
    title: "Chocolate Chip Cookies",
    price: "Rp. 8.999",
    desc: "Our signature Chocolate Chip Cookies are made with rich butter, dark brown sugar, and semi-sweet chocolate chips. Crispy outside, soft inside — baked daily for perfect freshness!"
  },
  "img/lotuschiz.jpg": {
    title: "Lotus Cheese Cookie",
    price: "Rp. 7.000",
    desc: "A creamy fusion of Lotus Biscoff crumbs and cheese filling — sweet, slightly salty, and chewy. Perfect for cookie lovers who crave something rich yet light."
  },
  "img/rv.jpg": {
    title: "Red Velvet Cookie",
    price: "Rp. 6.500",
    desc: "Soft, buttery red velvet cookies filled with white chocolate chunks. Beautifully colored and perfectly baked to sweeten your day."
  },
  "img/matcha.jpg": {
    title: "Matcha Cookie",
    price: "Rp. 5.500",
    desc: "A delicious blend of premium Japanese matcha powder and white chocolate chips — the perfect balance of bitterness and sweetness."
  },
  "img/choconut.jpg": {
    title: "Choconut Cookie",
    price: "Rp. 7.500",
    desc: "Fudgy, thick, and loaded with dark chocolate and crunchy nuts — a heavenly treat for chocolate lovers."
  }
};

thumbs.forEach(thumb => {
  thumb.addEventListener("click", () => {
    const imgSrc = thumb.getAttribute("data-img");
    const product = productData[imgSrc];
    if (!product) return;

    mainImg.src = imgSrc;
    mainTitle.textContent = product.title;
    mainPrice.textContent = product.price;
    mainDesc.textContent = product.desc;

    // efek transisi
    const highlight = document.querySelector(".product-highlight");
    highlight.style.opacity = "0";
    setTimeout(() => {
      highlight.style.opacity = "1";
    }, 200);

    thumbs.forEach(t => t.classList.remove("active"));
    thumb.classList.add("active");
  });
});

// auth page
document.addEventListener("DOMContentLoaded", () => {
  const loginForm = document.getElementById("loginForm");
  const registerForm = document.getElementById("registerForm");

  if (loginForm) {
    loginForm.addEventListener("submit", e => {
      e.preventDefault();
      alert("Login successful! (demo only)");
      window.location.href = "index.html";
    });
  }

  if (registerForm) {
    registerForm.addEventListener("submit", e => {
      e.preventDefault();
      alert("Account created successfully! (demo only)");
      window.location.href = "login.html";
    });
  }
});

// Date Picker
document.addEventListener("DOMContentLoaded", function () {
  flatpickr("#dob", {
    dateFormat: "Y-m-d",
    altInput: true,
    altFormat: "F j, Y",
    maxDate: "today",
    allowInput: true
  });
});

