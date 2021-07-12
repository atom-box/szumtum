# Zumtum: An aid For Studying, Memorizing
![Screenshot of the Zumtum App](https://github.com/atom-box/zuntum/blob/master/zum_310x165.png)<br><br>
[Run a preview version of ZumTum!](https://atom-box.github.io/zumtum/)
## Cornell Notes
Students have been using Cornell notes as a studying technique since at least the 1940s.  This app is a tool for making Cornell notes.

## Under construction (July 2021)
This is a migration of a frontend project from 2019 to make it more backend-based.  Rewrite: (2019) Zumtum Javascript app --> (2021) PHP/Symfony App. 
## The Goal:
1. Screen 1: The user drops in a text and presses a button.
2. Screen 2: The text is broken into chunks along the right side of the page.  Matching text-entry forms on the left allow the user to type in questions.
3. Screen 3: The original text disappears.  The user has only their self-written questions (now uneditable) on the left.  On the right, a 2000 character (300 word) text-entry form allows the user to type their paragraph that answers the questions. <br> 
This is the familiar 1-2-3 of Cornell notes, applied to reading of news or text, chosen by the user.	

## How to run as Symfony app on my local machine
`$ bin/console cache:clear`
`$ symfony server:start`

## DB info 
Saved to my local machine as `deploy.md`

## Todo
*  handle the data from step 1
*  color the background, in resets css
*  dropdown, from Controller FormsType.php


## Wishlist
*  persist to DB via Doctrine object
*  bring in the existing page1, set as homepage(){render}