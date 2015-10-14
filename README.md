<h2>Live Demo: <a href="http://openvbx.credit1source.com/Exercise2">Exercise 2</a></h2>

<h2> Features for Functionality Requirements </h2>
Here I will list each functional requirement, and how I fulfilled that requirement in my code. Below I have listed a label for each requirement and the requirement verbatim in quotes.

<h3> Accept and POST Input </h3>
"page accepts user input and calls itself passing the input as well as some kind of operation directive (e.g. function name) via http POST"
- I met this requirement by creating two required text fields with input validated using the same js function I used in Example1. I passed the values via ajax post to .php file.

<h3> Execute External Shell Script </h3>
"page processes POSTed user input in some way by calling an external shell script on the server that logs to server's filesystem"
- User input is passed to .php from ajax and then I call external shell script with command shell_exec(script.sh)

<h3> Return Processed Data </h3>
"page returns processed input in some way (be creative)"
- Since I used a beautiful modal form in example 1, I wanted to reuse it. I passed the processed data and the date/time of the log back via a modal form. 


