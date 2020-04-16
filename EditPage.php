// if session = yes
<html>
  <head>
    <title> Pagina di Editing </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>
		<link rel="stylesheet" type="text/css" href="HomeStyle.css"/>
		<style>
    .EditDiv {
      width: 915px;
      position: absolute;
      top: 20%;
      left: 25%;
      border: 3px solid black;
      background-color: #cc0000;
      font-size: 26px;
      border-radius: 15px 50px;
    }
		</style>
  </head>
  <body>
    <div id="Titolo_e_Menu" class="Redground Titolo_e_Menu">
			<b> <span style="margin-left: 31.2%"> La Divina Commedia </span>
			 <img src="res/Home.png" id="HomePage" name="HomePage" align="left" title="Pagina Iniziale" width="70px" height="70px" />
			</b>
		</div>
    <div id="EditingDiv" class="Redground EditDiv">
      <textarea id="txtArea" class="txtArea" rows="25" cols="80" style="font-size: 18px; margin-top: 20px; margin-left: 45px; margin-bottom: 20px; margin-right: 20px;"></textarea>
    </div>
    <div id="Toolbar" class="Redground Icone_Navigazione">
      <table style="font-size: 26px;">
        <tr style="border:1px solid black">
          <td style="border:1px solid black" align="center">
            <img src="res/Books.png" width="90px" height="90px" id="AccessCanti" title="Canti"/>
          </td>
        </tr>
        <tr style="border:1px solid black">
          <td style="border:1px solid black" align="center">
            <img src="res/Search.png" width="90px" height="90px" title="Cerca..."/>
          </td>
        </tr>
        <tr style="border:1px solid black">
          <td style="border:1px solid black" align="center">
            <img src="res/Comments.png" width="90px" height="90px" title="Commenti"/>
          </td>
        </tr>
        <tr style="border:1px solid black">
          <td style="border:1px solid black" align="center">
            <img src="res/Edit.png" width="90px" height="90px" title="Pagina Creatore"/>
          </td>
        </tr>
        <tr style="border:1px solid black">
          <td style="border:1px solid black" align="center">
            <img src="res/Home.png" width="90px" height="90px" id="HomePage1" title="Pagina Iniziale"/>
          </td>
        </tr>
      </table>
    </div>
  </body>
</html>

<script>
$("#AccessCanti").click(function() {
	window.location.href = "ListaCanti.html";
});
$("#HomePage").click(function() {
  window.location.href = "Home.html";
});
$("#HomePage1").click(function() {
  window.location.href = "Home.html";
});
</script>
