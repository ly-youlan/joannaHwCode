EEMT 5540 IT for E-Commerce Applications
HW 1. 2025 Spring. Max score: (2+2+2)+(2+2+2)=12
For this HW, please submit copies of all the files for Q1, Q2 as a zipped folder, together with one text file that contains the two URLs that we can use to test that your code is running from your server).

Q1. Please download the files related to session tracking using hidden fields in forms (on canvas, under Files/Tutorial/wk1_sessions/). Modify them and upload the modified files to your ITSC web server. The modified files should behave as follows:
(a)	Make an HTML file (hidden_field_1.html) with a single form, that asks the user to input their name and a pin number. Assume that both of these inputs do not have any special characters or spaces.
(b)	When the form in this file is submitted, you should execute a php script (hidden_field_2.php) that reads the user input, and creates a session name that is composed of the user name and pin number, as a single string.
[hint: the PHP operator “.” can be used to join two strings. For example, if $a = “john”, and $b = “1234”, then $c = $a . $b will concatenate the two input strings as “john1234”]

The php string should then output another form, with a single input, asking the user to input their favourite course. The form should have a hidden field with the session name also.
(c)	When the user submits the form from part (b), the server should execute a php script (hidden_field_3.php) which will read the input from the user, and respond with the message:
Hello. You are executing a session called [session name from the hidden field]. Your favourite course is [favourite course name entered by the user].

Q2. Cookies setting and unsetting.
(a)	Modify the file from part (a) in Q1, and call it cookies_1.html. When it is submitted, it should execute a php script called cookies_1.php
(b)	Create the file cookies_1.php, which will first create a cookie name, which is the same as the session name that you created in Q1 (b). Set this cookie, with an expiry date set to 20 minutes after the current time on the user’s client computer. It should return an HTML form back to the user with the message: I have set a cookie called [cookie name] on your computer. To delete this cookie, click on the following button.
(c)	When the user clicks on the button from the form in part (b), a php script (cookies_2.php) should be executed, which will unset the cookie.
