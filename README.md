# wpadmins
This is simple php script to get the wordpress admin users
I used file_get_contents function to import the data from the wordpress
>This is the data URL /wp-json/wp/v2/users/

The imported data encoded with JSON so i used json_decode.

This tool dosen't work on all websites , some websites they disables the public API so you need a private key to use it .
