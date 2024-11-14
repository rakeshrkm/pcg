<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Mail</title>
    <link rel="icon" href="assets/assets/images/logo.png">
  </head>

  <body>
    <div class="container" style="width: 100%;
        max-width: 700px;
        border-radius: 5px;
        border-style: black;
        border-color:rgba(6, 24, 44, 0.4)
        box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;">
      <div class="header" style="text-align:center">
        <img
          src="{{ asset('assets/img/PCGhighlogo.png') }}"
          alt=" Logo"
          style="width: 100px; height: auto; margin-top:20px"/>
      </div>
      <div class="content">
            <p>Dear Sir,</p>
            <p>Mr / Mrs {{$name}}, is want to contact with you his contact details is given below</p>
            <p>Email- {{$email}}</p>
            <p>Mobile- {{$mobile}}</p>
            <p>Message- {{$remarks}}</p>
        <p></p>
            For any issues related to the system you can send us an email at https://pcginternational.in 
            Thanks & Regards,
            Team Prakhar Consulting Group       
        </p>
        <ul>
          <li><a href="https://pcginternational.in/">Website : https://pcginternational.in/</a> </li>
          <li><a href="mailto:info@pcginternational.in">Email:info@pcginternational.in </a> </li>
          <li><a href="tel:91 11 4010 4369">Contact:+91 11 4010 4369</a> </li>
        </ul>
      </div>
    </div>
</body>
</html>