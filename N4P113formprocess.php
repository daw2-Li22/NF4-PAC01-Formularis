<html>
 <head>
  <title>Multipurpose Form</title>
  <style type="text/css">
  <!--
td {vertical-align: top;}
  -->
  </style>
 </head>
 <body>
  <form action="#" method="post">
   <table>
     <tr>
     <td>Select opciones<br/></td>
     <td>
      <select name="movie_type">
       <option value=""> <?php echo $_POST['opcion1']; ?></option>
       <option value=""><?php echo $_POST['opcion2']; ?></option>
       <option value=""><?php echo $_POST['opcion3']; ?></option>
       <option value=""><?php echo $_POST['opcion4']; ?></option>
       <option value=""><?php echo $_POST['opcion5']; ?></option>
      </select>
     </td>
    </tr>
   </table>
  </form>
 </body>
</html>
