Hey all!

just thought I'd update you on what's going on and how to make all this work

First, take ResumateDB.txt, and query your local host with it. This will create an 
empty copy of the database on your end. 

That's all for now, I'll update this as the back-end gets more in depth.

What I need: I'd like a landing page for a user that has signed in. The $_SESSION cookie
is set with user ID number and email, so I can populate the page with information if you want,
but I can't style for the life of me, and I don't want to step all over the website architecture.
Also, we can customize the header bar once the user logs on, if you guys would like.









-------

(Rob)
Other changes to make:
-check if the email is already registered in the database when registering
-add message display for unmatched password/confirmation
-header change to "logout" instead of "login/signup" when a user is logged in
-"logout" landing needs some style work (or needs to be replace once header is changed, replaced by Corey's suggestion for a landing page)
-The Contact Us page requires mail server functionality (need to add it to local machines)
-add "reply to my email" checkbox
