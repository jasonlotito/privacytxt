privacy.txt
===========

The essential idea behind privacytxt.org is to create a system where it's easy
for browsers and users to discover the privacy information about websites. This
includes terms and conditions, links to the privacy settings page for user 
accounts, privacy policies, and other legal aspects.  By setting up a simple way
for users and browser to discover the privacy policies, settings, and terms and
conditions of a website, users will be more informed of privacy decisions.

The Basic Problem
-----------------
Currently privacy is a mess on the web.  Each site implements their own measures
of display privacy policies, have different locations for privacy settings, and
generally don't make this easily discoverable for users.  Privacy is such an
important concern, but few people want to do the work to implement it.  Privacy
debacles such as Google Buzz and the constant problems with Facebook hilight that
even even large organizations are prone to these problems.

privacy.txt wants to help resolve this problem by creating a human and machine
readable text file that can be accessed and discovered.  This will provide
simple information that users can really use to discoer privacy policies, how
to change their settings, and other policies regarding the websites they are
visiting in a common, standardized way.

Make the browsers better
------------------------

Browsers currently inform users about the security level of a site through the
use of SSL Certificates.  However, the security certificate does nothing to
inform users about the privacy implications of visiting a website.  Browsers
currently have no mechanism to auto-discover privacy policies, nor do they have
any means of allowing users a one-click access to their privacy settings page
for a website.

This is what privacy.txt hopes to solve.

How it works - Site Side
------------------------

Make accessible a privacy.txt file in the root directory of your site.  For
example:

<pre>http://example.org/privacy.txt</pre>

Fill this file with information as described below.

### Privacy Policy Location

<code>Privacy Policy: http://www.example.org/Policies/Privacy</code>

This will start wtih 'Privacy Policy: ' and end with the URL to the page
containing the privacy policy of the website.  This page should allow users
to discover the privacy policy in languages the site supports.

### Privacy Settings

<code>Privacy Settings: http://www.example.org/Policies/Privacy/Settings</code>

This will start with 'Privacy Settings: ' and end with the URL to the page
a user can access to adjust any privacy settings on the site.  All privacy
settings need not be placed on this single page, but privacy settings should
be accessible directly from this page.

### Policy Settings

<code>Policy, [Policy Name]: http://www.example.org/Policies/Terms</code>

This will start with 'Policy, '.  After this, you'll enter the name of the policy.
For example, you can make the policy name 'Terms & Conditions'.  After the name
of the policy, you include ': ' plus the URL to the policy.  A policy for Terms &
Conditions would look like the following.

<code>Policy, Terms & Conditions: http://www.example.org/Policies/Terms</code>

How it works - Browser Side
---------------------------

There are two ways browsers can discover a privacy.txt file.

### Link Tag

Using a link tag in the sites head HTML tag.

<code>&lt;link rel="privacytxt" href="privacy.txt"&gt;</code>

In this case, the href points to the privacy.txt file.

### Auto Discovery

Simply search for the privacy.txt file in the root path.

<code>http://example.org/privacy.txt</code>


Implementation Browser Side
---------------------------

The most difficult part is implementing this into the browsers.  A browser will
need to make it easy for users to discover the privacy settings and information.

The Privacy Policy and Privacy Settings parameters above allow browser makers to
easily discover links to privacy information, and create UI elements witin the
browser akin to SSL certificates.  Giving users an easy way to access privacy
information and settings on the web.

the Policy parameter allows browsers to also read additional policies, and make
them easily available.

Future Plans
------------

The possibility exists for allowing sites to describe the privacy settings they
provide to their users.  This would allow users to fill in privacy settings in
simple environment designed by the browser makers but using the information
provided by the website.
