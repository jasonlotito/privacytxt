<!Doctype html>
<html>
<head>
<title>privacy.txt - Making privacy easier on the web</title>
<link rel="stylesheet" href="site.css">
</head>
<body>
	<header>
		<h1>privacy.txt</h1>
	</header>

	<section>
	<h2>The Idea</h2>
	<p>The essential idea behind privacytxt.org is to create a system where it's easy
	for browsers and users to discover the privacy information about websites. This
	includes terms and conditions, links to the privacy settings page for user 
	accounts, privacy policies, and other legal aspects.  By setting up a simple way
	for users and browser to discover the privacy policies, settings, and terms and
	conditions of a website, users will be more informed of privacy decisions.</p>
	</section>
	
	<section>
	<h2>The Basic Problem</h2>
	<p>Currently privacy is a mess on the web.  Each site implements their own measures
	of display privacy policies, have different locations for privacy settings, and
	generally don't make this easily discoverable for users.  Privacy is such an
	important concern, but few people want to do the work to implement it.  Privacy
	debacles such as Google Buzz and the constant problems with Facebook hilight that
	even even large organizations are prone to these problems.</p>


	<p>privacy.txt wants to help resolve this problem by creating a human and machine
	readable text file that can be accessed and discovered.  This will provide
	simple information that users can really use to discoer privacy policies, how
	to change their settings, and other policies regarding the websites they are
	visiting in a common, standardized way.</p>
	</section>
	
	<section>
	<h2>Make the browsers better</h2>

	<p>Browsers currently inform users about the security level of a site through the
	use of SSL Certificates.  However, the security certificate does nothing to
	inform users about the privacy implications of visiting a website.  Browsers
	currently have no mechanism to auto-discover privacy policies, nor do they have
	any means of allowing users a one-click access to their privacy settings page
	for a website.</p>

	<p>This is what privacy.txt hopes to solve.</p>
	</section>
	
	<section>
	<h2>How it works - Site Side</h2>

	<p>Make accessible a privacy.txt file in the root directory of your site.  For
	example:</p>

	<pre>http://example.org/privacy.txt</pre>

	<p>Fill this file with information as described below.</p>

	<h3>Privacy Policy Location</h3>

	<p><code>Privacy Policy: http://www.example.org/Policies/Privacy</code></p>

	<p>This will start wtih 'Privacy Policy: ' and end with the URL to the page
	containing the privacy policy of the website.  This page should allow users
	to discover the privacy policy in languages the site supports.</p>

	<h3>Privacy Settings</h3>

	<p><code>Privacy Settings: http://www.example.org/Policies/Privacy/Settings</code></p>

	<p>This will start with 'Privacy Settings: ' and end with the URL to the page
	a user can access to adjust any privacy settings on the site.  All privacy
	settings need not be placed on this single page, but privacy settings should
	be accessible directly from this page.</p>

	<h3>Policy Settings</h3>

	<p><code>Policy, [Policy Name]: http://www.example.org/Policies/Terms</code></p>

	<p>This will start with 'Policy, '.  After this, you'll enter the name of the policy.
	For example, you can make the policy name 'Terms &amp; Conditions'.  After the name
	of the policy, you include ': ' plus the URL to the policy.  A policy for Terms &amp;

	Conditions would look like the following.</p>

	<p><code>Policy, Terms &amp; Conditions: http://www.example.org/Policies/Terms</code></p>

	<h2>How it works - Browser Side</h2>

	<p>There are two ways browsers can discover a privacy.txt file.</p>

	<h3>Link Tag</h3>

	<p>Using a link tag in the sites head HTML tag.</p>

	<p><code>&lt;link rel="privacytxt" href="privacy.txt"&gt;</code></p>

	<p>In this case, the href points to the privacy.txt file.</p>

	<h3>Auto Discovery</h3>

	<p>Simply search for the privacy.txt file in the root path.</p>

	<p><code>http://example.org/privacy.txt</code></p>
	</section>
	
	<section>
	<h2>Implementation Browser Side</h2>

	<p>The most difficult part is implementing this into the browsers.  A browser will
	need to make it easy for users to discover the privacy settings and information.</p>

	<p>The Privacy Policy and Privacy Settings parameters above allow browser makers to
	easily discover links to privacy information, and create UI elements witin the
	browser akin to SSL certificates.  Giving users an easy way to access privacy
	information and settings on the web.</p>

	<p>the Policy parameter allows browsers to also read additional policies, and make
	them easily available.</p>
	</section>
	
	<section>
	<h2>Future Plans</h2>

	<p>The possibility exists for allowing sites to describe the privacy settings they
	provide to their users.  This would allow users to fill in privacy settings in
	simple environment designed by the browser makers but using the information
	provided by the website.</p>
	</section>
	

</body>
</html>