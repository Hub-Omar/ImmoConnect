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
            <a href="#" class="signin">Sign in</a>
            <a href="signup" class="signup">Sign up</a>
        </div>
    </header>

    <div class="details">
        <div class="images">
            <img src="/ImmoConnect/public/images/detail1.jfif" class="img1">
            <div class="image2">
                <img src="/ImmoConnect/public/images/Black Brick Vila in Damavand, Iran by Reza Mohtashami.jfif"
                    class="img2">
                <img src="/ImmoConnect/public/images/City Beach Residence Elevation.jfif" class="img2">
                <img src="/ImmoConnect/public/images/detail1.jfif" class="img2">
                <img src="/ImmoConnect/public/images/download (3).jfif" class="img2">
                <img src="/ImmoConnect/public/images/detail1.jfif" class="img2">
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
            <h1>$514,999</h1>
            <div class="line"></div>
            <p>$614,999</p>
            <button class="buy">Buy Now</button>
        </div>
        <p class="desc">By proceeding, you consent to receive calls and texts at the number you provided, including
            marketing by autodialer and prerecorded and artificial voice, and email, from realtor.com</p>
        <div class="icons">
            <a href="#" class="h-name"><img src="/ImmoConnect/public/images/home.png" class="home">189 Wilson Ave</a>
            <a href="#" class="h-name"><img src="/ImmoConnect/public/images/location.png" class="home">189 Wilson Ave,
                Chicopee, MA 01013</a>
        </div>
        <button class="Contactowner">Contact Owner</button>
        <form action="#">
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

        <div id="noResultsMsg" style="display: none; text-align: center; margin-top: 80px;color:white;">
            No results found.
        </div>
        <div id="noResultsCategoryMsg" style="display: none; text-align: center; margin-top: 20px;color:white;">
            No results found for the selected category.
        </div>
        <div id="noResultsPriceMsg" style="display: none; text-align: center; margin-top: 20px;color:white;">
            No results found for the selected price range.
        </div>
        <div class="cards">
            <div class="card">
                <img src="/ImmoConnect/public/images/City Beach Residence Elevation.jfif">
                <div class="descr">
                    <p>Carriage House</p>
                    <p>$514,999</p>
                </div>
            </div>
            <div class="card">
                <img src="/ImmoConnect/public/images/Black Brick Vila in Damavand, Iran by Reza Mohtashami.jfif">
                <div class="descr">
                    <p>Tudor</p>
                    <p>$514,999</p>
                </div>
            </div>
            <div class="card">
                <img src="/ImmoConnect/public/images/detail1.jfif">
                <div class="descr">
                    <p>189 Wilson Ave</p>
                    <p>$414,999</p>
                </div>
            </div>
            <div class="card">
                <img src="/ImmoConnect/public/images/download (3).jfif">
                <div class="descr">
                    <p>189 Wilson Ave</p>
                    <p>$614,999</p>
                </div>
            </div>
            <div class="card">
                <img src="/ImmoConnect/public/images/City Beach Residence Elevation.jfif">
                <div class="descr">
                    <p>189 Wilson Ave</p>
                    <p>$514,999</p>
                </div>
            </div>
            <div class="card">
                <img src="/ImmoConnect/public/images/Black Brick Vila in Damavand, Iran by Reza Mohtashami.jfif">
                <div class="descr">
                    <p>189 Wilson Ave</p>
                    <p>$714,999</p>
                </div>
            </div>
            <div class="card">
                <img src="/ImmoConnect/public/images/detail1.jfif">
                <div class="descr">
                    <p>189 Wilson Ave</p>
                    <p>$514,999</p>
                </div>
            </div>
            <div class="card">
                <img src="/ImmoConnect/public/images/download (3).jfif">
                <div class="descr">
                    <p>189 Wilson Ave</p>
                    <p>$314,999</p>
                </div>
            </div>
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

                <form action="#" class="comm">
                    <textarea name="comment" id="comment" cols="30" rows="10" placeholder="add a comment"></textarea>
                    <button class="Contactowner" id="btn">Send</button>
                </form>

            </div>
            <div class="comments2">
                <div class="name2">
                    <img src="/ImmoConnect/public/images/owner.jfif" class="owner">
                    <div class="jamess">
                        <p>By proceeding, you consent to receive calls and texts at the number you provided, including
                            marketing by autodialer</p>
                    </div>
                </div>
                <div class="name2">
                    <img src="/ImmoConnect/public/images/owner.jfif" class="owner">
                    <div class="jamess">
                        <p>By proceeding, you consent to receive calls and texts at the number you provided, including
                            marketing by autodialer</p>
                    </div>
                </div>
                <div class="name2">
                    <img src="/ImmoConnect/public/images/owner.jfif" class="owner">
                    <div class="jamess">
                        <p>By proceeding, you consent to receive calls and texts at the number you provided, including
                            marketing by autodialer</p>
                    </div>
                </div>
                <div class="name2">
                    <img src="/ImmoConnect/public/images/owner.jfif" class="owner">
                    <div class="jamess">
                        <p>By proceeding, you consent to receive calls and texts at the number you provided, including
                            marketing by autodialer</p>
                    </div>
                </div>
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

    <script src="/ImmoConnect/public/js/main.js"></script>


</body>

</html>