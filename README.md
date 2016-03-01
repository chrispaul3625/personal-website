# personal-website

### Milestone 1 Feedback

&#10004; Correctly set up the git/GitHub/PhpStorm toolchain.

&#10004; Create the directory structure for the project as outlined.

&#10004; Define a purpose, audience, and goal for your project.

&#10004; Create one Persona for your proposed project.

&#10004; Create one Use Case for your proposed project, based on the Persona.

Nice work on Milestone 1. Go ahead and get started on Milestone 2a. Everything looks great here, just a couple of tiny issues with your HTML. See below. Your Milestone 1 passes at [Tier III](https://bootcamp-coders.cnm.edu/projects/personal/rubric/)

#### Edits/Suggestions
- Your HTML code looks really good overall. The only style suggestion I have is not to include the main body text within a &lt;header&gt; tag. The &lt;header&gt; tag should just house things like the logo, main navigation, etc.
- In milestone-1.php and usecase.php, the closing &lt;/html&gt; tag is missing.

---

### Milestone 2&alpha; Feedback

&#10004; Create a sitemap outlining the pages you plan to include in your PWP.

&#10004; Document a brief plan or strategy for your content that will support the overall purpose and goal of the site.

&#10004; Map out a simple interaction flow that details the steps a user must take to successfully use your site to acheive the goal.

&#10004; Create a mobile and desktop/laptop wireframe for each page layout.

Milestone 2&alpha; looks good! Go ahead and start coding. I still see a minor issue with your HTML, detailed below. Since you want to have a portfolio with images, I'd recommend taking a look at [Swipebox](http://brutaldesign.github.io/swipebox/) for your gallery.

Your Milestone 2&alpha; passes at [Tier III](https://bootcamp-coders.cnm.edu/projects/personal/rubric/)

#### Edits &amp; Suggestions
- Your code structure is great, but you seem to be using `<p>` tags where you should be using `<div>` tags. `<p>` tags are for paragraphs of text, while `<div>` tags are containers for other elements.

---

### Milestone 2&beta; Feedback

Looks good! I've left some comments down below, check back in with Rochelle or I later this week and we can help you move over to A Small Orange.

Milestone 2&beta; 

Your Milestone 2&beta; passes at [Tier IV](https://bootcamp-coders.cnm.edu/projects/personal/rubric/)

#### Edits &amp; Suggestions
- Don't use `<p>` tags as containers, either just leave them out, or use a `<div>` if a container is really necessary.
- Remove the `xmlns` attributes from your `<html>` tags.
- Image sizes need to be flexible and change sizes for different size screens, use `class="img-responsive"` instead of `width` and `height`.
- Add that contact form on your contact page.

#### Set up ASO Host:
- Go over https://bootcamp-coders.cnm.edu/class-materials/php/email/, add composer.json and mailer.php
- enable shell access - chat live support and request them to enable this
- Add your public SSH key (CPanel, SSH Access)
- Add an email account, and add an email forwarder if you like :)
- Create a new deployment in PhpStorm that uploads to ASO, and upload your site there.
