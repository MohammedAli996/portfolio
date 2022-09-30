<?php
class Pagenav
{
    public function getNavbarHead()
    {
        echo '
        <!-- nav start -->
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <label class="logo">Mohammed Ali</label>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#aboutme">About</a></li>
                <li><a href="#service">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <!-- nav end -->
        ';
    }
}
?>