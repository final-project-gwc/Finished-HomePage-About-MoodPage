<html>
<head>

</head>
<body>

<link rel="stylesheet" href="tm.css"></link>
    <div id="zipcode1" w-type="event-discovery" w-tmapikey="9og4mkzbjwQKp75PFbmG3icLDt1UFk7a" w-googleapikey="YOUR_GOOGLE_API_KEY"
    w-keyword="" w-theme="grid" w-colorscheme="light" w-width="100%" w-height="750" w-size="100" w-border="2"
    w-borderradius="4" w-postalcode="" w-radius="250" w-city="<?php echo $_GET["city"]; ?>" w-period="week" w-layout="fullwidth" w-attractionid="" w-promoterid=""
    w-venueid="" w-affiliateid="" w-segmentid="" w-proportion="custom" w-titlelink="off" w-sorting="dateAscending" w-id="id_qkh1cf"
    w-source="" w-branding="Ticketmaster" w-classificationname="music" w-latlong="" w-showloadmorebutton="true">
  </div>
  <script src="https://ticketmaster-api-staging.github.io/products-and-docs/widgets/event-discovery/1.0.0/lib/main-widget.js?v=1"></script>
  <form action="tm_get.php" method="get">
    City: <input type="text" name="city">
  <input type="submit">
</body>
</html>
