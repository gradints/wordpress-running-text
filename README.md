# wordpress-running-text
this feature make running-text and toggleable with wordpress-custom-modal

# HOW TO USE
- copy folder to child-theme asset

- open function.php in child theme n copy this code
    ```php
    require_once('wordpress-running-text/logic.php');
    ```
- implementation => display running text using shortcode 
    ```php
    do_shortcode('[running_text text="<YOUR_TEXT>" toggle="<MODAL_ID>"]'); or [running_text text="<YOUR_TEXT>" toggle="<MODAL_ID>"]
    ```
