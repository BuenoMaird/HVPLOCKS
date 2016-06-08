<!-- <h1>Site coming soon please stand by</h1> -->

<?php require'header.php'; ?>

<?php require'nav.php' ?>

<section id="about">
  <div id="about_content">
  <h1><span>HVP</span> Locksmiths</h1>

  <p>Hunter Valley Precision Locksmiths is dedicated to securing the Newcastle and Greater Hunter Valley region with exceptional 24 / 7 locksmithing services.</p>
  <p> Ranging from Commercial and Domestic security solutions to Automotive services with emergency call outs available 24 / 7 they are there when you need them.</p>
  <p>For a full list of services please continue to scroll through the site or for an obligation free quote shoot an email through the contact form and we will get back to you as soon as possible</p>
  </div>
  <img src="images/ute.png" alt="hvp ute">
</section>

<div id="section_head">Domestic</div>

<section id="domestic">

  <img src="images/Domestic.png" alt="">
  <div class="main_content">
    <div class="mcl">
      <h1>Domestic</h1>

      <p>Our dedicated Master Locksmiths are available 24/7 for all your security needs.</p>

      <p> We take pleasure in assisting the Hunter Valley and surrounds with security services. Be it from opening your home when keys are locked inside, to ensuring every lock in your home works on a single key. We’re here to help.
    </div>

    <div class="mcr">
    <h1>Available Services</h1>
      <ul>
        <li>Lockouts</li>
        <li>Rekeying on premesis</li>
        <li>Lock installation</li>
        <li>Security door repairs</li>
        <li>Key cutting</li>
        <li>Security Upgrades</li>
      </ul>
    </div>
  </div>

</section>

<div id="section_head">Commercial</div>

<section id="commercial">
  <img src="images/Commercial.png" alt="">
  <div class="main_content">
    <div class="mcr">
      <h1>Services</h1>
      <ul>
        <li>Electric Strike Installation</li>
        <li>Lock fitting</li>
        <li>Hardware</li>
        <li>Routine Maintenance</li>
      </ul>
    </div>
    <div class="mcl">
      <h1>Commercial</h1>
      <p>Whether it’s a pre existing building or still in construction, we can provide any security requirement you need. Our Locksmiths have full security accreditation, carry all construction certificates needed and are OHS trained.</p>
    </div>
  </div>
</section>

<div id="section_head">Automotive</div>

<section id="automotive">
  
<img src="images/automotive.png" alt="">
  <div class="main_content">
    <div class="mcl">
      <h1>Automotive</h1>

      <p>Keys locked in your car or they just won’t work? We’re here to help 24/7. Our fully mobile locksmiths can meet you at your car to assist you.</p>
    </div>

    <div class="mcr">
    <h1>Services</h1>
      <ul>
        <li>Car opening</li>
        <li>Lock replacement</li>
        <li>Ignition and doorlock repair</li>
      </ul>
    </div>
  </div>

</section>
<section id="contact">
  <h1>Contact us</h1>
  <h2>For emergency 24 / 7 service please call 0404 785 921</h2>
  <div class="contactLeft">
    <form method="POST" action="email.php">
    <label for="from_email">Your email</label>
    <input 
      id="from_email"
      name="from_email" 
      size="64" 
      maxlength="64" 
      placeholder="Please enter your email"/>
    <label for="realname">Your name</label>
    <input 
      id="realname"
      name="realname" 
      size="64" 
      maxlength="64" 
      placeholder="Please enter your name"/>
    <label for="subject">Subject</label>
    <input 
      id="subject"
      name="subject" 
      size="64" 
      maxlength="64"
      placeholder="please enter the subject of your message"/> 
    </div>
    <div class="contactRight">
      <label for="mainText">Type your message</label>
      <textarea 
        id="mainText"
        name="body" 
        rows="10" 
        cols="60"></textarea>
      <p>
      <input class="formButton" type="submit" name="send" value="Send Your Message"/>
      </p>
      <input 
        type="hidden"
        name="returnurl" 
        value="<?php echo $escapedReturnUrl?>"/>
    </div>
  </form>

</section>

<?php require'footer.php' ?>
  
</body>
</html>