<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Document</title>
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">


    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,800;0,900;1,500;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/ImmoConnect/public/css/details.css">
</head>

<body>

    <header>
        <div class="head-left">
            <a href="#"><i class='bx bxs-chevron-left'></i></a>
            <div class="search">
                <input type="text" placeholder="Search" class="search" id="searchInput" oninput="searchCards()">
                <div class="icon">
                    <i class='bx bx-search-alt'></i>
                </div>
            </div>
        </div>
        <div class="btns">
            <a href="signin" class="signin">Sign in</a>
            <a href="signup" class="signup">Sign up</a>
        </div>
    </header>

    <div class="details">
    <div class="images">
    <img src="/ImmoConnect/public/images/<?php echo $annonce['path'] ?>" class="img1">
    <div class="image2">
        <?php foreach ($annonce['images'] as $imagePath): ?>
            <img src="/ImmoConnect/public/images/<?php echo $imagePath; ?>" class="img2">
        <?php endforeach; ?>
    </div>
</div>
        <div class="owner">
            <div class="name">
                <img src="/ImmoConnect/public/images/owner.jfif" class="owner">
                <div class="james">
                    <h3>James</h3>
                    <h4>Owner</h4>
                </div>
            </div>
            <p>By proceeding, you consent to receive calls and texts at the number you provided, including marketing by
                autodialer and prerecorded and artificial voice, and email, from realtor.com</p>
            <a href="#"><img src="/ImmoConnect/public/images/Screenshot 2023-12-26 171521.png" class="map"></a>
        </div>
    </div>
    <div class="description">
        <p><i class='bx bxs-circle'></i> For Sell</p>
        <div class="price">
            <h1>$
                <?php echo $annonce['prix'] ?>
            </h1>
            <div class="line"></div>
            <p>$614,999</p>
            <button class="buy" onclick="showPaymentModal()">Buy Now</button>

        </div>
        <p class="desc">
            <?php echo $annonce['description'] ?>
        </p>
        <div class="icons">
            <a href="#" class="h-name"><img src="/ImmoConnect/public/images/home.png" class="home">
                <?php echo $annonce['titre'] ?>
            </a>
            <a href="#" class="h-name"><img src="/ImmoConnect/public/images/location.png" class="home">189 Wilson Ave,
                Chicopee, MA 01013</a>
        </div>
        <button class="Contactowner modal-open" id="contactOwnerBtn">Contact Owner</button>
        <div
            class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
            <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

            <div
                class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded-3xl shadow-lg z-50 overflow-y-auto">



                <div class="modal-content py-4 px-6 bg-white rounded-xl">
                    <!-- Title -->
                    <div class="flex justify-between items-center pb-3">
                        <p class="text-2xl font-bold text-[#183D3D]">Contact Owner</p>
                        <div class="modal-close cursor-pointer z-50">
                            <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18"
                                height="18" viewBox="0 0 18 18">
                                <path
                                    d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                                </path>
                            </svg>
                        </div>
                    </div>

                    <div class="flex items-center pb-3">
                        <img src="/ImmoConnect/public/images/owner.jfif" class="owner w-10 h-10 rounded-full"
                            alt="Owner Image">
                        <div class="james ml-3">
                            <h3 class="text-black">James</h3>
                            <h4 class="text-black" style="color:gray;">Owner</h4>
                        </div>
                    </div>
                    <textarea id="messageInput"
                        class="w-full h-20 p-2 border border-white rounded-xl mb-4 text-white bg-[#1D1D1D]"
                        placeholder="Type your message..."></textarea>

                    <div class="flex justify-end pt-2">
                        <button
                            class="px-4 bg-transparent p-3 rounded-lg text-[#93B1A6] hover:bg-gray-100 hover:text-indigo-400 mr-2">Send
                            Message</button>
                        <button
                            class="modal-close px-4 bg-[#183D3D] p-3 rounded-lg text-white hover:bg-red-700">Close</button>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <form action="#" method="post">
        <select name="city" id="city"><i class='bx bx-chevron-down'></i>
            <option value="" selected>Cetegory</option>
            <option value="Carriage House">Carriage House</option>
            <option value="Tudor">Tudor</option>
            <option value="Brownstone">Brownstone</option>
            <option value="Cape Cod">Cape Cod</option>
        </select>
        <select name="price" id="price">
            <option value="" selected>Price</option>
            <option value="-$500.000">-$500.000</option>
            <option value="-$400.000">-$400.000</option>
            <option value="-$300.000">-$300.000</option>
            <option value="+$500.000">+$500.000</option>
        </select>
    </form>

    <div id="noResultsMsg" style="display: none; text-align: center; margin-top: 80px;color:white;padding:1% 5%">
        No results found.
    </div>
    <div id="noResultsCategoryMsg" style="display: none; text-align: center; margin-top: 20px;color:white;">
        No results found for the selected category.
    </div>
    <div id="noResultsPriceMsg" style="display: none; text-align: center; margin-top: 20px;color:white;">
        No results found for the selected price range.
    </div>
    <div class="cards" id="cards-container">
        <?php if (isset($all_annonce) && !empty($all_annonce)): ?>
            <?php foreach ($all_annonce as $all_annonces): ?>

                <div class="card">
                    <img src="/ImmoConnect/public/images/<?php echo $all_annonces['image_path'] ?>">
                    <div class="descr">
                        <p>
                            <?php echo $all_annonces['titre'] ?>
                        </p>
                        <p>$
                            <?php echo $all_annonces['prix'] ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No annonce available.</p>
        <?php endif; ?>
    </div>
    <div class="pagination" id="pagination">
        <button onclick="changePage(-1)">Previous</button>
        <button onclick="changePage(1)">Next</button>
    </div>
    <div class="comments">
        <div class="owner">
            <div class="name">
                <img src="/ImmoConnect/public/images/owner.jfif" class="owner">
                <div class="james">
                    <h3>James</h3>
                    <h4>Owner</h4>
                </div>
            </div>

            <form action="details" method="post" class="comm" id="commentForm">
                <input type="hidden" name="annonceId" value="<?= $annonce['id'] ?>">
                <textarea name="comment" id="comment" cols="30" rows="10" placeholder="add a comment"></textarea>
                <button class="Contactowner" id="btn" type="submit" name="submit">Send</button>
            </form>

        </div>
        <div class="comments2">
            <?php if (isset($comments) && !empty($comments)): ?>
                <?php foreach ($comments as $comment): ?>
                    <div class="name2">
                        <img src="/ImmoConnect/public/images/owner.jfif" class="owner">
                        <div class="jamess">
                            <p>
                                <?php echo $comment['label']; ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No comments available.</p>
            <?php endif; ?>
        </div>
    </div>
    </div>


    <footer>
        <div class="rows">
            <div class="copy">
                <a href="#" class="logo" aria-label="Read more"><img
                        src="/ImmoConnect/public/images/Group 1000001820.png" alt="#"></a>
                <h1>Terms of use | Privacy</h1>
                <p>Copyright by 2019 YourName, Inc</p>
            </div>
            <div class="det-foot">
                <h1>About Us</h1>
                <ul>
                    <li><a href="#" aria-label="Read more">Support Center</a></li>
                    <li><a href="#" aria-label="Read more">Customer Support</a></li>
                    <li><a href="#" aria-label="Read more">About Us</a></li>
                    <li><a href="#" aria-label="Read more">Copyright</a></li>
                </ul>
            </div>
            <div class="det-foot">
                <h1>Our Information</h1>
                <ul>
                    <li><a href="#" aria-label="Read more">Return Policy</a></li>
                    <li><a href="#" aria-label="Read more">Privacy Policy</a></li>
                    <li><a href="#" aria-label="Read more">Terms & Conditions</a></li>
                    <li><a href="#" aria-label="Read more">Site Map</a></li>
                </ul>
            </div>
            <div class="det-foot">
                <h1>My Account</h1>
                <ul>
                    <li><a href="#" aria-label="Read more">Press inquiries</a></li>
                    <li><a href="#" aria-label="Read more">Social media</a></li>
                    <li><a href="#" aria-label="Read more">directories</a></li>
                    <li><a href="#" aria-label="Read more">Images & B-roll</a></li>
                </ul>
            </div>
            <div class="det-foot">
                <h1>Connect</h1>
                <ul>
                    <li><a href="#" aria-label="Read more"><img src="/ImmoConnect/public/images/Group-3.png"
                                alt="#">Facebook</a>
                    </li>
                    <li><a href="#" aria-label="Read more"><img src="/ImmoConnect/public/images/Group22.png" alt="#"
                                class="tweet">Twitter</a></li>
                    <li><a href="#" aria-label="Read more"><img src="/ImmoConnect/public/images/Group-1.png"
                                alt="#">Github</a></li>
                    <li><a href="#" aria-label="Read more"><img src="/ImmoConnect/public/images/Group-2.png"
                                alt="#">Dribble</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script src="/ImmoConnect/public/js/main.js"></script>



    <script>
        var openmodal = document.querySelectorAll('.modal-open')
        for (var i = 0; i < openmodal.length; i++) {
            openmodal[i].addEventListener('click', function (event) {
                event.preventDefault()
                toggleModal()
            })
        }

        const overlay = document.querySelector('.modal-overlay')
        overlay.addEventListener('click', toggleModal)

        var closemodal = document.querySelectorAll('.modal-close')
        for (var i = 0; i < closemodal.length; i++) {
            closemodal[i].addEventListener('click', toggleModal)
        }

        document.onkeydown = function (evt) {
            evt = evt || window.event
            var isEscape = false
            if ("key" in evt) {
                isEscape = (evt.key === "Escape" || evt.key === "Esc")
            } else {
                isEscape = (evt.keyCode === 27)
            }
            if (isEscape && document.body.classList.contains('modal-active')) {
                toggleModal()
            }
        };


        function toggleModal() {
            const body = document.querySelector('body')
            const modal = document.querySelector('.modal')
            modal.classList.toggle('opacity-0')
            modal.classList.toggle('pointer-events-none')
            body.classList.toggle('modal-active')
        }

    </script>

    <script>
        const cardsContainer = document.getElementById('cards-container');
        const pagination = document.getElementById('pagination');
        const cardsPerPage = 10;
        let currentPage = 1;

        function showCards() {
            const cards = cardsContainer.querySelectorAll('.card');
            const start = (currentPage - 1) * cardsPerPage;
            const end = start + cardsPerPage;

            cards.forEach((card, index) => {
                card.style.display = index >= start && index < end ? 'block' : 'none';
            });
        }

        function changePage(direction) {
            currentPage += direction;
            if (currentPage < 1) {
                currentPage = 1;
            } else if (currentPage > Math.ceil(cardsContainer.children.length / cardsPerPage)) {
                currentPage = Math.ceil(cardsContainer.children.length / cardsPerPage);
            }
            showCards();
        }

        showCards();
    </script>



</body>

</html>