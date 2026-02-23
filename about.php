<?php
// index.php
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Testimonials - Sanleva</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>

    <style>
        body { background:#f4f6f9; }

        .testimonial-section {
            padding:80px 0;
        }

        .swiper-slide {
            display:flex;
            justify-content:center;
        }

        .testimonial-card {
            width:100%;
            max-width:500px;
            padding:25px;
            border-radius:12px;
            background:#fff;
            box-shadow:0 10px 30px rgba(0,0,0,0.08);
            position:relative;
        }

        .testimonial-card button {
            position:absolute;
            top:10px;
            right:15px;
            border:none;
            background:none;
            font-size:18px;
            color:red;
        }

        .stars {
            color:gold;
            font-size:18px;
        }

        #addModal {
            display:none;
            position:fixed;
            inset:0;
            background:rgba(0,0,0,0.5);
            z-index:9999;
        }

        .modal-box {
            background:#fff;
            width:400px;
            padding:25px;
            border-radius:10px;
            margin:120px auto;
        }

        .star-picker span {
            font-size:22px;
            cursor:pointer;
        }
    </style>
</head>
<body>

<section class="testimonial-section">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Client Testimonials</h2>
            <button class="btn btn-primary" onclick="openModal()">+ Add Review</button>
        </div>

        <div class="swiper testimonial-slider">
            <div class="swiper-wrapper" id="testimonialWrapper">


            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

    </div>
</section>

<!-- Add Review Modal -->
<div id="addModal">
    <div class="modal-box">
        <h4>Add Review</h4>

        <input type="text" id="grName" class="form-control mb-2" placeholder="Your Name">

        <div class="star-picker mb-2">
            <span onclick="setRating(1)">★</span>
            <span onclick="setRating(2)">★</span>
            <span onclick="setRating(3)">★</span>
            <span onclick="setRating(4)">★</span>
            <span onclick="setRating(5)">★</span>
        </div>

        <textarea id="grText" class="form-control mb-2" placeholder="Your Review"></textarea>

        <button class="btn btn-success w-100 mb-2" onclick="addReview()">Submit</button>
        <button class="btn btn-secondary w-100" onclick="closeModal()">Cancel</button>
    </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<script>

let swiper;
let chosenRating = 0;

function loadTestimonials() {

    fetch("get_review.php")
    .then(res => res.json())
    .then(data => {

        const wrapper = document.getElementById("testimonialWrapper");
        wrapper.innerHTML = "";

        data.forEach(item => {
            wrapper.innerHTML += `
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <button onclick="deleteReview(${item.id})">×</button>
                        <h5>${item.name}</h5>
                        <div class="stars">${"★".repeat(parseInt(item.rating))}</div>
                        <p>${item.text}</p>
                    </div>
                </div>
                
            `;
        });

        if (swiper) swiper.destroy(true, true);

        swiper = new Swiper(".testimonial-slider", {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            pagination: { el: ".swiper-pagination", clickable: true },
            navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" }
        });   

    });
}

function addReview() {

    const name = document.getElementById("grName").value.trim();
    const text = document.getElementById("grText").value.trim();

    if (!name || !text || chosenRating == 0) {
        alert("All fields required");
        return;
    }

    fetch("add_review.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ name:name, rating:chosenRating, text:text })
    })
    .then(res => res.text())
    .then(() => {
        closeModal();
        loadTestimonials();
    });
}

function deleteReview(id) {
    fetch("delete_review.php?id=" + id)
    .then(() => loadTestimonials());
}

function setRating(value) {
    chosenRating = value;
}

function openModal() {
    document.getElementById("addModal").style.display = "block";
}

function closeModal() {
    document.getElementById("addModal").style.display = "none";
    chosenRating = 0;
    document.getElementById("grName").value = "";
    document.getElementById("grText").value = "";
}

document.addEventListener("DOMContentLoaded", loadTestimonials);

</script>

</body>
</html>