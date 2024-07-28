<?php


if (get_the_title() === "About Us") {

    get_template_part("/template-parts/about");
} elseif (get_the_title() === "Blogs") {

    get_template_part("/template-parts/blog");
} elseif (get_the_title() === "Contact Us") {

    get_template_part("/template-parts/contact");
}
