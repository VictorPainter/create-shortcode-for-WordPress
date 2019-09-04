<?php 

//First step: Create the new php file (custom_shortcode.php — for example)

//Second step: Open the functions.php file, and add the following line of code: [ include('custom-shortcodes.php'); ]

//Third step: Inside the custom-shortcodes.php file, add the following block of code:

function pay_button_function(){
    $data = '
    <div class="subscribtion_section">
        <a href="https://secure.cardcom.solutions/e/yJv/">לחץ והירשם</a>
        <h3>?רוצה לקרוא את המאמר המלא</h3>
    </div>';
    return $data;
}

// The next step is to register the shortcode with WordPress using the built-in function add_shortcode. Still inside custom-shortcodes.php, add the following line of code:

add_shortcode('pay_button', 'pay_button_function');

//It's all now you can use your shortcode inside your WordPress project: [pay_button]

?>